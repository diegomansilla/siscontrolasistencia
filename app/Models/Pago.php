<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $monto
 * @property $fecha_pago
 * @property $miembro_id
 * @property $ministerio_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Miembro $miembro
 * @property Ministerio $ministerio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'monto' => 'required',
		'fecha_pago' => 'required',
		'miembro_id' => 'required',
		'ministerio_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['monto','fecha_pago','miembro_id','ministerio_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function miembro()
    {
        return $this->hasOne('App\Models\Miembro', 'id', 'miembro_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ministerio()
    {
        return $this->hasOne('App\Models\Ministerio', 'id', 'ministerio_id');
    }
    

}
