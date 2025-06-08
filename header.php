<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
<div class="header-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/header.jpg');"></div>

  <div class="wrapper">
    <!-- サイトタイトル -->
    <h1 class="site-title">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
      </a>
    </h1>

    <!-- ハンバーガーメニューボタン -->
    <button class="menu-button" aria-label="メニューを開閉">&#9776;</button>

    <!-- PC用ナビ -->
    <nav class="nav-main">
      <ul>
        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
        <li><a href="<?php echo esc_url(home_url('/works')); ?>">Works</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>#contact">Contact</a></li>
      </ul>
    </nav>

    <!-- モバイルナビ -->
    <nav class="mobile-nav">
      <ul>
        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
        <li><a href="<?php echo esc_url(home_url('/works')); ?>">Works</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>#contact">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>

<?php wp_footer(); ?>
</body>
</html>
