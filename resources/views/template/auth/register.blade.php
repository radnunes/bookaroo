<div class="row align-items-center h-100">
    <form class="col-lg-6 col-md-8 col-10 mx-auto" method="POST" action="{{route('users.store')}}">
            @csrf
            <div class="mx-auto text-center my-4">
                <h2 class="my-3">Register</h2>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                @if ($errors->has('name'))
                    <p class="alert" style="color: indianred;">
                        {{ $errors->first('name') }}
                    </p>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                @if ($errors->has('email'))
                    <p class="alert" style="color: indianred;">
                        {{ $errors->first('email') }}
                    </p>
                @endif
            </div>
            <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" id="nationality" name="nationality" class="form-control" placeholder="Nationality">
                @if ($errors->has('nationality'))
                    <p class="alert" style="color: indianred;">
                        {{ $errors->first('nationality') }}
                    </p>
                @endif
            </div>
            <div class="form-group">
                <label for="birthdate">Birthdate</label>
                <input type="date" id="birthdate" name="birthdate" class="form-control" placeholder="Birthdate">
                @if ($errors->has('birthdate'))
                    <p class="alert" style="color: indianred;">
                        {{ $errors->first('birthdate') }}
                    </p>
                @endif
            </div>

            <hr class="my-4">
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <p class="alert" style="color: indianred;">
                                {{ $errors->first('password') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                        @if ($errors->has('confirm_password'))
                            <p class="alert" style="color: indianred;">
                                {{ $errors->first('confirm_password') }}
                            </p>
                        @endif
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
