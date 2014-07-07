///////////////
// FUNCTIONS //
///////////////

function scrollToAnchor(aid)
{
  var aTag = $("h1[name='"+ aid +"']");
  $('html,body').animate({scrollTop: aTag.offset().top - 55},'fast');
  // <span onclick="scrollToAnchor('foobar');">Foobar</span> links to <h1 name="foobar">Foobar</a>
}

///////////
// LOGIC //
///////////

$(window).scroll(function()
{
  
  // Home section's parallax effect
  
  if ($(window).width() > 1000)
  {
    var scrollPos = $(document).scrollTop();
    $("#bg").css("top", -scrollPos/3+"px");
    $("#slogan").css("top", -scrollPos*1.3+"px");
  }
  
  var horizontalNaviHeight = 50;
  var distanceToPageTop = $(document).scrollTop();
  var homeSectionHeight = $("#home").height();
  var toggleNaviFixValue = distanceToPageTop - homeSectionHeight + horizontalNaviHeight;
  console.log(toggleNaviFixValue);
  if (toggleNaviFixValue > 1)
  {
    $("#desktop-nav").css("position", "fixed");
    $("#desktop-nav").css("bottom", "auto");
    $("#desktop-nav").css("top", horizontalNaviHeight+"px");
  }
  else
  {
    $("#desktop-nav").css("position", "static");
    $("#desktop-nav").css("margin-top", -horizontalNaviHeight+"px");
  }
  
}); 

$(document).ready(function()
{
   // Load desired Facebook like button dynamically
   dynamicLikeButtonSwitcher("https://www.facebook.com/tomhimanen");
   
   // Blink Facebook like button
   setInterval(function()
   {
     $(".likebutton-placeholder").animate({ "opacity": "0.2" }, "slow" );
     $(".likebutton-placeholder").animate({ "opacity": "1.0" }, "slow" );
   }, 15000);
   
   $('pre').each(function(i, e) {hljs.highlightBlock(e);});
});