<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class Accesorio extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'accesorio';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreAccesorio'];

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
        return $this->hasMany('EquipoAccesorio','equipoaccesorio _idacc_foreign');
    }
}
