<?php get_header(); ?>

<main>
  <article id="about">
    <div id="about-box">
      <div id="about-text">
        <p id="about-title-firstline" class="scroll-down">都会の喧噪の中に</p>
        <p id="about-title-secondline" class="scroll-down timing01">癒しの空間を</p>
        <p id="about-content" class="scroll-down timing02">忙しい毎日だけど癒されたい<br>
          でも日常を忘れてゆっくり<br>
          できる場所は<br>
          都会にはなかなかない<br><br>
          そんなあなたに<br>
          視覚から、味覚から、<br>
          雰囲気から、癒しをお届けします</p>
      </div>
    </div>
    <div id="about-img-gallery">
      <img id="about-img1" class="scroll-left" src="<?php echo get_template_directory_uri(); ?>/images/oriento-gy_DN08336U-unsplash.png" alt="お茶を注ぐ">
      <img id="about-img2" class="scroll-up" src="<?php echo get_template_directory_uri(); ?>/images/oriento-dPUWgZLsOk8-unsplash.png" alt="並んでいるお茶">
    </div>
  </article>
  <article id="commit">
    <div id="commitment">
      <img id="commit-mainimg" class="scroll-left" src="<?php echo get_template_directory_uri(); ?>/images/commit.png" alt="緑背景の抹茶の粉">
      <div id="commit-text">
        <p id="commit-title" class="scroll-down timing01">こだわり</p>
        <p id="commit-content" class="scroll-down timing02">京都府宇治市の<br>
          生産農家さんから<br>
          直に仕入れた茶葉を<br>
          使用しています</p>
      </div>
    </div>
    <div id="commit-img-gallery">
      <img id="commit-img1" class="scroll-left" src="<?php echo get_template_directory_uri(); ?>/images/mebuki.png" alt="芽吹きの写真">
      <img id="commit-img2" class="scroll-right" src="<?php echo get_template_directory_uri(); ?>/images/tyabatake.png" alt="茶畑の写真">
    </div>
    <div id="commit-text-sub">
      <p id="commit-content-sub" class="scroll-down">天然の清らかな水と<br>
        やわらかな土づくりが<br>
        おいしいお茶の<br>
        決め手となっています
      </p>
    </div>
    <img id="tsumugi" src="<?php echo get_template_directory_uri(); ?>/images/紬園.png" alt="紬園の文字">
  </article>
  <article>
    <div id="menu">
      <div id="menu-title">
        <div id="menu-title-img">
          <img id="pc-menutitle" class="blur-In" src="<?php echo get_template_directory_uri(); ?>/images/menu.png" alt="メニュー水彩">
          <img id="sp-menutitle" class="blur-In" src="<?php echo get_template_directory_uri(); ?>/images/menu.sp.png">
        </div>
        <div id="menu-rec">
          <p id="menu-rec-text">
            お好きなお茶と<br>
            お好きなお菓子・スイーツを<br>
            セットでお選びいただくのがおすすめです
          </p>
        </div>
      </div>
      <div class="menu-content">
        <div class="menu-subtitle">
          <h1>飲み物</h1>
        </div>
        <div class="kinds" id="drink">
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ujitya.png" alt="宇治茶の写真">
            <h2>宇治茶</h2>
            <p>320<span>円</span></p>
          </div>
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/houjityaa.png" alt="ほうじ茶の写真">
            <h2>ほうじ茶</h2>
            <p>320<span>円</span></p>
          </div>
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ujimaccha.png" alt="宇治抹茶の写真">
            <h2>宇治抹茶</h2>
            <p>400<span>円</span></p>
          </div>
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/maccharate.png" alt="抹茶ラテの写真">
            <h2>抹茶ラテ</h2>
            <p>400<span>円</span></p>
          </div>
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/maccharateice.png" alt="抹茶ラテ(アイス)の写真">
            <h2>抹茶ラテ</h2>
            <p>400<span>円</span></p>
          </div>
        </div>
        <div class="menu-subtitle">
          <h1>和菓子</h1>
        </div>
        <div class="kinds" id="jp-sweet">
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ohagi.png" alt="あんみつの写真">
            <h2>おはぎ</h2>
            <h3>＜つぶあん・こしあん＞</h3>
            <p>400<span>円</span></p>
          </div>
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/youkan.png" alt="ようかんの写真">
            <h2>ようかん</h2>
            <h3>＜あんこ・抹茶＞</h3>
            <p>450<span>円</span></p>
          </div>
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/warabi.png" alt="わらび餅の写真">
            <h2>わらび餅</h2>
            <h3>＜きなこ・抹茶＞</h3>
            <p>450<span>円</span></p>
          </div>
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/dorayaki.png" alt="どら焼きの写真">
            <h2>どら焼き</h2>
            <h3>＜あんこ・抹茶＞</h3>
            <p>350<span>円</span></p>
          </div>
        </div>
        <div class="menu-subtitle">
          <h1>抹茶スイーツ</h1>
        </div>
        <div class="kinds" id="sweet">
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/anmitsu.png" alt="あんみつの写真">
            <h2>あんみつ</h2>
            <p>700<span>円</span></p>
          </div>
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pancake.png" alt="抹茶パンケーキの写真">
            <h2>抹茶パンケーキ</h2>
            <p>1080<span>円</span></p>
          </div>
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/cake.png" alt="抹茶ケーキの写真">
            <h2>抹茶ケーキ</h2>
            <p>450<span>円</span></p>
          </div>
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/purin.png" alt="抹茶プリンの写真">
            <h2>抹茶プリン</h2>
            <p>400<span>円</span></p>
          </div>
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pafe.png" alt="抹茶パフェの写真">
            <h2>抹茶パフェ</h2>
            <p>980<span>円</span></p>
          </div>
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/soft.png" alt="抹茶ソフトの写真">
            <h2>抹茶ソフト</h2>
            <p>400<span>円</span></p>
          </div>
        </div>
        <div class="menu-subtitle">
          <h1>かき氷</h1>
        </div>
        <div class="kinds" id="shaved-ice">
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/kakigoori.maccha.png" alt="宇治茶かき氷の写真">
            <h2>宇治抹茶<br>かき氷</h2>
            <p>600<span>円</span></p>
          </div>
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/kakigoori.houjicha.png" alt="ほうじ茶かき氷の写真">
            <h2>ほうじ茶<br>かき氷</h2>
            <p>600<span>円</span></p>
          </div>
        </div>
        <div class="menu-subtitle">
          <h1>テイクアウト</h1>
        </div>
        <div class="kinds" id="takeout">
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/takeoutrate.png" alt="宇治抹茶ラテの写真">
            <h2>抹茶ラテ</h2>
            <p>240<span>円</span></p>
          </div>
          <div class="menu-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/takeoutsoft.png" alt="抹茶フローズンの写真">
            <h2>抹茶フローズン</h2>
            <p>360<span>円</span></p>
          </div>
        </div>
      </div>
    </div>
  </article>
  <article>
    <div id="info-box">
      <div id="info-title-img">
        <img id="pc-infotitle" class="blur-In" src="<?php echo get_template_directory_uri(); ?>/images/info.png" alt="インフォメーション水彩">
        <img id="sp-infotitle" class="blur-In" src="<?php echo get_template_directory_uri(); ?>/images/info.sp.png">
      </div>
      <table id="info-content-box" class="blur-In">
        <tr>
          <th>住所</th>
          <td>〒123-4567 東京都渋谷区1ー22</td>
        </tr>
        <tr>
          <th>電話</th>
          <td>012-345-6789</td>
        </tr>
        <tr>
          <th>営業時間</th>
          <td>10:00～18:00</td>
        </tr>
        <tr>
          <th>定休日</th>
          <td>無休</td>
        </tr>
        <tr>
          <th>対応決済</th>
          <td>クレジット,交通系IC,
            PayPay,ID,楽天edy</td>
        </tr>
        <tr>
          <th>備考</th>
          <td>完全禁煙,Free WiFi</td>
        </tr>
        <!-- <div id="info-content-title">
            <h3 id="address">住所</h3>
            <h3 id="tel">電話</h3>
            <h3 id="open-hour">営業時間</h3>
            <h3 id="holiday">定休日</h3>
            <h3 id="settle">対応決済</h3>
            <h3 id="remarks">備考</h3>
          </div>
          <div id="info-content">
            <p>〒123-4567 東京都渋谷区1ー22</p>
            <p>012-345-6789</p>
            <p>10:00～18:00</p>
            <p>無休</p>
            <p>クレジット,交通系IC,
              PayPay,ID,楽天edy</p>
            <p>完全禁煙,Free WiFi</p>
          </div>
        </div> -->
      </table>
    </div>
    <div id="access">
      <div id="access-content">
        <h3>アクセス</h3>
        <p>渋谷駅「B1」出口から徒歩2分</p>
      </div>
      <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.566988573962!2d139.7004179755468!3d35.663038672593146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca64c97ca1b%3A0xcbb041e9d69e1ad4!2z44CSMTUwLTAwMDIg5p2x5Lqs6YO95riL6LC35Yy65riL6LC377yR5LiB55uu77yS77yS4oiS77yS77yS!5e0!3m2!1sja!2sjp!4v1695571136691!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </article>
  <article>
    <ul class="slider">
      <li><img id="slider-1" class="slider-img" src="<?php echo get_template_directory_uri(); ?>/images/slider1.png" alt=""></li>
      <li><img id="slider-2" class="slider-img" src="<?php echo get_template_directory_uri(); ?>/images/slider2.png" alt=""></li>
      <li><img id="slider-3" class="slider-img" src="<?php echo get_template_directory_uri(); ?>/images/slider3.png" alt=""></li>
      <li><img id="slider-4" class="slider-img" src="<?php echo get_template_directory_uri(); ?>/images/slider4.png" alt=""></li>
      <li><img id="slider-5" class="slider-img" src="<?php echo get_template_directory_uri(); ?>/images/slider5.png" alt=""></li>
      <li><img id="slider-6" class="slider-img" src="<?php echo get_template_directory_uri(); ?>/images/slider6.png" alt=""></li>
    </ul>
  </article>
</main>
<?php get_footer(); ?>
</body>

</html>