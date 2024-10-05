<?php 

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Document</title>
</head>
<body>
<a href="index.php">
<button style=" font-size: 15px; border-radius: 5px; padding: 10px 15px 15px 15px;">GO BACK</button></a>

<div id="mbr" class="ajax">

<button type="button" onclick="listmbr()">LIST OF MEMBERS</button>
</div>

<div class="popup2" id="myPopup2">
    <div class="popup-content2">
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
                        <th>Surname</th>
                        <th>Gender</th>
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
                                    echo "<td>" . htmlspecialchars($submission['sname']) . "</td>"; 
                                    echo "<td>" . htmlspecialchars($submission['gender']) . "</td>"; 
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
</body>

<script>
function listmbr() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mbr").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "members.txt", true);
  xhttp.send();
}
</script>

<style>

    .ajax button{
        margin-top: 2rem;   
        padding: 10px 10px 10px 10px;
    }

.btnsb2{
    padding: 5px 10px 5px 10px;
    font-size: 15px;
}
    input{
        font-size: 15px;
    }
       .popup-content2{
        font-family: "New Amsterdam", sans-serif;
        font-size: 19px;
       }
       .results{
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        border-radius: 10px;
        width: 400px;
        font-size: 15px;
       }

       table {
  margin-left: auto;
  margin-right: auto;
  background-color: grey;
}

th, td {
  padding: 5px;
  background-color: white;
}
    
</style>
</html>