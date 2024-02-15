@extends('layout.app')
@section('content')
    @include('layout.body.header')
    @include('components.frontend.job.banner')

    <div class="text-center mt-10 pb-2">
        <h1 class="text-3xl font-bold mb-5">All Published Jobs</h1>
    </div>

    @include('components.frontend.home.publish-job')
    @include('layout.body.footer')
@endsection
