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
    <link rel="stylesheet" href="style.css">
    <!-- Splide.jsのライブラリを読み込み -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <!-- jQueryの読み込み -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- ヘッダー開始 -->
    <header class="hamburger_action_clicked">
      <div class="header__inner">
        <div class="header-symbol">
          <!-- ロゴを表示 -->
          <a href="#"><img src="./img/シンボル_黒.png" alt="ロゴ" class="logo hamburger_action_clicked"></a>
        </div>
        <div class="header__content">
          <div class="header__info infobox">
            <a href="#download" class=" infobox__area">
              <p class="infobox__title info-details">募集要項</p>
            </a>
            <a href="#download" class="infobox__area">
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
                <a href="#"><img src="./img/シンボル_黒.png" alt="ロゴ" class="logo"></a>
              </div>
              <div class="hamburger__menu-area">
                <ul class="menu">
                  <li class="hamburger-item">
                    <a href="#about-us">
                      <p class="item_e">ABOUT US</p>
                      <p class="item_j">TETOTEについて</p>
                    </a>
                  </li>
                  <li class="hamburger-item">
                    <a href="#benefits">
                      <p class="item_e">BENEFITS</p>
                      <p class="item_j">福利厚生について</p>
                    </a>
                  </li>
                  <li class="hamburger-item">
                    <a href="#staff">
                      <p class="item_e">STAFF</p>
                      <p class="item_j">社員について</p>
                    </a>
                  </li>
                  <li class="hamburger-item">
                    <a href=""><!-- サイト外のリンク先 -->
                      <p class="item_e">CARRER</p>
                      <p class="item_j">研修制度とキャリアパス</p>
                    </a>
                  </li>
                  <li class="hamburger-item">
                    <a href="#blog">
                      <p class="item_e">BLOG</p>
                      <p class="item_j">採用ブログ</p>
                    </a>
                  </li>
                  <li class="hamburger-item">
                    <a href=""><!-- サイト外のリンク先 -->
                      <p class="item_e">FAQ</p>
                      <p class="item_j">よくある質問</p>
                    </a>
                  </li>
                </ul>
                <div class="hamburger__infobox">
                  <a href="#download" class="hamburger__infobox-area">
                    <p class="hamburger__infobox-title hamburger__link-details">募集要項</p>
                  </a>
                  <a href="#download" class="hamburger__infobox-area">
                    <p class="hamburger__infobox-title hamburger__link-entry">ENTRY</p>
                  </a>
                </div><!-- /.hamburger__link__area -->
              </div><!-- /.hamburger__menu__area -->  
            </div><!-- /.hamburger__inner -->
          </div>
        </div>
      </div><!-- /.header__inner -->
    </header><!-- ヘッダー終了 -->
