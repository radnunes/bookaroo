@extends('template.layout')

@section('title', 'Bookaroo')

@section('content')
    <div class="row align-items-center h-100">
        <form class="col-lg-6 col-md-8 col-10 mx-auto needs-validation" method="POST" action="{{route('users.store')}}" novalidate>
                @csrf
                <div class="mx-auto text-center my-4">
                    <h2 class="my-3">Register</h2>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{old('name')}}" required>
                    <div class="invalid-feedback">
                        @error('name')
                        {{ $message }}
                        @else
                            The Name field is required.
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{old('email')}}" required>
                    <div class="invalid-feedback">
                        @error('email')
                        {{ $message }}
                        @else
                            The Email field is required.
                            @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <input type="text" id="nationality" name="nationality" class="form-control @error('nationality') is-invalid @enderror" placeholder="Nationality" value="{{old('nationality')}}" required>
                    <div class="invalid-feedback">
                        @error('nationality')
                        {{ $message }}
                        @else
                            The Nationality field is required.
                            @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthdate">Birthdate</label>
                    <input type="date" id="birthdate" name="birthdate" class="form-control @error('birthdate') is-invalid @enderror" placeholder="Birthdate" value="{{old('birthdate')}}" required>
                    <div class="invalid-feedback">
                        @error('birthdate')
                        {{ $message }}
                        @else
                            The Birthdate field is required.
                            @enderror
                    </div>
                </div>

                <hr class="my-4">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                            <div class="invalid-feedback">
                                @error('password')
                                {{ $message }}
                                @else
                                    The Password field is required.
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                            <div class="invalid-feedback">
                                @error('confirm_password')
                                {{ $message }}
                                @else
                                    The Confirm password field is required.
                                    @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-2">Password requirements</p>
                        <p class="small text-muted mb-2"> To create a new password, you have to meet all of the following requirements: </p>
                        <ul class="small text-muted pl-4 mb-0">
                            <li> Minimum 8 characters </li>
                            <li> Maximum 128 characters </li>
                            <li>At least 1 lowercase character</li>
                            <li>At least 1 uppercase character</li>
                            <li>At least 1 special character</li>
                            <li>At least 1 number</li>
                        </ul>
                    </div>
                </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
            <p class="mt-5 mb-3 text-muted text-center">© 2020</p>
        </form>
    </div>
@endsection
