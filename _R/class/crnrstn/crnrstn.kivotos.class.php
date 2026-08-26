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
 * CLASS DEFINITION :: crnrstn_kivotos
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: Thursday, August 6, 2026 @ "00" 0200 hrs.
 *
 *                     "00"..."00"..."00"...Oh, 
 *                     Oh, Oh, Oh. You know what I mean.
 *
 *                     Yeah, you know what I mean: 
 *                     "Oh, Oh, Oh"... 
 *                     Yeah, you know what 
 *                     I mean..."Oh"...yeah. ;) 
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber 
 *                     RoCEv2 SOAP Services Layer 
 *                     (CLR-SSL) Resource Kivotós 
 *                     Advanced Object Storage Ark
 * DESCRIPTION      :: This is intelligent 
 *                     object storage for the 
 *                     CRNRSTN :: Lightsaber RoCEv2 
 *                     SOAP Services Layer (CLR-SSL). 
 *
 *                     The CLR-SSL Resource Kivotós, 
 *                     resource box, or advanced
 *                     object storage ark, stores 
 *                     and makes accessible data 
 *                     that has been generated 
 *                     by the CLR-SSL Resource 
 *                     Registry and any relevant 
 *                     or actionable meta details
 *                     such as the R Fire Bolt 
 *                     Creation ID TTL 
 *                     (or resource expire) and 
 *                     the official title of 
 *                     the resource being stored. 
 *
 *
 *                     5
 *
 *                     Thursday, August 6, 2026 @ 0213 hrs.
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
 * @link http://evifweb.jony5.com/ eVifweb® :: Corporate Sponsor.
 * @return object 
 * @access public
 *
 */
class crnrstn_kivotos extends crnrstn
{
    public $R                = array();
    private $R_data          = array();
    private $R_kivotos_index = array();
    private $R_kivotos_meta  = array();

