<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class OrdenReparacion extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ordenreparacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['apeNom','telefono','anticipo','observacion'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
	
	//------------- metodos --------------------

	public function equipos()
	{
		return $this->hasMany('adminsel\Models\Equipo','equipo_idOrden_foreign');
	}
}