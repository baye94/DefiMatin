<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
     <Label>Annees</Label>
     <input type="number" name="date">
     <button type="submit" name="envoyer">TESTER</button>
    </form>
</body>
</html>
<?php
function bissextile($annee) {
	if( (($annee/4) && !($annee/100)) || ($annee/400)) {
		
		return TRUE;
	} else {
		
		return FALSE;
	}
}
if (isset($_POST['envoyer'])) {
 
  if (bissextile($_POST['date'])==true) {
     echo " l'année que vous aves donner est bissextile";
  }else{
    echo " l'année que vous aves donner n'est pas bissextile";
  }
}

?>