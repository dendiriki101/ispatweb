<div class="{{ $navbar }}">
    <!-- header section strats -->

    <header class="">
        <div class="container-fluid">
            <nav
                class="navbar navbar-expand-lg custom_nav-container fixed-top navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo-container">
                    <div class="logo-wrap local-scroll">
                        <a href="{{ route('home_indo') }}">
                            <img class="logo" src="{{ asset('assets/img/logoispat.png') }}" alt="logo" data-rjs="2"
                                style="width: 70px; height: 50px; position: relative; bottom: 5px;">
                        </a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ml-left">
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown">Company</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('profilindo_indo') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('bod_indo') }}">Board of Directors</a>
                                    <a class="dropdown-item" href="{{ route('vision_indo') }}">Vision, Mision, and Values</a>
                                    <a class="dropdown-item" href="{{ route('highlight_indo') }}">Achievements</a>
                                    <a class="dropdown-item" href="{{ route('milestone_indo') }}">Management System</a>
                                    <a class="dropdown-item" href="{{ route('she_indo') }}">Safety, Health, and Environmen</a>
                                </div>
                            </div>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('customer_indo') }}">
                                <span>
                                    Customer Center
                                </span>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown">Product</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('highcarbon_indo') }}">High Carbon
                                        Steel</a>
                                    <a class="dropdown-item" href="{{ route('lowcarbon_indo') }}">Low carbon Steel</a>
                                    <a class="dropdown-item" href="{{ route('clodheading_indo') }}">Cold Heading
                                        Quality
                                        Steel</a>
                                    <a class="dropdown-item" href="{{ route('generalpw_indo') }}">General Purpose WR
                                        (SIRIM)</a>
                                    <a class="dropdown-item" href="{{ route('welding_indo') }}">Welding Electrode</a>
                                    <a class="dropdown-item" href="{{ route('pline_indo') }}">Plain / Deform Bars</a>
                                    <a class="dropdown-item" href="{{ route('structure_indo') }}">General Structure /
                                        Structural
                                        Steel</a>
                                    <a class="dropdown-item" href="{{ route('nails_indo') }}">Nails & Nail Wire</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown">Industrial
                                    Process</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('fasilitas_indo') }}">Facilities</a>
                                    <a class="dropdown-item" href="{{ route('steelmaking_indo') }}">Process Flowchart
                                        of
                                        Steel Making</a>
                                    <a class="dropdown-item" href="{{ route('rolling_indo') }}">Process Flowchart of
                                        Wire
                                        Rod Rolling</a>
                                    {{-- <a class="dropdown-item" href="{{ route('fasilitaspancaputra_indo') }}">Process
                                        Ispat
                                        Panca Putera Facilities</a> --}}
                                    <a class="dropdown-item" href="{{ route('fasilitasbukitnaja_indo') }}">Process
                                        Ispat
                                        Bukit Baja Facilities</a>
                                    <a class="dropdown-item" href="{{ route('fasilitaswire_indo') }}">Process Ispat
                                        Wire
                                        Products Facilities</a>
                                </div>
                            </div>
                        </li>

                        </form>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" type="button"
                                    data-toggle="dropdown">Subsidiaries</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('ispatwireproduct_indo') }}">PT Ispat Wire
                                        Product</a>
                                    <a class="dropdown-item" href="{{ route('ispatbukitbaja_indo') }}">PT Ispat Bukit
                                        Baja</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('environment_indo') }}">
                                <span>
                                    ENVIRONMENT
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('news_indo') }}">
                                Ispat Now
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav  ml-auto">
                        <li class="nav-item">
                            <div class="dropdown">
                              <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown">
                                <i class="fa fa-solid fa-suitcase" style="max-width: 1rem;"></i>
                                Careers
                              </a>
                              <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{route('karir_indo')}}">Job information</a>
                                <a class="dropdown-item" href="{{route('applyjob_indo')}}">Apply job</a>
                              </div>
                            </div>
                          </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown">
                                    <i class="fa fa-solid fa-globe"></i>
                                    {{ $sub }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="dropdownMenuButton">
                                    @if (request()->routeIs('detailnews', 'detailnews_indo'))
                                        <a class="dropdown-item"
                                            href="{{ route($url, ['news' => $news->link]) }}">ENGLISH</a>
                                        <a class="dropdown-item"
                                            href="{{ route($url . '_indo', ['news' => $news->link]) }}">BAHASA</a>
                                    @elseif (request()->routeIs('detailproduk', 'detailproduk_indo'))
                                        <a class="dropdown-item"
                                            href="{{ route($url, ['grade' => $grade->name]) }}">ENGLISH</a>
                                        <a class="dropdown-item"
                                            href="{{ route($url . '_indo', ['grade' => $grade->name]) }}">BAHASA</a>
                                    @else
                                        <a class="dropdown-item" href="{{ route($url) }}">ENGLISH</a>
                                        <a class="dropdown-item" href="{{ route($url) }}_indo">BAHASA</a>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link " href="{{ route('customer_indo') }}">
                                    Contact us
                                </a>
                            </div>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </header>
