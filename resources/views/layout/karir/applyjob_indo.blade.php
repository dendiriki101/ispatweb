@extends('layout.tools.main_indo')

@section('content')
    <section class="job_section layout_padding">
    <div class="container">
      <div class="heading_container col-md-12">
        <div class="col row sub-heading">
          <h2 class="text-left">
            <!-- AVAILABLE POSITIONS -->
            Career
          </h2>
        </div>
        <p class="col-md-11"  style="opacity: 0.9;">
        Di sini, di Ispat Indo Group, Anda akan bekerja dengan tim yang penuh dengan orang-orang berbakat yang saling mendukung dan menghargai kerja sama tim. Siap untuk mengambil langkah selanjutnya dalam karir Anda? Bergabunglah dengan kami sekarang!
        </p>
      </div>

      <div class="col text-center" style="background-color: #3F58DD; padding: 15px 45px;">
        <i class="fa-solid fa-triangle-exclamation" style="color: #fff; font-size: 4rem;"></i>
        <h4 class="text-center" style="color: #fff; font-weight: 510;">Penipuan rekrutmen & peringatan penipuan</h4>
        <p class="text-center" style="color: #fff; opacity: 0.8;">Kami tidak akan pernah meminta pertukaran uang atau detail kartu kredit dalam proses Rekrutmen. Harap waspadai aktivitas email yang mencurigakan dari orang yang berpura-pura sebagai perekrut atau individu senior di Ispat Indo Group. Jika ragu, harap abaikan pesan tersebut.</p>
      </div>

            <div class="job_container">
                <h4 class="job_heading">
                    Jobs for you
                </h4>
                <br><br><br>
                <div class="row">


                    @foreach ($jobs as $job)


        <div class="col-lg-6">
            <div class="alert-availabe"></div>
            <div class="box">
              <div class="job_content-box">
                <div class="detail-box">
                  <h5>
                  {{ $job->name }}
                  </h5>
                  <div class="detail-info">
                    <div class="col">
                      <div class="row">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <h6>
                          <span>
                          {{ $job->salary }}
                          </span>
                        </h6>
                      </div>
                      <div class="row">
                        <i class="fa fa-solid fa-building"></i>
                        <h6>
                          <span>
                            Financial & Accounting
                          </span>
                        </h6>
                      </div>
                      <div class="row">
                        <i class="fa fa-solid fa-hourglass-start"></i>
                        <h6>
                          <span>
                            Full Time
                          </span>
                        </h6>
                      </div>
                      <div class="row">
                        <i class="fa fa-solid fa-graduation-cap"></i>
                        <h6>
                          <span>
                          {{ $job->tertiaryeducation }}
                          </span>
                        </h6>
                      </div>
                      <div class="row">
                        <i class="fa fa-solid fa-briefcase"></i>
                        <h6>
                          <span>
                          {{ $job->description }}
                          </span>
                        </h6>
                      </div>
                      <br>
                      <div class="row">
                        <i class="fa-regular fa-clock text-muted"></i>
                        <h6 class="text-muted">
                          <span>
                            updated 5 days ago
                          </span>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>

              <h6 style="padding-left: 12px; margin-bottom: 0px; color: #252525;">
                <span>Status :</span>
              </h6>

              <div class="row">

                <div class="col " style="margin-left: 25px;">
                  <div class="row ">
                    <i class=""></i>
                    <H6>{{$job->status}}</H6>
                  </div>
                </div>

                <div class=" option-box">
                  <a href="https://docs.google.com/forms/d/e/1FAIpQLSfeGCBrrrJXEQaLkpDm4fcLbpnPPPCZCGm_9umL0hQps9eN7Q/viewform?usp=sf_link" class="apply-btn">
                    Apply Now
                  </a>
                </div>

              </div>

            </div>
          </div>


                    @endforeach



                </div>
            </div>

    </section>
    <!-- end job section -->
@endsection
