<?php $menu=true; ?>
@extends('main')

@section('content')
<div class="container-fluid">
  <div class="row">  	
    hi , {{\Auth::user()->name}}
  	<div class="col-sm-3">
  		<div class="small-box bg-aqua">
              <div class="inner">
                <h3>150</h3>
                <p>Sold Books</p>
              </div>
              <div class="icon">
                <i class="fa fa-edit"></i>
              </div>
          </div>
  	</div> 	
  </div>
</div>
@endsection