<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{config('app.name')}}</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

  <style>
        body.bg-gradient-success {
            margin: 0; /* Menghilangkan margin default pada body */
            padding: 0; /* Menghilangkan padding default pada body */
            background: url('https://picsum.photos/1000/600') no-repeat center center fixed;
            background-size: cover;
            color: blue; /* Memberikan warna teks putih agar terlihat dengan latar belakang gambar */
        }

        /* Style tambahan untuk konten di dalam body */
        .content {
            padding: 50px;
            text-align: center;
        }
    </style>
</head>

<body class="bg-gradient-success"> 

  <div class="container">
    <h1 id="movingText" style="color: green;">Selamat Datang di Website Jurusan Teknologi Informasi!!</h1>
   <script>
        // Script untuk membuat teks bergerak
        const movingText = document.getElementById('movingText');
        let position = 0;
        const speed = 2; // Kecepatan gerakan, sesuaikan sesuai kebutuhan

        function moveText() {
            position += speed;
            movingText.style.transform = `translateX(${position}px)`;

            // Jika ingin membuat teks bergerak kembali ke awal setelah mencapai batas tertentu
            // if (position >= window.innerWidth) {
            //     position = -movingText.clientWidth;
            // }

            requestAnimationFrame(moveText);
        }

        // Panggil fungsi untuk memulai animasi
        moveText();
    </script>


    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-login-image" style="background-image: url('https://picsum.photos/2000/600'); background-size: cover; background-position: center;"></div>

              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">{{config('app.name')}}</h1>
                  </div>
                  @if(\Session::has('alert'))
                  <div class="alert alert-danger">
                      <div>{{Session::get('alert')}}</div>
                  </div>
                  @endif
                  @if(\Session::has('alert-success'))
                  <div class="alert alert-success">
                      <div>{{Session::get('alert-success')}}</div>
                  </div>
                  @endif
                  <form class="user" method="post" action="{{ url('login/auth') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-user" id="InputUsername" placeholder="Username">
                        @if($errors->has('username'))
                        <div class="text-danger">
                          {{ $errors->first('username')}}
                        </div>
                        @endif
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="InputPassword" placeholder="Password">
                      @if($errors->has('password'))
                      <div class="text-danger">
                        {{ $errors->first('password')}}
                      </div>
                      @endif
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Ingat saya</label>
                      </div>
                    </div>
                    <button type="sumbit" class="btn btn-success btn-user btn-block">Masuk</button>
                    <hr>
                    <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                  </form>
                  <!-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div> -->
                  <div class="text-center">
                    <a class="small" href="{{ url('register') }}">Buat akun!</a>
                  </div>
                  <br><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
