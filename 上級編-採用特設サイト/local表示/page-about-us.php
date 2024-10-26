<?php get_header(); ?>



    <!-- ファーストビュー開始 -->
    <section class="hero page-about-us">
      <div class="hero__inner background-section">
        <div class="hero__box range">
          <h1 class="hero-titile_e">ABOUT US</h1>
          <p class="hero-titile_j">TETOTEについて</p><!-- /.hero-titile_j -->
          <p class="hero-text">私たちの理念を紹介をします。</p><!-- /.hero-text -->
        </div><!-- /.hero__box -->
      </div><!-- /.hero__inner -->
      <!-- /.パンクズリスト -->
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
      </div>
    </section><!-- ファーストビュー終了 -->

    <!-- 私達が大切にしていること開始 -->
    <section class="value">
      <div class="value__inner range">
        <div class="headline headline_center">
          <h2 class="headline-title headline-title_other">私達が大切にしていること</h2>
        </div><!-- /.headline headline_center -->
        <div class="value__content">
          <!-- /.1 -->
          <div class="value__box">
            <div class="value__box-head">
              <div class="value__box-number">
                <p>1</p><!-- /.value__box-number -->
              </div><!-- /.value__box-number -->
              <div class="value__box-title">
                <p>飽くなき探求心で、革新を創り出す</p>
              </div><!-- /.value__box-title -->
            </div><!-- /.value__box-head -->
            <div class="value__box-text">
              <p>100年を超える歴史を誇りながらも、常に挑戦し続ける気概を忘れずに、未来を切り開くソリューションを提供し続けます。変化を恐れず、最新技術やトレンドを積極的に研究し、お客様のニーズを超える価値を生み出すことに情熱を燃やしています。</p>
            </div><!-- /.value__box-text -->
          </div><!-- /.value__box -->
          <!-- /.2 -->
          <div class="value__box">
            <div class="value__box-head">
              <div class="value__box-number">
                <p>2</p><!-- /.value__box-number -->
              </div>
              <div class="value__box-title">
                <p>デジタル技術の力で、未来を加速させる</p>
              </div><!-- /.value__box-title -->
            </div><!-- /.value__box-head -->
            <div class="value__box-text">
              <p>ITコンサルタント会社として、業務効率化やイノベーション創出に貢献するために、デジタル技術を活用した最適なソリューションを提案します。自動化、データ分析、AIなどの技術を駆使し、お客様のビジネスを革新し、未来への飛躍を力強くサポートします。</p>
            </div><!-- /.value__box-text -->
          </div><!-- /.value__box -->
          <!-- /.3 -->
          <div class="value__box">
            <div class="value__box-head">
              <div class="value__box-number">
                <p>3</p><!-- /.value__box-number -->
              </div>
              <div class="value__box-title">
                <p>人材こそが、未来への鍵</p>
              </div><!-- /.value__box-title -->
            </div><!-- /.value__box-head -->
            <div class="value__box-text">
              <p>従業員一人ひとりが、高い専門性と人間性を兼ね備えた人材であることが、お客様への最高のサービスにつながると確信しています。個々の能力やキャリア目標に合わせた育成プログラムや、多様な経験を積む機会を提供することで、成長を支援します。</p>
            </div><!-- /.value__box-text -->
          </div><!-- /.value__box -->
          <!-- /.4 -->
          <div class="value__box">
            <div class="value__box-head">
              <div class="value__box-number">
                <p>4</p><!-- /.value__box-number -->
              </div>
              <div class="value__box-title">
                <p>未経験者も歓迎！情熱と意欲があれば、誰でも活躍できる</p>
              </div><!-- /.value__box-title -->
            </div><!-- /.value__box-head -->
            <div class="value__box-text">
              <p>IT業界未経験の方でも、熱意と向上心があれば、当社で活躍できるチャンスがあります。研修やOJTを通じて、必要な知識やスキルを丁寧に習得し、即戦力となる人材へと育成します。先輩社員によるサポート体制も充実しているので、安心してスキルアップを目指せます。</p>
            </div><!-- /.value__box-text -->
          </div><!-- /.value__box -->
          <!-- /.5 -->
          <div class="value__box">
            <div class="value__box-head">
              <div class="value__box-number">
                <p>5</p><!-- /.value__box-number -->
              </div>
              <div class="value__box-title">
                <p>働きがいと充実感あふれる環境</p>
              </div><!-- /.value__box-title -->
            </div><!-- /.value__box-head -->
            <div class="value__box-text">
              <p>ワークライフバランスを重視し、従業員が働きがいと充実感を感じられる環境づくりに積極的に取り組んでいます。充実した福利厚生制度や、多様な働き方を可能にする制度を導入し、個々のライフスタイルに合わせた働き方を支援します。</p>
            </div><!-- /.value__box-text -->
          </div><!-- /.value__box -->
        </div><!-- /.value__content -->
      </div><!-- /.value__inner -->
    </section><!-- 私達が大切にしていること終了 -->

    <!-- 代表メッセージ開始 -->
    <section class="message">
      <div class="message__inner range">
        <div class="headline headline_center">
          <h2 class="headline-title headline-title_other">代表メッセージ</h2>
        </div><!-- /.headline headline_center -->
        <div class="message__content">
          <div class="message__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ceo.png" alt="代表の写真">
          </div><!-- /.message__image -->
          <div class="message__writing">
            <div class="message-titile">
              <p>あなたがやりたいこと<br>それを全力でサポートできる、<br>それがTETOTEの強みです。</p>
            </div><!-- /.message-titile -->
            <div class="message-text">
              <p>TETOTEは、ITコンサルティングとコンサル導入企業への営業を専門とする会社です。設立以来、私たちは「お客様の課題解決に真摯に取り組み、共に成長する」という理念を掲げ、お客様とパートナーと共に歩んできました。</p><br>
              <p>お客様のニーズを深く理解し、最適なソリューションを提供することで、数多くの課題解決を支援してきました。その結果、お客様との深い信頼関係を築き、共に成長することができています。</p><br>
              <p>TETOTEは、個々の能力や個性を尊重し、多様な人材が活躍できる環境づくりに力を入れています。年齢、性別、国籍、経験などに関係なく、意欲と向上心のある人材を歓迎します。</p><br>
              <p>私たちと共に、未来を創造していきましょう。</p>
            </div><!-- /.message-text -->
            <div class="message-sign">
              <img src="<?php echo get_template_directory_uri(); ?>/img/田中浩二郎.png" alt="代表の直筆">
            </div><!-- /.message-sign -->
          </div><!-- /.message__writing -->
        </div><!-- /.message__content -->
      </div><!-- /.message__inner -->
    </section><!-- 代表メッセージ終了 -->

    <!-- 事業紹介開始 -->
    <section class="business">
      <div class="business__inner range">
        <div class="headline">
          <h2 class="headline-title headline-title_other">事業紹介</h2>
          <p class="headline-text">TETOTEの主力事業である「コンサルティング」以外に、新規に取り組んでいる事業をいくつか<br class="normal">紹介させていただきます。</p>
        </div><!-- /.headline -->
        <div class="business__content">
          <!-- コンサルティング事業 -->
           <div class="business__box">
            <div class="business__box-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/コンサルティング事業.png" alt="コンサルティング事業">
            </div><!-- /.business__box-image -->
            <div class="business__box-writing">
              <h3  class="business__box-topic">コンサルティング事業</h3>
              <div class="business__box-title">
                <p>お客様と伴走し、売上に直接貢献できる</p>
              </div><!-- /.business__box-title -->
              <div class="business__box-text">
                <p>営業との連携で、人と組織の成長・変革に向けた計画立案・サービス実施、さらにフォローまで。コンサルタントとして一気通貫で携わります。</p>
              </div><!-- /.business__box-text -->
            </div><!-- /.business__box-writing -->
           </div><!-- /.business__box -->
          <!-- ソリューション営業事業 -->
          <div class="business__box">
            <div class="business__box-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/ソリューション営業事業.png" alt="ソリューション営業事業">
            </div><!-- /.business__box-image -->
            <div class="business__box-writing">
              <h3  class="business__box-topic">ソリューション営業事業</h3>
              <div class="business__box-title">
                <p>お客様の課題を見つけ出し、必要な施策を提案する</p>
              </div><!-- /.business__box-title -->
              <div class="business__box-text">
                <p>お客様が抱える課題へ、ヒアリングベースで提案型営業を行い、コンサルタントとの連携で課題解決を目指します。</p>
              </div><!-- /.business__box-text -->
            </div><!-- /.business__box-writing -->
           </div><!-- /.business__box -->
          <!-- 業務系システム開発事業 -->
          <div class="business__box">
            <div class="business__box-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/業務系システム開発事業.png" alt="業務系システム開発事業">
            </div><!-- /.business__box-image -->
            <div class="business__box-writing">
              <h3  class="business__box-topic">業務系システム開発事業</h3>
              <div class="business__box-title">
                <p>お客様の課題解決を強力にサポートするシステムを設計する</p>
              </div><!-- /.business__box-title -->
              <div class="business__box-text">
                <p>基本設計書に従って開発とテストを実施し、本番稼働をサポート。企画から運用までの全工程を通じて包括的なアプローチで、安定した運用と迅速な対応を保証します。</p>
              </div><!-- /.business__box-text -->
            </div><!-- /.business__box-writing -->
           </div><!-- /.business__box -->
        </div><!-- /.business__content -->
      </div><!-- /.business__inner -->
    </section><!-- 事業紹介終了 -->

        <!-- 会社概要開始 -->
        <section class="profile">
          <div class="profile__inner range">
            <div class="headline">
              <h2 class="headline-title headline-title_other">会社概要</h2>
            </div><!-- /.headline-->
            <div class="profile__content row">
              <div class="profile__box rowarea">
                <div class="profile__box-title">
                  <p>会社名</p>
                </div><!-- /.profile__box-title -->
                <div class="profile__box-text">
                  <p>TETOTE株式会社</p>
                </div><!-- /.profile__box-text -->
              </div><!-- /.profile__box -->
              <div class="profile__box rowarea">
                <div class="profile__box-title">
                  <p>所在地</p>
                </div><!-- /.profile__box-title -->
                <div class="profile__box-text">
                  <p>〒100-0001 東京都千代田区千代田 1-1-1</p>
                </div><!-- /.profile__box-text -->
              </div><!-- /.profile__box -->
              <div class="profile__box rowarea">
                <div class="profile__box-title">
                  <p>代表者名</p>
                </div><!-- /.profile__box-title -->
                <div class="profile__box-text">
                  <p>田中 浩二郎 (代表取締役)</p>
                </div><!-- /.profile__box-text -->
              </div><!-- /.profile__box -->
              <div class="profile__box rowarea">
                <div class="profile__box-title">
                  <p>事業内容</p>
                </div><!-- /.profile__box-title -->
                <div class="profile__box-text">
                  <ul class="rowarea-ul">
                    <li>ITコンサルティング</li>
                    <li>コンサル導入企業への営業</li>
                  </ul>
                </div><!-- /.profile__box-text -->
              </div><!-- /.profile__box -->
              <div class="profile__box rowarea">
                <div class="profile__box-title">
                  <p>電話番号</p>
                </div><!-- /.profile__box-title -->
                <div class="profile__box-text">
                  <p>03-1234-5678</p>
                </div><!-- /.profile__box-text -->
              </div><!-- /.profile__box -->
              <div class="profile__box rowarea">
                <div class="profile__box-title">
                  <p>ウェブサイトURL</p>
                </div><!-- /.profile__box-title -->
                <div class="profile__box-text">
                  <p>https://tetote.co.jp</p>
                </div><!-- /.profile__box-text -->
              </div><!-- /.profile__box -->
              <div class="profile__box rowarea">
                <div class="profile__box-title">
                  <p>メールアドレス</p>
                </div><!-- /.profile__box-title -->
                <div class="profile__box-text">
                  <p>tetote@tetote.co.jp</p>
                </div><!-- /.profile__box-text -->
              </div><!-- /.profile__box -->
              <div class="profile__box rowarea">
                <div class="profile__box-title">
                  <p>設立年月</p>
                </div><!-- /.profile__box-title -->
                <div class="profile__box-text">
                  <p>1923年4月1日</p>
                </div><!-- /.profile__box-text -->
              </div><!-- /.profile__box -->
            </div><!-- /.profile__content -->
          </div><!-- /.profile__inner -->
        </section><!-- 会社概要終了 -->





        <?php get_footer(); ?>
 