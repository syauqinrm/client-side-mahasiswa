<?php
include 'api.php';

$method = isset($_POST['_method']) ? $_POST['_method'] : '';

switch ($method) {
    case 'get':
        $data = getAllMahasiswa();
        if (isset($data['data']['data'])) {
            $mahasiswa = $data['data']['data'];
            include 'mahasiswa.php';
        }
        break;
    case 'tambah':
        $data = [
            'nim' => $_POST['nim'],
            'nama' => $_POST['nama'],
            'angkatan' => $_POST['angkatan'],
            'semester' => $_POST['semester'],
            'ipk' => $_POST['ipk'],
            'email' => $_POST['email'],
            'telepon' => $_POST['telepon']
        ];

        createMahasiswa($data);
        break;
    case 'update':
        $nim = isset($_POST['_nim']) ? $_POST['_nim'] : '';
        $data = [
            'nim' => $_POST['nim'],
            'nama' => $_POST['nama'],
            'angkatan' => $_POST['angkatan'],
            'semester' => $_POST['semester'],
            'ipk' => $_POST['ipk'],
            'email' => $_POST['email'],
            'telepon' => $_POST['telepon']
        ];

        updateMahasiswa($nim, $data);
        break;
    case 'delete':
        $nim = isset($_POST['_nim']) ? $_POST['_nim'] : '';
        deleteMahasiswa($nim);
        break;

    default:
        $data = getAllMahasiswa();
        if (isset($data['data']['data'])) {
            $mahasiswa = $data['data']['data'];
            include 'mahasiswa.php';
        }
        break;
}
