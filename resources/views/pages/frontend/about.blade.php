@extends('layout.app')
@section('content')
    @include('layout.body.header')
    @include('components.frontend.about.banner')
    @include('components.frontend.about.history')
    @include('components.frontend.about.vision')
    @include('components.frontend.top-company')
    @include('layout.body.footer')
@endsection
