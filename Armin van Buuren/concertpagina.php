<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Armin van Buuren</title>
    <link rel="stylesheet" href="overarmin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">       
</head>
<body>
    <div href="#top">
        <header class="socialmedia">
            <div class="social_icons">
                <a href="#" class="fa fa-twitter-square"></a>
                <a href="#" class="fa fa-facebook-square"></a>
                <a href="#" class="fa fa-linkedin-square"></a>
            </div>
        </header>
    </div>
    <div>
        <header class="buuren">
            <div class="armin">
                Armin Van Buuren
            </div>
        </header>
    </div>
    <div class="driehoek" id="driehoek_header"></div>
    <div>
        <header class="header">
            <div class="header_gradient">
                <div class="header_block">
                    Don't be a prisoner
                </div>
            </div>
        </header>
    </div>
    <div>
        <nav class="nav">
            <div class="menu_tekst">
                <a href="index.php"> Home </a> |
                <a href="#"> Over Armin </a> |
                <a href="#"> Reserveren </a> |
                <a href="#"> Contact</a>
            </div>
        </nav>
    </div>
    <div class="content1">
        <div class="content_titel1">
        </div>
        <div class="tekst_datum">
            <img style="width: 700px;" src="arminvanbuuren.jpg" alt="Armin van Buuren">
            <br/>
            <br/>

            <br/><span class="tekst_home">Armin van Buuren</span></br>
            <p><b>Zoek concerten van Armin van Buuren</b></p>
            <form> 
                Naam concert: <input type="text" id="conc">
            </form>
            <p>Suggestions: <span id="concert"></span></p>
            <br/>
            <br/>
            <hr>
            <div class="fa fa-calendar-check-o"> September 17, 2015</div>
            <hr>
        </div>
        <div><span class="title_tekst">Muziek Armin van Buuren:</span></div>
        <aside class="categorie">
            <div class="categorie_tekst">
                * Another you
                <br/> * This is what it feels like
                <br/> * Stardust
                <br/> * Alone
                <br/> * Ping pong
                <br/> * Intense
                <br/>
                </br>
            </div>
        </aside>
        <aside class="berichten">
            <span class="title_tekst1"> Comments: </span>
            <div class="berichten_tekst">
                <span class="berichten_naam">Admin</span>
                <br/> januari 27, 2015
                <div class="berichten_tekst1">My new track with @HARDWELL is out now! #OffTheHook</div>
            </div>
            <div class="berichten_tekst">
                <span class="berichten_naam">Admin</span>
                <br/> maart 12, 2015
                <div class="berichten_tekst1">Want to relive the memories? Watch my @Tomorrowland set now! https://youtu.be/4gRjnaitguQ
                </div>
            </div>
            <div class="berichten_tekst">
                <span class="berichten_naam">Admin</span>
                <br/> juli 11, 2015
                <div class="berichten_tekst1">I absolutely love Lowland's classical cover of my track #Blue Fear! Check out the other covers on the album as well! https://www.youtube.com/watch?v=b1aX8Cef_gI …</div>
            </div>
        </aside>
    </div>
    <div>
        <a href="#top" class="top_button"><img style="width: 70px !important;" src="top_button.png" alt="Back to top button"></a>
    </div>
    <footer class="footer_icons">
        <div class="socialmedia1">
            <div class="social_icons_onder">
                <a href="#" class="fa fa-twitter-square"></a>
                <a href="#" class="fa fa-facebook-square"></a>
                <a href="#" class="fa fa-linkedin-square"></a>
            </div>
        </div>
    </footer>
 <script>
                var conc = document.getElementById("conc");

                var xmlhttp = new XMLHttpRequest();
                conc.addEventListener("keyup", function(){
                    xmlhttp.onreadystatechange = function() 
                    {
                         document.getElementById("concert").innerHTML="<img src='ajax-loader.gif' />";

                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            console.log(xmlhttp);
                            document.getElementById("concert").innerHTML = xmlhttp.responseText; 
                        }
                    }
                    if (conc.length == 0) 
                    { 
                        document.getElementById("concert").innerHTML = "";
                        return;
                    } 
                    else
                    {
                        xmlhttp.open("GET", "db_connectie.php?i=" + conc.value, true);
                        xmlhttp.send();
                    }
                });
        </script>
       <script>
            var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                     if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("demo").innerHTML = xmlhttp.responseText;
                    }
                }
                    
            xmlhttp.open("GET", "json.php", true);
            xmlhttp.send();
            
            var i = "";
            var object = JSON.parse(xmlhttp.responseText);
            
                for(x=0;x < object.concert.length; x++){
                   i += object.concert[x].naam + "<br />";
                    i += object.concert[x].prijs + "<br />"; 
                    i += object.concert[x].beschrijving + "<br />"; 
                }
             
                document.getElementById("demo").innerHTML = object;
        </script>
</body>


</html>