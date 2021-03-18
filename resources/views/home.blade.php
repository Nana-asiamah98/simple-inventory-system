@extends('layouts.codebase')

@section('page-title')
    Home - {{Auth::user()->name}}
@endsection

@section('content')
<!-- Page Content -->
<div class="content">
    <!--Cards-->
    
   
   <!-- Dynamic Table Full -->
   <div class="block">
       <div class="block-header block-header-default">
           <h3 class="block-title">Welcome</h3>
       </div>
       <div class="block-content block-content-full">
            <div class="card text-left">
              <img class="card-img-top" src="" alt="">
              <div class="card-body">
                <h4 class="card-title">Inventory System </h4>
                <p class="card-text">Kindly select the Product link on the Sidebar to Add or Remove Product</p>
              </div>
            </div>
       </div>
   </div>
   <!-- END Dynamic Table Full -->

</div>
<!-- END Page Content -->
@endsection
