<?php
/* $Id$ */

/**
 * Translated by Sven-Erik Andersen <sven_erik at andersen.as>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lør');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B, %Y klokka %H:%M %p';

$strAccessDenied = 'Ingen tilgang';
$strAction = 'Handling';
$strAddDeleteColumn = 'Legg til/Slett kolonne';
$strAddDeleteRow = 'Legg til/Slett kriterie rad';
$strAddNewField = 'Legg til felt';
$strAddPriv = 'Legg til nytt privilegie';
$strAddPrivMessage = 'Du har lagt til ett nytt privilegie.';
$strAddSearchConditions = 'Legg til søke-kriterier (innhold i "where"-setningen):';
$strAddToIndex = 'Legg til indeks &nbsp;%s&nbsp;kolonne(r)';
$strAddUser = 'Legg til en ny bruker';
$strAddUserMessage = 'Du har lagt til en ny bruker.';
$strAffectedRows = 'Berørte rader:';
$strAfter = 'Etter %s';
$strAfterInsertBack = 'Returner';
$strAfterInsertNewInsert = 'Sett inn en ny post';
$strAll = 'Alle';
$strAllTableSameWidth = 'vis alle tabeller med samme bredde?';
$strAlterOrderBy = 'Endre tabell rekkefølge ved';
$strAnalyzeTable = 'Analyser tabell';
$strAnd = 'Og';
$strAnIndex = 'En indeks har blitt lagt til %s';
$strAny = 'Alle';
$strAnyColumn = 'Alle kolonner';
$strAnyDatabase = 'Alle databaser';
$strAnyHost = 'Alle verter';
$strAnyTable = 'Alle tabeller';
$strAnyUser = 'Alle brukere';
$strAPrimaryKey = 'En primær-nøkkel har blitt lagt til %s';
$strAscending = 'Stigende';
$strAtBeginningOfTable = 'Ved begynnelsen av tabellen';
$strAtEndOfTable = 'Ved slutten av tabellen';
$strAttr = 'Attributter';

$strBack = 'Tilbake';
$strBinary = ' Binær ';
$strBinaryDoNotEdit = ' Binær - må ikke redigeres ';
$strBookmarkDeleted = 'Bokmerket har blitt slettet.';
$strBookmarkLabel = 'Navn';
$strBookmarkQuery = 'Lagret SQL-spørring';
$strBookmarkThis = 'Lagre denne SQL-spørringen';
$strBookmarkView = 'Bare se';
$strBrowse = 'Se på';
$strBzip = 'Komprimert (bz2)';

$strCantLoadMySQL = 'kan ikke starte MySQL modulen,<br />vennligst kontroller PHP konfigureringen.';
$strCantLoadRecodeIconv = 'Kan ikke laste iconv eller recode modulen som trengs for tegnsett konvertering, konfigurer php slik at disse kan lastes eller slå av tegnsett konvertering i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan ikke endre indeks til PRIMARY!';
$strCantUseRecodeIconv = 'Kan ikke bruke hverken iconv, libiconv og recode_string funktsjonene selv om modulene sier de er lastet. Sjekk din php konfigurasjon.';
$strCardinality = 'Kardinalitet';
$strCarriage = 'Linjeskift (Mac): \\r';
$strChange = 'Endre';
$strChangeDisplay = 'Velg felt for visning';
$strChangePassword = 'Endre passord';
$strCheckAll = 'Merk alle';
$strCheckDbPriv = 'Kontroller database privilegier';
$strCheckTable = 'Kontroller tabell';
$strChoosePage = 'Vennligst velg en side for redigering';
$strColumn = 'Kolonne';
$strColumnNames = 'Kolonnenavn';
$strComments = 'Kommentarer';
$strCompleteInserts = 'Komplette innlegg';
$strConfigFileError = 'phpMyAdmin kunne ikke lese din konfigurasjonsfil!<br />Dette kan skje hvis PHP finner en syntaksfeil eller ikke kan finne filen.<br />Vennligst kall opp konfigurasjonsfilen direkte via linken under og les PHP feilmeldingen(e) som du vil få. I de fleste tilfeller så mangler det et anførselstegn eller et semikolon et sted.<br />Hvis du får en blank side så er alt ok.';
$strConfigureTableCoord = 'Vennligst konfigurer koordinatene for tabell %s';
$strConfirm = 'Ønsker du virkelig å gjøre det?';
$strCookiesRequired = 'Cookies må være slått på forbi dette punkt.';
$strCopyTable = 'Kopier tabell til (database<b>.</b>tabell):';
$strCopyTableOK = 'Tabellen %s er kopiert til %s.';
$strCreate = 'Opprett';
$strCreateIndex = 'Lag en indeks p&aring;&nbsp;%s&nbsp;kolonner';
$strCreateIndexTopic = 'Lag en ny indeks';
$strCreateNewDatabase = 'Opprett ny database';
$strCreateNewTable = 'Opprett ny tabell i database %s';
$strCreatePage = 'Lag en ny side';
$strCriteria = 'Kriterier';

$strData = 'Data';
$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Databasen %s har blitt slettet';
$strDatabases = 'databaser';
$strDatabasesStats = 'Statistikk for databaser';
$strDatabaseWildcard = 'Database (asterisk er tillatt):';
$strDataOnly = 'Bare data';
$strDefault = 'Standard';
$strDelete = 'Slett';
$strDeleted = 'Raden er slettet';
$strDeletedRows = 'Slettede rader:';
$strDeleteFailed = 'Slettingen misslyktes!';
$strDeleteUserMessage = 'Du har slettet brukeren %s.';
$strDescending = 'Synkende';
$strDisplay = 'Vis';
$strDisplayOrder = 'Visningsrekkefølge:';
$strDisplayPDF = 'Vis PDF Schema';
$strDoAQuery = 'Utfør en "query by example" (wildcard: "%")';
$strDocu = 'Dokumentasjon';
$strDoYouReally = 'Vil du virkelig ';
$strDrop = 'Slett';
$strDropDB = 'Slett databasen %s';
$strDropTable = 'Slett tabell';
$strDumpingData = 'Data-ark for tabell';
$strDumpXRows = 'Dumpe %s rader fra rad %s.';
$strDynamic = 'dynamisk';

$strEdit = 'Endre';
$strEditPDFPages = 'Rediger PDF sider';
$strEditPrivileges = 'Rediger privilegier';
$strEffective = 'Effektiv';
$strEmpty = 'Tøm';
$strEmptyResultSet = 'MySQL returnerte tomt resultat (m.a.o. ingen rader).';
$strEnd = 'Slutt';
$strEnglishPrivileges = ' OBS: MySQL privilegie navn er på engelsk ';
$strError = 'Feil';
$strExport = 'Eksporter';
$strExportToXML = 'Eksporter til XML format';
$strExtendedInserts = 'Utvidete innlegg';
$strExtra = 'Ekstra';

$strField = 'Felt';
$strFieldHasBeenDropped = 'Feltet %s har blitt slettet';
$strFields = 'Felter';
$strFieldsEmpty = ' Antall felter er tommt! ';
$strFieldsEnclosedBy = 'Felter omsluttet av';
$strFieldsEscapedBy = 'Felter "escaped" med';
$strFieldsTerminatedBy = 'Felter avsluttet med';
$strFixed = 'statisk';
$strFlushTable = 'Oppfrisk tabellen ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Manglende verdi i skjemaet!';
$strFullText = 'Hele strenger';
$strFunction = 'Funksjon';

$strGenBy = 'Generert av';
$strGenTime = 'Generert den';
$strGo = 'Utfør';
$strGrants = 'Rettigheter';
$strGzip = 'Komprimert (gz)';

$strHasBeenAltered = 'er endret.';
$strHasBeenCreated = 'er opprettet.';
$strHaveToShow = 'Du må velge minst en kolonne for visning';
$strHome = 'Hjem';
$strHomepageOfficial = 'Offisiell phpMyAdmin Hjemmeside';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin nedlastingsside';
$strHost = 'Vert';
$strHostEmpty = 'Vertsnavnet er tomt!';

$strIdxFulltext = 'Fulltekst';
$strIfYouWish = 'Hvis du ønsker å kun lese inn enkelte av tabellens kolonner, angi en komme-separert felt-liste.';
$strIgnore = 'Ignorer';
$strIndex = 'Indeks';
$strIndexes = 'Indekser';
$strIndexHasBeenDropped = 'Indeksen %s har blitt slettet';
$strIndexName = 'Indeks navn&nbsp;:';
$strIndexType = 'Indeks type&nbsp;:';
$strInsert = 'Sett inn';
$strInsertAsNewRow = 'Sett inn som ny rad';
$strInsertedRows = 'Innsatte rader:';
$strInsertNewRow = 'Sett inn ny rad';
$strInsertTextfiles = 'Les tekstfil inn i tabell';
$strInstructions = 'Instruksjoner';
$strInUse = 'i bruk';
$strInvalidName = '"%s" er ett reservert ord, du kan ikke bruke det som et database/tabell/felt navn.';

$strKeepPass = 'Ikke endre passordet';
$strKeyname = 'Nøkkel';
$strKill = 'Avslutt';

$strLength = 'Lengde';
$strLengthSet = 'Lengde/Sett*';
$strLimitNumRows = 'Antall poster per side';
$strLineFeed = 'Linjeskift: \\n';
$strLines = 'Linjer';
$strLinesTerminatedBy = 'Linker avsluttet med';
$strLinkNotFound = 'Link ikke funnet';
$strLinksTo = 'Linker til';
$strLocationTextfile = 'Plassering av filen';
$strLogin = 'Logg inn';
$strLogout = 'Logg ut';
$strLogPassword = 'Passord:';
$strLogUsername = 'Brukernavn:';

$strMissingBracket = 'Manglende parantes';
$strModifications = 'Endringene er lagret';
$strModify = 'Endre';
$strModifyIndexTopic = 'Endre en indeks';
$strMoveTable = 'Flytt tabell til (database<b>.</b>tabell):';
$strMoveTableOK = 'Tabellen %s har blitt flyttet til %s.';
$strMySQLCharset = 'MySQL tegnsett';
$strMySQLReloaded = 'MySQL omstartet.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% som kjører på %pma_s2% som %pma_s3%';
$strMySQLShowProcess = 'Vis prosesser';
$strMySQLShowStatus = 'Vis MySQL runtime informasjon';
$strMySQLShowVars = 'Vis MySQL systemvariabler';

$strName = 'Navn';
$strNext = 'Neste';
$strNo = 'Nei';
$strNoDatabases = 'Ingen databaser';
$strNoDescription = 'ingen beskrivelse';
$strNoDropDatabases = '"DROP DATABASE" uttrykk er avslått.';
$strNoFrames = 'phpMyAdmin er mere brukervennlig med en <b>ramme-kapabel</b> web-leser.';
$strNoIndex = 'Ingen indeks definert!';
$strNoIndexPartsDefined = 'Ingen indeks deler definert!';
$strNoModification = 'Ingen endring';
$strNone = 'Ingen';
$strNoPassword = 'Intet passord';
$strNoPhp = 'uten PHP kode';
$strNoPrivileges = 'Ingen privilegier';
$strNoQuery = 'Ingen SQL spxrring!';
$strNoRights = 'Du har ikke nok rettigheter til å være her nå!';
$strNoTablesFound = 'Ingen tabeller i databasen.';
$strNotNumber = 'Dette er ikke ett tall!';
$strNotSet = '<b>%s</b> tabellen ble ikke funnet eller ikke konfigurert i %s';
$strNotValidNumber = ' er ikke et gyldig rad nummer!';
$strNoUsersFound = 'Ingen bruker(e) funnet.';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s treff i tabell <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totalt:</b> <i>%s</i> treff';

$strOftenQuotation = 'Ofte anførselstegn. Valgfritt innebærer at kun tekstfelter ("char" og "varchar") felter er omfattet av tegnet.';
$strOperations = 'Operasjoner';
$strOptimizeTable = 'Optimiser tabell';
$strOptionalControls = 'Valgfritt. Angir hvordan spesialtegn skrives eller leses.';
$strOptionally = 'Valgfritt';
$strOptions = 'Innstillinger';
$strOr = 'Eller';
$strOverhead = 'Overheng';

$strPageNumber = 'Side nummer:';
$strPartialText = 'Delvis tekst';
$strPassword = 'Passord';
$strPasswordEmpty = 'Passordet er blankt!';
$strPasswordNotSame = 'Passordene er ikke like!';
$strPdfDbSchema = 'Schema for "%s" databasen - Side %s';
$strPdfInvalidPageNum = 'Undefinert PDF side nummer!';
$strPdfInvalidTblName = 'Tabellen "%s" eksisterer ikke!';
$strPhp = 'Lag PHP kode';
$strPHPVersion = 'PHP Versjon';
$strPmaDocumentation = 'phpMyAdmin Dokumentasjon';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> variabelen MÅ være innstilt i din konfigurasjons-fil!';
$strPos1 = 'Start';
$strPrevious = 'Forrige';
$strPrimary = 'Primær';
$strPrimaryKey = 'Primærnøkkel';
$strPrimaryKeyHasBeenDropped = 'Primær-nøkkelen har blitt slettet';
$strPrimaryKeyName = 'Navnet til  prim&aelig;rn&oslash;kkelen m&aring; v&aelig;re... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>m&aring;</b> v&aelig;re navnet til og <b>bare til</b> en prim&aelig;rn&oslash;kkel!)';
$strPrintView = 'Utskriftsvennlig forhåndsvisning';
$strPrivileges = 'Privilegier';
$strProperties = 'Egenskaper';

$strQBE = 'Spørring ved eksempel (Query by Example)';
$strQBEDel = 'Slett';
$strQBEIns = 'Sett inn';
$strQueryOnDb = 'SQL-spørring i database <b>%s</b>:';

$strRecords = 'Rader';
$strReferentialIntegrity = 'Sjekk referanse integritet:';
$strRelationNotWorking = 'Tilleggsfunksjonene for å kunne jobbe med koblede tabeller er deaktivert. For å finne ut hvorfor, klikk %sher%s.';
$strRelationView = 'Relasjons-visning';
$strReloadFailed = 'Omstart av MySQL feilet.';
$strReloadMySQL = 'Omstart av MySQL';
$strRememberReload = 'Husk å re-starte serveren.';
$strRenameTable = 'Endre tabellens navn';
$strRenameTableOK = 'Tabellen %s har fått nytt navn %s';
$strRepairTable = 'Reparer tabell';
$strReplace = 'Erstatt';
$strReplaceTable = 'Erstatt tabell med filen';
$strReset = 'Tøm skjema';
$strReType = 'Gjenta';
$strRevoke = 'Tilbakekall';
$strRevokeGrant = 'Tilbakekall Grant';
$strRevokeGrantMessage = 'Du har tilbakekalt Grant privilegiet til %s';
$strRevokeMessage = 'Du har fjernet privilegiene til %s';
$strRevokePriv = 'Tibakekall privilegier';
$strRowLength = 'Rad lengde';
$strRows = 'Rader';
$strRowsFrom = 'rader fra';
$strRowSize = ' Rad størelse ';
$strRowsModeHorizontal= 'vannrett';
$strRowsModeOptions= 'i %s modus og gjenta headers etter %s celler';
$strRowsModeVertical= 'loddrett';
$strRowsStatistic = 'Rad statistikk';
$strRunning = 'som kjører på %s';
$strRunQuery = 'Kjør spørring';
$strRunSQLQuery = 'Kjør SQL spørring/spørringer mot databasen %s';

$strSave = 'Lagre';
$strScaleFactorSmall = 'Skaleringsfaktoren er for liten til å romme alt på en side';
$strSearch = 'Søk';
$strSearchFormTitle = 'Søk i database';
$strSearchInTables = 'I tabell(ene):';
$strSearchNeedle = 'Ord eller verdi(er) å søke etter (wildcard: "%"):';
$strSearchOption1 = 'minst ett av ordene';
$strSearchOption2 = 'alle ordene';
$strSearchOption3 = 'med den nøyaktige setningen';
$strSearchOption4 = 'som "regular expression"';
$strSearchResultsFor = 'Søkeresultat for "<i>%s</i>" %s:';
$strSearchType = 'Finn:';
$strSelect = 'Spørring';
$strSelectADb = 'Vennligst velg en database';
$strSelectAll = 'Velg alle';
$strSelectFields = 'Velg felt (minst ett):';
$strSelectNumRows = 'i spørring';
$strSelectTables = 'Velg tabeller';
$strSend = 'Last ned som fil';
$strServerChoice = 'Server valg';
$strServerVersion = 'Server versjon';
$strSetEnumVal = 'Hvis felttypen er "enum" eller "set", skriv inn verdien med dette formatet: \'a\',\'b\',\'c\'...<br />Hvis du skulle trenge å ha en skråstrek ("\") eller en enkel apostrof ("\'") blant disse verdiene, skriv en skråstrek foran (eks. \'\\\\xyz\' eller \'a\\\'b\').';
$strShow = 'Vis';
$strShowAll = 'Vis alle';
$strShowColor = 'Vis farger';
$strShowCols = 'Vis kolonner';
$strShowGrid = 'Vis rutenett';
$strShowingRecords = 'Viser rader ';
$strShowPHPInfo = 'Vis PHP informasjon';
$strShowTableDimension = 'Vis tabell dimensjoner';
$strShowTables = 'Vis tabeller';
$strShowThisQuery = ' Vis denne spørring her igjen ';
$strSingly = '(enkeltvis)';
$strSize = 'Størelse';
$strSort = 'Sorter';
$strSpaceUsage = 'Plass bruk';
$strSplitWordsWithSpace = 'Ord er separert med et mellomrom (" ").';
$strSQL = 'SQL';
$strSQLQuery = 'SQL-spørring';
$strSQLResult = 'SQL resultat';
$strStatement = 'Oversikt';
$strStrucCSV = 'CSV data';
$strStrucData = 'Struktur og data';
$strStrucDrop = 'Legg til \'drop table\'';
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strStrucOnly = 'Kun struktur';
$strStructPropose = 'Foreslå tabell struktur';
$strStructure = 'Struktur';
$strSubmit = 'Send';
$strSuccess = 'Kommandoen/spørringen er utført';
$strSum = 'Sum';

$strTable = 'tabell ';
$strTableComments = 'Tabell kommentarer';
$strTableEmpty = 'Tabellnavnet er tomt!';
$strTableHasBeenDropped = 'Tabellen %s har blitt slettet';
$strTableHasBeenEmptied = 'Tabellen %s har blitt tømt';
$strTableHasBeenFlushed = 'Tabelen %s har blitt oppfrisket';
$strTableMaintenance = 'Tabell vedlikehold';
$strTables = '%s tabell(er)';
$strTableStructure = 'Tabell-struktur for tabell';
$strTableType = 'Tabell type';
$strTextAreaLength = ' På grunn av sin lengde,<br /> så vil muligens dette feltet ikke være redigerbar ';
$strTheContent = 'Innholdet av filen er lagt inn.';
$strTheContents = 'Innholdet av filen erstatter valgt tabell for rader med lik identifikator eller unikt felt';
$strTheTerminator = 'Tegn som angir slutt på felter.';
$strTotal = 'totalt';
$strType = 'Type';

$strUncheckAll = 'Fjern merking';
$strUnique = 'Unik';
$strUnselectAll = 'Fjern alle valgte';
$strUpdatePrivMessage = 'Du har oppdatert privilegiene til %s.';
$strUpdateProfile = 'Oppdater profil:';
$strUpdateProfileMessage = 'Profilen har blitt oppdatert.';
$strUpdateQuery = 'Oppdater spørring';
$strUsage = 'Bruk';
$strUseBackquotes = 'Bruk venstre anførselstegn med tabell og felt navn';
$strUser = 'Bruker';
$strUserEmpty = 'Brukernavnet er tomt!';
$strUserName = 'Brukernavn';
$strUsers = 'Brukere';
$strUseTables = 'Bruk tabeller';

$strValue = 'Verdi';
$strViewDump = 'Vis dump (skjema) av tabell';
$strViewDumpDB = 'Vis dump (skjema) av database';

$strWelcome = 'Velkommen til %s';
$strWithChecked = 'Med avkrysset:';
$strWrongUser = 'Ugyldig brukernavn/passord. Ingen tilgang.';

$strYes = 'Ja';

$strZip = 'Komprimert (zip)';
// To translate

$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate

$strCharsetOfFile = 'Character set of the file:'; //to translate
$strColComFeat = 'Displaying Column Comments';  //to translate
$strCreatePdfFeat = 'Creation of PDFs';  //to translate

$strDisabled = 'Disabled';  //to translate
$strDisplayFeat = 'Display Features';  //to translate

$strEnabled = 'Enabled';  //to translate
$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate
$strExplain = 'Explain SQL';  //to translate

$strGeneralRelationFeat = 'General relation features';  //to translate

$strNoExplain = 'Skip Explain SQL';  //to translate
$strNotOK = 'not OK';  //to translate
$strNoValidateSQL = 'Skip Validate SQL';  //to translate

$strOK = 'OK';  //to translate

$strPdfNoTables = 'No tables';  //to translate

$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate

$strValidateSQL = 'Validate SQL';  //to translate

$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';  //to translate
$strWebServerUploadDirectory = 'web-server upload directory';  //to translate
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  //to translate
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate
?>
