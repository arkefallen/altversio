@extends('master')

@section('title')
    <title>Altversio</title>
@endsection

@section('content')
    <div class="container jumbotron mt-5 pt-5 pb-5 d-flex flex-lg-row flex-column align-items-center">
        <div class="mr-3">
            <h1 class="heading-1">
                Jelajahi
                <i>Alternate Universe</i>
                sebagai <span class="text-primary">The Reader</span>
            </h1>
            <p class="lead">
                Cari dan temukan AU yang kamu sukai jadi lebih mudah buat kamu 
                <i>The Reader</i>. 
                Dan buat kamu <i>The Creator</i>, 
                yuk unggah konten AU-mu biar makin banyak yang tau !
            </p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">
                Daftar Sekarang
            </button>
        </div>
        <div class="w-100">
            <img src="{{ asset('/asset/img/ReadingDoodle.png')}}" width="100%">
        </div>
    </div>
    <div class="container my-5 px-3 d-flex flex-column align-items-center">
        <h2 class="mb-3">Kenapa Perlu Altversio ? </h2>
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
            <div class="d-flex flex-row justify-content-center p-4 shadow my-2" style="margin-right: 30px;">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAjJJREFUWEftloFNAzEMRdsJYIRjAmACjgmACSgbwASUCYAJKBMAE3BMAExA2QAmgP+kWDqF69lp1VIkLFmExnHeObaT4WDNZLhmPIM/DVQpmgfSWsp4J0X3RX+n0kb6kMZzBz4SITY/l46Cu0xkdzEvmAd0KMc30s0gjJl9aHAivS9c15tDRASYtjzpHyLAMaEIR4div5fZA4V9WGZFiMjctby8anwqbRzPteavpNstuyONw5HqAqrk4FlqxwQMG3EMEWEd4AbFuq3o+i4gQnycdi6FMeAc6lYTo8jX5EBE5621cD99bcRXbkNUH1s/EqWp5ygHIk8u0yISGKeLCEdniX6mMfnVKzkQyUfzQ4orpGOnkX6zSqVpUixFQJSyJeOuxlbanp9Z87QDCgTBFz6LgL5a1l7T9HzbfJHPfNOixUEi8/kpe7fj50DLPLJQkawyqa8VIaq4KIfaZd9oJX1oEcHHQmVfycEyGiP5g2/3+vGuDnKKKLmOsjCSvHRpyh7hfTSOhHrW5QrIRnJQCpXDvCew0EdFnx9A0frJiT6pNcnVY5HBlu7PEyQkfc1vJA/5Aw2giZRXgHVxNqe7Yw9Ql7CGq8gVrxtz9+DMjs91mAw4JoDtXuTnEJQHhKNKOpbaG6kPimriRkfJGSDa61yoCJABAEbE6gTJMQFAJNBpAsiTtwiqBKgvMt5cGGpVQACHoFYJlEN1PgBXDWRQTYrYj6P+DaDefPsH8srxP0JehL4BAal3JeYsl3kAAAAASUVORK5CYII="/>
                <p style="margin-left: 10px; margin-bottom:0;">Mencari Karya Favorit Lebih Cepat</p>
            </div>
            <div class="d-flex flex-row justify-content-center p-4 shadow my-2">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAATBJREFUWEftl+ERgjAMhWEDN3AFN5BNxA3cQN3ADdRNcBQ3MblLuFJaXykF+qO549pead7Xl/CDusos6sx4qgKEKuJyqKFDRzn4obFDSVLuu4BuJHAVkTuNvF4tChCyujhUHEIOoP0te6gluJcNuBUQg5wE6GxCbQGkMMrBQL1TKYG8tzYcsGHetMel6yMVkC3E60EpxAUuk8YIhjdSANkwKmhCQWf00FwgW+hLifdWiVgDOpMCyHdrn2Os6SxTih5CJXBBQZjYHkIwZg9pqYJgYoBCYRTqIpOHWZZ/86lN3VKypyQMvnUoTIxDfIahGhmnaAW9O9WhoKRzXipAyD3kUEcJ+FkqRv99CGgpEM07+u9zAZmfdhZAO/msD0vTSDsMWsLl0AocfokChOzPzqEfwARhJRTYpdoAAAAASUVORK5CYII="/>
                <p style="margin-left: 10px; margin-bottom:0;">Menjangkau Lebih Banyak</p>
            </div>
        </div>
    </div>
    <section class="container my-5 d-flex flex-md-row flex-column justify-content-center align-items-center">
        <div class="container-fluid d-flex flex-column align-items-center">
            <h2 class="mb-3">Langkahmu di Sini</h2>
            <p class="lead">
                Pijakan agar kamu tidak kehilangan arah dan tujuan
            </p>
        </div>
        <div class="container-fluid d-flex flex-column flex-md-row justify-content-center">
            <div class="p-4 d-flex flex-column">
                <h2 class="mb-3">The Reader</h2>
            </div>
        </div>
    </section>
    {{-- <div class="container mt-5 d-flex flex-column align-items-center">
        <h2 class="mb-3">Langkahmu Di Sini</h2>
        <p class="lead">
            Pijakan agar kamu tidak kehilangan arah dan tujuan
        </p>
        <div class="p-5 mb-5 d-flex flex-column flex-md-row justify-content-center w-100 shadow container-fluid">
                <div class="p-2 mx-3">
                    <h2>The Reader</h2>
                </div>
                <div class="p-2 mx-3 d-flex flex-column">
                    <div class="circle my-3">
                        <b>1</b>
                    </div>
                    <div class="d-flex flex-column">
                        <h4>Masuk atau daftarkan akunmu</h4>
                        <p>Masuklah dengan akunmu atau daftar terlebih dahulu agar bisa menjelajah.</p>
                    </div>
                </div>
                <div class="p-2 mx-3 d-flex flex-column">
                    <div class="circle my-3">
                        <b>2</b>
                    </div>
                    <div class="d-flex flex-column">
                        <h4>Cari AU yang ingin kamu baca</h4>
                        <p>Gulir ke bawah atau gunakan fitur searchbar untuk mempercepat.</p>
                    </div>
                </div>
                <div class="p-2 mx-3 d-flex flex-column">
                    <div class="circle my-3">
                        <b>3</b>
                    </div>
                    <div class="d-flex flex-column">
                        <h4>Altversio akan mengantarmu</h4>
                        <p>Tekan tombol “Baca” dan tunggu hingga diarahkan pada AU yang kamu pilih</p>
                    </div>
                </div>
        </div>
        <div class="p-5 d-flex flex-column flex-md-row justify-content-center w-100 shadow container-fluid">
            <div class="p-2 mx-3">
                <h2>The Creator</h2>
            </div>
            <div class="p-2 mx-3 d-flex flex-column">
                <div class="circle my-3">
                    <b>1</b>
                </div>
                <div class="d-flex flex-column">
                    <h4>Masuk atau daftarkan akunmu</h4>
                    <p>Masuklah dengan akunmu atau daftar terlebih dahulu agar bisa menjelajah.</p>
                </div>
            </div>
            <div class="p-2 mx-3 d-flex flex-column">
                <div class="circle my-3">
                    <b>2</b>
                </div>
                <div class="d-flex flex-column">
                    <h4>Unggah AU yang sudah kamu buat</h4>
                    <p>Tekan tombol “Unggah Karyamu” lalu lengkapi informasi mengenai karyamu</p>
                </div>
            </div>
            <div class="p-2 mx-3 d-flex flex-column">
                <div class="circle my-3">
                    <b>3</b>
                </div>
                <div class="d-flex flex-column">
                    <h4>Konfirmasi pengunggahan</h4>
                    <p>Konten AU akan muncul setelah terkonfirmasi</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container jumbotron mt-5 py-2 d-flex flex-lg-row flex-column align-items-center">
        <div class="w-full">
            <img src="{{ asset('/asset/img/LovingDoodle.png')}}" width="100%">
        </div>
        <div class="ml-3 text-align-right w-full">
            <h1>
                Bawa Altversio Bersamamu.
            </h1>
            <p class="lead">
                Habiskan waktu bersama Universe yang benar-bernar kamu sukai
            </p>
        </div>
    </div> --}}

    {{-- Modal --}}
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex flex-row-reverse justify-content-between">
            <button type="button" class="btn " data-bs-dismiss="modal" aria-label="Close">
                <i class="iconoir-cancel"></i>
            </button>
            <h4>Daftar Akun</h4>
            </div>
            <div class="modal-body">
            {{-- <p class="text-grey">Yuk daftar akun dulu biar bisa jelajahi seluruh Altversio !</p> --}}
            <form class="">
                <div class="form-group">
                <label for="username">Username</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <box-icon name='user' type='solid' color='#8c8888' ></box-icon>
                    </span>
                    </div>
                    <input name="username" type="text" class="form-control" placeholder="cth : sikolektorKKPK" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                        <box-icon name='key' type='solid' color='#8c8888' ></box-icon>
                        </span>
                    </div>
                    <input name="password" type="password" class="form-control" placeholder="*********" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Konfirmasi password</label>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                        <box-icon name='check' type='solid' color='#8c8888' ></box-icon>
                        </span>
                    </div>
                    <input name="confirm-password" type="password" class="form-control" placeholder="*********" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="fs-6 lead">
                        Sudah punya akun ? <a href="" data-bs-toggle="modal" data-bs-target="#loginModal" >Sini masuk</a>
                    </p>
                    <button type="submit" class="btn btn-primary w-full">Daftar</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
@endsection