<?php

$publications = array();


/*** GREC'13 redundant-structure-detection-in-attributed-adjacency-graphs ***/
$a = new Article('redundant-structure-detection-in-attributed-adjacency-graphs for-character-detection-in-comics-books');// class Article is defined in ~/include/function.php
$a->title = 'Redundant structure detection in attributed adjacency graphs for character detection in comics books';
$a->date = '2013-08-22';//ISO date formatYYYY-MM-DD
$a->author = 'Hoang Nam Ho, Christophe Rigaud, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = ' Proceedings of the 10th IAPR International Workshop on Graphics Recognition (GREC), 2013';

$a->metaTitle = $a->title;
$a->metaDesc = 'Method to detect main comics characters (hero).';
$a->metaKeywords = 'comics character detection, comics hero identification, comics, story understanding';

$a->abs = 'Graphs are popular data structures used to model pair wise relations between elements from a given collection. In
image processing, adjacency graphs are often used to represent the relations between segmented regions. Such graphs can be
compared but graph matching strategies are essential to find similar patterns. In this paper, we propose to detect the recurrent
characters of a comics book. In this method each panel is represented with an attributed adjacency graph. Then, an inexact
graph matching strategy is applied to find redundant structures among this set of graphs. The main idea is that the same character
will be represented by similar subgraphs in the different panels where it appears. The two-step matching process consists in a
node matching step and an edge validation step. Experiments show that our approach is able to detect redundant structures in
the graph and consequently the recurrent characters in a comics book. The originality of our approach is that no model is required,
the algorithm detects all by itself all redundant structures.
';

array_push($publications, $a);


/*** GREC'13 speech balloon contour classification ***/
$a = new Article('speech-balloon-contour-classification-in-comics');// class Article is defined in ~/include/function.php
$a->title = 'Speech balloon contour classification in comics';
$a->date = '2013-08-22';//ISO date formatYYYY-MM-DD
$a->author = 'Christophe Rigaud, Dimosthenis Karatzas, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = ' Proceedings of the 10th IAPR International Workshop on Graphics Recognition (GREC), 2013';
$a->abs = 'Comic books digitization combined with subsequent comic book understanding create a variety of new applications,
including mobile reading and data mining. Document understanding in this domain is challenging as comics are semi-structured
documents, combining semantically important graphical and textual parts. In this work we detail a novel approach for
classifying speech balloon in scanned comics book pages based on their contour time series.';
$a->bibtex = '@inproceedings{Rigaud2013GREC,
    title = {Speech balloon contour classification in comics},
    author = {Rigaud, Christophe and Karatzas, Dimosthenis and Burie, Jean-Christophe and Ogier, Jean-Marc},
    booktitle = {Proceedings of the 10th IAPR International Workshop on Graphics Recognition (GREC)},
    year = {2013}
}';

$a->metaTitle = $a->title;
$a->metaDesc = 'Method to detect speech balloon type in comics.';
$a->metaKeywords = 'speech balloon type, speech bubble, comics,detection, story understanding';

$a->urlPdf = 'https://github.com/crigaud/publication/blob/master/2013/GREC/speech_balloon_contour_classification_in_comics/paper/2013_Rigaud_Speech_balloon_contour_classification_in_comics.pdf?raw=true';
$a->urlPresentation = 'http://www.slideshare.net/slideshow/embed_code/27753499';
$a->urlMaterial = 'https://github.com/crigaud/publication/tree/master/2013/GREC/speech_balloon_contour_classification_in_comics';

array_push($publications, $a);


/*** ICDAR'13 active contour balloon ***/
$a = new Article('active-contour-model-for-speech-balloon-detection-in-comics');// class Article is defined in ~/include/function.php
$a->title = 'An active contour model for speech balloon detection in comics';
$a->date = '2013-08-28';//ISO date formatYYYY-MM-DD
$a->author = 'Christophe Rigaud, Dimosthenis Karatzas, Joost Van de Weijer, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = 'Proceedings of International Conference of Document Analysis and Recognition (ICDAR), 2013';
$a->abs = 'Comic books constitute an important cultural heritage asset in many countries. Digitization combined with subsequent comic book understanding would enable a variety of new applications, including content-based retrieval and content re-
targeting. Document understanding in this domain is challenging as comics are semi-structured documents, combining semantically
important graphical and textual parts. Few studies have been done in this direction. In this work we detail a novel approach
for closed and non-closed speech balloon localization in scanned comic book pages, an essential step towards a fully automatic
comic book understanding. The approach is compared with existing methods for closed balloon localization found in the literature and results are presented.';
$a->bibtex = '@inproceedings{Rigaud2013ICDAR,
    title = {An active contour model for speech balloon detection in comics},
    author = {Rigaud, Christophe and Karatzas, Dimosthenis and Van de Weijer, Joost and Burie, Jean-Christophe and Ogier, Jean-Marc},
    booktitle = {Proceedings of the 12th International Conference on Document Analysis and Recognition (ICDAR)},
    pages = {1240-1244},
    year = {2013}
}';
$a->metaTitle = $a->title;
$a->metaDesc = 'Method to detect speech balloon in comics.';
$a->metaKeywords = 'speech balloon,speech bubble,comics,detection';

