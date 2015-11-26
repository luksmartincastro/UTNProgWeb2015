<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'servicio';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreServicio'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
	
	//------------- metodos --------------------

	public function equipos()
    {
        return $this->hasMany('ServEquipo','servequipo_idserv_foreign');
    }
}