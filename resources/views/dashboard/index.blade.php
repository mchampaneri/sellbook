<?php $menu=true; ?>
@extends('main')

@section('content')

    <div class="page-content">
      <div class="container">
        <div class="tiles">	
        
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat green">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{{ sizeof(Auth::user()->sells()->get()) }}">
                                          {{ sizeof(Auth::user()->sells()->get()) }} </span>
                                    </div>
                                    <div class="desc"> Your Total Book For Sell </div>
                                </div>
                                <a class="more" href="{{route('sells.index')}}"> View more
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat green">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{{ sizeof(Auth::user()->sells()
                                                                                            ->where('status','0')->get()) }}">
                                          {{ sizeof(Auth::user()->sells()
                                                       ->where('status','0')->get())}} </span>
                                    </div>
                                    <div class="desc"> Number of Books To Be Sold </div>
                                </div>
                                <a class="more" href="{{route('sells.index')}}"> View more
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat green">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{{ sizeof(Auth::user()->sells()
                                                                                            ->where('status','1')->get()) }}">
                                          {{ sizeof(Auth::user()->sells()
                                                       ->where('status','1')->get())}} </span>
                                    </div>
                                    <div class="desc"> Number of Books  Got A Deal </div>
                                </div>
                                <a class="more" href="{{route('sells.index')}}"> View more
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
          </div>

           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat green">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{{ sizeof(Auth::user()->sells()
                                                                                            ->where('status','2')->get()) }}">
                                          {{ sizeof(Auth::user()->sells()
                                                       ->where('status','2')->get())}} </span>
                                    </div>
                                    <div class="desc"> Number of Books Got Sold </div>
                                </div>
                                <a class="more" href="{{route('sells.index')}}"> View more
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
          </div> 

          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat blue">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{{ sizeof(Auth::user()->purchases()
                                                                                            ->where('status','1')->get()) }}">
                                          {{ sizeof(Auth::user()->purchases()
                                                       ->where('status','1')->get())}} </span>
                                    </div>
                                    <div class="desc"> Number of Books To Be Purchase </div>
                                </div>
                                <a class="more" href="{{route('sells.index')}}"> View more
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat blue">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{{ sizeof(Auth::user()->sells()
                                                                                            ->where('status','2')->get()) }}">
                                          {{ sizeof(Auth::user()->purchases()
                                                       ->where('status','2')->get())}} </span>
                                    </div>
                                    <div class="desc"> Number of Books Purchased</div>
                                </div>
                                <a class="more" href="{{route('sells.index')}}"> View more
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
          </div>

        </div>
      </div>
    </div>


@endsection