<!DOCTYPE html>
<html>
    <head>
        <title>
            DOM
</title>
    </head>
    <body>
        <h1 id ="pagetitle">Light mode </h1>
        <button id="switchmotion" onClick="toggle()"> switch</button>

        <script>

            function toggle()
            {
                var body= document.body;
                var title= document.getElementById("pagetitle");
                var button= document.getElementById("switchmotion");

                if (body.style.backgroundColor==="black")
            {
                body.style.backgroundColor="white";
                title.style.color="black";
                title.innerHTML="Light mode";
                button.innerHTML="switch to dark mode";
            }


            else
            {
                body.style.backgroundColor="black";
                title.style.color="white";
                title.innerHTML="dark mode";
                button.innerHTML="switch to light mode";
            }

            }


            
        </script>
    </body>