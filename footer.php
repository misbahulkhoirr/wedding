<footer>
    <div class="container">
        <div class="col-md-12">
            <h2 class="display-4 my-0 mx-5">Elma & Qbot</h2>
            <small>WebDesign by qbotsista</small>
        </div>
    </div>
</footer>
<div class="play-button">
    <audio id="player" autoplay loop>
        <source src="../music/Its_You.mp3" type=audio/mp3>
    </audio>
</div>
<div class="play-pause btn-play-pause" id="button-control">
    <div class="play">
        <img src="../images/icon/pause.png" alt="play pause" width=25px>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/1.17.3/simple-lightbox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css">
<script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>
<script src="../js/musicv2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    AOS.init();
    $('.gallery a').simpleLightbox({
        docClose: false,
        disableScroll: true,
        disableRightClick: true
    });
    var countDownDate = new Date("10 September 2022 10:00:00").getTime(),
        x = setInterval(function() {
            var e = (new Date).getTime(),
                n = countDownDate - e,
                t = Math.floor(n / 864e5),
                a = Math.floor(n % 864e5 / 36e5),
                o = Math.floor(n % 36e5 / 6e4),
                m = Math.floor(n % 6e4 / 1e3);
            document.getElementsByClassName("days")[0].innerHTML = t, document.getElementsByClassName("hours")[0].innerHTML = a, document.getElementsByClassName("minutes")[0].innerHTML = o, document.getElementsByClassName("seconds")[0].innerHTML = m, n < 0 && (clearInterval(x), document.getElementsByClassName("expired").innerHTML = "EXPIRED")
        }, 1e3);
</script>
<script src="../js/custom.js"></script>
<script src='../js/ajax.js'></script>
<script>
    window.addEventListener("contextmenu", function(e) {
        e.preventDefault()
    }, !1);
</script>
<script>
    function copyText(element) {
        var range, selection, worked;

        if (document.body.createTextRange) {
            range = document.body.createTextRange();
            range.moveToElementText(element);
            range.select();
        } else if (window.getSelection) {
            selection = window.getSelection();
            range = document.createRange();
            range.selectNodeContents(element);
            selection.removeAllRanges();
            selection.addRange(range);
        }

        try {
            document.execCommand('copy');
            alert('success copied');
        } catch (err) {
            alert('Unable to copy number');
        }
    }
</script>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const getTargetTo = urlParams.get('to');

    const target_1 = getTargetTo.replace('-', ' ')
    const target_2 = target_1.replace('-', ' ')
    const target_3 = target_2.replace('-', ' ')
    const target_4 = target_3.replace('-', ' ')
    const target_5 = target_4.replace('-', ' ')
    const target_6 = target_5.replace('-', ' ')
    const target_7 = target_6.replace('-', ' ')
    const target_dan = target_7.replace('dan', '&')


    //capital first
    var splitStr = target_dan.toLowerCase().split(' ');
    for (var i = 0; i < splitStr.length; i++) {
        splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);
    }

    const targetFull = splitStr.join(' ')

    const Name = document.getElementById('Guest_Name');
    const TitleName = document.getElementById('Guest_TitleName');
    Name.innerHTML = targetFull;
    TitleName.innerHTML = targetFull;
</script>

<script>
    $(document).ready(function() {
        $('#button-control').click(function() {
            if ($(this).hasClass('btn-play-pause')) {
                $(this).removeClass('btn-play-pause');
                $(this).addClass('btn-pause');
                $('.play').html('<img src="../images/icon/play.png" alt="play pause" width=25px>');
                $('#player').trigger('pause');
            } else {
                $(this).removeClass('btn-pause');
                $(this).addClass('btn-play-pause');
                $('.play').html('<img src="../images/icon/pause.png" alt="play pause" width=25px>');
                $('#player').trigger('play');
            }

        });
    });
</script>
<!-- <script>
    document.onkeydown = function(e) {
        if (event.keyCode == 123) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
            return false;
        }
    }
</script> -->

</body>

</html>