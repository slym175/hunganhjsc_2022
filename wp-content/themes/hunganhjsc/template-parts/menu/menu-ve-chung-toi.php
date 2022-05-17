<?php
global $nanoCategoryHelper;

$menuLocations = get_nav_menu_locations();

$menuNameOne = wp_get_nav_menu_name('footerLocationOne');


$menuId = $menuLocations['footerLocationOne'];

$menu1 = $nanoCategoryHelper::nav_menu_object_tree(wp_get_nav_menu_items($menuId));
?>

<ul class="list-unstyled">
    <li> <?php echo $menuNameOne ?></li>

    <?php foreach($menu1 as $menuItemOne) : ?>

    <li><a href="<?php echo $menuItemOne->url ?>"
            title="<?php echo $menuItemOne->title ?>"><?php echo $menuItemOne->title ?></a></li>
    <?php endforeach; ?>

    <?php 
        $idImageVeChungToi = get_field('image_ve_chung_toi','option');
    ?>

    <li class="bct_reg"><span style="font-size: 11px; color: #000; font-weight: 300;">SKF Authorized
            Distributor</span><br>
        <a>
            <?php echo wp_get_attachment_image($idImageVeChungToi,'full', false ,array( 'class' => 'width-168px')) ?>
        </a>
    </li>
</ul>