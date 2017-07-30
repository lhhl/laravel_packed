<?php

namespace App\Modules\Common\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Version extends Model
{
    protected $fillable = ['app_id', 'server_version', 'ios_version', 'android_version', 'description', 'is_latest'];
    protected $casts = [
        'is_latest' => 'boolean',
    ];
    /**
     * Scope a query to only select some collumns.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeListview($query)
    {
        return $query->select(
            'versions.id', 'appinfos.name', 'server_version', 'ios_version', 'android_version', 'is_latest'
            )
                    ->join('appinfos', 'appinfos.id', '=', 'versions.app_id');
    }

    /**
    * Get the app info that owns the version.
    */
    public function appinfo()
    {
        return $this->belongsTo('App\Modules\Common\Models\AppInfo', 'app_id')->published();
    }
}
