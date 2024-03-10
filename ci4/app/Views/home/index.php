<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./assets/home/style.css">
</head>
<body>

    <nav>
        <div class="nav-item">
            <div class="nav-item-top">
                <a href="#about" class="nav-eng">about</a>
                <div class="nav-circle-parent">
                    <div class="nav-circle">
                    
                    </div>
                </div>
            </div>
            <a href="#about"><p>ク モ</p></a>
        </div>
        <div class="nav-item">
            <div class="nav-item-top">
                <a href="#skills" class="nav-eng">skills</a>
                <div class="nav-circle-parent">
                    <div class="nav-circle">
                        
                    </div>
                </div>
            </div>
            <a href="#skills"><p>ツ ー ル</p></a>
        </div>
        <div class="nav-item">
            <div class="nav-item-top">
                <a href="#works" class="nav-eng">works</a>
                <div class="nav-circle-parent">
                    <div class="nav-circle">
                        
                    </div>
                </div>
            </div>
            <a href="#works"><p>職  人</p></a>
        </div>
        <div class="nav-item">
            <div class="nav-item-top">
                <a href="#contact" class="nav-eng">contact</a>
                <div class="nav-circle-parent">
                    <div class="nav-circle">
                        
                    </div>
                </div>
            </div>
            <a href="#contact"> <p>リ ン ク</p> </a>
        </div>
    </nav>

    <section id="hero">

        <div id="hero-txt">
            <span><?= getenv('name')?> </span>
        </div>

    </section>

    <section class="section-about">

        <div id="about">
            <h1>ABOUT ME.</h1>

            <div>

                <div id="about-img-div">
                    <div>
                        <div id="about-img-parent">
                                <img style="height: 100%" id="logo" src="<?= getenv('aboutimg')?>" />
                        </div>
                    </div>
                </div>

                <div id="about-desc">
                        
                    <div>
                        <h2> STUDENT </h2>
                        <h2> DEVELOPER </h2>
                        <h2> GAMER </h2>
                        <?= getenv('about'); ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <div class="cursor" style="position: absolute; pointer-events: none; height: 24px; width: 24px; background-color: #ddbda2; border-radius: 50%; z-index: 5;">

    </div>
    
    <section id="section-skills" style="padding-right: 8%;">
        <div id="skills" class="section-head">
            <h1>SKILLS.</h1>
        </div>
        <div id="bento" class="container">
            <div class="javascript">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/JavaScript-logo.png/600px-JavaScript-logo.png" alt="">
            </div>
            <div class="html">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1024px-HTML5_logo_and_wordmark.svg.png" alt="" srcset="" >
            </div>
            <div class="python">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/1869px-Python-logo-notext.svg.png" alt="">
            </div>
            <div class="sql">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Sql_data_base_with_logo.png/800px-Sql_data_base_with_logo.png?20210130181641" alt="">
            </div>
            <div class="django">
                <img src="https://upload.wikimedia.org/wikipedia/de/thumb/0/0e/Django-logo.svg/504px-Django-logo.svg.png?20080114132047" alt="" srcset="" >
            </div>
            <div class="css">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/800px-CSS3_logo_and_wordmark.svg.png" alt="">
            </div>
            <div class="github">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Octicons-mark-github.svg/600px-Octicons-mark-github.svg.png" alt="" srcset="">
            </div>
            <div class="git">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Git-logo.svg/1200px-Git-logo.svg.png" alt="" srcset="" >
            </div>
            <div class="vscode">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Visual_Studio_Code_1.35_icon.svg" alt="">
            </div>
            <div class="bootstrap">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/512px-Bootstrap_logo.svg.png" alt="" srcset="">
            </div>
            <div class="non"><div></div></div>
            <div class="non"><div></div></div>
            <div class="non"><div></div></div>
            <div class="non"><div></div></div>
            <div class="non"><div></div></div>
            <div class="non"><div></div></div>
            <div class="non"><div></div></div>
            <div class="non"><div></div></div>
            <div class="non"><div></div></div>
            <div class="non"><div></div></div>
          </div>
    </section>
    
    <section id="section-works" style="padding-right: 8%;">
        <div id="works" class="section-head">
            <h1>WORKS. </h1>
        </div>
        <div class="section-content">
            <div class="content" style="height: 90svh; position: relative;">

                <div id="content-top" >
                    <div class="content-top" style="border-top: 1px solid #1e1e1e; display: flex; justify-content: flex-start; padding: 4svw; height: 100%; overflow:hidden;">
                        <div style=" width: 100%; display: flex; justify-content: center; align-items: center; overflow: hidden; position: relative;">
                            <img class="non-hover-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Great_Wave_off_Kanagawa2.jpg/1920px-Great_Wave_off_Kanagawa2.jpg" alt="" srcset="" style="width: 102%;">
                            <img class="hover-img" src="https://images.unsplash.com/photo-1616469829167-0bd76a80c913?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" style="width: 102%;">
                        </div>
                    </div>
                </div>

                <div style="position: absolute; width: 100%; bottom: 0;">
                    <div class="content-bot" style="display: flex; justify-content: flex-end;">
                        <div style="width: 900px; padding: 4svw; border-top: 1px solid #1e1e1e;">
                            <h3 style="font-family: 'Krona One', sans-serif; font-size: 3em; margin: .5em;"> Twitter Clone</h3>
                            <p style="font-family:Arial, Helvetica, sans-serif;font-size: 2em; margin: .5em;"> A social networking website application designed to look as close as possible to Twitter / X.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="content" style="height: 90svh; position: relative;">

                    <div id="content-top" >
                        <div class="content-top" style="border-top: 1px solid #1e1e1e; display: flex; justify-content: flex-start; padding: 4svw; height: 100%; overflow:hidden;">
                            <div style=" width: 100%; display: flex; justify-content: center; align-items: center; overflow: hidden; position: relative;">
                                <img class="non-hover-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/%E5%86%A8%E5%B6%BD%E4%B8%89%E5%8D%81%E5%85%AD%E6%99%AF_%E6%B7%B1%E5%B7%9D%E4%B8%87%E5%B9%B4%E6%A9%8B%E4%B8%8B-Under_the_Mannen_Bridge_at_Fukagawa_%28Fukagawa_Mannenbashi_shita%29%2C_from_the_series_Thirty-six_Views_of_Mount_Fuji_%28Fugaku_sanj%C5%ABrokkei%29_MET_DP141017.jpg/1920px-thumbnail.jpg" alt="" srcset="" style="width: 102%;">
                                <img class="hover-img" src="https://images.unsplash.com/photo-1616469829167-0bd76a80c913?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" style="width: 102%;">
                            </div>
                        </div>
                    </div>
    
                    <div style="position: absolute; width: 100%; bottom: 0;">
                        <div class="content-bot" style="display: flex; justify-content: flex-end;">
                            <div style="width: 900px; padding: 4svw; border-top: 1px solid #1e1e1e;">
                                <h3 style="font-family: 'Krona One', sans-serif; font-size: 3em; margin: .5em;"> Pogi Bot </h3>
                                <p style="font-family:Arial, Helvetica, sans-serif;font-size: 2em; margin: .5em;"> 
                                A discord bot with fun and silly features created to replace me during my sleep for a private server. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="content" style="height: 90svh; position: relative;">

                    <div id="content-top" >
                        <div class="content-top" style="border-top: 1px solid #1e1e1e; display: flex; justify-content: flex-start; padding: 4svw; height: 100%; overflow:hidden;">
                            <div style=" width: 100%; display: flex; justify-content: center; align-items: center; overflow: hidden; position: relative;">
                                <img class="non-hover-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/%E5%86%A8%E5%B6%BD%E4%B8%89%E5%8D%81%E5%85%AD%E6%99%AF_%E7%94%B2%E5%B7%9E%E7%8A%AC%E7%9B%AE%E5%B3%A0-The_Inume_Pass_in_Kai_Province_%28K%C5%8Dsh%C5%AB_Inume_t%C5%8Dge%29%2C_from_the_series_Thirty-six_Views_of_Mount_Fuji_%28Fugaku_sanj%C5%ABrokkei%29_MET_DP141045.jpg/1280px-thumbnail.jpg" alt="" srcset="" style="width: 102%;">
                                <img class="hover-img" src="https://images.unsplash.com/photo-1616469829167-0bd76a80c913?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" style="width: 102%;">
                            </div>
                        </div>
                    </div>
    
                    <div style="position: absolute; width: 100%; bottom: 0;">
                        <div class="content-bot" style="display: flex; justify-content: flex-end;">
                            <div style="width: 900px; padding: 4svw; border-top: 1px solid #1e1e1e;">
                                <h3 style="font-family: 'Krona One', sans-serif; font-size: 3em; margin: .5em;"> Forums Site </h3>
                                <p style="font-family:Arial, Helvetica, sans-serif;font-size: 2em; margin: .5em;"> 
                                An online discussion site for community announcements, discussions, questions, etc. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>


    
    <footer id="footer">
        <div id="contact">

        </div>
        <div id="footer-start">
            GET IN TOUCH 
        </div>
        <div id="footer-end">
            <section>
                <ul>
                    <header>
                        Socials
                    </header>
                    <li>
                        <a href="<?= getenv('linkedin'); ?>" target="_blank">Linked In</a>
                    </li>
                    <li>
                        <a href="https://www.github.com/ztest95/" target="_blank">Github</a>
                    </li>
                    <li>
                        <a href="<?= getenv('facebook'); ?>" target="_blank">Facebook</a>
                    </li>
                    <li>
                        <a href="<?= getenv('instagram'); ?>" target="_blank">Instagram</a>
                    </li>
                </ul>
            </section>
        </div>

    </footer>

    <div id="hero-bg">
            <div id="circle1" class="hero-circle">
            
            </div>
    
            <div id="circle2" class="hero-circle">
                
            </div>
    
            <div id="circle3" class="hero-circle">
                
            </div>
        </div>

</body>

<script src="./assets/home/script.js"></script>
</html> 