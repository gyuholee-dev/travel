//헤더에 드랍다운 기능
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
//인덱스 이미지스왑

$(function(){
  $(".history").click(function(){
    console.log('AAA');
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