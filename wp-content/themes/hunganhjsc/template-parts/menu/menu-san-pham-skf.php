<?php
global $nanoCategoryHelper;
//demo
$menuLocations = get_nav_menu_locations();

$menuNameThree = wp_get_nav_menu_name('footerLocationThree');

$menuId = $menuLocations['footerLocationThree'];
$menu3 = $nanoCategoryHelper::nav_menu_object_tree(wp_get_nav_menu_items($menuId));
?>

<ul class="list-unstyled">
    <li> <?php echo $menuNameThree ?></li>

    <?php foreach($menu3 as $menuItemThree) : ?>

    <li><a href="<?php echo $menuItemThree->url ?>" title="<?php echo $menuItemThree->title ?>" ><?php echo $menuItemThree->title ?></a></li>
    <?php endforeach; ?>
</ul>