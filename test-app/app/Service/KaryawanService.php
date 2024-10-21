<?php
namespace App\Services;

use App\Models\Karyawan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Throwable;

class KaryawanService
{
    protected $karyawan;
    public function __construct(Karyawan $karyawan)
    {
        $this->karyawan = $karyawan;
    }


    public function insert(Request $request)
    {
        try {
            DB::beginTransaction();
            $karywawan =   $this->karyawan->create($request->all());
            return $karywawan;
        } catch (Throwable $th) {
            return $th->getMessage();
        }
    }
    public function getAll()
    {
        try {
            $karyawans = $this->karyawan->all();
            return $karyawans;
        } catch (Throwable $th) {
            return $th->getMessage();
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $this->karyawan->update($id, $request->all());
            $karyawans = $this->karyawan->all();
            return $karyawans;
        } catch (Throwable $th) {
            return $th->getMessage();
        }
    }

    public function delete($id) {
        try {
            $karyawan = $this->karyawan->find($id);
            $karyawan->delete();
            return $karyawan;
        } catch (Throwable $th) {
            return $th->getMessage();
        }
    }
}
