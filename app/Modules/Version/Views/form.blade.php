@extends('Common::templates.form')

@php($title = 'App Version')
@php($subtitle = 'App Version Management')
@php($backLink = route($routeName . '_index'))
@php($controls = [
    [
        'title'     =>  'App Name (*)',
        'name'      =>  'app_id',
        'type'      =>  'select',
        'list'      =>  $list,
        'attributes'    =>  [
            'placeholder'   =>  "-- Select app name --"
        ]
    ],
    [
        'title'     =>  'Server version',
        'name'      =>  'server_version',
        'type'      =>  'text',
        'attributes'    =>  [
            'placeholder'   =>  "1.0.0"
        ]
    ],
    [
        'title'     =>  'iOS version (*)',
        'name'      =>  'ios_version',
        'type'      =>  'text',
        'attributes'    =>  [
            'placeholder'   =>  "1.0.0"
        ]
    ],
    [
        'title'     =>  'Android version (*)',
        'name'      =>  'android_version',
        'type'      =>  'text',
        'attributes'    =>  [
            'placeholder'   =>  "1.0.0"
        ]
    ],
    [
        'title'     =>  'Description',
        'name'      =>  'description',
        'type'      =>  'textarea',
        'attributes'    =>  [
            'placeholder'   =>  "Please enter description",
            'rows'          =>  "30",
            'id'            =>  "description"
        ]
    ],
    [
        'title'     =>  'Latest',
        'name'      =>  'is_latest',
        'type'      =>  'checkbox'
    ]
])

@push('page-js')
  tinymce.init({
    selector: '#description'
  });
@endpush
