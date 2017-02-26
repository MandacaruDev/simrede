<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Escola.
 *
 * @author  The scaffold-interface created at 2016-10-28 02:10:40am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Escola extends Model
{
	
	
    protected $table = 'escolas';

	
	public function siem()
	{
		return $this->belongsTo('App\Siem','siem_id');
	}

	
	public function pessoa()
	{
		return $this->belongsTo('App\Pessoa','pessoa_id');
	}
    
	public function user()
	{
		return $this->belongsTo('App\User','user_id');
	}

}
