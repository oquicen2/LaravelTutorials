@extends('layouts.app')

@section("title", "Product Created")

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Success</div>
          <div class="card-body">
            <div class="alert alert-success">
              Product created
            </div>
            <a href="{{ route('product.create') }}" class="btn btn-primary">Create Another Product</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
