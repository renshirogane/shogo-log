<?php get_header(); ?>


      <!-- ファーストビュー開始 -->
      <div class="hero page-faq">
        <div class="hero__inner background-section">
          <div class="hero__box range">
            <h1 class="hero-titile_e">FAQ</h1>
            <p class="hero-titile_j">よくある質問</p><!-- /.hero-titile_j -->
            <p class="hero-text">皆様からよく頂くご質問にお答えします。</p><!-- /.hero-text -->
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

    <!-- 募集要項開始 -->
    <section class="faq">
      <div class="faq__inner range">
        <div class="faq__index">
          <div class="headline__list">
            <!-- 応募・選考について -->
             <div class="headline__box">
              <a href="#application">
                <h3 class="index-title">応募・選考について</h3>
                <p class="headline-mark">↓</p>
              </a>
             </div><!-- /.headline__box -->
            <!-- キャリアについて -->
            <div class="headline__box">
              <a href="#career">
                <h3 class="index-title">キャリアについて</h3>
                <p class="headline-mark">↓</p>
              </a>
             </div><!-- /.headline__box -->
            <!-- 福利厚生について -->
            <div class="headline__box">
              <a href="#benefits">
                <h3 class="index-title">福利厚生について</h3>
                <p class="headline-mark">↓</p>
              </a>
             </div><!-- /.headline__box -->
          </div><!-- /.headline__list -->
        </div><!-- /.faq__index -->
        <div class="faq__list">
          <!-- 応募・選考について -->
          <div class="faq__area" id="application">
            <div class="headline">
              <h2 class="headline-title headline-title_other">応募・選考について</h2>
            </div><!-- /.headline -->
            <div class="faq__content">
              <div class="faq__box" data-faq-id="1">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">応募資格はありますか？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <p class="faq__answer accordion_action_clicked">
                  TETOTE のウェブサイトやアプリを通じて確認することができます。
                </p><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="1"-->
              <div class="faq__box" data-faq-id="2">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">応募方法は？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <p class="faq__answer accordion_action_clicked">
                  弊社採用サイトからエントリーしてください。
                </p><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="2"-->
              <div class="faq__box" data-faq-id="3">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">選考フローは？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <p class="faq__answer accordion_action_clicked">
                  弊社では、公正かつ透明性の高い選考プロセスを通じて、志望者様の適性とご経験を評価させていただいております。詳しくは、弊社サイトの募集要項をご確認ください。
                </p><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="3"-->
              <div class="faq__box" data-faq-id="4">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">選考にかかる時間は？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <p class="faq__answer accordion_action_clicked">
                  弊社の選考プロセスには、通常おおよそ3週間を要します。この期間には書類審査、面接、必要に応じた適性検査が含まれます。誠実かつ公平な評価を行うために、この時間をご理解いただければ幸いです。
                </p><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="4"-->
              <div class="faq__box" data-faq-id="5">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">面接では何を聞かれますか？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <div class="faq__answer accordion_action_clicked">
                  弊社の面接では、主に以下の点についてお伺いいたします：<br>
                  <br>
                  <ol>
                    <li>志望動機：弊社を選んだ理由や、貴殿がどのような価値を提供できるかをお聞かせください。</li>
                    <li>経歴とスキル：これまでの職務経験や、保有するスキルが弊社の業務にどのように寄与するかをお話しいただきます。</li>
                    <li>将来の展望：将来的にどのようなキャリアを描いているか、そしてその目標を達成するための計画についてお伺いします。</li>
                  </ol>
                  <br>
                  これらの質問を通じて、弊社で適性とポテンシャルを評価させていただきます。
                </div><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="5"-->
              <div class="faq__box" data-faq-id="6">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">面接官はどんな人ですか？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <p class="faq__answer accordion_action_clicked">
                  弊社の面接官は、経験豊富なプロフェッショナルで構成されています。各面接官は、専門知識と業界での経験を持ち、応募者のスキルと適性を公正かつ詳細に評価するために努めています。また、面接官は応募者にリラックスして面接を受けていただけるよう、友好的で協力的な態度を心掛けています。
                </p><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="6"-->
            </div><!-- /.faq__content -->
          </div><!-- /.faq__area -->
          <!-- キャリアについて -->
          <div class="faq__area" id="career">
            <div class="headline">
              <h2 class="headline-title headline-title_other">キャリア</h2>
            </div><!-- /.headline -->
            <div class="faq__content">
              <div class="faq__box" data-faq-id="1">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">自分の希望するキャリアパスに進むことはできますか？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <p class="faq__answer accordion_action_clicked">
                  はい、弊社では社員のキャリア成長を支援するために、多様なサポート体制を整えています。個別のキャリアカウンセリングやトレーニングプログラムを通じて、貴殿の希望するキャリアパスに進むためのスキルや知識を習得していただけるよう努めています。また、社内での異動や昇進の機会も豊富にありますので、ご自身の目標に合わせたキャリア形成が可能です。詳細は人事部門にご相談ください。
                </p><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="1"-->
              <div class="faq__box" data-faq-id="2">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">転勤はありますか？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <p class="faq__answer accordion_action_clicked">
                  業務の必要に応じて、転勤が発生する場合があります。
                </p><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="2"-->
              <div class="faq__box" data-faq-id="3">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">転勤の希望は出せますか？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <p class="faq__answer accordion_action_clicked">
                  はい、弊社では社員のライフスタイルやキャリアプランを尊重し、転勤希望を提出することが可能です。人事部門にて適切な時期に希望をお伝えいただき、転勤の可能性や手続きについて協議いたします。ただし、業務上の都合やポジションの空き状況によっては、ご希望に沿えない場合もございますので、予めご了承ください。詳しくは人事部門までご相談ください。
                </p><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="3"-->
              <div class="faq__box" data-faq-id="4">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">ワークライフバランスは？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <p class="faq__answer accordion_action_clicked">
                  弊社は社員のワークライフバランスを非常に重視しています。柔軟な勤務時間制度やリモートワークの導入、休暇制度の充実など、仕事と個人生活の調和を図るための取り組みを行っています。また、健康管理やメンタルヘルスのサポートも積極的に行っており、社員が長期的に健康で充実した生活を送ることができるよう努めています。詳細は人事部門にてご確認いただけます。
                </p><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="4"-->
              <div class="faq__box" data-faq-id="5">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">具体的にはどのような制度がありますか？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <div class="faq__answer accordion_action_clicked">
                  弊社では、社員が仕事と個人生活を両立できるよう、様々な制度を設けています。具体的な制度の一部をご紹介します。<br>
                  <br>
                  <ol>
                    <li>柔軟な勤務時間制度: 社員が自分のライフスタイルに合わせて勤務時間を調整できる制度です。フレックスタイム制度やコアタイムなしのフレキシブルワーク時間を導入しています。</li>
                    <li>リモートワーク制度: 在宅勤務やリモートワークが可能な制度を設けており、特に育児や介護、健康上の理由で通勤が難しい場合にも対応しています。</li>
                    <li>有給休暇制度: 年次有給休暇を含む多様な休暇制度を整備し、社員がリフレッシュできる環境を提供しています。また、長期休暇の取得も奨励しています。</li>
                    <li>健康管理プログラム: 社員の健康を守るための定期健康診断やメンタルヘルスサポート、フィットネスプログラムを提供しています。</li>
                    <li>キャリア開発支援制度: 教育・研修プログラムやキャリアカウンセリングを通じて、社員のスキルアップとキャリア成長を支援しています。</li>
                  </ol>
                  <br>
                  これらの制度を通じて、社員が快適かつ充実した職場環境を享受できるよう努めています。ご不明点があれば、遠慮なく人事部門にお問い合わせください。
                </div><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="5"-->
              <div class="faq__box" data-faq-id="6">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">育児休暇制度はありますか？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <p class="faq__answer accordion_action_clicked">
                  はい、弊社では育児休暇制度を設けています。社員のワークライフバランスを重視し、育児休暇の取得を奨励しています。育児休暇は男女問わず利用可能で、出産前後の休暇や育児期間中の休暇を柔軟に取得することができます。また、育児休暇後のスムーズな職場復帰を支援するためのプログラムやサポート体制も整えています。具体的な詳細については、人事部門までお問い合わせください。
                </p><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="6"-->
            </div><!-- /.faq__content -->
          </div><!-- /.faq__area -->
          <!-- 福利厚生について -->
          <div class="faq__area" id="benefits">
            <div class="headline">
              <h2 class="headline-title headline-title_other">福利厚生について</h2>
            </div><!-- /.headline -->
            <div class="faq__content">
              <div class="faq__box" data-faq-id="1">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">どのような福利厚生制度がありますか？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <div class="faq__answer accordion_action_clicked">
                  弊社では、社員の働きやすさと生活の質を向上させるために、以下のような福利厚生制度を整えています。<br>
                  <br>
                  <ol>
                    <li>健康保険と医療制度: 社員とその家族の健康を守るために、包括的な健康保険と定期健康診断を提供しています。</li>
                    <li>有給休暇とリフレッシュ休暇: 労働者の休養とリフレッシュをサポートするために、有給休暇や特別休暇の制度があります。</li>
                    <li>退職金制度: 長期的な財務計画を支援するために、退職金制度を導入しています。</li>
                    <li>育児・介護休暇制度: 家族のケアが必要な社員が仕事と家庭を両立できるよう、育児休暇や介護休暇を提供しています。</li>
                    <li>トレーニングとキャリア開発: 社員のスキルアップを支援するための研修プログラムやキャリアカウンセリングを提供しています。</li>
                    <li>ライフイベント支援: 結婚、出産、家族の介護など、ライフイベントに対応するための支援制度を整えています。</li>
                  </ol>
                  <br>
                  これらの制度を通じて、社員が安心して働き続けられる環境を提供しています。詳細については、人事部門にお問い合わせください。
                </div><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="1"-->
              <div class="faq__box" data-faq-id="2">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">財形貯蓄制度の内容は？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <p class="faq__answer accordion_action_clicked">
                  財形貯蓄を支援する制度です。
                </p><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="2"-->
              <div class="faq__box" data-faq-id="3">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">社内イベントの内容は？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <div class="faq__answer accordion_action_clicked">
                  弊社では、社員同士の交流やチームビルディングを目的とした様々な社内イベントを開催しています。以下はその一部です。<br>
                  <br>
                  <ol>
                    <li>定期的な社内ミーティング: 各部署やプロジェクトの進捗を共有し、情報交換を行います。</li>
                    <li>チームビルディング活動: アウトドア活動やスポーツイベント、ワークショップを通じて、チームの絆を深めます。</li>
                    <li>年間パーティー: 忘年会、新年会、ハロウィンパーティーなど、季節ごとのイベントを開催し、リラックスした雰囲気での交流を楽しみます。</li>
                    <li>社内セミナー: 業界の専門家を招いた講演や、社員によるプレゼンテーションを行い、知識の共有とスキルアップを図ります。</li>
                    <li>ボランティア活動: 社会貢献を目的としたボランティア活動に参加し、チームで社会貢献を実践します。</li>
                  </ol>
                  <br>
                  これらのイベントを通じて、社員同士の絆を強化し、働きやすい職場環境を構築しています。参加者のフィードバックも積極的に取り入れ、常に改善を図っています。
                </div><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="3"-->
              <div class="faq__box" data-faq-id="4">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">部活動について教えてください。</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <div class="faq__answer accordion_action_clicked">
                  弊社では、社員同士の親睦を深め、リフレッシュできる環境を提供するために、様々な部活動を運営しています。具体的な部活動の一例は以下の通りです：<br>
                  <br>
                  <ol>
                    <li>スポーツ部: サッカー、バスケットボール、テニスなど、さまざまなスポーツ活動を行っています。定期的な練習や試合があり、健康促進とチームワークの向上を目指しています。</li>
                    <li>アウトドア部: ハイキング、キャンプ、サイクリングなどのアウトドア活動を楽しむ部です。自然を満喫しながら、リフレッシュと交流を図ります。</li>
                    <li>文化部: 写真、料理、茶道などの文化活動を行う部です。社員の多様な趣味や興味を共有し、新しいスキルを学ぶ機会を提供します。</li>
                    <li>読書部: 毎月の読書会や本の交換会を通じて、社員同士の知識とアイデアを共有し、自己啓発を支援します。</li>
                  </ol>
                  <br>
                  これらの部活動を通じて、社員は仕事以外の時間でも有意義に過ごすことができ、職場の一体感を高めることができます。部活動の詳細や参加方法については、社内掲示板や人事部にお問い合わせください。
                </div><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="4"-->
              <div class="faq__box" data-faq-id="5">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">資格取得支援制度はいくら補助が出ますか？</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <p class="faq__answer accordion_action_clicked">
                  弊社の資格取得支援制度では、受験料、教材費、講習費用などの一部または全額を補助いたします。詳細な情報や条件については、人事部門にお問い合わせいただくか、社内の資格取得支援ガイドラインをご参照ください。
                </p><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="5"-->
              <div class="faq__box" data-faq-id="6">
                <div class="faq__title accordion_force_clicked">
                  <div class="faq__question accordion_action_clicked_icon">
                    <div class="left-element accordion_action_clicked_icon">
                      <div class="question__mark accordion_action_clicked_icon">Q</div><!-- /.question__mark -->
                      <p class="question__text accordion_action_clicked_icon">年次有給休暇について教えてください</p><!-- /.question__text -->
                    </div>
                    <div class="question__btn question__btn_plus accordion_action_clicked_icon">
                      <span></span><span></span>
                    </div><!-- 質問を開くボタン -->                
                    <div class="question__btn question__btn_minus accordion_action_clicked_icon">
                      <span></span>
                    </div><!-- 質問を開くボタン -->              
                  </div><!-- /.faq__question -->
                </div><!-- /.faq__title -->
                <p class="faq__answer accordion_action_clicked">
                  弊社では、社員が健康で充実した生活を送るために、年次有給休暇を提供しています。年次有給休暇は、法定基準を上回る日数が設定されており、社員がリフレッシュや個人的な理由で休暇を取ることができます。通常、新入社員は入社から半年後に一定の日数の有給休暇を付与され、その後は勤続年数に応じて追加の休暇が付与されます。また、計画的に有給休暇を取得しやすいよう、事前申請システムや休暇取得推奨期間を設けています。急な事情での休暇取得も柔軟に対応できるよう、管理職や人事部門がサポートしています。さらに、年次有給休暇は次年度に繰り越すことができるため、必要な時にまとめて取得することも可能です。詳細については、社内の就業規則や人事部門にお問い合わせください。
                </p><!-- /.faq__answer -->
              </div><!-- /.faq__box  data-faq-id="6"-->
            </div><!-- /.faq__content -->
          </div><!-- /.faq__area -->
        </div><!-- /.faq__list -->
      </div><!-- /.faq__inner range -->
    </section><!-- 募集要項終了 -->
    

    <?php get_footer(); ?>