<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index(){
        return "Halo ini adalah method index, dalam controller ManagementUser.";
        return "Method ini nantinya akan digunakan untuk mengambil semua data user";
        $nama = "Wati Darmawan";

        $pelajaran = ["pemrograman & Algoritma"];

        return view('home', compact('nama','pelajaran'));
    }
}