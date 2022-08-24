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

    <title>Info Jual Beli Majalengka</title>
  </head>
  <body>

{{-- banner --}}

<div class="container-flud">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item  img-coursel active">
      <img src="{{ asset('img/badminton-1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item  img-coursel">
      <img src="{{ asset('img/badminton-2.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item  img-coursel">
      <img src="{{ asset('img/badminton-3.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
 </div>
</div>

{{-- End banner --}}


    {{-- navbar  --}}
<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background: #283747 ;">
  <div class="container">
    <a class="navbar-brand" href="#">
       <img src="{{ asset('img/logo.png') }}" alt="" width="55">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            kategori
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Lahan</a></li>
            <li><a class="dropdown-item" href="#">Tanah</a></li>
            <li><a class="dropdown-item" href="#">Kontrakan</a></li>
            <li><a class="dropdown-item" href="#">Kos - Kosan</a></li>
            <li><a class="dropdown-item" href="#">Mobil</a></li>
            <li><a class="dropdown-item" href="#">Motor</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Lainya</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Persyaratan</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2 font-dark" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
      <div class="icons-nav d-flex justify-content-evenly py-2">
          <i class="bi bi-whatsapp" style="font-size: 25px;color: #fff;"></i>
          <i class="bi bi-facebook" style="font-size: 25px;color: #fff;"></i>
          <i class="bi bi-telegram" style="font-size: 25px;color: #fff;"></i>
      </div>
    </div>
  </div>
</nav>

    {{-- end navbar --}}


{{-- Layout --}}

<div class="container-fluid px-5 mt-4">
   <div class="row">
     <div class="col-lg-8">
       <div class="header-latest-post">
         <h3 class="fs-4 latest-post title-header d-flex align-items-center justify-content-evenly"><i class="bi bi-folder-plus" style="color: #fff;font-size: 25px;"></i>Latest Post</h3>
       </div>
       {{-- latest post --}}
       <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <?php $latestProducts = $product->take(3)->get(); ?>
            @foreach($latestProducts as $latest)
            <div class="carousel-item  img-coursel latest-1">
              <img src="{{ asset('img/badminton-1.jpg') }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{ $latest->name }}</h5>
                <p>{{ $latest->excerpt }}</p>
              </div>
            </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
       </div>
       {{-- end latest post --}}

       {{-- All Post --}}
        <div class="header-latest-post mt-5">
          <h3 class="fs-4 latest-post title-header d-flex align-items-center justify-content-evenly"><i class="bi bi-list-ul" style="color: #fff;font-size: 25px;"></i>  All Post</h3>
        </div>
        <div class="row content d-flex justify-content-center">
          @foreach($products as $p)
          <div class="col-lg-4 mb-2">
            <div class="card bg-dark text-white">
              <img src="{{ asset('img/badminton-3.jpg') }}" class="card-img" alt="...">
              <div class="card-img-overlay d-flex flex-column justify-content-center">
                <p class="card-text fs-5">{{ $p->name }}</p>
                <?php $date = explode(' ', $p->created_at) ?>
                <p class="card-text" style="font-size: 13px;">{{ date('d F Y', strtotime($date[0])) }}</p>
                <div class="d-flex justify-content-evenly align-items-center">
                  <a href="" class="badge bg-primary text-decoration-none" style="letter-spacing: 1px; color: #fff; font-weight: normal; font-size: 15px;">Selengkapnya....</a>
                  <button class="badge bg-warning border-0 showDetail" data-id="{{ $p->id }}"><i class="bi bi-eye" style="color: #fff;font-size: 21px;"></i></button>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="row">
          <div class="col-lg-6 mx-auto d-flex justify-content-center">
            {{ $products->links() }}
          </div>
        </div>
       {{-- end All Post --}}
     </div>

     {{-- sidebar (right) --}}
     <div class="col-lg-4">
       <div class="header-latest-post">
         <h3 class="fs-4 title-header lainnya d-flex align-items-center justify-content-evenly"><i class="bi bi-arrow-repeat" style="color: #fff;font-size: 25px;"></i>Lainnya</h3>
       </div>
       <div class="row">
           <div class="col">

            <?php $right = $product->skip(3)->take(4)->get();  ?>
            @foreach($right as $r)
             <a href="" class="text-decoration-none">
               <div class="card d-flex flex-row align-items-center p-1 gap-1 mt-1 card-lainya">
                 <img src="{{ asset('img/badminton-2.jpg') }}" class="img-thumbnail img-lainya">
                 <h4 class="fs-6">{{ $r->name }}</h4>
               </div>
             </a>
             @endforeach
           </div>
       </div>
       <div class="header-latest-post">
         <h3 class="fs-4 title-header lainnya d-flex align-items-center justify-content-evenly gap-1"><i class="bi bi-tags" style="color: #fff;font-size: 25px;"></i>Kategori</h3>
       </div>
       <div class="row">
         <div class="col">
           <ul class="d-flex flex-column table-kategori">

             @foreach($categories as $category)
             <a href="" class="text-decoration-none"><li class="list-kategori">{{ $category->name }}</li></a>
             @endforeach

           </ul>
         </div>
       </div>
     </div>
     {{-- endsidebar (right )--}}
   </div>
