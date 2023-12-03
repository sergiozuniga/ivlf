
function playAudio(num_lib, nom_lib, num_cap, host) {
    let pre = '', lib = '', url = '', mp3 = '';
    if (num_lib < 10) {
      lib = '0' + num_lib.toString();
    } else {
      lib = num_lib.toString();
    }
    if (num_lib == 19) {
      if (num_cap < 10) {
        pre = '00';
      } else if (num_cap < 100) {
        pre = '0';
      }
    } else {
      if (num_cap < 10) {
        pre = '0';
      }
    }
    mp3 = lib + '_' + pre + num_cap.toString() + '.mp3';
    url = host + '/' + mp3;
    $("#h4Title").html("Libro de " + nom_lib + "<br>" + "Capítulo " + num_cap);
    $("#playAudio").html("<audio id='play-audio' src=" + url + " controls autoplay>Tu browser no soporta audio.</audio>");
    $("#modalAudio").modal('show');
}

function closeAudio() {
    document.querySelector('#play-audio').pause();
    $("#modalAudio").modal('hide');
}

function playVideo(url) {
  $("#playVideo").html("<video id='play-video' src=" + url + " width='100%' height='100%' controls autoplay>Tu browser no soporta videos.</video>");
  $("#modalVideo").modal('show');
}

function closeVideo() {
  document.querySelector('#play-video').pause();
  $("#modalVideo").modal('hide');
}
