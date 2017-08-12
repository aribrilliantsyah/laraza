<?php

use Illuminate\Database\Seeder;
use App\Ketetapan;

class KetetapansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $beras = new Ketetapan();
        $beras->jenis = 'Beras';
        $beras->ketetapan = '2.5';
        $beras->save();

        $beras = new Ketetapan();
        $beras->jenis = 'Uang';
        $beras->ketetapan = '32400';
        $beras->save();

    }
}
