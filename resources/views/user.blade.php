@extends('master')

@section('title')
    <title> Jelajahi Altversio </title>
@endsection

@section('content')
    <div class="container jumbotron my-5 py-3 d-flex flex-column align-items-center">
        <h1>Hai, Jessica</h1>
        <p class="lead">Yuk cari AU favorit kamu disini !</p>
        <div class="w-full d-flex flex-column flex-md-row">
            <div class="form-group mx-2">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <box-icon name='search' color='#8c8888' ></box-icon>
                    </span>
                  </div>
                  <input name="text" type="password" class="form-control" placeholder="Cari AU..." aria-label="search" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="form-group mx-2">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <box-icon name='collection' color='#8c8888' ></box-icon>
                    </span>
                  </div>
                  <select class="form-control custom-select" id="filterGenre">
                    <option selected>-Pilih Genre-</option>
                    <option value="">Action</option>
                    <option value="">Romance</option>
                    <option value="">Horror</option>
                  </select>
                </div>
            </div>
            <div class="form-group mx-2">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <box-icon name='filter-alt' color='#8c8888' ></box-icon>
                    </span>
                  </div>
                  <select class="form-control custom-select" id="filterGenre">
                    <option selected>-Filter berdasarkan-</option>
                    <option value="">Urut A-Z</option>
                    <option value="">Urut Z-A</option>
                  </select>
                </div>
            </div>
        </div>
        <div class="my-3 row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            <div class="col mb-4">
                <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Judul AU</h5>
                    <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 1</span>
                    <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 2</span>
                    <p class="card-text my-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Judul AU</h5>
                    <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 1</span>
                    <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 2</span>
                    <p class="card-text my-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Judul AU</h5>
                    <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 1</span>
                    <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 2</span>
                    <p class="card-text my-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Judul AU</h5>
                    <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 1</span>
                    <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 2</span>
                    <p class="card-text my-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
            </div>
        </div>
        <div class="my-3 p-3 d-flex flex-column-reverse flex-lg-row">
            <div class="d-flex flex-column">
                <h1 class="heading">Kamu menemukan karya AU yang tidak sesuai ?</h1>
                <p class="lead">
                    Laporkan pada kami agar kami bisa menindaklanjuti segera ya !
                </p>
                <form action="">
                    <textarea name="laporan" id="" cols="30" rows="10" class="form-control my-2"></textarea>
                    <button class="btn btn-dark my-3">Laporkan</button>
                </form>
            </div>
            <div class="mx-5 py-5 w-full">
                <img src="{{ asset('/asset/img/SleekDoodle.png')}}" width="100%">
            </div>
        </div>
    </div>
@endsection