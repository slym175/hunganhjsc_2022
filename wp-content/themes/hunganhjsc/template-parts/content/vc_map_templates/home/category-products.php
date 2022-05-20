<?php
$category_list = get_terms(array(
    'taxonomy' => 'product_cat',
    'hide_empty' => true,
));
?>
<div class="list-category">
    <div class="container">
        <div class="row">
            <?php foreach ($category_list as $key => $item) {
                //lấy ảnh của category
                $thumbnail_id = get_term_meta($item->term_id, 'thumbnail_id', true);
                $image = wp_get_attachment_image($thumbnail_id, 'thumbnail', false, array('class' => 'width-50px')); 
                $link = get_term_link($item, 'product_cat');

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