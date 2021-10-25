<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Models\Schools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SchoolsController extends Controller {

 public function index() {
  return DB::table('schools')
   ->select(array('schools.*', DB::raw('COUNT(students.id) as total_students')))
   ->Leftjoin('classes',
    'schools.id', '=', 'classes.school_id')
   ->Leftjoin('students_classes',
    'classes.id', '=', 'students_classes.classes_id')
   ->Leftjoin('students',
    'students_classes.student_id', '=', 'students.id')
   ->groupBy('schools.id')
   ->get();
 }

 public function create() {
  //
 }
 public function rules() {
  return [
   'name'   => 'required',
   'adress' => 'required',
  ];
 }

 public function store(Request $request) {

  $validator = \Validator::make($request->all(), $this->rules());

  if (!$validator->fails()) {
   return Schools::create($request->all());
  } else {
   return response()->json($validator->errors(), 422);
  }
 }

 public function show($id) {
  $school  = Schools::findOrFail($id);
  $classes = DB::table('classes')->select(array('classes.*'))->where('classes.school_id', $id)->get();

  return array(
   'name'    => $school->name,
   'adress'  => $school->adress,
   'classes' => $classes);
 }

 public function update(Request $request, $id) {
  $schools = Schools::findOrFail($id);
  $schools->update($request->all());
 }
}
