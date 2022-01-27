<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proker</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<body>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center mt-5">
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="http://localhost/pwl/proker/form_proker.php">Form Proker</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="http://localhost/pwl/proker/form_belanja.php">Form Belanja</a>
            </nav>
            <h3 class="mt-5">Form Proker</h3>
        </div>
        <div class="col-md-3"></div>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kode APBS</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Kode APBS">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Program</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Program">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Pelaksaan</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Isi Dengan Tanggal Pelaksaan">
            </div>

            <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Dana</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Rp . . . ,-">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">SDM</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Isi Jumlah Panitia">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Alat & Bahan</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Alat dan bahan">
                        </div>
                    </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Target Kinerja</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Isi dengan target dalam presentase">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Total Santri</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Total Santri">
            </div>
        </div>
        <div class="col-md-2"></div>

        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary" type="button">Simpan</button>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

</body>
<script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</script>
</html>