<!------------------------ キリトリ ------------------------>





    <!-- ファーストビュー開始 -->
    <section class="hero page-archive-blog">
      <div class="hero__inner background-section">
        <div class="hero__box range">
          <h1 class="hero-titile_e">BLOG</h1>
          <p class="hero-titile_j">採用ブログ</p><!-- /.hero-titile_j -->
          <p class="hero-text">採用情報やイベント情報などをご紹介します。</p><!-- /.hero-text -->
        </div><!-- /.hero__box -->
      </div><!-- /.hero__inner -->
      <!-- /.パンクズリスト -->
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
      </div>
    </section><!-- ファーストビュー終了 -->

    <!--  採用ブログについて開始 -->
    <section class="archive-blog splide">
      <div class="splide__track splide__track_blog range">
        <div class="splide__list splide__list_blog">
          <div class="splide__slide splide__slide_blog">
            <!-- 社内研修1 -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/新入社員向けに、入社前研修を行いました。.png" alt="新入社員向けに、入社前研修を行いました。"  class="normal">
                <img src="./img/新入社員向けに、入社前研修を行いました。_sp.png" alt="新入社員向けに、入社前研修を行いました。"  class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内研修</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>新入社員向けに、入社前研修を行いました。</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2025.03.25</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
            <!-- 社内研修2 -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/内定者向け研修を行いました。.png" alt="内定者向け研修を行いました。"  class="normal">
                <img src="./img/内定者向け研修を行いました。_sp.png" alt="内定者向け研修を行いました。"  class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内研修</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>内定者向け研修を行いました。</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2024.08.25</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
            <!-- 社内イベント -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！.png" alt="【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！" class="normal">
                <img src="./img/【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！_sp.png" alt="【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！" class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内イベント</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2025.03.25</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
            <!-- お知らせ -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/【新卒採用2024】エントリー受付中！.png" alt="【新卒採用2024】エントリー受付中！"  class="normal">
                <img src="./img/【新卒採用2024】エントリー受付中！_sp.png" alt="【新卒採用2024】エントリー受付中！"  class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内研修</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>【新卒採用2024】エントリー受付中！</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2024.03.01</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
            <!-- 社内研修1 -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/新入社員向けに、入社前研修を行いました。.png" alt="新入社員向けに、入社前研修を行いました。"  class="normal">
                <img src="./img/新入社員向けに、入社前研修を行いました。_sp.png" alt="新入社員向けに、入社前研修を行いました。"  class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内研修</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>新入社員向けに、入社前研修を行いました。</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2025.03.25</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
            <!-- 社内研修2 -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/内定者向け研修を行いました。.png" alt="内定者向け研修を行いました。"  class="normal">
                <img src="./img/内定者向け研修を行いました。_sp.png" alt="内定者向け研修を行いました。"  class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内研修</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>内定者向け研修を行いました。</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2024.08.25</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
            <!-- 社内イベント -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！.png" alt="【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！" class="normal">
                <img src="./img/【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！_sp.png" alt="【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！" class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内イベント</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2025.03.25</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
            <!-- お知らせ -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/【新卒採用2024】エントリー受付中！.png" alt="【新卒採用2024】エントリー受付中！"  class="normal">
                <img src="./img/【新卒採用2024】エントリー受付中！_sp.png" alt="【新卒採用2024】エントリー受付中！"  class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内研修</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>【新卒採用2024】エントリー受付中！</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2024.03.01</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
          </div><!-- /.splide__slide splide__slide_blog -->
          <div class="splide__slide splide__slide_blog">
            <!-- 社内研修1 -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/新入社員向けに、入社前研修を行いました。.png" alt="新入社員向けに、入社前研修を行いました。"  class="normal">
                <img src="./img/新入社員向けに、入社前研修を行いました。_sp.png" alt="新入社員向けに、入社前研修を行いました。"  class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内研修</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>新入社員向けに、入社前研修を行いました。</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2025.03.25</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
            <!-- 社内研修2 -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/内定者向け研修を行いました。.png" alt="内定者向け研修を行いました。"  class="normal">
                <img src="./img/内定者向け研修を行いました。_sp.png" alt="内定者向け研修を行いました。"  class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内研修</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>内定者向け研修を行いました。</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2024.08.25</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
            <!-- 社内イベント -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！.png" alt="【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！" class="normal">
                <img src="./img/【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！_sp.png" alt="【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！" class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内イベント</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2025.03.25</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
            <!-- お知らせ -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/【新卒採用2024】エントリー受付中！.png" alt="【新卒採用2024】エントリー受付中！"  class="normal">
                <img src="./img/【新卒採用2024】エントリー受付中！_sp.png" alt="【新卒採用2024】エントリー受付中！"  class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内研修</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>【新卒採用2024】エントリー受付中！</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2024.03.01</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
            <!-- 社内研修1 -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/新入社員向けに、入社前研修を行いました。.png" alt="新入社員向けに、入社前研修を行いました。"  class="normal">
                <img src="./img/新入社員向けに、入社前研修を行いました。_sp.png" alt="新入社員向けに、入社前研修を行いました。"  class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内研修</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>新入社員向けに、入社前研修を行いました。</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2025.03.25</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
            <!-- 社内研修2 -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/内定者向け研修を行いました。.png" alt="内定者向け研修を行いました。"  class="normal">
                <img src="./img/内定者向け研修を行いました。_sp.png" alt="内定者向け研修を行いました。"  class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内研修</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>内定者向け研修を行いました。</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2024.08.25</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
            <!-- 社内イベント -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！.png" alt="【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！" class="normal">
                <img src="./img/【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！_sp.png" alt="【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！" class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内イベント</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2025.03.25</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
            <!-- お知らせ -->
            <div class="blog__box blog__box_archive">
              <div class="blog__box-image blog__box-image_archive">
                <img src="./img/【新卒採用2024】エントリー受付中！.png" alt="【新卒採用2024】エントリー受付中！"  class="normal">
                <img src="./img/【新卒採用2024】エントリー受付中！_sp.png" alt="【新卒採用2024】エントリー受付中！"  class="sp">
              </div><!-- /.blog__box_image -->
              <div class="blog__box-writing blog__box-writing_archive">
                <div class="blog__box-topic blog__box-topic_archive">
                  <img src="./img/採用ブログ_カテゴリー.png" alt="">
                  <p>社内研修</p>
                </div><!-- /.blog__box_topic -->
                <div class="blog__box-title blog__box-title_archive">
                  <a href="">
                    <p>【新卒採用2024】エントリー受付中！</p>
                  </a>
                </div><!-- /.blog__box-title -->
                <p class="blog__box-date">2024.03.01</p><!-- /.blog__box_date -->
              </div><!-- /.blog__box-writing -->
            </div><!-- /.blog_box -->
          </div><!-- /.splide__slide splide__slide_blog -->
        </div><!-- /.splide__list splide__list_blog -->
        <div class="splide__button splide__button_blog">
          <!-- 左右の操作ボタン -->
          <div class="splide__arrows splide__arrows_blog controls">
            <button class="splide__arrow splide__arrow_blog splide__arrow--prev plide__arrow_blog--prev"><img src="./img/blog_左ボタン.png" alt=""></button>
          </div>
          <!-- 右側の操作ボタン -->
          <div class="splide__arrows splide__arrows_blog controls">
            <button class="splide__arrow splide__arrow_blog splide__arrow--next splide__arrow_blog--next"><img src="./img/blog_右ボタン.png" alt=""></button>
          </div>
        </div><!-- /.splide__button splide__button_blog -->
      </div><!-- /.splide__track -->
    </section><!--  採用ブログについて終了 -->





