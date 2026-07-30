<?php get_header(); ?>

<?php
$desired_order = ['design', 'webapp', 'music']; // スラッグ順に固定
$all_genres = get_terms('genre', ['hide_empty' => false]);

// スラッグ順で並べ替え
$genres = [];
foreach ($desired_order as $slug) {
  foreach ($all_genres as $term) {
    if ($term->slug === $slug) {
      $genres[] = $term;
    }
  }
}

$current = get_query_var('genre');
?>

<main class="wrapper works-archive-page">
  <header class="works-archive-header">
    <h1>Works</h1>

    <!-- タブ切り替え -->
    <nav class="genre-tabs" aria-label="作品カテゴリー">
      <ul>
        <li>
          <a href="<?php echo esc_url(get_post_type_archive_link('work')); ?>"
             class="<?php if (!$current) echo 'active'; ?>"
             <?php if (!$current) echo 'aria-current="page"'; ?>>
            All
          </a>
        </li>
        <?php foreach ($genres as $genre) : ?>
          <li>
            <a href="<?php echo esc_url(get_post_type_archive_link('work') . '?genre=' . $genre->slug); ?>"
               class="<?php echo ($current === $genre->slug) ? 'active' : ''; ?>"
               <?php if ($current === $genre->slug) echo 'aria-current="page"'; ?>>
              <?php echo esc_html($genre->name); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </header>

  <!-- 投稿一覧 -->
  <div class="works-cards-archive">
    <?php
      $args = [
        'post_type' => 'work',
        'posts_per_page' => -1,
      ];

      if (!empty($_GET['genre'])) {
        $args['tax_query'] = [[
          'taxonomy' => 'genre',
          'field' => 'slug',
          'terms' => sanitize_text_field($_GET['genre']),
        ]];
      }

      $works = new WP_Query($args);
    ?>

    <?php if ($works->have_posts()) : while ($works->have_posts()) : $works->the_post(); ?>
      <article class="work-card">

        <?php
          $acf_thumb = get_field('thumbnail_image');
          $youtube_url = get_field('youtube_url');
          $thumbnail_html = '';

          if ($acf_thumb) {
            $thumbnail_html = '<img src="' . esc_url($acf_thumb['url']) . '" alt="' . esc_attr($acf_thumb['alt'] ?: get_the_title()) . '">';
          } elseif ($youtube_url && preg_match('/(?:v=|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $youtube_url, $matches)) {
            $video_id = $matches[1];
            $thumbnail_html = '<img src="https://img.youtube.com/vi/' . esc_attr($video_id) . '/hqdefault.jpg" alt="' . esc_attr(get_the_title()) . '">';
          } elseif (has_post_thumbnail()) {
            $thumbnail_html = get_the_post_thumbnail(get_the_ID(), 'medium');
          }
        ?>

        <?php if ($thumbnail_html) : ?>
          <a class="work-card-thumbnail-link" href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr(get_the_title()); ?>">
            <div class="thumbnail thumb-16x9"><?php echo $thumbnail_html; ?></div>
          </a>
        <?php endif; ?>

        <?php
          $work_genres = get_the_terms(get_the_ID(), 'genre');
          if ($work_genres && !is_wp_error($work_genres)) :
        ?>
          <div class="work-card-genres">
            <?php foreach ($work_genres as $work_genre) : ?>
              <span><?php echo esc_html($work_genre->name); ?></span>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="work-card-excerpt"><?php echo esc_html(wp_strip_all_tags(strip_shortcodes(get_the_content()))); ?></p>
        <a class="work-card-link" href="<?php the_permalink(); ?>">詳しく見る</a>
      </article>
    <?php endwhile; else : ?>
      <p class="works-empty">作品が見つかりませんでした。</p>
    <?php endif; wp_reset_postdata(); ?>
  </div>
</main>

<?php get_footer(); ?>
