<?php
//retourne le tableau des admins
function get_admins()
{
	include("bdd.php");
	$rep = $bdd->query('SELECT * FROM user WHERE admin=1');
	while ($ok = $rep->fetch())
	{
		$tab[$i] = $ok;
		$i++;
	}
	//0 = id
	//1 = admin
	//2 = nom
	//3 = prenom
	//4 = pseudo
	//5 = password
	//6 = solde
	return($tab);
}

function go_admin($id, $admin)
{
	include("bdd.php");
	if ($admin)
		$bdd->exec("UPDATE USER SET admin=0 WHERE id='".$id."'");
	else
		$bdd->exec("UPDATE USER SET admin=1 WHERE id='".$id."'");
	return($tab);
}
?>