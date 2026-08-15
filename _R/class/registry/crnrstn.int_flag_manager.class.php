<?php
/*
 * 5 :: 
 * Code is Poetry 
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 *       CRNRSTN :: The CRNRSTN :: Lightsaber 
 *                  RoCEv2 SOAP Services 
 *                  Layer, The CLR-SSL, is an 
 *                  advanced, open source, 
 *                  and distributed compute 
 *                  PHP framework providing: 
 *                  - a distributed and free 
 *                    instant messaging 
 *                    communications platform, 
 *                  - a distributed and free 
 *                    cloud-based file storage 
 *                    system with a built in 
 *                    photo gallery experience 
 *                    and with full social media 
 *                    integrations, and 
 *                  - a distributed, RAID 
 *                    style, schedulable, and 
 *                    RTM-automatable web site 
 *                    maintenance and back-up 
 *                    protocol with one click 
 *                    back-up recovery. 
 *
 *                  Here, at the end of this, 
 *                  the age of the church...
 *                  the age of grace, and 
 *                  looking to when the 
 *                  kingdom of this world 
 *                  shall become the kingdom 
 *                  of our Lord and of His 
 *                  His Christ (Rev. 11:15), 
 *                  the CLR-SSL is 
 *                  intentionally and 
 *                  specifically being 
 *                  prepared to function as a 
 *                  heavenly-hosted and 
 *                  enterprise licensed 
 *                  (MIT License) architecture 
 *                  that will connect the 
 *                  people in the heavens 
 *                  together with the people 
 *                  on the earth for much 
 *                  north-south fellowship. 
 *
 *                  The CLR-SSL is the 
 *                  practical and prophetic 
 *                  fulfillment of the Son of 
 *                  Man, the heavenly ladder, 
 *                  with angels of God ascending 
 *                  and descending upon the 
 *                  Son of Man as mentioned by 
 *                  the King of kings, 
 *                  Jesus Christ our Lord, in 
 *                  His word to our brother 
 *                  Nathanael in John 1:47-51 
 *                  and with the first mention 
 *                  in Holy Scriptures coming 
 *                  from Moses in his Genesis 
 *                  Chapter 28 account of 
 *                  Jacob's stone-pillow 
 *                  dream (28:12). 
 *
 *
 *                  5
 *
 *                  Last Modified: Saturday, August 15, 2026 @ 0420 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 *       Version :: 2.00.0001
 * Last Modified :: Tuesday, February 24, 2026 @ 04:20:01.120273 2026.
 *   Launch Date :: July 4, 2018 - Happy Independence Day from 
 *      (v1.0.0)                   my dog and I to you...wherever 
 *                                 and whenever you are. 
 *        Author :: Jonathan '5' Harris, CEO, CTO, Lead Full Stack 
 *                  Developer, and as of Q3 in 2025, Chief Creative 
 *                  here at eVifweb® 
 *                  jharris@eVifweb.com. eVifweb@gmail.com. 
 *           URI :: https://crnrstn.jony5.com
 *      Overview :: The CRNRSTN :: Lightsaber RoCEv2 
 *                  SOAP Services Layer, The CLR-SSL, 
 *                  is an advanced, open source, and 
 *                  distributed compute PHP 
 *                  framework providing: 
 *                  - a distributed and free 
 *                    instant messaging 
 *                    communications platform, 
 *                  - a distributed and free 
 *                    cloud-based file storage 
 *                    system with a built in 
 *                    photo gallery experience 
 *                    and with full social media 
 *                    integrations, and 
 *                  - a distributed and free, 
 *                    RAID style, schedulable, 
 *                    and RTM-automatable web 
 *                    site maintenance and 
 *                    back-up protocol with one 
 *                    click back-up recovery. 
 *
 *                  CRNRSTN :: is powered by eVifweb®
 *
 *                  CRNRSTN :: is powered by eCRM 
 *                             Strategy and Execution, Web 
 *                             Design & Development, and 
 *                             Only The Best Coffee. 
 *
 *
 *                  5
 *
 *                  Copyright © 2012-2027 eVifweb® development.
 *
 *                  All Rights Reserved.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 *   Description :: The CRNRSTN :: Lightsaber RoCEv2 
 *                  SOAP Services Layer, The CLR-SSL 
 *                  is an advanced open source PHP 
 *                  class library that will 
 *                  facilitate and spread (via a 
 *                  SOAP services layer powered by 
 *                  NuSOAP v1.124) the operations of 
 *                  a web application across 
 *                  multiple servers or environments 
 *                  (e.g. localhost, stage, preprod, 
 *                  and n+1 production or a 
 *                  distributed compute of IoT). 
 *
 *                  With this tool, data and 
 *                  functionality possessing 
 *                  characteristics that inherently 
 *                  create distinctions between one 
 *                  environment and another can all 
 *                  be managed through one framework 
 *                  for an entire application. 
 *
 *                  IP address restrictions, error 
 *                  logging profiles, and database 
 *                  authentication credentials are 
 *                  a few areas within an 
 *                  application's architecture that 
 *                  the CLR-SSL has been designed 
 *                  to excel within. 
 *
 *                  Once the CLR-SSL has been 
 *                  configured to support all of a 
 *                  web application's running 
 *                  servers, one can seamlessly RTM 
 *                  the codebase of the web site 
 *                  without having to modify the 
 *                  configuration to account for any 
 *                  unique and environmentally 
 *                  specific parameters. 
 *
 *                  Receive the benefit of a robust 
 *                  and polished framework that will 
 *                  bubble up logs from exception 
 *                  notifications to any output 
 *                  channel (email, hidden HTML 
 *                  comment, native default,...etc.) 
 *                  of one's own choosing. 
 *
 *                  Stand on top of the CLR-SSL in 
 *                  order to, for example, organize 
 *                  and strengthen the 
 *                  communications architecture of 
 *                  any web application. 
 *
 *                  By supporting many-to-one proxy 
 *                  messaging relationships between 
 *                  slaves and a master 
 *                  "communications server", 
 *                  the CLR-SSL is able to 
 *                  streamline and simplify the 
 *                  management of web application 
 *                  communications. 
 *
 *                  One can configure everything 
 *                  from SMTP credentials to the 
 *                  character count for line 
 *                  wrapping in the text versions 
 *                  of multi-part HTML email. 
 *
 *                  The CLR-SSL is the "King's Highway" 
 *                  (Num. 20:17) for communications 
 *                  between the kingdom of our Lord 
 *                  Jesus Christ in heaven, and the 
 *                  people in His earthly kingdom 
 *                  here below. 
 *
 * Numbers 20:17 :: Please let us pass through your 
 *                  land. We will not pass through 
 *                  field or through vineyard, nor 
 *                  will we drink water from any well; 
 *                  we will go along the King’s Highway, 
 *                  not turning aside to the right or 
 *                  to the left, until we pass through 
 *                  your territory. 
 *
 *                  https://text.recoveryversion.bible/04_Numbers_20.htm#Num20-17
 *
 *
 *                  5
 *
 *                  Last Modified: Tuesday, February 24, 2026 @ 0502 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 *       License :: MIT 
 *                  Permission is hereby granted, 
 *                  free of charge, to any person 
 *                  obtaining a copy of this 
 *                  software and associated 
 *                  documentation files (the 
 *                  "Software"), to deal in the 
 *                  Software without restriction, 
 *                  including without limitation 
 *                  the rights to use, copy, modify, 
 *                  merge, publish, distribute, 
 *                  sublicense, and/or sell copies 
 *                  of the Software, and to permit 
 *                  persons to whom the Software is 
 *                  furnished to do so, subject to 
 *                  the following conditions: 
 *
 *                  The above copyright notice and 
 *                  this permission notice shall be 
 *                  included in all copies or 
 *                  substantial portions of 
 *                  the Software. 
 *
 *                  THE SOFTWARE IS PROVIDED 
 *                  "AS IS", WITHOUT WARRANTY OF ANY 
 *                  KIND, EXPRESS OR IMPLIED, 
 *                  INCLUDING BUT NOT LIMITED TO THE 
 *                  WARRANTIES OF MERCHANTABILITY, 
 *                  FITNESS FOR A PARTICULAR PURPOSE 
 *                  AND NONINFRINGEMENT. IN NO EVENT 
 *                  SHALL THE AUTHORS OR COPYRIGHT 
 *                  HOLDERS BE LIABLE FOR ANY CLAIM, 
 *                  DAMAGES OR OTHER LIABILITY, 
 *                  WHETHER IN AN ACTION OF 
 *                  CONTRACT, TORT OR OTHERWISE, 
 *                  ARISING FROM, OUT OF OR IN 
 *                  CONNECTION WITH THE SOFTWARE OR 
 *                  THE USE OR OTHER DEALINGS IN 
 *                  THE SOFTWARE. 
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 */

