<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Artikel;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Models\KategoriPelaporan;
use App\Models\Kecamatan;

class DashboardController extends Controller
{
    public function index()
    {

        $kecamatan = Kecamatan::all();
        $kategori_pelaporan = KategoriPelaporan::all();


        $jumlah_user = User::count();
        $jumlah_artikel = Artikel::count();
        $jumlah_pengaduan = Pengaduan::count();
        $jumlah_kategori_pelaporan = KategoriPelaporan::count();
        return view('admin.pages.dashboard', [
            'jumlah_user' => $jumlah_user,
            'jumlah_artikel' => $jumlah_artikel,
            'jumlah_pengaduan' => $jumlah_pengaduan,
            'jumlah_kategori_pelaporan' => $jumlah_kategori_pelaporan,
            'kecamatan' => $kecamatan,
            'kategori_pelaporan' => $kategori_pelaporan,
            'nama_kecamatan' => '',
            'total' => ''
        ]);
    }

    public function filter(Request $request)
    {
        $kecamatan = Kecamatan::all();
        $kategori_pelaporan = KategoriPelaporan::all();
        // $id_kecamatan = $request->id_kecamatan;
        // $id_kategori_pelaporan = $request->id_kategori_pelaporan;
        // $date1 = $request->date1;
        // $date2 = $request->date2;


        // $data = DB::table('kecamatan')
        //     ->leftJoin('pengaduan', function ($join) use ($request) {
        //         $join->on('kecamatan.id', '=', 'pengaduan.id_kecamatan')
        //             ->when($request->id_kategori_pelaporan != 0, function ($query) use ($request) {
        //                 return $query->where('pengaduan.id_kategori_pelaporan', $request->id_kategori_pelaporan);
        //             })
        //             ->when($request->date1 != null && $request->date2 != null, function ($query) use ($request) {
        //                 return $query->whereBetween('pengaduan.created_at', [$request->date1, $request->date2]);
        //             });
        //     })
        //     ->select('kecamatan.name as kecamatan', DB::raw('COALESCE(COUNT(pengaduan.id), 0) as total'))
        //     ->groupBy('kecamatan.id', 'kecamatan.name')
        //     ->get();

        $id_kecamatan = $request->id_kecamatan;
        $id_kategori_pelaporan = $request->id_kategori_pelaporan;
        $date1 = $request->date1;
        $date2 = $request->date2;

        $data = DB::table('kecamatan')
            ->leftJoin('pengaduan', function ($join) use ($request) {
                $join->on('kecamatan.id', '=', 'pengaduan.id_kecamatan')
                    ->when($request->id_kategori_pelaporan != 0, function ($query) use ($request) {
                        return $query->where('pengaduan.id_kategori_pelaporan', $request->id_kategori_pelaporan);
                    })
                    ->when($request->date1 != null && $request->date2 != null, function ($query) use ($request) {
                        return $query->whereBetween('pengaduan.created_at', [$request->date1, $request->date2]);
                    });
            })
            ->select('kecamatan.name as kecamatan', DB::raw('COALESCE(COUNT(pengaduan.id), 0) as total'))
            ->when($request->id_kecamatan != 0, function ($query) use ($request) {
                return $query->where('kecamatan.id', $request->id_kecamatan);
            })
            ->groupBy('kecamatan.id', 'kecamatan.name')
            ->get();



        $ambil_nama_kecamatan = $data->pluck('kecamatan');
        $ambil_total = $data->pluck('total');


        $jumlah_user = User::count();
        $jumlah_artikel = Artikel::count();
        $jumlah_pengaduan = Pengaduan::count();
        $jumlah_kategori_pelaporan = KategoriPelaporan::count();
        return view('admin.pages.dashboard', [
            'jumlah_user' => $jumlah_user,
            'jumlah_artikel' => $jumlah_artikel,
            'jumlah_pengaduan' => $jumlah_pengaduan,
            'jumlah_kategori_pelaporan' => $jumlah_kategori_pelaporan,
            'kecamatan' => $kecamatan,
            'kategori_pelaporan' => $kategori_pelaporan,
            'nama_kecamatan' => $ambil_nama_kecamatan,
            'total' => $ambil_total

        ]);
    }
}
