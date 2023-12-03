<div>
  <!-- ======= Book Section ======= -->
  <section id="bible" class="bible">
    <div class="container">
      @if (isset($tot_cap))
        <div class="section-header text-center">
          <h3 class="section-title mt-5">Libro de {{ $nom_lib }}</h3>
          <span class="section-divider"></span>
          <div class="row justify-content-center">
            <div class="col-4">
               <button type="button" class="btn btn-bible w-100" wire:click="bible({{ $num_lib }})"><i class="bi bi-arrow-clockwise"></i> Volver</button>
            </div>
          </div>
        </div>
        <div class="container">
           @for ($num_cap = 1; $num_cap <= $tot_cap; $num_cap++) 
             @if (($num_cap - 1) % 12==0) 
               <div class="row">
             @endif
             <div class="col-1">
               <button type="button" class="btn btn-bible w-100" wire:click="chaper({{ $num_lib }}, '{{ $nom_lib }}', {{ $num_cap }}, {{ $tot_cap  }})">{{ $num_cap }}</button>
             </div>
             @if (($num_cap - 1) % 12 == 11)
               </div>
             @endif
            @endfor
        </div>
       @endif
    </div>
  </section>
  <!-- End Book Section -->
</div>

