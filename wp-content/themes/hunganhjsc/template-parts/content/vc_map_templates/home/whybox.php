<?php
$title = $args['title'];
$feedbacks = vc_param_group_parse_atts($args['whybox_list']); ?>
<div class="whyBox" style="padding: 30px 0;">
    <div class="container">
        <div class="text-center">
            <h2 class="box-heading" style="font-weight:700; color:#000"><?php print_r($title) ?></h2><br>
        </div>
        <div class="list-item row">
            <?php foreach ($feedbacks as $key => $item) { ?>
                <div class="col-md-4 _item">
                    <div class="icon _icon1">
                        <?php echo wp_get_attachment_image($item['avatar'], 'thumbnail', true) ?>
                    </div>
                    <div class="info" align="justify">
                        <?php $link = vc_build_link($item['link']); ?>
                        <h3 class="title">
                            <a href="<?= $link['url'] ? $link['url'] : 'javascript:void(0)' ?>"><?= $item['title'] ?></a>
                        </h3>
                        <div class="desc">
                            <span>
                                <?= $item['description'] ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>