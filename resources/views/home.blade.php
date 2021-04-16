
@extends('layouts.base')

@section('title', 'Home')

@section('content')
    <div id="page_content">

        <div id="is_git_revision"></div>
        <div id="maincontainer">
            <a class="hide" id="sync_favorite_tables" href="https://demo.phpmyadmin.net/master-config/index.php?route=/database/structure/favorite-table&amp;ajax_request=1&amp;favorite_table=1&amp;sync_favorite_tables=1&amp;lang=en"></a>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="card mt-4">
                            <div class="card-header">
                                phpMyAdmin Demo Server              </div>
                            <div class="card-body">
                                You are using the demo server. You can do anything here, but please do not change root, debian-sys-maint and pma users. More information is available at <a href="https://demo.phpmyadmin.net/master-config/url.php?url=https://demo.phpmyadmin.net/" target="_blank" rel="noopener noreferrer">demo.phpmyadmin.net</a>.                              </div>
                        </div>

                        <div class="card mt-4">
                            <div class="card-header">
                                General settings              </div>
                            <ul class="list-group list-group-flush">


                                <li id="li_select_mysql_collation" class="list-group-item">
                                    <form class="disableAjax" method="post" action="https://demo.phpmyadmin.net/master-config/index.php?route=/collation-connection&amp;lang=en">
                                        <input type="hidden" name="lang" value="en"><input type="hidden" name="token" value="42366473483c2b4b7355454a7a766570">
                                        <label for="select_collation_connection">
                                            <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="" alt="" class="icon ic_s_asci">
                                            Server connection collation:                        <a href="https://demo.phpmyadmin.net/master-config/url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F8.0%2Fen%2Fcharset-connection.html" target="mysql_doc"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help"></a>
                                        </label>
                                        <select lang="en" dir="ltr" name="collation_connection" id="select_collation_connection" class="autosubmit">
                                            <option value="">Collation</option>
                                            <option value=""></option>
                                            <optgroup label="armscii8" title="ARMSCII-8 Armenian">
                                                <option value="armscii8_bin" title="Armenian, binary">armscii8_bin</option>
                                                <option value="armscii8_general_ci" title="Armenian, case-insensitive">armscii8_general_ci</option>
                                            </optgroup>
                                            <optgroup label="ascii" title="US ASCII">
                                                <option value="ascii_bin" title="West European, binary">ascii_bin</option>
                                                <option value="ascii_general_ci" title="West European, case-insensitive">ascii_general_ci</option>
                                            </optgroup>
                                            <optgroup label="big5" title="Big5 Traditional Chinese">
                                                <option value="big5_bin" title="Traditional Chinese, binary">big5_bin</option>
                                                <option value="big5_chinese_ci" title="Traditional Chinese, case-insensitive">big5_chinese_ci</option>
                                            </optgroup>
                                            <optgroup label="binary" title="Binary pseudo charset">
                                                <option value="binary" title="Binary">binary</option>
                                            </optgroup>
                                            <optgroup label="cp1250" title="Windows Central European">
                                                <option value="cp1250_bin" title="Central European, binary">cp1250_bin</option>
                                                <option value="cp1250_croatian_ci" title="Croatian, case-insensitive">cp1250_croatian_ci</option>
                                                <option value="cp1250_czech_cs" title="Czech, case-sensitive">cp1250_czech_cs</option>
                                                <option value="cp1250_general_ci" title="Central European, case-insensitive">cp1250_general_ci</option>
                                                <option value="cp1250_polish_ci" title="Polish, case-insensitive">cp1250_polish_ci</option>
                                            </optgroup>
                                            <optgroup label="cp1251" title="Windows Cyrillic">
                                                <option value="cp1251_bin" title="Cyrillic, binary">cp1251_bin</option>
                                                <option value="cp1251_bulgarian_ci" title="Bulgarian, case-insensitive">cp1251_bulgarian_ci</option>
                                                <option value="cp1251_general_ci" title="Cyrillic, case-insensitive">cp1251_general_ci</option>
                                                <option value="cp1251_general_cs" title="Cyrillic, case-sensitive">cp1251_general_cs</option>
                                                <option value="cp1251_ukrainian_ci" title="Ukrainian, case-insensitive">cp1251_ukrainian_ci</option>
                                            </optgroup>
                                            <optgroup label="cp1256" title="Windows Arabic">
                                                <option value="cp1256_bin" title="Arabic, binary">cp1256_bin</option>
                                                <option value="cp1256_general_ci" title="Arabic, case-insensitive">cp1256_general_ci</option>
                                            </optgroup>
                                            <optgroup label="cp1257" title="Windows Baltic">
                                                <option value="cp1257_bin" title="Baltic, binary">cp1257_bin</option>
                                                <option value="cp1257_general_ci" title="Baltic, case-insensitive">cp1257_general_ci</option>
                                                <option value="cp1257_lithuanian_ci" title="Lithuanian, case-insensitive">cp1257_lithuanian_ci</option>
                                            </optgroup>
                                            <optgroup label="cp850" title="DOS West European">
                                                <option value="cp850_bin" title="West European, binary">cp850_bin</option>
                                                <option value="cp850_general_ci" title="West European, case-insensitive">cp850_general_ci</option>
                                            </optgroup>
                                            <optgroup label="cp852" title="DOS Central European">
                                                <option value="cp852_bin" title="Central European, binary">cp852_bin</option>
                                                <option value="cp852_general_ci" title="Central European, case-insensitive">cp852_general_ci</option>
                                            </optgroup>
                                            <optgroup label="cp866" title="DOS Russian">
                                                <option value="cp866_bin" title="Russian, binary">cp866_bin</option>
                                                <option value="cp866_general_ci" title="Russian, case-insensitive">cp866_general_ci</option>
                                            </optgroup>
                                            <optgroup label="cp932" title="SJIS for Windows Japanese">
                                                <option value="cp932_bin" title="Japanese, binary">cp932_bin</option>
                                                <option value="cp932_japanese_ci" title="Japanese, case-insensitive">cp932_japanese_ci</option>
                                            </optgroup>
                                            <optgroup label="dec8" title="DEC West European">
                                                <option value="dec8_bin" title="West European, binary">dec8_bin</option>
                                                <option value="dec8_swedish_ci" title="Swedish, case-insensitive">dec8_swedish_ci</option>
                                            </optgroup>
                                            <optgroup label="eucjpms" title="UJIS for Windows Japanese">
                                                <option value="eucjpms_bin" title="Japanese, binary">eucjpms_bin</option>
                                                <option value="eucjpms_japanese_ci" title="Japanese, case-insensitive">eucjpms_japanese_ci</option>
                                            </optgroup>
                                            <optgroup label="euckr" title="EUC-KR Korean">
                                                <option value="euckr_bin" title="Korean, binary">euckr_bin</option>
                                                <option value="euckr_korean_ci" title="Korean, case-insensitive">euckr_korean_ci</option>
                                            </optgroup>
                                            <optgroup label="gb18030" title="China National Standard GB18030">
                                                <option value="gb18030_bin" title="Chinese, binary">gb18030_bin</option>
                                                <option value="gb18030_chinese_ci" title="Chinese, case-insensitive">gb18030_chinese_ci</option>
                                                <option value="gb18030_unicode_520_ci" title="Chinese (UCA 5.2.0), case-insensitive">gb18030_unicode_520_ci</option>
                                            </optgroup>
                                            <optgroup label="gb2312" title="GB2312 Simplified Chinese">
                                                <option value="gb2312_bin" title="Simplified Chinese, binary">gb2312_bin</option>
                                                <option value="gb2312_chinese_ci" title="Simplified Chinese, case-insensitive">gb2312_chinese_ci</option>
                                            </optgroup>
                                            <optgroup label="gbk" title="GBK Simplified Chinese">
                                                <option value="gbk_bin" title="Simplified Chinese, binary">gbk_bin</option>
                                                <option value="gbk_chinese_ci" title="Simplified Chinese, case-insensitive">gbk_chinese_ci</option>
                                            </optgroup>
                                            <optgroup label="geostd8" title="GEOSTD8 Georgian">
                                                <option value="geostd8_bin" title="Georgian, binary">geostd8_bin</option>
                                                <option value="geostd8_general_ci" title="Georgian, case-insensitive">geostd8_general_ci</option>
                                            </optgroup>
                                            <optgroup label="greek" title="ISO 8859-7 Greek">
                                                <option value="greek_bin" title="Greek, binary">greek_bin</option>
                                                <option value="greek_general_ci" title="Greek, case-insensitive">greek_general_ci</option>
                                            </optgroup>
                                            <optgroup label="hebrew" title="ISO 8859-8 Hebrew">
                                                <option value="hebrew_bin" title="Hebrew, binary">hebrew_bin</option>
                                                <option value="hebrew_general_ci" title="Hebrew, case-insensitive">hebrew_general_ci</option>
                                            </optgroup>
                                            <optgroup label="hp8" title="HP West European">
                                                <option value="hp8_bin" title="West European, binary">hp8_bin</option>
                                                <option value="hp8_english_ci" title="English, case-insensitive">hp8_english_ci</option>
                                            </optgroup>
                                            <optgroup label="keybcs2" title="DOS Kamenicky Czech-Slovak">
                                                <option value="keybcs2_bin" title="Czech-Slovak, binary">keybcs2_bin</option>
                                                <option value="keybcs2_general_ci" title="Czech-Slovak, case-insensitive">keybcs2_general_ci</option>
                                            </optgroup>
                                            <optgroup label="koi8r" title="KOI8-R Relcom Russian">
                                                <option value="koi8r_bin" title="Russian, binary">koi8r_bin</option>
                                                <option value="koi8r_general_ci" title="Russian, case-insensitive">koi8r_general_ci</option>
                                            </optgroup>
                                            <optgroup label="koi8u" title="KOI8-U Ukrainian">
                                                <option value="koi8u_bin" title="Ukrainian, binary">koi8u_bin</option>
                                                <option value="koi8u_general_ci" title="Ukrainian, case-insensitive">koi8u_general_ci</option>
                                            </optgroup>
                                            <optgroup label="latin1" title="cp1252 West European">
                                                <option value="latin1_bin" title="West European, binary">latin1_bin</option>
                                                <option value="latin1_danish_ci" title="Danish, case-insensitive">latin1_danish_ci</option>
                                                <option value="latin1_general_ci" title="West European, case-insensitive">latin1_general_ci</option>
                                                <option value="latin1_general_cs" title="West European, case-sensitive">latin1_general_cs</option>
                                                <option value="latin1_german1_ci" title="German (dictionary order), case-insensitive">latin1_german1_ci</option>
                                                <option value="latin1_german2_ci" title="German (phone book order), case-insensitive">latin1_german2_ci</option>
                                                <option value="latin1_spanish_ci" title="Spanish (modern), case-insensitive">latin1_spanish_ci</option>
                                                <option value="latin1_swedish_ci" title="Swedish, case-insensitive">latin1_swedish_ci</option>
                                            </optgroup>
                                            <optgroup label="latin2" title="ISO 8859-2 Central European">
                                                <option value="latin2_bin" title="Central European, binary">latin2_bin</option>
                                                <option value="latin2_croatian_ci" title="Croatian, case-insensitive">latin2_croatian_ci</option>
                                                <option value="latin2_czech_cs" title="Czech, case-sensitive">latin2_czech_cs</option>
                                                <option value="latin2_general_ci" title="Central European, case-insensitive">latin2_general_ci</option>
                                                <option value="latin2_hungarian_ci" title="Hungarian, case-insensitive">latin2_hungarian_ci</option>
                                            </optgroup>
                                            <optgroup label="latin5" title="ISO 8859-9 Turkish">
                                                <option value="latin5_bin" title="Turkish, binary">latin5_bin</option>
                                                <option value="latin5_turkish_ci" title="Turkish, case-insensitive">latin5_turkish_ci</option>
                                            </optgroup>
                                            <optgroup label="latin7" title="ISO 8859-13 Baltic">
                                                <option value="latin7_bin" title="Baltic, binary">latin7_bin</option>
                                                <option value="latin7_estonian_cs" title="Estonian, case-sensitive">latin7_estonian_cs</option>
                                                <option value="latin7_general_ci" title="Baltic, case-insensitive">latin7_general_ci</option>
                                                <option value="latin7_general_cs" title="Baltic, case-sensitive">latin7_general_cs</option>
                                            </optgroup>
                                            <optgroup label="macce" title="Mac Central European">
                                                <option value="macce_bin" title="Central European, binary">macce_bin</option>
                                                <option value="macce_general_ci" title="Central European, case-insensitive">macce_general_ci</option>
                                            </optgroup>
                                            <optgroup label="macroman" title="Mac West European">
                                                <option value="macroman_bin" title="West European, binary">macroman_bin</option>
                                                <option value="macroman_general_ci" title="West European, case-insensitive">macroman_general_ci</option>
                                            </optgroup>
                                            <optgroup label="sjis" title="Shift-JIS Japanese">
                                                <option value="sjis_bin" title="Japanese, binary">sjis_bin</option>
                                                <option value="sjis_japanese_ci" title="Japanese, case-insensitive">sjis_japanese_ci</option>
                                            </optgroup>
                                            <optgroup label="swe7" title="7bit Swedish">
                                                <option value="swe7_bin" title="Swedish, binary">swe7_bin</option>
                                                <option value="swe7_swedish_ci" title="Swedish, case-insensitive">swe7_swedish_ci</option>
                                            </optgroup>
                                            <optgroup label="tis620" title="TIS620 Thai">
                                                <option value="tis620_bin" title="Thai, binary">tis620_bin</option>
                                                <option value="tis620_thai_ci" title="Thai, case-insensitive">tis620_thai_ci</option>
                                            </optgroup>
                                            <optgroup label="ucs2" title="UCS-2 Unicode">
                                                <option value="ucs2_bin" title="Unicode, binary">ucs2_bin</option>
                                                <option value="ucs2_croatian_ci" title="Croatian, case-insensitive">ucs2_croatian_ci</option>
                                                <option value="ucs2_czech_ci" title="Czech, case-insensitive">ucs2_czech_ci</option>
                                                <option value="ucs2_danish_ci" title="Danish, case-insensitive">ucs2_danish_ci</option>
                                                <option value="ucs2_esperanto_ci" title="Esperanto, case-insensitive">ucs2_esperanto_ci</option>
                                                <option value="ucs2_estonian_ci" title="Estonian, case-insensitive">ucs2_estonian_ci</option>
                                                <option value="ucs2_general_ci" title="Unicode, case-insensitive">ucs2_general_ci</option>
                                                <option value="ucs2_general_mysql500_ci" title="Unicode (MySQL 5.0.0), case-insensitive">ucs2_general_mysql500_ci</option>
                                                <option value="ucs2_german2_ci" title="German (phone book order), case-insensitive">ucs2_german2_ci</option>
                                                <option value="ucs2_hungarian_ci" title="Hungarian, case-insensitive">ucs2_hungarian_ci</option>
                                                <option value="ucs2_icelandic_ci" title="Icelandic, case-insensitive">ucs2_icelandic_ci</option>
                                                <option value="ucs2_latvian_ci" title="Latvian, case-insensitive">ucs2_latvian_ci</option>
                                                <option value="ucs2_lithuanian_ci" title="Lithuanian, case-insensitive">ucs2_lithuanian_ci</option>
                                                <option value="ucs2_persian_ci" title="Persian, case-insensitive">ucs2_persian_ci</option>
                                                <option value="ucs2_polish_ci" title="Polish, case-insensitive">ucs2_polish_ci</option>
                                                <option value="ucs2_roman_ci" title="West European, case-insensitive">ucs2_roman_ci</option>
                                                <option value="ucs2_romanian_ci" title="Romanian, case-insensitive">ucs2_romanian_ci</option>
                                                <option value="ucs2_sinhala_ci" title="Sinhalese, case-insensitive">ucs2_sinhala_ci</option>
                                                <option value="ucs2_slovak_ci" title="Slovak, case-insensitive">ucs2_slovak_ci</option>
                                                <option value="ucs2_slovenian_ci" title="Slovenian, case-insensitive">ucs2_slovenian_ci</option>
                                                <option value="ucs2_spanish2_ci" title="Spanish (traditional), case-insensitive">ucs2_spanish2_ci</option>
                                                <option value="ucs2_spanish_ci" title="Spanish (modern), case-insensitive">ucs2_spanish_ci</option>
                                                <option value="ucs2_swedish_ci" title="Swedish, case-insensitive">ucs2_swedish_ci</option>
                                                <option value="ucs2_turkish_ci" title="Turkish, case-insensitive">ucs2_turkish_ci</option>
                                                <option value="ucs2_unicode_520_ci" title="Unicode (UCA 5.2.0), case-insensitive">ucs2_unicode_520_ci</option>
                                                <option value="ucs2_unicode_ci" title="Unicode, case-insensitive">ucs2_unicode_ci</option>
                                                <option value="ucs2_vietnamese_ci" title="Vietnamese, case-insensitive">ucs2_vietnamese_ci</option>
                                            </optgroup>
                                            <optgroup label="ujis" title="EUC-JP Japanese">
                                                <option value="ujis_bin" title="Japanese, binary">ujis_bin</option>
                                                <option value="ujis_japanese_ci" title="Japanese, case-insensitive">ujis_japanese_ci</option>
                                            </optgroup>
                                            <optgroup label="utf16" title="UTF-16 Unicode">
                                                <option value="utf16_bin" title="Unicode, binary">utf16_bin</option>
                                                <option value="utf16_croatian_ci" title="Croatian, case-insensitive">utf16_croatian_ci</option>
                                                <option value="utf16_czech_ci" title="Czech, case-insensitive">utf16_czech_ci</option>
                                                <option value="utf16_danish_ci" title="Danish, case-insensitive">utf16_danish_ci</option>
                                                <option value="utf16_esperanto_ci" title="Esperanto, case-insensitive">utf16_esperanto_ci</option>
                                                <option value="utf16_estonian_ci" title="Estonian, case-insensitive">utf16_estonian_ci</option>
                                                <option value="utf16_general_ci" title="Unicode, case-insensitive">utf16_general_ci</option>
                                                <option value="utf16_german2_ci" title="German (phone book order), case-insensitive">utf16_german2_ci</option>
                                                <option value="utf16_hungarian_ci" title="Hungarian, case-insensitive">utf16_hungarian_ci</option>
                                                <option value="utf16_icelandic_ci" title="Icelandic, case-insensitive">utf16_icelandic_ci</option>
                                                <option value="utf16_latvian_ci" title="Latvian, case-insensitive">utf16_latvian_ci</option>
                                                <option value="utf16_lithuanian_ci" title="Lithuanian, case-insensitive">utf16_lithuanian_ci</option>
                                                <option value="utf16_persian_ci" title="Persian, case-insensitive">utf16_persian_ci</option>
                                                <option value="utf16_polish_ci" title="Polish, case-insensitive">utf16_polish_ci</option>
                                                <option value="utf16_roman_ci" title="West European, case-insensitive">utf16_roman_ci</option>
                                                <option value="utf16_romanian_ci" title="Romanian, case-insensitive">utf16_romanian_ci</option>
                                                <option value="utf16_sinhala_ci" title="Sinhalese, case-insensitive">utf16_sinhala_ci</option>
                                                <option value="utf16_slovak_ci" title="Slovak, case-insensitive">utf16_slovak_ci</option>
                                                <option value="utf16_slovenian_ci" title="Slovenian, case-insensitive">utf16_slovenian_ci</option>
                                                <option value="utf16_spanish2_ci" title="Spanish (traditional), case-insensitive">utf16_spanish2_ci</option>
                                                <option value="utf16_spanish_ci" title="Spanish (modern), case-insensitive">utf16_spanish_ci</option>
                                                <option value="utf16_swedish_ci" title="Swedish, case-insensitive">utf16_swedish_ci</option>
                                                <option value="utf16_turkish_ci" title="Turkish, case-insensitive">utf16_turkish_ci</option>
                                                <option value="utf16_unicode_520_ci" title="Unicode (UCA 5.2.0), case-insensitive">utf16_unicode_520_ci</option>
                                                <option value="utf16_unicode_ci" title="Unicode, case-insensitive">utf16_unicode_ci</option>
                                                <option value="utf16_vietnamese_ci" title="Vietnamese, case-insensitive">utf16_vietnamese_ci</option>
                                            </optgroup>
                                            <optgroup label="utf16le" title="UTF-16LE Unicode">
                                                <option value="utf16le_bin" title="Unicode, binary">utf16le_bin</option>
                                                <option value="utf16le_general_ci" title="Unicode, case-insensitive">utf16le_general_ci</option>
                                            </optgroup>
                                            <optgroup label="utf32" title="UTF-32 Unicode">
                                                <option value="utf32_bin" title="Unicode, binary">utf32_bin</option>
                                                <option value="utf32_croatian_ci" title="Croatian, case-insensitive">utf32_croatian_ci</option>
                                                <option value="utf32_czech_ci" title="Czech, case-insensitive">utf32_czech_ci</option>
                                                <option value="utf32_danish_ci" title="Danish, case-insensitive">utf32_danish_ci</option>
                                                <option value="utf32_esperanto_ci" title="Esperanto, case-insensitive">utf32_esperanto_ci</option>
                                                <option value="utf32_estonian_ci" title="Estonian, case-insensitive">utf32_estonian_ci</option>
                                                <option value="utf32_general_ci" title="Unicode, case-insensitive">utf32_general_ci</option>
                                                <option value="utf32_german2_ci" title="German (phone book order), case-insensitive">utf32_german2_ci</option>
                                                <option value="utf32_hungarian_ci" title="Hungarian, case-insensitive">utf32_hungarian_ci</option>
                                                <option value="utf32_icelandic_ci" title="Icelandic, case-insensitive">utf32_icelandic_ci</option>
                                                <option value="utf32_latvian_ci" title="Latvian, case-insensitive">utf32_latvian_ci</option>
                                                <option value="utf32_lithuanian_ci" title="Lithuanian, case-insensitive">utf32_lithuanian_ci</option>
                                                <option value="utf32_persian_ci" title="Persian, case-insensitive">utf32_persian_ci</option>
                                                <option value="utf32_polish_ci" title="Polish, case-insensitive">utf32_polish_ci</option>
                                                <option value="utf32_roman_ci" title="West European, case-insensitive">utf32_roman_ci</option>
                                                <option value="utf32_romanian_ci" title="Romanian, case-insensitive">utf32_romanian_ci</option>
                                                <option value="utf32_sinhala_ci" title="Sinhalese, case-insensitive">utf32_sinhala_ci</option>
                                                <option value="utf32_slovak_ci" title="Slovak, case-insensitive">utf32_slovak_ci</option>
                                                <option value="utf32_slovenian_ci" title="Slovenian, case-insensitive">utf32_slovenian_ci</option>
                                                <option value="utf32_spanish2_ci" title="Spanish (traditional), case-insensitive">utf32_spanish2_ci</option>
                                                <option value="utf32_spanish_ci" title="Spanish (modern), case-insensitive">utf32_spanish_ci</option>
                                                <option value="utf32_swedish_ci" title="Swedish, case-insensitive">utf32_swedish_ci</option>
                                                <option value="utf32_turkish_ci" title="Turkish, case-insensitive">utf32_turkish_ci</option>
                                                <option value="utf32_unicode_520_ci" title="Unicode (UCA 5.2.0), case-insensitive">utf32_unicode_520_ci</option>
                                                <option value="utf32_unicode_ci" title="Unicode, case-insensitive">utf32_unicode_ci</option>
                                                <option value="utf32_vietnamese_ci" title="Vietnamese, case-insensitive">utf32_vietnamese_ci</option>
                                            </optgroup>
                                            <optgroup label="utf8" title="UTF-8 Unicode">
                                                <option value="utf8_bin" title="Unicode, binary">utf8_bin</option>
                                                <option value="utf8_croatian_ci" title="Croatian, case-insensitive">utf8_croatian_ci</option>
                                                <option value="utf8_czech_ci" title="Czech, case-insensitive">utf8_czech_ci</option>
                                                <option value="utf8_danish_ci" title="Danish, case-insensitive">utf8_danish_ci</option>
                                                <option value="utf8_esperanto_ci" title="Esperanto, case-insensitive">utf8_esperanto_ci</option>
                                                <option value="utf8_estonian_ci" title="Estonian, case-insensitive">utf8_estonian_ci</option>
                                                <option value="utf8_general_ci" title="Unicode, case-insensitive">utf8_general_ci</option>
                                                <option value="utf8_general_mysql500_ci" title="Unicode (MySQL 5.0.0), case-insensitive">utf8_general_mysql500_ci</option>
                                                <option value="utf8_german2_ci" title="German (phone book order), case-insensitive">utf8_german2_ci</option>
                                                <option value="utf8_hungarian_ci" title="Hungarian, case-insensitive">utf8_hungarian_ci</option>
                                                <option value="utf8_icelandic_ci" title="Icelandic, case-insensitive">utf8_icelandic_ci</option>
                                                <option value="utf8_latvian_ci" title="Latvian, case-insensitive">utf8_latvian_ci</option>
                                                <option value="utf8_lithuanian_ci" title="Lithuanian, case-insensitive">utf8_lithuanian_ci</option>
                                                <option value="utf8_persian_ci" title="Persian, case-insensitive">utf8_persian_ci</option>
                                                <option value="utf8_polish_ci" title="Polish, case-insensitive">utf8_polish_ci</option>
                                                <option value="utf8_roman_ci" title="West European, case-insensitive">utf8_roman_ci</option>
                                                <option value="utf8_romanian_ci" title="Romanian, case-insensitive">utf8_romanian_ci</option>
                                                <option value="utf8_sinhala_ci" title="Sinhalese, case-insensitive">utf8_sinhala_ci</option>
                                                <option value="utf8_slovak_ci" title="Slovak, case-insensitive">utf8_slovak_ci</option>
                                                <option value="utf8_slovenian_ci" title="Slovenian, case-insensitive">utf8_slovenian_ci</option>
                                                <option value="utf8_spanish2_ci" title="Spanish (traditional), case-insensitive">utf8_spanish2_ci</option>
                                                <option value="utf8_spanish_ci" title="Spanish (modern), case-insensitive">utf8_spanish_ci</option>
                                                <option value="utf8_swedish_ci" title="Swedish, case-insensitive">utf8_swedish_ci</option>
                                                <option value="utf8_tolower_ci" title="Unicode, case-insensitive">utf8_tolower_ci</option>
                                                <option value="utf8_turkish_ci" title="Turkish, case-insensitive">utf8_turkish_ci</option>
                                                <option value="utf8_unicode_520_ci" title="Unicode (UCA 5.2.0), case-insensitive">utf8_unicode_520_ci</option>
                                                <option value="utf8_unicode_ci" title="Unicode, case-insensitive">utf8_unicode_ci</option>
                                                <option value="utf8_vietnamese_ci" title="Vietnamese, case-insensitive">utf8_vietnamese_ci</option>
                                            </optgroup>
                                            <optgroup label="utf8mb4" title="UTF-8 Unicode">
                                                <option value="utf8mb4_0900_ai_ci" title="Unicode (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_0900_ai_ci</option>
                                                <option value="utf8mb4_0900_as_ci" title="Unicode (UCA 9.0.0), accent-sensitive, case-insensitive">utf8mb4_0900_as_ci</option>
                                                <option value="utf8mb4_0900_as_cs" title="Unicode (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_0900_as_cs</option>
                                                <option value="utf8mb4_0900_bin" title="Unicode (UCA 9.0.0), binary">utf8mb4_0900_bin</option>
                                                <option value="utf8mb4_bin" title="Unicode (UCA 4.0.0), binary">utf8mb4_bin</option>
                                                <option value="utf8mb4_croatian_ci" title="Croatian (UCA 4.0.0), case-insensitive">utf8mb4_croatian_ci</option>
                                                <option value="utf8mb4_cs_0900_ai_ci" title="Czech (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_cs_0900_ai_ci</option>
                                                <option value="utf8mb4_cs_0900_as_cs" title="Czech (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_cs_0900_as_cs</option>
                                                <option value="utf8mb4_czech_ci" title="Czech (UCA 4.0.0), case-insensitive">utf8mb4_czech_ci</option>
                                                <option value="utf8mb4_da_0900_ai_ci" title="Danish (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_da_0900_ai_ci</option>
                                                <option value="utf8mb4_da_0900_as_cs" title="Danish (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_da_0900_as_cs</option>
                                                <option value="utf8mb4_danish_ci" title="Danish (UCA 4.0.0), case-insensitive">utf8mb4_danish_ci</option>
                                                <option value="utf8mb4_de_pb_0900_ai_ci" title="German (phone book order) (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_de_pb_0900_ai_ci</option>
                                                <option value="utf8mb4_de_pb_0900_as_cs" title="German (phone book order) (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_de_pb_0900_as_cs</option>
                                                <option value="utf8mb4_eo_0900_ai_ci" title="Esperanto (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_eo_0900_ai_ci</option>
                                                <option value="utf8mb4_eo_0900_as_cs" title="Esperanto (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_eo_0900_as_cs</option>
                                                <option value="utf8mb4_es_0900_ai_ci" title="Spanish (modern) (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_es_0900_ai_ci</option>
                                                <option value="utf8mb4_es_0900_as_cs" title="Spanish (modern) (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_es_0900_as_cs</option>
                                                <option value="utf8mb4_es_trad_0900_ai_ci" title="Spanish (traditional) (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_es_trad_0900_ai_ci</option>
                                                <option value="utf8mb4_es_trad_0900_as_cs" title="Spanish (traditional) (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_es_trad_0900_as_cs</option>
                                                <option value="utf8mb4_esperanto_ci" title="Esperanto (UCA 4.0.0), case-insensitive">utf8mb4_esperanto_ci</option>
                                                <option value="utf8mb4_estonian_ci" title="Estonian (UCA 4.0.0), case-insensitive">utf8mb4_estonian_ci</option>
                                                <option value="utf8mb4_et_0900_ai_ci" title="Estonian (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_et_0900_ai_ci</option>
                                                <option value="utf8mb4_et_0900_as_cs" title="Estonian (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_et_0900_as_cs</option>
                                                <option value="utf8mb4_general_ci" title="Unicode (UCA 4.0.0), case-insensitive">utf8mb4_general_ci</option>
                                                <option value="utf8mb4_german2_ci" title="German (phone book order) (UCA 4.0.0), case-insensitive">utf8mb4_german2_ci</option>
                                                <option value="utf8mb4_hr_0900_ai_ci" title="Croatian (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_hr_0900_ai_ci</option>
                                                <option value="utf8mb4_hr_0900_as_cs" title="Croatian (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_hr_0900_as_cs</option>
                                                <option value="utf8mb4_hu_0900_ai_ci" title="Hungarian (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_hu_0900_ai_ci</option>
                                                <option value="utf8mb4_hu_0900_as_cs" title="Hungarian (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_hu_0900_as_cs</option>
                                                <option value="utf8mb4_hungarian_ci" title="Hungarian (UCA 4.0.0), case-insensitive">utf8mb4_hungarian_ci</option>
                                                <option value="utf8mb4_icelandic_ci" title="Icelandic (UCA 4.0.0), case-insensitive">utf8mb4_icelandic_ci</option>
                                                <option value="utf8mb4_is_0900_ai_ci" title="Icelandic (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_is_0900_ai_ci</option>
                                                <option value="utf8mb4_is_0900_as_cs" title="Icelandic (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_is_0900_as_cs</option>
                                                <option value="utf8mb4_ja_0900_as_cs" title="Japanese (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_ja_0900_as_cs</option>
                                                <option value="utf8mb4_ja_0900_as_cs_ks" title="Japanese (UCA 9.0.0), accent-sensitive, case-sensitive, kana-sensitive">utf8mb4_ja_0900_as_cs_ks</option>
                                                <option value="utf8mb4_la_0900_ai_ci" title="Classical Latin (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_la_0900_ai_ci</option>
                                                <option value="utf8mb4_la_0900_as_cs" title="Classical Latin (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_la_0900_as_cs</option>
                                                <option value="utf8mb4_latvian_ci" title="Latvian (UCA 4.0.0), case-insensitive">utf8mb4_latvian_ci</option>
                                                <option value="utf8mb4_lithuanian_ci" title="Lithuanian (UCA 4.0.0), case-insensitive">utf8mb4_lithuanian_ci</option>
                                                <option value="utf8mb4_lt_0900_ai_ci" title="Lithuanian (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_lt_0900_ai_ci</option>
                                                <option value="utf8mb4_lt_0900_as_cs" title="Lithuanian (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_lt_0900_as_cs</option>
                                                <option value="utf8mb4_lv_0900_ai_ci" title="Latvian (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_lv_0900_ai_ci</option>
                                                <option value="utf8mb4_lv_0900_as_cs" title="Latvian (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_lv_0900_as_cs</option>
                                                <option value="utf8mb4_persian_ci" title="Persian (UCA 4.0.0), case-insensitive">utf8mb4_persian_ci</option>
                                                <option value="utf8mb4_pl_0900_ai_ci" title="Polish (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_pl_0900_ai_ci</option>
                                                <option value="utf8mb4_pl_0900_as_cs" title="Polish (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_pl_0900_as_cs</option>
                                                <option value="utf8mb4_polish_ci" title="Polish (UCA 4.0.0), case-insensitive">utf8mb4_polish_ci</option>
                                                <option value="utf8mb4_ro_0900_ai_ci" title="Romanian (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_ro_0900_ai_ci</option>
                                                <option value="utf8mb4_ro_0900_as_cs" title="Romanian (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_ro_0900_as_cs</option>
                                                <option value="utf8mb4_roman_ci" title="West European (UCA 4.0.0), case-insensitive">utf8mb4_roman_ci</option>
                                                <option value="utf8mb4_romanian_ci" title="Romanian (UCA 4.0.0), case-insensitive">utf8mb4_romanian_ci</option>
                                                <option value="utf8mb4_ru_0900_ai_ci" title="Russian (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_ru_0900_ai_ci</option>
                                                <option value="utf8mb4_ru_0900_as_cs" title="Russian (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_ru_0900_as_cs</option>
                                                <option value="utf8mb4_sinhala_ci" title="Sinhalese (UCA 4.0.0), case-insensitive">utf8mb4_sinhala_ci</option>
                                                <option value="utf8mb4_sk_0900_ai_ci" title="Slovak (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_sk_0900_ai_ci</option>
                                                <option value="utf8mb4_sk_0900_as_cs" title="Slovak (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_sk_0900_as_cs</option>
                                                <option value="utf8mb4_sl_0900_ai_ci" title="Slovenian (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_sl_0900_ai_ci</option>
                                                <option value="utf8mb4_sl_0900_as_cs" title="Slovenian (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_sl_0900_as_cs</option>
                                                <option value="utf8mb4_slovak_ci" title="Slovak (UCA 4.0.0), case-insensitive">utf8mb4_slovak_ci</option>
                                                <option value="utf8mb4_slovenian_ci" title="Slovenian (UCA 4.0.0), case-insensitive">utf8mb4_slovenian_ci</option>
                                                <option value="utf8mb4_spanish2_ci" title="Spanish (traditional) (UCA 4.0.0), case-insensitive">utf8mb4_spanish2_ci</option>
                                                <option value="utf8mb4_spanish_ci" title="Spanish (modern) (UCA 4.0.0), case-insensitive">utf8mb4_spanish_ci</option>
                                                <option value="utf8mb4_sv_0900_ai_ci" title="Swedish (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_sv_0900_ai_ci</option>
                                                <option value="utf8mb4_sv_0900_as_cs" title="Swedish (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_sv_0900_as_cs</option>
                                                <option value="utf8mb4_swedish_ci" title="Swedish (UCA 4.0.0), case-insensitive">utf8mb4_swedish_ci</option>
                                                <option value="utf8mb4_tr_0900_ai_ci" title="Turkish (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_tr_0900_ai_ci</option>
                                                <option value="utf8mb4_tr_0900_as_cs" title="Turkish (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_tr_0900_as_cs</option>
                                                <option value="utf8mb4_turkish_ci" title="Turkish (UCA 4.0.0), case-insensitive">utf8mb4_turkish_ci</option>
                                                <option value="utf8mb4_unicode_520_ci" title="Unicode (UCA 5.2.0), case-insensitive">utf8mb4_unicode_520_ci</option>
                                                <option value="utf8mb4_unicode_ci" title="Unicode (UCA 4.0.0), case-insensitive" selected>utf8mb4_unicode_ci</option>
                                                <option value="utf8mb4_vi_0900_ai_ci" title="Vietnamese (UCA 9.0.0), accent-insensitive, case-insensitive">utf8mb4_vi_0900_ai_ci</option>
                                                <option value="utf8mb4_vi_0900_as_cs" title="Vietnamese (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_vi_0900_as_cs</option>
                                                <option value="utf8mb4_vietnamese_ci" title="Vietnamese (UCA 4.0.0), case-insensitive">utf8mb4_vietnamese_ci</option>
                                                <option value="utf8mb4_zh_0900_as_cs" title="Chinese (UCA 9.0.0), accent-sensitive, case-sensitive">utf8mb4_zh_0900_as_cs</option>
                                            </optgroup>
                                        </select>
                                    </form>
                                </li>

                                <li id="li_user_preferences" class="list-group-item">
                                    <a href="https://demo.phpmyadmin.net/master-config/index.php?route=/preferences/manage&amp;lang=en">
                                        <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="More settings" alt="More settings" class="icon ic_b_tblops">&nbsp;More settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="card mt-4">
                            <div class="card-header">
                                Appearance settings              </div>
                            <ul class="list-group list-group-flush">
                                <li id="li_select_lang" class="list-group-item">
                                    <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="" alt="" class="icon ic_s_lang">
                                    <form method="get" action="https://demo.phpmyadmin.net/master-config/index.php?route=/&amp;lang=en" class="disableAjax">
                                        <input type="hidden" name="db" value=""><input type="hidden" name="table" value=""><input type="hidden" name="lang" value="en"><input type="hidden" name="token" value="42366473483c2b4b7355454a7a766570">

                                        <bdo lang="en" dir="ltr">
                                            <label for="sel-lang">Language<a href="https://demo.phpmyadmin.net/master-config/url.php?url=https%3A%2F%2Fdocs.phpmyadmin.net%2Fen%2Flatest%2Ffaq.html%23faq7-2" target="documentation"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help"></a></label>
                                        </bdo>

                                        <select name="lang" class="autosubmit" lang="en" dir="ltr" id="sel-lang">

                                            <option value="af">
                                                Afrikaans
                                            </option>
                                            <option value="sq">
                                                Shqip - Albanian
                                            </option>
                                            <option value="am">
                                                አማርኛ - Amharic
                                            </option>
                                            <option value="ar">
                                                &#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577; - Arabic
                                            </option>
                                            <option value="hy">
                                                Հայերէն - Armenian
                                            </option>
                                            <option value="az">
                                                Az&#601;rbaycanca - Azerbaijani
                                            </option>
                                            <option value="bn">
                                                বাংলা - Bangla
                                            </option>
                                            <option value="eu">
                                                Euskara - Basque
                                            </option>
                                            <option value="be">
                                                &#1041;&#1077;&#1083;&#1072;&#1088;&#1091;&#1089;&#1082;&#1072;&#1103; - Belarusian
                                            </option>
                                            <option value="be@latin">
                                                Bie&#0322;aruskaja - Belarusian (latin)
                                            </option>
                                            <option value="brx">
                                                बड़ो - Bodo
                                            </option>
                                            <option value="bs">
                                                Bosanski - Bosnian
                                            </option>
                                            <option value="br">
                                                Brezhoneg - Breton
                                            </option>
                                            <option value="bg">
                                                &#1041;&#1098;&#1083;&#1075;&#1072;&#1088;&#1089;&#1082;&#1080; - Bulgarian
                                            </option>
                                            <option value="my">
                                                မြန်မာ - Burmese
                                            </option>
                                            <option value="ca">
                                                Catal&agrave; - Catalan
                                            </option>
                                            <option value="zh_cn">
                                                &#20013;&#25991; - Chinese simplified
                                            </option>
                                            <option value="zh_tw">
                                                &#20013;&#25991; - Chinese traditional
                                            </option>
                                            <option value="ksh">
                                                Kölsch - Colognian
                                            </option>
                                            <option value="hr">
                                                Hrvatski - Croatian
                                            </option>
                                            <option value="cs">
                                                Čeština - Czech
                                            </option>
                                            <option value="da">
                                                Dansk - Danish
                                            </option>
                                            <option value="nl">
                                                Nederlands - Dutch
                                            </option>
                                            <option value="en"                selected="selected">
                                                English
                                            </option>
                                            <option value="en_gb">
                                                English (United Kingdom)
                                            </option>
                                            <option value="eo">
                                                Esperanto - Esperanto
                                            </option>
                                            <option value="et">
                                                Eesti - Estonian
                                            </option>
                                            <option value="fil">
                                                Pilipino - Filipino
                                            </option>
                                            <option value="fi">
                                                Suomi - Finnish
                                            </option>
                                            <option value="vls">
                                                West-Vlams - Flemish
                                            </option>
                                            <option value="fr">
                                                Fran&ccedil;ais - French
                                            </option>
                                            <option value="fy">
                                                Frysk - Frisian
                                            </option>
                                            <option value="gl">
                                                Galego - Galician
                                            </option>
                                            <option value="ka">
                                                &#4325;&#4304;&#4320;&#4311;&#4323;&#4314;&#4312; - Georgian
                                            </option>
                                            <option value="de">
                                                Deutsch - German
                                            </option>
                                            <option value="el">
                                                &Epsilon;&lambda;&lambda;&eta;&nu;&iota;&kappa;&#940; - Greek
                                            </option>
                                            <option value="gu">
                                                ગુજરાતી - Gujarati
                                            </option>
                                            <option value="he">
                                                &#1506;&#1489;&#1512;&#1497;&#1514; - Hebrew
                                            </option>
                                            <option value="hi">
                                                &#2361;&#2367;&#2344;&#2381;&#2342;&#2368; - Hindi
                                            </option>
                                            <option value="hu">
                                                Magyar - Hungarian
                                            </option>
                                            <option value="ig">
                                                Asụsụ Igbo - Igbo
                                            </option>
                                            <option value="id">
                                                Bahasa Indonesia - Indonesian
                                            </option>
                                            <option value="ia">
                                                Interlingua
                                            </option>
                                            <option value="it">
                                                Italiano - Italian
                                            </option>
                                            <option value="ja">
                                                &#26085;&#26412;&#35486; - Japanese
                                            </option>
                                            <option value="kab">
                                                Taqbaylit - Kabylian
                                            </option>
                                            <option value="kn">
                                                ಕನ್ನಡ - Kannada
                                            </option>
                                            <option value="kk">
                                                Қазақ - Kazakh
                                            </option>
                                            <option value="km">
                                                ខ្មែរ - Khmer
                                            </option>
                                            <option value="ko">
                                                &#54620;&#44397;&#50612; - Korean
                                            </option>
                                            <option value="ku">
                                                کوردی - Kurdish
                                            </option>
                                            <option value="ky">
                                                Кыргызча - Kyrgyz
                                            </option>
                                            <option value="lv">
                                                Latvie&scaron;u - Latvian
                                            </option>
                                            <option value="li">
                                                Lèmbörgs - Limburgish
                                            </option>
                                            <option value="lt">
                                                Lietuvi&#371; - Lithuanian
                                            </option>
                                            <option value="mk">
                                                Macedonian - Macedonian
                                            </option>
                                            <option value="ms">
                                                Bahasa Melayu - Malay
                                            </option>
                                            <option value="ml">
                                                Malayalam - Malayalam
                                            </option>
                                            <option value="mn">
                                                &#1052;&#1086;&#1085;&#1075;&#1086;&#1083; - Mongolian
                                            </option>
                                            <option value="ne">
                                                नेपाली - Nepali
                                            </option>
                                            <option value="nb">
                                                Norsk - Norwegian
                                            </option>
                                            <option value="nn">
                                                Nynorsk - Norwegian Nynorsk
                                            </option>
                                            <option value="fa">
                                                &#1601;&#1575;&#1585;&#1587;&#1740; - Persian
                                            </option>
                                            <option value="pl">
                                                Polski - Polish
                                            </option>
                                            <option value="pt">
                                                Portugu&ecirc;s - Portuguese
                                            </option>
                                            <option value="pt_br">
                                                Portugu&ecirc;s (Brasil) - Portuguese (Brazil)
                                            </option>
                                            <option value="pa">
                                                ਪੰਜਾਬੀ - Punjabi
                                            </option>
                                            <option value="ro">
                                                Rom&acirc;n&#259; - Romanian
                                            </option>
                                            <option value="ru">
                                                &#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081; - Russian
                                            </option>
                                            <option value="sr">
                                                &#1057;&#1088;&#1087;&#1089;&#1082;&#1080; - Serbian
                                            </option>
                                            <option value="sr@latin">
                                                Srpski - Serbian (latin)
                                            </option>
                                            <option value="si">
                                                &#3523;&#3538;&#3458;&#3524;&#3517; - Sinhala
                                            </option>
                                            <option value="sk">
                                                Sloven&#269;ina - Slovak
                                            </option>
                                            <option value="sl">
                                                Sloven&scaron;&#269;ina - Slovenian
                                            </option>
                                            <option value="ckb">
                                                سۆرانی - Sorani
                                            </option>
                                            <option value="es">
                                                Espa&ntilde;ol - Spanish
                                            </option>
                                            <option value="sv">
                                                Svenska - Swedish
                                            </option>
                                            <option value="ta">
                                                தமிழ் - Tamil
                                            </option>
                                            <option value="tt">
                                                Tatar&ccedil;a - Tatarish
                                            </option>
                                            <option value="te">
                                                తెలుగు - Telugu
                                            </option>
                                            <option value="th">
                                                &#3616;&#3634;&#3625;&#3634;&#3652;&#3607;&#3618; - Thai
                                            </option>
                                            <option value="tr">
                                                T&uuml;rk&ccedil;e - Turkish
                                            </option>
                                            <option value="tk">
                                                Türkmençe - Turkmen
                                            </option>
                                            <option value="uk">
                                                &#1059;&#1082;&#1088;&#1072;&#1111;&#1085;&#1089;&#1100;&#1082;&#1072; - Ukrainian
                                            </option>
                                            <option value="ur">
                                                اُردوُ - Urdu
                                            </option>
                                            <option value="ug">
                                                ئۇيغۇرچە - Uyghur
                                            </option>
                                            <option value="uz">
                                                &#1038;&#1079;&#1073;&#1077;&#1082;&#1095;&#1072; - Uzbek (cyrillic)
                                            </option>
                                            <option value="uz@latin">
                                                O&lsquo;zbekcha - Uzbek (latin)
                                            </option>
                                            <option value="vi">
                                                Tiếng Việt - Vietnamese
                                            </option>
                                            <option value="cy">
                                                Cymraeg - Welsh
                                            </option>

                                        </select>


                                    </form>

                                </li>

                                <li id="li_select_theme" class="list-group-item">
                                    <form method="post" action="https://demo.phpmyadmin.net/master-config/index.php?route=/themes/set&amp;lang=en" class="disableAjax">
                                        <input type="hidden" name="lang" value="en"><input type="hidden" name="token" value="42366473483c2b4b7355454a7a766570">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#themesModal" role="button"><span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Theme:" alt="Theme:" class="icon ic_s_theme">&nbsp;Theme:</span></a>
                                        <select name="set_theme" lang="en" dir="ltr" class="autosubmit" aria-label="Theme">
                                            <option value="bootstrap">Bootstrap</option>
                                            <option value="metro">Metro</option>
                                            <option value="original">Original</option>
                                            <option value="pmahomme" selected>pmahomme</option>
                                        </select>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="card mt-4">
                            <div class="card-header">
                                Database server            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    Server:                phpMyAdmin demo - MySQL (192.168.30.23 via TCP/IP)
                                </li>
                                <li class="list-group-item">
                                    Server type:                MySQL
                                </li>
                                <li class="list-group-item">
                                    Server connection:                <span class="text-danger">SSL is not being used</span> <a href="https://demo.phpmyadmin.net/master-config/url.php?url=https%3A%2F%2Fdocs.phpmyadmin.net%2Fen%2Flatest%2Fsetup.html%23ssl" target="documentation"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help"></a>
                                </li>
                                <li class="list-group-item">
                                    Server version:                8.0.18 - MySQL Community Server - GPL
                                </li>
                                <li class="list-group-item">
                                    Protocol version:                10
                                </li>
                                <li class="list-group-item">
                                    User:                root@192.168.30.20
                                </li>
                                <li class="list-group-item">
                                    Server charset:                <span lang="en" dir="ltr">
                  UTF-8 Unicode (utf8mb4)
                </span>
                                </li>
                            </ul>
                        </div>

                        <div class="card mt-4">
                            <div class="card-header">
                                Web server            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    nginx/1.14.2
                                </li>
                                <li class="list-group-item" id="li_mysql_client_version">
                                    Database client version:                  libmysql - mysqlnd 7.4.14
                                </li>
                                <li class="list-group-item">
                                    PHP extension:                                      mysqli
                                    <a href="https://demo.phpmyadmin.net/master-config/url.php?url=https%3A%2F%2Fsecure.php.net%2Fmanual%2Fen%2Fbook.mysqli.php" target="documentation"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help"></a>
                                    curl
                                    <a href="https://demo.phpmyadmin.net/master-config/url.php?url=https%3A%2F%2Fsecure.php.net%2Fmanual%2Fen%2Fbook.curl.php" target="documentation"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help"></a>
                                    mbstring
                                    <a href="https://demo.phpmyadmin.net/master-config/url.php?url=https%3A%2F%2Fsecure.php.net%2Fmanual%2Fen%2Fbook.mbstring.php" target="documentation"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help"></a>
                                </li>
                                <li class="list-group-item">
                                    PHP version:                  7.4.14
                                </li>
                            </ul>
                        </div>

                        <div class="card mt-4">
                            <div class="card-header">
                                phpMyAdmin
                            </div>
                            <ul class="list-group list-group-flush">
                                <li id="li_pma_version" class="list-group-item jsversioncheck">
                                    Version information:                <span class="version">5.2.0-dev</span>
                                </li>
                                <li class="list-group-item">
                                    <a href="https://demo.phpmyadmin.net/master-config/url.php?url=https%3A%2F%2Fdocs.phpmyadmin.net%2Fen%2Flatest%2Findex.html" target="_blank" rel="noopener noreferrer">
                                        Documentation                </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="https://demo.phpmyadmin.net/master-config/url.php?url=https%3A%2F%2Fwww.phpmyadmin.net%2F" target="_blank" rel="noopener noreferrer">
                                        Official Homepage                </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="https://demo.phpmyadmin.net/master-config/url.php?url=https%3A%2F%2Fwww.phpmyadmin.net%2Fcontribute%2F" target="_blank" rel="noopener noreferrer">
                                        Contribute                </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="https://demo.phpmyadmin.net/master-config/url.php?url=https%3A%2F%2Fwww.phpmyadmin.net%2Fsupport%2F" target="_blank" rel="noopener noreferrer">
                                        Get support                </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="https://demo.phpmyadmin.net/master-config/index.php?route=/changelog&amp;lang=en" target="_blank">
                                        List of changes                </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="https://demo.phpmyadmin.net/master-config/index.php?route=/license&amp;lang=en" target="_blank">
                                        License                </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="themesModal" tabindex="-1" aria-labelledby="themesModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="themesModalLabel">phpMyAdmin Themes</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading…</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="https://demo.phpmyadmin.net/master-config/url.php?url=https%3A%2F%2Fwww.phpmyadmin.net%2Fthemes%2F#pma_5_2" class="btn btn-primary" rel="noopener noreferrer" target="_blank">
                            Get more themes!          </a>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
