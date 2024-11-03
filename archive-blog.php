<?php get_header(); ?>


      <!-- ファーストビュー開始 -->
      <div class="hero page-archive-blog">
        <div class="hero__inner background-section">
          <div class="hero__box range">
            <h1 class="hero-titile_e">BLOG</h1>
            <p class="hero-titile_j">採用ブログ</p><!-- /.hero-titile_j -->
            <p class="hero-text">採用情報やイベント情報などをご紹介します。</p><!-- /.hero-text -->
          </div><!-- /.hero__box -->
        </div><!-- /.hero__inner -->
        <!-- /.パンクズリスト -->
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <div class="breadcrumbs__inner range">
          <?php if(function_exists('bcn_display'))
          {
              bcn_display();
          }?>
          </div><!-- /.breadcrumbs__inner range -->
        </div>
      </div>
    </section><!-- ファーストビュー終了 -->

    <!--  採用ブログについて開始 -->
    <section class="archive-blog splide">
      <div class="splide__track splide__track_blog range">
        <div class="splide__list splide__list_blog">
          <div class="splide__slide splide__slide_blog">

            <?php
                  if ( have_posts() ): while ( have_posts() ): the_post(); ?> <!-- 投稿の表示 -->

              <!-- BOX-->
              <a href="<?php the_permalink(); ?>" class="blog__box blog__box_archive">

                <?php
                // 投稿IDを取得
                $post_id = get_the_ID();
                // カスタムフィールドの値を取得
                $blog_topic = get_post_meta( $post_id, 'blog_topic', true );
                $blog_date = get_post_meta( $post_id, 'blog_date', true );
                ?>

                <div class="blog__box-image blog__box-image_archive">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail([156, 180],); ?>
                    <?php endif; ?>
                </div><!-- /.blog__box_image -->
                <div class="blog__box-writing blog__box-writing_archive">
                  <div class="blog__box-topic blog__box-topic_archive">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/採用ブログ_カテゴリー.png" alt="">
                    <!-- // カスタムフィールドの値を表示 -->
                    <?php if ( $blog_topic ) {
                      echo '<p>' . esc_html( $blog_topic ) . '</p>';
                    }?>
                  </div><!-- /.blog__box_topic -->
                  <div class="blog__box-title blog__box-title_archive">
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

            <?php endwhile; endif;
            wp_pagenavi();
            ?>

          </div><!-- /.splide__slide splide__slide_blog -->
          <div class="splide__slide splide__slide_blog">

            <?php
                  if ( have_posts() ): while ( have_posts() ): the_post(); ?> <!-- 投稿の表示 -->

              <!-- BOX-->
              <a href="<?php the_permalink(); ?>" class="blog__box blog__box_archive">

                <?php
                // 投稿IDを取得
                $post_id = get_the_ID();
                // カスタムフィールドの値を取得
                $blog_topic = get_post_meta( $post_id, 'blog_topic', true );
                $blog_date = get_post_meta( $post_id, 'blog_date', true );
                ?>

                <div class="blog__box-image blog__box-image_archive">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail([156, 180], ); ?>
                    <?php endif; ?>
                </div><!-- /.blog__box_image -->
                <div class="blog__box-writing blog__box-writing_archive">
                  <div class="blog__box-topic blog__box-topic_archive">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/採用ブログ_カテゴリー.png" alt="">
                    <!-- // カスタムフィールドの値を表示 -->
                    <?php if ( $blog_topic ) {
                      echo '<p>' . esc_html( $blog_topic ) . '</p>';
                    }?>
                  </div><!-- /.blog__box_topic -->
                  <div class="blog__box-title blog__box-title_archive">
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

            <?php endwhile; endif;
            wp_pagenavi();
            ?>

          </div><!-- /.splide__slide splide__slide_blog -->
        </div><!-- /.splide__list splide__list_blog -->
        <div class="splide__button splide__button_blog">
          <!-- 左右の操作ボタン -->
          <div class="splide__arrows splide__arrows_blog controls">
            <button class="splide__arrow splide__arrow_blog splide__arrow--prev splide__arrow_blog--prev"><img src="<?php echo get_template_directory_uri(); ?>/img/blog_左ボタン.png" alt=""></button>
          </div>
          <!-- 右側の操作ボタン -->
          <div class="splide__arrows splide__arrows_blog controls">
            <button class="splide__arrow splide__arrow_blog splide__arrow--next splide__arrow_blog--next"><img src="<?php echo get_template_directory_uri(); ?>/img/blog_右ボタン.png" alt=""></button>
          </div>
        </div><!-- /.splide__button splide__button_blog -->
      </div><!-- /.splide__track -->
    </section><!--  採用ブログについて終了 -->


    <?php get_footer(); ?>