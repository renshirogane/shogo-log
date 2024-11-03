<?php get_header(); ?>



        <!-- ファーストビュー開始 -->
        <div class="hero page-benefits">
          <div class="hero__inner background-section">
            <div class="hero__box range">
              <h1 class="hero-titile_e">BENEFITS</h1>
              <p class="hero-titile_j">福利厚生について</p><!-- /.hero-titile_j -->
              <p class="hero-text">充実した福利厚生制度を設けています。</p><!-- /.hero-text -->
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
        </div><!-- ファーストビュー終了 -->
      </section><!-- ファーストビュー終了 -->

        <!-- 各種制度開始 -->
        <section class="system">
          <div class="system__inner range">
            <div class="headline">
              <h2 class="headline-title headline-title_other">各種制度</h2>
            </div><!-- /.headline -->
            <div class="system__content row">
              <div class="system__box rowarea">
                <div class="system__box-title">
                  <p>手当</p>
                </div><!-- /.system__box-title -->
                <div class="system__box-text">
                  <ul class="rowarea-ul">
                    <li>通勤手当（上限月5万円）</li>
                    <li>時間外割増手当</li>
                    <li>役職手当</li>
                    <li>退職金</li>
                  </ul>
                </div><!-- /.system__box-text -->
              </div><!-- /.system__box -->
              <div class="system__box rowarea">
                <div class="system__box-title">
                  <p>制度</p>
                </div><!-- /.system__box-title -->
                <div class="system__box-text">
                  <p>財形貯蓄</p>
                </div><!-- /.system__box-text -->
              </div><!-- /.system__box -->
              <div class="system__box rowarea">
                <div class="system__box-title">
                  <p>保険</p>
                </div><!-- /.system__box-title -->
                <div class="system__box-text">
                  <p>社会保険完備</p>
                </div><!-- /.system__box-text -->
              </div><!-- /.system__box -->
              <div class="system__box rowarea">
                <div class="system__box-title">
                  <p>施設</p>
                </div><!-- /.system__box-title -->
                <div class="system__box-text">
                  <ul class="rowarea-ul">
                    <li>社員向けジム</li>
                    <li>社内託児所</li>
                  </ul>
                </div><!-- /.system__box-text -->
              </div><!-- /.system__box -->
              <div class="system__box rowarea">
                <div class="system__box-title">
                  <p>休暇・休日</p>
                </div><!-- /.system__box-title -->
                <div class="system__box-text">
                  <ul class="rowarea-ul">
                    <li>完全週休2日制</li>
                    <li>年次有給休暇（初年度10日／年度途中入社は比例付与）</li>
                    <li>年末年始休暇（12月29日～1月3日：6日間</li>
                    <li>夏季休暇（6月～9月中：5日間）</li>
                    <li>慶弔休暇</li>
                    <li>産前産後休暇</li>
                    <li>リフレッシュ休暇（3年勤続で5日／以降5年勤続ごとに5日支給）</li>
                  </ul>
                </div><!-- /.system__box-text -->
              </div><!-- /.system__box -->
            </div><!-- /.system__content -->
          </div><!-- /.system__inner -->
        </section><!-- 各種制度終了 -->

        <!-- 制度利用者の声開始 -->
        <section class="voices">
          <div class="voices__inner range">
            <div class="headline">
              <h2 class="headline-title headline-title_other">制度利用者の声</h2>
            </div><!-- /.headline -->
            <div class="voices__content">
              <div class="voices__writing">
                <!-- 堀内さん -->
                <div class="voices__box">
                  <div class="voices-date">
                    <p>2013年入社</p>
                  </div><!-- /.voices-date -->
                  <h3 class="voices-name">堀内 優</h3>
                  <div class="voices-text">
                    <p>資格取得のための費用を会社が負担してくれる制度を利用して、念願の応用技術者資格を取得できました。<br>この制度は、自己啓発を支援してくれるので、とても助かります。今後は、さらにスキルアップを目指して、他の資格も取得していきたいと思っています。<br>会社が成長を支援してくれるので、安心して仕事に取り組むことができます。</p>
                  </div><!-- /.voices-text -->
                </div><!-- /.voices__box -->
                <!-- 神凪さん -->
                <div class="voices__box">
                  <div class="voices-date">
                    <p>2015年入社</p>
                  </div><!-- /.voices-date -->
                  <h3 class="voices-name">神凪 理沙</h3>
                  <div class="voices-text">
                    <p>出産後、育休を取得して、現在は短時間勤務で働いています。会社が育児に理解があるので、安心して仕事に集中できます。<br>特に、社内託児所があるので、子供を預けながら安心して働けるのは助かります。また、短時間勤務制度も充実しているので、自分のペースで仕事復帰することができました。<br>今後は、子供の成長に合わせて、勤務時間を調整しながら、長く働き続けたいと思っています。</p>
                  </div><!-- /.voices-text -->
                </div><!-- /.voices__box -->
              </div><!-- /.voices__writing -->
              <div class="voices__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/制度利用者の声.png" alt="制度利用者の声の画像です。">
              </div><!-- /.voices__image -->
            </div><!-- /.voices__content -->
          </div><!-- /.voices__inner range -->
        </section><!-- 制度利用者の声終了 -->



        <?php get_footer(); ?>
 