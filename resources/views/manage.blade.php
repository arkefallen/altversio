@extends('master')

@section('title')
    <title>Buat Karya Baru</title>
@endsection

@section('content')
    <div class="container my-3 py-3">
        <div class="py-3">
            <a href="{{ route('dashboard') }}">< Kembali</a>
            <h1 class="my-3">Kelola Karya</h1>
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
                        @for ($i = 0; $i < 4; $i++)
                            <tr>
                                <td  class="d-flex flex-row align-items-center">
                                    <div>
                                        <img src="{{ asset('/asset/img/mesh-gradient.jpg') }}" alt="" style="width: 75px; height:75px;" class="rounded">
                                    </div>
                                    <div class="p-4">
                                        <h6>Judul AU</h6>
                                        <div style="width: 200px;">
                                            <p style="margin-bottom: 0 !important;">
                                                <span class="badge badge-pill badge-primary w-10" style="background-color: grey !important;">Genre 1</span>
                                                <span class="badge badge-pill badge-primary w-10" style="background-color: grey !important;">Genre 2</span>
                                                <span class="badge badge-pill badge-primary w-10" style="background-color: grey !important;">Genre 3</span>
                                                <span class="badge badge-pill badge-primary w-10" style="background-color: grey !important;">Genre 4</span>
                                                <span class="badge badge-pill badge-primary w-10" style="background-color: grey !important;">Genre 5</span>
                                                <span class="badge badge-pill badge-primary w-10" style="background-color: grey !important;">Genre 6</span>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-outline-info" href="#">Lihat Prompt</a>
                                </td>
                                <td>
                                    <a class="btn btn-outline-warning" href="#">Lihat AU</a>
                                </td>
                                <td>
                                    <p style="margin-bottom: 0 !important;">Completed</p>
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
                        @endfor
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection