<?php
/* $Id$ */

// Thai translation
// first created 2002/04/29 Arthit Suriyawongkul & Warit Wanasathian
// last modified 2002/08/07 Arthit Suriyawongkul

$charset = 'tis-620';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('亵�', '����亵�', '�����亵�', '�ԡ�亵�');

$day_of_week = array('��.', '�.', '�.', '�.', '��.', '�.', '�.');
$month = array('�.�.', '�.�.', '��.�.', '��.�.', '�.�.', '��.�.', '�.�.', '�.�.', '�.�.', '�.�.', '�.�.', '�.�.');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%e %B %Y  %R�.';

$strAccessDenied = '���͹حҵ�����ҹ';
$strAction = '��зӡ��';
$strAddDeleteColumn = '����/ź ������� (��Ŵ�)';
$strAddDeleteRow = '����/ź ��';
$strAddNewField = '������Ŵ�����';
$strAddPriv = '�����Է��';
$strAddPrivMessage = '�����Է�����º��������';
$strAddSearchConditions = '�������͹�㹡�ä���:';
$strAddToIndex = '�����Ѫ�դ������ %s';
$strAddUser = '�������������';
$strAddUserMessage = '����������������º��������';
$strAffectedRows = '�Ƿ���ռ�:';
$strAfter = '��ѧ %s';
$strAfterInsertBack = '�觡�Ѻ';
$strAfterInsertNewInsert = '�á����¹����';
$strAll = '������';
$strAllTableSameWidth = '����ʴ����ҧ�ء���ҧ���¤������ҧ��ҡѹ�������?';
$strAlterOrderBy = '���§���㹵��ҧ���';
$strAnalyzeTable = '����������ҧ';
$strAnd = '���';
$strAnIndex = '�������Ѫ������� %s';
$strAny = '��';
$strAnyColumn = '���������';
$strAnyDatabase = '�ҹ��������';
$strAnyHost = '��ʵ���';
$strAnyTable = '���ҧ��';
$strAnyUser = '�������';
$strAPrimaryKey = '�����������դ�������� %s';
$strAscending = '������ҡ';
$strAtBeginningOfTable = '���ش������鹢ͧ���ҧ';
$strAtEndOfTable = '���ش�ش���¢ͧ���ҧ';
$strAttr = '�͵��Ժ�ǵ�';

$strBack = '��͹��Ѻ';
$strBeginCut = 'BEGIN CUT (�ش�Ѵ�����)';
$strBeginRaw = 'BEGIN RAW (����� RAW)';
$strBinary = ' ������亹��� ';
$strBinaryDoNotEdit = ' ������亹��� - ������� ';
$strBookmarkDeleted = 'ź�Ӥ鹷�訴������º��������';
$strBookmarkLabel = '���ª���';
$strBookmarkQuery = '�Ӥ鹹��١���������';
$strBookmarkThis = '���Ӥ鹹�����';
$strBookmarkView = '�����ҧ����';
$strBrowse = '�Դ��';
$strBzip = '"bzipped"';

