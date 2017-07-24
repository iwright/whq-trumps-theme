(function($) {
  'use strict';
  $(function() {
    // Run our stat progress on DOM ready.
    whqtrump_stat();
  });

  // Make sure our code is ran on ajax success too.
  $('.whq-deck-sort').ajaxSuccess(function() {
    whqtrump_stat();
  });

  // Custom selectboxes.
  $('select').each(function() {
    // Wrap the select box in a new wrapper.
    $(this).wrap('<div class="selectbox"/>');
    // Add the drop down button after the select box.
    $(this).after('<span class="dropdown-button"></span>');
  });

  // WHQ Trump Stats function as being called multiple times.
  function whqtrump_stat() {
    // If we have stats on the page continue.
    if ($('.whqtrump-stat').length > 0) {
      // Loop through each state and set the width.
      $('.whqtrump-stat').each(function() {
        var progress = $(this).data('level');
        $(this).innerWidth(progress + '%');
      });
    }
  }
})(jQuery);
