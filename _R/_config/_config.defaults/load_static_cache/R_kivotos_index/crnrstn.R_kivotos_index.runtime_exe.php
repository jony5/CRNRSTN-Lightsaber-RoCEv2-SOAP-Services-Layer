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
 * R :: R_kivotos_index advanced resource ark public/private key index data.
 * 
 * $R_data = array(__NAMESPACE__ . 
 *           '\crnrstn_ascii_art'        => 
 *               array('public_key'      => 'ascii_art', 
 *                     'storage_arch'    => 'general_resource'));
 *
 * @package CRNRSTN
 * @version 2.00.0001 CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer.
 * @author Jonathan '5' Harris <jharris@eVifweb.com>
 * @copyright Copyright © 2012-2026 eVifweb® development All Rights Reserved.
 * @license https://crnrstn.jony5.com/licensing/ MIT
 * @link https://lightsaber.crnrstn.jony5.com/ CRNRSTN :: Lightsaber.
 * @link https://twitter.com/CRNRSTN_v2_0_0 CRNRSTN :: on Twitter.
 * @link http://evifweb.jony5.com/ eVifweb® :: Corporate Sponsor.
 * @param array $R_data will contain CLR-SSL Resource Kivotós advanced object ark public/private key index data. 
 * @access public
 *
 *
 * 5 :: Saturday, August 8, 2026 @ 1245 hrs.
 *
 */
