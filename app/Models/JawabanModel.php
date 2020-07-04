<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class JawabanModel {

    public static function get_jawaban_by_pertanyaan_id($id) {
        $jawaban = DB::table('jawaban')
                        ->select('jawaban.id as id', 
                                 'pertanyaan.isi as pertanyaan', 
                                 'jawaban.isi as jawaban', 
                                 'pertanyaan.id as pertanyaan_id',
                                 'jawaban.tanggal_dibuat',
                                 'jawaban.tanggal_diperbarui')
                        ->join('pertanyaan', 'jawaban.pertanyaan_id', '=', 'pertanyaan.id')
                        ->where('pertanyaan.id', $id)
                        ->first();
        return $jawaban;
    }

    public static function get_jawaban_by_id($id) {
        $jawaban = DB::table('jawaban')
                        ->select('jawaban.id as id', 
                                 'pertanyaan.isi as pertanyaan', 
                                 'jawaban.isi as jawaban', 
                                 'pertanyaan.id as pertanyaan_id',
                                 'jawaban.tanggal_dibuat',
                                 'jawaban.tanggal_diperbarui')
                        ->join('pertanyaan', 'jawaban.pertanyaan_id', '=', 'pertanyaan.id')
                        ->where('jawaban.id', $id)
                        ->first();
        return $jawaban;
    }

    public static function get_all() {
        $jawaban =DB::table('jawaban')
                        ->select('jawaban.id as id', 
                                'pertanyaan.isi as pertanyaan', 
                                'jawaban.isi as jawaban', 
                                'pertanyaan.id as pertanyaan_id')
                        ->join('pertanyaan', 'jawaban.pertanyaan_id', '=', 'pertanyaan.id')
                        ->get();
        return $jawaban;
    }

    public static function update($id, Request $request) {
        $pertanyaan = DB::table('jawaban')
                        ->where('id', $id)
                        ->update([
                            'isi' => $request->jawaban,
                            'tanggal_diperbarui' => date("Y-m-d"),
                            'updated_at' => date("Y-m-d h:i:s")
                        ]);
        return $pertanyaan;
    }

}



?>