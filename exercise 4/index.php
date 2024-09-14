<?php
session_start();

if (!isset($_SESSION['submissions'])) {
    $_SESSION['submissions'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && isset($_POST["age"])) {
    $name = htmlspecialchars($_POST["name"]);
    $age = htmlspecialchars($_POST["age"]);
    

    $_SESSION['submissions'][] = ['name' => $name, 'age' => $age];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css//style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <header>
        <h1 class="header">BSIT3F GROUP 6 PROFILES</h1>
    </header>

</head>
<body>    
<button id="openPopup">FORM</button>

<div class="popup" id="myPopup">
    <div class="popup-content">
        <button class="close-btn" id="closePopup">&times;</button>
        <br><br>
        <form id="contactForm" method="POST">
            <div class="form-group" >
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Age:</label>
                <input type="text" id="email" name="age" required>
            </div>
            <button type="submit" class="btnsb">Submit</button>
        </form>
    </div>
</div>  

<button id="openPopup2">HISTORY</button>

<div class="popup2" id="myPopup2">
    <div class="popup-content2">
        <button class="close-btn2" id="closePopup2">&times;</button>
        <br><br><br><br>
        <form id="searchForm" method="GET">
            <div class="form-group2">
                <label for="searchName">Search Name:</label>
                <input type="text" id="searchName" name="name" placeholder="Enter name to search">
                <button type="submit" class="btnsb2">Search</button>
            </div>
            
        </form>
        <br>
        <div class="results">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (isset($_GET['name']) && !empty($_GET['name'])) {
                        $searchName = htmlspecialchars($_GET['name']);
                        $found = false;
                        if (!empty($_SESSION['submissions'])) {
                            foreach ($_SESSION['submissions'] as $submission) {
                                if (stripos($submission['name'], $searchName) !== false) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($submission['name']) . "</td>"; 
                                    echo "<td>" . htmlspecialchars($submission['age']) . "</td>"; 
                                    echo "</tr>";
                                    $found = true;
                                }
                            }
                        }
                        if (!$found) {
                            echo "<tr><td colspan='2'>No matching submissions found.</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>No submissions yet.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


   <script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>

<div class="con">
  <div class="btn1_container" onclick="black()">
    <i class="fas fa-circle"></i>
  </div></div>
   
    <div class="container">
        <div class="grow">
        <img src="images/1.jpg" alt=""></div>
        <div class="item"><h1>Kristian V. Villota</h1><h2>Assistant</h2>
    </div>
        <h2 style="display:flex; justify-content:center; align-items:center; margin-right:1.1rem;"><img src="images/fb.png"  style="width:35px; height:auto; margin-right:0.5rem;"><a href="https://www.facebook.com/tiannnn2" target="_blank">tiannnn2</h2></a>
        <h2  style="display:flex; justify-content:center; align-items:center; margin-right:1.1rem;"><img src="images/github.png"  style="width:35px; height:auto; margin-right:0.5rem;"><a href="https://github.com/HotdogMatomme"  target="_blank">HotdogMatomme</h2></a>
        <h2 style="display:flex; justify-content:center; align-items:center; margin-right:1.5rem;"><img src="images/linkin.png"  style="width:35px; height:auto; margin-right:0.5rem;"><a href="https://www.linkedin.com/in/kristian-villota-a30699322/"  target="_blank">kristian villota</h2></a>
    </div>

    <div class="container">  
        <div class="grow">  
        <img src="images/2.jpg" alt=""></div>
        <div class="item"><h1>Jheiven Lhiu E. Guerrero</h1><h2>Representative</h2>
    </div>
        <h2 style="display:flex; justify-content:center; align-items:center; margin-right:1.1rem;"><img src="images/fb.png"  style="width:35px; height:auto; margin-right:0.5rem;"><a href="https://www.facebook.com/jheiven.guerrero" target="_blank">jheiven.guerrero</h2></a>
        <h2  style="display:flex; justify-content:center; align-items:center; margin-right:1.1rem;"><img src="images/github.png"  style="width:35px; height:auto; margin-right:0.5rem;"><a href="https://github.com/StellarisOnly01"  target="_blank">StellarisOnly01</h2></a>
        <h2 style="display:flex; justify-content:center; align-items:center; margin-right:1.5rem;"><img src="images/linkin.png"  style="width:35px; height:auto; margin-right:0.5rem;"><a href="https://www.linkedin.com/in/jheiven-lhiu-guerrero-27b6a3322/"  target="_blank">jheiven lhiu</h2></a>
    </div>
    
    <div class="container">
        <div class="grow">
        <img src="images/3.jpg" alt=""></div>
        <div class="item"><h1>Clarence Angelo B. Pedlaoan</h1><h2>Right Man</h2></div>
        <h2 style="display:flex; justify-content:center; align-items:center; margin-right:1.1rem;"><img src="images/fb.png"  style="width:35px; height:auto; margin-right:0.5rem;"><a href="https://www.facebook.com/mitz.domingo.9235" target="_blank">mitz.domingo</h2></a>
        <h2  style="display:flex; justify-content:center; align-items:center; margin-right:1.1rem;"><img src="images/github.png"  style="width:35px; height:auto; margin-right:0.5rem;"><a href="https://github.com/ClarenceAngelo"  target="_blank">ClarenceAngelo</h2></a>
        <h2 style="display:flex; justify-content:center; align-items:center; margin-right:1.5rem;"><img src="images/linkin.png"  style="width:35px; height:auto; margin-right:0.5rem;"><a href="https://www.linkedin.com/in/clarence-angelo-pedlaoan-447490322/"  target="_blank">clarence angelo</h2></a>
    </div>

    <div class="container">
        <div class="grow">
        <img src="images/4.jpg" alt=""></div>
        <div class="item"><h1>Ken Rainier M. Del Monte</h1><h2>Left Man</h2></div>
        <h2 style="display:flex; justify-content:center; align-items:center; margin-right:1.1rem;"><img src="images/fb.png"  style="width:35px; height:auto; margin-right:0.5rem;"><a href="https://www.facebook.com/kenrainier12" target="_blank">kenrainier12</h2></a>
        <h2  style="display:flex; justify-content:center; align-items:center; margin-right:1.1rem;"><img src="images/github.png"  style="width:35px; height:auto; margin-right:0.5rem;"><a href="https://github.com/KenRainier"  target="_blank">KenRainier</h2></a>
        <h2 style="display:flex; justify-content:center; align-items:center; margin-right:1.5rem;"><img src="images/linkin.png"  style="width:35px; height:auto; margin-right:0.5rem;"><a href="https://www.linkedin.com/in/ken-rainier-del-monte-bb2b01322/"  target="_blank">ken rainier del monte</h2></a>
    </div>

    <div class="container">
        <div class="grow">
        <img src="images/5.jpg" alt=""></div>
        <div class="item"><h1>Mark Raven C. Jugueta</h1><h2>Middle Man</h2></div>
        <h2 style="display:flex; justify-content:center; align-items:center; margin-right:1.1rem;"><img src="images/fb.png"  style="width:35px; height:auto; margin-right:0.5rem;"><a href="https://www.facebook.com/markraven.jugueta" target="_blank">markraven.jugueta</h2></a>
        <h2  style="display:flex; justify-content:center; align-items:center; margin-right:1.1rem;"><img src="images/github.png"  style="width:35px; height:auto; margin-right:0.5rem;"><a href="https://github.com/MarkRaven6669"  target="_blank">MarkRaven6669</h2></a>
        <h2 style="display:flex; justify-content:center; align-items:center; margin-right:1.5rem;"><img src="images/linkin.png"  style="width:35px; height:auto; margin-right:0.5rem;"><a href="http://www.linkedin.com/in/mark-raven-jugueta-4086b4221"  target="_blank">mark raven jugueta</h2></a>
    </div>
   
<script src="js/index.js"></script>
</body>
</html>