    // Until we are done testing.
    private $init_via_test   = array();

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function __construct()
    {

        $this->R_data['R_debug_mode']        = $this->get_crnrstn('R_debug_mode');
        $this->R_data['R_cluster_id']        = $this->get_crnrstn('R_cluster_id');
        $this->R_data['R_node_id']           = $this->get_crnrstn('R_node_id');
        $this->R_data['int_flag']            = $this->get_crnrstn('int_flag');
        $this->R_data['R_framework_path']    = $this->get_crnrstn('R_framework_path');
        $this->R_data['operating_system']['os_path_dir_separator_char'] = $this->get_crnrstn('os_path_dir_separator_char');

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function process_R_resp($R_resp)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 5 :: Wednesday, July 29, 2026 @ 2300 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Copied process_R_resp from crnrstn 
         * to crnrstn_kivotos.
         * 5 :: Thursday, August 6, 2026 @ 0501 hrs.
         *
         */

        /* 
        # C # R # N # R # S # T # N # :: # L # I # G # H # T
        5 :: Friday, June 19, 2026 @ 0932 hrs.

        A more complete resource minting
        architecture is now coming from 
        the CLR-SSL Resource Registry 
        with all resource data ready 
        to anoint vars by reference:

        Sample CLR-SSL Resource 
        Minting Data Architecture: 

        R :: [2026-08-08 03:43:27.581344] 
             [mthd CRNRSTN\_crnrstn_native_resource_registry] 
             [lnum 7079] 
             [rtime 0.607403] [44019]: 
             7.1 KiB total bytes 
             loaded for CRNRSTN\crnrstn_kivotos v1.00.0000.
             
        [mthd CRNRSTN\crnrstn::process_R_resp] [lnum 5815] Data Type = array
        [mthd CRNRSTN\crnrstn::process_R_resp] [lnum 5820] Data Type =
        Array
        (
            [clr_ssl_resource] => Array
                (
                    [memory_pointer] => Array
                        (
                            [0] => 9543992671b89cd353a4239020880b0fe7052e2b22440ab3147810d8f96e3c57
                        )

                )

            [9543992671b89cd353a4239020880b0fe7052e2b22440ab3147810d8f96e3c57] => Array
                (
                    [resource_name] => crnrstn_kivotos
                    [iso_lang_code] => en
                    [background_color_hex] => #FFF
                    [title] => Array
                        (
                            [TEXT] => The CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer (CLR-SSL) Resource Kivotós Advanced Object Storage Ark
                        )

                    [software_company] => Array
                        (
                            [key] => eVifweb® development
                        )

                    [software_default] => 1.00.0000
                    [license] => Array
                        (
                            [key] => Array
                                (
                                    [1.00.0000] => MIT
                                )

                            [name] => Array
                                (
                                    [1.00.0000] => MIT License
                                )

                            [url] => Array
                                (
                                    [1.00.0000] => https://crnrstn.jony5.com/licensing/
                                )

                        )

                    [copyright] => Array
                        (
                            [1.00.0000] => Copyright © 2012-2026 eVifweb® development All Rights Reserved.
                        )

                    [microtime] => 1786175007.571324
                    [timestamp] => Array
                        (
                            [sec] => 1786175007
                            [usec] => 571356
                            [minuteswest] => 240
                            [dsttime] => 1
                        )

                    [runtime] => 0.597374
                    [evaluation_protocol] => Array
                        (
                            [1.00.0000] => require
                        )

                    [resource_type] => CLASS_DEFINITION
                    [loading_arch] => Array
                        (
                            [1.00.0000] => 9876
                        )

                    [namespace] => CRNRSTN
                    [file_path] => Array
                        (
                            [definition] => Array
                                (
                                    [1.00.0000] => /var/www/html/_crnrstn/class/crnrstn/crnrstn.kivotos.class.php
                                )

                            [new_obj_exe] => Array
                                (
                                    [1.00.0000] => /var/www/html/_crnrstn/_config/_config.resource_registry/resource/object_return/crnrstn_kivotos/crnrstn.crnrstn_kivotos.fire_bolt_exe.php
                                )

                        )

                    [file_name] => Array
                        (
                            [1.00.0000] => crnrstn.kivotos.class.php
                        )

                    [software_version] => Array
                        (
                            [0] => 1.00.0000
                        )

                    [is_active] => Array
                        (
                            [1.00.0000] => 1
                        )

                    [input_parameter_count] => Array
                        (
                            [1.00.0000] => 0
                        )

                    [input_parameter_defaults] => Array
                        (
                            [1.00.0000] => Array
                                (
                                )

                        )

                    [eval_ttl] => Array
                        (
                            [1.00.0000] => -1
                        )

                    [file_evaluate_enabled] => Array
                        (
                            [1.00.0000] => 1
                        )

                    [auto_eval_mode_enabled] => Array
                        (
                            [1.00.0000] => 1
                        )

                    [auto_obj_mode_enabled] => Array
                        (
                            [1.00.0000] => 1
                        )

                    [view_source_safe] => Array
                        (
                            [1.00.0000] => 0
                        )

                    [extends_class] => Array
                        (
                        )

                    [dependencies] => Array
                        (
                        )

                    [php_version] => Array
                        (
                            [removed] => Array
                                (
                                )

                            [deprecated] => Array
                                (
                                )

                            [supported] => Array
                                (
                                )

                        )

                    [data] => Array
                        (
                            [0] => CRNRSTN\crnrstn_kivotos Object
                                (
                                ...
                                )

                    [server_ip] => Array
                        (
                            [IPv4] => Array
                                (
                                    [0] => 172.16.225.128
                                )

                        )

                    [client_ip] => Array
                        (
                            [IPv4] => Array
                                (
                                    [0] => 172.16.225.1
                                )

                        )

                    [data_bytes] => Array
                        (
                            [0] => 7274
                        )

                    [R_fire_bolt_creation_id] => Array
                        (
                            [0] => b4b523b1f9397532bfa221c16dc0c183bf22f32c63878aa120930eca41d5507a
                        )

                    [R_fire_bolt_microtime] => Array
                        (
                            [0] => 1786175007.580725
                        )

                    [R_fire_bolt_timestamp] => Array
                        (
                            [0] => Array
                                (
                                    [sec] => 1786175007
                                    [usec] => 580823
                                    [minuteswest] => 240
                                    [dsttime] => 1
                                )

                        )

                    [R_fire_bolt_runtime] => Array
                        (
                            [0] => 0.606845
                        )

                    [R_cluster_id] => Array
                        (
                            [0] => 55102ec81e95ac198513f29127993be82c345b3af180b5fba505445fa6a06fb2
                        )

                    [R_node_id] => Array
                        (
                            [0] => e6b292f1e156da76cba1f19b16f207f4cc52189dcc77eddb05ca6132a5d18dad7912d4f6a68d29355e17b83b309fbe7822e86c90bd6aae58f789015fc5315dcd
                        )

                    [R_client_id] => Array
                        (
                            [0] => 81b56724b666da20cc93803c3d1e35bf2fbef588e756556f5faa01248025733be5ec740c3ee2f310ca943aa25129cc6cb152f705545ea6fe133b89a31a9b4356
                        )

                    [R_request_id] => Array
                        (
                            [0] => 75c8519f0c984dfe650aae12fe72b6a1c5165a90174553f831f5b1561a60e55a
                        )

                    [R_request_serial] => Array
                        (
                            [0] => Ja*6XXsccs5AS ix~oRoK-+- N=MuVEwty)T#efN)(!e32S.PCUg~FppaP#Dn@sc
                        )

                    [data_resource_name] => Array
                        (
                            [0] => CRNRSTN\crnrstn_kivotos
                        )

                )

        )

        $R_resp['clr_ssl_resource']['memory_pointer'][0]    => 9543992671b89cd353a4239020880b0fe7052e2b22440ab3147810d8f96e3c57
        $R_resp[$mem_ptr]['resource_name']                  => crnrstn_kivotos
        $R_resp[$mem_ptr]['iso_lang_code']                  => en
        $R_resp[$mem_ptr]['background_color_hex']           => #FFF
        $R_resp[$mem_ptr]['title']['TEXT']                  => The CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer (CLR-SSL) Resource Kivotós Advanced Object Storage Ark
        $R_resp[$mem_ptr]['software_company']['key']        => eVifweb® development
        $R_resp[$mem_ptr]['software_default']               => 1.00.0000
        $R_resp[$mem_ptr]['license']['key'][$R_resp[$mem_ptr]['software_version'][0]]    => MIT
        $R_resp[$mem_ptr]['license']['name'][$R_resp[$mem_ptr]['software_version'][0]]   => MIT License
        $R_resp[$mem_ptr]['license']['url'][$R_resp[$mem_ptr]['software_version'][0]]    => https://crnrstn.jony5.com/licensing/
        $R_resp[$mem_ptr]['copyright'][$R_resp[$mem_ptr]['software_version'][0]]         => Copyright © 2012-2026 eVifweb® development All Rights Reserved.
        $R_resp[$mem_ptr]['microtime']                      => 1786175007.571324
        $R_resp[$mem_ptr]['timestamp']['sec']               => 1786175007
        $R_resp[$mem_ptr]['timestamp']['usec']              => 571356
        $R_resp[$mem_ptr]['timestamp']['minuteswest']       => 240
        $R_resp[$mem_ptr]['timestamp']['dsttime']           => 1
        $R_resp[$mem_ptr]['runtime']                        => 0.597374
        $R_resp[$mem_ptr]['evaluation_protocol'][$R_resp[$mem_ptr]['software_version'][0]] => require
        $R_resp[$mem_ptr]['resource_type']                    => CLASS_DEFINITION
        $R_resp[$mem_ptr]['loading_arch'][$R_resp[$mem_ptr]['software_version'][0]]        => 9876
        $R_resp[$mem_ptr]['namespace']                      => CRNRSTN
        $R_resp[$mem_ptr]['file_path']['definition'][$R_resp[$mem_ptr]['software_version'][0]]  => /var/www/html/_crnrstn/class/crnrstn/crnrstn.kivotos.class.php
        $R_resp[$mem_ptr]['file_path']['new_obj_exe'][$R_resp[$mem_ptr]['software_version'][0]] => /var/www/html/_crnrstn/_config/_config.resource_registry/resource/object_return/crnrstn_kivotos/crnrstn.crnrstn_kivotos.fire_bolt_exe.php
        $R_resp[$mem_ptr]['file_name'][$R_resp[$mem_ptr]['software_version'][0]]                => crnrstn.kivotos.class.php
        $R_resp[$mem_ptr]['software_version'][0]                                                => 1.00.0000
        $R_resp[$mem_ptr]['is_active'][$R_resp[$mem_ptr]['software_version'][0]]                => 1
        $R_resp[$mem_ptr]['input_parameter_count'][$R_resp[$mem_ptr]['software_version'][0]]    => 0
        $R_resp[$mem_ptr]['input_parameter_defaults'][$R_resp[$mem_ptr]['software_version'][0]] => 
        $R_resp[$mem_ptr]['eval_ttl'][$R_resp[$mem_ptr]['software_version'][0]]                 => -1
        $R_resp[$mem_ptr]['file_evaluate_enabled'][$R_resp[$mem_ptr]['software_version'][0]]    => 1
        $R_resp[$mem_ptr]['auto_eval_mode_enabled'][$R_resp[$mem_ptr]['software_version'][0]]   => 1
        $R_resp[$mem_ptr]['auto_obj_mode_enabled'][$R_resp[$mem_ptr]['software_version'][0]]    => 1
        $R_resp[$mem_ptr]['view_source_safe'][$R_resp[$mem_ptr]['software_version'][0]]         => 0
        $R_resp[$mem_ptr]['extends_class']                   => Array
        $R_resp[$mem_ptr]['dependencies']                    => Array
        $R_resp[$mem_ptr]['php_version']['removed']          => Array
        $R_resp[$mem_ptr]['php_version']['deprecated']       => Array
        $R_resp[$mem_ptr]['php_version']['supported']        => Array
        $R_resp[$mem_ptr]['data'][0]                         => Object
        $R_resp[$mem_ptr]['server_ip']['IPv4'][0]            => 172.16.225.128
        $R_resp[$mem_ptr]['client_ip']['IPv4'][0]            => 172.16.225.1
        $R_resp[$mem_ptr]['data_bytes'][0]                   => 7274
        $R_resp[$mem_ptr]['R_fire_bolt_creation_id'][0]              => b4b523b1f9397532bfa221c16dc0c183bf22f32c63878aa120930eca41d5507a
        $R_resp[$mem_ptr]['R_fire_bolt_timestamp'][0]['sec']         => 1786175007
        $R_resp[$mem_ptr]['R_fire_bolt_timestamp'][0]['usec']        => 580823
        $R_resp[$mem_ptr]['R_fire_bolt_timestamp'][0]['minuteswest'] => 240
        $R_resp[$mem_ptr]['R_fire_bolt_timestamp'][0]['dsttime']     => 1
        $R_resp[$mem_ptr]['R_fire_bolt_runtime'][0] => 0.606845
        $R_resp[$mem_ptr]['R_cluster_id'][0]        => 55102ec81e95ac198513f29127993be82c345b3af180b5fba505445fa6a06fb2
        $R_resp[$mem_ptr]['R_node_id'][0]           => e6b292f1e156da76cba1f19b16f207f4cc52189dcc77eddb05ca6132a5d18dad7912d4f6a68d29355e17b83b309fbe7822e86c90bd6aae58f789015fc5315dcd
        $R_resp[$mem_ptr]['R_client_id'][0]         => 81b56724b666da20cc93803c3d1e35bf2fbef588e756556f5faa01248025733be5ec740c3ee2f310ca943aa25129cc6cb152f705545ea6fe133b89a31a9b4356
        $R_resp[$mem_ptr]['R_request_id'][0]        => 75c8519f0c984dfe650aae12fe72b6a1c5165a90174553f831f5b1561a60e55a
        $R_resp[$mem_ptr]['R_request_serial'][0]    => Ja*6XXsccs5AS ix~oRoK-+- N=MuVEwty)T#efN)(!e32S.PCUg~FppaP#Dn@sc
        $R_resp[$mem_ptr]['data_resource_name'][0]  => CRNRSTN\crnrstn_kivotos

         'crnrstn.constants_load.runtime_exe.php'            => 'RUNTIME_EXECUTABLE', 
         '_crnrstn_native_resource_registry_content_library' => 'FUNCTION_DEFINITION', 
         'crnrstn_kivotós'                                   => 'CLASS_DEFINITION',
         'crnrstn_ascii_art'                                 => 'CLASS_DEFINITION', 
         'crnrstn_file_system_integrations_manager'          => 'CLASS_DEFINITION', 
         'crnrstn_logging'                                   => 'CLASS_DEFINITION', 
         'crnrstn_session_manager'                           => 'CLASS_DEFINITION',
         'crnrstn_json'                                      => 'CLASS_DEFINITION',
         'crnrstn_xml'                                       => 'CLASS_DEFINITION', 
         'crnrstn_socket'                                    => 'CLASS_DEFINITION', 
         'crnrstn_curl'                                      => 'CLASS_DEFINITION', 
         'crnrstn_stream'                                    => 'CLASS_DEFINITION', 
         'crnrstn_multi_language_manager'                    => 'CLASS_DEFINITION',
         'crnrstn_client_assets'                             => 'CLASS_DEFINITION', 
         'crnrstn_content_source_controller'                 => 'CLASS_DEFINITION', 
         'crnrstn_performance_regulator'                     => 'CLASS_DEFINITION', 
         'crnrstn_method_manager'                            => 'CLASS_DEFINITION', 
         'crnrstn_link_manager'                              => 'CLASS_DEFINITION', 
         'crnrstn_decoupled_data_object'                     => 'CLASS_DEFINITION', 
         'crnrstn_configuration_manager'                     => 'CLASS_DEFINITION', 
         'crnrstn_response_return_serialization_map'         => 'CLASS_DEFINITION', 
         'crnrstn_logging_output_profile_manager'            => 'CLASS_DEFINITION', 
         'crnrstn_user'                                      => 'CLASS_DEFINITION', 
         'crnrstn_ui_tunnel_response_manager'                => 'CLASS_DEFINITION', 
         'crnrstn_environment'                               => 'CLASS_DEFINITION'


        5 :: Saturday, August 8, 2026 @ 0104 hrs.

         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 5 :: Saturday, April 25, 2026 @ 0802 hrs.

        error_log('[lnum ' . __LINE__ .
            '] [mthd ' . __METHOD__ .
            '] get_class[' . 
            get_class($R_resp[$mem_ptr]['data'][0]) . '].');

        [Sat Apr 25 08:13:23.818852 2026] [:error] [pid 53694] 
        [client 172.16.225.1:61531] [lnum 2422] 
        [mthd CRNRSTN\\crnrstn::object_boot] 
        get_class[CRNRSTN\\crnrstn_logging].

        [Sat Apr 25 08:13:23.819019 2026] [:error] [pid 53694] 
        [client 172.16.225.1:61531] [lnum 2422] 
        [mthd CRNRSTN\\crnrstn::object_boot] 
        get_class[CRNRSTN\\crnrstn_session_manager].

        [Sat Apr 25 08:13:23.819174 2026] [:error] [pid 53694] 
        [client 172.16.225.1:61531] [lnum 2422] 
        [mthd CRNRSTN\\crnrstn::object_boot] 
        get_class[CRNRSTN\\crnrstn_registry_user].

        case 'data_resource_name':
            error_log('[lnum ' . __LINE__ .
                '] [mthd ' . __METHOD__ .
                '] data_resource_name[' . 
                print_r($R_resp[$mem_ptr]['data'][0], true) . '].');

            [Sat Apr 25 08:13:23.818911 2026] [:error] [pid 53694] 
            [client 172.16.225.1:61531] [lnum 2430] 
            [mthd CRNRSTN\\crnrstn::object_boot] 
            data_resource_name[CRNRSTN\\crnrstn_logging].

            [Sat Apr 25 08:13:23.819071 2026] [:error] [pid 53694] 
            [client 172.16.225.1:61531] [lnum 2430] 
            [mthd CRNRSTN\\crnrstn::object_boot] 
            data_resource_name[CRNRSTN\\crnrstn_session_manager].

            [Sat Apr 25 08:13:23.819261 2026] [:error] [pid 53694] 
            [client 172.16.225.1:61531] [lnum 2430] 
            [mthd CRNRSTN\\crnrstn::object_boot] 
            data_resource_name[CRNRSTN\\crnrstn_registry_user].

       case 'data_software_version':

            error_log('[lnum ' . __LINE__ .
                '] [mthd ' . __METHOD__ .
                '] data_software_version[' . 
                print_r($R_resp[$mem_ptr]['data'][0], true) . '].');

            [Sat Apr 25 08:14:46.050816 2026] [:error] [pid 53706] 
            [client 172.16.225.1:62492] [lnum 2438] 
            [mthd CRNRSTN\\crnrstn::object_boot] 
            data_software_version[2.00.0001].

            [Sat Apr 25 08:14:46.051081 2026] [:error] [pid 53706] 
            [client 172.16.225.1:62492] [lnum 2438] 
            [mthd CRNRSTN\\crnrstn::object_boot] 
            data_software_version[2.00.0001].

            [Sat Apr 25 08:14:46.051425 2026] [:error] [pid 53706] 
            [client 172.16.225.1:62492] [lnum 2438] 
            [mthd CRNRSTN\\crnrstn::object_boot] 
            data_software_version[2.00.0001].

         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Initialize the CLR-SSL 
         * Resource Registry 
         * data storage location 
         * memory pointer. 
         *
         *
         * 5 :: Saturday, August 8, 2026 @ 0445 hrs.
         *
         */
        $mem_ptr = $R_resp['clr_ssl_resource']['memory_pointer'][0];

        if($this->gettype($R_resp[$mem_ptr]['data'][0], $this->R_data['int_flag']['R_integer']) == 
            $this->R_data['int_flag']['R_object'])
                // 5 :: Wednesday, July 29, 2026 @ 0751 hrs.
                $res_name = \get_class($R_resp[$mem_ptr]['data'][0]);
            else
                $res_name = $R_resp[$mem_ptr]['data_resource_name'][0];

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Please be advised: 
         * ----- 
         * This entire switch statement will 
         * be disassembled during product testing 
         * (deleted case by case as success goes), 
         * and this structure will probably be 
         * completely deleted when initialization 
         * testing is complete. 
         *
         *
         * 5 :: Saturday, August 8, 2026 @ 2022 hrs.
         *
         */
        switch($res_name){
            // CLR-SSL :: CORE
            case __NAMESPACE__ . '===\crnrstn_kivotos':
            case __NAMESPACE__ . '===\crnrstn_bitflip_manager':
            case __NAMESPACE__ . '===\crnrstn_ip_authorization_manager':
            case __NAMESPACE__ . '===\crnrstn_ascii_art':
            case __NAMESPACE__ . '===\crnrstn_file_system_integrations_manager':
            case __NAMESPACE__ . '===\crnrstn_logging':
            case __NAMESPACE__ . '===\crnrstn_session_manager':
            case __NAMESPACE__ . '===\crnrstn_json':
            case __NAMESPACE__ . '===\crnrstn_xml':
            case __NAMESPACE__ . '===\crnrstn_socket':
            case __NAMESPACE__ . '===\crnrstn_curl':
            case __NAMESPACE__ . '===\crnrstn_stream':
            case __NAMESPACE__ . '===\crnrstn_multi_language_manager':

            // CLR-SSL :: SOAP
            case __NAMESPACE__ . '===\crnrstn_soap_server_manager':
            case __NAMESPACE__ . '===\crnrstn_soap_client_manager':
            case __NAMESPACE__ . '===\crnrstn_soap_request_manager':
            case __NAMESPACE__ . '===\crnrstn_soap_data_tunnel_packet':
            case __NAMESPACE__ . '===\crnrstn_soap_authentication_manager':
            case __NAMESPACE__ . '===\crnrstn_soap_access_manager':
            case __NAMESPACE__ . '===\crnrstn_soap_authorization_manager':
            case __NAMESPACE__ . '===\crnrstn_soap_content_memory_cache':

            // Database
            case __NAMESPACE__ . '===\crnrstn_mysqli_conn_manager':
            case __NAMESPACE__ . '===\crnrstn_mysqli_conn':
            case __NAMESPACE__ . '===\crnrstn_sql_profile_manager':
            case __NAMESPACE__ . '===\crnrstn_database_connection_handle':
            case __NAMESPACE__ . '===\crnrstn_sql_manager':
            case __NAMESPACE__ . '===\crnrstn_sql_field_output_manager':
            case __NAMESPACE__ . '===\crnrstn_database_request':
            case __NAMESPACE__ . '===\crnrstn_database_wiring':
            case __NAMESPACE__ . '===\crnrstn_database_query':
            case __NAMESPACE__ . '===\crnrstn_database_crnrstn':

            // NuSOAP
            case __NAMESPACE__ . '===\nusoap_server_mime':
            case __NAMESPACE__ . '===\nusoap_client_mime':
            case __NAMESPACE__ . '===\nusoap_base':
            case __NAMESPACE__ . '===\nusoap_fault':
            case __NAMESPACE__ . '===\nusoap_parser':
            case __NAMESPACE__ . '===\nusoapservermime':
            case __NAMESPACE__ . '===\nusoap_wsdlcache':
            case __NAMESPACE__ . '===\nusoap_xmlschema':
            case __NAMESPACE__ . '===\soapclientmime':
            case __NAMESPACE__ . '===\soapclient':
            case __NAMESPACE__ . '===\soap_fault':
            case __NAMESPACE__ . '===\soap_parser':
            case __NAMESPACE__ . '\soap_server':
            case __NAMESPACE__ . '===\soap_transport_http':
            case __NAMESPACE__ . '===\soapval':
            case __NAMESPACE__ . '===\wsdlcache':
            case __NAMESPACE__ . '===\wsdl':
            case __NAMESPACE__ . '===XMLSchema':
            case __NAMESPACE__ . '===\nusoap_server':
            case __NAMESPACE__ . '===\nusoap_client':

            // PHPMailer
            case __NAMESPACE__ . '===\crnrstn_PHPMailer':

            // Mobile_Detect
            case __NAMESPACE__ . '===\crnrstn_Mobile_Detect':

            // CLR-SSL :: CORE
            case __NAMESPACE__ . '===\crnrstn_client_assets':
            case __NAMESPACE__ . '===\crnrstn_ui_content_assembler':
            case __NAMESPACE__ . '===\crnrstn_content_source_controller':
            case __NAMESPACE__ . '===\crnrstn_performance_regulator':
            case __NAMESPACE__ . '===\crnrstn_method_manager':
            case __NAMESPACE__ . '===\crnrstn_link_manager':
            case __NAMESPACE__ . '===\crnrstn_decoupled_data_object':
            case __NAMESPACE__ . '===\crnrstn_configuration_manager':
            case __NAMESPACE__ . '===\crnrstn_response_return_serialization_map':
            case __NAMESPACE__ . '===\crnrstn_ux_manager':
            case __NAMESPACE__ . '===\crnrstn_redirect_controller':
            case __NAMESPACE__ . '===\crnrstn_result_set_pagination_manager':
            case __NAMESPACE__ . '===\crnrstn_user':
            case __NAMESPACE__ . '===\crnrstn_ui_tunnel_response_manager':
            case __NAMESPACE__ . '===\crnrstn_environment':
            case __NAMESPACE__ . '===\crnrstn_registry_user':
            case __NAMESPACE__ . '===\crnrstn_finite_expression':
            case __NAMESPACE__ . '===\crnrstn':
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T 
                 * ^ Delete this entire case when 
                 *   integration checks for this
                 *   resource are complete.
                 *
                 *   5 :: Saturday, August 8, 2026 @ 1207 hrs.
                 *
                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 */
                // 5 :: Wednesday, June 17, 2026 @ 0704 hrs.

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Store an instantiation of 
                 * the CLR-SSL framework 
                 * class object. 
                 *
                 *
                 * 5
                 *
                 * Lights joint off one of my last two (2) 
                 * The Independent® Pub (ATL) matches. 
                 * One match remains in my Indy® 
                 * paper matchbook. 
                 *
                 * Last Modified: Wednesday, June 17, 2026 @ 0715 hrs.
                 *
                 */

                /*
                error_log('[rtime ' . 
                    $this->wall_time() . 
                    '] [mthd ' . 
                    __METHOD__ .
                    '] [lnum ' . __LINE__ .
                    '] get_class[' . 
                    get_class($R_resp[$mem_ptr]['data'][0]) . '].');

                [Thu Jun 18 03:30:01.990628 2026] [:error] [pid 57706] 
                [client 172.16.225.1:50691] 
                [rtime 0.148518] 
                [mthd CRNRSTN\\crnrstn::object_boot] 
                [lnum 3437] 
                get_class[CRNRSTN\\crnrstn].

                */
                /*
                error_log('[rtime ' . 
                    $this->wall_time() . 
                    '] [mthd ' . 
                    __METHOD__ .
                    '] [lnum ' . __LINE__ .
                    '] get_class[' . 
                    get_class($R_resp[$mem_ptr]['data'][0]) . '].');

                [Thu Jun 18 03:30:02.018116 2026] [:error] [pid 57706] 
                [client 172.16.225.1:50691] 
                [rtime 0.175995] 
                [mthd CRNRSTN\\crnrstn::object_boot] 
                [lnum 3911] 
                get_class[CRNRSTN\\crnrstn].

                */

                $this->R[$R_resp[$mem_ptr]['public_key']] = $R_resp[$mem_ptr]['data'][0];
                $this->initialized_via_test[$res_name]                    = 1;
                $this->R_kivotos_meta[$res_name]                          = $R_resp;
                $this->R_kivotos_index[$res_name]['storage_arch']         = $R_resp[$mem_ptr]['storage_arch'];
                $this->R_kivotos_index[\get_class($this->R[$R_resp[$mem_ptr]['public_key']])]['public_key'] = $R_resp[$mem_ptr]['public_key'];

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * We don't need the object initialization
                 * data stored again...with the meta.
                 *
                 * Delete the object data from
                 * the R_kivotos_meta array.
                 *
                 */
                \array_splice($this->R_kivotos_meta[$res_name][$mem_ptr]['data'], 0);

                $clr_ssl_msg = '@TODO :: Remove this report output after ' . 
                               'checking that the ' . 
                               $this->return_bytes(
                                      $R_resp[$mem_ptr]['data_bytes'][0], 
                                      2, 
                                      NULL, 
                                      true, 
                                      false, 
                                      false) . 
                               ' (' . 
                               \gettype($R_resp[$mem_ptr]['data'][0]) . ') ' . 
                               \get_class($R_resp[$mem_ptr]['data'][0]) . 
                               ' data we are receiving from the ' . 
                               'CLR-SSL Resource Registry is ' . 
                               $R_resp[$mem_ptr]['title']['TEXT'] . 
                               ', and all is well.';
                // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                             'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token = array(
                         'token'                   => $msg_token, 
                         'token_generation_date'   => $token_generation_date, 
                         'request_type'            => __METHOD__, 
                         'code'                    => 200, 
                         'clr_ssl_msg'             => $clr_ssl_msg);
                $this->error_log(
                       $clr_ssl_msg, 
                       \LOG_NOTICE, 
                       \E_NOTICE, 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       $token);

                $this->clr_ssl_registry_resource_report(
                       $R_resp,
                       $clr_ssl_msg,
                       false,
                       __LINE__,
                       __METHOD__);

            break;
            default:

                switch(\gettype($R_resp[$mem_ptr]['data'][0])){
                    case 'object':

                        $clr_ssl_msg = 'Unknown resource ' . 
                                       'received. PHP get_class output: (' . 
                                       \gettype($R_resp[$mem_ptr]['data'][0]) . ') ' . 
                                       \get_class($R_resp[$mem_ptr]['data'][0]) . '.';

                    break;
                    default:

                        $clr_ssl_msg = 'Unknown (' . 
                                       \gettype($R_resp[$mem_ptr]['data'][0]) . 
                                       ') resource received.';

                    break;

                }

                // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                             'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token = array(
                         'token'                   => $msg_token, 
                         'token_generation_date'   => $token_generation_date, 
                         'request_type'            => __METHOD__, 
                         'code'                    => 200, 
                         'clr_ssl_msg'             => $clr_ssl_msg);
                $this->error_log(
                       $clr_ssl_msg, 
                       \LOG_NOTICE, 
                       \E_NOTICE, 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       $token);

