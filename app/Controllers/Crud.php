<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $mahasiswa;

    public function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
    }
    public function index(): string
    {
        $data['mahasiswa'] = $this->mahasiswa->findAll();
        return view(name: 'crud/view', data: $data);
    }

    public function tambah(): RedirectResponse|string
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'nim' => $this->request->getPost('nim'),
                'nama' => $this->request->getPost('nama'),
                'prodi' => $this->request->getPost('prodi'),
                'universitas' => $this->request->getPost('universitas'),
                'nomor_handphone' => $this->request->getPost('nomor_handphone'),
            ];

            if (!$this->mahasiswa->insert($data)) {
                $errors = $this->mahasiswa->errors();
                dd('Gagal Insert. Error: ', $errors);
            }

            session()->setFlashdata('message', 'Data berhasil ditambahkan!');
            return redirect()->to('/crud');
        }
        return view('crud/upload');
    }

    public function edit($nim = null): RedirectResponse|string
    {
        if ($nim === null) {
            session()->setFlashdata(data: 'error', value: 'NIM tidak ditemukan.');
            return redirect()->to(uri: '/crud');
        }
        $mahasiswaData = $this->mahasiswa->find(id: $nim);
        if (empty($mahasiswaData)) {
            session()->setFlashdata(data: 'error', value: 'Data mahasiswa tidak ditemukan.');
            return redirect()->to(uri: '/crud');
        }
        $data = ['mahasiswa' => $mahasiswaData];
        return view('crud/edit', $data);
    }
    public function update(): \CodeIgniter\HTTP\RedirectResponse
    {
        if ($this->request->getMethod() === 'post') {
            // Ambil data lama NIM dari hidden input untuk identifikasi record
            $oldNim = $this->request->getPost('old_nim');

            $data = [
                'nim' => $this->request->getPost('nim'), // NIM baru
                'nama' => $this->request->getPost('nama'),
                'prodi' => $this->request->getPost('prodi'),
                'universitas' => $this->request->getPost('universitas'),
                'nomor_handphone' => $this->request->getPost('nomor_handphone'),
            ];

            $updated = $this->mahasiswa->update($oldNim, $data);
            if (!$updated) {
                session()->setFlashdata('errors', $this->mahasiswa->errors());
                return redirect()->back()->withInput();
            }
            session()->setFlashdata('message', 'Data mahasiswa berhasil diupdate!');
            return redirect()->to('/crud');
        }
        return redirect()->to('/crud');
    }

    public function hapus($nim = null): \CodeIgniter\HTTP\RedirectResponse
    {
        if ($nim === null) {
            session()->setFlashdata(data: 'error', value: 'NIM tidak ditemukan.');
            return redirect()->to(uri: '/crud');
        }
        if (!$this->mahasiswa->delete(id: $nim)) {
            session()->setFlashdata(data: 'error', value: 'Gagal menghapus data.');
        } else {
            session()->setFlashdata(data: 'message', value: 'Data berhasil dihapus!');
        }
        return redirect()->to(uri: '/crud');
    }
}
