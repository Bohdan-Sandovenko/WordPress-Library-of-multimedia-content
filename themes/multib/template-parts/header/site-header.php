<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Multib
 */


?>

<header>
    <!-- <a href="">Main</a>
    <a href="">Content catalog</a>
    <a href="">Adding a publication</a>
    <a href="">Log in/Sign Up</a>
    <a href="">User profile</a> -->
    <?php foreach(wp_get_nav_menu_items("header") as $menu_item):?> 
        <a href="<?php echo $menu_item->url;?>"><?php echo $menu_item->title;?></a>
    <?php endforeach;?>
</header>   