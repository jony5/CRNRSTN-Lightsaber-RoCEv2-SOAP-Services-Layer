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
 * Edit: Applied \resource sub-namespace 
 *       to the CLR-SSL Resource Registry 
 *       runtime executable resource 
 *       return architecture.
 *
 *       https://www.php.net/manual/en/language.namespaces.nested.php
 *
 *       5 :: Sunday, June 14, 2026 @ 0730 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Applied first use of the 
 *       use operator in the SOAP 
 *       framework to align the 
 *       CLR-SSL Resource Registry 
 *       runtime executable resource 
 *       return architecture. 
 *
 *       SOURCE  :: https://www.php.net/manual/en/language.namespaces.nsconstants.php 
 *       COMMENT :: https://www.php.net/manual/en/language.namespaces.nsconstants.php#96010
 *       AUTHOR  :: a dot schaffhirt at sedna-soft dot de
 *
 *       Example:
 *       use CRNRSTN\crnrstn;
 *
 *       Using namespaces: Aliasing/Importing
 *       https://www.php.net/manual/en/language.namespaces.importing.php
 *
 *       "Use operator...
 *       PHP 5.3 or greater"...
 *
 *       On YouTube:
 *       Sade - Smooth Operator - Official - 1984 - YouTube
 *       https://www.youtube.com/watch?v=4TYv2PhG89A
 *
 *       The plan is to dynamically 
 *       write runtime exe's into 
 *       their own temp namespace for 
 *       API driven sandbox testing, 
 *       and upon success (e.g., no 
 *       parsing error is generated), 
 *       the tested file can be moved 
 *       into the proper namespace and 
 *       file path. 
 *
 *       5 :: Sunday, June 14, 2026 @ 1857 hrs.
 *
 *       Using a "The Independent Pub (ATL) Booze, 
 *       Bistro, Billiards." paper matchbook, 
 *       we light three (3) joints as with 
 *       their powers combined into one 
 *       joint. Only 3 Indy ATL matches remain. 
 *
 *       [Sun Jun 14 18:17:30.011004 2026] [:error] [pid 21551] 
 *       [client 172.16.225.1:50306] PHP Fatal error:  
 *       Uncaught Error: Class 'CRNRSTN\\resource\\crnrstn' 
 *       not found in /var/www/html/sysops/_crnrstn
 *       /_config/_config.resource_registry/resource
 *       /object_return/crnrstn
 *       /crnrstn.crnrstn.runtime_exe.php:288\n
 *
 *       Stack trace:\n
 *       #0 /var/www/html/sysops/_crnrstn
 *          /crnrstn.runtime_exe.php(2094): require()\n
 *       #1 /var/www/html/sysops/_crnrstn
 *          /crnrstn.runtime_exe.php(2168): 
 *          CRNRSTN\\_crnrstn_resource_return('sysops', 
 *          '_crnrstn', 'crnrstn', 'sha256', 2, 0, false)\n
 *       #2 /var/www/html/sysops/index.php(425): 
 *          include_once('/var/www/html/s...')\n
 *       #3 {main}\n  thrown in /var/www/html/sysops
 *          /_crnrstn/_config/_config.resource_registry
 *          /resource/object_return/crnrstn
 *          /crnrstn.crnrstn.runtime_exe.php on line 288
 *
 *       Last Modified: Monday, June 15, 2026 @ 1049 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Renamed crnrstn object 
 *       instantiation return 
 *       file, changing the name from 
 *       crnrstn.crnrstn.runtime_exe.php 
 *       to 
 *       crnrstn.crnrstn.fire_bolt_exe.php.
 *       5 :: Friday, June 19, 2026 @ 2222 hrs.
 *       Last Modified: Friday, June 19, 2026 @ 2324 hrs.
 *
 */
namespace CRNRSTN\resource;

use CRNRSTN\crnrstn;