$strCantLoadMySQL = '�������ö���¡���Ǫ��¢ͧ MySQL,<br />��سҵ�Ǩ�ͺ��õ�駤�Ңͧ PHP';
$strCantLoadRecodeIconv = '�������ö���¡���Ǫ��� iconv ���� recode �����ŧ�ش����ѡ��, �ҧ���͡: 1) ��駤����� PHP ����ö���Ǫ�������ҹ���� ���� 2) ��駤����� phpMyAdmin ����ͧ�ŧ�ش����ѡ��';
$strCantRenameIdxToPrimary = '����¹���ʹѪ���� PRIMARY �����!';
$strCantUseRecodeIconv = '�������ö��ѧ���� iconv ���� libiconv ���� recode_string ���� �������ö���¡��Ǫ�������Ѻ�ѧ��������ҹ�鹢����������. �ͧ��Ǩ�ͺ��õ�駤�Ңͧ PHP';
$strCardinality = 'Cardinality';
$strCarriage = '�Ѵ���: \\r';
$strChange = '����¹';
$strChangeDisplay = '���͡��Ŵ����ͧ����ʴ�';
$strChangePassword = '����¹���ʼ�ҹ';
$strCharsetOfFile = '�ش�ѡ��Тͧ��� (character set):';
$strCheckAll = '���͡������';
$strCheckDbPriv = '��Ǩ�ͺ�Է��㹰ҹ������';
$strCheckTable = '��Ǩ�ͺ���ҧ';
$strChoosePage = '���͡˹�ҷ���ͧ������';
$strColComFeat = '�ʴ������˵آͧ�������';
$strColumn = '�������';
$strColumnNames = '���ͤ������';
$strComments = '�����˵�';
$strCompleteInserts = '����� INSERT ����ٻẺ';
$strConfigFileError = 'phpMyAdmin �������ö��ҹ���͹�ԡ��ê�蹢ͧ�س��<br />�»��� �Ҩ�������е�� PHP ���������� �����������ö�����ż� (parse) �����<br />�ͧ���¡���͹�ԡ��ê�蹢�����µç (���ԧ���ҹ��ҧ) ��д������ error message �����������  �ͧ��Ǩ�ͺ������ͧ���� quote ���� semicolon ������ú��������<br />��Ҥس���˹����ҧ� �ʴ���ҷء���ҧ�繻��Դ�';
$strConfigureTableCoord = '��سҵ�駤��������๵�ͧ���ҧ %s';
$strConfirm = '�س�׹�ѹ���з���觹��?';
$strCookiesRequired = '��ͧ͹حҵ���� \'��ꡡ��\' ���¡�͹ �֧�м�ҹ�ش������';
$strCopyTable = '�Ѵ�͡���ҧ��ѧ (database<b>.</b>table):';
$strCopyTableOK =  '�Ѵ�͡���ҧ %s ���㹪��� %s ���º��������.';
$strCreate = '���ҧ';
$strCreateIndex = '���ҧ�Ѫ���¤������ %s';
$strCreateIndexTopic = '���ҧ�Ѫ������';
$strCreateNewDatabase = '���ҧ�ҹ����������';
$strCreateNewTable = '���ҧ���ҧ㹰ҹ�����Ź�� %s';
$strCreatePage = '�����˹������';
$strCreatePdfFeat = '������ҧ�͡��� PDF';
$strCriteria = '���͹�';

$strData = '������';
$strDatabase = '�ҹ������ ';
$strDatabaseHasBeenDropped = '�¹�ҹ������ %s �������º��������';
$strDatabases = '�ҹ������';
$strDatabasesStats = 'ʶԵ԰ҹ������';
$strDatabaseWildcard = '�ҹ������ (�� wildcards ��):';
$strDataOnly = '੾�Т�����';
$strDefault = '��һ�����';
$strDelete = 'ź';
$strDeleted = 'ź���º��������';
$strDeletedRows = '�Ƿ��١ź:';
$strDeleteFailed = 'ź��������!';
$strDeleteUserMessage = '�س��ź����� %s �����';
$strDescending = '�ҡ仹���';
$strDisabled = '�ЧѺ���������';
$strDisplay = '�ʴ���';
$strDisplayFeat = '��������ö��ҹ����ʴ���';
$strDisplayOrder = '�ӴѺ����ʴ�:';
$strDisplayPDF = '�ʴ� PDF schema';
$strDoAQuery = '�� "�Ӥ鹨ҡ������ҧ" (wildcard: "%")';
$strDocu = '�͡�����ҧ�ԧ';
$strDoYouReally = '��ͧ��è� ';
$strDrop = '�¹���';
$strDropDB = '�¹�ҹ������ %s ���';
$strDropTable = '�¹���ҧ���';
$strDumpingData = 'dump ���ҧ';
$strDumpXRows = '������� %s �� ���������� %s';
$strDynamic = '��褧���';

