@extends('app')

@section('title', 'service')

@section('content')
    <div class="d-flex justify-content-center">
        <h1>Hi</h1>
        <p>I'm a view from resources/view</p>
        <p>Route hello is getting the hello controller and returning this view</p>

        <form action="/service" method="post">
            <input type="text" name="name" autocomplete="off">

            @csrf

            <button>Add Service</button>
        </form>
        <p style="color: red">@error('name') {{ $message }} @enderror</p>

        <ul>
            @forelse($services as $service)
                <li>{{ $service->name }}</li>
            @empty
                <li>No Services Available</li>
            @endforelse
        </ul>
    </div>
@endsection
