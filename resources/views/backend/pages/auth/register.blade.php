<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('backend.includes.header')
    @include('backend.includes.css')
</head>

<body>
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 shadow-base rounded bg-white">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span
                    class="tx-info">plus</span> <span class="tx-normal">]</span>
            </div>
            <div class="tx-center mg-b-40">The Admin Template For Perfectionist
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input class="form-control" name="name" type="text" value="{{ old('name') }}"
                        placeholder="Enter your Name" required>
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div><!-- form-group -->
                <div class="form-group">
                    <input class="form-control" name="email" type="email" value="{{ old('email') }}"
                        placeholder="Enter your Email" required>
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div><!-- form-group -->
                <div class="form-group">
                    <input class="form-control" name="password" type="password" placeholder="Enter your password"
                        required autocomplete="new-password">
                    <x-input-error class="mt-2" :messages="$errors->get('password')" />
                </div><!-- form-group -->
                <div class="form-group">
                    <input class="form-control" name="password_confirmation" type="password"
                        placeholder="Confirm your password" required>
                    <x-input-error class="mt-2" :messages="$errors->get('password_confirmation')" />
                </div><!-- form-group -->
                <div class="form-group tx-12">By clicking the Sign Up button
                    below, you agreed to our privacy policy and
                    terms of use of our website.</div>
                <button class="btn btn-info btn-block" type="submit">Sign
                    Up</button>
            </form>
        </div><!-- login-wrapper -->
    </div><!-- d-flex -->
    @include('backend.includes.script')
</body>

</html>
