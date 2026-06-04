<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>

<h2>Tambah Mahasiswa</h2>

<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf

    Nama :
    <input type="text" name="nama"><br><br>

    NIM :
    <input type="text" name="nim"><br><br>

    Email :
    <input type="email" name="email"><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>