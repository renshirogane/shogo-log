    <footer><!-- フッター開始 -->
      <div class="footer__image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/フッター_イメージ画像.png" alt="フッターの画像です。" class="normal">
        <img src="<?php echo get_template_directory_uri(); ?>/img/フッター_イメージ画像_sp.png" alt="フッターの画像です。" class="sp">
      </div><!-- /.footer__image -->
      <div class="footer__content">
        <div class="footer__content-inner">
          <p class="footer__content-text">わたしたちと一緒に働く仲間を募集中です。<br>少数精鋭のチームで、<br>あなたも会社も一緒に成長していきましょう。</p>
          <div class="footer__content-entry entrybox">
            <a href="<?php echo esc_url( home_url( '/entry' ) ); ?>" class="entrybox__area">
              <p class="link-title">ENTRY</p>
              <p class="link-button">＞</p>
            </a>
          </div>
        </div><!-- /.footer__content-inner -->
      </div><!-- /.footer__content -->
      <div class="footer__info">
        <div class="footer__info-inner">
          <div class="footer-symbol logo">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/シンボル_黒.png" alt="ロゴ" class="logo">
            </a>
          </div><!-- /.footer_symbol -->
          <ul class="footer__list">
            <li class="footer-item"><a href="<?php echo home_url(); ?>"><p>ホーム</p></a></li>
            <li class="footer-item"><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>"><p>TETOTEについて</p></a></li>
            <li class="footer-item"><a href="<?php echo esc_url( home_url( '/staff' ) ); ?>"><p>人を知る</p></a></li>
            <li class="footer-item"><a href="<?php echo esc_url( home_url( '/career' ) ); ?>"><p>研修制度とキャリアパス</p></a></li>
            <li class="footer-item"><a href="<?php echo esc_url( home_url( '/benefits' ) ); ?>"><p>福利厚生</p></a></li>
            <li class="footer-item"><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><p>採用ブログ</p></a></li>
            <li class="footer-item"><a href="<?php echo esc_url( home_url( '/details' ) ); ?>"><p>募集要項</p></a></li>
            <li class="footer-item"><a href="<?php echo esc_url( home_url( '/faq' ) ); ?>"><p>よくある質問</p></a></li>
            <li class="footer-item"><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>"><p>会社概要</p></a></li>
          </ul><!-- /.footer__list -->
          <div class="footer__icon-text">
            <p>© 2024 TETOTE All Right Reserved.</p>
          </div><!-- /.footer_icon_text -->
          <div class="footer__icon-app">
            <img src="<?php echo get_template_directory_uri(); ?>/img/FACEBOOK風のアイコン素材.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/twitterのアイコン素材.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/動画再生ボタン.png" alt="">
          </div><!-- /.footer_icon_app -->
        </div><!-- /.footer__info-inner -->
      </div><!-- /.footer__info -->
    </footer><!-- フッター終了 -->
    <!-- 外部JavaScriptファイルの読み込み -->
    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
  </body>
</html>
 