<?php if (isset($args) && $args): ?>
    <div class="container">
        <div>
            <div class=""
                 style="border-radius: 8px; border: 0px solid #eaeaea; padding: 25px; margin-bottom: 2px; background-image: linear-gradient(152deg, #002a3d 20%, #005995 50%, #00b6bc 86%); color:#fff">
                <?php if (isset($args['title']) && $args['title']): ?>
                    <h2 style="font-size: 18px;margin-bottom: 1rem;margin-top: 0"><span
                                style="font-weight: 700; color:#fff"><a style="color: #fff" href="javascript:void(0)">
                        <?= $args['title'] ?>
                    </a></span></h2>
                <?php endif; ?>
                <?php if (isset($args['images_logo']) && $args['images_logo']) {
                    $arr = explode(',', $args['images_logo']); ?>
                    <?php foreach ($arr as $key => $item) { ?>
                        <a href="javascript:void(0)" style="display: block; max-width: 300px"><?php echo wp_get_attachment_image($item, 'full', true) ?></a>
                    <?php } ?>
                <?php } ?>
                <?php if (isset($args['subtitle']) && $args['subtitle']) { ?>
                    <div style="line-height: 24px; font-size: 14px;" align="justify">
                        <?= $args['subtitle'] ?>
                    </div>
                <?php } ?>
                <?php if (isset($args['product_cat']) && $args['product_cat']) { $product_cats = explode(',', $args['product_cat']);?>
                    <h2 style="line-height: 22px; font-size: 14px; font-weight: 700; color:#fff">
                        <?php foreach ($product_cats as $k => $product_cat): echo ($k !== 0 ? '-' : '');
                            $item = get_term_by('term_id', $product_cat, 'product_cat');
                            $link = get_term_link($item, 'product_cat');
                            if (!$link || $link instanceof WP_Error) {
                                $link = 'javascript:void(0)';
                            }?>
                        <a href="<?= $link ?>" title="<?= $item->name ?>">
                            <span style="color:#fff; padding-right:5px"><?= $item->name ?></span>
                        </a>
                        <?php endforeach; ?>
                    </h2>
                <?php } ?>

                <?php if (isset($args['note']) && $args['note']): ?>
                    <p style="line-height: 22px; color:#fff"><?= $args['note'] ?></p>
                <?php endif; ?>
                <form class="form-inline" action="<?php home_url(); ?>">

                    <style>
                        @media (min-width: 768px) {
                            #form-search-main {
                                width: 340px;
                            }
                        }
                    </style>
                    <div class="input-group" id="form-search-main">
                        <input type="hidden" name="post_type" value="product">
                        <input class="form-control" placeholder="Nhập mã vòng bi cần tìm kiếm, ví dụ: 6205"
                               style="border-color:#c9c9c9;font-size: 12px; box-shadow: none;" name="s" type="text">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endif;