/**
 * R :: crnrstn object instantiation and return.
 *
 * $R['kivotos'][{resource public_key}] = new crnrstn();
 *
 * @package CRNRSTN
 * @version 2.00.0001 CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer.
 * @author Jonathan '5' Harris <jharris@eVifweb.com>
 * @copyright Copyright © 2012-2026 eVifweb® development All Rights Reserved.
 * @license https://crnrstn.jony5.com/licensing/ MIT
 * @link https://lightsaber.crnrstn.jony5.com/ CRNRSTN :: Lightsaber.
 * @link https://twitter.com/CRNRSTN_v2_0_0 CRNRSTN :: on Twitter.
 * @link http://evifweb.jony5.com/ eVifweb® :: Corporate Sponsor.
 * @access public
 *
 *
 * 5 :: Sunday, May 17, 2026 @ 0838 hrs.
 *
 */
// 5 :: June 1, 2026 @ 2024 hrs.
return new crnrstn(
           $R_resp[$memory_pointer]['input_parameter_defaults'][$R_resp[$memory_pointer]['software_default']][0], 
           $R_resp[$memory_pointer]['input_parameter_defaults'][$R_resp[$memory_pointer]['software_default']][1], 
           $R_resp[$memory_pointer]['input_parameter_defaults'][$R_resp[$memory_pointer]['software_default']][2], 
           $R_resp[$memory_pointer]['input_parameter_defaults'][$R_resp[$memory_pointer]['software_default']][3], 
           $R_resp[$memory_pointer]['input_parameter_defaults'][$R_resp[$memory_pointer]['software_default']][4], 
           $R_resp[$memory_pointer]['input_parameter_defaults'][$R_resp[$memory_pointer]['software_default']][5]);

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * CLR-SSL Resource Registry
 * Data Transport Architecture
 * Interfaces
 *
 * TLDR;
 * 1) CLR-SSL Kivotós Advanced Object Storage Ark.
 * 2) Resource Anointing with Compounded Ointment of Input Parameters.
 * 3) CLR-SSL Resource Registry Direct Integrations.
 *
 * 1) $var = $R->kivotos_storage('xml');
 * 2) $var = $R->compound_ointment_extract('wsdl', 0, false);
 * 3) $var = $R_resp[$memory_pointer]['input_parameter_defaults'][$R_resp[$memory_pointer]['software_default']][0];
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * A) CLR-SSL Kivotós Advanced
 *    Object Storage Ark.
 *    Use kivotos_storage() to
 *    access core resources that are
 *    loaded automatically by the
 *    CLR-SSL Resource Registry
 *    Internals. Access object,
 *    function output return,
 *    and runtime exe output
 *    return data.
 *
 *    function kivotos_storage($public_key)
 *    {}
 *
 * E.g.:
 *    $var = $R->kivotos_storage('xml');
 *
 * Note: (string) $public_key is
 *       the index at which the data
 *       can be accessed within the
 *       CLR-SSL Kivotós Advanced
 *       Object Storage Ark or
 *       CRNRSTN :: KAOS ('chaos').
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * B) Just-In-Time Ointment Compounding
 *    and Variable Anointing and Just-
 *    In-Time Resource Definition
 *    Evaluations (or returns).
 *    Use compound_ointment_extract() to
 *    access resources loaded in the wild
 *    and dynamically via
 *    $R->compound_ointment() + $R->anoint()
 *    resource acquisition maneuvers.
 *
 *    function compound_ointment_extract(
 *             $resource_name,
 *             $input_position = 0,
 *             $input_default = NULL)
 *             {}
 *
 * E.g.:
 *    $var = $R->compound_ointment_extract('wsdl', 0, false);
 *
 * Note: For Just-In-Time resource returns
 *       behind this architecture, please see:
 *
 *       $var = $R->return_anointed_resource($resource_name)
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * C) Direct integrations with the
 *    CLR-SSL Resource Registry's
 *    own internal data architecture.
 *
 * E.g.:
 *    $var = $R_resp[$memory_pointer]['input_parameter_defaults'][$R_resp[$memory_pointer]['software_default']][0];
 *
 *
 * 5 :: Saturday, August 22, 2026 @ 0742 hrs.
 * Last Modified: Monday, August 24, 2026 @ 1911 hrs.
 *
 */