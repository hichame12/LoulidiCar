<?php
include 'conection.php';
include 'SendNewDEC.php';


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
    <link rel="stylesheet" href="../css/stylesAccont.css" />

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
            <li>
                <input type="radio" name="acconte_nav" id="MyInfo" checked>
                <label for="MyInfo">My Info</label>
            </li>
            <li>
                <input type="radio" name="acconte_nav" id="AddD">
                <label for="AddD">Add Declarant</label>
            </li>
          </ul>
        </nav>
      </div>
    <header class="container">
            <div class="flex-container">
                <div class="col-12">
                    <h2 id="Second_Titre">My Info Declarant</h2>
                </div>
            </div>
    </header>
    <div id="Content_Info">
        <br>
        <div id="table_Info">
            <?php include_once("SelectDEC2.php"); ?>
        </div>
    </div>
    <div id="Content_Add" class="container">
        <form action="" method="POST">
            <table id="add_Decl">
                <tr>
                    <td>Nom</td>
                    <td colspan="2" class="txtC"><input type="text" name="Nom" id="NomF" placeholder="Nom"></td>
                    <td class="txtR">الإسم العائلي</td>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td colspan="2" class="txtC"><input type="text" name="Prenom" id="NomP" placeholder="Prénom"></td>
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
                    <td colspan="2" class="txtC"><input type="text" name="RaisonSociale" id="RC" placeholder="Raison sociale"></td>
                    <td class="txtR">اسم الشركة أو اإلدارة</td>
                </tr>
                <tr>
                    <td>Adresse</td>
                    <td colspan="2" class="txtC"><input type="text" name="Adresse" id="Adres" placeholder="Adresse"></td>
                    <td class="txtR">العنوان</td>
                </tr>
                <tr>
                    <td>Ville <input type="text" name="Ville" id="Ville1" placeholder="Ville"></td>
                    <td colspan="2" class="txtC">Code postal<br>
                        <input type="text" name="CodePostal" id="CodePostal" maxlength="5" placeholder="Code postal"><br>
                        الرمز البريدي
                    </td>
                    <td class="txtR"><input onkeyup="arabicValue(Ville2)" dir="rtl" type="text"  name="VilleAR" id="Ville2" placeholder="المدينة"> المدينة</td>
                </tr>
            </table>
            <input class="form-submit-button" type="submit" name="submit" value="Enregistrer">
        </form>
    </div>

    <script src="../js/accontjs.js"></script>
</body>
</html>