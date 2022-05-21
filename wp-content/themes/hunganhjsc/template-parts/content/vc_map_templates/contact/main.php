<?php if (isset($args) && $args):
    ?>

    <br><?php print_r($args['thanks']) ?>
    <br>
    <div style="padding-top: 15px;"><a href=""><img src="" height="59px" alt=""><?php echo wp_get_attachment_image($args['images'], 'full', true) ?></a></div><br>

    <h1 style="font-size: 18px ;font-weight: 700"><?php print_r($args['title']) ?></h1><br>
    <?php print_r($args['text1']) ?><br>
    <?php $phone = get_field('hotline', 'option');
    $phoneItem = explode(",", $phone);
    if (isset($phone)) { ?>
        <?php foreach ($phoneItem as $k => $phone): ?>
            Hotline:   <?= $k !== 0 ? '-' : '' ?><a href="" rel="nofollow"><?= $phone ?></a>
        <?php endforeach; ?>
    <?php } ?>
    <?php $email = get_field('email', 'options');
    if (isset($email)) {
        ?>
        <br> Email: <a href="mailto:info@ngocanh.com" rel="nofollow"><span style="font-weight: 700;"><?php echo $email ?></span></a>
    <?php } ?>
    <br>

    <hr>
    <?php $doiTac = get_field('doi_tac_du_an', 'option');
    if (isset($doiTac)): ?>
        Đối tác - Dự án:<br>
        <a href="" rel="nofollow"><span style="font-weight: 700;"><?php print_r($doiTac) ?></span></a>
    <?php endif ?>
    <br>
    <hr>
    <div align="left">
        <?php
        $chiNhanh = get_field('chi_nhanh', 'option');
        if ($chiNhanh):
            foreach ($chiNhanh as $chiNhanhItem): ?>
                <h2 style="font-size: 18px ;font-weight: 700"><strong><?php echo $chiNhanhItem['ten_day_du'] ?></strong></h2><br>
                <span style="font-size: 12px; font-weight: 400; color: #000;">
                                <?php echo $chiNhanhItem['dia_chi'] ?>
                            </span><br>
                Tel: <a href="tel:<?php echo $chiNhanhItem['sdt'] ?>"
                        rel="nofollow"><?php echo $chiNhanhItem['sdt'] ?></a> <br>
            <?php endforeach;
        endif; ?>
    </div>
<?php endif;
