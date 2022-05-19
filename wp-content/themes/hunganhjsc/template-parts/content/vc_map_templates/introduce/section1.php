<?php
$feedbacks = vc_param_group_parse_atts($args['general']);
?>

<div class="_breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li>
                <a href="index.html" title="Trang chủ">Trang chủ</a>
            </li>
            <li class="active">
                Giới thiệu chung về SKF Ngọc Anh
            </li>
        </ol>


    </div>
</div>
<div class="container">
    <div class="row column2">
        <div class="col-md-8 mcl">

            <div class="news-view">

                <h1 style="color: #000; font-size: 22px; font-weight: 700;"><?php print_r($args['title']) ?></h1>

                <div class="overview ">
                    <?php foreach ($feedbacks as $key => $item) { ?>
                        <p style="text-align:center"><a href="" style="height:327px; width:368px">
                                <?= $item['avatar'] == 0 ? '' : wp_get_attachment_image($item['avatar'], 'full', true) ?>
                        </p>
                        <?php if (isset($item['title-paragraph']) && isset($item['title-paragraph'])):
                            $item['title-paragraph'] = $item['title-paragraph']; ?>
                            <ul>
                                <li>
                                    <h2><span style="color:#006699"><span
                                                    style="font-size:14px"><strong><?= $item['title-paragraph'] ?></strong></span></span>
                                    </h2>
                                </li>
                            </ul>

                            <blockquote>
                                <p>
                                    <span style="font-size:14px"><?= $item['description'] == 0 ? '' : $item['description'] ?>&nbsp;</span>
                                </p>
                            </blockquote>
                        <?php endif ?>

                    <?php } ?>
                </div>

                <p>&nbsp;</p>
                <!--
                <ul>
                    <li>
                        <h2><span style="color:#006699"><strong><span style="font-size:14px">SỨ MỆNH</span></strong></span></h2>
                    </li>
                </ul>

                <blockquote>
                    <p><span style="font-size:14px">SKF Ngọc Anh nỗ lực mang lại giá trị và sự thịnh vượng cho Khách hàng khi sử dụng các sản phẩm SKF chính hãng.</span></p>
                </blockquote>

                <p>&nbsp;</p>

                <ul>
                    <li style="text-align:justify">
                        <h2><span style="color:#006699"><strong><span style="font-size:14px">GIÁ TRỊ CỐT LÕI</span></strong></span></h2>
                    </li>
                </ul>

                <blockquote>
                    <p style="text-align:justify"><span style="font-size:14px"><strong>TÍN:&nbsp;</strong>SKF Ngọc Anh đặt chữ TÍN lên vị trí hàng đầu, lấy chữ TÍN làm vũ khí cạnh tranh và bảo vệ chữ TÍN như bảo vệ danh dự của chính mình. SKF Ngọc Anh luôn cố gắng chuẩn bị đầy đủ năng lực thực thi, nỗ lực hết mình để đảm bảo đúng và cao hơn các cam kết của mình với Khách hàng, đặc biệt là các cam kết về chất lượng sản phẩm – dịch vụ và tiến độ giao hàng.</span></p>
                </blockquote>

                <blockquote>
                    <p style="text-align:justify"><span style="font-size:14px"><strong>TÂM​:&nbsp;</strong>SKF Ngọc Anh đặt chữ TÂM là một trong những nền tảng quan trọng của việc kinh doanh. SKF Ngọc Anh coi trọng Khách hàng và luôn lấy Khách hàng làm trung tâm, đặt lợi ích và mong muốn của Khách hàng lên hàng đầu, nỗ lực mang đến cho khách hàng những sản phẩm – dịch vụ hoàn hảo nhất, coi sự hài lòng của Khách hàng là thước đo thành công.</span></p>
                </blockquote> -->

                <p><img alt="SKF Ngoc Anh Office" src="public/cuploads/images/baiviet/skf-ngocanh-backdrop.jpg"
                        style="height:840px; width:1200px"/></p>

                <p>&nbsp;</p>

                <p>
                    <iframe frameborder="0" height="422" src="https://www.youtube.com/embed/O7ScJxaz8Ww"
                            width="100%"></iframe>
                </p>

                <h2 style="text-align:justify"><br/>
                    <span style="font-size:16px"><strong>Đại lý ủy quyền Vòng bi SKF chính hãng</strong></span>
                </h2>

                <p style="text-align:justify"><span style="font-size:14px">SKF&nbsp;Ngọc Anh là đại lý ủy quyền vòng bi SKF chính hãng tại Việt Nam. Được thành lập bởi đội ngũ quản lý với nhiều năm kinh nghiệm trong lĩnh vực kinh doanh vòng bi và các sản phẩm công nghiệp, đã tham gia nhiều dự án lớn trong nhiều lĩnh vực, ngành nghề khác nhau. Thành quả&nbsp;đạt được là&nbsp;sự tín nhiệm của tập đoàn SKF,&nbsp;hãng sản xuất vòng bi lớn nhất thế giới, và trở thành&nbsp;<a
                                href="index.html"
                                style="color: rgb(51, 122, 183); box-sizing: border-box; background-color: transparent; text-decoration-line: none;"><span
                                    style="color:#000000">nhà phân phối ủy quyền sản phẩm SKF chính hãng</span></a>&nbsp;tại Việt Nam.</span>
                </p>

                <p style="text-align:justify"><span style="font-size:14px"><a href="san-pham.html"><img
                                    alt="Đại lý ủy quyền SKF"
                                    src="public/cuploads/images/baiviet/skfngocanh-dailyuyquyenSKF.jpg"
                                    style="height:602px; width:1600px"/></a></span></p>

                <p style="text-align:justify"><span style="font-size:14px">Với phương châm phát triển bền vững, kèm theo&nbsp;đội ngũ nhân viên tâm huyết, năng động và chuyên nghiệp, lộ trình hợp tác rộng khắp.&nbsp;SKF Ngọc Anh nỗ lực mang lại giá trị và sự thịnh vượng cho Khách hàng khi sử dụng các sản phẩm SKF chính hãng.</span>
                </p>

                <p>&nbsp;</p>

                <div style="border-radius: 8px; border: 1px solid rgb(200, 201, 202); padding: 15px; Background: url('public/cuploads/images/baiviet/bg-skf.jpg') ;">
                    <p style="text-align:justify"><span style="font-size:14px">Với tồn kho được đầu tư mạnh mẽ và chọn lọc, đa dạng về chủng loại và kích cỡ, kèm theo đội ngũ nhân viên kỹ thuật chuyên nghiệp, đáp ứng nhanh chóng nhu cầu về Vòng Bi và các Sản phẩm SKF chính hãng của Khách hàng trên toàn quốc.&nbsp;Mang lại giá trị và sự thịnh vượng cho Khách hàng khi sử dụng các sản phẩm SKF chính hãng.</span>
                    </p>

                    <ul>
                        <li><span style="font-size:14px">Cung cấp các dòng sản phẩm Vòng Bi SKF chính hãng&nbsp;với giá thành cạnh tranh.</span>
                        </li>
                        <li><span style="font-size:14px">Giao hàng linh hoạt trên phạm vi toàn quốc với thời gian giao hàng nhanh chóng, uy tín và chuyên nghiệp.</span>
                        </li>
                        <li>
                            <span style="font-size:14px">Tư vấn các dịch vụ kỹ thuật, kèm chế độ hậu mãi sau bán hàng.</span>
                        </li>
                        <li><span style="font-size:14px">Giá trị đem lại cho Khách hàng khi sử dụng sản phẩm SKF chính hãng là động lực phát triển của SKF Ngọc Anh.</span>
                        </li>
                    </ul>
                </div>

                <p>&nbsp;</p>

                <p><a href="dai-ly-uy-quyen-vong-bi-skf.html"><img alt="Đại lý ủy quyền vòng bi SKF chính hãng"
                                                                   class="img-responsive"
                                                                   src="public/cuploads/images/baiviet/skf-ngoc-anh-dailySKF.jpg"
                                                                   style="height:638px; width:1000px"/></a></p>

                <p>&nbsp;</p>

                <p><a href="dai-ly-uy-quyen-vong-bi-skf.html"><img alt="SKF Ngọc Anh, Đại lý ủy quyền SKF"
                                                                   class="img-responsive"
                                                                   src="public/cuploads/images/baiviet/skf-ngoc-anh-3.jpg"
                                                                   style="height:608px; width:1000px"/></a></p>

                <p style="text-align:justify"><a href="dai-ly-uy-quyen-vong-bi-skf.html"><img
                                alt="Đại lý ủy quyền vòng bi SKF chính hãng" class="img-responsive"
                                src="public/cuploads/images/baiviet/skf-ngocanh-a5.jpg"
                                style="height:278px; width:1000px"/></a></p>

                <h2><br/>
                    <a href="tai-lieu-vong-bi/Gioi-thieu-chung-ve-SKF.html"><strong><span style="font-size:16px">GIỚI THIỆU CHUNG VỀ SKF</span></strong></a>
                </h2>

                <h3><strong><span
                                style="font-size:12px">Hãng sản xuất Vòng bi Số 1 thế giới từ Thuỵ Điển (Sweden)</span></strong>
                </h3>

                <p style="text-align:justify"><span style="font-size:14px">SKF là nhà cung cấp vòng bi hàng đầu thế giới, có trụ sở chính đặt tại thành phố Goteborg, Thụy Điển. Sản phẩm của SKF được sử dụng khắp toàn cầu. Tập đoàn SKF có hơn 200 công ty và hơn 80 nhà máy sản xuất đặt tại các quốc gia, Tập đoàn có hơn 40,000 nhân viên, ngạch doanh thu ước tính đạt 50 tỷ USD mỗi năm.</span>
                </p>

                <p><a href="tai-lieu-vong-bi/Gioi-thieu-chung-ve-SKF.html"><img
                                alt="SKF Ngọc Anh - Đại lý ủy quyền vòng bi SKF chính hãng" class="img-responsive"
                                src="public/cuploads/images/baiviet/skf-ngoc-anh.jpg"
                                style="height:258px; width:1000px"/></a></p>

                <p style="text-align:justify"><br/>
                    <span style="font-size:14px">Năm 1907, Kỹ sư Sven Wingquist – người Thụy Điển, do thường gặp các vấn đề về vòng bi hỏng, nên đã phát minh ra vòng bi cầu tự lựa hai dãy đầu tiên trên thế giới. Khi đó, phát minh này đã hứa hẹn sẽ đem kỹ thuật vòng bi bước vào một thời kỳ mới. Sau đó, Sven Wingquist đã thành lập SKF vào năm 1907. Cho đến nay SKF vẫn làm việc và phát triển dựa trên phương châm: Thúc đẩy sự phát triển của kỹ thuật vòng bi và <a
                                href="san-pham/vong-bi-skf.html"><span style="color:#000000">cung cấp vòng bi</span></a> thích hợp nhất cho Khách hàng.&nbsp;</span>
                </p>

                <p style="text-align:justify"><span style="font-size:14px">SKF cung ứng hơn 30,000 loại vòng bi với đủ kích cỡ, cỡ nhỏ nhất đạt 0.003g, cỡ lớn nhất đạt 34 tấn. Chủng loại sản phẩm vòng bi gồm có: vòng bi cầu, vòng bi đũa hình trụ, vòng bi đũa, vòng bi đũa hình mặt cầu, vòng bi đũa hình côn, vòng bi đỡ chặn tiếp xúc và các chủng loại khác.&nbsp; Ngoài ra, SKF cũng cung cấp dụng cụ sửa chữa vòng bi, dụng cụ giám sát dầu mỡ và vòng bi, để vòng bi đạt đến tình trạng vận hành tốt nhất, mang lợi ích cao nhất cho Khách hàng.</span>
                </p>

                <p style="text-align:justify"><span style="font-size:14px">Với mỗi nhóm ngành, SKF phân chia nguồn lực để tập trung vào mảng Khách hàng riêng, đáp ứng nhu cầu cho thị trường khắp toàn cầu.&nbsp;</span><br/>
                    &nbsp;</p>

                <p><img alt="SKF Ngọc Anh - Đại lý ủy quyền vòng bi SKF chính hãng" class="img-responsive"
                        src="public/cuploads/images/baiviet/skf-ngoc-anh-2.jpg" style="height:258px; width:1000px"/></p>

                <hr/>
                <div style="border-radius: 6px; border: 1px solid #c8c9ca; padding: 15px; background-color:#e8edf5">
                    <h3 style="text-align:justify"><span style="font-size:14px"><strong>Để tránh mua phải vòng bi SKF giả kém chất lượng, Hãy mua <a
                                        href="san-pham/vong-bi-skf.html"><span style="color:#000000">vòng bi SKF chính hãng</span></a> tại các <a
                                        href="dai-ly-uy-quyen-vong-bi-skf.html"><span style="color:#000000">đại lý ủy quyền của SKF</span></a> để đảm bảo chất lượng sản phẩm chính hãng.</strong></span>
                    </h3>
                </div>
                <br>
                <div class="fb-like" data-href="https://ngocanh.com/gioi-thieu.html" data-width="100"
                     data-layout="button_count" data-action="like" data-size="small" data-show-faces="false"
                     data-share="true"></div>
            </div>
        </div>
        <div style="padding: 1px 0 0;">
            <span class='st_facebook_hcount' displayText='Facebook'></span>
            <span class='st_twitter_hcount' displayText='Tweet'></span>
            <span class='st_pinterest_hcount' displayText='Pinterest'></span>
            <span class='st_sharethis_hcount' displayText='ShareThis'></span>
            <span class='st_youtube_hcount' displayText='Youtube Subscribe'></span>
        </div>
        <br>
    </div>
    <!--<div class="col-md-1">&nbsp;</div>
        -->
    <div class="col-md-4 mcr">

        <div>
            <p><br/>
                <a href="dai-ly-uy-quyen-vong-bi-skf.html"><img alt="Đại lý ủy quyền vòng bi SKF" class="img-responsive"
                                                                src="public/cuploads/images/baiviet/ngoc-anh-skf.png"
                                                                style="height:124px; width:700px"/></a> &nbsp;
            </p>

            <div style="border-radius: 8px; border: 0px solid rgb(200, 201, 202); padding: 15px; color:#ffffff; background-color: #00599a;">
                <p style="text-align:justify"><span style="font-size:11px"><strong>Hà Nội:</strong>&nbsp; LK 01.10, Liền kề Tổ 9 Mỗ Lao, Hà Đông, Hà Nội</span><br/>
                    <span style="font-size:11px">Tel:<strong>&nbsp;</strong>(024) 85 865 866</span>
                </p>

                <p style="text-align:justify"><span style="font-size:11px"><strong>Quảng Ninh:</strong>&nbsp;D908 - Khu đô thị MonBay, Phường Hồng Hải, TP Hạ Long, Quảng Ninh.<br/>
                            Tel:<strong>&nbsp;</strong>(0203) 6 559 395</span></p>
            </div>

            <p>&nbsp;</p>

            <h2><a href="https://drive.google.com/file/d/1BwDbMB9R69YA7RM69EJs7CuRF60aaPmJ/view"
                   target="_blank"><strong><span style="font-size:16px">Thư xác nhận Đại lý Ủy quyền SKF</span></strong></a>
            </h2>

            <p>
                <iframe height="480" src="https://drive.google.com/file/d/1BwDbMB9R69YA7RM69EJs7CuRF60aaPmJ/preview"
                        width="100%"></iframe>
            </p>

            <p>&nbsp;</p>

            <p><a href="profile-skf-ngoc-anh.pdf" target="_blank"><img alt="Profile SKF Ngọc Anh" class="img-responsive"
                                                                       src="public/cuploads/images/baiviet/profiles-ngocanh.jpg"
                                                                       style="height:325px; width:700px"/></a></p>

            <p>&nbsp;</p>

            <p><a href="bao-chi-noi-ve-chung-toi/index.html" target="_blank"><img alt="Báo chí nói về SKF Ngọc Anh"
                                                                                  class="img-responsive"
                                                                                  src="public/cuploads/images/baiviet/baochi.jpg"
                                                                                  style="height:326px; width:700px"/></a>
            </p>

            <p>&nbsp;</p>

            <p>
                <iframe frameborder="0" height="203" src="https://www.youtube.com/embed/O7ScJxaz8Ww"
                        width="100%"></iframe>
            </p>

            <p>&nbsp;</p>

            <div style="border-radius: 8px; border: 1px solid rgb(200, 201, 202); padding: 15px; text-align: center;">
                <span style="font-size:12px">Hotline hỗ trợ bán hàng</span><br/>
                <span style="font-size:24px"><strong><a href="tel:0961238558"
                                                        rel="nofollow">096 123 8558</a></strong></span><br/>
                <span style="font-size:24px"><strong><a href="tel:0339995999"
                                                        rel="nofollow">033 999 5999</a></strong></span><br/>
                <br/>
                <span style="font-size:12px">Email báo giá sản phẩm SKF</span><br/>
                <span style="font-size:24px"><strong><a href="mailto:info@ngocanh.com"
                                                        rel="nofollow">info@ngocanh.com</a> </strong></span>
            </div>

            <p>&nbsp;</p>

            <p><a href="bao-gia-vong-bi-skf-chinh-hang.html"><img alt="Báo giá dây đai SKF chính hãng"
                                                                  class="img-responsive"
                                                                  src="public/assets/imgs/skf-telesale.jpg"
                                                                  style="height:124px; width:700px"/></a></p>

            <p>&nbsp;</p>

            <p><a href="huong-dan-mua-hang.html"><img alt="Giao hàng toàn quốc" class="img-responsive"
                                                      src="public/assets/imgs/giao-hang-toan-quoc.gif"
                                                      style="height:318px; width:700px"/></a></p>

            <p>&nbsp;</p>

            <p><a href="kiem-tra-vong-bi-gia-skf.html" style="text-align: justify;"><img
                            alt="Tra cứu vòng bi SKF chính hãng" class="img-responsive"
                            src="public/assets/imgs/tra-cuu-skf-fake.png" style="height:185px; width:700px"/></a>&nbsp;&nbsp;
            </p>

            <p>
                <iframe frameborder="0" scrolling="no"
                        src="http://www.facebook.com/plugins/likebox.php?href=https://facebook.com/skfngocanh.vn&amp;width=358&amp;height=150&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"
                        style="border:none; overflow:hidden;height:150px;" width="100%"></iframe>
            </p>

            <p>&nbsp;</p>

            <div class="text-center mrg-btm-15" style="background: #fff; line-height: 10px"><a
                        href="san-pham/vong-bi-skf.html"><img alt="vòng bi SKF chính hãng" class="img-responsive"
                                                              src="public/assets/imgs/vong-bi-skf-chinh-hang.png"
                                                              title="vòng bi SKF chính hãng"/></a></div>

            <div class="text-center mrg-btm-15" style="background: #fff; line-height: 10px"><a
                        href="san-pham/goi-do-skf.html"><img alt="Gối đỡ SKF chính hãng" class="img-responsive"
                                                             src="public/assets/imgs/goi-do-skf-chinh-hang.png"
                                                             title="Gối đỡ SKF chính hãng"/></a></div>

            <div class="text-center mrg-btm-15" style="background: #fff; line-height: 10px"><a
                        href="san-pham/mo-boi-tron-SKF.html"><img alt="Mỡ SKF chính hãng" class="img-responsive"
                                                                  src="public/assets/imgs/mo-skf-chinh-hang.png"
                                                                  title="Mỡ SKF chính hãng"/></a></div>

            <div class="text-center mrg-btm-15" style="background: #fff; line-height: 10px"><a
                        href="san-pham/dung-cu-skf.html"><img alt="Dụng cụ SKF chính hãng" class="img-responsive"
                                                              src="public/assets/imgs/dung-cu-skf-chinh-hang.png"
                                                              title="Dụng cụ SKF chính hãng"/></a></div>

            <div class="text-center mrg-btm-15" style="background: #fff; line-height: 10px"><a
                        href="phot-chan-skf-chinh-hang.html"><img alt="Phớt chặn SKF chính hãng" class="img-responsive"
                                                                  src="public/assets/imgs/phot-skf-chinh-hang.png"
                                                                  title="Phớt chặn SKF chính hãng"/></a></div>

            <div class="text-center mrg-btm-15" style="background: #fff; line-height: 10px"><a
                        href="day-dai-SKF-chinh-hang.html"><img alt="Dây đai SKF chính hãng" class="img-responsive"
                                                                src="public/assets/imgs/day-dai-skf-chinh-hang.png"
                                                                title="Dây đai SKF chính hãng"/></a></div>

            <p>&nbsp;</p>

            <p>
                <iframe height="450"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.3073635356286!2d105.77835571493182!3d20.980312886024663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd438bcdd88228aa0!2zVsOybmcgYmkgU0tGIE5n4buNYyBBbmg!5e0!3m2!1svi!2s!4v1623169734099!5m2!1svi!2s"
                        style="border:0;" width="100%"></iframe>
            </p>
        </div>

        <div itemscope itemtype="https://schema.org/FAQPage"
             style="padding:10px;color:#000;font-size:14px;line-height:22px;text-align:justify;margin-bottom:30px;margin-top: 20px;border-radius:5px;border:1px solid #c6d0d3;">
            <h3 style="font-size: 14px;margin-top: 5px;"><i class="glyphicon glyphicon-bookmark"></i> Những câu hỏi
                thường gặp
            </h3>
            <br>

            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="panel panel-default">
                <div class="panel-heading" role="tab" id="paq2">
                    <h4 itemprop="name" class="panel-title" style="font-size:13px">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="short-full glyphicon glyphicon-menu-up"></i><span class="star">★</span> Sản phẩm
                            SKF có
                            phải hàng chính hãng không?</a>
                    </h4>
                </div>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" id="collapseThree"
                     class="panel-collapse collapse" role="tabpanel" aria-labelledby="paq2">
                    <div class="panel-body" itemprop="text"><b>✓ Trả lời:</b> Tất cả sản phẩm SKF do chúng tôi phân phối
                        được
                        nhập khẩu chính hãng SKF, đầy đủ giấy tờ CO,CQ do <a href="https://www.skf.com/vn"
                                                                             target="_blank" title="SKF Việt Nam"
                                                                             rel="nofollow">SKF Việt Nam</a> cung cấp.
                        SKF Ngọc Anh luôn tâm niệm chữ
                        Tín quý hơn Vàng. Chúng tôi cam kết hỗ trợ khách hàng tối đa các công cụ kiểm tra hàng giả, hàng
                        nhái để
                        khách hàng tự bảo vệ mình.
                    </div>
                </div>
            </div>

            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading5">
                    <h4 itemprop="name" class="panel-title" style="font-size:13px">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                           href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <i class="short-full glyphicon glyphicon-menu-up"></i><span class="star">★</span> SKF Ngọc
                            Anh có hỗ
                            trợ kỹ thuật cho Khách hàng không?</a>
                    </h4>
                </div>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" id="collapse5"
                     class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                    <div class="panel-body" itemprop="text"><b>✓ Trả lời:</b> Đội ngũ kỹ thuật và kinh doanh của chúng
                        tôi
                        luôn hỗ trợ bạn Miễn Phí mọi lúc mọi nơi tất cả các ngày trong tuần 24/7. Liên hệ ngay để được
                        hỗ trợ<br>
                        Hotline (Call-SMS-Zalo)<br><br>
                        <a href="tel:096 123 8558" title="báo giá vòng bi SKF chính hãng" rel="nofollow"><strong>096 123
                                8558</strong></a><br><br>
                        <a href="tel:0763 356 999" title="báo giá vòng bi SKF chính hãng" rel="nofollow"><strong>0763
                                356 999</strong></a><br><br>
                        <a href="tel:033 999 5999" title="báo giá vòng bi SKF chính hãng" rel="nofollow"><strong>033 999
                                5999</strong></a>

                    </div>
                </div>
            </div>
            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading6">
                    <h4 itemprop="name" class="panel-title" style="font-size:13px">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                           href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            <i class="short-full glyphicon glyphicon-menu-up"></i><span class="star">★</span> SKF Ngọc
                            Anh có uy
                            tín không?</a>
                    </h4>
                </div>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" id="collapse6"
                     class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                    <div class="panel-body" itemprop="text"><b>✓ Trả lời:</b> SKF Ngọc Anh là nhà phân phối vòng bi và
                        các sản
                        phẩm SKF chính hãng uy tín danh tiếng tại thị trường Việt Nam. SKF Ngọc Anh luôn tiên phong cung
                        cấp các
                        giải pháp tích hợp trước và sau bán hàng nhằm giúp khách hàng tối ưu hóa chi phí, hiệu quả và
                        tiết kiệm
                        thời gian. Với kinh nghiệm lâu năm trong lĩnh vực phân phối vòng bi chúng tôi luôn mang đến các
                        sản
                        phẩm, dịch vụ chất lượng tốt nhất với phong cách phục vụ chuyên nghiệp, tận tâm đã được hàng
                        ngàn khách
                        hàng trên cả nước hợp tác và tín nhiệm.
                    </div>
                </div>
            </div>

            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading4">
                    <h4 itemprop="name" class="panel-title" style="font-size:13px">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                           href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <i class="short-full glyphicon glyphicon-menu-up"></i><span class="star">★</span> SKF Ngọc
                            Anh giao
                            hàng trong bao lâu?</a>
                    </h4>
                </div>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" id="collapse4"
                     class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="panel-body" itemprop="text"><b>✓ Trả lời:</b> Cho dù bạn ở đâu? chúng tôi luôn sẵn sàng
                        được
                        phục vụ nhu cầu của bạn với chế độ giao hàng và thanh toán linh hoạt.
                    </div>
                </div>
            </div>
        </div>
        <br>

    </div>
</div>
</div>