<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        @include('backend.includes.header')

        @include('backend.includes.css')
    </head>
<body>
    
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
            <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your Name" name="name" value="{{ old('name') }}" required>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter your Email" name="email" value="{{ old('email') }}" required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Enter your password" name="password" required autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm your password" name="password_confirmation" required>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div><!-- form-group -->
                <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
                <button type="submit" class="btn btn-info btn-block">Sign Up</button>
            </form>
        </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    @include('backend.includes.script')

</body>
</html>
