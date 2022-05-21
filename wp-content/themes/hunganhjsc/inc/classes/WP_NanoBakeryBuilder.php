<?php if (!function_exists('WP_NanoBakeryBuilder')) {
    class WP_NanoBakeryBuilder
    {
        public function __construct()
        {
            try {
                if (function_exists('vc_add_shortcode_param')) {
                    foreach ($this->add_custom_shortcode_param() as $param) {
                        vc_add_shortcode_param($param, function ($settings, $value) use ($param) {
                            ob_start();
                            get_template_part('inc/vc_map_types/views/' . $param, '', ['setting' => $settings, 'value' => $value]);
                            $cont = ob_get_contents();
                            ob_clean();
                            ob_end_flush();
                            return $cont;
                        }, _S_THEME_URL_URI . '/inc/vc_map_types/scripts/' . $param . '.js');
                    }
                }
                $this->render_shortcode();
                $this->render_vc_template();
            } catch (Exception $e) {
                print_r($e);
                die();
            }
        }

        private function render_shortcode()
        {
            foreach ($this->render_shortcode_atts_view() as $shortcode => $view) {
                add_shortcode($shortcode, function ($attr, $content = null) use ($view) {
                    $array = [];
                    foreach ($view['attr'] as $k => $a) {
                        $default = '';
                        if ($k == 'content') $default = $content;
                        $array[$k] = isset($attr[$k]) && $attr[$k] ? $attr[$k] : $default;
                    }
                    $attr = shortcode_atts($array, $attr);
                    ob_start();
                    get_template_part($view['view'], '', $attr);
                    $cont = ob_get_contents();
                    ob_clean();
                    ob_end_flush();
                    return $cont;
                });
            }
        }

        private function render_vc_template()
        {
            add_action('vc_before_init', function () {
                foreach ($this->render_shortcode_atts_view() as $shortcode => $view) {
                    $params = [];
                    foreach ($view['attr'] as $k => $a) {
                        $params[] = array('param_name' => $k) + $a;
                    }
                    if (function_exists('vc_map')) {
                        vc_map(['name' => esc_html__(isset($view['name']) && $view['name'] ? $view['name'] : 'Shortcode: ' . $shortcode, _S_TEXTDOMAIN), 'base' => $shortcode, 'icon' => 'icon-st', 'category' => _S_TEXTDOMAIN, 'params' => $params]);
                    }
                }
            });
        }

        private function get_list_tax_selector($tax, $args = array())
        {
            $args = array_merge(
                array(
                    'taxonomy' => $tax,
                    'hide_empty' => false,
                ),
                $args
            );
            $taxonomies = get_terms($args);
            if (!$taxonomies) return [];
            foreach ($taxonomies as $item) {
                $result[$item->name] = $item->term_id;
            }
            return $result;
        }

        private function get_list_post_selector($posttype = 'post')
        {
            if ($posttype === 'wpforms') {
                if (!function_exists('wpforms')) return [];
                $posts = wpforms()->form->get();
                return wp_list_pluck($posts, 'ID', 'post_title');
            }
            $result = array();
            $posts = get_posts(array('post_type' => $posttype, 'fields' => 'ids', 'posts_per_page' => -1));
            if (!$posts) return [];
            foreach ($posts as $item) {
                $result[get_the_title($item)] = $item;
            }
            return $result;
        }

        public function render_shortcode_atts_view()
        {
            return array(
                'st_slide' => array(
                    'name' => 'Slide trang chủ',
                    'attr' => array(
                        'slide_items' => array(
                            'type' => 'attach_images',
                            'heading' => __('Slide', _S_TEXTDOMAIN)
                        ),
                    ),
                    'view' => 'template-parts/content/vc_map_templates/home/slide'
                ),
                'st_category' => array(
                    'name' => 'Danh mục sản phẩm',
                    'attr' => array(
                        'category_products' => array(
                            'type' => 'dropdown_select2',
                            'value' => $this->get_list_tax_selector('product_cat', array('parent' => 0)),
                            'heading' => __('Category', _S_TEXTDOMAIN),
                            'multiple' => true
                        ),
                    ),
                    'view' => 'template-parts/content/vc_map_templates/home/category-products'
                ),
                'st_search_product' => array(
                    'name' => 'Tìm kiếm sản phẩm',
                    'attr' => array(
                        'title' => array(
                            'type' => 'textfield',
                            'heading' => __('Title', _S_TEXTDOMAIN)
                        ),
                        'images_logo' => array(
                            'type' => 'attach_images',
                            'heading' => __('Ảnh thương hiệu', _S_TEXTDOMAIN)
                        ),
                        'subtitle' => array(
                            'type' => 'textfield',
                            'heading' => __('Mô tả', _S_TEXTDOMAIN)
                        ),
                        'note' => array(
                            'type' => 'textfield',
                            'heading' => __('Ghi chú', _S_TEXTDOMAIN)
                        ),
                        'product_cat' => array(
                            'type' => 'dropdown_select2',
                            'value' => $this->get_list_tax_selector('product_cat', array('parent' => 0)),
                            'heading' => __('Danh mục sản phẩm', _S_TEXTDOMAIN),
                            'multiple' => true
                        )
                    ),
                    'view' => 'template-parts/content/vc_map_templates/home/search'
                ),
                'st_whybox' => array(
                    'name' => 'Đại lý ủy quyền',
                    'attr' => array(
                        'title' => array(
                            'type' => 'textfield',
                            'heading' => __('Tiêu đề', _S_TEXTDOMAIN)
                        ),

                        'whybox_list' => array(
                            'type' => 'param_group',
                            'heading' => __('Danh sách', _S_TEXTDOMAIN),
                            'params' => [
                                [
                                    'type' => 'attach_image',
                                    'heading' => __('Ảnh đại diện', _S_TEXTDOMAIN),
                                    'param_name' => 'avatar'
                                ],
                                [
                                    "type" => "textfield",
                                    "heading" => __("Tiêu đề", _S_TEXTDOMAIN),
                                    "param_name" => "title",
                                ],
                                [
                                    "type" => "textarea",
                                    "heading" => __("Mô tả", _S_TEXTDOMAIN),
                                    "param_name" => "description",
                                ],
                                [
                                    "type" => "vc_link",
                                    "heading" => __("Liên kết", _S_TEXTDOMAIN),
                                    "param_name" => "link",
                                ]
                            ],
                        ),
                    ),
                    'view' => 'template-parts/content/vc_map_templates/home/whybox'
                ),
                'st_baochi_box' => array(
                    'name' => 'Báo chí',
                    'attr' => array(
                        'newspapers' => array(
                            'type' => 'textfield',
                            'heading' => __('Báo chí', _S_TEXTDOMAIN)
                        ),
                        'newspapers_list' => array(
                            'type' => 'param_group',
                            'heading' => __('Danh sách', _S_TEXTDOMAIN),
                            'params' => [
                                [
                                    'type' => 'attach_images',
                                    'heading' => __('Ảnh đại diện', _S_TEXTDOMAIN),
                                    'param_name' => 'avatar'
                                ],
                                [
                                    "type" => "vc_link",
                                    "heading" => __("Liên kết", _S_TEXTDOMAIN),
                                    "param_name" => "link",
                                ]
                            ],
                        ),
                    ),
                    'view' => 'template-parts/content/vc_map_templates/home/newspapers'
                ),
                'st_content_mid' => array(
                    'name' => 'Bài viết - Tin tức',
                    'attr' => array(
                        'title' => array(
                            'type' => 'textfield',
                            'heading' => __('Bài viết - Tin tức', _S_TEXTDOMAIN)
                        ),
                        'link' => array(
                            'type' => 'vc_link',
                            'heading' => __('Liên kết', _S_TEXTDOMAIN)
                        ),
                        'news_section' => array(
                            'type' => 'dropdown_select2',
                            'value' => $this->get_list_post_selector(),
                            'heading' => __('Bài viết hiển thị', _S_TEXTDOMAIN),
                            'multiple' => true
                        ),
                        'video_heading' => array(
                            'type' => 'textfield',
                            'heading' => __('Video clip', _S_TEXTDOMAIN)
                        ),
                        'video_title' => array(
                            'type' => 'textfield',
                            'heading' => __('Tiêu đề video', _S_TEXTDOMAIN)
                        ),
                        'video_image' => array(
                            'type' => 'attach_image',
                            'heading' => __('Ảnh đại diện video', _S_TEXTDOMAIN)
                        ),
                        'video_url' => array(
                            'type' => 'textfield',
                            'heading' => __('Link video', _S_TEXTDOMAIN)
                        )
                    ),
                    'view' => 'template-parts/content/vc_map_templates/home/news-section'
                ),
                'st_introduce' => array(
                    'name' => 'Giới thiệu',
                    'attr' => array(
                        'title' => array(
                            'type' => 'textfield',
                            'heading' => __('Tiêu đề', _S_TEXTDOMAIN)
                        ),
                        'general' => array(
                            'type' => 'param_group',
                            'heading' => __('Giới thiệu chung', _S_TEXTDOMAIN),
                            'params' => [
                                [
                                    'type' => 'attach_images',
                                    'heading' => __('Ảnh', _S_TEXTDOMAIN),
                                    'param_name' => 'avatar'
                                ],
                                [
                                    'type' => 'textfield',
                                    'heading' => __('Tiêu đề', _S_TEXTDOMAIN),
                                    'param_name' => 'title-paragraph'
                                ],
                                [
                                    "type" => "textarea",
                                    "heading" => __("Mô tả", _S_TEXTDOMAIN),
                                    "param_name" => "description",
                                ]
                            ],
                        ),
                    ),
                    'view' => 'template-parts/content/vc_map_templates/introduce/section1'
                ),
                'st_contact' => array(
                    'name' => 'Liên hệ',
                    'attr' => array(
                        'thanks' => array(
                            'type' => 'textfield',
                            'heading' => __('Cảm ơn', _S_TEXTDOMAIN)
                        ),
                        'images' => array(
                            'type' => 'attach_images',
                            'heading' => __('Ảnh', _S_TEXTDOMAIN)
                        ),
                        'title' => array(
                            'type' => 'textfield',
                            'heading' => __('Tiêu đề', _S_TEXTDOMAIN)
                        ),
                        'text1' => array(
                            'type' => 'textfield',
                            'heading' => __('Tiêu đề', _S_TEXTDOMAIN)
                        ),
                    ),
                    'view' => 'template-parts/content/vc_map_templates/contact/main'
                ),
                'st_section_docs' => array(
                    'name' => 'Danh mục',
                    'attr' => array(),
                    'view' => 'template-parts/content/vc_map_templates/docs/section1'
                )
            );
        }

        public function add_custom_shortcode_param()
        {
            return array('dropdown_select2');
        }
    }

    new WP_NanoBakeryBuilder();
}
