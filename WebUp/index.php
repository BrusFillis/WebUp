<?php

mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('webup');
$projects=mysql_query("select * from projects order by id desc limit 1 ");
if (isset($_POST['send'])){
    $name=$_POST['fn'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    mail("webupstudio1@gmail.com", "New letter", $message, "From: "+$email+" Name: "+$name+" \r\n");
    header ('Location: index.php');
    exit();
}
?> 
<html lang="ru">
<head>
    <title>Web Up</title>
    <meta charset="UTF-8">
    <meta name="description" content="Описание">
    <meta name="author" content="Karadjyan and Vereshyak">
    <link rel="shortcut icon" href="img/fav.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div id="header">
        <ul id="navigation">
            <li><a id="link-home" href="#home"><img src='img/logo.png' alt="logo" class="logo" width="50px;" style="margin-top:31px;"></a></li>
            <li><a id="link-works" href="#works">Works</a></li>
            <li><a id="link-about" href="#about">About</a></li>
            <li><a id="link-ability" href="#ability">Ability</a></li>
            <li><a id="link-contact" href="#contact">Contacts</a></li>
        </ul>
    </div>

    <div id="works" class="panel">
        <div class="contents">
            <a id="link-home" href="#home"><img src='img/click.png' class='click' width="50px;"></a>
            <h2>Works</h2>  
            <table style="margin-top:-296px;">
                <tr>
                 <td>
                    <a href="">
                        <div class="holder">
                            <img src="img/projects/Zoologiya.png" alt="Works" width="100%">
                            <div class="block-contacts">
                                <h3><?php echo $projects['id']; ?></h3>
                                <p class="about"><?php echo $projects['short_text']; ?></p>
                            </div>
                        </div>
                    </a>
                </td>
                <td rowspan="2">
                    <a  href="">
                       <div class="holder-ph">
                        <img src="img/projects/Project_deefault.png" alt="About" width="100%">
                        <div class="block-contacts">
                            <h3>Project.</h3>
                            <p class="about">See more</p>
                        </div>
                    </div>
                </a>
            </td>
            <td>
                <a id="link-ability" href="#ability">
                    <div class="holder">
                       <img src="img/projects/Project_deefault.png" alt="Ability" width="100%">
                       <div class="block-contacts">
                        <h3>Project.</h3>
                        <p class="about">See more</p>
                    </div>
                </div>
            </a>
        </td>
        <td>
            <a href="">
                <div class="holder" style="margin-left:-304px;">
                    <img src="img/projects/Project_deefault.png" alt="project" width="100%">
                    <div class="block-contacts">
                        <h3>Project.</h3>
                        <p class="about">See more</p>
                    </div>
                </div>
            </a>
        </td>
    </tr>
    <tr>
        <td>
            <a id="link-contact" href="#contact" style="color:#ffffff; text-decoration: none;">
                <div class="holder">
                    <img src="img/projects/Project_deefault.png" alt="Contacts" width="100%">
                    <div class="block-contacts">
                        <h3>Project.</h3>
                        <p class="about">See more</p>
                    </div>
                </div>
            </a>
        </td>
        <td >
            <div class="holder-reviews">
                <img src="img/projects/Project_deefault.png" alt="Reviews" height="100%">
                <div class="block-contacts">
                 <h3>Project.</h3>
                 <p class="about">See more</p>
             </div>
         </div>
     </td>
 </tr>
</table>  
</div>
</div>

<div id="about" class="panel">
    <div class="contents">
        <a id="link-home" href="#home"><img src='img/click.png' class='click' width="50px;"></a>
        <h2>About</h2>
        <p>5 reasons to choose us performer!<br>
            1. The result of 100%. You get ready Landing, will begin taking customer applications.<br>
            2. Stay in touch. Our Projects Manager at the connection most of the time of day, so promptly respond to your message in the process.<br>
            3. The visual result. The process of working on a project for your convenience I have uploaded to test hosting - you'll see no layout or drawing, and their future a full website with operating buttons and forms.<br>
            4. Your corrections. We will try to do everything perfectly the first time, but if you do not like something, I'll make changes until you say, "I am happy with everything."<br></p>
            <hr>
            <p>Our guarantee:<br>
                1. Work carried out in full. Our company likes working "perfectly well" the first time, so all the records and forget nothing.<br>
                2. If our company does not have time to time, you get 20%. Time - a valuable resource for the entrepreneur. If I fail to whether express terms, the price of the project is reduced by 20%.</p>
            </div>
        </div>
        <div id="ability" class="panel">
            <div class="contents">
                <a id="link-home" href="#home"><img src='img/click.png' class='click' width="50px;"></a>
                <h2>Ability</h2>
                <div class="grid">
                    <figure class="effect-lily">
                        <img src="img/ability/html.png" alt="html"/>
                        <figcaption>
                            <p>HTML5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current version of the HTML standard. HTML5 is a markup language used for structuring and presenting content on the World Wide Web.</p>
                        </figcaption>           
                    </figure>

                    <figure class="effect-lily">
                        <img src="img/ability/css.png" alt="css"/>
                        <figcaption>
                            <p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language. Although most often used to set the visual style of web pages and user interfaces written in HTML and XHTML, the language can be applied to any XML document, including plain XML, SVG and XUL, and is applicable to rendering in speech, or on other media. </p>
                        </figcaption>           
                    </figure>

                    <figure class="effect-lily">
                        <img src="img/ability/js.png" alt="js"/>
                        <figcaption>
                            <p>JavaScript is a high-level, dynamic, untyped, and interpreted programming language. It has been standardized in the ECMAScript language specification. Alongside HTML and CSS, it is one of the three core technologies of World Wide Web content production; the majority of websites employ it and it is supported by all modern Web browsers without plug-ins.</p>
                        </figcaption>           
                    </figure>
                </div>
            </div>
        </div>
        <div id="contact" class="panel">
            <div class="contents">
                <a id="link-home" href="#home"><img src='img/click.png' class='click' width="50px;"></a>
                <h2>Contacts<br><a href="skype:webupstudio1?call"><img src="img/tiles/contacts/skype.png" width="70px;"></a>
                    <a href="https://www.freelancer.com/u/webupstudio1.html" target="_blank"><img src="img/tiles/contacts/freelancer.jpg" width="70px;" style="border-radius:50%;"></a></h2>
                    <div class='maill'>
                        <form method="post" action="index.php">
                            <p> Full name: <input type="text" name="fn" size="24" required></p>
                            <p> E-mail:&#160;&#160;&#160;&#160;&#160;&#160;<input type="email" name="email" size="24" required></p>
                            <textarea rows="5" cols="32" name="message" required style="resize: none;"></textarea><br><br>
                            <button type="submit" name='send' style="background: rgba(0,0,0,0); margin: 0;padding:0;border: 0; cursor:pointer;">
                                <image src="../img/send.png" width="50px;">
                                </button>
                            </form>
                        </div>          
                    </div>
                </div>
                <div id="home" class="content">

                    <img src="img/Webup_site.png" class="bckgr">
                    <div class="content">
                        <table>
                            <tr>
                                <td>
                                    <a id="link-works" href="#works">
                                        <div class="holder" onmouseover="on()" onmouseout="out()">
                                            <img src="img/tiles/works.jpg" alt="Works" width="100%">
                                            <div class="block">
                                                <p style="padding-bottom:30%; margin: 0;">Works</p>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <a id="link-about" href="#about">
                                        <div class="holder" onmouseover="on()" onmouseout="out()">
                                            <img src="img/tiles/about.jpg" alt="About" width="100%">
                                            <div class="block-contacts">
                                                <h3>About US</h3>
                                                <p class="about">We are a web studio which is developing websites, design, creation of templates, applications for the computers on Windows</p>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <a id="link-ability" href="#ability">
                                        <div class="holder" onmouseover="on()" onmouseout="out()">
                                            <img src="img/tiles/ability.jpg" alt="Ability" width="100%">
                                            <div class="block">
                                                <p style="padding-bottom:30%; margin: 0;">Our ability</p>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a id="link-contact" href="#contact" style="color:#ffffff; text-decoration: none;">
                                        <div class="holder" onmouseover="on()" onmouseout="out()">
                                            <img src="img/tiles/contact.jpg" alt="Contacts" width="100%">
                                            <div class="block-contacts">
                                                <h3 style="color:#ffffff; text-decoration: none;">Contacts</h3>
                                                <p>
                                                    <a href="skype:webupstudio1?call"><img src="img/tiles/contacts/skype.png" width="70px;"></a>
                                                    <a href="https://www.freelancer.com/u/webupstudio1.html" target="_blank"><img src="img/tiles/contacts/freelancer.jpg" width="70px;" style="border-radius:50%;"></a>
                                                    <a id="link-contact" href="#contact"><img src="img/tiles/contacts/gmail.png" width="70px;"></a>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td colspan="2">
                                    <div class="holder-reviews" onmouseover="on()" onmouseout="out()">
                                        <img src="img/tiles/reviews.jpg" alt="Reviews" width="100%">
                                        <div class="block">
                                            <p style="padding-bottom:30%; margin: 0;">Reviews</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--Scripts-->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                <script src="js/header.js"></script>
                <script src="js/blur.js"></script>
                <script src="js/parallax.js"></script>
            </body>
            </html>
