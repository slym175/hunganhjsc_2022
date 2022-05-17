<?php
global $nanoCategoryHelper;

$menuLocations = get_nav_menu_locations();

$menuNameTwo = wp_get_nav_menu_name('footerLocationTwo');

$menuId = $menuLocations['footerLocationTwo'];

$menu2 = $nanoCategoryHelper::nav_menu_object_tree(wp_get_nav_menu_items($menuId));
?>

<ul class="list-unstyled">
    <li> <?php echo $menuNameTwo ?></li>

    <?php foreach($menu2 as $menuItemTwo) : ?>

    <li><a href="<?php echo $menuItemTwo->url ?>" title="<?php echo $menuItemTwo->title ?>" ><?php echo $menuItemTwo->title ?></a></li>
    <?php endforeach; ?>
    <li class="bct_reg"><span style="font-size: 11px; color: #000; font-weight: 300;">SKF Authenticate App</span></li>
    <?php
        $idImageThongTinChung = get_field('image_thong_tin_chung','option');
    ?>
    <li><a>
        <?php echo wp_get_attachment_image($idImageThongTinChung,'full', false ,array( 'class' => 'width-168px')) ?>
    </a></li>
</ul>