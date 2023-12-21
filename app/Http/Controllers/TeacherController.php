<?php
namespace App\Http\Controllers;
 
use App\Models\TTeacher;

class TeacherController extends Controller
{
	public function actionGetAll()
	{
		$listTTeacher = TTeacher::with(['tassistance' => function($q1)
		{
			$q1->whereRaw('mid(beginDate, 1, 10)=?', [date('Y-m-d')]);
		}])->get();

		$data = new \stdClass();

		$data->listTTeacher = $listTTeacher;

		return response()->json($data);
	}
}
?>