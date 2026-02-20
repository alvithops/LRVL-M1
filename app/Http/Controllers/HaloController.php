<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function index()
    {
        return "Halo Dari Controllernya Payung";
    }
    public function sapa($nama = "Pengunjung")
    {
        return "Selamat Datang, ". $nama;
    }
}
