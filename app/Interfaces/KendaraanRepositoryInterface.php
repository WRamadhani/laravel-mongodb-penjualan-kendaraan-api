<?php

namespace App\Interfaces;

interface KendaraanRepositoryInterface
{
    public function getAllKendaraan();
    public function getAllMotor();
    public function getAllMobil();
    public function jual(array $orderDetails);
    public function getLaporanPenjualan($orderId);
}
