<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function form(): string
    {
        return view('form_view');
    }

    public function submit(): string
    {
        dd($this->request->getPost());

        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $matkul = $this->request->getPost('matakuliah');
        $dosen = $this->request->getPost('dosen');
        $asisten = $this->request->getPost('asisten');

        return "
            <h2>Data Mahasiswa</h2>
            <p>Nama: $nama</p>
            <p>NIM: $nim</p>
            <p>Kelas: $kelas</p>
            <p>Mata Kuliah: $matkul</p>
            <p>Dosen Pengampu: $dosen</p>
            <p>Asisten Praktikum: $asisten</p>
        ";
    }
}