<!------------------------ キリトリ ------------------------>
    <footer><!-- フッター開始 -->
      <div class="footer__image">
        <img src="./img/フッター_イメージ画像.png" alt="フッターの画像です。" class="normal">
        <img src="./img/フッター_イメージ画像_sp.png" alt="フッターの画像です。" class="sp">
      </div><!-- /.footer__image -->
      <div class="footer__content">
        <div class="footer__content-inner">
          <p class="footer__content-text">わたしたちと一緒に働く仲間を募集中です。<br>少数精鋭のチームで、<br>あなたも会社も一緒に成長していきましょう。</p>
          <div class="footer__content-entry entrybox">
            <a href="" class="entrybox__area">
              <p class="link-title">ENTRY</p>
              <p class="link-button">＞</p>
            </a>
          </div>
        </div><!-- /.footer__content-inner -->
      </div><!-- /.footer__content -->
      <div class="footer__info">
        <div class="footer__info-inner">
          <div class="footer-symbol logo">
            <a href="#">
              <img src="./img/シンボル_黒.png" alt="ロゴ" class="logo">
            </a>
          </div><!-- /.footer_symbol -->
          <ul class="footer__list">
            <li class="footer-item"><a href="#"><p>ホーム</p></a></li>
            <li class="footer-item"><a href="#"><p>TETOTEについて</p></a></li>
            <li class="footer-item"><a href="#"><p>人を知る</p></a></li>
            <li class="footer-item"><a href="#"><p>研修制度とキャリアパス</p></a></li>
            <li class="footer-item"><a href="#"><p>福利厚生</p></a></li>
            <li class="footer-item"><a href="#"><p>採用ブログ</p></a></li>
            <li class="footer-item"><a href="#"><p>募集要項</p></a></li>
            <li class="footer-item"><a href="#"><p>よくある質問</p></a></li>
            <li class="footer-item"><a href="#"><p>会社概要</p></a></li>
          </ul><!-- /.footer__list -->
          <div class="footer__icon-text">
            <p>© 2024 TETOTE All Right Reserved.</p>
          </div><!-- /.footer_icon_text -->
          <div class="footer__icon-app">
            <img src="/img/FACEBOOK風のアイコン素材.png" alt="">
            <img src="/img/twitterのアイコン素材.png" alt="">
            <img src="/img/動画再生ボタン.png" alt="">
          </div><!-- /.footer_icon_app -->
        </div><!-- /.footer__info-inner -->
      </div><!-- /.footer__info -->
    </footer><!-- フッター終了 -->
    <!-- 外部JavaScriptファイルの読み込み -->
    <script src="script.js"></script>
  </body>
</html>
 