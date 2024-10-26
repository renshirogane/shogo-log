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
        <div class="headline entry-thanks__headline headline_center">
          <h2 class="entry-tytle entry-tytle_j">送信ありがとうございました。</h2>
          <div class="entry-attention">
            <p>3営業日以内に人事担当者より連絡させていただきます。</p>
          </div><!-- /.entry-attention -->
        </div><!-- /.headline headline_center -->
      </div><!-- /.entry__inner range -->
    </section>



    <?php get_footer(); ?>
 