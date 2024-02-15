@extends('layout.app')
@section('content')
    @include('layout.body.header')
    @include('components.frontend.home.banner')

    <div class="text-center mt-10 pb-2">
        <h1 class="text-3xl font-bold mb-5">Top companies</h1>
    </div>

    @include('components.frontend.home.top-company')

    <div class="text-center mt-10 pb-2">
        <h1 class="text-3xl font-bold mb-5">Recent Published Jobs</h1>
    </div>

    @include('components.frontend.home.publish-job')
    @include('layout.body.footer')
@endsection
