<?php header("Content-type: text/css"); ?>
/**
Namibia Template for Habari

This theme is a derivation by Konzertheld / http://konzertheld.de
It is licensed under CC-BY-SA
http://creativecommons.org/licenses/by-sa/3.0/deed.de
The original license information follows:

Das Namibia Template for Joomla von i-cons.ch / namibia-forum.ch steht unter einer Creative Commons Namensnennung-Weitergabe unter gleichen Bedingungen 2.5 Schweiz Lizenz.
Weitere Infos: http://creativecommons.org/licenses/by-sa/2.5/ch/

Ein sichtbarer Link zu i-cons.ch und namibia-forum.ch muss auf jeder Seite oder im Impressum enthalten sein.
**/

/*
	Standard-Font Einstellungen
*/

html { 
	height: 100%; 
	margin-bottom: 1px; 
  font-size: 110.01%;
}

body {
  background: #FEF8E8;
	padding: 0;
  font-family: Verdana,Arial,Helvetica,sans-serif;
  font-size: 75.00%; 
  color: #444;  
}

h1,h2,h3,h4,h5,h6 { 
	font-weight:bold; 
	color:#444;
	margin: 0 0 0.25em 0; 
}

h1 { font-size: 150% }                        
h2 { font-size: 150% }         
h3 { font-size: 150% }                        
h4 { font-size: 133.33% }                     
h5 { font-size: 116.67% }                     
h6 { font-size: 116.67%; font-style:italic }  


/*
	Div Adresse
*/
#adresse {
	border: 1px solid #666666; 
	margin-left: 200px; 
	padding: 5px 8px; 
	font-family:"Trebuchet MS",Verdana,Arial,Helvetica,sans-serif;
	font-size: 9px; 
	font-weight:bold; 
	line-height:10px;
	background-color: white; 
	text-align: left; 
	white-space: nowrap;
	width: 170px;
}


/*
	Setzt das Bild für die Ecke Oben Links
*/

.corner { 
	background:url('../../files/corner/001.jpg') top left no-repeat; 
}

#page_margins {
	max-width: 1200px;
	min-width: 950px;
}


#pagetitle {
	position: relative;
	margin: 0;	
	width : 400px;
	
}

#pagetitle h2 {
	position: absolute;
	left: -55px;
	top: 10px;
	width : 330px;
	font-family: sans-serif;
	font-size: 30px;
	font-weight: normal;
	color: #000;
	line-height: 40px;	
}

#banner {
	position: relative;
	margin: 0;	
	width : 468px;
}

#banner_content {
	position: absolute;
	top: -50px;
	left: 350px;
	height: 80px;
	width: 468px;

}

.banneritem {
	margin: 10px 0;
	text-align: left;
}


#headerspace {
	height: 80px;
}

#breadcrumb {
	margin: -20px 0 20px;	
	line-height: 20px;
}


/* 
	Setzt die Hintergrundbilder für 9 Teilbereiche
*/

.bg01 {
	background:url(images/bg_01.png) top left no-repeat;
}
.bg02 {
	background:url(images/bg_02.png) top left repeat-x;
}
.bg03 {
	background:url(images/bg_03.png) top right no-repeat;
}
.bg04 {
	background:url(images/bg_04.png) bottom left repeat-y;
}
.bg05 {
	background:url(images/bg_05.png) top left repeat;
}
.bg06 {
	background:url(images/bg_06.png) bottom right repeat-y;
}
.bg07 {
	background:url(images/bg_07.png) bottom left no-repeat;
}
.bg08 {
	background:url(images/bg_08.png) bottom left repeat-x;
}
.bg09 {
	background:url(images/bg_09.png) bottom right no-repeat;
}

.bglogo {
	background: url(../../files/logo_ag100px.png) top right no-repeat;
}

/* Menu Links */
.menu_links {
	margin-top: 300px;
	margin-left: 0;
}
.menu_links_01 {
	background:url(images/menu_links_01.png) top left no-repeat;
}
.menu_links_02 {
	background:url(images/menu_links_02.png) top left repeat-y;
}
.menu_links_03 {
	background:url(images/menu_links_03.png) bottom left no-repeat;
}
.menu_links_content {
	width:190px;
	padding: 15px 15px 20px 20px;
}
.menu_links_content table.moduletable {
	margin: 0;
	padding: 10px 0 0 0;
	width: 180px;
	border: 0px solid blue;
}
.menu_links_content ul{
	list-style: none; 
	margin: 0; 
	padding: 0;
}

