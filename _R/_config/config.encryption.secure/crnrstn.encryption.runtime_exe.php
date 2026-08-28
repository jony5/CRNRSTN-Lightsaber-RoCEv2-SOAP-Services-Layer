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
 * RUNTIME EXECUTABLE :: /_R/_config/config.encryption.secure/crnrstn.encryption.runtime_exe.php
 * EXECUTABLE VERSION :: 1.00.0000
 * DATE               :: Monday, July 22, 2024 @ 0704 hrs.
 * AUTHOR             :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                :: http://evifweb.jony5.com/
 * TITLE              :: The CRNRSTN :: Lightsaber SOAP
 *                       Services Layer Multi-Channel
 *                       Decoupled Data Object (MC-DDO)
 *                       OpenSSL Data Encryption
 *                       Profile Initialization
 *                       Runtime Executable
 * DESCRIPTION        :: Configure OpenSSL data
 *                       encryption profiles for all
 *                       proprietary data transport
 *                       architectures or "data
 *                       storage channels" of the
 *                       CRNRSTN :: Lightsaber SOAP
 *                       Services Layer Multi-Channel
 *                       Decoupled Data object (MC-DDO)
 *                       data storage architecture.
 *
 *                       These profiles support
 *                       encrypted payload delivery
 *                       across 10 channels, and do
 *                       this for each server
 *                       environment that CRNRSTN ::
 *                       Lightsaber will support
 *                       at runtime.
 *
 *
 *                       5
 *
 *                       Monday, July 22, 2024 @ 0920 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 *The CRNRSTN :: Lightsaber SOAP
 *Services Layer Multi-Channel
 *Decoupled Data Object (MC-DDO)
 *Services Layer channels are
 *defined as follows:
 *
 *   G :: HTTP $_GET Request
 *
 *        An OpenSSL encrypted JSON
 *        object appended to every
 *        system generated HTML link
 *        for system data
 *        payload carry.
 *
 *   P :: HTTP $_POST Request
 *
 *        This is an OpenSSL encrypted
 *        JSON object <INPUT type="hidden">
 *        to every system generated HTML form
 *        for system data payload carry.
 *
 *   H :: PHP SERVER Session
 *
 *        This is an OpenSSL encrypted
 *        JSON object stored in the
 *        $_SESSION super global array.
 *
 *   S :: CRNRSTN :: SOAP Services Data Tunnel
 *        Layer Architecture (SSDTLA) Packet.
 *
 *        This is a SOAP wrapped Pseudo-SOAP
 *        Services Data Tunnel Layer
 *        Architecture (PSSDTLA) packet.
 *
 *        The browser will talk like
 *        a server.
 *
 *   J :: CRNRSTN :: Pseudo-SOAP Services Data
 *        Tunnel Layer Architecture
 *        (PSSDTLA) Packet.
 *
 *        An OpenSSL encrypted JSON object
 *        stored in the browser HTML as
 *        hidden form <INPUT> data.
 *
 *   C :: CRNRSTN :: Carrier Pigeon (Cookie)
 *
 *        An avian of homing variant...or a
 *        browser cookie...within which is
 *        stored an OpenSSL encrypted
 *        JSON object.
 *
 *   D :: Database (MySQLi Connection)
 *
 *        This is an OpenSSL encrypted
 *        JSON object stored in
 *        the database.
 *
 *   R :: Runtime
 *
 *        The CRNRSTN :: MC-DDO
 *        system default.
 *
 *   O :: Simple Object Access Protocol
 *        (NuSOAP 0.9.5, SOAP 1.1)
 *
 *   M :: Remote Direct Memory Access 
 *
 *        Remote Direct Memory 
 *        Access (RDMA, RoCE, or 
 *        RoCEv2) Data Storage and 
 *        Application Acceleration 
 *        Architecture, or simply 
 *        "the R" in CLR-SSL.
 *
 *   F :: Server Local File System
 *
 *        This is an OpenSSL encrypted
 *        JSON object written to the
 *        file system.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * The CRNRSTN :: Lightsaber
 * SOAP Services Layer system
 * default order of operations
 * for the initialization of
 * its proprietary data transport
 * architectures, protocols,
 * and channels is as follows:
 *
 * GPHSJCDROMF
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE            :: MIT | https://crnrstn.jony5.com/licensing/
 *
 */

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Added a data handling architecture 
 *       channel to the stack behind SOAP: 
 *
 *       M :: Remote Direct Memory 
 *            Access (RDMA, RoCE, or 
 *            RoCEv2) Data Storage 
 *            and Application Acceleration 
 *            Architecture, or simply 
 *            "the R" in CLR-SSL.
 *
 *            GPHSJCDROMF
 *
 *       5 :: Saturday, February 7, 2026 @ 1502 hrs.
 *
 */

