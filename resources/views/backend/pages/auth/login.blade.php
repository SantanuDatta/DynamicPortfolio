<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('backend.includes.header')

    @include('backend.includes.css')
</head>

<body>
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
            <div class="tx-center mg-b-60">The Admin Template For Perfectionist</div>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter your email" name="email" value="{{ old('email') }}" required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Enter your password" name="password" required autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
                </div><!-- form-group -->
                    <button type="submit" class="btn btn-info btn-block">Sign In</button>
            </form>

        </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    @include('backend.includes.script')

</body>
</html>
