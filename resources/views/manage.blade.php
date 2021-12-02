@extends('master')

@section('title')
    <title>Buat Karya Baru</title>
@endsection

@section('content')
    <div class="container my-3 py-3">
        @if(Session::has('msg_success_store'))
        <div class="alert alert-success">
            {{Session::get('msg_success_store')}}
        </div>
        @endif
        @if(Session::has('msg_success_update'))
        <div class="alert alert-success">
            {{Session::get('msg_success_update')}}
        </div>
        @endif
        @if(Session::has('msg_success_remove'))
        <div class="alert alert-success">
            {{Session::get('msg_success_remove')}}
        </div>
        @endif
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
                            <tr>
                                <td  class="d-flex flex-row align-items-center">
                                    <div>
                                        <img src="{{ asset($karya->thumbnail) }}" style="width: 128px; height:72px;" class="rounded">
                                    </div>
                                    <div class="p-4">
                                        <h6>{{ $karya->title }}</h6>
                                        <div style="width: 200px;">
                                            <p style="margin-bottom: 0 !important;">
                                                @foreach ($karya->karyaGenre as $genre)
                                                    @if ($genre->genre_id == $genre->genre->id)
                                                        <span class="badge badge-pill badge-primary" style="background-color: grey !important;">{{ $genre->genre->name }}</span>
                                                    @endif
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if ($karya->link_prompt == '-')
                                        <button class="btn btn-outline-info" disabled>Tidak ada prompt</button>
                                    @else
                                        <a class="btn btn-outline-info" href="{{ $karya->link_prompt }}">Lihat Prompt</a>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-outline-warning" href="{{ $karya->link_karya }}">Lihat AU</a>
                                </td>
                                <td>
                                    <p style="margin-bottom: 0 !important;">{{ $karya->status }}</p>
                                </td>
                                <td>
                                    <div  class="d-flex flex-column flex-md-row">
                                        <div class="p-2">
                                            <a href="{{ route('karya.edit', $karya->id) }}" class="btn btn-success">Ubah</a>
                                        </div>
                                        <div class="p-2">
                                            <a href="{{ route('karya.destroy', $karya->id) }}" class="btn btn-danger" onclick="return confirm('Yakin ingin dihapus ?')">Hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection