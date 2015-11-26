<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'marca';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreMarca'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
	
	//------------- metodos --------------------

	public function modelos()
	{
		return $this->hasMany('adminsel\Models\Modelo','modelo_idmarca_foreign');
	}
}




