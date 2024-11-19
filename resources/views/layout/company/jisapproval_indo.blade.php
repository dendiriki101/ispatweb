@extends('layout.tools.main_indo')

@section('content')

  <!-- about section -->

  <section class="job_section layout_padding bahaw-minus">
    <div class="container">
        <div class="heading_container col-md-12">
            <div class="col row sub-heading">
                <h2 class="text-left">
                    <!-- AVAILABLE POSITIONS -->
                    JIS Approval Certificate
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
        <p>
            Di Ispat Indo, kami mengukir sejarah prestasi yang mencerminkan komitmen kami
            terhadap keunggulan, inovasi, dan kualitas tinggi:


        </p>
        <P>
            Dari pencapaian rekor produksi hingga pengakuan industri, kami terus
            membuktikan dedikasi kami dalam menghadirkan yang terbaik.

            Prestasi kami adalah bukti nyata dari kerja keras tim kami dan tekad
            kami untuk menjadi pemimpin di industri baja. Kami terus berinovasi
            untuk masa depan yang lebih sukses.
        </P>
      </div>
      <br><br><br><br><br><br>

      <!-- expert section -->
      @foreach ($certificates as $certificate)
      <li class="list-group-item"><a href="{{ asset('storage/'. $certificate->file) }}">{{ $certificate->name }}</a></li>
      @endforeach
  <!-- end expert section -->
  </section>

  <!-- end about section -->

  @endsection
