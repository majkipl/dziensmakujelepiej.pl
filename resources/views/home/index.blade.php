@extends('layouts.front')

@section('content')

    @include('home.section.top')
    @include('home.section.steps')
    @include('home.section.tabs')
    @include('home.section.about')
    @include('home.section.doyouknow')
    @include('home.section.faq')
    @include('home.section.contact')
    @include('common.modal')

@endsection
