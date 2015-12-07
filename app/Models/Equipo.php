<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'equipo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['imei','fechaEntrega','estadoReparacion',
                           'estadoGarantia','estadoPago','presupEstimado',
                           'presupFinal','created_at','updated_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
	
	//------------------------------------------
    //------------- metodos --------------------
    //------------------------------------------

    /*public function ordenreparacion()
    {
        return $this->belongsTo('OrdenReparacion'); 
    }*/
    //-----------------------------------------
    public function gama()
    {
        return $this->belongsTo('adminsel\Models\Gama'); 
    }
    //-----------------------------------------
    public function modelo()
    {
        return $this->belongsTo('adminsel\Models\Modelo');   
    }   
    //-----------------------------------------
    //-----------------------------------------
    public function servicios()
    {
        return $this->hasMany('ServEquipo','servequipo_ideq_foreign');  
    }
    //-----------------------------------------
    /*public function empleados()
    {
        return $this->hasMany('EmpleadoEquipo','empleadoequipo_ideq_foreign'); 
    }*/
    //-----------------------------------------
    public function accesorios()
    {
        return $this->hasMany('EquipoAccesorio','equipoaccesorio_ideq_foreign'); 
    }
    //-----------------------------------------
    public function fallas()
    {
        return $this->hasMany('EquipoFalla','equipofalla_ideq_foreign'); 
    }   
    //-----------------------------------------
    /*public function historiales()
    {
        return $this->hasMany('Historial','historial_ideq_foreign'); 
    }*/
    //-----------------------------------------
    public function repuestos()
    {
        return $this->hasMany('EquipoRepuesto','equiporepuesto_ideq_foreign'); 
    }
}