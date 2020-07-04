<?php

namespace App\Http\Controllers;
use App\Models\JawabanModel;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index() {
        $jawaban = JawabanModel::get_all();
        return view("jawaban.index", compact('jawaban'));
    }

    public function show($id) {
        $jawaban = JawabanModel::get_jawaban_by_pertanyaan_id($id);
        // dd($jawaban);
        return view("jawaban.show", compact('jawaban'));
    }

    public function edit_form($id) {
        $jawaban = JawabanModel::get_jawaban_by_id($id);
        return view("jawaban.edit", compact('jawaban')); 
    }

    public function update($id, Request $request) {
        $pertanyaan = JawabanModel::update($id, $request);
        return redirect('/jawaban');
    } 
}
