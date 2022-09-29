<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-grid.css">
    <title>Tugas 1 PHP Dasar</title>

</head>

<body>

    <form action="" method="POST" class="container-lg py-5">
        <div class="align-content-center align-items-center">

            <div class="col-md-12">

                <p class="fw-bold text-center fs-1">TUGAS PHP</p>

                <div class="row spasi">
                    <div class="col">
                        <input type="text" name="todo" id="todo" class="form-control" placeholder="Masukan Nilai" aria-label="Masukan Nilai">
                    </div>
                    <div class="col">
                        <input type="text" name="number" id="number" class="form-control" placeholder="Masukan Perulangan" aria-label="Masukan Perulangan">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary my-3 spasi">Proses</button>

                </div>

                <div class="list spasi fs-6 text-muted">

                    <?php

                    if (isset($_POST["submit"])) {

                        $todo = $_POST["todo"];
                        $number = $_POST["number"];

                        for ($i = 1; $i <= $number; $i++) {
                            echo "<p>$todo Perulangan Ke ________________________________________________________ $i</p>";

                            if ($i >= $number) {
                                break;
                            }
                        }

                        if ($i % 2 == 0) {
                            echo "<p><b>($i)</b> Merupakan Bilangan Genap</p>";
                        } else {
                            echo "<p><b>($i)</b> Merupakan Bilangan Ganjil</p>";
                        }
                    }

                    return 0;

                    ?>

                </div>

            </div>

        </div>
    </form>

</body>

</html>