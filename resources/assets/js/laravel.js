$(function() {

  // Smooth scroll to anchor
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

  // Sliding sidebar menu
  // $('.menu-link').bigSlide();

  var scotchPanel = $('#slide-menu').scotchPanel({
    containerSelector: 'body',
    direction: 'left',
    duration: 300,
    transition: 'ease',
    distanceX: '70%',
    forceMinHeight: true,
    minHeight: '2500px',
    enableEscapeKey: true
  });

  $('.toggle-slide').click(function() {
    scotchPanel.css('overflow', 'scroll');
      scotchPanel.toggle();
      return false;
  });

  $('.overlay').click(function() {
    // CLOSE ONLY
    scotchPanel.close();
  });

  // gheading links
  $('.docs-wrapper').find('a[name]').each(function () {
        var anchor = $('<a href="#' + this.name + '">');
        $(this).parent().next('h2').wrapInner(anchor);
    });

  // set up scrollUp.
  $.scrollUp({
        scrollText: '返回顶部',
    });

    $(".turnofflight").click(function() {
        if($('body.docs').hasClass('nightmode'))
        {
            $("body.docs").removeClass('nightmode');
            Cookies.remove('nightmode');
        }
         else
        {
            $("body.docs").addClass('nightmode');
            Cookies.set('nightmode', 'yes');
        }
    });

    // sidebar nav active state
    if (location.pathname != '/docs/5.1' && location.pathname != '/docs/5.1/') {
        $('.sidebar a[href^="' + location.pathname + '"]').addClass('active');
    }

});