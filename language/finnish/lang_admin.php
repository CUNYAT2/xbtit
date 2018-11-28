<?php
$language["ACP_BAN_IP"]="Bannaa IP osoite";
$language["ACP_FORUM"]="Foorumin asetukset";
$language["ACP_USER_GROUP"]="K&auml;ytt&auml;j&auml;ryhmien asetukset";
$language["ACP_STYLES"]="Teema-asetukset";
$language["ACP_LANGUAGES"]="Kieliasetukset";
$language["ACP_CATEGORIES"]="Kategoria-asetukset";
$language["ACP_TRACKER_SETTINGS"]="Trakkerin asetukset";
$language["ACP_OPTIMIZE_DB"]="Optimoi tietokantasi";
$language["ACP_CENSORED"]="Sensuroitujen sanojen asetukset";
$language["ACP_DBUTILS"]="Tietokannan lis&auml;ty&ouml;kalut";
$language["ACP_HACKS"]="Hackit";
$language["ACP_HACKS_CONFIG"]="Hackien asetukset";
$language["ACP_MODULES"]="Moduulit";
$language["ACP_MODULES_CONFIG"]="Moduuliasetukset";
$language["ACP_MASSPM"]="Yksityinen massaviesti";
$language["ACP_PRUNE_TORRENTS"]="Poista kuolleet torrentit";
$language["ACP_PRUNE_USERS"]="Poista k&auml;ytt&auml;m&auml;tt&ouml;m&auml;t tilit";
$language["ACP_SITE_LOG"]="Lue tapahtumalogia";
$language["ACP_SEARCH_DIFF"]="Etsi eroavaisuuksia.";
$language["ACP_BLOCKS"]="Block asetukset";
$language["ACP_POLLS"]="Poll asetukset";
$language["ACP_MENU"]="Admin Paneeli";
$language["ACP_FRONTEND"]="Sis&auml;lt&ouml;asetukset";
$language["ACP_USERS_TOOLS"]="K&auml;ytt&auml;j&auml;ty&ouml;kalut";
$language["ACP_TORRENTS_TOOLS"]="Torrent-ty&ouml;kalut";
$language["ACP_OTHER_TOOLS"]="Muut ty&ouml;kalut";
$language["ACP_MYSQL_STATS"]="MySql Statistiikka";
$language["XBTT_BACKEND"]="xbtt Vaihtoehto";
$language["XBTT_USE"]="k&auml;yt&auml; <a href=\"http://xbtt.sourceforge.net/tracker/\" target=\"_blank\">xbtt</a>  backendina?";
$language["XBTT_URL"]="xbtt base url e.g. http://localhost:2710";
$language["GENERAL_SETTINGS"]="Yleiset asetukset";
$language["TRACKER_NAME"]="Sivuston nimi";
$language["TRACKER_BASEURL"]="Trakkerin osoite (ilman viimeist&auml; /)";
$language["TRACKER_ANNOUNCE"]="Trakkerin announce linkit (yksi osoite per rivi)".($XBTT_USE?"<br />\n<span style=\"color:#FF0000; font-weight: bold;\">Tarkasta announce linkki kahdesti, olet ottanut k&auml;ytt&ouml;&ouml;n xbtt backendin...</span>":"");
$language["TRACKER_EMAIL"]="Trakkerin s&auml;hk&ouml;postiosoite";
$language["TORRENT_FOLDER"]="Torrent-Kansio";
$language["ALLOW_EXTERNAL"]="Salli ulkoiset torrentit";
$language["ALLOW_GZIP"]="Salli GZIP";
$language["ALLOW_DEBUG"]="N�yt� Debug-tiedot sivun alareunassa";
$language["ALLOW_DHT"]="poista DHT (private flag in torrent)<br />\ntoimii vain uusissa julkaisuissa";
$language["ALLOW_LIVESTATS"]="Salli reaaliaikaiset tilastot (Varoitus!Kuormittaa palvelinta!)";
$language["ALLOW_SITELOG"]="Salli sivuston logaaminen (lLogi muuttuu torrenteissa/k&auml;ytt&auml;jiss&auml;)";
$language["ALLOW_HISTORY"]="Salli historia (torrenteissa/k&auml;ytt&auml;jiss&auml;)";
$language["ALLOW_PRIVATE_ANNOUNCE"]="Yksityinen Announce";
$language["ALLOW_PRIVATE_SCRAPE"]="Yksityinen pikap&auml;ivitys";
$language["SHOW_UPLOADER"]="N&auml;yt&auml; l&auml;hett&auml;j&auml;n nick";
$language["USE_POPUP"]="Avaa torrentin tiedot/yhteydet uudessa ikkunassa";
$language["DEFAULT_LANGUAGE"]="Oletuskieli";
$language["DEFAULT_CHARSET"]="Oletus kirjainmerkist&ouml;<br />\n(jos kielesi ei n&auml;y oikein, kokeile UTF-8)";
$language["DEFAULT_STYLE"]="Oletusteema";
$language["MAX_USERS"]="Maksimi k&auml;ytt&auml;j&auml;m&auml;&auml;r&auml; (Numeerinen, 0 = rajoittamaton)";
$language["MAX_TORRENTS_PER_PAGE"]="Torrenttia per sivu";
$language["SPECIFIC_SETTINGS"]="Trakkerin tarkat asetukset";
$language["SETTING_INTERVAL_SANITY"]="Sanityn P&auml;ivitysv&auml;li (numeric seconds, 0 = disabled)<br />Hyv&auml; arvo, jos sallittu, on 1800 (30 minuuttia)";
$language["SETTING_INTERVAL_EXTERNAL"]="Update External interval (numeric seconds, 0 = disabled)<br />Depending of how many external torrents";
$language["SETTING_INTERVAL_MAX_REANNOUNCE"]="Maximum reannounce interval (numeric seconds)";
$language["SETTING_INTERVAL_MIN_REANNOUNCE"]="Minimum reannounce interval (numeric seconds)";
$language["SETTING_MAX_PEERS"]="Max N. of peers for request (numeric)";
$language["SETTING_DYNAMIC"]="Allow Dynamic Torrents (not recommended)";
$language["SETTING_NAT_CHECK"]="NAT Tarkistus";
$language["SETTING_PERSISTENT_DB"]="Persistent connections (Database, not recommended)";
$language["SETTING_OVERRIDE_IP"]="Allow users to override detected ip";
$language["SETTING_CALCULATE_SPEED"]="Laske ladatut ja l&auml;hetetyt bitit";
$language["SETTING_PEER_CACHING"]="Table caches (should decrease a little load)";
$language["SETTING_SEEDS_PID"]="Max num. of seeds with same PID";
$language["SETTING_LEECHERS_PID"]="Maksimim&auml;&auml;r&auml; lataajia samalla PIDill&auml;";
$language["SETTING_VALIDATION"]="Hyv&auml;ksymis muoto";
$language["SETTING_CAPTCHA"]="Turvattu rekister&ouml;inti (use ImageCode, GD+Freetype libraries needed)";
$language["SETTING_FORUM"]="Foruumin linkki, voi olla:<br /><li><font color='#FF0000'>internal</font> tai tyhj&auml; (ei arvoa) sis&auml;iselle foorumille</li><li><font color='#FF0000'>smf</font> integroitu <a target='_new' href='http://www.simplemachines.org'>Simple Machines Foruumi</a></li><li>omana foorumi ratkaisuna (kirjoita linkki laatikkoon)</li>";
$language["BLOCKS_SETTING"]="Etusivun/Bloggien Sivu asetukset";
$language["SETTING_CLOCK"]="Kellon tyyppi";
$language["SETTING_NUM_NEWS"]="Uutisten m&auml;&aumlr&auml; uutisblogissa (numeric)";
$language["SETTING_NUM_POSTS"]="Topikkien m&auml;&auml;r&auml; foorumiblogissa (numeric)";
$language["SETTING_NUM_LASTTORRENTS"]="Uusien torrenttejen m&auml;&auml;r&auml; uudet torrentit blogissa (numeric)";
$language["SETTING_NUM_TOPTORRENTS"]="Suosituimpien torrentien m&auml;&auml;r&auml; blogissa (numeric)";
$language["CLOCK_ANALOG"]="Analoginen";
$language["CLOCK_DIGITAL"]="Digitaalinen";
$language["CONFIG_SAVED"]="Asetukset tallennettu onnistuneesti!";
$language["CACHE_SITE"]="Cache interval (numeric seconds, 0 = disabled)";
$language["ALL_FIELDS_REQUIRED"]="Kaikki kent&auml;t pit&auml;&auml; t&auml;ytt&auml;&auml;!";
$language["SETTING_CUT_LONG_NAME"]="Leikkaa ylipitk&auml;t torrenttien nimet yli x merkki&auml; (0 = don't cut)";
$language["MAILER_SETTINGS"]="Maileri";
$language["SETTING_MAIL_TYPE"]="Mailin Tyyppi";
$language["SETTING_SMTP_SERVER"]="SMTP Serveri";
$language["SETTING_SMTP_PORT"]="SMTP Portti";
$language["SETTING_SMTP_USERNAME"]="SMTP k&auml;ytt&Auml;j&auml;nimi";
$language["SETTING_SMTP_PASSWORD"]="SMTP Salasana";
$language["SETTING_SMTP_PASSWORD_REPEAT"]="SMTP Salasana (Toista)";
$language["XBTT_TABLES_ERROR"]="You should have to import xbtt tables (look at xbtt installation instructions) into your database before activate xbtt backend!";
$language["XBTT_URL_ERROR"]="xbtt base url is mandatory!";
// BAN FORM
$language["BAN_NOTE"]="t&auml;m&auml; on osa admin paneelia, N&auml;et t&auml;&auml;ll&auml; bannatut IPt ja voit bannata uusia .<br />\nSinun pit&auml;&auml; antaa alue (ensimm&auml;inen IP) alue (viimeinen IP).";
$language["BAN_NOIP"]="Ei bannattuja IP-osotteita";
$language["BAN_FIRSTIP"]="Ensimm&auml;inen IP";
$language["BAN_LASTIP"]="Viimeinen IP";
$language["BAN_COMMENTS"]="Kommentit";
$language["BAN_REMOVE"]="Poista";
$language["BAN_BY"]="Tehnyt";
$language["BAN_ADDED"]="P&auml;iv&auml;m&auml;&auml;r&auml;";
$language["BAN_INSERT"]="Sy&ouml;t&auml; uusi IP alue";
$language["BAN_IP_ERROR"]="Huono IP Osoite.";
$language["BAN_NO_IP_WRITE"]="Et ole antanut IP osoitetta. Valitan!";
$language["BAN_DELETED"]="IP alue poistettu tietokannasta.<br />\n<br />\n<a href=\"index.php?page=admin&amp;user=".$CURUSER["uid"]."&amp;code=".$CURUSER["random"]."&amp;do=banip&amp;action=read\">Go back to Ban IP</a>";
// LANGUAGES
$language["LANGUAGE_SETTINGS"]="Kieli asetukset";
$language["LANGUAGE"]="Kieli";
$language["LANGUAGE_ADD"]="Lis&auml;&auml; uusi kieli";
$language["LANGUAGE_SAVED"]="Onneksi olkoon, Kieli muokattu";
// STYLES
$language["STYLE_SETTINGS"]="Tyyli/Teema asetukset";
$language["STYLE_EDIT"]="Editoi teemaa";
$language["STYLE_ADD"]="Sy&ouml;t&auml; uusi teema";
$language["STYLE_NAME"]="Tyylin nimi";
$language["STYLE_URL"]="Tyylin URL";
$language["STYLE_FOLDER"]="Teemojen kansio ";
$language["STYLE_NOTE"]="t&auml;&auml;ll&auml; voit hallita teemojasi, Mutta sinun pit&Auml;&auml; tuoda ne palvelimelle joko ftp tai sftp.";
// CATEGORIES
$language["CATEGORY_SETTINGS"]="Kategoria asetukset";
$language["CATEGORY_IMAGE"]="Kategoria kuvake";
$language["CATEGORY_ADD"]="Sy&ouml;t&auml; uusi kategoria";
$language["CATEGORY_SORT_INDEX"]="J&auml;rjest&auml; sis&auml;lt&ouml;";
$language["CATEGORY_FULL"]="Kategoria";
$language["CATEGORY_EDIT"]="Editoi Kategoriaa";
$language["CATEGORY_SUB"]="Alakategoria";
$language["CATEGORY_NAME"]="Kategoria";
// CENSORED
$language["CENSORED_NOTE"]="Kirjoita <b>yksi sana per rivi</b> sensuroidaksesi se (Sana korvataan *censored*)";
$language["CENSORED_EDIT"]="Editoi sensuroituja sanoja";
// BLOCKS
$language["BLOCKS_SETTINGS"]="Blokkien s&auml;&auml;t&ouml;";
$language["ENABLED"]="Enabled";
$language["ORDER"]="J&auml;rjestys";
$language["BLOCK_NAME"]="Blokin nimi";
$language["BLOCK_POSITION"]="Paikka";
$language["BLOCK_TITLE"]="Kielen nimi (will be used to display the translated title)";
$language["BLOCK_USE_CACHE"]="Cache this block?";
$language["ERR_BLOCK_NAME"]="You must select one of the enabled file in the name's dropdown!";
$language["BLOCK_ADD_NEW"]="Lis&auml;&auml; uusi blokki";
// POLLS (more in lang_polls.php)
$language["POLLS_SETTINGS"]="Pollin S&auml;&auml;d&ouml;t";
$language["POLLID"]="Pollin ID";
$language["INSERT_NEW_POLL"]="Lis&auml;&auml; uusi Polli";
$language["CANT_FIND_POLL"]="Pollia ei l&ouml;ydy";
$language["ADD_NEW_POLL"]="Lis&auml;&auml; Polli";
// GROUPS
$language["USER_GROUPS"]="K&auml;ytt&auml;j&auml;ryhm&auml; asetukset (Klikkaa ryhm&auml;n nime&auml; muokataksesi.)";
$language["VIEW_EDIT_DEL"]="Katso/Muokkaa/Poista";
$language["CANT_DELETE_GROUP"]="T&auml;t&auml; arvoa/Ryhm&auml;&auml; ei voi peruuttaa!";
$language["GROUP_NAME"]="Ryhm&auml;n nimi";
$language["GROUP_VIEW_NEWS"]="Katso uutiset";
$language["GROUP_VIEW_FORUM"]="Katso foorumi";
$language["GROUP_EDIT_FORUM"]="Muokkaa Foorumia";
$language["GROUP_BASE_LEVEL"]="Valitse aloituspohja";
$language["GROUP_ERR_BASE_SEL"]="Virhe aloituspohjan kanssa!";
$language["GROUP_DELETE_NEWS"]="Poista uutisia";
$language["GROUP_PCOLOR"]="Prefix Color (like ";
$language["GROUP_SCOLOR"]="Suffix Color (like ";
$language["GROUP_VIEW_TORR"]="Katso torrentteja";
$language["GROUP_EDIT_TORR"]="Editoi Torrentteja";
$language["GROUP_VIEW_USERS"]="Katso k&auml;ytt&auml;ji&auml;";
$language["GROUP_DELETE_TORR"]="Poista torrentteja";
$language["GROUP_EDIT_USERS"]="Muokkaa k&auml;ytt&auml;ji&auml;";
$language["GROUP_DOWNLOAD"]="Voi ladata";
$language["GROUP_DELETE_USERS"]="Poistaa k&auml;ytt&auml;ji&auml;";
$language["GROUP_DELETE_FORUM"]="Poistaa foorumia";
$language["GROUP_GO_CP"]="Oikeus admin paneeliin";
$language["GROUP_EDIT_NEWS"]="Muokkaa uutisia";
$language["GROUP_ADD_NEW"]="Lis&auml;&auml; uusi ryhm&auml;";
$language["GROUP_UPLOAD"]="Voi l&auml;hett&auml;&auml;";
$language["GROUP_WT"]="Odotus aika jos ratio <1";
$language["GROUP_EDIT_GROUP"]="Muokkaa ryhm&auml;&auml;";
$language["GROUP_VIEW"]="Katsoa";
$language["GROUP_EDIT"]="Muokata";
$language["GROUP_DELETE"]="Poistaa";
$language["INSERT_USER_GROUP"]="Sy&ouml;t&auml; uusi k&auml;ytt&auml;j&auml;ryhm&auml;";
$language["ERR_CANT_FIND_GROUP"]="Ei l&ouml;ydy t&auml;t&auml; k&auml;ytt&auml;j&auml;ryhm&auml;&auml;!";
$language["GROUP_DELETED"]="K&auml;ytt&auml;j&auml;ryhm&auml; poistettu!";
// MASS PM
$language["USERS_FOUND"]="K&auml;ytt&auml;ji&auml; l&ouml;ytyi";
$language["USERS_PMED"]="K&auml;tt&auml;j&auml;t jolle PM l&auml;hti";
$language["WHO_PM"]="Kenelle PM l&auml;hetet&auml;&auml;n?";
$language["MASS_SENT"]="Massa PM l&auml;hetetty!!!";
$language["MASS_PM"]="Massa PM";
$language["MASS_PM_ERROR"]="Kirjoita jotain ennen kuin l&auml;het&auml;t!!!!";
$language["RATIO_ONLY"]="Vain t&auml;m&auml; ratio";
$language["RATIO_GREAT"]="Ratio suurempi kuin";
$language["RATIO_LOW"]="Ratio pienempi kuin";
$language["RATIO_FROM"]="Kenelt&auml;";
$language["RATIO_TO"]="Kenelle";
$language["MASSPM_INFO"]="Tiedot";
// PRUNE USERS
$language["PRUNE_USERS_PRUNED"]="kuolleet k&auml;ytt&auml;j&auml;tilit";
$language["PRUNE_USERS"]="Poista k&auml;ytt&auml;m&auml;tt&ouml;mi&auml; k&auml;ytt&auml;ji&auml;";
$language["PRUNE_USERS_INFO"]="Sy&ouml;t&auml; p&auml;ivien lukum&auml;&auml;r&auml; jolloin niit&auml; pidet&auml;&auml;n \"kuolleina\" (not connected from x days OR has signed from x days and still validating)";
// SEARCH DIFF
$language["SEARCH_DIFF"]="Etsi eroavaisuuksia.";
$language["SEARCH_DIFF_MESSAGE"]="Viesti";
$language["DIFFERENCE"]="Eroavaisuus";
$language["SEARCH_DIFF_CHANGE_GROUP"]="Vaihda k&auml;ytt&auml;j&auml;ryhm&auml;&auml;";
// PRUNE TORRENTS
$language["PRUNE_TORRENTS_PRUNED"]="Kuolleet torrentit";
$language["PRUNE_TORRENTS"]="Poista kuolleita torrentteja";
$language["PRUNE_TORRENTS_INFO"]="Sy&ouml;t&auml; p&auml;ivien lukum&auml;&auml;r&auml; jolloin niit&auml; pidet&auml;&auml;n  \"kuolleina\"";
$language["LEECHERS"]="lataaja(ia)";
$language["SEEDS"]="L&auml;hett&auml;j&auml;(i&auml;)";
// DBUTILS
$language["DBUTILS_TABLENAME"]="Taulun nimi";
$language["DBUTILS_RECORDS"]="Tallenteet";
$language["DBUTILS_DATALENGTH"]="Datan pituus";
$language["DBUTILS_OVERHEAD"]="Overhead";
$language["DBUTILS_REPAIR"]="korjaa";
$language["DBUTILS_OPTIMIZE"]="Optimoi";
$language["DBUTILS_ANALYSE"]="Analysoi";
$language["DBUTILS_CHECK"]="Tarkista";
$language["DBUTILS_DELETE"]="Poista";
$language["DBUTILS_OPERATION"]="Toiminto";
$language["DBUTILS_INFO"]="Info";
$language["DBUTILS_STATUS"]="Tila";
$language["DBUTILS_TABLES"]="Taulut";
// MYSQL STATUS
$language["MYSQL_STATUS"]="MySQL Tila";
// SITE LOG
$language["SITE_LOG"]="Sivun logi";
// FORUMS
$language["FORUM_MIN_CREATE"]="Min k&auml;ytt&auml;j&auml;luokka voi luoda";
$language["FORUM_MIN_WRITE"]="Min K&auml;ytt&auml;j&auml; luokka voi kirjottaa";
$language["FORUM_MIN_READ"]="Min k&auml;ytt&auml;j&auml;luokka voi lukea";
$language["FORUM_SETTINGS"]="Foorumin asetukset";
$language["FORUM_EDIT"]="Muokkaa foorumia";
$language["FORUM_ADD_NEW"]="Lis&auml;&auml; uusi foorumi";
$language["FORUM_PARENT"]="P&auml;&auml;foorumi";
$language["FORUM_SORRY_PARENT"]="(P&auml;&auml;foorumilla ei voi olla p&auml;&auml;foorumia.)";
$language["FORUM_PRUNE_1"]="T&auml;ll&auml; foorumilla on postauksia sek&auml; topikkeja!<br />Kaikki tiedot menetet&auml;&auml;n...<br />";
$language["FORUM_PRUNE_2"]="Jos olet varma ett&auml; haluat peruuttaa t&auml;m&auml;n foorumin";
$language["FORUM_PRUNE_3"]="Muuten mene takaisin.";
$language["FORUM_ERR_CANNOT_DELETE_PARENT"]="Et voi poistaa foorumia mill&auml; on alafoorumeita, siirr&auml;/poista alafoorumit ja yrit&auml; uudelleen";
// MODULES
$language["ADD_NEW_MODULE"]="Lis&auml;&auml; uusi Moduuli";
$language["TYPE"]="Tyyppi";
$language["DATE_CHANGED"]="p&auml;iv&auml;m&auml;&auml;r&auml; koska muokattu";
$language["DATE_CREATED"]="P&auml;iv&auml;m&auml;&auml;r&auml; koska luotu";
$language["ACTIVE_MODULES"]="Aktiiviset Moduulit: ";
$language["NOT_ACTIVE_MODULES"]="Ei-aktiiviset Moduulit: ";
$language["TOTAL_MODULES"]="Kaikki Moduulit: ";
$language["DEACTIVATE"]="Deaktivoi";
$language["ACTIVATE"]="Aktivoi";
$language["STAFF"]="Staff";
$language["MISC"]="Miscellaneous";
$language["TORRENT"]="Torrentti";
$language["STYLE"]="Tyyli";
$language["ID_MODULE"]="ID";
// HACKS
$language["HACK_TITLE"]="Aihe";
$language["HACK_VERSION"]="Versio";
$language["HACK_AUTHOR"]="Lis&auml;nnyt";
$language["HACK_ADDED"]="Lis&auml;tty";
$language["HACK_NONE"]="Ei ole asennettuja Hackkeja";
$language["HACK_ADD_NEW"]="Lis&auml;&auml; uusi Hackki";
$language["HACK_SELECT"]="Valitse";
$language["HACK_STATUS"]="Tila";
$language["HACK_INSTALL"]="Asenna";
$language["HACK_UNINSTALL"]="Poista asennus";
$language["HACK_INSTALLED_OK"]="Hackki asennettu onnistuneesti!<br />\nN&auml;hd&auml;ksesi mitk&auml; hackit on asennettu mene takaisin <a href=\"index.php?page=admin&amp;user=".$CURUSER["uid"]."&amp;code=".$CURUSER["random"]."&amp;do=hacks&amp;action=read\">adminCP (Hacks)</a>";
$language["HACK_BAD_ID"]="Virhe haettaessa tietoja hackista t&auml;ll&auml; IDll&auml;.";
$language["HACK_UNINSTALLED_OK"]="Hackki poistettu onnistuneesti!<br />\nN&auml;hd&auml;ksesi mitk&auml; hackit on asennettu mene takaisin <a href=\"index.php?page=admin&amp;user=".$CURUSER["uid"]."&amp;code=".$CURUSER["random"]."&amp;do=hacks&amp;action=read\">adminCP (Hacks)</a>";
$language["HACK_OPERATION"]="Toiminto";
$language["HACK_SOLUTION"]="Ratkaisu";
// USERS TOOLS
$language["USER_NOT_DELETE"]="Et voi poistaa vierasta tai itse&auml;si!";
$language["USER_NOT_EDIT"]="Et voi muokata itse&auml;si tai vierasta!";
