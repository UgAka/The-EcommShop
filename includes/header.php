<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>AKrite</title>
  	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  	<!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Magnify -->
    <link rel="stylesheet" href="magnify/magnify.min.css">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  

  	<!-- Custom CSS -->
    <style type="text/css">
    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px){ 
      #navbar-search-input{ 
        width: 60px; 
      }
      #navbar-search-input:focus{ 
        width: 100px; 
      }
    }

    /* Medium devices (desktops, 992px and up) */
    @media (min-width: 992px){ 
      #navbar-search-input{ 
        width: 150px; 
      }
      #navbar-search-input:focus{ 
        width: 250px; 
      } 
    }

    .word-wrap{
      overflow-wrap: break-word;
    }
    .prod-body{
      height:300px;
    }

    .box:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    .register-box{
      margin-top:20px;
    }

    #trending{
      list-style: none;
      padding:10px 5px 10px 15px;
    }
    #trending li {
      padding-left: 1.3em;
    }
    #trending li:before {
      content: "\f046";
      font-family: FontAwesome;
      display: inline-block;
      margin-left: 1.3em; 
      width: 1.3em;
    }

    /*Magnify*/
    .magnify > .magnify-lens {
      width: 100px;
      height: 100px;
    }
    
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  display: flex;

  right: 0px;
  left: 0px;
  position: relative;

  width: 100vw;
  height: 100vh;
}
body::before {
  content: "";
  position: absolute;
  background-image: url("/images/background.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  top: 0px;
  opacity: 0.75;
  right: 0px;
  bottom: 0px;
  left: 0px;
}
.log-in {
  width: 30%;
  max-width: 60%;
  margin-top: 2%;
  border-radius: 10px;
  max-height: max-content;
  height: max-content;
  box-shadow: 0 5px 10px;
  z-index: 3;
  background: linear-gradient(#ffa38e 0 50%, #bbe9f9 60%);
}
.header button {
  border: none;
  width: max-content;
  color: white;
  background-color: transparent;
  padding: 3px;
  border-radius: 2px;
}
.logo {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.image-section {
  text-align: center;
  vertical-align: center;
}
.text {
  margin: 10px;
  font-size: 1.1rem;
  color: white;
  font-family: "Montserrat", sans-serif;
  text-align: center;
  padding: 5px;
}
.login-image {
  width: 150px;
  height: 150px;
  border-radius: 50%;
}

.second-section {
  text-align: center;
}
.second-section p {
  color: darkgreen;
}
.second-section input[type="text"] {
  padding: 5px;
  margin: 10px;
}
h1 {
  font-size: 25px;
  font-weight: bold;
  color:lightblue;
}
div {
  color:white;
  font-weight: bold;
  font-family: cursive;
}
#btn {
  margin: 5px 5px 10px;
  padding: 5px;
  background-color: #ffa38e;
  box-shadow: 0 0 5px;
  border: none;
  color: white;
  outline: none;
  text-transform: lowercase;
  border-radius: 10px;
  width: 15%;
}
label,
.forgot-password {
  display: inline-block;
  margin: 5px;
  margin-bottom: 10px;
}
input[type="checkbox"] {
  margin: 1px;
}
input{
  border-radius: 10px;
  outline: none;
}

i {
  color: #ffa38e;
}
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
*{
    margin: 0;
    padding: 0;
}
body{
    background-color:hotpink;
    /*background: linear-gradient(90deg, rgba(1,0,0,1) 0%, rgba(0,0,0,0) 90%);*/
    font-size: 16px;
    box-sizing: border-box;
}

.container-fluid{
    max-width: 1280px;
    width: 100%;
    margin: 6px auto;
    /*background-color: aqua;*/
}
.main-header{
    width: 100%;
	position: fixed;
	top: 0;
	transition: all .4s;
    background: rgb(0,0,0);
    /*background: linear-gradient(90deg, rgba(0,0,0,0) 0%, rgba(153,16,23,1) 90deg);*/
}
.content-header{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.logo{
    display: flex;
    align-items: center;
}
.logo img{
    width: 140px;
    height: 40px;
}
.menu ul{
    display: flex;
}
.menu ul li{
    list-style: none;
    margin-left: 25px;
    margin-right: 25px;
    font-size: 1.6em;
    padding: 20px;
}
.menu ul li a{
    text-decoration: none;
    color: #fff;
}
.menu ul li a:active{
    color:  #f39d1d;
}

@media (max-width: 700px){
    .content-header{
        display: none;
    }
}

@media (min-width: 701px){
    .content-mobile #mobile{
        display: none;
    }
}

/*Menu mobile*/
.content-header-mobile{
    display: flex;
    justify-content: center;
    display: none;
}
.menu-mobile{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.content-mobile{
    display: flex;
    justify-content: flex-end;
}
.content-mobile #mobile{
    margin: 15px 20px 0 0;
}
.menu-mobile .logo{
    margin-top: 30px;
}
.menu-mobile ul{
    padding: 30px 0 30px 0;
}
.menu-mobile ul li{
    list-style: none;
    font-size: 1.6em;
    text-align: center;
    margin: 8px 0 8px 0;
}
.menu-mobile ul li a{
    text-decoration: none;
    color: #fff;
}
/*********************/

.container-banner{
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}
@media (max-width: 1199px){
    .container-banner{
        justify-content: center;
    }

}
.content-banner{
    background-color: #060606;
    display: flex;
    justify-content: center;
    margin-top: 60px;
}
.content-banner .banner{
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 600px;
    width: 100%;
    padding-top: 60px;
    padding-bottom: 60px;
}
.content-banner .banner p{
    color: #f39d1d;
    border: 3px solid #e11237;
    display: inline-block;
    padding: 5px 40px;
    font-size: 1.8em;
    margin-bottom: 2%;
}
.content-banner .banner h4{
    color: #fff;
    text-transform: uppercase;
    font-size: 3.6em;
}
.content-banner .banner h5{
    color: #fff;
    text-transform: uppercase;
}
.content-banner .banner h1{
    color: #e11237;
    text-transform: uppercase;
    font-size: 8.6em;
}
.content-banner .banner a{
    background-color: #bb7918;
    color: #0e0e0e;
    padding: 15px 30px;
    text-decoration: none;
    font-weight: bold;
    text-transform: uppercase;
}
.banner-desconto{
    display: flex;
    align-items: center;
}
.banner-desconto h5{
    font-size: 1.6em;
    margin-right: 38px;
}

.img-banner{
    max-width: 600px;
    width: 100%;
}
.img-banner img{
    max-width: 100%;
}

.content-ofertas{
    width: 100%;
    height: auto;
    background-image: url('/images/img/black-wallpaper-best.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    padding-bottom: 60px;
}
.container-ofertas{
    display: flex;
    justify-content: center;
}
.content-ofertas h1{
    color: #fff;
    text-transform: uppercase;
    font-size: 2.3em;
    text-align: center;
    margin-bottom: 40px;
    margin-top: -30px;
}
.logo-ofertas img{
    padding-top: 60px;
}

.container-cards{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
.container-cards .card{
    width: 400px;
    height: 300px;
    margin-right: 20px;
    margin-left: 20px;
    border-radius: 6px;
    background-color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
@media (max-width: 1319px){
    .container-cards .card:last-child{
        margin-top: 30px;
    }
}
@media (max-width: 1319px){
    .container-cards .card:nth-child(1){
        margin-bottom: 30px;
    }
}
.container-cards .card:hover{
    -webkit-box-shadow: 1px 2px 22px 9px #fff; 
    box-shadow: 1px 2px 22px 9px #fff;
    transition: all .3s;
    cursor: pointer;
}
.container-cards .card .card-img img{
    width: 160px;
    height: 160px;
    margin-left: 20px;
}
.container-cards .card .card-description{
    text-align: center;
    margin-right: 20px;
    padding-left: 20px;
    font-weight: 600;
}
.container-cards .card .card-description p{
    margin: 5px 0;
}

.container-cards .card .card-description .card-button{
    background-color: #f39d1d;
    padding: 8px;
    margin: 0 auto;
}
.container-cards .card .card-description .card-button-compra{
    background-color: #000;
    padding: 8px;
    display: block;
    color: #f39d1d;
    text-decoration: none;
}

.content-inscrever{
    padding-bottom: 60px;
}
.content-inscrever h1{
    text-align: center;
    color: #fff;
    padding: 40px 20px;
    font-size: 2.3em;
}
.container-from{
    display: flex;
    justify-content: center;
    background-color: coral;
    opacity: 0.8;
    max-width: 500px;
    width: 50%;
    margin: 0 auto;
    padding: 30px 0 40px;
    border-radius: 4px;
}
#form input{
    display: block;
}

.container-from button{
    padding: 10px 30px;
    background-color: #3498db;
    color: #fff;
    border: 0;
    border-radius: 4px;
    cursor: pointer;
}
.content-inscrever label{
    color: #000;
}

footer{
    background-color: #060606;
    padding: 40px 0;
}
footer p{
    color: #fff;
    text-align: center;
}
#navg{
text-decoration: none;
opacity: 0.8;
background:rgba(0, 0, 0, 0.5);
color: antiquewhite;
max-width: none;
margin: 0px;
}

.catclas{
  width:100%;
}
.content-wrapper{
  margin: 0px;
  width: 100%;
  position:relative;
}
.content-wrapper video {
    position:relative;
    z-index:0;
}
.content {
  position:absolute;
  text-align: center;
  font-family: Arial Black;
    top:1px;
    z-index:1;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  height:100%;
}
</style>
  </head>
  </html>