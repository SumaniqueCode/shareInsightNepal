@extends('admin/layout/layout')
@section('content')
<?php
use App\Models\Admin\Admin;
use App\Models\Admin\Broker;
use App\Models\Admin\PageViews;
use App\Models\User;

        $users = User::where('isRole', 'user')->count();
        $week = now()->startOfWeek(); // first date of the current week
        $month = now()->startOfMonth(); // first date of the current month
        $year = now()->startOfYear(); // first date of the current year
        $to = now();
        $monthlyUsers = User::where('isRole', 'user')->whereBetween('created_at', [$month, $to])->count();
        $yearlyUsers = User::where('isRole', 'user')->whereBetween('created_at', [$year, $to])->count();

        $pageViews = PageViews::pluck('pageViews')->last(); 
        $totalPageViews = PageViews::pluck('pageViews')->sum();
        $weeklyViews = PageViews::whereBetween('created_at', [$week, $to])->pluck('pageViews')->sum();
        $monthlyViews = PageViews::whereBetween('created_at', [$month, $to])->pluck('pageViews')->sum();
        $yearlyViews = PageViews::whereBetween('created_at', [$year, $to])->pluck('pageViews')->sum();

        //
        $viewsData = PageViews::all();
?>
<section class="py-16">
    <div class="container">
        <div class="row m-t-25">
            <h3>USERS</h3>
            <div class="col-sm-6 col-lg-4">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <div class="text">
                                <h2>{{$users}}</h2>
                                <span>Total Users</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <div class="text">
                                <h2>{{$monthlyUsers}}</h2>
                                <span>Monthly New User</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <div class="text">
                                <h2>{{$yearlyUsers}}</h2>
                                <span>Yearly New User</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-t-25">
            <h3>PAGE VIEWS</h3>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c4">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <div class="text">
                                <h2>{{$totalPageViews}}</h2>
                                <span>Total Page Views</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <div class="text">
                                <h2>{{$pageViews}}</h2>
                                <span>Daily Page Views</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <div class="text">
                                <h2>{{$weeklyViews}}</h2>
                                <span>Weekly Page Views</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <div class="text">
                                <h2>{{ $monthlyViews}}</h2>
                                <span>Monthly Page Views</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <div class="text">
                                <h2>{{$yearlyViews}}</h2>
                                <span>Yearly Page Views</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- chart --}}
        
    </div>
</section>

@endsection