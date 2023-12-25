<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Date</title>
</head>
<body>
    <header>
        <h1>Automatic copyright year with PHP date() function</h1>
    </header>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
        Quia repellat molestiae ex, magni soluta quisquam.<br>
        Error a voluptas facilis mollitia alias eum dignissimos animi omnis, sunt pariatur autem unde fugit.
        </p>
    </section>

    <footer>
    <p>&copy<span id="copyright-year"></span>
        <?php
            $year = date('Y');
            echo $year;
        ?> Ibrahim Calculus
    </p>
    </footer>

    
</body>
</html>