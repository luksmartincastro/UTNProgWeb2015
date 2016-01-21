<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class EmpleadoEquipo extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'empleadoequipo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['informeTecnico'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
	
	//-----------------------------------------------------
	//--------------------- metodos -----------------------
	//-----------------------------------------------------

    public function user()
    {
        return $this->belongsTo('adminsel\Models\Users'); 
    }
}