$strEdit = '���';
$strEditPDFPages = '���˹�� PDF';
$strEditPrivileges = '����Է��';
$strEffective = '�ռ�';
$strEmpty = 'ź������';
$strEmptyResultSet = 'MySQL �׹���Ѿ����ҧ���� (null) ��Ѻ�� (0 ��).';
$strEnabled = '�Դ������';
$strEnd = '�����ش';
$strEndCut = 'END CUT (�ش�Ѵ����ش)';
$strEndRaw = 'END RAW (����ش RAW)';
$strEnglishPrivileges = ' �ô��Һ: ���ͧ͢�Է��� MySQL ���ʴ��������ѧ��� ';
$strError = '�Դ��Ҵ';
$strExplain = '͸Ժ�� SQL';
$strExport = '���͡';
$strExportToXML = '���͡���ٻẺ XML';
$strExtendedInserts = '�á��������¹㹤�������';
$strExtra = '�������';

$strField = '��Ŵ�';
$strFieldHasBeenDropped = '�¹��Ŵ� %s �������º��������';
$strFields = '�ӹǹ��Ŵ�';
$strFieldsEmpty = ' �ӹǹ��Ŵ��� ��ҧ����! ';
$strFieldsEnclosedBy = '�������Ŵ����';
$strFieldsEscapedBy = '����ͧ��������Ѻ escape char';
$strFieldsTerminatedBy = '����Ŵ����';
$strFixed = '�����';
$strFlushTable = '��ҧ���ҧ ("FLUSH")';
$strFormat = '�ٻẺ';
$strFormEmpty = '����Ẻ��������� !';
$strFullText = '��駢�ͤ���';
$strFunction = '�ѧ����';

$strGenBy = '���ҧ��';
$strGeneralRelationFeat = '��������ö��ҹ���Ūѹ�����';
$strGenTime = '����㹡�����ҧ';
$strGo = 'ŧ���';
$strGrants = '͹حҵ';
$strGzip = '"gzipped"';

$strHasBeenAltered = '����¹��������';
$strHasBeenCreated = '���ҧ��������';
$strHaveToShow = '��ͧ���͡����ʴ����ҧ����˹�觤������';
$strHome = '˹�Һ�ҹ';
$strHomepageOfficial = '���ྨ���ҧ�繷ҧ��âͧ phpMyAdmin';
$strHomepageSourceforge = '˹�Ҵ�ǹ���Ŵ phpMyAdmin ��� Sourceforge';
$strHost = '��ʵ�';
$strHostEmpty = '������ʵ��ѧ��ҧ����!';

$strIdxFulltext = 'Fulltext';
$strIfYouWish = '��ҵ�ͧ������¡��੾�кҧ������� ����к���ª��Ϳ�Ŵ��Ҵ��� (������Ъ��ʹ�������ͧ�����١���)';
$strIgnore = '���ʹ�';
$strIndex = '�Ѫ��';
$strIndexes = '�Ѫ��';
$strIndexHasBeenDropped = '�¹�Ѫ�� %s �������º��������';
$strIndexName = '���ʹѪ�� :';
$strIndexType = '��Դ�ͧ�Ѫ�� :';
$strInsert = '�á';
$strInsertAsNewRow = '�á��������';
$strInsertedRows = '�Ƿ��١�á:';
$strInsertNewRow = '�á������';
$strInsertTextfiles = '�á�����Ũҡ����ͤ�������㹵��ҧ';
$strInstructions = '�Ը���';
$strInUse = '������';
$strInvalidName = '"%s" �繤�ʧǹ �������駪��� �ҹ������/ ���ҧ/��Ŵ� �����';

$strKeepPass = '��س���������¹���ʼ�ҹ';
$strKeyname = '���ͤ���';
$strKill = '��ҷ��';

