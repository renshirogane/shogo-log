<?php get_header(); ?>




      <!-- /.パンクズリスト -->
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <div class="breadcrumbs__inner range">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
        </div><!-- /.breadcrumbs__inner range -->
      </div>

    <!--  ブログの個別ページ開始 -->
    <section class="single-blog">
      <div class="single-blog__inner">
        <?php
            // 投稿IDを取得
            $post_id = get_the_ID();
            // カスタムフィールドの値を取得
            $blog_date = get_post_meta( $post_id, 'blog_date', true );
            $blog_topic = get_post_meta( $post_id, 'blog_topic', true );
            $blog_detail = get_post_meta( $post_id, 'blog_detail', true );
            $single = get_post_meta( $post_id, 'single', true );
        ?>

        <div class="single-blog__head">
          <div class="blog__box-topic blog__box-topic_archive">
            <img src="<?php echo get_template_directory_uri(); ?>/img/採用ブログ_カテゴリー.png" alt="">
            <!-- // カスタムフィールドの値を表示 -->
            <?php if ( $blog_topic ) {
              echo '<p>' . esc_html( $blog_topic ) . '</p>';
            }?>
          </div><!-- /.blog__box_topic -->
          <div class="blog__box-date">
            <!-- // カスタムフィールドの値を表示 -->
            <?php if ( $blog_date ) {
              echo '<p>' . esc_html( $blog_date ) . '</p>';
            }?>
          </div><!-- /.blog__box_date -->
        </div><!-- /.blog__ -->
        <div class="headline single-blog-title">
          <h1 class="headline-title headline-title_other">
            <?php the_title(); ?>
          </h1>
        </div><!-- /.headline -->
        <div class="single-blog-image">
          <?php 
          // カスタムフィールドの内容を取得し、HTMLとして出力する
          echo get_post_meta($post->ID, 'single', true); 
          ?>
        </div><!-- /.single-blog-image -->
        <div class="single-blog__writing">
          <?php 
          // カスタムフィールドの内容を取得し、HTMLとして出力する
          echo get_post_meta($post->ID, 'blog_detail', true); 
          ?>
        </div><!-- /.single-blog-writing -->
      </div><!-- /.single-blog__inner -->
    </section>

    <!-- /.その他ブログページ開始 -->
    <div class="other-blog">
      <div class="other-blog__inner range">

        <?php
          // ランダムに2つのBLOG投稿を取得
          $args = array(
              'post_type' => 'BLOG', // カスタム投稿タイプ
              'posts_per_page' => 2, // 取得する投稿数
              'orderby' => 'rand' // ランダムに取得
          );

          $random_blogs = new WP_Query($args);

          if ($random_blogs->have_posts()) :
              $first_post = true; // 最初の投稿のためのフラグ

            while ($random_blogs->have_posts()) : $random_blogs->the_post();
            // カスタムフィールドの値を取得
              $blog_date = get_post_meta( $post_id, 'blog_date', true );
          
          // デバッグ用：取得した日付を表示
          // echo '<pre>'; var_dump($blog_date); echo '</pre>'; // デバッグ行

          if ($first_post) : // 最初の投稿
        ?>
        <a href="<?php the_permalink(); ?>" class="other-blog__box other-blog__box_left">
            <div class="other-blog-button">
                <img src="<?php echo get_template_directory_uri(); ?>/img/single-blog_左ボタン.png" alt="">
            </div><!-- /.other-blog-button -->
            <div class="other-blog-text">
                <div class="other-blog-title">
                    <p>
                        <?php the_title(); ?>
                    </p>
                </div><!-- /.other-blog-title -->
                <div class="other-blog-date">
                    <!-- // カスタムフィールドの値を表示 -->
                    <?php if ($blog_date) : ?>
                        <p><?php echo esc_html($blog_date); ?></p>
                    <?php else : ?>
                        <p>日付が設定されていません</p> <!-- 日付が設定されていない場合の表示 -->
                    <?php endif; ?>
                </div><!-- /.other-blog-date -->
            </div><!-- /.other-blog-text -->
        </a><!-- /.other-blog__box -->
        <?php
          $first_post = false; // フラグを切り替え
          else : // 2つ目の投稿
        ?>
        <a href="<?php the_permalink(); ?>" class="other-blog__box other-blog__box_right">
            <div class="other-blog-text">
                <div class="other-blog-title">
                    <p>
                        <?php the_title(); ?>
                    </p>
                </div><!-- /.other-blog-title -->
                <div class="other-blog-date">
                    <!-- // カスタムフィールドの値を表示 -->
                    <?php if ($blog_date) : ?>
                        <p><?php echo esc_html($blog_date); ?></p>
                    <?php else : ?>
                        <p>日付が設定されていません</p> <!-- 日付が設定されていない場合の表示 -->
                    <?php endif; ?>
                </div><!-- /.other-blog-date -->
            </div><!-- /.other-blog-text -->
            <div class="other-blog-button">
                <img src="<?php echo get_template_directory_uri(); ?>/img/single-blog_右ボタン.png" alt="">
            </div><!-- /.other-blog-button -->
        </a><!-- /.other-blog__box -->
        <?php
          endif; // if ($first_post) の終了
          endwhile; // ループの終了
          wp_reset_postdata(); // ループをリセット
          else :
            echo '<p>ブログが見つかりませんでした。</p>'; // 投稿がない場合のメッセージ
         endif; // ifの終了
        ?>
      </div><!-- /.other-blog__inner range -->
    </div><!-- /.other-blog -->



<?php get_footer(); ?>