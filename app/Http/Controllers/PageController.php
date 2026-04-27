<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->username;

        $tugas = [
            [
                'matkul' => 'Pemrograman Web',
                'judul' => 'UTS Laravel Blade',
                'deadline' => '27 April 2026',
                'status' => 'Belum Selesai',
                'prioritas' => 'Tinggi'
            ],
            [
                'matkul' => 'Basis Data',
                'judul' => 'Perancangan ERD Sistem Akademik',
                'deadline' => '29 April 2026',
                'status' => 'Proses',
                'prioritas' => 'Sedang'
            ],
            [
                'matkul' => 'UI/UX',
                'judul' => 'Prototype Aplikasi Mobile',
                'deadline' => '1 Mei 2026',
                'status' => 'Selesai',
                'prioritas' => 'Rendah'
            ]
        ];

        return view('dashboard', compact('username', 'tugas'));
    }

    public function pengelolaan()
    {
        $tugas = [
            [
                'matkul' => 'Pemrograman Web',
                'judul' => 'UTS Laravel Blade',
                'deadline' => '27 April 2026',
                'status' => 'Belum Selesai',
                'prioritas' => 'Tinggi'
            ],
            [
                'matkul' => 'Basis Data',
                'judul' => 'Perancangan ERD Sistem Akademik',
                'deadline' => '29 April 2026',
                'status' => 'Proses',
                'prioritas' => 'Sedang'
            ],
            [
                'matkul' => 'UI/UX',
                'judul' => 'Prototype Aplikasi Mobile',
                'deadline' => '1 Mei 2026',
                'status' => 'Selesai',
                'prioritas' => 'Rendah'
            ]
        ];

        return view('pengelolaan', compact('tugas'));
    }

    public function profile(Request $request)
    {
        $username = $request->username;

        return view('profile', compact('username'));
    }
}