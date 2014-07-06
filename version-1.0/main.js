
$(document).ready(function()
{
  // Slider initialization
  $('.bxslider').bxSlider(
  {
    mode: "fade",
    pagerCustom: "#navi",
    controls: false
  });

  // Scrolling-related functionalities
  if($(window).width() > 1050)
  {
    $(window).scroll(function()
    {
      var scrollPos = $(document).scrollTop();
      $("#bg").css("top", -scrollPos/3+"px");
    });
    $(document).scroll(function ()
    {
      var y = $(this).scrollTop();
      if (y > 600)
      {
        $('#fb-like-side-wrapper').fadeIn();
      }
      else
      {
        $('#fb-like-side-wrapper').fadeOut();
      }
    });
  }


  // Screen-width related functionalities
});
