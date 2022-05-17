<div class="container">
    <div>
        <?php if (isset($args['title']) && $args['title']) {
        ?>
        <div class="" style="border-radius: 8px; border: 0px solid #eaeaea; padding: 25px; margin-bottom: 2px; background-image: linear-gradient(152deg, #002a3d 20%, #005995 50%, #00b6bc 86%); color:#fff">
            <h1>
                <span style="font-weight: 700; color:#ffffff"><a href="" title="SKF Ngọc Anh - Đại lý ủy quyền SKF"><?php print_r($args['title'])  ?><span style="color:#ffffff"></span></a></span>
            </h1>
        <?php } ?>
        <?php if (isset($args['images_logo']) && $args['images_logo']) {
            $arr = explode(',', $args['images_logo']); ?>
            <?php foreach ($arr as $key => $item) { ?>
                <a href=""><?php echo wp_get_attachment_image($item, 'small-thumbnail', true) ?></a>
        <?php } ?>
        <?php } ?>
        <?php if (isset($args['subtitle']) && $args['subtitle']) { ?>
            <div style="line-height: 24px; font-size: 14px;" align="justify">
                <?php print_r($args['subtitle']) ?>
            </div>
        <?php } ?>
        <?php if (isset($args['product_cat']) && $args['product_cat']) { ?>
            <?php print_r($args['product_cat']) ?>
            <!-- <h2 style="line-height: 22px; font-size: 14px; font-weight: 700; color:#fff">
                    <a href="san-pham/vong-bi-skf.html" title="Vòng bi SKF">
                        <span style="color:#fff; padding-right:5px">Vòng bi SKF</span></a>
                    - <a href="san-pham/goi-do-skf.html" title="Gối đỡ SKF"><span style="color:#fff; padding:5px">Gối đỡ SKF</span></a> - <a href="san-pham/mo-boi-tron-SKF.html" title="Mỡ bôi trơn SKF"><span style="color:#fff; padding:5px">Mỡ bôi trơn SKF</span></a> - <a href="san-pham/vong-bi-xe-may.html" title="Vòng bi xe máy"><span style="color:#fff; padding:5px">Vòng bi xe máy</span></a> -
                    <a href="san-pham/vong-bi-xe-tai.html" title="Vòng bi ô tô"><span style="color:#fff; padding:5px">Vòng bi ô tô</span></a> -

                    <a href="san-pham/phot-chan-skf.html" title="Phớt chặn dầu SKF"><span style="color:#fff; padding:5px">Phớt chặn dầu SKF</span></a>
                    - <a href="day-dai-SKF-chinh-hang.html" title="Dây đai SKF"><span style="color:#fff; padding:5px">Dây đai SKF</span></a> - <a href="xich-tai-skf.html" title="Xích tải SKF"><span style="color:#fff; padding:5px">Xích tải SKF</span></a>
                    - <a href="san-pham/dung-cu-skf.html" title="Dụng cụ bảo trì SKF"><span style="color:#fff; padding-left:5px">Dụng cụ bảo trì SKF</span></a>
                </h2> -->
        <?php } ?>

<p style="line-height: 22px; color:#fff">Vui lòng sử dụng chức năng tìm kiếm để khám phá hàng ngàn
    sản phẩm SKF chính hãng trên website
    NGOCANH.COM</p>


<!--search-->


<form class="form-inline" action="https://ngocanh.com/tim-kiem.html">

    <style>
        @media(min-width: 768px) {
            #form-search-main {
                width: 340px;
            }
        }
    </style>
    <div class="input-group" id="form-search-main">
        <input class="form-control" placeholder="Nhập mã vòng bi cần tìm kiếm, ví dụ: 6205" style="border-color:#c9c9c9;font-size: 12px; box-shadow: none;" name="q" type="text">
        <div class="input-group-btn">
            <button class="btn btn-default">
                <i class="glyphicon glyphicon-search"></i>
            </button>
        </div>
    </div>

</form>


<!--search-->
</div>
</div>
</div>