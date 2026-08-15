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
 * GLOBAL FUNCTION
 * RESOURCE DEFINITION :: _crnrstn_object_boot_resource_paths_initialization
 * FUNCTION VERSION    :: 1.00.0000
 * DATE                :: Thursday, August 29, 2024 @ 0147 hrs.
 * AUTHOR              :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                 :: http://evifweb.jony5.com
 * TITLE               :: The CRNRSTN :: Lightsaber SOAP
 *                        Services Layer Object Boot-Up
 *                        Support Resource Paths
 *                        Initialization Global
 *                        Function Definition
 * DESCRIPTION         :: The CRNRSTN :: Lightsaber
 *                        SOAP Services Layer Object
 *                        Boot-Up Resource Paths
 *                        Initialization Function
 *                        serves to initialize the
 *                        application directory
 *                        paths array for resources
 *                        that will be required in
 *                        support of framework
 *                        initialization ahead of
 *                        the official CRNRSTN ::
 *                        Lightsaber SOAP Services
 *                        Layer resource registry
 *                        boot sector being
 *                        fired up.
 *
 *
 *                        5
 *
 *                        Thursday, August 29, 2024 @ 0149 hrs.
 *
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 */

//
// This is just for
// tire kicking.
//
// My IDE code
// assist (PhpStorm)
// mentions XDEBUG.
//
//
// 5
// @define('CRNRSTN_MEMORY_XDEBUG_SCRIPT_USAGE_START', xdebug_memory_usage());

function _crnrstn_object_boot_resource_paths_initialization(
         $application_directory,
         $framework_directory,
         $slsh = DIRECTORY_SEPARATOR,
         $CRNRSTN_ROOT_OFFSET = '../../../')
{

    //
    // Initialize the
    // application directory
    // paths array for resources
    // that will be required in
    // support of framework
    // initialization ahead of
    // the official CRNRSTN ::
    // Lightsaber SOAP Services
    // Layer resource registry
    // boot sector being
    // fired up.
    //
    // The CRNRSTN :: Lightsaber
    // Resource Registry will
    // be stood upon firmly by
    // the entire application
    // for all resource paths,
    // resource meta version
    // control, and system
    // file integrity checks.
    //
    //
    // 5
    //
    // Thursday, August 29, 2024 @ 0133 hrs.

    // Edit: Removed function_serialization, function_timestamp,
    //       config_php, config_integer_constants,
    //       config_ip_authorization, config_system_paths,
    //       config_system_content, config_system_links,
    //       class_security, class_registry, class_crnrstn,
    //       and class_assets to drive the server resource
    //       allocation that these paths support from within
    //       the CRNRSTN :: Lightsaber RoCEv2 SOAP Services
    //       Layer System Resource Registry.
    //       5 :: Monday, October 27, 2025 @ 0420 hrs.
    // Edit: Added config_defaults directory path to support
    //       the crnrstn loading its own default
    //       system settings.
    //       5 :: Monday, October 27, 2025 @ 0458 hrs.
    $crnrstn_directory_paths = array();
    $tmp_file_name                          = 'crnrstn.settings.function.php';
    $crnrstn_directory_paths['config_defaults']             = $_SERVER['DOCUMENT_ROOT'] . $slsh .
                                                            $application_directory . $slsh .
                                                            $framework_directory . $slsh .
                                                            '_config' . $slsh .
                                                            '_config.defaults';
    $crnrstn_directory_paths['function_object_boot']        = $_SERVER['DOCUMENT_ROOT'] . $slsh .
                                                              $application_directory . $slsh .
                                                              $framework_directory . $slsh .
                                                              'function' . $slsh .
                                                              'object_boot';
//    $crnrstn_directory_paths['function_serialization']      = $_SERVER['DOCUMENT_ROOT'] . $slsh .
//                                                              $application_directory . $slsh .
//                                                              $framework_directory . $slsh .
//                                                              'function' . $slsh .
//                                                              'serialization';
//    $crnrstn_directory_paths['function_timestamp']          = $_SERVER['DOCUMENT_ROOT'] . $slsh .
//                                                              $application_directory . $slsh .
//                                                              $framework_directory . $slsh .
//                                                              'function' . $slsh .
//                                                              'timestamp';
//    $crnrstn_directory_paths['config_php']                  = $_SERVER['DOCUMENT_ROOT'] . $slsh .
//                                                              $application_directory . $slsh .
//                                                              $framework_directory . $slsh .
//                                                              '_config' . $slsh .
//                                                              'config.php';
//    $crnrstn_directory_paths['config_integer_constants']    = $_SERVER['DOCUMENT_ROOT'] . $slsh .
//                                                              $application_directory . $slsh .
//                                                              $framework_directory . $slsh .
//                                                              '_config' . $slsh .
//                                                              'config.integer_constants';
//    $crnrstn_directory_paths['config_ip_authorization']     = $_SERVER['DOCUMENT_ROOT'] . $slsh .
//                                                              $application_directory . $slsh .
//                                                              $framework_directory . $slsh .
//                                                              '_config' . $slsh .
//                                                              'config.ip_address_authorization.secure';
    $crnrstn_directory_paths['config_resource_registry']    = $_SERVER['DOCUMENT_ROOT'] . $slsh .
                                                              $application_directory . $slsh .
                                                              $framework_directory . $slsh .
                                                              '_config' . $slsh .
                                                              '_config.resource_registry';
//    $crnrstn_directory_paths['config_system_paths']         = $_SERVER['DOCUMENT_ROOT'] . $slsh .
//                                                              $application_directory . $slsh .
//                                                              $framework_directory . $slsh .
//                                                              '_config' . $slsh .
//                                                              'config.system_paths';
//    $crnrstn_directory_paths['config_system_content']       = $_SERVER['DOCUMENT_ROOT'] . $slsh .
//                                                              $application_directory . $slsh .
//                                                              $framework_directory . $slsh .
//                                                              '_config' . $slsh .
//                                                              'config.system_content';
//    $crnrstn_directory_paths['config_system_links']         = $_SERVER['DOCUMENT_ROOT'] . $slsh .
//                                                              $application_directory . $slsh .
//                                                              $framework_directory . $slsh .
//                                                              '_config' . $slsh .
//                                                              'config.system_links';
    $crnrstn_directory_paths['class_session']               = $_SERVER['DOCUMENT_ROOT'] . $slsh .
                                                              $application_directory . $slsh .
                                                              $framework_directory . $slsh .
                                                              'class' . $slsh .
                                                              'session';
//    $crnrstn_directory_paths['class_security']              = $_SERVER['DOCUMENT_ROOT'] . $slsh .
//                                                              $application_directory . $slsh .
//                                                              $framework_directory . $slsh .
//                                                              'class' . $slsh .
//                                                              'security';
//    $crnrstn_directory_paths['class_registry']              = $_SERVER['DOCUMENT_ROOT'] . $slsh .
//                                                              $application_directory . $slsh .
//                                                              $framework_directory . $slsh .
//                                                              'class' . $slsh .
//                                                              'registry';
//    $crnrstn_directory_paths['class_crnrstn']               = $_SERVER['DOCUMENT_ROOT'] . $slsh .
//                                                              $application_directory . $slsh .
//                                                              $framework_directory . $slsh .
//                                                              'class' . $slsh .
//                                                              'crnrstn';
//    $crnrstn_directory_paths['class_assets']                = $_SERVER['DOCUMENT_ROOT'] . $slsh .
//                                                              $application_directory . $slsh .
//                                                              $framework_directory . $slsh .
//                                                              'class' . $slsh .
//                                                              'assets';

    //
    // Build a data structure
    // of native system
    // registered resources
    // that will be checked
    // for both file endpoint
    // suitability and fit
    // for a purpose-ness
    // before being loaded
    // into server memory.
    //
    //
    // 5
    //
    // Thursday, August 29, 2024 @ 0505 hrs.
    $tmp_resource_meta_ARRAY = array();

    //
    // Define the CRNRSTN ::
    // Lightsaber SOAP Services Layer
    // Session ID Initialization
    // Runtime Executable resource
    // endpoint, and add to it all
    // appropriate resource
    // meta data.
    //
    // This resource will
    // initialize a runtime
    // Session ID (if session has
    // not not yet been started)
    // when it is evaluated.
    //
    //
    // 5
    //
    // Thursday, August 29, 2024 @ 0613 hrs.
    $tmp_resource_meta_ARRAY[] = array(
    'REGISTERED_NAME'            => array($crnrstn_directory_paths['class_session'] . $slsh .
                                    'crnrstn.session_id_start.runtime_exe.php' => 'RUNTIME_EXECUTABLE'),
    'ISACTIVE'                   => 1,
    'FILE_PATH'                  => $crnrstn_directory_paths['class_session'] . $slsh .
                                    'crnrstn.session_id_start.runtime_exe.php',
    'LOAD_METHOD'                => 'require',
    'RESOURCE_TYPE'              => 'RUNTIME_EXECUTABLE',
    'FIRE_ANYTIME_ANYWHERE'      => 1,
    'FILE_HASHING_ALGORITHM'     => 'sha256',
    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));

    //
    // For resource inclusion and
    // evaluation at runtime,
    // define the CRNRSTN ::
    // Lightsaber SOAP Services
    // Layer File Inclusion
    // Support For Resource
    // Definition at Object
    // Boot-Up Global Function
    // Definition file endpoint.
    //
    //
    // 5
    //
    // Thursday, August 29, 2024 @ 0613 hrs.
    $tmp_resource_meta_ARRAY[] = array(
    'REGISTERED_NAME'            => array('_crnrstn_include_file' => 'FUNCTION_DEFINITION'),
    'ISACTIVE'                   => 1,
    'FILE_PATH'                  => $crnrstn_directory_paths['function_object_boot'] . $slsh .
                                    'crnrstn.include_file.function.php',
    'LOAD_METHOD'                => 'require',
    'RESOURCE_TYPE'              => 'FUNCTION_DEFINITION',
    'FIRE_ANYTIME_ANYWHERE'      => 1,
    'FILE_HASHING_ALGORITHM'     => 'sha256',
    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));

