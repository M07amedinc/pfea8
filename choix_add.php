    

<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title></title>
</head>

<body  >
        <div class="wrapper">
        <nav>
           <a href="profile_adm.php"><span class="icon1"><i class="fas fa-arrow-left"></i></span></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <div class="logo">
                <img src="img/ensa.png">
            </div>
 
        </nav>

    </div>

  <style type="text/css">
    * {
  padding:0;
  margin:0;
  text-decoration: none;
  font-weight: bold;
}

body {
  font-family: "Montserrat", sans-serif;
}

.container {
  height:90vh;
  display: flex;
}

section {
  height:70%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex:1;
  transition: all .5s;
}

section:hover {
  flex:2;
}

section h1 {
  background:rgba(0,0,0,0.2);
  color:white;
  padding: 6px 25px;
}

.etudiant{
  background:url('img/etud1o.png')   ;
  background-position: center;
  background-size: cover;
  background-blend-mode: multiply;
}

.encadrant{
  background:url('img/encad.png')   ;
  background-position: center;
  background-size: cover;
  background-blend-mode: multiply;
}


.jury{
  background:url('img/jury2o.png')      ;
  background-position: center;
  background-size: cover;
  background-blend-mode: multiply;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}



nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    min-height: 10vh;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
}
.logo{
    color: rgb(225, 225, 225);
    letter-spacing: 5px;
    font-size: 20px;
    margin:-250px;
}
#logo {
  font-weight: bold;

}
.icon1 {
    font-size: 50px;
    justify-content: left;

}


    
}
  </style>
    <script src="./app.js"></script>

  <div class="container">


  --
        <section class="jury">
      <a href="add_jury.php"><h1>Jury</h1></a>
    </section>
-->
        <section class="etudiant">
      <a href="add_etu.php"><h1>Etudiant</h1></a>
    </section>

    <section class="encadrant">
      <a href="add_enc.php"><h1>Encadrant</h1></a>
    </section>



  </div>

</body>

</html>