$strLength = '�������';
$strLengthSet = '�������/૵*';
$strLimitNumRows = '����¹���˹��';
$strLineFeed = '��鹺�÷Ѵ����: \\n';
$strLines = '��÷Ѵ';
$strLinesTerminatedBy = '���Ǵ���';
$strLinkNotFound = '��辺�ԧ��';
$strLinksTo = '�������ѧ';
$strLocationTextfile = '���͡����ͤ����ҡ';
$strLogin = '�������к�';
$strLogout = '�͡�ҡ�к�';
$strLogPassword = '���ʼ�ҹ:';
$strLogUsername = '���ͼ����:';

$strMissingBracket = 'ǧ��纡����� [] ���ú';
$strModifications = '�ѹ�֡���������º��������';
$strModify = '���';
$strModifyIndexTopic = '��䢴Ѫ��';
$strMoveTable = '���µ��ҧ� (database<b>.</b>table):';
$strMoveTableOK = '���ҧ %s �١����� %s ����';
$strMySQLCharset = '�ش����ѡ�� (charset) �ͧ MySQL';
$strMySQLReloaded = '���¡ MySQL �������������';
$strMySQLSaid = 'MySQL �ʴ�: ';
$strMySQLServerProcess = 'MySQL %pma_s1% �ӧҹ���躹 %pma_s2% 㹪��� %pma_s3%';
$strMySQLShowProcess = '�ʴ��ҹ��������ͧ MySQL';
$strMySQLShowStatus = '�ʴ�ʶҹТͧ MySQL';
$strMySQLShowVars = '�ʴ�������к��ͧ MySQL';

$strName = '����';
$strNext = '����';
$strNo = '���';
$strNoDatabases = '����հҹ������';
$strNoDescription = '�������������´';
$strNoDropDatabases = '����� "DROP DATABASE" �١�Դ���';
$strNoExplain = '����ͧ͸Ժ�� SQL';
$strNoFrames = '���������<b>�������</b> �Ъ�������� phpMyAdmin ����¢��';
$strNoIndex = '�ѧ������˹��Ѫ����!';
$strNoIndexPartsDefined = '������˹���ǹ�� �ͧ�Ѫ��!';
$strNoModification = '����ա������¹�ŧ';
$strNone = '�����';
$strNoPassword = '��������ʼ�ҹ';
$strNoPhp = '�������� PHP';
$strNoPrivileges = '������Է��';
$strNoQuery = '����դӤ� SQL!';
$strNoRights = '�س������Է�Է�������ҵç���!';
$strNoTablesFound = '��辺���ҧ� � 㹰ҹ������';
$strNotNumber = '��ҹ����������Ţ!';
$strNotOK = '��赡ŧ';
$strNotSet = '��辺���ҧ <b>%s</b> � %s';
$strNotValidNumber = ' ����������Ţ�Ƿ��١��ͧ!';
$strNoUsersFound = '��辺�������.';
$strNoValidateSQL = '����ͧ��Ǩ�ͺ SQL';
$strNull = '��ҧ���� (null)';
$strNumSearchResultsInTable = '�� %s ���Ѿ����ç㹵��ҧ <i>%s</i>';
$strNumSearchResultsTotal = '<b>���:</b> <i>%s</i> ���Ѿ����ç';

$strOftenQuotation = '�»��Ԩ�������ͧ�����ѭ��С�� (����ͧ���¤Ӿٴ)<br />"��ҷ�����" ���¶֧����������ͧ���¤����੾�СѺ��Ŵ쪹Դ char ��� varchar ��ҹ��';
$strOK = '��ŧ';
$strOperations = '��кǹ���';
$strOptimizeTable = '��Ѻ�觵��ҧ';
$strOptionalControls = '��˹���Ҩ���¹������ҹ����ѡ��о���� ���ҧ��';
$strOptionally = '��ҷ�����';
$strOptions = '������͡';
$strOr = '����';
$strOverhead = '�Թ��������';