$R_data = array(__NAMESPACE__ .
          '\crnrstn_ascii_art'        =>
              array('public_key'      => 'ascii_art',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_file_system_integrations_manager' =>
              array('public_key'      => 'file_sys_int_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_logging'          =>
              array('public_key'      => 'logging',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_session_manager'  =>
              array('public_key'      => 'session_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_json'             =>
              array('public_key'      => 'json',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_xml'              =>
              array('public_key'      => 'xml',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_socket'           =>
              array('public_key'      => 'socket',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_curl'             =>
              array('public_key'      => 'curl',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_stream'           =>
              array('public_key'      => 'stream',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_multi_language_manager' =>
              array('public_key'      => 'lang_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_soap_server_manager' =>
              array('public_key'      => 'soap_server_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_soap_client_manager' =>
              array('public_key'      => 'soap_client_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_soap_request_manager' =>
              array('public_key'      => 'soap_request_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_soap_data_tunnel_packet' =>
              array('public_key'      => 'soap_packet',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_soap_authentication_manager' =>
              array('public_key'      => 'soap_authentication_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_soap_access_manager' =>
              array('public_key'      => 'soap_access_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_soap_authorization_manager' =>
              array('public_key'      => 'soap_authorization_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_soap_content_memory_cache' =>
              array('public_key'      => 'soap_mem_cache',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_mysqli_conn_manager' =>
              array('public_key'      => 'mysqli_connection_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_mysqli_conn'      =>
              array('public_key'      => 'mysqli_connection',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_database_connection_handle' =>
              array('public_key'      => 'database_connection_handle',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_sql_manager'      =>
              array('public_key'      => 'sql_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_sql_profile_manager' =>
              array('public_key'      => 'sql_profile_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_sql_field_output_manager' =>
              array('public_key'      => 'sql_field_output_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_database_request' =>
              array('public_key'      => 'database_request',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_database_wiring'  =>
              array('public_key'      => 'database_wiring',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_database_query'   =>
              array('public_key'      => 'query',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_database_crnrstn' =>
              array('public_key'      => 'database',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\nusoap_client_mime'       =>
              array('public_key'      => 'nusoap_client_mime',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\nusoap_fault'             =>
              array('public_key'      => 'nusoap_fault',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\nusoap_parser'            =>
              array('public_key'      => 'nusoap_parser',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\nusoap_server_mime'       =>
              array('public_key'      => 'nusoap_server_mime',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\nusoapservermime'         =>
              array('public_key'      => 'nusoapservermime',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\nusoap_wsdlcache'         =>
              array('public_key'      => 'nusoap_wsdlcache',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\nusoap_xmlschema'         =>
              array('public_key'      => 'nusoap_xmlschema',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\soap_fault'               =>
              array('public_key'      => 'soap_fault',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\soap_parser'              =>
              array('public_key'      => 'soap_parser',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\soap_server'              =>
              array('public_key'      => 'soap_server',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\soap_transport_http'      =>
              array('public_key'      => 'soap_transport_http',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\soapval'                  =>
              array('public_key'      => 'soapval',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\wsdlcache'                =>
              array('public_key'      => 'wsdlcache',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\wsdl'                     =>
              array('public_key'      => 'wsdl',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\XMLSchema'                =>
              array('public_key'      => 'xmlschema',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\nusoap_base'              =>
              array('public_key'      => 'nusoap_base',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\nusoap_server'            =>
              array('public_key'      => 'nusoap_server',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\nusoap_client'            =>
              array('public_key'      => 'nusoap_client',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\soapclientmime'           =>
              array('public_key'      => 'soapclientmime',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\soapclient'               =>
              array('public_key'      => 'soapclient',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_Exception'        =>
              array('public_key'      => 'gabriel_exception',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_SMTP'             =>
              array('public_key'      => 'gabriel_smtp',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_PHPMailer'        =>
              array('public_key'      => 'gabriel',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_OAuth'            =>
              array('public_key'      => 'gabriel_oauth',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_POP3'             =>
              array('public_key'      => 'gabriel_pop3',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_Mobile_Detect'    =>
              array('public_key'      => 'mobile_detect',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_system_asset_manager' =>
              array('public_key'      => 'asset_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_client_assets'    =>
              array('public_key'      => 'js_css',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_content_source_controller' =>
              array('public_key'      => 'content_src_ctrlr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_ui_content_assembler' =>
              array('public_key'      => 'ui_assembler',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_method_manager'   =>
              array('public_key'      => 'method_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_link_manager'     =>
              array('public_key'      => 'link_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_decoupled_data_object' =>
              array('public_key'      => 'ddo',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_configuration_manager' =>
              array('public_key'      => 'config_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_http_manager'     =>
              array('public_key'      => 'http_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_cookie_manager'   =>
              array('public_key'      => 'cookie_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_response_return_serialization_map' =>
              array('public_key'      => 'rrs_map',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_performance_regulator' =>
              array('public_key'      => 'performance_regulator',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_redirect_controller' =>
              array('public_key'      => 'redirect_controller',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_result_set_pagination_manager' =>
              array('public_key'      => 'pagination_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_ux_manager'       =>
              array('public_key'      => 'ux_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_user'             =>
              array('public_key'      => 'usr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_environment'      =>
              array('public_key'      => 'env',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_ui_tunnel_response_manager' =>
              array('public_key'      => 'ui_trm',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_logging_output_profile_manager' =>
              array('public_key'      => 'log_output_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_bitflip_manager'  =>
              array('public_key'      => 'bitflip_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_ip_authorization_manager' =>
              array('public_key'      => 'ip_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_registry_user'    =>
              array('public_key'      => 'registry_usr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_finite_expression' =>
              array('public_key'      => 'finite_expression',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_openssl_encryption_rotation_services_manager' =>
              array('public_key'      => 'oersl_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_ui_html_manager'  =>
              array('public_key'      => 'ui_html_mgr',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_data_tunnel_services_manager' =>
              array('public_key'       => 'dtsm',
                    'storage_arch'     => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_messenger_from_north' =>
              array('public_key'      => 'gabriel',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn_kivotos'          =>
              array('public_key'      => 'kivotos',
                    'storage_arch'    => 'general_resource'), __NAMESPACE__ .
          '\crnrstn'                  =>
              array('public_key'      => 'crnrstn',
                    'storage_arch'    => 'general_resource'));