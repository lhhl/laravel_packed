@extends('Common::master')

@section('component')
    @component('Common::components.control.main',
        [
            'title'         =>  $title,
            'routeName'     =>  $routeName,
            'subtitle'      =>  $subtitle,
            'backLink'      =>  $backLink,
            'controls'      =>  $controls,
            'record'        =>  (isset($record)) ? $record->toArray() : [],
            'idUpdate'      =>  (isset($idUpdate)) ? $idUpdate : false,
            'errors'        =>  ($errors->any()) ? $errors->all() : []
        ]
    )
    @endcomponent
@endsection

@push('js-injection')
  <script src='https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=85d26rxtq4530nlseochsf10kgskfuxca75j85114wrw9u9d'></script>
  <script>
    $().ready(function () {
        $('.formInput').submit(function () {
            $('[name="submit"]').attr('disabled', 'disabled');
        });
    });
  </script>
@endpush
