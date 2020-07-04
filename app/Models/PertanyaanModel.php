<?php 

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PertanyaanModel {
    public static function get_all() {
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function save($data) {
        $new_pertanyaan = DB::table('pertanyaan')->insert($data);
        return $new_pertanyaan;
    }

    public static function find_by_id($id) {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return $pertanyaan;
    } 

    public static function update($id, Request $request) {
        $pertanyaan = DB::table('pertanyaan')
                        ->where('id', $id)
                        ->update([
                            'judul' => $request->judul,
                            'isi' => $request->isi,
                            'tanggal_diperbarui' => date("Y-m-d"),
                            'updated_at' => date("Y-m-d h:i:s")
                        ]);
        return $pertanyaan;
    }

    public static function destroy($id) {
        $deleted = DB::table('pertanyaan')
                        ->where('id', $id)
                        ->delete();
        return $deleted;
    }
}