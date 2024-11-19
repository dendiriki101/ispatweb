@extends('admin.tools.main')

@section('content')

    <!-- Blog Page Title & Breadcrumbs -->

              <h1>{{ $english->title }}</h1>
    <!-- Blog Section - Blog Page -->
               <div>{!! $english->content !!}</div>

@endsection
