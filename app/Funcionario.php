<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Funcionario.
 *
 * @author  The scaffold-interface created at 2016-10-28 02:13:47am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Funcionario extends Model
{
	
	
    protected $table = 'funcionarios';

	
	public function siem()
	{
		return $this->belongsTo('App\Siem','siem_id');
	}

	
	public function ocupacao()
	{
		return $this->belongsTo('App\Ocupacao','ocupacao_id');
	}

	
	public function pessoa()
	{
		return $this->belongsTo('App\Pessoa','pessoa_id');
	}

	
}
