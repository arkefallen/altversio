{{-- Navigation Bar --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">Altversio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarsExample07">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
            Masuk
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>

{{-- Modal --}}
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex flex-row-reverse justify-content-between">
        <button type="button" class="btn " data-bs-dismiss="modal" aria-label="Close">
          <i class="iconoir-cancel"></i>
        </button>
        <h4>Masuk ke Akunmu</h4>
      </div>
      <div class="modal-body">
        {{-- <p class="text-grey">Yuk daftar akun dulu biar bisa jelajahi seluruh Altversio !</p> --}}
        <form class="">
          @csrf
          <div class="form-group">
            <label for="username">Username</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <box-icon name='user' type='solid' color='#8c8888' ></box-icon>
                </span>
              </div>
              <input name="username" type="text" class="form-control" placeholder="Isi username disini..." aria-label="Username" aria-describedby="basic-addon1">
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
          <div class="modal-footer">
            <p class="fs-6 lead">
              Belum punya akun ? <a href="" data-bs-toggle="modal" data-bs-target="#registerModal" >Daftar dulu lah</a>
            </p>
            <button type="submit" class="btn btn-primary">Masuk</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

