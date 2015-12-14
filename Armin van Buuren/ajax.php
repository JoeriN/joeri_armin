<!doctype html>
<html lang="nl">
    <head>
    
    </head>
    <body>
        <p><b>Zoek concerten van Armin van Buuren</b></p>
        <form> 
            Naam concert : <input type="text" id="conc">
        </form>
        <p>Suggestions: <span id="concert"></span></p>
        <script>
                var conc = document.getElementById("conc");

                var xmlhttp = new XMLHttpRequest();
                conc.addEventListener("keyup", function(){
                    xmlhttp.onreadystatechange = function() 
                    {
                         document.getElementById("concert").innerHTML="<img src='ajax-loader.gif' />";

                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
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
    </body>
</html>
