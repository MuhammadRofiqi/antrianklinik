 <!-- ======= Top Bar ======= -->
 <div id="topbar" class="d-flex align-items-center fixed-top">
     <div class="container d-flex justify-content-between">
         <div class="contact-info d-flex align-items-center">
             <i class="bi bi-envelope"></i> <a href="mailto:klinikdrendang@gmail.com">klinikdrendang@gmail.com</a>
             <i class="bi bi-phone"></i> +62 895-1589-0022
             <i class="bi bi-clock"></i> Jam Buka : Senin - Jumat, 17.00 - 21.00 WIB | Sabtu, 08.00 - 10.00 WIB | Minggu & tanggal merah tutup
         </div>
     </div>
 </div>
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
     <div class="container d-flex align-items-center">

         <h1 class="logo me-auto"><a href="/">Klinik dr. Endang</a></h1>

         <nav id="navbar" class="navbar order-last order-lg-0">
             <ul>
                 <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                 <li><a class="nav-link scrollto" href="/antrian">Antrian</a></li>
                 <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

         @auth
             <div class="dropdown ms-3">
                 <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                     aria-expanded="false">
                     {{ auth()->user()->name }}
                 </button>
                 <ul class="dropdown-menu">
                     @if (auth()->user()->roles === 'admin')
                         <li><a class="dropdown-item" href="/dashboard">Dashboard </a></li>
                     @else
                         <li><a class="dropdown-item" href="/antrian">Menu Antrian </a></li>
                     @endif

                     <form action="/logout" method="post">
                         @csrf
                         <button type="submit" class="dropdown-item">
                             <span class="align-middle">Keluar</span>
                         </button>
                     </form>

                 </ul>
             </div>
         @else
             <a href="/login" class="appointment-btn scrollto">Login</a>
         @endauth

     </div>
 </header><!-- End Header -->
