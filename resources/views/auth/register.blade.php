<x-layouts.guest>
    <x-slot:title>
        Register
    </x-slot:title>

    <p class="login-box-msg">Register a new account</p>

    <form action="{{ route('register.store') }}" method="post">
        @csrf

        <x-auth.status/>

        <div class="form-group has-feedback @error('name') has-error @enderror">
            <input type="text" name="name" class="form-control" placeholder="Full name" value="{{ old('name') }}">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @error('name')
            <span class="help-block">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-group has-feedback @error('email') has-error @enderror">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @error('email')
            <span class="help-block">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-group has-feedback @error('password') has-error @enderror">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @error('password')
            <span class="help-block">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" required> I agree to the <a href="#">terms &amp; conditions</a>
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
</x-layouts.guest>
