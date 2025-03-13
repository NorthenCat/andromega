<?php

namespace Database\Seeders;

use App\Models\SettingWeb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingWebSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'nama_website' => 'ANDROMEGA - IT Consulting, Networking',
            'email' => 'info@andromega.co.id',
            'telepon' => 'Admin (+62) 817 5228 844',
            'alamat' => 'Jl. Panjang 2 Blok AU 10, Puri Bojong Lestari Pabuaran - Bojong Gede Kabupaten Bogor - Jawa Barat Indonesia',

            'meta_author' => 'ANDROMEGA',
            'meta_title' => 'ANDROMEGA - IT Consulting, Networking',
            'meta_description' => 'ANDROMEGA is a leading IT consulting and networking solutions provider in Indonesia. We offer comprehensive IT services, network infrastructure solutions, and expert consulting to help businesses achieve their technological goals.',
            'meta_keyword' => 'IT consulting, networking solutions, network infrastructure, IT services, managed services, technology consulting, Indonesia IT company, enterprise networking, system integration, IT support',
        ];

        SettingWeb::create($data);
    }
}
