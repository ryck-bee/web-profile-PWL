$('.autoScroll').on('click', function(e) {

    var tujuan = $(this).attr('href');
    var elemenTujuan = $(tujuan);
   
    $('html , body , header').animate({
        scrollTop: elemenTujuan.offset().top
    });
   
    e.preventDefault();
});