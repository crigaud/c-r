<!-- BEGIN DETAIL -->

<table width=100%>
		<tr>
			<td><h4>Détail du projet : reconnaissance d'objets</h4></td>
			<td><a class="top" href="#menu_top" title="Top"><img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/cv/detail/img/top_arrow.gif" alt="Top"></a></td>
		</tr>
	</table>	
<p>
	L'objectif de ce projet était de développer un système de reconnaissance d'objets par ordinateur robuste et fiable;
	afin de réaliser une plateforme multi robots distribuée pour l'exploration et la cartographie de bâtiment.
	Ce projet s'articulait autour de quatre grands points:
</p>
	<ul class="detail">
		<li> La réalisation d'une plateforme multi robots, chaque robot disposant d'une base d'objets reconnaissables commune.</li>
		<li> La localisation de chaque robot dans l'espace.</li>
		<li> L'architecture et la stratégie de déploiement de la flotte de robots.</li>
		<li> La reconnaissance visuelle d'objet et l'apprentissage.</li>
	</ul>
<p>
	Notre équipe (3 personnes) avait pour but de développer, en 80 heures, le quatrième point concernant la reconnaissance d'image ainsi que de constituer la base d'objets commune à chaque robot.
	</p>
<p>
	Nous avions pour consignes de projet, d'étudier la méthode SIFT (Scale Invariant Feature Transform) qui permet de caractériser les points importants d'une image (contour, angle, etc.).
	Ainsi que les librairies graphiques OpenCV et GTK pour gérer respectivement l'acquisition vidéo et l'interface graphique (IHM).
</p>
<p>
L'ensemble du projet a été développé sous un système UNIX.
</p>

<h5>Présentation du projet :</h5>

