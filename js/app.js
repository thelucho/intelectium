//Navbar
function openNavBig() {
  document.getElementById("mySidenav").style.right = "0";
}
function openNavSmall() {
  document.getElementById("mySidenav").style.right = "0";
}
function closeNavSmall() {
  document.getElementById("mySidenav").style.right = "-30%";
}

function closeNavBig() {
  document.getElementById("mySidenav").style.right = "-85%";
}

function mediaQuery() {
  var medida = window.matchMedia("(max-width: 800px)")
  if (medida.matches) {
    openNavSmall()
  }
  else {
    openNavBig()
  }
}

function mediaQueryClose() {
  var medida = window.matchMedia("(max-width: 600)")
  if (medida.matches) {
    closeNavSmall()
  }
  else {

    closeNavBig()
  }
}


function mapaBarcelona() {

  document.getElementById('Barcelona').style.textDecoration = "underline"
  document.getElementById('Madrid').style.textDecoration = ""

  document.getElementById('mapa-barcelona').style.display = "block";
  document.getElementById('mapa-madrid').style.display = "none";

}

function mapaMadrid() {
  document.getElementById('Madrid').style.textDecoration = "underline"
  document.getElementById('Barcelona').style.textDecoration = "none"

  document.getElementById('mapa-madrid').style.display = "block";
  document.getElementById('mapa-barcelona').style.display = "none";
}

$(document).ready(function () {
  $('.multi-item-carousel .item').each(function () {
    var next = $(this).next();
    if (!next.length) next = $(this).siblings(':first');
    next.children(':first-child').clone().appendTo($(this));
  });
  $('.multi-item-carousel .item').each(function () {
    var prev = $(this).prev();
    if (!prev.length) prev = $(this).siblings(':last');
    prev.children(':nth-last-child(2)').clone().prependTo($(this));
  });
  //Event for pushed the video
  $('.multi-item-carousel').carousel({
    pause: true,
    interval: false
  });

  $('.home-slider').carousel({
    interval: 5000
  });

  $(".navbar .menu").hover(function () {
    mediaQuery();
  });

  $('.novedad').each(function (index, value) {
    if ($(this).find("img").length) {
      console.log('si existe');
    } else {
      $(this).addClass('sin-img');
    }
  });


  var divs = document.querySelectorAll('.inicio-caja.col-md-3');
  var el = document.querySelectorAll('.inicio-caja.col-md-3')[0];

  if (el) {
    var divsWidth = el.clientWidth - el.style.marginLeft - el.style.marginRight;

    for (i = 0; i < divs.length; i++) {
      divs[i].style.height = divsWidth + 'px';
    }
  }

  $("#carNosotrosMobile").swipe({

    swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
      if (direction == 'left') $(this).carousel('next');
      if (direction == 'right') $(this).carousel('prev');
    },

    allowPageScroll: "vertical"
  });

  const $menu = $('nav');

  $(document).mouseup(e => {
    if (!$menu.is(e.target) // if the target of the click isn't the container...
      && $menu.has(e.target).length === 0) // ... nor a descendant of the container
    {
      mediaQueryClose();
    }
  });
});
