<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class EquipoAccesorio extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'equipoaccesorio';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
	
	//-----------------------------------------------------
	//--------------------- metodos -----------------------
	//-----------------------------------------------------

    public function equipo()
    {
        return $this->belongsTo('adminsel\Models\Equipo'); 
    }
    //-----------------------------------------
    public function accesorio()
    {
        return $this->belongsTo('adminsel\Models\Accesorio'); 
    }
    //-----------------------------------------
}