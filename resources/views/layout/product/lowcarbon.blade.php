@extends('layout.tools.main')
@section('content')

    <section class="job_section layout_padding bahaw-minus">
        <div class="container">
            <div class="heading_container col-md-12">
                <div class="col row sub-heading">
                    <h2 class="text-left">
                        <!-- AVAILABLE POSITIONS -->
                        {{ $english->title }}
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="expert_section layout_padding">
        <div class="container">
            <div class="heading_container ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
                            <div>{!! $english->content !!}</div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- @foreach ($grade as $grades)
        <li class="list-group-item"><a href="{{ route('detailproduk', $grades->name) }}">{{ $grades->name }}
                ({{ $grades->category }})
            </a>
        </li>
    @endforeach --}}
@endsection
