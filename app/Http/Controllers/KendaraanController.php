<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Motor;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Repository\KendaraanRepository;
use App\Interfaces\KendaraanRepositoryInterface;
use Illuminate\Http\Resources\Json\JsonResource;

class KendaraanController extends Controller
{
    private KendaraanRepositoryInterface $kendaraanRepository;

    public function __construct(KendaraanRepositoryInterface $kendaraanRepository)
    {
        $this->kendaraanRepository = $kendaraanRepository;
    }

    public function index()
    {
        return response()->json([
            'data' => $this->kendaraanRepository->getAllKendaraan(),
        ]);
    }

    public function getAllMotor()
    {
        return response()->json([
            'data' => $this->kendaraanRepository->getAllMotor()
        ]);
    }

    public function getAllMobil()
    {
        return response()->json([
            'data' => $this->kendaraanRepository->getAllMobil()
        ]);
    }

    public function jual(Request $request)
    {
        $orderDetails = $request->only([
            '_id',
            'jumlah'
        ]);

        return response()->json([
            'data' => $this->kendaraanRepository->jual($orderDetails)
        ]);
    }

    public function getLaporanPenjualan(Request $request)
    {
        $kendaraanID = $request->route('id');

        return response()->json([
            'data' => $this->kendaraanRepository->getLaporanPenjualan($kendaraanID)
        ]);
    }
}
