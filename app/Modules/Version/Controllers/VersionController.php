<?php

namespace App\Modules\Version\Controllers;

use App\Modules\Common\Models\Version as ModelInstance;
use App\Modules\Common\Models\AppInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Modules\Common\Traits\ListviewTrait;

class VersionController extends Controller
{
    use ListviewTrait;

    private $model = ModelInstance::class;
    private $view = 'Version::listview';
    private $form = 'Version::form';
    private $data = [
        'routeName'     =>      'version'
    ];
    private $validate = [
        'app_id'            =>  'required',
        'ios_version'       =>  'required',
        'android_version'   =>  'required',
        'is_latest'         =>  'boolean',
    ];

    /**
    * Custom form data.
    *
    * @param  array  $data
    * @return array
    */
    public function customFormData($data)
    {
        $appinfo = AppInfo::name()->get()->toArray();
        $applist = [];
        array_walk($appinfo, function ($value, $key) use (&$applist) {
            $applist[$value['id']] = $value['name'];
        });
        $data['list'] = $applist;
        return $data;
    }
}
