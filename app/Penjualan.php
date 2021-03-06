<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = ['Kode_Penjualan','Tanggal_Jual','Nama_Pelanggan','Barang_id','kat_id','sub_id','Jumlah','Total_Bayar'];
    public $timestamp = true;

    public function barangjual(){
    	return $this->belongsTo('App\Barang', 'Barang_id');
    }
    public function barangkategori(){
    	return $this->belongsTo('App\KategoriBarang','kat_id');
    }
    public function sub(){
    	return $this->belongsTo('App\KategoriBarang','sub_id');
    }
}
