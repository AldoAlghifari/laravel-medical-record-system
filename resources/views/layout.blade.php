
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta same="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel | @yield('title')</title>

   
    
    <link rel="icon" type="image/x-icon" href="img/logo-puskesmas.jpeg" />
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  </head>
  <body>
    <!-- Navbar start -->
<div class="card">
    <div class="card-header">
    <nav class="navbar navbar-expand-lg  bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo-puskesmas.jpeg" alt="Logo" width="60" height="60" class="d-inline-block align-top">
              </a>
          <a class="navbar-brand" href="#">SISTEM REKAM MEDIS <br> PUSKESMAS RAWAMERTA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" >
                           <p>LOGOUT</p> 
                        </a>
                    </form>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <div class="my-10 bg-white mx-auto text-center" style="width: 70px;">
                        <div id="clock" class="clock my-10"></div>
                    </div>
                </li>
            </ul>
            
            
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link"  href="/home">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profil">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/lokasi">Lokasi</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  DATA MEDIS
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/pasien">DATA PASIEN</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/pelayanan">DATA PELAYANAN</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/pembayaran">DATA PEMBAYARAN</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/pegawai">DATA PEGAWAI</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/obat">DATA OBAT</a></li>
                </ul>
              </li>
              
            </ul>
           
            
          </div>
        </div>
      </nav>
    </div>
    <!-- Navbar end-->
    <div class="card-body" style="margin-bottom: 90px;">
      <div class="container mt-3">

          @yield('content')
      </div>
    </div>  
    
        <div class="card-footer text-body-secondary text-center">
        <p>&copy; 2023.| REKAM MEDIS - All Rights Reserved</p>
        </div>
    </div>
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
    
    <script>
      setInterval(() => {
        let date = new Date();
        let clock = document.getElementById("clock");
        clock.innerHTML =
          date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
      }, 1000);
    </script>
    <script>
        // Check if the browser supports the Web Speech API
        if ('SpeechRecognition' in window || 'webkitSpeechRecognition' in window) {
            const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();

            // Event listener for when the speech recognition results are available
            recognition.onresult = function (event) {
                const result = event.results[0][0].transcript;
                document.getElementsByName('keyword')[0].value = result;
            };

            // Event listener for the voice search button
            document.getElementById('voiceSearchButton').addEventListener('click', function () {
                recognition.start();
            });
        } else {
            // Display a message if the browser doesn't support the Web Speech API
            alert('Your browser does not support speech recognition.');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
