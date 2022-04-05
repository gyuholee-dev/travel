//인덱스 이미지스왑
$(function(){
  $(".history").click(function(){
    $(".theme-imgs1").css("display","block");
    $(".theme-imgs2").css("display","none");
    $(".theme-imgs3").css("display","none");
    $(".history").css("color","#F26E62");
    $(".building").css("color","#666");
    $(".house").css("color","#666");
  });
  $(".building").click(function(){
    $(".theme-imgs1").css("display","none");
    $(".theme-imgs2").css("display","block");
    $(".theme-imgs3").css("display","none");
    $(".history").css("color","#666");
    $(".building").css("color","#F26E62");
    $(".house").css("color","#666");
  });
  $(".house").click(function(){
      $(".theme-imgs1").css("display","none");
      $(".theme-imgs2").css("display","none");
      $(".theme-imgs3").css("display","block");
      $(".history").css("color","#666");
      $(".building").css("color","#666");
      $(".house").css("color","#F26E62");
  });
});

//디테일이미지스왑
$(function(){ 
  $(".dsum1").click(function(){
    $(".detail-img-bottom1").css("display","block");
    $(".detail-img-bottom2").css("display","none");
    $(".detail-img-bottom3").css("display","none");
    $(".detail-img-bottom4").css("display","none");
    $(".detail-img-bottom5").css("display","none");
  });
  $(".dsum2").click(function(){
    $(".detail-img-bottom2").css("display","block");
    $(".detail-img-bottom1").css("display","none");
    $(".detail-img-bottom3").css("display","none");
    $(".detail-img-bottom4").css("display","none");
    $(".detail-img-bottom5").css("display","none");
  });
  $(".dsum3").click(function(){
    $(".detail-img-bottom3").css("display","block");
    $(".detail-img-bottom2").css("display","none");
    $(".detail-img-bottom1").css("display","none");
    $(".detail-img-bottom4").css("display","none");
    $(".detail-img-bottom5").css("display","none");
  });
  $(".dsum4").click(function(){
    $(".detail-img-bottom4").css("display","block");
    $(".detail-img-bottom2").css("display","none");
    $(".detail-img-bottom3").css("display","none");
    $(".detail-img-bottom1").css("display","none");
    $(".detail-img-bottom5").css("display","none");
  });
  $(".dsum5").click(function(){
    $(".detail-img-bottom5").css("display","block");
    $(".detail-img-bottom2").css("display","none");
    $(".detail-img-bottom3").css("display","none");
    $(".detail-img-bottom4").css("display","none");
    $(".detail-img-bottom1").css("display","none");
  });
});


(function($){
  $('#thumbcarousel').carousel(0);
  var $thumbItems = $('#thumbcarousel .item');
  $('#carousel').on('slide.bs.carousel', function (event) {
     var $slide = $(event.relatedTarget);
     var thumbIndex = $slide.data('thumb');
     var curThumbIndex = $thumbItems.index($thumbItems.filter('.active').get(0));
      if (curThumbIndex>thumbIndex) {
          $('#thumbcarousel').one('slid.bs.carousel', function (event) {
              $('#thumbcarousel').carousel(thumbIndex);
          });
          if (curThumbIndex === ($thumbItems.length-1)) {
              $('#thumbcarousel').carousel('next');
          } else {
              $('#thumbcarousel').carousel(numThumbItems-1);
          }
      } else {
          $('#thumbcarousel').carousel(thumbIndex);
      }
  });
})(jQuery);