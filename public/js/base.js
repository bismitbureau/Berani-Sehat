$('#cat_icon,.panel_title').click(function () {
    $('#categories,#cat_icon,.search-bar').stop().slideToggle('slow');
    $('.search-inp').focus();
});
// try {
if ($(".nav2").offset() != undefined) {
    var sOffset = $(".nav2").offset().top;
    var shareheight = $(".nav2").height() + 43;
    $(window).scroll(function() {
        var scrollYpos = $(document).scrollTop();
        if (scrollYpos > sOffset - shareheight) {
            $(".nav2").css({
                'position': 'fixed',
                'top': '0',
                'z-index': '2'

            });
            $(".nav2 .container").css({
                'padding-top': '5px',
                'padding-bottom': '5px'
            });
        } else {
            $(".nav2").css({
                'position': 'relative',
                'z-index': '0'
            });
            $(".nav2 .container").css({
                'padding-top': '0px',
                'padding-bottom': '0px'
            });
        }
    });
}
// }
// catch(err) {
// }

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
