<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\KaryawanService;

class KaryawanController extends Controller
{
    protected $karyawan;

    public function __construct( $service)
    {
        $this->karyawan = $service;
    }
    public function index()
    {
        $karyawans = $this->karyawan->getAll();
        return view('karyawan.index');
    }
}
