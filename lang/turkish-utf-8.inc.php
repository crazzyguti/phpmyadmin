<?php
/* $Id$ */

// Türkçe Çeviri ® Bora Alioğlu
// mail: borasar@myrealbox.com
// icq uin: 20940178
// #######################################################
// çeviri hakkındaki her türlü düzeltme ve önerileriniz
// için benimle temasa geçebilirsiniz...
// #######################################################
// son güncelleme:01.10.2003 (in kosta/poli)
//
//                                       "ego lente festino"

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';

$byteUnits = array('Byte', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
$day_of_week = array('Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi');
$month = array('Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık');

// Aşağıdaki değişkenin tanımlanması hakkında daha fazla bilgi için
// http://www.php.net/manual/en/function.strftime.php sitesine gözatınız

$datefmt = '%B %d, %Y at %I:%M %p';

$timespanfmt = '%s gün, %s saat, %s dakika ve %s saniye';

$strAPrimaryKey = '%s üzerinde birincil indeks eklendi';
$strAbortedClients = 'İptal edildi';
$strAbsolutePathToDocSqlDir = 'Lütfen web sunucusu üzerinde docSQL dizinine giden tam yolu giriniz  ';
$strAccessDenied = 'Erişim engellendi';
$strAccessDeniedExplanation = 'phpMyAdmin MySQL sunucusuna bağlanmayı denedi  sunucu bağlantıyı reddetti. config.inc içerisindeki bilgisayar adresini(host) , kullanıcı adını ve şifreyi kontrol edin ve MySQL sunucusunun yöneticisi tarafından size verilen bilgiyle uyuştuğundan emin olun.';
$strAction = 'Eylem';
$strAddAutoIncrement = 'Otomatik artma ekle';
$strAddDeleteColumn = 'Sütun alanı Ekle/Sil';
$strAddDeleteRow = 'Kriter satırı Ekle/Sil';
$strAddDropDatabase = '<b>DROP DATABASE</b> ekle';
$strAddIntoComments = 'Yorumlara ekle';
$strAddNewField = 'Yeni alan ekle';
$strAddPriv = 'Yeni imtiyaz ekle';
$strAddPrivMessage = 'Yeni imtiyaz eklediniz..';
$strAddPrivilegesOnDb = 'Bir sonraki veritabanı üzerinde imtiyaz ekle';
$strAddPrivilegesOnTbl = 'Bir sonraki tablo üzerinde imtiyazlar ekle';
$strAddSearchConditions = 'Arama durumu ekle ("where" komutu için):';
$strAddToIndex = '%s indeks satırı ekle';
$strAddUser = 'Yeni kullanıcı ekle';
$strAddUserMessage = 'Yeni bir kullanıcı eklediniz.';
$strAddedColumnComment = 'Sütun için eklenmiş yorum';
$strAddedColumnRelation = 'Sütun için eklenmiş ilişki';
$strAdministration = 'Yönetim';
$strAffectedRows = 'Etkilenen satırlar:';
$strAfter = '%s tablosundan sonra';
$strAfterInsertBack = 'Önceki sayfaya geri dön';
$strAfterInsertNewInsert = 'Başka  yeni bir kayıt ekle';
$strAll = 'Tümü';
$strAllTableSameWidth = 'Bütün tabloları aynı genişlikte göster';
$strAlterOrderBy = 'Tablo sıralamasını şuna göre değiştir';
$strAnIndex = '%s üzerinde yeni bir indeks eklendi';
$strAnalyzeTable = 'Tabloyu analiz et';
$strAnd = 'Ve';
$strAny = 'Herhangi';
$strAnyColumn = 'Herhangi sütun';
$strAnyDatabase = 'Herhangi veritabanı';
$strAnyHost = 'Herhangi sunucu';
$strAnyTable = 'Herhangi tablo';
$strAnyUser = 'Herhangi kullanıcı';
$strArabic = 'Arapça';
$strArmenian = 'Ermenice';
$strAscending = 'Artan';
$strAtBeginningOfTable = 'Tablo başında';
$strAtEndOfTable = 'Tablo sonunda';
$strAttr = 'Özellikler';
$strAutodetect = 'Otomatik tanıma';
$strAutomaticLayout = 'Otomatik düzen';

$strBack = 'Geri';
$strBaltic = 'Baltık';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binari';
$strBinaryDoNotEdit = 'Binari - düzenlemeyiniz';
$strBookmarkAllUsers = 'Bütün kullanıcıların bu yer imine erişmelerine izin ver';
$strBookmarkDeleted = 'Bookmark silindi.';
$strBookmarkLabel = 'Etiket';
$strBookmarkOptions = 'Yer imi seçenekleri';
$strBookmarkQuery = ' SQL sorgusu';
$strBookmarkThis = 'Bu SQL sorgusunu işaretle';
$strBookmarkView = 'Sadece gözat';
$strBrowse = 'Tara';
$strBrowseForeignValues = 'Foreign(yabancı) değerleri tara';
$strBulgarian = 'Bulgarca';
$strBzError = 'phpMyAdmin dump dosyasını  bu php versiyonundaki bozuk bir Bz2 uzantısı nedeniyle sıkıştırımadı. phpMyAdmin dizinindeki configurasyon dosyası içindeki  <code>$cfg[\'BZipDump\']</code>  yönergesini <code>FALSE</code> \'a değiştirmeniz gerekmektedir. Bz2 sıkıştırma özelliklerini kullanmak istiyorsanız ,bir sonraki php sürümüne güncelleme yapmanız gerekmektedir.php hata raporu %s\' e bakınız ';
$strBzip = '"bzipped"';

$strCSVOptions = 'CSV seçenekleri';
$strCannotLogin = 'MySQL seçenekleri';
$strCantLoad = '%s uzantısı yüklenemiyor,<br />PHP konfigurasyon dosyasını kontrol ediniz.';
$strCantLoadRecodeIconv = 'Karakter seti dönüşümü için gerekli olan Iconv veya recode uzantılarını yükleyenemiyor.  Php\'nin bu uzantılara izin vermesini sağlayın veya phpMyAdmin içinde karakter dönüşümünü devre dışı bırakınız...';
$strCantRenameIdxToPrimary = 'Indeks\'i PRIMARY olarak adlandırımazsınız!';
$strCantUseRecodeIconv = 'Uzantı raporları yüklenmişken , ne iconv,ne libinconv,ne de recode_string fonksiyonu  kullanılamaz.  Php ayarlarınızı kontrol ediniz.';
$strCardinality = 'En önemli';
$strCarriage = 'Enter Karakteri: \\r';
$strCaseInsensitive = 'büyük küçük harf duyarsız';
$strCaseSensitive = 'büyük küçük harf duyarlı';
$strCentralEuropean = 'Orta Avrupa';
$strChange = 'Değiştir';
$strChangeCopyMode = 'Aynı imtiyazlarla yeni bir kullanıcı yarat ve :';
$strChangeCopyModeCopy = 'eski kullanıcıyı muhafaza et.';
$strChangeCopyModeDeleteAndReload = 'eski kullanıcıyı kullanıcı tablolarından sil ve sonra imtiyazları yeniden yükle.';
$strChangeCopyModeJustDelete = 'eski kullanıcıyı kullanıcı tablolarından sil.';
$strChangeCopyModeRevoke = 'eskiden kalan bütün aktif imtiyazları iptal et ve sil.';
$strChangeCopyUser = 'Login bilgisini değiştir / Kullanıcı kopyala';
$strChangeDisplay = 'Görmek istediğiniz alanı seçiniz';
$strChangePassword = 'Şifre Değiştir';
$strCharset = 'Karakter seti';
$strCharsetOfFile = 'Dosyanın karakter seti:';
$strCharsets = 'Karakter setleri';
$strCharsetsAndCollations = 'Karakter setleri ve karşılaştırmalar';
$strCheckAll = 'Tümünü seç';
$strCheckDbPriv = 'Veritabanı önceliklerini kontrol et';
$strCheckOverhead = 'Baştan aşağıya kontrol et';
$strCheckPrivs = 'İmtiyazları kontrol et';
$strCheckPrivsLong = '&quot;%s&quot; veritabanı için imtiyazları kontrol et.';
$strCheckTable = 'Tabloyu kontrol et';
$strChoosePage = 'Lütfen düzenlemek istediğiniz sayfayı seçin';
$strColComFeat = 'Sütun yorumları gösteriliyor';
$strCollation = 'Karşılaştırma';
$strColumn = 'Sütun';
$strColumnNames = 'Sütun adları';
$strColumnPrivileges = 'Sütuna özgü imtiyazlar';
$strCommand = 'Komut';
$strComments = 'Sütun yorum,ilişki ve MIME tiplerini içer.';
$strCompleteInserts = 'Her INSERT komutunda sütun adlarını ekle';
$strCompression = 'Sıkıştırma';
$strConfigFileError ='phpMyAdmin konfigurasyon dosyanızı okuyamadı....<br /> Bu php yorumlama hatası bulduğu zaman veya dosyayı bulamadığı zaman meydana gelebilir..<br /> Lütfen aşağıdaki linki kullanarak dosyayı direkt olarak çağırın ve aldığınız php hata mesajlarını okuyunuz.Çoğu durumda herhangi bir yerde tırnak veya noktalı virgül eksiktir<br /> Boş bir sayfayla karşılaşırsanız ,herşey yolunda demektir.';
$strConfigureTableCoord = ' Lütfen %s tablosu için koordinatları yapılandırınız';
$strConfirm = 'Aşağıdaki komutu uygulamak istediğinizden emin misiniz?';
$strConnections = 'Bağlantılar';
$strConstraintsForDumped = 'Dökümü yapılmış tablolar için kısıtlamalar';
$strConstraintsForTable = 'Tablo için kısıtlamalar';
$strCookiesRequired = 'Cookieler açık olmalıdır.';
$strCopyTable = 'Tabloyu (veritabanı<b>.</b>tablo) kopyala :';
$strCopyTableOK = '%s tablosu %s üzerine kopyalandı.';
$strCopyTableSameNames = 'Tabloyu aynısına kopyalayamıyor!';
$strCouldNotKill = 'phpMyAdmin  %s işlemini kapatamadı. Büyük ihtimalle daha önceden kapatılmış.';
$strCreate = 'Git';
$strCreateIndex = '%s. sütunda yeni bir indeks oluştur.';
$strCreateIndexTopic = 'Yeni bir indeks oluştur';
$strCreateNewDatabase = 'Yeni veritabanı oluştur';
$strCreateNewTable = '<b>%s</b> veritabanı üzerinde yeni bir tablo oluştur';
$strCreatePage = 'Yeni sayfa oluştur';
$strCreatePdfFeat = 'PDF\'lerin oluşturulması';
$strCreationDates = 'Oluşturulma/Güncelleme/Kontrol tarihleri';
$strCriteria = 'Kriter';
$strCroatian = 'Hırvatça';
$strCyrillic = 'Cyril';
$strCzech = 'Çekçe';

$strDBComment = 'Veritabanı yorumu:';
$strDBGContext = 'Kontekst';
$strDBGContextID = 'Kontekst ID';
$strDBGHits = 'Girişler(hit)';
$strDBGLine = 'Satır';
$strDBGMaxTimeMs = 'Max zaman, ms';
$strDBGMinTimeMs = 'Min zaman, ms';
$strDBGModule = 'Modül';
$strDBGTimePerHitMs = 'Zaman/Giriş, ms';
$strDBGTotalTimeMs = 'Toplam zaman, ms';
$strDanish = 'Danimarkaca';
$strData = 'Veri';
$strDataDict = 'Veri sözlüğü';
$strDataOnly = 'Sadece veri';
$strDatabase = 'Veritabanı ';
$strDatabaseExportOptions = 'Veritabanı dönüşüm ayarları';
$strDatabaseHasBeenDropped = '%s veritabanı kaldırıldı.';
$strDatabaseNoTable = 'Bu veritabanı tablo içermiyor!';
$strDatabaseWildcard = 'Veritabanı (* izin verili):';
$strDatabases = 'Veritabanları';
$strDatabasesDropped = '%s veritabanları başarıyla kaldırıldı.';
$strDatabasesStats = 'Veritabanı istatistikleri';
$strDatabasesStatsDisable = 'İstatistikleri kapat';
$strDatabasesStatsEnable = 'İstatistikleri aç';
$strDatabasesStatsHeavyTraffic = 'Not: Burada veritabanı istatistiklerini  açmak Web Sunucusu ile MySQL arasında yüksek trafiğe yol açabilir.';
$strDbPrivileges = 'Veritabanına özgü imtiyazlar';
$strDbSpecific = 'Veritabanına özgü';
$strDefault = 'Varsayılan';
$strDefaultValueHelp = 'Varsayılan değerler için,tırnak işareti veya slash koymayarak ,lütfen tek bir değer giriniz:şu şekilde : a';
$strDelOld = 'Şu anki sayfada kullanılmayan tablolara referanslar bulunuyor. Bu referansları silmek ister misiniz?';
$strDelayedInserts = 'Bekletilen eklemeleri kullan';
$strDelete = 'Sil';
$strDeleteAndFlush = 'Kullanıcıları sil ve sonra imtiyazları sil.';
$strDeleteAndFlushDescr = 'Bu en temiz yoldur , fakat imtiyazları yeniden yüklemek zaman alabilir.';
$strDeleteFailed = 'Silme sırasında hata oluştu!';
$strDeleteUserMessage = '%s kullanıcısını sildiniz.';
$strDeleted = 'Satır silindi.';
$strDeletedRows = 'Silinen satırlar:';
$strDeleting = '%s siliniyor';
$strDescending = 'Azalan';
$strDescription = 'Tanımlama';
$strDictionary = 'sözlük';
$strDisabled = 'Etkin değil';
$strDisplay = 'Görüntüle';
$strDisplayFeat = 'Özellikleri Göster';
$strDisplayOrder = 'Görünüm düzeni:';
$strDisplayPDF = 'PDF şemasını göster';
$strDoAQuery = '<br><br>"Örnekle sorgu" yap. (joker:%) <br>';
$strDoYouReally = 'Aşağıdaki komutu uygulamak istediğinizden emin misiniz? ';
$strDocu = 'Dökümantasyon';
$strDrop = 'Kaldır';
$strDropDB = 'Veritabanı\'nı kaldır %s';
$strDropSelectedDatabases = 'Seçili veritabanlarını kaldır';
$strDropTable = 'Tablo\'yu kaldır';
$strDropUsersDb = 'Kullanıcılarla aynı isimlerde olan veritabanlarını kaldır.';
$strDumpComments = ' Sütun yorumlarını SQL yorumları gibi içer';
$strDumpSaved = 'Döküm dosyası %s dosyasına kaydedildi';
$strDumpXRows = 'Satır sayısı : %s    %s .satırdan başlayarak.';
$strDumpingData = 'Tablo döküm verisi';
$strDynamic = 'değişken';

$strEdit = 'Düzenle';
$strEditPDFPages = ' PDF Sayfalarını düzenle';
$strEditPrivileges = 'Öncelikleri Düzenle';
$strEffective = 'Efektif';
$strEmpty = 'Boşalt';
$strEmptyResultSet = 'MySQL boş bir sonuç kümesi döndürdü ( sıfır satır).';
$strEnabled = 'Etkin';
$strEnd = 'Son';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglish = 'İngilizce';
$strEnglishPrivileges = ' Not: MySQL  imtiyaz adları İngilizce olarak belirtilmiştir ';
$strError = 'Hata';
$strEstonian = 'Estonyaca';
$strExcelEdition = 'Excel tipi';
$strExcelOptions = 'Excel ayarları';
$strExecuteBookmarked = 'İşaretlenmiş sorguyu çalıştır';
$strExplain = 'SQL\'i açıkla';
$strExport = 'Dönüştür';
$strExportToXML = 'XML formatına dönüştür';
$strExtendedInserts = 'Tablo ismini ve INSERT deyimini sadece bir kez kullan';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Başarısız denemeler';
$strField = 'Alan';
$strFieldHasBeenDropped = '%s alanı kaldırılmıştır';
$strFields = 'Alan Sayısı';
$strFieldsEmpty = ' Alan sayısı boş! ';
$strFieldsEnclosedBy = 'Kapatma karakteri';
$strFieldsEscapedBy = 'Kaçış karakteri';
$strFieldsTerminatedBy = 'Alan sonu karakteri';
$strFileAlreadyExists = '%s dosyası zaten serverda mevcut, dosya adını değiştirin veya üzerine yaz seçeneğini seçin! ';
$strFileCouldNotBeRead = 'Dosya okunamadı';
$strFileNameTemplate = 'Dosya ismi şablonu';
$strFileNameTemplateHelp = 'Veritabanı ismi için __DB__ , tablo ismi için __TABLE__ ve  zaman bildirimi için %sherhangi bir strftime%s değeri kullanın,uzantı otomatik olarak eklenecek,herhangi diğer bir metin korunacaktır.';
$strFileNameTemplateRemember = 'şablonu hatırla';
$strFixed = 'Sabit';
$strFlushPrivilegesNote = 'Not: phpMyAdmin kullanıcıların imtiyazlarını direkt olarak MySQL\'ün imtiyaz tablolarından alır.Bu tabloların içerikleri,eğer elle  değişiklik yapılmışsa,sunucunun kullandığı imtiyazlardan farklı olabilir.Bu durumda,devam etmeden önce %simtiyazları yeniden yüklemeniz gerekir%s .';
$strFlushTable = 'Tabloyu yeniden yükle';
$strFormEmpty = 'Form\'da eksik değer !';
$strFormat = 'Biçim';
$strFullText = 'Tüm metinler';
$strFunction = 'Fonksiyon';

$strGenBy = 'üretildi:';
$strGenTime = 'Çıktı Tarihi';
$strGeneralRelationFeat = 'Genel ilişki özellikleri';
$strGerman = 'Almanca';
$strGlobal = 'genel';
$strGlobalPrivileges = 'Genel imtiyazlar';
$strGlobalValue = 'Genel değer';
$strGo = 'Git';
$strGrantOption = 'Hak';
$strGrants = 'Haklar';
$strGreek = 'Yunanca';
$strGzip = '"gziplenmiş"';

$strHasBeenAltered = 'düzenlendi.';
$strHasBeenCreated = 'yaratıldı.';
$strHaveToShow = 'Görüntülemek için en az bir sütun seçmelisiniz';
$strHebrew = 'İbranice';
$strHome = 'Ana Sayfa';
$strHomepageOfficial = 'phpMyAdmin Web Sayfası';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Yükleme Sayfası';
$strHost = 'Sunucu';
$strHostEmpty = 'Sunucu ismi alanı doldurulmadı!';
$strHungarian = 'Macarca';

$strId = 'ID';
$strIdxFulltext = 'Tüm metinler';
$strIfYouWish = 'Eğer bir tablo\'nun sadece bazı sütunlarını yüklemek istiyorsanız,virgüllerle ayrılmış bir alan listesi belirtiniz.';
$strIgnore = 'Yoksay';
$strIgnoringFile = '%s dosyasını yoksayıyor';
$strImportDocSQL = 'docSQL dosyalarını dönüştür ';
$strImportFiles = 'Dosyaları dönüştür';
$strImportFinished = 'Dönüştürme bitti';
$strInUse = 'kullanımda';
$strIndex = 'İndeks';
$strIndexHasBeenDropped = '%s indeks\'i silindi.';
$strIndexName = 'İndeks ismi :';
$strIndexType = 'İndeks tipi :';
$strIndexes = 'İndeksler';
$strInnodbStat = 'InnoDB durumu';
$strInsecureMySQL = 'Konfigurasyon dosyanız (şifresiz root) varsayılan MySQL imtiyaz dosyasıyla aynen uyuşan ayarlar içeriyor.MySQL sunucunuz bu varsayılan ayarlarla çalışıyor,dışardan girişe açık,ve bu güvenlik açığını hemen düzeltmeniz gerekmektedir.';
$strInsert = 'Ekle';
$strInsertAsNewRow = 'Yeni bir satır olarak ekle';
$strInsertNewRow = 'Yeni satır ekle';
$strInsertTextfiles = 'Tablo içine metin dosyası ekle';
$strInsertedRowId = 'Row id si eklendi:';
$strInsertedRows = 'Eklenen satırlar:';
$strInstructions = 'Talimatlar';
$strInternalNotNecessary = '* İçsel bir ilişki InnoDb\'nin içinde de var ise gerekli değildir.';
$strInternalRelations = 'İçsel ilişkiler';
$strInvalidName = '"%s" sözcüğü kullanılamayan sözcük.Veritabanı/tablo/alan ismi olarak kullanamassınız, you can\'t use it as a database/table/field name.';

$strJapanese = 'Japonca';
$strJumpToDB = '&quot;%s&quot; veritabanına git.';
$strJustDelete = 'Kullanıcıları imtiyaz tablolarından sil .';
$strJustDeleteDescr = '&quot;silinmiş&quot; kullanıcılar ,imtiyazlar yeniden yüklenmedikçe ,hala sunucuya normaldeki gibi erişilebilecek ';

$strKeepPass = 'Şifreyi değiştirme';
$strKeyname = 'Anahtar ismi';
$strKill = 'Kapat';
$strKorean = 'Korece';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX seçenekleri';
$strLandscape = 'Peyzaj';
$strLatexCaption = 'Tablo başlığı';
$strLatexContent = '__TABLE__ tablosunun içeriği';
$strLatexContinued = '(devam eden)';
$strLatexContinuedCaption = 'devam eden tablo başlığı';
$strLatexIncludeCaption = 'Tablo başlığını içer';
$strLatexLabel = 'Etiket anahtarı';
$strLatexStructure = '__TABLE__ tablosunun yapısı';
$strLength = 'Boyut';
$strLengthSet = 'Boyut/Değerler*';
$strLimitNumRows = 'Sayfa başına kayıt sayısı :';
$strLineFeed = 'Satır: \\n';
$strLines = 'Satırlar';
$strLinesTerminatedBy = 'Satır sonu';
$strLinkNotFound = 'Link bulunamadı';
$strLinksTo = 'Linkler->';
$strLithuanian = 'Litvanyaca';
$strLoadExplanation = 'En iyi yöntem varsayılan olarak işaratlenmiş,fakat hata olursa değiştirebilirsiniz.';
$strLoadMethod = 'YÜKLEME yöntemi';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Dosyadan yükle';
$strLogPassword = 'Şifre:';
$strLogServer = 'Sunucu';
$strLogUsername = 'Kullanıcı Adı:';
$strLogin = 'Login';
$strLoginInformation = 'Login bilgisi';
$strLogout = 'Çıkış';

$strMIME_MIMEtype = 'MIME-tip';
$strMIME_available_mime = 'Uygun MIME-tipleri';
$strMIME_available_transform = 'Uygun dönüşümler';
$strMIME_description = 'Tanımlama';
$strMIME_file = 'Dosya ismi';
$strMIME_nodescription = 'Bu dönüşüm için uygun bilgi bulunmamaktadır.<br />Lütfen yazara %s ne yapar diye sorun';
$strMIME_transformation = 'Tarayıcı dönüşümü';
$strMIME_transformation_note = 'Uygun dönüşüm seçeneklerinin listesi ve onların  MIME-tip dönüşümleri için,  %sdönüşüm tanımlamarı%s\'na tıklayın';
$strMIME_transformation_options = 'Dönüşüm seçenekleri';
$strMIME_transformation_options_note = 'Lütfen dönüşüm seçenekleri için değerleri bu şekili kullanarak giriniz: \'a\',\'b\',\'c\'...<br />Backslash ("\") veya tek tırnak ("\'") kullamanız gerekiyorsa, şu şekilde kullanın : \'\\\\xyz\' veya \'a\\\'b\').';
$strMIME_without = 'İtalik olarak yazılmış MIME-tipleri ayrı bir dönüşüm fonksiyonuna sahip değildir.';
$strMissingBracket = 'Parantez eksik';
$strModifications = 'Değişiklikler kaydedildi';
$strModify = 'Değiştir';
$strModifyIndexTopic = 'Indeks düzenle';
$strMoreStatusVars = 'Diğer durum değişkenleri:';
$strMoveTable = 'Tabloyu (veritabanı<b>.</b>tablo) taşı :';
$strMoveTableOK = '%s tablosu %s üzerine taşındı.';
$strMoveTableSameNames = 'Tabloyu aynısına taşıyamıyor!';
$strMultilingual = 'çoklu dil';
$strMustSelectFile = 'Eklemek istediğiniz dosyayı seçmeniz gerekir.';
$strMySQLCharset = 'MySQL karakter seti';
$strMySQLReloaded = 'MySQL yeniden yüklendi.';
$strMySQLSaid = 'MySQL çıktısı: ';
$strMySQLServerProcess = ' MySQL %pma_s1%   %pma_s2%  üzerinde  %pma_s3% olarak çalışıyor';
$strMySQLShowProcess = 'İşlemleri göster';
$strMySQLShowStatus = 'MySQL çalışma zamanı bilgisini göster';
$strMySQLShowVars = 'MySQL sistem değişkenlerini göster';

$strName = 'İsim';
$strNext = 'Sonraki';
$strNo = 'Hayır';
$strNoDatabases = 'Veritabanı yok';
$strNoDatabasesSelected = 'Veritabanı seçilmedi.';
$strNoDescription = 'Tanımlama yok';
$strNoDropDatabases = '"DROP DATABASE" cümlesi burada kullanılamaz.';
$strNoExplain = 'SQL açıklamasını yapma';
$strNoFrames = 'phpMyAdmin frame destekli bir tarayıcı ile daha iyi çalışmaktadır...';
$strNoIndex = 'Indeks tanımlanmadı!';
$strNoIndexPartsDefined = 'Indeks kısmı tanımlanmadı!';
$strNoModification = 'Değişiklik yok';
$strNoOptions = 'Bu düzenin seçeği yok';
$strNoPassword = 'Şifre yok';
$strNoPermission = 'Web sunucusu  %s dosyasını kaydetmek için izne sahip değil.';
$strNoPhp = ' PHP kodsuz';
$strNoPrivileges = 'İmtiyaz yok';
$strNoQuery = 'SQL sorgusu yok!';
$strNoRights = 'Burada bulunmak için yeterli haklara sahip değilsiniz!';
$strNoSpace = '%s dosyasını kaydetmek için yeterli alan yok.';
$strNoTablesFound = 'Veritabanı\'nda tablo bulunamadı.';
$strNoUsersFound = 'Kullanıcı(lar) bulunamadı.';
$strNoUsersSelected = 'Kullanıcı seçilmedi.';
$strNoValidateSQL = 'SQL doğrulamasını yapma';
$strNone = 'Hiçbiri';
$strNotNumber = 'Lütfen bir sayı giriniz!';
$strNotOK = 'Tamam değil';
$strNotSet = '<b>%s</b> tablosu bulunamadı veya %s içinde tanımlanmadı';
$strNotValidNumber = ' geçerli bir satır sayısı değil!';
$strNull = 'Boş';
$strNumSearchResultsInTable = '<b><font color=\'blue\'>%s</font></b> ( <b>%s</b> tablosu içinde aramanıza uyan kayıt sayısı ) ';
$strNumSearchResultsTotal = 'Toplam: %s eşleşim';
$strNumTables = 'Tablolar';

$strOK = 'Tamam';
$strOftenQuotation = 'Sık kullanılan aktarma işaretleri.SEÇİME BAĞLI,sadece <b>char</b> ve <b>varchar</b> alanlarının kapatma karakteri ile çevreleneceği anlamına gelir..';
$strOperations = 'İşlemler';
$strOptimizeTable = 'Tabloyu optimize et';
$strOptionalControls = 'Özel karakterleri yazmak ve okumak için kontroller.Opsiyonel';
$strOptionally = 'Seçime Bağlı';
$strOptions = 'Seçenekler';
$strOr = 'veya';
$strOverhead = 'Kullanılamayan Veri';
$strOverwriteExisting = 'Mevcut dosyaların üzerine yaz!';

$strPHP40203 = ' Ciddi bir multi-byte strings (mbstring) hatasına sahip olan PHP 4.2.3 kullanıyorsunuz,. PHP hata raporu 19404\' e bakınız. Bu sürümün phpMyAdmin\'le kullanılması önerilmez.';
$strPHPVersion = 'PHP Sürümü';
$strPageNumber = 'Sayfa numarası:';
$strPaperSize = 'Kağıt boyu';
$strPartialText = 'Kısmi Metinler';
$strPassword = 'Şifre';
$strPasswordChanged = '%s için şifre başarıyla değiştirildi.';
$strPasswordEmpty = 'Şifre alanı doldurulmadı!';
$strPasswordNotSame = 'Girilen şifreler aynı değil!';
$strPdfDbSchema = ' "%s" veritabanının şeması - Sayfa %s';
$strPdfInvalidPageNum = 'Tanımlanmamış PDF sayfa numarası!';
$strPdfInvalidTblName = ' "%s" tablosu bulunamıyor !';
$strPdfNoTables = 'Tablo yok';
$strPerHour = 'saat başına';
$strPerMinute = 'dakika başına';
$strPerSecond = 'saniye başına';
$strPhoneBook = 'telefon defteri';
$strPhp = 'PHP kodu oluştur';
$strPmaDocumentation = 'phpMyAdmin yardım';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt>\' nin değeri  konfigurasyon dosyasının içinde verilmelidir!';
$strPortrait = 'Portre';
$strPos1 = 'Başlangıç';
$strPrevious = 'Önceki';
$strPrimary = 'Birincil';
$strPrimaryKey = 'Birincil anahtar';
$strPrimaryKeyHasBeenDropped = 'Birincil anahtar silindi';
$strPrimaryKeyName = 'PRIMARY KEY TEK olmalıdır!';
$strPrimaryKeyWarning = '# PRIMARY <b>sadece</b> birincil bir anahtarın ismi <b>olmalıdır!</b>';
$strPrint = 'Yazdır';
$strPrintView = 'Yazıcı görüntüsü';
$strPrintViewFull = 'Yazıcı görüntüsü (tüm metin)';
$strPrivDescAllPrivileges = 'GRANT hariç tüm imtiyazları içerir.';
$strPrivDescAlter = 'Varolan tablonun yapısının değiştirilmesine izin verir.';
$strPrivDescCreateDb = 'Yeni veritabanları ve tabloların oluşturulmasına izin verir.';
$strPrivDescCreateTbl = 'Yeni tabloların oluşturulmasına izin verir.';
$strPrivDescCreateTmpTable = 'Geçici tablolara oluşturulmasına izin verir.';
$strPrivDescDelete = 'Veri silinmesine izin verir.';
$strPrivDescDropDb = 'Veritabanları ve tabloların kaldırılmasına izin verir.';
$strPrivDescDropTbl = 'Tabloların kaldırılmasına izin verir.';
$strPrivDescExecute = 'Kaydedilmiş yordamların çalıştırılmasına izin verir.; Bu MySQL sürümünde etkisi yoktur.';
$strPrivDescFile = 'Data import ve export\'una izin verir.';
$strPrivDescGrant = 'İmtiyaz tablolarını yeniden yüklemeden yeni kullanıcı ve imtiyaz eklenmesine izin verir.';
$strPrivDescIndex = 'İndekslerin yaratılmasına ve kaldırılmasına izin verir.';
$strPrivDescInsert = 'Verinin eklenmesine ve yer değiştirilmesine izin verir.';
$strPrivDescLockTables = 'Geçerli işlem  için tabloların kilitlenmesine izin verir.';
$strPrivDescMaxConnections = 'Kullanıcının saat başına açabileceği bağlantıyı sınırlar.';
$strPrivDescMaxQuestions = 'Kullanıcının saat başına sunucuya gönderebileceği sorgu sayısını sınırlar.';
$strPrivDescMaxUpdates = 'Kullanıcının,saat başına çalıştırabileceği,herhangi bir tablo veya veritabanı değiştiren  komut sayısını sınırlar.';
$strPrivDescProcess3 = 'Diğer kullanıcıların işlemlerinin kapatılmasına izin verir.';
$strPrivDescProcess4 = 'İşlem listesindeki bütün sorguların görüntülenmesine izin verir.';
$strPrivDescReferences = 'Bu MySQL sürümünde etkisi yoktur.';
$strPrivDescReload = 'Sunucu ayarlarının yeniden yüklenmesine ve flush\'a izin ver.(hafıza çıktısı)';
$strPrivDescReplClient = 'Slave ve Master\'ların nerede olduğunu sorma  hakkı verir.';
$strPrivDescReplSlave = 'Kopya slave\'ler için zorunlu.';
$strPrivDescSelect = 'Veri okunmasına izin ver.';
$strPrivDescShowDb = 'Bütün veritabanları listesine erişim verir.';
$strPrivDescShutdown = 'Sunucunun kapatılmasına izin ver.';
$strPrivDescSuper = 'Maksimum bağlantı sayısı aşılsa bile bağlanmasına izin ver;Genel(global) değişkenleri setlemek veya diğer kullanıcıların işlemlerini sonlandırmak  gibi  bir çok yönetim işlemi için gereklidir.';
$strPrivDescUpdate = 'Veri değiştirilmesine izin ver.';
$strPrivDescUsage = 'İmtiyaz yok.';
$strPrivileges = 'İmtiyazlar';
$strPrivilegesReloaded = 'Ayrıcalıklar başarıyla yüklendi.';
$strProcesslist = 'İşlem listesi';
$strProperties = 'Özellikler';
$strPutColNames = 'İlk satırda alan isimlerini koy';

$strQBE = ' Sorgula';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = 'Sorgu penceresi';
$strQueryFrameDebug = 'Debug bilgisi';
$strQueryFrameDebugBox = 'Sorgu formu için aktif değişkenler :\nDB: %s\nTablo: %s\nSunucu: %s\n\nSorgu formu için geçerli değişkenler:\nDB: %s\nTablo: %s\nSunucu: %s\n\nAçacak konumu: %s\nFrameset konumu: %s.';
$strQueryOnDb = '<b>%s</b> veritabanında SQL sorgusu&nbsp;:';
$strQuerySQLHistory = 'SQL geçmişi';
$strQueryStatistics = '<b>Sorgu istatistikleri</b>: Başlangıçtan bu yana sunucuya <b>%s</b> sorgu gönderildi.';
$strQueryTime = 'Sorgu  %01.4f san sürdü';
$strQueryType = 'Sorgu şekli';
$strQueryWindowLock = 'Pencere dışından bu sorgunun üzerine yazma';

$strReType = 'Yeniden gir';
$strReceived = 'Alındı';
$strRecords = 'Kayıtlar';
$strReferentialIntegrity = 'Referans bütünlüğünü kontrol et.';
$strRelationNotWorking = 'Bağlı tablolarla çalışmada kullanılan ekstra özellikler kapatıldı...Niçin olduğunu öğrenmek için %sburaya%s tıklayınız...';
$strRelationView = 'İlişki görünümü';
$strRelationalSchema = 'İlişki şeması';
$strRelations = 'İlişkiler';
$strReloadFailed = 'MySQL yeniden yüklenmesi gerçekleştirilemedi.';
$strReloadMySQL = 'MySQL\' i yeniden yükle';
$strReloadingThePrivileges = 'İmtiyazları yeniden yüklüyor';
$strRememberReload = 'Server\'ı yeniden yüklemeyi unutmayınız.';
$strRemoveSelectedUsers = 'Seçili kullanıcıları kaldır';
$strRenameTable = 'Tablonun ismini şuna değiştir';
$strRenameTableOK = '%s tablosu %s olarak yeniden adlandırıldı';
$strRepairTable = 'Tablo\'yu onar';
$strReplace = 'Yerdeğiştir';
$strReplaceNULLBy = 'NULL \' u bununla yerdeğiştir';
$strReplaceTable = 'Tablo verisini bir dosyadaki ile değiştir';
$strReset = 'Sıfırla';
$strResourceLimits = 'Kaynak sınırları';
$strRevoke = 'Geçersiz kıl';
$strRevokeAndDelete = 'Kullanıcılardaki tüm etkin imtiyazları geçersiz kıl  ve sonra sil..';
$strRevokeAndDeleteDescr = 'Kullanıcılar yeniden yüklenene kadar  hala KULLANIM ayrıcalığına  sahip olacaklar.';
$strRevokeGrant = 'Hak geçersiz kıl';
$strRevokeGrantMessage = '%s için Grant önceliğini kaldırdınız';
$strRevokeMessage = '%s\'in önceliklerini kaldırdınız';
$strRevokePriv = 'İmtiyazları geçersiz kıl';
$strRowLength = 'Satır boyu';
$strRowSize = ' Satır boyutu ';
$strRows = 'Satır';
$strRowsFrom = 'kayıt : Başlayacağı kayıt :';
$strRowsModeFlippedHorizontal = 'yatay (döndürülmüş başlıklar)';
$strRowsModeHorizontal = 'yatay';
$strRowsModeOptions = '%s olarak göster ve %s hücre sonra başlığı tekrarla.';
$strRowsModeVertical = 'dikey';
$strRowsStatistic = 'Satır istatistiği';
$strRunQuery = 'Sorguyu çalıştır';
$strRunSQLQuery = '<b>%s</b> veritabanı üzerinde sorgu çalıştır';
$strRunning = '# %s üzerinde çalışıyor...';
$strRussian = 'Rusça';

$strSQL = 'SQL sorgusu';
$strSQLExportType = 'Export tipi';
$strSQLOptions = 'SQL seçenekleri';
$strSQLParserBugMessage = 'SQL yorumlayıcısında bir hata bulma ihtimaliniz var.Lütfen sorgunuzu dikkatli bir şekilde gözden geçiriniz,ve tırnaklar doğru ve yanlış yazılmamış kontrol ediniz.Diğer olası hata nedenleri metin alanına alabileceği boyuttan daha büyük bir dosya yüklüyor olma ihtimalinizdir.Sorgunuzu MySQL komut satırı arayüzünde de deneyebilirsiniz..MySQL sunucu hata çıktısı,var ise,hatayı manızda size yardımcı olabilir.Hala sorunlarınız varsa veya  komut satırı arayüzü çalışırken,yorumlayıcı hata veriyorsa,lütfen SQL sorgu girişinizi hata yaratan tek bir sorguya indirgeyin,ve aşağıdaki CUT bölümü veri yığını ile birlikte hata raporunu bildiriniz:';
$strSQLParserUserError = 'SQL sorgunuzda bir hata varmış gibi gözüküyor.MySQL sunucu hata çıktısı,var ise,hatayı bulmanızda size yardımcı olabilir.';
$strSQLQuery = 'SQL sorgusu';
$strSQLResult = 'SQL sonucu';
$strSQPBugInvalidIdentifer = 'Geçersiz tanımlayıcı';
$strSQPBugUnclosedQuote = 'Kapatılmamış tırnak';
$strSQPBugUnknownPunctuation = 'Bilinmeyen noktalama işareti';
$strSave = 'Kaydet';
$strSaveOnServer = 'Sunucuda %s dizininin içinde kaydet';
$strScaleFactorSmall = 'Çarpan faktörü sayfadaki şema için çok küçük';
$strSearch = 'Ara';
$strSearchFormTitle = 'Veritabanında ara';
$strSearchInTables = 'Tablo içinde ara :';
$strSearchNeedle = 'Aranacak kelime veya değerler ( joker: "%" ):';
$strSearchOption1 = 'kelimelerin en azından biri';
$strSearchOption2 = 'bütün kelimeler';
$strSearchOption3 = 'tam eşleşim';
$strSearchOption4 = 'normal deyim gibi';
$strSearchResultsFor = ' "%s" %s için arama sonuçları:';
$strSearchType = '<b>BUL </b> :';
$strSecretRequired = 'Ayar dosyası için gizli bir şifre gerekiyor (blowfish_secret).';
$strSelect = 'Seç';
$strSelectADb = ' Lütfen bir veritabanı seçiniz';
$strSelectAll = 'Tümünü seç';
$strSelectFields = 'Alan seç (en az bir)';
$strSelectNumRows = 'sorgu içerisinde';
$strSelectTables = 'Tabloları seç';
$strSend = 'Dosya olarak kaydet';
$strSent = 'Gönderildi';
$strServer = '%s sunucusu';
$strServerChoice = 'Server seçimi';
$strServerStatus = 'Çalışma bilgisi';
$strServerStatusUptime = 'Bu MySQL sunucusunun çalışma süresi : %s <br> Başlama Zamanı: %s ';
$strServerTabProcesslist = 'İşlemler';
$strServerTabVariables = 'Değişkenler';
$strServerTrafficNotes = '<b>Sunucu Yoğunluğu</b>: Bu tablolar başlama zamanından bu yana  MySQL sunucusunun network yoğunluğunu gösterir.';
$strServerVars = 'Sunucu değişkenleri ve ayarları';
$strServerVersion = 'Server sürümü';
$strSessionValue = 'Oturum değeri';
$strSetEnumVal = 'Eğer alan tipi "enum" veya  "set" ise , lütfen verileri şu formata göre giriniz: \'a\',\'b\',\'c\'...<br>Eğer bu değerler arasına backslash ("\") veya tek tırnak koymanız gerekirse ("\'"),bunun için backslash kullanın (mesela \'\\\\xyz\' veya \'a\\\'b\').';
$strShow = 'Göster';
$strShowAll = 'Tümünü göster';
$strShowColor = 'Rengi göster';
$strShowCols = 'Bütün sütunları göster';
$strShowDatadictAs = 'Veri sözlüğü formatı';
$strShowFullQueries = 'Sorguların tümünü göster';
$strShowGrid = 'Izgarayı göster';
$strShowPHPInfo = 'PHP bilgisini göster';
$strShowTableDimension = 'Tabloların';
$strShowTables = 'Tabloları göster';
$strShowThisQuery = 'Sorguyu burada yine göster.';
$strShowingRecords = 'Kayıtları gösteriyor...';
$strSimplifiedChinese = 'Basitleştirilmiş Çince';
$strSingly = '( birer birer )';
$strSize = 'Boyut';
$strSort = 'Sırala';
$strSortByKey = 'Anahtara göre sırala';
$strSpaceUsage = 'Kullanılan alan';
$strSplitWordsWithSpace = 'Kelimeler bir boşluk karakteriyle bölünmüştür (" ").';
$strStatCheckTime = 'Son kontrol';
$strStatCreateTime = 'Oluşturulma';
$strStatUpdateTime = 'Son güncellenme';
$strStatement = 'Durum';
$strStatus = 'Durum';
$strStrucCSV = 'CSV verisi';
$strStrucData = 'Yapı ve Veri';
$strStrucDrop = '<b>DROP TABLE</b> ekle';
$strStrucExcelCSV = 'MS Excel verisi için CSV';
$strStrucOnly = 'Sadece yapı';
$strStructPropose = 'Tablo yapısını analiz et.';
$strStructure = 'Yapı';
$strSubmit = 'Onayla';
$strSuccess = 'SQL sorgunuz başarıyla çalıştırılmıştır';
$strSum = 'toplam';
$strSwedish = 'İsveçce';
$strSwitchToTable = 'Kopyalanmış tabloya geç';

$strTable = 'Tablo:';
$strTableComments = 'Tablo yorumları';
$strTableEmpty = 'Tablo ismi boş!';
$strTableHasBeenDropped = '%s tablosu kaldırılmıştır';
$strTableHasBeenEmptied = '%s tablosu boşaltılmıştır';
$strTableHasBeenFlushed = '%s tablosu başarıyla kapatılmıştır.';
$strTableMaintenance = 'Tablo bakımı';
$strTableOfContents = 'İçerik tablosu';
$strTableOptions = 'Tablo ayarları';
$strTableStructure = 'Tablo yapısı :';
$strTableType = 'Tablo tipi';
$strTables = '%s tablo';
$strTblPrivileges = 'Tabloya özgü imtiyazlar';
$strTextAreaLength = 'Boyutu nedeniyle,<br /> bu alan düzenlenmeyebilir ';
$strThai = 'Thai';
$strTheContent = 'Dosyanızın içeriği eklendi.';
$strTheContents = 'Dosyanın içeriği tablonun içeriğini aynı birincil veya unique anahtar değerli sütunlar için yer değiştirir..';
$strTheTerminator = 'Alan bitimini belirten işaret.';
$strThisHost = 'Bu host ';
$strThisNotDirectory = 'Bu bir dizin değildi';
$strThreadSuccessfullyKilled = '%s işlemi  başarıyla sonlandırıldı.';
$strTime = 'Zaman';
$strToggleScratchboard = 'scratchboard\a geç';
$strTotal = 'toplam';
$strTotalUC = 'Toplam';
$strTraditionalChinese = 'Geleneksel Çince';
$strTraffic = 'Yoğunluk';
$strTransformation_image_jpeg__inline = 'Tıklanabilir bir thumbnail gösterir; seçenekler: pixel olarak genişlik,yükseklik (orijinal oran korunur)';
$strTransformation_image_jpeg__link = 'Bu resime direkt bir link gösterir (direct blob yüklemesi...).';
$strTransformation_image_png__inline = 'jpeg resmini gör: satıriçi';
$strTransformation_text_plain__dateformat = 'Bir TIME, TIMESTAMP veya DATETIME alanı alır ve varsayılan tarih formatı bilgilerinizle onu yeniden biçimlendirir.İlk seçenek  zamangösterimi(timestamp)\'ne eklenecek bir offset(saat olarak)\'tir.(Varsayılan: 0).İkinci seçenek PHP\'nin strftime() fonksiyonu için uygun olan parametrelere göre farklı bir  zamangösterimi(timestamp)\'dir.';
$strTransformation_text_plain__external = 'Dış bir uygulama çalıştırır ve alanverisini standart giriş yoluyla besler.Uygulamanın standart çıktısı döner.Varsayılan hoş bir HTML çıktısı veren Tidy(Düzenli)\'dir..Güvenlik nedeniyle libraries/transformations/text_plain__external.inc.php dosyasını elle düzenlemeniz ve çalışmasına izin vereceğiniz araçları eklemeniz gerekir.İlk seçenek;çalıştırmak istediğiniz program sayısı,ikinci seçenek ise program için gerekli olan parametrelerdir.Üçüncü parametre ,eğer 1\'e setlenmişse htmlspecialchars() fonksiyonunu kullanarak çıktıyı dönüştürecektir(Varsayılan: 1).Dördüncü bir parametre ise ,eğer 1\'e setlenmişse NOWRAP(kaydırma yok) kodu tüm hücreye eklenecek ve bütün çıktı yeniden düzenlenmeden görünecektir.(Varsayılan :1)';
$strTransformation_text_plain__formatted = 'Alanın orijinal biçimlendirmesini korur.Escaping(kaçış) yapılmaz..';
$strTransformation_text_plain__imagelink = 'Bir resim ve bir link gösterir,alan dosya ismini içerir;ilk seçenek "http://domain.com/" gibi bir yazım,ikinci seçenek pixel olarak genişlik,üçüncüsü ise yüksekliktir.';
$strTransformation_text_plain__link = 'Bir link ve dosya ismini içeren alanı gösterir;ilk seçenek "http://domain.com/" gibi bir gösterim,ikincisi ise link için bir başlıktır.';
$strTransformation_text_plain__substr = 'Sadece yazının bir kısmını gösterir. İlk seçenek metin çıktınızın nerede olduğunu tanımlamak için kullanılacak bir offset\'tir. (varsayılan: 0).İkinci seçenek ne kadar metinin geri döndürüldüğünü belirten bir offset\'tir.. Eğer boşsa, bütün kalan metin geri döndürülür.Üçüncü seçenek bir substring döndürüldüğünde hangi karakterlerin çıktının sonuna ekleneceğini tanımlar(Varsayılan:...) .';
$strTransformation_text_plain__unformatted = 'HTML kodunu bir bütün olarak göster.HTML biçimlendirme gösteriliyor.';
$strTruncateQueries = 'Görülen sorguları kısalt';
$strTurkish = 'Türkçe';
$strType = 'Tip';

$strUkrainian = 'Ukraynaca';
$strUncheckAll = 'Hiçbirisini Seçme';
$strUnicode = 'Unicode';
$strUnique = 'Unique';
$strUnknown = 'bilinmeyen';
$strUnselectAll = 'Hiçbirisini seçme';
$strUpdComTab = 'Sütun_Yorumları tablosunun nasıl güncellendiğini öğrenmek istiyorsanız Dökümanlara bakınız.';
$strUpdatePrivMessage = '%s için olan imtiyazları güncellediniz.';
$strUpdateProfile = 'Profil güncelle:';
$strUpdateProfileMessage = 'Profil güncellendi.';
$strUpdateQuery = 'Sorguyu güncelle';
$strUpgrade = '%s %s veya daha sonraki bir sürüme yükseltme yapmanız gereklidir.';
$strUsage = 'Kullanım';
$strUseBackquotes = 'Tablo ve alan isimleri için ters tırnak " ` " işaretini kullan';
$strUseHostTable = 'Host tablosunu kullan';
$strUseTables = 'Tabloları kullan';
$strUseTextField = 'Metin alanını kullan';
$strUseThisValue = 'Bu değeri kullan';
$strUser = 'Kullanıcı';
$strUserAlreadyExists = '%s kullanıcısı zaten mevcut!';
$strUserEmpty = 'Kullanıcı ismi alanı doldurulmadı!';
$strUserName = 'Kullanıcı ismi';
$strUserNotFound = 'Seçili kullanıcı imtiyaz tablosunda bulunamadı.';
$strUserOverview = 'Kullanıcı gözlem';
$strUsers = 'Kullanıcılar';
$strUsersDeleted = 'Seçili kullanıcılar başarıyla silindi.';
$strUsersHavingAccessToDb = '&quot;%s&quot; veritabanına erişimi olan kullanıcılar';

$strValidateSQL = 'SQL\'i doğrula';
$strValidatorError = 'SQL onaylayıcısı başlatılamadı.%sdökümanlar%s\'da belirtildiği gibi,gerekli php uzantılarının yüklenip yüklenilmediğini kontrol ediniz.';
$strValue = 'Değer';
$strVar = 'Değişken';
$strViewDump = 'Tablo döküm şeması';
$strViewDumpDB = 'Veritabanı döküm şeması';
$strViewDumpDatabases = 'Veritabanları döküm şeması';

$strWebServerUploadDirectory = 'web-sunucu yükleme dizini';
$strWebServerUploadDirectoryError = 'Yükleme  işi için belirttiğiniz dizine ulaşılamıyor.';
$strWelcome = '%s \'e HOŞGELDİNİZ....';
$strWestEuropean = 'Batı Avrupa';
$strWildcard = 'joker';
$strWindowNotFound = 'Hedefteki tarayı penceresi güncellenemiyor...Bağlantısı olan pencereyi kapattınız veya tarayıcınızın güvenlik ayarları buna izin vermiyor';
$strWithChecked = 'Seçilileri:';
$strWritingCommentNotPossible = 'Yorum yazılmazı mümkün değil.';
$strWritingRelationNotPossible = 'İlişkinin yazılması mümkün değil.';
$strWrongUser = 'Hatalı kullanıcı/parola. Erişim engellendi.';

$strXML = 'XML';

$strYes = 'Evet';

$strZeroRemovesTheLimit = 'Not: Bu seçeneklerin 0\'a ayarlanması sınırı kaldırır..';
$strZip = '"ziplenmiş"';

$strAddConstraints = 'Add constraints';  //to translate
$strGeorgian = 'Georgian';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strMaximumSize = 'Maximum size: %s%s';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strNeedPrimaryKey = 'You should define a primary key for this table.';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strAddIfNotExists = 'Add IF NOT EXISTS';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strOperator = 'Operator';  //to translate
$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
?>
