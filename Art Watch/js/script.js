$(function() {

  // ロード時のヘッダー部分の文字、図形fade in
  $(document).ready(function() {
    $('.mv-back').addClass('fadein-mv');
    setTimeout(function() {
      $('#header, .mv-copy').addClass('fadein-mv');
    }, 2000);
  });

  //ヘッダーナビのポートフォリオカテゴリー
  //バーガーボタン関係
  $('.nav-list li span:first-child').click(function() {
    $('.category-menu').toggleClass('open');
  });

  $('.burger-btn').click(function() {
    $('.bar').toggleClass('open');
    $('.musk').toggleClass('open');
    $('#header-nav').toggleClass('open');
  });
 
  //スクロールで図形が回転
  let rotate = function(image, angle) {
    image.css({
      'transform' : 'rotate(' + angle + 'deg)'
    });
  }
  $(window).scroll(function() {
    rotate($('.back-img'), $(window).scrollTop() * 0.05);
  });

  //スクロールで線長くなる
  $(window).scroll(function() {
    $('section, .section-title').each(function() {
      let scroll = $(window).scrollTop();
      let sectionPg = $(this).offset().top;
      let windowHeight = $(window).height();
      if (scroll > sectionPg - windowHeight + 200) {
        $(this).addClass('scrollLong');
      }
    });
  });

  //スクロールで各要素fade in
  $(window).scroll(function() {
    $('.fadein').each(function() {
      let scroll = $(window).scrollTop();
      let target = $(this).offset().top;
      let windowHeight = $(window).height();
      if (scroll > target - windowHeight + 200) {
        $(this).css('transform', 'translateX(0)');
        $(this).css('opacity', '1');
      }
    });
  });

  //page スクロールで各要素fade in
  $(window).scroll(function() {
    $('.fadein-page, .fadein-single').css('opacity', '1');
  })



});