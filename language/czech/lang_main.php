<?php
global $users, $torrents, $seeds, $leechers, $percent, $SITENAME;
// $language['rtl']='rtl'; // if your language is  right to left then uncomment this line
// $language['charset']='ISO-8859-1'; // uncomment this line with specific language charset if different than tracker's one
$language['ACCOUNT_CONFIRM']='Potvrzení účtu naleznete na '.$SITENAME.'.';
$language['ACCOUNT_CONGRATULATIONS']='Gratulujeme, váš účet byl potvrzen!<br />Nyní se můžete pod svým účtem <a href="index.php?page=login">přihlásit.</a>';
$language['ACCOUNT_CREATE']='Vytvořit účet';
$language['ACCOUNT_DELETE']='Smazat účet';
$language['ACCOUNT_DETAILS']='Detaily účtu';
$language['ACCOUNT_EDIT']='Upravit účet';
$language['ACCOUNT_MGMT']='Správa účtu';
$language['ACCOUNT_MSG']='Ahoj,'."\n\n".'Na zákadě vašeho poždavku vám byl vytvořen účet s touto emailovou adresou. Účet je třeba pro aktivaci potvrdit'."\n".'Jestliže se jedná o chybu, ignorujte tento email.'."\n\n".'S přáním pěkné dne, Tým trackeru.';
$language['ACTION']='Akce';
$language['ACTIVATED']='Aktivní';
$language['ACTIVE']='Status';
$language['ACTIVE_ONLY']='Pouze aktivní';
$language['ADD']='Přidat';
$language['ADDED']='Přidáno';
$language['ADMIN_CPANEL']='Kontrolní panel administrace';
$language['ADMINCP_NOTES']='Zde můžete kontrolovat veškerá nastavení Trackeru...';
$language['ALL']='Vše';
$language['ALL_SHOUT']='Všechny zprávy';
$language['ANNOUNCE_URL']='URL announce Trackeru:';
$language['ANONYMOUS']='Anonym';
$language['ANSWER']='Odpovědět';
$language['AUTHOR']='Autor';
$language['AVATAR_URL']='Avatar (url): ';
$language['AVERAGE']='Průměr';
$language['BACK']='Zpět';
$language['BAD_ID']='Špatná ID!';
$language['BCK_USERCP']='Zpět do uživatelského panelu';
$language['BLOCK']='Blok';
$language['BODY']='Obsah';
$language['BOTTOM']='Spodek';
$language['BY']='Od';
$language['CANT_DELETE_ADMIN']='Není možné smazat jiný administrátorský účet!';
$language['CANT_DELETE_NEWS']='Nemáte oprávnění mazat zprávy!';
$language['CANT_DELETE_TORRENT']='Nemáte oprávnění smazat tento torrent!...';
$language['CANT_DELETE_USER']='Nemáte oprávnění mazat účty!';
$language['CANT_DO_QUERY']='SQL příkaz - nelze provést';
$language['CANT_EDIT_TORR']='Nemáte oprávnění editovat torrent!';
$language['CANT_FIND_TORRENT']='Torrent soubor nenalezen!';
$language['CANT_READ_LANGUAGE']='Jazykový soubor nelze přečíst!';
$language['CANT_SAVE_CONFIG']='Nastavení se nedaří uložit doconfig.php';
$language['CANT_SAVE_LANGUAGE']='Nedaří se uložit jazykový soubor';
$language['CANT_WRITE_CONFIG']='Upozornění: Nelze zapisovat do config.php!';
$language['CATCHUP']='Označit vše jako přečtené';
$language['CATEGORY']='Kat.';
$language['CATEGORY_FULL']='Kategorie';
$language['CENTER']='střed';
$language['CHANGE_PID']='Změnit PID';
$language['CHARACTERS']='znaky';
$language['CHOOSE']='Vybrat';
$language['CHOOSE_ONE']='Vyberte';
$language['CLICK_HERE']='klikněte zde';
$language['CLOSE']='Zavřít';
$language['COMMENT']='Kom.';
$language['COMMENT_1']='Komentář';
$language['COMMENT_PREVIEW']='Náhled komentáře';
$language['COMMENTS']='Komentáře';
$language['CONFIG_SAVED']='OK, nová konfigurace uložena';
$language['COUNTRY']='Země';
$language['CURRENT_DETAILS']='Detaily země';
$language['DATABASE_ERROR']='Chyba databáze.';
$language['DATE']='Datum';
$language['DB_ERROR_REQUEST']='Chyba databáze. Požadavek nelze dokončit.';
$language['DB_SETTINGS']='Nastavení databáze';
$language['DEAD_ONLY']='Pouze mrtvé';
$language['DELETE']='Smazat';
$language['DELETE_ALL_READED']='Smazat všechny přečtené';
$language['DELETE_CONFIRM']='Jste si jisti, že to chcete smazat/odstranit?';
$language['DELETE_TORRENT']='Smazat torrent';
$language['DELFAILED']='Mazání selhalo';
$language['DESCRIPTION']='Popis';
$language['DONT_NEED_CHANGE']='Toto nastavení nepotřebujete měnit!';
$language['DOWN']='Staženo';
$language['DOWNLOAD']='Stáhnout';
$language['DOWNLOAD_TORRENT']='Stáhnout torrent';
$language['DOWNLOADED']='Staženo';
$language['EDIT']='Editovat';
$language['EDIT_LANGUAGE']='Editovat jazyk';
$language['EDIT_POST']='Editovat příspěvek';
$language['EDIT_TORRENT']='Editovat torrent';
$language['EMAIL']='Email';
$language['EMAIL_SENT']='Na zadanou emailovou adresu byl odeslán email.<br />Klikněte na přiložený odkaz pro potvrzení účtu.';
$language['EMAIL_VERIFY']='Změna emailu účtu '.$SITENAME;
$language['EMAIL_VERIFY_BLOCK']='Potvrzovací email odeslán';
$language['EMAIL_VERIFY_MSG']='Ahoj,'."\n\n".'Chceš-li se změnit tuto emailovou adresu, kliki na odkaz.'."\n\n".'Pěkný den, Tým.';
$language['EMAIL_VERIFY_SENT1']='<br /><center>Potvrzovací email byl odeslán na:<br /><br /><strong><font color="red">';
$language['EMAIL_VERIFY_SENT2']='</font></strong><br /><br />Pro změnu emailové adresy bude potřeb kliknout na odkaz<br />přiložený v emailu, který by měl přijít do 10 minut. (obvykle hned)<br />Někteří emailoví poskytovatelé jej mohou označit za SPAM,<br />tak v případě problému nejprve zkontrolujte složku spamu.<br /><br />';
$language['ERR_500']='HTTP/1.0 500 Unauthorized access!';
$language['ERR_AVATAR_EXT']='Omlouváme se, obrázek buďto neexistuje, nebo je jiného typu než gif, jpg, bmp nebo png.';
$language['ERR_BAD_LAST_POST']='';
$language['ERR_BAD_NEWS_ID']='Špatná ID novinky!';
$language['ERR_BODY_EMPTY']='Obsah nemůže být prázdný!';
$language['ERR_CANT_CONNECT']='Nelze se připojit na lokální MySQL server';
$language['ERR_CANT_OPEN_DB']='Databázi nelze otevřít';
$language['ERR_COMMENT_EMPTY']='Komentář nemůže být prázdný!';
$language['ERR_DB_ERR']='Chyba databáze. Kontaktujte administrátora.';
$language['ERR_DELETE_POST']='Mazání příspěvku. Upozornění: Chystáte se smazat příspěvek. Klikněte pro pokračování';
$language['ERR_DELETE_TOPIC']='Mázání tématu. Upozornění: Chystáte se smazat téma. Klikněte pro pokračování';
$language['ERR_EMAIL_ALREADY_EXISTS']='Tento email je již v databázi. Někdo jej používá!';
$language['ERR_EMAIL_NOT_FOUND_1']='Emailová adresa';
$language['ERR_EMAIL_NOT_FOUND_2']='nebyla v databázi nalezena.';
$language['ERR_ENTER_NEW_TITLE']='Zadejte nový nadpis!';
$language['ERR_FORUM_NOT_FOUND']='Fórum nenalezeno';
$language['ERR_FORUM_UNKW_ACT']='Chyba fóra: Neznámá akce';
$language['ERR_GUEST_EXISTS']='"Guest" je zakázené uživatelské jméno. Nemůžete se registrovat jako "Guest"';
$language['ERR_IMAGE_CODE']='Kód obrázku zadán špatně';
$language['ERR_INS_TITLE_NEWS']='Musíte vložit nadpis i novinku';
$language['ERR_INV_NUM_FIELD']='Neplatné číselné pole klienta';
$language['ERR_INVALID_CLIENT_EVENT']='Neplatná událost klienta.';
$language['ERR_INVALID_INFO_BT_CLIENT']='Obdrženy neplatné informace od BitTorrent klienta';
$language['ERR_INVALID_IP_NUMB']='Neplatná IP adresa. Musí být desetinná tečka (jméno hosta nepovoleno)';
$language['ERR_LEVEL']='Omlouváme se, vaše úroveň ';
$language['ERR_LEVEL_CANT_POST']='Nemáte oprávnění přidávat příspěvky v tomto fóru.';
$language['ERR_LEVEL_CANT_VIEW']='Nemáte oprávnění vidět toto téma.';
$language['ERR_MISSING_DATA']='Chybí data!';
$language['ERR_MUST_BE_LOGGED_SHOUT']='Do Shout boxu musíte být přihlášení...';
$language['ERR_NO_BODY']='Žádný text v těle obsahu';
$language['ERR_NO_NEWS_ID']='ID novinky nenalezeno!';
$language['ERR_NO_POST_WITH_ID']='Žádný příspěvek s ID ';
$language['ERR_NO_SPACE']='Vaše uživatelské jméno nesmí obsahovat mezeru, prosím nahraďte ji podtržítkem př:<br /><br />';
$language['ERR_NO_TOPIC_ID']='Žádné téma s ID';
$language['ERR_NO_TOPIC_POST_ID']='Žádné téma, které obsahuje příspěvek ID';
$language['ERR_NOT_AUTH']='Nejste oprávněni!';
$language['ERR_NOT_FOUND']='Nenalezeno...';
$language['ERR_NOT_PERMITED']='Nepovoleno';
$language['ERR_PASS_LENGTH_1']='Vaše heslo musí mít minimálně';
$language['ERR_PASS_LENGTH_2']='znaků.';
$language["ERR_PASS_TOO_WEAK_1"]="Vaše heslo je příliš slabé.<br />Z bezpečnostních důvodů musí obsahovat minimálně";
$language["ERR_PASS_TOO_WEAK_1A"]="Vaše heslo je příliš slabé.<br />Z bezpečnostních důvodů musí obsahovat minimálně";
$language["ERR_PASS_TOO_WEAK_2"]="malé písmeno";
$language["ERR_PASS_TOO_WEAK_2A"]="malá písmena";
$language["ERR_PASS_TOO_WEAK_3"]="velké písmeno";
$language["ERR_PASS_TOO_WEAK_3A"]="velká písmena";
$language["ERR_PASS_TOO_WEAK_4"]="číslo";
$language["ERR_PASS_TOO_WEAK_4A"]="čísla";
$language["ERR_PASS_TOO_WEAK_5"]="symbol";
$language["ERR_PASS_TOO_WEAK_5A"]="symboly";
$language["ERR_PASS_TOO_WEAK_6"]="Tady je silné heslo, které byste mohli použít";
$language['ERR_PASSWORD_INCORRECT']='Špatné heslo';
$language['ERR_PERM_DENIED']='Přístup odepřen';
$language['ERR_PID_NOT_FOUND']='Prosím stáhněte torrent znovu. PID systém je aktivní a pid nebyl v torrentu nalezen.';
$language['ERR_RETR_DATA']='Chyba obdržení dat!';
$language['ERR_SEND_EMAIL']='Nelze odeslat email. Prosím kontaktujte administrátora.';
$language['ERR_SERVER_LOAD']='Server je velice vytížen. Opakuji požadavek, prosím čekejte...';
$language['ERR_SPECIAL_CHAR']='<font color="black">Vaše uživatelské jméno nesmí obsahovat znaky jako:<br /><br /><font color="red"><strong>* &#63; &#60; &#62; &#64; &#36; &#38; &#37; atd.</strong></font></font><br />';
$language['ERR_SQL_ERR']='Chyba SQL';
$language['ERR_SUBJECT']='Musíte zadat předmět.';
$language['ERR_TOPIC_ID_NA']='ID tématu nelze aplikovat';
$language['ERR_TOPIC_LOCKED']='Téma je uzamčené';
$language['ERR_TORRENT_IN_BROWSER']='Tento soubor je pro BitTorrent klienty.';
$language['ERR_UPDATE_USER']='Nemůžu aktualizovat uživatelská data. Kontaktujte ohledně této chyby administrátora.';
$language['ERR_USER_ALREADY_EXISTS']='Uživatelské jméno již existuje!';
$language['ERR_USER_NOT_FOUND']='Uživatel nenalezen';
$language['ERR_USER_NOT_USER']='Nemáte oprávnění k přístupu do cizího uživatelského panelu!';
$language['ERR_USERNAME_INCORRECT']='uživatelské jméno je chybné';
$language['ERROR']='Chyba';
$language['ERROR_ID']='Chyba ID';
$language['FACOLTATIVE']='doprovolné';
$language['FILE']='Soubor';
$language['FILE_CONTENTS']='Obsah souboru';
$language['FILE_NAME']='Jméno souboru';
$language['FIND_USER']='Najít uživatele';
$language['FINISHED']='Dokončeno';
$language['FORUM']='Fórum';
$language['FORUM_ERROR']='Chyba fóra';
$language['FORUM_INFO']='Fórum info';
$language['FORUM_MIN_CREATE']='Min Class Create';
$language['FORUM_MIN_READ']='Min Class Read';
$language['FORUM_SEARCH']='Vyhledávač fóra';
$language['FORUM_N_SORT_H']='Řazení head';
$language['FORUM_N_SORT_S']='Řazení sub';
$language['FORUM_SORT']='Řazení';
$language['FORUM_N_TOPICS']='P. Témat';
$language['FORUM_N_POSTS']='P. Přísěpvků';
$language['FRM_DELETE']='Smazat';
$language['FRM_LOGIN']='Přihlásit';
$language['FRM_PREVIEW']='Náhled';
$language['FRM_REFRESH']='Obnovit';
$language['FRM_RESET']='Reset';
$language['FRM_SEND']='Odeslat';
$language['FRM_CONFIRM']='Potvrdit';
$language['FRM_CANCEL']='Zrušit';
$language['FRM_CLEAN']='Smazat';
$language['GLOBAL_SERVER_LOAD']='Celkové vytížení serveru (Všechny weby na serveru)';
$language['GO']='Přejít';
$language['GROUP']='Skupina';
$language['GUEST']='Host';
$language['GUESTS']='Hosti';
$language['HERE']='zde';
$language['HISTORY']='Historie';
$language['HOME']='Domů';
$language['IF_YOU_ARE_SURE']='jestliže jste si jisti.';
$language['IM_SURE']='Jsem si jistý';
$language['IN']='v';
$language['INF_CHANGED']='Informace změněny!';
$language['INFINITE']='Nekonečno.';
$language['INFO_HASH']='Hash info';
$language['INS_NEW_PWD']='Zadejte NOVÉ heslo!';
$language['INS_OLD_PWD']='Zadejte STARÉ heslo!';
$language['INSERT_DATA']='Zadejte všechna potřebná data pro nahrání.';
$language['INSERT_NEW_FORUM']='Vložit nové fórum';
$language['INVALID_ID']='Neplatná ID!';
$language['INVALID_INFO_HASH']='Naplatné hodnota informace hash.';
$language['INVALID_PID']='Neplatný PID';
$language['INVALID_TORRENT']='Chyba Trackeru: Neplatný torrent';
$language['KEYWORDS']='Klíčová slova';
$language['LAST_EXTERNAL']='Poslední vnější torrenty. Akutalizováno dne ';
$language['LAST_NEWS']='Poslední novinky';
$language['LAST_POST_BY']='Poslední příspěvek od';
$language['LAST_SANITY']='Poslední kontrola mazání provedena ';
$language['LAST_TORRENTS']='Poslední Torrenty';
$language['LAST_UPDATE']='Poslední aktulizace';
$language['LASTPOST']='Poslední příspěvek';
$language['LEECHERS']='leecherů';
$language['LEFT']='Opustili';
$language['LOGIN']='Příhlásit';
$language['LOGOUT']='Odlhásit';
$language['MAILBOX']='Mailbox';
$language['MANAGE_NEWS']='Spravovat novinky';
$language['MEMBER']='Uživatel';
$language['MEMBERS']='Uživatelů';
$language['MEMBERS_LIST']='Seznam uživatelů';
$language['MINIMUM_100_DOWN']='(s minimem stažení 100 MB)';
$language['MINIMUM_5_LEECH']='s minimemálně 5 leechery, mrtvé torrenty nezahrnuty';
$language['MINIMUM_5_SEED']='s minimálně 5 seedery';
$language['MKTOR_INVALID_HASH']='Výroba Torrentu: Obdržen neplatný hash';
$language['MNU_ADMINCP']='Admin Panel';
$language['MNU_FORUM']='Fórum';
$language['MNU_INDEX']='Domů';
$language['MNU_MEMBERS']='Uživatelé';
$language['MNU_NEWS']='Novinky';
$language['MNU_STATS']='Extra Statistiky';
$language['MNU_TORRENT']='Torrenty';
$language['MNU_UCP_CHANGEPWD']='Změna hesla';
$language['MNU_UCP_HOME']='Uživatelský panel';
$language['MNU_UCP_IN']='Soukromá schránka';
$language['MNU_UCP_INFO']='Změna profilu';
$language['MNU_UCP_NEWPM']='Nová zpráva';
$language['MNU_UCP_OUT']='Odchozí zprávy';
$language['MNU_UCP_PM']='Zprávy';
$language['MNU_UPLOAD']='Nahrát';
$language['MORE_SMILES']='Více smajlíků';
$language['MORE_THAN']='Více než ';
$language['MORE_THAN_2']='položky nalezeny, zobrazuji od';
$language['NA']='Nelze aplikovat';
$language['NAME']='Jméno';
$language['NEED_COOKIES']='Poznámka: pro přihlášení musí být povoleny cookie.';
$language['NEW_COMMENT']='Vložit komentář...';
$language['NEW_COMMENT_T']='Nový komentář';
$language['NEWS']='Novinky';
$language['NEWS_DESCRIPTION']='Noinky:';
$language['NEWS_INSERT']='Vložit novinku';
$language['NEWS_PANEL']='Panel novinek';
$language['NEWS_TITLE']='Název:';
$language['NEXT']='Další';
$language['NO']='Ne';
$language['NO_BANNED_IPS']='Žádné zabanované IP adresy';
$language['NO_COMMENTS']='Žádné komentáře...';
$language['NO_FORUMS']='Žádné fórum nenalezeno!';
$language['NO_MAIL']='Nemáte žádné zprávy.';
$language['NO_MESSAGES']='Soukromá zpráva nenalezena...';
$language['NO_NEWS']='žádné novinky';
$language['NO_PEERS']='Žádný peer';
$language['NO_RECORDS']='Seznam je prázdný...';
$language['NO_TOPIC']='Žádná témata nenalezena';
$language['NO_TORR_UP_USER']='Žádné torrenty nahrané tímto uživatelem';
$language['NO_TORRENTS']='Nejsou zde žádné torrenty...';
$language['NO_USERS_FOUND']='Žádní uživatelé nenalezeni!';
$language['NOBODY_ONLINE']='Nikdo není online';
$language['NONE']='Nic';
$language['NOT_ADMIN_CP_ACCESS']='Nemáte oprávnění přistupovat k tomuto Admin Panelu!';
$language['NOT_ALLOW_DOWN']='není oprávněn stahovat z';
$language['NOT_AUTH_DOWNLOAD']='Nemáte orpávnění stahovat.';
$language['NOT_AUTH_VIEW_NEWS']='Nemáte oprávnění zobrazit novnky!';
$language['NOT_AUTHORIZED']='Nemáte oprávnění zobrazit';
$language['NOT_AUTHORIZED_UPLOAD']='Nemáte oprávnění nahrávat!';
$language['NOT_AVAILABLE']='Není dostupné';
$language['NOT_MAIL_IN_URL']='Tohle není ta emailová adresa, která byla v url';
$language['NOT_POSS_RESET_PID']='Není možné resetovat PID! <br />Kontaktujte administrátora...';
$language['NOW_LOGIN']='Nyní budete vyzvání k přihlášení';
$language['NUMBER_SHORT']='#';
$language['OLD_PWD']='Staré heslo';
$language['ONLY_REG_COMMENT']='Pouze registrovaní uživatelé mohou přidávat komentáře!';
$language['OPT_DB_RES']='Optimalizovaný výsledek databáze';
$language['OPTION']='Možnost';
$language['PASS_RESET_CONF']='Potvrzení restu hesla';
$language['PEER_CLIENT']='Klient';
$language['PEER_COUNTRY']='Země';
$language['PEER_ID']='Peer ID';
$language['PEER_LIST']='Seznam peerů';
$language['PEER_PORT']='Port';
$language['PEER_PROGRESS']='Progres';
$language['PEER_STATUS']='Status';
$language['PEERS']='peerů';
$language['PEERS_DETAILS']='Klikněte pro zobrazení detailu peera';
$language['PICTURE']='Obrázek';
$language['PID']='PID';
$language['PLEASE_WAIT']='Prosím čekejte...';
$language['PM']='SZ';
$language['POSITION']='pozice';
$language['POST_REPLY']='Odpovědět';
$language['POSTED_BY']='Napsal';
$language['POSTED_DATE']='Napsáno';
$language['POSTS']='Příspěvky';
$language['POSTS_PER_DAY']='% příspěvků za den';
$language['POSTS_PER_PAGE']='Příspěvků na stránku';
$language['PREVIOUS']='Předch.';
$language['PRIVATE_MSG']='Soukromá zpráva';
$language['PWD_CHANGED']='Password changed!';
$language['QUESTION']='Otázka';
$language['QUICK_JUMP']='Přejít na';
$language['QUOTE']='Citovat';
$language['RANK']='Hodnost';
$language['RATIO']='Ratio';
$language['REACHED_MAX_USERS']='Maximální počet uživatelů dosažen';
$language['READED']='Přečteno';
$language['RECEIVER']='Obdrženo';
$language['RECOVER_DESC']='Pro resetování hesla a zaslání detailu účtu emailem použijte formulář dole.<br />(Budete muset odpovědět na potvrzovací email.)';
$language['RECOVER_PWD']='Obnovit heslo';
$language['RECOVER_TITLE']='Obnova uživatelského jména nebo hesla';
$language['REDIRECT']='Jestliže váš prohlížeč nemá povolený javascript, klikněte';
$language['REDIRECT2']='Jestliže váš prohlížeč nemá povolený javascript, klikněte <a href="%s">zde</a>.';
$language['REDOWNLOAD_TORR_FROM']='Znovu stáhnout torrent z';
$language['REGISTERED']='Registrovaný';
$language['REGISTERED_EMAIL']='Email registrovaný';
$language['REMOVE']='Odebrat';
$language['REPLIES']='Odpoědi';
$language['REPLY']='Odpovědět';
$language['RESULT']='Výsledek';
$language['RETRY']='Zkusit znovu';
$language['RETURN_TORRENTS']='Zpět na seznam torrentů';
$language['REVERIFY_CONGRATS1']='<center><br />Gratulujeme, váš email byl ověřen a úspěšně změněn.<br /><br /><strong>Z: <font color="red">';
$language['REVERIFY_CONGRATS2']='</strong></font><br /><strong>Na: <font color="red">';
$language['REVERIFY_CONGRATS3']='</strong></font><br /><br />';
$language['REVERIFY_FAILURE']='<center><br /><strong><font color="red"><u>Omlouváme se, tento odkaz již není platný</u></strong></font><br /><br />Nové náhodné číslo je generováno pokaždé, když se znažíte změnit email.<br />Jestliže vidíte tuto zprávu, tak jste se pravděpodobně pokoušeli změnit email<br />více než jednou použitím starého odkazu (url).<br /><br /><strong>Prosím počkejte dokud si nebude zcela jisti, že jste neobdrželi<br />potvrzovací email před daším pokusem o změnu emailu.</strong><br /><br />';
$language['REVERIFY_MSG']='V případě měnění emailu bude na nově zadaný email zaslán potvrzujicí odkaz.<br /><br /><font color="red"><strong>Emailová adresa nebude změněna, dokud nebude na odkaz v emailu kliknuto.</strong></font>';
$language['RIGHT']='Vpravo';
$language['SEARCH']='Hledat';
$language['SEEDERS']='seederů';
$language['SEEN']='Shlédnuto';
$language['SELECT']='Vybrat...';
$language['SENDER']='Odesílatel';
$language['SENT_ERROR']='Chyba odesílání';
$language['SHORT_C']='D'; //Shortname for Dokončeno
$language['SHORT_L']='L'; //Shortname for Leechers
$language['SHORT_S']='S'; //Shortname for Seeders
$language['SHOUTBOX']='ShoutBox';
$language['SIZE']='Velikost';
$language['SORRY']='Omlouváme se';
$language['SORTID']='id řazení';
$language['SPEED']='Rychlost';
$language['STICKY']='Sticky';
$language['SUB_CATEGORY']='Podkategorie';
$language['SUBJECT']='předmět';
$language['SUBJECT_MAX_CHAR']='Předmět je limitován na ';
$language['SUC_POST_SUC_EDIT']='Příspěvek úspěšně upraven.';
$language['SUC_SEND_EMAIL']='Potvrzovací email odeslán';
$language['SUC_SEND_EMAIL_2']='Počkejte pár minut než email dorazí.';
$language['SUCCESS']='Úspěch';
$language['SUMADD_BUG']='Chyba trackeru při volání summaryAdd';
$language['TABLE_NAME']='Jméno tabulky';
$language['TIMEZONE']='Časová zóna';
$language['TITLE']='Nadpis';
$language['TOP']='top';
$language['TOP_10_ACTIVE']='10 nejaktivnějších Torrentů';
$language['TOP_10_BEST_SEED']='10 nejseedovanějších Torrentů';
$language['TOP_10_BSPEED']='10 nejrychlejších Torrentů';
$language['TOP_10_DOWNLOAD']='Top 10 Stahovatelů';
$language['TOP_10_SHARE']='Top 10 nejvíce sdílených';
$language['TOP_10_UPLOAD']='Top 10 Uploaderů';
$language['TOP_10_WORST']='Top 10 nejméně sdílených';
$language['TOP_10_WORST_SEED']='10 nejhorších Seederů';
$language['TOP_10_WSPEED']='10 nejpomalejších Torrentů';
$language['TOP_TORRENTS']='Nejpopulárnější Torrenty';
$language['TOPIC']='Téma';
$language['TOPICS']='Témata';
$language['TOPICS_PER_PAGE']='Témat na stránku';
$language['TORR_PEER_DETAILS']='Detaily peerů torrentu';
$language['TORRENT']='Torrent';
$language['TORRENT_ANONYMOUS']='Odeslat anonymně';
$language['TORRENT_CHECK']='Povolit trackeru obdržení a použití informace z torrentu.';
$language['TORRENT_DETAIL']='Detaily torrentu';
$language['TORRENT_FILE']='Torrentový soubor';
$language['TORRENT_SEARCH']='Hledat torrenty';
$language['TORRENT_STATUS']='Status';
$language['TORRENT_UPDATE']='Aktualizuji, prosím čekejte...';
$language['TORRENTS']='torrentů';
$language['TORRENTS_PER_PAGE']='Torrentů na stránku';
$language['TRACK_DB_ERR']='Chyba trackeru/databáze. Detaily v error logu.';
$language['TRACKER_INFO']=$users.' uživatelů, sledování '.$torrents.' torrentů ('.$seeds.' seederů, '.$leechers.' leecherů, '.$percent.'%)';
$language['TRACKER_LOAD']='Zátěž trackeru';
$language['TRACKER_SETTINGS']='Nastavení trackeru';
$language['TRACKER_STATS']='Statistika trackeru';
$language['TRACKING']='Sledování';
$language['TRAFFIC']='Provoz';
$language['UCP_NOTE_1']='Zde můžete spravovat vaši schránku, psít soukromé zprávy dalším uživatelům,';
$language['UCP_NOTE_2']='kontrolovat a upravovat nastavení, atd...';
$language['UNAUTH_IP']='Neautorizována IP adresa.';
$language['UNKNOWN']='Neznámý';
$language['UPDATE']='Aktualizovat';
$language['UPFAILED']='Nahrávání selhalo';
$language['UPLOAD_IMAGE']='Nahrát obrázek';
$language['UPLOAD_LANGUAGE_FILE']='Nahrát jazykový soubor';
$language['UPLOADED']='Nahráno';
$language['UPLOADER']='Uploader';
$language['UPLOADS']='Uploady';
$language['URL']='URL';
$language['USER']='Uživatel';
$language['USER_CP']='Můj profil';
$language['USER_CP_1']='Panel uživatele';
$language['USER_DETAILS']='Detaily uživatele';
$language['USER_EMAIL']='Platný email';
$language['USER_ID']='ID uživatele';
$language['USER_JOINED']='Zaregistrováno';
$language['USER_LASTACCESS']='Poslední přihlášení';
$language['USER_LEVEL']='Hodnost';
$language['USER_LOCAL_TIME']='Lokální čas';
$language['USER_NAME']='Uživatelské jméno';
$language['USER_PASS_RECOVER']='Obnovení jména/hesla';
$language['USER_PWD']='Heslo';
$language['USERS_SEARCH']='Hledat uživatele';
$language['VIEW_DETAILS']='Zobrazit detaily';
$language['VIEW_TOPIC']='Zobrazit téma';
$language['VIEW_UNREAD']='Zobrazit nepřečtené';
$language['VIEWS']='Návštev';
$language['VISITOR']='Navštěvník';
$language['VISITORS']='Návštěvníci';
$language['WAIT_ADMIN_VALID']='Počkejte na potvrzení administrátorem...';
$language['WARNING']='Upozornění!';
$language['WELCOME']='Vítejte';
$language['WELCOME_ADMINCP']='Vítejte v Admin Control Panel';
$language['WELCOME_BACK']='Vítejte zpět';
$language['WELCOME_UCP']='Vítejte v uživatelském panelu';
$language['WORD_AND']='a';
$language['WORD_NEW']='nový';
$language['WROTE']='napsat';
$language['WT']='WT';
$language['X_TIMES']='krát';
$language['YES']='Ano';
$language['LAST_IP']='Poslední IP';
$language['FIRST_UNREAD']='Přejít na první nepřečtený příspěvek';
$language['MODULE_UNACTIVE']='Požadovaný modul není aktivní!';
$language['MODULE_NOT_PRESENT']='Požadovaný modul neexistuje!';
$language['MODULE_LOAD_ERROR']='Požadovaný modul je chybný!';
$language['RESET_PID']='Resetovat PID';

