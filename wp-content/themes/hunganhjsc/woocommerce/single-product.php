<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
global $product;
get_header(); ?>
    <div class="">
        <?php
        $terms = get_the_terms($product->id, 'product_cat');
        foreach ($terms as $nameCategory)
            // NOTICE! Understand what this does before running.
            $result = woocommerce_output_related_products();
        ?>
        <div class="category-detail">
            <div class="cat-filter head">
                <div class="container">
                    <div class="pull-left">
                        <h1 style="color: #005995;">
                            <a href="Vong-bi-SKF-608-2RSH.html"
                               title="Vòng bi SKF 608-2RSH chính hãng"><?php echo $product->name ?></a>
                        </h1>
                    </div>

                    <div class="pull-right">
						<span>
								<?php $phanPhoi = get_field('phan_phoi', 'option');
                                if (isset($phanPhoi)) {
                                    echo $phanPhoi . " - ";
                                }
                                ?>
			
								<a href="" title="Đại lý uỷ quyền SKF chính hãng">
									<?php
                                    $hungAnh = get_field('hung_anh_skf', 'option');
                                    if (isset($hungAnh)) {
                                        ?>
                                        <span>
													<span><?php echo $hungAnh ?></span>
												</span>
                                    <?php } ?>

                                    <?php
                                    $imageSite = get_field('site_file_mage', 'option');
                                    if (isset($imageSite)) {
                                        foreach ($imageSite as $imageSiteItem) {
                                            ?>
                                            <span style="padding-left: 6px;">
												<?php echo wp_get_attachment_image($imageSiteItem, 'full', false, array('class' => 'width-98px')) ?>
											</span>
                                        <?php }
                                    }
                                    {
                                        ?>

                                    <?php } ?>
								</a>
						</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="product-detail">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-8 left">

                            <div class="row top">
                                <div class="col-md-6" id="list-image">
                                    <?php
                                    /**
                                     * Hook: woocommerce_before_single_product_summary.
                                     *
                                     * @hooked woocommerce_show_product_sale_flash - 10
                                     * @hooked woocommerce_show_product_images - 20
                                     */
                                    do_action('woocommerce_before_single_product_summary');
                                    ?>
                                </div>
                                <div class="col-md-6">
									<span>
										<div class="name"><?php echo $product->name ?></div>
										<h2 class="stt-war" style="border: none; margin-bottom: 5px; font-size: 15px; margin: 0;
padding: 0 0 10px;">
											<div class="group">
												<a href="../vong-bi-cau.html"><span style="line-height: 19px;
