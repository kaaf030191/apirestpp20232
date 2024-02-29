<?php
namespace App\Http\Controllers;
 
use App\Models\TTeacher;

class TeacherController extends Controller
{
	public function actionGetAll()
	{
		$listTTeacher = TTeacher::with(['tassistance' => function($q1)
		{
			$q1->whereRaw('beginDate<=? and endDate>=?', [date('Y-m-d H:i:s'), date('Y-m-d H:i:s')])->orderBy('endDate', 'desc');
		}])->get();

		$data = new \stdClass();

		$data->listTTeacher = $listTTeacher;

		return response()->json($data);
	}
}
?>