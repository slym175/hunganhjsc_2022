<?php
$category_list = get_terms(array(
    'taxonomy' => 'category',
    'hide_empty' => true,
    'parent' => 0));
$posts = get_posts($args);
?>
<style>
    @media (min-width: 1024px) {
        main .list-category {
            margin-top: 30px;
        }
    }

    main .list-category .cat:after {
        content: '';
        display: block;
        clear: both;
    }

    main .list-category .clearfix3 {
        clear: both;
        display: block;
    }

    @media (max-width: 767px)and (min-width: 630px) {
        main .list-category .clearfix2 {
            clear: both;
            display: block;
        }

        main .list-category .clearfix3 {
            display: none;
            clear: none;
        }

        main .list-category .cat .txt {
            font-size: 13px;
        }
    }

    @media (max-width: 629px) {
        main .list-category .cat {
            margin-bottom: 28px;
        }

        main .list-category .cat.col-xs-6 {
            width: 100%;
            float: none;
        }

        main .list-category .cat .txt {
            font-size: 13px;
        }
    }

    @media (min-width: 629px) {
        .news-list .item .media-left img {
            height: 99px;
            width: 150px;
            max-width: unset;
        }

</style>
<div class="list-category">
    <div class="row">

        <?php foreach ($category_list as $key => $item) { ?>
            <div class="col-sm-4 col-xs-6 cat" style="text-transform: uppercase;">
                <?php $link = get_term_link($item, 'category');
                $image = get_term_meta($item->term_id, 'danh_sach_tai_lieu', true);
                if (!$link || $link instanceof WP_Error) {
                    $link = 'javascript:void(0)';
                }
                ?>
                <?php ?>
                <div>
                    <a href="<?php echo $link ?>" title="Tin tức chung SKF">
                        <span class="img"><?php echo wp_get_attachment_image($image, 'thumbnail') ?></span> </a>

                    <h2 style="font-size: 16px; margin: 0; padding: 12px 0 6px; font-weight: 700;">
                        <a href="<?php echo $link ?>"><?php echo $item->name ?></a>
                    </h2>

                    <span style="text-transform: none; color: #000; font-weight: 300;">
                    <?php echo $item->description ?>
                </span>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<div class="row news-list">
    <?php foreach ($posts as $item) { ?>
        <div class="col-md-6 col-sm-6 item">
            <div class="media">
                <div class="media-left">
                    <a href=" <?php echo get_permalink($item->ID) ?>" title="">
                        <?php echo get_the_post_thumbnail($item->ID, $size = 'thumbnail', $attr = '') ?>
                    </a>
                </div>
                <div class="media-body">
                    <h3 class="media-heading">
                        <a href="<?php echo get_permalink($item->ID) ?>" title="">
                        <span style="text-transform: none; font-size:18px; color: #000; font-weight: 500;">
                            <?php echo $item->post_title ?></span>
                        </a>
                    </h3>
                    <div align="justify">
                        <?php echo $item->post_content ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
