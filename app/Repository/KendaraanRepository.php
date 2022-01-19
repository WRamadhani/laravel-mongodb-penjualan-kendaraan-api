<?php

namespace App\Repository;

use App\Models\User;
use App\Models\Mobil;
use App\Models\Motor;
use App\Models\Order;
use App\Interfaces\KendaraanRepositoryInterface;

class KendaraanRepository implements KendaraanRepositoryInterface
{
    public function getAllKendaraan()
    {
        $mobil = Mobil::all();
        $motor = Motor::all();

        return ['mobil' => $mobil, 'motor' => $motor];
    }

    public function getAllMobil()
    {
        return Mobil::all();
    }

    public function getAllMotor()
    {
        return Motor::all();
    }

    public function jual($orderDetails)
    {
        $id = $orderDetails['_id'];
        $jumlah = $orderDetails['jumlah'];
        // return $id;

        $result = Motor::find($id);
        if (is_null($result)) {
            $result = Mobil::find($id);
        }

        $result->stock = $result->stock - $jumlah;

        if ($result->stock < 0) {
            $result->stock = 220;
            return response()->json(['message' => "Stock Empty"]);
        } else {
            $result->save();
            if ($result->save()) {
                Order::create([
                    'user_id' => auth()->id(),
                    'kendaraan_id' => $result->_id,
                    'jumlah' => $result->stock,
                ]);
            }
            return $result;
        }
    }

    public function getLaporanPenjualan($kendaraanId)
    {
        $order = Order::where('kendaraan_id', '=', $kendaraanId)->get();
        // return $order;
        if ($order->isEmpty()) {
            return response()->json([
                'message' => 'This Vehicle have not been sold yet.',
            ]);
        } else {
            $kendaraan = Motor::find($kendaraanId);
            if (is_null($kendaraan)) {
                $kendaraan = Mobil::find($kendaraanId);
            }

            return [
                'transaksi' => $order,
                'kendaraan' => $kendaraan,
            ];
        }
    }
}
