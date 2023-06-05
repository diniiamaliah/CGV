<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @include('admin.navbar')
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">

                    <form action="{{ route('store.movie') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="id">ID</label>
                            <input type="text" name="id" id="id" required>
                        </div>

                        <div class="mb-3">
                            <label for="hari">Hari:</label>
                            <select class="form-control" id="hari" name="hari">
                                @foreach($hari as $hari)
                                <option value="{{ $hari->id }}">{{ $hari->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="jam">Jam Tayang:</label>
                            <select class="form-control" id="jam" name="jam">
                                @foreach($jam as $jam)
                                <option value="{{ $jam->id }}">{{ $jam->jamtayang }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" id="harga" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="link">Link Trailer</label>
                            <input type="text" name="link" id="link" class="form-control" required>
                        </div>

                        <label for="product_image_1">Gambar 1</label>
                        <input type="file" name="product_image_1" id="product_image_1" enctype="multipart/form-data"
                            required>
                        <div class="mb-3">
                            <label for="sinopsis">Sinopsis</label>
                            <input type="text" name="sinopsis" id="sinopsis" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="durasi">Durasi</label>
                            <input type="number" name="durasi" id="durasi" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>


        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>