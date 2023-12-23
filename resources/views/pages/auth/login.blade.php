<!DOCTYPE html>

<html lang="en">
	<head>
		<title>{{ config('app.name') }} | Login </title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />

		<link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Toastr --}}
    <link href="/toastr/toastr.css" rel="stylesheet">

	</head>
	<body id="kt_body" class="bg-body" style="font-family: 'Figtree">
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<a href="#" class="mb-12">
          <img alt="Logo" src="/assets/media/logos/logo-2.svg" class="h-60px logo" />
        </a>
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<form class="form w-100" novalidate="novalidate"  action="{{ route('login') }}" method="POST" id="form-login">
              @csrf

							<div class="text-center mb-10">
								<h1 class="text-dark mb-3">LOGIN</h1>
								<div class="text-gray-400 fw-bold fs-4">{{ config('app.name') }}</div>
							</div>
							<div class="fv-row mb-10">
								<label class="form-label fs-6 fw-bolder text-dark">Email</label>
								<input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" placeholder="Ketik Email" required>
							</div>
							<div class="fv-row mb-10">
								<div class="d-flex flex-stack mb-2">
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
								</div>
								<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" placeholder="Ketik Password" required>
							</div>
							<div class="text-center">
                <button type="submit" class="btn btn-lg btn-primary w-100 mb-5" id="login-store" >
                  <span class="indicator-label">Login</span>
                  <span class="indicator-progress">Login...
                  <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
		<script>var hostUrl = "/assets/";</script>
		<script src="/assets/plugins/global/plugins.bundle.js"></script>
		<script src="/assets/js/scripts.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $('#form-login').on('submit', function() {
        $('#login-store').attr("data-kt-indicator", "on");
        $('#login-store').attr("disabled", true);
      });
    </script>

    {{-- Toastr --}}
    <script src="/toastr/toastr.js"></script>
    <x-admin.toastr></x-admin.toastr>
	</body>
</html>
