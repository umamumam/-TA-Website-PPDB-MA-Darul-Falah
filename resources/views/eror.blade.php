<!-- resources/views/errors/404.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Not Found</title>
    <style>
        /* Styling untuk halaman 404 */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        /* Animasi */
        #funny-animation {
            font-size: 72px;
            animation: fun-animation 3s infinite alternate;
        }
        @keyframes fun-animation {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>
<body>
    <h1 class="funny-animation" id="funny-animation">404 - Not Found</h1>
    <p>Oops! The page you are looking for could not be found.</p>
    <a href="{{ route('dashboard') }}">Go back to Home</a>

    <!-- Animasi JavaScript -->
    <script>
        // Fungsi untuk mengubah warna huruf secara acak
        function changeColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            document.getElementById('funny-animation').style.color = color;
        }

        // Memanggil fungsi changeColor() setiap 1 detik
        setInterval(changeColor, 1000);
    </script>
</body>
</html>
