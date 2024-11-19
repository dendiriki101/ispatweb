@extends('admin.tools.main')

@section('content')
    <!-- Blog Page Title & Breadcrumbs -->


    <!-- Blog Section - Blog Page -->


    <div>name : {!! $career->name !!}</div>
    <div>salary : {!! $career->salary !!}</div>
    <div>description : {!! $career->description !!}</div>
    <div>link : {!! $career->runninghour !!}</div>
    <div>tertiaryeducation : {!! $career->tertiaryeducation !!}</div>
    <div>status : {!! $career->status !!}</div>

@endsection
