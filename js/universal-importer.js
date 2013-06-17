// Generated by CoffeeScript 1.6.2
if ($('#banners').length > 0) {
  $('#articles').waypoint(function(dir) {
    if (dir === 'up') {
      return $('#banners').removeClass('sticky');
    } else {
      return $('#banners').addClass('sticky');
    }
  }, {
    offset: 30
  });
}

if ($('.fitting-video').length > 0) {
  $('.fitting-video').fitVids();
}

if ($('.all-images').length > 0) {
  $('.all-images').each(function(i, e) {
    var box, collection_class, parent, prime_image;

    collection_class = $(e).data('ref');
    parent = $(e).parent('.article-body');
    prime_image = parent.find('figure');
    box = $("." + collection_class).colorbox({
      rel: collection_class,
      maxWidth: '90%',
      maxHeight: '90%',
      next: '',
      previous: '',
      close: '',
      onOpen: function() {
        $('#cboxNext').addClass('icon-arrow-right');
        $('#cboxPrevious').addClass('icon-arrow-left');
        $('#cboxClose').addClass('icon-exit');
        return $('body').css({
          overflow: 'hidden'
        });
      },
      onClosed: function() {
        return $('body').css({
          overflow: 'auto'
        });
      }
    });
    return prime_image.on('click', function(e) {
      e.preventDefault();
      return box.first().click();
    });
  });
}
