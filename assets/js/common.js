$(document).ready(function() {
  toggleTab();
  initTimeline();
  setCurrentYear();
  backToTop();
  scrollToSection();
});

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

  content.find('h1').html(slide.attr('data-title'));
  content.find('p').html(slide.attr('data-description'));
  content.find('h2').html(slide.attr('data-subtitle'));
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

    body.stop().animate({ scrollTop: distance }, 1000, 'swing');
  });
}