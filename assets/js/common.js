$(document).ready(function() {
  var mainController = new ScrollMagic.Controller();

  showNav();
  toggleTab();
  initTimeline();
  setCurrentYear();
  backToTop();
  scrollToSection();
  magicImages(mainController);
  magicTitles(mainController);
  magicQuotesHandler(mainController);
  initMobileVenturesSlick();

  window.addEventListener('resize', debounce(function(e){
    magicQuotesHandler(mainController);
  }));
});

function debounce(func){
  var timer;

  return function(event){
    if(timer) clearTimeout(timer);
    timer = setTimeout(func,100,event);
  };
}

function toggleTab() {
  $('.tab-toggle').click(function() {
    const self = $(this);
    const parent = self.parents('.tab-wrapper');

    parent.find('.tab-toggle.--active').removeClass('--active');
    self.addClass('--active');
    parent.find('.tab-content.--active').removeClass('--active');
    $(parent.find('.tab-content').get(self.index())).addClass('--active');
  });
}

function initTimeline() {
  const parent = $('.landing__timeline ');
  const carousel = parent.find('.slick');

  carousel.on('init', function() {
    $.each(parent.find('.slick-dots li'), function(i, value) {
      const self = $(value);
      const slide = $(carousel.find('.slide:not(.slick-cloned)').get(i));

      self.find('button').text(slide.attr('data-year'));

      setTimelineContent(carousel);
    });
  });
  carousel.on('beforeChange', function() {
    const content = parent.find('.wrapper');

    content.css('opacity', 0);
  });
  carousel.on('afterChange', function() {
    const content = parent.find('.wrapper');

    setTimelineContent(carousel);
    content.css('opacity', 1);
  });

  carousel.slick({
    prevArrow: parent.find('.buttons .prev'),
    nextArrow: parent.find('.buttons .next'),
    dots: true,
    appendDots: parent.find('.dots'),
    variableWidth: true,
    slidesToShow: 1
  });
}

function setTimelineContent(carousel) {
  const parent = $('.landing__timeline ');
  const i = carousel.find('.slick-active').index();
  const slide = $(carousel.find('.slide:not(.slick-clone)').get(i));
  const content = parent.find('.wrapper');

  content.find('.magic-title').html(slide.attr('data-title'));
  content.find('p').html(slide.attr('data-description'));
  content.find('h2').html(slide.attr('data-subtitle'));
  content.find('h1:not(.magic-title)').html(slide.attr('data-year'));
}

function setCurrentYear() {
  $('.year').text(new Date().getFullYear());
}

function backToTop() {
  const body = $('html, body');

  $('.to-top').click(function() {
    body.stop().animate({ scrollTop: 0 }, 2000, 'swing');
  });
}

function scrollToSection() {
  const body = $('html, body');

  $('.scroll-to').click(function(e) {
    e.preventDefault();
    e.stopImmediatePropagation();

    const distance = $($(this).attr('href')).offset().top;

    body.stop().animate({ scrollTop: distance - 60 }, 1000, 'swing');
  });
}

function showNav() {
  if ($(window).scrollTop() > 100) {
    $('nav').addClass('--visible');
  }

  $(window).scroll(function() {
    if ($(window).scrollTop() > 100) {
      $('nav').addClass('--visible');
    } else {
      $('nav').removeClass('--visible');
    }
  });
}

function magicImages(controller) {
  let scenes = [];

  $('.magic-image').each(function(_, val) {
    const self = $(val);
    const clone = self.find('img').clone();
    const wrapper = $('<div>', { class: 'magic-image-wrapper' });

    self.append(wrapper.append(clone));

    let scene = new ScrollMagic.Scene({
      duration: 1,
      triggerElement: val,
      offset: self.attr('data-offset')
    });

    scene.on('start', function() {
      self.find('.magic-image-wrapper').css('height', self.find('> img').height());
    });
    scenes.push(scene);
  });

  controller.addScene(scenes);
}

function magicTitles(controller) {
  let scenes = [];

  $('.magic-title').each(function(_, val) {
    const self = $(val);
    const words = self.html().split(' ');
    const wrappedWords = [];

    $.each(words, function(_, word) {
      wrappedWords.push(`<span class="magic-title-wrapper"><span>${word}</span></span>`);
    })

    self.html(wrappedWords.join(' '));

    let scene = new ScrollMagic.Scene({
      duration: 1,
      triggerElement: val,
      offset: self.attr('data-offset')
    });

    scene.on('start', function() {
      self.find('> span').addClass('--active')
    });
    scenes.push(scene);
  });

  controller.addScene(scenes);
}

function magicQuotesHandler(controller) {
  if ($(window).width() > 960 && !$('.landing__quotes').hasClass('--cloned')) {
    magicQuotes(controller);
  } else if ($(window).width() <= 960 && $('.landing__quotes').hasClass('--cloned')) {
    destroyMagicQuotes();
  }
}

function magicQuotes(controller) {
  $('.magic-quote').each(function(_, val) {
    const self = $(val);
    const wrapper = self.find('> div');
    const span = self.find('> div span');
    let index = 1;

    const horizontalScroller = (el) => {
      let left = parseInt(el.css('left'));
      let temp = -1 * el.width();

      if (left < temp) {
        const clone = el.clone();

        el.stop();
        el.remove();

        wrapper.append(clone);
        // clone.css('left', (clone.width() * (wrapper.find('span').length - 1)) + 60);
        clone.css('left', parseInt(wrapper.find('span').last().css('left')) + ((wrapper.find('span').last().width() + 60) * index));

        horizontalScroller(clone);

        return;
      }

      el.animate({ left: (parseInt(left) - 10) }, 500, 'linear', () => horizontalScroller(el));
    }

    for(i = 0; i < 4; i++) {
      let clone = span.clone();

      clone.addClass('--clone');
      wrapper.append(clone);
      clone.css('left', (span.width() + 60) * i);
      index++;
    }

    self.find('> div span').each(function(_, el) {
      horizontalScroller($(el));
    });

    $('.landing__quotes').addClass('--cloned');
  });
}

function destroyMagicQuotes() {
  $('.magic-quote div span').each(function(_, el) {
    const self = $(el);

    self.stop();
    self.css('left', 0);
    if (self.hasClass('--clone')) self.remove();
  });

  $('.landing__quotes').removeClass('--cloned')
}

function initMobileVenturesSlick() {
  $('.landing__ventures .slick').slick({
    breakpoint: 960,
    settings: 'unslick',
    mobileFirst: true,
    slidesToShow: 1,
    arrows: false,
    dots: true,
    appendDots: $('.landing__ventures .mobile-dots'),
    responsive: [
      {
        breakpoint: 960,
        settings: 'unslick'
      }
    ]
  });
}