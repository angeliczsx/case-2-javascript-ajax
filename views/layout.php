<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- normalize css -->
    <link rel = "stylesheet" href = "resources/normalize.css">

    <!-- font -->
    <link rel = "stylesheet" href = "resources/font.css">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- css file link --> 
    <link rel="stylesheet" href="style.css">

    <title>LearnTogether</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .chat-container {
            border: 1px solid #ccc;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            margin-bottom: 20px;
        }

        .chat-header {
            background-color: #D20062;
            padding: 1rem;
            color: #ffffff;
            font-size: 1.25rem;
            font-weight: 600;
            text-align: center;
        }

        .chat-body {
            height: 300px;
            overflow-y: scroll;
            padding: 1rem;
            background-color: #F9FAFB;
        }

        .pesan {
            margin-bottom: 0.625rem;
            background-color: #1E3A8A;
            padding: 0.625rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .chat-footer {
            padding: 1rem;
            background-color: #E5E7EB;
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 0.5rem;
        }

        .chat-footer input[type="text"] {
            flex: 1;
            width: 85%;
            padding: 0.5rem;
            border: 1px solid #D1D5DB;
            border-radius: 0.5rem;
            outline: none;
            transition: border-color 0.3s;
        }

        .chat-footer input[type="text"]:focus {
            border-color: #1E3A8A;
        }

        .chat-footer button {
            padding: 0.5rem 1rem;
            background-color: #1E3A8A;
            color: #ffffff;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .chat-footer button:hover {
            background-color: #3B82F6;
        }
                /*google fonts*/
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');

        :root{
            --blue: #7AA2E3;
            --white-smoke: #f0f0f0;
            --transition: all 0.2s ease-in-out;
            --box-pink: 0 .5rem 1.5rem rgb(210, 0, 98);
        }
        *{
            font-family: 'Ubuntu', sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        html{
            color: var(--blue);
            font-size: 1rem;
            font-weight: 300;
            line-height: 1.5;
            text-rendering: optimizeLegibility;
            scroll-behavior: smooth;
        }

        /* setup & reusable stylings */
        img{
            width: 100%;
        }
        a{
            text-decoration: none;
            color: var(--blue);
        }
        i{
            color: #FFFFFF;
        }
        li{
            list-style-type: none;
        }
        button{
            cursor: pointer;
            outline: 0;
            background: transparent;
        }
        .container{
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        h1, h2, h3, h4, h5, h6{
            margin: 0.6rem 0;
            line-height: 1.25;
            font-weight: 400;
            text-transform: capitalize;
        }
        .text{
            margin: 0.6rem 0;
            opacity: 0.8;
        }
        .center{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        section{
            padding: 2rem 9%;
        }
        .title{
            padding: 0.6rem 0;
            text-align: center;
        }
        .title h2{
            font-size: 2.2rem;
        }
        .title .text{
            font-weight: 500;
            font-size: 1.1rem;
        }

        /* header */
        .header{
            background-color: #01204E;
            min-height: 100vh;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: stretch;
        }
        .hero-div{
            flex: 1;
            flex-direction: column;
            text-align: center;
        }
        .hero-div h1{
            font-size: 2.55rem;
            font-weight: bolder;
            padding-bottom: 0.4rem;
            color: var(--blue);
            text-transform: uppercase;
        }
        .hero-div p{
            color: var(--white-smoke);
            font-size: 1.05rem;
            letter-spacing: 3px;
        }
        .hero-div h2{
            font-size: 1.5rem;
            font-weight: bolder;
            padding-bottom: 0.4rem;
            color: #D20062;
        }
        /* detail */
        .detail{
            background: var(--white-smoke);
        }
        .detail-item{
            background: #fff;
            text-align: center;
            margin: 2rem 0;
            padding: 3.5rem 1.5rem;
            border-radius: 4px;
            transition: var(--transition);
        }
        .detail-item:hover{
            box-shadow: var(--box-pink);
            transform: translateY(-5px);
        }
        .detail-item span{
            font-size: 2.5rem;
            color: var(--box-pink);
        }
        .detail-item h2{
            font-size: 1.4rem;
            opacity: 0.8;
            font-weight: 500;
            color: var(--blue);
        }
        .detail-item i{
            color: #D20062;
        }
        .line{
            width: 45px;
            margin: 1.2rem auto;
            background: var(--blue);
            height: 2.5px;
        }

        /* video */
        .video{
            background-color: #01204E;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            color: #fff;
            text-align: center;
        }
        .video a{
            font-size: 2.2rem;
            color: #fff;
            width: 65px;
            height: 65px;
            border-radius: 50%;
            background-color: var(--blue);
            padding-left: 7px;
            margin: 0 auto;
        }
        .video h2{
            font-size: 2rem;
            color: var(--blue);
            padding: 1.2rem 0;
        }
        .video p{
            font-size: 1.1rem;
            letter-spacing: 1px;
            color: var(--white-smoke);
            opacity: 0.7;
        }

        /* #### Media Queries #### */

        @media screen and (min-width: 768px){
            .detail .row{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }
            .detail-item{
                margin: 0;
            }
            .video h2{
                font-size: 2.6rem;
            }
            .video p{
                font-size: 1.2rem;
                width: 75%;
                margin: 0 auto;
            }
        }

        @media screen and (min-width: 992px){
            .hero-div h1{
                font-size: 3.8rem;
            }
            .btn-trans{
                display: inline-block;
                margin-right: 0.8rem;
            }
            .video p{
                width: 60%;
            }
        }

        @media screen and (min-width: 1200px){
            .hero-div h1{
                width: 70%;
                margin-left: auto;
                margin-right: auto;
            }
            .detail .row{
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
</head>

<body class="">
    <nav class="navbar bg-[#7AA2E3] sticky top-0 z-20">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl text-[#ECD7CD]">LearnTogether</a>
        </div>
        <div class="flex-end">
        <a class="btn btn-ghost text-xl text-[#ECD7CD]"><?php 
        if(isset($_GET['pengirim']) && !empty($_GET['pengirim'])){
        echo "Welcome, ".$_GET['pengirim']."!";
        }else{
            echo 'Tolong masukkan username di query url!!!';
        }

    ?></a>
</div>
    </nav>
    <header class = "header" id = "intro">
    <div class = "hero-div center container">
        <h1>Learn Together</h1>
        <p>Selamat datang di platform belajar dan berdiskusi bersama! Bergabunglah dengan ribuan teman dari berbagai belahan dunia untuk memperluas pengetahuan dan berbagi ide.</p><br>
        <h2>Mari kita jelajahi dunia pembelajaran secara bersama-sama!</h2>
    </div>
    <div class="container">
        <div class="chat-container">
            <div class="chat-header">
                <h3>Chat dengan <?php echo $penerima; ?></h3>
            </div>
            <div class="chat-body">
                <?php foreach ($pesan as $p): ?>
                    <div class="pesan">
                        <strong><?php echo $p['pengirim']; ?></strong>
                        <p><?php echo $p['pesan']; ?></p>
                        <small><?php echo $p['waktu']; ?></small>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="chat-footer">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] . '?pengirim=' . $pengirim . '&penerima=' . $penerima; ?>">
                    <input type="hidden" name="pengirim" value="<?php echo $pengirim; ?>">
                    <input type="hidden" name="penerima" value="<?php echo $penerima; ?>">
                    <input type="text" name="pesan" placeholder="Tulis pesan..." required>
                    <button type="submit">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    </header>

    <!-- detail section -->
    <section class = "detail">
    <div class = "container">
        <div class = "row">
        <div class = "detail-item wow animate__animated animate__fadeInLeft animate__slow">
            <span><i class="fa-solid fa-people-group"></i></i></span>
            <h2>Pembelajaran Kolaboratif</h2>
            <div class = "line"></div>
            <p class = "text">LearnTogether memfasilitasi kolaborasi belajar antara individu dari berbagai belahan dunia.</p>
        </div>

        <div class = "detail-item wow animate__animated animate__fadeInUp animate__s">
            <span><i class="fa-solid fa-comments"></i></span>
            <h2>Diskusi Terbuka</h2>
            <div class = "line"></div>
            <p class = "text">Ruang diskusi yang memungkinkan pertukaran pandangan yang luas dan perspektif yang beragam.</p>
        </div>

        <div class = "detail-item wow animate__animated animate__fadeInRight animate__slow">
            <span><i class="fa-solid fa-lock"></i></span>
            <h2>Keamanan dan Privasi</h2>
            <div class = "line"></div>
            <p class = "text">Keamanan informasi dan privasi pengguna adalah prioritas utama kami.</p>
        </div>
        </div>
    </div>
    </section>

    <!-- sample video section -->
    <section class = "video">
    <div class = "container">
        <a class = "center popup-youtube" href = "https://www.youtube.com/@learntogether9791" target="_blank">
            <i class = "fas fa-play"></i>
        </a>
        <h2>Learn Together</h2>
        <p>Simak Keseruan Belajar dan Berdiskusi Bersama Teman di Berbagai Belahan Dunia.</p>
    </div>
    </section>

</body>

<footer
    class="flex flex-col items-center bg-[#7AA2E3] text-center text-surface dark:bg-neutral-700 dark:text-white">
    <div class="w-full bg-[#7AA2E3] p-4 text-center">
        © 2024 Copyright:
        <a href="https://tw-elements.com/">Kelompok 6 - PEMWEB SI E</a>
    </div>
</footer>
</html>