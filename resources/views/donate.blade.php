@extends('master')

@section('title')
    <title>Donasi</title>
@endsection

@section('content')
    <div class="my-3 p-3 d-flex flex-column-reverse flex-lg-row">
        <div class="d-flex flex-column">
            <h3 class="heading">Jatuh cinta dengan Altversio ? Bantu kami yuk untuk pengembangan lebih lanjut 🤩</h3>
            <p class="lead">
                Mari bergabung dalam pengembangan universe yang lebih luas. Bantuan sekecil apapun akan bermanfaat untuk kami. Segalanya akan kami kembalikan menjadi universe yang lebih baik !
            </p>
            <a href="https://saweria.co/altversio" class="btn btn-primary rounded-pill">Donasi Sekarang</a>
        </div>
        <div class="mx-5 py-5 w-full">
            <img src="{{ asset('/asset/img/SleekDoodle.png')}}" width="100%">
        </div>
    </div>
@endsection