<?php
$title = $args['title'];
$link = $args['link'];
$feedbacks = vc_param_group_parse_atts($args['news_section']);
$terms_post = get_terms(array(
    'taxonomy' => 'category',
    'hide_empty' => true,
));
foreach ($terms_post as $item) {
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
?>

<div class="newsBox">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php $link = vc_build_link($link); ?>
                <h2 class="box-heading news text-uppercase" style="font-weight:700; color:#000">
                    <a href="<?= $link['url'] ? $link['url'] : 'javascript:void(0)' ?>"><?php print_r($title) ?></a>
                </h2>
                <ul class="list-item list-unstyled">
                    <?php
                    if ($newest_posts->have_posts()) :
                        while ($newest_posts->have_posts()) : $newest_posts->the_post(); ?>
                            <li class="_item">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                    <div class="info">
                                        <h3 class="news-title"> <?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                    </div>
                                </a>
                            </li>
                    <?php
                        endwhile;
                    endif; ?>
                </ul>
            </div>
            <div class="box-content video">
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