<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use function Symfony\Component\String\upper;

class TeacherController extends Controller
{
    private $code;
    private $id;
    private $name;
    private $teacher;
    private $year;
    private $teachers;
    private $updateString;

    public function index()
    {
        return view('admin.teacher.add');
    }

    public function create(Request $request)
    {

        $this->teacher = Teacher::orderby('id','desc')->first();
        if($this->teacher)
        {
            $this->id = sprintf("%04d", $this->teacher->id + 1);
        }
        else
        {
            $this->id = sprintf("%04d", 1);;
        }

        $this->updateString = strtoupper(preg_replace('/[^A-Za-z0-9]/',"",$request->name));
        $this->name = strtoupper(substr(ltrim($this->updateString,"MD"),0,3));
        $this->year = date('Y');
        $this->code = $this->name.$this->year.$this->id;

        Teacher::newTeacher($request, $this->code);
        return redirect('/add-teacher')->with('message', 'Teacher info created successfully');
    }

    public function manage()
    {
        $this->teachers = Teacher::orderBy('id', 'desc')->get();

        return view('admin.teacher.manage', ['teachers' => $this->teachers]);

    }

    public function edit($id)
    {
        $this->teacher = Teacher::find($id);
        return view('admin.teacher.edit', ['teacher' => $this->teacher]);
    }
    public function delete($id)
    {
        return $id;
    }




}
