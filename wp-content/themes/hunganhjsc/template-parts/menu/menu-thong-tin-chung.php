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
</ul>