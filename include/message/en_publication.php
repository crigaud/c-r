<?php

$publications = array();


/*** GREC'13 speech balloon contour classification ***/
$a = new Article('redundant-structure-detection-in-attributed-adjacency-graphs for-character-detection-in-comics-books');// class Article is defined in ~/include/function.php
$a->title = 'Redundant structure detection in attributed adjacency graphs for character detection in comics books';
$a->date = '2013-08-22';//ISO date formatYYYY-MM-DD
$a->author = 'Hoang Nam Ho, Christophe Rigaud, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = ' Proceedings of the 10th IAPR International Workshop on Graphics Recognition (GREC), 2013';

$a->metaTitle = $a->title;
$a->metaDesc = 'Method to detect main comics characters (hero).';
$a->metaKeywords = 'comics character detection, comics hero identification, comics, story understanding';

$a->urlContent = $a->id . '.html';

array_push($publications, $a);


/*** GREC'13 speech balloon contour classification ***/
$a = new Article('speech-balloon-contour-classification-in-comics');// class Article is defined in ~/include/function.php
$a->title = 'Speech balloon contour classification in comics';
$a->date = '2013-08-22';//ISO date formatYYYY-MM-DD
$a->author = 'Christophe Rigaud, Dimosthenis Karatzas, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = ' Proceedings of the 10th IAPR International Workshop on Graphics Recognition (GREC), 2013';

$a->metaTitle = $a->title;
$a->metaDesc = 'Method to detect speech balloon type in comics.';
$a->metaKeywords = 'speech balloon type, speech bubble, comics,detection, story understanding';

$a->urlContent = $a->id . '.html';

$a->urlMaterial = 'https://github.com/crigaud/publication/tree/master/2013/GREC/speech_balloon_contour_classification_in_comics';

array_push($publications, $a);

/*** ICDAR'13 active contour balloon ***/
$a = new Article('active-contour-model-for-speech-balloon-detection-in-comics');// class Article is defined in ~/include/function.php
$a->title = 'An active contour model for speech balloon detection in comics';
$a->date = '2013-08-28';//ISO date formatYYYY-MM-DD
$a->author = 'Christophe Rigaud, Dimosthenis Karatzas, Joost Van de Weijer, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = 'Proceedings of International Conference of Document Analysis and Recognition (ICDAR), 2013';

$a->metaTitle = $a->title;
$a->metaDesc = 'Method to detect speech balloon in comics.';
$a->metaKeywords = 'speech balloon,speech bubble,comics,detection';

$a->urlContent = $a->id . '.html';

$a->urlMaterial = 'https://github.com/crigaud/publication/tree/master/2013/ICDAR/an_active_contour_model_for_speech_balloon_detection_in_comics';

array_push($publications, $a);


/*** ICDAR'13 eBDtheque ***/
$a = new Article('ebdtheque-a-representative-database-of-comics');// class Article is defined in ~/include/function.php
$a->title = 'eBDtheque: a representative database of comics';
$a->date = '2013-08-28';//ISO date formatYYYY-MM-DD
$a->author = 'Clément Guérin, Christophe Rigaud, Antoine Mercier';
$a->publisher = 'Proceedings of International Conference of Document Analysis and Recognition (ICDAR), 2013';

$a->metaTitle = $a->title;
$a->metaDesc = 'A comics dataset and ground truth for the scientist community';
$a->metaKeywords = 'comics,manga,bd,ground truth,annotation,frame,panel,balloon,text';

$a->urlContent = $a->id . '.html';

array_push($publications, $a);


/*** VISAPP'13 text localization ***/
$a = new Article('automatic-text-localisation-in-scanned-comic-books');// class Article is defined in ~/include/function.php
$a->title = 'Automatic text localisation in scanned comic books';
$a->date = '2013-02-22';//ISO date formatYYYY-MM-DD
$a->author = 'Christophe Rigaud, Dimosthenis Karatzas, Joost Van de Weijer, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = 'International Conference on Computer Vision Theory and Applications (VISAPP), 2013';

