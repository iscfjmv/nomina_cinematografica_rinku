<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $idempleado
 * @property $idsueldo
 * @property $numeroentregas
 * @property $mespago
 * @property $pagototal
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @property Sueldo $sueldo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'idempleado' => 'required',
		'idsueldo' => 'required',
		'numeroentregas' => 'required',
		'mespago' => 'required',
		'pagototal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idempleado','idsueldo','numeroentregas','mespago','pagototal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'idempleado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sueldo()
    {
        return $this->hasOne('App\Models\Sueldo', 'id', 'idsueldo');
    }
    

}