$strPageNumber = '�����Ţ˹��:';
$strPartialText = '��ͤ����ҧ��ǹ';
$strPassword = '���ʼ�ҹ';
$strPasswordEmpty = '���ʼ�ҹ�ѧ��ҧ����!';
$strPasswordNotSame = '���ʼ�ҹ���ç�ѹ!';
$strPdfDbSchema = 'schema �ͧ�ҹ������ "%s" - ˹�� %s';
$strPdfInvalidPageNum = '�ѧ������˹��Ţ˹�Ңͧ PDF!';
$strPdfInvalidTblName = '����յ��ҧ "%s"!';
$strPdfNoTables = '����յ��ҧ';
$strPhp = '���ҧ�� PHP';
$strPHPVersion = '��蹢ͧ PHP';
$strPmaDocumentation = '�͡��á���� phpMyAdmin';
$strPmaUriError = '<b>��ͧ</b>��˹���� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ����͹�ԡ��ê�����¡�͹';
$strPos1 = '�ش�������';
$strPrevious = '��͹˹��';
$strPrimary = 'Primary';
$strPrimaryKey = 'Primary key';
$strPrimaryKeyHasBeenDropped = '�¹�����դ���������º ��������';
$strPrimaryKeyName = '���ͧ͢�����դ���е�ͧ��... PRIMARY!';
$strPrimaryKeyWarning = '(���ͧ͢�����դ���<b>�е�ͧ��</b> "PRIMARY" ��ҹ��!)';
$strPrintView = '�ʴ�';
$strPrivileges = '�Է��';
$strProperties = '�س���ѵ�';

$strQBE = '�Ӥ鹨ҡ������ҧ';
$strQBEDel = 'ź';
$strQBEIns = '����';
$strQueryOnDb = '�Ӥ鹺��ҹ������ <b>%s</b>:';

$strRecords = '����¹';
$strReferentialIntegrity = '��Ǩ�ͺ��������ó�ͧ�����ҧ�֧:';
$strRelationNotWorking = '��������ö����������͹حҵ�����ҹ linked Tables �� ��١�ЧѺ������ �����˵ؼŵ����������� %shere%s';
$strRelationView = '����ͧ���Ūѹ';
$strReloadFailed = '����Ŵ MySQL ������������';
$strReloadMySQL = '����Ŵ MySQL ����';
$strRememberReload = '�����������Ŵ��������������ա����';
$strRenameTable = '����¹���͵��ҧ��';
$strRenameTableOK = '���ҧ %s ��١����¹������ %s';
$strRepairTable = '���������ҧ';
$strReplace = '��¹�Ѻ';
$strReplaceTable = '��¹�Ѻ���¢����Ũҡ���';
$strReset = '���������';
$strReType = '���������';
$strRevoke = '�ԡ�͹';
$strRevokeGrant = '�ԡ�͹���͹حҵ';
$strRevokeGrantMessage = '�س���ԡ�͹���͹حҵ�ͧ %s';
$strRevokeMessage = '�س���ԡ�͹�Է�Ԣͧ %s';
$strRevokePriv = '�ԡ�͹�Է��';
$strRowLength = '���������';
$strRows = '��';
$strRowsFrom = '�� ������ҡ�Ƿ��';
$strRowSize = ' ��Ҵ�� ';
$strRowsModeHorizontal = '�ǹ͹';
$strRowsModeOptions = '����� %s ��Ы������Ƿء� %s ����';
$strRowsModeVertical = '�ǵ��';
$strRowsStatistic = 'ʶԵԢͧ��';
$strRunning = '�ӧҹ���躹 %s';
$strRunQuery = '�����żŤӤ�';
$strRunSQLQuery = '�����żŤӤ鹺��ҹ������ %s';

