@push('header')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
@endpush


@push('css')
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/anomo_css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/anomo_css/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/anomo_css/select2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/anomo_css/SelectKustom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/anomo_css/style.css') }}" rel="stylesheet">
@endpush


@push('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="javascript" src="{{ asset('js/anomo.js') }}"></script>
    <!--
    <script language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>-->
@endpush
