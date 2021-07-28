$(function() {

  //mv fadein
  $(document).ready(function() {
    $('#mv, #mv-top-slick').fadeIn(2000);
  });

  //object scroll fade in
  $(window).scroll(function() {
    $('.fadein').each(function() {
      let scroll = $(window).scrollTop();
      let target = $(this).offset().top;
      let windowHeight = $(window).height();
      if(scroll > target - windowHeight + 150) {
        $(this).css('opacity', '1');
        $(this).css('transform', 'translateY(0)');
      }
    });
  });

  //menu open
  $('.menu-btn-sp').on('click', function() {
    $(this).fadeOut();
    $('.main-menu').fadeIn(1000);
    $('.category-menu').fadeIn(1000);
    $('.menu-musk').addClass('open');
  });

  //menu close
  $('.cross-btn').on('click', function() {
    $('.menu-btn-sp').fadeIn();
    $('.main-menu').fadeOut();
    $('.category-menu').fadeOut();
    $('.menu-musk').removeClass('open');
  });

  //slider-slick
  $('#mv-top-slick').slick({
    autoplay: true,
    autoplaySpeed: 2500,
    arrows: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    speed: 1800,
  });

  //link-btn arrow animation
  let grey = '#9b9e9e';
  let white = '#fff';
  let arrow_white = '.link-btn.grey .arrow-long, .link-btn.grey .arrow-short';
  let arrow_grey = '.link-btn.white .arrow-long, .link-btn.white .arrow-short';
  
  $('.link-btn.grey').hover(
    function() {
      $(arrow_white).css('background-color', grey);
    },
    function() {
      $(arrow_white).css('background-color', white);
    }
  );

  $('.link-btn.white').hover(
    function() {
      $(arrow_grey).css('background-color', white);
    },
    function() {
      $(arrow_grey).css('background-color', grey);
    }
  );
  


});