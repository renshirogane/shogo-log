<?php get_header(); ?>
      <!-- ヒーロー開始 -->
      <div class="top">
        <div class="top__inner">
          <h1 class="top-titile">BECOME A <br>CHALLENGER.</h1>
          <div class="top-banner">
            <p class="top-text">君の挑戦が、意思が、未来を変える</p>
          </div>
          <div class="top__box">
            <?php
                // カスタム投稿タイプ 'blog' からランダムに1件取得
                $args = array(
                  'post_type' => 'blog',
                  'posts_per_page' => 1,
                  'orderby' => 'rand', // ランダムに取得
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ):
                  while ( $the_query->have_posts() ): $the_query->the_post();
            ?>

            <a href="<?php the_permalink(); ?>" class="top__box-area">
              <div class="top__box-topic">
                <p>NEWS</p>
              </div><!-- /.top__box-topic -->

                <div class="top__box-text">
                  <p class="top__box-title"><?php the_title(); ?></p>
                  <div class="top__box-linkarea">
                    <p class="linkarea-title">VIEW MORE</p>
                    <p class="linkarea-button">></p>
                  </div>
                </div><!-- /.top__box-text -->
            </a>

            <?php
                  endwhile;
                endif;
                wp_reset_postdata(); // クエリのリセット
            ?>

          </div><!-- /.top__box -->
        </div><!-- /.top__inner -->
      </div><!-- ヒーロー終了 -->
    </section><!-- ファーストビュー終了 -->

    <!-- TETOTEについて開始 -->
    <section class="about-image" id="about-us">
      <div class="about-image__inner">
        <div class="about-image__image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/TETOTEについて_イメージ1.png" alt="TETOTEについてのスライド1枚目">
          <img src="<?php echo get_template_directory_uri(); ?>/img/TETOTEについて_イメージ2.png" alt="TETOTEについてのスライド1枚目">
          <img src="<?php echo get_template_directory_uri(); ?>/img/TETOTEについて_イメージ3.png" alt="TETOTEについてのスライド1枚目">
          <img src="<?php echo get_template_directory_uri(); ?>/img/TETOTEについて_イメージ1.png" alt="TETOTEについてのスライド1枚目">
          <img src="<?php echo get_template_directory_uri(); ?>/img/TETOTEについて_イメージ2.png" alt="TETOTEについてのスライド1枚目">
          <img src="<?php echo get_template_directory_uri(); ?>/img/TETOTEについて_イメージ3.png" alt="TETOTEについてのスライド1枚目">
        </div><!-- /.about-image__image -->
        <div class="about-image__text">
          <p>後悔しないキャリアを作る、</p>
          <p>それこそが、我々の使命だ</p>
        </div><!-- /.about-image__text -->
      </div><!-- /.about-image__inner -->
    </section><!-- TETOTEについて終了 -->

    <section class="about-content">
      <div class="about-content__inner">
        <div class="about-content__text">
          <p class="about-text1">「人手不足」<br>今の日本が抱えるこの社会課題に挑み、<br>企業と個人の可能性を最大限に引き出す。<br>それが私達の役目。</p><!-- /.about-text1 -->
          <p class="about-text2">単につなぐだけじゃない。<br>「手と手」を取り合っていけるような、<br>持続可能な社会を、一緒に作りませんか？</p><!-- /.about-content_text2 -->
        </div><!-- /.about-content__text -->
        <div class="about-content__linkbox linkbox">
          <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="linkbox__area">
            <p class="link-title">VIEW MORE</p>
            <p class="link-button">＞</p>
          </a>
        </div><!-- /.about-content_linkbox linkbox -->
      </div><!-- /.about-content__inner -->
    </section>

    <!-- 社員について開始 -->
    <section class="staff splide" id="staff">
      <div class="staff__inner range">
        <div class="headline headline_left">
          <h2 class="headline-title"><span>人</span>を知る</h2>
          <p class="headline-backtitle headline-backtitle_left">MEMBER</p>
          <p class="headline-text">TETOTEの社員がどういった信念を持って働いているのか、<br>一日のスケジュールや仕事内容などを紹介します。</p>
        </div><!-- /.headline headline_left -->
        <div class="splide__track splide__track_staff">
          <!-- 社員リスト -->
          <div class="splide__list splide__list_staff">

          <?php
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; // 今のページ
              $args = array(
              'post_type' => 'staff',
              'paged' => $paged, // サブクエリに渡す
              'posts_per_page' => 6, //
              );
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <!-- 社員 -->
            <a href="<?php the_permalink(); ?>" class="splide__slide splide__slide_staff">

            <?php
            // 投稿IDを取得
            $post_id = get_the_ID();
            // カスタムフィールドの値を取得
            $staff_title_1 = get_post_meta( $post_id, 'staff_title_1', true );
            $staff_title_2 = get_post_meta( $post_id, 'staff_title_2', true );
            $type = get_post_meta( $post_id, 'type', true );
            $date = get_post_meta( $post_id, 'date', true );
            ?>

              <div class="slide-image">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail([300, 379],); ?>
                <?php endif; ?>
              </div><!-- /.slide-image -->
              <div class="staff__content">
                <div class="staff-title">
                  <!-- // カスタムフィールドの値を表示 -->
                  <?php if ( $staff_title_1 ) {
                      echo '<p>' . esc_html( $staff_title_1 ) . '</p>';
                  }?>
                  <!-- // カスタムフィールドの値を表示 -->
                  <?php if ( $staff_title_2 ) {
                      echo '<p>' . esc_html( $staff_title_2 ) . '</p>';
                  }?>
                </div><!-- /.staff-title -->
                <div class="staff-text">
                  <!-- // カスタムフィールドの値を表示 -->
                  <?php if ( $type ) {
                      echo '<p>' . esc_html( $type ) . '</p>';
                  }?>
                  <?php if ( $date ) {
                      echo '<p>' . esc_html( $date ) . '</p>';
                  }?>
                </div><!-- /.staff-text -->
                <p class="staff-name">
                  <?php the_title(); ?>
                </p><!-- /.staff-name -->
              </div><!-- /.staff__content -->
            </a><!-- /.splide__slide splide__slide_staff -->

            <?php endwhile; endif;
              if ( function_exists( 'wp_pagenavi' ) ) {
              wp_pagenavi( array( 'query' => $the_query ) ); // 引数にサブクエリを渡す
              }
              wp_reset_postdata();
              ?>

          </div><!-- /.splide__list -->
          <div class="splide__content">
            <div class="splide__content_linkbox linkbox">
              <a href="<?php echo esc_url( home_url( '/staff' ) ); ?>" class="linkbox__area">
                <p class="link-title">VIEW MORE</p>
                <p class="link-button">＞</p>
              </a>
            </div><!-- /.splidecontent_linkbox linkbox -->
            <div class="splide__button">
              <!-- 左右の操作ボタン -->
              <div class="splide__arrows controls">
                <button class="splide__arrow splide__arrow--prev"><img src="<?php echo get_template_directory_uri(); ?>/img/人を知る_左ボタン.png" alt=""></button>
              </div>
              <!-- 右側の操作ボタン -->
              <div class="splide__arrows controls">
                <button class="splide__arrow splide__arrow--next"><img src="<?php echo get_template_directory_uri(); ?>/img/人を知る_右ボタン.png" alt=""></button>
              </div>
            </div><!-- /.splide__button -->
          </div><!-- /.splide__content -->
        </div><!-- /.splide__track -->
      </div><!-- /.staff__inner range -->
    </section><!-- 社員について終了 -->

    <!-- 福利厚生について開始 -->
    <section class="benefits-career" id="benefits">
      <div class="benefits-career__inner range">
        <div class="headline headline_center">
          <h2 class="headline-title"><span>制度・環境</span>を知る</h2>
          <p class="headline-backtitle headline-backtitle_center">BENEFITS</p>
          <p class="headline-text">当社では働く従業員とそのご家族が健やかに過ごせるよう、多様な研修、福利厚生を提供しています。</p>
        </div><!-- /.headline headline_center -->
        <div class="benefits-career__content">
          <div class="benefits-career__content-area">
            <!-- 研修制度とキャリアパス -->
            <div class="benefits-career__career-box">
              <div class="career-image">
                <div class="career__button vertical">
                  <p class="career__button-text">Traning And Career</p>
                  <a class="career__button-next" href="<?php echo esc_url( home_url( '/career' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/制度・環境を知る_右ボタン.png" alt="" class=" controls"></a>
                </div><!-- /.career__button -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/制度・環境を知る_研修制度とキャリアパス.png" alt="研修制度とキャリアパス" class="career-image-top">
              </div><!-- /.career_image -->
              <div class="career__writing">
                <h3 class="career-title">研修制度とキャリアパス</h3>
                <p class="career-text">個々の目標に合わせたキャリアパスを支える、豊富な研修メニューで、あなた自身の成長を強力にサポートします。</p>
              </div><!-- /.career__writing -->
            </div><!-- /.benefits-career__career-box -->
            <!-- 福利厚生 -->
            <div class="benefits-career__benefits-box">
              <div class="benefits-image">
                <div class="benefits__button vertical">
                  <p class="benefits__button-text">employee benefits</p>
                  <a class="benefits__button-next" href="<?php echo esc_url( home_url( '/benefits' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/制度・環境を知る_右ボタン.png" alt="" class=" controls"></a>
                </div><!-- /.benefits__button -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/制度・環境を知る_福利厚生.png" alt="研修制度とキャリアパス" class="benefits-image-top">
              </div><!-- /.benefits_image -->
              <div class="benefits__writing">
                <h3 class="benefits-title">福利厚生</h3>
                <p class="benefits-text">TETOTEの福利厚生制度は、従業員の健康と幸福を重視し、働きやすい環境を提供することを目的としています。</p>
              </div><!-- /.benefits__writing -->
            </div><!-- /.benefits-benefits__benefits-box -->
          </div><!-- /.benefits-career__content_area -->
        </div><!-- /.benefits-career__content -->
      </div><!-- /.benefits-career__inner range -->
    </section><!-- 福利厚生について終了 -->

    <!--  採用ブログについて開始 -->
    <section class="blog" id="blog">
      <div class="blog__inner range">
        <div class="blog__headline headline_left">
          <div class="blog__headline-box">
            <h2 class="headline-title">採用ブログ</h2>
            <a class="blog__headline-button blog__headline-button-normal" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/採用ブログ_右ボタン.png" class="blog__headline-button-next controls">
              <p class="blog__headline-button-text">VIEW MORE</p>
            </a><!-- /.blog__headline-button -->
          </div><!-- /.blog__headline-box -->
          <p class="headline-backtitle headline-backtitle_left blog__headline-backtitle">BLOG</p>
          <p class="headline-text blog__headline-text">採用情報やイベント情報、社員の紹介など、<br>日々の現場の様子をご紹介します。</p>
        </div><!-- /.blog__headline headline_left -->
        <div class="blog__content">
          <div class="blog__content-area">

              <?php
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; // 今のページ
              $args = array(
              'post_type' => 'blog',
              'paged' => $paged, // サブクエリに渡す
              'posts_per_page' => 4, //
              );
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <a href="<?php the_permalink(); ?>" class="blog__box">

              <?php
              // 投稿IDを取得
              $post_id = get_the_ID();
              // カスタムフィールドの値を取得
              $blog_topic = get_post_meta( $post_id, 'blog_topic', true );
              $blog_date = get_post_meta( $post_id, 'blog_date', true );
              ?>

                <div class="blog__box-image">
                  <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail([156, 180], ); ?>
                  <?php endif; ?>
                </div><!-- /.blog__box_image -->

                <div class="blog__box-writing">
                  <div class="blog__box-topic">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/採用ブログ_カテゴリー.png" alt="">
                    <!-- // カスタムフィールドの値を表示 -->
                    <?php if ( $blog_topic ) {
                        echo '<p>' . esc_html( $blog_topic ) . '</p>';
                    }?>
                  </div><!-- /.blog__box_topic -->

                  <div class="blog__box-title">
                      <p><?php the_title(); ?></p>
                  </div><!-- /.blog__box-title -->

                  <div class="blog__box-date">
                    <!-- // カスタムフィールドの値を表示 -->
                    <?php if ( $blog_date ) {
                      echo '<p>' . esc_html( $blog_date ) . '</p>';
                    }?>
                  </div><!-- /.blog__box_date -->
                </div><!-- /.blog__box-writing -->
              </a><!-- /.blog_box -->

            <?php
                endwhile;
              endif;
              wp_reset_postdata(); // クエリをリセット
            ?>

          </div><!-- /.blog__content-area -->
          <div class="blog__headline-box">
            <a class="blog__headline-button blog__headline-button-sp" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/採用ブログ_右ボタン.png" class="blog__headline-button-next controls">
              <p class="blog__headline-button-text">VIEW MORE</p>
            </a><!-- /.blog__headline-button -->
          </div><!-- /.blog__headline-box -->
        </div><!-- /.blog__content -->
      </div><!-- /.blog__inner range -->
    </section><!--  採用ブログについて終了 -->

    <!-- 採用情報について開始 -->
    <section class="recruitment">
      <div class="recruitment__inner range">
        <div class="headline headline_center">
          <h2 class="headline-title">採用情報</h2>
          <p class="headline-backtitle headline-backtitle_center">RECRUITMENT</p>
          <p class="headline-text">募集要項（職種、業務内容、応募条件、選考フロー）とよくある質問・会社概要などをまとめています。</p>
        </div><!-- /.headline headline_center -->
        <div class="recruitment__content">
          <div class="recruitment__content-area">
            <div class="recruitment__content-details gridbox">
              <a href="<?php echo esc_url( home_url( '/details' ) ); ?>" class="gridbox__area">
                <p class="link-title">募集要項</p>
                <p class="link-button">＞</p>
              </a>  
            </div><!-- /.recruitment__content_details -->
            <div class="recruitment__content-faq gridbox">
              <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="gridbox__area">
                <p class="link-title">よくある質問</p>
                <p class="link-button">＞</p>
              </a>
            </div><!-- /.recruitment__content_faq -->
            <div class="recruitment__content-overview gridbox"><!-- about-usページの下の方にある項目 -->
              <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="gridbox__area">
                <p class="link-title">会社概要</p>
                <p class="link-button">＞</p>
              </a>
            </div><!-- /.recruitment__content_overview -->
          </div><!-- /.recruitment__content_area -->
        </div><!-- /.recruitment__content -->
      </div><!-- /.recruitment__inner range -->
    </section><!-- 採用情報について終了 -->


    
    <?php get_footer(); ?> 