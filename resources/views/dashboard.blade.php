@extends('master')

@section('title')
    <title> Jelajahi Altversio </title>
@endsection

@section('content')
    <div class="container jumbotron my-5 py-3 d-flex flex-column align-items-center">
        <h1>Hai, {{ Auth::user()->name }} 👋 !</h1>
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
                    <option value="Action">Action</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Adventure">Angst</option>
                    <option value="Romance">Romance</option>
                    <option value="Horror">Horror</option>
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

        {{-- Daftar Karya --}}
            <div class="my-3 row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
              <div class="col mb-4">
                <div class="card karya text-center">
                  <img src="{{ asset('/asset/img/gradient.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Judul AU</h5>
                    <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 1</span>
                    <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 2</span>
                  </div>
                  <div class="card-footer">
                    <a type="button" class="btn btn-primary stretched-link w-100" data-bs-toggle="modal" data-bs-target="#karyaModal">
                      Lihat Detail
                    </a>
                  </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card karya text-center">
                  <img src="{{ asset('/asset/img/gradient.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Judul AU</h5>
                    <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 1</span>
                    <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 2</span>
                  </div>
                  <div class="card-footer">
                    <a type="button" class="btn btn-primary stretched-link w-100" data-bs-toggle="modal" data-bs-target="#karyaModal">
                      Lihat Detail
                    </a>
                  </div>
                </div>
            </div>
            <div class="col mb-4">
              <div class="card karya text-center">
                <img src="{{ asset('/asset/img/gradient.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Judul AU</h5>
                  <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 1</span>
                  <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 2</span>
                </div>
                <div class="card-footer">
                  <a type="button" class="btn btn-primary stretched-link w-100" data-bs-toggle="modal" data-bs-target="#karyaModal">
                    Lihat Detail
                  </a>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card karya text-center">
                <img src="{{ asset('/asset/img/gradient.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Judul AU</h5>
                  <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 1</span>
                  <span class="badge badge-pill badge-primary" style="background-color: grey !important;">Genre 2</span>
                </div>
                <div class="card-footer">
                  <a type="button" class="btn btn-primary stretched-link w-100" data-bs-toggle="modal" data-bs-target="#karyaModal">
                    Lihat Detail
                  </a>
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

    <!-- Modal -->
    <div class="modal fade" id="karyaModal" tabindex="-1" aria-labelledby="karyaModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="karyaModalLabel">Judul AU</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body overflow-auto">
            <img src="{{ asset('/asset/img/mesh-gradient.jpg') }}" alt="" class="img-fluid rounded"> <br> <br>
            <div class="row">
              <div class="col-6">
                <h5>Judul</h5>
                <p>The Adventure of Gumball</p>
              </div>
              <div class="col-6">
                <h5>Genre</h5>
                <p>
                  <span class="badge badge-pill badge-primary w-10" style="background-color: grey !important;">Genre 1</span>
                  <span class="badge badge-pill badge-primary w-10" style="background-color: grey !important;">Genre 2</span>
                  <span class="badge badge-pill badge-primary w-10" style="background-color: grey !important;">Genre 3</span>
                  <span class="badge badge-pill badge-primary w-10" style="background-color: grey !important;">Genre 4</span>
                  <span class="badge badge-pill badge-primary w-10" style="background-color: grey !important;">Genre 5</span>
                  <span class="badge badge-pill badge-primary w-10" style="background-color: grey !important;">Genre 6</span>
                </p>
              </div>
              <div class="col-6">
                <h5>Target Pembaca</h5>
                <p>Dewasa Baru ( 18-25 Tahun )</p>
              </div>
              <div class="col-6">
                <h5>Bahasa</h5>
                <p>Indonesia</p>
              </div>
              <div class="col-12">
                <h5>Status</h5>
                <p>Completed</p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a class="btn btn-outline-secondary" href="#">Lihat Prompt</a>
            <a class="btn btn-primary" href="#">Baca Sekarang</a>
          </div>
        </div>
      </div>
    </div>
@endsection