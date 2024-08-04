<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $comments = htmlspecialchars($_POST['comments']);

    // Qui puoi aggiungere il codice per salvare i dati in un database o inviarli via email
    // Per esempio, puoi salvare i dati in un file di testo:
    $file = fopen("signatures.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nComments: $comments\n\n");
    fclose($file);

    echo "Grazie per aver firmato la petizione, " . $name . "!";
} else {
    echo "Metodo non valido.";
}
?>
