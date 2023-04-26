<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('backend.includes.header')
    @include('backend.includes.css')
</head>

<body>
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 shadow-base rounded bg-white">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span
                    class="tx-info">plus</span> <span class="tx-normal">]</span>
            </div>
            <div class="tx-center mg-b-60">The Admin Template For Perfectionist
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input class="form-control" name="email" type="email" value="{{ old('email') }}"
                        placeholder="Enter your email" required>
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div><!-- form-group -->
                <div class="form-group">
                    <input class="form-control" name="password" type="password" placeholder="Enter your password"
                        required autocomplete="current-password">
                    <x-input-error class="mt-2" :messages="$errors->get('password')" />
                    <a class="tx-info tx-12 d-block mg-t-10" href="">Forgot password?</a>
                </div><!-- form-group -->
                <button class="btn btn-info btn-block" type="submit">Sign
                    In</button>
            </form>
        </div><!-- login-wrapper -->
    </div><!-- d-flex -->
    @include('backend.includes.script')
</body>

</html>
