<div>
  <!-- ======= Chaper Section ======= -->
  <section id="bible" class="bible">
    <div class="container">
      <div class="section-header text-center">
        <h3 class="section-title mt-3">
          Libro de {{ $nom_lib }}<br>
          Capítulo {{ $num_cap }}
        </h3>
        <span class="section-divider"></span>
        <div class="row justify-content-center">
          <div class="col-4">
            <button type="button" class="btn btn-bible w-100" onclick="playAudio('{{ $num_lib }}', '{{ $nom_lib }}', '{{ $num_cap }}', '{{ $host }}')"><i class="bi bi-volume-up"></i> Escuchar audio</button>
          </div>
          <div class="col-4">
            <button type="button" class="btn btn-bible w-100" wire:click="book({{ $num_lib }}, '{{ $nom_lib }}', {{ $tot_cap }})"><i class="bi bi-arrow-clockwise"></i> Volver</button>
          </div>
        </div>
      </div>
      <div class="container">
        <p class="text-left">
          @foreach ($versiculos as $ver)
            <sup>{{ $ver->num_versiculo }}</sup>&nbsp;{{ $ver->txt_versiculo }}<br>
          @endforeach
        </p>
      </div>
    </div>
  </section>
  <!-- End Chaper Section -->
</div>
    