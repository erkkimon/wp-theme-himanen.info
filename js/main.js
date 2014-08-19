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
  
  if (distanceToPageTop > (homeSectionHeight + 150))
  {
    if ($(window).width() > 1200)
    {
      $("#google-ads").fadeIn("slow");
    }
  }
  else
  {
    $("#google-ads").fadeOut("fast");
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
     $(".twitter-follow-button-placeholder").animate({ "opacity": "0.2" }, "slow" );
     $(".twitter-follow-button-placeholder").animate({ "opacity": "1.0" }, "slow" );
   }, 15000);
   
   $('pre').each(function(i, e) {hljs.highlightBlock(e);});

   $('html, body').delay(1000).animate({scrollTop: $('h1:first').offset().top - 55}, 'slow');

});

//////////////
// BUGFIXES //
//////////////

// This is a temporary fix for the offcanvas menu problem: the menu doesn't 
// hide if it's open when window size is increased. This fixes it.

$(window).resize(function ()
{
    if ($(window).width() > 992)
    {
        $("#home").trigger("click");
    }
});
