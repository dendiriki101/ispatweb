@extends('layout.tools.main')

@section('content')

  <!-- about section -->
  <section class="job_section layout_padding bahaw-minus">
    <div class="container">
        <div class="heading_container col-md-12">
            <div class="col row sub-heading">
                <h2 class="text-left">
                    <!-- AVAILABLE POSITIONS -->
                    TKDN Certificate
                </h2>
            </div>
        </div>
    </div>
</section>

  <section class="achive layout_padding">
    <div class="container">
      <div class="">
        <div class="img-box">
        </div>
        "Our Achievements" at Ispat Indo showcase our notable accomplishments and successes that we have
        attained over the years.
        These accomplishments reflect our dedication to excellence, innovation, and a commitment to
        delivering
        high-quality
        products and services. From surpassing production milestones to achieving industry recognition, our
        achievements are
        a testament to our team's hard work, strategic vision, and unwavering pursuit of excellence in the
        steel
        industry.
      </div>
      <br><br><br><br><br><br>

      <!-- expert section -->
      @foreach ($certificates as $certificate)
      <li class="list-group-item"><a href="{{ asset('storage/'. $certificate->file) }}">{{ $certificate->name }}</a></li>
      @endforeach
  </section>

  <!-- end about section -->

  @endsection
