@extends('app.welcome.layout.app')

@section('title')
    Login | Open Roads Car Rental
@endsection

@section('welcomebody')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" class="jarallax">
            <img src="{{ asset('welcome/images/background/2.jpg') }}" class="jarallax-img" alt="">
            <div class="v-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 offset-lg-4">
                            <div class="padding40 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                                <h4>Login</h4>
                                <div class="spacer-10"></div>
                                <form action="{{ route('login.authenticate') }}" id="loginForm" class="form-border"
                                    method="post">
                                    @csrf
                                    @method('post')
                                    <div class="field-set">
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Enter your email" />
                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="field-set">
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Your password" />
                                            @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div id="submit">
                                        <button type="submit" id="login_submit_btn"
                                            class="btn-main btn-fullwidth rounded-3">Sign In</button>
                                    </div>
                                </form>
                                <div class="title-line">Or&nbsp;sign&nbsp;up</div>
                                <div class="row g-2">
                                    <div class="col-lg-12">
                                        <a class="btn-sc btn-fullwidth mb10" href="{{ route('register.index') }}"><img
                                                src="{{ asset('welcome/images/svg/user.png') }}" alt="">Sign Up</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
@endsection
