<?php
/////////////////////////////////////////////////////////////////////////////////////
// xbtit - Bittorrent tracker/frontend
//
// Copyright (C) 2004 - 2015  DPWS Media LTD
//
//    This file is part of xbtit.
//
// Redistribution and use in source and binary forms, with or without modification,
// are permitted provided that the following conditions are met:
//
//   1. Redistributions of source code must retain the above copyright notice,
//      this list of conditions and the following disclaimer.
//   2. Redistributions in binary form must reproduce the above copyright notice,
//      this list of conditions and the following disclaimer in the documentation
//      and/or other materials provided with the distribution.
//   3. The name of the author may not be used to endorse or promote products
//      derived from this software without specific prior written permission.
//
// THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR IMPLIED
// WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
// MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
// IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
// SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
// TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
// PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
// LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
// NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE,
// EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
//
////////////////////////////////////////////////////////////////////////////////////
// fişierul de instalare în limba română //
// tradus de RippeR //

$install_lang["charset"]                = "ISO-8859-1";
$install_lang["lang_rtl"]               = false;
$install_lang["step"]                   = "PAS:";
$install_lang["welcome_header"]         = "Bun-venit";
$install_lang["welcome"]                = "Bun-venit la instalarea noului xbtit.";
$install_lang["installer_language"]     = "Limba:";
$install_lang["installer_language_set"] = "Activează această limbă";
$install_lang["start"]                  = "Start";
$install_lang["next"]                   = "Înainte";
$install_lang["back"]                   = "Înapoi";
$install_lang["requirements_check"]     = "Verificarea Cerinţelor";
$install_lang["reqcheck"]               = "Cerinţe";
$install_lang["settings"]               = "Setări MySQL";
$install_lang["system_req"]             = "<p>".$GLOBALS["btit-tracker"]."&nbsp;".$GLOBALS["current_btit_version"]." necesită PHP versiunea 4.1.2 sau mai mare şi o bază de date MySQL.</p>";
$install_lang["list_chmod"]             = "<p>Înainte de a continua, te rugăm să te asiguri că toate fişierele au fost încărcate, şi că următoarele fişiere au permisiunile necesare pentru a permite script-ului să le scrie (0777 ar trebui să fie suficient).</p>";
$install_lang["view_log"]               = "Poţi vizualiza întregul log cu schimbări";
$install_lang["here"]                   = "aici";
$install_lang["settingup"]              = "Setarea tracker-ului";
$install_lang["settingup_info"]         = "Setări de Bază";
$install_lang["sitename"]               = "Numele site-ului";
$install_lang["sitename_input"]         = "xbtit";
$install_lang["siteurl"]                = "Adresa site-ului";
$install_lang["siteurl_info"]           = "Fără <b>/</b> la sfârşit.";
$install_lang["mysql_settings"]         = "Setări MySQL";
$install_lang["mysql_settings_info"]    = "Setări Bază de Date.";
$install_lang["mysql_settings_server"]  = "Server MySQL";
$install_lang["mysql_settings_username"] = "Utilizator MySQL";
$install_lang["mysql_settings_password"] = "Parolă MySQL";
$install_lang["mysql_settings_database"] = "Bază de Date MySQL";
$install_lang["mysql_settings_prefix"]  = "Prefixul tabelei MySQL";
$install_lang["cache_folder"]           = "Directorul Cache";
$install_lang["torrents_folder"]        = "Directorul Torrents";
$install_lang["badwords_file"]          = "badwords.txt";
$install_lang["chat.php"]               = "chat.php";
$install_lang["write_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">este inscriptibil!</span>";
$install_lang["write_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">NU este inscriptibil!</span> (0777)";
$install_lang["write_file_not_found"]   = "<span style=\"color:#FF0000; font-weight: bold;\">NU EXISTĂ!</span>";
$install_lang["mysqlcheck"]             = "Verificarea Conexiunii MySQL";
$install_lang["mysqlcheck_step"]        = "Verificare MySQL";
$install_lang["mysql_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">Conexiunea cu Baza de Date s-a realizat cu succes!</span>";
$install_lang["mysql_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">Conexiunea cu Baza de Date nu s-a putut realiza!</span>";
$install_lang["back_to_settings"]       = "Mergi Înapoi şi completează toate informaţiile necesare.";
$install_lang["saved"]                  = "salvat";
$install_lang["file_not_writeable"]     = "Fişierul <b>./include/settings.php</b> nu este inscriptibil.";
$install_lang["file_not_exists"]        = "FiŞierul <b>./include/settings.php</b> nu există.";
$install_lang["not_continue_settings"]  = "Instalarea nu poate continua în condiţiile în care acest fişier nu este inscriptibil.";
$install_lang["not_continue_settings2"] = "Nu poţi continua din cauza acestui fişier.";
$install_lang["settings.php"]           = "./include/settings.php";
$install_lang["can_continue"]           = "Poţi continua şi modifica asta mai târziu.";
$install_lang["mysql_import"]           = "Import MySQL";
$install_lang["mysql_import_step"]      = "Import SQL";
$install_lang["create_owner_account"]   = "Crează Contul Proprietarului";
$install_lang["create_owner_account_step"] = "Crează Proprietar";
$install_lang["database_saved"]         = "database.sql a fost importat în Baza ta de Date.";
$install_lang["create_owner_account_info"] = "Aici poţi crea contul Proprietarului.";
$install_lang["username"]               = "Nume utilizator";
$install_lang["password"]               = "Parolă";
$install_lang["password2"]              = "Repetă parola";
$install_lang["email"]                  = "E-mail";
$install_lang["email2"]                 = "Repetă e-mail-ul";
$install_lang["is_succes"]              = "s-a încheiat cu succes.";
$install_lang["no_leave_blank"]         = "Nu lăsa nimic necompletat.";
$install_lang["not_valid_email"]        = "Aceasta este o adresă de e-mail invalidă.";
$install_lang["pass_not_same_username"] = "Parola nu poate fi aceeaşi ca şi Numele Utilizatorului.";
$install_lang["email_not_same"]         = "Adresele de e-mail nu se potrivesc una cu alta.";
$install_lang["pass_not_same"]          = "Parolele nu se potrivesc una cu alta.";
$install_lang["site_config"]            = "Setări Tracker";
$install_lang["site_config_step"]       = "Setări Tracker";
$install_lang["default_lang"]           = "Limbă default";
$install_lang["default_style"]          = "Skin-ul default";
$install_lang["torrents_dir"]           = "Directorul Torrents";
$install_lang["validation"]             = "Mod de Validare";
$install_lang["more_settings"]          = "*&nbsp;&nbsp;&nbsp;Mai multe setări pot fi găsite în <u>Panoul de Administrare</u> odată ce instalarea este finalizată.";
$install_lang["tracker_saved"]          = "Setările sunt salvate.";
$install_lang["finished"]               = "Finalizarea Instalării";
$install_lang["finished_step"]          = "Finalizare";
$install_lang["succes_install1"]        = "Instalarea este completă!";
$install_lang["succes_install2"]        = "<p>Ai instalat cu succes <b>".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]."</b> pe sistemul tău.</p><p>Te sfătuim să blochezi posibilitatea de instalare. Poţi realiza acest lucru redenumind fişierul <b>install.unlock</b> în <b>install.lock</b> sau prin simpla ştergere a acestui fişier de instalare, <b>install.php</b>.</p>";
$install_lang["succes_install3"]        = "<p>Echipa BTI speră că vei utiliza cu încredere acest produs şi că ne vom revedea cât de curând pe <a href=\"http://dpwsmedia.com/smf/index.php\" target=\"_blank\">forumul nostru</a>.</p>";
$install_lang["go_to_tracker"]          = "Mergi la Tracker-ul tău";

$install_lang["forum_ipb"]              = "Invision Power Board";
$install_lang["ipb_download_a"]         = "<b>If using Invision Power Board:</b><br /><br/ >Please download the latest version of Invision Power Board from your <a target='_new' href='http://www.invisionpower.com/customer/'>Client Area</a> at Invision Power Services, extract the files somewhere on your computer and then upload the contents of the \"upload\" folder to the \"ipb\" folder.<br /><br />Once uploaded please make sure the \"cache\", \"hooks\", \"public\" and \"uploads\" folders are CHMOD'd to 777 recursively, rename \"conf_global.dist.php\" to \"conf_global.php\" and CHMOD that to 777 as well.<br /><br />Once done please <a target='_new' href='ipb/admin/install/index.php'>click here</a> to install it.*<br /><b>(Please use the same database credentials you used for this installation procedure and be sure to enter a database prefix, we suggest using <span style='color:blue;'>ipb_</span> as your prefix).<br /><br /><font color='#FF0000'>Once installed</font></b> please CHMOD the default cached English language file (<b>";
$install_lang["ipb_download_b"]         = "</b>) to 777 and click <b>Next</b> to continue with the xbtit installation.<br /><br /><b>* Both links will open into a new window/tab to prevent losing your place on the xbtit installation.</b></p>";
$install_lang["ipb_err_1"]              = "Can't find Invision Power Board in the \"ipb\" folder, please install it before proceeding.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_2"]              = "Can't find Invision Power Board in the database, please install it before proceeding.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_3a"]             = "Unable to write to the IPB English language file (<b>";
$install_lang["ipb_err_3b"]             = "</b>) please CHMOD to 777 before proceeding.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_4a"]             = "IPB English language file (<b>";
$install_lang["ipb_err_4b"]             = "</b>) doesn't exist, cannot proceed.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_5"]             = "Unable to write to the IPB Config file (<b>";
$install_lang["ipb_err_6"]             = "Unable to write to the Tracker Config file (<b>";
