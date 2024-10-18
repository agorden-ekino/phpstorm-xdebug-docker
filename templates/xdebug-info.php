<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Docker and Xdebug</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <?php include '_components/templates-nav.php' ?>
        <div class="container">
            <h1 class="my-3">Xdebug info</h1>

            <h2>Check installation in the Docker container</h2>
            <div>
                <p>You can check that Xdebug is installed with the following commands:</p>
                <pre>
                    <code style="
                          background-color: #eee;
                          border: 1px solid #999;
                          display: block;
                          padding: 20px;
                    ">
                        docker exec -it xdebug-phpstorm-docker bash
                        php -v
                        exit
                    </code>
                </pre>
                <p>The first command starts an interactive terminal in your docker container.</p>
            </div>

            <h2>The <code>xdebug_info()</code> PHP method</h2>
            <div>
                <p>You'll find the Xdebug configuration information below. It is the result of the <code lang="php">xdebug_info()</code> PHP method.</p>
            </div>
            <?php xdebug_info(); ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
