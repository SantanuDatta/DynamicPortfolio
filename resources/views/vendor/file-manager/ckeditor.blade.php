<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'File Manager') }}</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('vendor/file-manager/css/file-manager.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" id="fm-main-block">
                <div id="fm"></div>
            </div>
        </div>
    </div>

    <!-- File manager -->
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // set fm height
            document.getElementById('fm-main-block').setAttribute('style', 'height:' + window.innerHeight + 'px');

            // resize the window
            const windowWidth = 1400;
            const windowHeight = 800;
            window.resizeTo(windowWidth, windowHeight);

            setTimeout(() => {
                const screenWidth = window.screen.width;
                const screenHeight = window.screen.height;
                const windowLeft = (screenWidth - windowWidth) / 2;
                const windowTop = (screenHeight - windowHeight) / 2;
                window.moveTo(windowLeft, windowTop);
            }, 10);

            // Helper function to get parameters from the query string.
            function getUrlParam(paramName) {
                const reParam = new RegExp('(?:[\?&]|&)' + paramName + '=([^&]+)', 'i');
                const match = window.location.search.match(reParam);

                return (match && match.length > 1) ? match[1] : null;
            }

            // Add callback to file manager
            fm.$store.commit('fm/setFileCallBack', function(fileUrl) {
                const funcNum = getUrlParam('CKEditorFuncNum');

                window.opener.CKEDITOR.tools.callFunction(funcNum, fileUrl);
                window.close();
            });
        });
    </script>
</body>

</html>
