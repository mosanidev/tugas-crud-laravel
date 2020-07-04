<?php

namespace App\Http\Controllers;
use App\Models\PertanyaanModel;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index() {
        $pertanyaan = PertanyaanModel::get_all();
        // dd($pertanyaan);
        return view("pertanyaan.index", compact('pertanyaan'));
    }

    public function create() {
        return view("pertanyaan.form"); 
    }

    public function store(Request $request) {
        unset($request['_token']);
        
        $request->request->add(['tanggal_dibuat' => date('Y-m-d')]);

        $request->request->add(['created_at' => date('Y-m-d H:i:s')]);

        $new_item = PertanyaanModel::save($request->all());

        return redirect("/pertanyaan");   
    }

    public function show($id) {
        $pertanyaan = PertanyaanModel::find_by_id($id);

        return view('pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($id) {
        $pertanyaan = PertanyaanModel::find_by_id($id);

        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request) {
        $pertanyaan = PertanyaanModel::update($id, $request);
        return redirect('/pertanyaan');
    } 

    public function destroy($id) {
        $deleted = PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    } 
}
