<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class ServEquipo extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'servequipo';

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

	public function servicio()
	{
		return $this->belongsTo('adminsel\Models\Servicio'); 
	}

	//-----------------------------------------

}
