@extends('dashboard.templates.master')
@section('title', 'All Post')

@section('content')

<div class="slideshow"></div>
 <div class="container-fluid">
     <div class="row">
          <div class="col-lg-3 mt-3 mx-auto">
               <button class="btn btn-primary" id="add" ><i class="fas fa-plus-circle mr-2"></i>Add new post</button>
          </div>
     </div>
   <div class="row">
        <div class="col-lg-12 mx-auto bg-light py-2 my-4 shadow">
             <table class="table table-bordered table-1">
                  <thead>
                       <tr>
                            <th width="5%">No</th>
                            <th width="45%">Image</th>
                            <th width="25%">Title</th>
                            <th width="15%">Date</th>
                            <th width="10%">Action</th>
                       </tr>
                  </thead>
                  <tbody></tbody>
             </table>
        </div>
   </div>
 </div>


@includeIf('dashboard.form')
  @endsection

 @push('scripts-dashboard')
 <script>
      let table;


      $(document).ready(function(){
          table = $('.table-1').DataTable({
               dom: "Bfrtip",
               processing: true,
               autoWidth: false,
               responsive: true,
               ajax:{
                    url: '{{ route('dataProduct') }}'
               },
               columns: [
                    {data: 'DT_RowIndex', searchable: false, sortable: true},
                    {data: null,
                         render: function(data, type, row){
                              let result = []
                              $.each(data.image, (i, v)=> {
                                   let asset = `{{ asset('img/') }}`
                                   result.push(`<div class="carousel-item"><img src="`+ asset +`/`+ v  +`" class="d-block w-100"></div>`)
                              })
                              let slide = `<div id="slide-`+ data.id +`" class="carousel slide" data-bs-ride="carousel">
                                                        <div class="carousel-inner">
                                                      `+ result +`
                                                  </div>
                                                                  <button class="carousel-control-prev" type="button" data-bs-target="#slide-`+ data.id +`" data-bs-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                  </button>
                                                                  <button class="carousel-control-next" type="button" data-bs-target="#slide-`+ data.id +`" data-bs-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                  </button>
                                                         </div> `
                              console.log( type )
                              // return slide
                              return `<img src="{{ asset('img/badminton-1.jpg') }}" class="d-block w-100"><img src="{{ asset('img/badminton-1.jpg') }}" class="d-block w-100"><img src="{{ asset('img/badminton-1.jpg') }}" class="d-block w-100"> `
                         },

                    },
                    {data: 'name'},
                    {data: 'date'},
                    {data: 'action'}
               ],
          })

          // $.get('{{ route('dataProduct') }}')
          // .done(res => {
          //      $.each(res, function(i, v){
          //           $('.slideshow').append(v)
          //      })
          // })
          // .fail(err => console.log(err))

      })

      // show form add
      // $('#add').on('click', function(){
      //     $('#form-modal form')[0].reset()
      //     $('#form-modal').modal('show')
      //     $('#form-modal .modal-title').text('Add new Post')
      // })

// $('#submit').on('click', function(){
//     if($('#form-modal [name=id]').val()){
//      update($('#form-modal [name=id]').val())
//     }else{
//      add()
//     }
// })

     
     // function add(){
     //       $.ajax({
     //           method: "POST",
     //           url: '',
     //           data:{
     //                _token: ``,
     //                name: $('[name=name]').val(),
     //                slug: $('[name=name]').val()
     //           },
     //           dataType: "JSON",
     //           beforeSend: function(){
     //               $('#submit').text('proses')
     //           }
     //       })
     //          .done( res => {
     //           alert(res + ' sukses di tambahkan')
     //           $('#submit').text('Added')
     //           $('#form-modal form')[0].reset()
     //           table.ajax.reload()
     //          })
     //          .fail(err => {
     //           alert('Ada masalah! silahkan hubungi pihak developer')
     //           $('#submit').text('Added')
     //           $('#form-modal form')[0].reset()
     //      })
     // }
     // function edit(url, id){
     //      $('#form-modal form')[0].reset()
     //      $('#form-modal').modal('show')
     //      $('#form-modal .modal-title').text('Edit Post')
     //      $.get(url)
     //      .done(res => {
     //            $('#form-modal [name=name]').val(res.name)
     //            $('#form-modal [name=id]').val(res.id)
     //      })
     //      .fail(err => {
     //           alert('error')
     //      })
     // }

     // function update(id){
     //      $.ajax({
     //           method: "PUT",
     //           url: `category/${id}`,
     //           data:{
     //                _token:'',
     //                name: $('#form-modal [name=name]').val()
     //           }
     //      })
     //      .done(res => {
     //           alert(res)
     //            $('#form-modal').modal('hide')
     //            table.ajax.reload()
     //      })
     //      .fail(err => {
     //           console.log(err)
     //      })
     // }

     // function destroy(url){
     //      $.ajax({
     //           method: "DELETE",
     //           url: url,
     //           data: {
     //                _token: ``
     //           }
     //      })
     //      .done(res => {
     //           alert(res+" sukses di hapus")
     //           table.ajax.reload()
     //      })
     //      .fail(err => {
     //           console.log(err)
     //      })
     // }


     
     </script>
 @endpush
