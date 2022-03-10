$(document).ready(function() {
  toggleTab();
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
