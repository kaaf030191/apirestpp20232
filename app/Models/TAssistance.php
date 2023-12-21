<?php 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class TAssistance extends Model
{
	protected $table='tassistance';
	protected $primarykey='idAssistance';
	protected $keyType='string';

	public $incrementing=false;
	public $timestamps=false;

	public function TTeacher()
	{
		return $this->belongsTo('App\Models\TTeacher', 'idTeacher', 'idTeacher');
	}
}
?>