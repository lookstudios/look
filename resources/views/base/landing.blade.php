@extends('layouts.default')
@section('content')  
    @include('global.nav')
    <div id="landing">
        <vue-loop :full="true">
            @include('base.sections.hero')
            @include('base.sections.about')
            @include('base.sections.labs')
            @include('base.sections.contact')
        </vue-loop>
    </div>
@stop