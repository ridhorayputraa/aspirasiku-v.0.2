<nav class="navbar navbar-expand-lg bg-danger ">
    <div class="container mt-2">
      <a class="navbar-brand" href="/"><h3 class="text-white nav-head-text">Aspirasiku</h3></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">





         {{-- method dari middleware --}}

         <ul class="navbar-nav ms-auto">
            @auth

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                  {{-- ambil field name --}}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                   <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i>  Logout </button>
                   </form>

                </ul>
              </li>

            @else
            {{-- Jika belum login --}}


                <li class="nav-item">
                  <a href="/login" class="nav-link {{ ($active === 'login') ? 'active' : ''"><i class="bi bi-box-arrow-right"></i>Login</a>

                </li>
              </ul>

            @endauth


      </div>
    </div>
  </nav>

  {{-- This is navbar --}}
