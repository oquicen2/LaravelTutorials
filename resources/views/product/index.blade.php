@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $viewData['title'] }}</div>

                <div class="card-body">
                    <h5>{{ $viewData['subtitle'] }}</h5>
                    
                    @if (count($viewData['products']) > 0)
                        <ul class="list-group mt-3">
                            @foreach ($viewData['products'] as $product)
                                <li class="list-group-item">
                                    <strong>{{ $product->name }}</strong> - ${{ $product->price }}
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No products available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