/* Menu Rechts */
.menu_rechts {
	margin-top: 140px;
}
.menu_rechts_01 {
	background:url(images/menu_rechts_01.png) top left no-repeat;
}
.menu_rechts_02 {
	background:url(images/menu_rechts_02.png) top left repeat-y;
}
.menu_rechts_03 {
	background:url(images/menu_rechts_03.png) bottom left no-repeat;
}
.menu_rechts_content {
	width:180px;
	margin: 0 15px;
	padding: 20px 10px 40px;
}
.menu_rechts_content table.moduletable {
	margin: 0;
	padding: 10px 0 0 5px;
	width: 145px;
	border: 0px solid blue;
}
.menu_rechts_content ul {
	list-style: none; 
	margin: 0; 
	padding: 0;
}


.menu_links h3,.menu_rechts h3, .moduletable h3 {
	font-family: Verdana,Arial,Helvetica,sans-serif;
	font-size:120%;;
	padding:2px 0px;
	border:solid 0;
}
.moduletable h3 {
	color:#444;
}
.menu_links h3, .menu_rechts h3 {
	color:#444;
}

.moduletable, .moduletable_menu {
	margin-bottom: 20px;
}

div.componentheading, table.contentpaneopen td.contentheading {
  color: #444;
  font-size: 120%;
  font-weight: bold;
}


.componentheading {
  font-size: 120%;
  font-weight: bold;
  text-decoration:underline;
  padding-bottom: 0px;
  margin: 15px 0;
}

table.contentpaneopen td.contentheading {
  color: #444;
  font-size: 120%;
  font-weight: bold;
}

table.contentpaneopen td.buttonheading {
  padding: 2px;
  text-align: right;
}

table.contentpaneopen td.buttonheading img {
  margin: 0;
}

table.blog table td {
	padding-right: 10px;
}

.blog_more {
	margin: 20px;
}

.small, .createdate, .modifydate {
  font-size: 70%;
  padding: 0;
  margin: 0;
  color: #777;
  font-style:italic;
}

.createdate {
	padding-bottom: 10px;
}


#mitte ul {
	margin: 0 20px;
}

#mitte ul li {
	margin: 5px 0;
}

.top {
	margin: 20px 0 30px;
	padding: 0 5px;
	border-bottom: 1px solid #CCCCCC;
	border-top: 1px solid #CCCCCC;
}

.top p {
	margin: 0;
}

.button {
  font-size: 90%;
	padding: 1px 3px;
	margin:2px;
}

form.poll fieldset label {
padding:0pt 0pt 0pt 4px;
}

form.poll a:hover, form.poll a:active, form.poll a:focus, form.poll .button:hover, form.poll .button:active, form.poll .button:focus {
border:2px outset #CC3399;
}
form.poll .button {
background:#F2E3ED none repeat scroll 0%;
border:1px outset #CC3399;
cursor:pointer;
display:inline;
float:left;
font-size:1em;
height:1.55em;
line-height:0.9em;
margin:0pt 10px 0pt 0pt;
overflow:visible;
padding:0pt 2px !important;
width:auto;
}

/*
Unterteilung des Templates in zwei Randspalten mit fixer Breite
und einer Mittelspalte mit variabler Breite
*/

#links {
	background: none;
	float: left; 
	width: 240px;
}
#links_content {
	background: none;
	margin: 0;
	padding: 0 
}
#rechts {
	background: none;
	float:right;
	width: 240px;
}
#rechts_content {
	background: none;
	margin: 0;
	padding: 0 
}
#mitte {
	width:auto;
	margin:0 260px;
	background: none;
}
#mitte_content {
	background: none;
	margin-top: 50px;
	padding: 0 
}

#user1, #user2 {
	margin-bottom: 20px;
}




/*
Mittels eines clearfix-Hacks wird sichergestellt, dass immer die mittlere Spalte am längsten ist
*/

.clearfix:after {
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden
}

.clearfix { display: block }
.floatbox { overflow:hidden }
#ie_clearing { display: none }

/* This was done by the <div id="headerspace">&nbsp;</div> 80px high dummy div before */
#mitte_content_wrapper {
	padding-top: 80px;
}

/*
Diverse Standard Einstellungen
*/


* { 
	margin:0; 
	padding: 0; 
}


#mitte p { 
	line-height: 1.5em; 
	margin: 0 0 1em 0;
}


