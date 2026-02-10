<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'E-Commerce Website',
                'description' => 'Aplikasi e-commerce lengkap dengan sistem pembayaran dan manajemen produk',
                'tech' => ['Laravel', 'MySQL', 'Bootstrap'],
                'image' => 'project1.jpg',
                'link' => '#'
            ],
            [
                'title' => 'Task Management App',
                'description' => 'Aplikasi manajemen tugas dengan fitur kolaborasi tim',
                'tech' => ['Vue.js', 'Laravel API', 'PostgreSQL'],
                'image' => 'project2.jpg',
                'link' => '#'
            ],
            [
                'title' => 'Company Profile',
                'description' => 'Website profil perusahaan dengan CMS admin panel',
                'tech' => ['PHP', 'MySQL', 'jQuery'],
                'image' => 'project3.jpg',
                'link' => '#'
            ]
        ];

        $skills = [
            ['name' => 'PHP', 'level' => 90],
            ['name' => 'Laravel', 'level' => 85],
            ['name' => 'JavaScript', 'level' => 80],
            ['name' => 'MySQL', 'level' => 85],
            ['name' => 'Vue.js', 'level' => 75],
            ['name' => 'Bootstrap', 'level' => 90]
        ];

        return view('portfolio', compact('projects', 'skills'));
    }

        public function proyek()
    {
        $projects = [
            [
                'title' => 'SEHATI App',
                'description' => 'Aplikasi pendamping kehamilan untuk monitoring kesehatan ibu, edukasi, dan pencatatan kebutuhan selama masa kehamilan',
                'tech' => ['Laravel', 'MySQL', 'Flutter', 'UML', 'AWS', 'Flask','Railway Deploy Service'],
                'image' => 'https://porto-bucket-php.s3.ap-southeast-2.amazonaws.com/images/Sehati.jpg',
                'link' => 'https://sehatiapp-production.up.railway.app/',
                'role' => 'System Analyst & QA',
                'duration' => '4 Bulan',
                'highlights' => [
                    'Menyusun user requirement & alur bisnis aplikasi',
                    'Membuat test case UAT/SIT dan skenario pengujian',
                    'Koordinasi deployment dan monitoring rilis'
                ],
                'result' => 'Aplikasi stabil saat rilis dan kebutuhan pengguna terpetakan jelas.'
            ],
            [
                'title' => 'Stacking Machine Learning',
                'description' => 'Riset model stacking yang menggabungkan beberapa algoritma ML ke dalam satu meta model untuk meningkatkan akurasi',
                'tech' => ['XGBoost', 'Random Forest', 'Machine Learning'],
                'image' => 'https://porto-bucket-php.s3.ap-southeast-2.amazonaws.com/paperr.png',
                'link' => 'https://amazon-datazone-sehatiapp.s3.ap-southeast-1.amazonaws.com/public/Paper.pdf',
                'role' => 'Researcher',
                'duration' => '2 Bulan',
                'highlights' => [
                    'Eksperimen komposisi base model dan meta model',
                    'Evaluasi performa dengan cross-validation',
                    'Analisis metrik akurasi dan generalisasi model'
                ],
                'result' => 'Peningkatan akurasi dibanding model tunggal.'
            ],
            [
                'title' => 'Design System Aplikasi Internal',
                'description' => 'Kumpulan komponen UI, guideline, dan token desain untuk konsistensi tampilan di aplikasi internal',
                'tech' => ['Figma'],
                'image' => 'https://porto-bucket-php.s3.ap-southeast-2.amazonaws.com/Design.png',
                'link' => '#',
                'role' => 'UI/UX Designer',
                'duration' => '1.5 Bulan',
                'highlights' => [
                    'Membuat komponen reusable dan variant library',
                    'Menyusun design guideline dan token warna/typography',
                    'Sinkronisasi dengan tim dev untuk implementasi'
                ],
                'result' => 'Konsistensi UI meningkat dan proses desain lebih cepat.',
                'disabled' => true
            ],
            [
                'title' => 'Test Case Production Dummy',
                'description' => 'Dokumentasi test case produksi dan contoh bug report manual untuk kebutuhan QA',
                'tech' => ['Test Case', 'Bug Report'],
                'image' => 'https://porto-bucket-php.s3.ap-southeast-2.amazonaws.com/images/tcp.png',
                'link' => 'https://amazon-datazone-sehatiapp.s3.ap-southeast-1.amazonaws.com/public/TCP.xlsx',
                'role' => 'Quality Assurance',
                'duration' => '1 Bulan',
                'highlights' => [
                    'Menulis test case untuk skenario kritikal produksi',
                    'Menyusun bug report manual yang terstruktur',
                    'Validasi ulang defect bersama developer'
                ],
                'result' => 'Proses testing lebih terarah dan mudah diaudit.'
            ],

            [
                'title' => 'Nanobot Tele',
                'description' => 'Bot Telegram untuk membuat watchlist saham Indonesia, mengatur jadwal kalender, dan automasi Google Workspace',
                'tech' => ['Telegram Bot', 'Google Calendar API', 'Google Workspace'],
                'image' => 'https://porto-bucket-php.s3.ap-southeast-2.amazonaws.com/nanobot.png',
                'link' => '#',
                'role' => 'Automation Engineer',
                'duration' => '2 Bulan',
                'highlights' => [
                    'Fitur watchlist saham IDX dengan notifikasi',
                    'Sinkronisasi jadwal kalender dan reminder otomatis',
                    'Automasi workflow Google Workspace untuk tim'
                ],
                'result' => 'Manajemen informasi dan jadwal jadi lebih efisien.',
                'disabled' => true
            ],
            
        ];
        
        return view('proyek', compact('projects'));
    }
}
