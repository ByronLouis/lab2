<!DOCTYPE html>
<html lang="en">
<head>
 
    <link rel="icon" href="devil.jpg" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">

<style>
    @import url('https://fonts.googleapis.com/css?family=Carter+One&display=swap&effect=shadow-multiple|fire-animation');

    .html, body {
    height: 100%;
    margin: 0;
  }

    .second-header {
        background-color: rgb(15, 15, 15);
        color: #ffffff;
        padding: 350px;
        text-align: center;
        background-image: url(backgroundgif.gif);
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        font-family: 'Carter One', system-ui;
        color: rgb(218, 216, 135);
        font-size: 25px;
    }
    
    .first-header {
      background-color: #000000;
      padding: 1%;
      text-align: center;
      font-size: 17px;
      font-family: 'Creepster', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: padding 0.3s;

    }

    .first-header a {
      color: rgb(218, 216, 135);
      text-decoration: none;
      margin: 0 10px;
      font-family: 'Creepster', sans-serif;
      transition: color 0.3s;
      cursor: pointer;
    }
 
    .first-header a:hover {
      color: #ff0000;
    }
 
    .first-header a:last-child {
      margin-right: 0.5in;
    }

    .button {
    background-color:#be2e02;
    color: rgb(255, 255, 255);
    text-decoration: none;
    border: 2px solid transparent;
    font-weight: bold;
    padding: 13px 30px;
    border-radius: 20px;
    transition: 0.3s;
    text-align: left;
    font-size: 20px;
    margin-top: 20px;
    font-family: 'Creepster', sans-serif;
    }

    .third-header {
    background-color: #0a0000;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 250px;
    color: rgb(235, 145, 27);
    font-family: 'Carter One', system-ui;
    font-size: 23px;

    }
 
    .motorgif {
        border-style:outset;
        border-width: 10px;
        border-color: rgba(255, 222, 34, 0.767);
        border-radius: 40px;
        width: 700px;
        object-fit: cover;
        margin-top: 50px;
        transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
        margin-right: 15px;
    }
    
    .motorgif:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);

    }
    
</style>

</head>
<body>

<!--MAIN PAGE-->

    <div>
    <header class="first-header">
      <a href="#homie" class="header-text" onclick="scrollToTop()">Home</a>
      <a href="#aboutMe" id="about-link" class="header-text" onclick="scrollToAbout()">About Me</a>
      <a href="#hobbies" class="header-text">Hobbies</a>
    </header>
    </div>

    <header class="second-header">
        <div class="gif-container">
        <h1 class="font-effect-fire-animation"> W e l c o m e &nbsp; t o <br> M y &nbsp; P e r s o n a l &nbsp;P r o f i l e</h1>
        <a class="button" href="#aboutMe">About Me</a>
        </div>
    </header>

    <header class="third-header" id="about">

          <h2 class="font-effect-fire-animation"> About Me:</h2>
          <p class="aboutme"> My Name is Byron Louis A. Rabajante <br> I am 20 Years Old. Born on <span id="birthdate"></span>. <br> Currently an I.T Student in Asia Pacific College</p>

          <script>
            let x = 20;
            document.getElementById("age").innerHTML = "<strong>" + x + "</strong>";
        </script>

        <script>
            const d = new Date("August 22 2003");
            const birthdateElement = document.getElementById("birthdate");
            const formattedDate = d.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' })
            birthdateElement.innerHTML = formattedDate;
            console.log(formattedDate);

        </script>

      <p id="info"></p>

        <script>
          const person = {
            firtstName: "Byron",
            age: 20,
            city: "Taguig"

        };

          document.getElementById("info").innerHTML = person.name + ", " + person.age + ", " + person.city;
        </script>

        <script>
          const myObject = {
            firstName:"Byron",
            lastName: "Rabajante",
            fullName: function() {
            return this.firstName + " " + this.lastName;
            }
          }
          document.getElementById("demo").innerHTML = myObject.fullName(); 
          </script>

          <script>
            class Movie {
              constructor(title) {
                this.moviename = title;
              }
              get cnam() {
                return this.moviename;
              }
              set cnam(x) {
                this.moviename = x;
              }
            }
            
            const myCar = new movie("Oppenheimer");
            
            document.getElementById("demo").innerHTML = mymovie.cnam;
            </script>

          <script>
            document.getElementById("info").style.color = "red";
            document.getElementById("info").style.fontFamily = "Arial";
            document.getElementById("info").style.fontSize = "larger";
            </script>

          <script>
            document.getElementById("info").innerHTML = 
            "This page hostname is: " + window.location.hostname;
            </script>
        </div>
    </div>

      <a href="https://www.youtube.com/watch?v=qisoHWRZg0E">
        <img src="motor.gif" class="motorgif" height="500px" title="BodyPartz" class="boximages">
      </a>
    

    </header>

<!--FOOTER-->

<footer style="background-color: #000000; padding: 30px; text-align: center; font-family: 'Inter', sans-serif;">
    <p style="margin: 0; color: #ffffff; font-family:'Creepster', sans-serif; color: rgb(218, 216, 135);">Devil Man Cry Baby &copy; 2024. </p>
    <div style="margin-top: 10px;">
     
      <a href="https://open.spotify.com/user/12162102984" style="color: white; text-decoration: none; margin-right: 10px;">
        <img src="spoti.png" alt="Spotify" style="width: 24px; height: 20px; vertical-align: middle;">
      </a>
      
      <a href="https://github.com/ByronLouis" style="color: white; text-decoration: none;">
        <img src="github.png" alt="github" style="width: 24px; height: 20px; vertical-align: middle;">
      </a>

      <a href="https://www.youtube.com/@aceu" style="color: white; text-decoration: none; margin-right: 10px;">
        <img src="yt.png" alt="utube" style="width: 24px; height: 20px; vertical-align: middle;">
      </a>

    </div>
  </footer>
</body>
</html>