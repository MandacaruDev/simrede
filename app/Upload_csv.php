<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Upload_csv.
 *
 * @author  The scaffold-interface created at 2017-02-08 12:48:32pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Upload_csv extends Model
{
	
	
    protected $table = 'upload_csvs';

	
	public function siem()
	{
		return $this->belongsTo('App\Siem','siem_id');
	}

	
}
