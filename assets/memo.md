my-portfolio-theme/     ← テーマフォルダ（任意の名前）
├── style.css           ← テーマ情報の定義＋全体スタイル
├── functions.php       ← スクリプト・メニュー・サムネ登録など
├── index.php           ← デフォルトテンプレート（通常は使わない）
├── header.php          ← <head>やナビゲーション
├── footer.php          ← フッターと</body>閉じタグ
├── front-page.php      ← トップページ（About・Works・Contact）
├── page-about.php      ← About詳細ページ
├── page-works.php      ← Worksページ（カテゴリ切替付き）
├── page-contact.php    ← お問い合わせ（静的 or フォーム）
├── single-work.php     ← 作品詳細（カスタム投稿使用時）
├── archive-work.php    ← 作品カテゴリ一覧
├── assets/             ← CSS・JS・画像を分けて管理
│   ├── css/
│   │   └── style.css（読み込み分離用）
│   ├── js/
│   │   └── menu.js（ハンバーガー展開など）
│   └── img/
│       └── logo.svg など
├── template-parts/     ← 分割テンプレート（ヘッダーやカードなど）
│   ├── nav/
│   │   ├── header-nav.php（メインナビ）
│   │   └── mobile-nav.php（モバイル用）
│   ├── content/
│   │   ├── content-work-card.php（作品カード）
│   │   └── content-profile.php（プロフィールブロック）
│   └── section/
│       ├── section-about.php
│       ├── section-works.php
│       └── section-contact.php
