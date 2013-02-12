<?php
define("LANGUAGE", "en");
define("ERROR_404", "Sorry, this page doesn't exist anymore please <a href='/' title='Home' >click here</a>");
define("ERROR_403", "No authorizations <a href='/' title='Home' >click here</a> to go away.");

/*************************** MENU ****************************/
define("ME_LOGO", "Home");
define("ME_HOME", "Blog");
define("ME_RESUME", "Resume");
define("ME_CONTACT", "Contact");

/*************************** VCARD ****************************/
define("VC_AGE_T", "Age");
define("VC_AGE_D", "years old");
define("VC_LOC_T", "Location");
define("VC_LOC_D", "La Rochelle,<br />FRANCE");
define("VC_EMA_T", "Contact");
define("VC_EMA_D", "Form");
define("VC_AVA_T", "Employment status");
define("VC_AVA_D", "Ph.D. student in computer science");
define("VC_NET_T", "Social network");

/************************** FOOTER ***************************/
define("FO_POWER", "Designed and powered by Christophe Rigaud, hosted by OVH");

/*************************** HOME ****************************/
define("HO_TITLE", "Christophe Rigaud - Ph.D. student in computer science and image processing");
define("HO_INTRO", "Welcome to <a href='http://". $_SERVER['SERVER_NAME'].'/'.LANGUAGE ."/'>Christophe Rigaud's</a> professional website.
<br /><br />
Latest post:");
define("HO_DESC", "Welcome to Christophe Rigaud's homepage, you will find his resume, some recent researches and results.");
define("HO_KEY", "christophe rigaud,rigaud christophe,research,engineer,computer science,image processing,machine learning,data mining,computer vision,comics,cartoon");

/************************ ABOUT ****************************/
define("AB_TITLE", "About Christophe Rigaud");
define("AB_DESC", "Christophe Rigaud presentation, contact, professional status and personnality.");
define("AB_KEY", "Christophe Rigaud,Rigaud Christophe,personality,localization,caricature,originality");
define("AB_INTRO", "I'm powering this website in order to centralize  <a href='http://". $_SERVER['SERVER_NAME'].'/'.LANGUAGE ."/cv/'>links and informations</a> about myself at one place easy to find by co-workers and potential employers.
       <br /><br />Below is an original representation of my personality, you can click on bubbles to see accomplishment level or description.");
       
/************************* CONTACT ***************************/
define("CO_TITLE", "Contact Christophe Rigaud");
define("CO_DESC", "Please fill up this form if you have any questions.");
define("CO_KEY", "request,information,email,contact,christophe rigaud,rigaud christophe,address,email,contact,send,phone,tel,message,text,appointment,meeting,interview");
define("CO_H1", "Contact");
define("CO_INTRO", "Feel free to fill up this form if you have any questions.");
define("CO_NAME", "Name");
define("CO_NAME_ERROR", "Please enter your name");
define("CO_EMAIL", "Email");
define("CO_EMAIL_ERROR", "Email address invalid");
define("CO_SUBJECT", "Subject");
define("CO_SUBJECT_CONTENT", "What about?");
define("CO_MESSAGE", "Message");
define("CO_BTN_SEND", "Send");
define("CO_SUCCESS", "Successfully sent!");


/************************* TOOLS - text detection ***************************/
define("TO_TITLE", "Tools from Christophe Rigaud");
define("TO_DESC", "List of tools");
define("TO_KEY", "tools,script,ingénieur,chercheur");

define("TO_TEXT_LOCA_TITLE", "Automatique text localization in comics");
define("TO_TEXT_LOCA_KEY", "text localization, text detection, comics, manga");
define("TO_TEXT_LOCA_DESC", "Try text localization tool for comics");
define("TO_TEXT_LOCA_INTRO", "Under construction...");

define("TO_TRANS_TITLE", "Automatic transcription");
define("TO_TRANS_KEY", "automatic transcription, letter inversion");
define("TO_TRANS_DESC", "Automatic letter inversion");




?>