<script type='text/javascript'>
	//var newImage = new Image();
	//newImage.src = "/cv/detail/slideshow01/Diapositive1.JPG";
	var count = 2;
	
	function updateImage(mode)
	{
	    document.getElementById("slide_img").src = "/cv/detail/slideshow01/Diapositive" + count + ".JPG";
	    if(mode == 1){
	    	if(count < 15){
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
// get $diapo value
if (isset($_GET['diapo'])){
	$diapo=$_GET['diapo'];
}else{
	$diapo=null;
}
// echo html
echo "<table class=\"slide_tab\">\n";
echo "	<tr>\n";
echo "		<td>\n";
				// if not beginning
				//if( $diapo > 1 ){
					echo ('<a id="left_arrow" href="javascript:updateImage(2)"><img src="/cv/detail/img/arrows_left.png" alt="left"/></a>');
				//}
echo "		</td>\n";
echo "		<td class=\"slide_area\">\n";
				echo('	<div >
							<!-- that\'s just the initial image -->
							<img id="slide_img" src="/cv/detail/slideshow01/Diapositive1.JPG" alt="left"/>

						</div>	');
echo "		</td>\n";
echo "		<td>\n";
				if( $diapo < 17 ){
							echo ('<a id="right_arrow" href="javascript:updateImage(1)"><img src="/cv/detail/img/arrows_right.png" alt="right" /></a>');
						
						}
							echo '		</td>';
							echo '	</tr>';
echo '</table>';
?>



<h5>Conclusion :</h5>
<p class="style1">
Ce projet a été pour nous l'occasion de voir à quoi ressemble un processus de recherche technologique et comment travailler en équipe.<br />
Le partage des tâches, l'entraide, l'apprentissage et la satisfaction du travail réalisé ont été les maitres mots durant ce projet.<br />
Appliqué aux domaines de la sécurité, culturel ou purement commercial, le traitement et la caractérisation d'une image sont des technologies en vogue en ce moment.<br />
La découverte de ces technologies a été pour nous un point important de notre formation, c'est pour cela que nous tenons à remercier l'ensemble des personnes qui nous ont guidés tout au long de ce projet.
</p>


<table width=100%>
		<tr>
			<td><h4>Détail du projet : jeu 3D en C++ avec OpenGL</h4></td>
			<td><a class="top" href="#menu_top" title="Top"><img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/cv/detail/img/top_arrow.gif" alt="Top"></a></td>
		</tr>
	</table>	

<p class="style1" >
	Caractéristiques :<br />
		&nbsp;&nbsp;- Utilisation du moteur graphique Physics<br />
		&nbsp;&nbsp;- Physicalisation d'objets et génération de sons lors des collisions<br />
		&nbsp;&nbsp;- Contrôle à la Wiimote, clavier et souris<br />
		&nbsp;&nbsp;- Modélisation d'objet 3D (3D Explorer, Blender)<br />
	</p>

		<h5><a onclick="Effect.ScrollTo('Toc255128884'); return false;" href="#Toc255128884">1) Jeu en C++ utilisant OpenGL </a></h5>
		<h5><a onclick="Effect.ScrollTo('Toc255128885'); return false;" href="#Toc255128885">2) Suivi du vaisseau par la caméra</a></h5>
		<h5><a onclick="Effect.ScrollTo('Toc255128886'); return false;" href="#Toc255128886">3) Liste des touches utilisées</a></h5>
		<h5><a onclick="Effect.ScrollTo('Toc255128887'); return false;" href="#Toc255128887">4) Gestion des collisions</a></h5>
		<h5><a onclick="Effect.ScrollTo('Toc255128888'); return false;" href="#Toc255128888">5) Dessin d'une Skybox	en C </a></h5>
		<h5><a onclick="Effect.ScrollTo('Toc255128889'); return false;" href="#Toc255128889">6) Contrôle à la Wiimote</a></h5>
		<h5><a onclick="Effect.ScrollTo('Toc255128890'); return false;" href="#Toc255128890">7) Inclure des sons en cpp</a></h5>
		<h5><a onclick="Effect.ScrollTo('Toc255128891'); return false;" href="#Toc255128891">8) Tir de missiles	avec OpenGL</a></h5>
		<h5><a onclick="Effect.ScrollTo('Toc255128892'); return false;" href="#Toc255128892">9) Scène finale&nbsp;: 3 planètes + 2 satellites </a></h5>
		<h5><a onclick="Effect.ScrollTo('Toc255128893'); return false;" href="#Toc255128893">10) Téléchargement du jeu OpenGL</a></h5>

		<h5><a href="#Toc255128884" id="Toc255128884">1) Jeu en C++ utilisant OpenGL</a></h5>

		<p class="style1" >Voici un exemple de la première scène dévellopée, elle était composée d'un vaisseau spatial de type&nbsp;«&nbsp;NabooFighter&nbsp;» téléchargé
		sur le site <a href="http://www.scifi3d.com/">www.scifi3d.com</a> et d'une
		surface de lune dessinée avec <a href="http://www.earthsculptor.com">www.earthsculptor.com</a>.</p>

		<img class="img_opengl" src="/cv/detail/img/image001.jpg" alt="image.jpg"/>


		<h5><a href="#Toc255128885"	id="Toc255128885">2)Suivi du vaisseau par la caméra</a></h5>

		<p class="style1" >La fonction gluLookAt&nbsp;permet
		de suivre le mobile avec la caméra. La position de la caméra sera modifiée de
		la même manière que le mobile. Les constantes présentent dans les paramètres de
		rapport à l'objet. Le sinus qui influe la position en Y «&nbsp;à
		regarder&nbsp;» permet d'anticiper la vision sur le déplacement.</p>

		<p class="style1"><img src="/cv/detail/img/image002.jpg" alt="image.jpg"/></p>

		<h5><a href="#Toc255128886"	id="Toc255128886">3)Liste des touches utilisées</a></h5>

		<p class="style1" >Voici la liste des touches utilisées ainsi que leurs effets&nbsp;:</p>

		<p class="img_opengl" ><img src="/cv/detail/img/image003.jpg" alt="image.jpg"/></p>
		<br />
		<h5 ><a href="#Toc255128887" id="Toc255128887">4) Gestion des collisions</a></h5>

		<p class="style1" >La «&nbsp;physicalisattion&nbsp;»
		permet d'interagir avec les objets lors de collision. Ici uniquement la terre
		(fixe) et le vaisseau (mobile) ont été phisycalisé pour minimiser les
		ressources nécessaires à l'exécution du jeu.</p>

		<p class="style1" >Si le vaisseau percute la terre&nbsp;:</p>

		<p class="style1" >-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;il recule automatiquement jusqu'à que l'on reprenne le contrôle de sa
		vitesse</p>

		<p class="style1"> -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;un son d'alarme et joué</p>

		<p class="style1" >Chargement des objets&nbsp;:</p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
		justify;line-height:normal;text-autospace:none'>&nbsp;</p>

		<div style='border:solid windowtext 1.0pt;padding:1.0pt 4.0pt 1.0pt 4.0pt'>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>tab3DS[1].Load(<span
		style='color:#A31515'>&quot;data/Naboo2/NabooFight2_mini.3ds&quot;</span>);</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
		justify;line-height:normal;text-autospace:none;border:none;padding:0cm'><span
		lang="EN-GB" style='font-size:10.0pt;font-family:"Courier New"'>      </span><span
		style='font-size:10.0pt;font-family:"Courier New"'>affichInfo3ds(1);</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>tab3DS[4].Load(<span
		style='color:#A31515'>&quot;data/map/earth5.3DS&quot;</span>);</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
		justify;line-height:normal;text-autospace:none;border:none;padding:0cm'><span
		lang="EN-GB" style='font-size:10.0pt;font-family:"Courier New"'>      </span><span
		style='font-size:10.0pt;font-family:"Courier New"'>affichInfo3ds(4);</span></p>

		</div>

		<p class="style1" >Physicalisation des éléments&nbsp;mobile et fixe par	des fonctions prédéfinies :</p>

		<div style='border:solid windowtext 1.0pt;padding:1.0pt 4.0pt 1.0pt 4.0pt'>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>InitNx3DS(1);</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>      CreateNxAvatar(1);</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>InitNx3DS(4);</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>      CreateNx3DS(4,FIXE);</span></p>
		
		</div>

		<p class="style1">Gestion des collisions&nbsp;:</p>

		<div style='border:solid windowtext 1.0pt;padding:1.0pt 4.0pt 1.0pt 4.0pt'>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New";color:blue'>if</span><span
		lang="EN-GB" style='font-size:10.0pt;font-family:"Courier New"'>(events &amp;
		NX_NOTIFY_ON_START_TOUCH)    </span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>            {</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>                  printf(<span
		style='color:#A31515'>&quot;\nStart touch\n&quot;</span>);</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>                  Vitesse=-2;</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>            }</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>            <span
		style='color:blue'>if</span>(events &amp; NX_NOTIFY_ON_TOUCH)                </span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>            {</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>                  printf(<span
		style='color:#A31515'>&quot;On touch\n&quot;</span>);</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>                  FSOUND_PlaySound(1,
		samp1);</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>            </span><span
		style='font-size:10.0pt;font-family:"Courier New"'>}</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>            </span><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New";color:blue'>if</span><span
		lang="EN-GB" style='font-size:10.0pt;font-family:"Courier New"'>(events &amp;
		NX_NOTIFY_ON_END_TOUCH)      printf(<span style='color:#A31515'>&quot;End
		touch\n\n&quot;</span>);</span></p>

		</div>
		<br />
		<h5 ><a href="#Toc255128888" id="Toc255128888">5)&nbsp; Dessin d'une Skybox en C</a></h5>

		<p class="style1" >Utilisation de plusieurs sphères
		de points positionnées les une dans les autres ce qui imite un ciel étoilé en
		utilisant une boucle «&nbsp;for&nbsp;». Il y a aussi deux satellites qui
		tournent autour de la terre.</p>

		<p class="img_opengl" >
			<img	src="/cv/detail/img/image004.jpg" alt="image.jpg"/> 
			<img src="/cv/detail/img/image005.jpg" alt="image.jpg"/>
		</p>
		<br />
		<h5 ><a href="#Toc255128889" id="Toc255128889">6)&nbsp;Contrôle à la Wiimote</a></h5>

		<p class="style1" >Le vaisseau monte, descend, tourne et s'incline en fonction de la position de la wiimote (les même
		fonctions sont possible avec la souris).</p>

		<p class="img_opengl"><img src="/cv/detail/img/image006.jpg" alt="image.jpg" /></p>
		<p class="style1">Inclusion des bibliothèques pour la Wiimote téléchagé sur <a href="http://www.wiiuse.net/">http://www.wiiuse.net</a>
		:</p>

		<p class="style1">Exemple d'utilisation des boutons de la Wiimote&nbsp;: </p>

		<p class="img_opengl"><img src="/cv/detail/img/image007.jpg" alt="image.jpg"/></p>

		<p class="style1" >On peut connaitre la position du	vaisseau à tout instant en regardant la fenêtre de console&nbsp;:</p>

		<p class="img_opengl" ><img	src="/cv/detail/img/image008.jpg" alt="image.jpg"/></p>

		<h5 ><a href="#Toc255128890" id="Toc255128890">7) Inclure des sons en cpp</a></h5>

		<p class="style1">Différents sons ont été inclus dans le jeu&nbsp;:</p>

		<p class="style1" >- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		La musique originale de StarWars en fond</p>

		<p class="style1" >-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Un son de missile lors du lancement des missiles en pressant la touche
		«&nbsp;g&nbsp;»</p>

		<p class="style1" >-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Une alarme lors d'une collision avec la terre</p>

		<p class="style1">Déclaration des bibliothèques&nbsp;de son pour le c++ :</p>

		<div style='border:solid windowtext 1.0pt;padding:1.0pt 4.0pt 1.0pt 4.0pt'>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New";color:blue'>#include</span><span
		style='font-size:10.0pt;font-family:"Courier New"'> <span style='color:#A31515'>&quot;../data/Les_Sons/fmod.h&quot;</span></span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New";color:blue'>#include</span><span
		style='font-size:10.0pt;font-family:"Courier New"'> <span style='color:#A31515'>&quot;../data/Les_Sons/fmod_errors.h&quot;</span></span></p>

		<p class="style1" style='border:none;padding:0cm'><span style='font-size:10.0pt;
		line-height:115%;font-family:"Courier New";color:blue'>#pragma</span><span
		style='font-size:10.0pt;line-height:115%;font-family:"Courier New"'> <span
		style='color:blue'>comment</span>(<span style='color:blue'>lib</span>, <span
		style='color:#A31515'>&quot;fmodvc.lib&quot;</span>)</span></p>

		</div>

		<p class="style1">Déclaration des variables de types son&nbsp;:</p>

		<div style='border:solid windowtext 1.0pt;padding:1.0pt 4.0pt 1.0pt 4.0pt'>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New";color:blue'>static</span><span
		lang="EN-GB" style='font-size:10.0pt;font-family:"Courier New"'> FSOUND_SAMPLE
		*samp1;       / un son               </span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New";color:blue'>static</span><span
		lang="EN-GB" style='font-size:10.0pt;font-family:"Courier New"'> FSOUND_SAMPLE
		*samp2;                                                </span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New";color:blue'>static</span><span
		lang="EN-GB" style='font-size:10.0pt;font-family:"Courier New"'> FSOUND_SAMPLE
		*samp3;       </span></p>

		<p class="style1" style='border:none;padding:0cm'><span style='font-size:10.0pt;
		line-height:115%;font-family:"Courier New"'>FSOUND_STREAM *musique = NULL;     /
		une musique de fond</span></p>

		</div>

		<p class="style1">Initialisation des différents sons&nbsp;utile au programme :</p>

		<div style='border:solid windowtext 1.0pt;padding:1.0pt 4.0pt 1.0pt 4.0pt'>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New";color:blue'>void</span><span style='font-size:
		10.0pt;font-family:"Courier New"'> initSon(){</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>      </span><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New";color:blue'>if</span><span
		lang="EN-GB" style='font-size:10.0pt;font-family:"Courier New"'>
		(!FSOUND_Init(44100, 32, 0)) </span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>      {</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>            printf(<span
		style='color:#A31515'>&quot;Erreur&quot;</span>);</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>      }</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>      samp1 =
		FSOUND_Sample_Load(FSOUND_FREE, <span style='color:#A31515'>&quot;Data/Les_Sons/Burglar.wav&quot;</span>,
		FSOUND_NORMAL | FSOUND_2D, 0, 0);            <span style='color:blue'>if</span>(!samp1)
		printf(<span style='color:#A31515'>&quot;sound error&quot;</span>);</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>      samp3 =
		FSOUND_Sample_Load(FSOUND_FREE, <span style='color:#A31515'>&quot;Data/Les_Sons/missle.wav&quot;</span>,
		FSOUND_NORMAL | FSOUND_2D, 0, 0);            <span style='color:blue'>if</span>(!samp3)
		printf(<span style='color:#A31515'>&quot;sound error&quot;</span>);</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>      musique =
		FSOUND_Stream_Open(<span style='color:#A31515'>&quot;Data/Les_Sons/starwars.wav&quot;</span>,
		FSOUND_LOOP_NORMAL, 0, 0);</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>      </span><span
		style='font-size:10.0pt;font-family:"Courier New"'>FSOUND_Stream_SetLoopCount(musique,
		-1);                                     </span><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>FSOUND_Stream_Play(FSOUND_FREE,
		musique);                                                                                        </span></p>

		<p class="style1" style='border:none;padding:0cm'><span style='font-size:10.0pt;
		line-height:115%;font-family:"Courier New"'>}</span></p>

		</div>

		<p class="style1">Pour jouer le son&nbsp;missile.wav :</p>

		<div style='border:solid windowtext 1.0pt;padding:1.0pt 4.0pt 1.0pt 4.0pt'>

		<p class="style1" style='border:none;padding:0cm'><span style='font-size:10.0pt;
		line-height:115%;font-family:"Courier New"'>FSOUND_PlaySound(1, samp3);</span></p>

		</div>

		<p class="style1">&nbsp;</p>

		<h5 ><a href="#Toc255128891" id="Toc255128891">8) Tir de missiles avec OpenGL</a></h5>

		<p class="style1">Ici il suffit de presser la touche «&nbsp;g&nbsp;»
		pour&nbsp;:</p>

		<p class="style1" >-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mettre une variable «&nbsp;fire&nbsp;» à 1 qui est utilisé par la boucle
		d'affichage</p>

		<p class="style1">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recopier la position et l'orientation du vaisseau dans les variables de
		position et d'orientation du missile</p>

		<p class="style1" >-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jouer un son</p>

		<p class="style1">Code pour l'initialisation du tir&nbsp;:</p>

		<div style='border:solid windowtext 1.0pt;padding:1.0pt 4.0pt 1.0pt 4.0pt'>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;text-indent:
		35.4pt;line-height:normal;text-autospace:none;border:none;padding:0cm'><span
		lang="EN-GB" style='font-size:10.0pt;font-family:"Courier New";color:blue'>case</span><span
		lang="EN-GB" style='font-size:10.0pt;font-family:"Courier New"'> <span
		style='color:#A31515'>'g'</span>:   fire = 1;                                                                    WeGD
		= RotGD;</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>                  WeHB =
		IncHB;</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>                  WeX = AvX;</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>                  WeY = AvY;</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>                  WeZ = AvZ;</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span lang="EN-GB"
		style='font-size:10.0pt;font-family:"Courier New"'>                  FSOUND_PlaySound(1,
		samp3);</span><span style='font-size:10.0pt;font-family:"Courier New";
		color:blue'>break</span><span style='font-size:10.0pt;font-family:"Courier New"'>;</span></p>

		</div>
		<br />
		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none'>Etape pour l'affichage des missiles&nbsp;(dans la
		fonction display) :</p>

		<p class="style1" >-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;positionnement à l'endroit où se trouve le vaisseau</p>

		<p class="style1" >-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ajustement juste devant la sortie des cannons pour le réalisme
		déplacement autonome en fonction du pas</p>

		<p class="style1" >-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;redimensionnement (mise à l'échelle) des missiles</p>

		<p class="style1" >-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;affichage du premier missile</p>

		<p class="style1" >-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;déplacement jusqu'au second canon</p>

		<p class="style1" >-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;affichage du second missile</p>

		<p class="style1" >-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arrêt du déplacement des missiles en fonction d'un seuil (ici 30
		itérations)</p>

		<p class="style1" >Code pour l'affichage des missiles en mouvement&nbsp;indépendamment du mouvement du vaisseau:</p>

		<div style='border:solid windowtext 1.0pt;padding:1.0pt 4.0pt 1.0pt 4.0pt'>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;text-indent:
		35.4pt;line-height:normal;text-autospace:none;border:none;padding:0cm'><span
		style='font-size:10.0pt;font-family:"Courier New"'>glPushMatrix();   </span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>            <span style='color:blue'>if</span>(fire
		== 1 )</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>            {           </span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>                  pas -= 1;</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>                  glTranslatef(WeX,WeY,WeZ);                                 </span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>                  glRotatef(WeGD, 0.0, 1.0,
		0.0);</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>                  glRotatef(-WeHB, 1.0, 0.0,
		0.0);</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>                  glTranslatef(-1.5,-0.8,pas-8);     </span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>                  glScalef (0.01, 0.01,
		0.01);                                                 tab3DS[5].Draw();</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>                  glTranslatef(250, 0.0,
		0.0);                               </span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>                  tab3DS[5].Draw();</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>                  <span style='color:blue'>if</span>(pas
		&lt; -30)</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;text-indent:
		35.4pt;line-height:normal;text-autospace:none;border:none;padding:0cm'><span
		style='font-size:10.0pt;font-family:"Courier New"'>            {                 <span
		style='color:green'>// défini la portée des misiles</span></span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>                        fire = 0;</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>                        pas = 0;</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>                  }</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>            }</span></p>

		<p class="style1" style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		normal;text-autospace:none;border:none;padding:0cm'><span style='font-size:
		10.0pt;font-family:"Courier New"'>      glPopMatrix();    </span></p>

		</div>

		<h5 ><img src="/cv/detail/img/image009.jpg" alt="image.jpg"/></h5>
		<br />
		<br />
		<h5 ><a href="#Toc255128892" id="Toc255128892">9) Scène finale&nbsp;: 3 planètes + 2 satellites</a></h5>

		<p class="img_opengl"></p>

		<p class="img_opengl" >
			<img src="/cv/detail/img/image010.jpg"  alt="image.jpg"/>
			<img src="/cv/detail/img/image011.jpg"  alt="image.jpg"/>
			<img src="/cv/detail/img/image012.jpg"  alt="image.jpg"/>
			<br />
		</p>
			<br />
		<h5 ><a href="#Toc255128893" id="Toc255128893">10) Téléchargement du jeu OpenGL</a></h5>
		<p class="style1" >
			Voici un fichier <a href="/cv/detail/download/game_opengl.zip" title="download">zip</a> (16Mo) contenant l'exécutable ainsi que 
			les fichiers .dll et .3ds nécessaires au fonctionnement.
			Ce jeu est exécutable sous windows, après l'avoir dézippé, et en cliquant sur start.exe. 
			Au lancement, vous pouvez suivre l'initialisation de chaque objet dans la fenêtre "console". 
			Ceci peut prendre plusieurs minutes en fonction de votre configuration. 
			Une fois terminé, la liste des contrôles apparaît dans cette même fenêtre et une autre affiche le jeu. C'est le moment de jouer!
		</p>







<!-- END DETAIL -->
