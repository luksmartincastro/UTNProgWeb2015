<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class FallaGenerica extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fallagenerica';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcionFallaGen'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
	
	//-----------------------------------------------------
	//--------------------- metodos -----------------------
	//-----------------------------------------------------

	public function equipos()
    {        
        return $this->hasMany('EquipoFalla','equipofalla_idfallaGen_foreign');
    }
}
