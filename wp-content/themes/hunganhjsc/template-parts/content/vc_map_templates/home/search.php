<div class="container">
    <div>
        <?php if (isset($args['title']) && $args['title']) {
        ?>
            <div class="" style="border-radius: 8px; border: 0px solid #eaeaea; padding: 25px; margin-bottom: 2px; background-image: linear-gradient(152deg, #002a3d 20%, #005995 50%, #00b6bc 86%); color:#fff">
                <h1>
                    <span style="font-weight: 700; color:#fff"><a href="" title="SKF Ngọc Anh - Đại lý ủy quyền SKF"><?php print_r($args['title'])  ?><span style="color:#ffffff"></span></a></span>
                </h1><br>
            <?php } ?>
            <?php if (isset($args['images_logo']) && $args['images_logo']) {
                $arr = explode(',', $args['images_logo']); ?>
                <?php foreach ($arr as $key => $item) { ?>
                    <a href=""><?php echo wp_get_attachment_image($item, 'medium', true) ?></a>
                <?php } ?>
            <?php } ?>
            <?php if (isset($args['subtitle']) && $args['subtitle']) { ?>
                <div style="line-height: 24px; font-size: 14px;" align="justify">
                    <?php print_r($args['subtitle']) ?>
                </div>
            <?php } ?>
            <?php if (isset($args['product_cat']) && $args['product_cat']) { ?>
                <?php print_r($args['product_cat']) ?>F</span></a>
                </h2> -->
            <?php } ?>

            <p style="line-height: 22px; color:#fff">Vui lòng sử dụng chức năng tìm kiếm để khám phá hàng ngàn
                sản phẩm SKF chính hãng trên website
                NGOCANH.COM</p>


            <!--search-->


            <form class="form-inline" action="<?php home_url(); ?>">

                <style>
                    @media(min-width: 768px) {
                        #form-search-main {
                            width: 340px;
                        }
                    }
                </style>
                <div class="input-group" id="form-search-main">
                    <input type="hidden" name="post_type" value="product">
                    <input class="form-control" placeholder="Nhập mã vòng bi cần tìm kiếm, ví dụ: 6205" style="border-color:#c9c9c9;font-size: 12px; box-shadow: none;" name="s" type="text">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>

            </form>
            <!--search-->
            </div>
    </div>
</div>