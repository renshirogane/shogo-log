<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- ページのタイトルを設定 -->
    <title>青牡丹工務店 | 大阪市北区の住宅建築・リフォーム・公共事業なら青牡丹工務店</title>
    <!-- ページの説明を設定 -->
    <meta name="description" content="大阪府大阪市に拠点をおく青牡丹工務店は、丁寧な家造りで理想を現実にします。住宅建築からリフォームまで、高品質なサービスと経験豊富なスタッフがお客様のニーズに応えます。お気軽にご相談ください。">
    <!-- 検索エンジンにインデックスしないよう指定 -->
    <meta name="robots" content="noindex">
    <!-- viewport設定でレスポンシブデザインをサポート -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ファビコンの設定 -->
    <link rel="icon" href="#">
    <!-- Google Fonts の読み込み -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;700&family=Kanit:wght@400;700&display=swap">
    <!-- 外部CSSファイルの読み込み -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!-- Splide.jsのライブラリを読み込み -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <!-- jQueryの読み込み -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>


  <body>
    <!-- ヘッダー開始 -->
    <header>
      <div class="header__inner">
        <!-- ロゴを表示 -->
        <a href="#top">
          <div class="header-symbol">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ロゴ.png" alt="ロゴ">
          </div><!-- /.header-symbol -->
        </a>
        <div class="header__content">
          <div class="header__info">
            <!-- /.各シングルページのリンク先 -->
            <div class="header__box" data-header-id="1">
              <div class="header__topic header__topic_accordion">
                <p class="header__topic-title header__topic-title_accordion">
                  私達について
                </p><!-- /.header__topic-title -->
              
                <div class="header__btn header__btn_plus header__btn_accordion">
                  <span></span><span></span>
                </div><!-- シングルページの内容を開くボタン -->                
                <div class="header__btn header__btn_minus header__btn_accordion">
                  <span></span>
                </div><!-- シングルページの内容を開くボタン -->              
              </div><!-- /.header__topic -->
              <div class="header__detail">
                <a href="" class="header__link">
                  <p class="header__topic-text">
                    経営理念
                  </p><!-- /.header__topic-text -->
                </a><!-- /.header__link -->
                <a href="" class="header__link">
                  <p class="header__topic-text">
                    会社概要
                  </p><!-- /.header__topic-text -->
                </a><!-- /.header__link -->
                <a href="" class="header__link">
                  <p class="header__topic-text">
                    安全への取り組み
                  </p><!-- /.header__topic-text -->
                </a><!-- /.header__link -->
              </div><!-- /.header__detail -->
            </div><!-- /.header__box  data-header-id="1"-->
            <div class="header__box" data-header-id="2">
              <div class="header__topic header__topic_accordion">
                <p class="header__topic-title header__topic-title_accordion">
                  事業内容
                </p><!-- /.header__topic-title -->
                <div class="header__btn header__btn_plus header__btn_accordion">
                  <span></span><span></span>
                </div><!-- シングルページの内容を開くボタン -->                
                <div class="header__btn header__btn_minus header__btn_accordion">
                  <span></span>
                </div><!-- シングルページの内容を開くボタン -->              
              </div><!-- /.header__topic -->
              <div class="header__detail">
                <a href="" class="header__link">
                  <p class="header__topic-text">
                    住宅建築・リフォーム
                  </p><!-- /.header__topic-text -->
                </a><!-- /.header__link -->
                <a href="" class="header__link">
                  <p class="header__topic-text">
                    法人新築・リフォーム
                  </p><!-- /.header__topic-text -->
                </a><!-- /.header__link -->
                <a href="" class="header__link">
                  <p class="header__topic-text">
                    公共工事
                  </p><!-- /.header__topic-text -->
                </a><!-- /.header__link -->
              </div><!-- /.header__detail -->
            </div><!-- /.header__box  data-header-id="2"-->
            <div class="header__box" data-header-id="3">
              <div class="header__topic">
                <p class="header__topic-title">
                  お知らせ
                </p><!-- /.header__topic-title -->
              </div><!-- /.header__topic -->
            </div><!-- /.header__box  data-header-id="3"-->
            <div class="header__box" data-header-id="4">
              <div class="header__topic">
                <div class="header__topic-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/アイコン_メール.png" alt="">
                </div><!-- /.header__topic-image -->
                <p class="header__topic-title">
                  お問い合わせ
                </p><!-- /.header__topic-title -->
              </div><!-- /.header__topic -->
            </div><!-- /.header__box  data-header-id="4"-->
          </div><!-- /.header__info -->
        </div>
        <!-- ハンバーガーメニュー -->
        <div class="menu-container">
          <div class="hamburger hamburger_force_clicked hamburger_action_clicked">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="hamburger__inner hamburger_action_clicked">
            <div class="hamburger__menu-area">
              <ul class="menu">
                <li class="hamburger-item">
                  <a href="#top">
                    <p class="item_j">トップページ</p>
                  </a>
                </li>
                <li class="hamburger-item">
                    <a href="#about">
                        <p class="item_j">私達について</p>
                    </a>
                </li>
                <li class="hamburger-item">
                    <a href="#about">
                        <p class="item_j">経営理念</p>
                    </a>
                </li>
                <li class="hamburger-item">
                    <a href="#about">
                        <p class="item_j">会社概要</p>
                    </a>
                </li>
                <li class="hamburger-item">
                    <a href="#about">
                        <p class="item_j">安全への取り組み</p>
                    </a>
                </li>
                <li class="hamburger-item">
                    <a href="#service">
                        <p class="item_j">事業内容</p>
                    </a>
                </li>
                <li class="hamburger-item">
                    <a href="#service">
                        <p class="item_j">住宅建築・リフォーム</p>
                    </a>
                </li>
                <li class="hamburger-item">
                    <a href="#service">
                        <p class="item_j">法人新築・リフォーム</p>
                    </a>
                </li>
                <li class="hamburger-item">
                    <a href="#service">
                        <p class="item_j">公共工事</p>
                    </a>
                </li>
                <li class="hamburger-item">
                  <a href="news">
                    <p class="item_j">お知らせ</p>
                  </a>
                </li>
                <li class="hamburger-item">
                  <a href="#contact">
                    <div class="item__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/アイコン_メール.png" alt="">
                    </div><!-- /.item__image -->
                    <p class="item_j">お問い合わせ</p>
                  </a>
                </li>
                <li class="hamburger-item">
                  <a href="#top">
                    <p class="item_e">© AOBOTAN INC.</p>
                  </a>
                </li>
              </ul>
            </div><!-- /.hamburger__menu__area -->  
          </div><!-- /.hamburger__inner -->
        </div><!-- ハンバーガーメニュー終了 -->
      </div><!-- /.header__inner -->
    </header><!-- ヘッダー終了 -->