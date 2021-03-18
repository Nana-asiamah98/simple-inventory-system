@extends('layouts.codebase')



@section('page-title')
    View - {{Auth::user()->name}}
@endsection

@section('content')
<!-- Page Content -->
<div class="content">
    
    @include('sweetalert::alert')

   <!-- Dynamic Table Full -->
   <div class="block">
       <div class="block-header block-header-default">
           <h3 class="block-title">Categories <small>Table</small></h3>
       </div>
       <div class="block-content block-content-full">
           <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
           <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
               <thead>
                   <tr>
                       <th class="text-center"># </th>
                       <th>Category Name Name</th>
                       <th class="text-center" style="width: 15%;">Edit</th>
                       @can('admin-main')
                       <th class="text-center" style="width: 15%;">Delete</th>
                       @endcan
                       
                   </tr>
               </thead>
               <tbody>
                   @foreach ($cates as $index => $cate)
                   <tr>
                    <td class="text-center">{{$index+1}}</td>
                    <td class="font-w600">{{$cate->category_name}}</td>
                    </td>
                    <td class="d-none d-sm-table-cell text-center">
                     <a class="btn btn-warning" href="{{route('edit-category-page',$cate->id)}}">
                             Edit <span class="badge badge-primary"></span>
                     </a>
                   </td>
                   @can('admin-main')
                   <td class="d-none d-sm-table-cell text-center">
                    <form action="{{route("delete-category-page",$cate->id)}}" method="POST"  onsubmit='return confirm("Are you sure you want to delete?");'>
                       @csrf
                       @method("DELETE")
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                   </tr>
               </td>
                   @endcan
                   
                   @endforeach           
                  
               </tbody>
           </table>
       </div>
   </div>
   <!-- END Dynamic Table Full -->

</div>
<!-- END Page Content -->
@endsection
