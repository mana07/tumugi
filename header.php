<!DOCTYPE html>
<html>

<head>
  <title>紬園</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="宇治抹茶カフェの架空サイトです">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.js"></script>
  <script type="text/javascript">
    // ページ内リンクのみ取得
    var scroll = new SmoothScroll('a[href*="#"]', {
      speed: 1000, //スクロールする速さ
      header: '#nav' //固定ヘッダーがある場合
    });
  </script>
  <?php wp_head(); ?>

<body>

  <div class="header">
    <header>

      <nav id="nav">
        <a href="#" id="eternite"></a>
        <div id="nav-a">
          <a href="<?php echo esc_url(home_url('/#about-box')); ?>" id="nav-about">紬園について</a>
          <a href="<?php echo esc_url(home_url('/#commitment')); ?>" id="nav-item">こだわり</a>
          <a href="<?php echo esc_url(home_url('/#menu')); ?>" id="nav-com">メニュー</a>
          <a href="<?php echo esc_url(home_url('/#info-box')); ?>" id="nav-info">店舗情報</a>

        </div>
      </nav>
      <img id="header-logo" src="<?php echo get_template_directory_uri(); ?>/images/tsumugi-logo.png">
      <img id="header-logo-sp" src="<?php echo get_template_directory_uri(); ?>/images/tsumugilogo-white.png">
      <nav id="sp-nav">
        <div class="openbtn">
          <span></span>
          <span>Menu</span>
          <span></span>
        </div>
        <div>
          <div class="sp-menu">
            <img id="leaf" src="<?php echo get_template_directory_uri(); ?>/images/leaf.png">
            <ul>
              <li><a class="sp-link" href="<?php echo esc_url(home_url('/#about')); ?>">紬園について</a></li>
              <li><a class="sp-link" href="<?php echo esc_url(home_url('/#commitment')); ?>">こだわり</a></li>
              <li><a class="sp-link" href="<?php echo esc_url(home_url('/#menu')); ?>">メニュー</a></li>
              <li><a class="sp-link" href="<?php echo esc_url(home_url('/#info-box')); ?>">店舗情報</a></li>
            </ul>
            <div id="sp-sns">
              <img id="Twitter-sp" src="<?php echo get_template_directory_uri(); ?>/images/2021 Twitter logo - black.png" alt="twitterのロゴ">
              <img id="Insta-sp" src="<?php echo get_template_directory_uri(); ?>/images/Instagram_Glyph_Black.png" alt="instagramのロゴ">
            </div>
          </div>
        </div>
      </nav>
      <div id="title">
        <h1>紬園</h1>
        <h2><small>-つむぎえん-</small></h2>
        <h3 id="title-latin">tsumugien</h3>
      </div>
      <div id="main-img">
        <img id="main1" src="<?php echo get_template_directory_uri(); ?>/images/main2.png">
        <div class="slider1">
          <div class="slick-img">
            <img class="main2" src="<?php echo get_template_directory_uri(); ?>/images/main.png">
          </div>
          <div class="slick-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/main4.png" alt="" />
          </div>
          <div class="slick-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/main5.png" alt="" />
          </div>
        </div>
      </div>
      <div id="header-sns">
        <img id="Twitter-pc" class="Twitter" src="<?php echo get_template_directory_uri(); ?>/images/2021 Twitter logo - black.png" alt="twitterのロゴ">
        <img id="Insta-pc" class="Insta" src="<?php echo get_template_directory_uri(); ?>/images/Instagram_Glyph_Black.png" alt="instagramのロゴ">
        <img id="Twitter-sp" class="Twitter" src="<?php echo get_template_directory_uri(); ?>/images/2021 Twitter logo - white.png" alt="twitterのロゴ">
        <img id="Insta-sp" class="Insta" src="<?php echo get_template_directory_uri(); ?>/images/Instagram_Glyph_White.png" alt="instagramのロゴ">
      </div>
    </header>
  </div>