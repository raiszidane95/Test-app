<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use App\Services\KaryawanService;
use Illuminate\Support\Facades\Request;
class KaryawanAPIController extends Controller
{
    public function index()
    {
        try {
            $karyawans = Karyawan::all();
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
            $karyawans = Karyawan::create($request->all());
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

    public function update(Request $request, $id)
    {
        try {
            $karyawans = Karyawan::find($id)->update($request->all());
            return response()->json(
                [
                    'success' => true,
                    'karyawans' => $karyawans,
                    'message' => 'Success Update Karyawans'
                ],
                200
            );
        } catch (\Throwable $th) {
            return response(null, 500)->json($th->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $karyawans = Karyawan::find($id)->delete();
            return response()->json(
                [
                    'success' => true,
                    'karyawans' => $karyawans,
                    'message' => 'Success Delete Karyawans'
                ],
                200
            );
        } catch (\Throwable $th) {
            return response(null, 500)->json($th->getMessage());
        }
    }
}
