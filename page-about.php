<?php
/**
 * Template Name: About Page
 */
get_header();
?>

<main class="wrapper" id="about-page">
<h1>About</h1>
  <!-- About -->
  <section>
    <h2>Profile</h2>
    <div class="profile">
      <div class="profile-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.jpg" alt="プロフィール画像">
      </div>
      <div class="profile-text">
        <h3>大野 佳樹 / a.k.a. misato</h3>
        <p>
          おおの よしき　埼玉県美里町出身。1998年7月生まれ。<br>
          三浪を経て早稲田大学教育学部国語国文学科に入学し、2024年3月卒業。<br>
          現在は大手事業会社で社内システム開発・保守のディレクションを行う。<br>
          開発経験もないままディレクターをしていることに疑問を感じ、現在は独学でデザインやアプリ開発を行っている。<br>
          資格は応用情報技術者試験合格、TOEIC L&R 790点、歴史能力検定 世界史2級。<br>
          また、学生時代からmisato名義で作曲活動を行なっている。ミュージックスクールウッド作曲本科卒業。<br>
          趣味は音ゲーと読書と旅行。<br>
          推しは「ぼっち・ざ・ろっく！」の山田リョウ。<br>
        </p>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills">
    <h2>Skills</h2>

    <?php
    $skill_sections = [
      [
        'title' => 'Design Skills',
        'color' => 'orange',
        'skills' => [
          ['Figma', '80%'],
          ['HTML', '80%'],
          ['CSS', '80%'],
          ['TailWind CSS', '20%'],
        ],
        'desc' => '主にFigmaでデザインを行っています。コンポーネントやオートレイアウトを使いこなし、UIにこだわりつつ効率的にデザインを制作します。HTMLとCSSを使ってデザインを正しく再現することもできます。'
      ],
      [
        'title' => 'Development Skills',
        'color' => 'green',
        'skills' => [
          ['JavaScript', '60%'],
          ['TypeScript', '60%'],
          ['Vue.js', '60%'],
          ['React/Next.js', '40%'],
          ['PHP(Laravel)', '60%'],
          ['Python', '40%'],
          ['WordPress', '60%'],
        ],
        'desc' => 'フロントエンドを中心にいろいろ触っています。Vue.js + Laravel のアプリ開発が一番力を入れたところで、 最近はReact/Next.jsやWordPressにも挑戦しています。'
      ],
      [
        'title' => 'Composing Music Skills',
        'color' => 'purple',
        'skills' => [
          ['作曲', '80%'],
          ['作詞', '20%'],
          ['編曲', '80%'],
          ['Mix', '60%'],
          ['Mastering', '20%'],
        ],
        'desc' => 'DAWはCubase Proを使っており、基本的に打ち込みで作曲をしています。得意ジャンルは王道ポップスやシティポップ、ダンスミュージック等ですが、簡単なBGM制作ならジャンル問わずできます。'
      ],
    ];

    foreach ($skill_sections as $section) : ?>
      <div class="skill-block">
        <h3><?php echo $section['title']; ?></h3>
        <div class="skill-content">
          <div class="skill-bars">
            <?php foreach ($section['skills'] as $skill) : ?>
              <div class="skill-row">
                <span><?php echo $skill[0]; ?>：</span>
                <div class="bar bar-<?php echo $section['color']; ?>" data-width="<?php echo $skill[1]; ?>"></div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="skill-description">
            <p><?php echo $section['desc']; ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </section>

  <!-- Personality -->
  <section id="personality">
  <h2>Personality</h2>

  <div class="personality-item">
    <h3>不器用ですが、泥臭く努力するタイプです</h3>
    <p>
      恐縮ながら、周囲から「努力家」と言われることが多いです。<br>
      公立中学では評定平均3以下という成績でしたが、猛勉強の末、早稲田大学に合格しました。<br>
      DTMについても、音楽経験が学校の授業程度しかなかったところから独学を重ね、作曲ができるようになりました。
    </p>
  </div>

  <div class="personality-item">
    <h3>クリエイティブなことが好きです</h3>
    <p>
      高校時代に部活動でDTM（作曲）に触れたのをきっかけに、大学ではコロナ禍の生活の中で曲作りに打ち込んできました。<br>
      「ものづくり」が好きな性格のおかげで、デザインやアプリ開発にもどっぷりハマりました。
    </p>
  </div>

  <div class="personality-item">
    <h3>MBTIは「INFP（仲介者）」です</h3>
    <p>
      内向的で感受性豊かな理想主義者タイプ、らしいです（笑）。<br>
      ときどき生きづらさを感じることもありますが、クリエイティブな活動に活かせるこの性格は、自分でも気に入っています。
    </p>
  </div>
</section>

</main>

<?php get_footer(); ?>

