<?php

namespace App\Exports;

use App\Models\Buku;
use Maatwebsite\Excel\Concerns\FromCollection;

class BukuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Buku::join('buku', 'rak_buku.id_buku', 'buku.id' )
        ->join('jenis_buku', 'rak_buku.id_jenis_buku', 'jenis_buku.id')
        ->select('rak_buku.id', 'buku.judul', 'jenis_buku.jenis','buku.tahun_terbit')
        ->get();
    }
}
