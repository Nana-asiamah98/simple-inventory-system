@extends('layouts.codebase')
@section('page-title')
    View - {{Auth::user()->name}}
@endsection

@section('content')
<!-- Page Content -->
<div class="content">
    
   
   <!-- Dynamic Table Full -->
   <div class="block">
       <div class="block-header block-header-default">
           <h3 class="block-title">Products <small>Table</small></h3>
       </div>
       <div class="block-content block-content-full">
           <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
           <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
               <thead>
                   <tr>
                       <th class="text-center"># </th>
                       <th>Product Name</th>
                       <th class="d-none d-sm-table-cell">Brand</th>
                       <th class="d-none d-sm-table-cell" style="width: 15%;">Category</th>
                       <th class="text-center" style="width: 15%;">View</th>
                       <th class="text-center" style="width: 15%;">Edit</th>
                       @can('admin-main')
                       <th class="text-center" style="width: 15%;">Delete</th>
                       @endcan
                       
                   </tr>
               </thead>
               <tbody>
                   @foreach ($products as $index => $product)
                   <tr>
                    <td class="text-center">{{$index+1}}</td>
                    <td class="font-w600">{{$product->product_name}}</td>
                    <td class="d-none d-sm-table-cell">{{$product->brand}}</td>
                    <td class="d-none d-sm-table-cell">{{$product->category}}
                    </td>
                    <td class="d-none d-sm-table-cell text-center">
                        <a class="btn btn-info" href="{{route('view-product-page',$product->id)}}">
                                View <span class="badge badge-primary"></span>
                        </a>
                      </td>
                    <td class="d-none d-sm-table-cell text-center">
                     <a class="btn btn-warning" href="{{route('edit-product-page',$product->id)}}">
                             Edit <span class="badge badge-primary"></span>
                     </a>
                   </td>
                   @can('admin-main')
                   <td class="d-none d-sm-table-cell text-center">
                    <form action="{{route("delete-product-page",$product->id)}}" method="POST"  onsubmit='return confirm("Are you sure you want to delete?");'>
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
