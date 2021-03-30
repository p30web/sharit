<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style type="text/css">
    .medium-zoom-overlay {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        opacity: 0;
        transition: opacity .3s;
        will-change: opacity
    }

    .medium-zoom--open .medium-zoom-overlay {
        cursor: pointer;
        cursor: zoom-out;
        opacity: 1
    }

    .medium-zoom-image {
        cursor: pointer;
        cursor: zoom-in;
        transition: transform .3s
    }

    .medium-zoom-image--open {
        position: relative;
        cursor: pointer;
        cursor: zoom-out;
        will-change: transform
    }
</style>

