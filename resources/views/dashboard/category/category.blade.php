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




 @includeIf('dashboard.category.form')
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
          $('#category-modal form')[0].reset()
          $('#category-modal').modal('show')
      })

$('#submit').on('click', function(){
    if($('#category-modal [name=id]').val()){
     update($('#category-modal [name=id]').val())
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
               $('#category-modal form')[0].reset()
               table.ajax.reload()
              })
              .fail(err => {
               alert('Ada masalah! silahkan hubungi pihak developer')
               $('#submit').text('Added')
               $('#category-modal form')[0].reset()
          })
     }
     function edit(url, id){
          $('#category-modal form')[0].reset()
          $('#category-modal').modal('show')
          $.get(url)
          .done(res => {
                $('#category-modal [name=name]').val(res.name)
                $('#category-modal [name=id]').val(res.id)
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
                    name: $('#category-modal [name=name]').val()
               }
          })
          .done(res => {
               alert(res)
                $('#category-modal').modal('hide')
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
