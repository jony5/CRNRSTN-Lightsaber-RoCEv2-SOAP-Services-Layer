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
 * RESOURCE DEFINITION :: _crnrstn_include_file
 * FUNCTION VERSION    :: 1.00.0000
 * DATE                :: Thursday, August 29, 2024 @ 0333 hrs.
 * AUTHOR              :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                 :: http://evifweb.jony5.com
 * TITLE               :: The CRNRSTN :: Lightsaber SOAP
 *                        Services Layer File Inclusion
 *                        Support For Resource
 *                        Definition at Object Boot-Up
 *                        Global Function Definition
 * DESCRIPTION         :: Before The CRNRSTN :: Lightsaber
 *                        SOAP Services Layer System
 *                        Resource Registry can be brought
 *                        online, any registry resources
 *                        that are necessary for object
 *                        boot can be loaded using this
 *                        file inclusion function.
 *
 *                        This method supports resource
 *                        definition at object boot up.
 *
 *
 *                        5
 *
 *                        Thursday, August 29, 2024 @ 0406 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * @package CRNRSTN
 * @version 1.00.0000 CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer.
 * @author Jonathan '5' Harris <jharris@eVifweb.com>
 * @copyright Copyright © 2012-2026 eVifweb® development All Rights Reserved.
 * @license https://crnrstn.jony5.com/licensing/ MIT
 * @link https://crnrstn.jony5.com/ CRNRSTN :: Project Website.
 * @link https://twitter.com/CRNRSTN_v2_0_0 CRNRSTN :: on Twitter.
 * @link http://evifweb.jony5.com/ eVifweb :: Corporate Sponsor.
 * @return boolean Returns true on success while logging failures.
 * @access public
 *
 */
