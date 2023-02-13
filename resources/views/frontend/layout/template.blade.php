<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Metas -->
        @include('frontend.includes.header')
        <!-- Css -->
        @include('frontend.includes.css')
    </head>
    <body>
        <div class="loader">
            <div class="loader-inner">
                <div class="bounce">
                <div class="bounce-circle"></div>
                </div>
            </div>
        </div>
        <div id="wrapper" class="wrapper home">
            <!--Alternate styles for demo purposes only-->
            @include('frontend.includes.wrapper')
            <div class="blurred-content"></div>
            <div class="container spacer-xlg">
                @yield('body-content')
            </div>
            <a class="outer scroll-to-top  scroll" href="#wrapper">
                <div class="scroll-to-top-inner inner radius-2"><span class=" fas fa-arrow-up top-icon "></span></div>
            </a>
            <!-- End to the top -->
        </div>
        <!-- End wrapper-->
        <!--Javascript-->
        @include('frontend.includes.script')
    </body>
</html>

