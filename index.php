<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matthew's Personal Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2c2c2c;
            color: #d0d0d0;
            margin: 0;
            padding: 0;
        }
        header, footer {
            background-color: #1a1a1a;
            padding: 20px;
            text-align: center;
        }
        header h1, footer p {
            margin: 0;
        }
        nav {
            text-align: center;
            padding: 10px;
        }
        nav a {
            color: #d0d0d0;
            margin: 0 15px;
            text-decoration: none;
            border-bottom: 2px solid transparent;
        }
        nav a:hover {
            color: #00aaff;
            border-bottom: 2px solid #00aaff;
        }
        section {
            padding: 20px;
            max-width: 900px;
            margin: auto;
        }
        .highlight {
            color: #00aaff;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .gallery img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            cursor: pointer;
        }
        .gallery img:hover {
            opacity: 0.8;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.9);
        }
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }
        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }
        .video {
            text-align: center;
            margin-bottom: 40px;
        }
        .contact-info {
            list-style: none;
            padding: 0;
        }
        .contact-info li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>theharber.</h1>
    </header>
    <nav>
        <a href="#about">about.</a>
        <a href="#music">music.</a>
        <a href="#art">art.</a>
        <a href="#contact">contact.</a>
    </nav>
    <section id="about">
        <h2>about me</h2>
        <p>hey, I'm theharber.</p>
        <p>I'm an artist and musician that aims to create unique experiences through collaborative, human-driven use of generative AI.</p>
    </section>
    <section id="music">
        <h2>music.</h2>
        <div class="video">
            <h3>official releases.</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?si=EWwOQgygC5NF-nJy&amp;list=OLAK5uy_ny2cpUt400T5x_TMQVPTFJY1BawhBIikE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="video">
            <h3>videos.</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?si=RYQuYgenPpd3Ax1o&amp;list=PL-0b-6fteVr86pz4Won8lpQNVG7aVRFp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>
    <section id="art">
        <h2>art.</h2>
        <div class="gallery">
            <?php
            $dir = 'img/art/';
            $images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            foreach($images as $image) {
                echo '<img src="' . $image . '" alt="Artwork" onclick="openModal(this)">';
            }
            ?>
        </div>
    </section>
    <section id="contact">
        <h2>contact.</h2>
        <ul class="contact-info">
            <li><span class="highlight">discord:</span> theharber.</li>
            <li><span class="highlight">email:</span> theharber@icloud.com</li>
        </ul>
    </section>
    <footer>
        <p>&copy; 2024 theharber.</p>
    </footer>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modal-img">
    </div>

    <script>
        function openModal(element) {
            var modal = document.getElementById("myModal");
            var modalImg = document.getElementById("modal-img");
            modal.style.display = "block";
            modalImg.src = element.src;
        }

        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }

        // Close modal when clicking outside the image
        window.onclick = function(event) {
            var modal = document.getElementById("myModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
