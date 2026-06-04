<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f5f7fa">

    <div class="container mt-5">

        <div class="card shadow">

            <div class="card-header bg-primary text-white d-flex justify-content-between">

                <h3>📚 Data Mahasiswa</h3>

                <a href="{{ route('mahasiswa.create') }}" class="btn btn-light">
                    + Tambah Data
                </a>

            </div>

            <div class="card-body">

                <table class="table table-striped table-hover">

                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Email</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($mahasiswa as $m)
                            <tr>

                                <td>{{ $m->id }}</td>
                                <td>{{ $m->nama }}</td>
                                <td>{{ $m->nim }}</td>
                                <td>{{ $m->email }}</td>

                                <td>

                                    <a href="{{ route('mahasiswa.edit', $m->id) }}" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST"
                                        style="display:inline;">

                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>

                                    </form>

                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</body>

</html>
