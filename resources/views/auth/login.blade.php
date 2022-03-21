<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; SMK ASSALAAM BANDUNG</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <link rel="shortcut icon" href="../assets/img/logo.jpg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <img src="../assets/img/logo.jpg" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
                        <h5 class="text-dark font-weight-normal">Aplikasi <span class="font-weight-bold">Inventaris Barang Sekolah</span></h5>
                        <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                      <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan email" required autocomplete="email" autofocus>
                    </div>

                    @error('email')
                        <strong style="color:red">{{ $message }}</strong>
                    @enderror

                    <div class="form-group">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukan Password" required autocomplete="current-password">
                    </div>

                    @error('password')
                        <strong>{{ $message }}</strong
                    @enderror


                    <button type="submit" class="btn btn-dark btn-user btn-block">
                      {{ __('Login') }}
                    </button>

                  </form>
                        <div class="text-center mt-5 text-small">
                            Copyright &copy; Made with by sandi
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="../assets/img/unsplash/sekolah.jpg">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold" id="greetings"></h1>
                                <h5 class="font-weight-normal text-muted-transparent">BANDUNG, Indonesia</h5>
                            </div>
                            Photo by <a class="text-light bb" target="_blank" href="https://www.instagram.com/smkassalaam/">SMK ASSALAAM BANDUNG</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
