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
            <h1 class="my-3">Buat Karya</h1>
            <hr>
            <br>
            
            <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    Cover Thumbnail
                </h4>
                
                <form action="{{ route('karya.store') }}" method="POST" class="needs-validation" enctype="multipart/form-data">
                @csrf
                <ul class="list-group mb-3">
                    <label for="thumbnail" class="form-label alert alert-warning">
                        <b>Syarat : Rasio 16:9 & Landscape</b>
                    </label>
                    <input type="file" class="form-control" name="thumbnail" required="true">
                </ul>
    
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Informasi Detail Karya</h4>
                <div class="row g-3">
                    <div class="col-12">
                        <label for="title" class="form-label">Judul*</label>
                        <input type="text" class="form-control" name="title" placeholder="contoh : The Adventure of Gumball" required="true">
                    </div>

                    <div class="col-12">
                        <label for="link-Prompt" class="form-label">Alamat URL Prompt</label>
                        <input type="url" class="form-control" name="link_prompt" placeholder="Paste-kan link URL prompt karyamu disini..">
                    </div>

                    <div class="col-12">
                        <label for="link-karya" class="form-label">Alamat URL AU*</label>
                        <input type="url" class="form-control" name="link_karya" placeholder="Paste-kan link URL AU kamu disini.." required="true">
                    </div>

                    <div class="col-12">
                        <label for="genre" class="form-label">Genre*</label>
                        <table class="w-100">
                            <tr>
                                <td>
                                    <input type="checkbox" name="genre[]" value="Action"> Action
                                </td>
                                <td>
                                    <input type="checkbox" name="genre[]" value="Adventure"> Adventure
                                </td>
                                <td>
                                    <input type="checkbox" name="genre[]" value="Angst"> Angst
                                </td>
                                <td>
                                    <input type="checkbox" name="genre[]" value="Comedy"> Comedy
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="genre[]" value="Family"> Family
                                </td>
                                <td>
                                    <input type="checkbox" name="genre[]" value="Fantasy"> Fantasy
                                </td>
                                <td>
                                    <input type="checkbox" name="genre[]" value="Fluffy"> Fluffy
                                </td>
                                <td>
                                    <input type="checkbox" name="genre[]" value="Friendship"> Friendship
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="genre[]" value="Horror"> Horror
                                </td>
                                <td>
                                    <input type="checkbox" name="genre[]" value="Mystery"> Mystery
                                </td>
                                <td>
                                    <input type="checkbox" name="genre[]" value="Marriage Life"> Marriage Life
                                </td>
                                <td>
                                    <input type="checkbox" name="genre[]" value="Thriller"> Thriller
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="genre[]" value="Romance"> Romance
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-12">
                        <label for="reader-target" class="form-label">Target Pembaca*</label>
                        <select name="reader_target" class="form-control">
                            <option value="-">- Pilih target pembaca -</option>
                            <option value="Minor / Remaja ( 15-18 tahun )">Minor / Remaja ( 15-18 tahun )</option>
                            <option value="Dewasa Baru (18-25 tahun )">Dewasa Baru ( 18-25 tahun )</option>
                            <option value="Dewasa ( 25+ tahun )">Dewasa ( 25+ tahun )</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="language" class="form-label">Bahasa*</label>
                        <select name="language" class="form-control">
                            <option value="-">- Pilih bahasa -</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Inggris">Inggris</option>
                            <option value="Tagalog">Tagalog</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="status" class="form-label">Status*</label>
                        <table class="w-100">
                            <tr>
                                <td>
                                    <input type="radio" name="status" value="On-Going"> On-Going
                                </td>
                                <td>
                                    <input type="radio" name="status" value="Completed"> Completed
                                </td>
                            </tr>
                        </table>
                    </div>
    
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Unggah Sekarang</button>
                    @if (count($errors) > 0)
                        <ul class="alert alert-danger" style="margin-top: 20px;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            </div>
            </form>
    </div>
@endsection