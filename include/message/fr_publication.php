<?php

$publications = array();


/*** GREC'13 redundant-structure-detection-in-attributed-adjacency-graphs ***/
$a = new Article('redundant-structure-detection-in-attributed-adjacency-graphs for-character-detection-in-comics-books');// class Article is defined in ~/include/function.php
$a->title = 'Détection de structures redondantes dans des graphes d\'adjacences attribués pour détecter les personnages dans les bandes dessinées';
$a->date = '2013-08-22';//ISO date formatYYYY-MM-DD
$a->author = 'Hoang Nam Ho, Christophe Rigaud, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = ' Proceedings of the 10th IAPR International Workshop on Graphics Recognition (GREC), 2013';

$a->metaTitle = $a->title;
$a->metaDesc = 'Method to detect main comics characters (hero).';
$a->metaKeywords = 'comics character detection, comics hero identification, comics, story understanding';

$a->abs = 'Les graphiques sont des structures de données couramment utilisées pour modéliser des relations entre les éléments d\'une collection de donnée. En traitement d\'images, les graphes d\'adjacence sont souvent utilisés pour représenter les relations entre les différentes régions. Ces graphes peuvent être comparés mais les stratégies d\'appariement de graphes sont essentielles pour trouver des similarités. Dans cet article, nous nous proposons de détecter les personnages redondants dans des albums de bandes dessinées. Dans cette méthode, chaque case est représentée par un graphe d\'adjacence attribué. Une stratégie d\'appariement inexact est appliquée pour trouver des structures redondantes parmi l\'ensemble des graphes. L\'idée principale est que le même personnage est toujours représenté par des sous-graphes similaires dans les différentes cases où il apparaît. Le processus de mise en correspondance est constitué de deux étapes, la première est la mise en correspondance des nœud du graphe et la seconde étape est une étape de validation des arcs correspondants. Les expériences montrent que notre approche est capable de détecter des structures redondantes et par conséquent les personnages récurrents dans les bandes dessinées. L\'originalité de notre approche est qu\'aucun modèle a priori n\'est nécessaire, l\'algorithme détecte tout seul toutes les structures redondantes.';

array_push($publications, $a);


/*** GREC'13 speech balloon contour classification ***/
$a = new Article('speech-balloon-contour-classification-in-comics');// class Article is defined in ~/include/function.php
$a->title = 'Classification des bulles de bandes dessinées';
$a->date = '2013-08-22';//ISO date formatYYYY-MM-DD
$a->author = 'Christophe Rigaud, Dimosthenis Karatzas, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = ' Proceedings of the 10th IAPR International Workshop on Graphics Recognition (GREC), 2013';

$a->metaTitle = $a->title;
$a->metaDesc = 'Method to detect speech balloon type in comics.';
$a->metaKeywords = 'speech balloon type, speech bubble, comics,detection, story understanding';

$a->abs = 'La numérisation massive des bandes dessinées combinée avec l\'analyse de document par ordinateur crée une multitude de nouvelles applications, notamment la lecture mobile et recherche d\'information. La compréhension de document automatisé est un réel défi avec les bandes dessinées car elles sont semi-structurées et contiennent une sémantique tout aussi importante dans le graphisme que dans le texte. Dans ce travail, nous proposons un nouvelle approche pour classifier les bulles de dialogue des pages de bandes dessinées numérisées en fonction sur leur type de contour.';
$a->bibtex = '@inproceedings{Rigaud2013GREC,
    title = {Speech balloon contour classification in comics},
    author = {Rigaud, Christophe and Karatzas, Dimosthenis and Burie, Jean-Christophe and Ogier, Jean-Marc},
    booktitle = {Proceedings of the 10th IAPR International Workshop on Graphics Recognition (GREC)},
    year = {2013}
}';
$a->urlPdf = 'https://github.com/crigaud/publication/blob/master/2013/GREC/speech_balloon_contour_classification_in_comics/paper/2013_Rigaud_Speech_balloon_contour_classification_in_comics.pdf?raw=true';
$a->urlPresentation = 'http://www.slideshare.net/slideshow/embed_code/27753499';
$a->urlMaterial = 'https://github.com/crigaud/publication/tree/master/2013/GREC/speech_balloon_contour_classification_in_comics';

array_push($publications, $a);


