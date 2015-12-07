<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'modelo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreModelo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
	
	//-----------------------------------------------------
	//--------------------- metodos -----------------------
	//-----------------------------------------------------

	public function marca()
	{
		return $this->belongsTo('adminsel\Models\Marca'); 
	}
    //-----------------------------------------
    public function repuestos()
    {
        return $this->hasMany('adminsel\Models\Repuesto','repuesto_idmod_foreign');
    }
}

