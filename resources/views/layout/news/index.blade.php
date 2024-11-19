@extends('layout.tools.main')

@section('content')
<section class="job_section padding-top90">
    <div class="container">
        <div class="heading_container col-md-12">
            <div class="col row sub-heading">
                <h2 class="text-left">
                    <!-- AVAILABLE POSITIONS -->
                    NEWS
                </h2>
            </div>
        </div>
        <p class="col-md-7" style="color: #252525;">
            Explore the Latest Ispat Indo News and Updates in Detail. 
        </p>
    </div>
</section>

    <section class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-12">



                    <div class="form-row">

                        @foreach ($news as $new)
                            <div class="col-md-6 col-xl-4 mb-3">
                                <div class="card" style="margin: 5px; background: #f7f7f7;">
                                    <iframe allowfullscreen
                                        style="width :20rem; height: 11rem; margin: auto; border-radius: 7px; border: transparent;"
                                        src="https://www.youtube.com/embed/{{ $new->link }}"></iframe>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ substr(strip_tags($new->title), 0, 20) }}
                                            @if (strlen(strip_tags($new->title)) > 25)
                                                ...
                                            @endif
                                        </h5>
                                        <p class="card-text">{{ substr(strip_tags($new->description), 0, 120) }}
                                            @if (strlen(strip_tags($new->description)) > 110)
                                                ...
                                                
                                            @endif

                                            <a href="{{ route('detailnews', $new->link) }}"
                                                style="position: relative; bottom: 1px;">Read More</a>
                                    </div>
                                    <div class="card-footer bg-transparent ">
                                        <small class="text-muted">{{ $new->created_at }}</small>
                                        <small class="text-muted warp-right">By <a
                                                href= "{{ route('detailnews', $new->link) }}">{{ $new->penulist }}</a></small>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
    </section>
@endsection