$strSave = '�ѹ�֡';
$strScaleFactorSmall = '�ѵ����͹����Թ价��ШѴ��� schema �����˹������';
$strSearch = '����';
$strSearchFormTitle = '����㹰ҹ������';
$strSearchInTables = '㹵��ҧ:';
$strSearchNeedle = '�����ͤ�ҷ���ͧ��ä��� (wildcard: "%"):';
$strSearchOption1 = '���ҧ����˹�觤�';
$strSearchOption2 = '�ء��';
$strSearchOption3 = '����͹������';
$strSearchOption4 = '��Ẻ regular expression';
$strSearchResultsFor = '�š�ä��� "<i>%s</i>" %s:';
$strSearchType = '��:';
$strSelect = '���͡';
$strSelectADb = '�ô���͡�ҹ������';
$strSelectAll = '���͡������';
$strSelectFields = '���͡��Ŵ� (���ҧ����˹�觿�Ŵ�):';
$strSelectNumRows = '㹤Ӥ�';
$strSelectTables = '���͡���ҧ';
$strSend = '���������';
$strServerChoice = '������͡���������';
$strServerVersion = '��蹢ͧ���������';
$strSetEnumVal = '��Ҫ�Դ�ͧ��Ŵ��� "enum" ���� "set" �ô����ҵ���ٻẺ: \'a\',\'b\',\'c\'...<br />��ҵ�ͧ����������ͧ���� backslash ("\\") ���� �ѭ��С������� ("\'") ����㹤������ҹ�� ����������ͧ���� backslash ��˹�� (������ҧ: \'\\\\xyz\' or \'a\\\'b\')';
$strShow = '�ʴ�';
$strShowAll = '�ʴ�������';
$strShowColor = '�ʴ���';
$strShowCols = '�ʴ��������';
$strShowGrid = '�ʴ���Դ';
$strShowingRecords = '�ʴ�����¹��� ';
$strShowPHPInfo = '�ʴ������Ţͧ PHP';
$strShowTableDimension = '�ʴ��ԵԢͧ���ҧ';
$strShowTables = '�ʴ����ҧ';
$strShowThisQuery = ' �ʴ��Ӥ鹹���ա�� ';
$strSingly = '(�����)';
$strSize = '��Ҵ';
$strSort = '���§';
$strSpaceUsage = '���ͷ������';
$strSplitWordsWithSpace = '�Ӷ١�觴��ª�ͧ��ҧ (" ").';
$strSQL = 'SQL';
$strSQLParserBugMessage = '�Ҩ���ա������¹�ŧ�ҧ���ҧ���س������ѹ�繢�ͼԴ��Ҵ�ͧ SQL parser. ��سҵ�Ǩ�ͺ�Ӥ鹢ͧ�س������ǹ ��੾�С���Դ/�Դ����ͧ���¤Ӿٴ (quotes) ���١��ͧ. �ա���˵�˹�觷�������ͧ��ͼԴ��Ҵ��� �س�Ҩ���Ѿ��Ŵ���亹��բ�ҧ�͡��ǧ�ͧ����ͧ���¤Ӿٴ. �س����ö�����ͧ�Ӥ鹢ͧ�س������ҹ���Ź�ͧ MySQL ��觤س�Ҩ�о���ͼԴ��Ҵ�ҧ���ҧ㹹��. �ҡ MySQL server ���駢�ͼԴ��Ҵ�Ҵ�ҹ��ҧ��� ����ͧ��ҹ�� �ѹ�Ҩ�Ъ������س�ԹԨ��»ѭ����բ��. ��Ҥس�ѧ���ѭ�ҡѺ parser � phpMyAdmin ���� ����辺�ѭ�ҡѺ parser � command line, ����ͧŴ������Ǣͧ�Ӥ� SQL ŧ ����з������ͤӤ� SQL ������ ����ѧ������Դ�ѭ�������ա, �����駢�ͼԴ��Ҵ�ѧ������ҷ����� ���ѹ�Ҿ�����Ѻ��Ǣ����ŷ��س�� �����ҡ��ǹ�ͧ CUT ��ҹ��ҧ.';
$strSQLParserUserError = '�Ҩ���բ�ͼԴ��Ҵ�ҧ���ҧ㹤Ӥ� SQL �ͧ�س. �ҡ MySQL server ���駢�ͼԴ��Ҵ�Ҵ�ҹ��ҧ��� ����ͧ��ҹ�� �ѹ�Ҩ�Ъ������س�ԹԨ��»ѭ����բ��';
$strSQLQuery = '�Ӥ� SQL';
$strSQLResult = '���Ѿ�� SQL';
$strSQPBugInvalidIdentifer = '���͵�������١��ͧ';
$strSQPBugUnclosedQuote = '�����Դ����ͧ���¤Ӿٴ';
$strSQPBugUnknownPunctuation = '������ͧ������ä�͹���������ѡ';
$strStatement = '�����';
$strStrucCSV = '������ CSV';
$strStrucData = '����ç���ҧ��Т�����';
$strStrucDrop = '��������� \'drop table\'';
$strStrucExcelCSV = '������ CSV ����Ѻ���ëͿ�������';
$strStrucOnly = '੾���ç���ҧ';
$strStructPropose = '�ʹ��ç���ҧ���ҧ';
$strStructure = '�ç���ҧ';
$strSubmit = '��';
$strSuccess = '�ӤӤ��������º��������';
$strSum = '�����';

