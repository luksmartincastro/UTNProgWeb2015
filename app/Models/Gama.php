<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class Gama extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'gamaequipo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreGama','descripcion','costoManoObra'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
	
	//------------- metodos --------------------
    //------------------------------------------
	public function modelos()
	{
		return $this->hasMany('adminsel\Models\Modelo','modelo_idmarca_foreign');
	}
    //------------------------------------------
    public function servicios()
    {
        return $this->hasMany('adminsel\Models\ServGama','servgama_idgam_foreign');
    }
    //-----------------------------------------
    public function selconfig()
    {
        return $this->belongsTo('adminsel\Models\SelConfig'); 
    }
    //-----------------------------------------
    public function equipos()
    {
        return $this->hasMany('adminsel\Models\Equipo','equipo_idGama_foreign');
    }
}