@extends('layouts.codebase')

@section('page-title')
    Add Categories - {{Auth::user()->name}}
@endsection



@section('select2')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="/js/plugins/select2/css/select2.css">
@endsection

@section('content')
@include('sweetalert::alert')

    <div class="content">
        <h2 class="content-heading">Add New Category</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Validation</h3>
                       </div>
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-6">
                                    <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-validation-material" action="{{route('save-category-page')}}" method="post" autocomplete="off">
                                    @csrf
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="category_name" placeholder="Enter a category.." autocomplete="false">
                                                <label for="val-username2">Brand Category</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-alt-primary"><i class="si si-shopping-bag" aria-hidden="true"></i> Add </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
@endsection

@push('forms-add-users')
    <!-- Page JS Plugins -->
    <script src="/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="/js/plugins/jquery-validation/additional-methods.js"></script>

    <!-- Page JS Helpers (Select2 plugin) -->
    <script>jQuery(function(){ Codebase.helpers('select2'); });</script>

    <!-- Page JS Code -->
    <script src="/js/pages/be_forms_validation.min.js"></script>
    
@endpush