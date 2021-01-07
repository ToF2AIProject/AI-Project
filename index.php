<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    br{
        margin-top: 20px;
    }
    label {
        position: absolute;
        margin-left: 230px;
    }
    select {
        position: absolute;
        margin-left: 800px;
        width: 150px;
    }
    div {
        text-align: center;
    }
    #resetBUTTON {
        position: absolute;
        margin-left: 500px;
    }
    #kjonnTEKST{
        position: absolute;
        top: 103%;
        left: 60%;
    }

</style>
<span id="kjonnTEKST"></span>
<?php
$cookie_name = "kjonn";
setcookie($cookie_name, "undifined", time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<body>
    <form method="get" name="form" onsubmit="return doMath();">
        <label>1. How old are you?</label>
        <select id="a">
            <option>Select answer</option>
            <option>0 - 18</option>
            <option>19 - 25</option>
            <option>26 - 35</option>
            <option>36 - 50</option>
            <option>51 - 65</option>
            <option>66+</option>
        </select>
        <br>
        <label>2. Are you a cat or a dog person?</label>
        <select id="b">
            <option selected>Select answer</option>
            <option>Dog</option>
            <option>Cat</option>
            <option>Neither</option>
        </select>
        <br>
        <label>3. Do you eat meat?</label>
        <select id="c">
            <option>Select answer</option>
            <option>Yes</option>
            <option>No</option>
        </select>
        <br>
        <label>4. Do you work in the private or public sector?</label>
        <select id="d">
            <option>Select answer</option>
            <option>Public sector</option>
            <option>Private sector</option>
            <option>Neither / I don't work</option>
        </select>
        <br>
        <label>5. Do you work with people?</label>
        <select id="e">
            <option>Select answer</option>
            <option>Yes</option>
            <option>No</option>
            <option>I don't work</option>
        </select>
        <br>
        <label>6. Do you do white or blue collar work?</label>
        <select id="f">
            <option>Select answer</option>
            <option>White collar</option>
            <option>Blue collar</option>
            <option>Neither / I don't work</option>
        </select>
        <br>
        <label>7. How many hours of exercise do you get in an average week?</label>
        <select id="g">
            <option>Select answer</option>
            <option>1 or less</option>
            <option>2 - 5</option>
            <option>6 - 10</option>
            <option>10+</option>
        </select>
        <br>
        <label>8. What kind of exercise do you prefer?</label>
        <select id="h">
            <option>Select answer</option>
            <option>Endurance (running or similar)</option>
            <option>Sports (fotball, basketball or similar)</option>
            <option>Strength training (weight lifting, body weight exercise or similar)</option>
            <option>Yoga</option>
        </select>
        <br>
        <label>9. Do you play video games regularly?</label>
        <select id="i">
            <option>Select answer</option>
            <option>Yes</option>
            <option>No</option>
        </select>
        <br>
        <label>10. If you play video games regularly, what kind of games do you prefer?</label>
        <select id="j">
            <option>Select answer</option>
            <option>Mobile games</option>
            <option>PC games</option>
            <option>Console games</option>
            <option>I don't play video games</option>
        </select>
        <br>
        <label>11. Do you have a creative hobby?</label>
        <select id="k">
            <option>Select answer</option>
            <option>Yes</option>
            <option>No</option>
        </select>
        <br>
        <label>12. What type of movies do you prefer?</label>
        <select id=l name="movie">
            <option>Select answer</option>
            <option>More action</option>
            <option>More drama</option>
        </select>
        <br>
        <label>13. What kind of subject did/do you prefer at school?</label>
        <select id="m">
            <option>Select answer</option>
            <option>STEM fields (science, technology, engineering, and mathematics.)</option>
            <option>Social studies (sociology, psycology, etc.)</option>
            <option>Creative subjects (art, music, workshops etc.)</option>
            <option>Other/None of the above</option>
        </select>
        <br>
        <label>14. Would you consider yourself an outdoorsy person?</label>
        <select id="n">
            <option>Select answer</option>
            <option>Yes</option>
            <option>No</option>
        </select>
        <br>
        <label>15. What is your favorite color?</label>
        <select id="o"> 
            <option>Select answer</option>
            <option>None/I like all colors</option>
            <option>Blue</option>
            <option>Green</option>
            <option>Yellow</option>
            <option>Orange</option>
            <option>Red</option>
            <option>Purple</option>
            <option>Black / white</option>  
        </select>
        <br>
        <label>16. Do you prefer taking notes by hand, or by computer?</label>
        <select id="p">
            <option>Select answer</option>
            <option>By hand</option>
            <option>By computer</option>
        </select>
        <br>
        <label>17. Do you consider career or family to be more important?</label>
        <select id="q">
            <option>Select answer</option>
            <option>Career</option>
            <option>Familly</option>
            <option>They are equally important</option>
        </select>
        <br>
        <label>18. Do you prefer salty or sweet snacks?</label>
        <select id="r">
            <option>Select answer</option>
            <option>Salty</option>
            <option>Sweet</option>
            <option>I don't have a preference</option>
        </select>
        <br>
    </form>
    <a href="answer.php">
        <input type="submit" name="send" value="Submit" onclick="doMath()">
    </a>
    <?php
    
    ?>
</body>

<script>
    var koeffisient = [-0.02858247,  0.08275379, -0.08441117, -0.0270833,   0.01021312, -0.00322312,
        0.02181649, -0.01443412, -0.00902587, -0.06572786,  0.13755944, -0.02378677,
        -0.03298629,  0.04255084, -0.00539727, -0.01043053,  0.01168046, -0.01667142]
    
    function doMath(){
        var a = document.getElementById("a").selectedIndex;
        var b = document.getElementById("b").selectedIndex;
        var c = document.getElementById("c").selectedIndex;
        var d = document.getElementById("d").selectedIndex;
        var e = document.getElementById("e").selectedIndex;
        var f = document.getElementById("f").selectedIndex;
        var g = document.getElementById("g").selectedIndex;
        var h = document.getElementById("h").selectedIndex;
        var i = document.getElementById("i").selectedIndex;
        var j = document.getElementById("j").selectedIndex;
        var k = document.getElementById("k").selectedIndex;
        var l = document.getElementById("l").selectedIndex;
        var m = document.getElementById("m").selectedIndex;
        var n = document.getElementById("n").selectedIndex;
        var o = document.getElementById("o").selectedIndex;
        var p = document.getElementById("p").selectedIndex;
        var q = document.getElementById("q").selectedIndex;
        var r = document.getElementById("r").selectedIndex;

        var kjonn = (a * koeffisient[0]) + (b * koeffisient[1]) + (c * koeffisient[2]) + (d * koeffisient[3]) + (e * koeffisient[4]) + (f * koeffisient[5]) + (g * koeffisient[6]) + (h * koeffisient[7]) + (i * koeffisient[8]) + (j * koeffisient[9]) + (k * koeffisient[10]) + (l * koeffisient[11]) + (m * koeffisient[12]) + (n * koeffisient[13]) + (o * koeffisient[14]) + (p * koeffisient[15]) + (q * koeffisient[16]) + (e * koeffisient[17]) + 1.5722050810110275;
        console.log(kjonn);
        kjonn = Math.round(kjonn);

        if(kjonn == 2){
            console.log("Dude");
            document.getElementById("kjonnTEKST").innerHTML = "Dude";
            document.cookie = "kjonn=Male"

        } else {
            console.log("Dudette");
            document.getElementById("kjonnTEKST").innerHTML = "Dudette";
            document.cookie = "kjonn=Female"
        }
        console.log(document.cookie);
        return false;
    }
</script>

</html>