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
 <script type="text/javascript">
      let table;
     // function add(){
     //      $('#categoryModal').show('slow')
     //  }

      $(function(){
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
                    {data:'name'}
               ]
          })

      })

      $(document).ready(function(){
          $('#add').on('click', function(){
                $('.modal').modal('show');
          })  
      })

     </script>
 @endpush
