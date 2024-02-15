@extends('layout.app')
@section('content')
    @include('layout.body.header')
    @include('components.frontend.blog.banner')
    @include('components.frontend.blog.article')
    @include('layout.body.footer')
@endsection
