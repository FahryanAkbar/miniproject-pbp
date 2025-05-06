<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    
    public static function staticData()
    {
        return [
            'nama' => 'Fahryan Akbar',
            'alamat' => 'Kediri, Jawa Timur',
            'ttl' => 'Kediri, 05 Mei 2005',
            'deskripsi' => 'Halo! saya adalah seorang mahasiswa semester 4 di Universitas Negeri Surabaya dengan Program Studi Teknik Informatika',
            'email' => 'fahryanakbar05@gmail.com',
            'no_hp' => '0812-0092-0007',
            'pendidikan' => 'S1 Teknik Informatika, Universitas Negeri Surabaya (2022 - sekarang)',
            'keahlian' => ['Laravel', 'PHP', 'MySQL', 'HTML', 'CSS', 'JavaScript', 'React.Js', 'Flutter'],
            'hobi' => 'Membaca dokumentasi, desain UI, bermain catur',
            'motto' => 'Terkadang, Turu adalah solusi terbaik untuk semua masalah',
            'foto' => asset('images/fahryan.jpg'),
        ];
    }
}
