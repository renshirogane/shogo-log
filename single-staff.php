<?php get_header(); ?>



    <!-- ファーストビュー開始 -->
    <section class="hero page-single-staff">
      <div class="hero__inner hero__inner_single-staff range">
        <div class="single-staff-hero__writing">
            <?php
                // 投稿IDを取得
                $post_id = get_the_ID();
                // カスタムフィールドの値を取得
                $staff_title_1 = get_post_meta( $post_id, 'staff_title_1', true );
                $staff_title_2 = get_post_meta( $post_id, 'staff_title_2', true );
                $type = get_post_meta( $post_id, 'type', true );
                $date = get_post_meta( $post_id, 'date', true );
                $profile = get_post_meta( $post_id, 'profile', true );
            ?>
            <div class="single-staff-hero__title">
              <h1> <!-- カスタムフィールドの値を表示するタイトルの始まり -->
                  <?php if ( $staff_title_1 ) { ?>
                      <div class="single-staff-hero__title-block">
                          <p><?php echo esc_html( $staff_title_1 ); ?></p>
                      </div>
                  <?php } ?>
              </h1>

              <?php if ( $staff_title_2 ) { ?>
                  <div class="single-staff-hero__title-block">
                      <p><?php echo esc_html( $staff_title_2 ); ?></p>
                  </div>
              <?php } ?>
            </div><!-- /.single-staff-hero__title -->

            <div class="single-staff-hero__title-type">
                <!-- // カスタムフィールドの値を表示 -->
                <?php if ( $type ) {
                    echo '<p>' . esc_html( $type ) . '</p>';
                }?>
            </div><!-- /.single-staff-hero__title-type -->
            <div class="single-staff-hero__title__info">
                <!-- // カスタムフィールドの値を表示 -->
                <h3 class="single-staff-hero__title-name">
                  <?php the_title(); ?>
                </h3><!-- /.single-staff-hero__title-name -->
                <div class="single-staff-hero__title-date">
                  <?php if ( $date ) {
                      echo '<p>' . esc_html( $date ) . '</p>';
                  }?>
                </div><!-- /.single-staff-hero__title-date -->
            </div><!-- /.single-staff-hero__title__info -->
            <div class="single-staff-hero__title-profile">
              <?php if ( $profile ) {
                  echo '<p>' . esc_html( $profile ) . '</p>';
              }?>
            </div><!-- /.single-staff-hero__title-profile -->
            

        </div><!-- /.single-staff-hero__writing -->
        <div class="single-staff-hero__image">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail([286, 368],); ?>
          <?php endif; ?>
        </div><!-- /.single-staff-hero__image -->
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
    </section><!-- ファーストビュー終了 -->

    <!-- インタビュー開始 -->
    <section class="interview">
      <div class="interview__inner range">
        <div class="interview__content">
          <?php
            // 投稿IDを取得
            $post_id = get_the_ID();
            // カスタムフィールドの値を取得
            $answer_1 = get_post_meta( $post_id, 'answer_1', true );
            $answer_2 = get_post_meta( $post_id, 'answer_2', true );
            $answer_3 = get_post_meta( $post_id, 'answer_3', true );
            $answer_4 = get_post_meta( $post_id, 'answer_4', true );
            $answer_5 = get_post_meta( $post_id, 'answer_5', true );
            $answer_6 = get_post_meta( $post_id, 'answer_6', true );
          ?>
          <!-- 質問：普段の業務内容について -->
          <div class="interview__box" id="section1">
            <h2 class="interview__title">
              普段の業務内容について
            </h2>
            <div class="interview__answer">
              <?php 
                // カスタムフィールドの内容を取得し、HTMLとして出力する
                echo get_post_meta($post->ID, 'answer_1', true); 
                ?>
              </div><!-- /.interview__answer -->
          </div><!-- /.interview__box -->
          <!-- 学生時代に力を入れたことは？ -->
          <div class="interview__box" id="section2">
            <h2 class="interview__title">
              学生時代に力を入れたことは？
            </h2>
            <div class="interview__answer">
              <?php 
              // カスタムフィールドの内容を取得し、HTMLとして出力する
              echo get_post_meta($post->ID, 'answer_2', true); 
              ?>
            </div><!-- /.interview__answer -->
          </div><!-- /.interview__box -->
          <!-- TETOTEを志望した理由は？ -->
          <div class="interview__box" id="section3">
            <h2 class="interview__title">
              TETOTEを志望した理由は？
            </h2>
            <div class="interview__answer">
              <?php 
                // カスタムフィールドの内容を取得し、HTMLとして出力する
                echo get_post_meta($post->ID, 'answer_3', true); 
                ?>
            </div><!-- /.interview__answer -->
          </div><!-- /.interview__box -->
          <!-- やりがいを感じる瞬間は？ -->
          <div class="interview__box" id="section4">
            <h2 class="interview__title">
            やりがいを感じる瞬間は？
            </h2>
            <div class="interview__answer">
              <?php 
              // カスタムフィールドの内容を取得し、HTMLとして出力する
              echo get_post_meta($post->ID, 'answer_4', true); 
              ?>
            </div><!-- /.interview__answer -->
          </div><!-- /.interview__box -->
          <!-- どんな人と一緒に働きたい？ -->
          <div class="interview__box" id="section5">
            <h2 class="interview__title">
            どんな人と一緒に働きたい？
            </h2>
            <div class="interview__answer">
              <?php 
              // カスタムフィールドの内容を取得し、HTMLとして出力する
              echo get_post_meta($post->ID, 'answer_5', true); 
              ?>
            </div><!-- /.interview__answer -->
          </div><!-- /.interview__box -->
          <!-- 応募者へのメッセージ -->
          <div class="interview__box" id="section6">
            <h2 class="interview__title">
            応募者へのメッセージ
            </h2>
            <div class="interview__answer">
              <?php 
              // カスタムフィールドの内容を取得し、HTMLとして出力する
              echo get_post_meta($post->ID, 'answer_6', true); 
              ?>
            </div><!-- /.interview__answer -->
          </div><!-- /.interview__box -->
        </div><!-- /.interview__content -->
        <div class="interview__index">
          <p class="interview__index-title">目次</p>
          <ul class="toc">
            <li><a href="#section1" class="toc-link">普段の業務内容について</a></li>
            <li><a href="#section2" class="toc-link">学生時代に力を入れたことは？</a></li>
            <li><a href="#section3" class="toc-link">TETOTEを志望した理由は？</a></li>
            <li><a href="#section4" class="toc-link">やりがいを感じる瞬間は？</a></li>
            <li><a href="#section5" class="toc-link">どんな人と一緒に働きたい？</a></li>
            <li><a href="#section6" class="toc-link">応募者へのメッセージ</a></li>
          </ul>
        </div><!-- /.interview__index -->
      </div><!-- /.interview__inner range -->
    </section><!-- インタビュー終了 -->

    <!-- その他のメンバー開始 -->
    <section class="other-member">
      <div class="other-member__inner range">
        <div class="headline headline_center">
          <h2 class="headline-title headline-title_other">その他のメンバー</h2>
        </div><!-- /.headline headline_center -->
        <div class="other-member__content archive-staff__inner">
          <?php
          // 現在表示されている投稿IDを除外する
          $current_post_id = get_the_ID();

          $args = array(
              'post_type' => 'staff',
              'orderby' => 'rand',        // ランダムに取得
              'posts_per_page' => 3,      // 表示件数を3つに制限
              'post__not_in' => array($current_post_id) // 現在表示中の投稿を除外
          );

          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>

          <!-- 社員 -->
          <a href="<?php the_permalink(); ?>">
            <div class="staff__box staff__box_archive">
              
            <?php
              // 投稿IDを取得
              $post_id = get_the_ID();
              // カスタムフィールドの値を取得
              $staff_title_1 = get_post_meta( $post_id, 'staff_title_1', true );
              $staff_title_2 = get_post_meta( $post_id, 'staff_title_2', true );
              $type = get_post_meta( $post_id, 'type', true );
              $date = get_post_meta( $post_id, 'date', true );
            ?>

              <div class="staff-image staff-image_archive">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail([300, 379]); ?>
                <?php endif; ?>
              </div><!-- /.staff-image staff-image_archive -->            
              <h2 class="staff-title staff-title_archive"> 
                <?php if ( $staff_title_1 ) {
                    echo '<p>' . esc_html( $staff_title_1 ) . '</p>';
                }?>
              </h2>
              <h2 class="staff-title staff-title_archive">
                <?php if ( $staff_title_2 ) {
                    echo '<p>' . esc_html( $staff_title_2 ) . '</p>';
                }?>
              </h2>
              <div class="staff__content staff__content_archive">
                <div class="staff-text">
                  <?php if ( $type ) {
                      echo '<p>' . esc_html( $type ) . '</p>';
                  }?>
                  <?php if ( $date ) {
                      echo '<p>' . esc_html( $date ) . '</p>';
                  }?>
                </div><!-- /.staff-text -->
                <h3 class="staff-name">
                  <?php the_title(); ?>
                </h3><!-- /.staff-name -->
              </div><!-- /.staff__content staff__content_archive -->
            </div><!-- /.staff__box staff__box_archive -->
          </a>

          <?php 
              endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div><!-- /archive-staff__inner -->
      </div><!-- /.other-member__inner range -->
    </section><!-- その他のメンバー終了 -->




<?php get_footer(); ?>