$a->metaTitle = $a->title;
$a->metaDesc = 'Automatic text detection for comics';
$a->metaKeywords = 'text detection,text graphic separation,comics,manga,bd';

$a->urlContent = $a->id . '.html';

$a->urlPdf = 'https://github.com/crigaud/publication/blob/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/paper/2013_Rigaud_Automatic_text_localisation_in_scanned_comic_books.pdf?raw=true';
$a->urlPoster = 'https://github.com/crigaud/publication/blob/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/poster/2013_Rigaud_Automatic_Text_Localisation_in_Scanned_Comic_Books.pdf?raw=true';
$a->urlDemo = 'https://github.com/crigaud/publication/tree/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/demo/text_extractor_for_comics';
$a->urlMaterial = 'https://github.com/crigaud/publication/tree/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/';

array_push($publications, $a);

/*** LNCS'13 - Robust frame and text extraction from comic books ***/
$a = new Article('robust-frame-and-text-extraction-from-comic-books');// class Article is defined in ~/include/function.php
$a->title = 'Robust frame and text extraction from comic books';
$a->date = '2013-02-22';//ISO date formatYYYY-MM-DD
$a->author = 'Christophe Rigaud, Norbert Tsopze, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = 'Graphics Recognition. New Trends and Challenges (LNCS), vol. 7423, pp. 129-138, 2013';

$a->metaTitle = $a->title;
$a->metaDesc = 'Automatic text detection for comics';
$a->metaKeywords = 'text detection,text graphic separation,comics,manga,bd';

$a->urlContent = $a->id . '.html';

$a->urlOnline = 'http://link.springer.com/chapter/10.1007/978-3-642-36824-0_13';

array_push($publications, $a);

/*** CIFED'12 - Extraction robuste des cases et du texte de bandes dessinées ***/
$a = new Article('extraction-robuste-des-cases-et-du-texte-de-bandes-dessinees');// class Article is defined in ~/include/function.php
$a->title = 'Extraction robuste des cases et du texte de bandes dessinées';
$a->date = '2012-03-23';//ISO date formatYYYY-MM-DD
$a->author = 'Christophe Rigaud, Norbert Tsopze, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = 'Proceedings of Colloque International Francophone sur l\'Ecrit et le Document (CIFED), pp. 349-360, 2012';

$a->metaTitle = $a->title;
$a->metaDesc = 'Automatic text detection for comics';
$a->metaKeywords = 'text detection,text graphic separation,comics,manga,bd';

$a->urlContent = $a->id . '.html';

$a->urlOnline = 'http://hal.archives-ouvertes.fr/hal-00701987';
$a->urlPdf = 'https://github.com/crigaud/publication/blob/master/2012/CIFED/extraction_robuste_des_cases_et_du_texte_de_bandes_dessinees/paper/2011_Rigaud_Extraction_robuste_des_cases_et_du_texte_de_bandes_dessinees.pdf?raw=true';
$a->urlPresentation = 'https://github.com/crigaud/publication/blob/master/2012/CIFED/extraction_robuste_des_cases_et_du_texte_de_bandes_dessinees/presentation/2012_Rigaud_Extraction_robuste_des_cases_et_du_texte_de_bandes_dessinees.pdf?raw=true';

array_push($publications, $a);

/*
<span class="headline" itemprop="headline"><a href="https://github.com/crigaud/publication/tree/master/2012/CIFED/extraction_robuste_des_cases_et_du_texte_de_bandes_dessinees" onclick="window.open(this.href); return false;" >Extraction robuste des cases et du texte de bandes dessinées</a></span><br />
		<span itemprop="author"></span><br />
		<span class="publisher"  itemprop="publisher"></span><br />
		<ul class="download">
		   	<li><a href="" onclick="window.open(this.href); return false;" >Online</a></li>
		   	<li><a href="" onclick="window.open(this.href); return false;" >PDF</a></li>
		   	<li><a href="" onclick="window.open(this.href); return false;" >Presentation</a></li>
		</ul>
*/


?>

