//Scripts layoutScripts v1.0
var $menuInner,
    $menuMobile = $('#menu'),
    $body = $('body'),
    $dataAttr = $('[data-menu-expand]');
function menuMobile() {
  $menuMobile.appendTo($body);
  $menuInner = $menuMobile.children('.inner');
  $menuMobile._locked = false;
  $menuMobile.append('<a class="close" href="#menu">Close</a>');

  $menuMobile._lock = function () {
    if ($menuMobile._locked)
      return false;
    $menuMobile._locked = true;
    window.setTimeout(function () {
      $menuMobile._locked = false;
    }, 350);
    return true;
  };

  $menuMobile._show = function () {
    if ($menuMobile._lock())
      $body.addClass('is-menu-visible');
  };

  $menuMobile._hide = function () {
    if ($menuMobile._lock())
      $body.removeClass('is-menu-visible');
  };

  $menuMobile._toggle = function () {
    if ($menuMobile._lock())
      $body.toggleClass('is-menu-visible');
  };

  $body.on('click', 'a[href="#menu"]', function(ev){
    ev.stopPropagation();
    ev.preventDefault();
    $menuMobile._toggle();
  }).on('keydown', function (event) {
    if (event.keyCode == 27)
      $menuMobile._hide();
  });
}

function WowData() {
  var wow = new WOW(
    {
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       0,          // default
    mobile:       false,       // default
    live:         true        // default
  })
  setTimeout(function(){
    wow.init();
  },1000);
}

var $isOpen = false,
    $overlay = $('.overlayGenerico'),
    $modalGen = $('#auto-generico');
function effectsModal() {
  TweenMax.to($overlay, 0.1, { autoAlpha:1 });
  TweenMax.fromTo($modalGen, 0.6, { top: '-300%'}, { delay: 0.2, top: "0%", ease:Power3.easeInOut, easeParams:[1.1,0.7], force3D: true });
}
function abreModalID() {
  $('[data-open-modal]').each(function(){
    var $idProd = $(this).data('id-modal');
    $(this).click(function(e){
      e.preventDefault();
      effectsModal();
    });
  });
}
function closeModalID() {
  $('[data-close-modal]').click(function(e){
    e.preventDefault();
    TweenMax.to($overlay, 0.1, { delay: 0.55, autoAlpha: 0 });
    // TweenMax.to($modalGen, 0.55, { top: '300%', ease:Power3.easeInOut, force3D: true });
  });
}
function closeModForm() {
  $('[data-close-form]').click(function(e){
    e.preventDefault();
    TweenMax.to($('#formOpen'), 0.1, { scale: 1.2, opacity: 0, ease: Power3.easeInOut, zIndex: -1, easeParams: [1.1,0.7], force3D: true });
  });
}

// Funcion para medir alto del header
function altoHead() {
  var head = $('#headerGeneral').outerHeight();
  // $('#mm').css({ 'top': head+'px' });
  $('#blockhh').css({ 'height': head+'px' });
}

function toggleInfo(anim) {
  anim.reversed( !anim.reversed() );
}

//Funcion para Header Oculto
function isSafari() {return /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);}
function isChrome() {return /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);}
function scrolMenu() {
  var c, currentScrollTop = 0,
       navbar = $('#headerGeneral');

   $(window).scroll(function () {
      var a = $(window).scrollTop();
      var b = navbar.outerHeight();
     
      currentScrollTop = a;
     
      if (c < currentScrollTop && a > b + b) {
        // navbar.addClass("scrollHUp");
        if(isSafari() || isChrome()) {
          navbar.css('-webkit-transform', 'translateY(-100%)');
        } else {
          navbar.css('transform', 'translateY(-100%)');
        }
      } else if (c > currentScrollTop && !(a <= b)) {
        // navbar.removeClass("scrollHUp");
        if(isSafari() || isChrome()) {
          navbar.css('-webkit-transform', 'translateY(0)');
        } else {
          navbar.css('transform', 'translateY(0)');
        }
      }
      c = currentScrollTop;
  });
}
function headScrolDown() {
  //WindowSrcoll
  $(window).on("scroll", function() {
    let headerPirn = $("#headerGeneral").outerHeight();
    let sumaHead = headerPirn;
    if($(window).scrollTop() > sumaHead) {
        $("#headerGeneral").addClass("activeHead");
    } else {
      $("#headerGeneral").removeClass("activeHead");
    }
  });
}

// Load window
$(window).on('load', function(){
  scrolMenu();
  headScrolDown();
  WowData();
  menuMobile();
});

// DOM ready
jQuery(document).ready(function($){
  menuMobile();
  scrolMenu();
  headScrolDown();
  WowData();
  abreModalID();
  closeModalID();
  altoHead();

  $(window).scroll(function(event) {
    var scroll = $(this).scrollTop();
    $('.header-title').css({
      opacity: function() {
        var elementHeight = $(this).height(),
            opacity = ((1 - (elementHeight - scroll) / elementHeight) * 0.8) + 0.0;
        return opacity;
      }
    });
  });

  $( "#menu .dropdownMenu" ).hide();
  $('.item-menu-dropdown > a').click(function (e) {
    e.preventDefault();
    if ($("#menu .dropdownMenu").is(':hidden')) {
      $("#menu .dropdownMenu").fadeIn(400);
    } else {
      $("#menu .dropdownMenu").fadeOut(400);
    }
  });

  //BackToTop
  var btn = $('#button');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });
  
});