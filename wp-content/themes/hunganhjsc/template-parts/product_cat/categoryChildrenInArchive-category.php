<!-- KHI DANH MỤC CHA CÓ DANH MỤC CON THÌ IN RA CÁC DANH MỤC CON -->
            <div class="list-category" style="margin: 30px 0 0">
                <div class="container">
                    <div class="row">
                        <?php 
                            $categoryParent=get_queried_object();
                            $checkChildren=get_term_children($categoryParent->term_id, 'product_cat');
            
                                foreach($checkChildren as $idCategory){
                                $categoryChildren =  get_term( $idCategory, $taxonomy = 'product_cat', $output = OBJECT, $filter = 'raw' ) ;?>
                        <div class="col-sm-4 col-xs-6 cat" style="text-transform: uppercase;"><a href=""
                                title="<?php echo $categoryChildren->name ?>"><span class="img"><img width="58"
                                        height="58"
                                        src="../public/uploads/images/7052/vong-bi-cau-tua-lua-150x150cb90c.jpg?v=2.5.9"
                                        alt="<?php echo $categoryChildren->name ?>"
                                        title="<?php echo $categoryChildren->name ?>"></span></a>
                            <div><a href="vong-bi-tu-lua.html" title="<?php echo $categoryChildren->name ?>"><span
                                        class="txt"
                                        style="float: none;"><?php echo $categoryChildren->name ?></span></a><span
                                    style="text-transform: none; color: #000; font-weight: 300;"><?php echo $categoryChildren->name ?></span>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>