@extends('layout.app')
@section('content')
    @include('layout.body.header')
    @include('components.frontend.about.banner')
    @include('components.frontend.about.history')
    @include('components.frontend.about.vision')


    <div class="text-center mt-10 pb-2">
        <h1 class="text-3xl font-bold mb-5">Companies believe in us</h1>
    </div>

    @include('components.frontend.home.top-company')
    @include('layout.body.footer')
@endsection
