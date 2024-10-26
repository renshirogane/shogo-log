<?php get_header(); ?>



      <!-- ファーストビュー開始 -->

        <!-- /.パンクズリスト -->
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display'))
          {
              bcn_display();
          }?>
        </div>
      </div>
    </section><!-- ファーストビュー終了 -->

    <!-- 新卒・中途採用エントリーフォーム -->
    <section class="entry">
      <div class="entry__inner">
        <div class="headline entry__headline headline_center">
          <h1 class="entry-tytle entry-tytle_e">ENTRY FORM</h1>
          <h2 class="entry-tytle entry-tytle_j"><span>新卒・中途採用</span>エントリーフォーム</h2>
          <div class="entry-attention">
            <p>当社へ入社ご希望の方は、下記の送信フォームより送信してください。</p>
            <p><span>※</span>は必須項目になります。</p>
          </div><!-- /.entry-attention -->
        </div><!-- /.headline headline_center -->
        <form action="#" method="post">
          <?php echo do_shortcode('[contact-form-7 id="23fa9c7" title="Untitled"]'); ?>
        </form>
      </div><!-- /.entry__inner range -->
    </section>



    <?php get_footer(); ?>
 