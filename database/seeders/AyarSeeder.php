<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AyarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Ayar::insert([
            'site_adi'  => 'Ömer Can',
            'site_aciklama' => 'reatweb@gmail.com',
            'hakkimizda'  => 'örnek hakkımızda yazısı',
            'ozel_soz' => 'Bir millet ki resim yapmaz, bir millet ki heykel yapmaz, bir millet ki tekniğin gerektirdiği şeyleri yapmaz, itiraf etmeli ki o milletin ilerleme yolunda yeri yoktur.',
            'logo'  => 'home/img/logo.png',
            'logo_dark' => 'home/img/logodark.png',
            'mail'  => 'admin@omercn.net',
            'twitter'   => '#',
            'facebook'  => '#',
            'instagram' => '#',
            'linkedin'  => '#',
            'analatics' => '#',
        ]);
    }
}
