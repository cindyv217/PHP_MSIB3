<?php
require_once 'Bidang.php';
class PersegiPanjang extends Bidang
{
    public $panjang;
    public $lebar;
    const NAMA = 'Persegi Panjang';

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang()
    {
        return (self::NAMA);
    }

    public function luasBidang()
    {
        return ($this->panjang * $this->lebar);
    }

    public function kelilingBidang()
    {
        return (2 * ($this->panjang + $this->lebar));
    }
}
