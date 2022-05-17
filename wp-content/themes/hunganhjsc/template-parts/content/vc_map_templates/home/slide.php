<?php
if (isset($args['slide_items']) && $args['slide_items']) {
    $arr = explode(',', $args['slide_items']);
?>
    <div class="hdr-btm">
        <div id="carousel-example-generic" class="carousel slide lazy-load" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php foreach ($arr as $key => $item) { ?>
                    <div class="item <?= $key === 0 ? 'active' : '' ?>">
                        <a href="" title="">
                            <?php echo wp_get_attachment_image($item, 'full', true) ?>
                        </a>
                    </div>
                <?php } ?>
            </div>

            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
<?php } ?>