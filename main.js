
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

  // Screen-width related functionalities
});
