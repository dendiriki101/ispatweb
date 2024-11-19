@extends('layout.tools.main')

@section('content')
    {{-- <section class="about_section layout_padding" style="min-height: 100vh;">
    <div class="container">
      <div class="row">
        <div class="col-12">


          <div class="form-row">
            <div class="col-md-10 mb-12">
              <h3 class="card-title">{{ $news->title }}</h3>
              <small class="text-muted">{{ $news->created_at }}</small>
              <small class="text-muted ">   By <a href="#">{{ $news->penulist }}</a></small>

                <iframe allowfullscreen style="width: 960px; height: 540px; margin: auto; border-radius: 10px; border: transparent;" src="https://www.youtube.com/embed/{{ $news->link }}"></iframe>
                <!-- <img style="width: 960px; height: 540px; margin: auto; border-radius: 10px; border: transparent;" src=".."> -->
                  <p class="card-text">{{$news->description}}</p>

            </div>



        </div>
      </div>
    </div>
  </section> --}}

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading_container  p-bottom-40">
                    <a href="{{ route('news') }}"
                        style="position: absolute; top: 100px; left: 10px; font-size: 1.4em ; color:black">
                        <div class="row">
                            <img src="{{ asset('assets/img/icon/fa-angel-left.png') }}"
                                style="max-width: 1em; margin-right: 10px; ">
                            back
                            <!-- <i class="fa fa-angle-left" aria-hidden="true" style="font-size: 3rem; position:absolute; top: 50px;"></i> -->
                        </div>
                    </a>
                    <br>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="heading_container  p-bottom-40">
          <a href="{{ route('news_indo') }}"><i class="fa fa-angle-left" aria-hidden="true" style="font-size: 3rem; position:absolute; top: 50px;"></i></a>
          <br>
        </div>
        </div>
      </div>
    </div> --}}

    <br><br><br>
    <section class="about_section layout_padding" style="min-height: 100vh;">
        <div class="container">
            <div class="row">

                <div class="form-row">
                    <div class="col-md-12 mb-12">
                        <h3 class="card-title">{{ $news->title }}</h3>
                        <small class="text-muted">{{ $news->created_at }}.</small>
                        <small class="text-muted "> By <a href="#">{{ $news->penulist }}</a></small>
                        <div class="detail">
                            <div class="container">
                                <iframe allowfullscreen src="https://www.youtube.com/embed/{{ $news->link }}"></iframe>
                            </div>
                        </div>
                        <!-- <img style="width: 960px; height: 540px; margin: auto; border-radius: 10px; border: transparent;" src=".."> -->
                        <p class="card-text">{!! $news->description !!}</p>
                    </div>



                </div>
            </div>
    </section>
@endsection
