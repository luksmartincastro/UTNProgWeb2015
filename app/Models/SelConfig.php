<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class SelConfig extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'selconfig';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['razonSocial','razonSocial'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
	//------------------------------------------
	//------------- metodos --------------------
    //------------------------------------------
	public function servicios()
    {
        return $this->hasMany('adminsel\Models\Servicio','servicio_idsel_foreign'); 
    }
    //------------------------------------------
    public function gamas()
    {
        return $this->hasMany('adminsel\Models\Gama','gamaequipo_idsel_foreign'); 
    }
}