<?php get_header(); ?>



      <!-- ファーストビュー開始 -->
      <div class="hero page-career">
        <div class="hero__inner background-section">
          <div class="hero__box range">
            <h1 class="hero-titile_e">CAREER</h1>
            <p class="hero-titile_j">研修制度とキャリアパス</p><!-- /.hero-titile_j -->
            <p class="hero-text">キャリアパスを支える充実した、研修制度</p><!-- /.hero-text -->
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

    <!-- 研修制度とキャリアパス開始 -->
    <section class="trajectory">
      <div class="trajectory__inner range">
        <div class="headline ">
          <h2 class="headline-title headline-title_other">キャリアパスに沿った研修制度を用意</h2>
          <p class="headline headline-text">弊社では、コンサルタントのキャリアパスを、大きく4つのステージに分けています。</p>
        </div><!-- /.headline  -->
        <div class="trajectory__content">
          <div class="trajectory__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/TETOTEでのキャリアパス.png" alt="TETOTEでのキャリアパス">
          </div><!-- /.trajectory__image -->
          <div class="trajectory__writing">
            <div class="trajectory__writing-head">
              <p class="trajectory__writing-head headline-text">TETOTE は、コンサルタントのキャリアパスを支えるために、以下の独自の研修制度を設けています。</p>
            </div><!-- /.trajectory__writing-head -->
            <div class="trajectory__list">
              <!-- /.1.ケーススタディ研修 -->
              <div class="trajectory__box">
                  <h3 class="trajectory-title">1.ケーススタディ研修</h3>
                <div class="trajectory-text">
                  <p>TETOTE の過去のプロジェクト事例を基にしたケーススタディ研修を実施しています。<br>この研修では、実際のプロジェクトで直面する課題を解決するために、分析力、問題解決能力、プレゼンテーション能力などを実践的に習得することができます。</p>
                </div><!-- /.trajectory-text -->
              </div><!-- /.trajectory__box -->
              <!-- /.2. クライアント対応研修 -->
              <div class="trajectory__box">
                  <h3 class="trajectory-title">2. クライアント対応研修</h3>
                <div class="trajectory-text">
                  <p>TETOTE は、クライアントとの信頼関係構築を重視しています。<br>この研修では、クライアントとのコミュニケーションスキル、交渉スキル、プレゼンテーションスキルなどを習得し、クライアントの課題解決に貢献できるコンサルタントを育成します。</p>
                </div><!-- /.trajectory-text -->
              </div><!-- /.trajectory__box -->
              <!-- /.3. 専門知識研修 -->
              <div class="trajectory__box">
                  <h3 class="trajectory-title">3. 専門知識研修</h3>
                <div class="trajectory-text">
                  <p>財務、会計、ITなど、コンサルタント業務に必要な専門知識を習得するための研修を実施しています。<br>TETOTE は、幅広い分野の知識を持つコンサルタントを育成し、クライアントに最適なソリューションを提供できるようにしています。</p>
                </div><!-- /.trajectory-text -->
              </div><!-- /.trajectory__box -->
              <!-- /.4. マネジメント研修 -->
              <div class="trajectory__box">
                  <h3 class="trajectory-title">4. マネジメント研修</h3>
                <div class="trajectory-text">
                  <p>プロジェクトマネジメント、リーダーシップ、チームビルディングなど、マネジメントスキルを習得するための研修を実施しています。TETOTE は、将来的にマネジメント層を担うコンサルタントを育成し、組織全体の成長を促進しています。</p>
                </div><!-- /.trajectory-text -->
              </div><!-- /.trajectory__box -->
              <!-- /.5. 外部研修 -->
              <div class="trajectory__box">
                  <h3 class="trajectory-title">5. 外部研修</h3>
                <div class="trajectory-text">
                  <p>社外で実施される研修にも積極的に参加することができます。<br>TETOTE は、最新の知識やスキルを習得し、常に成長し続けるコンサルタントを育成します。</p>
                </div><!-- /.trajectory-text -->
              </div><!-- /.trajectory__box -->
            </div><!-- /.trajectory__list -->
          </div><!-- /.trajectory__writing -->
        </div><!-- /.trajectory__content -->
      </div><!-- /.x -->
    </section><!-- 研修制度とキャリアパス終了 -->



    <?php get_footer(); ?>
 