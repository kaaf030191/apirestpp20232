<?php 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class TTeacher extends Model
{
	protected $table='tteacher';
	protected $primarykey='idTeacher';
	protected $keyType='string';

	public $incrementing=false;
	public $timestamps=false;

	public function TAssistance()
	{
		return $this->hasMany('App\Models\TAssistance', 'idTeacher', 'idTeacher');
	}
}
?>