$('#cat_icon,.panel_title').click(function () {
    $('#categories,#cat_icon,.search-bar').stop().slideToggle('slow');
    $('.search-inp').focus();
});
