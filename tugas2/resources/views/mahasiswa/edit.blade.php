<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>

<h2>Edit Mahasiswa</h2>

<form action="{{ route('mahasiswa.update',$mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    Nama :
    <input type="text" name="nama" value="{{ $mahasiswa->nama }}"><br><br>

    NIM :
    <input type="text" name="nim" value="{{ $mahasiswa->nim }}"><br><br>

    Email :
    <input type="email" name="email" value="{{ $mahasiswa->email }}"><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>