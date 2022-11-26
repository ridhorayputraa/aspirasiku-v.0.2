<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   {{-- Aos --}}
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   {{-- End  --}}

    <link rel="stylesheet" href="/css/app.css">
</head>
  <body>
    @include('partials.navbar')
    <div class="container  ">
     @yield('user')
    </div>

   <div class="container-fluid section">
    @yield('container')
   </div>
{{-- tessss --}}
{{-- tesss2 --}}
   <section data-aos="fade-up" class="main-section pt-5  ">
    @yield('forum')
    @yield('msg')
</section>
{{-- AOs --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
{{-- endof --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
