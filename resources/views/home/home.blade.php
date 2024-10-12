@extends('main')
@section('content')
    @include('partials.modals.search-home-modal')
    <div class="--container flex flex-col gap-10">
        @include('core.home.section1')
        @include('core.home.section2')
        @include('core.home.section3')
        @include('core.home.section4')
        @include('core.home.section5')
        @include('core.home.section6')
        @include('core.home.section7')
    </div>
@endsection
