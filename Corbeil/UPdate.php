
<?php
// Include database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	// Retrieve record values
	$Nom = $_POST['Nom'];
	$Prenom = $_POST['Prenom'];
	$RaisonSociale = $_POST['RaisonSociale'];
	$Ville = $_POST['Ville'];

    		// Execute UPDATE 
		$stmt = $pdo->prepare("UPDATE declarant SET Nom = ?, Prenom = ?, RaisonSociale = ?, Ville = ? WHERE id = ?");
		$stmt->execute([$Nom, $Prenom, $RaisonSociale, $Ville, $id]);

		// Redirect to home page (index.php)
		header("Location: acconte.php");
	
}
?>
<?php
//class Contact

// Retrieve id value from querystring parameter
$id = $_GET['id'];

// Get contact by id
$stmt = $pdo->prepare("SELECT id,Nom,Prenom,RaisonSociale,Ville FROM declarant WHERE id = ?");
$stmt->execute([$id]);
$arr = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$arr) {
    printf($arr);
    exit($arr);
}
else {
	//foreach($arr as $row)
	//{
		$Nom = $arr['Nom'];
		$Prenom = $arr['Prenom'];
		$RaisonSociale = $arr['RaisonSociale'];
		$Ville = $arr['Ville'];
	//}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylepage.css">
    <link rel="stylesheet" href="../css/stylenav.css">
    <link rel="stylesheet" href="stylesAccont.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.6.1.min.js"></script>

    <style>
        #test_conection{
            position: absolute;
            margin: 0px;
            top: 0px;
            font-size: 10px;
        }
        #add_Decl{
            margin: 30px auto;
        }
        td{
            padding: 5px 0px;
        }
        #Content_Info{
            display: none;
        }
        #Content_Add{
           /* display: none; */
            text-align: center;
        }
        #Content_Add table{
            text-align: left;
        }
        .form-submit-button{
            margin-bottom: 30px;
        }
        input[type=text]{
            margin: auto 5px;
        }

    .form-update-button {
    background: #E2FDBB;
    color: #fff;
    border: 1px solid #eee;
    border-radius: 20px;
    box-shadow: 5px 5px 5px #eee;
    text-shadow: none;
    width: 300px;
    height: 70px;
    font-size: 40px;
    }
    .form-update-button:hover {
    background: #92BA56;
    color: #fff;
    border: 1px solid #eee;
    border-radius: 20px;
    box-shadow: 5px 5px 5px #eee;
    text-shadow: none;
    cursor: pointer;
    }
    </style>

    <title>Acconte</title>
</head>
<body>
   <!-- <p id="test_conection"> <?php echo $succes; ?></p> -->
    <div id="container">
        <nav>
          <div id="logo">
            <a href="../index.html">Loulidi Car</a>
          </div>
          <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="./acconte.php">Acconte</a></li>
          </ul>
        </nav>
      </div>
    <header class="container">
            <div class="flex-container">
                <div class="col-12">
                    <h2 id="Second_Titre">Edit Info Declarant</h2>
                </div>
            </div>
    </header>
    <div id="Content_Add" class="container">
        <form method="POST"  name="form1" action="UPdate.php?id=<?php echo $id ?>">
            <table id="add_Decl">
                <tr>
                    <td>Nom</td>
                    <td colspan="2" class="txtC"><input type="text" name="Nom" id="NomF" placeholder="Nom" value="<?php echo $Nom;?>"></td>
                    <td class="txtR">الإسم العائلي</td>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td colspan="2" class="txtC"><input type="text" name="Prenom" id="NomP" placeholder="Prénom" value="<?php echo $Prenom;?>"></td>
                    <td class="txtR">الإسم الشخصي</td>
                </tr>
                <tr>
                    <td>Fonction</td>
                    <td colspan="2" class="txtC"><input type="text" name="Fonction" id="Fonc" placeholder="Fonction"></td>
                    <td class="txtR">المهنة</td>
                </tr>
                <tr>
                    <td>N° de GSM</td>
                    <td colspan="2" class="txtC"><input type="text" name="GSM" id="GSM" placeholder="N° de GSM"></td>
                    <td class="txtR">رقم الهاتف النقال</td>
                </tr>
                <tr>
                    <td>Adresse mail</td>
                    <td colspan="2" class="txtC"><input type="email" name="email" id="mail" placeholder="Adresse mail"></td>
                    <td class="txtR">عنوان البريد اإللكتروني</td>
                </tr>
                <tr>
                    <td>Raison sociale</td>
                    <td colspan="2" class="txtC"><input type="text" name="RaisonSociale" id="RC" placeholder="Raison sociale" value="<?php echo $RaisonSociale;?>"></td>
                    <td class="txtR">اسم الشركة أو اإلدارة</td>
                </tr>
                <tr>
                    <td>Adresse</td>
                    <td colspan="2" class="txtC"><input type="text" name="Adresse" id="Adres" placeholder="Adresse"></td>
                    <td class="txtR">العنوان</td>
                </tr>
                <tr>
                    <td>Ville <input type="text" name="Ville" id="Ville1" placeholder="Ville" value="<?php echo $Ville;?>"></td>
                    <td colspan="2" class="txtC">Code postal<br>
                        <input type="text" name="CodePostal" id="CodePostal" maxlength="5" placeholder="Code postal"><br>
                        الرمز البريدي
                    </td>
                    <td class="txtR"><input onkeyup="arabicValue(Ville2)" dir="rtl" type="text"  name="VilleAR" id="Ville2" placeholder="المدينة"> المدينة</td>
                </tr>
            </table>
            <input id="UpdateButton" class="form-update-button" type="submit" name="update" value="update">
        </form>
    </div>

    <script src="../js/accontjs.js"></script>
</body>
</html>