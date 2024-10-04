<div class="row align-items-center mt-5">
        <form class="col-lg-3 col-md-4 col-10 mx-auto text-center mt-5">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                <img src="{{ asset('assets/images/login_logo.svg') }}" class="brand-form" alt="Brand Logo">
            </a>
            <h1 class="h6 mb-3">Sign in</h1>
            <div class="form-group">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="Email address" required="" autofocus="">
            </div>
            <div class="form-group">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required="">
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Stay logged in </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in</button>
            <p class="mt-5 mb-3 text-muted">© 2020</p>
        </form>
</div>
