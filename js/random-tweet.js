// Code is based on this example code: http://ctrlq.org/code/19933-embed-tweet-with-javascript

window.onload = (function(){

  var tweetIds = [
      "497971907913068545",
      "499279533280071681",
      "499508200543379456",
      "501069623258021888",
      "502051719434743808",
      "504065630170275841",
      "506821774143913984",
      "506826779236261888",
      "508623829347082240",
      "510360711239704577",
      "511253242161164288",
      "511483589343858688",
      "512257388809035776",
      "512875445357146112",
      "514311235723337729",
      "518737302773055488",
      "521653265696821248",
      "521916409400795136",
      "525580632274272256",
      "527065081067368448",
      "527529532413452289",
      "529032601236164610",
      "529294376670068736",
      "529346659948699648",
      "532854428022214656",
      "534367874337738752",
      "536852673057001472",
      "539135558447271936",
      "540780896874668032",
      "542793163883438081",
      "544406095037734912",
      "544459044585766913",
      "548451358891065345",
      "548753403032379393",
      "550001166785183744",
      "551290117298876416",
      "551756057379606528",
      "551813754393223171",
      "552118370623954944",
      "552135456381747203",
      "553177866859728896",
      "553457571076800512",
      "554364121261809664",
      "555699930522595328",
      "555754875850866689",
      "556120192833830912",
      "557619493405745152",
      "558970100079149056",
      "562202297204506624",
      "562939842347433986",
      "563290063044620288",
      "564086572652703744",
      "565060873547698176",
      "565269427932123136",
      "565496008453652480",
      "567288253796339712",
      "567350541790232576",
      "568310718791065601",
      "568357131079917569",
      "569235753735225344",
      "571726697357312002"
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
