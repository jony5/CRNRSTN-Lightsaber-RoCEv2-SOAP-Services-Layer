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
 * R :: Content Pending. 
 *
 * RUNTIME EXECUTABLE :: /_R/_config/config.integer_constants/crnrstn.constants_load.runtime_exe.php
 * EXECUTABLE VERSION :: 1.00.0000
 * DATE               :: Monday, July 22, 2024 @ 0947 hrs.
 * AUTHOR             :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                :: http://evifweb.jony5.com/
 * TITLE              :: The CRNRSTN :: Lightsaber
 *                       SOAP Services Layer Integer
 *                       Constants Initialization
 *                       Control Runtime Executable
 * DESCRIPTION        :: Initialize all globally defined
 *                       system integer constants for
 *                       the CRNRSTN :: Lightsaber SOAP
 *                       Services Layer.
 *
 *                       This CRNRSTN :: Lightsaber
 *                       runtime executable operates
 *                       in conjunction with a globally
 *                       defined system function,
 *                       _crnrstn_int_return(),
 *                       that will return the
 *                       official integer value
 *                       for every integer constant
 *                       defined within the rich
 *                       and digitally enhanced
 *                       (or if more pessimistic,
 *                       the digitally shackled)
 *                       eco-system of globally
 *                       accessible system resources
 *                       under stewardship of the
 *                       CRNRSTN :: Lightsaber SOAP
 *                       Services Layer.
 *
 *
 *                       5
 *
 *                       Monday, July 22, 2024 @ 0953 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE            :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * oCRNRSTN takes the place 
 * of (and internalizes) 
 * $oCRNRSTN_USR as 
 * "the handle". 
 *
 *
 * 5 ::
 *
 * Tuesday, August 16, 2022 @ 0131 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Added CRNRSTN_AUTHORIZE_ISEMAIL and 
 *       CRNRSTN_AUTHORIZE & CRNRSTN_PASSWORD.
 *       5 :: Tuesday, August 16, 2022 @ 2333 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Removed the globally defined integer 
 *       constants, 'CRNRSTN_AUTHORIZE_ISEMAIL' 
 *       and 'CRNRSTN_AUTHORIZE_ISPASSWORD' 
 *       in favor of using: 
 *
 *       (int) CRNRSTN_AUTHORIZE & 
 *       (int) CRNRSTN_EMAIL
 *
 *       (int) CRNRSTN_AUTHORIZE & 
 *       (int) CRNRSTN_PASSWORD
 *
 *       5 :: Tuesday, March 10, 2026 @ 0458 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Added the globally defined 
 *       'CRNRSTN_USERNAME' integer 
 *       constant to the CLR-SSL which 
 *       will be supported and enforced 
 *       in the distributed compute 
 *       application by an enterprise 
 *       licensing (MIT) architecture that 
 *       will be set up and maintained 
 *       by eVifweb®.
 *       5 :: Saturday, March 14, 2026 @ 0255 hrs.
 *
 */
/*
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Changed the function/file name 
 *       from:
 *
 *       _crnrstn_constants_initialize() and 
 *       crnrstn.integer_return.function.php
 *
 *       to
 *
 *       _crnrstn_int_return() and 
 *       crnrstn.integer_return.function.php.
 *
 *       5 :: Tuesday, March 10, 2026 @ 0808 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Changed the int constant names 
 *       from:
 *       
 *       (int) CRNRSTN_1_TO_1_SESSION_LOAD
 *       (int) CRNRSTN_TTL_EXPIRE_LOAD
 *       (int) CRNRSTN_1_TO_1_PAGE_LOAD
 * 
 *       to
 *       
 *       (int) CRNRSTN_LOAD_1_TO_1_SESSION
 *       (int) CRNRSTN_LOAD_ON_TTL_EXPIRE
 *       (int) CRNRSTN_LOAD_1_TO_1_REQUEST
 *       5 :: Tuesday, April 7, 2026 @ 0500 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Added a new architecture for 
 *       resource loading:
 *       CRNRSTN_LOAD_MANY_TO_1_REQUEST.
 *       5 :: Tuesday, April 7, 2026 @ 0509 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Renamed $CRNRSTN_CONSTANTS_ARRAY to 
 *       $R_int_const in 
 *       crnrstn.constants_load.runtime_exe.php.
 *       5 :: Tuesday, April 7, 2026 @ 0643 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Note: Touchpoints for the successful 
 *       installation of a new globally 
 *       defined CRNRSTN :: Lightsaber 
 *       RoCEv2 SOAP Services Layer (CLR-SSL)
 *       system integer constant that will
 *       be fully integrated and recognized 
 *       by the system.
 *
 *       TLDR;
 *       Here is where to look in the 
 *       framework file system when 
 *       adding new globally defined 
 *       integer constants to the CLR-SSL. 
 *
 *
 *       5
 *
 *       Monday, July 1, 2024 @ 2303 hrs.
 *       Last Modified: Saturday, March 14, 2026 @ "01" 0234 hrs.
 *
 *       "01010101...split the atom...Oh, 
 *       Oh, Oh, Oh. You know what I mean. 
 *
 *       Yeah, you know what I mean: 
 *       "Oh, Oh, Oh"... 
 *       Yeah, you know what 
 *       I mean..."Oh"...yeah. ;) 
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Moved resource loading 
 *       architectures out of 
 *       crnrstn.constants_load.runtime_exe.php 
 *       and into the crnrstn 
 *       class to get ahead of the 
 *       CLR-SSL dependencies. 
 *
 *       Architectures:
 *       CRNRSTN_LOAD_MANY_TO_1_REQUEST 
 *       CRNRSTN_LOAD_1_TO_1_REQUEST 
 *       CRNRSTN_LOAD_1_TO_1_SESSION 
 *       CRNRSTN_LOAD_ON_TTL_EXPIRE 
 *
 *       5 :: Wednesday, April 8, 2026 @ 1843 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edits:
 * 'CRNRSTN_CHANNEL_SESSION' => 0, // Moved to crnrstn registry_boot. 5 :: Thursday, April 23, 2026 @ 0022 hrs.
 * 'CRNRSTN_BOOL_IS_HTML' => 0,    // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0606 hrs.
 * 'CRNRSTN_ICY_BITMASK' => 0,     // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0606 hrs.
 * 'CRNRSTN_SOAP_TUNNEL' => 0,     // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0605 hrs.
 * 'CRNRSTN_STRING' => 0,          // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0603 hrs.
 * 'CRNRSTN_INT' => 0,             // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0622 hrs.
 * 'CRNRSTN_INTEGER' => 0,         // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0604 hrs.
 * 'CRNRSTN_BOOL' => 0,            // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0604 hrs.
 * 'CRNRSTN_BOOLEAN' => 0,         // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0604 hrs.
 * 'CRNRSTN_FLOAT' => 0,           // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0622 hrs.
 * 'CRNRSTN_DOUBLE' => 0,          // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0622 hrs.
 * 'CRNRSTN_ARRAY' => 0,           // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0622 hrs.
 * 'CRNRSTN_OBJECT' => 0,          // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0622 hrs.
 * 'CRNRSTN_RESOURCE' => 0,        // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0622 hrs.
 * 'CRNRSTN_RESOURCE_CLOSED' => 0, // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0621 hrs.
 * 'CRNRSTN_UNKNOWN_TYPE' => 0,    // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0621 hrs.
 * 'CRNRSTN_NULL' => 0,            // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0623 hrs.
 * 'CRNRSTN_MIXED' => 0,           // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0623 hrs.
 * 'CRNRSTN_PROD_MIN_JS_CSS' => 0, // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0607 hrs.
 * 'CRNRSTN_CSS_LIB_ASSET_MAPPING' => 0,  // Moved to crnrstn registry_boot. 5 :: Friday, May 1, 2026 @ 0607 hrs.
 * 'CRNRSTN_PHPMAILER_DEBUG_OFF' => 0,    // Moved to crnrstn registry_boot. 5 :: Saturday, May 9, 2026 @ 1354 hrs.
 * 'CRNRSTN_PHPMAILER_DEBUG_CLIENT' => 0, // Moved to crnrstn registry_boot. 5 :: Saturday, May 9, 2026 @ 1354 hrs.
 * 'CRNRSTN_PHPMAILER_DEBUG_SERVER' => 0, // Moved to crnrstn registry_boot. 5 :: Saturday, May 9, 2026 @ 1354 hrs.
 * 'CRNRSTN_PHPMAILER_DEBUG_CONNECTION' => 0, // Moved to crnrstn registry_boot. 5 :: Saturday, May 9, 2026 @ 1354 hrs.
 * 'CRNRSTN_PHPMAILER_DEBUG_LOWLEVEL' => 0,   // Moved to crnrstn registry_boot. 5 :: Saturday, May 9, 2026 @ 1354 hrs.
 * 'CRNRSTN_WORDPRESS_DEBUG' => 0, // Moved to crnrstn registry_boot. 5 :: Saturday, May 9, 2026 @ 1354 hrs.
 * 'CRNRSTN_DEBUG_OFF' => 0,       // Moved to crnrstn registry_boot. 5 :: Saturday, May 9, 2026 @ 1354 hrs.
 * 'CRNRSTN_DEBUG_SYSLOG' => 0,    // Moved to crnrstn registry_boot. 5 :: Saturday, May 9, 2026 @ 1354 hrs.
 * 'CRNRSTN_DEBUG_ON' => 0,        // Moved to crnrstn registry_boot. 5 :: Saturday, May 9, 2026 @ 1354 hrs.
 * 'CRNRSTN_MODE_BASE64' => 0,     // Moved to crnrstn registry_boot. 5 :: Tuesday, May 26, 2026 @ 0843 hrs.
 * 'CRNRSTN_MODE_PNG' => 0,        // Moved to crnrstn registry_boot. 5 :: Tuesday, May 26, 2026 @ 0843 hrs.
 * 'CRNRSTN_MODE_JPEG' => 0,       // Moved to crnrstn registry_boot. 5 :: Tuesday, May 26, 2026 @ 0843 hrs.
 * 'CRNRSTN_UI_PHPNIGHT' => 0,     // Moved to crnrstn registry_boot. 5 :: Tuesday, May 26, 2026 @ 0843 hrs.
 * 'CRNRSTN_UI_DARKNIGHT' => 0,       ^
 * 'CRNRSTN_UI_PHP' => 0,             ^   
 * 'CRNRSTN_UI_GREYSKY' => 0,         ^
 * 'CRNRSTN_UI_HTML' => 0,            ^
 * 'CRNRSTN_UI_DAYLIGHT' => 0,        ^
 * 'CRNRSTN_UI_FEATHER' => 0,         ^
 * 'CRNRSTN_UI_GLASS_LIGHT_COPY' => 0,^
 * 'CRNRSTN_UI_GLASS_DARK_COPY' => 0, ^
 * 'CRNRSTN_UI_WOOD' => 0,            ^
 * 'CRNRSTN_UI_TERMINAL' => 0,        ^
 * 'CRNRSTN_UI_RANDOM' => 0,          ^
 * 'CRNRSTN_AUTHORIZE_ALL' => 0,   // Deprecated. 5 :: Saturday, July 11, 2026 @ 0003 hrs.
 * 'CRNRSTN_AUTHORIZE' => 0,       // Deprecated. 5 :: Saturday, July 11, 2026 @ 0003 hrs.
 * 'CRNRSTN_CHANNEL_ALL' => 0,     // Deprecated. 5 :: Saturday, July 11, 2026 @ 0003 hrs.
 * 'CRNRSTN_CHANNEL_GET' => 0,     // Deprecated. 5 :: Saturday, July 11, 2026 @ 0003 hrs.
 * 'CRNRSTN_CHANNEL_POST' => 0,    // Deprecated. 5 :: Saturday, July 11, 2026 @ 0003 hrs.
 * 'CRNRSTN_CHANNEL_COOKIE' => 0,  // Deprecated. 5 :: Saturday, July 11, 2026 @ 0003 hrs.
 * 'CRNRSTN_CHANNEL_DATABASE' => 0,// Deprecated. 5 :: Saturday, July 11, 2026 @ 0003 hrs.
 * 'CRNRSTN_CHANNEL_SSDTLA' => 0,  // Deprecated. 5 :: Saturday, July 11, 2026 @ 0003 hrs.
 * 'CRNRSTN_CHANNEL_PSSDTLA' => 0, // Deprecated. 5 :: Saturday, July 11, 2026 @ 0003 hrs.
 * 'CRNRSTN_CHANNEL_RUNTIME' => 0, // Deprecated. 5 :: Saturday, July 11, 2026 @ 0003 hrs.
 * 'CRNRSTN_CHANNEL_SOAP' => 0,    // Deprecated. 5 :: Saturday, July 11, 2026 @ 0003 hrs.
 * 'CRNRSTN_CHANNEL_FILE' => 0,    // Deprecated. 5 :: Saturday, July 11, 2026 @ 0003 hrs.
 * 'CRNRSTN_CHANNEL_FORM' => 0,    // Deprecated. 5 :: Saturday, July 11, 2026 @ 0003 hrs.
 * 'CRNRSTN_CHANNEL_OERSL' => 0,   // Deprecated. 5 :: Saturday, July 11, 2026 @ 0003 hrs.
 * 'CRNRSTN_ASSET_MAPPING' => 0,   // Moved to crnrstn registry_boot. 5 :: Tuesday, July 14, 2026 @ 0216 hrs.
 * 'CRNRSTN_ASSET_MAPPING_PROXY' => 0,         ^
 * 'CRNRSTN_FAVICON_ASSET_MAPPING' => 0,       ^
 * 'CRNRSTN_SYSTEM_IMG_ASSET_MAPPING' => 0,    ^
 * 'CRNRSTN_SOCIAL_IMG_ASSET_MAPPING' => 0,    ^
 * 'CRNRSTN_META_IMG_ASSET_MAPPING' => 0,      ^
 * 'CRNRSTN_JS_LIB_ASSET_MAPPING' => 0,        ^
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * File: 
 * /_R/_config/config.integer_constants/crnrstn.integer_return.function.php
 *
 * File Contents: 
 * function _crnrstn_int_return($const_nom){
 *     switch($const_nom){
 *         case 'ADD-NEW-CONSTANT-HERE':
 *
 *             // 
 *             // A new integer for 
 *             // the new constant. 
 *             return (int) 0;
 *
 *         break;
 *
 *     }
 * }
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * This, the current file: 
 * /_R/_config/config.integer_constants/crnrstn.constants_load.runtime_exe.php
 *
 * File Contents: 
 * $R_int_const = array('ADD-NEW-CONSTANT-HERE');
 * @define('NEW-CONSTANT-HERE', (int) _crnrstn_int_return('NEW-CONSTANT-HERE'));
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * File: 
 * /_R/class/ui/crnrstn.content_source_controller.class.php
 *
 * File Contents: 
 * private function return_int_const_profile($resource_constant)
 * public function return_integer_constant_profiles($module_key)
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * When adding a new JS/CSS 
 * framework resource integer 
 * constant to the CLR-SSL,
 * please, in addition, also 
 * consider: 
 *
 * File:
 * /_R/class/assets/crnrstn.system_asset_manager.class.php
 *
 * File Contents:
 * public function return_html_head_asset($const){}
 * private function return_output_CRNRSTN_JS($const){}
 * private function return_output_CRNRSTN_CSS($const){}
 *
 */