$strTable = '���ҧ ';
$strTableComments = '�����˵آͧ���ҧ';
$strTableEmpty = '���͵��ҧ�ѧ��ҧ����!';
$strTableHasBeenDropped = '�¹���ҧ %s �������º���� ����';
$strTableHasBeenEmptied = 'ź������㹵��ҧ %s ���º���� ����';
$strTableHasBeenFlushed = '��ҧ���ҧ %s ���º��������';
$strTableMaintenance = '��ô����ѡ�ҵ��ҧ';
$strTables = '%s ���ҧ';
$strTableStructure = '�ç���ҧ���ҧ';
$strTableType = '��Դ���ҧ';
$strTextAreaLength = ' ���ͧ�ҡ������Ǣͧ�ѹ <br />��Ŵ��� ����Ҩ����� ';
$strTheContent = '���á�����Ũҡ���ͧ�س���º��������';
$strTheContents = '����Ѻ�Ƿ���������դ������� unique key ����͹�ѹ �����Ҩҡ����᷹������������㹵��ҧ';
$strTheTerminator = '�ش����ش�ͧ��Ŵ�';
$strTotal = '������';
$strType = '��Դ';

$strUncheckAll = '������͡���';
$strUnique = '�͡�ѡɳ�';
$strUnselectAll = '������͡���';
$strUpdatePrivMessage = '�س���Ѻ��ا�Է������Ѻ %s ����';
$strUpdateProfile = '��Ѻ��ا�����:';
$strUpdateProfileMessage = '��Ѻ��ا��������º��������';
$strUpdateQuery = '��Ѻ��ا�Ӥ�';
$strUsage = '��ҹ';
$strUseBackquotes = '��� \'backqoute\' ���Ѻ���͵��ҧ��п�Ŵ�';
$strUser = '�����';
$strUserEmpty = '���ͼ�����ѧ��ҧ����!';
$strUserName = '���ͼ����';
$strUsers = '�����';
$strUseTables = '����ҧ';

$strValidateSQL = '��Ǩ�ͺ SQL';
$strValue = '���';
$strViewDump = '���ç���ҧ�ͧ���ҧ';
$strViewDumpDB = '���ç���ҧ�ͧ�ҹ������';

$strWelcome = '%s �Թ�յ�͹�Ѻ';
$strWithChecked = '�ӡѺ������͡:';
$strWrongUser = '͹حҵ������������� ���ͼ�����������ʼ�ҹ�Դ';

$strYes = '��';

$strZip = '"�١�պ�Ѵ���� (zip)"';
// To translate

$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';  //to translate
$strWebServerUploadDirectory = 'web-server upload directory';  //to translate
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  //to translate
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate
?>
