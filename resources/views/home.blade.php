@extends('layouts.app')

@section('content')
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard: <h4>Visitor Stats</h4></h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                This week
              </button>
            </div>
          </div>

          <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="656" height="276" style="display: block; width: 656px; height: 276px;"></canvas>

          <h2>Current Bids /Per Product</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Bid</th>
                 
                </tr>
              </thead>
              <tbody>
			   @foreach($max_bids as $max_bid)
                <tr>
                  <td>{{$max_bid->name}}</td>
                  <td>{{$max_bid->maxAmmount}}</td>
                  
                </tr>
			   @endforeach
                
              </tbody>
            </table>
          </div>
      

@endsection
