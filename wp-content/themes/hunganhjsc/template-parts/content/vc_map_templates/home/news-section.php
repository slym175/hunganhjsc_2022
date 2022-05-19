<?php
$title = $args['title'];
$link = $args['link'];
$feedbacks = vc_param_group_parse_atts($args['news_section']);
?>
<div class="newsBox">
    <div class="container">
        <div class="row">
            <div class="col-md-7">

                <?php $link = vc_build_link($link); ?>
                <h2 class="box-heading news text-uppercase">
                    <a href="<?= $link['url'] ? $link['url'] : 'javascript:void(0)' ?>"><?php print_r($title) ?></a>
                </h2>
                <ul class="list-item list-unstyled">
                    <?php foreach ($feedbacks as $key => $item) { ?>
                        <li class="_item">
                            <a href="">
                                <?php echo wp_get_attachment_image($item['avatar'], 'full', true, array('class' => 'img')) ?>
                                <div class="info">
                                    <h3 class="news-title">
                                        <?= $item['title-news']  ?>
                                    </h3>
                                    <p>
                                        <?= $item['description'] ?>
                                    </p>
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <?php
            $terms_post = get_terms(array(
                'taxonomy' => 'category',
                'hide_empty' => false,
            ));
            ?>
            <div class="box-content video">
                <?php foreach ($terms_post as $item) {
                };
                $newest_posts = new WP_Query(array(
                    //              lấy product(hoặc bài post,...)
                    'post_type' => 'post',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            //             lấy theo trường nào trong taxonomy
                            'field'    => 'term_id',
                            'terms'    => $item->term_id,
                        ),
                    ),
                ));
                if ($newest_posts->have_posts()) :
                    while ($newest_posts->have_posts()) : $newest_posts->the_post();
                    endwhile;
                endif;
                ?>
                <div class="col-md-4 col-md-offset-1">
                    <h2 class="box-heading video text-uppercase">
                        <a href="<?php the_permalink(); ?>" target="_blank" rel="nofollow">Video clip</a>
                    </h2><br>
                    <div class="frame">
                        <div class="lazyload img-full">
                            <?php the_post_thumbnail('full') ?>
                        </div>

                    </div>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank" class="title">
                        <span class="tt title" title="<?php the_title(); ?>"><?php the_title(); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>