/*** ICDAR'13 active contour balloon ***/
$a = new Article('active-contour-model-for-speech-balloon-detection-in-comics');// class Article is defined in ~/include/function.php
$a->title = 'Un modèle de contours actifs pour la détection des bulles dans les bandes dessinées';
$a->date = '2013-08-28';//ISO date formatYYYY-MM-DD
$a->author = 'Christophe Rigaud, Dimosthenis Karatzas, Joost Van de Weijer, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = 'Proceedings of International Conference of Document Analysis and Recognition (ICDAR), 2013';
$a->abs	= 'Les bandes dessinées constituent un important héritage dans de nombreux pays. La numérisation combinée avec l\'analyse automatique de document permettrait une variété de nouvelles applications, dont compris la réutilisation de documents anciens et la recherche par le contenu de l\'image. La compréhension des documents dans ce domaine est difficile car les BD sont des documents semi-structurés, combinant des éléments sémantiquement d\'origine textuelle et graphique. Peu d\'études ont été menées à ce jour. Dans ce travail, nous proposons un nouvelle approche pour localiser les bulles fermées et ouvertes à partir d\'images de bandes dessinées, une étape essentielle vers une interprétation automatisée de la bande dessinée. L\'approche est comparée à
des méthodes existantes de la littérature et les résultats sont présentés.';
$a->bibtex = '@inproceedings{Rigaud2013ICDARActive,
    title = {An active contour model for speech balloon detection in comics},
    author = {Rigaud, Christophe and Karatzas, Dimosthenis and Van de Weijer, Joost and Burie, Jean-Christophe and Ogier, Jean-Marc},
    booktitle = {Proceedings of the International Conference on Document Analysis and Recognition, ICDAR},
    pages = {1240-1244},
    year = {2013}
}';
$a->metaTitle = $a->title;
$a->metaDesc = 'Method to detect speech balloon in comics.';
$a->metaKeywords = 'speech balloon,speech bubble,comics,detection';

//$a->urlContent = $a->id . '.html';
$a->urlPdf = 'https://github.com/crigaud/publication/blob/master/2013/ICDAR/an_active_contour_model_for_speech_balloon_detection_in_comics/paper/2013_Rigaud_An_active_contour_model_for_speech_balloon_detection_in_comics.pdf?raw=true';
$a->urlPoster = 'https://raw.github.com/crigaud/publication/master/2013/ICDAR/an_active_contour_model_for_speech_balloon_detection_in_comics/poster/2013_Rigaud_An_active_contour_model_for_speech_balloon_detection_in_comics.png';
$a->urlMaterial = 'https://github.com/crigaud/publication/tree/master/2013/ICDAR/an_active_contour_model_for_speech_balloon_detection_in_comics';

array_push($publications, $a);


