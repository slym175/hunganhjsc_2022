<?php if (isset($args) && $args && function_exists('vc_build_link')): ?>
    <div class="newsBox">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <?php $link = vc_build_link($args['link']); ?>
                    <h2 class="box-heading news text-uppercase" style="font-weight:700; color:#000">
                        <a href="<?= $link['url'] ? $link['url'] : 'javascript:void(0)' ?>"><?= isset($args['title']) && $args['title'] ? $args['title'] : 'Tin tức' ?></a>
                    </h2>
                    <ul class="list-item list-unstyled" style="margin: 0">
                        <?php
                        $argvs = array(
                            'numberposts' => 2,
                            'orderby' => 'rand',
                        );
                        $news = isset($args['news_section']) && $args['news_section'] ? $args['news_section'] : '';
                        if ($news) {
                            $newest_posts = explode(',', $news);
                            $argvs['numberposts'] = count($newest_posts);
                            $argvs['include'] = $newest_posts;
                        }
                        $newest_posts = get_posts($argvs);
                        if ($newest_posts) : global $post;
                            foreach ($newest_posts as $post): setup_postdata($post); ?>
                                <li class="_item">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium'); ?>
                                        <div class="info">
                                            <h3 class="news-title"> <?php the_title(); ?></h3>
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </a>
                                </li>
                            <?php
                            endforeach;
                        endif; ?>
                    </ul>
                </div>
                <div class="box-content video">
                    <div class="col-md-4 col-md-offset-1">
                        <h2 class="box-heading video text-uppercase">
                            <a href="javascript:void(0)" target="_blank"
                               rel="nofollow"><?= isset($args['video_heading']) && $args['video_heading'] ? $args['video_heading'] : '' ?></a>
                        </h2>
                        <div class="frame">
                            <div class="lazyload img-full">
                                <?php $video_image = isset($args['video_image']) && $args['video_image'] ? $args['video_image'] : '';
                                if ($video_image): ?>
                                    <?= wp_get_attachment_image($video_image, 'full') ?>
                                <?php endif; ?>
                            </div>

                        </div>
                        <?php $video_title = isset($args['video_title']) && $args['video_title'] ? $args['video_title'] : '';
                        $video_url = isset($args['video_url']) && $args['video_url'] ? $args['video_url'] : ''; ?>
                        <a data-fancybox href="<?= $video_url ?>" title="<?= $video_title ?>" target="_blank"
                           class="title">
                            <span class="tt title" title="<?= $video_title ?>"><?= $video_title ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif;