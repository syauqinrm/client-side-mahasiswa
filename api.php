<?php

// Base URL API
$baseURL = 'http://127.0.0.1:8000/api/mahasiswa/';

// GET (Read) - Mendapatkan semua data mahasiswa
function getAllMahasiswa()
{
    global $baseURL;

    $curl = curl_init($baseURL);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);

    if ($response === false) {
        $error = curl_error($curl);
        // Error handling
    } else {
        $data = json_decode($response, true); // Ubah response menjadi array asosiatif jika menggunakan JSON
        // Gunakan data sesuai kebutuhan
        // print_r($data);
        return $data;
    }

    curl_close($curl);
}

// GET (Read) - Mendapatkan data mahasiswa berdasarkan NIM
function getMahasiswaByNIM($nim)
{
    global $baseURL;

    $curl = curl_init($baseURL . $nim);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);

    if ($response === false) {
        $error = curl_error($curl);
        // Error handling
    } else {
        $data = json_decode($response, true); // Ubah response menjadi array asosiatif jika menggunakan JSON
        // Gunakan data sesuai kebutuhan
        return $data;
    }

    curl_close($curl);
}

// POST (Create) - Menambahkan data mahasiswa baru
function createMahasiswa($mahasiswaData)
{
    global $baseURL;

    $curl = curl_init($baseURL);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $mahasiswaData);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


    $response = curl_exec($curl);

    if ($response === false) {
        $error = curl_error($curl);
        // Error handling
    } else {
        $result = json_decode($response, true); // Ubah response menjadi array asosiatif jika menggunakan JSON
        // Gunakan result sesuai kebutuhan
        print_r($result);
        echo "
        <p>Tunggu 2 detik</p>
        <script>
        setTimeout(function() {
            window.location.href = 'http://localhost:8080/client-side-mahasiswa/';
        }, 2000);
        </script>
        ";
    }

    curl_close($curl);
}

// PUT (Update) - Memperbarui data mahasiswa berdasarkan NIM
function updateMahasiswa($nim, $mahasiswaData)
{
    global $baseURL;

    $curl = curl_init($baseURL . $nim);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($mahasiswaData));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen(json_encode($mahasiswaData))
    ]);

    $response = curl_exec($curl);

    if ($response === false) {
        $error = curl_error($curl);
        // Error handling
    } else {
        $result = json_decode($response, true); // Ubah response menjadi array asosiatif jika menggunakan JSON
        // Gunakan result sesuai kebutuhan
        print_r($result);
        echo "
        <p>Tunggu 2 detik</p>
        <script>
        setTimeout(function() {
            window.location.href = 'http://localhost:8080/client-side-mahasiswa/';
        }, 2000);
        </script>
        ";
    }

    curl_close($curl);
}

// DELETE - Menghapus data mahasiswa berdasarkan NIM
function deleteMahasiswa($nim)
{
    global $baseURL;

    $curl = curl_init($baseURL . $nim);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');

    $response = curl_exec($curl);

    if ($response === false) {
        $error = curl_error($curl);
        // Error handling
    } else {
        $result = json_decode($response, true); // Ubah response menjadi array asosiatif jika menggunakan JSON
        // Gunakan result sesuai kebutuhan
        print_r($result);
        echo "
        <p>Tunggu 2 detik</p>
        <script>
        setTimeout(function() {
            window.location.href = 'http://localhost:8080/client-side-mahasiswa/';
        }, 2000);
        </script>
        ";
    }

    curl_close($curl);
}
