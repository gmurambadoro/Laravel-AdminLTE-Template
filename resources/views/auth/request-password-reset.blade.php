<x-layouts.guest>
    <x-slot:title>
        Forgot password
    </x-slot:title>

    <p class="login-box-msg">Request a password reset</p>

    <form action="{{ route('password.email') }}" method="post">
        @csrf

        <x-auth.status/>

        <div class="form-group has-feedback @error('email') has-error @enderror">
            <input type="email" name="email" class="form-control" placeholder="Email address"
                   value="{{ old('email') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @error('email')
            <span class="help-block">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-flat">
                <i class="fa fa-send"></i> Reset password
            </button>
        </div>
    </form>

    <a href="{{ route('login') }}">Sign in</a> <em>- OR -</em>
    <a href="{{ route('register') }}" class="text-center">Register a new account</a>
</x-layouts.guest>
