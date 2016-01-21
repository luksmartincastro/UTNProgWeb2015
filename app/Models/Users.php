<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

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
        return $this->hasMany('adminsel\Models\EquipoAccesorio','empleadoequipo_ideqc_foreign');
    }
}
