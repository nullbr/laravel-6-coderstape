@extends('app')

@section('title', 'hello')

@section('content')
    <div class="d-flex justify-content-center">
        <h1>Hi</h1>
        <p>I'm a view from resources/view</p>
        <p>Route hello is getting the hello controller and returning this view</p>

        <ul>
            @forelse($services as $service)
                <li>{{ $service->name }}</li>
            @empty
                <li>No Services Available</li>
            @endforeach
        </ul>
    </div>
@endsection
