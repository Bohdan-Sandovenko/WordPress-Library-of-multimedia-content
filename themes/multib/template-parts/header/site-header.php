<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Multib
 */


?>

<header class="position-relative d-block top-0 start-0 end-0 navbar navbar-expand-lg p-0 fixed">
    <nav class="container d-flex align-items-center justify-content-between py-2 py-lg-4">
        <div class="logo">
            <a class="navbar-brand m-0 position-relative scroll-to-start" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
            </a>
        </div>
        <button class="navbar-toggler float-end collapsed d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="w-100">
            <div class="navbar-collapse collapse py-3 px-2 py-lg-0 px-lg-0" id="bdNavbar">
                <div
                    class="d-lg-flex w-100 flex-wrap align-items-center justify-content-center justify-content-lg-between">
                    <div
                        class="d-flex flex-column flex-lg-row align-items-center col-lg-auto mb-2 justify-content-end mb-lg-0 flex-grow-1">
                        <ul id="main_menu" class="nav d-block d-lg-flex justify-content-end flex-grow-1 me-3">
                            <?php foreach (wp_get_nav_menu_items("header") as $menu_item): ?>
                                <li>
                                    <a class="nav-link" href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>