<?php
/* 404.php */
status_header(404);
nocache_headers();
get_header(); ?>

<main id="primary" class="wrapper">
  <section class="error-404 not-found">
    <h1 class="error-title">お探しのページは見つかりませんでした</h1>
    <p class="error-lead">URLが変更されたか、削除された可能性があります。</p>

    <div class="error-actions">
      <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップへ戻る</a>
      <a class="btn" href="<?php echo esc_url( home_url( '/works/' ) ); ?>">作品一覧を見る</a>
    </div>
  </section>
</main>

<?php get_footer();
