<?php

use Illuminate\Database\Seeder;

class TabelJurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('jurusans')->insert([
          ['jurusan' => 'Teknik Informatika'],
          ['jurusan' => 'Sistem Informasi'],
          ['jurusan' => 'Teknik Sipil'],
          ['jurusan' => 'Teknik Industri'],
          ['jurusan' => 'Kesehatan Masyarakat'],
          ['jurusan' => 'Ekonomi'],
          ['jurusan' => 'Hukum'],
      ]);
    }
}
