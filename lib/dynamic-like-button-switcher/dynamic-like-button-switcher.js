function dynamicLikeButtonSwitcher(fbPageAddr) 
{
  if(localStorage.getItem("likesUs") === "true")
  {
    $(".likebutton-placeholder").html("<iframe src='https://www.facebook.com/plugins/like.php?href="+encodeURIComponent(window.location).replace('file%3A%2F%2F%2F', 'https%3A%2F%2F')+"&width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35&amp;appId=159856524054347' scrolling='no' frameborder='0' style='border:none; overflow:hidden; height:35px;' allowTransparency='true'></iframe>");
  }
  else
  {
    $(".likebutton-placeholder iframe").attr("src", "https://www.facebook.com/plugins/like.php?href="+encodeURIComponent(fbPageAddr).replace("file%3A%2F%2F%2F", "https%3A%2F%2F")+"&width&layout=button&action=like&show_faces=false&share=false&height=35&appId=159856524054347"); //https://www.facebook.com/plugins/like.php?href="+encodeURIComponent(fbPageAddr).replace("file%3A%2F%2F%2F", "https%3A%2F%2F")+"&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35&amp;appId=1452967044949329");
    $(".likebutton-placeholder iframe").attr("scrolling", "no"); 
    $(".likebutton-placeholder iframe").attr("frameborder", "0"); 
    $(".likebutton-placeholder iframe").attr("style", "border:none; overflow:hidden; height:35px;");
    $(".likebutton-placeholder iframe").attr("allowTransparency", "true"); 
  }
}

jQuery(document).ready(function($)
{
  $('.likebutton-placeholder iframe').iframeTracker
  ({
    blurCallback: function() 
    { 
      localStorage.setItem("likesUs", "true"); 
    }
  });  
});