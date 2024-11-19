@extends('admin.tools.main')

@section('content')

    <!-- Blog Page Title & Breadcrumbs -->

              <h1>{{ $post->title }}</h1>


    <!-- Blog Section - Blog Page -->


               <div>{!! $post->content !!}</div>

@endsection
