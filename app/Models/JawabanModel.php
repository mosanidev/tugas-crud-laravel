<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel {

    public static function get_jawaban_by_id($id) {
        $jawaban = DB::table('jawaban')
                        ->join('pertanyaan', 'jawaban.pertanyaan_id', '=', 'pertanyaan.id')
                        ->select('jawaban.id', 'pertanyaan.isi as pertanyaan', 'jawaban.isi as jawaban', )
                        ->where('pertanyaan.id', $id)->first();
        return $jawaban;
    }

}



?>