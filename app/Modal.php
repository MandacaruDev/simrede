<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Modal.
 *
 * @author  The scaffold-interface created at 2016-12-26 09:23:40pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Modal extends Model
{
	
	
    protected $table = 'modals';

	
	public function anulada()
	{
		return $this->belongsTo('App\Anulada','anulada_id');
	}

	
	public function ocupacao()
	{
		return $this->belongsTo('App\Ocupacao','ocupacao_id');
	}

	
	public function pessoa()
	{
		return $this->belongsTo('App\Pessoa','pessoa_id');
	}

	
	public function siem()
	{
		return $this->belongsTo('App\Siem','siem_id');
	}

	
	public function user()
	{
		return $this->belongsTo('App\User','user_id');
	}

	
}
