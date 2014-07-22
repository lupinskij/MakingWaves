var Ui = {
  init: function() {
    console.log('Interface!!!!');
  }
};
jQuery(function($) {
  $('a[href^="#"]').on('click', function(e) {
      e.preventDefault();

      var target = this.hash,
      $target = $(target);

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 900, 'swing', function () {
          window.location.hash = target;
      });
  });
});