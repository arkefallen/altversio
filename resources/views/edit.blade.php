@extends('master')

@section('title')
    <title>Edit Karya</title>
@endsection

@section('content')
    <div class="container my-3 py-3">
        <div class="py-3">
            <a class="btn btn-outline-secondary rounded-pill py-2 px-4" href="{{ route('dashboard') }}">
                << Kembali ke Dashboard
            </a>
            <h1 class="my-3">Edit Karya</h1>
            <hr>
            <br>
            @if (count($errors) > 0)
            <ul class="alert alert-danger" style="margin-top: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            
            <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    Cover Thumbnail
                </h4>
                
                <form action="{{ route('karya.update', $karya->id) }}" method="POST" class="needs-validation" enctype="multipart/form-data">
                @csrf
                <ul class="list-group mb-3">
                    <label for="thumbnail" class="form-label">Ganti Gambar</label>
                    <input type="file" class="form-control" name="thumbnail">
                </ul>
    
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Informasi Detail Karya</h4>
                <div class="row g-3">
                    <div class="col-12">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="contoh : The Adventure of Gumball" required="true" value="{{ $karya->title }}">
                    </div>

                    <div class="col-12">
                        <label for="link-Prompt" class="form-label">Alamat URL Prompt</label>
                        <input 
                            @if ($karya->link_prompt == '-')
                                type="text"
                            @else
                                type="url"
                            @endif
                        class="form-control" name="link_prompt" placeholder="Paste-kan link prompt utama disini.." value="{{ $karya->link_prompt }}">
                    </div>

                    <div class="col-12">
                        <label for="link-karya" class="form-label">Alamat URL AU</label>
                        <input type="url" class="form-control" name="link_karya" placeholder="Paste-kan link AU utama disini.." required="true" value="{{ $karya->link_karya }}">
                    </div>

                    <div class="col-12">
                        <label for="genre" class="form-label">Genre</label>
                        <table class="w-100">
                        <tr>
                            <td>
                                <input type="checkbox" name="genre[]" value="Action"
                                @foreach ($genreKarya as $genre)
                                    @if ($genre->karya_id == $karya_id)
                                        @if($genre->genre->name == 'Angst')
                                            checked
                                        @endif
                                    @endif
                                @endforeach
                                > Action
                            </td>
                            <td>
                                <input type="checkbox" name="genre[]" value="Adventure"
                                @foreach ($genreKarya as $genre)
                                    @if ($genre->karya_id == $karya_id)
                                        @if($genre->genre->name == 'Angst')
                                            checked
                                        @endif
                                    @endif
                                @endforeach
                                > Adventure
                            </td>
                            <td>
                                <input type="checkbox" name="genre[]" value="Angst"
                                @foreach ($genreKarya as $genre)
                                @if ($genre->karya_id == $karya_id)
                                    @if($genre->genre->name == 'Angst')
                                        checked
                                    @endif
                                @endif
                                @endforeach
                                > Angst
                            </td>
                            <td>
                                <input type="checkbox" name="genre[]" value="Comedy"
                                @foreach ($genreKarya as $genre)
                                @if ($genre->karya_id == $karya_id)
                                    @if($genre->genre->name == 'Comedy')
                                        checked
                                    @endif
                                @endif
                                @endforeach
                                > Comedy
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="genre[]" value="Family"
                                @foreach ($genreKarya as $genre)
                                @if ($genre->karya_id == $karya_id)
                                    @if($genre->genre->name == 'Family')
                                        checked
                                    @endif
                                @endif
                                @endforeach
                                > Family
                            </td>
                            <td>
                                <input type="checkbox" name="genre[]" value="Fantasy"
                                @foreach ($genreKarya as $genre)
                                @if ($genre->karya_id == $karya_id)
                                    @if($genre->genre->name == 'Fantasy')
                                        checked
                                    @endif
                                @endif
                                @endforeach
                                > Fantasy
                            </td>
                            <td>
                                <input type="checkbox" name="genre[]" value="Fluffy"
                                @foreach ($genreKarya as $genre)
                                @if ($genre->karya_id == $karya_id)
                                    @if($genre->genre->name == 'Fluffy')
                                        checked
                                    @endif
                                @endif
                                @endforeach
                                > Fluffy
                            </td>
                            <td>
                                <input type="checkbox" name="genre[]" value="Friendship"
                                @foreach ($genreKarya as $genre)
                                @if ($genre->karya_id == $karya_id)
                                    @if($genre->genre->name == 'Friendship')
                                        checked
                                    @endif
                                @endif
                                @endforeach
                                > Friendship
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="genre[]" value="Horror"
                                @foreach ($genreKarya as $genre)
                                @if ($genre->karya_id == $karya_id)
                                    @if($genre->genre->name == 'Horror')
                                        checked
                                    @endif
                                @endif
                                @endforeach
                                > Horror
                            </td>
                            <td>
                                <input type="checkbox" name="genre[]" value="Mystery"
                                @foreach ($genreKarya as $genre)
                                @if ($genre->karya_id == $karya_id)
                                    @if($genre->genre->name == 'Mystery')
                                        checked
                                    @endif
                                @endif
                                @endforeach
                                > Mystery
                            </td>
                            <td>
                                <input type="checkbox" name="genre[]" value="Marriage Life"
                                @foreach ($genreKarya as $genre)
                                @if ($genre->karya_id == $karya_id)
                                    @if($genre->genre->name == 'Marriage Life')
                                        checked
                                    @endif
                                @endif
                                @endforeach
                                > Marriage Life
                            </td>
                            <td>
                                <input type="checkbox" name="genre[]" value="Thriller"
                                @foreach ($genreKarya as $genre)
                                @if ($genre->karya_id == $karya_id)
                                    @if($genre->genre->name == 'Thriller')
                                        checked
                                    @endif
                                @endif
                                @endforeach
                                > Thriller
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="genre[]" value="Romance"
                                @foreach ($genreKarya as $genre)
                                @if ($genre->karya_id == $karya_id)
                                    @if($genre->genre->name == 'Romance')
                                        checked
                                    @endif
                                @endif
                                @endforeach
                                > Romance
                            </td>
                        </tr>
                        </table>
                    </div>

                    <div class="col-12">
                        <label for="reader-target" class="form-label">Target Pembaca</label>
                        <select name="reader_target" class="form-control">
                            <option value="-">- Pilih target pembaca -</option>
                            <option value="Minor / Remaja ( 15-18 tahun )"
                            @if ($karya->reader_target == 'Minor / Remaja ( 15-18 tahun )')
                                selected
                            @endif
                            >Minor / Remaja ( 15-18 tahun )</option>
                            <option value="Dewasa Baru (18-25 tahun )"
                            @if ($karya->reader_target == 'Dewasa Baru (18-25 tahun )')
                            selected
                            @endif
                            >Dewasa Baru ( 18-25 tahun )</option>
                            <option value="Dewasa ( 25+ tahun )"
                            @if ($karya->reader_target == 'Dewasa ( 25+ tahun )')
                            selected
                            @endif
                            >Dewasa ( 25+ tahun )</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="language" class="form-label">Bahasa</label>
                        <select name="language" class="form-control">
                            <option value="-">- Pilih bahasa -</option>

                            <option value="Indonesia"
                            @if ($karya->language == 'Indonesia')
                            selected
                            @endif
                            >Indonesia</option>

                            <option value="Inggris"
                            @if ($karya->language == 'Inggris')
                            selected
                            @endif
                            >Inggris</option>

                            <option value="Tagalog"
                            @if ($karya->language == 'Tagalog')
                            selected
                            @endif
                            >Tagalog</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="status" class="form-label">Status</label>
                        <table class="w-100">
                            <tr>
                                <td>
                                    <input type="radio" name="status" value="On-Going"
                                    @if($karya->status == 'On-Going')
                                    checked
                                    @endif
                                    > On-Going
                                </td>
                                <td>
                                    <input type="radio" name="status" value="Completed"
                                    @if($karya->status == 'Completed')
                                    checked
                                    @endif
                                    > Completed
                                </td>
                            </tr>
                        </table>
                    </div>
    
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Update Karya</button>
                </div>
            </div>
            </div>
            </form>
    </div>
@endsection