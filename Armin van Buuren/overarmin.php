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
            <div id="grotermaken"class="tekst_datum"> 
                <img style="width: 700px;" src="arminvanbuuren.jpg" alt="Armin van Buuren"><br/><br/>
                <a id="groter"> + </a> <a id="kleiner"> - </a>
                <br/><span id="groter" class="tekst_home">Armin van Buuren</span></br></br><span id="gk">Armin van Buuren groeide op in Koudekerk aan den Rijn en bracht zijn middelbareschooltijd door aan het Stedelijk Gymnasium in Leiden. Van Buurens fascinatie voor muziek ontwikkelde zich al in een vroeg stadium van zijn leven. Dit had vooral te maken met zijn vader, die een fervent muziekkenner was en naar vele verschillende muziekstijlen luisterde. Behalve zijn fascinatie voor muziek ontwikkelde Van Buuren ook interesse in technologie en computers. Toen hij veertien jaar oud was, begon hij voor het eerst muziek te maken.

        Gedurende zijn jeugd kon men Van Buuren op de fiets altijd aantreffen met een koptelefoon op, luisterend naar Jean Michel Jarre en Ben Liebrand-minimixes. Hij zond zelfs een demo van zijn productie naar zijn idool Liebrand, die zeer enthousiast was over de jonge Van Buuren. Mede hierdoor leerde Liebrand Van Buuren hoe een muziekstuk te produceren en te mixen. Van Buurens passie voor mixen bleef groeien. Zijn eerste baantje als dj had hij in de discotheek 'Nexus', in het derde jaar van zijn rechtenstudie in Leiden.</span>
<br/><br/><br/><br/>
                <hr>
                   <div class="fa fa-calendar-check-o">  September 17, 2015</div>
                <hr>
            </div>
            <div><span class="title_tekst">Muziek Armin van Buuren:</span></div>
            <aside class="categorie"> 
                <div class="categorie_tekst">
                    * Another you     <br/>
                    * This is what it feels like <br/>
                    * Stardust <br/>
                    * Alone <br/>
                    * Ping pong <br/>
                    * Intense <br/> 
                    </br>
                </div>
            </aside>
            <aside class="berichten"> 
                <span class="title_tekst1"> Comments: </span>
                <div class="berichten_tekst">
                    <span class="berichten_naam">Admin</span><br/>
                    januari 27, 2015
                    <div class="berichten_tekst1">My new track with @HARDWELL is out now! #OffTheHook</div>
                </div>
                <div class="berichten_tekst">
                    <span class="berichten_naam">Admin</span><br/>
                    maart 12, 2015
                    <div class="berichten_tekst1">Want to relive the memories? Watch my @Tomorrowland set now!

https://youtu.be/4gRjnaitguQ</div>
                </div>
                <div class="berichten_tekst">
                    <span class="berichten_naam">Admin</span><br/>
                    juli 11, 2015
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
            
            function Mystart(){
                var tekst = document.getElementById('groter');
                
                tekst.addEventListener("click",function(){
                grote()
                });
                 
                var klein = document.getElementById('kleiner');
                
                klein.addEventListener("click",function(){
                kleine()
                });
                
                
                
                function grote()
                {
                    var x = document.getElementById('gk');
                    var font = parseInt(window.getComputedStyle(x).fontSize);
                    font += 1;
                    x.setAttribute("style", "font-size:"+font+"px");
                }}
        
                function kleine()
                {
                    var x = document.getElementById('gk');
                    var font = parseInt(window.getComputedStyle(x).fontSize);
                    font -= 1;
                    x.setAttribute("style", "font-size:"+font+"px");
                }
            
            Mystart();
        </script>
    </body>
</html>