# Language definitions added by TreetopClimber.
$language['EXTRA']='extra';
$language['DROPDOWN']='dropdown';
$language['TORRENT_MENU']='Torrent Menu';
$language['USER_MENU']='Uživatelské Menu';
$language['ADMIN_ACCESS']='Přístup Admina';
$language['STAFF_ACCESS']='Tým';
$language['UPLOAD_LINK']='Nahrát Torrent';
# End

$language["USERNAME"]="Uživatelské jméno";
$language["SUBMIT"]="Potvrdit";

$language["QUAR_PM_SUBJ"]="Podezření na pokus o hacknutí";
$language["QUAR_PM_MSG_1"]="pokus o nahrání souboru obsahující php. Soubor uložen do karantény";
$language["QUAR_PM_MSG_2"]="Je možné, že se jedná o planý poplach. Zkontrolujte souor hex editorem nebo něčím podobným před zabanováním tohoto uživatele."."\n\n"."Tento pokus byl proveden skrz";
$language["QUAR_OUTPUT"]="Váš pokus o nahrání souboru obsahující php kód byl zaznamenán a nahlášen majiteli!";
$language["QUAR_ERR"]="Chyba karantény";
$language["QUAR_DIR_PROBLEM_1"]="Adresář karantény";
$language["QUAR_DIR_PROBLEM_2"]="neexistuje, prosím nastavte správný adresář karantény v [b]Admin Panel-->Bezpečnostní nastavení[/b]";
$language["QUAR_DIR_PROBLEM_3"]="není zapisovatelný, prosím CHMOD na 0777";
$language["QUAR_UNABLE"]="Nelze přesunout soubor do karantény kvůli neočekávatelné chybě, prosím zkontrolujte další soukromé zprávy pro detaily jak problém vyřešit";
$language["QUAR_NOT_SET"]="Adresář nenastaven";
$language["QUAR_TMP_FILE_MISS"]="Nelze nalézet soubor temp!";

