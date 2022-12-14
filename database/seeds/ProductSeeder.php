<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('products')->insert([
            //1
            ['nama'=>'fentanil',
            'deskripsi'=>'Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.',
            'form'=>"patch 25 mcg/jam",
            'restriction_formula'=>"10 patch/bulan",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"0",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"1"],
            ['nama'=>'hidromorfon',
            'deskripsi'=>'-',
            'form'=>"tab lepas lambat 16 mg ",
            'restriction_formula'=>"30 tab/bulan",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"0",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"1"],
            ['nama'=>'kodein',
            'deskripsi'=>'-',
            'form'=>"tab 20 mg",
            'restriction_formula'=>"30 tab/bulan",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"1"],
            //2
            ['nama'=>'asam mefenamat',
            'deskripsi'=>'-',
            'form'=>"tab 500 mg",
            'restriction_formula'=>"30 tab/bulan",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"2"],
            ['nama'=>'ibuprofen*',
            'deskripsi'=>'-',
            'form'=>"susp 200 mg/5 mL",
            'restriction_formula'=>"1 btl/kasus",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"2"],
            ['nama'=>'ketoprofen',
            'deskripsi'=>'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral',
            'form'=>"sup 100 mg",
            'restriction_formula'=>"2 sup/hari, maks 3 hari",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"0",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"2"],
            //3
            ['nama'=>'alopurinol',
            'deskripsi'=>'Tidak diberikan pada saat nyeri akut.',
            'form'=>"tab 300 mg",
            'restriction_formula'=>"30 tab/bulan",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"3"],
            ['nama'=>'kolkisin',
            'deskripsi'=>'-',
            'form'=>"tab 500 mcg",
            'restriction_formula'=>"30 tab/bulan",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"3"],
            ['nama'=>'probenesid',
            'deskripsi'=>'-',
            'form'=>"tab 500 mg",
            'restriction_formula'=>"30 tab/bulan",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"3"],
            //4
            ['nama'=>'amitriptilin',
            'deskripsi'=>'-',
            'form'=>"tab 25 mg",
            'restriction_formula'=>"30 tab/bulan",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"4"],
            ['nama'=>'gabapentin',
            'deskripsi'=>'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum',
            'form'=>"kaps 300 mg",
            'restriction_formula'=>"30 kaps/bulan",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"0",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"4"],
            ['nama'=>'karbamazepin',
            'deskripsi'=>'Hanya untuk neuralgia trigeminal.',
            'form'=>"tab 100 mg",
            'restriction_formula'=>"60 tab/bulan",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"4"],
            //5
            ['nama'=>'bupivakain',
            'deskripsi'=>'Hanya untuk neuralgia trigeminal.',
            'form'=>"inj 0,5%",
            'restriction_formula'=>"-",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"0",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"5"],
            ['nama'=>'bupivakain heavy',
            'deskripsi'=>'Khusus untuk analgesia spinal.',
            'form'=>"inj 0,5% + glukosa 8%",
            'restriction_formula'=>"-",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"0",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"5"],
            ['nama'=>'etil klorida',
            'deskripsi'=>'-',
            'form'=>"spray 100 mL",
            'restriction_formula'=>"-",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"5"],
            //6
            ['nama'=>'deksmedetomidin',
            'deskripsi'=>'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.',
            'form'=>"inj 100 mcg/mL",
            'restriction_formula'=>"-",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"0",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"6"],
            ['nama'=>'desfluran',
            'deskripsi'=>'-',
            'form'=>"ih",
            'restriction_formula'=>"-",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"0",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"6"],
            ['nama'=>'halotan',
            'deskripsi'=>'Tidak boleh digunakan berulang dan Tidak untuk pasien dengan gangguan fungsi hati.',
            'form'=>"ih",
            'restriction_formula'=>"-",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"0",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"6"],
            //7
            ['nama'=>'atropin',
            'deskripsi'=>'-',
            'form'=>"inj 0,25 mg/mL (i.v./s.k.)",
            'restriction_formula'=>"-",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"7"],
            ['nama'=>'diazepam',
            'deskripsi'=>'-',
            'form'=>"inj 5 mg/mL",
            'restriction_formula'=>"-",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"7"],
            ['nama'=>'midazolam',
            'deskripsi'=>'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum.',
            'form'=>"inj 1 mg/mL (i.v.)",
            'restriction_formula'=>"- Dosis rumatan:
                1 mg/jam (24
                mg/hari).
                - Dosis premedikasi:
                8 vial/kasus.",
                'harga'=>"5000",
                'image'=>"2",
            'faskes1'=>"0",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"7"],
            //8
            ['nama'=>'deksametason',
            'deskripsi'=>'-',
            'form'=>"inj 5 mg/mL",
            'restriction_formula'=>"20 mg/hari.",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"8"],
            ['nama'=>'difenhidramin',
            'deskripsi'=>'-',
            'form'=>"inj 10 mg/mL (i.v./i.m.)",
            'restriction_formula'=>"30 mg/hari.",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"8"],
            ['nama'=>'epinefrin (adrenalin)',
            'deskripsi'=>'-',
            'form'=>"inj 1 mg/mL",
            'restriction_formula'=>"-",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"8"],
            //9
            ['nama'=>'atropin',
            'deskripsi'=>'-',
            'form'=>"inj 0,25 mg/mL (i.v.)",
            'restriction_formula'=>"-",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"9"],
            ['nama'=>'efedrin',
            'deskripsi'=>'-',
            'form'=>"inj 50 mg/mL",
            'restriction_formula'=>"-",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"0",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"9"],
            ['nama'=>'kalsium glukonat',
            'deskripsi'=>'-',
            'form'=>"inj 10%",
            'restriction_formula'=>"-",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"9"],
            //10
            ['nama'=>'magnesium sulfat',
            'deskripsi'=>'-',
            'form'=>"serb",
            'restriction_formula'=>"-",
            'harga'=>"5000",
            'image'=>"2",
            'faskes1'=>"1",
            'faskes2'=>"1",
            'faskes3'=>"1",
            'category_id'=>"10"]
        ]);

        //
        // $arrNama = [
        //     'fentanil', 'hidromorfon', 'kodein', 'morfin', 'oksikodon', 'petidin', 'sufentanil', 'asam mefenamat',
        //     'ibuprofen*', 'ketoprofen', 'ketorolak', 'metamizol', 'natrium diklofenak', 'parasetamol', 'alopurinol', 'kolkisin',
        //     'probenesid', 'amitriptilin', 'gabapentin', 'karbamazepin', 'bupivakain', 'bupivakain heavy', 'etil klorida', 'lidokain',
        //     'ropivakain', 'deksmedetomidin', 'desfluran', 'halotan', 'isofluran', 'ketamin', 'nitrogen oksida', 'oksigen', 'propofol'
        // ];
        // // $arrDes = [''];
        // $counter = 0;
        // for ($i = 1; $i <= 11; $i++) {
        //     for ($j = 0; $j < 3; $j++) {
        //         DB::table('products')->insert([
        //             'nama' => $arrNama[$counter],
        //             'deskripsi' => Str::random(50),
        //             'category_id' => $i,
        //         ]);
        //         $counter += 1;
        //     }
        // }
    }
}
