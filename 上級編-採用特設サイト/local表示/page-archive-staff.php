<?php get_header(); ?>



      <!-- ファーストビュー開始 -->
      <div class="hero page-archive-staff">
        <div class="hero__inner background-section">
          <div class="hero__box range">
            <h1 class="hero-titile_e">STAFF</h1>
            <p class="hero-titile_j">社員について</p><!-- /.hero-titile_j -->
            <p class="hero-text">弊社社員のリアルな声を紹介しています。</p><!-- /.hero-text -->
          </div><!-- /.hero__box -->
        </div><!-- /.hero__inner -->
        <!-- /.パンクズリスト -->
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
      </div>
      </div>
    </section><!-- ファーストビュー終了 -->

    <!-- 社員について開始 -->
    <section class="archive-staff">
      <div class="archive-staff__inner range">
        <!-- 社員1: 西村さん -->
        <div class="staff__box staff__box_archive">
          <div class="staff-image staff-image_archive">
            <img src="<?php echo get_template_directory_uri(); ?>/img/社員_西村さん.png" alt="">
          </div><!-- /.staff-image staff-image_archive -->
          <h2 class="staff-title staff-title_archive">「あなたが担当で良かった」</h2>
          <h2 class="staff-title staff-title_archive">この一言が、最高のやりがい</h2>
          <div class="staff__content staff__content_archive">
            <p class="staff-text">コンサルタント&ensp;2011年入社</p><!-- /.staff-text -->
            <h3 class="staff-name">西村 優</h3><!-- /.staff-name -->
          </div><!-- /.staff__content staff__content_archive -->
        </div><!-- /.staff__box staff__box_archive -->
        <!-- 社員2: 橋本さん -->
        <div class="staff__box staff__box_archive">
          <div class="staff-image staff-image_archive">
            <img src="<?php echo get_template_directory_uri(); ?>/img/社員_橋本さん.png" alt="">
          </div><!-- /.staff-image staff-image_archive -->
          <h2 class="staff-title staff-title_archive">全力で考えぬける環境</h2>
          <h2 class="staff-title staff-title_archive">試練の数だけ強くなれました</h2>
          <div class="staff__content staff__content_archive">
            <p class="staff-text">コンサルタント&ensp;2015年入社</p><!-- /.staff-text -->
            <h3 class="staff-name">橋本 拓也</h3><!-- /.staff-name -->
          </div><!-- /.staff__content staff__content_archive -->
        </div><!-- /.staff__box staff__box_archive -->
        <!-- 社員3: 青木さん -->
        <div class="staff__box staff__box_archive">
          <div class="staff-image staff-image_archive">
            <img src="<?php echo get_template_directory_uri(); ?>/img/社員_青木さん.png" alt="">
          </div><!-- /.staff-image staff-image_archive -->
          <h2 class="staff-title staff-title_archive">お客様も知らない課題を</h2>
          <h2 class="staff-title staff-title_archive">一緒に探し出す醍醐味</h2>
          <div class="staff__content staff__content_archive">
            <p class="staff-text">ソリューション営業&ensp;2017年入社</p><!-- /.staff-text -->
            <h3 class="staff-name">青木 美月</h3><!-- /.staff-name -->
          </div><!-- /.staff__content staff__content_archive -->
        </div><!-- /.staff__box staff__box_archive -->
        <!-- 社員4: 高橋さん -->
        <div class="staff__box staff__box_archive">
          <div class="staff-image staff-image_archive">
            <img src="<?php echo get_template_directory_uri(); ?>/img/社員_高橋さん.png" alt="">
          </div><!-- /.staff-image staff-image_archive -->
          <h2 class="staff-title staff-title_archive">ビジネスの課題を</h2>
          <h2 class="staff-title staff-title_archive">データで解決する醍醐味</h2>
          <div class="staff__content staff__content_archive">
            <p class="staff-text">データサイエンティスト&ensp;2002年入社</p><!-- /.staff-text -->
            <h3 class="staff-name">高橋 智</h3><!-- /.staff-name -->
          </div><!-- /.staff__content staff__content_archive -->
        </div><!-- /.staff__box staff__box_archive -->
        <!-- 社員5: 高田さん -->
        <div class="staff__box staff__box_archive">
          <div class="staff-image staff-image_archive">
            <img src="<?php echo get_template_directory_uri(); ?>/img/社員_高田さん.png" alt="">
          </div><!-- /.staff-image staff-image_archive -->
          <h2 class="staff-title staff-title_archive">どんな難解な案件も</h2>
          <h2 class="staff-title staff-title_archive">チームで突破できる強い連携</h2>
          <div class="staff__content staff__content_archive">
            <p class="staff-text">コンサルタント&ensp;2006年入社</p><!-- /.staff-text -->
            <h3 class="staff-name">高田 凛</h3><!-- /.staff-name -->
          </div><!-- /.staff__content staff__content_archive -->
        </div><!-- /.staff__box staff__box_archive -->
        <!-- 社員6: 橘さん -->
        <div class="staff__box staff__box_archive">
          <div class="staff-image staff-image_archive">
            <img src="<?php echo get_template_directory_uri(); ?>/img/社員_橘さん.png" alt="">
          </div><!-- /.staff-image staff-image_archive -->
          <h2 class="staff-title staff-title_archive">お客様と一緒に開発</h2>
          <h2 class="staff-title staff-title_archive">豊富なプライム案件が魅力です</h2>
          <div class="staff__content staff__content_archive">
            <p class="staff-text">システム事業部課長&ensp;2007年入社</p><!-- /.staff-text -->
            <h3 class="staff-name">橘 光</h3><!-- /.staff-name -->
          </div><!-- /.staff__content staff__content_archive -->
        </div><!-- /.staff__box staff__box_archive -->
      </div><!-- /.staff__inner range -->
    </section><!-- 社員について終了 -->



    <?php get_footer(); ?>
 