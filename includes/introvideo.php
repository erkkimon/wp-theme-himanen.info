<?php if (is_front_page() && preg_match('/Chrome|Firefox/i', $_SERVER['HTTP_USER_AGENT']))
{
if ($_SERVER['HTTP_REFERER'] == null || preg_match('/kyrkpressen/i', $_SERVER['HTTP_REFERER']) || preg_match('/facebook/i', $_SERVER['HTTP_REFERER']) || preg_match('/kouvolansanomat/i', $_SERVER['HTTP_REFERER']) || preg_match('/google/i', $_SERVER['HTTP_REFERER']) || preg_match('/seurakuntalainen/i', $_SERVER['HTTP_REFERER']))
{ ?>

<div style="position:absolute;width:100%;height:100%;background:black;z-index:5;top:0px;left:0px;" id="intro_video_container">
        <div style="z-index: 10; width: 100%; height: 100%;" id="player">

        </div>
        <div style="position: absolute; top: 0px; right: 0px; z-index: 15; color: #FFFFFF;
                padding: 10px; margin: 0px; text-shadow: 1px 1px 1px #FFFFFF;">
                <a href="#" style="color: #FFFFFF; text-decoration: none;" id="close">[sulje intro]</a>
        </div>
</div>
        <script type="text/javascript">
                // Load the IFrame Player API code asynchronously
                var tag = document.createElement('script');
                tag.src = "http://www.youtube.com/player_api";
                var firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                // Create an <iframe> and YouTube player
		var player;
                function onYouTubePlayerAPIReady()
                {
                        player = new YT.Player('player',
                        {
                                height: '1024',
                                width: '768',
                                videoId: 'Uc1mwmukrH4',
				// videoId: 'U3i_u0TRVW0',
                                playerVars: {'autoplay': 1, 'controls': 0,'autohide': 1, 'wmode': 'opaque',
                                        'fs': 1, 'modestbranding': 1, 'showinfo': 0},
                                events: { onStateChange: function (event)
                                                {
                                                        if(event.data == YT.PlayerState.ENDED)
                                                        {
                                                                $('#player').fadeOut("fast", function() {});
                                                                $('#intro_video_container').fadeOut("500", function() {});
                                                        }
                                                }
                                        }
                        });
                        document.getElementById('close').onclick = function()
                        {
                                player.pauseVideo();
                                $('#player').fadeOut("fast", function() {});
                                $('#intro_video_container').fadeOut("500", function() {});
                        };
		}
        
	</script> 

<?php }
} ?>
