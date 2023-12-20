// -------------------
// スライダー
// -------------------
jQuery(function($){
$('.slider').slick({
  arrows: false,//左右の矢印はなし
  autoplay: true,//自動的に動き出すか。初期値はfalse。
  autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
  speed: 6000,//スライドのスピード。初期値は300。
  infinite: true,//スライドをループさせるかどうか。初期値はtrue。
  pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
  pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
  cssEase: 'linear',//動き方。初期値はeaseですが、スムースな動きで見せたいのでlinear
  slidesToShow: 4,//スライドを画面に4枚見せる
  slidesToScroll: 1,//1回のスライドで動かす要素数
  responsive: [
    {
      breakpoint: 1366,//モニターの横幅が769px以下の見せ方
      settings: {
        slidesToShow: 4,//スライドを画面に2枚見せる
      }
    },
    {
    breakpoint: 769,//モニターの横幅が769px以下の見せ方
    settings: {
      slidesToShow: 2.5,//スライドを画面に2枚見せる
    }
  },
  {
    breakpoint: 426,//モニターの横幅が426px以下の見せ方
    settings: {
      slidesToShow: 1.5,//スライドを画面に1.5枚見せる
    }
  }
 ]
});
});

// -------------------
// スムーズスクロール
// -------------------
jQuery(function($){
  $('a[href^="#"]').click(function () {
    const speed = 1000;
    const href = $(this).attr("href");
    let $target;
    if (href == "#") {
      $target = $("html");
    } else {
      $target = $(href);
    }
    const position = $target.offset().top;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});

document.addEventListener('wheel', event => {
  // この関数内でevent.preventDefault()を呼んでいないことをブラウザに通知
}, {passive: true});

// $(function(){
//   $('a[href^="#"]').click(function(){
//     var adjust = -10;
//     var speed = 3000;
//     var href= $(this).attr("href");
//     var target = $(href == "#" || href == "" ? 'html' : href);
//     var position = target.offset().top + adjust;
//     $('body,html').animate({scrollTop:position}, speed, 'swing');
//     return false;
//   });
// });

// -------------------
// スクロールアニメーション
// -------------------
jQuery(function($){
$(window).scroll(function(){
  var scrollAnimationElm=document.querySelectorAll('.scroll-up,.scroll-left,.scroll-right,.zoomIn,.scroll-down,.blur-In');
  var scrollanimationFunc=function(){
    for(var i=0;i<scrollAnimationElm.length;i++){
      var triggermargin=100;
      if(window.innerHeight>scrollAnimationElm[i].getBoundingClientRect().top+triggermargin){
        scrollAnimationElm[i].classList.add('on');
      }
    }
  }
  window.addEventListener('load',scrollanimationFunc);
  window.addEventListener('scroll',scrollanimationFunc);
});
});


// -------------------
// ハンバーガーメニュー
// -------------------
$(function(){
  $(".openbtn").click(function(){
    $(this).toggleClass('active');
    $(".sp-menu").toggleClass('active');
  });
});

$(function(){
  $(".sp-link").click(function(){
    $(".openbtn").removeClass('active');
    $(".sp-menu").removeClass('active');
  });
});

// -------------------
// TOPに戻るボタン
// -------------------
jQuery(function($){
$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $('#back-btn').fadeIn();
  } else {
    $('#back-btn').fadeOut();
  }
});
});

jQuery(function($){
$(function () {
  $(".slider1")
    // 最初のスライドに"add-animation"のclassを付ける(data-slick-index="0"が最初のスライドを指す)
    .on("init", function () {
      $('.slick-slide[data-slick-index="0"]').addClass("add-animation");
    })
    // 通常のオプション
    .slick({
      autoplay: true, // 自動再生ON
      fade: true, // フェードON
      arrows: false, // 矢印OFF
      speed: 2000, // スライド、フェードアニメーションの速度1000ミリ秒
      autoplaySpeed: 4000, // 自動再生速度4000ミリ秒
      pauseOnFocus: false, // フォーカスで一時停止OFF
      pauseOnHover: false, // マウスホバーで一時停止OFF
      variableWidth: false,
    })
    .on({
      // スライドが移動する前に発生するイベント
      beforeChange: function (event, slick, currentSlide, nextSlide) {
        // 表示されているスライドに"add-animation"のclassをつける
        $(".slick-slide", this).eq(nextSlide).addClass("add-animation");
        // あとで"add-animation"のclassを消すための"remove-animation"classを付ける
        $(".slick-slide", this).eq(currentSlide).addClass("remove-animation");
      },
      // スライドが移動した後に発生するイベント
      afterChange: function () {
        // 表示していないスライドはアニメーションのclassを外す
        $(".remove-animation", this).removeClass(
          "remove-animation add-animation"
        );
      },
    });
});
});