@extends('master')

@section('title')
    <title>Altversio</title>
@endsection

@section('content')
    <div class="container jumbotron mt-5 pt-5 pb-5 d-flex flex-lg-row flex-column align-items-center">
        <div class="mr-3">
            <h1>
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
            <a class="btn btn-primary" href="#" role="button">Daftar Sekarang</a>
        </div>
        <div class="w-100">
            <img src="{{ asset('/asset/img/ReadingDoodle.png')}}" width="100%">
        </div>
    </div>
    <div class="container mt-5 mb-5 d-flex flex-column align-items-center">
        <h2 class="mb-3">Kenapa Perlu Altversio ? </h2>
        <div class="d-flex flex-column flex-md-row align-items-center">
            <div class="d-flex flex-row justify-content-center" style="margin-right: 30px">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAjJJREFUWEftloFNAzEMRdsJYIRjAmACjgmACSgbwASUCYAJKBMAE3BMAExA2QAmgP+kWDqF69lp1VIkLFmExnHeObaT4WDNZLhmPIM/DVQpmgfSWsp4J0X3RX+n0kb6kMZzBz4SITY/l46Cu0xkdzEvmAd0KMc30s0gjJl9aHAivS9c15tDRASYtjzpHyLAMaEIR4div5fZA4V9WGZFiMjctby8anwqbRzPteavpNstuyONw5HqAqrk4FlqxwQMG3EMEWEd4AbFuq3o+i4gQnycdi6FMeAc6lYTo8jX5EBE5621cD99bcRXbkNUH1s/EqWp5ygHIk8u0yISGKeLCEdniX6mMfnVKzkQyUfzQ4orpGOnkX6zSqVpUixFQJSyJeOuxlbanp9Z87QDCgTBFz6LgL5a1l7T9HzbfJHPfNOixUEi8/kpe7fj50DLPLJQkawyqa8VIaq4KIfaZd9oJX1oEcHHQmVfycEyGiP5g2/3+vGuDnKKKLmOsjCSvHRpyh7hfTSOhHrW5QrIRnJQCpXDvCew0EdFnx9A0frJiT6pNcnVY5HBlu7PEyQkfc1vJA/5Aw2giZRXgHVxNqe7Yw9Ql7CGq8gVrxtz9+DMjs91mAw4JoDtXuTnEJQHhKNKOpbaG6kPimriRkfJGSDa61yoCJABAEbE6gTJMQFAJNBpAsiTtwiqBKgvMt5cGGpVQACHoFYJlEN1PgBXDWRQTYrYj6P+DaDefPsH8srxP0JehL4BAal3JeYsl3kAAAAASUVORK5CYII="/>
                <p style="margin-left: 10px; margin-bottom:0;">Mencari Karya Favorit Lebih Cepat</p>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAATBJREFUWEftl+ERgjAMhWEDN3AFN5BNxA3cQN3ADdRNcBQ3MblLuFJaXykF+qO549pead7Xl/CDusos6sx4qgKEKuJyqKFDRzn4obFDSVLuu4BuJHAVkTuNvF4tChCyujhUHEIOoP0te6gluJcNuBUQg5wE6GxCbQGkMMrBQL1TKYG8tzYcsGHetMel6yMVkC3E60EpxAUuk8YIhjdSANkwKmhCQWf00FwgW+hLifdWiVgDOpMCyHdrn2Os6SxTih5CJXBBQZjYHkIwZg9pqYJgYoBCYRTqIpOHWZZ/86lN3VKypyQMvnUoTIxDfIahGhmnaAW9O9WhoKRzXipAyD3kUEcJ+FkqRv99CGgpEM07+u9zAZmfdhZAO/msD0vTSDsMWsLl0AocfokChOzPzqEfwARhJRTYpdoAAAAASUVORK5CYII="/>
                <p style="margin-left: 10px; margin-bottom:0;">Menjangkau Lebih Banyak</p>
            </div>
        </div>
    </div>
    <div class="container mt-5 d-flex flex-column align-items-center">
        <h2 class="mb-3">Langkahmu Di Sini</h2>
        <p class="lead">
            Pijakan agar kamu tidak kehilangan arah dan tujuan
        </p>
        <div class=" mb-5 d-flex flex-column flex-md-row justify-content-center w-100 shadow container-fluid">
                <h3 class="p-5">The Reader</h3>
                <div class="p-5 d-flex flex-column">
                    <div class="circle">
                        <b>1</b>
                    </div>
                    <div class="d-flex flex-column">
                        <h4>Masuk atau daftarkan akunmu</h4>
                        <p>Masuklah dengan akunmu atau daftar terlebih dahulu agar bisa menjelajah.</p>
                    </div>
                </div>
                <div class="p-5 d-flex flex-column">
                    <div class="circle">
                        <b>2</b>
                    </div>
                    <div class="d-flex flex-column">
                        <h4>Cari AU yang ingin kamu baca</h4>
                        <p>Gulir ke bawah atau gunakan fitur searchbar untuk mempercepat.</p>
                    </div>
                </div>
                <div class="p-5 d-flex flex-column">
                    <div class="circle">
                        <b>3</b>
                    </div>
                    <div class="d-flex flex-column">
                        <h4>Altversio akan mengantarmu</h4>
                        <p>Tekan tombol “Baca” dan tunggu hingga diarahkan pada AU yang kamu pilih</p>
                    </div>
                </div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-center w-100 shadow container-fluid">
            <h3 class="p-5">The Creator</h3>
            <div class="p-5 d-flex flex-column">
                <div class="circle">
                    <b>1</b>
                </div>
                <div class="d-flex flex-column">
                    <h4>Masuk atau daftarkan akunmu</h4>
                    <p>Masuklah dengan akunmu atau daftar terlebih dahulu agar bisa menjelajah.</p>
                </div>
            </div>
            <div class="p-5 d-flex flex-column">
                <div class="circle">
                    <b>2</b>
                </div>
                <div class="d-flex flex-column">
                    <h4>Unggah AU yang sudah kamu buat</h4>
                    <p>Tekan tombol “Unggah Karyamu” lalu lengkapi informasi mengenai karyamu</p>
                </div>
            </div>
            <div class="p-5 d-flex flex-column">
                <div class="circle">
                    <b>3</b>
                </div>
                <div class="d-flex flex-column">
                    <h4>Konfirmasi pengunggahan</h4>
                    <p>Konten AU akan muncul setelah terkonfirmasi</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container jumbotron mt-5 pt-5 pb-5 d-flex flex-lg-row flex-column align-items-center">
        <div class="w-100">
            <img src="{{ asset('/asset/img/ReadingDoodle.png')}}" width="100%">
        </div>
        <div class="ml-3">
            <h1>
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
            <a class="btn btn-primary" href="#" role="button">Daftar Sekarang</a>
        </div>
    </div>
@endsection