<?php
$q = ($_GET['q']);

include 'config.php';

$sql=$dbh->prepare("SELECT * FROM programme ORDER BY nom_agence ASC");
$sql->execute();

/*echo "<table>
<tr>
<th>nom agence</th>
</tr>";*/

echo'
<div class="col-lg-12">
	<h1 class="page-header">Tous les évènements</h1>
</div>';

 while($r=$sql->fetch()){
   // echo "<tr>";
   // echo "<td>" . $r['nom_evenement'] . "</td>";
   // echo "</tr>";
   echo'
   <form method="post" action="fiche_evenement.php">
		<button class="col-lg-3 col-md-4 col-xs-6 thumb" name="submit">
			<span class="thumbnail">							
				<input type="hidden" name="nom_agence" value="'.$r['nom_agence'].'"/>
				<input type="hidden" name="id" value="'.$r['id'].'"/>
				<input type="hidden" name="user_id" value="'.$r['user_id'].'"/>
				<img class="img-responsive" src="uploads/'.$r['logo_agence'].'" width="400" height="300" alt="'.$r['nom_agence'].'">
			</span>							
		</button>
	</form>';
}
//echo "</table>";
?>