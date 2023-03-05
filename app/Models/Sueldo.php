<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sueldo
 *
 * @property $id
 * @property $idrol
 * @property $sueldobase
 * @property $bono
 * @property $precioentrega
 * @property $horaslaborables
 * @property $diaslaborables
 * @property $created_at
 * @property $updated_at
 *
 * @property Pago[] $pagos
 * @property Role $role
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sueldo extends Model
{
    
    static $rules = [
		'idrol' => 'required',
		'sueldobase' => 'required',
		'bono' => 'required',
		'precioentrega' => 'required',
		'horaslaborables' => 'required',
		'diaslaborables' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idrol','sueldobase','bono','precioentrega','horaslaborables','diaslaborables'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Models\Pago', 'idsueldo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role()
    {
        return $this->hasOne('App\Models\Role', 'id', 'idrol');
    }
    

}