/*** ICDAR'13 eBDtheque ***/
$a = new Article('ebdtheque-a-representative-database-of-comics');// class Article is defined in ~/include/function.php
$a->title = 'eBDtheque : une base d\'images de bandes déssinées représentatives';
$a->date = '2013-08-28';//ISO date formatYYYY-MM-DD
$a->author = 'Clément Guérin, Christophe Rigaud, Antoine Mercier et al.';
$a->publisher = 'Proceedings of International Conference of Document Analysis and Recognition (ICDAR), 2013';
$a->abs = 'Nous présentons eBDtheque, une base d\'image de différentes bandes dessinées et leur vérité terrain pour les cases, les bulles, les lignes de texte ainsi que leurs annotations sémantiques. La base de données se compose d\'une centaine de pages de différents albums de bandes dessinées, franco-belges, Comics américains et des mangas. De plus, nous présentons les outils qui nous ont permit de créer cette vérité terrain et de valider nos résultats. Tout est publiquement disponible pour une utilisation scientifique sur le site web du projet : http://ebdtheque.univ-lr.fr';
$a->bibtex = '@inproceedings{Guerin2013ICDAR,
    title = {eBDtheque: a representative database of comics},
    author = {Gu{\'e}rin, Cl{\'e}ment and Rigaud, Christophe and Mercier, Antoine and Ammar-Boudjelal, Farid and Bertet, Karell and Bouju, Alain and Burie, Jean-Christophe and Louis, George and Ogier, Jean-Marc and Revel, Arnaud},
    booktitle = {Proceedings of the 12th International Conference on Document Analysis and Recognition (ICDAR)},
    pages = {1145-1149},
    year = {2013}
}';
$a->metaTitle = $a->title;
$a->metaDesc = 'A comics dataset and ground truth for the scientist community';
$a->metaKeywords = 'comics,manga,bd,ground truth,annotation,frame,panel,balloon,text';

$a->urlPdf = 'https://github.com/crigaud/publication/blob/master/2013/ICDAR/eBDtheque_a_representative_database_of_comics/paper/2013_Guerin_eBDtheque:%20a%20representative%20database%20of%20comics.pdf?raw=true';
$a->urlPoster = 'https://raw.github.com/crigaud/publication/master/2013/ICDAR/eBDtheque_a_representative_database_of_comics/poster/2013_Guerin_eBDtheque_a_representative_database_of_comics.png';

array_push($publications, $a);


/*** VISAPP'13 text localization ***/
$a = new Article('automatic-text-localisation-in-scanned-comic-books');// class Article is defined in ~/include/function.php
$a->title = 'Localisation automatique du texte dans les bandes dessinées numérisées';
$a->date = '2013-02-22';//ISO date formatYYYY-MM-DD
$a->author = 'Christophe Rigaud, Dimosthenis Karatzas, Joost Van de Weijer, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = 'International Conference on Computer Vision Theory and Applications (VISAPP), 2013';

$a->metaTitle = $a->title;
$a->metaDesc = '';
$a->metaKeywords = 'text detection,text graphic separation,comics,manga,bd';
$a->bibtex = '@inproceedings{Rigaud2013VISAPP,
title = {Automatic Text Localisation in Scanned Comic Books},
author = {Rigaud, Christophe and Karatzas, Dimosthenis and Van de Weijer , Joost and Burie, Jean-Christophe and Ogier, Jean-Marc},
keywords = {Text localization, comics, text/graphic separation, complex background, unstructured document},
booktitle = {Proceedings of the 8th International Conference on Computer Vision Theory and Applications (VISAPP)},
publisher = {SCITEPRESS Digital Library},
year = {2013}
}';
$a->abs = 'Les bandes dessinées constituent une part importante du patrimoine culturel dans de nombreux pays. Leurs numérisation combinée avec les techniques de compréhension automatique de documents permet d\'effectuer des recherches basées sur le contenu plutôt que de métadonnées ou le texte associé (par exemple titre de l\'album ou le nom de l\'auteur). Peu d\'études ont été menées à ce jour. Dans ce travail, nous détaillons une nouvelle approche de localisation automatique de texte dans les pages de bandes dessinées numérisées, une étape essentielle vers pour compréhension par ordinateur de livre. Nous nous concentrons sur le texte de parlé car il est sémantiquement important et représente la majorité du texte présent dans la bande dessinée. Notre approche est comparée avec les méthodes existantes de localisation de texte trouvés dans la littérature et les résultats sont présentés.';
$a->urlContent = $a->id . '.html';

$a->urlPdf = 'https://github.com/crigaud/publication/blob/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/paper/2013_Rigaud_Automatic_text_localisation_in_scanned_comic_books.pdf?raw=true';
$a->urlPoster = 'https://raw.github.com/crigaud/publication/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/poster/2013_Rigaud_Automatic_Text_Localisation_in_Scanned_Comic_Books.png';
$a->urlDemo = 'https://github.com/crigaud/publication/tree/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/demo/text_extractor_for_comics';
$a->urlMaterial = 'https://github.com/crigaud/publication/tree/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/';

array_push($publications, $a);

/*** LNCS'13 - Robust frame and text extraction from comic books ***/
$a = new Article('robust-frame-and-text-extraction-from-comic-books');// class Article is defined in ~/include/function.php
$a->title = ' Extraction robuste des cases et du texte dans les bandes dessinées ';
$a->date = '2013-02-22';//ISO date formatYYYY-MM-DD
$a->author = 'Christophe Rigaud, Norbert Tsopze, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = 'Graphics Recognition. New Trends and Challenges (LNCS), vol. 7423, pp. 129-138, 2013';
$a->abs = 'Les bandes dessinées constituent un patrimoine important dans de nombreux pays. Aujourd\'hui, la numérisation permet de rechercher directement à partir de leur contenu au lieu des métadonnées uniquement (par exemple, le titre de l\'album ou le nom de l\'auteur). Peu d\'études ont été menées dans ce sens. L\'extraction de cases et des bulles ont déjà été étudiés dans le cas de structures simple uniquement. La structure de la page dépend de l\'auteur et c\'est pourquoi il existe de nombreux types de structures et dessins différents. Malgrés les différences, les dessins ont une caractéristique commune de part leurs processus de conception : ils sont tous entourés par un trait noire. Dans cet article, nous nous proposons de s\'appuyer sur cette particularité de la bande dessinée pour extraire automatiquement les cases et le texte en utilisant une analyse basée sur les composantes connexes. L\'approche est comparée à des méthodes existantes de la littérature et les résultats sont présentés.';
$a->metaTitle = $a->title;
$a->metaDesc = 'Automatic text detection for comics';
$a->metaKeywords = 'text detection,text graphic separation,comics,manga,bd';


