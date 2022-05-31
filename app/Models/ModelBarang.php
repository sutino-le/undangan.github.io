<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBarang extends Model
{
    protected $table            = 'barang';
    protected $primaryKey       = 'brgid';
    protected $allowedFields    = [
        'brgnama', 'brgkat', 'brgsubkat', 'brgharga', 'brgstok', 'brggambar', 'brgdeskripsi'
    ];


    public function tampildata()
    {
        return $this->table('barang')->join('kategori', 'brgkat=katid')->join('subkategori', 'brgsubkat=subkatid')->get();
    }


    public function detailbarang($brgid)
    {
        return $this->table('barang')->join('kategori', 'brgkat=katid')->join('subkategori', 'brgsubkat=subkatid')->orlike('brgid', $brgid);
    }
}
