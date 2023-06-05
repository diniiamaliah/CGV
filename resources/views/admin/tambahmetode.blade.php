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

                    <h1>View Pembayaran</h1>
                    <table id="pembayaranTable">
                        <tr>
                            <th>ID</th>
                            <th>Metode Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($pembayarans as $pembayaran)
                        <tr>
                            <td>{{ $pembayaran->id }}</td>
                            <td>{{ $pembayaran->metode_pembayaran }}</td>
                            <td>
                                <a href="{{ route('pembayaran.edit', $pembayaran->id) }}">Edit</a>
                                <form action="{{ route('pembayaran.destroy', $pembayaran->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <button onclick="showForm()">Tambah Metode Pembayaran</button>

                    <div id="formContainer" style="display: ;">
                        <h2>Tambah Metode Pembayaran</h2>
                        <form id="pembayaranForm" action="{{ route('pembayaran.store') }}" method="POST"
                            onsubmit="addPaymentMethod(event)">
                            @csrf
                            @method('POST')
                            @isset($pembayaran)
                            @method('PUT')
                            @endisset
                            <label for="id">ID:</label>
                            <input type="text" id="id" name="id" value="{{ $pembayaran->id ?? '' }}" required>

                            <label for="metodePembayaran">Metode Pembayaran:</label>
                            <input type="text" id="metodePembayaran" name="metode_pembayaran"
                                value="{{ $pembayaran->metode_pembayaran ?? '' }}" required>

                            <input type="submit" value="Simpan">
                        </form>
                    </div>




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
    <script src="script.js"></script>

    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>