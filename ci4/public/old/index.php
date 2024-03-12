<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ztest95">
    <meta name="keywords" content="HTML, CSS, JS">

    <!-- Meta -->
    <title>Yellow Potato</title>
    <link rel="icon" type="image/x-icon" href="../assets/old/media/sus-Yellow.webp">
    
    <!-- File Paths -->
    <link rel="stylesheet" href="../assets/old/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script type="module" src="../assets/old/script.js"></script>
</head>
<!-- Home, Introduction, Editors, Basic, Comment -->
<body id="home">

    <header id="header" class="hero">
        <div id="header-left">
            <img id="logo" src="../assets/old/media/head.png" />
        </div>

        <div id="header-right">
            <p>Hi, I'm</p>
            <h2>
            <span id="name"> < <span id="color">Yellow</span> Potato > </Vinz> </span>
            </h2>
            <div id="logo_hr"></div>
            <h4>Sophomore Computer Science Student</h4>
        </div>
    </header>

    <nav>
        <div>
            <ul>
                <!-- Attributes, Links -->
                <li><a href="#home">Home</a></li>
                <li><a href="#amogus">Amogus</a> </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <button id="color-theme"><i class="bi bi-brightness-low"></i></button>
    </nav>

    <div class="full-width">

    </div>
    <!-- Block -->
    <!-- Semantics, Tables -->
    <section class="col" id="section-1">
        <table>
            <tr>
                <th>Skills</th>
                <th>Hobbies</th>
                <th>Interests</th>
            </tr>
            <tr>
                <td>Git & Github</td>
                <td>Gaming</td>
                <td>Technology</td>
            </tr>
            <tr>
                <td>Django</td>
                <td>Reading</td>
                <td>Design</td>
            </tr>
            <tr>
                <td>SQL</td>
                <td>Programming</td>
                <td>Money</td>
            </tr>
        </table>

    </section>

    <blockquote>

        <div class="col">
            <p>“We are what we overcome.”</p>
             <!-- UTF-8 -->
            <footer> &#8213 Pantheon</footer>
        </div>

    </blockquote>

    <section class="col" id="projects-tools">
        <div>
            <h1>Projects</h1>
            <ul>
                <li>Personal Websites</li>
                <li>Community Forums Website</li>
                <li>Social Media Site</li>
                <li>Onboarding App</li>
                <li>Task Management Website</li>
                <li>Blogging Website</li>
                <li>E-commerce Store</li>
            </ul>
        </div>

        <div>
            <h1>Tools</h1>
            <ul>
                <li>Visual Studio Code</li>
                <li>Git & Github</li>
                <li>Docker</li>
                <li>Trello</li>
                <li>Figma</li>
                <li>Github Codespaces</li>
            </ul>
        </div>

        <div>
            <h1>Learning</h1>
            <ul>
                <li>PostgreSQL, NoSQL</li>
                <li>RESTful APIs</li>
                <li>Cloud Deployment</li>
                <li>CI/CD</li>
                <li>Testing</li>
            </ul>
        </div>
    </section>
    <hr class="col">
    <section class="col" id="section-games">
        <p>Some Personal Favorites</p>
        <h1 class="align-middle">Games</h1>
        <ul>
            <li>League of Legends</li>
            <li>Minecraft</li>
            <li>Legend of Zelda</li>
        </ul>

        <h1 class="align-middle">Anime</h1>
        <ul>
            <li>Hunter x Hunter</li>
            <li>Attack on Titan</li>
            <li>Tora-Dora</li>
        </ul>

        <h1 class="align-middle">Food</h1>
        <ul>
            <li>Sinigang</li>
            <li>Bicol Express from my high school</li>
            <li>Chao Fan</li>
        </ul>

    </section>

    <div class="full-width">
        <div id="circle-2">

        </div>
    </div>

    <section class="space col">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, nulla. Voluptatum excepturi in cum itaque quos error sapiente ea magni quo voluptate optio culpa, illo possimus fuga esse sint nihil.</p>
    </section>

    <section id="boxes" class="col">
        <div class="box">
            <div>
                <i class="bi bi-joystick"></i>
                <h1>Gaming</h1>
            </div>
        </div>
        <div class="box">
            <div>
                <i class="bi bi-book-half"></i>
                <h1>Reading</h1>
            </div>
            
        </div>
        <div class="box">
            <div>
                <i class="bi bi-code-square"></i>
                <h1>Programming</h1>
            </div>
            
        </div>
    </section>

    <section class="col" id="amogus">
        <!-- Images -->
        <p style="text-align: center;">click me!</p>
        <img src="../assets/old/media/sus-Yellow.webp" alt="Amogus Yellow" id="img-amogus">
        <!-- https://among-us.fandom.com/wiki/Yellow -->
    </section>

    <section id="sus-section" style="display: flex">
        <img class="sus" src="../assets/old/media/sus-Yellow.webp" alt="Amogus Yellow" id="img-amogus-yellow">
        <img class="sus" src="../assets/old/media/sus-Cyan.webp" alt="Amogus Yellow" id="img-amogus-cyan">
        <img class="sus" src="../assets/old/media/sus-Lime.webp" alt="Amogus Yellow" id="img-amogus-lime">
    </section>
    <div style='display: flex; justify-content: center;' >
        <h1>Score: </h1><h1 id='score-counter' style="text-align: center;"></h1>
    </div>

    <div id="up-arrow">
        <p><a href="#home"><i class="bi bi-arrow-up-circle"></i></a></p>
        
    </div>

    <footer id="contact">
        <div>
            <h2>About this site</h2>
        <p>This website is created by ztest95 as a laboratory activity for WEBPROG course</p>
        </div>
        
        <!-- Lists -->
        <ul>
            <li><a href="https://github.com/ztest95/lab2" target="_blank">Github</a></li>
            <li><a href="" class="disabled">Linked In</a></li>
            <li><a href="" class="disabled">Twitter</a></li>
            <li><a href="" class="disabled">Facebook</a></li>
            <li><a href="" class="disabled">Instagram</a></li>
        </ul>
    </footer>
</body>
</html>