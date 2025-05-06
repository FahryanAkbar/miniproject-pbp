<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public static function staticData()
    {
        return [
            'email_utama' => 'fahryanakbar05@gmail.com',
            'email_alternatif' => 'second.fahryanakbar@gmail.com',
            'telepon' => '+62 812-8299-0007',
            'whatsapp' => '+62 812-8299-0007',
            'telegram' => '@fahryanakbar',
            'alamat_kantor' => 'Jl. Teknik Informatika No. 45, Kampus UNESA, Surabaya',
            'alamat_rumah' => 'Jl. Batik Madrim No. 175, Kediri, Jawa Timur',
            'linkedin' => 'linkedin.com/in/fahryanakbar',
            'github' => 'github.com/fahryanakbar',
            'instagram' => '@Ryanakbar55',
            'jam_operasional' => 'Senin-Jumat: 08:00 - 17:00 WIB',
            'form_kontak' => 'https://forms.gle/fahryancontactform',
            'peta_embed' => '<iframe src="https://maps.google.com/maps?q=Gedung Rektorat Universitas Negeri Surabaya&output=embed" width="100%" height="300" frameborder="0" style="border:0"></iframe>'
        ];
    }
}
