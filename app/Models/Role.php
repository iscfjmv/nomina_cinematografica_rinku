<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @property $id
 * @property $nombrerol
 * @property $created_at
 * @property $updated_at
 *
 * @property Sueldo[] $sueldos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Role extends Model
{
    
    static $rules = [
		'nombrerol' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombrerol'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sueldos()
    {
        return $this->hasMany('App\Models\Sueldo', 'idrol', 'id');
    }
    

}
