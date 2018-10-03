
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


@media screen and (max-height: 450px) {
    
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


<div id="mySidenav" class="sidenav">
   
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img src="Include/images/logo-help-long.png" alt="logo-help"  style="margin-left:5%; margin-right:25%; width: auto; height: auto; max-width: 70%; max-height: 70%">
  <a href="PageAccueil.php">Accueil</a>
  <a href="">Etudiant</a>
  <a href="pagePro.php">professionnel</a>
  <a href="#">Contact</a>
</div>

<span style="cursor:pointer" class="menus" onclick="openNav()">&#9776; Menu</span>

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