a {color: #6699CC; text-decoration:none;}
a:focus,
a:hover,
a:active {color:#0000FF; text-decoration:underline;}


fieldset, img { border: 0 solid; }

#page{ 
	background-color: #FFE7B2;
}

#page_margins {
	border: 10px solid #FEF8E8;
	margin: 0 auto;
	text-align:left
}

#main { 
	padding: 10px 0 50px;
	clear:both;
}

#footer { 
	margin: 20px 0 0 0;
  color:#888; 
  padding: 0;
  clear:both;
  font-size: 10px;
  font-family: Verdana,Arial,Helvetica,sans-serif;
  text-align: right;
}



#design { 
  margin: -12px 200px 20px;
  color:#888; 
  clear:both;
  font-size: 10px;
  font-family: Verdana,Arial,Helvetica,sans-serif;
}

#design div#left { 
	padding-bottom: 4px;
	float: left;
}

#design div#right {
	float: right;
	text-align: right;
}


.struktur {
	position:absolute;
	left:-1000px;
	top:-1000px;
	width:0px;
	height:0px;
	overflow:hidden;
	display:inline;
}



/****************************
* Pagination
****************************/

.pagenavcounter {
  margin-bottom: 5px;
  text-align: left;
  color: #69c;
  font-weight: bold;
  background: url(../images/pagecounter.gif) no-repeat top left;
}

span.pagination ul, .pagenavbar div {
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  margin-top: 15px;
  padding: 5px 0;
}

span.pagination ul li {
  display: inline;
  list-style: none;
  margin: 0;
  padding: 0 5px;
  background: none;
}



/****************************
* Polls
****************************/

table.pollstableborder {
  margin-bottom: 10px;
  text-align: left;
}

table.pollstableborder td {
  padding: 5px;
  margin: 0;
}



/****************************
* List
****************************/



#middlebar li {
  margin-top: .3em;
  margin-bottom: .3em;
  margin-left: 1.5em;
}


/****************************
* Banner
****************************/

.bannergroup {
  text-align: center;
}

.banneritem img {
	display: block;
	margin-left: auto;
	margin-right: auto;
}

.banneritem_text {
	padding: 4px;
	font-size: 80%;
}

.bannerfooter_text {
	margin-top: 15px;
	padding: 4px;
	font-size: 80%;
	border-top: 1px solid #CCCCCC;
}


/****************************
* Preparing Page for Print
****************************/

@media print
{
  #rechts {display:none}
  #links {display:none}
  
  #mitte, #mitte_content { width: 100%; margin:0; padding: 0; border:0}
}



/* BLUE PART */
/* 
	Setzt die Hintergrundbilder für 9 Teilbereiche
*/

.bg01 {
	background:url(images/blue/bg_01.png) top left no-repeat;
}
.bg02 {
	background:url(images/blue/bg_02.png) top left repeat-x;
}
.bg03 {
	background:url(images/blue/bg_03.png) top right no-repeat;
}
.bg04 {
	background:url(images/blue/bg_04.png) bottom left repeat-y;
}
.bg05 {
	background:url(images/blue/bg_05.png) top left repeat;
}
.bg06 {
	background:url(images/blue/bg_06.png) bottom right repeat-y;
}
.bg07 {
	background:url(images/blue/bg_07.png) bottom left no-repeat;
}
.bg08 {
	background:url(images/blue/bg_08.png) bottom left repeat-x;
}
.bg09 {
	background:url(images/blue/bg_09.png) bottom right no-repeat;
}

/* Menu Links */
.menu_links_01 {
	background:url(images/blue/menu_links_01.png) top left no-repeat;
}
.menu_links_02 {
	background:url(images/blue/menu_links_02.png) top left repeat-y;
}
.menu_links_03 {
	background:url(images/blue/menu_links_03.png) bottom left no-repeat;
}


/* Menu Rechts */
.menu_rechts_01 {
	background:url(images/blue/menu_rechts_01.png) top left no-repeat;
}
.menu_rechts_02 {
	background:url(images/blue/menu_rechts_02.png) top left repeat-y;
}
.menu_rechts_03 {
	background:url(images/blue/menu_rechts_03.png) bottom left no-repeat;
}

body { background-color: #A3BBDD; }
#page{ background-color: #A3BBDD; }
table.contenttoc { background: #D1DDEE; }


/* NEW STUFF added by Konzertheld */
.menu_links_content ol, .menu_rechts_content ol, .menu_links_content ol li ol, .menu_rechts_content ol li ol{
	list-style-type: none;
}

.menu_links_content ol li ol, .menu_rechts_content ol li ol{
	padding-left: 15px;
}