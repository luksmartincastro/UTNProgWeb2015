<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class EquipoFalla extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'equipofalla';

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
	
	//------------------------------------------
    //------------- metodos --------------------
    //------------------------------------------

    public function equipo()
    {
        return $this->belongsTo('Equipo'); 
    }
    //-----------------------------------------
}
