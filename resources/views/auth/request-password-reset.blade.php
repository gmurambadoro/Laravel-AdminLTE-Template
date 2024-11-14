<x-layouts.guest>
    <x-slot:title>
        Forgot password
    </x-slot:title>

    <p class="login-box-msg">Request a password reset</p>

    <form action="{{ route('password.email') }}" method="post">
        @csrf

        @if (session('status'))
            <div class="alert alert-info">
                {{ session('status') }}
            </div>
        @endif

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
            <button type="submit" class="btn btn-primary btn-block btn-flat">Request password link</button>
        </div>
    </form>

    <a href="{{ route('login') }}">Login</a> <br/>
    <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
</x-layouts.guest>
