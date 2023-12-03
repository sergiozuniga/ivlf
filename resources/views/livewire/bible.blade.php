<div>  
  <!-- ======= Bible Section ======= -->
  <section id="bible">
    <div class="container">
      <div class="section-title mt-3">
        <h2>Santa Biblia</h2>
      </div>
      @foreach ($libros as $lib)
        @if ($lib->id == 1 )
          <div class="section-header text-center">
            <h3 class="section-title">Antiguo Testamento</h3>
            <span class="section-divider"></span>
            <p class="section-description">
               Trata principalmente de la relación entre Dios y la nación de Israel
            </p>
          </div>
        @endif
        @if ($lib->id == 40)
          </div>
          <div class="section-header text-center">
            <h3 class="section-title">Nuevo Testamento</h3>
            <span class="section-divider"></span>
            <p class="section-description">
               Gira en torno a la persona y enseñanzas de Jesús
            </p>
          </div>
        @endif
        @if ( (($lib->id < 40) and (($lib->id - 1) % 6 == 0)) or (($lib->id > 39) and (($lib->id - 40) % 6 == 0)))
          <div class="row">
        @endif
        <div class="col-lg-2 text-center">
          <button type="button" class="btn btn-bible w-100" wire:click="book({{ $lib->id }}, '{{ $lib->txt_libro }}', {{ $lib->tot_capitulos }})"><i class="bi bi-book"></i> {{ $lib->txt_libro }}</button>
        </div>
        @if ((($lib->id < 40) and (($lib->id - 1) % 6 == 5)) or (($lib->id > 39) and (($lib->id - 40) % 6 == 5)))
          </div>
        @endif      
      @endforeach
      <div class="mt-5"></div>
    </div>
  </section>
  <!-- End Bible Section -->
</div>

        