$a->bibtex = '@incollection{
year={2013},
isbn={978-3-642-36823-3},
booktitle={Graphics Recognition. New Trends and Challenges},
volume={7423},
series={Lecture Notes in Computer Science},
editor={Kwon, Young-Bin and Ogier, Jean-Marc},
doi={10.1007/978-3-642-36824-0_13},
title={Robust Frame and Text Extraction from Comic Books},
url={http://dx.doi.org/10.1007/978-3-642-36824-0_13},
publisher={Springer Berlin Heidelberg},
keywords={comic books; comics frame extraction; comics text extraction; segmentation; connected-component labeling; k-means},
author={Rigaud, Christophe and Tsopze, Norbert and Burie, Jean-Christophe and Ogier, Jean-Marc},
pages={129-138}
}';

$a->urlOnline = 'http://link.springer.com/chapter/10.1007/978-3-642-36824-0_13';

array_push($publications, $a);

/*** CIFED'12 - Extraction robuste des cases et du texte de bandes dessinées ***/
$a = new Article('extraction-robuste-des-cases-et-du-texte-de-bandes-dessinees');// class Article is defined in ~/include/function.php
$a->title = 'Extraction robuste des cases et du texte de bandes dessinées';
$a->date = '2012-03-23';//ISO date formatYYYY-MM-DD
$a->author = 'Christophe Rigaud, Norbert Tsopze, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = 'Proceedings of Colloque International Francophone sur l\'Ecrit et le Document (CIFED), pp. 349-360, 2012';
$a->abs = 'Les bandes dessinées représentent un patrimoine culturel important dans de nombreux pays. La numérisation en masse offre l\'opportunité d’effectuer des recherches sur le contenu des albums et pas uniquement sur des métadonnées associées (e.g. nom de l\'auteur ou de la collection). Peu de travaux ont été menés à ce jour. Seule l’extraction des cases et des bulles de dialogues a été étudiée et ce, pour des structures de pages relativement simples. En effet, la structure des pages est propre à chaque auteur, ce qui engendre une très grande diversité de dessins. Malgrés cette diversité, les dessins ont une particularité commune de part leurs méthodes de conception : ils sont constitués ou entourés d\'un trait noir. Dans cet article, nous proposons de nous appuyer sur cette particularité des bandes dessinées pour extraire automatiquement les cases et le texte avec une méthode basée sur la classification de composantes connexes. Nous comparerons notre méthode avec des outils de la littérature et discuterons des résultats.';
$a->bibtex = '@inproceedings{,
title = {Extraction robuste des cases et du texte de bandes dessinées},
author = {Rigaud, Christophe and Tsopze, Norbert and Burie, Jean-Christophe and Ogier, Jean-Marc},
keywords = {bandes dessinées, extraction de cases, extraction de bulles, segmentation, composantes connexes, k-means},
language = {Français},
booktitle = {CIFED\'12 proceedings},
pages = {349-360},
year = {2012}
}';
$a->metaTitle = $a->title;
$a->metaDesc = 'Automatic text detection for comics';
$a->metaKeywords = 'text detection,text graphic separation,comics,manga,bd';

$a->urlContent = $a->id . '.html';

$a->urlOnline = 'http://hal.archives-ouvertes.fr/hal-00701987';
$a->urlPdf = 'https://github.com/crigaud/publication/blob/master/2012/CIFED/extraction_robuste_des_cases_et_du_texte_de_bandes_dessinees/paper/2011_Rigaud_Extraction_robuste_des_cases_et_du_texte_de_bandes_dessinees.pdf?raw=true';
$a->urlPresentation = 'http://www.slideshare.net/slideshow/embed_code/24145096';

array_push($publications, $a);



?>

