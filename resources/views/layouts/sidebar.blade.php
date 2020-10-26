<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="." class="navbar-brand navbar-brand-autodark">
        <img src="{{asset('logo-white.svg')}}" alt="Tabler" class="navbar-brand-image">
      </a>
      <div class="navbar-nav flex-row d-lg-none">
        <div class="nav-item dropdown d-none d-md-flex mr-3">
          <a href="#" class="nav-link px-0" data-toggle="dropdown" tabindex="-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
            <span class="badge bg-red"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
            <div class="card">
              <div class="card-body">
                
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="navbar-nav pt-lg-3">
          
          <x-nav-link href="{{route('home')}}" icon="fa-home">Home</x-nav-link>
        </ul>
        
      <form action="{{route('auth.logout')}}" method="post">
        @csrf
        <input type="submit" class="btn btn-danger w-100" value="Logout">
      </form>
      </div>
    </div>
  </aside>