
<!--				<a href="./download/Presentation_master_recherche_christophe_rigaud.pdf" title="Présentation de master SDS de Christophe Rigaud" onclick="window.open(this.href); return false;">PDF - Présentation master SDS</a>-->
	<h4>Résumé</h4>



	<p class="Style1">
	Mots cléfs : interprétation d'image, fenêtrage, topologie, photométrie.
	<br />		
	<br />	
		Ce travail fait état de l'art en matière d'interprétation d'image guidée par des connaissances
	topologiques et photométriques à priori et propose une nouvelle méthode d'application. L'utilisation d'informations a priori est un moyen d'anticiper
	 le contenu d'une image et donc d'en optimiser son traitement. Ces connaissances sont ici représentées
	 sous forme de graphes conceptuels à partir desquels on infère (déduit) le contenu de l'image. Il
	s'agit plus concrètement du nombre de classes de l'image et de leurs relations photométriques, à
	tout instant d'une procédure de segmentation itérative. Un point important de l'étude est la
	limitation à des connaissances non quantitatives de manière à appliquer un traitement spécifique
	à chaque image et à prendre en compte ses particularités.
	Dans un second temps, on quantifie les bénéfices de la méthode proposée à savoir, la
	diminution des données polluantes, le gain de temps de calcul ou encore sa robustesse.
	Une dernière partie est consacrée à l'application à des images médicales de la région de l'abdomen
	 à partir desquelles on fait apparaître clairement les tumeurs du foie ou encore les vaisseaux hépatiques
	dans le but d'assister le diagnostic médical.
	</p>

	<table width=100%>
		<tr>
			<td><h4>Problématique</h4></td>
			<td><a class="top" href="#menu_top" title="Top"><img src="../../../../cv/detail/img/top_arrow.gif" alt="Top"></a></td>
		</tr>
	</table>
	<p >
		Comment interpréter des images en combinant des informations topologiques et photométriques 
					non quantitatives? Un exemple de situation où ce type d'information pourrait être avantageusement 
					exploité serait celui illustré par la figure ci-dessous :
	</p>
	<table align="center">
		<tr>
			<td><img src="../../../../cv/detail/img/body.jpg" title="Corps" alt="body" width="200px" /></td>
			<td><img src="../../../../cv/detail/img/liver.jpg" title="Foie" alt="liver" width="200px" /></td>
			<td><img src="../../../../cv/detail/img/venous_system.jpg" title="Vaisseaux hépatiques" alt="Venous system" width="200px" /></td>
		</tr>
	</table>
	
	<p>
		Cet exemple concerne le rendu volumique d'une image médicale. Le choix de la fenêtre de rendu 
	(une plage d'intensités à afficher) est crucial pour 
	améliorer la perception d'une structure donnée. Dans ce cas, l'objectif est de visualiser le réseau vasculaire 
	à partir de l'image de gauche, en supposant que l'on dispose du masque des os. Sachant que le réseau vasculaire 
	n'est pas inclus dans les os 
	(information topologique à priori), on peut tout simplement retirer de l'image le volume relatif au os afin 
	de faciliter la visualisation du réseau vasculaire (figure du milieu). Par ailleurs, dans l'hypothèse où le réseau 
	vasculaire est plus clair que le tissu du foie, on peut modifier le fenêtrage de manière à afficher que les tissus 
	qui ont une intensité supérieure à ceux du foie (voir le résultat obtenu manuellement sur la figure de droite). 				
	</p>


	<table width=100%>
		<tr>
			<td><h4>Démarche</h4></td>
			<td><a class="top" href="#menu_top" title="Top"><img src="../../../../cv/detail/img/top_arrow.gif" alt="Top"></a></td>
		</tr>
	</table>				
	<p>
		La démarche de ce travail peut se résumer par les étapes suivantes :
		</p>					
	<dl>
	  <dt>Formalisation</dt>
		<dd>- représentation des informations conceptuelles</dd>
		<dd>- modélisation du processus de segmentation</dd>
	  <dt>Inférence (déduction)</dt>
		<dd>- région d'intérêt</dd>
		<dd>- nombre de classes et ordonnancement</dd>		
	  <dt>Image</dt>
		<dd>- masquage</dd>
		<dd>- partitionnement des régions</dd>	
		<dd>- fenêtrage optimal</dd>									
	  <dt>Évaluation</dt>
		<dd>- images synthétiques</dd>
		<dd>- choix de l'algorithme de partitionnement</dd>	
		<dd>- quantification des bénéfices attendus</dd>
	  <dt>Application</dt>
		<dd>- images médicales</dd>
		<dd>- identification de la partition d'intérêt</dd>	
		<dd>- fenêtrage et rendu volumique</dd>
	</dl>
	
	<table width=100%>
		<tr>
			<td><h4>Résultats</h4></td>
			<td><a class="top" href="#menu_top" title="Top"><img src="../../../../cv/detail/img/top_arrow.gif" alt="Top"></a></td>
		</tr>
	</table>				
	<p>
		Suite à une évaluation quantitative de la méthode proposée sur des images synthétiques, elle a été appliquée à des données médicales. Ces données sont constituées d'images et de masques de certaines structures (organes) au format DICOM. Les trois images ci-dessous montrent respectivement une image DICOM brute, un masque du foie et un masque de rein.

	</p>
	<table align="center">
		<tr>
			<td><img src="../../../../cv/detail/img/dicom.jpg" alt="body" title="Image DICOM" alt="Image DICOM" width="200px" /></td>
			<td><img src="../../../../cv/detail/img/mask_liver.jpg" title="Liver mask" alt="Masque du foie" width="200px" /></td>
			<td><img src="../../../../cv/detail/img/mask_kidney.jpg" title="Kidney mask" alt="Masque d'un rein" width="200px" /></td>
		</tr>
	</table>
				
	<p>
		Les résultats les plus significatifs sont les rendus volumiques ci-dessous, il représentent des 
		tumeurs du foie (à gauche), le foie plus le système hépatique (au milieu) et le système hépatique 
		(à droite) :
	</p>
				<table align="center">
					<tr>
						<td><img src="../../../../cv/detail/img/im_1_4_tumor_rendering_manual.jpg" alt="body" title="Rendu volumique des tumeurs du foie" width="200px" /></td>
						<td><img src="../../../../cv/detail/img/im_3_0_render_vessel_1_sigma.jpg" alt="liver" title="Rendu volumique des vaisseaux" width="200px" /></td>
						<td><img src="../../../../cv/detail/img/im_3_0_render_vessel_kmean.jpg" alt="vessel" title="Rendu volumique des vaisseaux" width="200px" /></td>
					</tr>
				</table>				
				<br />
			
	<table width=100%>
		<tr>
			<td><h4>Conclusion</h4></td>
			<td><a class="top" href="#menu_top" title="Top"><img src="../../../../cv/detail/img/top_arrow.gif" alt="Top"></a></td>
		</tr>
	</table>
	<p>
					
		L'apport des différentes connaissances à priori confirme, selon l'analyse quantitative des différents 
	bénéfices, l'intérêt de la méthode proposée autant pour les images synthétiques que
	pour les images médicales. Il y a donc un intérêt certain à utiliser des connaissances à priori sur
	une image pour la traiter plus finement.
	Un point incontournable de ce succès semble être l'application de masques à l'image afin de
	réduire l'analyse à une région d'intérêt contenant un minimum de données polluantes, il en résulte
	une rapidité de calcul accrue (moins de donnée et moins de classe à former). La segmentation
	est plus performante avec la connaissance à priori du nombre de classe, ce qui permet à terme
	d'identifier plus précisément chaque classe pour appliquer un fenêtrage optimal à une ou plusieurs
	d'entre elles (visualisation améliorée).
				</p>
<!-- END PAGE -->
