</main>
<footer>
    <div class="foot-top">
        <div class="hotline">
            <div class="container">
                <?php
                $skfChinhHang = get_field('bao_gia_vong_bi_skf_chinh_hang', 'option');
                if (isset($skfChinhHang)) {
                    ?>
                    <img class="lazyload" src="/wp-content/themes/hunganhjsc/assets/imgs/icons/icon-supportb90c.gif"
                         width="35" height="32">
                    <a href="" title="báo giá vòng bi SKF chính hãng"><?php echo $skfChinhHang ?></a> -
                <?php }
                ?>
                <span class="dot" style="margin-left: 5px; margin-top: -4px;">
                <span class="ping"></span>
                </span>
                <?php $phone = get_field('hotline', 'option');
                $phoneItem = explode(",", $phone);
                if (isset($phone)) { ?>
                    <?php foreach ($phoneItem as $k => $phone): ?>
                        <?= $k !== 0 ? '-' : '' ?><a href="tel:<?= $phone ?>"><?= $phone ?></a>
                    <?php endforeach; ?>

                <?php } ?>


                <?php $email = get_field('email', 'options');
                if (isset($email)) {
                    ?>
                    - Email: <a href="<?php echo $email ?>" rel="nofollow"><span
                                style="font-weight: 700;"><?php echo $email ?></span></a>
                <?php } ?>


            </div>
        </div>
        <div class="_ficons">
            <div class="container">
                <div class="row">
                    <?php $spChinhHang = get_field('sp_chinh_hang', 'option');
                    if (isset($spChinhHang)) {
                        foreach ($spChinhHang as $spChinhHangItem) {
                            ?>

                            <div class="col-sm-3 col-xs-6 col">
                                    <span class="icon">
                                        <img class="lazyload" src="<?php echo $spChinhHangItem['anh']['url'] ?>"
                                             width="28" height="28">
                                    </span>
                                <span class="text"
                                      style="font-weight: 500; font-size: 14px;  text-transform: uppercase;">
                                        <?php echo $spChinhHangItem['tieu_de'] ?>
                                    </span>
                            </div>
                        <?php }
                    } ?>

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
                        <?php }
                        ?>

                    <?php endif; ?>

                    <div class="info">
                        <?php
                        $phones = get_field("hotline", 'option');
                        $phoneItem = explode(",", $phones);
                        ?>
                        <a href="" title=""><span
                                    style="font-weight: 500; font-size: 14px; color: #000000; text-transform: uppercase;"><?php echo get_field("ngoc_anh_skf", 'option') ?></span></a>
                        <div>
                            <a href="#">
                                <span style="font-size: 12px; font-weight: 400; color: #000;"><?php echo get_field("authorzired", 'option') ?></span>
                            </a>
                            - <?php echo get_field("phan_phoi", 'option') ?>
                            Website: <strong><?php echo get_field("website", 'option') ?></strong> -
                            Email: <?php echo get_field("email", 'option') ?> <a href=""></a>
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
                                        rel="nofollow"><?php echo $chiNhanhItem['sdt'] ?></a> <br>
                            <?php endforeach;
                        endif; ?>
                    </div>

                    <span style="font-size: 11px; color: #000; font-weight: 300;">Kết nối với chúng tôi</span><br>

                    <?php $icons = get_field('icon', 'option');

                    if (isset($icons) && $icons):
                        foreach ($icons as $iconItem): ?>
                            <a href="<?php echo $iconItem['link']['url'] ?>">
                                <?php echo wp_get_attachment_image($iconItem['anh']['id'], 'full', false, array('class' => 'width-24px')); ?>
                            </a>
                        <?php endforeach;
                    endif; ?>
                    <br>
                    <?php $doiTac = get_field('doi_tac_du_an', 'option');
                    if (isset($doiTac)): ?>
                        Đối tác - Dự án:<br>
                        <a href=""><?php print_r($doiTac) ?></a>
                    <?php endif ?>
                    <br>
                    <?php $images = get_field('anh_chan_trang', 'option');
                    echo wp_get_attachment_image($images, 'medium', false, array('class' => 'width-img-footer', 'sizes' => 'width-12'));
                    ?>
                    <br>
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
                if (isset($terms)) {

                }
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
                <?php $contents = get_field('conten_footer', 'option');
                if (isset($contents)) { ?>
                    <span>
                    <?php echo $contents; ?>
                </span>
                <?php } ?>
            </div>
        </div>
    </div>
</footer>

<img alt="go to top" src="/wp-content/themes/hunganhjsc/assets/imgs/icon_gototop.png" width="36" height="36"
     id="scroll_top_icon"
     style="cursor:pointer; display:none; position:fixed; bottom:265px; right:15px"/>
<?php wp_footer() ?>
</body>