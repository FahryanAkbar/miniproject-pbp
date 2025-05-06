<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    public static function staticData()
    {
        return [
            'nama' => 'Fahryan Akbar',
            'judul' => 'Full Stack Developer',
            'deskripsi_singkat' => 'Spesialis pengembangan web dengan pengalaman 3+ tahun membangun aplikasi menggunakan Laravel dan React.js',
            'proyek' => [
                [
                    'nama' => 'Sistem Informasi Manajemen Rumah Sakit (SIMRS)',
                    'deskripsi' => 'Website yang digunakan untuk mengelola semua kebutuhan operasional sebuah Rumah Sakit',
                    'teknologi' => ['Laravel', 'MySQL', 'Tailwind CSS', 'MongoDB'],
                    'tahun' => 2023,
                    'foto-porto' => asset('images/kucingg.jpg'),
                    'link' => asset('images/kucingg.jpg'),
                    'gambar' => 'SIMRS.jpg'
                ],
                [
                    'nama' => 'My - To Do List',
                    'deskripsi' => 'Website Serupa Notion Untuk Tracking Habbit Sehari-hari',
                    'teknologi' => ['Laravel', 'Livewire', 'Midtrans API', 'Bootstrap'],
                    'tahun' => 2023,
                    'foto-porto' => asset('images/kucingg.jpg'),
                    'link' => asset('images/kucingg.jpg'),
                    'gambar' => 'My-To Do List.jpg'
                ],
                [
                    'nama' => 'Sembakoku',
                    'deskripsi' => 'Program Multi Platform untuk Membeli Sembako Secara Digital',
                    'teknologi' => ['Laravel', 'Livewire', 'Midtrans API', 'Bootstrap'],
                    'tahun' => 2024,
                    'foto-porto' => asset('images/kucingg.jpg'),
                    'link' => asset('images/kucingg.jpg'),
                    'gambar' => 'ecommerce-umkm.jpg'
                ],
                [
                    'nama' => 'Sigma Academy',
                    'deskripsi' => 'Website Online Course Berbayar yang serupa dengan Ruangguru dan Udemy',
                    'teknologi' => ['Laravel', 'Livewire', 'Midtrans API', 'Bootstrap'],
                    'tahun' => 2024,
                    'foto-porto' => asset('images/kucingg.jpg'),
                    'link' => asset('images/kucingg.jpg'),
                    'gambar' => 'ecommerce-umkm.jpg'
                ]
            ],
            'skill' => [
                'Bahasa Pemrograman' => ['PHP', 'JavaScript', 'Python'],
                'Framework' => ['Laravel', 'Vue.js', 'React', 'Flutter'],
                'Database' => ['MySQL', 'PostgreSQL', 'MongoDB'],
                'Lainnya' => ['Docker', 'Git', 'AWS', 'CI/CD']
            ],
            'pengalaman' => [
                [
                    'posisi' => 'Web Developer',
                    'perusahaan' => 'PT. Indo Media Teknologi',
                    'periode' => '2021 - 2022',
                    'deskripsi' => 'Mengembangkan dan memelihara aplikasi web perusahaan'
                ],
                [
                    'posisi' => 'Freelance Developer (Kerjain Project Temen)',
                    'perusahaan' => 'Self-Employed',
                    'periode' => '2022 - sekarang',
                    'deskripsi' => 'Membangun aplikasi web sesuai kebutuhan klien'
                ]
            ],
            'pendidikan' => [
                [
                    'institusi' => 'Universitas Negeri Surabaya',
                    'gelar' => 'S1 Teknik Informatika',
                    'tahun' => '2022 - Sekarang'
                ],
                [
                    'institusi' => 'SMAN 1 Grogol',
                    'gelar' => 'Matematika, Ilmu Pengetahuan Alam',
                    'tahun' => '2020 - 2023'
                ]
            ],
            'sertifikasi' => [
                [
                    'nama' => 'Laravel Certified Developer',
                    'penerbit' => 'Laravel',
                    'tahun' => 2023
                ],
                [
                    'nama' => 'AWS Certified Cloud Practitioner',
                    'penerbit' => 'Amazon Web Services',
                    'tahun' => 2022
                ]
            ],
            'kontak' => [
                'email' => 'fahryanakbar05@gmail.com',
                'telepon' => '+6281200920007',
                'website' => 'https://fahryanakbar.my.id',
                'github' => 'github.com/fahryanakbar',
                'linkedin' => 'linkedin.com/in/fahryanakbar'
            ]
        ];
    }
}
