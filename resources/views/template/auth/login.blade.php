@extends('template.layout')

@section('title', 'Bookaroo')

@section('content')
    <div class="row align-items-center mt-5">
        <form class="col-lg-3 col-md-4 col-10 mx-auto text-center mt-5 needs-validation" method="POST" action="{{route('login')}}" novalidate>
            @csrf
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{route('home')}}">
                <img src="{{ asset('assets/images/login_logo.svg') }}" class="brand-form" alt="Brand Logo">
            </a>
            <h1 class="h6 mb-3">Sign in</h1>
            <div class="form-group">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input value="{{old('email')}}" type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email address" autofocus="" required>
                <div class="invalid-feedback">
                    @error('email')
                    {{ $message }}
                    @else
                        The Email field is required.
                        @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
                <div class="invalid-feedback">
                    @error('password')
                    {{ $message }}
                    @else
                        The Password field is required.
                        @enderror
                </div>

                @if ($errors->has('email'))
                    <p class="alert" style="color: indianred;">
                        {{ $errors->first('email') }}
                    </p>
                @endif
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Stay logged in </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in</button>
            <p class="mt-5 mb-3 text-muted">© 2020</p>
        </form>
    </div>
@endsection
