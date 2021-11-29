@extends('master')

@section('title')
    <title>Buat Karya Baru</title>
@endsection

@section('content')
    <div class="container my-3 py-3">
        <div class="py-3">
            <a class="btn btn-outline-secondary rounded-pill py-2 px-4" href="{{ route('dashboard') }}">
                << Kembali ke Dashboard
            </a>
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h1 class="my-3">Kelola Karya</h1>
                <div>
                    <a class="btn btn-primary rounded-pill py-2 px-4 d-flex flex-row align-items-center" href="/dashboard/create">
                        <box-icon name='plus-circle' class="mx-1" color="#FFFFFF"></box-icon>
                        <span>Tambah Karya Baru</span>
                    </a>
                </div>
            </div>

            <p class="lead">Perbarui informasi atau tambah karyamu di sini.</p>
            <br>
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>
                                <h5>Karya</h5>
                            </th>
                            <th>
                                <h5>Prompt</h5>
                            </th>
                            <th>
                                <h5>Link AU</h5>
                            </th>
                            <th>
                                <h5>Status</h5>
                            </th>
                            <th>
                                <h5>Aksi</h5>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataKarya as $karya)
                            @if ($karya->user_id == $user_id)
                            <tr>
                                <td  class="d-flex flex-row align-items-center">
                                    <div>
                                        <img src="{{ asset($karya->karya->thumbnail) }}" style="width: 75px; height:75px;" class="rounded">
                                    </div>
                                    <div class="p-4">
                                        <h6>{{ $karya->karya->title }}</h6>
                                        <div style="width: 200px;">
                                            <p style="margin-bottom: 0 !important;">
                                                @foreach ($genreKarya as $genre)
                                                    @if ($genre->karya_id == $karya->karya->id)
                                                        <span class="badge badge-pill badge-primary" style="background-color: grey !important;">{{ $genre->genre->name }}</span>
                                                    @endif
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-outline-info" href="{{ $karya->karya->link_prompt }}">Lihat Prompt</a>
                                </td>
                                <td>
                                    <a class="btn btn-outline-warning" href="{{ $karya->karya->link_karya }}">Lihat AU</a>
                                </td>
                                <td>
                                    <p style="margin-bottom: 0 !important;">{{ $karya->karya->status }}</p>
                                </td>
                                <td>
                                    <div  class="d-flex flex-column flex-md-row">
                                        <div class="p-2">
                                            <a href="#" class="btn btn-success">Ubah</a>
                                        </div>
                                        <div class="p-2">
                                            <a href="#" class="btn btn-danger">Hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection