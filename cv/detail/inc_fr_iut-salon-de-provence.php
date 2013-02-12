<!-- BEGIN DETAIL -->

<table width=100%>
		<tr>
			<td><h4>Détail du projet : régulation de la température d'un four</h4></td>
			<td><a class="top" href="#menu_top" title="Top"><img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/cv/detail/img/top_arrow.gif" alt="Top"></a></td>
		</tr>
	</table>	

<dl>
  <dt>Description :</dt>
    <dd>Régulation de la température d'un four en considérant des perturbations imposées par un ventillateur et un limiteur de débit d'air</dd>
  <dt>Caractéristiques :</dt>
    <dd>3 modes de régulation : P, PI, PID</dd>
 <dt>Applications :</dt>
    <dd>Utilisé actuellement pour initier des étudiants de l'Institut Universitaire Technologique de Salon de Provence à la régulation</dd>
 <dt>Outils utilisés :</dt>
    <dd>Réalisé avec le logiciel Labview de Texas Instrument, un boitier d'entrées et de sorties déportées et un four miniature.</dd>     
</dl> 
 
		<p>Présentation du projet :</p>

<script type='text/javascript'>
	//var newImage = new Image();
	//newImage.src = "/cv/detail/slideshow01/Diapositive1.JPG";
	var count = 2;
	
	function updateImage(mode)
	{
	    document.getElementById("slide_img").src = "/cv/detail/slideshow02/Diapositive" + count + ".JPG";
	    if(mode == 1){
	    	if(count < 11){
	    		count += 1;
	    	}
	    }
	    if(mode == 2){
	    	if(count > 1){
	    		count -= 1;
	    	}
	    }
	}

</script>
		<?php 
		// echo html
echo "<table class=\"slide_tab\">\n";
echo "	<tr>\n";
echo "		<td>\n";
					echo ('<a id="left_arrow" href="javascript:updateImage(2)"><img src="/cv/detail/img/arrows_left.png" alt="left"/></a>');
				//}
echo "		</td>\n";
echo "		<td class=\"slide_area\">\n";
				echo('	<div >
							<!-- that\'s just the initial image -->
							<img id="slide_img" src="/cv/detail/slideshow02/Diapositive1.JPG" alt="left"/>

						</div>	');
echo "		</td>\n";
echo "		<td>\n";

							echo ('<a id="right_arrow" href="javascript:updateImage(1)"><img src="/cv/detail/img/arrows_right.png" alt="right" /></a>');
						

							echo '		</td>';
							echo '	</tr>';
echo '</table>';
		?>

		<br />

<table width=100%>
		<tr>
			<td><h4>Détail du projet : module automate pour la régulation PID</h4></td>
			<td><a class="top" href="#menu_top" title="Top"><img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/cv/detail/img/top_arrow.gif" alt="Top"></a></td>
		</tr>
	</table>
<p>
					Ce coffret de commande intègre un automate Siemens de la gamme 315 ainsi que plusieurs cartes d'entrées et sorties TOR et analogiques. 				
					Ces dernières sont accessibles sur le coté droit du coffret par l'intermédiaire de connecteurs de type "banane" et "BNC" afin de pouvoir commander différents système. 
					Il sagit ici d'une ligne didactique de production de sodas et boissons pour l'étude des procédés de régulation et l'instrumentation associée.<br />

					<br />Travail réalisé :<br />
						- Conception, fabrication (x6), test et programmation sous Step7<br />
						- Création des schémas électriques sous Autocad puis câblage<br />
						- Cablâge et paramétrage du réseau "Profibus"
</p>
					<a href="/cv/detail/img/RC11.JPG" rel="lightbox[group1]" title="Armoire de commande transportable"><img class="snap" alt="RC11" src="/cv/detail/img/RC11.JPG"/></a>

				<p>
					<strong>Module de supervision</strong> : suivis en temps réel du produit.<br />
					<br />Travail réalisé :<br />
					- Communication entre l'écran tactile et l'automate par un réseau Profibus<br />
					- Fonction serveur Web et prise de contrôle à distance<br />
					- Interface Homme Machine réalisée avec WinCC
				</p>
				<p>
					<a href="/cv/detail/img/Touch_pad.JPG" rel="lightbox[group1]" title="Module de supervision"><img class="snap" alt="Touch pad" src="/cv/detail/img/Touch_pad.JPG"/></a>
				</p>
			<p>
					<strong>Module du régulateur industriel</strong> "Proportional Integral Derivative"  : permet, tout comme le coffret de commande, de réguler un système.<br />
					<br />Travail réalisé :<br />
					- Conception, fabrication (x6), test et paramétrage<br />
					- Création des procédures d'utilisations
				</p>
				<p>
					<a href="/cv/detail/img/Regulateur.JPG" rel="lightbox[group1]" title="Regulateur industriel"><img class="snap" alt="Regulateur" src="/cv/detail/img/Regulateur.JPG"/></a>
				</p>
			
		
<!-- END DETAIL -->

