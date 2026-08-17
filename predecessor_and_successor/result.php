<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <main class="d-flex flex-column align-items-center justify-content-center mt-5">
        <?php
            $number = $_GET['number'];

            $p = $number - 1;
            $s = $number + 1;

            echo "
                <div class='card bg-secondary text-white p-4 shadow' style='min-width: 300px;'>
                    <h2 class='text-center mb-4'>Result</h2>
                    <p class='fs-5'>The number chosen was <strong>$number</strong>.</p>
                    <p class='fs-5'>Your Predecessor is <strong>$p</strong>.</p>
                    <p class='fs-5'>Your Successor is <strong>$s</strong>.</p>
                    <a href='javascript:history.go(-1)' class='btn btn-primary mt-3'><strong>Back</strong></a>
                </div>
            ";
        ?>
    </main>
</body>
</html>