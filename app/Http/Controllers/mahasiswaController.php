<?php

namespace App\Http\Controllers;

use App\Models\CalonMahasiswa;
use App\Models\Fakultas;
use App\Models\ProgramStudi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mahasiswaController extends Controller
{
    public function mahasiswaView(Request $request){
        $user = Auth::user();
        //kode if ini buat pengecek an kepada maba yang sudah daftar dan yang belum
        //jadi ketika si maba sudah mengsisi form daftar maka navbar yang muncul riwayat dan status
        if ($user->calonmahasiswa) {
        return redirect()->route('riwayat');
        }
        //kode di bawah buat manggil si data prodi with fakultas
        $prodi = ProgramStudi::with('fakultas')->findOrFail($request->query('program_studi_id'));
        return view('formDaftar', compact( 'user', 'prodi' ));
    }
    public function fakultas(){
        //buat ngambil data semua fakultas dan prodi
        $fakultas = Fakultas::all();
        $prodi = ProgramStudi::all();
        $user = Auth::user();
        if ($user->calonmahasiswa) {
        return redirect()->route('riwayat');
        }
        //terus di compact( pengirim data ke blade) ke view cardFakultas
        return view ('cardFakultas',compact('fakultas','prodi'));
    }
     public function postmahasiswa(Request $request){
        //di validasi dulu data nya sesuai atau tidak di dalam database
        $request->validate([
            'program_studi_id'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'agama'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'no_hp'=>'required',
            'lulusan_tahun'=>'required',
        ]);
        //nah baru deh di create buat di tambahin data baru yang sudah di input si maba
        // ke database nya
        CalonMahasiswa::create([
            'user_id'=>Auth::id(),
            'program_studi_id'=>$request->program_studi_id,
            'alamat'=>$request->alamat,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'agama'=>$request->agama,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'no_hp'=>$request->no_hp,
            'lulusan_tahun'=>$request->lulusan_tahun,
            
        ]);
        //setelah berhasil si maba redirect ke riwayat dengan status Pendaftaran Berhasil
        return redirect()->route('riwayat')->with('status', 'Pendaftaran berhasil !!');
    }
    public function riwayat(){
    $mahasiswa = CalonMahasiswa::with('programStudi.fakultas')->where('user_id', Auth::id())->first();
    return view('riwayatDaftar', compact( 'mahasiswa'));
    }
    public function edit(string $id){
        $mahasiswa = CalonMahasiswa::findOrFail($id);
        return view('editMahasiswa',compact('mahasiswa'));
    }
    public function postedit(Request $request, $id){
        $request->validate([
            'nik'=>'required',
            'nama_lengkap'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'no_hp'=>'required',
            'lulusan_tahun'=>'required',
            'alamat'=>'required'
        ]);
        $mahasiswa = CalonMahasiswa::findOrFail($id);
        $mahasiswa->user->update([
        'nik' => $request->nik,
        'name' => $request->nama_lengkap,
        ]); 
        $mahasiswa->update([
            'nik'=>$request->nik,
            'nama_lengkap'=>$request->nama_lengkap,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'no_hp'=>$request->no_hp,
            'lulusan_tahun'=>$request->lulusan_tahun,
            'alamat'=>$request->alamat

        ]);
        return redirect()->route('riwayat')->with('status','data Berhasil Di update');
    }
    public function pembayaran(){
        $user = Auth::user();
        $mahasiswa= CalonMahasiswa::with('programstudi.fakultas')->where('user_id',Auth::id())->first();
        return view('pembayaran',compact('user','mahasiswa'));
    }
}
