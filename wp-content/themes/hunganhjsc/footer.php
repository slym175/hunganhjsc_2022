 <footer>
    <div class="foot-top">

        <div class="hotline">

            <div class="container"><img class="lazyload"
                    src="<?php echo get_theme_file_uri('/assets/imgs/icons/icon-supportb90c.gif')?>"
                    alt="Báo giá vòng bi SKF" width="35" height="32"> <a href="bao-gia-vong-bi-skf-chinh-hang.html"
                    title="báo giá vòng bi SKF chính hãng">BÁO GIÁ VÒNG
                    BI SKF CHÍNH HÃNG</a> - <span class="dot" style="margin-left: 5px; margin-top: -4px;"><span
                        class="ping"></span></span>Hotline: <a href="tel:096 123 8558"
                    title="báo giá vòng bi SKF chính hãng" rel="nofollow"><span style="font-weight: 700;">096 123
                        8558</span></a> - <a href="tel:033 999 5999" title="báo giá vòng bi SKF chính hãng"
                    rel="nofollow"><span style="font-weight: 700;">033 999 5999</span></a>
                -
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
                                title="giao vòng bi tận nơi" alt="giao vòng bi tận nơi" width="36" height="20"></span>
                        <span class="text" style="font-weight: 500; font-size: 14px;  text-transform: uppercase;">giao
                            hàng toàn
                            quốc 24/7</span>
                    </div>
                    <div class="col-sm-3 col-xs-6 col">
                        <span class="icon"><img class="lazyload"
                                src="<?php echo get_theme_file_uri('/assets/imgs/icons/recycle.svg') ?>"
                                title="bảo hành vòng bi linh hoạt" alt="bảo hành vòng bi linh hoạt" width="30"
                                height="30"></span>
                        [14/05/2022 08:20:31] Phạm Tiến Doanh: <span class="text"
                            style="font-weight: 500; font-size: 14px;  text-transform: uppercase;">bảo
                            hành chính
                            hãng</span>
                    </div>
                    <div class="col-sm-3 col-xs-6 col">
                        <span class="icon"><img class="lazyload"
                                src="<?php echo get_theme_file_uri('/assets/imgs/icons/call-center.svg') ?>"
                                title="Hỗ trợ kỹ thuật vòng bi 24/7" alt="Hỗ trợ kỹ thuật vòng bi 24/7" width="30"
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
                    <strong class="name" style="color: #0059a5"><?php echo get_field("site_title",'option') ?></strong>
                    <div style="padding-bottom: 5px; padding-top: 3px;">
                        <?php 
                            $idImage = get_field('site_file_mage','option');
                            foreach($idImage as $key=>$idItem ){
                            }
                        ?>

                        <a href="dai-ly-uy-quyen-vong-bi-skf.html">
                            <img class="lazyload" src="<?php echo wp_get_attachment_image($idItem,'full') ?>
                        </a>
                    </div>


                    <div class=" info">
                            <?php
                        $phones = get_field("hotline",'option');
                        $phoneItem = explode(",", $phones);

                        ?>
                            <a href="dai-ly-uy-quyen-vong-bi-skf.html" title="Đại lý ủy quyền vòng bi chính hãng"><span
                                    style="font-weight: 500; font-size: 14px; color: #000000; text-transform: uppercase;"><?php echo get_field("ngoc_anh_skf",'option') ?></span></a>
                            <br>
                            <a title="SKF Authorized Distributor - SKF Việt Nam"
                                href="https://www.skf.com/vn/support/find-a-distributor" target="_blank"
                                rel="nofollow"><span
                                    style="font-size: 12px; font-weight: 400; color: #000;"><?php echo get_field("authorzired",'option') ?></span></a>
                            - <?php echo get_field("phan_phoi",'option') ?>
                            Website: <strong><?php echo get_field("authorzired",'option') ?></strong> - Email: <a
                                href="mailto:info@ngocanh.com" target="_top" rel="nofollow">info@ngocanh.com</a>
                            <br>
                            Hotline: <a href="tel:<?php echo $phoneItem[0] ?>" title="báo giá vòng bi SKF chính hãng"
                                rel="nofollow"><?php echo $phoneItem[0] ?></a> - <a
                                href="tel:<?php echo $phoneItem[1] ?>" title="báo giá vòng bi SKF chính hãng"
                                rel="nofollow"><?php echo $phoneItem[1] ?></a> - <a
                                href="tel:<?php echo $phoneItem[2] ?>" title="báo giá vòng bi SKF chính hãng"
                                rel="nofollow"><?php echo $phoneItem[2] ?></a>
                            <?php 
                                $chiNhanh =  get_field('chi_nhanh','option') ;
                                print_r($chiNhanh);
                                foreach ($chiNhanh as $chiNhanhItem){?>
                                     [ <strong>$chiNhanhItem->name</strong> ]
                                    
                               <?php }
                                
                            ?>


                            <span style="font-size: 12px; font-weight: 400; color: #000;">
                                <br>
                                    LK 01.10, Liền kề Tổ 9 Mỗ Lao,
                                    Phường Mộ Lao, Hà Đông, Hà Nội
                            </span>
                            <br>
                            Tel: <a href="tel:024 85 865 866" rel="nofollow">(024) 85 865 866</a>
                            <br>
                            [ <strong>VP Quảng Ninh</strong> ]
                            <span style="font-size: 12px; font-weight: 400; color: #000;">D908 - Khu đô thị MonBay,
                                Phường Hồng Hải, Hạ Long, Quảng Ninh</span>
                            Tel: <a href="tel:02036559395" rel="nofollow">(0203) 6 559 395</a><br>
                    </div>

                    <span style="font-size: 11px; color: #000; font-weight: 300;">Kết nối với chúng
                        tôi</span>
                    <div class="social-icons" style="padding: 5px 0 0;">
                        <?php  $idIconImages = get_field('icon_mang_xa_hoi','option');
                            foreach ($idIconImages as $idIconImagesItem){
                               echo wp_get_attachment_image($idIconImagesItem,'full', false ,array( 'class' => 'width-15px', 'sizes' => 'width-15'));
                            }
                        ?>
                    </div>

                    <?php 
                            $idImageS = get_field('image_doi_tac_du_an','option');
                    ?>
                    <a href="http://online.gov.vn/Home/WebDetails/54138" target="_blank" rel="nofollow"
                        style="width:125px">
                        <?php echo wp_get_attachment_image($idImageS,'full', false ,array( 'class' => 'width-125px', 'sizes' => 'width-12')) ?>
                    </a>
                </div>
                <div class="col-md-7 menus">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col 1" style="color: #0059a5">
                            <?php echo get_template_part('template-parts/menu/menu', 've-chung-toi')  ?>
                        </div>
                        <div class="col-md-4 col-sm-4 col 2" style="color: #0059a5">
                            <?php echo get_template_part('template-parts/menu/menu', 'san-pham-skf')  ?>

                        </div>

                        <div class="col-md-4 col-sm-4 col 3" style="color: #0059a5">
                            <?php echo get_template_part('template-parts/menu/menu', 'thong-tin-chung')  ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--k2-->

    </div>
    <div class="footer-adwords-seo">
        <div class="container">
            <div class="adwords-content" style="line-height: 20px; font-size: 11px;">
                <i class="glyphicon glyphicon-bookmark"></i> Hot keys:

                <a href="san-pham/vong-bi-cau.html" title="Vòng bi cầu">Vòng bi cầu</a>
                [14/05/2022 08:20:33] Phạm Tiến Doanh: <a href="san-pham/vong-bi-con.html" title="Vòng bi côn">Vòng bi
                    côn</a>
                <a href="san-pham/vong-bi-tang-trong.html" title="Vòng bi tang trống">Vòng bi tang trống</a>
                <a href="san-pham/vong-bi-tu-lua.html" title="Vòng bi đỡ tự lựa">Vòng bi đỡ tự lựa</a>
                <a href="san-pham/vong-bi-dua-do.html" title="Vòng bi đũa đỡ">Vòng bi đũa đỡ</a>

                <a href="san-pham/vong-bi-chan.html" title="Vòng bi chặn">Vòng bi chặn</a>
                <a href="san-pham/vong-bi-do-chan.html" title="Vòng bi đỡ chặn">Vòng bi đỡ chặn</a>
                <a href="san-pham/vong-bi-tiep-xuc-bon-diem.html" title="Vòng bi tiếp xúc bốn điểm">Vòng bi tiếp xúc
                    bốn điểm</a>
                <a href="san-pham/vong-bi-yar.html" title="Vòng bi YAR">Vòng bi YAR</a>
                <a href="san-pham/vong-bi-xe-may.html" title="Vòng bi xe máy">Vòng bi xe máy</a>
                <a href="san-pham/vong-bi-xe-tai.html" title="Vòng bi xe tải">Vòng bi xe tải</a>
                <a href="san-pham/goi-do-skf.html" title="Gối đỡ SKF">Gối đỡ SKF</a>

                <a href="san-pham/ong-lot-vong-bi.html" title="Măng xông - Ống lót">Măng xông - Ống lót</a>
                <a href="san-pham/mo-boi-tron-SKF.html" title="Mỡ chịu nhiệt SKF">Mỡ chịu nhiệt SKF</a>
                <a href="san-pham/dung-cu-skf.html" title="Dụng cụ bảo trì SKF">Dụng cụ bảo trì SKF</a>
                <a href="san-pham/phot-chan-skf.html" title="Phớt chặn dầu SKF">Phớt chặn dầu SKF</a>
                <a href="day-dai-SKF-chinh-hang.html" title="Dây đai SKF">Dây đai SKF</a>
                <a href="xich-tai-skf.html" title="Xích tải SKF">Xích tải SKF</a>
                <a href="san-pham/dung-cu-skf/May-gia-nhiet-vong-bi-SKF.html" title="Máy gia nhiệt vòng bi">Máy gia
                    nhiệt vòng bi</a>
                <a href="san-pham/dung-cu-skf/Bo-Cao-Vau-thao-lap-vong-bi.html" title="Vam cảo SKF">Vam cảo SKF</a>
                <a href="san-pham/dung-cu-skf/Dung-cu-thao-lap-vong-bi-TMFT-36.html" title="Bộ đóng vòng bi">Bộ đóng
                    vòng bi</a>

                <a href="tai-lieu-vong-bi/xuat-xu-vong-bi-skf.html" title="Xuất xứ vòng bi SKF">Xuất xứ vòng bi
                    SKF</a>

                <a href="kiem-tra-vong-bi-gia-skf.html" title="Phân biệt vòng bi SKF giả">Phân biệt vòng bi SKF
                    giả</a>
                <a href="catalogue.html" title="Catalogue SKF">Catalogue SKF</a>
                <a href="http://timvongbi.com/" title="Tra cứu vòng bi" target="_blank">Tra cứu vòng bi</a>
                <a href="dai-ly-uy-quyen-vong-bi-skf.html" title="Đại lý ủy quyền SKF">Đại lý ủy quyền SKF</a>
                <a href="san-pham/vong-bi-skf.html" title="Vòng bi SKF">Vòng bi SKF</a>
                [14/05/2022 08:20:34] Phạm Tiến Doanh: <a href="tai-lieu-vong-bi/SKF-Authenticate.html"
                    title="SKF Authenticate App">SKF Authenticate
                    App</a>
                <a href="top-skf-ngocanh.html" title="Top vòng bi SKF bán chạy">Top vòng bi SKF bán chạy</a>
                <a href="bao-chi-noi-ve-chung-toi/index.html" title="Báo chí nói về SKF Ngọc Anh">Báo chí nói về SKF
                    Ngọc Anh</a>
            </div>
        </div>
    </div>
    <div class="foot-btm">
        <div class="copyright" style="font-size:11px; color:#5f5f5f">
            <div class="container">

                © Bản quyền thuộc <a href="index.html" title="Đại lý ủy quyền SKF">SKF NGỌC ANH</a>. ® All rights
                reserved - Vui lòng không sao chép nội dung khi không được sự đồng ý của chúng tôi.


                NGOCANH.COM - Đại lý ủy quyền vòng bi bạc đạn SKF chính hãng - <a title="SKF Việt Nam"
                    href="https://www.skf.com/vn" target="_blank" rel="nofollow"><span style="color:#5f5f5f">SKF
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
<img alt="go to top" src="./assets/imgs/icon_gototop.png" width="36" height="36" id="scroll_top_icon"
    style="cursor:pointer; display:none; position:fixed; bottom:265px; right:15px" />

<?php wp_footer() ?>
</body>