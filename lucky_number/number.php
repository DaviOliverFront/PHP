<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucky Number</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="Lucky-Number">
        <?php
        $int1 = $_GET['number1'];
        $int2 = $_GET['number2'];

        $luck_number = mt_rand($int1, $int2);

        echo "
        <div class='card p-5 text-white text-center bg-background' >
        <h2 class='fs-8'>Your Lucky Number is:</h2>
        <p class='fs-7'>$luck_number</p>
        <a href='javascript:history.go(-1)' class='btn btn-primary mt-3'><strong>Back</strong></a> 
        </div>
        ";
        ?>
        
    </main>
</body>
</html>