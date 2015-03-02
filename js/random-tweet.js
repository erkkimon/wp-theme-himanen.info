window.onload = (function(){

  var tweetIds = [
      "504873757056700416",
      "506832354447720448"
  ]

  var randomTweetId = tweetIds[Math.floor(Math.random() * tweetIds.length)];

  var tweet = document.getElementById("random-tweet");

  twttr.widgets.createTweet(
    randomTweetId, tweet,
    {
      conversation : 'none',    // or all
      cards        : 'hidden',  // or visible
      linkColor    : '#cc0000', // default is blue
      theme        : 'light'    // or dark
    })
  .then (function (el) {
    //el.contentDocument.querySelector(".stats-favorites").display = "none";
  });

});
