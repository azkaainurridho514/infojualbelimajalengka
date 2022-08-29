@extends('template-home.master')

@section('title', 'Home')

@section('content')

{{-- Layout --}}

<div class="container-fluid px-5 mt-4">
   <div class="row">
     <div class="col-md-8">
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
            <div class="carousel-item  img-coursel latest-1" onclick="detail('{{ $latest->id }}')">
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
          <div class="col-md-4 mb-2">
            <div class="card bg-dark text-white">
              <img src="{{ asset('img/badminton-3.jpg') }}" class="card-img" alt="...">
              <div class="card-img-overlay d-flex flex-column justify-content-center">
                <p class="card-text fs-5">{{ $p->name }}</p>
                <?php $date = explode(' ', $p->created_at) ?>
                <p class="card-text" style="font-size: 13px;">{{ date('d F Y', strtotime($date[0])) }}</p>
                <div class="d-flex justify-content-evenly align-items-center">
                  <a href="" class="badge bg-primary text-decoration-none" style="letter-spacing: 1px; color: #fff; font-weight: normal; font-size: 15px;">Selengkapnya....</a>
                  <button class="badge bg-warning border-0 showDetail" data-id="{{ $p->id }}" onclick="detail('{{ $p->id }}')"><i class="bi bi-eye" style="color: #fff;font-size: 21px;"></i></button>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="row">
          <div class="col-md-6 mx-auto d-flex justify-content-center">
            {{ $products->links() }}
          </div>
        </div>
       {{-- end All Post --}}
     </div>

     {{-- sidebar (right) --}}
     <div class="col-md-4">
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


  @push('scripts')
  <script>
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

      // add class to first element on carousel
      $(".latest-1").first().addClass("active")

      // get data from home controller 
      function getData(_url, data, html){
        $.ajax({method: "GET", data: {url: _url, data: data}})
          .done(function(res){
            html.append(res)
          })
          .fail(function(err){
            alert('ERROR')
          });
      }
  </script>
      @endpush

@endsection