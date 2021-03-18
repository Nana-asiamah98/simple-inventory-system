@extends('layouts.codebase')

@section('page-title')
    View - {{Auth::user()->name}}
@endsection

@section('content')
<!-- Page Content -->
<div class="content">
    <!--Cards-->
    
   
   <!-- Dynamic Table Full -->
   <div class="block">
       <div class="block-header block-header-default">
           <h3 class="block-title">Product Details</h3>
       </div>
       <div class="block-content block-content-full">
            <div class="card text-left">
              <img class="card-img-top" src="" alt="">
              <div class="card-body">
                <h4 class="card-title">{{$product->product_name}}</h4>
                <p class="card-text"><strong>Brand</strong> : {{$product->brand}}</p>
                <p class="card-text"><strong>Category</strong> :{{$product->category}} </p>

              </div>
              <div class="card-footer">
                  <div class="row">
                    <div class="col">
                        <a class="btn btn-warning" href="{{route('edit-product-page',$product->id)}}">
                            Edit <span class="badge badge-primary"></span>
                         </a>
                    </div>

                    <div class="col">
                        <form action="{{route("delete-product-page",$product->id)}}" method="POST"  onsubmit='return confirm("Are you sure you want to delete?");'>
                            @csrf
                            @method("DELETE")
                           <button type="submit" class="btn btn-danger">Delete</button>
                       </form>
                    </div>
                  </div>
                    
                    
                    
              </div>
            </div>
       </div>
   </div>
   <!-- END Dynamic Table Full -->

</div>
<!-- END Page Content -->
@endsection
