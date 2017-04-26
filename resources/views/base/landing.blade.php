@extends('layouts.default')
@section('content')
    
    @include('global.nav')

    <div class="section-container" 
        id="landing"
        @scroll="scrollHandler">

        @include('base.sections.hero')
        @include('base.sections.about')
        @include('base.sections.labs')
        @include('base.sections.contact')
        @include('base.sections.hero')

    </div>

@stop