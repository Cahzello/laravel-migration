<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){
        return "Berhasil di proses";
    }

    public function insertSql(){
        $result = DB::insert("INSERT INTO mahasiswas(nim, nama, tanggal_lahir, ipk) VALUES ('1900306', 'Rizky', '2006-03-24', 3.5)");
        dump($result);
    }
}
