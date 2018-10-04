
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

<style>



    @font-face {
    font-family: "titillium-web";
	src: url('./police/titillium-web.ttf');
}

img {
    display: inline-block;
}

.menus{
    font-family: "titillium-web", serif;
    font-size:30px;
    color:#004e79;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #004e79;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 5%;
    font-family: "titillium-web", serif;
}

.sidenav a {
    padding: 0% 10%;/*8px 8px 8px 32px;*/
    text-decoration: none;
    font-size:20px; /*25px;*/
    color: #fff;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 1%;
    right: 1%;
    font-size:auto ;
    margin-left: 15%;
}
#MenuPc
{

display: none;

}

#logoAc
{

padding-top:80px;

}

@media screen and (max-height: 450px) {
    
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

@media only screen and (min-width: 768px) {
 
#truc
{

text-align: left;

}

    .sidenav {
        display: none;
    }
    .menus {
        display: none;
    }

#MenuPc
{

display:inline ;

}

ul {
  font-family: "titillium-web", serif;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #004e79;
}

 
}

</style>


<!-- Menu téléphone -->
<div id="mySidenav" class="sidenav">
   
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img id="logoAc" src="Include/images/logo-help-long.png" alt="logo-help"  style="margin-left:5%; margin-right:25%; width: auto; height: auto; max-width: 70%; max-height: 70%">
  <a href="PageAccueil.php">Accueil</a>
  <a href="PageEtu.php">Etudiant</a>
  <a href="pagePro.php">professionnel</a>
  <a href="http://www.hep-education.com/contact/">Contact</a>
</div>

<span style="cursor:pointer" class="menus" onclick="openNav()">&#9776; Menu</span>
<!-- Menu téléphone -->

<!-- Menu Pc -->
<div id="MenuPc">
<ul>
  <li><a class="active" href="PageAccueil.php">Accueil</a></li>
  <li><a href="PageEtu.php">Etudiant</a></li>
  <li><a href="pagePro.php">Professionel</a></li>
  <li><a id="truc" href="http://www.hep-education.com/contact/">Contact</a></li>
</ul>
<!-- Menu Pc -->
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "30%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
  </body>   
     
</html> 
