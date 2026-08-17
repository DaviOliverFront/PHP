<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Brazilian Real to US Dollar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <main class="bg-body-secondary p-1 rounded">
        <?php
        define('COTACAO_DOLAR', 5.40);

        $real = $_POST['real'];
        $real = str_replace(',', '.', $real);

        function convertion( $real) {
        $valueDolar = $real / COTACAO_DOLAR;
        return round($valueDolar, 2);
        }

        $valueDolar = convertion($real);

        echo "
        <div class='text-center'>
            <h3>Your R$". number_format($real, 2,',', '.') . " is equivalent to: </h3>
            <p class='lead'> US$ " . number_format($valueDolar, 2, ',', '.') . "</p>
            <a href='javascript:history.go(-1)' class='btn btn-primary mt-3'><strong>New conversion</strong></a> 
        </div>
        "?>
    </main>
</body>
</html>