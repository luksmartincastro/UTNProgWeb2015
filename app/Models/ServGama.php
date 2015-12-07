<?php 

namespace adminsel\Models;

use Illuminate\Database\Eloquent\Model;

class ServGama extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'servgama';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['costoserv'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
	
	//------------- metodos --------------------
    //------------------------------------------
	public function servicio()
    {        
        return $this->belongsTo('adminsel\Models\Servicio'); 
    }
    //------------------------------------------
    //------------------------------------------
    public function gama()
    {        
        return $this->belongsTo('adminsel\Models\Gama'); 
    }
    //------------------------------------------
}