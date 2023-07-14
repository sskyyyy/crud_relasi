<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pengajuankelas extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'kelas' =>'XI-RPL-A'
        ]);

        DB::table('kelas')->insert([
            'kelas' =>'XI-RPL-C'
        ]);

        DB::table('kelas')->insert([
            'kelas' =>'XI-RPL-B'
        ]);


        DB::table('pengajuan')->insert(
            [
                'nama' => 'Azam',
                'kelas' => '1',
                'alamat_perusahaan' =>'Kamarung',
                'tanggal_pengajuan' =>'2023-05-05',
        ]);
        DB::table('pengajuan')->insert(
            [

                'nama' => 'Kekey',
                'kelas' => '1',
                'alamat_perusahaan' =>'Baros',
                'tanggal_pengajuan' =>'2023-05-03',
        ]);
        DB::table('pengajuan')->insert(
            [
                'nama' => 'Adi',
                'kelas' => '1',
                'alamat_perusahaan' =>'Rinjani',
                'tanggal_pengajuan' =>'2023-05-04',
        ]);
    }
}

