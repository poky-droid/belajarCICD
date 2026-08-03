<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sederhana</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f5f5f5;
            color:#333;
        }

        header{
            background:#2563eb;
            color:white;
            padding:20px 8%;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin-left:20px;
        }

        nav a:hover{
            text-decoration:underline;
        }

        .hero{
            height:80vh;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            text-align:center;
            background:linear-gradient(135deg,#2563eb,#60a5fa);
            color:white;
        }

        .hero h1{
            font-size:50px;
            margin-bottom:15px;
        }

        .hero p{
            max-width:600px;
            line-height:1.8;
            margin-bottom:30px;
        }

        .btn{
            display:inline-block;
            padding:12px 25px;
            background:white;
            color:#2563eb;
            text-decoration:none;
            border-radius:8px;
            font-weight:bold;
        }

        section{
            padding:80px 10%;
        }

        .card{
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 5px 15px rgba(0,0,0,.1);
            margin-top:20px;
        }

        footer{
            background:#1e293b;
            color:white;
            text-align:center;
            padding:20px;
        }

        @media(max-width:768px){
            header{
                flex-direction:column;
            }

            nav{
                margin-top:15px;
            }

            .hero h1{
                font-size:36px;
            }
        }
    </style>
</head>
<body>

<header>
    <h2>MyWebsite</h2>

    <nav>
        <a href="#">Home</a>
        <a href="#about">Tentang</a>
        <a href="#contact">Kontak</a>
    </nav>
</header>

<section class="hero">
    <h1>Selamat Datang</h1>
    <p>
        Ini adalah contoh website sederhana yang dibuat menggunakan HTML dan CSS.
        Cocok sebagai latihan dasar membuat landing page.
    </p>

    <a href="#about" class="btn">Pelajari Lebih Lanjut</a>
</section>

<section id="about">
    <h2>Tentang Kami</h2>

    <div class="card">
        <p>
            Website ini merupakan contoh landing page sederhana.
            Anda dapat mengembangkannya dengan JavaScript, Bootstrap,
            atau framework seperti Laravel dan React.
        </p>
    </div>
</section>

<section id="contact">
    <h2>Kontak</h2>

    <div class="card">
        <p>Email : admin@example.com</p>
        <p>Telepon : 0812-3456-7890</p>
    </div>
</section>

<footer>
    © 2026 MyWebsite. All Rights Reserved.
</footer>

</body>
</html>