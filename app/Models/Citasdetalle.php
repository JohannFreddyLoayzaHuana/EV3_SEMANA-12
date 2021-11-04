<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Citasdetalle
 * @package App\Models
 * @version November 3, 2021, 8:53 pm UTC
 *
 * @property integer $id_detallecita
 * @property integer $id_cita
 */
class Citasdetalle extends Model
{
    //use SoftDeletes;

    public $table = 'citas_detalle';
    protected $primaryKey= 'idCitas_detalle';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_detallecita',
        'id_cita'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idCitas_detalle' => 'integer',
        'id_detallecita' => 'integer',
        'id_cita' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_detallecita' => 'nullable|integer',
        'id_cita' => 'nullable|integer'
    ];

    
}
