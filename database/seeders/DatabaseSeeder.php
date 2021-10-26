<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dompet;
use App\Models\Dompet_Status;
use App\Models\Kategori;
use App\Models\Kategori_Status;
use App\Models\Transaksi;
use App\Models\Transaksi_Status;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Dompet::create([
        	'nama'=>'Dompet Utama',
        	'referensi'=>'5270072502',
        	'status_id'=>'1',
        	'deskripsi'=>'Bank BCA'
        ]);

        Dompet::create([
        	'nama'=>'Dompet Tagihan',
        	'referensi'=>'5270072503',
        	'status_id'=>'1',
        	'deskripsi'=>'Bank BCA'
        ]);

        Dompet::create([
        	'nama'=>'Dompet Cadangan',
        	'referensi'=>'5270072504',
        	'status_id'=>'1',
        	'deskripsi'=>'Bank Permata'
        ]);

        Dompet_Status::create(['nama'=>'Aktif']);
        Dompet_Status::create(['nama'=>'Tidak Aktif'])

        Kategori::create([
        	'nama'=>'Pengeluaran',
        	'status_id'=>'1',
        	'deskripsi'=>'Kategori untuk pengeluaran'
        ]);

        Kategori::create([
        	'nama'=>'Pemasukan',
        	'status_id'=>'1',
        	'deskripsi'=>'Kategori untuk pemasukan'
        ]);

        Kategori::create([
        	'nama'=>'Lain-lain',
        	'status_id'=>'1',
        	'deskripsi'=>'Kategori untuk lain-lain'
        ]);

        Kategori_Status::create(['nama'=>'Aktif']);
        Kategori_Status::create(['nama'=>'Tidak Aktif']);

        Transaksi::create([
        	'tanggal'=>'2019-03-08', 
        	'kode'=>'WIN00000002',
        	'deskripsi'=>'Gaji bulan Januari',
        	'kategori_id'=>1,
        	'nilai'=>3500000,
        	'dompet_id'=>1,
        	'status_id'=>1
        ]);

        Transaksi::create([
        	'tanggal'=>'2019-03-08', 
        	'kode'=>'WIN00000001',
        	'deskripsi'=>'Saldo awal',
        	'kategori_id'=>1,
        	'nilai'=>100000,
        	'dompet_id'=>2,
        	'status_id'=>1
        ]);

        Transaksi::create([
        	'tanggal'=>'2019-03-08', 
        	'kode'=>'WOUT00000002',
        	'deskripsi'=>'Bayar Kos',
        	'kategori_id'=>2,
        	'nilai'=>3500000,
        	'dompet_id'=>1,
        	'status_id'=>2
        ]);

        Transaksi_Status::create(['nama'=>'Masuk']);
        Transaksi_Status::create(['nama'=>'Keluar']);

    }
}
