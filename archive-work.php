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

<main class="wrapper">
  <h1>Works</h1>

  <!-- タブ切り替え -->
  <div class="genre-tabs">
    <ul>
      <li>
        <a href="<?php echo get_post_type_archive_link('work'); ?>" class="<?php if (!$current) echo 'active'; ?>">
          All
        </a>
      </li>
      <?php foreach ($genres as $genre) : ?>
        <li>
          <a href="<?php echo get_post_type_archive_link('work') . '?genre=' . $genre->slug; ?>"
             class="<?php echo ($current === $genre->slug) ? 'active' : ''; ?>">
            <?php echo esc_html($genre->name); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

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

        <?php if ($thumbnail_html): ?>
          <div class="thumbnail thumb-16x9"><?php echo $thumbnail_html; ?></div>
        <?php endif; ?>

        <h2><?php the_title(); ?></h2>
        <p><?php echo wp_trim_words(get_the_content(), 100); ?></p>
        <a href="<?php the_permalink(); ?>">詳しく見る</a>
      </article>
    <?php endwhile; else : ?>
      <p>作品が見つかりませんでした。</p>
    <?php endif; wp_reset_postdata(); ?>
  </div>
</main>

<?php get_footer(); ?>
