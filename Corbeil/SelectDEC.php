<?php
include 'conection.php';

        echo "<table id='tableInfo' style='text-align: center;'>";
        echo "<tr><th>id</th><th>Nom</th><th>Prenom</th><th>RaisonSociale</th><th>Ville</th><th>Acrion</th></tr>";
       
       class TableRows extends RecursiveIteratorIterator {
           function __construct($it) {
               parent::__construct($it, self::LEAVES_ONLY);
           }
       
           function current() {
               return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
           }
       
           function beginChildren() {
               echo "<tr>";
           }
       
           function endChildren() {
            echo "<td><a href=\"edit.php?id=$v->id\">Edit</a> | <a href=\"delete.php?\" onClick=\"return confirm('Are you sure you want to delete this contact?')\">Delete</a></td>";		
               echo "</tr>" . "\n";
           }
       };
       
       try {
           $stmt = $conn->prepare("SELECT id,Nom,Prenom,RaisonSociale,Ville FROM declarant");
           $stmt->execute();
       
           // set the resulting array to associative
           $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       
           foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
               echo $v;
           }
       }
       catch(PDOException $e) {
           echo "Error: " . $e->getMessage();
       }
       $conn = null;
       echo "</table>";