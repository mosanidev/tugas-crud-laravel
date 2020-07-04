<?php

namespace App\Http\Controllers;
use App\Models\JawabanModel;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index($id) {
        $jawaban = JawabanModel::get_jawaban_by_id($id);
        // dd($jawaban);
        return view("jawaban.index", compact('jawaban'));
    }

    public function create() {
        return view("jawaban.form"); 
    }
}