            break;

        }

        if(!isset($this->init_via_test[$res_name])){

            switch($R_resp[$mem_ptr]['storage_arch']){
                case 'secure_resource':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * TODO :: Looking to authentication and 
                     *         communications support in the 
                     *         near future, engineer a 
                     *         more secure object storage 
                     *         situation that is not a 
                     *         public array. 
                     *         5 :: Friday, August 7, 2026 @ 0304 hrs.
                     *
                     */
                    $clr_ssl_msg = '@TODO :: Remove this report output after ' . 
                                   'checking that the ' . 
                                   $this->return_bytes(
                                          $R_resp[$mem_ptr]['data_bytes'][0], 
                                          2, 
                                          NULL,
                                          true, 
                                          false, 
                                          false) . 
                                   ' (' . 
                                   \gettype($R_resp[$mem_ptr]['data'][0]) . ') ' . 
                                   \get_class($R_resp[$mem_ptr]['data'][0]) . 
                                   ' data we are receiving from the ' . 
                                   'CLR-SSL Resource Registry is ' . 
                                   $R_resp[$mem_ptr]['title']['TEXT'] . 
                                   ', that this resource will be stored ' . 
                                   'securely, and that all is well.';
                    $html_out = $this->clr_ssl_registry_resource_report(
                                       $R_resp,
                                       $clr_ssl_msg, 
                                       false,
                                       __LINE__, 
                                       __METHOD__);

                break;
                case 'general_resource':
                default:

                    switch($this->gettype($R_resp[$mem_ptr]['data'][0], $this->R_data['int_flag']['R_integer'])){
                        case $this->R_data['int_flag']['R_object']:

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Store The CRNRSTN :: Lightsaber
                             * RoCEv2 SOAP Services Layer
                             * (CLR-SSL) Resource Registry
                             * data output at the location of
                             * public_key.
                             *
                             *
                             * 5 :: Friday, August 8, 2026 @ 0812 hrs.
                             *
                             */
                            $this->R[$R_resp[$mem_ptr]['public_key']]         = $R_resp[$mem_ptr]['data'][0];
                            $this->R_kivotos_meta[$res_name]                  = $R_resp;
                            $this->R_kivotos_index[$res_name]['storage_arch'] = $R_resp[$mem_ptr]['storage_arch'];
                            $this->R_kivotos_index[\get_class($this->R[$R_resp[$mem_ptr]['public_key']])]['public_key'] = $R_resp[$mem_ptr]['public_key'];

                        break;
                        case $this->R_data['int_flag']['R_resource']:
                        default:

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Store The CRNRSTN :: Lightsaber
                             * RoCEv2 SOAP Services Layer
                             * (CLR-SSL) Resource Registry
                             * data output at the location of
                             * public_key.
                             *
                             *
                             * 5 :: Friday, August 8, 2026 @ 0812 hrs.
                             *
                             */
                            $this->R[$R_resp[$mem_ptr]['public_key']]         = $R_resp[$mem_ptr]['data'][0];
                            $this->R_kivotos_meta[$res_name]                  = $R_resp;
                            $this->R_kivotos_index[$res_name]['storage_arch'] = $R_resp[$mem_ptr]['storage_arch'];
                            $this->R_kivotos_index[$res_name]['public_key']   = $R_resp[$mem_ptr]['public_key'];

                        break;

                    }

                    // 5 :: Sunday, August 23, 2026 @ 2022 hrs.
                    if(isset($this->initialization_protocol[$res_name]) ||
                        isset($R_resp[$mem_ptr]['initialization_protocol']))
                        $this->fire_init_protocol($res_name);

                    /*
                    echo '<br><pre><code>[mthd ' .
                        __METHOD__ . '] [lnum ' .
                        __LINE__ . '] $res_name: ' .
                        $res_name .
                        '.</code></pre>';

                    CRNRSTN\crnrstn_ascii_art
                    CRNRSTN\crnrstn_file_system_integrations_manager
                    CRNRSTN\crnrstn_logging
                    CRNRSTN\crnrstn_session_manager
                    CRNRSTN\crnrstn_json
                    CRNRSTN\crnrstn_xml
                    CRNRSTN\crnrstn_socket
                    CRNRSTN\crnrstn_curl
                    CRNRSTN\crnrstn_stream
                    CRNRSTN\crnrstn_multi_language_manager
                    CRNRSTN\crnrstn_mysqli_conn_manager
                    CRNRSTN\crnrstn_mysqli_conn
                    CRNRSTN\crnrstn_database_connection_handle
                    CRNRSTN\crnrstn_sql_manager
                    CRNRSTN\crnrstn_sql_profile_manager
                    CRNRSTN\crnrstn_sql_field_output_manager
                    CRNRSTN\crnrstn_database_request
                    CRNRSTN\crnrstn_database_wiring
                    CRNRSTN\crnrstn_database_query


                    19 resources loading.
                    5 :: Sunday, August 16, 2026 @ 1018 hrs.

                    CRNRSTN\crnrstn_ascii_art
                    CRNRSTN\crnrstn_file_system_integrations_manager
                    CRNRSTN\crnrstn_logging
                    CRNRSTN\crnrstn_session_manager
                    CRNRSTN\crnrstn_json
                    CRNRSTN\crnrstn_xml
                    CRNRSTN\crnrstn_socket
                    CRNRSTN\crnrstn_curl
                    CRNRSTN\crnrstn_stream
                    CRNRSTN\crnrstn_multi_language_manager
                    CRNRSTN\crnrstn_mysqli_conn_manager
                    CRNRSTN\crnrstn_mysqli_conn
                    CRNRSTN\crnrstn_database_connection_handle
                    CRNRSTN\crnrstn_sql_manager
                    CRNRSTN\crnrstn_sql_profile_manager
                    CRNRSTN\crnrstn_sql_field_output_manager
                    CRNRSTN\crnrstn_database_request
                    CRNRSTN\crnrstn_database_wiring
                    CRNRSTN\crnrstn_database_query
                    CRNRSTN\crnrstn_database_crnrstn
                    CRNRSTN\nusoap_wsdlcache
                    CRNRSTN\wsdlcache
                    CRNRSTN\nusoap_base
                    CRNRSTN\nusoap_parser
                    CRNRSTN\soapval


                    25 resources loading.
                    5 :: Sunday, August 16, 2026 @

                    */

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * We don't need the object initialization
                     * data stored again...with the meta.
                     *
                     * Delete the object data from
                     * the R_kivotos_meta array.
                     *
                     */
                    \array_splice($this->R_kivotos_meta[$res_name][$this->R_kivotos_meta[$res_name]['clr_ssl_resource']['memory_pointer'][0]]['data'], 0);

                    $clr_ssl_msg = 'The CLR-SSL Resource Kivotos Advanced ' . 
                                   'Object Storage Ark has stored ' . 
                                   $this->return_bytes(
                                          $R_resp[$mem_ptr]['data_bytes'][0], 
                                          2, 
                                          NULL,
                                          true, 
                                          false, 
                                          false) . 
                                   ' of data for ' . 
                                   $R_resp[$mem_ptr]['resource_name'] .
                                   ' at the index of (' . 
                                   $this->gettype($R_resp[$mem_ptr]['public_key']) .
                                   ') ' . 
                                   $R_resp[$mem_ptr]['public_key'] .
                                   '.';

                    /*
                    [Sat Aug 08 21:11:01.034075 2026] [:error] [pid 62683] 
                    [client 172.16.225.1:64318] 
                    [mthd CRNRSTN\\crnrstn_kivotos::process_R_resp] 
                    [lnum 4213] 
                    [rtime 0.104022] 

                    The CLR-SSL Resource Kivotós Advanced
                    Object Storage Ark has stored 2.67 KiB 
                    of data for crnrstn_ascii_art at the 
                    index of (string) ascii_art.


                    5 :: Saturday, August 8, 2026 @ 2111 hrs.

                    Lights joint with fire from kitchen 
                    stove gas range. 

                    */
                    // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                    $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token = array(
                             'token'                   => $msg_token, 
                             'token_generation_date'   => $token_generation_date, 
                             'request_type'            => __METHOD__, 
                             'code'                    => 200, 
                             'clr_ssl_msg'             => $clr_ssl_msg);
                    $this->error_log(
                           $clr_ssl_msg, 
                           \LOG_NOTICE, 
                           \E_NOTICE, 
                           __LINE__, 
                           __METHOD__, 
                           __FILE__, 
                           $token);

                break;

            }

        }

        return NULL;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function kivotos_storage($public_key)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 5 :: Friday, August 7, 2026 @ 1256 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed the method 
         *       kivotos_resource to 
         *       kivotos_storage. 
         *       5 :: Saturday, August 8, 2026 @ 2227 hrs.
         *
         */

        if(isset($this->R[$public_key]))
            return $this->R[$public_key];

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * We will articulate the CLR-SSL
         * Resource Registry, if we do not
         * have the requested resource
         * for immediate return.
         *
         *
         * 5 :: Saturday, August 22, 2026 @ 1323 hrs.
         *
         */
        $R_resp = $spice_salt_mem_ptr = NULL;
        $this->compound_ointment(
               $spice_salt_mem_ptr,
               $public_key);
        $this->anoint(
               $public_key,
               $R_resp);

        return $R_resp;

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function isset_kivotos($resource)
    {
        // 5 :: Thursday, August 13, 2026 @ 2226 hrs.

        switch($this->gettype($resource, $this->R_data['int_flag']['R_integer'])){
            case $this->R_data['int_flag']['R_object']:

                // Is this resource loaded into the CLR-SSL Kivotos?
                if(!isset($this->R[$this->R_kivotos_index[\get_class($resource)]['public_key']]))
                    return false;
                else
                    return true;

            break;
            case $this->R_data['int_flag']['R_string']:

                // Is this resource loaded into the CLR-SSL Kivotos?
                if(!isset($this->R[$this->R_kivotos_index[$resource]['public_key']]))
                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Support matching against resource
                     * name input that was provided with
                     * no namespace data.
                     *
                     * It is highly unlikely, but this
                     * could throw a false positive
                     * if, e.g., CRNRSTN\CRNRSTN\a_class_name
                     * does exist, are we happen to be
                     * searching for CRNRSTN\a_class_name.
                     *
                     * If we cannot find, CRNRSTN\a_class_name,
                     * we will also then be checking for
                     * CRNRSTN\CRNRSTN\a_class_name....which
                     * we would be finding in this example.
                     *
                     *
                     * 5 :: Friday, August 14, 2026 @ 0606 hrs.
                     *
                     */
                    if(isset($this->R[$this->R_kivotos_index[__NAMESPACE__ . '\\' . $resource]['public_key']]))
                        return true;
                else
                    return true;

                return true;

            break;
            default:

                $clr_ssl_msg = 'Unknown data type received: ' .
                               $this->gettype(
                                      $resource,
                                      $this->R_data['int_flag']['R_string']) . ' ' .
                               '[' . \strval($this->gettype(
                                                    $resource,
                                                    $this->R_data['int_flag']['R_integer'])) .
                               '].';
                // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' .
                    'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token = array(
                         'token' => $msg_token,
                         'token_generation_date' => $token_generation_date,
                         'request_type' => __METHOD__,
                         'code' => 200,
                         'clr_ssl_msg' => $clr_ssl_msg);
                $this->error_log(
                       $clr_ssl_msg,
                       \LOG_WARNING,
                       \E_WARNING,
                       __LINE__,
                       __METHOD__,
                       __FILE__,
                       $token);

            break;

        }

        return false;

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function get_kivotos(
        $name,
        $R_index_000 = NULL,
        $R_index_001 = NULL,
        $R_index_002 = NULL,
        $R_index_003 = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Copied the method, get_crnrstn() from
         * crnrstn to crnrstn_kivotos. Renamed
         * 5 :: Thursday, August 13, 2026 @ 0220 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed the method get_crnrstn() to
         *       get_kivotos() to avoid conflict
         *       with a crnrstn method of the
         *       same definition.
         *       5 :: Thursday, August 13, 2026 @ 1027 hrs.
         *
         */

        switch($name){
            case 'R_kivotos_meta':
                // 5 :: Friday, August 14, 2026 @ 0523 hrs.

                return $this->R_kivotos_meta[$R_index_000];

            case 'R_kivotos_index':
                // 5 :: Thursday, August 13, 2026 @ 0244 hrs.

                return $this->R_kivotos_index;

            //case 'R_resp':
            default:

                $clr_ssl_msg = 'Unknown switch case received [' .
                               \strval($name) .
                               '].';
                // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' .
                             'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token = array(
                         'token' => $msg_token,
                         'token_generation_date' => $token_generation_date,
                         'request_type' => __METHOD__,
                         'code' => 200,
                         'clr_ssl_msg' => $clr_ssl_msg);
                $this->error_log(
                       $clr_ssl_msg,
                       \LOG_WARNING,
                       \E_WARNING,
                       __LINE__,
                       __METHOD__,
                       __FILE__,
                       $token);

            break;

        }

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    private function fire_init_protocol($resource_name)
    {
        // 5 :: Sunday, August 23, 2026 @ 2025 hrs.

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Initialize the CLR-SSL
         * Resource Registry
         * data storage location
         * memory pointer.
         *
         *
         * 5 :: Sunday, August 23, 2026 @ 2037 hrs.
         *
         */
        $mem_ptr = $this->R_kivotos_meta[$resource_name]['clr_ssl_resource']['memory_pointer'][0];

        switch($resource_name){
            case $this->R_data['R_framework_path'] . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'class' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'thirdparty' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'nusoap' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                '1.123' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'class.nusoap_server.php': // <= $name. Where, _foo_factory(x, x, x, $name, x_000, x_001)
            case '1.123' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'class.nusoap_server.php':
            case $this->R_data['R_framework_path'] . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'class' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'thirdparty' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'nusoap' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                '1.124' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'class.nusoap_server.php':
            case '1.124' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'class.nusoap_server.php':
            case __NAMESPACE__ .
                '\nusoap_server':
            case 'nusoap_server':

                $soa_namespace = $this->get_crnrstn(
                                        'networking',
                                        'nusoap',
                                        'soa_namespace');
                $this->R[$this->R_kivotos_meta[$resource_name][$mem_ptr]['public_key']]->debug_flag = $this->get_crnrstn(
                                                                                                             'networking',
                                                                                                             'nusoap',
                                                                                                             'debug_flag');
                $this->R['nusoap_server']->wsdl->schemaTargetNamespace = $soa_namespace;
                $this->R['nusoap_server']->configureWSDL(
                                          'CLR_SSL_SOAP_SVC',
                                          $soa_namespace);

                $this->R_data_write(
                       __METHOD__,
                       $this->R_kivotos_meta[$resource_name][$mem_ptr]['public_key'],
                       $this->R['nusoap_server']);

            break;
            case $this->R_data['R_framework_path'] . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'class' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'thirdparty' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'nusoap' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                '1.123' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'class.nusoap_client.php': // <= $name. Where, _foo_factory(x, x, x, $name, x_000, x_001)
            case '1.123' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'class.nusoap_client.php':
            case $this->R_data['R_framework_path'] . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'class' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'thirdparty' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'nusoap' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                '1.124' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'class.nusoap_client.php':
            case '1.124' . $this->R_data['operating_system']['os_path_dir_separator_char'] .
                'class.nusoap_client.php':
            case __NAMESPACE__ .
                '\nusoap_client':
            case 'nusoap_client':

                if(!extension_loaded('soap')){
                    // 5 :: Tuesday, June 2, 2026 @ 0755 hrs.

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * NuSOAP - Web Services Toolkit for PHP 
                     * -----
                     * For backwards compatibility, 
                     * define soapclient and 
                     * soapclientmime (unless 
                     * the PHP SOAP extension 
                     * is loaded). 
                     *
                     */
                    $this->anoint_eval('soapclientmime');
                    $this->anoint_eval('soapclient');
                    $this->anoint_eval('soap_parser');

                }

            break;

        }

        return NULL;

    }

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