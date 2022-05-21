                    <div class="row">
                        <?php
                        $catalogues  = get_posts(array(
                            'post_type' => 'catalogues',
                            'numberposts'      => -1,
                        ));

                        ?>
                        <div class="list-category" style="margin: 30px 0 0">
                         <div class="row">
                            <?php
                            if (isset($catalogues)) {
                                foreach ($catalogues as $catalogItem) {
                                    // print_r($catalogItem);
                                    ?>
                                    
 
                                            <div class="col-sm-4 col-xs-6 cat" style="text-transform: uppercase;">
                                                <a href="<?php echo get_permalink( $catalogItem->ID, false ) ?>" title="<?php echo $catalogItem->post_title ?>">
                                                    <span class="img">
                                                    <?php echo get_the_post_thumbnail($catalogItem->ID, 'thumbnail', array( 'class' => 'alignleft' )) ?>
                                                    </span>
                                                </a>
                                                <div>
                                                    <a href="<?php echo get_permalink( $catalogItem->ID, false ) ?>" title="<?php echo $catalogItem->post_title ?>">
                                                        <span class="txt" style="font-weight:700"><?php echo $catalogItem->post_title ?></span>
                                                    </a>
                                                    <span style="text-transform: none; color: #000; font-weight: 300;"><?php echo $catalogItem->post_content ?></span>
                                                </div>
                                            </div>
                            <?php }
                             }
                            ?>
                                                                    </div>

                        </div>



                    </div>