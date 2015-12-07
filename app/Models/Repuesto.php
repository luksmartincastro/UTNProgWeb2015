<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class Repuesto extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'repuesto';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreRep','precioVenta','precioCompra','puntoReposicion','stock'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
	
	//-----------------------------------------------------
	//--------------------- metodos -----------------------
	//-----------------------------------------------------	

    public function modelo()
    {
        return $this->belongsTo('adminsel\Models\Modelo'); 
    }

    //-----------------------------------------
    public function fallas()
    {
        return $this->hasMany('adminsel\Models\EquipoFalla','equipofalla_idrep_foreign'); 
    }   
    //-----------------------------------------
    public function equipos()
    {
        return $this->hasMany('adminsel\Models\EquipoRepuesto','equiporepuesto_idrep_foreign'); 
    }   
    //-----------------------------------------
}