$a->urlPdf = 'https://github.com/crigaud/publication/blob/master/2013/ICDAR/an_active_contour_model_for_speech_balloon_detection_in_comics/paper/2013_Rigaud_An_active_contour_model_for_speech_balloon_detection_in_comics.pdf?raw=true';
$a->urlPoster = 'https://raw.github.com/crigaud/publication/master/2013/ICDAR/an_active_contour_model_for_speech_balloon_detection_in_comics/poster/2013_Rigaud_An_active_contour_model_for_speech_balloon_detection_in_comics.png';
$a->urlMaterial = 'https://github.com/crigaud/publication/tree/master/2013/ICDAR/an_active_contour_model_for_speech_balloon_detection_in_comics';

array_push($publications, $a);


/*** ICDAR'13 eBDtheque ***/
$a = new Article('ebdtheque-a-representative-database-of-comics');// class Article is defined in ~/include/function.php
$a->title = 'eBDtheque: a representative database of comics';
$a->date = '2013-08-28';//ISO date formatYYYY-MM-DD
$a->author = 'Clément Guérin, Christophe Rigaud, Antoine Mercier et al.';
$a->publisher = 'Proceedings of International Conference of Document Analysis and Recognition (ICDAR), 2013';
$a->abs = 'We present eBDtheque, a database of various comic book images and their ground truth for panels, balloons and
text lines plus semantic annotations. The database consists of a hundred pages of various comic book albums, Franco-Belgian,
American comics and mangas. Additionally, we present the piece of software used to establish the ground truth and a tool to
validate results against this ground truth. Everything is publicly available for scientific use on http://ebdtheque.univ-lr.fr.';
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
$a->title = 'Automatic text localisation in scanned comic books';
$a->date = '2013-02-22';//ISO date formatYYYY-MM-DD
$a->author = 'Christophe Rigaud, Dimosthenis Karatzas, Joost Van de Weijer, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = 'International Conference on Computer Vision Theory and Applications (VISAPP), 2013';
$a->abs = 'Comic books constitute an important cultural heritage asset in many countries. Digitization combined with subsequent document understanding enable direct content-based search as opposed to metadata only search (e.g. album title or author name). Few studies have been done in this direction. In this work we detail a novel approach for the automatic text localization in scanned comics book pages, an essential step towards a fully automatic comics book understanding. We focus on speech text as it is semantically important and represents the majority of the text present in comics. The approach is compared with existing methods of text localization found in the literature and results are presented.
';
$a->bibtex = '@inproceedings{Rigaud2013VISAPP,
title = {Automatic Text Localisation in Scanned Comic Books},
author = {Rigaud, Christophe and Karatzas, Dimosthenis and Van de Weijer , Joost and Burie, Jean-Christophe and Ogier, Jean-Marc},
keywords = {Text localization, comics, text/graphic separation, complex background, unstructured document},
booktitle = {Proceedings of the 8th International Conference on Computer Vision Theory and Applications (VISAPP)},
publisher = {SCITEPRESS Digital Library},
year = {2013}
}';
$a->metaTitle = $a->title;
$a->metaDesc = 'Automatic text detection for comics';
$a->metaKeywords = 'text detection,text graphic separation,comics,manga,bd';

$a->urlPdf = 'https://github.com/crigaud/publication/blob/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/paper/2013_Rigaud_Automatic_text_localisation_in_scanned_comic_books.pdf?raw=true';
$a->urlPoster = 'https://raw.github.com/crigaud/publication/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/poster/2013_Rigaud_Automatic_Text_Localisation_in_Scanned_Comic_Books.png';
$a->urlDemo = 'https://github.com/crigaud/publication/tree/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/demo/text_extractor_for_comics';
$a->urlMaterial = 'https://github.com/crigaud/publication/tree/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/';

array_push($publications, $a);

/*** LNCS'13 - Robust frame and text extraction from comic books ***/
$a = new Article('robust-frame-and-text-extraction-from-comic-books');// class Article is defined in ~/include/function.php
$a->title = 'Robust frame and text extraction from comic books';
$a->date = '2013-02-22';//ISO date formatYYYY-MM-DD
$a->author = 'Christophe Rigaud, Norbert Tsopze, Jean-Christophe Burie, Jean-Marc Ogier';
$a->publisher = 'Graphics Recognition. New Trends and Challenges (LNCS), vol. 7423, pp. 129-138, 2013';
$a->abs = 'Comic books constitute an important heritage in many countries. Nowadays, digitization allows to search directly from content instead of metadata only (e.g. album title or author name). Few studies have been done in this direction. Only frame and speech balloon extraction have been experimented in the case of simple page structure. In fact, the page structure depends on the author which is why many different structures and drawings exist. Despite the differences, drawings have a common characteristic because of design process: they are all surrounded by a black line. In this paper, we propose to rely on this particularity of comic books to automatically extract frame and text using a connected-component labeling analysis. The approach is compared with some existing methods found in the literature and results are presented.';
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
$a->abs = '';
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