$language["SECSUI_ACC_PWD_1"]="Vaše heslo potřebuje:";
$language["SECSUI_ACC_PWD_1A"]="Vaše heslo potřebuje:";
$language["SECSUI_ACC_PWD_2"]="Být minimálně";
$language["SECSUI_ACC_PWD_3"]="znak dlouhé";
$language["SECSUI_ACC_PWD_3A"]="znaků dlouhé";
$language["SECSUI_ACC_PWD_4"]="Obsahovat minimálně";
$language["SECSUI_ACC_PWD_5"]="malé písmeno";
$language["SECSUI_ACC_PWD_5A"]="malá písmena";
$language["SECSUI_ACC_PWD_6"]="velké písmeno";
$language["SECSUI_ACC_PWD_6A"]="velká písmena";
$language["SECSUI_ACC_PWD_7"]="číslo";
$language["SECSUI_ACC_PWD_7A"]="čísla";
$language["SECSUI_ACC_PWD_8"]="symbol";
$language["SECSUI_ACC_PWD_8A"]="symboly";

$language["LOGS_PHP"]="PHP Error Log";
$language["LOGS_LINE_AMT"]="<b>Počet řádků:</b>";
$language["LOGS_LINE_AMT_1"]="<b>Kolik řádků zobrazit v logu</b>";
$language["LOGS_COOLY_NAME"]="<b>Jméno loge:</b>&nbsp;Jméno jakým si přejete nazývat log. Vymyslete neco autentickéhoc.";
$language["LOGS_COOLY_NAMES"]="Toto jméno bude stejné pro každý log až na date stamp.";
$language["LOGS_COOLY_PATH"]="<b>Cesta logu:</b>&nbsp;Nad doc root by byla dobrá volba \"pokud možno\" bez předního lomítka<br /> a složka musí být zapisovatelná. Pokud máte otevřené omezení typu basedir, je nejlepší zachovat aktuální cestu.";
$language["LOGS_COOLY_PATHS"]="Doporučené:";
$language["LOGS_COOLY_NOTE"]="<b>Jestliže změníte cestu k jinému doc root složce, ujistět se, že jste zkopírovali .htaccess do nové složky.</b>";
$language["LOGS_COOLY_LIST"]="Seznam starých logů ve složce.";
$language["LOGS_COOLY_FLUSH"]="Smazat</a> staré logy";
