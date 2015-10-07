<?php

//Retrieve data from database
$q = mysqli_query($db, "SELECT * FROM posts NATURAL JOIN authors");
$posts=array();
while ($row = mysqli_fetch_assoc($q)) {
    $posts[] = $row;
}

