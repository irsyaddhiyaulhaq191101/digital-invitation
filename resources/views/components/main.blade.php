<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Invitation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body id="body">
    <input type="hidden" id="date" value="{{ $mount }} {{ $date }}, {{ $year }} {{ $time }}">

    @yield('container')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>
    function scrollEvent() {
      // window.scrollTo(0, 0)
    }
    // document.body.style.overflow = 'hidden';
    // window.addEventListener('scroll', scrollEvent)

    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

    const open = document.querySelector('#btnOpen');
    const navbar = document.querySelector('#navbar');

    open.addEventListener('click', function() {
      console.log('OK');
      jQuery('#cover').fadeOut('slow');
      navbar.hidden = false;
      window.removeEventListener('scroll', scrollEvent)
      document.body.style.overflow = 'visible';

    })

    // Mengatur waktu akhir perhitungan mundur
    var date = document.querySelector('#date').value;
    // var countDownDate = new Date("August 5, 2022 08:00:00").getTime();
    var countDownDate = new Date(date).getTime();

    // Memperbarui hitungan mundur setiap 1 detik
    var x = setInterval(function() {

      // Untuk mendapatkan tanggal dan waktu hari ini
      var now = new Date().getTime();
        
      // Temukan jarak antara sekarang dan tanggal hitung mundur
      var distance = countDownDate - now;
        
      // Perhitungan waktu untuk hari, jam, menit dan detik
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Keluarkan hasil dalam elemen dengan id = "demo"
      document.getElementById("timer").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
        
      // Jika hitungan mundur selesai, tulis beberapa teks 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>
  </body>
</html>