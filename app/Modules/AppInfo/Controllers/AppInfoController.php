<?php

namespace App\Modules\AppInfo\Controllers;

use App\Modules\Common\Models\AppInfo as ModelInstance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Modules\Common\Traits\ListviewTrait;

class AppInfoController extends Controller
{
    use ListviewTrait;

    private $model = ModelInstance::class;
    private $view = 'AppInfo::listview';
    private $form = 'AppInfo::form';
    private $data = [
        'routeName'     =>      'appinfo'
    ];
    private $validate = [
        'key'       =>  'required',
        'name'      =>  'required',
        'link'      =>  'required'
    ];

    /**
    * Forward Link.
    *
    * @param  int  $id
    * @return void
    */
    public function forward($id)
    {
        $record = ModelInstance::find($id);
        $data['link'] = $record->link . '/index/login';
        $data['username'] = $record->username;
        $data['password'] = $record->password;
        return view('AppInfo::autologin', $data);
    }

    /**
    * Statistic.
    *
    * @param  int  $id
    * @return void
    */
    public function statistic($id)
    {
        $data = $this->data;
        $record = ModelInstance::find($id);
        $data['appName'] = $record->name;
        $data['metrics'] = $this->getMetrics($record->link);
        return view('AppInfo::statistic', $data);
    }

    /**
    * Get Metrics.
    *
    * @param  string  $link
    * @return array
    */
    private function getMetrics($link)
    {
        return [
            'New Users In Day'                  =>  5,
            'New Users In Week'                 =>  38,
            'New Post'                          =>  19,
            'User has picture post'             =>  8,
            'User has video post'               =>  5,
        ];
    }
}
