<?php
/**
 * Template Name: About Page
 */
get_header();
?>

<main class="wrapper" id="about-page">
<h1>About</h1>
  <!-- About -->
  <section id="profile">
    <h2>Profile</h2>
    <div class="profile">
      <div class="profile-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.jpg" alt="プロフィール画像">
      </div>
      <div class="profile-text">
        <h3>大野 佳樹 / a.k.a. misato</h3>
        <p>
          おおの よしき 埼玉県美里町出身。1998年7月生まれの28歳。<br>
          一度ハマり出したらとことん突き詰めるタイプの性格。MBTIはINFPらしい。<br>
          クリエイティブなことが好きで、これまでには作曲、Webアプリ開発、塾の学習コンテンツ制作などに没頭してきた。<br>
          人文科学全般（特に歴史・文学・文化）が好きで、歴史能力検定や世界遺産検定を趣味で受けている。<br>
          同時に大の旅行好きでもあり、社会人になってから2年間で47都道府県行脚を2周した。<br>
          音楽やゲーム、アニメ、漫画などのサブカルチャーやファッションにも興味がある。<br>
        </p>
      </div>
    </div>
  </section>

  <!-- Background -->
  <section id="background">
    <div class="background-heading">
      <div>
        <span class="background-eyebrow">My journey</span>
        <h2>Background</h2>
      </div>
      <p>学びと仕事を通して、相手に寄り添いながら課題を整理し、前へ進める力を培ってきました。</p>
    </div>

    <div class="background-groups">
      <section class="background-group" aria-labelledby="education-heading">
        <h3 id="education-heading">
          <span class="background-group-mark" aria-hidden="true">01</span>
          学歴
        </h3>
        <ol class="background-timeline">
          <li class="background-item">
            <div class="background-period">
              <time datetime="2020-04">2020.04</time>
              <span aria-hidden="true">—</span>
              <time datetime="2024-03">2024.03</time>
            </div>
            <div class="background-card">
              <span class="background-type">Education</span>
              <h4>早稲田大学 教育学部 国語国文学科</h4>
              <p>近現代文学のゼミに所属し、卒業論文では宇佐見りん『推し、燃ゆ』について研究。</p>
            </div>
          </li>
          <li class="background-item">
            <div class="background-period">
              <time datetime="2021-04">2021.04</time>
              <span aria-hidden="true">—</span>
              <time datetime="2022-03">2022.03</time>
            </div>
            <div class="background-card">
              <span class="background-type">Music</span>
              <h4>ミュージックスクールウッド 作曲本科</h4>
              <p>音楽理論や作曲ソフトの使い方を体系的に学び、ソルフェージュや楽器演奏の実技にも取り組む。</p>
            </div>
          </li>
        </ol>
      </section>

      <section class="background-group" aria-labelledby="career-heading">
        <h3 id="career-heading">
          <span class="background-group-mark" aria-hidden="true">02</span>
          職歴
        </h3>
        <ol class="background-timeline">
          <li class="background-item">
            <div class="background-period">
              <time datetime="2018-05">2018.05</time>
              <span aria-hidden="true">—</span>
              <time datetime="2024-03">2024.03</time>
            </div>
            <div class="background-card">
              <span class="background-type">Part-time</span>
              <h4>武田塾 御茶ノ水本校</h4>
              <p>生徒に寄り添った学習計画を提案し、早稲田や上智などの合格を多数サポート。</p>
              <p>チーフ講師として、校舎運営業務や新人講師研修、現役講師への指導も担当。</p>
            </div>
          </li>
          <li class="background-item">
            <div class="background-period">
              <time datetime="2024-04">2024.04</time>
              <span aria-hidden="true">—</span>
              <time datetime="2026-06">2026.06</time>
            </div>
            <div class="background-card">
              <span class="background-type">Full-time</span>
              <h4>株式会社マイナビ</h4>
              <p>社内SEとしてシステムの開発・保守ディレクション、事業部からの問い合わせ対応を担当。</p>
            </div>
          </li>
        </ol>
      </section>
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
          ['Vue.js/Nuxt', '60%'],
          ['React/Next.js', '40%'],
          ['PHP(Laravel)', '60%'],
          ['Ruby(Rails)', '20%'],
          ['Python', '40%'],
          ['WordPress', '60%'],
          ['SQL', '40%'],
        ],
        'desc' => 'フロントエンド、バックエンドともにある程度触っています。VueとLaravelが最も得意で、React/Next.jsも少しだけ触れたことがあります。現在はNuxtとRuby on Railsを勉強中です。'
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

  <section id="qualification">
    <div class="qualification-heading">
      <div>
        <h2>Qualification</h2>
        <p>これまでに取得した資格・認定</p>
      </div>
      <span class="qualification-count">9 certifications</span>
    </div>

    <?php
    $qualifications = [
      ['date' => '2017.02', 'category' => 'Language', 'title' => '実用英語技能検定 準1級', 'result' => '合格'],
      ['date' => '2022.03', 'category' => 'Language', 'title' => 'TOEIC Listening & Reading Test', 'result' => '790点'],
      ['date' => '2022.11', 'category' => 'IT', 'title' => '基本情報技術者試験', 'result' => '合格'],
      ['date' => '2022.12', 'category' => 'IT', 'title' => '応用情報技術者試験', 'result' => '合格'],
      ['date' => '2024.12', 'category' => 'Hobby', 'title' => '歴史能力検定 2級世界史', 'result' => '合格'],
      ['date' => '2025.12', 'category' => 'Hobby', 'title' => '歴史能力検定 2級日本史', 'result' => '合格'],
      ['date' => '2026.03', 'category' => 'Hobby', 'title' => '世界遺産検定 2級', 'result' => '合格'],
      ['date' => '2026.04', 'category' => 'IT', 'title' => 'AWS Certified Solutions Architect - Associate', 'result' => '取得'],
      ['date' => '2026.04', 'category' => 'IT', 'title' => 'AWS Certified Developer - Associate', 'result' => '取得'],
    ];
    ?>

    <ol class="qualification-list">
      <?php foreach ($qualifications as $qualification) : ?>
        <li class="qualification-item">
          <time datetime="<?php echo esc_attr(str_replace('.', '-', $qualification['date'])); ?>">
            <?php echo esc_html($qualification['date']); ?>
          </time>
          <h3><?php echo esc_html($qualification['title']); ?></h3>
          <span class="qualification-result"><?php echo esc_html($qualification['result']); ?></span>
          <span class="qualification-category qualification-category--<?php echo esc_attr(strtolower($qualification['category'])); ?>">
            <?php echo esc_html($qualification['category']); ?>
          </span>
        </li>
      <?php endforeach; ?>
    </ol>
  </section>

</main>

<?php get_footer(); ?>
