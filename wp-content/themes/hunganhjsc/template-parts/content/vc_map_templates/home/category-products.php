<?php
$category_list = [];
$category_products = isset($args['category_products']) && $args['category_products'] ? $args['category_products'] : '';
if ($category_products) {
    $category_products = explode(',', $category_products);
    foreach ($category_products as $category_product) {
        $category_list[] = get_term_by('term_id', $category_product, 'product_cat');
    }
} else {

    $category_list = get_terms(array(
        'taxonomy' => 'product_cat',
        'hide_empty' => true,
        'parent' => 0
    ));
}
?>
<div class="list-category">
    <div class="container">
        <div class="row">
            <?php foreach ($category_list as $key => $item) {
                //lấy ảnh của category
                $thumbnail_id = get_term_meta($item->term_id, 'thumbnail_id', true);
                $image = wp_get_attachment_image($thumbnail_id, 'thumbnail', false, array('class' => 'width-50px'));
                $link = get_term_link($item, 'product_cat');
                if (!$link || $link instanceof WP_Error) {
                    $link = 'javascript:void(0)';
                }
                ?>

                <div class="col-sm-4 col-xs-6 cat" style="text-transform: uppercase;">
                    <a href="<?php echo $link ?>" title="Vòng bi SKF chính hãng">
                        <span class="img">
                            <?php echo $image ?>
                        </span>
                        <span class="txt"><?php echo $item->name ?></span>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>