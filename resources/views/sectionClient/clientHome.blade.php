@extends('layouts.codebase')

@section('page-title')
@can('admin')
    Client Home 
@elsecan('pri-users')
    Client Main Home
@endcan
        
@endsection

@section('content')


<!-- Main Content -->
<div class="content">
    <!-- Projects -->
    
    <div class="row items-push">
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                <div class="ribbon-box">2500</div>
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-success text-success-light mx-auto my-20">
                        <i class="fa fa-check"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5">Completed Tasks</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-briefcase mr-5"></i>View Tasks
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                <div class="ribbon-box">499</div>
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-danger text-danger-light mx-auto my-20">
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5">Uncompleted Tasks</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-briefcase mr-5"></i>View Tasks
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                <div class="ribbon-box">2999</div>
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-info text-info-light mx-auto my-20">
                        <i class="fa fa-list"></i>
                    </div>
                   
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5">Awaiting Tasks</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-briefcase mr-5"></i>View Tasks
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                <div class="ribbon-box">3999</div>
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-warning text-warning-light mx-auto my-20">
                        <i class="fa fa-info"></i>
                    </div>
                    
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5">Reports</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-briefcase mr-5"></i>View Reports
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Projects -->


    <!-- Articles -->
    <h2 class="content-heading">
        <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right">View More..</button>
        <i class="si si-flag mr-5"></i> Notifications
    </h2>
    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
            <p class="font-size-sm text-muted float-sm-right mb-5"><em>3 hours ago</em></p>
            <h4 class="font-size-default text-primary mb-0">
                <i class="fa fa-newspaper-o text-muted mr-5"></i> 5 things I've learned working from home
            </h4>
        </div>
    </a>
    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
            <p class="font-size-sm text-muted float-sm-right mb-5"><em>2 days ago</em></p>
            <h4 class="font-size-default text-primary mb-0">
                <i class="fa fa-newspaper-o text-muted mr-5"></i> Vue.js or React.js? Let's dive in!
            </h4>
        </div>
    </a>
    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
            <p class="font-size-sm text-muted float-sm-right mb-5"><em>1 week ago</em></p>
            <h4 class="font-size-default text-primary mb-0">
                <i class="fa fa-newspaper-o text-muted mr-5"></i> 10 important things I wish I knew
            </h4>
        </div>
    </a>
    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
            <p class="font-size-sm text-muted float-sm-right mb-5"><em>2 weeks ago</em></p>
            <h4 class="font-size-default text-primary mb-0">
                <i class="fa fa-newspaper-o text-muted mr-5"></i> Bringing your productivity back
            </h4>
        </div>
    </a>
    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
            <p class="font-size-sm text-muted float-sm-right mb-5"><em>1 month ago</em></p>
            <h4 class="font-size-default text-primary mb-0">
                <i class="fa fa-newspaper-o text-muted mr-5"></i> Creating a super smooth CSS animation
            </h4>
        </div>
    </a>
    <!-- END Articles -->
</div>
<!-- END Main Content -->

@endsection