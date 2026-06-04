<!DOCTYPE html>
<html>
<head>
    <title>Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">My Website</a>

        <div class="navbar-nav">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="/profil">Profil</a>
            <a class="nav-link" href="/produk">Produk</a>
            <a class="nav-link" href="/galeri">Galeri</a>
            <a class="nav-link active" href="/kontak">Kontak</a>
        </div>
    </div>
</nav>

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-body">

            <h1>Hubungi Kami</h1>

            <form>
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Pesan</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>

                <button class="btn btn-primary">
                    Kirim
                </button>
            </form>

        </div>
    </div>

</div>

</body>
</html>