namespace CRNRSTN;

/**
 * 
 *
 * CLASS DEFINITION :: crnrstn_int_flag_manager
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: Thursday, February 12, 2026 @ 2142 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber 
 *                     RoCEv2 SOAP Services Layer
 *                     (CLR-SSL) System Integer 
 *                     Flag Manager 
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber 
 *                     RoCEv2 SOAP Services Layer 
 *                     (CLR-SSL) System Integer 
 *                     Flag Manager will provide 
 *                     a full-stack integer 
 *                     management architecture 
 *                     to generate and maintain 
 *                     system validated integers 
 *                     for all 
 *                     - system supported string 
 *                       constants with just-in-
 *                       time integer definition, 
 *                     - globally defined system 
 *                       integer constants, and 
 *                     - the uniqueness in result 
 *                       set for all bitwise 
 *                       operations for all of 
 *                       the above.
 *
 *                     The CLR-SSL System Integer 
 *                     Flag Manager must unit test 
 *                     display output a report on its 
 *                     settings or "algorithm" used 
 *                     for integer generation.
 *
 *
 *                     5
 *
 *                     Thursday, February 12, 2026 @ 2143 hrs.
 *                     Last Modifed: Thursday, February 12, 2026 @ 2158 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * @package CRNRSTN
 * @version 2.00.0001 CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer.
 * @author Jonathan '5' Harris <jharris@eVifweb.com>
 * @copyright Copyright © 2012-2026 eVifweb® development All Rights Reserved.
 * @license https://crnrstn.jony5.com/licensing/ MIT
 * @link https://crnrstn.jony5.com/ CRNRSTN :: Project Website.
 * @link https://twitter.com/CRNRSTN_v2_0_0 CRNRSTN :: on Twitter.
 * @link http://evifweb.jony5.com/ eVifweb :: Corporate Sponsor.
 * @return object 
 * @access public
 *
 */