/*
 * $oCRNRSTN->init_session_encryption()
 * TODO :: FACILITATE GRACEFUL 
 *         ROTATION OF THESE 
 *         ENCRYPTION PROTOCOLS.   
 *         See the OERSL.
 *
 * DESCRIPTION :: 
 * To configure any of your SERVER 
 * environments to hide persistent 
 * CRNRSTN :: configuration session 
 * data behind a layer of encryption, 
 * run $oCRNRSTN->init_session_encryption()
 * as defined below...specifying the 
 * environmental key for each 
 * environment where encryption is 
 * desired. The use of CRNRSTN :: to 
 * read data from and write data to 
 * session will apply these configured 
 * encryption settings upon all data 
 * types wherein the encryption of data 
 * is actually possible. E.g. objects 
 * will not be encrypted. 
 *
 * CAUTION: This feature WILL increase 
 *          server load.
 *
 * CAUTION: CRNRSTN :: applies a 
 *          combination of encryption cipher 
 *          and HMAC keyed hash value data
 *          manipulations and comparisons 
 *          to store and verify CRNRSTN :: 
 *          session data. 
 * 
 * Some encryption-cipher / HMAC-algorithm 
 * combinations will not be compatible 
 * with CRNRSTN :: due to how they 
 * are applied to the data when 
 * encryption is initialized...so 
 * please test your encryption 
 * configuration before applying 
 * these settings to your 
 * production environment. 
 *
 * @param   string $env_key is a custom 
 *          user-defined value representing 
 *          a specific environment within 
 *          which this application will be 
 *          running and which key will be 
 *          used throughout this 
 *          configuration file + any 
 *          CRNRSTN :: resource includes 
 *          in order to align the necessary 
 *          functionality and resources to 
 *          said environment.
 *
 * @param   string $encryptCipher holds the 
 *          designation of the cipher to be 
 *          used. CRNRSTN :: ships with a 
 *          configuration debug page which 
 *          will expose all of the available 
 *          OpenSSL ciphers within the 
 *          running environment. 
 *
 *          This page is: crnrstn_config_debug.php 
 *          Also, for the same list of 
 *          recommended / available OpenSSL 
 *          ciphers in this environment, run: 
 *
 *          $oCRNRSTN_USR->openssl_get_cipher_methods(), 
 *
 *          which will return an array containing 
 *          OpenSSL ciphers in the array index 
 *          value position. 
 *
 *          E.g.:
 *          $return_array = $oCRNRSTN_USR->openssl_get_cipher_methods(); 
 *          foreach($return_array as $key => $openSSL_cipher){ 
 *
 *            echo $openSSL_cipher.'<br>'; 
 *
 *          }
 *
 * @param   string $encryptSecretKey contains 
 *          your secret password or hash to be 
 *          used in openSSL encrypt/decrypt 
 *          operations. 
 *
 * @param   int $encryptOptions contains a 
 *          bitwise disjunction of the flags 
 *          OPENSSL_RAW_DATA and 
 *          OPENSSL_ZERO_PADDING. 
 *
 * @param   string $hmac_alg contains 
 *          specification of the algorithm to 
 *          be used by CRNRSTN :: when using 
 *          the HMAC library to generate a 
 *          keyed hash value. For a list of 
 *          available algorithms 
 *          run hash_algos(). 
 *
 *          E.g. $return_array = hash_algos();
 *          foreach($return_array as $key => $algReturn){ 
 *
 *             echo $algReturn.'<br>';
 *
 *          }
 *
 * CAUTION :: Some hash_algos returned 
 * algorithms will NOT be compatible with 
 * hash_hmac() which CRNRSTN :: uses in 
 * validating it's decryption. And certain 
 * OpenSSL encryption cipher / hash_algos 
 * algorithm combinations will not be 
 * compatible. Please test the 
 * init_session_encryption() compatibility 
 * of your desired encryption cipher and 
 * hmac algorithm in each environment...
 * especially before releasing to 
 * production code base. 
 *
 * NOTE :: The available cipher methods 
 *         can differ between your dev 
 *         server and your production 
 *         server! They will depend on the 
 *         installation and compilation 
 *         options used for OpenSSL in 
 *         your machine(s). 
 *
 * Example from TOSHIBA M100 
 * [eVifweb] :: RADIOHEAD LAPTOP:
 * $oCRNRSTN->init_session_encryption(
 *            'LOCALHOST_PC', 
 *            'AES-192-OFB', 
 *            'this-Is-the-s3cret-encrypti0n-key', 
 *            OPENSSL_RAW_DATA, 
 *            'sha256');          
 */
