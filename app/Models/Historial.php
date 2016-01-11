<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'historial';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['evento','descripcionFalla'];

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
}
