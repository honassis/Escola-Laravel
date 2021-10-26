<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller {

 public function index() {
  return Classes::all();
 }

 public function create() {
  //
 }
 public function rules() {
  return [
   'year'      => 'required',
   'level'     => 'required',
   'serie'     => 'required',
   'turn'      => 'required',
   'school_id' => 'required',
  ];
 }

 public function store(Request $request) {

  $validator = \Validator::make($request->all(), $this->rules());

  if (!$validator->fails()) {
   Classes::create($request->all());
  } else {
   return response()->json($validator->errors(), 422);
  }
 }

 public function show($id) {
  return Classes::findOrFail($id)->join('schools',
   'school_id', '=', 'schools.id')->select('classes.*', 'schools.name as school_name')->get();

 }

 public function update(Request $request, $id) {
  $classes = Classes::findOrFail($id);
  $classes->update($request->all());
 }

}
