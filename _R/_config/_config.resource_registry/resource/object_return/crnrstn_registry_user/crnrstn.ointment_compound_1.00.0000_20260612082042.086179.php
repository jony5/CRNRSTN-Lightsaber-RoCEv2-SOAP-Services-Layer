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

namespace CRNRSTN\resource;

/**
 * R :: ointment compounding exe for the crnrstn_registry_user object instantiation.
 *
 * A system generated runtime exe for 
 * input data preparation 
 * (or compounding) at runtime. 
 *
 * @package CRNRSTN
 * @version 2.00.0001 CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer.
 * @author Jonathan '5' Harris <jharris@eVifweb.com>
 * @copyright Copyright © 2012-2026 eVifweb® development All Rights Reserved.
 * @license https://crnrstn.jony5.com/licensing/ MIT
 * @link https://lightsaber.crnrstn.jony5.com/ CRNRSTN :: Lightsaber.
 * @link https://twitter.com/CRNRSTN_v2_0_0 CRNRSTN :: on Twitter.
 * @link http://evifweb.jony5.com/ eVifweb :: Corporate Sponsor.
 * @access public
 *
 * @todo This should be a system generated and system managed file. 5 :: Friday, June 12, 2026 @ 0829 hrs.
 *
 * 5 :: Friday, June 12, 2026 @ 0823 hrs.
 *
 */
// Receive raw input. 
$application_directory         = $R_data_000;
$R_framework_directory         = $R_data_001;
$R_hmac_algorithm_override     = $R_data_002;
$R_debug_mode_override         = $R_data_003;
$PHPMailer_debug_mode_override = $R_data_004;
$WordPress_debug_mode_override = $R_data_005;
$R_cluster_id_override         = $R_data_006;
$R_node_id_override            = $R_data_007;
$R_client_id_override          = $R_data_008;
$R_request_id_override         = $R_data_009;
$R_request_serial_override     = $R_data_010;

if(\is_object($R)){

    if(\method_exists($R, 'get_crnrstn')){

        // 5 :: Tuesday, May 26, 2026 @ 0552 hrs.
        $application_directory         = $R->get_crnrstn('application_directory');
        $R_framework_directory         = $R->get_crnrstn('R_framework_directory');
        $R_hmac_algorithm_override     = $R->get_crnrstn('R_hmac_algorithm_override');
        $R_debug_mode_override         = $R->get_crnrstn('R_debug_mode_override');
        $PHPMailer_debug_mode_override = $R->get_crnrstn('PHPMailer_debug_mode_override');
        $WordPress_debug_mode_override = $R->get_crnrstn('WordPress_debug_mode_override');
        $R_cluster_id_override         = $R->get_crnrstn('R_cluster_id');
        $R_node_id_override            = $R->get_crnrstn('R_node_id');
        $R_client_id_override          = $R->get_crnrstn('R_client_id');
        $R_request_id_override         = $R->get_crnrstn('R_request_id');
        $R_request_serial_override     = $R->get_crnrstn('R_request_serial');

    }

    /*
    if(\get_class($R) == __NAMESPACE__ . '\crnrstn'){
        // 5 :: Tuesday, June 16, 2026 @ 2011 hrs.

        $mem_ptr = $R->generate_key('memory_pointer');
        $R_odata_out[] = array($mem_ptr => 
                               array('data'                  => $R, 
                                     'data_resource_name'    => __NAMESPACE__ . '\crnrstn',  
                                     'data_software_version' => $R->version_crnrstn()));

    }
    */

}

/*
// 5 :: Wednesday, June 10, 2026 @ 1956 hrs.
$R_odata = array(
           $R_ascii_art, 
           $R_file_sys_int_mgr, 
           $R_logging, 
           $R_session_mgr, 
           $R_bitflip_mgr, 
           $R_ip_mgr, 
           $R_finite_expression, 
           $R_json, 
           $R_xml);

$R_ascii_art                   =
$R_file_sys_int_mgr            =
$R_logging                     =
$R_session_mgr                 =
$R_bitflip_mgr                 =
$R_ip_mgr                      =
$R_finite_expression           = NULL;

 */

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * If not set, preserve 
 * the defaults for both 
 * application directory 
 * and the CLR-SSL 
 * framework directory. 
 *
 *
 * 5 :: Wednesday, June 10, 2026 @ 1522 hrs.
 *
 */
if(!isset($application_directory)){

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * TODO :: Initialize $application_directory 
     *         from a runtime exe file. 
     *         5 :: Wednesday, June 10, 2026 @ 1540 hrs.
     *
     */
    $application_directory = '';

}

if(!isset($R_framework_directory)){

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * TODO :: Initialize $R_framework_directory 
     *         from a runtime exe file. 
     *         5 :: Wednesday, June 10, 2026 @ 1540 hrs.
     *
     */
    $R_framework_directory = '_R';

}

echo '<div style="color:#333; 
          font-family: Arial, Helvetica, sans-serif; 
          font-size: 35px; 
          font-weight: bold; 
          width:420px; 
          text-shadow: 1px 1px 1px rgba(199, 213, 255, 1.0), 
                       1px 1px 2px rgba(87, 255, 0, 1.0);">[lnum ' . 
     __LINE__ . '] <br><span style="overflow-wrap: break-word;">[file ' . 
     __FILE__ . 
     ']</span><br>Test the architecture ' . 
     'that applys a compounded ' . 
     'ointment to a freshly generated ' . 
     'system resource. ' . 
     $R_resp[$memory_pointer]['resource_name'] . 
     ' v' . 
     $R_resp[$memory_pointer]['software_default'] . 
     ' at ' . $R->return_query_date_time_stamp() . 
     ' and with runtime of ' . 
     $R->wall_time() . 
     ' secs (...in this case).</div>';

$R_resp[$memory_pointer]['input_parameter_defaults'] = array('1.00.0000' => array(
                                                                            $application_directory, 
                                                                            $R_framework_directory, 
                                                                            $R_hmac_algorithm_override,
                                                                            $R_debug_mode_override,
                                                                            $PHPMailer_debug_mode_override,
                                                                            $WordPress_debug_mode_override,
                                                                            $R_cluster_id_override, 
                                                                            $R_node_id_override, 
                                                                            $R_client_id_override, 
                                                                            $R_request_id_override, 
                                                                            $R_request_serial_override, 
                                                                            $R_odata_out));