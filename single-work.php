<?php get_header(); ?>

<main class="wrapper">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="work-detail">
      <h1><?php the_title(); ?></h1>

      <div class="post-meta">
        <p class="post-date">
          <span class="label">投稿日：</span>
          <time datetime="<?php echo get_the_date('c'); ?>">
            <?php echo get_the_date('Y年n月j日'); ?>
          </time>
        </p>
        <p class="post-date">
          <span class="label">更新日：</span>
          <time datetime="<?php echo get_the_modified_date('c'); ?>">
            <?php echo get_the_modified_date('Y年n月j日'); ?>
          </time>
        </p>
      </div>

      <div class="post-categories">
        <?php
          $genres = get_the_terms(get_the_ID(), 'genre');
          if ($genres && !is_wp_error($genres)) :
            foreach ($genres as $genre) : ?>
              <span class="category-label"><?php echo esc_html($genre->name); ?></span>
            <?php endforeach;
          endif;
        ?>
      </div>

      <?php if (has_post_thumbnail()) : ?>
        <div class="thumbnail">
          <?php the_post_thumbnail('large'); ?>
        </div>
      <?php endif; ?>

      <div class="content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