function _crnrstn_include_file($file_path,
                               $include_method_name = 'include_once',
                               $hash_algorithm = NULL,
                               $hash_output_binary = false,
                               $enable_file_validation = true,
                               $load_control_profile = NULL)
{
    // # C # R # N # R # S # T # N # :: # L # I # G # H # T
    // Evaluate the data type of the input
    // $file_path data parameter to
    // determine data structure and then
    // the use-case for how to process.
    //
    //
    // 5 ::
    //
    // Friday, August 30, 2025 @ 0345 hrs.
    switch(strtolower(gettype($file_path))){
        case 'array':

            //
            // Loop through the file
            // path input data array
            // and recursively
            // process the results
            // according to the data
            // profile of each
            // resource.
            //
            // If, said resources
            // have been received
            // with $object_boot_data_structure = true,
            // the resources will
            // be included and
            // evaluated according
            // to each by its own
            // meta data profile.
            //
            //
            // 5
            //
            // Friday, August 30, 2024 @ 0436 hrs.
            foreach($file_path as 
                $tmp_filepath_index => $tmp_res_file_path_META)
            {

                switch(gettype($tmp_filepath_index)){
                    case 'int':
                    case 'integer':

                        // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                        //
                        // Supported File Path
                        // Array Data: Structure A
                        //
                        // $file_path[0] = "filepath_0"
                        // $file_path[1] = "filepath_1"
                        // $file_path[2] = "filepath_2"
                        if(is_string($tmp_res_file_path_META) == true){

                            //
                            // Is a file validation
                            // check required?
                            if($enable_file_validation !== false){

                                if(!is_file($tmp_res_file_path_META)){

                                    ///if($resource_name === '_crnrstn_include_file'){
                                    error_log('CRNRSTN :: File load error. [' .
                                        __FILE__ . '] [lnum ' . __LINE__ . '] '.
                                        print_r($tmp_res_file_path_META, true));

                                    error_log('CRNRSTN :: File load error. [' .
                                        __FILE__ . '][lnum ' . __LINE__ . '] could not ' .
                                        strtolower($include_method_name) . '(' .
                                        strval($tmp_res_file_path_META) . '). ' .
                                        'CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer UGC Input Data Report' .
                                        ' | TYPE=[' . strtoupper(gettype($tmp_res_file_path_META)) .
                                        ']. LEN=[' . strlen(strval($tmp_res_file_path_META)) . '].');

                                }else{

                                    //
                                    // Process resource filepath for
                                    // Array Data Structure A.
                                    // Calling _crnrstn_include_file()
                                    // recursively.
                                    //
                                    // 5 :: Thursday, October 23, 2025 @ 0720 hrs.
                                    //
                                    _crnrstn_include_file(
                                        $tmp_res_file_path_META, 
                                        $include_method_name, 
                                        $hash_algorithm, 
                                        $hash_output_binary, 
                                        false, 
                                        $load_control_profile);

                                }

                            }else{

                                //
                                // Process resource filepath for
                                // Array Data Structure A.
                                // Calling _crnrstn_include_file()
                                // recursively.
                                //
                                // 5 :: Thursday, October 23, 2025 @ 0720 hrs.
                                //
                                _crnrstn_include_file($tmp_res_file_path_META, $include_method_name, $hash_algorithm, $hash_output_binary, false, $load_control_profile);

                            }

                        }else{

                            // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                            // Supported File Path
                            // Array Data: Structure C
                            //
                            // Please Note:
                            // This is also the result from passing in a
                            // file path as string data and with the
                            // $is_recursive parameter default left
                            // as true.
                            //
                            // "filepath_0" = array(
                            //                  'REGISTERED_NAME'           => array(filepath_0 => 'FILE'),
                            //                  'LOAD_METHOD'               => "include_once",
                            //                  'RESOURCE_TYPE'             => 'UNREGISTERED_FILE_STRING_PATH',
                            //                  'FIRE_ANYTIME_ANYWHERE'     => 1,
                            //                  'FILE_HASHING_ALGORITHM'    => "sha256",
                            //                  'LOAD_CONTROL_PROFILE'      => array('R_load_1_to_1_request' => 1)
                            //                )
                            //
                            // Is this file path
                            // data formatted for
                            // supporting an object
                            // booting into the
                            // resource registry?
                            //
                            //
                            // 5
                            //
                            // Thursday, August 29, 2024 @ 0828 hrs.
                            // [Edits: Added support for different file
                            // path parameter data types and array
                            // data structures.
                            // 5 :: Thursday, October 23, 2025 @ 0458 hrs.]
                            //
                            // Process resource filepath for
                            // Array Data Structure C.
                            foreach($tmp_res_file_path_META as 
                                $tmp_resource_id => $tmp_res_ARRAY)
                            {

                                /*
                                5 :: Thursday, August 29, 2024 @ 0832 hrs.

                                TODO :: Return of FIRE_ANYTIME_ANYWHERE = 0,
                                        and LOAD_CONTROL_PROFILE implementation.
                                        5 :: Friday, August 30, 2024 @ 0544 hrs.

                                Class and Function
                                definition files
                                resource meta
                                data profile.
                                -----
                                $tmp_resource_load_ARRAY[] = array(
                                    $resource_ARRAY['FILE_PATH'] => array(
                                    'REGISTERED_NAME'           => array($resource_name => $resource_ARRAY['RESOURCE_TYPE']),
                                    'LOAD_METHOD'               => $resource_ARRAY['LOAD_METHOD'],
                                    'RESOURCE_TYPE'             => $resource_ARRAY['RESOURCE_TYPE'],
                                    'FIRE_ANYTIME_ANYWHERE'     => $resource_ARRAY['FIRE_ANYTIME_ANYWHERE'],
                                    'FILE_HASHING_ALGORITHM'    => $resource_ARRAY['FILE_HASHING_ALGORITHM'],
                                    'LOAD_CONTROL_PROFILE'      => $resource_ARRAY['LOAD_CONTROL_PROFILE']);


                                Runtime executable
                                resource meta
                                data profile
                                + runtime override
                                root directory offset
                                for the initialization
                                of the globally
                                defined CRNRSTN_ROOT.
                                -----
                                $tmp_resource_load_ARRAY[] = array(
                                    $resource_ARRAY['FILE_PATH'] => array(
                                    'REGISTERED_NAME'           => array($resource_name => $resource_ARRAY['RESOURCE_TYPE']),
                                    'LOAD_METHOD'               => $resource_ARRAY['LOAD_METHOD'],
                                    'RESOURCE_TYPE'             => $resource_ARRAY['RESOURCE_TYPE'],
                                    'FIRE_ANYTIME_ANYWHERE'     => $resource_ARRAY['FIRE_ANYTIME_ANYWHERE'],
                                    'FILE_HASHING_ALGORITHM'    => $resource_ARRAY['FILE_HASHING_ALGORITHM'],
                                    'LOAD_CONTROL_PROFILE'      => array($resource_ARRAY['LOAD_CONTROL_PROFILE'] => 1),
                                    'CRNRSTN_ROOT_OFFSET'       => $resource_ARRAY['CRNRSTN_ROOT_OFFSET']));

                                */

                                if(!isset($tmp_res_ARRAY['LOAD_METHOD'])){

                                    error_log('CRNRSTN :: File load error. [' .
                                        __FILE__ . '], could not determine the include method ' .
                                        'for file path data:'. print_r($tmp_resource_id, true) . '. ' .
                                        'CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer UGC Input Data Report' .
                                        ' | TYPE=[' . strtoupper(gettype($tmp_resource_id)) .
                                        ']. LEN=[' . strlen(strval($tmp_resource_id)) . '].');

                                }else{

                                    if(($tmp_res_ARRAY['is_active'] == 102) || 
                                        ($tmp_res_ARRAY['is_active'] == '102') ||
                                        ($tmp_res_ARRAY['is_active'] == 1) || 
                                        ($tmp_res_ARRAY['is_active'] == '1'))
                                    {

                                        //
                                        // Is a file validation 
                                        // check required? 
                                        if($enable_file_validation !== false){

                                            if(!is_file($tmp_resource_id)){

                                                error_log('CRNRSTN :: File load error. [' .
                                                    __FILE__ . '], could not ' . strtolower($tmp_res_ARRAY['LOAD_METHOD']) . '(' .
                                                    strval($tmp_resource_id) . '). ' .
                                                    'CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer UGC Input Data Report' .
                                                    ' | TYPE=[' . strtoupper(gettype($tmp_resource_id)) .
                                                    ']. LEN=[' . strlen(strval($tmp_resource_id)) . '].');

                                            }else{

                                                //
                                                // Process resource filepath for
                                                // Array Data Structure C.
                                                // Calling _crnrstn_include_file()
                                                // recursively.
                                                //
                                                // 5 :: Thursday, October 23, 2025 @ 0726 hrs.
                                                //
                                                _crnrstn_include_file(
                                                    $tmp_resource_id, 
                                                    $tmp_res_ARRAY['LOAD_METHOD'], 
                                                    $hash_algorithm, 
                                                    $hash_output_binary, 
                                                    false, 
                                                    $tmp_res_ARRAY['LOAD_CONTROL_PROFILE']);

                                            }

                                        }else{

                                            //
                                            // Process resource filepath for
                                            // Array Data Structure C.
                                            // Calling _crnrstn_include_file()
                                            // recursively.
                                            //
                                            // 5 :: Thursday, October 23, 2025 @ 0726 hrs.
                                            //
                                            _crnrstn_include_file(
                                                $tmp_resource_id, 
                                                $tmp_res_ARRAY['LOAD_METHOD'], 
                                                $hash_algorithm, 
                                                $hash_output_binary, 
                                                false, 
                                                $tmp_res_ARRAY['LOAD_CONTROL_PROFILE']);

                                        }

                                    }

                                }

                            }

                        }

                    break;
                    case 'string':
                    default:

                        // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                        //
                        // Supported File Path
                        // Array Data: Structure B
                        //
                        // $file_path["filepath_0"] = 1;
                        // $file_path["filepath_1"] = 1;
                        // $file_path["filepath_2"] = 1;
                        //
                        //
                        // Is a file validation
                        // check required?
                        if($enable_file_validation !== false){

                            if(!is_file($tmp_filepath_index)){

                                ///if($resource_name === '_crnrstn_include_file'){
                                error_log('CRNRSTN :: File load error. [' .
                                    __FILE__ . '] [lnum ' . __LINE__ . '] '.
                                    print_r($tmp_filepath_index, true));

                                error_log('CRNRSTN :: File load error. [' .
                                    __FILE__ . '][lnum ' . __LINE__ . '] could not ' .
                                    strtolower($include_method_name) . '(' .
                                    strval($tmp_filepath_index) . '). ' .
                                    'CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer UGC Input Data Report' .
                                    ' | TYPE=[' . strtoupper(gettype($tmp_filepath_index)) .
                                    ']. LEN=[' . strlen(strval($tmp_filepath_index)) . '].');

                            }else{

                                //
                                // Process resource filepath for
                                // Array Data Structure A.
                                // Calling _crnrstn_include_file()
                                // recursively.
                                //
                                // 5 :: Thursday, October 23, 2025 @ 0720 hrs.
                                //
                                _crnrstn_include_file(
                                    $tmp_filepath_index, 
                                    $include_method_name, 
                                    $hash_algorithm, 
                                    $hash_output_binary, 
                                    false, 
                                    $load_control_profile);

                            }

                        }else{

                            //
                            // Proceed with resource evaluation.
                            // Perform no file validation.
                            //
                            // Process resource filepath for
                            // Array Data Structure A.
                            // Calling _crnrstn_include_file()
                            // recursively.
                            //
                            // 5 :: Friday, October 24, 2025 @ 0440 hrs.
                            //
                            _crnrstn_include_file(
                                $tmp_filepath_index, 
                                $include_method_name, 
                                $hash_algorithm, 
                                $hash_output_binary, 
                                false, 
                                $load_control_profile);

                        }

                    break;

                }

            }

            //
            // Exit this method call after
            // having traversed the resources
            // file path array and having
            // recursively loaded said
            // resources therewithin.
            //
            // Note: Because only file path and
            //       file meta is treated as array,
            //       all files will use the
            //       _crnrstn_include_file()
            //       function call parameters to have:
            //          - the same hash algorithm,
            //          - the same include method,
            //          - the same binary output boolean, and
            //          - the same file validation boolean.
            //
            // This file load "profile lock" may
            // be changing soon, but currently,
            // it is ok.
            //
            //
            // 5 :: Sunday, July 21, 2024 @ 0501 hrs.
            return true;

        break;
        case 'string':
        default:

            //
            // Is a file validation
            // check required?
            if($enable_file_validation !== false){

                if(!is_file($file_path)){

                    // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                    // Update the File Evaluation and Inclusion
                    // IS_ACTIVE status of this CLR-SSL
                    // Registered Resource.
                    //
                    // 5 ::
                    //
                    // Friday, October 24, 2025 @ 0353 hrs.
                    //$resource_ARRAY['is_active'] = 422;

                    error_log('CRNRSTN :: File load error. [' .
                        __FILE__ . '], could not ' . strtolower($include_method_name) . '(' .
                        strval($file_path) . '). ' .
                        'CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer UGC Input Data Report' .
                        ' | TYPE=[' . strtoupper(gettype($file_path)) .
                        ']. LEN=[' . strlen(strval($file_path)) . '].');

                }else{

                    switch(strtolower($include_method_name)){
                        case 'require_once':

                            //
                            // Include and evaluate
                            // the resource via require_once.
                            //
                            // The require_once expression is identical to require except PHP
                            // will check if the file has already been included, and if so,
                            // not include (require) it again.
                            //
                            // https://www.php.net/manual/en/function.require-once.php
                            //
                            //
                            // 5
                            //
                            // Thursday, October 23, 2025 @ 0425 hrs.
                            require_once($file_path);

                            error_log('[file ' . __FILE__ .
                                '] [lnum ' . __LINE__ .
                                '] Resource load success. require_once(' .
                                strval($file_path) .').');

                        break;
                        case 'require':

                            //
                            // Include and evaluate
                            // the resource require.
                            //
                            // require is identical to include except upon failure it will
                            // also produce a fatal E_COMPILE_ERROR level error. In other
                            // words, it will halt the script whereas include only emits a
                            // warning (E_WARNING) which allows the script to continue.
                            //
                            // https://www.php.net/manual/en/function.require.php
                            //
                            //
                            // 5
                            //
                            // Thursday, October 23, 2025 @ 0425 hrs.
                            require($file_path);

                            error_log('[file ' . __FILE__ .
                                '] [lnum ' . __LINE__ .
                                '] Resource load success. require(' .
                                strval($file_path) .').');

                        break;
                        case 'include_once':
                            //
                            // Include and evaluate
                            // the resource include_once.
                            //
                            // The include_once statement includes and evaluates the specified
                            // file during the execution of the script. This is a behavior
                            // similar to the include statement, with the only difference being
                            // that if the code from a file has already been included, it will
                            // not be included again, and include_once returns true.
                            //
                            // As the name suggests, the file will be included just once.
                            //
                            // include_once may be used in cases where the same file might be
                            // included and evaluated more than once during a particular
                            // execution of a script, so in this case it may help avoid
                            // problems such as function redefinitions, variable value
                            // reassignments, etc.
                            //
                            // https://www.php.net/manual/en/function.include-once.php
                            //
                            //
                            // 5
                            //
                            // Thursday, October 23, 2025 @ 0425 hrs.
                            include_once($file_path);

                            error_log('[file ' . __FILE__ .
                                '] [lnum ' . __LINE__ .
                                '] Resource load success. include_once(' .
                                strval($file_path) .').');

                        break;
                        case 'include':
                        default:

                            //
                            // Include and evaluate
                            // the resource include.
                            //
                            // The include expression includes and evaluates the specified file.
                            //
                            // The documentation below also applies to require.
                            //
                            // Files are included based on the file path given or, if none is
                            // given, the include_path specified. If the file isn't found in the
                            // include_path, include will finally check in the calling script's
                            // own directory and the current working directory before failing.
                            //
                            // The include construct will emit an E_WARNING if it cannot find a
                            // file; this is different behavior from require, which will emit
                            // an E_ERROR.
                            //
                            // Note that both include and require raise additional E_WARNINGs,
                            // if the file cannot be accessed, before raising the final
                            // E_WARNING or E_ERROR, respectively.
                            //
                            // https://www.php.net/manual/en/function.include.php
                            //
                            //
                            // 5
                            //
                            // Thursday, October 23, 2025 @ 0425 hrs.
                            include($file_path);

                            error_log('[file ' . __FILE__ .
                                '] [lnum ' . __LINE__ .
                                '] Resource load success. include(' .
                                strval($file_path) .').');

                        break;

                    }

                }

            }else{

                //
                // Proceed with resource evaluation.
                // Perform no file validation.
                //
                //
                // 5 ::
                //
                // Friday, October 24, 2025 @ 0359 hrs.
                switch(strtolower($include_method_name)){
                    case 'require_once':

                        //
                        // Include and evaluate
                        // the resource via require_once.
                        //
                        // The require_once expression is identical to require except PHP
                        // will check if the file has already been included, and if so,
                        // not include (require) it again.
                        //
                        // https://www.php.net/manual/en/function.require-once.php
                        //
                        //
                        // 5
                        //
                        // Thursday, October 23, 2025 @ 0425 hrs.
                        require_once($file_path);

                        error_log('[file ' . __FILE__ .
                            '] [lnum ' . __LINE__ .
                            '] Resource load success. require_once(' .
                            strval($file_path) .').');

                    break;
                    case 'require':

                        //
                        // Include and evaluate
                        // the resource require.
                        //
                        // require is identical to include except upon failure it will
                        // also produce a fatal E_COMPILE_ERROR level error. In other
                        // words, it will halt the script whereas include only emits a
                        // warning (E_WARNING) which allows the script to continue.
                        //
                        // https://www.php.net/manual/en/function.require.php
                        //
                        //
                        // 5
                        //
                        // Thursday, October 23, 2025 @ 0425 hrs.
                        require($file_path);

                        error_log('[file ' . __FILE__ .
                            '] [lnum ' . __LINE__ .
                            '] Resource load success. require(' .
                            strval($file_path) .').');

                    break;
                    case 'include_once':
                        //
                        // Include and evaluate
                        // the resource include_once.
                        //
                        // The include_once statement includes and evaluates the specified
                        // file during the execution of the script. This is a behavior
                        // similar to the include statement, with the only difference being
                        // that if the code from a file has already been included, it will
                        // not be included again, and include_once returns true.
                        //
                        // As the name suggests, the file will be included just once.
                        //
                        // include_once may be used in cases where the same file might be
                        // included and evaluated more than once during a particular
                        // execution of a script, so in this case it may help avoid
                        // problems such as function redefinitions, variable value
                        // reassignments, etc.
                        //
                        // https://www.php.net/manual/en/function.include-once.php
                        //
                        //
                        // 5
                        //
                        // Thursday, October 23, 2025 @ 0425 hrs.
                        include_once($file_path);

                        error_log('[file ' . __FILE__ .
                            '] [lnum ' . __LINE__ .
                            '] Resource load success. include_once(' .
                            strval($file_path) .').');

                    break;
                    case 'include':
                    default:

                        //
                        // Include and evaluate
                        // the resource include.
                        //
                        // The include expression includes and evaluates the specified file.
                        //
                        // The documentation below also applies to require.
                        //
                        // Files are included based on the file path given or, if none is
                        // given, the include_path specified. If the file isn't found in the
                        // include_path, include will finally check in the calling script's
                        // own directory and the current working directory before failing.
                        //
                        // The include construct will emit an E_WARNING if it cannot find a
                        // file; this is different behavior from require, which will emit
                        // an E_ERROR.
                        //
                        // Note that both include and require raise additional E_WARNINGs,
                        // if the file cannot be accessed, before raising the final
                        // E_WARNING or E_ERROR, respectively.
                        //
                        // https://www.php.net/manual/en/function.include.php
                        //
                        //
                        // 5
                        //
                        // Thursday, October 23, 2025 @ 0425 hrs.
                        include($file_path);

                        error_log('[file ' . __FILE__ .
                            '] [lnum ' . __LINE__ .
                            '] Resource load success. include(' .
                            strval($file_path) .').');

                    break;

                }

            }

        break;

    }

    //
    // TODO :: Re-route this functionality
    //         through $_SESSION in order
    //         to get this global function
    //         definition file on board
    //         with the regime.
    //         5 :: Thursday, August 29, 2024 @ 0348 hrs.
    //
    // Track accessed
    // configuration files
    // through the application
    // of a computed file
    // versioning hash.
    //
    //
    // 5
    //$this->set_crnrstn('server_files_version_hash_ARRAY', $this->hash_file($file_path, $hash_algorithm, $hash_output_binary, true, $file_path), $file_path);

    //
    // The output for this
    // global function
    // resource should
    // include a performance
    // report with the
    // following information:
    //
    //   - Paths of all runtime
    //     executables that are
    //     not 'FIRE_ANYTIME_ANYWHERE' => 1,
    //     so that the application
    //     (developer) can do
    //     what else needs to
    //     be done at the
    //     place where it
    //     needs to go down.
    //
    //   - All include_once resources,
    //     so that the application
    //     (developer) can do
    //     what else needs to
    //     be done to honor the one
    //     and done.
    //
    //   - All require_once resources
    //     so that the application
    //     (developer) can do
    //     what else needs to
    //     be done to honor the one
    //     and done.
    //
    //
    // 5
    //
    // Friday, August 30, 2024 @ 0258 hrs.
    return true;

}