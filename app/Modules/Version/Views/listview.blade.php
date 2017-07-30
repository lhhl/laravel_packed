@extends('Common::templates.listview')

@php($data = [
    'title'         =>      'App Versions',
    'actions'       =>  [
        [
            'title' =>  'edit',
            'link'  =>  'edit'
        ],
        [
            'title' =>  'delete',
            'link'  =>  'destroy'
        ],
        [
            'title'     =>  'info',
            'link'      =>  'show',
            'target'    =>  '_blank'
        ],
    ],
    'controls'      =>  [
        [
            'title' =>  'create',
            'link'  =>  'create'
        ]
    ],
])

@push('page-js')

@endpush
