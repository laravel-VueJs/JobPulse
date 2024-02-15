@extends('layout.app')
@section('content')
    @include('layout.body.header')
    @include('components.frontend.contact.banner')
    @include('components.frontend.contact.form')
    <div class="text-center mt-20 pb-2">
        <h1 class="text-3xl font-bold mb-5">Companies believe in us</h1>
    </div>

    @include('components.frontend.home.top-company')
    @include('layout.body.footer')
@endsection
