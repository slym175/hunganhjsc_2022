</main>
<footer>
    <div class="foot-top">
        <div class="hotline">
            <div class="container">
                <img class="lazyload" src="/wp-content/themes/hunganhjsc/assets/imgs/icons/icon-supportb90c.gif"
                     width="35" height="32">
                <a href="" title="báo giá vòng bi SKF chính hãng">BÁO GIÁ VÒNG BI SKF CHÍNH HÃNG</a> -
                <span class="dot" style="margin-left: 5px; margin-top: -4px;">
                    <span class="ping"></span>
                </span>
                Hotline: <a href="tel:096 123 8558" title="báo giá vòng bi SKF chính hãng"><span
                            style="font-weight: 700;">096 1238558</span></a> -
                <a href="tel:033 999 5999" title="báo giá vòng bi SKF chính hãng"><span style="font-weight: 700;">033 999 5999</span></a>-
                Email: <a href="mailto:info@ngocanh.com" title="báo giá vòng bi SKF chính hãng" rel="nofollow"><span
                            style="font-weight: 700;">info@ngocanh.com</span></a>
            </div>
        </div>
        <div class="_ficons">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-6 col">
                        <span class="icon"><img class="lazyload"
                                                src="<?php echo get_theme_file_uri('/assets/imgs/icons/package.svg') ?> "
                                                title="vòng bi skf chính hãng" alt="vòng bi skf chính hãng" width="28"
                                                height="28"></span>
                        <span class="text" style="font-weight: 500; font-size: 14px;  text-transform: uppercase;">SP
                            chính hãng Đầy đủ CO, CQ</span>
                    </div>
                    <div class="col-sm-3 col-xs-6 col">
                        <span class="icon"><img class="lazyload"
                                                src=" <?php echo get_theme_file_uri('/assets/imgs/icons/delivery.svg') ?> "
                                                title="giao vòng bi tận nơi" alt="giao vòng bi tận nơi" width="36"
                                                height="20"></span>
                        <span class="text" style="font-weight: 500; font-size: 14px;  text-transform: uppercase;">giao
                            hàng toàn
                            quốc 24/7</span>
                    </div>
                    <div class="col-sm-3 col-xs-6 col">
                        <span class="icon"><img class="lazyload"
                                                src="<?php echo get_theme_file_uri('/assets/imgs/icons/recycle.svg') ?>"
                                                title="bảo hành vòng bi linh hoạt" alt="bảo hành vòng bi linh hoạt"
                                                width="30"
                                                height="30"></span>
                        [14/05/2022 08:20:31] Phạm Tiến Doanh: <span class="text"
                                                                     style="font-weight: 500; font-size: 14px;  text-transform: uppercase;">bảo
                            hành chính
                            hãng</span>
                    </div>
                    <div class="col-sm-3 col-xs-6 col">
                        <span class="icon"><img class="lazyload"
                                                src="<?php echo get_theme_file_uri('/assets/imgs/icons/call-center.svg') ?>"
                                                title="Hỗ trợ kỹ thuật vòng bi 24/7" alt="Hỗ trợ kỹ thuật vòng bi 24/7"
                                                width="30"
                                                height="30"></span>
                        <span class="text" style="font-weight: 500; font-size: 14px;  text-transform: uppercase;">hỗ
                            trợ kỹ thuật báo giá 24/7</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="foot-midd">
        <!--k2-->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-info">
                    <strong class="name" style="color: #0059a5"><?php echo get_field("site_title", 'option') ?></strong>
                    <?php if (isset($idItem) && $idItem): ?>
                        <div style="padding-bottom: 5px; padding-top: 3px;">
                            <a>
                                <?php echo wp_get_attachment_image($idItem, 'full', false, array('class' => 'width-311px')); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="info">
                        <?php
                        $phones = get_field("hotline", 'option');
                        $phoneItem = explode(",", $phones);
                        ?>
                        <a href="dai-ly-uy-quyen-vong-bi-skf.html" title="Đại lý ủy quyền vòng bi chính hãng"><span
                                    style="font-weight: 500; font-size: 14px; color: #000000; text-transform: uppercase;"><?php echo get_field("ngoc_anh_skf", 'option') ?></span></a>
                        <div>
                            <a href="#">
                                <span style="font-size: 12px; font-weight: 400; color: #000;"><?php echo get_field("authorzired", 'option') ?></span>
                            </a>
                            - <?php echo get_field("phan_phoi", 'option') ?>
                            Website: <strong><?php echo get_field("authorzired", 'option') ?></strong> -
                            Email: <a href=""></a>
                        </div>
                        <div>
                            Hotline:
                            <?php foreach ($phoneItem as $k => $phone): ?>
                                <?= $k !== 0 ? '-' : '' ?><a href="tel:<?= $phone ?>"><?= $phone ?></a>
                            <?php endforeach; ?>
                        </div>
                        <?php
                        $chiNhanh = get_field('chi_nhanh', 'option');
                        if ($chiNhanh):
                            foreach ($chiNhanh as $chiNhanhItem): ?>
                                <strong><?php echo $chiNhanhItem['ten'] ?></strong><br>
                                <span style="font-size: 12px; font-weight: 400; color: #000;">
                                <?php echo $chiNhanhItem['dia_chi'] ?>
                            </span><br>
                                Tel: <a href="tel:<?php echo $chiNhanhItem['sdt'] ?>"
                                        rel="nofollow"><?php echo $chiNhanhItem['sdt'] ?></a>
                            <?php endforeach;
                        endif; ?>
                    </div>

                    <span style="font-size: 11px; color: #000; font-weight: 300;">Kết nối với chúng tôi</span>
                    <?php $idImageS = get_field('image_doi_tac_du_an', 'option');
                    if ($idImageS): ?>
                        <a href="http://online.gov.vn/Home/WebDetails/54138" target="_blank" rel="nofollow"
                           style="width:125px">
                            <?php echo wp_get_attachment_image($idImageS, 'full', false, array('class' => 'width-125px', 'sizes' => 'width-12')) ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="col-md-7 menus">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col 1" style="color: #0059a5">
                            <?php echo get_template_part('template-parts/menu/menu', 've-chung-toi') ?>
                        </div>
                        <div class="col-md-4 col-sm-4 col 2" style="color: #0059a5">
                            <?php echo get_template_part('template-parts/menu/menu', 'san-pham-skf') ?>
                        </div>
                        <div class="col-md-4 col-sm-4 col 3" style="color: #0059a5">
                            <?php echo get_template_part('template-parts/menu/menu', 'thong-tin-chung') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-adwords-seo">
        <div class="container">
            <div class="adwords-content" style="line-height: 20px; font-size: 11px;">
                <i class="glyphicon glyphicon-bookmark"></i> Hot keys:
                <?php $terms = get_terms(array(
                    'taxonomy' => 'product_tag',
                    'hide_empty' => false,
                ));

                foreach ($terms as $termItem) {
                    ?>
                    <?php $linkTag = get_term_link($termItem); ?>
                    <a href="<?php echo $linkTag ?> "
                       title="<?php echo $termItem->name ?>"><?php echo $termItem->name ?></a>
                <?php } ?>

            </div>
        </div>
    </div>
    <div class="foot-btm">
        <div class="copyright" style="font-size:11px; color:#5f5f5f">
            <div class="container">

                © Bản quyền thuộc <a href="index.html" title="Đại lý ủy quyền SKF">SKF NGỌC ANH</a>. ® All rights
                reserved - Vui lòng không sao chép nội dung khi không được sự đồng ý của chúng tôi.


                NGOCANH.COM - Đại lý ủy quyền vòng bi bạc đạn SKF chính hãng - <a title="SKF Việt Nam"
                                                                                  href="https://www.skf.com/vn"
                                                                                  target="_blank" rel="nofollow"><span
                            style="color:#5f5f5f">SKF
                        Authorized Distributor</span></a> - Phân phối các sản phẩm SKF chính hãng tại Việt Nam.
                <img alt="SKF chính hãng" src="./assets/imgs/icons/v.png" width="17" height="11"
                     style="padding-right: 6px;">
                <span style="font-weight: 300">Để tránh mua phải vòng bi SKF giả (fake) kém chất lượng. Cách tốt
                    nhất để đảm bảo nguồn gốc của <a href="san-pham/vong-bi-skf.html"
                                                     title="Vòng bi SKF, bạc đạn SKF chính hãng">vòng bi SKF chính hãng</a> là mua từ các đại lý
                    ủy quyền của SKF | <a href="https://www.skf.com/vn/organisation/brand-protection" target="_blank"
                                          rel="nofollow"><strong>skf.com/genuine</strong></a></span>

            </div>
        </div>
    </div>
</footer>

<!--go to top-->
<img alt="go to top" src="/wp-content/themes/hunganhjsc/assets/imgs/icon_gototop.png" width="36" height="36"
     id="scroll_top_icon"
     style="cursor:pointer; display:none; position:fixed; bottom:265px; right:15px"/>


<?php wp_footer() ?>
</body>