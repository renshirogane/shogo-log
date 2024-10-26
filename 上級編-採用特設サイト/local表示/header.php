<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- ページのタイトルを設定 -->
    <title>採用特設サイト | 株式会社TETOTE</title>
    <!-- ページの説明を設定 -->
    <meta name="TETOTE" content="テクノロジーで社会課題を解決する。AIやビッグデータ分析などの技術を活用した社会課題解決サービスを提供するTETOTEの採用サイト。">
    <!-- viewport設定でレスポンシブデザインをサポート -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ファビコンの設定 -->
    <link rel="icon" href="#">
    <!-- 外部CSSファイルの読み込み -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!-- Splide.jsのライブラリを読み込み -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <!-- jQueryの読み込み -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      <!-- 他の<head>の内容 -->
      <?php if (is_front_page() || is_home()) : ?>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // WordPressのトップページにのみ適用
                document.querySelectorAll('.hamburger span').forEach(span => {
                    span.style.background = '#fff'; // トップページでのみ変更
                });
                document.querySelectorAll('.hamburger p').forEach(p => {
                    p.style.color = '#fff'; // トップページでのみ変更
                });
                document.querySelector('.main').classList.add('top-background'); // トップページでクラス追加
            });
        </script>
    <?php endif; ?>
  </head>

  <body>
    <!-- ファーストビュー開始 -->
    <section class="main">
      <!-- ヘッダー開始 -->
      <header class="hamburger_action_clicked">
        <div class="header__inner">
        <div class="header-symbol">
          <!-- ロゴを表示 -->
          <a href="<?php echo home_url(); ?>">
            <?php if (is_front_page() || is_home()) : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/シンボル_白.png" alt="ロゴ" class="logo hamburger_action_clicked">
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/シンボル_黒.png" alt="ロゴ" class="logo hamburger_action_clicked">
            <?php endif; ?>
          </a>
        </div>
          <div class="header__content">
            <div class="header__info infobox">
              <a href="<?php echo esc_url( home_url( '/details' ) ); ?>" class=" infobox__area">
                <p class="infobox__title info-details">募集要項</p>
              </a>
              <a href="<?php echo esc_url( home_url( '/entry' ) ); ?>" class="infobox__area">
                <p class="infobox__title info-entry">ENTRY</p>
              </a>
            </div><!-- /.header__info -->
            <!-- ハンバーガーメニュー -->
            <div class="menu-container">
              <div class="hamburger hamburger_force_clicked hamburger_action_clicked">
                <span></span>
                <span></span>
                <span></span>
                <p>MENU</p>
              </div>
              <div class="hamburger__inner hamburger_action_clicked">
                <div class="hamburger-symbol">
                  <!-- ロゴを表示 -->
                  <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/シンボル_黒.png" alt="ロゴ" class="logo"></a>
                </div>
                <div class="hamburger__menu-area">
                  <ul class="menu">
                    <li class="hamburger-item">
                    <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">
                        <p class="item_e">ABOUT US</p>
                        <p class="item_j">TETOTEについて</p>
                      </a>
                    </li>
                    <li class="hamburger-item">
                    <a href="<?php echo esc_url( home_url( '/benefits' ) ); ?>">
                        <p class="item_e">BENEFITS</p>
                        <p class="item_j">福利厚生について</p>
                      </a>
                    </li>
                    <li class="hamburger-item">
                      <a href="<?php echo esc_url( home_url( '/archive-staff' ) ); ?>">
                        <p class="item_e">STAFF</p>
                        <p class="item_j">社員について</p>
                      </a>
                    </li>
                    <li class="hamburger-item">
                      <a href="<?php echo esc_url( home_url( '/career' ) ); ?>">
                        <p class="item_e">CARRER</p>
                        <p class="item_j">研修制度とキャリアパス</p>
                      </a>
                    </li>
                    <li class="hamburger-item">
                      <a href="<?php echo esc_url( home_url( '/archive-blog' ) ); ?>">
                        <p class="item_e">BLOG</p>
                        <p class="item_j">採用ブログ</p>
                      </a>
                    </li>
                    <li class="hamburger-item">
                    <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">
                        <p class="item_e">FAQ</p>
                        <p class="item_j">よくある質問</p>
                      </a>
                    </li>
                  </ul>
                  <div class="hamburger__infobox">
                    <a href="<?php echo esc_url( home_url( '/details' ) ); ?>" class="hamburger__infobox-area">
                      <p class="hamburger__infobox-title hamburger__link-details">募集要項</p>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/entry' ) ); ?>" class="hamburger__infobox-area">
                      <p class="hamburger__infobox-title hamburger__link-entry">ENTRY</p>
                    </a>
                  </div><!-- /.hamburger__link__area -->
                </div><!-- /.hamburger__menu__area -->  
              </div><!-- /.hamburger__inner -->
            </div>
          </div>
        </div><!-- /.header__inner -->
      </header><!-- ヘッダー終了 -->