$R_int_const = array('CRNRSTN_BARNEY' => 0,
                     'CRNRSTN_HTML_COMMENTS_FULL' => 0,
                     'CRNRSTN_HTML_COMMENTS_ENLARGED_PHYLACTERIES' => 0,
                     'CRNRSTN_HTML_COMMENTS_CDN_STABILITY_CONTROL_ENABLED' => 0,
                     'CRNRSTN_HTML_COMMENTS_NONE' => 0,
                     'CRNRSTN_HTML_COMMENTS_SILENT_GOLD' => 0,
                     'R_email' => 0,
                     'R_username' => 0,
                     'R_password' => 0,
                     'CRNRSTN_CLIENT_SSDTLA' => 0,
                     'CRNRSTN_PSSDTLA_PACKET' => 0,
                     'R_account' => 0,
                     'R_ip' => 0,
                     'CRNRSTN_DB_LOG_TABLE_NO_ROLLOVER' => 0,
                     'CRNRSTN_DB_LOG_TABLE_SHARD_SIZE' => 0,
                     'CRNRSTN_DB_LOG_TABLE_ROLLOVER_MAX_RECORDS' => 0,
                     'CRNRSTN_UI_INTERACT' => 0,
                     'CRNRSTN_SOAP' => 0,
                     'CRNRSTN_SOAP_SERVER' => 0,
                     'CRNRSTN_SOAP_CLIENT' => 0,
                     'CRNRSTN_DESKTOP' => 0,
                     'CRNRSTN_TABLET' => 0,
                     'CRNRSTN_MOBILE' => 0,
                     'CRNRSTN_WEB_ANALYTICS' => 0,
                     'CRNRSTN_WEB_ENGAGEMENT' => 0,
                     'CRNRSTN_ICO' => 0,
                     'CRNRSTN_HTML' => 0,
                     'CRNRSTN_BASE64' => 0,
                     'CRNRSTN_CSS' => 0,
                     'CRNRSTN_JS' => 0,
                     'CRNRSTN_IMG' => 0,
                     'CRNRSTN_XML' => 0,
                     'CRNRSTN_PHP' => 0,
                     'CRNRSTN_JPEG' => 0,
                     'CRNRSTN_JPG' => 0,
                     'CRNRSTN_GIF' => 0,
                     'CRNRSTN_PNG' => 0,
                     'CRNRSTN_JS_MAIN' => 0,
                     'CRNRSTN_CSS_MAIN_DESKTOP' => 0,
                     'CRNRSTN_CSS_MAIN_TABLET' => 0,
                     'CRNRSTN_CSS_MAIN_MOBILE' => 0,
                     'CRNRSTN_EMAIL_MULTI_PART' => 0,
                     'CRNRSTN_SETTINGS_CRNRSTN' => 0);

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Initialize OS bit size.
 *
 *
 * 5 ::
 *
 * Friday, October 24, 2025 @ 0533 hrs.
 *
 */
switch(PHP_INT_SIZE){
    case 4:

        $tmp_os_bit_size = (int) 32;

    break;
    case 8:
    default:

        $tmp_os_bit_size = (int) 64;

    break;

}

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * SOURCE :: https://www.php.net/manual/en/language.namespaces.definition.php
 * COMMENT :: https://www.php.net/manual/en/language.namespaces.definition.php#112937
 * AUTHOR :: FatBat
 *
 * Expanding on @danbettles note, 
 *
 * danbettles at yahoo dot co dot uk:
 * https://www.php.net/manual/en/language.namespaces.definition.php#90283
 *
 * it is better to always be 
 * explicit about which constant 
 * to use.
 * 
 * namespace NS;
 *
 *  define(__NAMESPACE__ . '\foo', '111');
 *  define('foo', '222');
 *
 *  echo foo;     // 111.
 *  echo \foo;    // 222.
 *  echo \NS\foo  // 111.
 *  echo NS\foo   // fatal error. assumes \NS\NS\foo.
 * 
 * 
 * 5 :: Namespace prefixing all constant definitions. Tuesday, March 31, 2026 @ 0523 hrs.
 *
 */
/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Define integer length 
 * for constant storage. 
 *
 * In bitwise fashion, this 
 * would be most 
 * high-falutin fashion. 
 *
 * @define('CRNRSTN_INTEGER_LENGTH', (int) ($this->os_bit_size - 1));
 * 
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Deprecated the use of global 
 *       constant, CRNRSTN_INTEGER_LENGTH, in 
 *       favor of storing the data in the 
 *       index, 'R_integer_length', of private 
 *       static array, $R_data. 
 *
 *       self::$R_data['R_integer_length'].
 *       5 :: Sunday, July 12, 2026 @ 2246 hrs.
 *
 */

//@define(__NAMESPACE__ . '\CRNRSTN_INTEGER_LENGTH', (int) ($tmp_os_bit_size - 1));
$R->R_data_write(__FILE__, 'R_integer_length', (int) ($tmp_os_bit_size - 1));
$R->R_data_write(__FILE__, 'R_integer_constant_init', $R_int_const);

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Initialize system 
 * integer constants. 
 *
 */