</div>

{{-- End Layout --}}



{{-- modal --}}
<div class="modal"></div>
{{-- end modal --}}



{{-- footer --}}

<footer class="container-flud mt-5"  style="background: #283747; padding-top: 50px; overflow: hidden;">
  <div class="row">
    <div class="col-lg-4 d-flex align-items-center flex-column"  style="margin-bottom: 50px;">
      <img src="{{ asset('img/logo.png') }}" alt="" width="200">
      <h3 class="fs-3 text-light text-center mt-2">Info Jual Beli Majalengka</h3>
      <p class="text-light text-center" style="font-size: 15px">Memberikan informasi bagi anda yang sedang mencari penjual dan memberikan layanan untuk menjual properti atau product anda</p>
    </div>
    <div class="col-lg-4" style="margin-bottom: 50px;">
      <ul class="kategori-footer d-flex flex-column align-items-center justify-content-evenly">
        <a href="" class="text-decoration-none"><li class="list-kategori-footer">Lahan</li></a>
        <a href="" class="text-decoration-none"><li class="list-kategori-footer">Rumah</li></a>
         <a href="" class="text-decoration-none"><li class="list-kategori-footer">Kontrakan</li></a>
         <a href="" class="text-decoration-none"><li class="list-kategori-footer">Kos - Kosan</li></a>
         <a href="" class="text-decoration-none"><li class="list-kategori-footer">Mobil</li></a>
         <a href="" class="text-decoration-none"><li class="list-kategori-footer">Motor</li></a>
         <a href="" class="text-decoration-none"><li class="list-kategori-footer">Lainya</li></a>
      </ul>
    </div>
    <div class="col-lg-4" style="margin-bottom: 50px;">
      <ul class="kategori-footer d-flex align-items-center justify-content-evenly">
        <a href="" class="text-decoration-none"><li class="list-kategori-footer"><i class="bi bi-whatsapp" style="font-size: 25px;color: #fff;"></i></li></a>
        <a href="" class="text-decoration-none"><li class="list-kategori-footer"><i class="bi bi-facebook" style="font-size: 25px;color: #fff;"></i></li></a>
        <a href="" class="text-decoration-none"><li class="list-kategori-footer"><i class="bi bi-telegram" style="font-size: 25px;color: #fff;"></i></li></a>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 mx-auto px-5">
      <h3 class=" text-center" style="font-size: 15px;">
        <small class="text-light">Copyright © 2022 Info Jual Beli Majalengka | Powered by Info Jual Beli Majalengka</small>
      </h3>
    </div>
  </div>
</footer>

{{-- end footer --}}

<script src="{{ asset('js/jquery.js') }}"></script>
  
  <script type="text/javascript">
    $(document).ready(function(){
                // run
        $('.showDetail').on('click', function(){
            const id = $(this).data('id')
            detail(id)
          })
          // end run

      // add class to first element on carousel
      $(".latest-1").first().addClass("active")
      // get data from home controller 
      function getData(_url, data, html){
        $.ajax({method: "GET", url: _url, data: data})
          .done(function(res){
            html.append(res)
          })
          .fail(function(err){
            alert('ERROR')
          });
      }
      // get detail data from controller
      function detail(id){
        $.get(`detail/${id}`)
          .done(function(res){
            $('.modal').html(`
                          <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="modalDetailLabel">`+ res.name +`</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    `+ res.body +`
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            `);
            $('.modal').modal('show')
          })
          .fail(function(err){
            alert("ERROR!")
          });




      }

      

    })
  </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>