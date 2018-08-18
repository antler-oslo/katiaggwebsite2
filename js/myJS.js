$(document).ready(function(e) {

/* NAVBAR */

var headerHeight = $('header').height();

  $(window).scroll(function () {

     var topnav = $('nav').offset().top;

      if ($(window).scrollTop() > topnav) {
        var navHeight = $('nav').height();
        $('nav').addClass('navbar-fixed-top');
        $("#projects").css("margin-top",navHeight);
      }

      if ($('nav').hasClass('navbar-fixed-top') && $(window).scrollTop() < headerHeight){
        $('nav').removeClass('navbar-fixed-top');
        $("#projects").css("margin-top","0");
      }

  });

/* PHOTOS */

var photos = new Array();
for (var i = 1; i <=12; i++) {
					photos[i-1] = new Image();
					photos[i-1].src = "img/me/" + i + ".jpg";
}

var numberPhoto = 2;

var offset = $('#photo').offset();
var mousePosX;
var mousePosY;

var widthPhoto = $('#photo').width();
var heightPhoto = $('#photo').height();
var x;
var y;
var rad;
var deg;
var zones = [0,16,32,48,64,80,100,112,128,144,160,176,180];

  $("#photo").mousemove(function(e){

    mousePosX = (e.pageX - offset.left);
    mousePosY = (e.pageY - offset.top);
    if(mousePosY < heightPhoto/2){
      x = mousePosX-widthPhoto/2;
      y = heightPhoto/2-mousePosY;
      var rad = Math.atan2(y, x);
      var deg = rad * (180 / Math.PI);
      for(var i=0;i<11;i++){
        if(deg>zones[i] && deg <= zones[i+1]){
          numberPhoto = i+2;
        }
      }
    }

    $(this).css("background-image","url("+photos[numberPhoto-1].src+")");

  });

  $("#photo").mouseout(function(){
    $(this).css("background-image","url("+photos[0].src+")");
  });


/* PROJECTS */

$(".project").mouseenter(function(){
  $(this).children(".overlayProject").animate({"height" : "100%" },200);
  $(this).children(".summaryProject").slideToggle(400);
  $(this).children(".moreProject").fadeIn(400);
});

$(".project").mouseleave(function(){
  $(this).children(".summaryProject").slideToggle(200);
  $(this).children(".moreProject").fadeOut(100);
  $(this).children(".overlayProject").animate({"height" : "20%" },200);
});

$(".moreProject").click(function(){

  $("#overlayBody").fadeIn(100);
  $("#detailsProject").show();

  // Get project details

  var idProject = $(this).attr('id').slice(7);
  $.ajax({
    url: "php/projectDetails.php?id="+idProject
  }).done(function(data) {
    $('#detailsProject').html(data);
  });

});

});
