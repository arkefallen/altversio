@extends('master')

@section('title')
    <title>Donasi</title>
@endsection

@section('content')
    <div class="container my-3 p-3 d-flex flex-column-reverse flex-lg-row align-items-center">
        <div class="d-flex flex-column">
            <h3 class="heading">Jatuh cinta dengan Altversio ? Bantu kami yuk untuk pengembangan lebih lanjut 🤩</h3>
            <p class="lead">
                Mari bergabung dalam pengembangan universe yang lebih luas. Bantuan sekecil apapun akan bermanfaat untuk kami. Segalanya akan kami kembalikan menjadi universe yang lebih baik !
            </p>
            <div>
                <a class="btn btn-primary rounded-pill py-2 px-4" href="https://saweria.co/altversio">
                    Bantu Sekarang
                </a>
            </div>
        </div>
        <div>
            <img src="{{ asset('/asset/img/LovingDoodle.png')}}" class="img-fluid">
        </div>
    </div>
@endsection