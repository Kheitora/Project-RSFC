<?php

$conn = mysqli_connect()

if (!$conn) {
    die("Site niet bereikbaar " . mysqli_connect_error());
}
  
  $delete = "DELETE FROM members WHERE (volledige_naam, vereniging, datum, email, telnummer)";
  
  if (mysqli_query($conn, $delete)) {
    echo "Reservering succesvol verwijdert";
  } else {
    echo "Reserveringen verwijderen is niet geslaagd " . $conn->error;
  }
  
  mysqli_close($conn);
  ?>
