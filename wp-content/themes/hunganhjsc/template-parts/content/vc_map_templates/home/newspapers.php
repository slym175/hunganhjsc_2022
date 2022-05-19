<?php
$title = $args['newspapers'];
$feedbacks = vc_param_group_parse_atts($args['newspapers_list']);

?>
<div class="newsBox" style="padding: 30px 0; background-color: #f5f5f5;">
    <div class="container">
        <div class="text-center">
            <h2 class="box-heading" style="font-weight:700;"><?php print_r($title) ?></h2>
        </div>
        <div class="mainCats" style="margin-left: -15px;margin-right: -15px">
            <div class="lists owl-carousel owl-theme" id="owl-carousel">
                <?php foreach ($feedbacks as $key => $item) { ?>

                    <div class="item">
                        <a class="">
                            <?php echo wp_get_attachment_image($item['avatar'], 'medium', true, array('class' => 'img')) ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<style>
    /*.mainCats .lists {*/
    /*margin-left: -15px;*/
    /*margin-right: -15px;*/
    /*}*/
    /*@media(max-width: 767px){*/
    /*.mainCats .lists ._item{*/
    /*width: 33.3333%;*/
    /*}*/
    /*}*/

    /*@media(max-width: 640px){*/
    /*.mainCats .lists ._item{*/
    /*width: 50%;*/
    /*}*/
    /*}*/
</style>