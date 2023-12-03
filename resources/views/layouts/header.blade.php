<div class="header">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm nav-header">
        <div class="container justify-content-center">
            <!-- Branding Image -->
            <a class="navbar-brand" @if (Auth::check()) href="{{ url('/home') }}" @else href="{{ url('/') }}" @endif>
                <h2>{{ config('app.name', 'Iglesia Viña La Florida') }}</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</div>
