@extends('master')

@section('title')
    <title> Jelajahi Altversio </title>
@endsection

@section('content')
    <div class="container jumbotron my-5 py-3 d-flex flex-column align-items-center">
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
        
        @if (count($dataKarya) > 0 )
        
          @foreach ($dataKarya as $karya)
          <div class="my-3 row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
          <div class="col mb-4">
            <div class="card karya">
              <img src="{{ asset($karya->thumbnail) }}" class="card-img-top" data-thumbnail="{{ asset($karya->thumbnail) }}">
              <div class="card-body">
                <h3 class="card-title mb-3" data-title="{{ $karya->title }}">{{ $karya->title }}</h3>
                <div class="my-3">
                  @foreach ($genreKarya as $genre)
                    @if ($genre->karya_id == $karya->id)
                      <span class="badge badge-pill badge-primary" style="background-color: grey !important;" data-genre="{{ $genre->genre->name }}">{{ $genre->genre->name }}</span>
                    @endif
                  @endforeach
                </div>
                <div class="row">
                  <div class="col-6">
                    <h6 style="margin-bottom: 5px !important;">Target Pembaca</h6>
                    <p style="font-size:small;">{{ $karya->reader_target }}</p>
                  </div>
                  <div class="col-6 ">
                    <h6 style="margin-bottom: 5px !important;">Bahasa</h6>
                    <p class="language" style="font-size:small;">{{ $karya->language }}</p>
                  </div>
                  <div class="col-6">
                    <h6 style="margin-bottom: 5px !important;">Status</h6>
                    <p class="status" style="font-size:small;">{{ $karya->status }}</p>
                  </div>
                  <div class="col-6">
                    <h6 style="margin-bottom: 5px !important;">Author</h6>
                    <p class="status" style="font-size:small;">{{ $karya->author }}</p>
                  </div>
                </div>
              </div>
              {{-- <span data-linkprompt="{{ $karya->link_prompt }}"></span>
              <span data-linkkarya="{{ $karya->link_karya }}"></span>
              <span data-readertarget="{{ $karya->reader_target }}"></span>
              <span data-language="{{ $karya->language }}"></span>
              <span data-status="{{ $karya->status }}"></span> --}}
              <div class="card-footer grid">
                <a type="button" class="btn btn-outline-primary g-col-6 w-100 my-1" href="{{ $karya->link_prompt }}" target="_blank">
                  Lihat Prompt
                </a>
                <a type="button" class="btn btn-primary g-col-6 w-100 my-1" href="{{ $karya->link_karya }}" target="_blank">
                  Baca Sekarang
                </a>
              </div>
            </div>
          </div>
          </div>
          @endforeach
        
        @else
        <div class="my-5 w-full text-center">
          <h3>Karya masih kosong nih. Yuk publish karya mu !</h3>
        </div>
        @endif
        

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

    {{-- <!-- Modal -->
    <div class="modal fade" id="karyaModal" tabindex="-1" aria-labelledby="karyaModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="karyaModalLabel"></h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body overflow-auto">
            <img src="" alt="" class="img-fluid rounded thumbnail"> <br> <br>
            <div class="row">
              <div class="col-6">
                <h5>Judul</h5>
                <p class="title"></p>
              </div>
              <div class="col-6">
                <h5>Genre</h5>
                <p class="genre">
                  <span class="badge badge-pill badge-primary w-10" style="background-color: grey !important;">Genre 1</span>
                </p>
              </div>
              <div class="col-6">
                <h5>Target Pembaca</h5>
                <p class="reader-target"></p>
              </div>
              <div class="col-6">
                <h5>Bahasa</h5>
                <p class="language"></p>
              </div>
              <div class="col-12">
                <h5>Status</h5>
                <p class="status"></p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a class="btn btn-outline-secondary link-prompt" href="">Lihat Prompt</a>
            <a class="btn btn-primary link-karya" href="">Baca Sekarang</a>
          </div>
        </div>
      </div>
    </div> --}}

    <script>
    // $('#karyaModal').on('show.bs.modal', function (event) {
    //   const button = $(event.relatedTarget) // Button that triggered the modal
    //   const thumbnail = button.data('thumbnail') // Extract info from data-* attributes
    //   const title = button.data('title');
    //   const link_prompt = button.data('linkprompt');
    //   const link_karya = button.data('linkkarya');
    //   const reader_target = button.data('readertarget');
    //   const language = button.data('language');
    //   const status = button.data('status');
    //   const genre = [];
    //   const data_genre = button.data('genre');
    //   data_genre.forEach(g => {
    //     genre.push(g);
    //   });
    //   // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    //   // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    //   var modal = $(this)
    //   modal.find('.modal-title').text(title);
    //   modal.find('.modal-body .row .col-6 .title').text(title);
    //   modal.find('.modal-body .thumbnail').attr('src',thumbnail);
    //   modal.find('.modal-footer .link-prompt').attr('href',link_prompt);
    //   modal.find('.modal-footer .link-karya').attr('href',link_karya);
    //   modal.find('.modal-body .row .col-6 .reader-target').text(reader_target);
    //   modal.find('.modal-body .row .col-6 .language').text(language);
    //   modal.find('.modal-body .row .col-6 .status').text(status);
    // })
    // </script>
@endsection