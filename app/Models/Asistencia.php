<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asistencia
 *
 * @property $id
 * @property $fcha_asistencia
 * @property $miembro_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Miembro $miembro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asistencia extends Model
{
    
    static $rules = [
		'fcha_asistencia' => 'required',
		'miembro_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fcha_asistencia','miembro_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function miembro()
    {
        return $this->hasOne('App\Models\Miembro', 'id', 'miembro_id');
    }
    

}
