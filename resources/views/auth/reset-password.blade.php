<x-layouts.guest>
    <x-slot:title>
        Forgot password
    </x-slot:title>

    <p class="login-box-msg">Request a password reset</p>

    <form action="{{ route('password.update') }}" method="post">
        @csrf

        <x-auth.status/>

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

        <div class="form-group has-feedback @error('password_confirmation') has-error @enderror">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @error('password_confirmation')
            <span class="help-block">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <input type="hidden" name="token" value="{{ request()->route('token') }}"/>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Confirm password reset</button>
        </div>
    </form>

    <a href="{{ route('login') }}">Sign in to my account</a> <br/>
    <a href="{{ route('register') }}" class="text-center">Register a new account</a>
</x-layouts.guest>
