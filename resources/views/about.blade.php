@extends('master')

@section('title')
    <title>Tentang Altversio</title>
@endsection

@section('content')
    <div class="container d-flex flex-column py-5 justify-content-center">
        <div class="d-flex flex-row justify-content-center m-md-5">
            <img src="{{ asset('/asset/img/shapes.png') }}" alt="" width="30%">
            <img src="{{ asset('/asset/img/FloatDoodle.png') }}" alt="" width="30%">
            <img src="{{ asset('/asset/img/shapes.png') }}" alt="" width="30%">
        </div>
        <div class="d-flex flex-column p-4">
            <h1 class="text-center">
                <b>
                  <i>Tanpa harus membuang waktumu, jelajahi AU bersama Altversio</i>
                </b>
            </h1>
            <p class="text-center my-3">
                Altversio memberikanmu kemudahan untuk bisa menjangkau AU kesukaanmu tanpa harus menghabiskan waktumu yang berharga.
                <br>
                Kamu gaperlu lagi tuh scroll bookmark gado-gadomu sampai yang paling bawah buat nyari AU yang udah kamu tandai karena di sini kamu bisa dengan mudah mencarinya untuk dibaca langsung atau kemudian. 
            </p>
        </div>
        <div class="py-5">
            <div class="container">
              <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center mb-3">
                  <h1 class="text-center">
                    <b>
                      <i>The Team behind Universe</i>
                    </b>
                </h1>
                </div>
              </div>
              <div class="row">
                <!-- column  -->
                <div class="col-md-6 col-lg-3 mb-4">
                  <!-- Row -->
                  <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                      <img src="{{ asset('/asset/img/Asen.png') }}" alt="wrapkit" class="img-fluid rounded-circle" />
                    </div>
                    <div class="col-md-12 text-center">
                      <div class="pt-2">
                        <h5 class="mt-4 font-weight-medium mb-0">Arthaka Aryaseena</h5>
                        <p class="text-secondary mb-3">
                          <i>Back-End Developer</i>
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- Row -->
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-md-6 col-lg-3 mb-4">
                  <!-- Row -->
                  <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                      <img src="{{ asset('/asset/img/Salsa.png') }}" alt="wrapkit" class="img-fluid rounded-circle" />
                    </div>
                    <div class="col-md-12 text-center">
                      <div class="pt-2">
                        <h5 class="mt-4 font-weight-medium mb-0">Salsabila Riskiani Gusti Putri</h5>
                        <p class="text-secondary mb-3">
                          <i>System Analyst</i>
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- Row -->
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-md-6 col-lg-3 mb-4">
                  <!-- Row -->
                  <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                      <img src="{{ asset('/asset/img/Rafa.png') }}" class="img-fluid rounded-circle"/>
                    </div>
                    <div class="col-md-12 text-center">
                      <div class="pt-2">
                        <h5 class="mt-4 font-weight-medium mb-0">Rafa Ahamada Wijaya</h5>
                        <p class="text-secondary mb-3">
                          <i>Front-End Developer</i>
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- Row -->
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-md-6 col-lg-3 mb-4">
                  <!-- Row -->
                  <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                      <img src="{{ asset('/asset/img/Nancy.png') }}" alt="wrapkit" class="img-fluid rounded-circle" />
                    </div>
                    <div class="col-md-12 text-center">
                      <div class="pt-2">
                        <h5 class="mt-4 font-weight-medium mb-0">Nancy Laylana Putri</h5>
                        <p class="text-secondary mb-3">
                          <i>UI/UX Designer</i>
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- Row -->
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection