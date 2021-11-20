@extends('master')

@section('title')
    <title>Buat Karya Baru</title>
@endsection

@section('content')
    <div class="container my-3 py-3">
        <div class="py-3">
            <a href="{{ route('user') }}">< Kembali</a>
            <h1 class="my-3">Buat Karya</h1>
            <hr>
            <br>
    
            <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    Cover Thumbnail
                </h4>
                <form action="{{ route('user.store') }}" method="POST" class="needs-validation">
                <ul class="list-group mb-3">
                    <label for="thumbnail" class="form-label">Unggah Gambar*</label>
                    <input type="file" class="form-control" name="thumbnail" required="true">
                </ul>
    
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Informasi Detail Karya</h4>
                <div class="row g-3">
                    <div class="col-12">
                        <label for="title" class="form-label">Judul*</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="contoh : The Adventure of Gumball" value="" required="true">
                    </div>

                    <div class="col-12">
                        <label for="synopsis" class="form-label">Sinopsis*</label>
                        <textarea name="synopsis" placeholder="contoh : Pada zaman dahulu..." class="form-control w-100"></textarea>
                    </div>
    
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Unggah Sekarang</button>
                </form>
                </div>
            </div>
            </div>
    </div>
@endsection