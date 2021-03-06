@extends('master')

@section('title')
    <title>Lihat Bookmark</title>
@endsection

@section('content')
    <div class="container jumbotron my-5 py-3 d-flex flex-column align-items-center">
        <h1>Hai, {{ Auth::user()->name }} 👋 !</h1>
        <p class="lead">Yuk cari AU favorit kamu disini !</p>
        <form class="w-100 row"  action="{{ route('karya.search') }}" method="get">
            @csrf
            <div class="form-group mx-2 col-12 col-lg-2">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <box-icon name='collection' color='#8c8888' ></box-icon>
                </span>
                </div>
                <select class="form-select form-select-sm" id="filterGenre" name="search_genre">
                <option selected value="-">- Genre -</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
                </select>
            </div>
            </div>

            <div class="form-group mx-2 col-12 col-lg-5">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <box-icon name='search' color='#8c8888' ></box-icon>
                    </span>
                </div>
                <input name="search_karya" type="text" class="form-control" placeholder="Cari AU..." aria-label="search" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="form-group mx-2 col-12 col-lg-2">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <box-icon name='filter-alt' color='#8c8888' ></box-icon>
                </span>
                </div>
                <select class="form-control custom-select" id="filterSearch" name="search_filter">
                <option selected value="-">- Filter -</option>
                <option value="az">Urut A-Z</option>
                <option value="za">Urut Z-A</option>
                <option value="newest">Paling Terbaru</option>
                </select>
            </div>
            </div>

            <div class="form-group mx-2 col-12 col-lg-1 ">
            <button class="btn btn-primary w-100 mb-3" type="submit">
                Cari
            </button>  
            </div>

            <div class="form-group mx-2 col-12 col-lg-1 ">
            <button class="btn btn-outline-secondary w-100" type="submit">
                Reset
            </button>  
            </div>

        </form>

        {{-- Daftar Karya --}}
        
        @if (count($dataKarya) > 0 )
        <div class="my-3 row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        @for ($i = 0; $i < count($dataKarya); $i++)
            <div class="col mb-4">
            <div class="card karya h-100">
                <img src="{{ asset($dataKarya[$i]->thumbnail) }}" class="card-img-top" data-thumbnail="{{ asset($dataKarya[$i]->thumbnail) }}">
                <div class="card-body">
                <h3 class="card-title mb-3">{{ $dataKarya[$i]->title }}</h3>
                <div class="my-3">
                    @foreach ($dataKarya[$i]->karyaGenre as $genre)
                    @if ( $genre->genre_id == $genre->genre->id )
                        <span class="badge badge-pill badge-primary" style="background-color: grey !important;" >{{ $genre->genre->name }}</span>
                    @endif
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-6">
                    <h6 style="margin-bottom: 5px !important;">Target Pembaca</h6>
                    <p style="font-size:small;">{{ $dataKarya[$i]->reader_target }}</p>
                    </div>
                    <div class="col-6 ">
                    <h6 style="margin-bottom: 5px !important;">Bahasa</h6>
                    <p class="language" style="font-size:small;">{{ $dataKarya[$i]->language }}</p>
                    </div>
                    <div class="col-6">
                    <h6 style="margin-bottom: 5px !important;">Status</h6>
                    <p class="status" style="font-size:small;">{{ $dataKarya[$i]->status }}</p>
                    </div>
                    <div class="col-6">
                    <h6 style="margin-bottom: 5px !important;">Author</h6>
                    <p class="status" style="font-size:small;">{{ $dataKarya[$i]->user->name }}</p>
                    </div>
                </div>
                </div>

                <div class="card-footer grid">
                @if ($dataKarya[$i]->link_prompt != '-')
                    <a type="button" class="btn btn-outline-primary g-col-6 w-100 my-1" href="{{ $dataKarya[$i]->link_prompt }}" target="_blank">
                    Lihat Prompt
                    </a>
                @endif
                <a type="button" class="btn btn-primary g-col-6 w-100 my-1" href="{{ $dataKarya[$i]->link_karya }}" target="_blank">
                    Baca Sekarang
                </a>
                </div>
            </div>
            </div>
        @endfor
        </div>
        <div style="margin-top : 20px;">{{ $dataKarya->links() }}</div>
        @else
        <div class="my-5 w-full text-center">
        <h3>Karya masih kosong nih. Yuk publish karya mu !</h3>
        </div>
        @endif
    </div>
@endsection