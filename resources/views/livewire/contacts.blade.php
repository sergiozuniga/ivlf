<div>
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container">
      <br>
      <div class="section-title mt-5">
        <h2>Peticiones</h2>
      </div>
      <div class="row">
        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Dirección:</h4>
              <p>Av. Rojas Magallanes 1122, La Florida, Santiago</p>
            </div>
            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>contacto@ivlf.cl</p>
            </div>
            <iframe src="https://maps-api-ssl.google.com/maps?hl=es&amp;ll=-33.536029,-70.577323&amp;output=embed&amp;q=Rojas+Magallanes+1122,+La+Florida,+Regi%C3%B3n+Metropolitana,+Chile+(Rojas+Magallanes+1122)&amp;z=19"
                          frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="#" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Tu Nombre</label>
                <input type="text" class="form-control" wire:model="nombre">
                @error('nombre') <span>{{ $message }}</span> @enderror
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <label for="name">Tu Email</label>
                <input type="email" class="form-control" wire:model="email">
                @error('email') <span>{{ $message }}</span> @enderror
              </div>
            </div>
            <div class="form-group mt-3">
              <label for="name">Petición</label>
              <input type="text" class="form-control" wire:model="sujeto">
              @error('sujeto') <span>{{ $message }}</span> @enderror
            </div>
            <div class="form-group mt-3">
              <label for="name">Detalle</label>
              <textarea class="form-control" rows="10" wire:model="peticion"></textarea>
              @error('peticion') <span>{{ $message }}</span> @enderror
            </div>
            <div class="text-center">
              <button class="btn btn-bible w-50" wire:click='save'><i class="bi bi-mailbox"></i> Envía Petición</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
</div>