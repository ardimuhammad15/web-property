<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />

        <!-- Font Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
            rel="stylesheet"
        />

        <!-- Font awesome -->
        <script
            src="https://kit.fontawesome.com/13a7b28a80.js"
            crossorigin="anonymous"
        ></script>

        <!-- CSS -->
        <link rel="stylesheet" href="style/style.css" />

        <!-- logo title -->
        <link
            rel="icon"
            href="Assets/img/logo-homindo.svg"
            type="image/x-icon"
        />
        <title>HOMINDO</title>
    </head>
    <body>
        <section id="input_dashboard">
            <div class="container p-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="nama_unit" style="width: 135px;">Nama Unit</span>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Masukkan nama unit"
                        aria-label="unit"
                        aria-describedby="basic-addon1"
                    />
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="gambar_unit" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Upload</button>
                  </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="luas_unit" style="width: 135px;">Luas Unit (m <sup>2</sup>)</span>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Username"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                    />
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="kamar_mandi" style="width: 135px;">Kamar Mandi</label>
                    <select class="form-select" id="kamar_mandi">
                      <option selected>Pilih</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="3">4</option>
                      <option value="3">5</option>
                    </select>
                  </div>

                  <div class="input-group mb-3">
                    <label class="input-group-text" for="kamar_tidur">Kamar Tidur</label>
                    <select class="form-select" id="kamar_tidur">
                      <option selected">Choose</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="3">4</option>
                      <option value="3">5</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <button class="btn btn-primary">Submit</button>
            </div>
        </section>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
