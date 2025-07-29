<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'tb_mahasiswa';
    protected $primaryKey = 'nim';
    protected $useAutoIncrement = false;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    // Hanya NIM yang diizinkan untuk mass assignment dari form
    protected $allowedFields = [
        'nim',
        'nama', // Tetap ada agar findAll bisa mengembalikan ini
        'prodi',
        'universitas',
        'nomor_handphone'
    ];

    protected $useTimestamps = false;

    // Aturan validasi hanya untuk NIM
    protected $validationRules = [
        'nim' => 'required|is_unique[tb_mahasiswa.nim,nim,{nim}]|alpha_numeric_punct|min_length[5]|max_length[20]',
    ];

    protected $validationMessages = [
        'nim' => [
            'required' => 'NIM harus diisi.',
            'is_unique' => 'NIM sudah terdaftar.',
            'alpha_numeric_punct' => 'NIM hanya boleh huruf, angka, dan tanda baca.',
            'min_length' => 'NIM minimal 5 karakter.',
            'max_length' => 'NIM maksimal 20 karakter.',
        ]
    ];
}
