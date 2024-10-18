<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Docker and Xdebug</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
    <?php include 'templates/_components/templates-nav.php' ?>
    <div class="container">
            <h1 class="my-4">Xdebug in Docker with PhpStorm</h1>
            <h2 class="mb-3">2 + 2 = 4 ?</h2>
            <div class="form">
                <form action="templates/result.php" method="post">
                    <div class="mb-2">
                        <label for="answer-number" class="form-label">What number should you add to 2 in order to make 4?</label>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control-sm" name="answer-number" id="answer-number" required>
                        <div id="numberHelp" class="form-text mb-3">There is a hint in the title.</div>
                    </div>
                    <div>
                        <input hidden type="number" name="number-two" id="number-two" value="2">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
            <h2 class="mt-4 mb-3">Xdebug information</h2>
            <div>
                <p>Follow the link below to discover the Xdebug configuration of the Php Docker container:</p>
                <a href="./templates/xdebug-info.php" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Xdebug info</a>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
