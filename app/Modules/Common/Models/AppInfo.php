<?php

namespace App\Modules\Common\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class AppInfo extends Model
{
    protected $table = 'appinfos';
    protected $fillable = ['key', 'name', 'link', 'description'];
    protected $attributes = [
        'username'  =>  'appzocial',
        'password'  =>  'vns123456',
    ];

    /**
     * Get the version record associated with the user.
     */
    public function version()
    {
        return $this->hasOne('App\Modules\Common\Models\Version', 'app_id');
    }

    /**
     * Scope a query to only select some collumns.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeListview($query)
    {
        return $query->select('id', 'key', 'name', 'link');
    }

    /**
     * Scope a query to only select some collumns.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeName($query)
    {
        return $query->select('id', 'name');
    }

    /**
     * Get the app link.
     *
     * @param  string  $value
     * @return string
     */
    public function getLinkAttribute($value)
    {
        //$template = '<a href="%s">%s</a>';
        //return sprintf($template, $value, $value);
        return $value;
    }

    /**
     * Set Link attribute.
     *
     * @param  string  $value
     * @return void
     */
    public function setLinkAttribute($value)
    {
        $this->attributes['link'] = 'http://' . $value . '/v2/admin';
    }
}
