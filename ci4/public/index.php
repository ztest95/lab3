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
    <link rel="icon" type="image/x-icon" href="./media/sus.webp">
    
    <!-- File Paths -->
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script type="module" src="./scripts/script.js"></script>
</head>
<!-- Home, Introduction, Editors, Basic, Comment -->
<body id="home">

    <header id="header" class="hero">
        <div id="header-left">
            <img id="logo" src="./media/head.png" />
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
        <img src="./media/sus-Yellow.webp" alt="Amogus Yellow" id="img-amogus">
        <!-- https://among-us.fandom.com/wiki/Yellow -->
    </section>

    <section id="sus-section" style="display: flex">
        <img class="sus" src="./media/sus-Yellow.webp" alt="Amogus Yellow" id="img-amogus-yellow">
        <img class="sus" src="./media/sus-Cyan.webp" alt="Amogus Yellow" id="img-amogus-cyan">
        <img class="sus" src="./media/sus-Lime.webp" alt="Amogus Yellow" id="img-amogus-lime">
    </section>
    <div style='display: flex; justify-content: center;' >
        <h1>Score: </h1><h1 id='score-counter' style="text-alignment: center;"></h1>
    </div>
    
    <section id="form" class="col">
    
        <div>
        <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
            }
        }
        
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            }
        }
            
        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>
            <h2>PHP Form Validation Example</h2>
            <p><span class="error">* required field</span></p>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            Website: <input type="text" name="website" value="<?php echo $website;?>">
            <span class="error"><?php echo $websiteErr;?></span>
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
            <br><br>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
            </form>

            <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
        ?>
        </div>

       
    </section>

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