//    //
//    // Include and evaluate
//    // global function definition
//    // resources in order to
//    // support request
//    // serialization before the
//    // CRNRSTN :: Lightsaber
//    // SOAP Services Layer
//    // system resource registry
//    // has booted up.
//    //
//    // The CRNRSTN :: Lightsaber RoCEv2 SOAP
//    // Services Layer PHP Native
//    // Hash Wrapper for Hash Output
//    // Generation is one
//    // such resource.
//    //
//    // 5
//    //
//    // Tuesday, September 3, 2024 @ 0048 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//    'REGISTERED_NAME'            => array('_crnrstn_hash' => 'FUNCTION_DEFINITION'),
//    'ISACTIVE'                   => 0,
//    'FILE_PATH'                  => $crnrstn_directory_paths['function_serialization'] . $slsh .
//                                    'crnrstn.hash.function.php',
//    'LOAD_METHOD'                => 'require',
//    'RESOURCE_TYPE'              => 'FUNCTION_DEFINITION',
//    'FIRE_ANYTIME_ANYWHERE'      => 1,
//    'FILE_HASHING_ALGORITHM'     => 'sha256',
//    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));
//
//    //
//    // Define the CRNRSTN ::
//    // Lightsaber SOAP Services
//    // Layer Cryptographically Secure
//    // Random Output Generator.
//    //
//    //
//    // 5
//    //
//    // Saturday, September 14, 2024 @ 0718 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//    'REGISTERED_NAME'            => array('_crnrstn_crypto_rand_secure' => 'FUNCTION_DEFINITION'),
//    'ISACTIVE'                   => 0,
//    'FILE_PATH'                  => $crnrstn_directory_paths['function_serialization'] . $slsh .
//                                    'crnrstn.crypto_rand_secure.function.php',
//    'LOAD_METHOD'                => 'require',
//    'RESOURCE_TYPE'              => 'FUNCTION_DEFINITION',
//    'FIRE_ANYTIME_ANYWHERE'      => 1,
//    'FILE_HASHING_ALGORITHM'     => 'sha256',
//    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));
//
//    //
//    // Define the CRNRSTN ::
//    // Lightsaber SOAP Services
//    // Layer New Key
//    // Generation global
//    // function resource
//    //
//    // The source code for this
//    // key generator was written
//    // by Scott, a PHP Developer
//    // at COMSOL.
//    //
//    //
//    // 5
//    //
//    // Saturday, September 14, 2024 @ 0724 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//    'REGISTERED_NAME'            => array('_crnrstn_generate_new_key' => 'FUNCTION_DEFINITION'),
//    'ISACTIVE'                   => 0,
//    'FILE_PATH'                  => $crnrstn_directory_paths['function_serialization'] . $slsh .
//                                    'crnrstn.generate_new_key.function.php',
//    'LOAD_METHOD'                => 'require',
//    'RESOURCE_TYPE'              => 'FUNCTION_DEFINITION',
//    'FIRE_ANYTIME_ANYWHERE'      => 1,
//    'FILE_HASHING_ALGORITHM'     => 'sha256',
//    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));
//
//    //
//    // Include and evaluate some
//    // global function definition
//    // resources in order to
//    // support micro timestamp
//    // generation before the
//    // CRNRSTN :: Lightsaber
//    // SOAP Services Layer
//    // system resource registry
//    // has booted up.
//    //
//    //
//    // 5
//    //
//    // Saturday, September 14, 2024 @ 0732 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//    'REGISTERED_NAME'            => array('_crnrstn_return_micro_time' => 'FUNCTION_DEFINITION'),
//    'ISACTIVE'                   => 0,
//    'FILE_PATH'                  => $crnrstn_directory_paths['function_timestamp'] . $slsh .
//                                    'crnrstn.return_micro_time.function.php',
//    'LOAD_METHOD'                => 'require',
//    'RESOURCE_TYPE'              => 'FUNCTION_DEFINITION',
//    'FIRE_ANYTIME_ANYWHERE'      => 1,
//    'FILE_HASHING_ALGORITHM'     => 'sha256',
//    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));
//
//    //
//    // Define the CRNRSTN ::
//    // Lightsaber SOAP Services
//    // Layer Server Runtime
//    // Duration Calculation Data
//    // Return in Seconds (or wall
//    // time in seconds) Global
//    // Function Resource.
//    //
//    //
//    // 5
//    //
//    // Saturday, September 14, 2024 @ 0725 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//    'REGISTERED_NAME'            => array('_crnrstn_wall_time' => 'FUNCTION_DEFINITION'),
//    'ISACTIVE'                   => 0,
//    'FILE_PATH'                  => $crnrstn_directory_paths['function_timestamp'] . $slsh .
//                                    'crnrstn.wall_time.function.php',
//    'LOAD_METHOD'                => 'require',
//    'RESOURCE_TYPE'              => 'FUNCTION_DEFINITION',
//    'FIRE_ANYTIME_ANYWHERE'      => 1,
//    'FILE_HASHING_ALGORITHM'     => 'sha256',
//    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));
//
//    //
//    // Define the CRNRSTN ::
//    // Lightsaber SOAP Services
//    // Layer Pretty Runtime
//    // Duration Data Output
//    // Return (or Pretty
//    // Wall Time) Resource.
//    //
//    //
//    // 5
//    //
//    // Saturday, September 14, 2024 @ 0727 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//    'REGISTERED_NAME'            => array('_crnrstn_pretty_elapsed_time' => 'FUNCTION_DEFINITION'),
//    'ISACTIVE'                   => 0,
//    'FILE_PATH'                  => $crnrstn_directory_paths['function_timestamp'] . $slsh .
//                                    'crnrstn.pretty_elapsed_time.function.php',
//    'LOAD_METHOD'                => 'require',
//    'RESOURCE_TYPE'              => 'FUNCTION_DEFINITION',
//    'FIRE_ANYTIME_ANYWHERE'      => 1,
//    'FILE_HASHING_ALGORITHM'     => 'sha256',
//    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));
//
//    //
//    // Define the CRNRSTN ::
//    // Lightsaber SOAP Services
//    // Layer Elapsed Time
//    // Multi-Language Data
//    // Content Cache Global
//    // Function Resource.
//    //
//    //
//    // 5
//    //
//    // Saturday, September 14, 2024 @ 0731 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//    'REGISTERED_NAME'            => array('_crnrstn_elapsed_time_multi_language_cache' => 'FUNCTION_DEFINITION'),
//    'ISACTIVE'                   => 0,
//    'FILE_PATH'                  => $crnrstn_directory_paths['function_timestamp'] . $slsh .
//                                    'crnrstn.elapsed_time_multi_language_cache.function.php',
//    'LOAD_METHOD'                => 'require',
//    'RESOURCE_TYPE'              => 'FUNCTION_DEFINITION',
//    'FIRE_ANYTIME_ANYWHERE'      => 1,
//    'FILE_HASHING_ALGORITHM'     => 'sha256',
//    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));
//
//    //
//    // Define the CRNRSTN ::
//    // Lightsaber SOAP Services
//    // Layer System Paths
//    // Initialization Global
//    // Function Resource.
//    //
//    // This global function
//    // resource enables the
//    // maintenance of operation
//    // relative to the running
//    // script for system
//    // path initialization.
//    //
//    //
//    // 5
//    //
//    // Thursday, August 29, 2024 @ 0613 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//    'REGISTERED_NAME'            => array('_crnrstn_system_paths_initialization' => 'FUNCTION_DEFINITION'),
//    'ISACTIVE'                   => 0,
//    'FILE_PATH'                  => $crnrstn_directory_paths['config_system_paths'] . $slsh .
//                                    'crnrstn.system_paths.function.php',
//    'LOAD_METHOD'                => 'require',
//    'RESOURCE_TYPE'              => 'FUNCTION_DEFINITION',
//    'FIRE_ANYTIME_ANYWHERE'      => 1,
//    'FILE_HASHING_ALGORITHM'     => 'sha256',
//    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));
//
//    //
//    // Include and evaluate the
//    // CRNRSTN :: Lightsaber
//    // SOAP Services Layer
//    // System Paths Initialization
//    // Runtime Executable.
//    //
//    // This resource will globally
//    // define CRNRSTN_ROOT by
//    // initializing it with the
//    // path root data for
//    // the running application.
//    //
//    //
//    // 5
//    //
//    // Thursday, August 29, 2024 @ 0617 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//    'REGISTERED_NAME'            => array($crnrstn_directory_paths['config_system_paths'] . $slsh .
//                                    'crnrstn.system_path_initialization.runtime_exe.php' => 'RUNTIME_EXECUTABLE'),
//    'ISACTIVE'                   => 0,
//    'FILE_PATH'                  => $crnrstn_directory_paths['config_system_paths'] . $slsh .
//                                    'crnrstn.system_path_initialization.runtime_exe.php',
//    'LOAD_METHOD'                => 'require',
//    'RESOURCE_TYPE'              => 'RUNTIME_EXECUTABLE',
//    'FIRE_ANYTIME_ANYWHERE'      => 1,
//    'FILE_HASHING_ALGORITHM'     => 'sha256',
//    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1),
//    'CRNRSTN_ROOT_OFFSET'        => $CRNRSTN_ROOT_OFFSET);
//
//    //
//    // Define the CRNRSTN ::
//    // Lightsaber SOAP
//    // Services Layer
//    // Integer Constants -
//    // Initialization Global
//    // Function Resource.
//    //
//    // This resource holds the
//    // integer values for all
//    // globally defined system
//    // integer constants.
//    //
//    //
//    // 5
//    //
//    // Thursday, August 29, 2024 @ 0627 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//    'REGISTERED_NAME'            => array('_crnrstn_int_return' => 'FUNCTION_DEFINITION'),
//    'ISACTIVE'                   => 0,
//    'FILE_PATH'                  => $crnrstn_directory_paths['config_integer_constants'] . $slsh .
//                                    'crnrstn.integer_return.function.php',
//    'LOAD_METHOD'                => 'require',
//    'RESOURCE_TYPE'              => 'FUNCTION_DEFINITION',
//    'FIRE_ANYTIME_ANYWHERE'      => 1,
//    'FILE_HASHING_ALGORITHM'     => 'sha256',
//    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));
//
//    //
//    // Initialize the integer
//    // values for all globally
//    // defined system
//    // integer constants.
//    //
//    // Include and evaluate
//    // the CRNRSTN :: Lightsaber
//    // SOAP Services Layer
//    // Integer Constants
//    // Initialization Control
//    // Runtime Executable.
//    //
//    //
//    // 5
//    //
//    // Thursday, August 29, 2024 @ 0629 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//    'REGISTERED_NAME'            => array($crnrstn_directory_paths['config_integer_constants'] . $slsh .
//                                    'crnrstn.constants_load.runtime_exe.php' => 'RUNTIME_EXECUTABLE'),
//    'ISACTIVE'                   => 0,
//    'FILE_PATH'                  => $crnrstn_directory_paths['config_integer_constants'] . $slsh .
//                                    'crnrstn.constants_load.runtime_exe.php',
//    'LOAD_METHOD'                => 'require',
//    'RESOURCE_TYPE'              => 'RUNTIME_EXECUTABLE',
//    'FIRE_ANYTIME_ANYWHERE'      => 1,
//    'FILE_HASHING_ALGORITHM'     => 'sha256',
//    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));
//
//    //
//    // Define The CRNRSTN ::
//    // Lightsaber SOAP Services
//    // Layer IP Address
//    // Authorization Manager
//    // class object.
//    //
//    //
//    // 5
//    //
//    // Thursday, August 29, 2024 @ 0634 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//    'REGISTERED_NAME'            => array('crnrstn_ip_authorization_manager' => 'CLASS_DEFINITION'),
//    'ISACTIVE'                   => 0,
//    'FILE_PATH'                  => $crnrstn_directory_paths['class_security'] . $slsh .
//                                    'crnrstn.ip_authorization_manager.class.php',
//    'LOAD_METHOD'                => 'require',
//    'RESOURCE_TYPE'              => 'CLASS_DEFINITION',
//    'FIRE_ANYTIME_ANYWHERE'      => 1,
//    'FILE_HASHING_ALGORITHM'     => 'sha256',
//    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));
//
//    //
//    // Define the global function
//    // for the CRNRSTN ::
//    // Lightsaber SOAP Services
//    // Layer Uniform Resource
//    // Location (URL) System
//    // Library Cache Repository
//    // Global Function Resource.
//    //
//    //
//    // 5
//    //
//    // Thursday, August 29, 2024 @ 0627 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//    'REGISTERED_NAME'            => array('_crnrstn_system_link_library' => 'FUNCTION_DEFINITION'),
//    'ISACTIVE'                   => 0,
//    'FILE_PATH'                  => $crnrstn_directory_paths['config_system_links'] . $slsh .
//                                    'crnrstn.system_link_library.function.php',
//    'LOAD_METHOD'                => 'require',
//    'RESOURCE_TYPE'              => 'FUNCTION_DEFINITION',
//    'FIRE_ANYTIME_ANYWHERE'      => 1,
//    'FILE_HASHING_ALGORITHM'     => 'sha256',
//    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));

    //
    // Define the CRNRSTN ::
    // Lightsaber SOAP Services
    // Layer System Registry Native
    // Registered Resources HTML and
    // Text Content Generator
    // and Library.
    //
    // All HTML and text content
    // for system native registered
    // resources are maintained
    // and version controlled
    // within this content library
    // resource file.
    //
    //
    // 5
    //
    // Thursday, August 29, 2024 @ 0627 hrs.
    $tmp_resource_meta_ARRAY[] = array(
    'REGISTERED_NAME'            => array('_crnrstn_native_resource_registry_content_library' => 'FUNCTION_DEFINITION'),
    'ISACTIVE'                   => 1,
    'FILE_PATH'                  => $crnrstn_directory_paths['config_resource_registry'] . $slsh .
                                    'crnrstn.native_registered_resource_content_library.function.php',
    'LOAD_METHOD'                => 'require',
    'RESOURCE_TYPE'              => 'FUNCTION_DEFINITION',
    'FIRE_ANYTIME_ANYWHERE'      => 1,
    'FILE_HASHING_ALGORITHM'     => 'sha256',
    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));

    //
    // The native CRNRSTN :: Lightsaber
    // SOAP Services Layer System
    // Registry Cache of SOAP, Class,
    // Global Function, and Runtime
    // Executable System Resources
    // Meta Data Definitions and
    // supporting application architectures.
    //
    //
    // 5
    //
    // Friday, August 30, 2024 @ 0532 hrs.
    $tmp_resource_meta_ARRAY[] = array(
    'REGISTERED_NAME'            => array('_crnrstn_native_resource_registry' => 'FUNCTION_DEFINITION'),
    'ISACTIVE'                   => 1,
    'FILE_PATH'                  => $crnrstn_directory_paths['config_resource_registry'] . $slsh .
                                    'crnrstn.native_resource_registry.function.php',
    'LOAD_METHOD'                => 'require',
    'RESOURCE_TYPE'              => 'FUNCTION_DEFINITION',
    'FIRE_ANYTIME_ANYWHERE'      => 1,
    'FILE_HASHING_ALGORITHM'     => 'sha256',
    'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));

//    //
//    // The CRNRSTN :: Lightsaber RoCEv2 SOAP
//    // Services Layer Registry User
//    // Static System Data Object
//    // Initialization Global
//    // Function Definition
//    //
//    //
//    // 5
//    //
//    // Friday, August 30, 2024 @ 0535 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//        'REGISTERED_NAME'            => array('_crnrstn_registry_user_settings' => 'FUNCTION_DEFINITION'),
//        'ISACTIVE'                   => 1,
//        'FILE_PATH'                  => $crnrstn_directory_paths['config_resource_registry'] . $slsh . 'crnrstn.registry_user_settings.function.php',
//        'LOAD_METHOD'                => 'require',
//        'RESOURCE_TYPE'              => 'FUNCTION_DEFINITION',
//        'FIRE_ANYTIME_ANYWHERE'      => 1,
//        'FILE_HASHING_ALGORITHM'     => 'sha256',
//        'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));
//
//    //
//    // The CRNRSTN :: Lightsaber
//    // SOAP Services Layer
//    // System Registry Assistant.
//    //
//    //
//    // 5
//    //
//    // Friday, August 30, 2024 @ 0536 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//        'REGISTERED_NAME'            => array('crnrstn_registry_assistant' => 'CLASS_DEFINITION'),
//        'ISACTIVE'                   => 1,
//        'FILE_PATH'                  => $crnrstn_directory_paths['class_registry'] . $slsh . 'crnrstn.registry_assistant.class.php',
//        'LOAD_METHOD'                => 'require',
//        'RESOURCE_TYPE'              => 'CLASS_DEFINITION',
//        'FIRE_ANYTIME_ANYWHERE'      => 1,
//        'FILE_HASHING_ALGORITHM'     => 'sha256',
//        'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));
//
//    //
//    // The CRNRSTN :: Lightsaber
//    // SOAP Services Layer
//    // System Registry User.
//    //
//    //
//    // 5
//    //
//    // Friday, August 30, 2024 @ 0536 hrs.
//    $tmp_resource_meta_ARRAY[] = array(
//        'REGISTERED_NAME'            => array('crnrstn_registry_user' => 'CLASS_DEFINITION'),
//        'ISACTIVE'                   => 1,
//        'FILE_PATH'                  => $crnrstn_directory_paths['class_registry'] . $slsh . 'crnrstn.registry_user.class.php',
//        'LOAD_METHOD'                => 'require',
//        'RESOURCE_TYPE'              => 'CLASS_DEFINITION',
//        'FIRE_ANYTIME_ANYWHERE'      => 1,
//        'FILE_HASHING_ALGORITHM'     => 'sha256',
//        'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));
    //
    // The native CRNRSTN :: Lightsaber
    // SOAP Services Layer System
    // Registry Cache of SOAP, Class,
    // Global Function, and Runtime
    // Executable System Resources
    // Meta Data Definitions and
    // supporting application architectures.
    //
    //
    // 5
    //
    // Friday, August 30, 2024 @ 0532 hrs.
    $tmp_resource_meta_ARRAY[] = array(
        'REGISTERED_NAME'            => array('_crnrstn_settings' => 'FUNCTION_DEFINITION'),
        'ISACTIVE'                   => 1,
        'FILE_PATH'                  => $crnrstn_directory_paths['config_defaults'] . $slsh .
                                        'crnrstn.settings.function.php',
        'LOAD_METHOD'                => 'require',
        'RESOURCE_TYPE'              => 'FUNCTION_DEFINITION',
        'FIRE_ANYTIME_ANYWHERE'      => 1,
        'FILE_HASHING_ALGORITHM'     => 'sha256',
        'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));

    //
    // The CRNRSTN :: Lightsaber
    // RoCEv2 SOAP Services Layer
    // (CLR-SSL) Session Manager
    // Class Object is required
    // for the generation of
    // $config_serial at
    // CLR-SSL initialization.
    //
    //
    // 5
    //
    // Wednesday, October 29, 2025 @ 0722 hrs.
    $tmp_resource_meta_ARRAY[] = array(
        'REGISTERED_NAME'            => array('crnrstn_session_manager' => 'CLASS_DEFINITION'),
        'ISACTIVE'                   => 1,
        'FILE_PATH'                  => $crnrstn_directory_paths['class_session'] . $slsh .
                                        'crnrstn.session_manager.class.php',
        'LOAD_METHOD'                => 'require',
        'RESOURCE_TYPE'              => 'CLASS_DEFINITION',
        'FIRE_ANYTIME_ANYWHERE'      => 1,
        'FILE_HASHING_ALGORITHM'     => 'sha256',
        'LOAD_CONTROL_PROFILE'       => array('R_load_1_to_1_request' => 1));

    //
    // Initialize a data structure
    // to queue all resource
    // endpoints that are
    // authorized to be loaded
    // into runtime memory.
    //
    //
    // 5
    //
    // Friday, August 30, 2024 @ 0247 hrs.
    $tmp_resource_load_ARRAY = array();

    //
    // Check and filter the
    // provided resources to
    // build a proper runtime
    // executable data set.
    //
    //
    // 5
    //
    // Thursday, August 29, 2024 @ 0705 hrs.
    foreach($tmp_resource_meta_ARRAY as 
        $index => $resource_ARRAY)
    {

        switch($resource_ARRAY['RESOURCE_TYPE']){
            case 'CLASS_DEFINITION':

                //
                // For each resource
                // that was provided,
                // do we take look?
                //
                //
                // 5
                //
                // Sunday, September 1, 2024 @ 0140 hrs.
                foreach($resource_ARRAY['REGISTERED_NAME'] as 
                    $resource_name => $resource_type)
                {

                    //
                    // We will only look
                    // at active resources
                    // for their include
                    // and evaluation.
                    //
                    //
                    // 5
                    //
                    // Saturday, August 31, 2024 @ 2325 hrs.
                    switch($resource_ARRAY['ISACTIVE']){
                        case 1:

                            //
                            // Is this class
                            // already defined?
                            //
                            //
                            // 5
                            //
                            // Friday, August 30, 2024 @ 0418 hrs.
                            if(class_exists($resource_name)){

                                error_log('[lnum ' . __LINE__ .
                                '] [funct ' . __FUNCTION__ .
                                '] File load denied. Registered class resource: ' .
                                strval($resource_name) . ' ['  .
                                strval($resource_type) . '].');

                                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                // Update the File Evaluation and Inclusion
                                // IS_ACTIVE status of this CLR-SSL
                                // Registered Resource.
                                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                //  Code            Description
                                //  ------------------------------------------
                                //  0               Inactive Resource.
                                //  1               Active Resource.
                                //  102             This resource is approved
                                //                  to be loaded into
                                //                  server memory.
                                //  200             This resource has been
                                //                  loaded into server memory.
                                //  304.0           The provided class
                                //                  definition already exists
                                //                  in memory. The loading of
                                //                  this resource has
                                //                  been cancelled.
                                //  304.1           The provided function
                                //                  definition already exists
                                //                  in memory. The loading of
                                //                  this resource has
                                //                  been cancelled.
                                //  401             Administrative CLR-SSL
                                //                  server settings do not
                                //                  allow this resource to
                                //                  be loaded. The loading of
                                //                  this resource has
                                //                  been denied.
                                //  403             The requesting client
                                //                  process is not authorized
                                //                  to load this resource.
                                //                  The loading of this
                                //                  resource has been denied.
                                //  404             File not found.
                                //  415             The file type at the
                                //                  provided filepath is not
                                //                  supported. The loading of
                                //                  this resource has
                                //                  been cancelled.
                                //  422             An unsupported resource
                                //                  endpoint has been provided.
                                //                  The loading of this
                                //                  resource has been cancelled.
                                //  424             At least one required
                                //                  resource dependency is
                                //                  failing to successfully load.
                                //                  The loading of this
                                //                  resource has been cancelled.
                                //  501             The resource was not
                                //                  implemented.
                                //
                                //
                                // 5 ::
                                //
                                // Friday, October 24, 2025 @ 0207 hrs.
                                $resource_ARRAY['ISACTIVE'] = 304.0;

                            }else{

                                error_log('[lnum ' . __LINE__ .
                                '] [funct ' . __FUNCTION__ .
                                '] File load approved. Class resource: ' .
                                strval($resource_name) . ' [' .
                                strval($resource_type) . '].');

                                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                // Update the File Evaluation and Inclusion
                                // IS_ACTIVE status of this CLR-SSL
                                // Registered Resource.
                                //
                                // 5 ::
                                //
                                // Friday, October 24, 2025 @ 0328 hrs.
                                $resource_ARRAY['ISACTIVE'] = 102;

                                //
                                // Add the runtime
                                // approved resource
                                // by the specified
                                // load method.
                                //
                                //
                                // 5
                                //
                                // Thursday, August 29, 2024 @ 0806 hrs.
                                $tmp_resource_load_ARRAY[] = array(
                                    $resource_ARRAY['FILE_PATH'] => array(
                                    'REGISTERED_NAME'           => array($resource_name => $resource_ARRAY['RESOURCE_TYPE']),
                                    'ISACTIVE'                  => $resource_ARRAY['ISACTIVE'],
                                    'LOAD_METHOD'               => $resource_ARRAY['LOAD_METHOD'],
                                    'RESOURCE_TYPE'             => $resource_ARRAY['RESOURCE_TYPE'],
                                    'FIRE_ANYTIME_ANYWHERE'     => $resource_ARRAY['FIRE_ANYTIME_ANYWHERE'],
                                    'FILE_HASHING_ALGORITHM'    => $resource_ARRAY['FILE_HASHING_ALGORITHM'],
                                    'LOAD_CONTROL_PROFILE'      => $resource_ARRAY['LOAD_CONTROL_PROFILE']));

                            }

                        break;
                        default:

                            error_log('[lnum ' . __LINE__ .
                            '] [funct ' . __FUNCTION__ .
                            '] Inactive file received. File load denied. Registered class resource: ' .
                            strval($resource_name) . ' [' .
                            strval($resource_type) . '].');

                        break;

                    }

                }

            break;
            case 'FUNCTION_DEFINITION':

                //
                // For each resource
                // that was provided,
                // do we take look?
                //
                //
                // 5
                //
                // Sunday, September 1, 2024 @ 0142 hrs.
                foreach($resource_ARRAY['REGISTERED_NAME'] as $resource_name => $resource_type){

                    //
                    // We will only look
                    // at active resources
                    // for their include
                    // and evaluation.
                    //
                    // 5
                    //
                    // Saturday, August 31, 2024 @ 2342 hrs.
                    switch($resource_ARRAY['ISACTIVE']){
                        case 1:

                            //
                            // Is this function
                            // already defined
                            // in server memory?
                            //
                            //
                            // 5
                            //
                            // Friday, August 30, 2024 @ 0420 hrs.
                            if(function_exists($resource_name)){

                                error_log('[lnum ' . __LINE__ .
                                '] [funct ' . __FUNCTION__ .
                                '] File load denied. This function resource is ' .
                                'already loaded into memory: ' .
                                strval($resource_name) . ' [' .
                                strval($resource_type) . '].');

                                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                // Update the File Evaluation and Inclusion
                                // IS_ACTIVE status of this CLR-SSL
                                // Registered Resource.
                                //
                                // 5 ::
                                //
                                // Friday, October 24, 2025 @ 0328 hrs.
                                $resource_ARRAY['ISACTIVE'] = 304.1;

                            }else{

                                //
                                // Resource: _crnrstn_include_file
                                //
                                // If we see this one resource
                                // come through here, since,
                                // we are going to need this...
                                // and, I mean, we are going to
                                // need it real soon, go ahead
                                // and just include and evaluate
                                // this resource now.
                                //
                                //
                                // 5
                                //
                                // Friday, August 30, 2024 @ 0341 hrs.
                                if($resource_name === '_crnrstn_include_file'){

                                    //
                                    // If the file exists,
                                    // include and evaluate it.
                                    //
                                    //
                                    // 5
                                    //
                                    // Friday, August 30, 2024 @ 0429 hrs.
                                    if(file_exists($resource_ARRAY['FILE_PATH'])){

                                        switch(strtolower($resource_ARRAY['LOAD_METHOD'])){
                                            case 'require_once':

                                                //
                                                // Include and evaluate
                                                // the resource via require_once.
                                                //
                                                // https://www.php.net/manual/en/function.require-once.php
                                                //
                                                //
                                                // 5
                                                //
                                                // Friday, August 30, 2024 @ 0354 hrs.
                                                require_once($resource_ARRAY['FILE_PATH']);

                                                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                                // Update the File Evaluation and Inclusion
                                                // IS_ACTIVE status of this CLR-SSL
                                                // Registered Resource.
                                                //
                                                // 5 ::
                                                //
                                                // Friday, October 24, 2025 @ 0332 hrs.
                                                $resource_ARRAY['ISACTIVE'] = 200;

                                                error_log('[lnum ' . __LINE__ .
                                                    '] [funct ' . __FUNCTION__ .
                                                    '] File Loaded. Function resource: ' .
                                                    strval($resource_name) . ' [' .
                                                    strval($resource_type) . '].');

                                            break;
                                            case 'require':

                                                //
                                                // Include and evaluate
                                                // the resource require.
                                                //
                                                // https://www.php.net/manual/en/function.require.php
                                                //
                                                //
                                                // 5
                                                //
                                                // Friday, August 30, 2024 @ 0356 hrs.
                                                require($resource_ARRAY['FILE_PATH']);

                                                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                                // Update the File Evaluation and Inclusion
                                                // IS_ACTIVE status of this CLR-SSL
                                                // Registered Resource.
                                                //
                                                // 5 ::
                                                //
                                                // Friday, October 24, 2025 @ 0332 hrs.
                                                $resource_ARRAY['ISACTIVE'] = 200;

                                                error_log('[lnum ' . __LINE__ .
                                                    '] [funct ' . __FUNCTION__ .
                                                    '] File Loaded. Function resource: ' .
                                                    strval($resource_name) . ' [' .
                                                    strval($resource_type) . '].');

                                            break;
                                            case 'include_once':

                                                //
                                                // Include and evaluate
                                                // the resource include_once.
                                                //
                                                // https://www.php.net/manual/en/function.include-once.php
                                                //
                                                //
                                                // 5
                                                //
                                                // Friday, August 30, 2024 @ 0356 hrs.
                                                include_once($resource_ARRAY['FILE_PATH']);

                                                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                                // Update the File Evaluation and Inclusion
                                                // IS_ACTIVE status of this CLR-SSL
                                                // Registered Resource.
                                                //
                                                // 5 ::
                                                //
                                                // Friday, October 24, 2025 @ 0332 hrs.
                                                $resource_ARRAY['ISACTIVE'] = 200;

                                                error_log('[lnum ' . __LINE__ .
                                                    '] [funct ' . __FUNCTION__ .
                                                    '] File Loaded. Function resource: ' .
                                                    strval($resource_name) . ' [' .
                                                    strval($resource_type) . '].');

                                            break;
                                            case 'include':
                                            default:

                                                //
                                                // Include and evaluate
                                                // the resource include.
                                                //
                                                // https://www.php.net/manual/en/function.include.php
                                                //
                                                //
                                                // 5
                                                //
                                                // Friday, August 30, 2024 @ 0357 hrs.
                                                include($resource_ARRAY['FILE_PATH']);

                                                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                                // Update the File Evaluation and Inclusion
                                                // IS_ACTIVE status of this CLR-SSL
                                                // Registered Resource.
                                                //
                                                // 5 ::
                                                //
                                                // Friday, October 24, 2025 @ 0332 hrs.
                                                $resource_ARRAY['ISACTIVE'] = 200;

                                                error_log('[lnum ' . __LINE__ .
                                                    '] [funct ' . __FUNCTION__ .
                                                    '] File Loaded. Function resource: ' .
                                                    strval($resource_name) . ' [' .
                                                    strval($resource_type) . '].');

                                            break;

                                        }

                                    }else{

                                        // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                        // Update the File Evaluation and Inclusion
                                        // IS_ACTIVE status of this CLR-SSL
                                        // Registered Resource.
                                        //
                                        // 5 ::
                                        //
                                        // Friday, October 24, 2025 @ 0333 hrs.
                                        $resource_ARRAY['ISACTIVE'] = 404;

                                        //
                                        // The file cannot
                                        // be found.
                                        //
                                        //
                                        // 5
                                        //
                                        // Friday, August 30, 2024 @ 0404 hrs.
                                        error_log('[lnum ' . __LINE__ .
                                            '] [funct ' . __FUNCTION__ .
                                            '] Oops. The function resource is approved ' .
                                            'to load, but the file is not found: ' .
                                            strval($resource_name) . ' [' .
                                            strval($resource_type) . '].');

                                    }

                                }else{

                                    // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                    // Update the File Evaluation and Inclusion
                                    // IS_ACTIVE status of this CLR-SSL
                                    // Registered Resource.
                                    //
                                    // 5 ::
                                    //
                                    // Friday, October 24, 2025 @ 0335 hrs.
                                    $resource_ARRAY['ISACTIVE'] = 102;

                                    error_log('[lnum ' . __LINE__ .
                                        '] [funct ' . __FUNCTION__ .
                                        '] File load approved. Function resource: ' .
                                        strval($resource_name) . ' [' .
                                        strval($resource_type) . '].');

                                }

                                //
                                // Add the runtime
                                // approved resource
                                // by the specified
                                // load method.
                                //
                                //
                                // 5
                                //
                                // Thursday, August 29, 2024 @ 0808 hrs.
                                $tmp_resource_load_ARRAY[] = array(
                                    $resource_ARRAY['FILE_PATH'] => array(
                                        'REGISTERED_NAME'           => array($resource_name => $resource_ARRAY['RESOURCE_TYPE']),
                                        'ISACTIVE'                  => $resource_ARRAY['ISACTIVE'],
                                        'LOAD_METHOD'               => $resource_ARRAY['LOAD_METHOD'],
                                        'RESOURCE_TYPE'             => $resource_ARRAY['RESOURCE_TYPE'],
                                        'FIRE_ANYTIME_ANYWHERE'     => $resource_ARRAY['FIRE_ANYTIME_ANYWHERE'],
                                        'FILE_HASHING_ALGORITHM'    => $resource_ARRAY['FILE_HASHING_ALGORITHM'],
                                        'LOAD_CONTROL_PROFILE'      => $resource_ARRAY['LOAD_CONTROL_PROFILE']));

                            }

                        break;
                        default:

                            error_log('[lnum ' . __LINE__ .
                            '] [funct ' . __FUNCTION__ .
                            '] Inactive file received. File load denied. Registered class resource: ' .
                            strval($resource_name) . ' [' .
                            strval($resource_type) . '].');

                        break;

                    }

                }

            break;
            case 'RUNTIME_EXECUTABLE':

                //
                // For each resource
                // that was provided,
                // do we take look?
                //
                //
                // 5
                //
                // Sunday, September 1, 2024 @ 0143 hrs.
                foreach($resource_ARRAY['REGISTERED_NAME'] as $resource_name => $resource_type){

                    //
                    // We will only look
                    // at active resources
                    // for their include
                    // and evaluation.
                    //
                    //
                    // 5
                    //
                    // Saturday, August 31, 2024 @ 2344 hrs.
                    switch($resource_ARRAY['ISACTIVE']){
                        case 1:

                            error_log('[lnum ' . __LINE__ .
                            '] [funct ' . __FUNCTION__ .
                            '] File load approved. Registered runtime ' .
                            'executable resource: ' .
                            strval($resource_name) . ' [' .
                            strval($resource_type) . '].');

                            // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                            // Update the File Evaluation and Inclusion
                            // IS_ACTIVE status of this CLR-SSL
                            // Registered Resource.
                            //
                            // 5 ::
                            //
                            // Friday, October 24, 2025 @ 0328 hrs.
                            $resource_ARRAY['ISACTIVE'] = 102;

                            //
                            // Is there an override
                            // for the directory offset
                            // that needs to be
                            // initialized in runtime
                            // before including the
                            // runtime executable?
                            //
                            // Currently, this offset
                            // consideration only
                            // applies to the CRNRSTN ::
                            // Lightsaber SOAP Services
                            // Layer System Paths
                            // Initialization Runtime
                            // Executable, here:
                            // /_R/_config/config.system_paths/crnrstn.system_path_initialization.runtime_exe.php
                            //
                            //
                            // 5
                            //
                            // Thursday, August 29, 2024 @ 0754 hrs.
                            if(isset($resource_ARRAY['CRNRSTN_ROOT_OFFSET'])){

                                //
                                // Add the runtime
                                // approved resource
                                // by the specified
                                // load method.
                                //
                                //
                                // 5
                                //
                                // Thursday, August 29, 2024 @ 0806 hrs.
                                $tmp_resource_load_ARRAY[] = array(
                                    $resource_ARRAY['FILE_PATH'] => array(
                                    'REGISTERED_NAME'           => array($resource_name => $resource_ARRAY['RESOURCE_TYPE']),
                                    'ISACTIVE'                  => $resource_ARRAY['ISACTIVE'],
                                    'LOAD_METHOD'               => $resource_ARRAY['LOAD_METHOD'],
                                    'RESOURCE_TYPE'             => $resource_ARRAY['RESOURCE_TYPE'],
                                    'FIRE_ANYTIME_ANYWHERE'     => $resource_ARRAY['FIRE_ANYTIME_ANYWHERE'],
                                    'FILE_HASHING_ALGORITHM'    => $resource_ARRAY['FILE_HASHING_ALGORITHM'],
                                    'LOAD_CONTROL_PROFILE'      => $resource_ARRAY['LOAD_CONTROL_PROFILE'],
                                    'CRNRSTN_ROOT_OFFSET'       => $resource_ARRAY['CRNRSTN_ROOT_OFFSET']));

                            }else{

                                //
                                // Add the runtime
                                // approved resource
                                // by the specified
                                // load method.
                                //
                                //
                                // 5
                                //
                                // Thursday, August 29, 2024 @ 0816 hrs.
                                $tmp_resource_load_ARRAY[] = array(
                                    $resource_ARRAY['FILE_PATH'] => array(
                                    'REGISTERED_NAME'           => array($resource_name => $resource_ARRAY['RESOURCE_TYPE']),
                                    'ISACTIVE'                  => $resource_ARRAY['ISACTIVE'],
                                    'LOAD_METHOD'               => $resource_ARRAY['LOAD_METHOD'],
                                    'RESOURCE_TYPE'             => $resource_ARRAY['RESOURCE_TYPE'],
                                    'FIRE_ANYTIME_ANYWHERE'     => $resource_ARRAY['FIRE_ANYTIME_ANYWHERE'],
                                    'FILE_HASHING_ALGORITHM'    => $resource_ARRAY['FILE_HASHING_ALGORITHM'],
                                    'LOAD_CONTROL_PROFILE'      => $resource_ARRAY['LOAD_CONTROL_PROFILE']));

                            }

                        break;
                        default:

                            error_log('[lnum ' . __LINE__ .
                            '] [funct ' . __FUNCTION__ .
                            '] Inactive file received. File load denied. Registered class resource: ' .
                            strval($resource_name) . ' [' .
                            strval($resource_type) . '].');

                        break;

                    }

                }

            break;
            default:

                error_log('[lnum ' . __LINE__ .
                '] [funct ' . __FUNCTION__ .
                '] Unknown resource type. Data: ' .
                print_r($resource_ARRAY['RESOURCE_TYPE'], true) . '.');

            break;

        }

    }

    //
    // Process all provided resource
    // endpoints for their inclusion
    // and evaluation.
    //
    //
    // 5
    //
    // Friday, August 30, 2024 @ 0301 hrs.
    $tmp_result = _crnrstn_include_file($tmp_resource_load_ARRAY, 'include_once', NULL, false, true);

    //
    // 5 :: Friday, August 30, 2024 @ 0428 hrs.
    //
    // Concerning $tmp_result:
    //
    // We are looking to return
    // a report with any runtime
    // executable paths that
    // were not flagged as
    // 'FIRE_ANYTIME_ANYWHERE' => 1,
    // when passed in as a resource
    // to _crnrstn_include_file().
    //
    // # C # R # N # R # S # T # N # :: # L # I # G # H # T

    //
    // The output for this
    // global function
    // resource needs
    // more consideration.
    // include a performance
    // report with the
    // following information:
    //
    //   - Paths of all runtime
    //     executables that are
    //     not 'FIRE_ANYTIME_ANYWHERE' => 1.
    //
    //   - All include_once resources.
    //
    //   - All require_once resources.
    //
    //
    // 5
    //
    // Friday, August 30, 2024 @ 0258 hrs.
    return $crnrstn_directory_paths;

}