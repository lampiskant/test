<?php
// Λήψη των δεδομένων από τη φόρμα
$name = $_POST['name'];
$job = $_POST['job'];

// Ανοίγουμε το αρχείο για εγγραφή
$file = fopen("data.txt", "a") or die("Δεν είναι δυνατή η ανοίξη του αρχείου!");

// Αποθήκευση των δεδομένων στο αρχείο
fwrite($file, "Name: " . $name . ", Job: " . $job . "\n");

// Κλείσιμο του αρχείου
fclose($file);

// Επιστρέφουμε μήνυμα επιτυχίας
echo "Τα δεδομένα αποθηκεύτηκαν με επιτυχία!";
?>
