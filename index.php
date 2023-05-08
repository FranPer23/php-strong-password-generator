<?php
session_start();
include_once __DIR__ . "/functions.php";

if (isset($_GET["length"])) {
    $password_length = $_GET["length"];
    $password = generate_password($pwd_length, $chars_to_use);
    $_SESSION["password"] = $password;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>PHP Strong Password Generator</title>
</head>

<body style="background-color: #001632;">
    <div class="container">
        <div class="text-center">
            <h1 style="color: #7e868d">Strong Password Generator</h1>
            <h2 style="color: #ffffff">Genera una password sicura</h2>
        </div>

        <?php if (isset($password)) { ?>
            <div class="card my-card" style="background-color: #cff4fc;">
                <div class="card-body">
                    La tua password è <?php echo $password; ?>
                </div>
            </div>
        <?php } ?>

        <!-- PASSWORD GENERATOR  -->
        <div class="card my-card mt-3" style="background-color: #f8f9fa">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="border-style: none">
                                <p class="card-text">Lunghezza password:</p>
                            </th>
                            <th scope="col" style="border-style: none">
                                <input type="number" name="length" id="length" class="form-control" ]value="<?php echo isset($_GET["length"]) ? $_GET["length"] : '' ?> aria-describedby=" basic-addon1" style="width: 70%">
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" style="border-style: none">
                                <p class="card-text">Consenti ripetizioni di uno o più caratteri:</p>
                            </th>
                            <td style="border-style: none">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        si
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="0">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        no
                                    </label>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row" style="border-style: none"></th>
                            <td style="border-style: none">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="L" id="flexCheckDefault" name="characters[]">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Lettere
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="N" id="flexCheckDefault" name="characters[]">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Numeri
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="S" id="flexCheckDefault" name="characters[]">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Simboli
                                    </label>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row" style="border-style: none"><button type="button" class="btn btn-primary btn-sm">Invia</button>
                                <button type="button" class="btn btn-secondary btn-sm">Annulla</button>
                            </th>
                            <td style="border-style: none" colspan="2"></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /PASSWORD GENERATOR  -->


    </div>
</body>

</html>