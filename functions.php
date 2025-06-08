<?php
/**
 * テーマの基本設定
 */
 
// CSSとJSを読み込む
function my_theme_enqueue_assets() {
  // CSS（style.css）を読み込み
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700;900&display=swap',
    false
  );

  wp_enqueue_style(
    'main-style',
    get_stylesheet_uri(),
    [],
    filemtime(get_theme_file_path('style.css')) // 自動キャッシュバスター
  );

  // JS（menu.js）を読み込み
  wp_enqueue_script(
    'menu-js',
    get_template_directory_uri() . '/assets/js/menu.js',
    [],
    filemtime(get_template_directory() . '/assets/js/menu.js'),
    true // フッターで読み込む
  );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');

// Aboutページ専用スクリプトを読み込み
function enqueue_about_page_script() {
  if (is_page_template('page-about.php')) {
    wp_enqueue_script(
      'about-script',
      get_template_directory_uri() . '/assets/js/about.js', // ✅ スラッシュが抜けていた
      [],
      filemtime(get_template_directory() . '/assets/js/about.js'),
      true
    );
  }
}
add_action('wp_enqueue_scripts', 'enqueue_about_page_script');

// アイキャッチの有効化（全体）
add_theme_support('post-thumbnails');

// カスタム投稿「work」でアイキャッチを有効化
add_post_type_support('work', 'thumbnail');

// カスタム投稿タイプ「work」の登録
function register_custom_post_type_works() {
  register_post_type('work', array(
    'labels' => array(
      'name' => 'Works',
      'singular_name' => 'Work',
      'add_new' => '新規追加',
      'add_new_item' => '新しい作品を追加',
      'edit_item' => '作品を編集',
      'new_item' => '新しい作品',
      'view_item' => '作品を表示',
      'search_items' => '作品を検索',
      'not_found' => '作品が見つかりませんでした',
      'not_found_in_trash' => 'ゴミ箱内に作品が見つかりませんでした',
      'all_items' => 'すべての作品'
    ),
    'public' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-portfolio',
    'rewrite' => array('slug' => 'works'),
    'supports' => array('title', 'editor', 'thumbnail')
  ));
}
add_action('init', 'register_custom_post_type_works');

// タクソノミー（ジャンル）の登録
function register_work_taxonomies() {
  register_taxonomy(
    'genre',
    'work',
    [
      'label' => 'ジャンル',
      'hierarchical' => false,
      'public' => true,
      'rewrite' => ['slug' => 'genre'],
      'show_ui' => true,
      'show_in_rest' => true,
    ]
  );
}
add_action('init', 'register_work_taxonomies');
