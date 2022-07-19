    @extends('blades.master')
    @section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
            <!-- breadcrumb -->
            <div class="bg-gray-13 bg-md-transparent">
                <div class="container">
                    <!-- breadcrumb -->
                    <div class="my-md-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a></li>
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">My Account</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="container">
                <div class="mb-4">
                    <h1 class="text-center">My Account</h1>
                </div>
                <div class="my-4 my-xl-8">
                    <div class="row">
                        <div class="col-md-5 ml-xl-auto mr-md-auto mr-xl-0 mb-8 mb-md-0">
                            <!-- Title -->
                            <div class="border-bottom border-color-1 mb-6">
                                <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Login</h3>
                            </div>
                            <p class="text-gray-90 mb-4">Welcome back! Sign in to your account.</p>
                            <!-- End Title -->

       <!-- Login -->
                             <form method="post" action="{{route('login') }}">
                            @csrf
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="form-label" for="signinSrEmailExample3">Username or Email address
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" name="email" value="{{ old('email') }}"
                                       placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="form-label" for="signinSrPasswordExample2">Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control {{ $errors->has('password')?'is-invalid':'' }}" placeholder="Password" name="password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                       <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <!-- End Form Group -->



                                <!-- Button -->
                                <div class="mb-1">
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary-dark-w px-5">Login</button>
                                    </div>
                                    <div class="col-6 text-right">
                                    <!-- <a class="btn btn-link px-0" href="{{ url('/password/reset') }}">
                                        Forgot password?
                                    </a> -->
                                </div>
                                    <!-- <div class="mb-2">
                                        <a class="text-blue" href="#">Lost your password?</a>
                                    </div> -->
                                </div>
                                <!-- End Button -->
                            </form>
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                            <div class="flex-content-center h-100">
                                <div class="width-1 bg-1 h-100"></div>
                                <div class="width-50 height-50 border border-color-1 rounded-circle flex-content-center font-italic bg-white position-absolute">or</div>
                            </div>
                        </div>

<!-- Register -->

                        <div class="col-md-5 ml-md-auto ml-xl-0 mr-xl-auto">
                            <!-- Title -->
                            <div class="border-bottom border-color-1 mb-6">
                                <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Register</h3>
                            </div>
                            <p class="text-gray-90 mb-4">Create new account today to reap the benefits of a personalized shopping experience.</p>
                            <!-- End Title -->
                            <!-- Form Group -->
                            <form method="post" action="{{ url('/register') }}">
                            @csrf
                            <div class="js-form-message form-group mb-5">
                            <input type="text" class="form-control {{ $errors->has('name')?'is-invalid':'' }}" name="name" value="{{ old('name') }}"
                                   placeholder="Full Name">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            </div>


                            <div class="js-form-message form-group mb-5">
                                    <label class="form-label" for="RegisterSrEmailExample3">Email address
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" name="email" value="{{ old('email') }}" placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                         </div>

                         <div class="js-form-message form-group mb-5">
                         <input type="password" class="form-control {{ $errors->has('password')?'is-invalid':''}}" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="js-form-message form-group mb-5">

                        <input type="password" name="password_confirmation" class="form-control"
                                   placeholder="Confirm password">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                               </span>
                            @endif

                        </div>
                                <!-- End Form Group -->
                                <p class="text-gray-90 mb-4">Your personal data will be used to support your experience throughout this website, to manage your account, and for other purposes described in our <a href="#" class="text-blue">privacy policy.</a></p>
                                <!-- Button -->
                                <div class="mb-6">
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary-dark-w px-5">Register</button>

                                    </div>
                                </div>
                                <!-- End Button -->
                            </form>
                            <h3 class="font-size-18 mb-3">Sign up today and you will be able to :</h3>
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item px-0"><i class="fas fa-check mr-2 text-green font-size-16"></i> Speed your way through checkout</li>
                                <li class="list-group-item px-0"><i class="fas fa-check mr-2 text-green font-size-16"></i> Track your orders easily</li>
                                <li class="list-group-item px-0"><i class="fas fa-check mr-2 text-green font-size-16"></i> Keep a record of all your purchases</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->
        @stop