font-size: 13px;"><?php echo $nameCategory->name ?></span></a>
											</div>
										</h2>
										<span class="btn btn-sm btn-default active">
											<?php $phanPhoi = get_field('san_pham_chinh_hang_skf', 'option');
                                            if (isset($phanPhoi)) {
                                                echo $phanPhoi;
                                            }
                                            ?>
										</span>
										<div class="clearfix"></div>
                                         <ul class="list-unstyled params">
											<li class="btt">Thông số sản phẩm</li>
										 </ul>
                                        <?php echo $product->short_description ?>
										<div class="stt-war">
											<div class="group">
												Giá bán:
												<a href="">
													Liên hệ để có giá tốt nhất tại thời điểm
												</a>
											</div>
										</div>
                                        <!--<div class="stt-war visible-xs visible-sm">-->
										<div class="stt-war visible-xs">
											<div class="group">
												<a href="">Hướng dẫn mua hàng</a>
											</div>
										</div>
									</span>
                                    <div class="cart-opts form-inline">
                                        <div class="input-group  input-group-sm ">
                                            <span class="input-group-addon">-</span>
                                            <input class="form-control text-center" size="2" type="text" value="1">
                                            <span class="input-group-addon">+</span>
                                        </div>
                                        <button class="btn btn-danger btn-sm add-to-cart ">
                                            <i class="glyphicon glyphicon-shopping-cart"></i>
                                            Đặt mua
                                        </button>
                                        <a href="../../huong-dan-mua-hang.html" title="hướng dẫn mua hàng"
                                           rel="nofollow" style="vertical-align: middle;font-size: 13px;"
                                           class=""><i class="glyphicon icon-hdm "></i>
                                            Hướng dẫn mua hàng</a>
                                    </div>
                                    <div class="visible-sm visible-xs" style="padding: 15px 0 0">
                                        <a id="btn_support_mb" rel="nofollow" href="#box-support"
                                           class="btn btn-danger btn-block contact-shop text-uppercase"
                                           style="border-radius: 2px">
                                            <i class="glyphicon glyphicon-phone-alt"></i>
                                            Gọi mua hàng
                                        </a>

                                        <!-- hien thi tren dien thoai khi bam vao button Goi ngay -->
                                        <div class="hidden">
                                            <div class="well box-support" id="box-support">
                                                <h2 class="btt" style="padding-top: 5px">Liên hệ SKF Ngọc Anh để có
                                                    báo giá tốt nhất</h2>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <div class="icon">
                                                            <i class=" fas fa-mobile-alt"></i>
                                                        </div>
                                                        <strong><a rel="nofollow" href="tel:0961238558">096 123 85
                                                                58</a>
                                                        </strong>
                                                        <div>
                                                            <span>Kinh doanh SKF Ngọc Anh (24/7)</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class=" fas fa-mobile-alt"></i>
                                                        </div>
                                                        <strong><a rel="nofollow" href="tel:0763356999">0763 356
                                                                999</a>
                                                        </strong>
                                                        <div>
                                                            <span>Kinh doanh SKF Ngọc Anh (24/7)</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class=" fas fa-mobile-alt"></i>
                                                        </div>
                                                        <strong><a rel="nofollow" href="tel:0339995999">033 999
                                                                5999</a>
                                                        </strong>
                                                        <div>
                                                            <span>Kinh doanh SKF Ngọc Anh (24/7)</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class=" fas fa-envelope"></i>
                                                        </div>
                                                        <strong><a rel="nofollow"
                                                                   href="mailto:info@ngocanh.com">info@ngocanh.com</a>
                                                        </strong>
                                                        <div>
                                                            <span>E-mail báo giá SKF Ngọc Anh</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $dungLoVeGia = get_field('dung_lo_ve_gia', 'option');
                            if (isset($dungLoVeGia)) { ?>
                                <div style="padding: 7px; border-radius: 3px; border: 1px solid #ccc; background: #f5f9fa; font-size: 12px;  margin-top: 10px;">
                                    <?php echo $dungLoVeGia; ?>
                                </div>
                            <?php } ?>
                            <div class="well box-hotline">
                                <?php
                                $title = get_field('tieu_de_ho_tro_bao_gia', 'option');
                                if (isset($title)) {
                                    ?>
                                    <div class="btt text-uppercase"
                                         style="font-size: 12px; margin-bottom: 10px; color: #999;">
                                        <?php echo $title ?>
                                    </div>
                                <?php } ?>
                                <ul class="list-unstyled">
                                    <?php $phone = get_field('hotline', 'option');
                                    $phoneItem = explode(",", $phone);
                                    if (isset($phone)) { ?>
                                        <?php foreach ($phoneItem as $k => $phone): ?>
                                            <?= $k !== 0 ? '' : '' ?>
                                            <li>
                                                <img src="<?php echo get_theme_file_uri('assets/imgs/images.png') ?>"
                                                     style="width:15px ; height:15px">
                                                <i class="fas fa-phone-square"></i>
                                                <a href="tel:<?= $phone ?>"><?= $phone ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="note" style="font-size: 11px">
                                <strong>Tại sao bạn nên mua <?php echo $product->name ?> tại SKF Hung Anh ?</strong><br>
                                <?php
                                $tl = get_field('skf_ngoc_anh_la_dai_ly_uy_quyen_skf_tai_viet_nam', 'option');
                                if (isset($tl)) {
                                    echo $tl;
                                }
                                ?>
                            </div>
                            <div>
                                <a href="">
                                    <?php $img = get_field('banner_skf', 'option');
                                    if (isset($img)) {
                                        echo wp_get_attachment_image($img, 'full', false, array('class' => 'width-750px'));
                                    }
                                    ?>
                                </a>
                            </div>
                            <br>
                            <div class="tabs mrg-btm-30">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab-product-info"
                                                                              aria-controls="tab-product-info"
                                                                              role="tab" data-toggle="tab">Thông tin
                                            sản phẩm </a></li>
                                    <li role="presentation"><a href="#tab-comment" aria-controls="tab-comment"
                                                               role="tab" data-toggle="tab">Bản vẽ kỹ thuật</a></li>
                                    <li role="presentation"><a href="#tab-comment2" aria-controls="tab-comment2"
                                                               role="tab" data-toggle="tab">Bình luận</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="tab-product-info">
                                        <div class="vh-content">
                                            <!--mo ta san pham-->
                                            <div>
                                                <?php echo $product->description; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab-comment">
                                        <iframe id="pdf_iframe"
                                                src="https://docs.google.com/gview?url=https://ngocanh.com/public/uploads/attachment/2296/608-2rsh.pdf&amp;embedded=true"
                                                frameborder="0" width="100%" height="500"></iframe>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab-comment2">
                                        <div class="frm" id="cm-facebook">
                                            <div class="fb-comments" data-href="Vong-bi-SKF-608-2RSH.html"
                                                 data-width="100%" data-numposts="5"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="other-product">
                                <div style="font-weight: bold; font-size: 16px; color: #000000; text-transform: uppercase; margin-bottom: 10px">
                                    Sản phẩm khác có thể bạn quan tâm
                                </div>
                                <div class="product-list list3 other-product mrg-btm-30 visible-sm visible-xs">
                                    <div class="_row">
                                        <?php $result = woocommerce_output_related_products(); ?>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div>
                                <h3 style="font-weight: bold; font-size: 16px; color: #000000; text-transform: uppercase; margin-bottom: 10px">BÀI VIẾT LIÊN QUAN</h3>
                                <div class="rel-document">
                                    <?php
                                    $posts = get_posts(array('numberposts' => 4));
                                    if (isset($posts)) {
                                        foreach ($posts as $ks => $post) {
                                            ?>
                                            <div class="_item">
                                                <?php echo get_the_post_thumbnail($post->ID, $size = 'post-thumbnail', array('style' => 'width:108px; height:52px')) ?>
                                                <a title="<?php echo $post->post_title ?>"
                                                   href="<?php echo get_post_permalink($post->ID) ?>"><?php echo $post->post_title ?></a>
                                            </div>
                                        <?php }
                                    }
                                    ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- // tai lieu lien quan -->
                            <div style="padding: 1px 0 0;">
                                <span class='st_facebook_hcount' displayText='Facebook'></span>
                                <span class='st_twitter_hcount' displayText='Tweet'></span>
                                <span class='st_pinterest_hcount' displayText='Pinterest'></span>
                                <span class='st_sharethis_hcount' displayText='ShareThis'></span>
                                <span class='st_youtube_hcount' displayText='Youtube Subscribe'></span>
                            </div>
                        </div>
                        <div class="col-md-4 right">
                            <div style="background: #fff; line-height: 10px" class="text-center mrg-btm-15">
                                <a href="">
                                    <?php
                                    $img = get_field('site_file_mage', 'option');
                                    if (isset($img)) {
                                        foreach ($img as $imgItem) {
                                            echo wp_get_attachment_image($imgItem, 'full', false, array('class' => 'width-360px'));
                                        }
                                    }
                                    ?>
                                </a>
                            </div>
                            <div class="accordion-list" style="padding:10px; color:#000; line-height:22px; text-align:justify; margin-bottom:20px; border-radius:3px; border:1px solid #c6d0d3;">
                                <h3 style="font-size: 13px; margin-top: 0; margin-bottom: 10px; line-height: 18px">
                                    <?php echo $product->name ?> và những câu hỏi thường gặp
                                </h3>
                                <?php
                                $cauHoi = get_field('cau_hoi_thuong_gap', $product->get_id(), 'option');
                                if (isset($cauHoi)) {
                                    foreach ($cauHoi as $key => $cauHoiItem) {
                                        ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="paq<?php echo $key ?>">
                                                <h4 itemprop="name" class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                       data-parent="#accordion" href="#collapseOne"
                                                       aria-expanded="false"
                                                       aria-controls="collapseOne">
                                                        <i class="short-full glyphicon glyphicon-menu-up"></i><span
                                                                class="star">★</span> <?php echo $cauHoiItem['cau_hoi'] ?>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                                 aria-labelledby="paq<?php echo $key ?>">
                                                <div class="panel-body" itemprop="text"><b>✓ Trả
                                                        lời:</b> <?php echo $cauHoiItem['cau_tra_loi'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                }
                                ?>
                            </div>
                            <div class="news-view"
                                 style="border-radius: 6px; border: 1px solid #eaeaea; padding: 2px; margin-bottom: 2px; background-color: #ffffff;">
                                <div class="youtube" data-embed="O7ScJxaz8Ww">
                                    <div class="play-button">

                                    </div>
                                </div>
                            </div>
                            <div class="well relDownload">
                                <div style="margin: -20px -19px 0 -19px;">
                                    <a href="../../catalogue.html" rel="nofollow"><img
                                                src="../../public/assets/imgs/tra-cuu-skf.png" class="img-responsive"
                                                alt="download catalogue skf" border="0" title="catalogue skf"
                                                width="700px" height="120px"></a>
                                </div>
                                <br>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="../../download-catalogue/vong-bi-mat-cau.pdf" target="_blank"
                                           class="btn btn-primary btn-xs btn-download">
                                            <i class="glyphicon glyphicon-download-alt"></i>
                                        </a>
                                        <div class="info">
                                            <div class="tt"><a href="../../download-catalogue/vong-bi-mat-cau.pdf"
                                                               target="_blank" title="Tài liệu vòng bi mặt cầu GE"><span
                                                            style="color:#000000">Tài liệu vòng bi mặt cầu GE</span></a>
                                            </div>
                                            <div class="desc hidden">

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="../../download-catalogue/SKF.pdf" target="_blank"
                                           class="btn btn-primary btn-xs btn-download">
                                            <i class="glyphicon glyphicon-download-alt"></i>
                                        </a>
                                        <div class="info">
                                            <div class="tt"><a href="../../download-catalogue/SKF.pdf"
                                                               target="_blank"
                                                               title="Tài liệu kỹ thuật tổng hợp về Vòng bi SKF"><span
                                                            style="color:#000000">Tài liệu kỹ thuật tổng hợp về Vòng bi
														SKF</span></a></div>
                                            <div class="desc hidden">

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="../../download-catalogue/1-do1day_ranhtrabi.pdf" target="_blank"
                                           class="btn btn-primary btn-xs btn-download">
                                            <i class="glyphicon glyphicon-download-alt"></i>
                                        </a>
                                        <div class="info">
                                            <div class="tt"><a
                                                        href="../../download-catalogue/1-do1day_ranhtrabi.pdf"
                                                        target="_blank" title="Ổ bi đỡ 1 dãy có rãnh tra bi"><span
                                                            style="color:#000000">Ổ bi đỡ 1 dãy có rãnh tra
														bi</span></a></div>
                                            <div class="desc hidden">

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="../../download-catalogue/SKF-khe-ho-vong-bi-tang-trong.pdf"
                                           target="_blank" class="btn btn-primary btn-xs btn-download">
                                            <i class="glyphicon glyphicon-download-alt"></i>
                                        </a>
                                        <div class="info">
                                            <div class="tt"><a
                                                        href="../../download-catalogue/SKF-khe-ho-vong-bi-tang-trong.pdf"
                                                        target="_blank"
                                                        title="Quy định khe hở vòng bi tang trống SKF"><span
                                                            style="color:#000000">Quy định khe hở vòng bi tang trống
														SKF</span></a></div>
                                            <div class="desc hidden">

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="../../download-catalogue/SKF-tinh-toan-tuoi-tho-vong-bi.pdf"
                                           target="_blank" class="btn btn-primary btn-xs btn-download">
                                            <i class="glyphicon glyphicon-download-alt"></i>
                                        </a>
                                        <div class="info">
                                            <div class="tt"><a
                                                        href="../../download-catalogue/SKF-tinh-toan-tuoi-tho-vong-bi.pdf"
                                                        target="_blank" title="Tính toán tuổi thọ vòng bi"><span
                                                            style="color:#000000">Tính toán tuổi thọ vòng bi</span></a>
                                            </div>
                                            <div class="desc hidden">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <?php $get_email = get_field('email', 'option');
                            if (isset($get_email)) { ?>
                                <div class="well hotline-right" align="center">

                                    <li>E MAIL BÁO GIÁ SẢN PHẨM SKF</li>

                                    <div style="font-size:22px; color:#FF0004">
                                        <strong><a href="mailto:info@ngocanh.com" rel="nofollow">

                                                <?php echo $get_email ?></a>
                                        </strong>
                                    </div>
                                </div>
                            <?php }
                            $getImgGiaoHang = get_field('gif_giao_hang', 'option');
                            if (isset($getImgGiaoHang)) {
                                ?>
                                <div style="background: #fff; line-height: 10px" class="text-center mrg-btm-15">
                                    <a href="">
                                        <?php echo wp_get_attachment_image($getImgGiaoHang, 'full', false, array('class' => 'width-150px')); ?>
                                    </a>
                                </div>
                            <?php }
                            $getTieuDe = get_field('tieu_de_trang_chi_tiet_san_pham', 'option');
                            if (isset($getTieuDe)) { ?>
                                <div class="box_style1">
                                    <p> <?php echo $getTieuDe ?> </p>
                                </div>
                            <?php }
                            $getImgBaoGia = get_field('anh_bao_gia', 'option');
                            if (isset($getImgBaoGia)) {
                                ?>
                                <div style="background: #fff; line-height: 10px" class="text-center mrg-btm-15">
                                    <a href="">
                                        <?php echo wp_get_attachment_image($getImgBaoGia, 'full', false, array('class' => 'width-150px')); ?>
                                    </a>
                                </div>
                            <?php }
                            $getTitleMuaHang = get_field('mua_hang_tu_hung_anh', 'option');
                            if (isset($getTitleMuaHang)) { ?>
                                <div class="well list-icon" style="background: #ca0000; color: #ffffff;">
                                    <div class="txt" align="justify">
                                        <?php echo $getTitleMuaHang ?>
                                    </div>
                                </div>
                            <?php }
                            $getImgApp = get_field('anh_app', 'option');
                            if (isset($getImgApp)) { ?>
                                <div style="background: #fff; line-height: 10px" class="text-center mrg-btm-15">
                                    <a href="">
                                        <?php echo wp_get_attachment_image($getImgApp, 'full', false, array('class' => 'width-150px')); ?>
                                    </a>
                                </div>
                            <?php }
                            $getImgBaoChi = get_field('anh_bao_chi_noi_ve_chung_toi', 'option');
                            if (isset($getImgBaoChi)) { ?>
                                <div style="background: #fff; line-height: 10px" class="text-center mrg-btm-15">
                                    <a href="" target="_blank">
                                        <?php echo wp_get_attachment_image($getImgBaoChi, 'full', false, array('class' => 'width-150px')); ?>
                                    </a>
                                </div>
                            <?php } ?>
                            <div class="news-view"
                                 style="border-radius: 6px; border: 1px solid #eaeaea; padding: 15px; margin-bottom: 2px; background-color: #ffffff;">
                                <div style="padding-bottom: 10px">
                                    <?php $getHungAnh2 = get_field('hung_anh_skf_2', 'option');
                                    if (isset($getHungAnh2)) { ?>
                                        <strong> <?php echo $getHungAnh2 ?></strong><br><br>
                                    <?php }
                                    $chi_nhanh = get_field('chi_nhanh', 'option');
                                    if (isset($chi_nhanh)) {
                                        foreach ($chi_nhanh as $keyChiNhanh => $valueChiNhanh) {
                                            ?>
                                            [ <strong><?php echo $valueChiNhanh['ten'] ?></strong> ]
                                            <br><a href="https://g.page/r/CaCKIojdvDjUEAE" target="_blank"
                                                   rel="nofollow"><span
                                                        style="color:#000000"><?php echo $valueChiNhanh['dia_chi'] ?></span></a>
                                            <br>
                                            Tel: <a href="tel:024 85 865 866" rel="nofollow">(024) 85 865 866</a>
                                            <br>Hotline: <a href="tel:<?php echo $valueChiNhanh['sdt'] ?>"
                                                            rel="nofollow"><?php echo $valueChiNhanh['sdt'] ?></a> -
                                            <br>

                                        <?php }
                                    }
                                    $email = get_field('email', 'option');
                                    if (isset($email)) { ?>
                                        Email: <a href="mailto:<?php echo $email ?>"
                                                  rel="nofollow"><?php echo $email ?></a>
                                    <?php } ?>
                                </div>
                                <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.307897096861!2d105.77836861493184!3d20.98029148602459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd438bcdd88228aa0!2zU0tGIE5n4buNYyBBbmggLSDEkOG6oWkgbMO9IHXhu7cgcXV54buBbiB2w7JuZyBiaSBTS0YgY2jDrW5oIGjDo25n!5e0!3m2!1svi!2s!4v1627809861876!5m2!1svi!2s"
                                        width="100%" height="150" style="border:0;" allowfullscreen=""
                                        loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cat-filter">
                    <div class="container">
                        <ul class="list-unstyled">
                            <li class="first">Hiển thị theo:</li>
                            <?php $terms = get_terms(array(
                                'taxonomy' => 'product_tag',
                                'hide_empty' => false,
                            ));
                            if (isset($terms)) {
                                foreach ($terms as $termItem) {
                                    $linkTag = get_term_link($termItem); ?>
                                    <li>
                                        <a href="<?php echo $linkTag ?>"><?php echo $termItem->name ?></a>
                                    </li>
                                <?php }
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
