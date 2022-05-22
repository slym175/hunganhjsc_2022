<!-- khi danh mục cha không có danh mục con thì in ra sản phẩm của danh mục cha -->
<?php if (isset($args['currentProductCat']) && $idTerm = $args['currentProductCat']): ?>
    <?php if ($idTerm->description): ?>
        <div class="container">
            <div class="category-info vh-content" style="height:350px;overflow:hidden">
                <div class="news-view" style="padding: 0;">
                    <div class="overview"><?= $idTerm->description ?></div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="category-detail">
        <div class="cat-filter">
            <div class="container">
                <ul class="list-unstyled">
                    <li class="first">Hiển thị theo:</li>
                    <?php
                    $terms = get_terms(array(
                        'taxonomy' => 'product_tag',
                        'hide_empty' => false,
                    ));

                    foreach ($terms as $termItem) { ?>
                        <?php $linkTag = get_term_link($termItem); ?>
                        <li><a href="<?php echo $linkTag ?>"><?php echo $termItem->name ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="container">
<!--            <div class="row">-->
<!--                <div class="col-md-9">-->
<!--                    <div class="well box-search">-->
<!--                        <div class="_row" style="margin: 0;">-->
<!--                            <div class="col_left">-->
<!--                                <div class="form-inline">-->
<!--                                    <div class="form-group">-->
<!--                                        <div class="form-control-static">-->
<!--                                        <span class="visible-md visible-sm"><img-->
<!--                                                    src="../public/assets/imgs/icons/search-thongso.svg" width="18"-->
<!--                                                    height="18"/> Tìm theo đường kính vòng-->
<!--                                            bi:</span>-->
<!--                                            <span class="hidden-md hidden-sm"><img-->
<!--                                                        src="../public/assets/imgs/icons/search-thongso.svg" width="18"-->
<!--                                                        height="18"/> Tìm theo thông số đường kính vòng-->
<!--                                            bi:</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col_right">-->
<!--                                <form method="GET" action="https://ngocanh.com/tim-kiem.html" accept-charset="UTF-8">-->
<!--                                    <div class="form-inline">-->
<!--                                        <div class="form-group">-->
<!--                                            <div class="input-group">-->
<!--                                                <input type="number" class="form-control" placeholder="d" name="inside"-->
<!--                                                       value=""/>-->
<!--                                                <span class="input-group-addon">mm</span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <div class="input-group">-->
<!--                                                <input type="number" class="form-control" placeholder="D" name="outside"-->
<!--                                                       value=""/>-->
<!--                                                <span class="input-group-addon">mm</span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <div class="input-group">-->
<!--                                                <input type="number" class="form-control" placeholder="B" name="width"-->
<!--                                                       value=""/>-->
<!--                                                <span class="input-group-addon">mm</span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <button type="submit" class="btn btn-primary hidden-xs"><i-->
<!--                                                        class="glyphicon glyphicon-search"></i>-->
<!--                                            </button>-->
<!--                                            <button type="submit" class="btn btn-primary btn-block visible-xs"><i-->
<!--                                                        class="glyphicon glyphicon-search"></i> Tìm kiếm-->
<!--                                            </button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-3">-->
<!--                    <div class="well box-search">-->
<!--                        <form method="GET" action="https://ngocanh.com/tim-kiem.html" accept-charset="UTF-8"-->
<!--                              class="form-search">-->
<!--                            <div class="input-group">-->
<!--                                <input type="search" class="form-control" placeholder="Từ khóa tìm kiếm" name="q"-->
<!--                                       value=""/>-->
<!--                                <span class="input-group-btn">-->
<!--                                <button type="submit" class="btn btn-primary"><i-->
<!--                                            class="glyphicon glyphicon-search"></i></button>-->
<!--                            </span>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="category-info vh-content">-->
<!--                <div class="news-view">-->
<!--                    <div class="overview">-->
<!--                        Nếu không tìm thấy sản phẩm bạn quan tâm. Đừng ngại, <a-->
<!--                                href="../tu-van-lua-chon-vong-bi-mien-phi.html"><strong>Click vào đây</strong></a>-->
<!--                        để được đội ngũ kỹ sư bán hàng của SKF Ngọc Anh trợ giúp.-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <div class="product-list list4">
                <div class="_row vh-list-ajax">
                    <?php
                    $products = new WP_Query(array(
                        'post_type' => 'product',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'term_id',
                                'terms' => $idTerm->term_id,
                            ),
                        ),
                    ));
                    if ($products->have_posts()) :
                        while ($products->have_posts()) : $products->the_post(); ?>
                            <div class="_item   ">
                                <a rel="nofollow" href="<?php the_permalink(); ?>"
                                   title="Vòng bi SKF QJ 220 N2MA chính hãng">
                                    <div class="img">
                                        <?php the_post_thumbnail() ?>
                                    </div>
                                </a>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <span class="tt" title="<?php the_title(); ?>"><?php the_title(); ?></span>
                                </a>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>
                <div class="clearfix"></div>
                <div>
                    <div class="news-view" style="border-radius: 6px; border: 1px solid #eaeaea; padding: 15px; margin-bottom: 2px; background-color: #f6f6f6;">
                        <h2 style="font-weight: 700; text-transform: uppercase; font-size: 16px; margin: 0; padding: 2px 0 0px;">
                            <a href="javascript:void()" rel="nofollow, noindex"><span style="color:#000000"><?php echo get_field("site_title", 'option') ?></span></a>
                        </h2>

                        <h3 style="margin: 0; padding: 10px 0 3px; font-size: 12px;">
                            <?php
                            $categories = get_categories();
                            foreach ($categories as $k => $category) {
                                echo $k !== 0 ? ' ✅ ' : '';
                                echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                            }
                            ?>
                        </h3>
                        <h4 style="margin: 0; padding: 2px 0 0px;">
                            <span style="font-size: 12px; font-weight: 300; color: #000;">
                                <?php $chiNhanh = get_field('chi_nhanh', 'option'); ?>
                                <?php foreach ($chiNhanh as $chiNhanhItem) {?>
                                    [ <?php echo $chiNhanhItem['ten'] ?> ] <?php echo $chiNhanhItem['dia_chi'] ?> - Tel:<?php echo $chiNhanhItem['sdt'] ?>
                                <?php } ?>
                            </span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif;