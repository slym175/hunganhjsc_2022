<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */
defined('ABSPATH') || exit;
get_header();
?>
    <main>
<?php $categoryParent_termid = 0;
$categoryParent = get_queried_object();
if ($categoryParent instanceof WP_Term) {
    $categoryParent_termid = $categoryParent->term_id;
}
$checkChildren = get_terms(array(
    'taxonomy' => 'product_cat',
    'orderby' => 'count',
    'hide_empty' => false,
    'parent' => $categoryParent_termid
));
?>
    <div class="">
        <div class="category-detail"><br>
            <!-- CÓ DANH MỤC COM -->
            <?php if (count($checkChildren) > 0) { ?>
                <div class="container">

                    <div class="category-info vh-content">
                        <div class="news-view" style="padding: 0;">
                            <div class="overview" align="justify">

                                <h2><?php echo get_field("site_title", 'option') ?></h2>
                                <?php
                                $id = get_field('site_file_mage', 'option');
                                if (isset($id) && $id):
                                    foreach ($id as $idItem) {
                                        ?>
                                        <div style="padding-bottom: 5px; padding-top: 3px;">
                                            <a>
                                                <?php echo wp_get_attachment_image($idItem, 'full', false, array('class' => 'width-311px')); ?>
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                                <h2><?= get_field('mua_hang_tu_hung_anh', 'option') ?></h2>
                                <p><?= get_field('skf_ngoc_anh_la_dai_ly_uy_quyen_skf_tai_viet_nam', 'option') ?></p>
                                <h2><?= get_field('tieu_de_ho_tro_bao_gia', 'option') ?></h2>
                                <p><?= get_field('dung_lo_ve_gia', 'option') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $category_products = array_column($checkChildren, 'term_id');
                echo do_shortcode('[st_category category_products="' . implode(',', $category_products) . '"]');
            } else {
                // compact "tên truền sang"=>giá trị truyền sang
                echo get_template_part('template-parts/product_cat/productInArchive', 'product', array('currentProductCat' => $categoryParent));
            } ?>
            <!-- KHÔNG CÓ DANH MỤC CON THÌ IN RA SẢN PHẨM CỦA DANH MỤC -->
        </div>
    </div>
    </main><?php get_footer();
?>