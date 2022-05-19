<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */
defined('ABSPATH') || exit;
get_header();
?>
<main>
    <?php $categoryParent=get_queried_object();
    $checkChildren=get_term_children($categoryParent->term_id, 'product_cat');
    // $id = count($checkChildren);
    echo "<hr>";
   
?>
    <div class="">
        <div class="_breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="../index.html" title="Trang chủ">Trang chủ</a></li>
                    <li><a href="../san-pham.html" title="Sản phẩm">Sản phẩm</a></li>
                    <li class="active"><?php echo $categoryParent->name ?> </li>
                </ol>
                <script type="application/ld+json">
                    {

                        "@context": "https://schema.org",
                        "@type": "BreadcrumbList",
                        "itemListElement": [{
                                "@type": "ListItem",
                                "position": 1,
                                "name": "✅ Trang chủ",
                                "item": "https://ngocanh.com"
                            }

                            ,
                            {
                                "@type": "ListItem",
                                "position": 2,
                                "name": "✅ Sản phẩm",
                                "item": "https://ngocanh.com/san-pham"
                            }

                            ,
                            {
                                "@type": "ListItem",
                                "position": 3,
                                "name": "✅ Vòng bi SKF",
                                "item": "https://ngocanh.com/san-pham/vong-bi-skf"
                            }

                        ]
                    }
                </script>
            </div>
        </div>
        <div class="category-detail"><br>
            <div class="container">
                <div class="category-info vh-content" style="height:350px;overflow:hidden">
                    <div class="news-view" style="padding: 0;">
                        <div class="overview">
                            <h1 style="text-align:justify"><span style="font-size:18px"><strong><a
                                            href="vong-bi-skf.html" id="Vòng bi SKF chính hãng"
                                            name="Vòng bi SKF chính hãng" title="Vòng bi SKF chính hãng"><span
                                                style="color:#000000"><?php echo $categoryParent->name ?></span></a><span
                                            style="color:#000000">&nbsp;
                                            - Đại lý uỷ quyền SKF - SKF Hung Anh</span></strong></span></h1>
                            <p><span style="font-size:14px"><span style="color:#000000">SKF là thương hiệu vòng bi bạc
                                        đạn số 1 thế giới đến từ Thuỵ Điển (Sweden).&nbsp;
                                    </span></span><span style="font-size:14px"><span style="color:rgb(0, 0, 0)">Sản phẩm
                                        SKF chính hãng được phân phối bởi SKF Ngọc Anh - Đại lý ủy quyền SKF tại Việt
                                        Nam</span></span></p>
                            <p style="text-align:center"><img
                                alt="Vòng bi skf chính hãng được phân phối bởi SKF Ngọc Anh"
                                    src="../public/cuploads/images/baiviet/vong-bi-skf-ngocanh.jpg"
                                    style="height:238px; width:1000px" /></p>
                            <p style="text-align:center"><em><span style="font-size:12px"><span
                                            style="color:#000000">Vòng bi SKF&nbsp;
                                            đa dạng về&nbsp;
                                            kích thước và chủng loại đa dạng</span></span></em></p>
                            <h2 style="text-align:justify"><span style="font-size:16px"><strong><a
                                            href="vong-bi-skf.html" id="Vòng bi SKF" name="Vòng bi SKF"><span
                                                style="color:#000000">Vòng bi SKF</span></a>của nước
                                        nào?</strong></span></h2>
                            <p style="text-align:justify"><span style="font-size:14px"><img
                                        alt="vòng bi SKF Sweden Thuỵ Điển"
                                        src="../public/cuploads/images/baiviet/vong-bi-skf-sweden.jpg"
                                        style="height:99px; width:386px" /></span></p>
                            <p style="text-align:justify"><span style="font-size:12px"><em>Logo thương hiệu&nbsp;
                                        <span style="color:rgb(0, 0, 0)">SKF</span>- Thương hiệu vòng bi của số 1 thế
                                        giới của Thuỵ Điển</em></span></p>
                            <p style="text-align:justify"><span style="font-size:14px">Nhắc đến thương hiệu </span><span
                                    style="color:rgb(0, 0, 0)">SKF</span><span style="font-size:14px">người ta nghĩ ngay
                                    tới thương hiệu </span><strong><span style="color:rgb(0, 0, 0)">vòng bi
                                        SKF</span></strong><span style="font-size:14px">đã nổi tiếng trên toàn thế giới
                                    hàng trăm năm nay nhờ độ tin cậy về chất lượng vận hành cũng như các tiêu chuẩn khắt
                                    khe của hãng đến từ Thuỵ Điển (Sweden).</span></p>
                            <p style="text-align:center">
                                <div class="youtube" data-embed="OdRWx5z6DSM">
                                    <div class="play-button"></div>
                                </div>
                            </p>
                            <p style="text-align:center"><em><span style="font-size:12px">Video giới thiệu chung về SKF
                                        Group</span></em></p>
                            <p style="text-align:justify"><span style="font-size:14px">SKF được thành lập năm 1907 tại
                                    Göteborg,
                                    Thuỵ Điển quê hương của người sáng lập (<span style="color:rgb(0, 0, 0)">Sven Gustaf
                                        Wingqvist</span>). SKF là từ viết tắt của 3 chữ tiếng Thuỵ Điển "<span
                                        style="color:#000000"><strong>Svenska Kullager
                                            Fabriken</strong></span>" có nghĩa là Nhà mày sản xuất vòng bi Thụy Điển.
                                    Ngày nay SKF đã có tới hơn 100 nhà máy nghiên cứu,
                                    sản xuất vòng bi tại hơn 30 quốc gia trên toàn cầu.</span></p>
                            <ul>
                                <li>
                                    <h3 style="text-align:justify"><span style="font-size:14px">Xem thêm: <a
                                                href="../tai-lieu-vong-bi/Gioi-thieu-chung-ve-SKF.html" target="_blank"
                                                title="Giới thiệu chung SKF">Giới thiệu chung về SKF thương hiệu vòng bi
                                                bạc đạn số 1 thế giới</a></span></h3>
                                </li>
                            </ul>
                            <p style="text-align:justify">&nbsp;
                            </p>
                            <h2 style="text-align:justify"><span style="font-size:16px"><span
                                        style="color:#000000"><strong>Xuất xứ vòng bi </strong></span><strong><a
                                            href="vong-bi-skf.html" id="bạc đạn SKF" name="bạc đạn SKF"><span
                                                style="color:#000000">bạc đạn SKF</span></a></strong><span
                                        style="color:#000000"><strong>chính hãng ở đâu?</strong></span></span></h2>
                            <p style="text-align:center"><a href="../tai-lieu-vong-bi/xuat-xu-vong-bi-skf.html"
                                    target="_blank"><span style="font-size:14px"><img
                                            alt="Xuất xứ vòng bi bạc đạn SKF chính hãng ở đâu?"
                                            src="../public/cuploads/images/baiviet/xuat-xu-vong-bi-skf-o-dau.jpg"
                                            style="height:223px; width:1000px" /></span></a></p>
                            <p style="text-align:center"><span style="font-size:12px"><em>Xuất xứ <a
                                            href="vong-bi-skf.html" id="vòng bi SKF chính hãng"
                                            name="vòng bi SKF chính hãng"><span style="color:#000000"><strong>vòng bi
                                                    SKF chính hãng</strong></span></a><span style="color:#000000">tại
                                            nhiều quốc gia trên thế giới.</span></em></span></p>
                            <p style="text-align:justify"><span style="font-size:14px">Khi đã sử dụng <span
                                        style="color:#000000">vòng bi skf chính hãng</span>chắc hẳn bạn sẽ không còn lạ
                                    lẫm với xuất xứ của từng dòng sản phẩm SKF,
                                    Trên bao bì của sản phẩm đều thể hiện rõ quốc gia có nhà máy SKF đặt tại đó và trực
                                    tiếp sản xuất ra vòng bi đó. Nó có thể là <em>China,
                                        Malaysia,
                                        Sweden,
                                        Germany,
                                        Italy,
                                        India...vv.</em>Khi đã đạt đến ngưỡng sản xuất với quy mô toàn cầu,
                                    SKF đã xây dựng 132 nhà máy và trung tâm kỹ thuật (R&amp; D) tại 32 Quốc gia với
                                    tổng số nhân viên trên 45.000 người. Các con số này vẫn không ngừng tăng lên hàng
                                    năm. <em>(Đây là số liệu được cập nhật từ trang chủ của tập đoàn SKF).</em></span>
                            </p>
                            <p style="text-align:justify"><span style="font-size:14px">Bạn hoàn toàn yên tâm về nguồn
                                    gốc sản phẩm SKF chính hãng khi mua hàng từ các đại lý uỷ quyền của SKF tại Việt
                                    Nam. <strong>SKF Ngọc Anh</strong>&nbsp;
                                    là <span style="color:#000000">Đại lý uỷ quyền SKF chính hãng tại Việt Nam</span>.
                                    Chúng tôi sẽ cung cấp <span style="color:#000000">Phần mềm tra vòng bi SKF
                                        giả</span>để bạn có thể tự kiểm tra tính chính xác,
                                    minh bạch nguồn gốc xuất xứ của vòng bi mua từ <a href="../index.html"
                                        id="Đại lý uỷ quyền SKF" name="Đại lý uỷ quyền SKF"><strong>Đại lý uỷ quyền
                                            SKF</strong></a>.</span></p>
                            <p style="text-align:justify"><u><span style="font-size:14px">Xem thêm:</span></u></p>
                            <ul>
                                <li style="text-align:justify">
                                    <h3><span style="font-size:14px"><a
                                                href="../tai-lieu-vong-bi/xuat-xu-vong-bi-skf.html"
                                                title="Vòng bi SKF của nước nào? Xuất xứ vòng bi SKF chính hãng ở đâu?">Vòng
                                                bi SKF của nước nào? Xuất xứ vòng bi SKF chính hãng ở đâu?</a></span>
                                    </h3>
                                </li>
                            </ul>
                            <hr />
                            <h2 style="text-align:justify"><span style="font-size:16px"><strong>Vòng bi SKF chính hãng
                                        và những ưu điểm vượt trội</strong></span></h2>
                            <h3 style="text-align:justify"><span style="font-size:14px">✅ <strong>Vòng bi có độ bền
                                        cao</strong></span></h3>
                            <p style="text-align:justify"><span style="font-size:14px">SKF đã có hơn 100 năm kinh nghiệm
                                    sản xuất chế tạo vòng bi,
                                    các sản phẩm của SKF được chế tạo từ những nguyên liệu tốt nhất thế giới kèm với các
                                    công nghệ chế tạo của hãng giúp cho vòng bi của SKF có độ bền rất cao so với các
                                    thương hiệu khác cùng chủng loại.</span></p>
                            <h3 style="text-align:justify"><span style="font-size:14px">✅ <strong>Tình ứng dụng cao của
                                        vòng bi SKF</strong></span></h3>
                            <p style="text-align:justify"><span style="font-size:14px">Ngoài thế mạnh về sản xuất vòng
                                    bi có độ chính xác cao,
                                    chịu tải trọng lớn cho các ngành công nghiệp nặng như Xi măng,
                                    <span style="color:#000000">Nhiệt Điện</span>,
                                    <span style="color:#000000">Khai khoáng...</span></span></p>
                            <h3 style="text-align:justify"><span style="font-size:14px">✅ <strong>Vòng bi SKF có độ
                                        chính xác cao</strong></span></h3>
                            <p style="text-align:justify"><span style="font-size:14px">Nhờ công nghệ chế tạo vòng bi
                                    hiện đại và độc quyền kèm với tuổi đời lịch sử lâu năm của hãng,
                                    vòng bi SKF có độ chính xác cao về mọi thông số kỹ thuật giúp người dùng có thể lắp
                                    đặt vòng bi một cách dễ dàng và nhanh chóng vào các chi tiết máy,
                                    Giúp máy móc hoạt động một cách trơn tru và an toàn,
                                    mang lại hiệu suất cao.</span></p>
                            <p style="text-align:center">
                                <div class="youtube" data-embed="drhlWbPEhSA">
                                    <div class="play-button"></div>
                                </div>
                            </p>
                            <p style="text-align:center"><span style="font-size:12px">Video tham quan nhà máy SKF tại
                                    Gothenburg Thụy Điển. Nhà máy sản xuất vòng bi số 1 thế giới.</span></p>
                            <p style="text-align:center">&nbsp;
                            </p>
                            <h2 style="text-align:justify"><span style="font-size:14px">✅&nbsp;
                                </span><span style="font-size:16px"><strong>Các cách nhận biết phân biệt vòng bi SKF
                                        giả</strong></span></h2>
                            <p style="text-align:justify"><span style="font-size:14px">Hiện nay trên thị trường Vòng bi
                                    bạc đạn SKF bị làm giả đang được chào bán tràn lan,
                                    Người tiêu dùng rất khó nhận biết và phân biệt đâu là&nbsp;
                                    <a href="vong-bi-skf.html" id="vòng bi SKF chính hãng" name="vòng bi SKF chính hãng"
                                        style="background-size: 16px;" title="vòng bi SKF chính hãng"><strong>vòng bi
                                            SKF chính hãng</strong></a>&nbsp;
                                    và đâu là vòng bi SKF bị làm giả?&nbsp;
                                    <strong>SKF Ngọc Anh</strong>&nbsp;
                                    sẽ chia sẻ những kinh nghiệm giúp bạn phân biệt được những dấu hiệu nghi ngờ về sản
                                    phẩm SKF giả.</span></p>
                            <p style="text-align:center">
                                <div class="youtube" data-embed="p1DCMf9ebZs">
                                    <div class="play-button"></div>
                                </div>
                            </p>
                            <p style="text-align:center"><span style="font-size:12px">Video hướng dẫn sử dụng phần mềm
                                    kiểm tra vòng bi SKF giả (SKF Authenticate)</span></p>
                            <p style="text-align:justify">&nbsp;
                            </p>
                            <h3 style="text-align:justify"><span style="font-size:16px">✅<strong>&nbsp;
                                        Những cách phân biệt vòng bi SKF chính hãng bằng mắt thường</strong></span></h3>
                            <p style="text-align:justify"><span style="font-size:14px">1. Phân biệt qua màu sắc vỏ hộp
                                    vòng bi SKF<br />2. Chữ in trên vỏ hộp vòng bi SKF kém chất lượng<br />3. Mã vạch in
                                    trên vỏ hộp vòng bi SKF cũng là dấu hiệu phân biệt<br />4. Phân biệt qua lớp keo dán
                                    trên vỏ hộp vòng bi SKF<br />5. Túi nilong bảo quản vòng bi SKF bên trong vỏ
                                    hộp<br />6. Chi tiết cấu tạo vòng bi và độ chính xác của vòng bi SKF</span></p>
                            <h3 style="text-align:justify"><span style="font-size:16px">✅&nbsp;
                                    <strong>Những dấu hiệu đáng nghi ngờ khi mua hàng từ kênh phân phối không chính
                                        hãng</strong></span></h3>
                            <p style="text-align:justify"><span style="font-size:14px">1. Giá bán vòng bi SKF cũng là 1
                                    cách nghi ngờ hàng giả<br />2. Thời gian giao hàng vòng bi SKF cũng là 1 dấu hiệu
                                    cảnh báo<br />3. Xuất xứ trên vỏ hộp SKF cũng là 1 điểm nhận dạng vòng bi SKF
                                    giả<br />4. Giấy chứng nhận xuất xứ và chất lượng CO,
                                    CQ</span></p>
                            <p>&nbsp;
                            </p>
                            <h2 style="text-align:justify"><span style="font-size:16px"><strong><a
                                            href="vong-bi-skf.html" title="Mua vòng bi SKF chính hãng"><span
                                                style="color:#000000">Mua vòng bi SKF chính hãng</span></a>tại SKF Ngọc
                                        Anh&nbsp;
                                        với giá bán nhiều ưu đãi hấp dẫn</strong></span></h2>
                            <p style="text-align:justify"><span style="font-size:14px"><a href="../index.html"
                                        id="SKF Ngọc Anh" name="SKF Ngọc Anh"><strong>SKF Ngọc Anh</strong></a>- <span
                                        style="color:#000000">Đại lý uỷ quyền vòng bi SKF tại Hà Nội</span>. (Bạn nên
                                    yêu cầu bên bán cung cấp cho bạn xem giấy uỷ quyền của SKF cung cấp cho họ để tránh
                                    mua phải vòng bi SKF giả). Giá bán tại SKF Ngọc Anh luôn nhiều ưu đãi hấp dẫn với
                                    chính sách bán hàng linh động,
                                    Vòng bi và các sản phẩm SKF được chúng tôi bán ra cam kết 100% là sản phẩm chính
                                    hãng SKF. Sản phẩm rõ ràng nguồn gốc xuất xứ kèm <span style="color:#000000">CO,
                                        CQ</span>. Chúng tôi cam kết hoàn tiền 100 lần nếu phát hiện hàng giả hàng nhái
                                    được bán ra từ chúng tôi. </span></p>
                            <p style="text-align:justify">&nbsp;
                            </p>
                            <p style="text-align:center"><span style="font-size:14px"><img
                                        alt="SKF Ngọc Anh là đại lý uỷ quyền vòng bi SKF tại Hà Nội"
                                        src="../public/cuploads/images/baiviet/ngocanh-logo-gt.jpg"
                                        style="height:327px; width:368px" /></span></p>
                            <ul>
                                <li style="text-align:justify">
                                    <p><span style="font-size:14px">Chính sách bán hàng và thanh toán linh hoạt,
                                            giao hàng toàn quốc tất cả các ngày trong tuần.</span></p>
                                </li>
                                <li style="text-align:justify">
                                    <p><span style="font-size:14px">Sản phẩm đầy đủ CO,
                                            CQ gốc và được bảo hành chính hãng SKF theo đúng tiêu chuẩn nhà sản
                                            xuất.</span></p>
                                </li>
                                <li style="text-align:justify">
                                    <p><span style="font-family:saira,sans-serif; font-size:14px">Nỗ lực mang lại giá
                                            trị và sự thịnh vượng cho Khách hàng khi sử dụng các sản phẩm SKF chính
                                            hãng.</span></p>
                                </li>
                            </ul>
                            <p style="text-align:justify">&nbsp;
                            </p>
                            <p style="text-align:center"><span style="font-size:14px"><img
                                        alt="Đại lý vòng bi SKF tại Hà Nội"
                                        src="../public/cuploads/images/baiviet/skf-ngocanh-a5.jpg"
                                        style="height:269px; width:1000px" /></span></p>
                            <h3 style="text-align:center"><a href="../index.html"
                                    title="Đại lý vòng bi SKF tại Hà Nội"><span style="color:#000000"><span
                                            style="font-size:12px">Đại lý uỷ quyền vòng bi SKF tại Hà
                                            Nội</span></span></a></h3>
                            <ul>
                                <li style="text-align:justify"><span style="font-size:14px">Add: LK 01.10,
                                        Liền kề Tổ 9 Mỗ Lao,
                                        Phường Mộ Lao,
                                        Hà Đông,
                                        Hà Nội</span></li>
                                <li style="text-align:justify"><span style="font-size:14px">Hotline (zalo 24/7):
                                        <strong>096 123 8558</strong>- <strong>033 999 5999</strong></span></li>
                            </ul>
                            <p style="text-align:justify">&nbsp;
                            </p>
                            <hr />
                            <p style="text-align:justify"><span style="font-size:14px"><u>Thông tin hữu ích cần tham
                                        khảo:</u></span></p>
                            <ul>
                                <li style="text-align:justify">
                                    <h4><span style="font-size:12px"><a href="../tai-lieu-vong-bi/SKF-Authenticate.html"
                                                title="SKF Authenticate - Phần mềm tra cứu vòng bi SKF giả">SKF
                                                Authenticate - Phần mềm tra cứu vòng bi SKF giả</a></span></h4>
                                </li>
                                <li style="text-align:justify">
                                    <h4><span style="font-size:12px"><a href="../kiem-tra-vong-bi-gia-skf.html"
                                                title="Các phân biệt vòng bi SKF giả bằng kinh nghiệm cơ bản">Các phân
                                                biệt vòng bi SKF giả bằng kinh nghiệm cơ bản</a></span></h4>
                                </li>
                                <li style="text-align:justify">
                                    <h4><span style="font-size:12px"><a
                                                href="../tai-lieu-vong-bi/Chat-luong-vong-bi-SKF-chinh-hang.html"
                                                title="Chất lượng vòng bi SKF có thực sự tốt?">Chất lượng vòng bi SKF có
                                                thực sự tốt?</a></span></h4>
                                </li>
                                <li style="text-align:justify">
                                    <h4><span style="font-size:12px"><a
                                                href="../tai-lieu-vong-bi/xuat-xu-vong-bi-skf.html"
                                                title="Xuất xứ vòng bi SKF chính hãng ở đâu? SKF có bao nhiêu xuất xứ?">Xuất
                                                xứ vòng bi SKF chính hãng ở đâu? SKF có bao nhiêu xuất xứ?</a></span>
                                    </h4>
                                </li>
                                <li style="text-align:justify">
                                    <h4><span style="font-size:12px"><a
                                                href="../tai-lieu-vong-bi/luu-y-khi-mua-vong-bi-skf-chinh-hang.html"
                                                title="Những lưu ý cần biết khi mua vòng bi SKF">Những lưu ý cần biết
                                                khi mua vòng bi SKF</a></span></h4>
                                </li>
                            </ul><br><br>
                            <div style="font-size: 12px; font-weight: 300; color: #000;">
                                <div class="accordion-list" itemscope itemtype="https://schema.org/FAQPage"
                                    style="padding:10px; color:#000; line-height:22px; text-align:justify; margin-bottom:20px; border-radius:3px; border:1px solid #c6d0d3;">
                                    <h3 style="font-size: 13px; margin-top: 0; margin-bottom: 10px; line-height: 18px">
                                        Vòng bi SKF và những câu hỏi thường gặp </h3>
                                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                                        class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="paq1">
                                            <h4 itemprop="name" class="panel-title"><a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                                    aria-expanded="false" aria-controls="collapseOne"><i
                                                        class="short-full glyphicon glyphicon-menu-up"></i><span
                                                        class="star">★</span>Tại sao nên mua Vòng bi SKF tại SKF Ngọc
                                                    Anh?</a></h4>
                                        </div>
                                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
                                            id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="paq1">
                                            <div class="panel-body" itemprop="text"><b>✓ Trả lời:</b>SKF Ngọc Anh là đại
                                                lý ủy quyền chính hãng của SKF,
                                                chuyên phân phối các sản phẩm SKF chính hãng tại Việt Nam nên bạn hoàn
                                                toàn yên tâm về giá bán và chất lượng sản phẩm SKF chính hãng cũng như
                                                chế độ bảo hành. </div>
                                        </div>
                                    </div>
                                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                                        class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="paq2">
                                            <h4 itemprop="name" class="panel-title"><a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree"><i
                                                        class="short-full glyphicon glyphicon-menu-up"></i><span
                                                        class="star">★</span>Làm sao phân biệt được Vòng bi SKF chính
                                                    hãng?</a></h4>
                                        </div>
                                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
                                            id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="paq2">
                                            <div class="panel-body" itemprop="text"><b>✓ Trả lời:</b>Để phân biệt được
                                                sản phẩm SKF chính hãng và Fake (Nhái) đòi hỏi bạn phải có nhiều kinh
                                                nghiệm. Tuy nhiên nếu bạn không có kinh nghiệm hãy sử dụng phần mềm SKF
                                                Authenticate được cung cấp bởi SKF để giúp bạn phân biệt sản phẩm chính
                                                hãng. Truy cập đường dẫn dưới đây: <a href="http://check.ngocanh.com/"
                                                    target="_blank">check.ngocanh.com</a></div>
                                        </div>
                                    </div>
                                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                                        class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading5">
                                            <h4 itemprop="name" class="panel-title"><a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion" href="#collapse5"
                                                    aria-expanded="false" aria-controls="collapse5"><i
                                                        class="short-full glyphicon glyphicon-menu-up"></i><span
                                                        class="star">★</span>Mua hàng tại SKF Ngọc Anh có đảm bảo
                                                    không?</a></h4>
                                        </div>
                                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
                                            id="collapse5" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="heading5">
                                            <div class="panel-body" itemprop="text"><b>✓ Trả lời:</b>Bạn hoàn toàn yên
                                                tâm về sản phẩm mà chúng tôi phân phối. SKF Ngọc Anh cam kết hoàn tiền
                                                100 lần nếu phát hiện hàng giả,
                                                hàng nhái. </div>
                                        </div>
                                    </div>
                                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                                        class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading6">
                                            <h4 itemprop="name" class="panel-title"><a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion" href="#collapse6"
                                                    aria-expanded="false" aria-controls="collapse6"><i
                                                        class="short-full glyphicon glyphicon-menu-up"></i><span
                                                        class="star">★</span>Sản phẩm mua tại SKF Ngọc Anh có COCQ
                                                    không?</a></h4>
                                        </div>
                                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
                                            id="collapse6" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="heading6">
                                            <div class="panel-body" itemprop="text"><b>✓ Trả lời:</b>Tất cả sản phẩm SKF
                                                do chúng tôi phân phối đều có COCQ bản gốc rõ ràng,
                                                Vui lòng liên hệ với chúng tôi để biết thêm chi tiết. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <!-- CÓ DANH MỤC COM -->
            <?php if(count($checkChildren) > 0) { 
                echo get_template_part('template-parts/product_cat/categoryChildrenInArchive', 'category');
                } else { 
                                                                                                // compact "tên truền sang"=>giá trị truyền sang
                    echo get_template_part('template-parts/product_cat/productInArchive', 'product', array('currentProductCat' => $categoryParent));
                 } ?>
            <!-- KHÔNG CÓ DANH MỤC CON THÌ IN RA SẢN PHẨM CỦA DANH MỤC -->
           

        </div>
        < !--vote-->
            <script>
                $(".overview iframe").each(function () {
                        $(this).addClass("lazyload");
                        $(this).attr("data-src", $(this).attr("src"));
                        $(this).removeAttr("src");
                    }

                );
            </script>
            <script type="application/ld+json">
                {

                    "@context": "https://schema.org/",
                    "@type": "Product",
                    "name": "Vòng bi SKF chính hãng",
                    "image": ["https://ngocanh.com/public/cuploads/images/baiviet/vong-bi-skf-ngocanh.jpg"],
                    "description": "SKF Ngọc Anh - Đại lý Ủy quyền vòng bi bạc đạn SKF chính hãng tại Việt Nam - Giao hàng toàn quốc tất cả các ngày trong tuần",
                    "sku": "8668866",
                    "mpn": "8668866",
                    "brand": {
                        "@type": "Brand",
                        "name": "SKF"
                    }

                    ,
                    "review": {

                        "@type": "Review",
                        "reviewRating": {
                            "@type": "Rating",
                            "ratingValue": "5",
                            "bestRating": "5"
                        }

                        ,
                        "reviewBody": "Vòng bi SKF chính hãng chất lượng tốt, hàng chính hãng SKF, giá cả hợp lý, hỗ trợ nhiệt tình và chu đáo, cảm ơn SKF Ngọc Anh",
                        "author": {
                            "@type": "Person",
                            "name": "Truong Son"
                        }
                    }

                    ,
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "5",
                        "ratingCount": "186"
                    }

                    ,
                    "offers": {
                        "@type": "AggregateOffer",
                        "lowPrice": "50000",
                        "highPrice": "10000000",
                        "offerCount": "65225",
                        "priceCurrency": "VND",
                        "availability": "InStock"
                    }
                }
            </script>
            < !--event-->
                <script type="application/ld+json">
                    [{

                            "startDate": "2022-12-28T08:00",
                            "endDate": "2022-12-28T11:30",
                            "name": "⭐ Vòng bi SKF chính hãng",
                            "url": "https://ngocanh.com/san-pham/vong-bi-skf",
                            "image": "https://ngocanh.com/public/cuploads/images/baiviet/vong-bi-skf-ngocanh.jpg",
                            "offers": {
                                "url": "https://ngocanh.com/san-pham/vong-bi-skf",
                                "lowPrice": "0.00",
                                "highPrice": "0.00",
                                "@type": "AggregateOffer",
                                "priceCurrency": "VND",
                                "availability": "InStock",
                                "validFrom": "2022-06-21T12:00"
                            }

                            ,
                            "performer": {
                                "@type": "PerformingGroup",
                                "name": "SKF Ngọc Anh - Đại lý Ủy quyền vòng bi SKF chính hãng"
                            }

                            ,
                            "organizer": {
                                "@type": "Organization",
                                "name": "SKF Ngọc Anh - Đại lý Ủy quyền vòng bi SKF chính hãng",
                                "url": "https://ngocanh.com/"
                            }

                            ,
                            "location": {
                                "address": {
                                    "addressCountry": "Việt Nam",
                                    "addressLocality": "Hà Đông",
                                    "addressRegion": "Hà Nội",
                                    "streetAddress": "LK 01.10, Liền kề Tổ 9 Mỗ Lao",
                                    "postalCode": "",
                                    "@type": "PostalAddress"
                                }

                                ,
                                "geo": {
                                    "latitude": "20.980310",
                                    "@type": "GeoCoordinates",
                                    "longitude": "105.780568"
                                }

                                ,
                                "@type": "Place",
                                "name": "SKF Ngọc Anh"
                            }

                            ,
                            "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
                            "eventStatus": "https://schema.org/EventScheduled",
                            "@context": "http://schema.org",
                            "@type": "Event",
                            "description": "✓ Vòng bi bạc đạn SKF chính hãng được phân phối bởi SKF Ngọc Anh"
                        }

                        ,
                        {

                            "startDate": "2022-12-29",
                            "endDate": "2022-12-29",
                            "name": "⭐ Đại lý Ủy quyền SKF",
                            "url": "https://ngocanh.com/dai-ly-uy-quyen-vong-bi-skf.html",
                            "image": "https://ngocanh.com/public/cuploads/images/baiviet/skf-ngoc-anh-dailySKF.jpg",
                            "offers": {
                                "url": "https://ngocanh.com/dai-ly-uy-quyen-vong-bi-skf.html",
                                "lowPrice": "0.00",
                                "highPrice": "0.00",
                                "@type": "AggregateOffer",
                                "priceCurrency": "VND",
                                "availability": "InStock",
                                "validFrom": "2022-06-21T12:00"
                            }

                            ,
                            "performer": {
                                "@type": "PerformingGroup",
                                "name": "SKF Ngọc Anh - Đại lý Ủy quyền vòng bi SKF chính hãng"
                            }

                            ,
                            "organizer": {
                                "@type": "Organization",
                                "name": "SKF Ngọc Anh - Đại lý Ủy quyền vòng bi SKF chính hãng",
                                "url": "https://ngocanh.com/"
                            }

                            ,
                            "location": {
                                "address": {
                                    "addressCountry": "Việt Nam",
                                    "addressLocality": "Hà Đông",
                                    "addressRegion": "Hà Nội",
                                    "streetAddress": "LK 01.10, Liền kề Tổ 9 Mỗ Lao",
                                    "postalCode": "",
                                    "@type": "PostalAddress"
                                }

                                ,
                                "geo": {
                                    "latitude": "20.980310",
                                    "@type": "GeoCoordinates",
                                    "longitude": "105.780568"
                                }

                                ,
                                "@type": "Place",
                                "name": "SKF Ngọc Anh"
                            }

                            ,
                            "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
                            "eventStatus": "https://schema.org/EventScheduled",
                            "@context": "http://schema.org",
                            "@type": "Event",
                            "description": "✓ SKF Ngọc Anh - Đại lý phân phối ủy quyền SKF chính hãng tại Việt Nam"
                        }

                        ,
                        {

                            "startDate": "2022-12-30",
                            "endDate": "2022-12-30",
                            "name": "⭐ Giao hàng Toàn Quốc",
                            "url": "https://ngocanh.com/bao-gia-vong-bi-skf-chinh-hang.html",
                            "image": "https://ngocanh.com/public/assets/imgs/giao-hang-toan-quoc-1000.gif",
                            "offers": {
                                "url": "https://ngocanh.com/bao-gia-vong-bi-skf-chinh-hang.html",
                                "lowPrice": "0.00",
                                "highPrice": "0.00",
                                "@type": "AggregateOffer",
                                "priceCurrency": "VND",
                                "availability": "InStock",
                                "validFrom": "2022-06-21T12:00"
                            }

                            ,
                            "performer": {
                                "@type": "PerformingGroup",
                                "name": "SKF Ngọc Anh - Đại lý Ủy quyền vòng bi SKF chính hãng"
                            }

                            ,
                            "organizer": {
                                "@type": "Organization",
                                "name": "SKF Ngọc Anh - Đại lý Ủy quyền vòng bi SKF chính hãng",
                                "url": "https://ngocanh.com/"
                            }

                            ,
                            "location": {
                                "address": {
                                    "addressCountry": "Việt Nam",
                                    "addressLocality": "Hà Đông",
                                    "addressRegion": "Hà Nội",
                                    "streetAddress": "LK 01.10, Liền kề Tổ 9 Mỗ Lao",
                                    "postalCode": "",
                                    "@type": "PostalAddress"
                                }

                                ,
                                "geo": {
                                    "latitude": "20.980310",
                                    "@type": "GeoCoordinates",
                                    "longitude": "105.780568"
                                }

                                ,
                                "@type": "Place",
                                "name": "SKF Ngọc Anh"
                            }

                            ,
                            "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
                            "eventStatus": "https://schema.org/EventScheduled",
                            "@context": "http://schema.org",
                            "@type": "Event",
                            "description": "✓ Giao hàng toàn quốc tất cả các ngày trong tuần, Hỗ trợ kỹ thuật 24/7"
                        }

                    ]
                </script>
    </div>
</main><?php get_footer();
?>