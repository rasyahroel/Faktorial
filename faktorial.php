<!-- -Case Rabu: 
Buatlah sebuah program yang akan menampilkan nilai faktorial dari bilangan yang dimasukkan.
Bilangan faktorial adalah hasil perkalian antara bilangan bulat positif yang kurang dari atau sama dengan n.
Bilangan faktorial biasanya di tulis dengan tanda seru (!).
Sebagai contoh 5! = 5 * 4 * 3 * 2 * 1 = 120.
contoh kedua 7! = 7 * 6 * 5 * 4 * 3 * 2 * 1 = 5040. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Mini Quiz Rabu - Faktorial</title>
</head>

<body>
    <form method="post" action="">
        <div class="card mx-5 mt-5 col-5">
            <div class="card-body">
                <div class="mt-3">
                    <input name="bil" type="number" class="form-control" placeholder="Masukkan angka" required>
                </div>
                
                <div class="mt-3 col-12">
                    <button class="btn btn-primary" type="submit" name="submit">Hasil</button>
                </div>
            </div>

        <?php
        if(isset($_POST['submit']))
        {
            $fact = 1;
            $bil = $_POST['bil'];
            for ($i = 1; $i <= $bil; $i++){         
                $fact = $fact * $i;  
                }
        ?>

            <div class="mx-3 mt-3">
                <p>Faktorial <?= $bil; ?>! adalah <?= $fact; ?></p>
            </div>
        <?php
        }
        ?>
        
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>