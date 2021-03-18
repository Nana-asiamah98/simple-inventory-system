@extends('layouts.codebase')

@section('page-title')
    Remove Users - {{Auth::user()->name}}
@endsection

@section('content')
@include('sweetalert::alert')

<!-- Page Content -->
<div class="content">
    
   
   <!-- Dynamic Table Full -->
   <div class="block">
       <div class="block-header block-header-default">
           <h3 class="block-title">Remove Users <small>Table</small></h3>
       </div>
       <div class="block-content block-content-full">
           <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
           <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
               <thead>
                   <tr>
                       <th class="text-center"></th>
                       <th>Name</th>
                       <th class="d-none d-sm-table-cell">Email</th>
                       <th class="d-none d-sm-table-cell" style="width: 15%;">Profile</th>
                       <th class="text-center" style="width: 15%;">Action</th>
                   </tr>
               </thead>
               <tbody>
                @foreach ($user_roles as $user_role)
                   <tr>
                    <td>{{$user_role->id}}</td>
                    <td>{{$user_role->name}}</td>
                    <td>{{$user_role->email}}</td>
                    <td>{{$user_role->role}}</td>
                    <td>
                        <form id="delete-row" action="{{route('remove-user-details',$user_role)}}" method="POST" onsubmit='return confirm("Are you sure you want to delete?");'>
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></button>
                          </form></td>
                    </td>
                   </tr>
                @endforeach
               </tbody>
           </table>
       </div>
   </div>
   <!-- END Dynamic Table Full -->

</div>
<!-- END Page Content -->

@endsection