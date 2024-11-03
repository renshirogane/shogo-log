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
          <div class="breadcrumbs__inner range">
          <?php if(function_exists('bcn_display'))
          {
              bcn_display();
          }?>
          </div><!-- /.breadcrumbs__inner range -->
        </div>
      </div>
    </section><!-- ファーストビュー終了 -->

    <!-- 社員について開始 -->
    <section class="archive-staff">
      <div class="archive-staff__inner range">
         <?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; // 今のページ
          $args = array(
          'post_type' => 'staff',
          'paged' => $paged, // サブクエリに渡す
          'posts_per_page' => 6, //
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
                <?php the_post_thumbnail([300, 379],); ?>
              <?php endif; ?>
            </div><!-- /.staff-image staff-image_archive -->            
            <h2 class="staff-title staff-title_archive"> 
              <!-- // カスタムフィールドの値を表示 -->
              <?php if ( $staff_title_1 ) {
                  echo '<p>' . esc_html( $staff_title_1 ) . '</p>';
              }?>
            </h2>
            <h2 class="staff-title staff-title_archive">
              <!-- // カスタムフィールドの値を表示 -->
              <?php if ( $staff_title_2 ) {
                  echo '<p>' . esc_html( $staff_title_2 ) . '</p>';
              }?>
            </h2>
            <div class="staff__content staff__content_archive">
              <div class="staff-text">
                <!-- // カスタムフィールドの値を表示 -->
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


        <?php endwhile; endif;
              if ( function_exists( 'wp_pagenavi' ) ) {
              wp_pagenavi( array( 'query' => $the_query ) ); // 引数にサブクエリを渡す
              }
              wp_reset_postdata();
              ?>
      </div><!-- /.staff__inner range -->
    </section><!-- 社員について終了 -->



    <?php get_footer(); ?>
 