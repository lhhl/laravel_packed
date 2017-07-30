@extends('Common::templates.form')

@php($title = 'App Info')
@php($subtitle = 'App Info Management')
@php($backLink = route($routeName . '_index'))
@php($controls = [
    [
        'title'     =>  'Key (*)',
        'name'      =>  'key',
        'type'      =>  'text',
        'attributes'    =>  [
            'placeholder'   =>  "Please enter app key"
        ]
    ],
    [
        'title'     =>  'Name (*)',
        'name'      =>  'name',
        'type'      =>  'text',
        'attributes'    =>  [
            
            'placeholder'   =>  "Please enter app name"
        ]
    ],
    [
        'title'     =>  'Domain (*)',
        'name'      =>  'link',
        'type'      =>  'text',
        'attributes'    =>  [
            'placeholder'   =>  "appname.com"
        ]
    ],
    [
        'title'     =>  'Description',
        'name'      =>  'description',
        'type'      =>  'textarea',
        'attributes'    =>  [
            'placeholder'   =>  "Please enter description",
            'id'            =>  'description',
            'rows'          =>  "30"
        ]
    ]
])

@push('page-js')
  tinymce.init({
    selector: '#description'
  });
@endpush
