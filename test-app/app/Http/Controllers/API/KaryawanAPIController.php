<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\KaryawanService;
use Illuminate\Support\Facades\Request;
class KaryawanAPIController extends Controller
{
    protected $karyawan;
    public function __construct(KaryawanService $service)
    {
        $this->karyawan = $service;
    }
    public function index()
    {
        try {
            $karyawans = $this->karyawan->getAll();
            return response()->json(
                [
                    'success' => true,
                    'karyawans' => $karyawans,
                    'message' => 'Success Get Karyawans'
                ],
                200
            );
        } catch (\Throwable $th) {
            return response(null, 500)->json($th->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $karyawans = $this->karyawan->insert($request);
            return response()->json(
                [
                    'success' => true,
                    'karyawans' => $karyawans,
                    'message' => 'Success Insert Karyawans'
                ],
                200
            );
        } catch (\Throwable $th) {
            return response(null, 500)->json($th->getMessage());
        }
    }
}
