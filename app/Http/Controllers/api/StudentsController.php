<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Students;
use App\Models\StudentsClasses;
use Illuminate\Http\Request;

class StudentsController extends Controller {

 public function index() {
  return Students::all();
 }

 public function create() {

 }
 public function rules() {
  return [
   'name'       => 'required',
   'email'      => 'required',
   'birthday'   => 'required',
   'tel'        => 'required',
   'genre'      => 'required',
   'classes_id' => 'required',
  ];
 }

 public function store(Request $request) {
  $validator = \Validator::make($request->all(), $this->rules());

  if (!$validator->fails()) {
   $student = Students::create([
    'name'     => $request->input('name'),
    'email'    => $request->input('email'),
    'birthday' => $request->input('birthday'),
    'tel'      => $request->input('tel'),
    'genre'    => $request->input('genre')]);
   StudentsClasses::create([
    'student_id' => $student->id,
    'classes_id' => $request->input('classes_id'),
   ]);
  } else {
   return response()->json($validator->errors(), 422);
  }

 }

 public function show($id) {
  return Students::findOrFail($id);
 }

 public function edit($id) {
  //
 }

 public function update(Request $request, $id) {
  $students = Students::findOrFail($id);
  $students->update($request->all());
 }

 public function destroy($id) {
  //
 }
}
