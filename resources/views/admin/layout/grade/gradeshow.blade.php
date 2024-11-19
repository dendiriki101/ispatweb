@extends('admin.tools.main')

@section('content')

    <!-- Blog Page Title & Breadcrumbs -->

              <h1>{{ $grade->name }}</h1>


    <!-- Blog Section - Blog Page -->


               <div>{!! $grade->description !!}</div>

@endsection
