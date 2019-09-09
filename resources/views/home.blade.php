@extends('layouts.shell')

@section('content')


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>

    </div>
    <div class="row">    
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center d-flex">
                <i class="fas fa-address-card fa-4x" style="display: block;"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Customers</p>
                    <p class="text-primary text-24 line-height-1 mb-2">205</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center">
                <i class="fas fa-hand-holding-usd fa-4x"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Sales</p>
                    <p class="text-primary text-24 line-height-1 mb-2">$4021</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center">
                <i class="fas fa-bullseye fa-4x"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Make</p>
                    <p class="text-primary text-24 line-height-1 mb-2">80</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center">
                <i class="fas fa-shopping-cart fa-4x"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Order</p>
                    <p class="text-primary text-24 line-height-1 mb-2">1200</p>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="card text-center">
  <div class="card-header">
    <h3>Stock Order</h3>
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">All Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Open</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Done</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">All Products</h5>
    <p class="card-text">All Customer Product order will be displayed Here</p>
  </div>
</div>

@endsection