$this->config_init_session_encryption(
	   'BLUEHOST_JONY5', 
	   'AES-256-CTR', 
	   '0(.sRg*QieO7@3Uc?di+mzL}=nQVC9Em', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_session_encryption(
	   'BLUEHOST_EVIFWEB', 
	   'AES-256-CTR', 
	   '}8gHpd?Q(7PKFqfscZ&7*ITDgdf@AKRt', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_session_encryption(
	   'LOCALHOST_CHAD_MACBOOKPRO', 
	   'AES-192-OFB', 
	   '7+yyZF9R#20@8fi2-p5(xyWE#j4: U3x', 
	   OPENSSL_RAW_DATA, 
	   'sha256');
$this->config_init_session_encryption(
	   'LOCALHOST_PC', 
	   'AES-192-OFB', 
	   'iB{5kb&0-I+C&MRF(i8Ip&ad4(igYN%#', 
	   OPENSSL_RAW_DATA, 
	   'sha256');

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * INITIALIZATION FOR ENCRYPTION :: 
 * CRNRSTN :: COOKIE DATA :: 
 * ADVANCED CONFIGURATION PARAMETERS.
 *
 */

/*
 * $oCRNRSTN->init_cookie_encryption()
 * TODO :: FACILITATE GRACEFUL 
 *         ROTATION OF THESE 
 *         ENCRYPTION PROTOCOLS.
 * 
 * DESCRIPTION :: To configure any of 
 * your SERVER environments to hide 
 * cookie data behind a layer of encryption, 
 * run $oCRNRSTN->init_cookie_encryption()...
 * as defined below...specifying the 
 * environmental key for each environment 
 * where this encryption is desired. 
 * 
 * The use of CRNRSTN :: to read and write 
 * cookie data will apply these configured 
 * encryption settings automatically. 
 *
 * CAUTION: This feature WILL increase 
 *          server load.
 *
 * CAUTION: CRNRSTN :: applies a 
 *          combination of encryption cipher 
 *          and HMAC keyed hash value data
 *          manipulations and comparisons 
 *          to store and verify CRNRSTN :: 
 *          session data. 
 * 
 * Some encryption-cipher / HMAC-algorithm 
 * combinations will not be compatible 
 * with CRNRSTN :: due to how they 
 * are applied to the data when 
 * encryption is initialized...so 
 * please test your encryption 
 * configuration before applying 
 * these settings to your 
 * production environment. 
 *
 * @param   string $env_key is a custom 
 *          user-defined value representing 
 *          a specific environment within 
 *          which this application will be 
 *          running and which key will be 
 *          used throughout this 
 *          configuration file + any 
 *          CRNRSTN :: resource includes 
 *          in order to align the necessary 
 *          functionality and resources to 
 *          said environment.
 *
 * @param   string $encryptCipher holds the 
 *          designation of the cipher to be 
 *          used. CRNRSTN :: ships with a 
 *          configuration debug page which 
 *          will expose all of the available 
 *          OpenSSL ciphers within the 
 *          running environment. 
 *
 *          This page is: crnrstn_config_debug.php 
 *          Also, for the same list of 
 *          recommended / available OpenSSL 
 *          ciphers in this environment, run: 
 *
 *          $oCRNRSTN_USR->openssl_get_cipher_methods(), 
 *
 *          which will return an array containing 
 *          OpenSSL ciphers in the array index 
 *          value position. 
 *
 *          E.g.:
 *          $return_array = $oCRNRSTN_USR->openssl_get_cipher_methods(); 
 *          foreach($return_array as $key => $openSSL_cipher){ 
 *
 *            echo $openSSL_cipher.'<br>'; 
 *
 *          }
 *
 * @param   string $encryptSecretKey contains 
 *          your secret password or hash to be 
 *          used in openSSL encrypt/decrypt 
 *          operations. 
 *
 * @param   int $encryptOptions contains a 
 *          bitwise disjunction of the flags 
 *          OPENSSL_RAW_DATA and 
 *          OPENSSL_ZERO_PADDING. 
 *
 * @param   string $hmac_alg contains 
 *          specification of the algorithm to 
 *          be used by CRNRSTN :: when using 
 *          the HMAC library to generate a 
 *          keyed hash value. For a list of 
 *          available algorithms 
 *          run hash_algos(). 
 *
 *          E.g. $return_array = hash_algos();
 *          foreach($return_array as $key => $algReturn){ 
 *
 *             echo $algReturn.'<br>';
 *
 *          }
 *
 * CAUTION :: Some hash_algos returned 
 * algorithms will NOT be compatible with 
 * hash_hmac() which CRNRSTN :: uses in 
 * validating it's decryption. And certain 
 * OpenSSL encryption cipher / hash_algos 
 * algorithm combinations will not be 
 * compatible. Please test the 
 * init_session_encryption() compatibility 
 * of your desired encryption cipher and 
 * hmac algorithm in each environment...
 * especially before releasing to 
 * production code base. 
 *
 * NOTE :: The available cipher methods 
 *         can differ between your dev 
 *         server and your production 
 *         server! They will depend on the 
 *         installation and compilation 
 *         options used for OpenSSL in 
 *         your machine(s). 
 *
 * Example from TOSHIBA M100 
 * [eVifweb] :: RADIOHEAD LAPTOP:
 * $oCRNRSTN->init_cookie_encryption(
 *            'LOCALHOST_PC', 
 *            'AES-192-OFB', 
 *            'this-Is-the-s3cret-encrypti0n-key', 
 *            OPENSSL_RAW_DATA, 
 *            'sha256');
 *
 */
$this->config_init_cookie_encryption(
	   'BLUEHOST_JONY5', 
	   'AES-256-CTR', 
	   'II0]E{w D:?vRrb+a-3&i]U9Ei~ABI4?', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_cookie_encryption(
	   'BLUEHOST_EVIFWEB', 
	   'AES-256-CTR', 
	   '4?4x&M$%nXiJ$4Qizs~&*cD~+~1~F]Ll', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_cookie_encryption(
	   'LOCALHOST_CHAD_MACBOOKPRO', 
	   'AES-256-CTR', 
	   '5T:J~ws:r#($EZYwWZG)k9$SsSPr&NR+', 
	   OPENSSL_RAW_DATA, 
	   'gost');
$this->config_init_cookie_encryption(
	   'LOCALHOST_PC', 
	   'AES-256-CTR', 
	   'M?3]~in?Y$K3DEeLZ:8frEuA &6uz4o5', 
	   OPENSSL_RAW_DATA, 
	   'gost');
/*
 * TOSHIBA M100 [eVifweb] :: 
 * RADIOHEAD LAPTOP. 
$this->config_init_cookie_encryption(
       'LOCALHOST_PC', 
       'AES-192-OFB', 
       'vVdE!n.Di4vk+=$0Yj:1-tb(aAD)4lc6', 
       OPENSSL_RAW_DATA, 
       'sha256');
 */

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * INITIALIZATION FOR ENCRYPTION :: 
 * CRNRSTN :: TUNNELLED DATA :: 
 * ADVANCED CONFIGURATION PARAMETERS. 
 *
 */
/**
 * $oCRNRSTN->init_tunnel_encryption()
 *
 * DESCRIPTION :: Application security and 
 * data hygiene can be significantly 
 * enhanced with the basic and consistent 
 * (only as strong as the weakest link) 
 * utilization of CRNRSTN and its encryption 
 * tunneling protocols. Sending data safely 
 * server to server (e.g. SOAP) and between 
 * the server and client can be achieved 
 * with minimal effort and maximum data 
 * integrity through the strategic 
 * application of this functionality across 
 * all data touch points within your 
 * application(s). 
 * 
 * I have some apps where all data contained 
 * within hidden form fields is encrypted. 
 * When I have foreign keys appended to a 
 * link that will go directly into the hidden 
 * fields of a form...and then directly into 
 * my database!!, I will NOT spend additional 
 * server resources to confirm their accuracy 
 * before the MySQL INSERT by racking up 
 * extra and peripheral MySQL database hits. 
 * 
 * If the data is corrupted in the link, 
 * data_decrypt() will throw an exception that 
 * can be handled with grace before the face 
 * of the end user (which could be my boss), 
 * and the database will only receive bona-
 * fide clean data. 
 *
 * CAUTION: This feature WILL increase 
 *          server load.
 *
 * CAUTION: CRNRSTN :: applies a 
 *          combination of encryption cipher 
 *          and HMAC keyed hash value data
 *          manipulations and comparisons 
 *          to store and verify CRNRSTN :: 
 *          session data. 
 * 
 * Some encryption-cipher / HMAC-algorithm 
 * combinations will not be compatible 
 * with CRNRSTN :: due to how they 
 * are applied to the data when 
 * encryption is initialized...so 
 * please test your encryption 
 * configuration before applying 
 * these settings to your 
 * production environment. 
 *
 * @param   string $env_key is a custom 
 *          user-defined value representing 
 *          a specific environment within 
 *          which this application will be 
 *          running and which key will be 
 *          used throughout this 
 *          configuration file + any 
 *          CRNRSTN :: resource includes 
 *          in order to align the necessary 
 *          functionality and resources to 
 *          said environment.
 *
 * @param   string $encryptCipher holds the 
 *          designation of the cipher to be 
 *          used. CRNRSTN :: ships with a 
 *          configuration debug page which 
 *          will expose all of the available 
 *          OpenSSL ciphers within the 
 *          running environment. 
 *
 *          This page is: crnrstn_config_debug.php 
 *          Also, for the same list of 
 *          recommended / available OpenSSL 
 *          ciphers in this environment, run: 
 *
 *          $oCRNRSTN_USR->openssl_get_cipher_methods(), 
 *
 *          which will return an array containing 
 *          OpenSSL ciphers in the array index 
 *          value position. 
 *
 *          E.g.:
 *          $return_array = $oCRNRSTN_USR->openssl_get_cipher_methods(); 
 *          foreach($return_array as $key => $openSSL_cipher){ 
 *
 *            echo $openSSL_cipher.'<br>'; 
 *
 *          }
 *
 * @param   string $encryptSecretKey contains 
 *          your secret password or hash to be 
 *          used in openSSL encrypt/decrypt 
 *          operations. 
 *
 * @param   int $encryptOptions contains a 
 *          bitwise disjunction of the flags 
 *          OPENSSL_RAW_DATA and 
 *          OPENSSL_ZERO_PADDING. 
 *
 * @param   string $hmac_alg contains 
 *          specification of the algorithm to 
 *          be used by CRNRSTN :: when using 
 *          the HMAC library to generate a 
 *          keyed hash value. For a list of 
 *          available algorithms 
 *          run hash_algos(). 
 *
 *          E.g. $return_array = hash_algos();
 *          foreach($return_array as $key => $algReturn){ 
 *
 *             echo $algReturn.'<br>';
 *
 *          }
 *
 * CAUTION :: Some hash_algos returned 
 * algorithms will NOT be compatible with 
 * hash_hmac() which CRNRSTN :: uses in 
 * validating it's decryption. And certain 
 * OpenSSL encryption cipher / hash_algos 
 * algorithm combinations will not be 
 * compatible. Please test the 
 * init_session_encryption() compatibility 
 * of your desired encryption cipher and 
 * hmac algorithm in each environment...
 * especially before releasing to 
 * production code base. 
 *
 * NOTE :: The available cipher methods 
 *         can differ between your dev 
 *         server and your production 
 *         server! They will depend on the 
 *         installation and compilation 
 *         options used for OpenSSL in 
 *         your machine(s). 
 *
 * Example from TOSHIBA M100 
 * [eVifweb] :: RADIOHEAD LAPTOP: 
 * $oCRNRSTN->init_tunnel_encryption(
 *            'LOCALHOST_PC', 
 *            'AES-192-OFB', 
 *            'this-Is-the-s3cret-encrypti0n-key', 
 *            OPENSSL_RAW_DATA, 
 *            'sha256');
 *
 */
$this->config_init_tunnel_encryption(
	   'BLUEHOST_JONY5', 
	   'AES-256-CTR', 
	   'l:pRuxhyg*uuO@(2k}:(:~U6#{qX(f}.', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_tunnel_encryption(
	   'BLUEHOST_EVIFWEB', 
	   'AES-256-CTR', 
	   'Tkk7TvQ-xeE$c{#D1a6nC#]AV{]A7*Zd', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_tunnel_encryption(
	   'LOCALHOST_CHAD_MACBOOKPRO', 
	   'AES-192-OFB', 
	   '[bP*Tf=B{o0OewI@Nm=A8y7mq72eJ jB', 
	   OPENSSL_RAW_DATA, 
	   'sha256');
$this->config_init_tunnel_encryption(
	   'LOCALHOST_PC', 
	   'AES-192-OFB', 
	   '[YZ3$?pd%[$DROExVDL4O-R)_xW[[T F', 
	   OPENSSL_RAW_DATA, 
	   'sha256');

$this->config_init_get_encryption(
	   'BLUEHOST_JONY5', 'AES-256-CTR', 
	   '?D}@zZ:}7EPwYXcsAy4!f%da@#O#S(A#', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_get_encryption(
	   'BLUEHOST_EVIFWEB', 'AES-256-CTR', 
	   'rX7ngy-tdV 80n}hlcnJVv{mx*$DL3T{', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_get_encryption(
	   'LOCALHOST_CHAD_MACBOOKPRO', 
	   'AES-192-OFB', 
	   '=[8gC]y(C9r)EXLn%%ZbBO#lb6*~jZqX', 
	   OPENSSL_RAW_DATA, 
	   'sha256');
$this->config_init_get_encryption(
	   'LOCALHOST_PC', 
	   'AES-192-OFB', 
	   'CrYk%ROwg%2btUyVEAgnjG0vr*QZW1(v', 
	   OPENSSL_RAW_DATA, 
	   'sha256');

$this->config_init_post_encryption(
	   'BLUEHOST_JONY5', 
	   'AES-256-CTR', 
	   'f2joVqpP}G*qc2HL b8FY*vgG4CroB=g', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_post_encryption(
	   'BLUEHOST_EVIFWEB', 
	   'AES-256-CTR', 
	   '}?tyG?R .JLj-E&2.P. RdI.(5VD%1@d', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_post_encryption(
	   'LOCALHOST_CHAD_MACBOOKPRO', 
	   'AES-192-OFB', 
	   'z?Pi+6[8!HGIX_[tmy4Y97obWQFur$?&', 
	   OPENSSL_RAW_DATA, 
	   'sha256');
$this->config_init_post_encryption(
	   'LOCALHOST_PC', 
	   'AES-192-OFB', 
	   'X~s[Az+65*~PVx@nMaD1JDNJ4xARN#@1', 
	   OPENSSL_RAW_DATA, 
	   'sha256');

$this->config_init_database_encryption(
	   'BLUEHOST_JONY5', 
	   'AES-256-CTR', 
	   'z0}n+2*Xe(zb*_ddphir)VFL)ZuNm.5v', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_database_encryption(
	   'BLUEHOST_EVIFWEB', 
	   'AES-256-CTR', 
	   'hrkuXz:V+-ZUx:K9vIpKQBXfq4IctRcS', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_database_encryption(
	   'LOCALHOST_CHAD_MACBOOKPRO', 
	   'AES-192-OFB', 
	   'jIXA{ *+I_Q}rt(vp2B]l!mm6(jC$-f$', 
	   OPENSSL_RAW_DATA, 
	   'sha256');
$this->config_init_database_encryption(
	   'LOCALHOST_PC', 
	   'AES-192-OFB', 
	   '7mGiCkisIImW{}npDu&yk(6fa_gJROH!', 
	   OPENSSL_RAW_DATA, 
	   'sha256');

$this->config_init_soap_encryption(
	   'BLUEHOST_JONY5', 
	   'AES-256-CTR', 
	   '6Jh28hwCug{zetTTx39OvHawva]4ck}M', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_soap_encryption(
	   'BLUEHOST_EVIFWEB', 
	   'AES-256-CTR', 
	   ']O*Jb%6]GV$wm_P4~a~IK3XDF-$jnI=5', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_soap_encryption(
	   'LOCALHOST_CHAD_MACBOOKPRO', 
	   'AES-192-OFB', 
	   'QMHQ$-oP:Ki7#fM1zYJ&@{aNZA.=nD?o', 
	   OPENSSL_RAW_DATA, 
	   'sha256');
$this->config_init_soap_encryption(
	   'LOCALHOST_PC', 
	   'AES-192-OFB', 
	   '3q?PCqf1*DP4%Z8yQNbp~C&Ln.IeT QU', 
	   OPENSSL_RAW_DATA, 
	   'sha256');

$this->config_init_file_encryption(
	   'BLUEHOST_JONY5', 
	   'AES-256-CTR', 
	   '6Jh00hwCug{zetTTx39OvHawva]4ck}M', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_file_encryption(
	   'BLUEHOST_EVIFWEB', 
	   'AES-256-CTR', 
	   ']O*Jb%6]GV$wm_P447~IK3XDF-$jnI=5', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_file_encryption(
	   'LOCALHOST_CHAD_MACBOOKPRO', 
	   'AES-192-OFB', 
	   'QMHQ$-oP:Ki7#h21zYJ&@{aNZA.=nD?o', 
	   OPENSSL_RAW_DATA, 
	   'sha256');
$this->config_init_file_encryption(
	   'LOCALHOST_PC', 
	   'AES-192-OFB', 
	   '3q?PCqf1*DP4%Z8yQ0rp~C&Ln.IeT QU', 
	   OPENSSL_RAW_DATA, 
	   'sha256');

$this->config_init_oersl_encryption(
	   'BLUEHOST_JONY5', 
	   'AES-256-CTR', 
	   'BVRJfa[&{LXyir4Spg$ *fICdXRg4R?L', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_oersl_encryption(
	   'BLUEHOST_EVIFWEB', 
	   'AES-256-CTR', 
	   '-z(ine9+EQlDC@-J#_fkFuTS% JLr xj', 
	   OPENSSL_RAW_DATA, 
	   'ripemd256');
$this->config_init_oersl_encryption(
	   'LOCALHOST_CHAD_MACBOOKPRO', 
	   'AES-192-OFB', 
	   'rmnQMLYcsFXLW$xEM*]Y)ePH=2ujVkL?', 
	   OPENSSL_RAW_DATA, 
	   'sha256');
$this->config_init_oersl_encryption(
	   'LOCALHOST_PC', 
	   'AES-192-OFB', 
	   '_uvQqbhR97]sPo.WPh{FMS+}Sim9(0d}', 
	   OPENSSL_RAW_DATA, 
	   'sha256');