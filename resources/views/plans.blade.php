@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Select Product:</h3></div>
 
                <div class="card-body">
 <br/>

                    <div class="row">
                        @foreach($plans as $plan)
                            <div class="col-md-6">
                                <div class="card mb-3">
                                  <div class="card-header"> 
                                       <strong>Price:</strong>
                                        ${{ $plan->price }}
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title"><strong>Product Name :</strong>{{ $plan->name }}</h5>
                                    <p class="card-text"><strong>Product Details :</strong><br>{{ $plan->description }}</p>
  
                                    <a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-primary pull-right">Buy Now</a>
  
                                  </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection