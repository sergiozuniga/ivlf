<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <title>{{ config('app.name', 'IVLF') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{ asset('img/favicon.ico') }}" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{ asset('plugins/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <!-- Livewire Styles -->
  @livewireStyles
</head>
<body>
  @include('partials.header')
  {{ $slot }}
  @include('partials.footer')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('plugins/aos/aos.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('plugins/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('plugins/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('plugins/swiper/swiper-bundle.min.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/multimedia.js') }}"></script>
  <!-- Livewire Scripts -->
  @livewireScripts
</body>
<!-- Div Modal Audio -->
<div class="modal" id="modalAudio">
    <div class="modal-dialog">
        <div class="modal-content align-items-center text-center">
            <div class="modal-header text-center">
                <h4 id="h4Title" class="modal-title"></h4>
            </div>
            <div id="playAudio" class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn-bible" data-dismiss="modal" onclick="closeAudio()"><i class="bi bi-x-square"></i> Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Div Modal Video -->
<div class="modal" id="modalVideo">
    <div class="modal-dialog modal-lg">
        <div class="modal-content align-items-center text-center">
            <div class="modal-header">
				<h4 class="modal-title"><i class="bi bi-camera-video"></i> Video</h4>
            </div>
            <div id="playVideo" class="modal-body"></div>
			<div class="modal-footer">
                <button type="button" class="btn-bible" data-dismiss="modal" onclick="closeVideo()"><i class="bi bi-x-square"></i> Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Div Modal Song -->
<div class="modal" id="modalSong">
    <div class="modal-dialog">
        <div class="modal-content align-items-center text-center">
            <div class="modal-header text-center">
                <h4 id="h4Titulo" class="modal-title"></h4>
            </div>
            <div id="playSong" class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn-bible" data-dismiss="modal" onclick="closeSong()"><i class="bi bi-x-square"></i> Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Div Modal Lyric -->
<div class="modal" id="modalLyric">
    <div class="modal-dialog">
        <div class="modal-content align-items-center text-center">
            <div class="modal-header text-center">
                <h4 id="h4Letra" class="modal-title"></h4>
            </div>
            <div id="showLyric" class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn-bible" data-dismiss="modal" onclick="closeLyric()"><i class="bi bi-x-square"></i> Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Div Modal Ministry -->
<div class="modal" id="modalMinistry">
    <div class="modal-dialog modal-lg">
        <div class="modal-content align-items-center text-center">
            <div class="modal-header text-center">
                <h4 id="h4Ministry" class="modal-title"></h4>
            </div>
            <div id="divMinistry" class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn-bible" data-dismiss="modal" onclick="closeMinistry()"><i class="bi bi-x-square"></i> Cerrar</button>
            </div>
        </div>
    </div>
</div>
</html>
