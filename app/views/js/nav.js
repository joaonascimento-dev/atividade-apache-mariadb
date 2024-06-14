$('.btnside').click(function(){
  $(this).toggleClass("click");
  $('.sidebar').toggleClass("show");
});

$('.feat-btn').click(function(){
  $('nav ul .feat-show').toggleClass("show");
  $('nav ul .first').toggleClass("rotate");
});

$('.serv-btn').click(function(){
  $('nav ul .serv-show').toggleClass("show1");
  $('nav ul .second').toggleClass("rotate");
});

$('.terv-btn').click(function(){
  console.log("Clique no botão de Infantil");
  $('.terv-show').toggleClass("show2");
  $('.third').toggleClass("rotate");
});

$('.cerv-btn').click(function(){
 
  $('.cerv-show').toggleClass("show3");
  $('.fort').toggleClass("rotate");
});


$('nav ul li').click(function(){
  $(this).addClass("active").siblings().removeClass("active");
});