class crnrstn_int_flag_manager 
{ 

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function __construct()
    {

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Changed CRNRSTN_AUTHORIZE_ALL to 
     *       CRNRSTN_AUTHORIZE_ALL and 
     *       replaced all 
     * 
     *       CRNRSTN_AUTHORIZE_{channel id}'s
     *
     *       with: 
     *
     *       CRNRSTN_AUTHORIZE & 
     *       CRNRSTN_CHANNEL_{channel id}
     *
     *       5 :: Tuesday, March 10, 2026 @ 0341 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Removed 'CRNRSTN_SETTINGS_APACHE', 
     *       'CRNRSTN_SETTINGS_MYSQLI', 
     *       'CRNRSTN_SETTINGS_PHP', 
     *       'CRNRSTN_SETTINGS_CRNRSTN', 
     *       'CRNRSTN_SETTINGS_WORDPRESS', and 
     *       'CRNRSTN_SETTINGS_CLIENT'.
     *
     *       5 :: Tuesday, March 10, 2026 @ 0456 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Removed 'CRNRSTN_CREATIVE_EMBED'.
     *       5 :: Tuesday, March 10, 2026 @ 0513 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Removed CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL in
     *       favor of using the format:
     *
     *       CRNRSTN_LOG_PROXY & 
     *       CRNRSTN_LOG_{channel id}
     *
     *       This affects:
     *       CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL, 
     *       CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE, 
     *       CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE_FTP, 
     *       CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DEFAULT, 
     *       CRNRSTN_LOG_PROXY & CRNRSTN_LOG_ELECTRUM, 
     *       CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DATABASE, 
     *       CRNRSTN_LOG_PROXY & CRNRSTN_LOG_SSDTLA, and 
     *       CRNRSTN_LOG_PROXY & CRNRSTN_LOG_PSSDTLA. 
     *
     *       5 :: Tuesday, March 10, 2026 @ 0648 hrs. 
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Changed CRNRSTN_UI_FORM_INTEGRATION_PACKET 
     *       to CRNRSTN_PSSDTLA_PACKET. 
     *       5 :: Tuesday, March 10, 2026 @ 0711 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Changed CRNRSTN_SOAP_TUNNEL 
     *       and CRNRSTN_UI_SOAP_DATA_TUNNEL 
     *       to CRNRSTN_SOAP_TUNNEL. 
     *       5 :: Tuesday, March 10, 2026 @ 0722 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Changed CRNRSTN_JS_CSS_PROD_MIN to 
     *       CRNRSTN_PROD_MIN_JS_CSS.
     *       5 :: Tuesday, March 10, 2026 @ 0733 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Changed CRNRSTN_ASSET_MODE_BASE64 to 
     *       CRNRSTN_MODE_BASE64. 
     *       Changed CRNRSTN_MODE_PNG to 
     *       CRNRSTN_MODE_PNG. 
     *       Changed CRNRSTN_MODE_JPEG to 
     *       CRNRSTN_MODE_JPEG. 
     *       5 :: Tuesday, March 10, 2026 @ 0744 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Changed CRNRSTN_SYSTEM_EMAIL_IS_HTML to 
     *       CRNRSTN_EMAIL_MULTI_PART. 
     *       5 :: Tuesday, March 10, 2026 @ 0748 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Changed CRNRSTN_UI_TAG_ANALYTICS to 
     *       CRNRSTN_WEB_ANALYTICS. 
     *       Changed CRNRSTN_UI_TAG_ENGAGEMENT to 
     *       CRNRSTN_WEB_ENGAGEMENT. 
     *       5 :: Tuesday, March 10, 2026 @ 0751 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Changed CRNRSTN_IS_HTML to 
     *       CRNRSTN_BOOLEAN_HTML. 
     *       5 :: Tuesday, March 10, 2026 @ 0924 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Changed CRNRSTN_FAVICON to 
     *       CRNRSTN_ICO. 
     *       5 :: Tuesday, March 10, 2026 @ 0944 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Changed CRNRSTN_BOOLEAN_HTML to 
     *       CRNRSTN_BOOL_IS_HTML. 
     *       5 :: Tuesday, July 14, 2026 @ 0627 hrs.
     *
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Notes: CRNRSTN :: Lightsaber RoCEv2 
     *        SOAP Services Layer (CLR-SSL) 
     *        Organization of Architectural 
     *        Considerations (of the System) 
     *        Along an Unbounded Integer Plane. 
     *        
     *        CLR-SSL thoughts about Integers 
     *        according to it's own systems. 
     *        
     *        Note: We take a 32 bit OS 
     *        upper limit for max and min 
     *        integer bounds in system memory. 
     *        5 :: Friday, February 13, 2026 @ 2210 hrs.

    
    Currently, 603 Integers are 
    Defined as SUPER GLOBALS 
    in Bulk:

    File Extensions:
    'CRNRSTN_ICO', 
    'CRNRSTN_CSS', 
    'CRNRSTN_JS', 
    'CRNRSTN_IMG', 
    'CRNRSTN_HTML', 
    'CRNRSTN_HTM', 
    'CRNRSTN_SHTML',
    'CRNRSTN_SHTM', 
    'CRNRSTN_STM', 
    'CRNRSTN_XHTML', 
    'CRNRSTN_XML', 
    'CRNRSTN_XSLT', 
    'CRNRSTN_XUL', 
    'CRNRSTN_CSV',
    'CRNRSTN_TXT', 
    'CRNRSTN_SQL', 
    'CRNRSTN_DB', 
    'CRNRSTN_DS_STORE', 
    'CRNRSTN_DLL', 
    'CRNRSTN_BAT', 
    'CRNRSTN_PHP',
    'CRNRSTN_PHAR', 'CRNRSTN_PHTML', 'CRNRSTN_PHT', 'CRNRSTN_PHPS', 
    'CRNRSTN_AS', 'CRNRSTN_C', 'CRNRSTN_CC',
    'CRNRSTN_H', 'CRNRSTN_APS', 'CRNRSTN_ASAX', 'CRNRSTN_ASCX', 'CRNRSTN_ASMX', 
    'CRNRSTN_ASPX', 'CRNRSTN_CFC',
    'CRNRSTN_CMAKE', 'CRNRSTN_INI', 'CRNRSTN_CONFIG', 
    'CRNRSTN_CPP', 'CRNRSTN_CS', 
    'CRNRSTN_CSPROJ', 'CRNRSTN_INCR',
    'CRNRSTN_JWS', 'CRNRSTN_LICENSES', 'CRNRSTN_LICX', 'CRNRSTN_MANIFEST', 
    'CRNRSTN_NCB', 'CRNRSTN_PDB',
    'CRNRSTN_PROJDATA', 'CRNRSTN_RC', 'CRNRSTN_RC2', 'CRNRSTN_RESOURCES', 
    'CRNRSTN_RESX', 'CRNRSTN_SLN', 'CRNRSTN_SUO',
    'CRNRSTN_USER', 'CRNRSTN_VB', 'CRNRSTN_VBPROJ', 'CRNRSTN_VCPROJ',
    'CRNRSTN_WEBINFO', 'CRNRSTN_RTF', 'CRNRSTN_TEX',
    'CRNRSTN_JSON', 'CRNRSTN_ICS', 'CRNRSTN_TSV', 'CRNRSTN_JSONLD', 
    'CRNRSTN_MJS', 'CRNRSTN_JAR', 'CRNRSTN_ZIP',
    'CRNRSTN_ZIPX', 'CRNRSTN_BZ', 'CRNRSTN_BZ2', 
    'CRNRSTN_GZ', 'CRNRSTN_GZIP', 'CRNRSTN_GTAR', 'CRNRSTN_7Z',
    'CRNRSTN_EPUB', 'CRNRSTN_TAR', 'CRNRSTN_OTF', 
    'CRNRSTN_WOFF', 'CRNRSTN_WOFF2', 'CRNRSTN_TTF', 'CRNRSTN_ICO',
    'CRNRSTN_JPG', 'CRNRSTN_JPE', 'CRNRSTN_JPEG', 
    'CRNRSTN_JPG2', 'CRNRSTN_JIF', 'CRNRSTN_JFIF', 'CRNRSTN_JFI',
    'CRNRSTN_GIF', 'CRNRSTN_BMP', 
    'CRNRSTN_PNG', 'CRNRSTN_SVG', 'CRNRSTN_TIF', 
    'CRNRSTN_TIFF', 'CRNRSTN_WEBP',
    'CRNRSTN_PIC', 'CRNRSTN_PICT', 'CRNRSTN_AVIF', 'CRNRSTN_MID', 
    'CRNRSTN_MIDI', 'CRNRSTN_AAC', 'CRNRSTN_OGA',
    'CRNRSTN_MP1', 'CRNRSTN_MP2', 'CRNRSTN_M1A', 'CRNRSTN_M2A', 
    'CRNRSTN_MP3', 'CRNRSTN_MPGA', 'CRNRSTN_MPA',
    'CRNRSTN_MPV', 'CRNRSTN_MPG', 'CRNRSTN_RA', 'CRNRSTN_RAM', 
    'CRNRSTN_RMP', 'CRNRSTN_DAT', 'CRNRSTN_WAV',
    'CRNRSTN_WAVE', 'CRNRSTN_WMA', 'CRNRSTN_WMV', 'CRNRSTN_ASF', 
    'CRNRSTN_WM', 'CRNRSTN_WAX', 'CRNRSTN_WVX',
    'CRNRSTN_ASX', 'CRNRSTN_WMX', 'CRNRSTN_OGG', 'CRNRSTN_WEBA', 
    'CRNRSTN_3GP', 'CRNRSTN_3G2', 'CRNRSTN_OPUS',
    'CRNRSTN_M3U', 'CRNRSTN_OGV', 'CRNRSTN_WEBM', 'CRNRSTN_MP4', 
    'CRNRSTN_M4A', 'CRNRSTN_M4P', 'CRNRSTN_M4B',
    'CRNRSTN_M4R', 'CRNRSTN_M4V', 'CRNRSTN_MPE', 'CRNRSTN_MPEG', 
    'CRNRSTN_MPV2', 'CRNRSTN_M1V', 'CRNRSTN_M2V',
    'CRNRSTN_MOV', 'CRNRSTN_QT', 'CRNRSTN_QIF', 
    'CRNRSTN_QTI', 'CRNRSTN_QTIF', 'CRNRSTN_QTC', 'CRNRSTN_MOVIE',
    'CRNRSTN_MV', 'CRNRSTN_SWF', 'CRNRSTN_AVI', 
    'CRNRSTN_AVS', 'CRNRSTN_MJPG', 'CRNRSTN_TS', 'CRNRSTN_EOT',
    'CRNRSTN_ABW', 'CRNRSTN_ARC', 'CRNRSTN_AZW', 
    'CRNRSTN_BIN', 'CRNRSTN_PL', 'CRNRSTN_PLX', 'CRNRSTN_PM',
    'CRNRSTN_XS', 'CRNRSTN_POD', 'CRNRSTN_CGI', 'CRNRSTN_CMD', 
    'CRNRSTN_BTM', 'CRNRSTN_CDA', 'CRNRSTN_CSH',
    'CRNRSTN_ODT', 'CRNRSTN_ODP', 'CRNRSTN_ODS', 'CRNRSTN_PDF', 
    'CRNRSTN_WKS', 'CRNRSTN_WPS', 'CRNRSTN_WPD',
    'CRNRSTN_DOC', 'CRNRSTN_WORD', 'CRNRSTN_W6W', 'CRNRSTN_XLSX', 
    'CRNRSTN_PPTX', 'CRNRSTN_DOCX', 'CRNRSTN_DOCM',
    'CRNRSTN_DOTM', 'CRNRSTN_DOTX', 'CRNRSTN_PPSX', 'CRNRSTN_POTX', 
    'CRNRSTN_SLDX', 'CRNRSTN_VSD', 'CRNRSTN_MPKG',
    'CRNRSTN_OGX', 'CRNRSTN_RAR', 'CRNRSTN_SH', 'CRNRSTN_DWG', 
    'CRNRSTN_ARJ', 'CRNRSTN_ASD', 'CRNRSTN_ASN',
    'CRNRSTN_CCAD', 'CRNRSTN_DRW', 'CRNRSTN_DXF', 'CRNRSTN_UNV', 
    'CRNRSTN_IGES', 'CRNRSTN_IGS', 'CRNRSTN_HQX',
    'CRNRSTN_MDB', 'CRNRSTN_XLA', 'CRNRSTN_XLS', 'CRNRSTN_XLT', 
    'CRNRSTN_XLM', 'CRNRSTN_XLSM', 'CRNRSTN_XLSB',
    'CRNRSTN_XLAM', 'CRNRSTN_XLTM', 'CRNRSTN_XLW', 'CRNRSTN_POT', 
    'CRNRSTN_PPS', 'CRNRSTN_PPT', 'CRNRSTN_PPTM',
    'CRNRSTN_POTM', 'CRNRSTN_PPAM', 'CRNRSTN_PPSM', 'CRNRSTN_SLDM', 
    'CRNRSTN_PA', 'CRNRSTN_MPP', 'CRNRSTN_WRI',
    'CRNRSTN_ODA', 'CRNRSTN_FLA', 'CRNRSTN_FLV', 'CRNRSTN_AI', 
    'CRNRSTN_PSD', 'CRNRSTN_EPS', 'CRNRSTN_PS',
    'CRNRSTN_PART', 'CRNRSTN_PRT', 'CRNRSTN_SET', 'CRNRSTN_STL', 
    'CRNRSTN_SOL', 'CRNRSTN_ST', 'CRNRSTN_STEP',
    'CRNRSTN_STP', 'CRNRSTN_VDA', 'CRNRSTN_BCPIO', 'CRNRSTN_CPIO', 
    'CRNRSTN_DCR', 'CRNRSTN_DIR', 'CRNRSTN_DXR',
    'CRNRSTN_DVI', 'CRNRSTN_DWF', 'CRNRSTN_HDF', 'CRNRSTN_LATEX', 
    'CRNRSTN_MIF', 'CRNRSTN_CDF', 'CRNRSTN_NC',
    'CRNRSTN_SHAR', 'CRNRSTN_SIT', 'CRNRSTN_SV4CPIO', 'CRNRSTN_SV4CRC', 
    'CRNRSTN_TCL', 'CRNRSTN_TEXI',
    'CRNRSTN_TEXINFO', 'CRNRSTN_ROFF', 'CRNRSTN_T', 'CRNRSTN_TR', 
    'CRNRSTN_MAN', 'CRNRSTN_ME', 'CRNRSTN_MS',
    'CRNRSTN_USTAR', 'CRNRSTN_SRC', 'CRNRSTN_HLP', 'CRNRSTN_AU', 
    'CRNRSTN_SND', 'CRNRSTN_AIF', 'CRNRSTN_AIFC',
    'CRNRSTN_AIFF', 'CRNRSTN_VOC', 'CRNRSTN_IEF', 'CRNRSTN_RAS', 
    'CRNRSTN_PNM', 'CRNRSTN_PBM', 'CRNRSTN_PGM',
    'CRNRSTN_PPM', 'CRNRSTN_RGB', 'CRNRSTN_XBM', 'CRNRSTN_XPM', 
    'CRNRSTN_XWD', 'CRNRSTN_RTX', 'CRNRSTN_ETX',
    'CRNRSTN_SGM', 'CRNRSTN_SGML', 'CRNRSTN_VDO', 'CRNRSTN_VIV', 
    'CRNRSTN_VIVO', 'CRNRSTN_ICE', 'CRNRSTN_SVR',
    'CRNRSTN_WRL', 'CRNRSTN_VRT', 'CRNRSTN_EXE', 'CRNRSTN_BIT', 
    'CRNRSTN_PAGES', 'CRNRSTN_KEY', 'CRNRSTN_AFPHOTO',
    'CRNRSTN_AFDESIGN', 'CRNRSTN_CDR', 'CRNRSTN_CPT', 

    Third-Party Frameworks:
    'CRNRSTN_JS_FRAMEWORK_JQUERY',
    'CRNRSTN_JS_FRAMEWORK_JQUERY_3_7_0', 
    'CRNRSTN_JS_FRAMEWORK_JQUERY_3_6_1', 
    'CRNRSTN_JS_FRAMEWORK_JQUERY_2_2_4',
    'CRNRSTN_JS_FRAMEWORK_JQUERY_1_12_4', 
    'CRNRSTN_JS_FRAMEWORK_JQUERY_1_11_1', 
    'CRNRSTN_JS_FRAMEWORK_JQUERY_UI',
    'CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_13_2', 
    'CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_12_1',
    'CRNRSTN_JS_FRAMEWORK_JQUERY_MOBILE', 
    'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS',
    'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_11_3', 
    'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_10_0',
    'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_PLUS_JQUERY', 
    'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_03_3',
    'CRNRSTN_JS_FRAMEWORK_REACT_CDN', 
    'CRNRSTN_JS_FRAMEWORK_REACT_CDN_18_2_0', 
    'CRNRSTN_JS_FRAMEWORK_REACT_DOM_CDN',
    'CRNRSTN_JS_FRAMEWORK_REACT_DOM_CDN_18_2_0', 
    'CRNRSTN_JS_FRAMEWORK_MITHRIL_CDN',
    'CRNRSTN_JS_FRAMEWORK_MITHRIL_CDN_2_2_2', 
    'CRNRSTN_JS_FRAMEWORK_BACKBONE', 
    'CRNRSTN_JS_FRAMEWORK_BACKBONE_1_4_1',
    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_UMD', 
    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD',
    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_ESM', 
    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM',
    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_UMD_EDGE', 
    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_ESM_EDGE',
    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_CDN', 
    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_CDN',
    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_UNPKG', 
    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_UNPKG',
    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_PAGECDN', 
    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_PAGECDN',
    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_CDNJS', 
    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_CDNJS',
    'CRNRSTN_JS_FRAMEWORK_PROTOTYPE', 
    'CRNRSTN_JS_FRAMEWORK_PROTOTYPE_1_7_3', 
    'CRNRSTN_JS_FRAMEWORK_SCRIPTACULOUS',
    'CRNRSTN_JS_FRAMEWORK_PROTOTYPE_MOOFX', 
    'CRNRSTN_JS_FRAMEWORK_SWFOBJECT_DOT_JS',
    'CRNRSTN_JS_FRAMEWORK_MOOTOOLS_MORE', 
    'CRNRSTN_JS_FRAMEWORK_MOOTOOLS_MORE_1_6_0',
    'CRNRSTN_JS_FRAMEWORK_MOOTOOLS_CORE', 
    'CRNRSTN_JS_FRAMEWORK_MOOTOOLS_CORE_1_6_0', 
    'CRNRSTN_JS_MAIN', 
    'CRNRSTN_CSS_FRAMEWORK_SIMPLE_GRID', 
    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM', 
    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_24COL', 
    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_16COL', 
    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_12COL', 
    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_24COL_RTL', 
    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_16COL_RTL', 
    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_12COL_RTL', 
    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_RTL', 
    'CRNRSTN_CSS_FRAMEWORK_FOUNDATION',
    'CRNRSTN_CSS_FRAMEWORK_FOUNDATION_6_7_5', 
    'CRNRSTN_CSS_FRAMEWORK_HTML5_BOILERPLATE', 
    'CRNRSTN_CSS_FRAMEWORK_HTML5_BOILERPLATE_8_0_0', 
    'CRNRSTN_CSS_FRAMEWORK_RESPONSIVE_GRID_SYSTEM', 
    'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC', 
    'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RESET', 
    'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RESET_RTL', 
    'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RTL', 
    'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_ADAPT', 
    'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_ADAPT_RTL', 
    'CRNRSTN_CSS_FRAMEWORK_DEAD_SIMPLE_GRID', 
    'CRNRSTN_CSS_FRAMEWORK_SKELETON', 
    'CRNRSTN_CSS_FRAMEWORK_RWDGRID', 
    'CRNRSTN_CSS_FRAMEWORK_RWDGRID_2_0', 
    'CRNRSTN_CSS_FRAMEWORK_THIS_IS_DALLAS_SIMPLE_GRID', 
    'CRNRSTN_CSS_MAIN_DESKTOP', 
    'CRNRSTN_CSS_MAIN_TABLET', 
    'CRNRSTN_CSS_MAIN_MOBILE', 

    x---'CRNRSTN_BASE64_GIF', 
    x---'CRNRSTN_BASE64_PNG', 
    x---'CRNRSTN_BASE64_JPEG', 

    x---'CRNRSTN_MODE_BASE64', 
    x---'CRNRSTN_MODE_PNG', 
    x---'CRNRSTN_MODE_JPEG', 

    x---'CRNRSTN_INPUT_IS_FILE_IMAGE', 
    x---'CRNRSTN_INPUT_IS_FILE_IMAGE_PNG',
    x---'CRNRSTN_INPUT_IS_FILE_IMAGE_JPEG', 
    x---'CRNRSTN_INPUT_IS_FILE_IMAGE_GIF', 
    x---'CRNRSTN_INPUT_IS_FILE_DOCUMENT',
    x---'CRNRSTN_INPUT_IS_FILE_ZIP', 

    CLR-SSL System Debug / Modes:
    'CRNRSTN_DEBUG_OFF', 
    'CRNRSTN_DEBUG_SYSLOG', 
    'CRNRSTN_DEBUG_ON', 
    'CRNRSTN_PHPMAILER_DEBUG_OFF', 
    'CRNRSTN_PHPMAILER_DEBUG_CLIENT', 
    'CRNRSTN_PHPMAILER_DEBUG_SERVER', 
    'CRNRSTN_PHPMAILER_DEBUG_CONNECTION', 
    'CRNRSTN_PHPMAILER_DEBUG_LOWLEVEL', 
    'CRNRSTN_WORDPRESS_DEBUG', 
    'CRNRSTN_CLIENT_SSDTLA', 

    UI - HTML Comment 
    Injection Policies:
    'CRNRSTN_HTML_COMMENTS_FULL', 
    'CRNRSTN_HTML_COMMENTS_ENLARGED_PHYLACTERIES', 
    'CRNRSTN_HTML_COMMENTS_CDN_STABILITY_CONTROL_ENABLED', 
    'CRNRSTN_HTML_COMMENTS_NONE', 
    'CRNRSTN_HTML_COMMENTS_SILENT_GOLD', 

    CLR-SSL System Data Types:
    (int) self::$R_data['int_flag']['R_string']
    (int) self::$R_data['int_flag']['R_int']
    (int) self::$R_data['int_flag']['R_integer']
    (int) self::$R_data['int_flag']['R_bool']
    (int) self::$R_data['int_flag']['R_boolean']
    (int) self::$R_data['int_flag']['R_float']
    (int) self::$R_data['int_flag']['R_double']
    (int) self::$R_data['int_flag']['R_array']
    (int) self::$R_data['int_flag']['R_object']
    (int) self::$R_data['int_flag']['R_resource']
    (int) self::$R_data['int_flag']['R_resource_closed']
    (int) self::$R_data['int_flag']['R_unknown_type']
    (int) self::$R_data['int_flag']['R_null']
    (int) self::$R_data['int_flag']['R_mixed']

    CLR-SSL System 
    Email Is Multi-
    Part HTML
    (int) self::$R_data['int_flag']['R_bool_is_html']

    (int) self::$R_data['int_flag']['R_account']
    (int) self::$R_data['int_flag']['R_ip']

    'CRNRSTN_INPUT_OPTIONAL',
    'CRNRSTN_INPUT_REQUIRED', 
    'CRNRSTN_INPUT_IS_PASSWORD', 
    'CRNRSTN_INPUT_IS_EMAIL', 
    'CRNRSTN_INPUT_CHAR_RESTRICTIONS',
    'CRNRSTN_INPUT_CHAR_LIMITS', 

    'CRNRSTN_DB_LOG_TABLE_NO_ROLLOVER', 
    'CRNRSTN_DB_LOG_TABLE_SHARD_SIZE',
    'CRNRSTN_DB_LOG_TABLE_ROLLOVER_MAX_RECORDS', 

    'CRNRSTN_DATABASE', 
    'CRNRSTN_DATABASE_CONNECTION',
    'CRNRSTN_DATABASE_QUERY', 
    'CRNRSTN_DATABASE_QUERY_SILO', 
    'CRNRSTN_DATABASE_QUERY_DYNAMIC',
    'CRNRSTN_DATABASE_RESULT', 

    'CRNRSTN_GABRIEL', 

    'CRNRSTN_SMTP_AUTHENTICATION', 

    'CRNRSTN_EMAIL', 
    'CRNRSTN_PASSWORD',

    'CRNRSTN_ELECTRUM', 
    'CRNRSTN_ELECTRUM_THREAD', 
    'CRNRSTN_ELECTRUM_COMM', 
    'CRNRSTN_ELECTRUM_FTP',
    'CRNRSTN_ELECTRUM_LOCALDIR', 

    'CRNRSTN_FILE_MANAGEMENT', 
    'CRNRSTN_FILE_LOCALDIR_MOVE', 
    'CRNRSTN_FILE_RECEIVE', 
    'CRNRSTN_FILE_FTP_SEND',
    'CRNRSTN_FILE_FTP_RECEIVE', 
    'CRNRSTN_FILE_SOAP_SEND', 
    'CRNRSTN_FILE_SOAP_RECEIVE', 
    'CRNRSTN_FILE_CURL_SEND',
    'CRNRSTN_FILE_CURL_RECEIVE', 

    'CRNRSTN_PROXY_KINGS_HIGHWAY', 
    'CRNRSTN_PROXY_EMAIL', 
    'CRNRSTN_PROXY_ELECTRUM', 
    'CRNRSTN_PROXY_AUTHENTICATE',

    CLR-SSL UI Color Themes:
    'CRNRSTN_UI_PHPNIGHT',
    'CRNRSTN_UI_DARKNIGHT', 
    'CRNRSTN_UI_PHP', 
    'CRNRSTN_UI_GREYSKY', 
    'CRNRSTN_UI_HTML', 
    'CRNRSTN_UI_DAYLIGHT',
    'CRNRSTN_UI_FEATHER', 
    'CRNRSTN_UI_GLASS_LIGHT_COPY', 
    'CRNRSTN_UI_GLASS_DARK_COPY', 
    'CRNRSTN_UI_WOOD',
    'CRNRSTN_UI_TERMINAL', 
    'CRNRSTN_UI_RANDOM', 

    CLR-SSL DOM Injections:
    'CRNRSTN_WEB_ANALYTICS', 
    'CRNRSTN_WEB_ENGAGEMENT',
    'CRNRSTN_UI_COOKIE_PREFERENCE', 
    'CRNRSTN_UI_COOKIE_YESNO',
    'CRNRSTN_UI_COOKIE_NOTICE', 
    'CRNRSTN_UI_INTERACT', 
    'CRNRSTN_PSSDTLA_PACKET', 
    'CRNRSTN_SOAP_TUNNEL',
    'CRNRSTN_SOAP_TUNNEL', 

    (int) self::$R_data['int_flag']['R_icy_bitmask'] // 'CRNRSTN_ICY_BITMASK', 

    'CRNRSTN_BASE64', 

    (int) self::$R_data['int_flag']['R_js_css_min_mode'] // 'CRNRSTN_PROD_MIN_JS_CSS', 

    self::$R_data['int_flag']['R_fs_map'] // 'CRNRSTN_ASSET_MAPPING', 
    self::$R_data['int_flag']['R_fs_map_proxy'] // 'CRNRSTN_ASSET_MAPPING_PROXY', 

    (int) self::$R_data['int_flag']['R_fs_map_favicon'] // 'CRNRSTN_FAVICON_ASSET_MAPPING', 
    (int) self::$R_data['int_flag']['R_fs_map_system'] // 'CRNRSTN_SYSTEM_IMG_ASSET_MAPPING', 
    (int) self::$R_data['int_flag']['R_fs_map_social'] // 'CRNRSTN_SOCIAL_IMG_ASSET_MAPPING', 
    (int) self::$R_data['int_flag']['R_fs_map_meta'] // 'CRNRSTN_META_IMG_ASSET_MAPPING',

    (int) self::$R_data['int_flag']['R_fs_map_js_lib'] // 'CRNRSTN_JS_LIB_ASSET_MAPPING', 
    'CRNRSTN_CSS_LIB_ASSET_MAPPING', 

    'CRNRSTN_EMAIL_MULTI_PART', 

    CLR-SSL Log Output Profiles:
    'CRNRSTN_LOG_NONE', 
    'CRNRSTN_LOG_ALL', 
    'CRNRSTN_LOG_EMAIL', 
    'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL', 
    'CRNRSTN_LOG_FILE',
    'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE', 
    'CRNRSTN_LOG_FILE_FTP', 
    'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE_FTP', 
    'CRNRSTN_LOG_SCREEN_TEXT',
    'CRNRSTN_LOG_SCREEN', 
    'CRNRSTN_LOG_SCREEN_HTML', 
    'CRNRSTN_LOG_SCREEN_HTML_HIDDEN', 
    'CRNRSTN_LOG_DEFAULT',
    'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DEFAULT', 
    'CRNRSTN_LOG_ELECTRUM', 
    'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_ELECTRUM', 
    'CRNRSTN_LOG_DATABASE',
    'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DATABASE', 
    'CRNRSTN_LOG_SSDTLA', 
    'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_SSDTLA', 
    'CRNRSTN_LOG_PSSDTLA',
    'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_PSSDTLA', 
    'CRNRSTN_LOG_SOAP', 


    @define('CRNRSTN_LOG_SOAP', (int) _crnrstn_int_return('CRNRSTN_LOG_SOAP'));
    @define('CRNRSTN_LOG_PROXY', (int) _crnrstn_int_return('CRNRSTN_LOG_PROXY'));
    @define('CRNRSTN_LOG_EMAIL', (int) _crnrstn_int_return('CRNRSTN_LOG_EMAIL'));
    @define('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL', (int) _crnrstn_int_return('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL'));
    @define('CRNRSTN_LOG_FILE', (int) _crnrstn_int_return('CRNRSTN_LOG_FILE'));
    @define('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE', (int) _crnrstn_int_return('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE'));
    @define('CRNRSTN_LOG_FILE_FTP', (int) _crnrstn_int_return('CRNRSTN_LOG_FILE_FTP'));
    @define('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE_FTP', (int) _crnrstn_int_return('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE_FTP'));
    @define('CRNRSTN_LOG_SCREEN_TEXT', (int) _crnrstn_int_return('CRNRSTN_LOG_SCREEN_TEXT'));
    @define('CRNRSTN_LOG_SCREEN', (int) _crnrstn_int_return('CRNRSTN_LOG_SCREEN'));
    @define('CRNRSTN_LOG_SCREEN_HTML', (int) _crnrstn_int_return('CRNRSTN_LOG_SCREEN_HTML'));
    @define('CRNRSTN_LOG_SCREEN_HTML_HIDDEN', (int) _crnrstn_int_return('CRNRSTN_LOG_SCREEN_HTML_HIDDEN'));
    @define('CRNRSTN_LOG_DEFAULT', (int) _crnrstn_int_return('CRNRSTN_LOG_DEFAULT'));
    @define('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DEFAULT', (int) _crnrstn_int_return('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DEFAULT'));
    @define('CRNRSTN_LOG_ELECTRUM', (int) _crnrstn_int_return('CRNRSTN_LOG_ELECTRUM'));
    @define('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_ELECTRUM', (int) _crnrstn_int_return('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_ELECTRUM'));
    @define('CRNRSTN_LOG_DATABASE', (int) _crnrstn_int_return('CRNRSTN_LOG_DATABASE'));
    @define('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DATABASE', (int) _crnrstn_int_return('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DATABASE'));
    @define('CRNRSTN_LOG_SSDTLA', (int) _crnrstn_int_return('CRNRSTN_LOG_SSDTLA'));
    @define('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_SSDTLA', (int) _crnrstn_int_return('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_SSDTLA'));
    @define('CRNRSTN_LOG_PSSDTLA', (int) _crnrstn_int_return('CRNRSTN_LOG_PSSDTLA'));
    @define('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_PSSDTLA', (int) _crnrstn_int_return('CRNRSTN_LOG_PROXY & CRNRSTN_LOG_PSSDTLA'));



    CLR-SSL Device Types:
    'CRNRSTN_DESKTOP', 
    'CRNRSTN_TABLET', 
    'CRNRSTN_MOBILE', 
    'CRNRSTN_SOAP_SERVER', 
    'CRNRSTN_SOAP_CLIENT',

    'CRNRSTN_SOAP', 

    CLR-SSL MC-DDO Channels:
    'CRNRSTN_CHANNEL_ALL', 
    'CRNRSTN_CHANNEL_GET', 
    'CRNRSTN_CHANNEL_POST', 
    'CRNRSTN_CHANNEL_COOKIE', 
    'CRNRSTN_CHANNEL_SESSION', 
    'CRNRSTN_CHANNEL_DATABASE', 
    'CRNRSTN_CHANNEL_SSDTLA', 
    'CRNRSTN_CHANNEL_PSSDTLA', 
    'CRNRSTN_CHANNEL_FORM', 
    'CRNRSTN_CHANNEL_RUNTIME', 
    'CRNRSTN_CHANNEL_SOAP', 
    'CRNRSTN_CHANNEL_RDMA', 
    'CRNRSTN_CHANNEL_FILE', 

    CLR-SSL MC-DDO Channels:
    self::$R_data['int_flag']['R_authorize_all'] // 'CRNRSTN_AUTHORIZE_ALL', 
    'CRNRSTN_AUTHORIZE', 

    'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_GET',
    'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_POST', 
    'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_COOKIE', 
    'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION', 
    'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_DATABASE',
    'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SSDTLA', 
    'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_PSSDTLA', 
    'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME', 
    'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SOAP',
    'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RDMA',
    'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_FILE', 

    'CRNRSTN_AUTHORIZE & CRNRSTN_EMAIL', 
    'CRNRSTN_AUTHORIZE & CRNRSTN_USERNAME', 
    'CRNRSTN_AUTHORIZE & CRNRSTN_PASSWORD', 

    'CRNRSTN_ENCRYPT_TUNNEL', 
    'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_GET', 
    'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_POST',
    'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_DATABASE', 
    ?---'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SESSION', 
    'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_COOKIE', 
    'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP',
    ?---'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_RDMA',
    'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_FILE', 
    'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_FORM', 
    'CRNRSTN_ENCRYPT_OERSL', 

    'CRNRSTN_RESOURCE_ALL', 
    'CRNRSTN_RESOURCE_BASSDRIVE',
    'CRNRSTN_RESOURCE_NATIONAL_WEATHER_SERVICE', 
    'CRNRSTN_RESOURCE_CSS_VALIDATOR', 
    'CRNRSTN_RESOURCE_DOCUMENTATION',
    'CRNRSTN_RESOURCE_DEEP_LINK', 
    'CRNRSTN_RESOURCE_IMAGE', 
    'CRNRSTN_RESOURCE_DOCUMENT',
    'CRNRSTN_RESOURCE_OPENSOURCE', 
    'CRNRSTN_RESOURCE_NEWS_SYNDICATION', 
    'CRNRSTN_RESOURCE_ELECTRUM',
    'CRNRSTN_RESOURCE_THIRDPARTY', 
    'CRNRSTN_RESOURCE_FOOTER', 
    'CRNRSTN_PERFORMANCE_MONITOR', 
    'CRNRSTN_IP_SECURITY', 
    'CRNRSTN_CSS_EMAIL_CLIENT_VALIDATE'


    'CRNRSTN_HTTP_REDIRECT', 
    'CRNRSTN_HTTPS_REDIRECT',

    'CRNRSTN_HTTP_DATA_RETURN', 
    'CRNRSTN_HTTPS_DATA_RETURN', 
    'CRNRSTN_JSON_RETURN', 
    'CRNRSTN_XML_RETURN',
    'CRNRSTN_SOAP_RETURN', 
    'CRNRSTN_HTML_TEXT_RETURN', 
    'CRNRSTN_DOCUMENT_FILE_RETURN', 

    'CRNRSTN_SERVER_RESPONSE_CODE',
    'CRNRSTN_RESPONSE_REPORT', 

    CLR-SSL System Error Flags:
    'CRNRSTN_BARNEY', 
    'CRNRSTN_BARNEY_DATABASE', 
    'CRNRSTN_BARNEY_FILE',
    'CRNRSTN_BARNEY_FTP', 
    'CRNRSTN_BARNEY_ELECTRUM', 
    'CRNRSTN_BARNEY_GABRIEL', 
    'CRNRSTN_BARNEY_DISK',
    'CRNRSTN_BARNEY_RDMA', 
    'CRNRSTN_BARNEY_UGC', 


    5 :: Friday, February 13, 2026 @ 2332 hrs.
    Last Modifed: Friday, May 8, 2026 @ 2003 hrs.

    */

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function __destruct()
    {

    }

}