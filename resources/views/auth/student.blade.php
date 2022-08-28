<!DOCTYPE html>
<html lang="en">

<head>
	<title>Consultation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
	<link rel="stylesheet" href="{{ asset('css/language.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="registration-page">

	<section class="login-page-section">
		<div class="container container--narrow">
			<!-- MultiStep Form -->
			<div class="row justify-content-center">
				<div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
					<div class="row">
						<div class="col-md-12 mx-0">
							<form method="POST" action="/register/student">
								@csrf
								<!-- progressbar -->

								<div class="row">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 form-fields">
										<div class="form-name student-from">
											<h2>Student Registration</h2>
										</div>

										<div class="form-card row justify-content-center no-gutters student-from">
											<div class="col-md-10 col-lg-10 col-xl-8">
												<div class="block-content">
													<div class="block-content__head">
														<div class="info__content">
															<h3>Personal Information</h3>
														</div>
													</div>
													<div class="block-content__body">
														<div class="row">
															<div class="col-md-6">
																<div class="field-set">
																	<div class="caption-wraper">
																		<label class="field_label">
																			Name
																			<span class="spn_must_field">*</span>
																		</label>
																	</div>
																	<div class="field-wraper">
																		<div class="field_cover">
																			<input id="name" type="text"
																				class="form-control" name="name"
																				value="{{ old('name') }}" required>
																		</div>
																	</div>
																	<span class="text-danger">@error('name'){{ $message
																		}}@enderror</span>
																</div>
															</div>
															<div class="col-md-6">
																<div class="field-set">
																	<div class="caption-wraper">
																		<label class="field_label">
																			Email
																			<span class="spn_must_field">*</span>
																		</label>
																	</div>
																	<div class="field-wraper">
																		<div class="field_cover">
																			<input id="email" type="email"
																				class="form-control" name="email"
																				value="{{ old('email') }}" required>
																		</div>
																	</div>
																	<span class="text-danger">@error('email'){{ $message
																		}}@enderror</span>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<div class="field-set">
																	<div class="caption-wraper">
																		<label class="field_label">
																			Password
																			<span class="spn_must_field">*</span>
																		</label>
																	</div>
																	<div class="field-wraper">
																		<div class="field_cover">
																			<input id="password" type="password"
																				class="form-control" name="password"
																				required>
																		</div>
																	</div>
																	<span class="text-danger">@error('password'){{
																		$message
																		}}@enderror</span>
																</div>
															</div>
															<div class="col-md-6">
																<div class="field-set">
																	<div class="caption-wraper">
																		<label class="field_label">
																			Confirm Password
																			<span class="spn_must_field">*</span>
																		</label>
																	</div>
																	<div class="field-wraper">
																		<div class="field_cover">
																			<input id="password-confirm" type="password"
																				class="form-control"
																				name="password_confirmation" required>
																		</div>
																	</div>
																	<span
																		class="text-danger">@error('password_confirmation'){{
																		$message
																		}}@enderror</span>
																</div>
															</div>
														</div>
                                                        <div class="row registerd-btns">
                                                            <button type="submit" class="action-button float-left btn">
                                                                Register
                                                            </button>
                                                            <a href="{{ route('login') }}" class="btn">Already have
                                                                account?
                                                                Login</a>
                                                        </div>

														<br>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>





	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="Js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='{{ asset('Js/toastr.js') }}'></script>

    @if (Session::get('success'))
    <script>
        toastr.success("{!! Session::get('success') !!}");
    </script>
    @elseif (Session::get('error'))
    <script>
        toastr.error("{!! Session::get('error') !!}");
    </script>
    @endif

	<!-- bootstrap bandel -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>
	<script src="{{ asset('./js/main.js') }}"></script>
	<script src="{{ asset('Js/language.js') }}"></script>

	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
	</script>
</body>

</html>
