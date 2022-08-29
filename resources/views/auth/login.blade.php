<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    {{-- google font --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Roboto+Condensed&family=Signika+Negative:wght@500&display=swap" rel="stylesheet">

    <title>@yield('title') | Info Jual Beli Majalengka</title>
  </head>
  <body>

      <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="row  w-100">
          <div class="col-lg-5 mx-auto card p-0 shadow">
          <h4 class="text-center mb-4 bg-primary text-light py-2 rounded-top">Login for your start session</h4>
            <form action="{{ route('login') }}" method="post">
              @csrf
              <div class="mb-3 px-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="mb-3 px-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <button type="submit" class="btn btn-primary mx-auto w-50 d-block mb-3">Submit</button>
            </form>
          </div>
        </div>
      </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>