//$R->initialize_const_string_array($R_int_const);

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
'CRNRSTN_PHPMAILER_DEBUG_OFF', 'CRNRSTN_PHPMAILER_DEBUG_CLIENT',
'CRNRSTN_PHPMAILER_DEBUG_SERVER', 'CRNRSTN_PHPMAILER_DEBUG_CONNECTION', 'CRNRSTN_PHPMAILER_DEBUG_LOWLEVEL',
'CRNRSTN_DEBUG_OFF', 'CRNRSTN_DEBUG_SYSLOG', 'CRNRSTN_DEBUG_ON', 'CRNRSTN_CLIENT_SSDTLA',
'CRNRSTN_HTML_COMMENTS_FULL', 'CRNRSTN_HTML_COMMENTS_ENLARGED_PHYLACTERIES',
'CRNRSTN_HTML_COMMENTS_CDN_STABILITY_CONTROL_ENABLED', 'CRNRSTN_HTML_COMMENTS_NONE',
'CRNRSTN_HTML_COMMENTS_SILENT_GOLD', 'CRNRSTN_STRING', 'CRNRSTN_INT', 'CRNRSTN_INTEGER', 'CRNRSTN_BOOL',
'CRNRSTN_BOOLEAN', 'CRNRSTN_FLOAT', 'CRNRSTN_DOUBLE', 'CRNRSTN_ARRAY', 'CRNRSTN_OBJECT', 'CRNRSTN_RESOURCE',
'CRNRSTN_RESOURCE_CLOSED', 'CRNRSTN_UNKNOWN_TYPE', 'CRNRSTN_NULL', 'CRNRSTN_MIXED', 'CRNRSTN_BOOL_IS_HTML',
'CRNRSTN_LOG_NONE', 'CRNRSTN_LOG_ALL', 'R_account', 'R_ip',
'CRNRSTN_WORDPRESS_DEBUG', 'CRNRSTN_INPUT_OPTIONAL',
'CRNRSTN_INPUT_REQUIRED', 'CRNRSTN_INPUT_IS_PASSWORD', 'CRNRSTN_INPUT_IS_EMAIL', 'CRNRSTN_INPUT_CHAR_RESTRICTIONS',
'CRNRSTN_INPUT_CHAR_LIMITS', 'CRNRSTN_DB_LOG_TABLE_NO_ROLLOVER', 'CRNRSTN_DB_LOG_TABLE_SHARD_SIZE',
'CRNRSTN_DB_LOG_TABLE_ROLLOVER_MAX_RECORDS', 'CRNRSTN_DATABASE', 'CRNRSTN_DATABASE_CONNECTION',
'CRNRSTN_DATABASE_QUERY', 'CRNRSTN_DATABASE_QUERY_SILO', 'CRNRSTN_DATABASE_QUERY_DYNAMIC',
'CRNRSTN_DATABASE_RESULT', 'CRNRSTN_GABRIEL', 'CRNRSTN_SMTP_AUTHENTICATION', 'CRNRSTN_EMAIL', 'CRNRSTN_PASSWORD',
'CRNRSTN_ELECTRUM', 'CRNRSTN_ELECTRUM_THREAD', 'CRNRSTN_ELECTRUM_COMM', 'CRNRSTN_ELECTRUM_FTP',
'CRNRSTN_ELECTRUM_LOCALDIR', 'CRNRSTN_FILE_MANAGEMENT', 'CRNRSTN_FILE_LOCALDIR_MOVE', 'CRNRSTN_FILE_FTP_SEND',
'CRNRSTN_FILE_FTP_RECEIVE', 'CRNRSTN_FILE_SOAP_SEND', 'CRNRSTN_FILE_SOAP_RECEIVE', 'CRNRSTN_FILE_CURL_SEND',
'CRNRSTN_FILE_CURL_RECEIVE', 'CRNRSTN_FILE_RECEIVE', 'CRNRSTN_SOAP', 'CRNRSTN_SOAP_SERVER', 'CRNRSTN_SOAP_CLIENT',
'CRNRSTN_PROXY_KINGS_HIGHWAY', 'CRNRSTN_PROXY_EMAIL', 'CRNRSTN_PROXY_ELECTRUM', 'CRNRSTN_PROXY_AUTHENTICATE',
'CRNRSTN_DESKTOP', 'CRNRSTN_TABLET', 'CRNRSTN_MOBILE', 'CRNRSTN_UI_PHPNIGHT',
'CRNRSTN_UI_DARKNIGHT', 'CRNRSTN_UI_PHP', 'CRNRSTN_UI_GREYSKY', 'CRNRSTN_UI_HTML', 'CRNRSTN_UI_DAYLIGHT',
'CRNRSTN_UI_FEATHER', 'CRNRSTN_UI_GLASS_LIGHT_COPY', 'CRNRSTN_UI_GLASS_DARK_COPY', 'CRNRSTN_UI_WOOD',
'CRNRSTN_UI_TERMINAL', 'CRNRSTN_UI_RANDOM', 'CRNRSTN_WEB_ANALYTICS', 'CRNRSTN_WEB_ENGAGEMENT',
'CRNRSTN_PSSDTLA_PACKET', 'CRNRSTN_UI_COOKIE_PREFERENCE', 'CRNRSTN_UI_COOKIE_YESNO',
'CRNRSTN_UI_COOKIE_NOTICE', 'CRNRSTN_UI_INTERACT', 'CRNRSTN_ICY_BITMASK', 'CRNRSTN_SOAP_TUNNEL',
'CRNRSTN_SOAP_TUNNEL', 'CRNRSTN_ICO', 'CRNRSTN_CSS', 'CRNRSTN_JS', 'CRNRSTN_IMG', 'CRNRSTN_BASE64_GIF',
'CRNRSTN_BASE64_PNG', 'CRNRSTN_BASE64_JPEG', 'CRNRSTN_HTML', 'CRNRSTN_BASE64', 'CRNRSTN_HTM', 'CRNRSTN_SHTML',
'CRNRSTN_SHTM', 'CRNRSTN_STM', 'CRNRSTN_XHTML', 'CRNRSTN_XML', 'CRNRSTN_XSLT', 'CRNRSTN_XUL', 'CRNRSTN_CSV',
'CRNRSTN_TXT', 'CRNRSTN_SQL', 'CRNRSTN_DB', 'CRNRSTN_DS_STORE', 'CRNRSTN_DLL', 'CRNRSTN_BAT', 'CRNRSTN_PHP',
'CRNRSTN_PHAR', 'CRNRSTN_PHTML', 'CRNRSTN_PHT', 'CRNRSTN_PHPS', 'CRNRSTN_AS', 'CRNRSTN_C', 'CRNRSTN_CC',
'CRNRSTN_H', 'CRNRSTN_APS', 'CRNRSTN_ASAX', 'CRNRSTN_ASCX', 'CRNRSTN_ASMX', 'CRNRSTN_ASPX', 'CRNRSTN_CFC',
'CRNRSTN_CMAKE', 'CRNRSTN_INI', 'CRNRSTN_CONFIG', 'CRNRSTN_CPP', 'CRNRSTN_CS', 'CRNRSTN_CSPROJ', 'CRNRSTN_INCR',
'CRNRSTN_JWS', 'CRNRSTN_LICENSES', 'CRNRSTN_LICX', 'CRNRSTN_MANIFEST', 'CRNRSTN_NCB', 'CRNRSTN_PDB',
'CRNRSTN_PROJDATA', 'CRNRSTN_RC', 'CRNRSTN_RC2', 'CRNRSTN_RESOURCES', 'CRNRSTN_RESX', 'CRNRSTN_SLN', 'CRNRSTN_SUO',
'CRNRSTN_USER', 'CRNRSTN_VB', 'CRNRSTN_VBPROJ', 'CRNRSTN_VCPROJ', 'CRNRSTN_WEBINFO', 'CRNRSTN_RTF', 'CRNRSTN_TEX',
'CRNRSTN_JSON', 'CRNRSTN_ICS', 'CRNRSTN_TSV', 'CRNRSTN_JSONLD', 'CRNRSTN_MJS', 'CRNRSTN_JAR', 'CRNRSTN_ZIP',
'CRNRSTN_ZIPX', 'CRNRSTN_BZ', 'CRNRSTN_BZ2', 'CRNRSTN_GZ', 'CRNRSTN_GZIP', 'CRNRSTN_GTAR', 'CRNRSTN_7Z',
'CRNRSTN_EPUB', 'CRNRSTN_TAR', 'CRNRSTN_OTF', 'CRNRSTN_WOFF', 'CRNRSTN_WOFF2', 'CRNRSTN_TTF', 'CRNRSTN_ICO',
'CRNRSTN_JPG', 'CRNRSTN_JPE', 'CRNRSTN_JPEG', 'CRNRSTN_JPG2', 'CRNRSTN_JIF', 'CRNRSTN_JFIF', 'CRNRSTN_JFI',
'CRNRSTN_GIF', 'CRNRSTN_BMP', 'CRNRSTN_PNG', 'CRNRSTN_SVG', 'CRNRSTN_TIF', 'CRNRSTN_TIFF', 'CRNRSTN_WEBP',
'CRNRSTN_PIC', 'CRNRSTN_PICT', 'CRNRSTN_AVIF', 'CRNRSTN_MID', 'CRNRSTN_MIDI', 'CRNRSTN_AAC', 'CRNRSTN_OGA',
'CRNRSTN_MP1', 'CRNRSTN_MP2', 'CRNRSTN_M1A', 'CRNRSTN_M2A', 'CRNRSTN_MP3', 'CRNRSTN_MPGA', 'CRNRSTN_MPA',
'CRNRSTN_MPV', 'CRNRSTN_MPG', 'CRNRSTN_RA', 'CRNRSTN_RAM', 'CRNRSTN_RMP', 'CRNRSTN_DAT', 'CRNRSTN_WAV',
'CRNRSTN_WAVE', 'CRNRSTN_WMA', 'CRNRSTN_WMV', 'CRNRSTN_ASF', 'CRNRSTN_WM', 'CRNRSTN_WAX', 'CRNRSTN_WVX',
'CRNRSTN_ASX', 'CRNRSTN_WMX', 'CRNRSTN_OGG', 'CRNRSTN_WEBA', 'CRNRSTN_3GP', 'CRNRSTN_3G2', 'CRNRSTN_OPUS',
'CRNRSTN_M3U', 'CRNRSTN_OGV', 'CRNRSTN_WEBM', 'CRNRSTN_MP4', 'CRNRSTN_M4A', 'CRNRSTN_M4P', 'CRNRSTN_M4B',
'CRNRSTN_M4R', 'CRNRSTN_M4V', 'CRNRSTN_MPE', 'CRNRSTN_MPEG', 'CRNRSTN_MPV2', 'CRNRSTN_M1V', 'CRNRSTN_M2V',
'CRNRSTN_MOV', 'CRNRSTN_QT', 'CRNRSTN_QIF', 'CRNRSTN_QTI', 'CRNRSTN_QTIF', 'CRNRSTN_QTC', 'CRNRSTN_MOVIE',
'CRNRSTN_MV', 'CRNRSTN_SWF', 'CRNRSTN_AVI', 'CRNRSTN_AVS', 'CRNRSTN_MJPG', 'CRNRSTN_TS', 'CRNRSTN_EOT',
'CRNRSTN_ABW', 'CRNRSTN_ARC', 'CRNRSTN_AZW', 'CRNRSTN_BIN', 'CRNRSTN_PL', 'CRNRSTN_PLX', 'CRNRSTN_PM',
'CRNRSTN_XS', 'CRNRSTN_POD', 'CRNRSTN_CGI', 'CRNRSTN_CMD', 'CRNRSTN_BTM', 'CRNRSTN_CDA', 'CRNRSTN_CSH',
'CRNRSTN_ODT', 'CRNRSTN_ODP', 'CRNRSTN_ODS', 'CRNRSTN_PDF', 'CRNRSTN_WKS', 'CRNRSTN_WPS', 'CRNRSTN_WPD',
'CRNRSTN_DOC', 'CRNRSTN_WORD', 'CRNRSTN_W6W', 'CRNRSTN_XLSX', 'CRNRSTN_PPTX', 'CRNRSTN_DOCX', 'CRNRSTN_DOCM',
'CRNRSTN_DOTM', 'CRNRSTN_DOTX', 'CRNRSTN_PPSX', 'CRNRSTN_POTX', 'CRNRSTN_SLDX', 'CRNRSTN_VSD', 'CRNRSTN_MPKG',
'CRNRSTN_OGX', 'CRNRSTN_RAR', 'CRNRSTN_SH', 'CRNRSTN_DWG', 'CRNRSTN_ARJ', 'CRNRSTN_ASD', 'CRNRSTN_ASN',
'CRNRSTN_CCAD', 'CRNRSTN_DRW', 'CRNRSTN_DXF', 'CRNRSTN_UNV', 'CRNRSTN_IGES', 'CRNRSTN_IGS', 'CRNRSTN_HQX',
'CRNRSTN_MDB', 'CRNRSTN_XLA', 'CRNRSTN_XLS', 'CRNRSTN_XLT', 'CRNRSTN_XLM', 'CRNRSTN_XLSM', 'CRNRSTN_XLSB',
'CRNRSTN_XLAM', 'CRNRSTN_XLTM', 'CRNRSTN_XLW', 'CRNRSTN_POT', 'CRNRSTN_PPS', 'CRNRSTN_PPT', 'CRNRSTN_PPTM',
'CRNRSTN_POTM', 'CRNRSTN_PPAM', 'CRNRSTN_PPSM', 'CRNRSTN_SLDM', 'CRNRSTN_PA', 'CRNRSTN_MPP', 'CRNRSTN_WRI',
'CRNRSTN_ODA', 'CRNRSTN_FLA', 'CRNRSTN_FLV', 'CRNRSTN_AI', 'CRNRSTN_PSD', 'CRNRSTN_EPS', 'CRNRSTN_PS',
'CRNRSTN_PART', 'CRNRSTN_PRT', 'CRNRSTN_SET', 'CRNRSTN_STL', 'CRNRSTN_SOL', 'CRNRSTN_ST', 'CRNRSTN_STEP',
'CRNRSTN_STP', 'CRNRSTN_VDA', 'CRNRSTN_BCPIO', 'CRNRSTN_CPIO', 'CRNRSTN_DCR', 'CRNRSTN_DIR', 'CRNRSTN_DXR',
'CRNRSTN_DVI', 'CRNRSTN_DWF', 'CRNRSTN_HDF', 'CRNRSTN_LATEX', 'CRNRSTN_MIF', 'CRNRSTN_CDF', 'CRNRSTN_NC',
'CRNRSTN_SHAR', 'CRNRSTN_SIT', 'CRNRSTN_SV4CPIO', 'CRNRSTN_SV4CRC', 'CRNRSTN_TCL', 'CRNRSTN_TEXI',
'CRNRSTN_TEXINFO', 'CRNRSTN_ROFF', 'CRNRSTN_T', 'CRNRSTN_TR', 'CRNRSTN_MAN', 'CRNRSTN_ME', 'CRNRSTN_MS',
'CRNRSTN_USTAR', 'CRNRSTN_SRC', 'CRNRSTN_HLP', 'CRNRSTN_AU', 'CRNRSTN_SND', 'CRNRSTN_AIF', 'CRNRSTN_AIFC',
'CRNRSTN_AIFF', 'CRNRSTN_VOC', 'CRNRSTN_IEF', 'CRNRSTN_RAS', 'CRNRSTN_PNM', 'CRNRSTN_PBM', 'CRNRSTN_PGM',
'CRNRSTN_PPM', 'CRNRSTN_RGB', 'CRNRSTN_XBM', 'CRNRSTN_XPM', 'CRNRSTN_XWD', 'CRNRSTN_RTX', 'CRNRSTN_ETX',
'CRNRSTN_SGM', 'CRNRSTN_SGML', 'CRNRSTN_VDO', 'CRNRSTN_VIV', 'CRNRSTN_VIVO', 'CRNRSTN_ICE', 'CRNRSTN_SVR',
'CRNRSTN_WRL', 'CRNRSTN_VRT', 'CRNRSTN_EXE', 'CRNRSTN_BIT', 'CRNRSTN_PAGES', 'CRNRSTN_KEY', 'CRNRSTN_AFPHOTO',
'CRNRSTN_AFDESIGN', 'CRNRSTN_CDR', 'CRNRSTN_CPT', '<!--  Moved JS and CSS framework ', 
'initialization to the content_source_controller. 5 :: Saturday, July 18, 2026 @ 2028 hrs. -->', 
'CRNRSTN_MODE_BASE64', 'CRNRSTN_MODE_PNG', 'CRNRSTN_MODE_JPEG', 'CRNRSTN_FAVICON_ASSET_MAPPING',
'CRNRSTN_SYSTEM_IMG_ASSET_MAPPING', 'CRNRSTN_SOCIAL_IMG_ASSET_MAPPING', 'CRNRSTN_META_IMG_ASSET_MAPPING',
'CRNRSTN_JS_LIB_ASSET_MAPPING', 'CRNRSTN_CSS_LIB_ASSET_MAPPING', 'CRNRSTN_EMAIL_MULTI_PART', 'CRNRSTN_ASSET_MAPPING',
'CRNRSTN_ASSET_MAPPING_PROXY', 'CRNRSTN_LOG_EMAIL', 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL', 'CRNRSTN_LOG_FILE',
'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE', 'CRNRSTN_LOG_FILE_FTP', 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE_FTP', 'CRNRSTN_LOG_SCREEN_TEXT',
'CRNRSTN_LOG_SCREEN', 'CRNRSTN_LOG_SCREEN_HTML', 'CRNRSTN_LOG_SCREEN_HTML_HIDDEN', 'CRNRSTN_LOG_DEFAULT',
'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DEFAULT', 'CRNRSTN_LOG_ELECTRUM', 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_ELECTRUM', 'CRNRSTN_LOG_DATABASE',
'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DATABASE', 'CRNRSTN_LOG_SSDTLA', 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_SSDTLA', 'CRNRSTN_LOG_PSSDTLA',
'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_PSSDTLA', 'CRNRSTN_LOG_SOAP', 'CRNRSTN_CHANNEL_ALL', 'CRNRSTN_CHANNEL_GET',
'CRNRSTN_CHANNEL_POST', 'CRNRSTN_CHANNEL_COOKIE', 'CRNRSTN_CHANNEL_SESSION', 'CRNRSTN_CHANNEL_DATABASE',
'CRNRSTN_CHANNEL_SSDTLA', 'CRNRSTN_CHANNEL_PSSDTLA', 'CRNRSTN_CHANNEL_RUNTIME', 'CRNRSTN_CHANNEL_SOAP',
'CRNRSTN_CHANNEL_FILE', 'CRNRSTN_CHANNEL_FORM', 'CRNRSTN_AUTHORIZE_ALL', 'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_GET',
'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_POST', 'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_COOKIE', 
'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION', 'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_DATABASE',
'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SSDTLA', 'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_PSSDTLA', 
'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME', 'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SOAP',
'CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_FILE', 'CRNRSTN_AUTHORIZE & CRNRSTN_USERNAME', 
'CRNRSTN_ENCRYPT_TUNNEL', 'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_GET', 'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_POST',
'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_DATABASE', 'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SESSION', 
'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_COOKIE', 'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP',
'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_FILE', 'CRNRSTN_ENCRYPT_OERSL', 
'CRNRSTN_RESOURCE_ALL', 'CRNRSTN_RESOURCE_BASSDRIVE',
'CRNRSTN_RESOURCE_NATIONAL_WEATHER_SERVICE', 'CRNRSTN_RESOURCE_CSS_VALIDATOR', 'CRNRSTN_RESOURCE_DOCUMENTATION',
'CRNRSTN_RESOURCE_DEEP_LINK', 'CRNRSTN_CREATIVE_EMBED', 'CRNRSTN_RESOURCE_IMAGE', 'CRNRSTN_RESOURCE_DOCUMENT',
'CRNRSTN_RESOURCE_OPENSOURCE', 'CRNRSTN_RESOURCE_NEWS_SYNDICATION', 'CRNRSTN_RESOURCE_ELECTRUM',
'CRNRSTN_RESOURCE_THIRDPARTY', 'CRNRSTN_RESOURCE_FOOTER', 'CRNRSTN_HTTP_REDIRECT', 'CRNRSTN_HTTPS_REDIRECT',
'CRNRSTN_HTTP_DATA_RETURN', 'CRNRSTN_HTTPS_DATA_RETURN', 'CRNRSTN_JSON_RETURN', 'CRNRSTN_XML_RETURN',
'CRNRSTN_SOAP_RETURN', 'CRNRSTN_HTML_TEXT_RETURN', 'CRNRSTN_DOCUMENT_FILE_RETURN', 'CRNRSTN_SERVER_RESPONSE_CODE',
'CRNRSTN_RESPONSE_REPORT', 'CRNRSTN_BARNEY', 'CRNRSTN_BARNEY_DATABASE', 'CRNRSTN_BARNEY_FILE',
'CRNRSTN_BARNEY_FTP', 'CRNRSTN_BARNEY_ELECTRUM', 'CRNRSTN_BARNEY_GABRIEL', 'CRNRSTN_BARNEY_DISK',
'CRNRSTN_PERFORMANCE_MONITOR', 'CRNRSTN_IP_SECURITY', 'CRNRSTN_CSS_EMAIL_CLIENT_VALIDATE'

