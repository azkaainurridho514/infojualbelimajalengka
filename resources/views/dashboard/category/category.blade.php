@extends('dashboard.templates.master')
@section('title', 'Category')

@section('content')

 <div class="container-fluid">
     <div class="row">
          <div class="col-lg-3 mt-3 mx-auto">
               <button class="btn btn-primary" id="add" ><i class="fas fa-plus-circle mr-2"></i>Add new category</button>
          </div>
     </div>
   <div class="row">
        <div class="col-lg-8 mx-auto bg-light py-2 my-4 shadow">
             <table class="table table-bordered table-1">
                  <thead>
                       <tr>
                            <th width="10%">No</th>
                            <th>Name</th>
                            <th width="20%">Action</th>
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
               processing: true,
               autoWidth: false,
               ajax:{
                    url: '{{ route('dataCategory') }}'
               },
               success: function(res){  
                     console.log(res)
               },
               columns: [
                    {data: 'DT_RowIndex', searchable: false, sortable: true},
                    {data:'name'},
                    {data: 'action'}
               ]
          })
      })


      // show form add
      $('#add').on('click', function(){
          $('#form-modal form')[0].reset()
          $('#form-modal').modal('show')
          $('#form-modal .modal-body').html(`<div class='mb-3'>
                                                                                  <label for='title' class='form-label'>Post title</label>
                                                                                  <input type='text' class='form-control' name='name'>
                                                                                  <input type='hidden' class='form-control' name='id' value='>
                                                                                </div>
                                                                      `)
          $('#form-modal .modal-title').text('Add new Category')
      })

$('#submit').on('click', function(){
    if($('#form-modal [name=id]').val()){
     update($('#form-modal [name=id]').val())
    }else{
     add()
    }
})

     
     function add(){
           $.ajax({
               method: "POST",
               url: '{{ route('category.store') }}',
               data:{
                    _token: `{{ csrf_token() }}`,
                    name: $('[name=name]').val(),
                    slug: $('[name=name]').val()
               },
               dataType: "JSON",
               beforeSend: function(){
                   $('#submit').text('proses')
               }
           })
              .done( res => {
               alert(res + ' sukses di tambahkan')
               $('#submit').text('Added')
               $('#form-modal form')[0].reset()
               table.ajax.reload()
              })
              .fail(err => {
               alert('Ada masalah! silahkan hubungi pihak developer')
               $('#submit').text('Added')
               $('#form-modal form')[0].reset()
          })
     }
     function edit(url, id){
          $('#form-modal form')[0].reset()
          $('#form-modal').modal('show')
          $('#form-modal .modal-title').text('Edit Category')
          $.get(url)
          .done(res => {
                $('#form-modal [name=name]').val(res.name)
                $('#form-modal [name=id]').val(res.id)
          })
          .fail(err => {
               alert('error')
          })
     }

     function update(id){
          $.ajax({
               method: "PUT",
               url: `category/${id}`,
               data:{
                    _token:'{{ csrf_token() }}',
                    name: $('#form-modal [name=name]').val()
               }
          })
          .done(res => {
               alert(res)
                $('#form-modal').modal('hide')
                table.ajax.reload()
          })
          .fail(err => {
               console.log(err)
          })
     }

     function destroy(url){
          $.ajax({
               method: "DELETE",
               url: url,
               data: {
                    _token: `{{ csrf_token() }}`
               }
          })
          .done(res => {
               alert(res+" sukses di hapus")
               table.ajax.reload()
          })
          .fail(err => {
               console.log(err)
          })
     }


     
     </script>
 @endpush
