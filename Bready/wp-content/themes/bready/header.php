<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
  *
  * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
  *
  * @package bready
  */
  ?>
  <!doctype html>
  <html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="https://gmpg.org/xfn/11">
      <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <?php wp_body_open(); ?>
      <div id="page" class="site">
        <!-- <a class="skip-link screen-reader-text" href="#primary"><?php //esc_html_e( 'Skip to content', 'bready' ); ?></a> -->
        <div class="ps-search">
          <div class="ps-search__content"><a class="ps-search__close" href="#"><span></span></a>
          <form class="ps-form--search-2" action="" method="GET">
            <h3>Enter your keyword</h3>
            <div class="form-group">
              <input class="form-control" name="s" type="text" placeholder="">
              <button class="ps-btn active ps-btn--fullwidth">Search</button>
            </div>
          </form>
        </div>
      </div>
      <header class="header header--1">
        <nav class="navigation">
          <div class="ps-container">
            <?php
            wp_nav_menu(array(
            'theme_location' => 'primary_left',
            'container_class' => 'navigation__left',
            'menu_class' => 'menu',
            'menu_id' => '',
            ));
            ?>
            <!--  <div class="navigation__left">
              <ul class="menu">
                <li class="menu-item-has-children current-menu-item"><a href="index.php">Homepage</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                <ul class="sub-menu">
                  <li><a href="index.html">Homepage 1</a></li>
                  <li><a href="homepage-2.html">Homepage 2</a></li>
                  <li><a href="homepage-3.html">Homepage 3</a></li>
                </ul>
              </li>
              <li><a href="about-us.html">About</a></li>
              <li><a href="product-listing.html">Product</a>
              <ul class="sub-menu">
                <li><a href="product-listing.html">Product Listing</a></li>
                <li><a href="product-detail.html">Product Detail</a></li>
              </ul>
            </li>
            <li><a href="#">Pages</a>
            <ul class="sub-menu">
              <li><a href="404-page.html">404 Page</a></li>
              <li><a href="checkout.html">Checkout</a></li>
              <li><a href="cart.html">Cart</a></li>
              <li><a href="whishlist.html">Whishlist</a></li>
              <li><a href="compare.html">Compare</a></li>
            </ul>
          </li>
        </ul>
      </div> -->
      <!-- <div class="navigation__center"><a class="ps-logo" href="<?php //echo esc_url(site_url('/')); ?>"><img src="<?php //echo get_template_directory_uri(); ?>/assets/images/logo-light.png" alt=""></a>
    </div> -->
    <?php
    // custom logo
    if(function_exists('the_custom_logo')){
    the_custom_logo();
    }elseif (is_front_page() && is_home()) { ?>
     <div class="navigation__center"><a class="ps-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-light.png" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>"></a></div>
    <?php } ?>
    
    
    <div class="navigation__right">
      <?php
      wp_nav_menu(array(
      'theme_location' => 'primary_right',
      'container' => '',
      'container_class' => '',
      'menu_class' => 'menu',
      'menu_id' => '',
      ));
      ?>
      <!-- <ul class="menu">
        <li><a href="#">Gallery</a></li>
        <li><a href="blog-list.html">Blogs</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul> -->
      <div class="header__actions">
        <a class="ps-search-btn" href="#"><i class="ba-magnifying-glass"></i></a>
        <div class="ps-cart">
          <a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ba-shopping"></i></a>
          <div class="ps-cart__listing">
            <div class="ps-cart__content">
              <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
              <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping-cart/1.png" alt="">
            </div>
            <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Kingsman</a>
            <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
          </div>
        </div>
        <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
        <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping-cart/2.png" alt="">
      </div>
      <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Joseph</a>
      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
    </div>
  </div>
  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
  <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping-cart/3.png" alt="">
</div>
<div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
<p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
</div>
</div>
<div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
<div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping-cart/1.png" alt="">
</div>
<div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
<p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
</div>
</div>
<div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
<div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping-cart/1.png" alt="">
</div>
<div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
<p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
</div>
</div>
<div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
<div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping-cart/1.png" alt="">
</div>
<div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
<p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
</div>
</div>
</div>
<div class="ps-cart__total">
<p>Number of items:<span>36</span></p>
<p>Item Total:<span>£528.00</span></p>
</div>
<div class="ps-cart__footer"><a href="cart.html">Check out</a></div>
</div>
</div>
</div>
</div>
</div>
</nav>
<nav class="navigation--mobile">
<div class="ps-container"><a class="ps-logo" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-light.png" alt=""></a>
<ul class="menu menu--mobile">
<li class="current-menu-item menu-item-has-children"><a href="#">Homepage</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
<ul class="sub-menu">
<li><a href="index.html">Homepage 1</a></li>
<li><a href="homepage-2.html">Homepage 2</a></li>
<li><a href="homepage-3.html">Homepage 3</a></li>
</ul>
</li>
<li><a href="about.html">About</a></li>
<li class="menu-item-has-children"><a href="product-listing.html">product</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
<ul class="sub-menu">
<li><a href="product-listing.html">Product List</a></li>
<li><a href="product-detail.html">Product Detail</a></li>
<li><a href="order-form.html">Order Form</a></li>
</ul>
</li>
<li class="menu-item-has-children"><a href="about.html">Pages</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
<ul class="sub-menu">
<li><a href="menu.html">Menu</a></li>
<li><a href="cart.html">Shopping Cart</a></li>
<li><a href="checkout.html">Checkout</a></li>
<li><a href="whishlist.html">Whishlist</a></li>
<li><a href="compare.html">Compare</a></li>
<li><a href="404-page.html">Page 404</a></li>
</ul>
</li>
<li class="menu-item-has-children"><a href="blog-grid.html">Blogs</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
<ul class="sub-menu">
<li><a href="blog-grid.html">Blog Grid</a></li>
<li class="menu-item-has-children"><a href="blog-list.html">Blog Listing</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
<ul class="sub-menu">
<li><a href="blog-list.html">Blog List Has Sidebar</a></li>
<li><a href="blog-list.html">Blog List No Sidebar</a></li>
</ul>
</li>
<li><a href="blog-detail.html">Blog Detail</a></li>
</ul>
</li>
<li><a href="contact.html">Contact Us</a></li>
</ul>
<div class="menu-toggle"><span></span></div>
<div class="header__actions"><a class="ps-search-btn" href="#"><i class="ba-magnifying-glass"></i></a>
<div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ba-shopping"></i></a>
<div class="ps-cart__listing">
<div class="ps-cart__content">
<div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
<div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping-cart/1.png" alt="">
</div>
<div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Kingsman</a>
<p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
</div>
</div>
<div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
<div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping-cart/2.png" alt="">
</div>
<div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Joseph</a>
<p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
</div>
</div>
<div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
<div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping-cart/3.png" alt="">
</div>
<div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
<p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
</div>
</div>
<div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
<div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping-cart/1.png" alt="">
</div>
<div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
<p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
</div>
</div>
<div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
<div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping-cart/1.png" alt="">
</div>
<div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
<p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
</div>
</div>
<div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
<div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping-cart/1.png" alt="">
</div>
<div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
<p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
</div>
</div>
</div>
<div class="ps-cart__total">
<p>Number of items:<span>36</span></p>
<p>Item Total:<span>£528.00</span></p>
</div>
<div class="ps-cart__footer"><a href="cart.html">Check out</a></div>
</div>
</div>
</div>
</div>
</nav>
</header>