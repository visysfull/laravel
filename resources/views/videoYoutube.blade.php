<!DOCTYPE html>
<head>
    <title>Video YouTube</title>
    <link
        rel="icon"
        type="image/icon type"
        href="https://images.vexels.com/media/users/3/137425/isolated/lists/f2ea1ded4d037633f687ee389a571086-youtube-icon-logo.png"
    >
    <link 
        rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous"
    >
</head>

<html>
    <body>
        <div class="row justify-content-center">
            <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
            <div id="player"/>
        </div>

        <script>
            // 2. This code loads the IFrame Player API code asynchronously.
            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

            // 3. This function creates an <iframe> (and YouTube player)
            // after the API code downloads.
            var player;
            function onYouTubeIframeAPIReady() {
                player = new YT.Player('player', {
                    height: '720',
                    width: '1280',
                    videoId: 'mnznOcDW-54',
                    events: {
                        'onReady': onPlayerReady,
                        'onStateChange': onPlayerStateChange
                    }
                });
            }

            // 4. The API will call this function when the video player is ready.
            function onPlayerReady(event) {
                event.target.playVideo();
            }

            // 5. The API calls this function when the player's state changes.
            // The function indicates that when playing a video (state=1),
            // the player should play for six seconds and then stop.
            var done = false;
            function onPlayerStateChange(event) {
                if (event.data == YT.PlayerState.PLAYING && !done) {
                    setTimeout(stopVideo, 6000);
                    done = true;
                }
            }

            function stopVideo() {
                player.stopVideo();
            }
        </script>
    </body>
</html>

<style scoped>
    html{
        overflow: hidden
    }
</style>