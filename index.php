<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client Side Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css' integrity='sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==' crossorigin='anonymous' />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Libre+Franklin&family=Roboto&display=swap');
    </style>
    <style>
        .h1 {
            font-family: 'Libre Franklin', sans-serif;
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            padding-top: 3%;
            padding-bottom: 2%;
        }

        /* CSS untuk konten halaman */
        body {
            margin: 0;
            padding-bottom: 60px;
            background-image: url('bg foto.png');
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;
            /* Tinggi footer */
        }

        .navbar {
            background-color: skyblue;
            padding: 10px;
        }

        .navbar-brand {
            color: white;
            font-weight: bold;
            text-decoration: none;
        }

        /* CSS untuk footer */
        .footer {
            background-color: skyblue;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <nav>
        <div class="navbar">
            <a href="#" class="navbar-brand">POLINES</a>
        </div>
    </nav>
    <div class="container">
        <center>
            <h1 class="h1">Client Side Mahasiswa</h1>
        </center>
        <?php include 'route.php'; ?>
    </div>
    <div class="footer">
        <p>Data Mahasiswa</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        // JavaScript untuk smooth scrolling
        window.addEventListener('scroll', function() {
            var scrollButton = document.querySelector('.scroll-to-top');
            if (window.scrollY > 300) {
                scrollButton.style.display = 'block';
            } else {
                scrollButton.style.display = 'none';
            }
        });

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>