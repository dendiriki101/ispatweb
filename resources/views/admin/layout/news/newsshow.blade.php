@extends('admin.tools.main')

@section('content')
    <section class="about_section layout_padding" style="min-height: 100vh;">
        <div class="container">
            <div class="row">

                <div class="form-row">
                    <div class="col-md-10 mb-12">
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
