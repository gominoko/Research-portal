<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta http-equiv = "X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.google.com/specimen/Bebas+Neue" rel="stylesheet">
    <link rel="stylesheet" href="Home.css">
    <title>Home Page | SNHS</title>
</head>

<body>
    <nav>
        <div class = "logo">
            <p>S N H S</p>
        </div>
        <div class = "semi-header">
            <p>Sarrat National High School</p>
        </div>
        <div class = "logo-image">
            <img src = "SNHS_logo.png" alt="SNHS_LOGO" width="100" height="100">
        </div>
        <ul class="nav-links">
            <link href="https://fonts.google.com/specimen/Teko" rel="stylesheet">
            <li><a href="Sections.html">Departments</a></li>
            <li><a href="Map.html">Map of School</a></li>
            <li><a href="Home.html"><b>Home</b></a></li>
            <li><a href="Library.html">Library</a></li>
            <li><a href="about.html">About</a></li>
        </ul>

    </nav>


    <div class="showcase">
        <section id="main">
            <link href="https://fonts.google.com/specimen/Teko" rel="stylesheet">
            <h1>UPCOMING EVENTS: DISTRICT SCHOOLS PRESS CONFERENCE 01.04.23</h1> 
        </section>
    </div>

<div class="bg-image"></div>

<br>
<br>

    <div class="sidebar">
            <section id="right">
                <em><link href="https://fonts.google.com/specimen/Teko" rel="stylesheet">
                <section id = "rheader">
                <h4>BUYAEN:</h4>
                </section>
                <br>
                <p>Sibubukel nga exclusive interview kenni Dr. Marc Paul Tunac Calzada dati a mangisursuro iti Sarrat National High School ken agdaman a mangisuro iti MMSU-CTE. | Ranie Dorilag, RP1 Laoag
                <br><br>
                <b>Congratulations sir! Your SarratNHS Family is very proud of you!</b>
                </p>
                <section id="rfooter">
                <i> - Sarrat National High School</i>
                </section>
                </em>
            </section>
            <section id="left2">
                <h1>Dr. Marc Paul T. Calzada </h1>
                <video width="450" height="250" poster="Sir_Thumbnail.png" controls>
                    <source src="SirPaul.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                 </video>
            </section>


            <section id="right4">
                <link href="https://fonts.google.com/specimen/Teko" rel="stylesheet">
                <h1>GMA FEATURE</h1>
                <video width="450" height="250" poster="GMA_Thumbnail.png" controls>
                        <source src="Robotics_GMA.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                </video>
                
            </section>
            <section id="left4">
                <section id = "rheader">
                    <em>
                        <h4>LOOK: </h4>
                    </section>
                    <p><b><br>
                        The Sarrat NHS Robotics - </b>
                    </p>
                    <br>
                    <p>Science, Technology and Engineering Program was featured in the campus news of the GMA Regional TV - "One North Central Luzon: ‘Robot teacher,’ ibinida ng ilang estudyante sa Ilocos Norte"
                    <br><br>
                    </p>
                    <section id="rfooter">
                    <i> Special appreciation to SarratNHS Alumni Batch 1977 through the leadership of their class president, Ms. Marissa Ganir-Hogan, for their continued assistance in the acquisition of Robots.</i>
                    </section>
                    </em>
            </section>

            <section id="right">
                <em><link href="https://fonts.google.com/specimen/Teko" rel="stylesheet">
                <section id = "rheader">
                <h4>Pamamayagpag sa larangan ng sports </h4>
                </section>
                <p><b><br>
                      Triangular Meet 2023 matagumpay na isinagawa; SRNHS kaisang palad</b>
                </p>
                <br>
                <p><b>Sarrat, Ilocos Norte--</b>     Matapos ang dalawang taon na walang face-to-face dulot ng pandemya, muling namayani sa pangalawang pagkakataon ang sigla ng mga atleta ng Schools Division of Ilocos Norte-Sarrat District sa taunang Triangular meet sa Sta. Rosa National High School, ikalabing-pito ng Oktubre.
                <br><br>
                </p>
                <section id="rfooter">
                <i> - Manunudla, Filipino School Newspaper</i>
                </section>
                </em>
            </section>
            <section id="left2">
                <h1>TRIANGULAR MEET </h1>
                <video width="450" height="250" poster="Tri_Thumbnail.png" controls>
                    <source src="snhs_triangulars.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                 </video>
            </section>
    </div>




    <div class="container">
        <section id="main2">
            <em><link href="https://fonts.google.com/specimen/Alegreya+Sans" rel="stylesheet">
            <p>Sarrat National High School, located in Brgy. 4 San Francisco, Sarrat, Ilocos Norte, is
                recognized for its dedication to providing quality education to learners. It holds the distinction
                of being the first public school to introduce the Special Program for Mathematics (SPM) in Ilocos 
                Norte, a pioneering initiative conducted in collaboration with the Department of Science and Technology
                (DOST). Embracing "Excellence is Our Way of Life" as its tagline, Sarrat NHS prides itself on nurturing a
                culture of academic, personal, and overall excellence within the school community. </p>
            </em>
        </section>

        <button class="button button1", onclick="window.location.href='https://www.facebook.com/groups/1588731038087911';">CONTACT US
        </button>
    
    </div>

    <footer id="main-footer">
		<p>Alrights Reserved &copy; SNHS 2023</p>
	</footer>

</body>
</html>