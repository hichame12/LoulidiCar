<?php 
            // Include the database connection file
            include_once("conection.php");
            class Contact {
                public $id;
                public $Nom;
                public $Prenom;
                public $RaisonSociale;
                public $Ville;
            }
            // Fetch contacts (in descending order)
            $contacts = $pdo->query("SELECT id,Nom,Prenom,RaisonSociale,Ville FROM declarant")->fetchAll(PDO::FETCH_CLASS, 'Contact');
            ?>
            <table id="tableInfo">
                <tr>
                    <td>Nom</td>
                    <td>Prenom</td>
                    <td>RaisonSociale</td>
                    <td>Ville</td>
                    <td>
                        <input id='AddButton' class="button" type="button" value="Add Contact">
                    </td>
                </tr>
                <?php
                // Print contacts 
                foreach($contacts as $contact) { 		
			    echo "<tr>";
			    echo "<td>".$contact->Nom."</td>";
			    echo "<td>".$contact->Prenom."</td>";
			    echo "<td>".$contact->RaisonSociale."</td>";	
			    echo "<td>".$contact->Ville."</td>";	
			    echo "<td><a href=\"UpDate.php?id=$contact->id\" class='ClassEdit' onclick='F_EditButton()'>Edit</a> | <a href=\"delete.php?id=$contact->id\" onClick=\"return confirm('Are you sure you want to delete this contact?')\">Delete</a></td>";
            }
                ?>
            </table>
            <script>
                        var AddButton = document.getElementById('AddButton');
                        AddButton.addEventListener("click", F_AddButton);
                        function F_AddButton() {
                            console.log('button add');
                            AddD.checked = true;
                            F_MyInfo()
                        }

                        function F_EditButton() {
                            console.log('button edit');
                            AddD.checked = true;
                            F_MyInfo()
                        }
                    </script>