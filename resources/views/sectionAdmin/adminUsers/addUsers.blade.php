@extends('layouts.codebase')

@section('page-title')
    Add Users - {{Auth::user()->name}}
@endsection

@section('select2')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="/js/plugins/select2/css/select2.css">
@endsection

@section('content')
@include('sweetalert::alert')

    <div class="content">
        <h2 class="content-heading">Add New Users</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Validation</h3>
                       </div>
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-6">
                                    <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-validation-material" action="{{route('add-user-details')}}" method="post" autocomplete="off">
                                    @csrf
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="name" placeholder="Enter a username.." autocomplete="false">
                                                <label for="val-username2">Username</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="email" class="form-control" id="val-email2" name="email" placeholder="Your valid email..">
                                                <label for="val-email2">Email</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="password" class="form-control" id="val-password2" name="password" placeholder="Choose a safe one.." autocomplete="off">
                                                <label for="val-password2">Password</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="password" class="form-control" id="val-confirm-password2" name="confirm-password" placeholder="..and confirm it!">
                                                <label for="val-confirm-password2">Confirm Password</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <select class="js-select2 form-control" id="val-select22" name="roles" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    @foreach ($user_roles as $user_role)
                                                <option value="{{$user_role->name}}">{{$user_role->name}}</option>
                                                    @endforeach
                                                </select>
                                                <label for="val-select2">Role</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-alt-primary"><i class="si si-user" aria-hidden="true"></i> Add User</button>
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