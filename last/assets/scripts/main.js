'use strict'

window.onload = function () {
  openPopup()
  // customSubmit()
  headerGamburger()
  initMask()
}


window.onscroll = function () {
  fixHeader()
}


function fixHeader() {
  var header = document.querySelector('.header'),
      main = document.querySelector('.main'),
      offsetTop = main.getBoundingClientRect();
  console.log(offsetTop.top);
  if (offsetTop.top < 0) {
    header.classList.add('fixed')
  }else{
    header.classList.remove('fixed')
  }
}


// function scrollPage() {
//
// $(".scroll-button").on("click", function() {
//     var attrib = $(this).attr('href');
//     event.preventDefault()
//     $("html,body").stop().animate({
//       scrollTop: $(attrib).offset().top
//     }, 1e3)
// })
//
// }




function openArticle() {
  if (!'.article__button') {
  }else{
    $('.article__button').click(function () {
      var content = $(this).prev();
      if($(this).hasClass('closed')){
        $(content).removeClass('open')
        $(this).removeClass('closed')
        $(this).find('p').html('Показать полностью')
      }else{
        $(content).addClass('open')
        $(this).addClass('closed')
        $(this).find('p').html('Скрыть')
      }
    })
  }

}

function openVacancy() {
  $('.vacancy-item-button').click(function () {
    var item = $(this).parent().parent();
    $('.vacancy-item-button p').html('Узнать подробности')
    if ($(item).hasClass('open')) {
      $('.vacancy-item').removeClass('open')
      item.removeClass('open')
      $(this).removeClass('close')
      $(this).find('p').html('Узнать подробности')
    }else{
      $('.vacancy-item').removeClass('open')
      item.addClass('open')
      $(this).addClass('close')
      $(this).find('p').html('скрыть')
    }
  })
}

function socialsSwitch() {
  $('.socials-button').click(function () {
    var socials = $(this).parent();
    if ($(socials).hasClass('open')) {
      socials.removeClass('open')
    }else{
      socials.addClass('open')
    }
  })
}

function initMask() {
    $(".input-phone").inputmask({"mask": "+7 (999) 999 - 99 - 99"})
}

function openPopup() {
  $('.popopen').click(function () {
    $('.popup').fadeIn()
    $('body').addClass('fixed')
  })
  $('.popup-close').click(function () {
    $('.popup').fadeOut()
    $('body').removeClass('fixed')
  })
}

function customSubmit() {
  $('form .simple-button').click(function () {
    $(this).parent().on('submit', function () {
      alert('form')
      $('.popups').fadeIn()
    })
    $(this).prev().click()
  })

}


function headerGamburger() {
  $('.header-gamburger').click(function () {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active')
      $('.nav').removeClass('open')
      $('body').removeClass('fixed')
    }else{
      $(this).addClass('active')
      $('.nav').addClass('open')
      $('body').addClass('fixed')
      $(document).on("click", function (e){
        var div = $(".header-gamburger");
        if (!div.is(e.target)
        && div.has(e.target).length === 0) {
          $('.header-gamburger').removeClass('active')
          $('.header .nav').removeClass('open')
          $('body').removeClass('fixed')
        }
      });

    }
  })
}

function submenuOpen() {
    $('.subtrigger').click(function () {
      if ($('.submenu').hasClass('open')) {
        $('.submenu').removeClass('open')
        $('body').removeClass('fixed')
      }else{
        if (window.innerWidth < 767) {
          $('body').addClass('fixed')
        }
        $('.submenu').addClass('open')
        $(document).on("click", function (e){
          var div = $(".subtrigger");
          if (!div.is(e.target)
          && div.has(e.target).length === 0) {
            $('.submenu').removeClass('open')
          }
        });
      }
    })
}