# C # R # N # R # S # T # N # :: # L # I # G # H # T
@define('CRNRSTN_DATABASE', (int) _crnrstn_int_return('CRNRSTN_DATABASE'));
@define('CRNRSTN_DATABASE_CONNECTION', (int) _crnrstn_int_return('CRNRSTN_DATABASE_CONNECTION'));
@define('CRNRSTN_DATABASE_QUERY', (int) _crnrstn_int_return('CRNRSTN_DATABASE_QUERY'));
@define('CRNRSTN_DATABASE_QUERY_SILO', (int) _crnrstn_int_return('CRNRSTN_DATABASE_QUERY_SILO'));
@define('CRNRSTN_DATABASE_QUERY_DYNAMIC', (int) _crnrstn_int_return('CRNRSTN_DATABASE_QUERY_DYNAMIC'));
@define('CRNRSTN_DATABASE_RESULT', (int) _crnrstn_int_return('CRNRSTN_DATABASE_RESULT'));
@define('CRNRSTN_GABRIEL', (int) _crnrstn_int_return('CRNRSTN_GABRIEL'));
@define('CRNRSTN_PROXY_KINGS_HIGHWAY', (int) _crnrstn_int_return('CRNRSTN_PROXY_KINGS_HIGHWAY'));
@define('CRNRSTN_PROXY_EMAIL', (int) _crnrstn_int_return('CRNRSTN_PROXY_EMAIL'));
@define('CRNRSTN_PROXY_ELECTRUM', (int) _crnrstn_int_return('CRNRSTN_PROXY_ELECTRUM'));
@define('CRNRSTN_PROXY_AUTHENTICATE', (int) _crnrstn_int_return('CRNRSTN_PROXY_AUTHENTICATE'));
@define('CRNRSTN_INPUT_OPTIONAL', (int) _crnrstn_int_return('CRNRSTN_INPUT_OPTIONAL'));
@define('CRNRSTN_INPUT_REQUIRED', (int) _crnrstn_int_return('CRNRSTN_INPUT_REQUIRED'));
@define('CRNRSTN_INPUT_IS_PASSWORD', (int) _crnrstn_int_return('CRNRSTN_INPUT_IS_PASSWORD'));
@define('CRNRSTN_INPUT_IS_EMAIL', (int) _crnrstn_int_return('CRNRSTN_INPUT_IS_EMAIL'));
@define('CRNRSTN_INPUT_CHAR_RESTRICTIONS', (int) _crnrstn_int_return('CRNRSTN_INPUT_CHAR_RESTRICTIONS'));
@define('CRNRSTN_INPUT_CHAR_LIMITS', (int) _crnrstn_int_return('CRNRSTN_INPUT_CHAR_LIMITS'));
@define('CRNRSTN_UI_COOKIE_PREFERENCE', (int) _crnrstn_int_return('CRNRSTN_UI_COOKIE_PREFERENCE'));
@define('CRNRSTN_UI_COOKIE_YESNO', (int) _crnrstn_int_return('CRNRSTN_UI_COOKIE_YESNO'));
@define('CRNRSTN_UI_COOKIE_NOTICE', (int) _crnrstn_int_return('CRNRSTN_UI_COOKIE_NOTICE'));
@define('CRNRSTN_SMTP_AUTHENTICATION', (int) _crnrstn_int_return('CRNRSTN_SMTP_AUTHENTICATION'));
@define('CRNRSTN_RESOURCE_ALL', (int) _crnrstn_int_return('CRNRSTN_RESOURCE_ALL'));
@define('CRNRSTN_RESOURCE_BASSDRIVE', (int) _crnrstn_int_return('CRNRSTN_RESOURCE_BASSDRIVE'));
@define('CRNRSTN_RESOURCE_NATIONAL_WEATHER_SERVICE', (int) _crnrstn_int_return('CRNRSTN_RESOURCE_NATIONAL_WEATHER_SERVICE'));
@define('CRNRSTN_RESOURCE_CSS_VALIDATOR', (int) _crnrstn_int_return('CRNRSTN_RESOURCE_CSS_VALIDATOR'));
@define('CRNRSTN_RESOURCE_DOCUMENTATION', (int) _crnrstn_int_return('CRNRSTN_RESOURCE_DOCUMENTATION'));
@define('CRNRSTN_RESOURCE_DEEP_LINK', (int) _crnrstn_int_return('CRNRSTN_RESOURCE_DEEP_LINK'));
@define('CRNRSTN_RESOURCE_IMAGE', (int) _crnrstn_int_return('CRNRSTN_RESOURCE_IMAGE'));
@define('CRNRSTN_RESOURCE_DOCUMENT', (int) _crnrstn_int_return('CRNRSTN_RESOURCE_DOCUMENT'));
@define('CRNRSTN_RESOURCE_OPENSOURCE', (int) _crnrstn_int_return('CRNRSTN_RESOURCE_OPENSOURCE'));
@define('CRNRSTN_RESOURCE_NEWS_SYNDICATION', (int) _crnrstn_int_return('CRNRSTN_RESOURCE_NEWS_SYNDICATION'));
@define('CRNRSTN_RESOURCE_ELECTRUM', (int) _crnrstn_int_return('CRNRSTN_RESOURCE_ELECTRUM'));
@define('CRNRSTN_RESOURCE_THIRDPARTY', (int) _crnrstn_int_return('CRNRSTN_RESOURCE_THIRDPARTY'));
@define('CRNRSTN_RESOURCE_FOOTER', (int) _crnrstn_int_return('CRNRSTN_RESOURCE_FOOTER'));
@define('CRNRSTN_CREATIVE_EMBED', (int) _crnrstn_int_return('CRNRSTN_CREATIVE_EMBED'));
@define('CRNRSTN_JSON_RETURN', (int) _crnrstn_int_return('CRNRSTN_JSON_RETURN'));
@define('CRNRSTN_XML_RETURN', (int) _crnrstn_int_return('CRNRSTN_XML_RETURN'));
@define('CRNRSTN_SOAP_RETURN', (int) _crnrstn_int_return('CRNRSTN_SOAP_RETURN'));
@define('CRNRSTN_HTML_TEXT_RETURN', (int) _crnrstn_int_return('CRNRSTN_HTML_TEXT_RETURN'));
@define('CRNRSTN_DOCUMENT_FILE_RETURN', (int) _crnrstn_int_return('CRNRSTN_DOCUMENT_FILE_RETURN'));
@define('CRNRSTN_SERVER_RESPONSE_CODE', (int) _crnrstn_int_return('CRNRSTN_SERVER_RESPONSE_CODE'));
@define('CRNRSTN_RESPONSE_REPORT', (int) _crnrstn_int_return('CRNRSTN_RESPONSE_REPORT'));
@define('CRNRSTN_HTTP_REDIRECT', (int) _crnrstn_int_return('CRNRSTN_HTTP_REDIRECT'));
@define('CRNRSTN_HTTPS_REDIRECT', (int) _crnrstn_int_return('CRNRSTN_HTTPS_REDIRECT'));
@define('CRNRSTN_HTTP_DATA_RETURN', (int) _crnrstn_int_return('CRNRSTN_HTTP_DATA_RETURN'));
@define('CRNRSTN_HTTPS_DATA_RETURN', (int) _crnrstn_int_return('CRNRSTN_HTTPS_DATA_RETURN'));
@define('CRNRSTN_CSS_EMAIL_CLIENT_VALIDATE', (int) _crnrstn_int_return('CRNRSTN_CSS_EMAIL_CLIENT_VALIDATE'));
@define('CRNRSTN_PERFORMANCE_MONITOR', (int) _crnrstn_int_return('CRNRSTN_PERFORMANCE_MONITOR'));
@define('CRNRSTN_IP_SECURITY', (int) _crnrstn_int_return('CRNRSTN_IP_SECURITY'));
@define('CRNRSTN_BARNEY_DATABASE', (int) _crnrstn_int_return('CRNRSTN_BARNEY_DATABASE'));
@define('CRNRSTN_BARNEY_FILE', (int) _crnrstn_int_return('CRNRSTN_BARNEY_FILE'));
@define('CRNRSTN_BARNEY_FTP', (int) _crnrstn_int_return('CRNRSTN_BARNEY_FTP'));
@define('CRNRSTN_BARNEY_ELECTRUM', (int) _crnrstn_int_return('CRNRSTN_BARNEY_ELECTRUM'));
@define('CRNRSTN_BARNEY_GABRIEL', (int) _crnrstn_int_return('CRNRSTN_BARNEY_GABRIEL'));
@define('CRNRSTN_BARNEY_DISK', (int) _crnrstn_int_return('CRNRSTN_BARNEY_DISK'));
@define('CRNRSTN_ELECTRUM', (int) _crnrstn_int_return('CRNRSTN_ELECTRUM'));
@define('CRNRSTN_ELECTRUM_THREAD', (int) _crnrstn_int_return('CRNRSTN_ELECTRUM_THREAD'));
@define('CRNRSTN_ELECTRUM_COMM', (int) _crnrstn_int_return('CRNRSTN_ELECTRUM_COMM'));
@define('CRNRSTN_ELECTRUM_FTP', (int) _crnrstn_int_return('CRNRSTN_ELECTRUM_FTP'));
@define('CRNRSTN_ELECTRUM_LOCALDIR', (int) _crnrstn_int_return('CRNRSTN_ELECTRUM_LOCALDIR'));
@define('CRNRSTN_FILE_MANAGEMENT', (int) _crnrstn_int_return('CRNRSTN_FILE_MANAGEMENT'));
@define('CRNRSTN_FILE_LOCALDIR_MOVE', (int) _crnrstn_int_return('CRNRSTN_FILE_LOCALDIR_MOVE'));
@define('CRNRSTN_FILE_FTP_SEND', (int) _crnrstn_int_return('CRNRSTN_FILE_FTP_SEND'));
@define('CRNRSTN_FILE_FTP_RECEIVE', (int) _crnrstn_int_return('CRNRSTN_FILE_FTP_RECEIVE'));
@define('CRNRSTN_FILE_SOAP_SEND', (int) _crnrstn_int_return('CRNRSTN_FILE_SOAP_SEND'));
@define('CRNRSTN_FILE_SOAP_RECEIVE', (int) _crnrstn_int_return('CRNRSTN_FILE_SOAP_RECEIVE'));
@define('CRNRSTN_FILE_CURL_SEND', (int) _crnrstn_int_return('CRNRSTN_FILE_CURL_SEND'));
@define('CRNRSTN_FILE_CURL_RECEIVE', (int) _crnrstn_int_return('CRNRSTN_FILE_CURL_RECEIVE'));
@define('CRNRSTN_FILE_RECEIVE', (int) _crnrstn_int_return('CRNRSTN_FILE_RECEIVE'));
@define('CRNRSTN_USERNAME', (int) _crnrstn_int_return('CRNRSTN_USERNAME'));
@define('CRNRSTN_BASE64_GIF', (int) _crnrstn_int_return('CRNRSTN_BASE64_GIF'));
@define('CRNRSTN_BASE64_PNG', (int) _crnrstn_int_return('CRNRSTN_BASE64_PNG'));
@define('CRNRSTN_BASE64_JPEG', (int) _crnrstn_int_return('CRNRSTN_BASE64_JPEG'));
@define('CRNRSTN_HTM', (int) _crnrstn_int_return('CRNRSTN_HTM'));
@define('CRNRSTN_SHTML', (int) _crnrstn_int_return('CRNRSTN_SHTML'));
@define('CRNRSTN_SHTM', (int) _crnrstn_int_return('CRNRSTN_SHTM'));
@define('CRNRSTN_STM', (int) _crnrstn_int_return('CRNRSTN_STM'));
@define('CRNRSTN_XHTML', (int) _crnrstn_int_return('CRNRSTN_XHTML'));
@define('CRNRSTN_XSLT', (int) _crnrstn_int_return('CRNRSTN_XSLT'));
@define('CRNRSTN_XUL', (int) _crnrstn_int_return('CRNRSTN_XUL'));
@define('CRNRSTN_CSV', (int) _crnrstn_int_return('CRNRSTN_CSV'));
@define('CRNRSTN_TXT', (int) _crnrstn_int_return('CRNRSTN_TXT'));
@define('CRNRSTN_SQL', (int) _crnrstn_int_return('CRNRSTN_SQL'));
@define('CRNRSTN_DB', (int) _crnrstn_int_return('CRNRSTN_DB'));
@define('CRNRSTN_DS_STORE', (int) _crnrstn_int_return('CRNRSTN_DS_STORE'));
@define('CRNRSTN_DLL', (int) _crnrstn_int_return('CRNRSTN_DLL'));
@define('CRNRSTN_BAT', (int) _crnrstn_int_return('CRNRSTN_BAT'));
@define('CRNRSTN_PHAR', (int) _crnrstn_int_return('CRNRSTN_PHAR'));
@define('CRNRSTN_PHTML', (int) _crnrstn_int_return('CRNRSTN_PHTML'));
@define('CRNRSTN_PHT', (int) _crnrstn_int_return('CRNRSTN_PHT'));
@define('CRNRSTN_PHPS', (int) _crnrstn_int_return('CRNRSTN_PHPS'));
@define('CRNRSTN_AS', (int) _crnrstn_int_return('CRNRSTN_AS'));
@define('CRNRSTN_C', (int) _crnrstn_int_return('CRNRSTN_C'));
@define('CRNRSTN_CC', (int) _crnrstn_int_return('CRNRSTN_CC'));
@define('CRNRSTN_H', (int) _crnrstn_int_return('CRNRSTN_H'));
@define('CRNRSTN_APS', (int) _crnrstn_int_return('CRNRSTN_APS'));
@define('CRNRSTN_ASAX', (int) _crnrstn_int_return('CRNRSTN_ASAX'));
@define('CRNRSTN_ASCX', (int) _crnrstn_int_return('CRNRSTN_ASCX'));
@define('CRNRSTN_ASMX', (int) _crnrstn_int_return('CRNRSTN_ASMX'));
@define('CRNRSTN_ASPX', (int) _crnrstn_int_return('CRNRSTN_ASPX'));
@define('CRNRSTN_CFC', (int) _crnrstn_int_return('CRNRSTN_CFC'));
@define('CRNRSTN_CMAKE', (int) _crnrstn_int_return('CRNRSTN_CMAKE'));
@define('CRNRSTN_INI', (int) _crnrstn_int_return('CRNRSTN_INI'));
@define('CRNRSTN_CONFIG', (int) _crnrstn_int_return('CRNRSTN_CONFIG'));
@define('CRNRSTN_CPP', (int) _crnrstn_int_return('CRNRSTN_CPP'));
@define('CRNRSTN_CS', (int) _crnrstn_int_return('CRNRSTN_CS'));
@define('CRNRSTN_CSPROJ', (int) _crnrstn_int_return('CRNRSTN_CSPROJ'));
@define('CRNRSTN_INCR', (int) _crnrstn_int_return('CRNRSTN_INCR'));
@define('CRNRSTN_JWS', (int) _crnrstn_int_return('CRNRSTN_JWS'));
@define('CRNRSTN_LICENSES', (int) _crnrstn_int_return('CRNRSTN_LICENSES'));
@define('CRNRSTN_LICX', (int) _crnrstn_int_return('CRNRSTN_LICX'));
@define('CRNRSTN_MANIFEST', (int) _crnrstn_int_return('CRNRSTN_MANIFEST'));
@define('CRNRSTN_NCB', (int) _crnrstn_int_return('CRNRSTN_NCB'));
@define('CRNRSTN_PDB', (int) _crnrstn_int_return('CRNRSTN_PDB'));
@define('CRNRSTN_PROJDATA', (int) _crnrstn_int_return('CRNRSTN_PROJDATA'));
@define('CRNRSTN_RC', (int) _crnrstn_int_return('CRNRSTN_RC'));
@define('CRNRSTN_RC2', (int) _crnrstn_int_return('CRNRSTN_RC2'));
@define('CRNRSTN_RESOURCES', (int) _crnrstn_int_return('CRNRSTN_RESOURCES'));
@define('CRNRSTN_RESX', (int) _crnrstn_int_return('CRNRSTN_RESX'));
@define('CRNRSTN_SLN', (int) _crnrstn_int_return('CRNRSTN_SLN'));
@define('CRNRSTN_SUO', (int) _crnrstn_int_return('CRNRSTN_SUO'));
@define('CRNRSTN_USER', (int) _crnrstn_int_return('CRNRSTN_USER'));
@define('CRNRSTN_VB', (int) _crnrstn_int_return('CRNRSTN_VB'));
@define('CRNRSTN_VBPROJ', (int) _crnrstn_int_return('CRNRSTN_VBPROJ'));
@define('CRNRSTN_VCPROJ', (int) _crnrstn_int_return('CRNRSTN_VCPROJ'));
@define('CRNRSTN_WEBINFO', (int) _crnrstn_int_return('CRNRSTN_WEBINFO'));
@define('CRNRSTN_RTF', (int) _crnrstn_int_return('CRNRSTN_RTF'));
@define('CRNRSTN_TEX', (int) _crnrstn_int_return('CRNRSTN_TEX'));
@define('CRNRSTN_JSON', (int) _crnrstn_int_return('CRNRSTN_JSON'));
@define('CRNRSTN_ICS', (int) _crnrstn_int_return('CRNRSTN_ICS'));
@define('CRNRSTN_TSV', (int) _crnrstn_int_return('CRNRSTN_TSV'));
@define('CRNRSTN_JSONLD', (int) _crnrstn_int_return('CRNRSTN_JSONLD'));
@define('CRNRSTN_MJS', (int) _crnrstn_int_return('CRNRSTN_MJS'));
@define('CRNRSTN_JAR', (int) _crnrstn_int_return('CRNRSTN_JAR'));
@define('CRNRSTN_ZIP', (int) _crnrstn_int_return('CRNRSTN_ZIP'));
@define('CRNRSTN_ZIPX', (int) _crnrstn_int_return('CRNRSTN_ZIPX'));
@define('CRNRSTN_BZ', (int) _crnrstn_int_return('CRNRSTN_BZ'));
@define('CRNRSTN_BZ2', (int) _crnrstn_int_return('CRNRSTN_BZ2'));
@define('CRNRSTN_GZ', (int) _crnrstn_int_return('CRNRSTN_GZ'));
@define('CRNRSTN_GZIP', (int) _crnrstn_int_return('CRNRSTN_GZIP'));
@define('CRNRSTN_GTAR', (int) _crnrstn_int_return('CRNRSTN_GTAR'));
@define('CRNRSTN_7Z', (int) _crnrstn_int_return('CRNRSTN_7Z'));
@define('CRNRSTN_EPUB', (int) _crnrstn_int_return('CRNRSTN_EPUB'));
@define('CRNRSTN_TAR', (int) _crnrstn_int_return('CRNRSTN_TAR'));
@define('CRNRSTN_OTF', (int) _crnrstn_int_return('CRNRSTN_OTF'));
@define('CRNRSTN_WOFF', (int) _crnrstn_int_return('CRNRSTN_WOFF'));
@define('CRNRSTN_WOFF2', (int) _crnrstn_int_return('CRNRSTN_WOFF2'));
@define('CRNRSTN_TTF', (int) _crnrstn_int_return('CRNRSTN_TTF'));
@define('CRNRSTN_ICO', (int) _crnrstn_int_return('CRNRSTN_ICO'));
@define('CRNRSTN_JPE', (int) _crnrstn_int_return('CRNRSTN_JPE'));
@define('CRNRSTN_JPG2', (int) _crnrstn_int_return('CRNRSTN_JPG2'));
@define('CRNRSTN_JIF', (int) _crnrstn_int_return('CRNRSTN_JIF'));
@define('CRNRSTN_JFIF', (int) _crnrstn_int_return('CRNRSTN_JFIF'));
@define('CRNRSTN_JFI', (int) _crnrstn_int_return('CRNRSTN_JFI'));
@define('CRNRSTN_BMP', (int) _crnrstn_int_return('CRNRSTN_BMP'));
@define('CRNRSTN_SVG', (int) _crnrstn_int_return('CRNRSTN_SVG'));
@define('CRNRSTN_TIF', (int) _crnrstn_int_return('CRNRSTN_TIF'));
@define('CRNRSTN_TIFF', (int) _crnrstn_int_return('CRNRSTN_TIFF'));
@define('CRNRSTN_WEBP', (int) _crnrstn_int_return('CRNRSTN_WEBP'));
@define('CRNRSTN_PIC', (int) _crnrstn_int_return('CRNRSTN_PIC'));
@define('CRNRSTN_PICT', (int) _crnrstn_int_return('CRNRSTN_PICT'));
@define('CRNRSTN_AVIF', (int) _crnrstn_int_return('CRNRSTN_AVIF'));
@define('CRNRSTN_MID', (int) _crnrstn_int_return('CRNRSTN_MID'));
@define('CRNRSTN_MIDI', (int) _crnrstn_int_return('CRNRSTN_MIDI'));
@define('CRNRSTN_AAC', (int) _crnrstn_int_return('CRNRSTN_AAC'));
@define('CRNRSTN_OGA', (int) _crnrstn_int_return('CRNRSTN_OGA'));
@define('CRNRSTN_MP1', (int) _crnrstn_int_return('CRNRSTN_MP1'));
@define('CRNRSTN_MP2', (int) _crnrstn_int_return('CRNRSTN_MP2'));
@define('CRNRSTN_M1A', (int) _crnrstn_int_return('CRNRSTN_M1A'));
@define('CRNRSTN_M2A', (int) _crnrstn_int_return('CRNRSTN_M2A'));
@define('CRNRSTN_MP3', (int) _crnrstn_int_return('CRNRSTN_MP3'));
@define('CRNRSTN_MPGA', (int) _crnrstn_int_return('CRNRSTN_MPGA'));
@define('CRNRSTN_MPA', (int) _crnrstn_int_return('CRNRSTN_MPA'));
@define('CRNRSTN_MPV', (int) _crnrstn_int_return('CRNRSTN_MPV'));
@define('CRNRSTN_MPG', (int) _crnrstn_int_return('CRNRSTN_MPG'));
@define('CRNRSTN_RA', (int) _crnrstn_int_return('CRNRSTN_RA'));
@define('CRNRSTN_RAM', (int) _crnrstn_int_return('CRNRSTN_RAM'));
@define('CRNRSTN_RMP', (int) _crnrstn_int_return('CRNRSTN_RMP'));
@define('CRNRSTN_DAT', (int) _crnrstn_int_return('CRNRSTN_DAT'));
@define('CRNRSTN_WAV', (int) _crnrstn_int_return('CRNRSTN_WAV'));
@define('CRNRSTN_WAVE', (int) _crnrstn_int_return('CRNRSTN_WAVE'));
@define('CRNRSTN_WMA', (int) _crnrstn_int_return('CRNRSTN_WMA'));
@define('CRNRSTN_WMV', (int) _crnrstn_int_return('CRNRSTN_WMV'));
@define('CRNRSTN_ASF', (int) _crnrstn_int_return('CRNRSTN_ASF'));
@define('CRNRSTN_WM', (int) _crnrstn_int_return('CRNRSTN_WM'));
@define('CRNRSTN_WAX', (int) _crnrstn_int_return('CRNRSTN_WAX'));
@define('CRNRSTN_WVX', (int) _crnrstn_int_return('CRNRSTN_WVX'));
@define('CRNRSTN_ASX', (int) _crnrstn_int_return('CRNRSTN_ASX'));
@define('CRNRSTN_WMX', (int) _crnrstn_int_return('CRNRSTN_WMX'));
@define('CRNRSTN_OGG', (int) _crnrstn_int_return('CRNRSTN_OGG'));
@define('CRNRSTN_WEBA', (int) _crnrstn_int_return('CRNRSTN_WEBA'));
@define('CRNRSTN_3GP', (int) _crnrstn_int_return('CRNRSTN_3GP'));
@define('CRNRSTN_3G2', (int) _crnrstn_int_return('CRNRSTN_3G2'));
@define('CRNRSTN_OPUS', (int) _crnrstn_int_return('CRNRSTN_OPUS'));
@define('CRNRSTN_M3U', (int) _crnrstn_int_return('CRNRSTN_M3U'));
@define('CRNRSTN_OGV', (int) _crnrstn_int_return('CRNRSTN_OGV'));
@define('CRNRSTN_WEBM', (int) _crnrstn_int_return('CRNRSTN_WEBM'));
@define('CRNRSTN_MP4', (int) _crnrstn_int_return('CRNRSTN_MP4'));
@define('CRNRSTN_M4A', (int) _crnrstn_int_return('CRNRSTN_M4A'));
@define('CRNRSTN_M4P', (int) _crnrstn_int_return('CRNRSTN_M4P'));
@define('CRNRSTN_M4B', (int) _crnrstn_int_return('CRNRSTN_M4B'));
@define('CRNRSTN_M4R', (int) _crnrstn_int_return('CRNRSTN_M4R'));
@define('CRNRSTN_M4V', (int) _crnrstn_int_return('CRNRSTN_M4V'));
@define('CRNRSTN_MPE', (int) _crnrstn_int_return('CRNRSTN_MPE'));
@define('CRNRSTN_MPEG', (int) _crnrstn_int_return('CRNRSTN_MPEG'));
@define('CRNRSTN_MPV2', (int) _crnrstn_int_return('CRNRSTN_MPV2'));
@define('CRNRSTN_M1V', (int) _crnrstn_int_return('CRNRSTN_M1V'));
@define('CRNRSTN_M2V', (int) _crnrstn_int_return('CRNRSTN_M2V'));
@define('CRNRSTN_MOV', (int) _crnrstn_int_return('CRNRSTN_MOV'));
@define('CRNRSTN_QT', (int) _crnrstn_int_return('CRNRSTN_QT'));
@define('CRNRSTN_QIF', (int) _crnrstn_int_return('CRNRSTN_QIF'));
@define('CRNRSTN_QTI', (int) _crnrstn_int_return('CRNRSTN_QTI'));
@define('CRNRSTN_QTIF', (int) _crnrstn_int_return('CRNRSTN_QTIF'));
@define('CRNRSTN_QTC', (int) _crnrstn_int_return('CRNRSTN_QTC'));
@define('CRNRSTN_MOVIE', (int) _crnrstn_int_return('CRNRSTN_MOVIE'));
@define('CRNRSTN_MV', (int) _crnrstn_int_return('CRNRSTN_MV'));
@define('CRNRSTN_SWF', (int) _crnrstn_int_return('CRNRSTN_SWF'));
@define('CRNRSTN_AVI', (int) _crnrstn_int_return('CRNRSTN_AVI'));
@define('CRNRSTN_AVS', (int) _crnrstn_int_return('CRNRSTN_AVS'));
@define('CRNRSTN_MJPG', (int) _crnrstn_int_return('CRNRSTN_MJPG'));
@define('CRNRSTN_TS', (int) _crnrstn_int_return('CRNRSTN_TS'));
@define('CRNRSTN_EOT', (int) _crnrstn_int_return('CRNRSTN_EOT'));
@define('CRNRSTN_ABW', (int) _crnrstn_int_return('CRNRSTN_ABW'));
@define('CRNRSTN_ARC', (int) _crnrstn_int_return('CRNRSTN_ARC'));
@define('CRNRSTN_AZW', (int) _crnrstn_int_return('CRNRSTN_AZW'));
@define('CRNRSTN_BIN', (int) _crnrstn_int_return('CRNRSTN_BIN'));
@define('CRNRSTN_PL', (int) _crnrstn_int_return('CRNRSTN_PL'));
@define('CRNRSTN_PLX', (int) _crnrstn_int_return('CRNRSTN_PLX'));
@define('CRNRSTN_PM', (int) _crnrstn_int_return('CRNRSTN_PM'));
@define('CRNRSTN_XS', (int) _crnrstn_int_return('CRNRSTN_XS'));
@define('CRNRSTN_POD', (int) _crnrstn_int_return('CRNRSTN_POD'));
@define('CRNRSTN_CGI', (int) _crnrstn_int_return('CRNRSTN_CGI'));
@define('CRNRSTN_CMD', (int) _crnrstn_int_return('CRNRSTN_CMD'));
@define('CRNRSTN_BTM', (int) _crnrstn_int_return('CRNRSTN_BTM'));
@define('CRNRSTN_CDA', (int) _crnrstn_int_return('CRNRSTN_CDA'));
@define('CRNRSTN_CSH', (int) _crnrstn_int_return('CRNRSTN_CSH'));
@define('CRNRSTN_ODT', (int) _crnrstn_int_return('CRNRSTN_ODT'));
@define('CRNRSTN_ODP', (int) _crnrstn_int_return('CRNRSTN_ODP'));
@define('CRNRSTN_ODS', (int) _crnrstn_int_return('CRNRSTN_ODS'));
@define('CRNRSTN_PDF', (int) _crnrstn_int_return('CRNRSTN_PDF'));
@define('CRNRSTN_WKS', (int) _crnrstn_int_return('CRNRSTN_WKS'));
@define('CRNRSTN_WPS', (int) _crnrstn_int_return('CRNRSTN_WPS'));
@define('CRNRSTN_WPD', (int) _crnrstn_int_return('CRNRSTN_WPD'));
@define('CRNRSTN_DOC', (int) _crnrstn_int_return('CRNRSTN_DOC'));
@define('CRNRSTN_WORD', (int) _crnrstn_int_return('CRNRSTN_WORD'));
@define('CRNRSTN_W6W', (int) _crnrstn_int_return('CRNRSTN_W6W'));
@define('CRNRSTN_XLSX', (int) _crnrstn_int_return('CRNRSTN_XLSX'));
@define('CRNRSTN_PPTX', (int) _crnrstn_int_return('CRNRSTN_PPTX'));
@define('CRNRSTN_DOCX', (int) _crnrstn_int_return('CRNRSTN_DOCX'));
@define('CRNRSTN_DOCM', (int) _crnrstn_int_return('CRNRSTN_DOCM'));
@define('CRNRSTN_DOTM', (int) _crnrstn_int_return('CRNRSTN_DOTM'));
@define('CRNRSTN_DOTX', (int) _crnrstn_int_return('CRNRSTN_DOTX'));
@define('CRNRSTN_PPSX', (int) _crnrstn_int_return('CRNRSTN_PPSX'));
@define('CRNRSTN_POTX', (int) _crnrstn_int_return('CRNRSTN_POTX'));
@define('CRNRSTN_SLDX', (int) _crnrstn_int_return('CRNRSTN_SLDX'));
@define('CRNRSTN_VSD', (int) _crnrstn_int_return('CRNRSTN_VSD'));
@define('CRNRSTN_MPKG', (int) _crnrstn_int_return('CRNRSTN_MPKG'));
@define('CRNRSTN_OGX', (int) _crnrstn_int_return('CRNRSTN_OGX'));
@define('CRNRSTN_RAR', (int) _crnrstn_int_return('CRNRSTN_RAR'));
@define('CRNRSTN_SH', (int) _crnrstn_int_return('CRNRSTN_SH'));
@define('CRNRSTN_DWG', (int) _crnrstn_int_return('CRNRSTN_DWG'));
@define('CRNRSTN_ARJ', (int) _crnrstn_int_return('CRNRSTN_ARJ'));
@define('CRNRSTN_ASD', (int) _crnrstn_int_return('CRNRSTN_ASD'));
@define('CRNRSTN_ASN', (int) _crnrstn_int_return('CRNRSTN_ASN'));
@define('CRNRSTN_CCAD', (int) _crnrstn_int_return('CRNRSTN_CCAD'));
@define('CRNRSTN_DRW', (int) _crnrstn_int_return('CRNRSTN_DRW'));
@define('CRNRSTN_DXF', (int) _crnrstn_int_return('CRNRSTN_DXF'));
@define('CRNRSTN_UNV', (int) _crnrstn_int_return('CRNRSTN_UNV'));
@define('CRNRSTN_IGES', (int) _crnrstn_int_return('CRNRSTN_IGES'));
@define('CRNRSTN_IGS', (int) _crnrstn_int_return('CRNRSTN_IGS'));
@define('CRNRSTN_HQX', (int) _crnrstn_int_return('CRNRSTN_HQX'));
@define('CRNRSTN_MDB', (int) _crnrstn_int_return('CRNRSTN_MDB'));
@define('CRNRSTN_XLA', (int) _crnrstn_int_return('CRNRSTN_XLA'));
@define('CRNRSTN_XLS', (int) _crnrstn_int_return('CRNRSTN_XLS'));
@define('CRNRSTN_XLT', (int) _crnrstn_int_return('CRNRSTN_XLT'));
@define('CRNRSTN_XLM', (int) _crnrstn_int_return('CRNRSTN_XLM'));
@define('CRNRSTN_XLSM', (int) _crnrstn_int_return('CRNRSTN_XLSM'));
@define('CRNRSTN_XLSB', (int) _crnrstn_int_return('CRNRSTN_XLSB'));
@define('CRNRSTN_XLAM', (int) _crnrstn_int_return('CRNRSTN_XLAM'));
@define('CRNRSTN_XLTM', (int) _crnrstn_int_return('CRNRSTN_XLTM'));
@define('CRNRSTN_XLW', (int) _crnrstn_int_return('CRNRSTN_XLW'));
@define('CRNRSTN_POT', (int) _crnrstn_int_return('CRNRSTN_POT'));
@define('CRNRSTN_PPS', (int) _crnrstn_int_return('CRNRSTN_PPS'));
@define('CRNRSTN_PPT', (int) _crnrstn_int_return('CRNRSTN_PPT'));
@define('CRNRSTN_PPTM', (int) _crnrstn_int_return('CRNRSTN_PPTM'));
@define('CRNRSTN_POTM', (int) _crnrstn_int_return('CRNRSTN_POTM'));
@define('CRNRSTN_PPAM', (int) _crnrstn_int_return('CRNRSTN_PPAM'));
@define('CRNRSTN_PPSM', (int) _crnrstn_int_return('CRNRSTN_PPSM'));
@define('CRNRSTN_SLDM', (int) _crnrstn_int_return('CRNRSTN_SLDM'));
@define('CRNRSTN_PA', (int) _crnrstn_int_return('CRNRSTN_PA'));
@define('CRNRSTN_MPP', (int) _crnrstn_int_return('CRNRSTN_MPP'));
@define('CRNRSTN_WRI', (int) _crnrstn_int_return('CRNRSTN_WRI'));
@define('CRNRSTN_ODA', (int) _crnrstn_int_return('CRNRSTN_ODA'));
@define('CRNRSTN_FLA', (int) _crnrstn_int_return('CRNRSTN_FLA'));
@define('CRNRSTN_FLV', (int) _crnrstn_int_return('CRNRSTN_FLV'));
@define('CRNRSTN_AI', (int) _crnrstn_int_return('CRNRSTN_AI'));
@define('CRNRSTN_PSD', (int) _crnrstn_int_return('CRNRSTN_PSD'));
@define('CRNRSTN_EPS', (int) _crnrstn_int_return('CRNRSTN_EPS'));
@define('CRNRSTN_PS', (int) _crnrstn_int_return('CRNRSTN_PS'));
@define('CRNRSTN_PART', (int) _crnrstn_int_return('CRNRSTN_PART'));
@define('CRNRSTN_PRT', (int) _crnrstn_int_return('CRNRSTN_PRT'));
@define('CRNRSTN_SET', (int) _crnrstn_int_return('CRNRSTN_SET'));
@define('CRNRSTN_STL', (int) _crnrstn_int_return('CRNRSTN_STL'));
@define('CRNRSTN_SOL', (int) _crnrstn_int_return('CRNRSTN_SOL'));
@define('CRNRSTN_ST', (int) _crnrstn_int_return('CRNRSTN_ST'));
@define('CRNRSTN_STEP', (int) _crnrstn_int_return('CRNRSTN_STEP'));
@define('CRNRSTN_STP', (int) _crnrstn_int_return('CRNRSTN_STP'));
@define('CRNRSTN_VDA', (int) _crnrstn_int_return('CRNRSTN_VDA'));
@define('CRNRSTN_BCPIO', (int) _crnrstn_int_return('CRNRSTN_BCPIO'));
@define('CRNRSTN_CPIO', (int) _crnrstn_int_return('CRNRSTN_CPIO'));
@define('CRNRSTN_DCR', (int) _crnrstn_int_return('CRNRSTN_DCR'));
@define('CRNRSTN_DIR', (int) _crnrstn_int_return('CRNRSTN_DIR'));
@define('CRNRSTN_DXR', (int) _crnrstn_int_return('CRNRSTN_DXR'));
@define('CRNRSTN_DVI', (int) _crnrstn_int_return('CRNRSTN_DVI'));
@define('CRNRSTN_DWF', (int) _crnrstn_int_return('CRNRSTN_DWF'));
@define('CRNRSTN_HDF', (int) _crnrstn_int_return('CRNRSTN_HDF'));
@define('CRNRSTN_LATEX', (int) _crnrstn_int_return('CRNRSTN_LATEX'));
@define('CRNRSTN_MIF', (int) _crnrstn_int_return('CRNRSTN_MIF'));
@define('CRNRSTN_CDF', (int) _crnrstn_int_return('CRNRSTN_CDF'));
@define('CRNRSTN_NC', (int) _crnrstn_int_return('CRNRSTN_NC'));
@define('CRNRSTN_SHAR', (int) _crnrstn_int_return('CRNRSTN_SHAR'));
@define('CRNRSTN_SIT', (int) _crnrstn_int_return('CRNRSTN_SIT'));
@define('CRNRSTN_SV4CPIO', (int) _crnrstn_int_return('CRNRSTN_SV4CPIO'));
@define('CRNRSTN_SV4CRC', (int) _crnrstn_int_return('CRNRSTN_SV4CRC'));
@define('CRNRSTN_TCL', (int) _crnrstn_int_return('CRNRSTN_TCL'));
@define('CRNRSTN_TEXI', (int) _crnrstn_int_return('CRNRSTN_TEXI'));
@define('CRNRSTN_TEXINFO', (int) _crnrstn_int_return('CRNRSTN_TEXINFO'));
@define('CRNRSTN_ROFF', (int) _crnrstn_int_return('CRNRSTN_ROFF'));
@define('CRNRSTN_T', (int) _crnrstn_int_return('CRNRSTN_T'));
@define('CRNRSTN_TR', (int) _crnrstn_int_return('CRNRSTN_TR'));
@define('CRNRSTN_MAN', (int) _crnrstn_int_return('CRNRSTN_MAN'));
@define('CRNRSTN_ME', (int) _crnrstn_int_return('CRNRSTN_ME'));
@define('CRNRSTN_MS', (int) _crnrstn_int_return('CRNRSTN_MS'));
@define('CRNRSTN_USTAR', (int) _crnrstn_int_return('CRNRSTN_USTAR'));
@define('CRNRSTN_SRC', (int) _crnrstn_int_return('CRNRSTN_SRC'));
@define('CRNRSTN_HLP', (int) _crnrstn_int_return('CRNRSTN_HLP'));
@define('CRNRSTN_AU', (int) _crnrstn_int_return('CRNRSTN_AU'));
@define('CRNRSTN_SND', (int) _crnrstn_int_return('CRNRSTN_SND'));
@define('CRNRSTN_AIF', (int) _crnrstn_int_return('CRNRSTN_AIF'));
@define('CRNRSTN_AIFC', (int) _crnrstn_int_return('CRNRSTN_AIFC'));
@define('CRNRSTN_AIFF', (int) _crnrstn_int_return('CRNRSTN_AIFF'));
@define('CRNRSTN_VOC', (int) _crnrstn_int_return('CRNRSTN_VOC'));
@define('CRNRSTN_IEF', (int) _crnrstn_int_return('CRNRSTN_IEF'));
@define('CRNRSTN_RAS', (int) _crnrstn_int_return('CRNRSTN_RAS'));
@define('CRNRSTN_PNM', (int) _crnrstn_int_return('CRNRSTN_PNM'));
@define('CRNRSTN_PBM', (int) _crnrstn_int_return('CRNRSTN_PBM'));
@define('CRNRSTN_PGM', (int) _crnrstn_int_return('CRNRSTN_PGM'));
@define('CRNRSTN_PPM', (int) _crnrstn_int_return('CRNRSTN_PPM'));
@define('CRNRSTN_RGB', (int) _crnrstn_int_return('CRNRSTN_RGB'));
@define('CRNRSTN_XBM', (int) _crnrstn_int_return('CRNRSTN_XBM'));
@define('CRNRSTN_XPM', (int) _crnrstn_int_return('CRNRSTN_XPM'));
@define('CRNRSTN_XWD', (int) _crnrstn_int_return('CRNRSTN_XWD'));
@define('CRNRSTN_RTX', (int) _crnrstn_int_return('CRNRSTN_RTX'));
@define('CRNRSTN_ETX', (int) _crnrstn_int_return('CRNRSTN_ETX'));
@define('CRNRSTN_SGM', (int) _crnrstn_int_return('CRNRSTN_SGM'));
@define('CRNRSTN_SGML', (int) _crnrstn_int_return('CRNRSTN_SGML'));
@define('CRNRSTN_VDO', (int) _crnrstn_int_return('CRNRSTN_VDO'));
@define('CRNRSTN_VIV', (int) _crnrstn_int_return('CRNRSTN_VIV'));
@define('CRNRSTN_VIVO', (int) _crnrstn_int_return('CRNRSTN_VIVO'));
@define('CRNRSTN_ICE', (int) _crnrstn_int_return('CRNRSTN_ICE'));
@define('CRNRSTN_SVR', (int) _crnrstn_int_return('CRNRSTN_SVR'));
@define('CRNRSTN_WRL', (int) _crnrstn_int_return('CRNRSTN_WRL'));
@define('CRNRSTN_VRT', (int) _crnrstn_int_return('CRNRSTN_VRT'));
@define('CRNRSTN_EXE', (int) _crnrstn_int_return('CRNRSTN_EXE'));
@define('CRNRSTN_BIT', (int) _crnrstn_int_return('CRNRSTN_BIT'));
@define('CRNRSTN_PAGES', (int) _crnrstn_int_return('CRNRSTN_PAGES'));
@define('CRNRSTN_KEY', (int) _crnrstn_int_return('CRNRSTN_KEY'));
@define('CRNRSTN_AFPHOTO', (int) _crnrstn_int_return('CRNRSTN_AFPHOTO'));
@define('CRNRSTN_AFDESIGN', (int) _crnrstn_int_return('CRNRSTN_AFDESIGN'));
@define('CRNRSTN_CDR', (int) _crnrstn_int_return('CRNRSTN_CDR'));
@define('CRNRSTN_CPT', (int) _crnrstn_int_return('CRNRSTN_CPT'));
@define('CRNRSTN_JS_FRAMEWORK_JQUERY', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_JQUERY'));
@define('CRNRSTN_JS_FRAMEWORK_JQUERY_3_7_0', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_JQUERY_3_7_0'));
@define('CRNRSTN_JS_FRAMEWORK_JQUERY_3_6_1', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_JQUERY_3_6_1'));
@define('CRNRSTN_JS_FRAMEWORK_JQUERY_2_2_4', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_JQUERY_2_2_4'));
@define('CRNRSTN_JS_FRAMEWORK_JQUERY_1_12_4', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_JQUERY_1_12_4'));
@define('CRNRSTN_JS_FRAMEWORK_JQUERY_1_11_1', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_JQUERY_1_11_1'));
@define('CRNRSTN_JS_FRAMEWORK_JQUERY_UI', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_JQUERY_UI'));
@define('CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_13_2', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_13_2'));
@define('CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_12_1', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_12_1'));
@define('CRNRSTN_JS_FRAMEWORK_JQUERY_MOBILE', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_JQUERY_MOBILE'));
@define('CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS'));
@define('CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_11_3', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_11_3'));
@define('CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_10_0', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_10_0'));
@define('CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_PLUS_JQUERY', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_PLUS_JQUERY'));
@define('CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_03_3', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_03_3'));
@define('CRNRSTN_JS_FRAMEWORK_REACT_CDN', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_REACT_CDN'));
@define('CRNRSTN_JS_FRAMEWORK_REACT_CDN_18_2_0', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_REACT_CDN_18_2_0'));
@define('CRNRSTN_JS_FRAMEWORK_REACT_DOM_CDN', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_REACT_DOM_CDN'));
@define('CRNRSTN_JS_FRAMEWORK_REACT_DOM_CDN_18_2_0', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_REACT_DOM_CDN_18_2_0'));
@define('CRNRSTN_JS_FRAMEWORK_MITHRIL_CDN', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_MITHRIL_CDN'));
@define('CRNRSTN_JS_FRAMEWORK_MITHRIL_CDN_2_2_2', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_MITHRIL_CDN_2_2_2'));
@define('CRNRSTN_JS_FRAMEWORK_BACKBONE', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_BACKBONE'));
@define('CRNRSTN_JS_FRAMEWORK_BACKBONE_1_4_1', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_BACKBONE_1_4_1'));
@define('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_UMD', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_UMD'));
@define('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD'));
@define('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_ESM', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_ESM'));
@define('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM'));
@define('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_UMD_EDGE', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_UMD_EDGE'));
@define('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_ESM_EDGE', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_ESM_EDGE'));
@define('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_CDN', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_CDN'));
@define('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_CDN', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_CDN'));
@define('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_UNPKG', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_UNPKG'));
@define('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_UNPKG', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_UNPKG'));
@define('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_PAGECDN', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_PAGECDN'));
@define('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_PAGECDN', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_PAGECDN'));
@define('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_CDNJS', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_CDNJS'));
@define('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_CDNJS', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_CDNJS'));
@define('CRNRSTN_JS_FRAMEWORK_PROTOTYPE', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_PROTOTYPE'));
@define('CRNRSTN_JS_FRAMEWORK_PROTOTYPE_1_7_3', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_PROTOTYPE_1_7_3'));
@define('CRNRSTN_JS_FRAMEWORK_SCRIPTACULOUS', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_SCRIPTACULOUS'));
@define('CRNRSTN_JS_FRAMEWORK_PROTOTYPE_MOOFX', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_PROTOTYPE_MOOFX'));
@define('CRNRSTN_JS_FRAMEWORK_SWFOBJECT_DOT_JS', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_SWFOBJECT_DOT_JS'));
@define('CRNRSTN_JS_FRAMEWORK_MOOTOOLS_MORE', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_MOOTOOLS_MORE'));
@define('CRNRSTN_JS_FRAMEWORK_MOOTOOLS_MORE_1_6_0', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_MOOTOOLS_MORE_1_6_0'));
@define('CRNRSTN_JS_FRAMEWORK_MOOTOOLS_CORE', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_MOOTOOLS_CORE'));
@define('CRNRSTN_JS_FRAMEWORK_MOOTOOLS_CORE_1_6_0', (int) _crnrstn_int_return('CRNRSTN_JS_FRAMEWORK_MOOTOOLS_CORE_1_6_0'));
@define('CRNRSTN_CSS_FRAMEWORK_SIMPLE_GRID', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_SIMPLE_GRID'));
@define('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM'));
@define('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_24COL', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_24COL'));
@define('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_16COL', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_16COL'));
@define('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_12COL', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_12COL'));
@define('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_24COL_RTL', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_24COL_RTL'));
@define('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_16COL_RTL', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_16COL_RTL'));
@define('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_12COL_RTL', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_12COL_RTL'));
@define('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_RTL', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_RTL'));
@define('CRNRSTN_CSS_FRAMEWORK_FOUNDATION', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_FOUNDATION'));
@define('CRNRSTN_CSS_FRAMEWORK_FOUNDATION_6_7_5', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_FOUNDATION_6_7_5'));
@define('CRNRSTN_CSS_FRAMEWORK_HTML5_BOILERPLATE', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_HTML5_BOILERPLATE'));
@define('CRNRSTN_CSS_FRAMEWORK_HTML5_BOILERPLATE_8_0_0', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_HTML5_BOILERPLATE_8_0_0'));
@define('CRNRSTN_CSS_FRAMEWORK_RESPONSIVE_GRID_SYSTEM', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_RESPONSIVE_GRID_SYSTEM'));
@define('CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC'));
@define('CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RESET', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RESET'));
@define('CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RESET_RTL', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RESET_RTL'));
@define('CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RTL', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RTL'));
@define('CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_ADAPT', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_ADAPT'));
@define('CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_ADAPT_RTL', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_ADAPT_RTL'));
@define('CRNRSTN_CSS_FRAMEWORK_DEAD_SIMPLE_GRID', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_DEAD_SIMPLE_GRID'));
@define('CRNRSTN_CSS_FRAMEWORK_SKELETON', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_SKELETON'));
@define('CRNRSTN_CSS_FRAMEWORK_RWDGRID', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_RWDGRID'));
@define('CRNRSTN_CSS_FRAMEWORK_RWDGRID_2_0', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_RWDGRID_2_0'));
@define('CRNRSTN_CSS_FRAMEWORK_THIS_IS_DALLAS_SIMPLE_GRID', (int) _crnrstn_int_return('CRNRSTN_CSS_FRAMEWORK_THIS_IS_DALLAS_SIMPLE_GRID'));

# C # R # N # R # S # T # N # :: # L # I # G # H # T
CRNRSTN :: v2.00.0000
BIT FLIPPED ARCHITECTURE (BITWISE OPERATIONS) 
BASED LOG SILO INTEGER CONSTANT PROJECTION :: 
Wednesday, April 7, 2021 @ 0044 hrs.

~ CRNRSTN_CONFIGURATION
    ~ CRNRSTN_SETTINGS_APACHE
    ~ CRNRSTN_SETTINGS_MYSQLI
    ~ CRNRSTN_SETTINGS_PHP
    ~ CRNRSTN_SETTINGS_CRNRSTN

~ CRNRSTN_DATABASE
    ~ CRNRSTN_DATABASE_CONNECTION
    ~ CRNRSTN_DATABASE_QUERY_SILO
    ~ CRNRSTN_DATABASE_QUERY_DYNAMIC
    ~ CRNRSTN_DATABASE_RESULTSET

~ CRNRSTN_GABRIEL
    ~ CRNRSTN_SMTP_AUTHENTICATION
    ~ CRNRSTN_GABRIEL
    ~ CRNRSTN_EMAIL_DYNAMIC

~ CRNRSTN_ELECTRUM
    ~ CRNRSTN_ELECTRUM_THREAD
    ~ CRNRSTN_ELECTRUM_COMM
    ~ CRNRSTN_ELECTRUM_FTP
    ~ CRNRSTN_ELECTRUM_LOCALDIR

[PERFORMANCE_MONITORING]

~ CRNRSTN_FILE_MANAGEMENT
    ~ CRNRSTN_CREATIVE_EMBED
    ~ CRNRSTN_FILE_RECEIVE
    ~ CRNRSTN_FILE_LOCALDIR_MOVE
    ~ CRNRSTN_FILE_FTP_SEND
    ~ CRNRSTN_FILE_FTP_RECEIVE
    ~ CRNRSTN_FILE_SOAP_SEND
    ~ CRNRSTN_FILE_SOAP_RECEIVE
    ~ CRNRSTN_FILE_CURL_SEND
    ~ CRNRSTN_FILE_CURL_RECEIVE

[VALIDATION_AND_TOLERANCES]
~ CRNRSTN_CSS_EMAIL_CLIENT_VALIDATE

~ CRNRSTN_BARNEY
    ~ CRNRSTN_BARNEY_DATABASE
    ~ CRNRSTN_BARNEY_FILE
    ~ CRNRSTN_BARNEY_FTP
    ~ CRNRSTN_BARNEY_ELECTRUM
    ~ CRNRSTN_BARNEY_GABRIEL
    ~ CRNRSTN_BARNEY_DISK

~ CRNRSTN_SOAP_SERVICES
    ~ CRNRSTN_PROXY_KINGS_HIGHWAY
    ~ CRNRSTN_PROXY_EMAIL
    ~ CRNRSTN_PROXY_ELECTRUM
    ~ CRNRSTN_PROXY_AUTHENTICATE

[DEBUGGING_ASSISTANCE_MODES]
~ CRNRSTN_LOG_ALL
~ CRNRSTN_LOG_NONE

# C # R # N # R # S # T # N # :: # L # I # G # H # T
ORIGINAL LOG SILO "STRING KEYS" PRE-CRNRSTN :: v2.00.0000 DEVELOPMENT ::
CIRCA ~2020 - Wednesday, April 7, 2021 @ 0044hrs

CRNRSTN_GABRIEL
CRNRSTN_CONFIGURATION_ERR
CRNRSTN_CONFIGURATION
CERTAIN_DESTRUCTION
CRNRSTN_ELECTRUM
CRNRSTN_LOG_TRACE
CRNRSTN_LOGGING_TEST
CRNRSTN_SYSTEM_NOTIFICATION
CRNRSTN_oELECTRUM_COMM
CRNRSTN_ELECTRUM
CRNRSTN_oELECTRUM
CRNRSTN_oELECTRUM_EXEC
CRNRSTN_oELECTRUM_FTP_DEBUG
CRNRSTN_LOG_ALL
ERROR
*
CRNRSTN_CSS
CRNRSTN_DATABASE
CRNRSTN_INTEGRATION_ACTIVITY
CRNRSTN_IMAGE_HTML

*/