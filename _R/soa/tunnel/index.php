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
 *                  Christ and He will reign 
 *                  forever and ever (Rev. 11:15), 
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
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 */
require_once('../../../_crnrstn.root.function.php');
include_once(CRNRSTN_ROOT . '/_crnrstn.config.inc.php');

$tmp_filename_xml = $oCRNRSTN_USR->get_resource('DOCUMENT_ROOT') . 
                  $oCRNRSTN_USR->get_resource('DOCUMENT_ROOT_DIR') . 
                  '/common/xml/crnrstn_ajax_dom_state_controller.xml';

header('Content-Type: application/xml; charset=iso-8859-1');
header('Cache-Control: no-store');
header('Access-Control-Allow-Origin: *');
//header('Content-Disposition: inline; filename="crnrstn_data_tunnel_packet.xml');

$oCRNRSTN_USR->readfile_chunked($tmp_filename_xml);
die();

$oCRNRSTN_USR->is_soap_data_tunnel_endpoint(true);
$raw_crnrstn_pssdtl_packet = $oCRNRSTN_USR->extract_data_http('crnrstn_pssdtl_packet', 'POST');

if($tmp_decrypted_data = $oCRNRSTN_USR->data_decrypt($raw_crnrstn_pssdtl_packet)){

    $oCRNRSTN_USR->print_r('DECRYPTED crnrstn_pssdtl_packet=' . $tmp_decrypted_data, NULL, __LINE__, __METHOD__, __FILE__);

    error_log(__LINE__ . ' tunnel die() $tmp_decrypted_data success...'. print_r($tmp_decrypted_data, true));
    die();

}else{

    error_log(__LINE__ . ' tunnel die() $tmp_decrypted_data error...' . print_r($raw_crnrstn_pssdtl_packet, true));
    die();

}

//
// CRNRSTN :: TO HANDLE HTTP DATA
if($oCRNRSTN_USR->http_data_services_initialize(false, true)) {

    //die();
    if ($oCRNRSTN_USR->isset_crnrstn_services_http()) {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Remain still while 
         * your life is extracted. 
         *
         */
        $raw_srvc_layer_wsdl       = $oCRNRSTN_USR->extract_data_http('crnrstn_soap_srvc_layer_wsdl', 'POST');
        $raw_soap_data_tunnel_data = $oCRNRSTN_USR->extract_data_http('crnrstn_soap_data_tunnel_data', 'POST');
        $raw_soap_action           = $oCRNRSTN_USR->extract_data_http('crnrstn_soap_data_tunnel_soap_action', 'POST');
        $raw_content_type          = $oCRNRSTN_USR->extract_data_http('crnrstn_soap_data_tunnel_content_type', 'POST');
        $raw_content_length        = $oCRNRSTN_USR->extract_data_http('crnrstn_soap_data_tunnel_content_length', 'POST');
        $raw_user_agent            = $oCRNRSTN_USR->extract_data_http('crnrstn_soap_data_tunnel_user_agent', 'POST');
        $raw_host                  = $oCRNRSTN_USR->extract_data_http('crnrstn_soap_data_tunnel_host', 'POST');

        /*
        <input type="hidden" name="crnrstn_soap_srvc_layer_host" value="' . $_SERVER['SERVER_ADDR'] . '">

        <input type="hidden" name="crnrstn_soap_srvc_stime" value="' . $this->starttime . '">
        <input type="hidden" name="crnrstn_soap_srvc_rtime" value="' . $this->wall_time().'">

        <input type="hidden" name="crnrstn_soap_srvc_ttl_wethrbug" value="110">
        <input type="hidden" name="crnrstn_soap_srvc_ttl_bassdrive_stats" value="20">
        <input type="hidden" name="crnrstn_soap_srvc_ttl_bassdrive_show" value="45">
        <input type="hidden" name="crnrstn_soap_srvc_ttl_truth_timer" value="30">
        <input type="hidden" name="crnrstn_soap_srvc_ttl_banner_rotate_desktop" value="15">
        <input type="hidden" name="crnrstn_soap_srvc_ttl_banner_rotate_tablet" value="7">
        <input type="hidden" name="crnrstn_soap_srvc_ttl_banner_rotate_mobile" value="7">
        <input type="hidden" name="crnrstn_soap_srvc_device_type" value="">
        <input type="hidden" name="crnrstn_soap_srvc_tunnel_protocol_version" value="' . $this->version_soap.'">
        <input type="hidden" name="crnrstn_soap_srvc_encoding" value="' . $tmp_oNUSOAP_BASE->soap_defencoding.'">
        <input type="hidden" name="crnrstn_soap_srvc_response_format" value="soap-SOAP, soap;q=0.9, xml;0.7, json;0.1, csv;0, carrier_pigeon;-0.9">

        */

        $raw_srvc_data        = $oCRNRSTN_USR->extract_data_http('crnrstn_soap_srvc_data', 'POST');
        $raw_srvc_soap_action = $oCRNRSTN_USR->extract_data_http('crnrstn_soap_srvc_soap_action', 'POST');
        $raw_srvc_length      = $oCRNRSTN_USR->extract_data_http('crnrstn_soap_srvc_content_length', 'POST');
        $raw_srvc_user_agent  = $oCRNRSTN_USR->extract_data_http('crnrstn_soap_srvc_layer_user_agent', 'POST');
        $raw_srvc_layer_host  = $oCRNRSTN_USR->extract_data_http('crnrstn_soap_srvc_layer_host', 'POST');

        $oCRNRSTN_USR->print_r('$raw_srvc_layer_wsdl=' . $raw_srvc_layer_wsdl, NULL, __LINE__, __METHOD__, __FILE__);
        $oCRNRSTN_USR->print_r('$raw_srvc_soap_action=' . $raw_srvc_soap_action, NULL, __LINE__, __METHOD__, __FILE__);
        $oCRNRSTN_USR->print_r('$raw_soap_action=' . $raw_soap_action, NULL, __LINE__, __METHOD__, __FILE__);
        $oCRNRSTN_USR->print_r('$raw_content_type=' . $raw_content_type, NULL, __LINE__, __METHOD__, __FILE__);
        $oCRNRSTN_USR->print_r('$raw_content_length=' . $raw_content_length, NULL, __LINE__, __METHOD__, __FILE__);
        $oCRNRSTN_USR->print_r('$raw_user_agent=' . $raw_user_agent, NULL, __LINE__, __METHOD__, __FILE__);
        $oCRNRSTN_USR->print_r('$raw_host=' . $raw_host, NULL, __LINE__, __METHOD__, __FILE__);
        $oCRNRSTN_USR->print_r('$raw_soap_data_tunnel_data=' . $raw_soap_data_tunnel_data, NULL, __LINE__, __METHOD__, __FILE__);
        $oCRNRSTN_USR->print_r('$raw_srvc_data=' . $raw_srvc_data, NULL, __LINE__, __METHOD__, __FILE__);

        $oCRNRSTN_USR->print_r('Goodbye, SOAP Data Tunnel.', NULL, __LINE__, __METHOD__, __FILE__);

    }

}else{

    //
    // FORM INTEGRATION ONLY OR UNAUTHORIZED
    $oCRNRSTN_USR->return_server_response_code(503);

}