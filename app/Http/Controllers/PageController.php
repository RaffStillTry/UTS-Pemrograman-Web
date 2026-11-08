<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function ambilTugas()
    {
        return [
            [
                'nama'     => 'UTS LKM',
                'matkul'   => 'Kecerdasan Buatan',
                'deadline' => '11 November 2026',
                'status'   => 'Belum Dimulai',
            ],
            [
                'nama'     => 'Laporan Akhir Proyek',
                'matkul'   => 'Analisis Design Perangkat Lunak',
                'deadline' => '28 November 2026',
                'status'   => 'Dikerjakan',
            ],
            [
                'nama'     => 'Laporan Akhir Proyek',
                'matkul'   => 'Pertanian Industrial Berkelanjutan',
                'deadline' => '10 November 2026',
                'status'   => 'Dikerjakan',
            ],
            [
                'nama'     => 'Laporan Proyek Akhir',
                'matkul'   => 'Struktur Data',
                'deadline' => '5 November 2025',
                'status'   => 'Selesai',
            ],
            [
                'nama'     => 'Presentasi Jaringan Komputer',
                'matkul'   => 'Jaringan Komputer',
                'deadline' => '3 November 2025',
                'status'   => 'Selesai',
            ],
        ];
    }

    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'Raff' && $password === 'ayo123') {

            session([
                'sudah_login' => true,
                'username'    => $username,
            ]);

            return redirect()->route('dashboard', ['username' => $username]);
        }

        return back()
            ->with('error', 'Username atau password salah!')
            ->withInput($request->only('username'));
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();      
        $request->session()->regenerateToken();  

        return redirect()->route('login');
    }


    public function dashboard(Request $request)
    {
        if (!session('sudah_login')) {
            return redirect()->route('login');
        }

        $username = $request->query('username', session('username'));

        $tugas = $this->ambilTugas();

        $total = count($tugas);
        $selesai = 0;
        $dikerjakan = 0;
        $belumDimulai = 0;

        foreach ($tugas as $item) {
            if ($item['status'] === 'Selesai') {
                $selesai++;
            } elseif ($item['status'] === 'Dikerjakan') {
                $dikerjakan++;
            } else {
                $belumDimulai++;
            }
        }

        $tugasTerbaru = array_slice($tugas, 0, 3);

        // Kirim data ke view
        return view('dashboard', [
            'username'      => $username,
            'total'         => $total,
            'selesai'       => $selesai,
            'dikerjakan'    => $dikerjakan,
            'belumDimulai'  => $belumDimulai,
            'tugasTerbaru'  => $tugasTerbaru,
        ]);
    }

    public function tasks()
    {
        if (!session('sudah_login')) {
            return redirect()->route('login');
        }

        return view('pengelolaan', [
            'tugas' => $this->ambilTugas(),
        ]);
    }

    public function profile(Request $request)
    {
        if (!session('sudah_login')) {
            return redirect()->route('login');
        }

        $username = $request->query('username', session('username'));

        $profil = [
            'nama'   => 'Rafi Rangga Pratama',
            'nim'    => '252410103015',
            'status' => 'Mahasiswa',
            'prodi'  => 'Informatika',
        ];

        return view('profile', [
            'username' => $username,
            'profil'   => $profil,
        ]);
    }
}