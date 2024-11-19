@extends('layout.tools.main')

@section('content')

<style>
    .product-box {
        border: 1px solid #ddd;
        padding: 15px;
        margin: 10px;
        transition: transform 0.2s;
    }

    .product-box:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-img {
        max-width: 100%;
        height: auto;
        margin-bottom: 15px;
    }

    .product-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .product-description {
        font-size: 0.9rem;
        margin-bottom: 10px;
    }

    .product-price {
        font-size: 1rem;
        color: #e67e22;
        margin-bottom: 10px;
    }

    @media (max-width: 576px) {
        .product-title, .product-description, .product-price {
            text-align: center;
        }
    }
</style>

<section class="job_section layout_padding bahaw-minus">
    <div class="container">
        <div class="heading_container col-md-12">
            <div class="col row sub-heading">
                <h2 class="text-left">
                    Lelang
                </h2>
            </div>
        </div>
    </div>
</section>


<br><br>
<section>
    <div class="container">
        <div class="row">
            @foreach ($lelangs as $key => $lelang)
                <div class="col-md-4 col-sm-6">
                    <a href="{{ route('lelangdetail', $lelang->id) }}" class="text-decoration-none">
                        <div class="product-box">
                            <img src="{{ asset($lelang->picture) }}" alt="Product Image" class="product-img">
                            <div class="product-title">{{ Str::limit($lelang->title, 20, '...') }}</div> <!-- Batasi judul -->
                            <div class="product-description">{!! Str::limit(htmlspecialchars(strip_tags($lelang->content)), 100, '...') !!}</div> <!-- Batasi konten -->
                        </div>
                    </a>
                </div>
            @endforeach

            {{ $lelangs->links() }} <!-- Pagination -->
        </div>
    </div>
</section>

<script src="path/to/jquery.min.js"></script>
<script src="path/to/bootstrap.bundle.min.js"></script>

@endsection
