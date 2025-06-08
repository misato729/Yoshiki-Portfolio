<?php get_header(); ?>

<main class="wrapper">

  <!-- Hero -->
  <section class="hero">
    <h1>Ohno Yoshiki <span>(a.k.a. misato)</span>'s<br>Portfolio Site</h1>
    <p class="catchcopy"><strong>デザイン</strong> と <strong>Webアプリ</strong> と <strong>音楽</strong> をつくる人。</p>
  </section>

  <!-- About -->
  <section id="about">
    <h2>About</h2>
    <div class="profile">
      <div class="profile-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.jpg" alt="プロフィール画像">
      </div>
      <div class="profile-text">
        <h3>大野 佳樹 / a.k.a. misato</h3>
        <p>
          おおの よしき　埼玉県美里町出身。1998年7月生まれ。<br>
          早稲田大学教育学部国語国文学科卒業。<br>
          現在は大手事業会社で社内システムの開発・保守のディレクションを行う。<br>
          開発経験もないままディレクターをしていることに疑問を感じ、独学でデザインやアプリ開発を行っている。<br>
          また、学生時代からmisato名義で作曲活動を行なっている。<br>
          ミュージックスクールウッド作曲本科卒業。
        </p>
        <p class="link detail"><a href="/about">詳しくはこちら</a></p>
      </div>
    </div>
  </section>

  <!-- Works -->
    <section id="works">
      <h2>Works</h2>
      <div class="scroll-container">
      <div class="works-cards">
        <article class="work-card">
          <div class="work-category">Design</div>
          <div class="thumbnail">
          <a href="/works/ohno-yoshikis-portfolio/">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/MyPortfolio.png" alt="ポートフォリオのサムネ"></a>
          </div>
          <h3>Ohno Yoshiki's Portfolio Site</h3>
          <p>このサイトをWordPressでCMSとして制作しました。</p>
        </article>
        <article class="work-card">
          <div class="work-category">Web App</div>
          <div class="thumbnail">
          <a href="/works/reflec-beat-plus-クリアランク管理アプリ/">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rbplus_thumbnail.png" alt="リフプラアプリのサムネ"></a>
          </div>
          <h3>REFLEC BEAT Plus クリアランク管理アプリ</h3>
          <p>KONAMIの音楽ゲーム「REFLEC BEAT Plus」の、Lv11のクリアランクを管理するWebアプリを作りました。</p>
        </article>
        <article class="work-card">
          <div class="work-category">Music</div>
          <div class="thumbnail">
            <a href="/works/スターライト">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/starlight-thumbnail.png" alt="スターライトのサムネ"></a>
          </div>
          <h3>スターライト（作詞・作曲）</h3>
          <p>大学1年生の頃、コロナ禍で鬱屈とした感情を表現するために作りました。</p>
        </article>
        </div>
        </div>
      <p class="link detail"><a href="/works">詳しくはこちら</a></p>
    </section>


  <!-- Contact -->
  <section id="contact">
    <h2>Contact</h2>
    <p class="email">
      <a href="mailto:misato0729.official@gmail.com">misato0729.official@gmail.com</a><br>または各種SNSまで</p>
    <div class="scroll-container">
    <div class="sns-icons">
      <div class="sns-icon">
        <a href="https://x.com/m_st_p_" >
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/x_logo.jpg" alt="Xアイコン"></a>
          <p class="sns-name">X</p>
      </div>
      <div class="sns-icon">
        <a href="https://qiita.com/misato729" >
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/qiita-white-icon.png" alt="Qiitaアイコン"></a>
          <p class="sns-name">Qiita</p>
      </div> 
      <div class="sns-icon">
        <a href="https://github.com/misato729" >
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/github-mark.png" alt="GitHubアイコン"></a>
          <p class="sns-name">GitHub</p>
      </div>
      <div class="sns-icon">
        <a href="https://www.youtube.com/@misato9277" >
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/_logo.jpg" alt="YouTubeアイコン"></a>
          <p class="sns-name">YouTube</p>
      </div>
      <div class="sns-icon">
        <a href="https://soundcloud.com/user-84160300" >
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/soundcloud.jpg" alt="SoundCloudアイコン"></a>
          <p class="sns-name">SoundCloud</p>
      </div>
    </div>
  </div>
  </section>

</main>

<?php get_footer(); ?>
