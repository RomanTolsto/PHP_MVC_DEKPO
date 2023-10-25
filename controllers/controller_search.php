<?php
$db = connectDB();
// on récupère la chaine de recherche depuis l'url
// on la convertit en texte en enlevant les espace...
$keywords = strtolower((string)urldecode(trim($_GET['keywords'])));
$sql = $db->query("SELECT * FROM picture WHERE title LIKE '%".$keywords."%' OR description LIKE '%".$keywords."%' OR src LIKE '%".$keywords."%' OR author LIKE '%".$keywords."%'");
$pictures = $sql->fetchAll(PDO::FETCH_ASSOC);
// --- on charge la vue
include "./views/layout.phtml";