<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function kaprodiDashboard()
    {
        return view('kaprodi.dashboard'); // Halaman khusus Kaprodi
    }

    public function dosenDashboard()
    {
        return view('dosen.dashboard'); // Halaman khusus Dosen
    }

    public function mahasiswaDashboard()
    {
        return view('mahasiswa.dashboard'); // Halaman khusus Mahasiswa
    }
}
