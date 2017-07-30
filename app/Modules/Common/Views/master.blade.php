<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('Common::resources')
    @stack('header')
    @stack('css')
    @stack('css-injection')
    @stack('js')
    @stack('js-injection')
    <script language="javascript">
        @stack('page-js')
    </script>
</head>
<body spellcheck="false">
    <div class="l-container">

        <div class="l-col-left" id="niceScroll">
            @include('Common::logo')

            <div class="clear-fix"></div>

            @include('Common::menu')
        </div>

        <div class="l-col-right">
            @include('Common::header')
            @include('Common::content')
        </div>

        @include('Common::footer')
    </div>
</body>
</html>
