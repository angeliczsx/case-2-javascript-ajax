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
</head>

<body class="">
    <?php
    include ('Header.php')
        ?>
    <!-- header -->
    <header class = "header" id = "intro">
    <div class = "hero-div center container">
        <h1>Learn Together</h1>
        <p>Selamat datang di platform belajar dan berdiskusi bersama! Bergabunglah dengan ribuan teman dari berbagai belahan dunia untuk memperluas pengetahuan dan berbagi ide.</p><br>
        <h2>Mari kita jelajahi dunia pembelajaran secara bersama-sama!</h2>
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
    <div id="toggle" class="size-12 fixed bottom-10 right-10">
        <span class="rounded-full bg-[#7AA2E3] p-5">
            <i class="far fa-comments"></i>
        </span>
    </div>
    <div id="chatbox" class="lg:w-[40vw] w-[70vw] hidden h-80 fixed flex gap-5 flex-col right-24 bottom-10 bg-[#7AA2E3] p-5 rounded-md">
        <div class="h-[95%] bg-white w-full overflow-y-auto" id="chat-content"></div>
        <form action="" method="post" >
            <input type="text" placeholder="Chat here...." name="message" class="input input-bordered w-full max-w-xs" id="messageInput" style="min-width: 380px;" />
            <button type="submit" class="btn bg-[#D20062] float-right">Kirim</button>

        </form>

    </div>
    
    <?php
    include ('Footer.php')
        ?>

<script src="chat.js"></script>
<script src="script.js"></script>

</body>

</html>
