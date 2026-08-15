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
 * CLASS DEFINITION :: crnrstn_performance_regulator
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: March 22, 2021 @ 0226 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            ::
 * DESCRIPTION      :: From a low level, the CRNRSTN ::
 *                     Lightsaber SOAP Services Layer
 *                     Performance Regulator will
 *                     maintain oversight of CPU load,
 *                     memory use, and server disk
 *                     disk utilization maximums.
 *
 *                     All system file writes can be
 *                     stopped at a specified threshold
 *                     with exceptions thrown.
 *
 *                     By default, disk full warnings
 *                     will be sent earlier.
 *
 *                     See, max_disk_storage_utilization
 *                     and max_disk_storage_utilization_warning
 *                     in /_lightbox_helper/_config/_config.defaults/crnrstn.settings.runtime_exe.php
 *
 *                     From a high level, all UGC
 *                     configuration input passes
 *                     through input validation managed
 *                     by the CRNRSTN :: Lightsaber
 *                     SOAP Services Layer
 *                     Performance Regulator.
 *
 *                     This includes validating ini_set()
 *                     UGC input against the PHP.INI
 *                     attributes defined input
 *                     requirements and gracefully
 *                     degrading to system defaults on
 *                     bad server config data input.
 *
 *                     In such a situation, an error
 *                     notice of the manual patch
 *                     override on the bad server INI value
 *                     will be thrown with a system data
 *                     report on the bad input data
 *                     being included.
 *
 *                     Hard exceptions will be thrown
 *                     when there is no patch to fallback
 *                     on to override bad data given to
 *                     $oCRNRSTN->ini_set().
 *
 *                     Similar patch inserting
 *                     architectures that will override
 *                     bad UGC data are in place behind
 *                     the CRNRSTN :: Lightsaber SOAP
 *                     Services Layer's use of OpenSSL
 *                     ciphers, HMAC algorithms,
 *                     OpenSSL digests, chmod permission
 *                     octet data (e.g. 0777), bad salt
 *                     length integers, and more.
 *
 *
 *                     5
 *
 *                     Tuesday, July, 22, 2024 @ 0125 hrs.
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
class crnrstn_performance_regulator extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_performance_regulator 
     *       class object by applying an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Saturday, March 14, 2026 @ 2044 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Removed the following variables 
     *       from crnrstn_performance_regulator
     *       as they are in crnrstn, which 
     *       we now extend through 
     *       that class:
     *
     *       public $process_id;
     *       public $operating_system;
     *       public $starttime;
     *
     *       5 :: Monday, March 16, 2026 @ 0226 hrs.
     *
     */

    public $system_integer_meta_lookup_ARRAY = array();
    public $system_integer_meta_cache_ARRAY = array();
    private static $config_relevant_ini_values_ARRAY = array();

    protected $php_ini_val = array();
    private static $process_id_perf_stat_ARRAY = array();
    private static $spool_resource_override = true;
    private static $ddo_config_ugc_input_audit = false;
    private static $spool_access_ARRAY = array();
    private static $resource_spool_ARRAY = array();

    private static $disk_write_authorization = false;
    protected $max_disk_storage_utilization;
    protected $max_disk_storage_utilization_warning;
    protected $byte_capacity;
    protected $hard_disk_volume_size_bytes;
    protected $disk_capacity_bytes_ARRAY = array();
    protected $disk_size_bytes_ARRAY = array();

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function __construct()
    {

        $this->snapshot_ini_values();

        self::$config_relevant_ini_values_ARRAY = array('default_socket_timeout', 
                                                        'file_uploads', 
                                                        'max_execution_time', 
                                                        'max_input_time', 
                                                        'memory_limit', 
                                                        'post_max_size', 
                                                        'precision', 
                                                        'realpath_cache_size', 
                                                        'realpath_cache_ttl', 
                                                        'upload_max_filesize', 
                                                        'max_file_uploads', 
                                                        'variables_order');

        /**
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
        $this->monitor_pid_performance(true);

        $tmp_mem_arr = $this->getServerMemoryUsage(false);
        $server_load = $this->getServerLoad();
        $peak_mem_usage = memory_get_peak_usage(true);

        error_log(__LINE__ . ' '. 
            __METHOD__ . ' memory_limit=' . 
            $this->ini_get('memory_limit'));


        $tmp_mem_arr = $this->getServerMemoryUsage(false);
        $peak_mem_usage = memory_get_peak_usage(true);

        error_log(__LINE__ . ' ' . 
            __METHOD__ . ' getServerMemoryUsage :: $peak_mem_usage=' . 
            $peak_mem_usage . ' |total=' . 
            $tmp_mem_arr['total'] . ' | free=' . 
            $tmp_mem_arr['free']);

        error_log(__LINE__ . ' ' . 
            __METHOD__ . ' getServerMemoryUsage :: $server_load=' . 
            $server_load . '% |mem=' . 
            $this->getServerMemoryUsage() . '%');

        //$this->process_id = getmygid();
        //$this->process_id = getmyinode();
        //$this->process_id = getmyuid();

        https://www.php.net/manual/en/function.getmypid.php#59889

        $this->process_id_perf_stat_ARRAY = $this->getpidinfo($this->process_id);

         * SOURCE :: https://www.php.net/manual/en/function.getmypid.php#118865
        On windows, you can get a 
        list of PID's using this 
        single line statement:
        <?php 

        $pids = array_column(
                    array_map(
                        'str_getcsv', 
                        explode("\n",trim(`tasklist /FO csv /NH`))), 
                    1); 
        ? >

        //
        // SOURCE :: https://www.php.net/manual/en/function.getmypid.php
        // AUTHOR :: https://www.php.net/manual/en/function.getmypid.php#93753
        // Get all active PIDs.
        //$pids = explode( "\n", trim( `ps -e | awk '{print $1}'` )

        CLR-SSL Performance Monitor Attributes

        starttime and snapshot at the 
        initialization of profile.

        walltime
        memory_used     // in bytes
        memory_total    // in bytes
        memory_free     // in bytes
        memory_limit
        cpu_load

        default_socket_timeout int
           Default timeout (in seconds) for socket 
           based streams. Specifying a negative 
           value means an infinite timeout. 

        file_uploads bool
           Whether or not to allow HTTP file 
           uploads. See also the 
           upload_max_filesize, 
           upload_tmp_dir, and post_max_size 
           directives. 

        max_execution_time int
           This sets the maximum time in seconds 
           a script is allowed to run before it 
           is terminated by the parser. This 
           helps prevent poorly written scripts 
           from tying up the server. The default 
           setting is 30. When running PHP from 
           the command line the default setting 
           is 0. 

           On non Windows systems, the maximum 
           execution time is not affected by 
           system calls, stream operations etc. 
           Please see the set_time_limit() 
           function for more details. 

           Your web server can have other 
           timeout configurations that may 
           also interrupt PHP execution. 

           Apache has a Timeout directive and 
           IIS has a CGI timeout function. 
           Both default to 300 seconds. 

           See your web server documentation 
           for specific details. 

        max_input_time int
           This sets the maximum time in seconds 
           a script is allowed to parse input 
           data, like POST and GET. Timing begins 
           at the moment PHP is invoked at the 
           server and ends when execution begins. 
           The default setting is -1, which means 
           that max_execution_time is used instead. 
           Set to 0 to allow unlimited time. 

        memory_limit int
           This sets the maximum amount of memory 
           in bytes that a script is allowed to 
           allocate. This helps prevent poorly 
           written scripts for eating up all 
           available memory on a server. Note 
           that to have no memory limit, set 
           this directive to -1. 

           When an int is used, the value is 
           measured in bytes. Shorthand notation, 
           as described in this FAQ, may also 
           be used. 

        post_max_size int
           Sets max size of post data allowed. 
           This setting also affects file upload. 
           To upload large files, this value must 
           be larger than upload_max_filesize. 
           Generally speaking, memory_limit should 
           be larger than post_max_size. When an 
           int is used, the value is measured in 
           bytes. Shorthand notation, as described 
           in this FAQ, may also be used. If the 
           size of post data is greater than 
           post_max_size, the $_POST and $_FILES 
           superglobals are empty. This can be 
           tracked in various ways, e.g. by 
           passing the $_GET variable to the 
           script processing the data, i.e. 
           <form action="edit.php?processed=1">, 
           and then checking if $_GET['processed'] 
           is set. 

        Note: PHP allows shortcuts for byte values, 
              including K (kilo), M (mega) and 
              G (giga). PHP will do the conversions 
              automatically if you use any of these. 
              Be careful not to exceed the 32 bit 
              signed integer limit (if you're using 
              32bit versions) as it will cause your 
              script to fail. 

        precision int
           The number of significant digits 
           displayed in floating point numbers. 
           -1 means that an enhanced algorithm 
           for rounding such numbers will 
           be used. 

        realpath_cache_size int
           Determines the size of the realpath 
           cache to be used by PHP. This value 
           should be increased on systems where PHP 
           opens many files, to reflect the 
           quantity of the file 
           operations performed. 

           The size represents the total number of 
           bytes in the path strings stored, plus 
           the size of the data associated with the 
           cache entry. This means that in order to 
           store longer paths in the cache, the 
           cache size must be larger. This value 
           does not directly control the number of 
           distinct paths that can be cached. 

           The size required for the cache entry 
           data is system dependent. 

        realpath_cache_ttl int
           Duration of time (in seconds) for which 
           to cache realpath information for a 
           given file or directory. For systems 
           with rarely changing files, consider 
           increasing the value. 

        upload_max_filesize int
           The maximum size of an uploaded file.
           When an int is used, the value is measured 
           in bytes. Shorthand notation, as described 
           in this FAQ, may also be used. 

        max_file_uploads int
           The maximum number of files allowed to be 
           uploaded simultaneously. Starting with 
           PHP 5.3.4, upload fields left blank on 
           submission do not count towards this limit.

        variables_order string
           Sets the order of the EGPCS (Environment, 
           Get, Post, Cookie, and Server) variable 
           parsing. For example, if variables_order 
           is set to "SP" then PHP will create the 
           superglobals $_SERVER and $_POST, but not 
           create $_ENV, $_GET, and $_COOKIE. 

           Setting to "" means no superglobals will 
           be set. 

           Warning :: In both the CGI and FastCGI 
                      SAPIs, $_SERVER is also populated 
                      by values from the environment; 
                      S is always equivalent to ES 
                      regardless of the placement of 
                      E elsewhere in this directive. 

           Note: The content and order of $_REQUEST is 
                 also affected by this directive. 

        //$memory_total_ARRAY
        $used_mem = (int) $tmp_mem_arr['total'] - (int) $tmp_mem_arr['free'];

        error_log(__LINE__ . ' '. 
            __METHOD__ . ' getServerMemoryUsage :: $peak_mem_usage=' . 
            $peak_mem_usage . ' |used=' . 
            $used_mem . ' |total=' . 
            $tmp_mem_arr['total'] . ' | free=' . 
            $tmp_mem_arr['free']);

        error_log(__LINE__ . ' ' . 
            __METHOD__ . ' getServerMemoryUsage :: $server_load=' . 
            $server_load . '% |mem=' . 
            $this->getServerMemoryUsage() . '%');

        */

    }

/**
 *    public function grant_permissions(
 *                    $profile_name, 
 *                    $minimum_bytes_required)
 *    {
 *
 *        switch($profile_name){
 *            case 'fwrite':
 *
 *                if($this->return_available_byte_capacity($minimum_bytes_required)){
 *
 *                    return true;
 *
 *                }
 *
 *            break;
 *
 *        }
 *
 *        return false;
 *
 *    }
 *
 */

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function isset_crnrstn_spool(
             $data_attribute, 
             $ddo_memory_pointer, 
             $index = 0)
    {

        switch($data_attribute){
            case 'data_value':
                /**
                 * jony5@localdev:/var/log/apache2$ [Sun Dec 17 03:47:19.294698 2023] [:error] [pid 24011]
                 * [client 172.16.225.1:61879] 4900 crnrstn_decoupled_data_object
                 * DO WE GET THIS FAR? $data_attribute[data_value].
                 * $data_key[058ebf2b0fd895c1071fe3c3255e2b57d41c58667ffc6c873e64d8151e512d45::version_php].
                 * $data_authorization_profile[CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME].
                 * $data_authorization_profile[8084].
                 * $tmp_channel_ARRAY[Array\n(\n    [0] => 8084\n)\n].
                 *
                 */
                if(isset(self::$spool_access_ARRAY[$ddo_memory_pointer])){

                    error_log(__LINE__ . ' ' . 
                        __METHOD__ . ' $ddo_memory_pointer[' . 
                        $ddo_memory_pointer . 
                        '].');

                    if(isset(self::$spool_access_ARRAY[$ddo_memory_pointer][$index])){

                        return true;

                    }

                }

            break;

        }

        /**
         *error_log(__LINE__ . ' ' . 
         *    __METHOD__ . ' $ddo_memory_pointer[' . 
         *    $ddo_memory_pointer . ']. self::$spool_access_ARRAY[' . 
         *    print_r(self::$spool_access_ARRAY, true) . 
         *    '].');
         *
         */

        return false;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function get_crnrstn_spool(
             $data_attribute, 
             $ddo_memory_pointer, 
             $index = 0)
    {

        switch($data_attribute){
            case 'data_value':

                if(isset(self::$spool_access_ARRAY[$ddo_memory_pointer])){

                    if(isset(self::$spool_access_ARRAY[$ddo_memory_pointer][$index])){

                        return self::$spool_access_ARRAY[$ddo_memory_pointer][$index];

                    }

                }

            break;

        }

        return '';

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function spool_ddo_input_data(
                     $data_profile, 
                     $data, 
                     $data_key, 
                     $data_type_family, 
                     $index, 
                     $data_authorization_profile, 
                     $ttl, 
                     $env_key)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * $tmp_input_data_redaction_ARRAY = array();
         *
         * TODO :: Make data handling safer 
         *      for running internal data 
         *      audits by applying audit-
         *      safe CLR-SSL UGC data 
         *      input authorization 
         *      profiles for mgmt of data 
         *      redaction in output.
         *
         *      E.g. some audit logs should 
         *      redact email, j***@****.com.
         * -----
         * CRNRSTN_AUTHORIZE & CRNRSTN_EMAIL
         * CRNRSTN_AUTHORIZE & CRNRSTN_PASSWORD
         * CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_GET & CRNRSTN_PASSWORD
         * CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_POST & CRNRSTN_PASSWORD
         * CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_COOKIE & CRNRSTN_PASSWORD
         * CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION & CRNRSTN_PASSWORD
         * CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_DATABASE & CRNRSTN_PASSWORD
         * CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SSDTLA & CRNRSTN_PASSWORD
         * CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_PSSDTLA & CRNRSTN_PASSWORD
         * CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME & CRNRSTN_PASSWORD
         * CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SOAP & CRNRSTN_PASSWORD
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Serialize storage index 
         * of CLR-SSL MC-DDO spooled 
         * configuration data. 
         *
         */
        $tmp_spool_ddo_key = $this->hash(
                                    $data_key . 
                                    strval($data_authorization_profile), 
                                    'sha256');
        $tmp_spool_ddo_key .= '::' . $data_key;

        $this->spool_ddo_data(
               $data_profile, 
               'data_profile', 
               $tmp_spool_ddo_key);

        $this->spool_ddo_data(
               $data, 
               'data', 
               $tmp_spool_ddo_key);

        $this->spool_ddo_data(
               $data_key, 
               'data_key', 
               $tmp_spool_ddo_key);

        $this->spool_ddo_data(
               $data_type_family, 
               'data_type_family', 
               $tmp_spool_ddo_key);

        $this->spool_ddo_data(
               $index, 
               'index', 
               $tmp_spool_ddo_key);

        $this->spool_ddo_data(
               $data_authorization_profile, 
               'data_authorization_profile', 
               $tmp_spool_ddo_key);

        $this->spool_ddo_data(
               $env_key, 
               'env_key', 
               $tmp_spool_ddo_key);

        $this->spool_ddo_data(
               $ttl, 
               'ttl', 
               $tmp_spool_ddo_key);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Initialize CLR-SSL 
         * MC-DDO spool early-access 
         * data structure. 
         *
         */
        $tmp_ddo_memory_pointer = $this->hash_ddo_memory_pointer(
                                         $data_key, 
                                         $data_type_family, 
                                         $env_key);

        /**
         *error_log(__LINE__ . ' '. 
         *    __METHOD__ . ' $env_key[' . 
         *    $env_key . ']. data_key[' . 
         *    print_r($data_key, true) . ']. $tmp_ddo_memory_pointer[' . 
         *    $tmp_ddo_memory_pointer . 
         *    '].');
         *
         */

        self::$spool_access_ARRAY[$tmp_ddo_memory_pointer][] = $data;

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function spool_ddo_data(
                     $data, 
                     $key, 
                     $pointer)
    {

        $tmp_ARRAY = array();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Prepare the input 
         * data for spooling. 
         *
         */
        $tmp_ARRAY[$pointer][$key]['TYPE'] = $this->gettype($data, CRNRSTN_INTEGER);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Data type.
         *
         */
        switch($tmp_ARRAY[$pointer][$key]['TYPE']){
            case CRNRSTN_STRING:
            case CRNRSTN_INT:
            case CRNRSTN_INTEGER:
            case CRNRSTN_BOOL:
            case CRNRSTN_BOOLEAN:
            case CRNRSTN_FLOAT:
            case CRNRSTN_DOUBLE:
            case CRNRSTN_RESOURCE:
            case CRNRSTN_RESOURCE_CLOSED:
            case CRNRSTN_UNKNOWN_TYPE:
            case CRNRSTN_NULL:
            case CRNRSTN_MIXED:

                $tmp_ARRAY[$pointer][$key]['DATA']   = $data;
                $tmp_ARRAY[$pointer][$key]['LENGTH'] = strlen(strval($data));

            break;
            case CRNRSTN_ARRAY:
            case CRNRSTN_OBJECT:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Serialize.
                 *
                 */
                $tmp_ARRAY[$pointer][$key]['DATA']   = serialize($data);
                $tmp_ARRAY[$pointer][$key]['LENGTH'] = strlen($tmp_ARRAY[$pointer][$key]['DATA']);

            break;
            default:

                $tmp_err_msg = 'Unable to detect data ' . 
                               'type while replaying the ' . 
                               'CLR-SSL Multi-Channel ' . 
                               'Decoupled Data Object ' . 
                               '(MC-DDO) Services ' . 
                               'Layer input spool.';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                $this->error_log(
                       $tmp_err_msg, 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       CRNRSTN_SETTINGS_CRNRSTN);

            break;

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * CLR-SSL Multi-Channel Decoupled 
         * Data Object (MC-DDO) Services 
         * Layer input spooling. [INPUT]
         *
         */
        self::$resource_spool_ARRAY[] = $tmp_ARRAY;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function replay_config_initialization_spool()
    {

        /*
        CRNRSTN_STRING
        CRNRSTN_INT
        CRNRSTN_INTEGER
        CRNRSTN_BOOL
        CRNRSTN_BOOLEAN
        CRNRSTN_FLOAT
        CRNRSTN_DOUBLE
        CRNRSTN_ARRAY
        CRNRSTN_OBJECT
        CRNRSTN_RESOURCE
        CRNRSTN_RESOURCE_CLOSED
        CRNRSTN_UNKNOWN_TYPE
        CRNRSTN_NULL
        CRNRSTN_MIXED

        [Fri Nov 17 11:46:13.660173 2023] [:error] [pid 49133] 
        [client 172.16.225.1:56802]
        21976 crnrstn spool_ARRAY[
        Array\n(\n
            [data_profile] => Array\n        (\n
                [TYPE] => 7\n
                [DATA] => __construct_integer\n
                [LENGTH] => 19\n        )\n\n)\n]. 
            tmp_data_profile[]. tmp_data_key[]. tmp_env_key[]. die();

        [Fri Nov 17 14:55:02.575907 2023] [:error] [pid 49134] 
        [client 172.16.225.1:59425]
        21192 crnrstn SPOOLING MEM USAGE [1.4893 KiB].
        resource_spool_ARRAY[
            Array\n(\n
                [0] => Array\n        (\n
                    [90ef84fa90545ce0db622b104aeaea2cec43616abd209e6b5918c4ae933a2523::CRNRSTN_debug_mode] =>
                        Array\n                (\n
                            [data_profile] => Array\n                        (\n
                                [TYPE] => 7\n
                                [DATA] => __construct_integer\n
                                [LENGTH] => 19\n                        )\n\n                )\n\n        )\n\n
                [1] => Array\n        (\n
                    [90ef84fa90545ce0db622b104aeaea2cec43616abd209e6b5918c4ae933a2523::CRNRSTN_debug_mode] =>
                        Array\n                (\n
                            [data] => Array\n                        (\n
                                [TYPE] => 9\n
                                [DATA] => 0\n
                                [LENGTH] => 1\n                        )\n\n                )\n\n        )\n\n
                [2] => Array\n        (\n
                    [90ef84fa90545ce0db622b104aeaea2cec43616abd209e6b5918c4ae933a2523::CRNRSTN_debug_mode] =>
                        Array\n                (\n
                            [data_key] => Array\n                        (\n
                                [TYPE] => 7\n
                                [DATA] => CRNRSTN_debug_mode\n
                                [LENGTH] => 18\n                        )\n\n                )\n\n        )\n\n
                [3] => Array\n        (\n
                    [90ef84fa90545ce0db622b104aeaea2cec43616abd209e6b5918c4ae933a2523::CRNRSTN_debug_mode] =>
                        Array\n                (\n
                            [data_type_family] => Array\n                        (\n
                                [TYPE] => 7\n
                                [DATA] => CRNRSTN::RESOURCE::CONFIGURATION\n
                                [LENGTH] => 32\n                        )\n\n                )\n\n        )\n\n
                [4] => Array\n        (\n
                    [90ef84fa90545ce0db622b104aeaea2cec43616abd209e6b5918c4ae933a2523::CRNRSTN_debug_mode] =>
                        Array\n                (\n
                            [index] => Array\n                        (\n
                                [TYPE] => 9\n
                                [DATA] => 0\n
                                [LENGTH] => 1\n                        )\n\n                )\n\n        )\n\n
                [5] => Array\n        (\n
                    [90ef84fa90545ce0db622b104aeaea2cec43616abd209e6b5918c4ae933a2523::CRNRSTN_debug_mode] =>
                        Array\n                (\n
                            [data_authorization_profile] => Array\n                        (\n
                                [TYPE] => 9\n
                                [DATA] => 8085\n
                                [LENGTH] => 4\n                        )\n\n                )\n\n        )\n\n
                [6] => Array\n        (\n
                    [90ef84fa90545ce0db622b104aeaea2cec43616abd209e6b5918c4ae933a2523::CRNRSTN_debug_mode] =>
                        Array\n                (\n
                            [env_key] => Array\n                        (\n
                                [TYPE] => 9\n
                                [DATA] => 8590\n
                                [LENGTH] => 4\n                        )\n\n                )\n\n        )\n\n
                [7] => Array\n        (\n
                    [90ef84fa90545ce0db622b104aeaea2cec43616abd209e6b5918c4ae933a2523::CRNRSTN_debug_mode] =>
                        Array\n                (\n
                            [ttl] => Array\n                        (\n
                                [TYPE] => 9\n
                                [DATA] => 80\n
                                [LENGTH] => 2\n                        )\n\n                )\n\n
        )\n\n)\n].

        */
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Deactivate CLR-SSL 
         * configuration UGC 
         * input validation 
         * spooling. 
         *
         */
        self::$spool_resource_override = false;
        $tmp_curr_pointer = NULL;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Process all spooled UGC 
         * input data from 
         * configuration initialization. 
         *
         * CLR-SSL Multi-Channel 
         * Decoupled Data Object 
         * (MC-DDO) Services Layer 
         * input spooling. [OUTPUT]
         *
         */
        foreach(self::$resource_spool_ARRAY as 
            $spool_index => $spool_ARRAY0)
        {

            foreach($spool_ARRAY0 as 
                $spool_ddo_pointer => $spool_ARRAY1)
            {

                if(!isset($tmp_curr_pointer)){

                    $tmp_curr_pointer = $spool_ddo_pointer;

                    $tmp_data_profile               = NULL;
                    $tmp_data                       = NULL;
                    $tmp_data_key                   = NULL;
                    $tmp_data_type_family           = NULL;
                    $tmp_index                      = NULL;
                    $tmp_data_authorization_profile = NULL;
                    $tmp_ttl                        = NULL;
                    $tmp_env_key                    = NULL;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Replay the 
                 * UGC input. 
                 *
                 */
                if($tmp_curr_pointer != $spool_ddo_pointer){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * The CLR-SSL Configuration 
                     * Manager will input clean 
                     * UGC data or look for the 
                     * best and most elegant 
                     * (please read as graceful) 
                     * degradation pathways to 
                     * a vanilla default. 
                     *
                     * On critical err, 
                     * $oCRNRSTN->config_ugc_input_clean_data() 
                     * returns NULL, and a 
                     * system exception is thrown. 
                     *
                     * Otherwise, if the input 
                     * data is not valid but can 
                     * be overridden with a 
                     * settings default, an on 
                     * the fly patch is made, 
                     * and a system notification 
                     * with details about the 
                     * internal override is 
                     * quietly captured. 
                     *
                     *
                     * 5 :: Friday, November 17, 2023 @ 2325 hrs.
                     *
                     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Did the CRNRSTN :: Lightsaber 
                     * RoCEv2 SOAP Services Layer 
                     * (CLR-SSL) receive UGC 
                     * configuration input data that 
                     * is assigned to the currently 
                     * detected environment? 
                     *
                     * If not, run a bypass here in 
                     * order to receive a minor 
                     * performance acceleration boost. 
                     *
                     */
                    if($this->config_is_valid_detected_env($tmp_env_key) == true){

                        if($tmp_data_key == 'crnrstn_path_directory' || 
                            $tmp_data_key == 'crnrstn_system_directory')
                        {

                            error_log(__LINE__ . ' ' . 
                                __METHOD__ . 
                                ' SPOOL REPLAY :: MC-DDO ' . 
                                'INPUT tmp_data_profile[' . 
                                $tmp_data_profile . ']. tmp_data[' . 
                                $tmp_data . ']. tmp_data_key[' . 
                                $tmp_data_key . ']. tmp_data_type_family[' . 
                                $tmp_data_type_family . ']. tmp_index[' . 
                                $tmp_index . ']. tmp_data_authorization_profile[' . 
                                $tmp_data_authorization_profile . 
                                '].');

                        }

                        $this->config_ugc_input_clean_data(
                                         $tmp_data_profile, 
                                         $tmp_data, 
                                         $tmp_data_key, 
                                         $tmp_data_type_family, 
                                         $tmp_index, 
                                         $tmp_data_authorization_profile, 
                                         $tmp_ttl, 
                                         false, 
                                         $tmp_env_key);

                    }

                    $tmp_curr_pointer = $spool_ddo_pointer;

                    $tmp_data_profile               = NULL;
                    $tmp_data                       = NULL;
                    $tmp_data_key                   = NULL;
                    $tmp_data_type_family           = NULL;
                    $tmp_index                      = NULL;
                    $tmp_data_authorization_profile = NULL;
                    $tmp_ttl                        = NULL;
                    $tmp_env_key                    = NULL;

                }

                foreach($spool_ARRAY1 as 
                    $spool_data_key => $spool_ARRAY2)
                {

                    switch($spool_data_key){
                        case 'data_profile':

                            switch($spool_ARRAY2['TYPE']){
                                case CRNRSTN_STRING:

                                    $tmp_data_profile = (string) $spool_ARRAY2['DATA'];
                                    $tmp_length       = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INT:

                                    $tmp_data_profile = (int) $spool_ARRAY2['DATA'];
                                    $tmp_length       = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INTEGER:

                                    $tmp_data_profile = (integer) $spool_ARRAY2['DATA'];
                                    $tmp_length       = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_BOOL:
                                case CRNRSTN_BOOLEAN:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_data_profile = $this->tidy_boolean($spool_ARRAY2['DATA']);
                                    $tmp_length       = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_FLOAT:

                                    $tmp_data_profile = (float) $spool_ARRAY2['DATA'];
                                    $tmp_length       = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_DOUBLE:

                                    $tmp_data_profile = (double) $spool_ARRAY2['DATA'];
                                    $tmp_length       = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_data_profile = $spool_ARRAY2['DATA'];
                                    $tmp_length       = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE_CLOSED:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_data_profile = $spool_ARRAY2['DATA'];
                                    $tmp_length       = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_UNKNOWN_TYPE:

                                    $tmp_data_profile = $spool_ARRAY2['DATA'];
                                    $tmp_length       = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_NULL:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_data_profile = NULL;
                                    $tmp_length       = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_ARRAY:
                                case CRNRSTN_OBJECT:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     * UNSERIALIZE.
                                     *
                                     */
                                    $tmp_data_profile = unserialize($spool_ARRAY2['DATA']);
                                    $tmp_length       = $spool_ARRAY2['LENGTH'];

                                break;
                                default:

                                    $tmp_err_msg = 'Unable to detect data ' . 
                                                   'type while replaying the ' . 
                                                   'CLR-SSL Multi-Channel ' . 
                                                   'Decoupled Data Object ' . 
                                                   '(MC-DDO) Services ' . 
                                                   'Layer input spool.';

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    $this->error_log(
                                           $tmp_err_msg, 
                                           __LINE__, 
                                           __METHOD__, 
                                           __FILE__, 
                                           CRNRSTN_SETTINGS_CRNRSTN);

                                break;

                            }

                        break;
                        case 'data':

                            switch($spool_ARRAY2['TYPE']){
                                case CRNRSTN_STRING:

                                    $tmp_data   = (string) $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INT:

                                    $tmp_data   = (int) $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INTEGER:

                                    $tmp_data   = (integer) $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_BOOL:
                                case CRNRSTN_BOOLEAN:

                                    $tmp_data   = $this->tidy_boolean($spool_ARRAY2['DATA']);
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_FLOAT:

                                    $tmp_data   = (float) $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_DOUBLE:

                                    $tmp_data   = (double) $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE:

                                    $tmp_data   = $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE_CLOSED:

                                    $tmp_data   = $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_UNKNOWN_TYPE:

                                    $tmp_data   = $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_NULL:

                                    $tmp_data   = NULL;
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_ARRAY:
                                case CRNRSTN_OBJECT:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * UNSERIALIZE.
                                     *
                                     */
                                    $tmp_data   = unserialize($spool_ARRAY2['DATA']);
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                default:

                                    $tmp_err_msg = 'Unable to detect data ' . 
                                                   'type while replaying the ' . 
                                                   'CLR-SSL Multi-Channel ' . 
                                                   'Decoupled Data Object ' . 
                                                   '(MC-DDO) Services ' . 
                                                   'Layer input spool.';

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    $this->error_log(
                                           $tmp_err_msg, 
                                           __LINE__, 
                                           __METHOD__, 
                                           __FILE__, 
                                           CRNRSTN_SETTINGS_CRNRSTN);

                                break;

                            }

                        break;
                        case 'data_key':

                            switch($spool_ARRAY2['TYPE']){
                                case CRNRSTN_STRING:

                                    $tmp_data_key = (string) $spool_ARRAY2['DATA'];
                                    $tmp_length   = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INT:

                                    $tmp_data_key = (int) $spool_ARRAY2['DATA'];
                                    $tmp_length   = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INTEGER:

                                    $tmp_data_key = (integer) $spool_ARRAY2['DATA'];
                                    $tmp_length   = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_BOOL:
                                case CRNRSTN_BOOLEAN:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_data_key = $this->tidy_boolean($spool_ARRAY2['DATA']);
                                    $tmp_length   = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_FLOAT:

                                    $tmp_data_key = (float) $spool_ARRAY2['DATA'];
                                    $tmp_length   = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_DOUBLE:

                                    $tmp_data_key = (double) $spool_ARRAY2['DATA'];
                                    $tmp_length   = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_data_key = $spool_ARRAY2['DATA'];
                                    $tmp_length   = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE_CLOSED:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_data_key = $spool_ARRAY2['DATA'];
                                    $tmp_length   = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_UNKNOWN_TYPE:

                                    $tmp_data_key = $spool_ARRAY2['DATA'];
                                    $tmp_length   = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_NULL:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_data_key = NULL;
                                    $tmp_length   = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_ARRAY:
                                case CRNRSTN_OBJECT:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     * UNSERIALIZE.
                                     *
                                     */
                                    $tmp_data_key = unserialize($spool_ARRAY2['DATA']);
                                    $tmp_length   = $spool_ARRAY2['LENGTH'];

                                break;
                                default:

                                    $tmp_err_msg = 'Unable to detect data ' . 
                                                   'type while replaying the ' . 
                                                   'CLR-SSL Multi-Channel ' . 
                                                   'Decoupled Data Object ' . 
                                                   '(MC-DDO) Services ' . 
                                                   'Layer input spool.';

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    $this->error_log(
                                           $tmp_err_msg, 
                                           __LINE__, 
                                           __METHOD__, 
                                           __FILE__, 
                                           CRNRSTN_SETTINGS_CRNRSTN);

                                break;

                            }

                        break;
                        case 'data_type_family':

                            switch($spool_ARRAY2['TYPE']){
                                case CRNRSTN_STRING:

                                    $tmp_data_type_family = (string) $spool_ARRAY2['DATA'];
                                    $tmp_length           = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INT:

                                    $tmp_data_type_family = (int) $spool_ARRAY2['DATA'];
                                    $tmp_length           = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INTEGER:

                                    $tmp_data_type_family = (integer) $spool_ARRAY2['DATA'];
                                    $tmp_length           = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_BOOL:
                                case CRNRSTN_BOOLEAN:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_data_type_family = $this->tidy_boolean($spool_ARRAY2['DATA']);
                                    $tmp_length           = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_FLOAT:

                                    $tmp_data_type_family = (float) $spool_ARRAY2['DATA'];
                                    $tmp_length           = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_DOUBLE:

                                    $tmp_data_type_family = (double) $spool_ARRAY2['DATA'];
                                    $tmp_length           = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_data_type_family = $spool_ARRAY2['DATA'];
                                    $tmp_length           = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE_CLOSED:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_data_type_family = $spool_ARRAY2['DATA'];
                                    $tmp_length           = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_UNKNOWN_TYPE:

                                    $tmp_data_type_family = $spool_ARRAY2['DATA'];
                                    $tmp_length           = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_NULL:

                                    $tmp_data_type_family = NULL;
                                    $tmp_length           = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_ARRAY:
                                case CRNRSTN_OBJECT:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     * UNSERIALIZE.
                                     *
                                     */
                                    $tmp_data_type_family = unserialize($spool_ARRAY2['DATA']);
                                    $tmp_length           = $spool_ARRAY2['LENGTH'];

                                break;
                                default:

                                    $tmp_err_msg = 'Unable to detect data type while ' . 
                                                   'replaying the CRNRSTN :: MULTI-' . 
                                                   'CHANNEL DECOUPLED DATA OBJECT ' . 
                                                   '(MC-DDO) SERVICES LAYER ' . 
                                                   'INPUT SPOOL.';

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    $this->error_log(
                                           $tmp_err_msg, 
                                           __LINE__, 
                                           __METHOD__, 
                                           __FILE__, 
                                           CRNRSTN_SETTINGS_CRNRSTN);

                                break;

                            }

                        break;
                        case 'index':

                            switch($spool_ARRAY2['TYPE']){
                                case CRNRSTN_STRING:

                                    $tmp_index  = (string) $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INT:

                                    $tmp_index  = (int) $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INTEGER:

                                    $tmp_index  = (integer) $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_BOOL:
                                case CRNRSTN_BOOLEAN:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_index  = $this->tidy_boolean($spool_ARRAY2['DATA']);
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_FLOAT:

                                    $tmp_index  = (float) $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_DOUBLE:

                                    $tmp_index  = (double) $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_index  = $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE_CLOSED:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_index  = $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_UNKNOWN_TYPE:

                                    $tmp_index  = $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_NULL:

                                    $tmp_index  = NULL;
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_ARRAY:
                                case CRNRSTN_OBJECT:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     * UNSERIALIZE.
                                     *
                                     */
                                    $tmp_index  = unserialize($spool_ARRAY2['DATA']);
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                default:

                                    $tmp_err_msg = 'Unable to detect data ' . 
                                                   'type while replaying the ' . 
                                                   'CLR-SSL Multi-Channel ' . 
                                                   'Decoupled Data Object ' . 
                                                   '(MC-DDO) Services ' . 
                                                   'Layer input spool.';

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    $this->error_log(
                                           $tmp_err_msg, 
                                           __LINE__, 
                                           __METHOD__, 
                                           __FILE__, 
                                           CRNRSTN_SETTINGS_CRNRSTN);

                                break;

                            }

                        break;
                        case 'data_authorization_profile':

                            switch($spool_ARRAY2['TYPE']){
                                case CRNRSTN_STRING:

                                    $tmp_data_authorization_profile = (string) $spool_ARRAY2['DATA'];
                                    $tmp_length                     = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INT:

                                    $tmp_data_authorization_profile = (int) $spool_ARRAY2['DATA'];
                                    $tmp_length                     = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INTEGER:

                                    $tmp_data_authorization_profile = (integer) $spool_ARRAY2['DATA'];
                                    $tmp_length                     = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_BOOL:
                                case CRNRSTN_BOOLEAN:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_data_authorization_profile = $this->tidy_boolean($spool_ARRAY2['DATA']);
                                    $tmp_length                     = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_FLOAT:

                                    $tmp_data_authorization_profile = (float) $spool_ARRAY2['DATA'];
                                    $tmp_length                     = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_DOUBLE:

                                    $tmp_data_authorization_profile = (double) $spool_ARRAY2['DATA'];
                                    $tmp_length                     = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_data_authorization_profile = $spool_ARRAY2['DATA'];
                                    $tmp_length                     = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE_CLOSED:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_data_authorization_profile = $spool_ARRAY2['DATA'];
                                    $tmp_length                     = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_UNKNOWN_TYPE:

                                    $tmp_data_authorization_profile = $spool_ARRAY2['DATA'];
                                    $tmp_length                     = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_NULL:

                                    $tmp_data_authorization_profile = NULL;
                                    $tmp_length                     = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_ARRAY:
                                case CRNRSTN_OBJECT:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     * UNSERIALIZE.
                                     *
                                     */
                                    $tmp_data_authorization_profile = unserialize($spool_ARRAY2['DATA']);
                                    $tmp_length                     = $spool_ARRAY2['LENGTH'];

                                break;
                                default:

                                    $tmp_err_msg = 'Unable to detect data ' . 
                                                   'type while replaying the ' . 
                                                   'CLR-SSL Multi-Channel ' . 
                                                   'Decoupled Data Object ' . 
                                                   '(MC-DDO) Services ' . 
                                                   'Layer input spool.';

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    $this->error_log(
                                           $tmp_err_msg, 
                                           __LINE__, 
                                           __METHOD__, 
                                           __FILE__, 
                                           CRNRSTN_SETTINGS_CRNRSTN);

                                break;

                            }

                        break;
                        case 'ttl':

                            switch($spool_ARRAY2['TYPE']){
                                case CRNRSTN_STRING:

                                    $tmp_ttl    = (string) $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INT:

                                    $tmp_ttl    = (int) $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INTEGER:

                                    $tmp_ttl    = (integer) $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_BOOL:
                                case CRNRSTN_BOOLEAN:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_ttl    = $this->tidy_boolean($spool_ARRAY2['DATA']);
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_FLOAT:

                                    $tmp_ttl    = (float) $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_DOUBLE:

                                    $tmp_ttl    = (double) $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_ttl    = $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE_CLOSED:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_ttl    = $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_UNKNOWN_TYPE:

                                    $tmp_ttl    = $spool_ARRAY2['DATA'];
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_NULL:

                                    $tmp_ttl    = NULL;
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_ARRAY:
                                case CRNRSTN_OBJECT:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     * UNSERIALIZE.
                                     *
                                     */
                                    $tmp_ttl    = unserialize($spool_ARRAY2['DATA']);
                                    $tmp_length = $spool_ARRAY2['LENGTH'];

                                break;
                                default:

                                    $tmp_err_msg = 'Unable to detect data ' . 
                                                   'type while replaying the ' . 
                                                   'CLR-SSL Multi-Channel ' . 
                                                   'Decoupled Data Object ' . 
                                                   '(MC-DDO) Services ' . 
                                                   'Layer input spool.';

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    $this->error_log(
                                           $tmp_err_msg, 
                                           __LINE__, 
                                           __METHOD__, 
                                           __FILE__, 
                                           CRNRSTN_SETTINGS_CRNRSTN);

                                break;

                            }

                        break;
                        case 'env_key':

                            switch($spool_ARRAY2['TYPE']){
                                case CRNRSTN_STRING:

                                    $tmp_env_key = (string) $spool_ARRAY2['DATA'];
                                    $tmp_length  = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INT:

                                    $tmp_env_key = (int) $spool_ARRAY2['DATA'];
                                    $tmp_length  = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_INTEGER:

                                    $tmp_env_key = (integer) $spool_ARRAY2['DATA'];
                                    $tmp_length  = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_BOOL:
                                case CRNRSTN_BOOLEAN:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_env_key = $this->tidy_boolean($spool_ARRAY2['DATA']);
                                    $tmp_length  = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_FLOAT:

                                    $tmp_env_key = (float) $spool_ARRAY2['DATA'];
                                    $tmp_length  = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_DOUBLE:

                                    $tmp_env_key = (double) $spool_ARRAY2['DATA'];
                                    $tmp_length  = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_env_key = $spool_ARRAY2['DATA'];
                                    $tmp_length  = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_RESOURCE_CLOSED:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     */
                                    $tmp_env_key = $spool_ARRAY2['DATA'];
                                    $tmp_length  = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_UNKNOWN_TYPE:

                                    $tmp_env_key = $spool_ARRAY2['DATA'];
                                    $tmp_length  = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_NULL:

                                    $tmp_env_key = NULL;
                                    $tmp_length  = $spool_ARRAY2['LENGTH'];

                                break;
                                case CRNRSTN_ARRAY:
                                case CRNRSTN_OBJECT:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This case will 
                                     * never run. 
                                     *
                                     * UNSERIALIZE.
                                     *
                                     */
                                    $tmp_env_key = unserialize($spool_ARRAY2['DATA']);
                                    $tmp_length  = $spool_ARRAY2['LENGTH'];

                                break;
                                default:

                                    $tmp_err_msg = 'Unable to detect data ' . 
                                                   'type while replaying the ' . 
                                                   'CLR-SSL Multi-Channel ' . 
                                                   'Decoupled Data Object ' . 
                                                   '(MC-DDO) Services ' . 
                                                   'Layer input spool.';

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    $this->error_log(
                                           $tmp_err_msg, 
                                           __LINE__, 
                                           __METHOD__, 
                                           __FILE__, 
                                           CRNRSTN_SETTINGS_CRNRSTN);

                                break;

                            }

                        break;

                    }

                }

            }

        }

        /**
         *error_log(__LINE__ . 
         *    ' crnrstn SPOOLING MEM USAGE [' . 
         *    $this->return_bytes(self::$resource_spool_ARRAY, 4) . 
         *    '].' ); 
         * 
         * [Sat Nov 18 01:35:42.426005 2023] [:error] [pid 49655] 
         * [client 172.16.225.1:57046] 22123 crnrstn SPOOLING 
         * MEM USAGE [28.9561 KiB].
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Clear all spool 
         * support cache arrays. 
         *
         */
        array_splice(self::$resource_spool_ARRAY, 0);
        array_splice(self::$spool_access_ARRAY, 0);

        /**
         *error_log(__LINE__ . 
         *    ' crnrstn SPOOLING MEM USAGE [' . 
         *    $this->return_bytes(self::$resource_spool_ARRAY, 4) . 
         *    '].' ); 
         * 
         * [Sat Nov 18 01:35:42.426238 2023] [:error] [pid 49655] 
         * [client 172.16.225.1:57046] 22129 crnrstn SPOOLING 
         * MEM USAGE [6 bytes].
         *
         */

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function init_disk_write_authorization($disk_write_authorization)
    {

        self::$disk_write_authorization = $disk_write_authorization;

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
    function grant_permissions_fwrite(
             $filepath, 
             $minimum_bytes_required = 0)
    {

        if(!(self::$disk_write_authorization !== false)){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * TODO :: Need more robust status 
             *         notification channel here. 
             *         All write block errors 
             *         will report as disk full 
             *         for now. 
             *
             */
            return false;

        }

        if($this->return_available_byte_capacity(
                  $filepath, 
                  $minimum_bytes_required))
        {

            return true;

        }

        return false;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function get_disk_free_space($path = CRNRSTN_ROOT)
    {

        return $this->return_disk_free_space($path);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function get_disk_size($path = CRNRSTN_ROOT)
    {

        return $this->return_hard_disk_size($path);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function get_disk_performance_metric($profile_name)
    {

        $profile_name = strtolower($profile_name);

        switch($profile_name){
            case 'maximum_disk_use_warning':
                /*
                $tmp_max_disk_storage_utilization_warning = $this->get_resource(
                                                                   'max_disk_storage_utilization_warning', 
                                                                   0, 
                                                                   'CRNRSTN::RESOURCE::DISK_STORAGE');

                if(isset($tmp_max_disk_storage_utilization_warning)){

                    if(strlen($tmp_max_disk_storage_utilization_warning) > 0){

                        return (int) $tmp_max_disk_storage_utilization_warning;

                    }

                }
                */

                return $this->get_crnrstn('max_disk_storage_utilization_warning');

            break;
            case 'maximum_disk_use':
                /*
                $tmp_max_disk_storage_utilization = $this->get_resource(
                                                           'max_disk_storage_utilization', 
                                                           0, 
                                                           'CRNRSTN::RESOURCE::DISK_STORAGE');

                if(isset($tmp_max_disk_storage_utilization)){

                    if(strlen($tmp_max_disk_storage_utilization) > 0){

                        return (int) $tmp_max_disk_storage_utilization;

                    }

                }

                return $this->max_disk_storage_utilization;

                 */

                return $this->get_crnrstn('max_disk_storage_utilization');

            break;
            case 'disk_free_space':

                return $this->return_disk_free_space();

            break;
            case 'hard_disk_size':

                return $this->return_hard_disk_size();

            break;

        }

        return '';

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function snapshot_ini_values()
    {

        foreach(self::$config_relevant_ini_values_ARRAY as 
            $key => $ini_value_nom )
        {

            $this->log_current_ini_value($ini_value_nom);

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function log_current_ini_value($ini_value_nom)
    {

        $this->php_ini_val[$ini_value_nom][] = $this->ini_get($ini_value_nom);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function monitor_pid_performance($return_pid_info = false)
    {

        try{

            if(!($pid_info_array = $this->getpidinfo($this->process_id, 'aux'))){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('An error was experienced ' . 
                    'while attempting to initialize thread ' . 
                    'performance monitoring for PID, ' . 
                    $this->process_id . 
                    '.');

            }else{

                self::$process_id_perf_stat_ARRAY[] = $pid_info_array;

            }

            if($return_pid_info){

                return $pid_info_array;

            }else{

                return NULL;

            }

        }catch(Exception $e){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Exception handling performed 
             * by the Logging Services Layer 
             * of the CRNRSTN :: Lightsaber 
             * RoCEv2 SOAP Services 
             * Layer (CLR-SSL). 
             *
             * Allow the CLR-SSL to handle 
             * this exception per the 
             * configured logging profile of 
             * the running application on 
             * this server. 
             *
             *
             * 5
             *
             * Sunday, June 30, 2024 @ 1613 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

            return false;

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
    function return_available_byte_capacity(
             $filepath, 
             $required_bytes = 0)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Total available 
         * storage size (bytes) 
         * at destination. 
         *
         */
        $this->hard_disk_bytes_capacity_total        = $this->return_disk_free_space($filepath);
        $this->hard_disk_bytes_volume_size           = $this->return_hard_disk_size($filepath);
        $this->hard_disk_bytes_capacity_total_pretty = $this->return_bytes(
                                                              $this->hard_disk_bytes_capacity_total, 
                                                              5);
        $required_bytes_pretty                       = $this->return_bytes(
                                                              $required_bytes, 
                                                              4);
/*        error_log(__LINE__ . ' ' . 
 *            __CLASS__ . ' ***** capacity [' . 
 *            $this->hard_disk_bytes_capacity_total . 
 *            ']');
 *
 *        error_log(__LINE__ . ' ' . 
 *            __CLASS__ . ' ***** volume_size [' . 
 *            $this->hard_disk_bytes_volume_size . 
 *            ']');
 *
 *        error_log(__LINE__ . ' ' . 
 *            __CLASS__ . ' ***** required [' . 
 *            $required_bytes . 
 *            ']');
 *
 */

        error_log(
            __LINE__ . ' ' . 
            __CLASS__ . ' ***** required [' . 
            $required_bytes_pretty . 
            ']. volume_size [' . 
            $this->return_bytes($this->hard_disk_bytes_volume_size, 5) . 
            ']. capacity [' . 
            $this->hard_disk_bytes_capacity_total_pretty . 
            ']. ');

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Calculate percentage 
         * utilization of request. 
         *
         */
        $percentage_utilization_ask = 100 - ((($required_bytes + ($this->hard_disk_bytes_volume_size - $this->hard_disk_bytes_capacity_total)) / $this->hard_disk_bytes_volume_size) * 100);
        //$percentage_utilization_ask = (($required_bytes + ($this->hard_disk_bytes_volume_size - $this->hard_disk_bytes_capacity_total)) / $this->hard_disk_bytes_volume_size) * 100;

        error_log(__LINE__ . ' ' . 
            __CLASS__ . ' maths[' . 
            ((($required_bytes + ($this->hard_disk_bytes_volume_size - $this->hard_disk_bytes_capacity_total)) / $this->hard_disk_bytes_volume_size) * 100) . 
            ']');

        /*error_log(__LINE__ . ' ' . 
         *    __CLASS__ . ' percentage_utilization_ask [' . 
         *    $percentage_utilization_ask . 
         *    '].');
         *
         */
        if($percentage_utilization_ask < 0){

            $percentage_utilization_ask = $percentage_utilization_ask * (-1);

        }

        if($percentage_utilization_ask > 100){

            $percentage_utilization_ask = 100;

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Get system configuration 
         * settings for regulation 
         * of memory utilization 
         * performance limitations. 
         *
         */
        /*
        $tmp_max_disk_storage_utilization_warning = $this->get_resource(
                                                           'max_disk_storage_utilization_warning', 
                                                           0, 
                                                           'CRNRSTN::RESOURCE::DISK_STORAGE');

        $tmp_max_disk_storage_utilization = $this->get_resource(
                                                   'max_disk_storage_utilization', 
                                                   0, 
                                                   'CRNRSTN::RESOURCE::DISK_STORAGE');
        */
        $tmp_max_disk_storage_utilization         = $this->get_crnrstn('max_disk_storage_utilization');
        $tmp_max_disk_storage_utilization_warning = $this->get_crnrstn('max_disk_storage_utilization_warning');

        if(isset($tmp_max_disk_storage_utilization_warning)){

            if(\strlen($tmp_max_disk_storage_utilization_warning) > 0){

                $this->max_disk_storage_utilization_warning = $tmp_max_disk_storage_utilization_warning;

            }

        }

        if(isset($tmp_max_disk_storage_utilization)){

            if(\strlen($tmp_max_disk_storage_utilization) > 0){

                $this->max_disk_storage_utilization = $tmp_max_disk_storage_utilization;

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Disk full warning.
         *
         */
        if($percentage_utilization_ask > $this->max_disk_storage_utilization_warning){

/**
 *            error_log(__LINE__ . ' ' . 
 *                __CLASS__ . ' $percentage_utilization_ask[' . 
 *                $percentage_utilization_ask . 
 *                '].');
 *
 *            die();
 *
 */
            $this->error_log('WARNING: maximum permitted ' . 
                   'disk storage will be reached soon. ' . 
                   $this->number_format_keep_precision(
                          $percentage_utilization_ask, 
                          3) . 
                   '% of the disk volume is used. ' . 
                   $this->number_format_keep_precision(
                          $this->max_disk_storage_utilization, 
                          3) . 
                   '% is the configured maximum. For ' . 
                   'the record, ' . 
                   $this->return_bytes($this->hard_disk_bytes_capacity_total) . 
                   ' are available at ' . 
                   $filepath . '.', 
                   __LINE__, 
                   __METHOD__, 
                   __FILE__, 
                   CRNRSTN_SETTINGS_CRNRSTN);

            $this->print_r('WARNING: maximum permitted ' . 
                   'disk storage will be reached soon. ' . 
                   $this->number_format_keep_precision(
                          $percentage_utilization_ask, 3) . 
                   '% of the disk volume is used. ' . 
                   $this->number_format_keep_precision(
                          $this->max_disk_storage_utilization, 3) . 
                   '% is the configured maximum. For the record, ' . 
                   $this->return_bytes($this->hard_disk_bytes_capacity_total) . 
                   ' are available at ' . 
                   $filepath . '.', 
                   CRNRSTN_UI_PHPNIGHT, 
                   __LINE__, 
                   __METHOD__, 
                   __FILE__);

        }

        error_log(__LINE__ . ' ' . 
            __CLASS__ . ' $percentage_utilization_ask[' . 
            $percentage_utilization_ask . '] fail%[' . 
            $this->max_disk_storage_utilization . ']. warn%[' . 
            $this->max_disk_storage_utilization_warning . 
            '].');

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Disk full error. 
         *
         */
        if($percentage_utilization_ask > $this->max_disk_storage_utilization){

            error_log(__LINE__ . ' ' . 
                __CLASS__ . 
                ' $required_bytes_pretty[' . 
                $required_bytes_pretty . 
                ']');

            $this->error_log('DISK FULL ERROR: Maximum ' . 
                   'storage utilization has been reached ' . 
                   'with an additional request which ' . 
                   'would result in ' . 
                   $this->number_format_keep_precision(
                          $percentage_utilization_ask, 
                          3) . 
                   '% usage of the disk volume. ' . 
                   $this->number_format_keep_precision(
                          $this->max_disk_storage_utilization, 
                          3) . 
                   '% is the currently configured ' . 
                   'maximum. For the record, ' . 
                   $this->return_bytes($this->hard_disk_bytes_capacity_total) . 
                   ' are available at ' . 
                   $filepath . '.', 
                   __LINE__, 
                   __METHOD__, 
                   __FILE__, 
                   CRNRSTN_SETTINGS_CRNRSTN);

            $this->print_r('DISK FULL ERROR: Maximum ' . 
                   'storage utilization has been reached ' . 
                   'with an additional request which ' . 
                   'would result in ' . 
                   $this->number_format_keep_precision(
                          $percentage_utilization_ask, 
                          3) . 
                   '% usage of the disk volume. ' . 
                   $this->number_format_keep_precision(
                          $this->max_disk_storage_utilization, 
                          3) . 
                   '% is the currently configured ' . 
                   'maximum. For the record, ' . 
                   $this->return_bytes($this->hard_disk_bytes_capacity_total) . 
                   ' are available at ' . 
                   $filepath . '.', 
                   'Image Processing.', 
                   CRNRSTN_UI_PHPNIGHT, 
                   __LINE__, 
                   __METHOD__, 
                   __FILE__);

            return false;

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return percentage disk 
         * utilization...If the 
         * expected $required_bytes 
         * bytes would be burned 
         * to disk. 
         *
         */
        return $percentage_utilization_ask;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function _getServerLoadLinuxData()
    {

        if(is_readable("/proc/stat")){

            $stats = @file_get_contents("/proc/stat");

            if($stats !== false){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Remove double spaces 
                 * to make it easier to 
                 * extract values 
                 * with explode() 
                 *
                 */
                $stats = preg_replace("/[[:blank:]]+/", " ", $stats);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Separate lines.
                 *
                 */
                $stats = str_replace(array("\r\n", "\n\r", "\r"), "\n", $stats);
                $stats = explode("\n", $stats);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Separate values and 
                 * find line for main 
                 * CPU load. 
                 *
                 */
                foreach($stats as $statLine){

                    $statLineData = explode(" ", trim($statLine));

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Found! 
                     *
                     */
                    if((count($statLineData) >= 5) && 
                        ($statLineData[0] == "cpu"))
                    {

                        return array(
                            $statLineData[1],
                            $statLineData[2],
                            $statLineData[3],
                            $statLineData[4]
                        );

                    }

                }

            }

        }

        return null;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://www.php.net/manual/en/function.getmypid.php
     * COMMENT :: https://www.php.net/manual/en/function.getmypid.php#59889
     * AUTHOR :: kroczu at interia dot pl
     *
     */
    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function getpidinfo(
                     $pid, 
                     $ps_opt = 'aux')
    {

        $ps = shell_exec('ps ' . $ps_opt . 'p ' . $pid);
        $ps = explode('\n', $ps);

        if(count($ps) < 2){

            $this->error_log('We attempted to acquire ' . 
                   'PID information via shell_exec(), ' . 
                   'but the PID ' . 
                   $pid . ' doesn\'t seem to exist.', 
                   __LINE__, 
                   __METHOD__, 
                   __FILE__, 
                   CRNRSTN_SETTINGS_CRNRSTN);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * trigger_error('PID ' . 
             *     $pid . ' doesn't exists', 
             *     E_USER_WARNING);
             *
             */

            return false;

        }

        foreach($ps as 
            $key => $val)
        {

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * error_log(__LINE__ . ' ' . 
             *     __METHOD__ . ' [' . 
             *     $key . ']' . 
             *     $ps[$key]);
             *
             */
            $ps[$key] = explode(' ', $ps[$key]);

        }

        foreach($ps[0] as 
            $key => $val)
        {

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * error_log(__LINE__ . ' ' . 
             *     __METHOD__ . ' $key[' . 
             *     $key . ']' . ' $val[' . 
             *     $val . '] ' . 
             *     $ps[1][$key]);
             *
             */
            $pidinfo[$val] = $ps[1][$key];

            unset($ps[1][$key]);

        }

        if(is_array($ps[1])){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * error_log(__LINE__ . ' ' . 
             *     __METHOD__ . ' $val[' . 
             *     $val . '] ' . 
             *     $pidinfo[$val]);
             *
             */
            $pidinfo[$val] .= ' ' . implode(' ', $ps[1]);

        }

        return $pidinfo;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://www.php.net/manual/en/function.sys-getloadavg.php
     * COMMENT :: https://www.php.net/manual/en/function.sys-getloadavg.php#118673
     * AUTHOR :: stanislav dot eckert at vizson dot de
     * 
     * Returns server load in 
     * percent (just number, 
     * without percent sign).
     *
     */
    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function getServerLoad()
    {

        $load = null;

        if(stristr(PHP_OS, "win")){

            $cmd = "wmic cpu get loadpercentage /all";
            @exec($cmd, $output);

            if($output){

                foreach($output as $line){

                    if($line && 
                        preg_match("/^[0-9]+\$/", $line))
                    {

                        $load = $line;

                        break;

                    }

                }

            }

        }else{

            if(is_readable("/proc/stat")){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Collect 2 samples - each 
                 * with 1 second period. 
                 * 
                 * See: https://de.wikipedia.org/wiki/Load#Der_Load_Average_auf_Unix-Systemen
                 *
                 */
                $statData1 = $this->_getServerLoadLinuxData();
                sleep(1);
                $statData2 = $this->_getServerLoadLinuxData();

                if((!is_null($statData1)) && 
                    (!is_null($statData2)))
                {

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Get difference.
                     *
                     */
                    $statData2[0] -= $statData1[0];
                    $statData2[1] -= $statData1[1];
                    $statData2[2] -= $statData1[2];
                    $statData2[3] -= $statData1[3];

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Sum up the 4 values for 
                     * User, Nice, System and 
                     * Idle and calculate the 
                     * percentage of idle time 
                     * (which is part of the 
                     * 4 values!) 
                     *
                     */
                    $cpuTime = $statData2[0] + $statData2[1] + $statData2[2] + $statData2[3];

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Invert percentage to 
                     * get CPU time, not 
                     * idle time.
                     *
                     */
                    $load = 100 - ($statData2[3] * 100 / $cpuTime);
                }

            }

        }

        return $load;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://www.php.net/manual/en/function.memory-get-usage.php
     * COMMENT :: https://www.php.net/manual/en/function.memory-get-usage.php#120665
     * AUTHOR :: stanislav dot eckert at vizson dot de 
     *
     */
    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function getServerMemoryUsage($getPercentage = true)
    {

        $memoryTotal = null;
        $memoryFree = null;

        if($this->operating_system == 'WIN'){
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Get total physical 
             * memory. 
             * 
             * This is in bytes.
             *
             */

            $cmd = "wmic ComputerSystem get TotalPhysicalMemory";
            @exec($cmd, $outputTotalPhysicalMemory);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Get free physical 
             * memory 
             * 
             * This is in kibibytes!
             *
             */
            $cmd = "wmic OS get FreePhysicalMemory";
            @exec($cmd, $outputFreePhysicalMemory);

            if($outputTotalPhysicalMemory && $outputFreePhysicalMemory){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Find total value.
                 *
                 */
                foreach($outputTotalPhysicalMemory as $line){

                    if($line && 
                        preg_match("/^[0-9]+\$/", $line))
                    {

                        $memoryTotal = $line;
                        break;

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Find free value.
                 *
                 */
                foreach($outputFreePhysicalMemory as $line){

                    if($line && 
                        preg_match("/^[0-9]+\$/", $line))
                    {

                        $memoryFree = $line;
                        $memoryFree *= 1024;  // convert from kibibytes to bytes
                        break;

                    }

                }

            }

        }else{

            if(is_readable("/proc/meminfo")){

                $stats = @file_get_contents("/proc/meminfo");

                if($stats !== false){
                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Separate lines.
                     *
                     */

                    $stats = str_replace(array("\r\n", "\n\r", "\r"), "\n", $stats);
                    $stats = explode("\n", $stats);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Separate values and 
                     * find correct lines 
                     * for total and 
                     * free memory. 
                     *
                     */
                    foreach($stats as $statLine){

                        $statLineData = explode(":", trim($statLine));

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Extract size.
                         * 
                         * TODO: It seems that (at least) 
                         *       the two values for total 
                         *       and free memory have the 
                         *       unit "kB" always. 
                         *       Is this correct?
                         *       
                         *       Checking. 
                         *       5 :: Monday, March 2, 2026 @ 0457 hrs.
                         *
                         * Total memory.
                         *
                         */
                        if(count($statLineData) == 2 && 
                            trim($statLineData[0]) == "MemTotal")
                        {

                            $memoryTotal = trim($statLineData[1]);
                            $memoryTotal = explode(" ", $memoryTotal);
                            $memoryTotal = $memoryTotal[0];
                            $memoryTotal *= 1024;  // convert from kibibytes to bytes

                        }

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Free memory.
                         *
                         */
                        if(count($statLineData) == 2 && trim($statLineData[0]) == "MemFree"){

                            $memoryFree = trim($statLineData[1]);
                            $memoryFree = explode(" ", $memoryFree);
                            $memoryFree = $memoryFree[0];
                            $memoryFree *= 1024;  // convert from kibibytes to bytes

                        }

                    }

                }

            }

        }

        if(is_null($memoryTotal) || 
            is_null($memoryFree))
        {

            return null;

        }else{

            if($getPercentage){

                return (100 - ($memoryFree * 100 / $memoryTotal));

            }else{

                return array(
                    "total" => $memoryTotal,
                    "free" => $memoryFree
                );

            }

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function return_hard_disk_size(
                     $path = CRNRSTN_ROOT, 
                     $env_key = CRNRSTN_RESOURCE_ALL)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Caution: On Windows, dirname() 
         * assumes the currently set codepage, 
         * so for it to see the correct 
         * directory name with multibyte 
         * character paths, the matching 
         * codepage must be set. 
         *
         * If path contains characters which 
         * are invalid for the current 
         * codepage, the behavior of 
         * dirname() is undefined. 
         *
         * On other systems, dirname() 
         * assumes path to be encoded in 
         * an ASCII compatible encoding. 
         * Otherwise the behavior of the 
         * function is undefined. 
         *
         */
        $path = dirname($path);

        $this->disk_size_bytes_ARRAY[$env_key][$path] = disk_total_space($path);

        /**
         *$this->print_r('WE GOOD. CRNRSTN :: ' . 
         *                 'DISK TOTAL SIZE = ' . 
         *                 $this->return_bytes($this->disk_size_bytes_ARRAY[$env_key][$path]) . '.', 
         *                 'Image Processing.', 
         *                 CRNRSTN_UI_PHPNIGHT, 
         *                 __LINE__, 
         *                 __METHOD__, 
         *                 __FILE__);
         *
         */
        return $this->disk_size_bytes_ARRAY[$env_key][$path];

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function return_disk_free_space(
                     $path = CRNRSTN_ROOT, 
                     $env_key = CRNRSTN_RESOURCE_ALL)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Caution: On Windows, dirname() 
         * assumes the currently set 
         * codepage, so for it to see the 
         * correct directory name with 
         * multibyte character paths, 
         * the matching codepage must be 
         * set. If path contains 
         * characters which are invalid 
         * for the current codepage, 
         * the behavior of dirname() 
         * is undefined. 
         *
         * On other systems, dirname() 
         * assumes path to be encoded in 
         * an ASCII compatible encoding. 
         * Otherwise the behavior of the 
         * function is undefined. 
         *
         */

        $path = dirname($path);

        $this->disk_capacity_bytes_ARRAY[$env_key][$path] = disk_free_space($path);

        /**
         *$this->print_r('WE GOOD. CRNRSTN :: ' . 
         *                 'DISK FREE SPACE = ' . 
         *                 $this->return_bytes($this->disk_capacity_bytes_ARRAY[$env_key][$path]) . '.', 
         *                 'Image Processing.', 
         *                 CRNRSTN_UI_PHPNIGHT, 
         *                 __LINE__, 
         *                 __METHOD__, 
         *                 __FILE__);
         *
         */
        return $this->disk_capacity_bytes_ARRAY[$env_key][$path];

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://gist.github.com/jefferyrdavis/5992282
     * COMMENT :: https://gist.github.com/jefferyrdavis/5992282?permalink_comment_id=2643413#gistcomment-2643413
     * AUTHOR :: FranciscoG :: https://gist.github.com/FranciscoG
     *
     */
    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function is_valid_zipcode($zipcode)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Support for 
         * CRNRSTN :: WETHRBUG. 
         *
         *
         * 5 :: Tuesday, October 3, 2023 @ 2019 hrs.
         *
         */
        return (preg_match('/^[0-9]{5}(-[0-9]{4})?$/', $zipcode)) ? true : false;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @param
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function config_ugc_input_clean_data(
             $data_profile, 
             $data, 
             $data_key, 
             $data_type_family = 'CRNRSTN::RESOURCE', 
             $index = NULL, 
             $data_authorization_profile = 'R_authorize & R_channel_RUNTIME', 
             $ttl = NULL, 
             $spool_resource = false, 
             $env_key = NULL)
    {

        /*
        SOURCE :: https://www.php.net/manual/en/function.ctype-digit.php
        COMMENT :: https://www.php.net/manual/en/function.ctype-digit.php#108712
        AUTHOR :: info at directwebsolutions dot nl

        All basic PHP functions which I tried 
        returned unexpected results. I would 
        just like to check whether some 
        variable only contains numbers. 

        For example: when I spread my script 
        to the public I cannot require users to 
        only use numbers as string or as integer. 

        For those situation I wrote my own 
        function which handles all inconveniences 
        of other functions and which is not 
        depending on regular expressions. 

        Some people strongly believe that regular 
        functions slow down your script. 

        The reason to write this function: 
            1. is_numeric() accepts values 
               like: +0123.45e6 (but you would 
               expect it would not) 
            2. is_int() does not accept HTML 
               form fields (like: 123) because 
               they are treated as strings 
               (like: "123"). 
            3. ctype_digit() excepts all 
               numbers to be strings 
               (like: "123") and does not 
               validate real integers 
               (like: 123). 
            4. Probably some functions would 
               parse a boolean (like: true 
               or false) as 0 or 1 and 
               validate it in that manner. 

        My function only accepts numbers 
        regardless whether they are in 
        string or in integer format. 
        <?php

        //* Check input for existing only of digits (numbers)
        //* @author Tim Boormans <info@directwebsolutions.nl>
        //* @param $digit
        //* @return bool

        function is_digit($digit)
        {

            if(is_int($digit)){

                return true;

            }elseif(is_string($digit)){

                return ctype_digit($digit);

            }else{
                // booleans, floats and others

                return false;

            }

        }

        TYPE HINTS ::
        Class/interface name    The value must be an 
                                instanceof the given 
                                class or interface.

        self                    The value must be an 
                                instanceof the same 
                                class as the one in 
                                which the type 
                                declaration is used. 
                                Can only be used 
                                in classes.

        parent                  The value must be an 
                                instanceof the parent 
                                of the class in which 
                                the type declaration 
                                is used. Can only be 
                                used in classes.

        array                   The value must be 
                                an array.

        callable                The value must be a 
                                valid callable. 
                                Cannot be used as a 
                                class property type 
                                declaration.

        bool                    The value must be 
                                a boolean value.

        float                   The value must be 
                                a floating point number.

        int                     The value must be 
                                an integer.

        string                  The value must be 
                                a string.

        iterable                The value must be 
                                either an array or an 
                                instanceof Traversable. 
                                PHP 7.1.0 

        object                  The value must be 
                                an object. 
                                PHP 7.2.0

        mixed                   The value can be 
                                any value.
                                PHP 8.0.0

        */

        $tmp_exception_bypass = false;

        if(!isset($data_authorization_profile)){

            $data_authorization_profile = CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME;

        }

        if(!isset($env_key)){

            $env_key = CRNRSTN_RESOURCE_ALL;

        }

        if(!isset($ttl)){

            $ttl = $this->cache_ttl_default;

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * CLR-SSL Initialization 
         * Resource Spool Management. 
         *
         */
        if(($spool_resource !== false) || 
            (self::$spool_resource_override !== false) || 
            (self::$ddo_config_ugc_input_audit !== false))
        {

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * CLR-SSL Multi-Channel Decoupled
             * Data Object (MC-DDO) Input Spooling
             * Services Layer.
             *
             * Before the DDO is ready (e.g. see
             * CLR-SSL MC-DDO use in crnrstn->_construct()),
             * it will be necessary to 1) spool any
             * collected MC-DDO configuration 
             * resources and 2) make the spooled 
             * input parameter data to be 
             * accessible through the MC-DDO until 
             * the MC-DDO is able to replay the 
             * data capture spool and begin bearing
             * all runtime data read/write 
             * responsibilities. 
             *
             * The MC-DDO input spool will be 
             * deleted once contents contained 
             * therein can be replayed to 
             * the MC-DDO. 
             *
             * This will also facilitate auditing 
             * CLR-SSL runtime input performance, 
             * data handling behavior, and 
             * framework resource requirements. 
             *
             * Clearing the system spool:
             * -----
             * The CLR-SSL system settings call of 
             * config_load_spool_system_init_resources().
             *
             * See, 
             * /_R/_config/_config.defaults/_crnrstn.system_settings.inc.php
             *
             * This will (1) process all spooled UGC 
             * input resources into the CLR-SSL MC-DDO 
             * Services Layer and (2) deactivate the
             * initialized = on state of $spool_resource_override,
             * the master control toggle override for the
             * CLR-SSL Resource Initialization Spool. 
             *
             * The above will process spooled input datum, 
             * turn off input spooling, and send 
             * all data to the MC-DDO moving forward. 
             *
             * # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * CLR-SSL Multi-Channel Decoupled 
             * Data Object (MC-DDO) Input Spooling. 
             *
             *
             * 5 :: Tuesday, November 7, 2023 @ 2040 hrs.
             *
             */
            $this->spool_ddo_input_data(
                   $data_profile, 
                   $data, 
                   $data_key, 
                   $data_type_family, 
                   $index, 
                   $data_authorization_profile, 
                   $ttl, 
                   $env_key);

            return true;

        }

        $tmp_force_data_err = false;
        $tmp_force_data_err_msg = $tmp_err_str = '';
        $tmp_ARRAY = array();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Maybe leave this redundancy? 
         * 
         * Support string manipulations.
         *
         *
         * 5 :: Wednesday, October 11, 2023 @ 2348 hrs.
         *
         */
        $tmp_data = $data;

        switch($data_profile){
            case 'os_bit_size':

                $tmp_os_bit_size = $data;

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Receive and/or 
                 * force a pure integer. 
                 *
                 */
                if(!is_int($data)){

                    $tmp_int = (int) $data;
                    $tmp_os_bit_size = $tmp_int * 1;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Guarantee 32 
                 * or 64. 
                 *
                 */
                switch($tmp_os_bit_size){
                    case 32:

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * CRNRSTN :: only works 
                         * in integers. 
                         *
                         * "LETTERS...?
                         * ...WHAT ARE LETTERS?"
                         *
                         * - CRNRSTN :: Lightsaber. Friday, September 29, 2023 @ 1133 hrs.
                         *
                         */
                        $tmp_int = $tmp_os_bit_size;

                    break;
                    default:
                        //case 64:

                        $tmp_int = 64;

                    break;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * This final check 
                 * should be fine. 
                 *
                 */
                if(!($tmp_int > 30)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data validation 
                     * error message [OS BIT SIZE]
                     *
                     *
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    $this->err_message_queue_push(
                                     NULL, 
                                     'CRNRSTN :: could not apply the ' . 
                                     $data_key .
                                     ', (' . 
                                     $this->gettype($tmp_int) . ') ' . 
                                     strval($tmp_int) . '. ' . 
                                     strval($data) .
                                     ', was the value that was provided ' . 
                                     'as method input to this environment. ' .
                                     $this->data_report(
                                                      $data, 
                                                      'CRNRSTN :: MC-DDO UGC Input Data Report'));

                    return NULL;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * The CRNRSTN :: Lightsaber 
                 * RoCEv2 SOAP Services Layer 
                 * (CLR-SSL) Multi-Channel 
                 * Decoupled Data Object 
                 * (MC-DDO) Data Storage 
                 * Services Layer. 
                 *
                 * The CLR-SSL MC-DDO 
                 * Services Layer. 
                 *
                 *
                 * 5
                 *
                 * CLR-SSL UGC data 
                 * input [OS BIT SIZE]
                 *
                 */
                $this->input_data_value(
                       $tmp_int, 
                       $data_key, 
                       $data_type_family, 
                       $index, 
                       $data_authorization_profile, 
                       $ttl, 
                       $spool_resource, 
                       $env_key);

            break;

            case 'bit':
            //case '__construct_bit':   //        Moved to case '__construct_mixed':
            case 'config_set_ui_theme_style_bit':
            case 'config_init_sys_resp_return_profile_bit':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CLR-SSL UGC data 
                 * input standardization [BIT]
                 *
                 */
                if(is_string($data)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Letters?
                     *
                     */
                    if(!is_numeric($data)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Because $tmp_data is 
                         * initialized with $data 
                         * above, we can lazy update. 
                         *
                         */
                        $tmp_data = $this->return_int_const_profile($data, CRNRSTN_INTEGER);

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * This should 
                 * be a number. 
                 *
                 */
                if(is_numeric($tmp_data)){

                    $tmp_int = (int) $data;

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * It would certainly appear 
                     * that this is not a valid 
                     * number for the 
                     * requested operation. 
                     *
                     * We shall run a genuinely 
                     * invalid calculation and 
                     * use the system error that 
                     * is generated to clearly 
                     * communicate that the input 
                     * datum is an "invalid number". 
                     *
                     * This may be the only way 
                     * that an application which 
                     * absolutely loves numbers as 
                     * much as the CRNRSTN :: 
                     * Lightsaber RoCEv2 SOAP 
                     * Services Layer (CLR-SSL) 
                     * loves numbers would be able 
                     * to produce a respectable 
                     * error message on this, the 
                     * subject matter. 
                     * 
                     * And the CLR-SSL has really 
                     * been loving the numbers 
                     * lately, man. We happily pay 
                     * the price ($$$) of compute 
                     * to acquire an authentic NAN 
                     * (not a number), real bad data. 
                     *
                     * We buy a properly shit value 
                     * that can be consistently 
                     * and reliably returned with 
                     * confidence by the CLR-SSL. 
                     *
                     * And all this...even in the 
                     * midst of "these economic 
                     * times", at that! 
                     *
                     * CRNRSTN :: <3's... 
                     * ...(int) CRNRSTN_INTEGER 4 LIFE! 
                     *
                     *
                     * 5 :: Monday, December 4, 2023 @ 1117 hrs.
                     * Last Modified: Friday, February 27, 2026 @ 0151 hrs.
                     *
                     * See, https://www.php.net/manual/en/function.is-nan.php
                     *
                     */
                    $tmp_int = sqrt(-1);

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CLR-SSL UGC data 
                 * validation [BIT]
                 *
                 */
                switch($data_profile){
                    case 'config_init_sys_resp_return_profile_bit':
                        //$system_asset_mode

                        /*
                         * $oCRNRSTN->config_init_sys_resp_return_profile($env_key = CRNRSTN_RESOURCE_ALL, $system_asset_mode = CRNRSTN_MODE_BASE64)
                         * DESCRIPTION :: Configure the HTML email image handling profile for CRNRSTN :: system notifications.
                         * OPTIONS ::
                         * CRNRSTN_MODE_PNG:      ALL CRNRSTN :: system images load the PNG versions of the file.
                         * CRNRSTN_MODE_JPEG:     ALL CRNRSTN :: system images load the JPG version of the file.
                         * CRNRSTN_MODE_BASE64:   ALL CRNRSTN :: system images and all CRNRSTN :: integrated 3rd
                         *                              party JS Frameworks and CSS Frameworks load as embedded BASE64,
                         *                              SCRIPT, and STYLE tags...respectively...within the HTML. This
                         *                              makes mobile and tablet FAAAASST!
                         *
                         * Note: Please note that any one-off 
                         * system image method call within the 
                         * application can override these 
                         * global configuration asset mode 
                         * settings for BASE64, PNG, JPEG, or 
                         * GIF resource return executions 
                         * within the application. 
                         *
                         */

                        if(!($this->system_isset_output_profile_constants($tmp_int) == true)){

                            $tmp_int = $this->return_R_image_output_mode();

                            $tmp_force_data_err = true;
                            $tmp_force_data_err_msg = 'The requested CRNRSTN :: system ' . 
                                                      'response return profile, ' .
                                                      strval($data) . 
                                                      ', could not be found. The system ' . 
                                                      'output profile has manually been set to ' .
                                                      $this->return_constant_profile_ARRAY(
                                                                       $tmp_int, 
                                                                       CRNRSTN_STRING) . '. ' .
                                                      $this->data_report(
                                                                       $data, 
                                                                       'CRNRSTN :: MC-DDO UGC Input Data Report');

                        }

                    break;
                    case 'config_set_ui_theme_style_bit':
                        /*
                         * Validation will 
                         * happen below.
                         *
                         */
                    break;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CLR-SSL UGC data 
                 * input [BIT]
                 *
                 */
                switch($data_profile){
                    case 'config_set_ui_theme_style_bit':
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * 5 :: Sunday, October 8, 2023 @ 1304 hrs.
                         *
                         *
                         * CRNRSTN :: Icy Digital ITCC 
                         * Bitmask Integer State (Bit Flip) 
                         * Management Services Layer. 
                         *
                         * CLR-SSL UGC data input [ICY_DIGITALITCC-BITMASK]
                         *
                         * 5 :: Friday, October 13, 2023 @ 2310 hrs.
                         *
                         * From Icy, Digital ITCC:
                         * Infinite* bits and bit 
                         * handling in general.
                         *
                         * *Not infinite, sorry.
                         *
                         * Perceivably, the only limit 
                         * to the bitmask class in storing 
                         * bits would be the maximum limit 
                         * of the index number, on 32 bit 
                         * integer systems 2^31 - 1,
                         *
                         * so 2^31 * 31 - 1 = 66571993087 bits, 
                         *
                         * assuming floats are 64 bit 
                         * or something.
                         *
                         * I'm sure that's enough bits for 
                         * anything...I hope :D.
                         *
                         * icy at digitalitcc dot com
                         * https://www.php.net/manual/en/language.operators.bitwise.php
                         * https://www.php.net/manual/en/language.operators.bitwise.php#50299
                         * 
                         */

                        $tmp_valid_theme = false;
                        if(is_nan($tmp_int)){

                            $tmp_force_data_err = true;

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Default theme 
                             * data on input 
                             * data error. 
                             *
                             */
                            $tmp_int = $this->get_resource(
                                              'default_interact_ui_theme', 
                                              0, 
                                              'CRNRSTN::RESOURCE::DEFAULT_THEME');

                            //if($this->system_isset_theme_style_profile_constant($tmp_int) == true){
                            if($this->isset_crnrstn(
                                      'system_isset_theme_style_profile_constant', 
                                      $tmp_int) == true)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Graceful degradation 
                                 * to settings default. 
                                 *
                                 */
                                $tmp_err_str = 'CRNRSTN :: does not recognize ' . 
                                               'the provided INTERACT UI client theme, ' .
                                               strval($data) . ' [' . 
                                               strval($tmp_int) .
                                               ']. A theme has been taken from ' . 
                                               'configuration settings; it will ' . 
                                               'be manually set to, ' .
                                               $this->return_constant_profile_ARRAY(
                                                      $tmp_int, 
                                                      CRNRSTN_STRING) . '. ' .
                                               $this->data_report(
                                                      $data, 
                                                      'CRNRSTN :: MC-DDO UGC Input Data Report');

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Load CRNRSTN :: INTERACT UI 
                                 * theme resource configuration 
                                 * data from file. 
                                 *
                                 */
                                $this->apply_theme_style_profile($tmp_int);

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * CRNRSTN :: Icy Digital ITCC Bitmask 
                                 * Integer State (Bit Flip) Management 
                                 * Services Layer. 
                                 *
                                 *
                                 * CLR-SSL UGC data 
                                 * input [ICY_DIGITALITCC-BITMASK]
                                 *
                                 */
                                $this->initialize_bit($tmp_int, true);

                            }else{

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * CRNRSTN :: Graceful Degradation 
                                 *
                                 * Blind theme selection 
                                 * from system memory. 
                                 *
                                 * Korn - Blind (Official HD Video)
                                 * https://www.youtube.com/watch?v=SGK00Q7xx-s
                                 *
                                 *
                                 * 5 :: Saturday, December 2, 2023 @ 0430 hrs.
                                 *
                                 *$tmp_apply_theme_style_profile_ARRAY = $this->oCRNRSTN->return_theme_style_profile_ARRAY();
                                 *
                                 */
                                $tmp_apply_theme_style_profile_ARRAY = $this->get_crnrstn('system_theme_style_constants_ARRAY');
                                foreach($tmp_apply_theme_style_profile_ARRAY as 
                                    $int_const_index => $int_const_int)
                                {

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Load CRNRSTN :: INTERACT UI 
                                     * theme resource configuration 
                                     * data from file. 
                                     *
                                     */
                                    $this->apply_theme_style_profile($int_const_index, NULL);

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CRNRSTN :: Icy Digital ITCC Bitmask 
                                     * Integer State (Bit Flip) Management 
                                     * Services Layer. 
                                     *
                                     *
                                     * CLR-SSL UGC data 
                                     * input [ICY_DIGITALITCC-BITMASK]
                                     *
                                     */
                                    $this->initialize_bit($int_const_index, true);

                                    break 1;

                                }

                                $tmp_err_str = 'CRNRSTN :: does not recognize ' . 
                                               'the provided INTERACT UI client theme, ' .
                                               \strval($data) . ' [' . 
                                               \strval($tmp_int) . 
                                               '].  The theme will be manually set to, ' .
                                               $this->return_constant_profile_ARRAY(
                                                      $int_const_index, 
                                                      CRNRSTN_STRING) . '. ' .
                                               $this->data_report(
                                                      $data, 
                                                      'CRNRSTN :: MC-DDO UGC Input Data Report');

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * CRNRSTN :: UGC DATA INPUT 
                                 * EXCEPTION [BIT] 
                                 *
                                 *
                                 * HOOOSTON, VE HAFF PROBLEM!
                                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                                 *
                                 */
                                $this->err_message_queue_push(
                                       NULL, 
                                       $tmp_err_str);

                                return NULL;

                            }

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * We have a 
                             * valid number. 
                             * 
                             *if($this->oCRNRSTN->system_isset_theme_style_profile_constant($tmp_int) == true){
                             *
                             */
                            if($this->isset_crnrstn(
                                      'system_isset_theme_style_profile_constant', 
                                      $tmp_int) == true)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Load CRNRSTN :: INTERACT UI 
                                 * theme resource configuration 
                                 * data from file. 
                                 *
                                 */
                                $this->apply_theme_style_profile($tmp_int);

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * CRNRSTN :: Icy Digital ITCC Bitmask 
                                 * Integer State (Bit Flip) Management 
                                 * Services Layer. 
                                 * 
                                 * 
                                 * CLR-SSL UGC data 
                                 * input [ICY_DIGITALITCC-BITMASK]
                                 *
                                 */
                                $this->initialize_bit($tmp_int, true);

                            }else{

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Default theme data 
                                 * on input data error. 
                                 *
                                 */
                                $tmp_default_interact_ui_theme = $this->get_resource(
                                                                        'default_interact_ui_theme', 
                                                                        0, 
                                                                        'CRNRSTN::RESOURCE::DEFAULT_THEME');
                                /**
                                 *if($this->oCRNRSTN->system_isset_theme_style_profile_constant($tmp_default_interact_ui_theme) == true){
                                 *
                                 */
                                if($this->isset_crnrstn(
                                          'system_isset_theme_style_profile_constant', 
                                          $tmp_int) == true)
                                {

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Graceful degradation 
                                     * to settings default. 
                                     *
                                     */
                                    $tmp_err_str = 'CRNRSTN :: does not recognize ' . 
                                                   'the provided INTERACT UI client theme, ' .
                                                   strval($data) . ' [' . 
                                                   strval($tmp_int) . 
                                                   ']. A theme has been taken from ' . 
                                                   'configuration settings; it will ' . 
                                                   'be manually set to, ' .
                                                   $this->return_constant_profile_ARRAY(
                                                          $tmp_default_interact_ui_theme, 
                                                          CRNRSTN_STRING) . '. ' .
                                                          $this->data_report(
                                                                 $data, 
                                                                 'CRNRSTN :: MC-DDO UGC Input Data Report');

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Load the CRNRSTN :: INTERACT UI 
                                     * theme resource configuration 
                                     * data from file. 
                                     *
                                     */
                                    $this->apply_theme_style_profile($tmp_default_interact_ui_theme);

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CRNRSTN :: Icy Digital Itcc Bitmask 
                                     * Integer State (Bit Flip) Management 
                                     * Services Layer. 
                                     *
                                     *
                                     * CLR-SSL UGC data 
                                     * input [ICY_DIGITALITCC-BITMASK]
                                     *
                                     */
                                    $this->initialize_bit(
                                           $tmp_default_interact_ui_theme, 
                                           true);

                                }else{

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CRNRSTN :: Graceful Degradation. 
                                     *
                                     * Blind theme selection from 
                                     * system memory. 
                                     *
                                     * Korn - Blind (Official HD Video)
                                     * https://www.youtube.com/watch?v=SGK00Q7xx-s
                                     *
                                     * 
                                     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Edit: Replaced use of 
                                     *       $tmp_apply_theme_style_profile_ARRAY = $this->oCRNRSTN->return_theme_style_profile_ARRAY();
                                     *
                                     * Where,
                                     * function return_theme_style_profile_ARRAY(){
                                     *
                                     *     return self::$system_theme_style_constants_ARRAY;
                                     * 
                                     * }
                                     *
                                     *
                                     * 5 :: Saturday, December 2, 2023 @ 0428 hrs.
                                     *
                                     */
                                    $tmp_apply_theme_style_profile_ARRAY = $this->get_crnrstn('system_theme_style_constants_ARRAY');

                                    foreach($tmp_apply_theme_style_profile_ARRAY as 
                                        $int_const_index => $int_const_int)
                                    {

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * Load CRNRSTN :: INTERACT UI 
                                         * theme resource configuration 
                                         * data from file. 
                                         *
                                         */
                                        $this->apply_theme_style_profile($int_const_index);

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * CRNRSTN :: Icy Digital ITCC Bitmask 
                                         * Integer State (Bit Flip) Management 
                                         * Services Layer. 
                                         *
                                         *
                                         * CLR-SSL UGC data 
                                         * input [ICY_DIGITALITCC-BITMASK]
                                         *
                                         */
                                        $this->initialize_bit(
                                               $int_const_index, 
                                               true);

                                        break 1;

                                    }

                                    $tmp_err_str = 'CRNRSTN :: does not recognize ' . 
                                                   'the provided INTERACT UI client theme, ' .
                                                   strval($data) . ' [' . 
                                                   strval($tmp_int) . 
                                                   ']. The theme has been manually set to, ' .
                                                   $this->return_constant_profile_ARRAY(
                                                          $int_const_index, 
                                                          CRNRSTN_STRING) . '. ' .
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CLR-SSL UGC data input 
                                     * exception [BIT] 
                                     *
                                     *
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    $this->err_message_queue_push(
                                           NULL, 
                                           $tmp_err_str);

                                    return NULL;

                                }

                            }

                        }

                    break;
                    case '__construct_bit':
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * 5 :: Sunday, October 15, 2023 @ 0747 hrs.
                         *
                         *
                         * Set CRNRSTN :: Log Silo profile.
                         *
                         * CRNRSTN :: Icy Digital ITCC 
                         * Bitmask Integer State (Bit Flip) 
                         * Management Services Layer. 
                         *
                         * CLR-SSL UGC data 
                         * input [ICY_DIGITALITCC-BITMASK]
                         *
                         */
                        $this->set_crnrstn(
                               'log_silo_profile', 
                               $tmp_int);

                    break;
                    default:

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * CRNRSTN :: Icy Digital ITCC 
                         * Bitmask Integer State (Bit Flip) 
                         * Management Services Layer. 
                         *
                         * CLR-SSL UGC data 
                         * input [ICY_DIGITALITCC-BITMASK]
                         *
                         */
                        $this->initialize_bit(
                               $tmp_int, 
                               true);

                    break;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CLR-SSL UGC data 
                 * validation error 
                 * message [BIT] 
                 *
                 */
                if(is_nan($tmp_int) || 
                    ($tmp_force_data_err == true))
                {

                    switch($data_profile){
                        case 'config_init_sys_resp_return_profile_bit':
                            //$system_asset_mode

                            $tmp_err_str = $tmp_force_data_err_msg;

                        break;
                        case 'config_set_ui_theme_style_bit':

                            $tmp_err_str = 'CRNRSTN :: could not flip the bit, ' . 
                                           $data_key . '[(' .
                                           $this->gettype($tmp_int) . ') ' . 
                                           strval($tmp_int) .
                                           '], which supports selection of the ' . 
                                           'default CRNRSTN :: INTERACT UI Theme ' . 
                                           'for this environment. ' .
                                           strval($data) . 
                                           ', was the value that was provided as ' . 
                                           'method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report') . ' ' . 
                                                  $tmp_force_data_err_msg;

                        break;
                        default:
                            //case 'bit':

                            $tmp_err_str = 'CRNRSTN :: could not flip the bit, ' . 
                                           $data_key . '[(' .
                                           $this->gettype($tmp_int) . ') ' .
                                           strval($tmp_int) . 
                                           '], which supports this environment. ' . 
                                           strval($data) .
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data input 
                     * exception [BIT] 
                     *
                     *
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    $this->err_message_queue_push(
                           NULL, 
                           $tmp_err_str);

                    return NULL;

                }

            break;

            case '__construct_datetime':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Let us put a "laser line" 
                 * down on the string data 
                 * type requirement as we 
                 * put a "laser line" down 
                 * on the [datetime] data 
                 * type requirement. 
                 *
                 */
                $tmp_datetime = strval($data);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * The CRNRSTN :: Lightsaber 
                 * RoCEv2 SOAP Services Layer 
                 * (CLR-SSL) Multi-Channel 
                 * Decoupled Data Object 
                 * (MC-DDO) Data Storage 
                 * Services Layer. 
                 *
                 * The CLR-SSL MC-DDO 
                 * Services Layer. 
                 *
                 * 5
                 *
                 * CLR-SSL UGC data 
                 * input [DATETIME]
                 *
                 */
                $this->input_data_value(
                       $tmp_datetime, 
                       $data_key, 
                       $data_type_family, 
                       $index, 
                       $data_authorization_profile, 
                       $ttl, 
                       $spool_resource, 
                       $env_key);

            break;

            case 'string':
            case '__construct_string':
            case 'is_mobile_string':
            case 'is_tablet_string':
            case 'is_desktop_string':
            case 'config_init_http_string':
            case 'config_init_asset_map_favicon_string':
            case 'config_init_asset_map_css_string':
            case 'config_init_asset_map_js_string':
            case 'config_init_asset_map_system_img_string':
            case 'config_init_asset_map_social_img_string':
            case 'config_init_asset_map_meta_img_string':
            case 'initialize_apache_profile_string':
            case 'initialize_linux_profile_string':
            case 'initialize_openssl_profile_string':
            case 'initialize_php_profile_string':
            case 'version_soap_string':
            case 'soap_defencoding_string':
            case 'return_crnrstn_mysqli_string':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * TODO :: Consider validation for 
                 *         php_profile, openssl_profile, 
                 *         linux_profile, apache_profile, 
                 *         etc...
                 *
                 */
                $tmp_empty_string_auth_ARRAY = array(
                    'config_init_asset_map_favicon_string'     => 1, 
                    'config_init_asset_map_css_string'         => 1,
                    'config_init_asset_map_js_string'          => 1, 
                    'config_init_asset_map_system_img_string'  => 1,
                    'config_init_asset_map_social_img_string'  => 1, 
                    'config_init_asset_map_meta_img_string'    => 1,
                    'initialize_apache_profile_string'         => 1, 
                    'initialize_linux_profile_string'          => 1,
                    'initialize_openssl_profile_string'        => 1, 
                    'initialize_php_profile_string'            => 1,
                    'version_soap_string'                      => 1, 
                    'soap_defencoding_string'                  => 1,
                    'return_crnrstn_mysqli_string'             => 1);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Let us put a 
                 * "laser line" down 
                 * on the string data 
                 * type requirement. 
                 *
                 *
                 * 5
                 *
                 * Thursday, November 30, 2023 @ 0300 hrs.
                 *
                 */
                $tmp_str = strval($data);

                $tmp_str_len = strlen($tmp_str);
                if(($tmp_str_len < 1) && !isset($tmp_empty_string_auth_ARRAY[$data_profile])){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data 
                     * validation error 
                     * message [STRING]
                     *
                     */
                    switch($data_profile){
                        case 'is_mobile_string':
                        case 'is_tablet_string':
                        case 'is_desktop_string':

                            $tmp_err_str = 'CRNRSTN :: could not identify ' . 
                                           'the device type name for the ' . 
                                           'current client connection from, ' .
                                           $data_key . ', (' . 
                                           $this->gettype($tmp_str) . ') ' . 
                                           strval($tmp_str) . '. ' . 
                                           strval($data) .
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_init_asset_map_favicon_string':
                        case 'config_init_asset_map_css_string':
                        case 'config_init_asset_map_js_string':
                        case 'config_init_asset_map_system_img_string':
                        case 'config_init_asset_map_social_img_string':
                        case 'config_init_asset_map_meta_img_string':

                            $tmp_pattern_ARRAY = array('config_init_asset_map_', '_string', '_');
                            $tmp_replacements_ARRAY = array('', '', ' ');

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * This is some CRNRSTN :: 
                             * Lightsaber RoCEv2 SOAP Services 
                             * Layer (CLR-SSL) screen scraping 
                             * kit that uses basic string 
                             * parsing to get a handle 
                             * on the channel name prefix 
                             * for business purposes. 
                             *
                             * We are not working with 
                             * numbers here, boys. 
                             *
                             *
                             * 5 ::
                             *
                             * Thursday, November 30, 2023 @ 0311 hrs.
                             *
                             * 311 - Come Original
                             * https://www.youtube.com/watch?v=KWo-02Hsab4
                             *
                             */
                            $tmp_asset_type = $this->extract_key_from_string(
                                                     $data_profile, 
                                                     '', 
                                                     false, 
                                                     $tmp_pattern_ARRAY, 
                                                     $tmp_replacements_ARRAY);

                            $tmp_err_str = 'CRNRSTN :: could not receive ' . 
                                           $data_key .
                                           ' input meta supporting ' . 
                                           'configuration of the ' . 
                                           'CRNRSTN :: RRS MAP ' .
                                           strtoupper($tmp_asset_type) . 
                                           ' asset mapping architecture. ' . 
                                           strval($data) .
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_init_http_string':

                            $tmp_err_str = 'CRNRSTN :: could not add ' . 
                                           'the environmental configuration ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_str) . ') ' . 
                                           strval($tmp_str) . '. ' . 
                                           strval($data) .
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'return_crnrstn_mysqli_string':

                            $tmp_err_str = 'CRNRSTN :: could not set ' . 
                                           'the MySQLi database ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_str) . ') ' .
                                           strval($tmp_str) . '. ' . 
                                           strval($data) .
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'version_soap_string':
                        case 'soap_defencoding_string':

                            $tmp_err_str = 'CRNRSTN :: could not set the SOAP ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_str) . ') ' .
                                           strval($tmp_str) . '. ' . 
                                           strval($data) .
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case '__construct_string':
                            //version_crnrstn

                            $tmp_err_str = 'CRNRSTN :: could not set ' . 
                                           'the configuration ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_str) . ') ' .
                                           strval($tmp_str) . '. ' . 
                                           strval($data) .
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        default:
                            //case 'string':

                            $tmp_err_str = 'CRNRSTN :: could not apply the ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_str) . ') ' .
                                           strval($tmp_str) . '. ' . 
                                           strval($data) .
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data input 
                     * exception [STRING] 
                     *
                     *
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    $this->err_message_queue_push(
                           NULL, 
                           $tmp_err_str);

                    return NULL;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * The CRNRSTN :: Lightsaber 
                 * RoCEv2 SOAP Services Layer 
                 * (CLR-SSL) Multi-Channel 
                 * Decoupled Data Object 
                 * (MC-DDO) Data Storage 
                 * Services Layer. 
                 *
                 * The CLR-SSL MC-DDO 
                 * Services Layer. 
                 *
                 *
                 * 5
                 *
                 * CLR-SSL UGC data 
                 * input [STRING]
                 *
                 */
                $this->input_data_value(
                       $tmp_str, 
                       $data_key, 
                       $data_type_family, 
                       $index, 
                       $data_authorization_profile, 
                       $ttl, 
                       $spool_resource, 
                       $env_key);

            break;

            case 'int':
            case 'integer':
            case 'electrum_integer':
            case 'wethrbug_integer':
            case '__construct_integer':
            case 'is_mobile_integer':
            case 'is_tablet_integer':
            case 'is_desktop_integer':
            //case 'config_add_environment_integer':            // Moved to case 'config_add_environment_integer_mode':
            case 'config_data_authorization_profile_integer':
            case 'config_init_channel_integer':
            case 'config_init_sys_resp_return_profile_integer':
            case 'system_output_head_html_integer':
            case 'system_output_footer_html_integer':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * This should 
                 * be a number. 
                 *
                 */
                if(is_numeric($data)){

                    $tmp_int = (int) $data;

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * It would certainly appear 
                     * that this is not a valid 
                     * number for the 
                     * requested operation. 
                     *
                     * We shall run a genuinely 
                     * invalid calculation and 
                     * use the system error that 
                     * is generated to clearly 
                     * communicate that the input 
                     * datum is an "invalid number". 
                     *
                     * This may be the only way 
                     * that an application which 
                     * absolutely loves numbers as 
                     * much as the CRNRSTN :: 
                     * Lightsaber RoCEv2 SOAP 
                     * Services Layer (CLR-SSL) 
                     * loves numbers would be able 
                     * to produce a respectable 
                     * error message on this, the 
                     * subject matter. 
                     * 
                     * And the CLR-SSL has really 
                     * been loving the numbers 
                     * lately, man. We happily pay 
                     * the price ($$$) of compute 
                     * to acquire an authentic NAN 
                     * (not a number), real bad data. 
                     *
                     * We buy a properly shit value 
                     * that can be consistently 
                     * and reliably returned with 
                     * confidence by the CLR-SSL. 
                     *
                     * And all this...even in the 
                     * midst of "these economic 
                     * times", at that! 
                     *
                     * CRNRSTN :: <3's... 
                     * ...(int) CRNRSTN_INTEGER 4 LIFE! 
                     *
                     *
                     * 5 :: Monday, December 4, 2023 @ 1117 hrs.
                     * Last Modified: Friday, February 27, 2026 @ 0151 hrs.
                     *
                     * See, https://www.php.net/manual/en/function.is-nan.php
                     *
                     */
                    $tmp_int = sqrt(-1);

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * -1 = Operating
                 *      system restricted.
                 *
                 * TODO :: Re-implement 
                 *         "-1 = operating 
                 *         system restricted" 
                 *         validation. 
                 *
                 *
                 *         5
                 *
                 *         Friday October 13, 2023 @ 2251 hrs.
                 *
                 *if((!($tmp_int == -1) && ($tmp_int < 0)) || 
                 *    is_nan($tmp_int))
                 *{
                 *
                 */
                if(is_nan($tmp_int)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data 
                     * validation error 
                     * message [INTEGER]
                     *
                     */
                    switch($data_profile){
                        case 'system_output_head_html_integer':
                        case 'system_output_footer_html_integer':

                            switch($data_key){
                                case 'is_mobile_integer':
                                case 'is_tablet_integer':
                                case 'is_desktop_integer':

                                    $tmp_err_str = 'CRNRSTN :: could not identify ' . 
                                                   'the device type integer for ' . 
                                                   'the current client connection, (' .
                                                   $this->gettype($tmp_int) . ') ' . 
                                                   strval($tmp_int) . '. ' . 
                                                   strval($data) .
                                                   ', was the value provided. ' . 
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;
                                case 'crnrstn_head_resource_html_output_spool':

                                    $tmp_err_str = 'CRNRSTN :: could not identify ' . 
                                                   'the resource to spool for HTML ' . 
                                                   '<HEAD> output with the input, (' .
                                                   $this->gettype($tmp_int) . ') ' . 
                                                   strval($tmp_int) . '. ' . 
                                                   strval($data) .
                                                   ', was the value provided. ' . 
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;
                                case 'crnrstn_head_resource_html_output_build_acceleration_spool':

                                    $tmp_err_str = 'CRNRSTN :: BUILD ACCELERATION ' . 
                                                   'could not identify the resource ' . 
                                                   'to spool for HTML output with the input, (' .
                                                   $this->gettype($tmp_int) . ') ' . 
                                                   strval($tmp_int) . '. ' . 
                                                   strval($data) .
                                                   ', was the value provided. ' . 
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;
                                case 'crnrstn_footer_resource_html_output_spool':

                                    $tmp_err_str = 'CRNRSTN :: could not identify ' . 
                                                   'the resource to spool for HTML ' . 
                                                   'footer output with the input, (' .
                                                   $this->gettype($tmp_int) . ') ' . 
                                                   strval($tmp_int) . '. ' . 
                                                   strval($data) .
                                                   ', was the value provided. ' . 
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;

                            }

                        break;
                        case 'config_data_authorization_profile_integer':

                            $tmp_err_str = 'CRNRSTN :: could not set the ' . 
                                           'default data authorization ' . 
                                           'profile using the data,' .
                                           strval($tmp_int) . 
                                           '. The system will revert to ' . 
                                           'the default, CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME[' .
                                           strval(CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME) . ']. ' . 
                                           strval($data) .
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [INTEGER]
                             *
                             */
                            $this->input_data_value(
                                   CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME, 
                                   $data_key, 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);

                        break;
                        case 'config_init_channel_integer':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * This is some CRNRSTN :: 
                             * Lightsaber RoCEv2 SOAP Services 
                             * Layer (CLR-SSL) screen scraping 
                             * kit that uses basic string 
                             * parsing to get a handle 
                             * on the channel name prefix 
                             * for business purposes. 
                             *
                             * We are not working with 
                             * numbers here, boys. 
                             *
                             *
                             * 5
                             *
                             * Thursday, November 30, 2023 @ 0311 hrs.
                             *
                             * 311 - Come Original
                             * https://www.youtube.com/watch?v=KWo-02Hsab4
                             *
                             */
                            $tmp_channel = $this->extract_key_from_string(
                                                  $data_key, 
                                                  '_ttl');

                            $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                           'the CRNRSTN :: RRS MAP channel [' . 
                                           $tmp_channel . '] ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_int) . ') ' . 
                                           strval($tmp_int) . '. ' . 
                                           strval($data) .
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_init_sys_resp_return_profile_integer':
                        case '__construct_integer':

                            /**
                            R_debug_mode
                            PHPMailer_debug_mode

                            */

                            $tmp_exception_bypass = true;

                        break;
                        case 'wethrbug_integer':

                            $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                           'the CRNRSTN :: WETHRBUG ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_int) . ') ' . 
                                           strval($tmp_int) . '. ' . 
                                           strval($data) .
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'electrum_integer':

                            $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                           'the CRNRSTN :: ELECTRUM ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_int) . ') ' . 
                                           strval($tmp_int) . '. ' . 
                                           strval($data) .
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        default:
                            //case 'integer':
                            //case 'int':

                            $tmp_err_str = 'CRNRSTN :: could not apply the ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_int) . ') ' . 
                                           strval($tmp_int) . '. ' . 
                                           strval($data) .
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CRNRSTN :: UGC  [INTEGER] 
                     *
                     *
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    if(!($tmp_exception_bypass !== false)){

                        $this->err_message_queue_push(
                               NULL, 
                               $tmp_err_str);

                        return NULL;

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CLR-SSL UGC data 
                 * validation [INTEGER]
                 *
                 */
                switch($data_key){
                    case 'R_debug_mode':

                        $tmp_int = $this->return_valid_constant(
                                          $tmp_int, 
                                          'R_debug_mode_ARRAY', 
                                          CRNRSTN_DEBUG_OFF);
                        $this->set_crnrstn(
                               'R_debug_mode', 
                               $tmp_int);

                    break;
                    case 'PHPMailer_debug_mode':
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Edit: Changed 'crnrstn_debug_mode_ARRAY' 
                         *       input to 'PHPMAILER_debug_mode'.
                         *       5 :: Saturday, June 20, 2026 @ 0403 hrs.
                         *
                         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Edit: Changed 'PHPMAILER_debug_mode' 
                         *       input to 'PHPMailer_debug_mode'.
                         *       5 :: Thursday, August 6, 2026 @ 2223 hrs.
                         *
                         */

                        $tmp_int = $this->return_valid_constant(
                                          $tmp_int, 
                                          'PHPMailer_debug_mode', 
                                          CRNRSTN_PHPMAILER_DEBUG_OFF);

                    break;
                    default:
                        /**
                         * SILENCE IS GOLDEN. 
                         *
                         *error_log(
                         *    __LINE__ . ' ' . 
                         *    __METHOD__ . ' UNKNOWN SWITCH ' . 
                         *    'CASE $data_key[' . 
                         *    $data_key . ']. $data_profile[' . 
                         *    $data_profile . 
                         *    '].');
                         *
                         */

                    break;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CLR-SSL UGC data 
                 * input [INTEGER]
                 *
                 */
                switch($data_profile){
                    /**
                     *case '__construct_integer':              // Moved to [BIT].
                     *case 'config_add_environment_integer':   // Moved to case 'config_add_environment_integer_mode':
                     *
                     */
                    case 'config_init_channel_integer':

                        switch($data_key){
                            case 'get_ttl':
                            case 'post_ttl':
                            case 'cookie_ttl':
                            case 'session_ttl':
                            case 'database_ttl':
                            case 'ssdtla_ttl':
                            case 'pssdtla_ttl':
                            case 'runtime_ttl':
                            case 'soap_ttl':
                            case 'file_ttl':

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * This is some CRNRSTN :: 
                                 * Lightsaber RoCEv2 SOAP Services 
                                 * Layer (CLR-SSL) screen scraping 
                                 * kit that uses basic string 
                                 * parsing to get a handle 
                                 * on the channel name prefix 
                                 * for business purposes. 
                                 *
                                 * We are not working with 
                                 * numbers here, boys. 
                                 *
                                 *
                                 * 5
                                 *
                                 * Thursday, November 30, 2023 @ 0311 hrs.
                                 *
                                 * 311 - Come Original
                                 * https://www.youtube.com/watch?v=KWo-02Hsab4
                                 *
                                 */
                                $tmp_channel = $this->extract_key_from_string(
                                                      $data_key, 
                                                      '_ttl');

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * The use of self::$oCRNRSTN_RRS_MAP 
                                 * methods outside of the CLR-SSL RRS 
                                 * Map Object is DEPRECATED.
                                 *
                                 * Please see,
                                 *      $oCRNRSTN->set_channel_config(
                                 *                 $channel_constant, 
                                 *                 $attribute_name, 
                                 *                 $data);
                                 *
                                 *      $oCRNRSTN->get_channel_config(
                                 *                 $channel, 
                                 *                 $index_0 = NULL, 
                                 *                 $index_1 = NULL, 
                                 *                 $index_2 = NULL, 
                                 *                 $index_3 = NULL, 
                                 *                 $initialize = false);
                                 *
                                 *      $oCRNRSTN->isset_channel_config(
                                 *                 $channel_constant, 
                                 *                 $attribute_name, 
                                 *                 $return_type = CRNRSTN_BOOLEAN);
                                 *
                                 *      $oCRNRSTN->is_channel_active(
                                 *                 $channel_constant, 
                                 *                 $return_type = CRNRSTN_BOOLEAN)
                                 *
                                 *
                                 * 5 :: Friday, November 24, 2023 @ 1509 hrs.
                                 *
                                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * CLR-SSL Multi-Channel 
                                 * Decoupled Data Object 
                                 * (MC-DDO) Services Layer. 
                                 *
                                 * Apply channel settings 
                                 * to RRS Map object. 
                                 *
                                 * CLR-SSL UGC data 
                                 * input [INTEGER]
                                 *
                                 */
                                $this->set_channel_config(
                                       $tmp_channel, 
                                       'map_cache_ttl', 
                                       $tmp_int);

                            break;
/*
 *                            case 'R_debug_mode':
 *
 *                                $this->set_crnrstn('R_debug_mode', $tmp_int);
 *
 *                            break;
 *                            case 'CRNRSTN_log_silo_profile':
 *
 *                                //
 *                                // The CRNRSTN :: Lightsaber RoCEv2 SOAP
 *                                // Services Layer Multi-Channel
 *                                // Decoupled Data Object (MC-DDO)
 *                                // Data Storage Services Layer.
 *                                //
 *                                //
 *                                // 5
 *                                //
 *                                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *                                // CRNRSTN :: UGC DATA INPUT [INTEGER]
 *                                $this->input_data_value(
 *                                       $tmp_int, 
 *                                       'CRNRSTN_log_silo_profile', 
 *                                       $data_type_family, 
 *                                       $index, 
 *                                       $data_authorization_profile, 
 *                                       $ttl, 
 *                                       $spool_resource, 
 *                                       $env_key);
 *
 *                            break;
 *                            case 'PHPMailer_debug_mode':
 *
 *                                //
 *                                // The CRNRSTN :: Lightsaber RoCEv2 SOAP
 *                                // Services Layer Multi-Channel
 *                                // Decoupled Data Object (MC-DDO)
 *                                // Data Storage Services Layer.
 *                                //
 *                                //
 *                                // 5
 *                                //
 *                                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *                                // CRNRSTN :: UGC DATA INPUT [INTEGER]
 *                                $this->input_data_value(
 *                                       $tmp_int, 
 *                                       'PHPMailer_debug_mode', 
 *                                       $data_type_family, 
 *                                       $index, 
 *                                       $data_authorization_profile, 
 *                                       $ttl, 
 *                                       $spool_resource, 
 *                                       $env_key);
 *
 *                            break;
 *
 */
                            case 'err_reporting_profile':
                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * E.g., E_ALL & ~E_NOTICE & 
                                 * ~E_STRICT
                                 *
                                 * error_log(__LINE__ . 
                                 *     ' crnrstn config_serial_hash[' . 
                                 *     $this->config_serial_hash . 
                                 *     ']. env_key_hash_config_ARRAY[' . 
                                 *     print_r(self::$env_key_hash_config_ARRAY, true) . 
                                 *     ']. env_err_reporting_profile_ARRAY[' . 
                                 *     print_r($this->env_err_reporting_profile_ARRAY, true) . 
                                 *     '].');
                                 *
                                 */
                                $this->set_crnrstn(
                                       'env_err_reporting_profile_ARRAY', 
                                       $tmp_int);

                            break;
                            case 'R_debug_mode_override':

                                $this->set_crnrstn(
                                       'R_debug_mode', 
                                       $tmp_int);

                            break;
                            case 'system_html_comments_mode':

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * PLEASE SEE, $oCRNRSTN->config_add_environment() IN _crnrstn.config.inc.php.
                                 *
                                 * CONFIGURATION FILE EXCERPT:
                                 * -----
                                 * @param   integer $system_html_comments_mode manages the content format of HTML and TEXT
                                 * comments in CRNRSTN :: system output. The system predefined integer constant options for
                                 * this include:
                                 *      CRNRSTN_HTML_COMMENTS_NONE                          (no comments)
                                 *      CRNRSTN_HTML_COMMENTS_SILENT_GOLD                   (alias of CRNRSTN_HTML_COMMENTS_NONE)
                                 *      CRNRSTN_HTML_COMMENTS_CDN_STABILITY_CONTROL_ENABLED (no timestamps in comments)
                                 *      CRNRSTN_HTML_COMMENTS_ENLARGED_PHYLACTERIES         (alias of CRNRSTN_HTML_COMMENTS_FULL)
                                 *      CRNRSTN_HTML_COMMENTS_FULL                          (this is the default)
                                 *
                                 * 5 :: Thursday September 7, 2023 @ 0643 hrs.
                                 *
                                 */
                                $this->set_crnrstn(
                                       'env_html_comments_mode_ARRAY', 
                                       $tmp_int);

                            break;
                            default:

                                error_log(
                                    __LINE__ . 
                                    ' crnrstn MISSING SWITCH CASE[' . 
                                    $data_key . ']. $data_profile[' . 
                                    $data_profile . 
                                    '].');

                            break;

                        }

                    break;
                    default:

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * The CRNRSTN :: Lightsaber 
                         * RoCEv2 SOAP Services Layer 
                         * (CLR-SSL) Multi-Channel 
                         * Decoupled Data Object 
                         * (MC-DDO) Data Storage 
                         * Services Layer. 
                         *
                         * The CLR-SSL MC-DDO 
                         * Services Layer. 
                         *
                         *
                         * 5
                         *
                         * CLR-SSL UGC data 
                         * input [INTEGER]
                         *
                         */
                        $this->input_data_value(
                               $tmp_int, 
                               $data_key, 
                               $data_type_family, 
                               $index, 
                               $data_authorization_profile, 
                               $ttl, 
                               $spool_resource, 
                               $env_key);

                    break;

                }

            break;

            case 'byte':
            case 'bytes':
            case 'electrum_bytes':
            case 'config_init_channel_bytes':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Format bytes. 
                 *
                 */
                $tmp_bytes = $this->return_bytes(
                                    $data, 
                                    NULL, 
                                    NULL, 
                                    false, 
                                    false);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * -1 = System limited
                 *      maximum file size.
                 *
                 */
                if(!($tmp_bytes == -1) && 
                    !($tmp_bytes >= 0))
                {

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data 
                     * validation error 
                     * message [BYTES]
                     *
                     */
                    switch($data_profile){
                        case 'config_init_channel_bytes':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * This is some CRNRSTN :: 
                             * Lightsaber RoCEv2 SOAP Services 
                             * Layer (CLR-SSL) screen scraping 
                             * kit that uses basic string 
                             * parsing to get a handle 
                             * on the channel name prefix 
                             * for business purposes. 
                             *
                             * We are not working with 
                             * numbers here, boys. 
                             *
                             *
                             * 5
                             *
                             * Thursday, November 30, 2023 @ 0311 hrs.
                             *
                             * 311 - Come Original
                             * https://www.youtube.com/watch?v=KWo-02Hsab4
                             *
                             */
                            $tmp_channel = $this->extract_key_from_string(
                                                  $data_key, 
                                                  '_max_bytes');
                            $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                           'the CRNRSTN :: RRS MAP channel [' . 
                                           $tmp_channel . '] ' .
                                           $data_key . ', (' . 
                                           $this->gettype($tmp_bytes) . ') ' . 
                                           strval($tmp_bytes) . '. ' .
                                           strval($data) . 
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'electrum_bytes':

                            $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                           'the CRNRSTN :: ELECTRUM ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_bytes) . ') ' . 
                                           strval($tmp_bytes) . '. ' . 
                                           strval($data) .
                                           ', was the value that was ' . 
                                           'provided as method input to '  .
                                           'this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        default:
                            /**
                             *case 'byte':
                             *case 'bytes':
                             *
                             */

                            $tmp_err_str = 'CRNRSTN :: could not apply the ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_bytes) . ') ' . 
                                           strval($tmp_bytes) . '. ' .
                                           strval($data) . 
                                           ', was the value that was ' . 
                                           'provided as method input to ' . 
                                           'this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data input 
                     * exception [BYTES] 
                     *
                     *
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    $this->err_message_queue_push(
                           NULL, 
                           $tmp_err_str);

                    return NULL;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CLR-SSL UGC data 
                 * input [BYTES]
                 *
                 */
                switch($data_profile){
                    case 'config_init_channel_bytes':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * This is some CRNRSTN :: 
                         * Lightsaber RoCEv2 SOAP Services 
                         * Layer (CLR-SSL) screen scraping 
                         * kit that uses basic string 
                         * parsing to get a handle 
                         * on the channel name prefix 
                         * for business purposes. 
                         *
                         * We are not working with 
                         * numbers here, boys. 
                         *
                         *
                         * 5
                         *
                         * Thursday, November 30, 2023 @ 0311 hrs.
                         *
                         * 311 - Come Original
                         * https://www.youtube.com/watch?v=KWo-02Hsab4
                         *
                         */
                        $tmp_channel = $this->extract_key_from_string(
                                              $data_key, 
                                              '_max_bytes');

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * CRNRSTN :: Lightsaber RoCEv2 
                         * SOAP Services Layer (CLR-SSL) 
                         * Multi-Channel Decoupled Data 
                         * Object (MC-DDO) Services Layer. 
                         *
                         * Apply channel settings to 
                         * RRS Map object. 
                         *
                         * CLR-SSL UGC data 
                         * input [BYTES]
                         *
                         */
                        $this->set_channel_config(
                               $tmp_channel, 
                               'max_map_cache_bytes', 
                               $tmp_bytes);

                    break;
                    default:

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * CRNRSTN :: Lightsaber RoCEv2 
                         * SOAP Services Layer (CLR-SSL) 
                         * Multi-Channel Decoupled Data 
                         * Object (MC-DDO) Services Layer. 
                         *
                         *
                         * 5
                         *
                         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * CLR-SSL UGC data 
                         * input [BYTES]
                         *
                         */
                        $this->input_data_value(
                               $tmp_bytes, 
                               $data_key, 
                               $data_type_family, 
                               $index, 
                               $data_authorization_profile, 
                               $ttl, 
                               $spool_resource, 
                               $env_key);

                    break;

                }

            break;

            case 'bool':
            case 'boolean':
            case 'electrum_boolean':
            case 'wethrbug_boolean':
            case 'config_init_js_css_minimization_boolean':
            case 'config_init_channel_boolean':
            case 'config_init_file_system_integrations_boolean':
            case 'config_init_asset_map_favicon_boolean':
            case 'config_init_asset_map_css_boolean':
            case 'config_init_asset_map_js_boolean':
            case 'config_init_asset_map_system_img_boolean':
            case 'config_init_asset_map_social_img_boolean':
            case 'config_init_asset_map_meta_img_boolean':
            case 'config_init_html_mode_email_boolean':
            case 'system_output_head_html_boolean':
            case 'system_output_footer_html_boolean':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Format boolean. 
                 *
                 */
                $tmp_boolean = $this->tidy_boolean($data);

                if(!(is_bool($tmp_boolean))){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * It would certainly appear 
                     * that this is not a valid 
                     * number for the 
                     * requested operation. 
                     *
                     * We shall run a genuinely 
                     * invalid calculation and 
                     * use the system error that 
                     * is generated to clearly 
                     * communicate that the input 
                     * datum is an "invalid number". 
                     *
                     * This may be the only way 
                     * that an application which 
                     * absolutely loves numbers as 
                     * much as the CRNRSTN :: 
                     * Lightsaber RoCEv2 SOAP 
                     * Services Layer (CLR-SSL) 
                     * loves numbers would be able 
                     * to produce a respectable 
                     * error message on this, the 
                     * subject matter. 
                     * 
                     * And the CLR-SSL has really 
                     * been loving the numbers 
                     * lately, man. We happily pay 
                     * the price ($$$) of compute 
                     * to acquire an authentic NAN 
                     * (not a number), real bad data. 
                     *
                     * We buy a properly shit value 
                     * that can be consistently 
                     * and reliably returned with 
                     * confidence by the CLR-SSL. 
                     *
                     * And all this...even in the 
                     * midst of "these economic 
                     * times", at that! 
                     *
                     * CRNRSTN :: <3's... 
                     * ...(int) CRNRSTN_INTEGER 4 LIFE! 
                     *
                     *
                     * 5 :: Monday, December 4, 2023 @ 1117 hrs.
                     * Last Modified: Friday, February 27, 2026 @ 0151 hrs.
                     *
                     * See, https://www.php.net/manual/en/function.is-nan.php
                     *
                     */
                    $tmp_boolean = sqrt(-1);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data 
                     * validation error 
                     * message [BOOLEAN] 
                     *
                     */
                    switch($data_profile){
                        case 'system_output_head_html_boolean':
                        case 'system_output_footer_html_boolean':

                            switch($data_key){
                                case 'crnrstn_head_resource_html_output_spool_is_dev_mode':

                                    $tmp_err_str = 'CRNRSTN :: could not determine ' . 
                                                   'if the development HTML spool ' . 
                                                   'output mode for <HEAD> is active ' .
                                                   'with the input, (' .
                                                   $this->gettype($tmp_boolean) . ') ' . 
                                                   strval($tmp_boolean) . '. ' .
                                                   strval($data) . ', was the value ' . 
                                                   'provided. The system will manually ' . 
                                                   'set this to FALSE. ' .
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;
                                case 'crnrstn_head_resource_html_output_build_acceleration_spool_is_dev_mode':

                                    $tmp_err_str = 'CRNRSTN :: BUILD ACCELERATION could ' . 
                                                   'not determine if the development ' . 
                                                   'HTML spool output mode is ' . 
                                                   'active with the input, (' .
                                                   $this->gettype($tmp_boolean) . ') ' . 
                                                   strval($tmp_boolean) . '. ' .
                                                   strval($data) . 
                                                   ', was the value provided. The ' . 
                                                   'system will manually set this to FALSE. ' .
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;
                                case 'crnrstn_footer_resource_html_output_spool_is_dev_mode':

                                    $tmp_err_str = 'CRNRSTN :: could not determine ' . 
                                                   'if the development HTML spool ' . 
                                                   'output mode for the footer is ' . 
                                                   'active with the input, (' .
                                                   $this->gettype($tmp_boolean) . ') ' . 
                                                   strval($tmp_boolean) . '. ' .
                                                   strval($data) . 
                                                   ', was the value provided. The ' . 
                                                   'system will manually set this to FALSE. ' .
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;

                            }

                        break;
                        case 'config_init_html_mode_email_boolean':

                            $tmp_err_str = 'CRNRSTN :: could not determine ' . 
                                           'if HTML mode should be active ' . 
                                           'for email with the data, ' .
                                           $data_key . '[(' . 
                                           $this->gettype($tmp_boolean) . ') ' . 
                                           strval($tmp_boolean) . ']. ' .
                                           strval($data) . 
                                           ', was the value provided. The ' . 
                                           'system will run in PLAIN TEXT ' . 
                                           'output mode for email. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_init_js_css_minimization_boolean':

                            $tmp_err_str = 'CRNRSTN :: could not flip the bit, ' . 
                                           $data_key . '[(' .
                                           $this->gettype($tmp_boolean) . ') ' . 
                                           strval($tmp_boolean) .
                                           '], which supports the JS/CSS ' . 
                                           'framework minimization mode ' . 
                                           'for this environment. ' .
                                           strval($data) . 
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_init_asset_map_favicon_boolean':
                        case 'config_init_asset_map_css_boolean':
                        case 'config_init_asset_map_js_boolean':
                        case 'config_init_asset_map_system_img_boolean':
                        case 'config_init_asset_map_social_img_boolean':
                        case 'config_init_asset_map_meta_img_boolean':

                            $tmp_pattern_ARRAY = array('config_init_asset_map_', '_boolean', '_');
                            $tmp_replacements_ARRAY = array('', '', ' ');

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * This is some CRNRSTN ::
                             * Lightsaber RoCEv2 SOAP Services
                             * Layer (CLR-SSL) screen scraping
                             * kit that uses basic string
                             * parsing to get a handle
                             * on the channel name prefix
                             * for business purposes.
                             *
                             * We are not working with
                             * numbers here, boys.
                             *
                             *
                             * 5
                             *
                             * Thursday, November 30, 2023 @ 0311 hrs.
                             *
                             * 311 - Come Original
                             * https://www.youtube.com/watch?v=KWo-02Hsab4
                             *
                             */
                            $tmp_asset_type = $this->extract_key_from_string(
                                                     $data_profile, 
                                                     '', 
                                                     false, 
                                                     $tmp_pattern_ARRAY, 
                                                     $tmp_replacements_ARRAY);

                            $tmp_err_str = 'CRNRSTN :: could not receive ' . 
                                           $data_key .
                                           ' input meta supporting ' . 
                                           'configuration of the ' . 
                                           'CRNRSTN :: RRS MAP ' .
                                           strtoupper($tmp_asset_type) . 
                                           ' asset mapping architecture. ' . 
                                           strval($data) .
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_init_file_system_integrations_boolean':

                            $tmp_err_str = 'CRNRSTN :: could not add ' . 
                                           'the environmental configuration ' . 
                                           $data_key .
                                           ', (' . 
                                           $this->gettype($tmp_boolean) . ') ' . 
                                           strval($tmp_boolean) . '. ' .
                                           strval($data) . 
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                            $this->data_report(
                                                   $data, 
                                                   'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_init_channel_boolean':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * This is some CRNRSTN ::
                             * Lightsaber RoCEv2 SOAP Services
                             * Layer (CLR-SSL) screen scraping
                             * kit that uses basic string
                             * parsing to get a handle
                             * on the channel name prefix
                             * for business purposes.
                             *
                             * We are not working with
                             * numbers here, boys.
                             *
                             *
                             * 5
                             *
                             * Thursday, November 30, 2023 @ 0311 hrs.
                             *
                             * 311 - Come Original
                             * https://www.youtube.com/watch?v=KWo-02Hsab4
                             *
                             */
                            $tmp_channel = $this->extract_key_from_string(
                                                  $data_key, 
                                                  '_is_active');
                            $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                           'the CRNRSTN :: RRS MAP channel [' .
                                           $tmp_channel . '] ' . 
                                           $data_key . ', (' . 
                                           $this->gettype($tmp_boolean) . ') ' .
                                           strval($tmp_boolean) . '. ' . 
                                           strval($data) . 
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'wethrbug_boolean':

                            $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                           'the CRNRSTN :: WETHRBUG ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_boolean) . ') ' . 
                                           strval($tmp_boolean) . '. ' .
                                           strval($data) . 
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'electrum_boolean':

                            $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                           'the CRNRSTN :: ELECTRUM ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_boolean) . ') ' . 
                                           strval($tmp_boolean) . '. ' .
                                           strval($data) . 
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        default:
                            /**
                             *case 'bool':
                             *case 'boolean':
                             *
                             */

                            $tmp_err_str = 'CRNRSTN :: could not apply the ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_boolean) . ') ' . 
                                           strval($tmp_boolean) . '. ' .
                                           strval($data) . 
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;

                    }

                    switch($data_profile){
                        case 'system_output_head_html_boolean':
                        case 'system_output_footer_html_boolean':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [BOOLEAN]
                             *
                             */
                            $this->input_data_value(
                                   false, 
                                   $data_key, 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data input 
                     * exception [BOOLEAN]
                     *
                     *
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    $this->err_message_queue_push(NULL, $tmp_err_str);

                    return NULL;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CLR-SSL UGC data 
                 * input [BOOLEAN]
                 *
                 */
                switch($data_profile){
                    case 'config_init_html_mode_email_boolean':

                        if($data == true){

                            $this->error_log(
                                   'Activating the multi-part ' . 
                                   'HTML output format for default ' . 
                                   'system email communications.', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * CRNRSTN :: Icy Digital ITCC 
                             * Bitmask Integer State 
                             * (Bit Flip) Management 
                             * Services Layer. 
                             *
                             * If the bit is not flipped, 
                             * send the TEXT version 
                             * EMAIL only. 
                             *
                             * CLR-SSL UGC data 
                             * input [ICY_DIGITALITCC-BITMASK]
                             *
                             */
                            $this->initialize_bit(
                                   CRNRSTN_EMAIL_MULTI_PART, 
                                   true);

                        }

                        return true;

                    break;
                    case 'config_init_js_css_minimization_boolean':

                        if(!($data == true)){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * If the condition of this integer 
                             * in Icy Digital ITCC bitmask is 
                             * as it is, flipped in its state, 
                             * we will turn it off. 
                             *
                             */
                            if($this->is_bit_set((int) self::$R_data['int_flag']['R_js_css_min_mode']) == true){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * CRNRSTN :: Icy Digital ITCC 
                                 * Bitmask Integer State (Bit Flip) 
                                 * Management Services Layer. 
                                 *
                                 * CLR-SSL UGC data 
                                 * input [ICY_DIGITALITCC-BITMASK]
                                 *
                                 */
                                $this->initialize_bit((int) self::$R_data['int_flag']['R_js_css_min_mode'], false);

                            }

                            return true;

                        }

                        if($data == true){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * CRNRSTN :: Icy Digital ITCC 
                             * Bitmask Integer State (Bit Flip) 
                             * Management Services Layer. 
                             *
                             * CLR-SSL UGC data 
                             * input [ICY_DIGITALITCC-BITMASK]
                             *
                             */
                            $this->initialize_bit((int) self::$R_data['int_flag']['R_js_css_min_mode'], true);

                            return true;

                        }

                    break;
                    case 'config_init_asset_map_favicon_boolean':
                    case 'config_init_asset_map_css_boolean':
                    case 'config_init_asset_map_js_boolean':
                    case 'config_init_asset_map_system_img_boolean':
                    case 'config_init_asset_map_social_img_boolean':
                    case 'config_init_asset_map_meta_img_boolean':

                        $tmp_pattern_ARRAY = array('config_init_asset_map_', '_boolean', '_');
                        $tmp_replacements_ARRAY = array('', '', ' ');

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * This is some CRNRSTN :: 
                         * Lightsaber RoCEv2 SOAP Services 
                         * Layer (CLR-SSL) screen scraping 
                         * kit that uses basic string 
                         * parsing to get a handle 
                         * on the channel name prefix 
                         * for business purposes. 
                         *
                         * We are not working with 
                         * numbers here, boys. 
                         *
                         *
                         * 5
                         *
                         * Thursday, November 30, 2023 @ 0311 hrs.
                         *
                         * 311 - Come Original
                         * https://www.youtube.com/watch?v=KWo-02Hsab4
                         *
                         */
                        $tmp_asset_type = $this->extract_key_from_string(
                                                 $data_profile, 
                                                 '', 
                                                 false, 
                                                 $tmp_pattern_ARRAY, 
                                                 $tmp_replacements_ARRAY);

                        if($tmp_boolean == true){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Previous ERROR_LOG messages:
                             *   "Activating CRNRSTN :: asset routing for system images."
                             *   "Activating CRNRSTN :: asset routing for system social images."
                             *   "Activating CRNRSTN :: asset routing for meta preview social images."
                             *
                             */
                            $this->error_log(
                                   'Activating CRNRSTN :: Response Return ' . 
                                   'Serialization (RRS) system asset ' . 
                                   'response route mapping for ' . 
                                   strtoupper($tmp_asset_type) . '.', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);

                            switch($tmp_asset_type){
                                case 'favicon':

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CRNRSTN :: Icy Digital ITCC 
                                     * Bitmask Integer State (Bit Flip) 
                                     * Management Services Layer. 
                                     *
                                     * CLR-SSL UGC data 
                                     * input [ICY_DIGITALITCC-BITMASK]
                                     *
                                     */
                                    $this->initialize_bit(
                                           (int) self::$R_data['int_flag']['R_fs_map_favicon'], 
                                           true);

                                break;
                                case 'css':

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CRNRSTN :: Icy Digital ITCC 
                                     * Bitmask Integer State (Bit Flip) 
                                     * Management Services Layer. 
                                     *
                                     * CLR-SSL UGC data 
                                     * input [ICY_DIGITALITCC-BITMASK]
                                     *
                                     */
                                    $this->initialize_bit(
                                           CRNRSTN_CSS_LIB_ASSET_MAPPING, 
                                           true);

                                break;
                                case 'js':

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CRNRSTN :: Icy Digital ITCC 
                                     * Bitmask Integer State (Bit Flip) 
                                     * Management Services Layer. 
                                     *
                                     * CLR-SSL UGC data 
                                     * input [ICY_DIGITALITCC-BITMASK]
                                     *
                                     */
                                    $this->initialize_bit(
                                           (int) self::$R_data['int_flag']['R_fs_map_js_lib'], 
                                           true);

                                break;
                                case 'system img':

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CRNRSTN :: Icy Digital ITCC 
                                     * Bitmask Integer State (Bit Flip) 
                                     * Management Services Layer. 
                                     *
                                     * CLR-SSL UGC data 
                                     * input [ICY_DIGITALITCC-BITMASK]
                                     *
                                     */
                                    $this->initialize_bit(
                                           (int) self::$R_data['int_flag']['R_fs_map_system'], 
                                           true);

                                break;
                                case 'social img':

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CRNRSTN :: Icy Digital ITCC 
                                     * Bitmask Integer State (Bit Flip) 
                                     * Management Services Layer. 
                                     *
                                     * CLR-SSL UGC data 
                                     * input [ICY_DIGITALITCC-BITMASK]
                                     *
                                     */
                                    $this->initialize_bit(
                                           (int) self::$R_data['int_flag']['R_fs_map_social'], 
                                           true);

                                break;
                                case 'meta img':

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CRNRSTN :: Icy Digital ITCC 
                                     * Bitmask Integer State (Bit Flip) 
                                     * Management Services Layer. 
                                     *
                                     * CLR-SSL UGC data 
                                     * input [ICY_DIGITALITCC-BITMASK]
                                     *
                                     */
                                    $this->initialize_bit(
                                           (int) self::$R_data['int_flag']['R_fs_map_meta'], 
                                           true);

                                break;
                                default:

                                    $tmp_err_str = 'CRNRSTN :: could not process ' . 
                                                   $data_key .
                                                   ' input using the derived lookup value, "' . 
                                                   strtoupper($tmp_asset_type) . '". ' .
                                                   strval($data_profile) . 
                                                   ', was the value provided ' . 
                                                   'to this internal operation. ' .
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CRNRSTN :: UGC data input 
                                     * exception [BOOLEAN] 
                                     *
                                     *
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    $this->err_message_queue_push(
                                           NULL, 
                                           $tmp_err_str);

                                    return NULL;

                                break;

                            }

                        }else{

                            switch($tmp_asset_type){
                                case 'favicon':

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * If the condition of this 
                                     * integer in Icy Digital ITCC 
                                     * bitmask is as it is, flipped 
                                     * in its state, we will 
                                     * turn it off. 
                                     *
                                     */
                                    if($this->is_bit_set(
                                              (int) self::$R_data['int_flag']['R_fs_map_favicon']) == true)
                                    {

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * CRNRSTN :: Icy Digital ITCC 
                                         * Bitmask Integer State (Bit Flip) 
                                         * Management Services Layer. 
                                         *
                                         * CLR-SSL UGC data 
                                         * input [ICY_DIGITALITCC-BITMASK]
                                         *
                                         */
                                        $this->initialize_bit(
                                               (int) self::$R_data['int_flag']['R_fs_map_favicon'], 
                                               false);

                                    }

                                break;
                                case 'css':

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * If the condition of this 
                                     * integer in Icy Digital ITCC 
                                     * bitmask is as it is, flipped 
                                     * in its state, we will 
                                     * turn it off. 
                                     *
                                     */
                                    if($this->is_bit_set(
                                              CRNRSTN_CSS_LIB_ASSET_MAPPING) == true)
                                    {

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * CRNRSTN :: Icy Digital ITCC 
                                         * Bitmask Integer State (Bit Flip) 
                                         * Management Services Layer. 
                                         *
                                         * CLR-SSL UGC data 
                                         * input [ICY_DIGITALITCC-BITMASK]
                                         *
                                         */
                                        $this->initialize_bit(
                                              CRNRSTN_CSS_LIB_ASSET_MAPPING, 
                                              false);

                                    }

                                break;
                                case 'js':

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * If the condition of this 
                                     * integer in Icy Digital ITCC 
                                     * bitmask is as it is, flipped 
                                     * in its state, we will 
                                     * turn it off. 
                                     *
                                     */
                                    if($this->is_bit_set(
                                              (int) self::$R_data['int_flag']['R_fs_map_js_lib']) == true)
                                    {

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * CRNRSTN :: Icy Digital ITCC 
                                         * Bitmask Integer State (Bit Flip) 
                                         * Management Services Layer. 
                                         *
                                         * CLR-SSL UGC data 
                                         * input [ICY_DIGITALITCC-BITMASK]
                                         *
                                         */
                                        $this->initialize_bit(
                                               (int) self::$R_data['int_flag']['R_fs_map_js_lib'], 
                                               false);

                                    }

                                break;
                                case 'system img':

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * If the condition of this 
                                     * integer in Icy Digital ITCC 
                                     * bitmask is as it is, flipped 
                                     * in its state, we will 
                                     * turn it off. 
                                     *
                                     */
                                    if($this->is_bit_set(
                                              (int) self::$R_data['int_flag']['R_fs_map_system']) == true)
                                    {

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * CRNRSTN :: Icy Digital ITCC 
                                         * Bitmask Integer State (Bit Flip) 
                                         * Management Services Layer. 
                                         *
                                         * CLR-SSL UGC data 
                                         * input [ICY_DIGITALITCC-BITMASK]
                                         *
                                         */
                                        $this->initialize_bit(
                                               (int) self::$R_data['int_flag']['R_fs_map_system'], 
                                               false);

                                    }

                                break;
                                case 'social img':

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * If the condition of this 
                                     * integer in Icy Digital ITCC 
                                     * bitmask is as it is, flipped 
                                     * in its state, we will 
                                     * turn it off. 
                                     *
                                     */
                                    if($this->is_bit_set(
                                              (int) self::$R_data['int_flag']['R_fs_map_social']) == true)
                                    {

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * CRNRSTN :: Icy Digital ITCC 
                                         * Bitmask Integer State (Bit Flip) 
                                         * Management Services Layer. 
                                         *
                                         * CLR-SSL UGC data 
                                         * input [ICY_DIGITALITCC-BITMASK]
                                         *
                                         */
                                        $this->initialize_bit(
                                               (int) self::$R_data['int_flag']['R_fs_map_social'], 
                                               false);

                                    }

                                break;
                                case 'meta img':

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * If the condition of this 
                                     * integer in Icy Digital 
                                     * ITCC Bitmask is as it is, 
                                     * flipped in its state, 
                                     * we will turn it off. 
                                     *
                                     *
                                     *if($this->oCRNRSTN->is_bit_set((int) self::$R_data['int_flag']['R_fs_map_meta']) == true){
                                     *
                                     */
                                    if($this->tidy_boolean(
                                              (int) self::$R_data['int_flag']['R_fs_map_meta'], 
                                              CRNRSTN_BOOLEAN, 
                                              (int) self::$R_data['int_flag']['R_fs_map_meta']) == true)
                                    {

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * CRNRSTN :: Icy Digital ITCC 
                                         * Bitmask Integer State (Bit Flip) 
                                         * Management Services Layer. 
                                         *
                                         * CLR-SSL UGC data 
                                         * input [ICY_DIGITALITCC-BITMASK]
                                         *
                                         */
                                        $this->initialize_bit(
                                               (int) self::$R_data['int_flag']['R_fs_map_meta'], 
                                               false);

                                    }

                                break;
                                default:

                                    $tmp_err_str = 'CRNRSTN :: could not process ' . 
                                                   'the deactivation of ' . 
                                                   $data_key .
                                                   ' input using the derived lookup value, "' . 
                                                   strtoupper($tmp_asset_type) . '". ' .
                                                   strval($data_profile) . 
                                                   ', was the value provided ' . 
                                                   'to this internal operation. ' .
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CRNRSTN :: UGC data input 
                                     * exception [BOOLEAN] 
                                     *
                                     *
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    $this->err_message_queue_push(
                                           NULL, 
                                           $tmp_err_str);

                                    return NULL;

                                break;

                            }

                        }

                    break;
                    case 'config_init_file_system_integrations_boolean':

                        $this->init_disk_write_authorization($tmp_boolean);

                    break;
                    case 'config_init_channel_boolean':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * This is some CRNRSTN :: 
                         * Lightsaber RoCEv2 SOAP Services 
                         * Layer (CLR-SSL) screen scraping 
                         * kit that uses basic string 
                         * parsing to get a handle 
                         * on the channel name prefix 
                         * for business purposes. 
                         *
                         * We are not working with 
                         * numbers here, boys. 
                         *
                         *
                         * 5
                         *
                         * Thursday, November 30, 2023 @ 0311 hrs.
                         *
                         * 311 - Come Original
                         * https://www.youtube.com/watch?v=KWo-02Hsab4
                         *
                         */
                        $tmp_channel = $this->extract_key_from_string(
                                              $data_key, 
                                              '_is_active');

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * CLR-SSL Multi-Channel Decoupled Data
                         * Object (MC-DDO) Services Layer. 
                         *
                         * Apply channel settings to 
                         * RRS Map object.
                         *
                         * CLR-SSL UGC data 
                         * input [BOOLEAN]
                         *
                         */
                        $this->set_channel_config(
                               $tmp_channel, 
                               'cache_is_active', 
                               $tmp_boolean);

                    break;
                    default:
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * case 'electrum_boolean':
                         * case 'wethrbug_boolean':
                         *
                         *
                         * The CRNRSTN :: Lightsaber 
                         * RoCEv2 SOAP Services Layer 
                         * (CLR-SSL) Multi-Channel 
                         * Decoupled Data Object 
                         * (MC-DDO) Data Storage 
                         * Services Layer. 
                         *
                         * The CLR-SSL MC-DDO 
                         * Services Layer. 
                         *
                         *
                         * 5
                         *
                         * CLR-SSL UGC data 
                         * input [BOOLEAN]
                         *
                         */
                        $this->input_data_value(
                               $tmp_boolean, 
                               $data_key, 
                               $data_type_family, 
                               $index, 
                               $data_authorization_profile, 
                               $ttl, 
                               $spool_resource, 
                               $env_key);

                    break;

                }

            break;

            case 'sql_temporal_interval':
            case 'database_shard_sql_temporal_interval':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * -1 = NO EXPIRE. 
                 *      '1 MONTH', 
                 *      '1 YEAR', 
                 *      '5 WEEKS', 
                 *      (int) 100 == '100 SECONDS' 
                 *      
                 * See database query date span handles.
                 *
                 *
                 * Format SQL 
                 * date interval. 
                 *
                 */
                $tmp_sql_interval = $this->format_sql_interval($data);

                if(strlen($tmp_sql_interval) < 1){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data 
                     * validation error 
                     * message [SQL INTERVAL]
                     *
                     */
                    switch($data_profile){
                        case 'database_shard_sql_temporal_interval':

                            $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                           'the CRNRSTN :: DATABASE SHARDING ' . 
                                           $data_key .
                                           ', ' . strval($tmp_sql_interval) . '. ' .
                                           strval($data) . 
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        default:
                            //case 'sql_temporal_interval':

                            $tmp_err_str = 'CRNRSTN :: could not apply the ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_sql_interval) . ') ' . 
                                           strval($tmp_sql_interval) . '. ' .
                                           strval($data) . 
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data input 
                     * exception [SQL INTERVAL] 
                     *
                     *
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    $this->err_message_queue_push(
                           NULL, 
                           $tmp_err_str);

                    return NULL;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * The CRNRSTN :: Lightsaber 
                 * RoCEv2 SOAP Services Layer 
                 * (CLR-SSL) Multi-Channel 
                 * Decoupled Data Object 
                 * (MC-DDO) Data Storage 
                 * Services Layer. 
                 *
                 * The CLR-SSL MC-DDO 
                 * Services Layer. 
                 *
                 *
                 * 5
                 *
                 * CRNRSTN :: UGC data 
                 * input [SQL INTERVAL]
                 *
                 */
                $this->input_data_value(
                       $tmp_sql_interval, 
                       $data_key, 
                       $data_type_family, 
                       $index, 
                       $data_authorization_profile, 
                       $ttl, 
                       $spool_resource, 
                       $env_key);

            break;

            case 'percentage':
            case 'electrum_percentage':
            case 'config_init_file_system_integrations_percentage':

                if(!isset($data)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Apply a patch to replace 
                     * the provided NULL value. 
                     *
                     * This will be the system 
                     * default a stored from 
                     * configuration intialization. 
                     *
                     */
                    switch($data_key){
                        case 'disk_percent_full_warning_override':

                            $data = $this->get_crnrstn('max_disk_storage_utilization_warning');

                        break;
                        case 'disk_percent_full_max_override':

                            //$data = self::$max_disk_storage_utilization;
                            $data = $this->get_crnrstn('max_disk_storage_utilization');

                        break;

                    }

                }

                $tmp_percentage = $this->str_sanitize(
                                         $data, 
                                         'clean_percentage_numbers');

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * This should 
                 * be a number. 
                 *
                 */
                if(!is_numeric($tmp_percentage)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * It would certainly appear 
                     * that this is not a valid 
                     * number for the 
                     * requested operation. 
                     *
                     * We shall run a genuinely 
                     * invalid calculation and 
                     * use the system error that 
                     * is generated to clearly 
                     * communicate that the input 
                     * datum is an "invalid number". 
                     *
                     * This may be the only way 
                     * that an application which 
                     * absolutely loves numbers as 
                     * much as the CRNRSTN :: 
                     * Lightsaber RoCEv2 SOAP 
                     * Services Layer (CLR-SSL) 
                     * loves numbers would be able 
                     * to produce a respectable 
                     * error message on this, the 
                     * subject matter. 
                     * 
                     * And the CLR-SSL has really 
                     * been loving the numbers 
                     * lately, man. We happily pay 
                     * the price ($$$) of compute 
                     * to acquire an authentic NAN 
                     * (not a number), real bad data. 
                     *
                     * We buy a properly shit value 
                     * that can be consistently 
                     * and reliably returned with 
                     * confidence by the CLR-SSL. 
                     *
                     * And all this...even in the 
                     * midst of "these economic 
                     * times", at that! 
                     *
                     * CRNRSTN :: <3's... 
                     * ...(int) CRNRSTN_INTEGER 4 LIFE! 
                     *
                     *
                     * 5 :: Monday, December 4, 2023 @ 1117 hrs.
                     * Last Modified: Friday, February 27, 2026 @ 0151 hrs.
                     *
                     * See, https://www.php.net/manual/en/function.is-nan.php
                     *
                     */
                    $tmp_percentage = sqrt(-1);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data validation 
                     * error message [PERCENTAGE]
                     *
                     */
                    switch($data_profile){
                        case 'config_init_file_system_integrations_percentage':

                            $tmp_err_str = 'CRNRSTN :: could not apply the ' . 
                                           'CRNRSTN  UGC Input Data Report ' . 
                                           $data_key .
                                           ' percentage, (' . 
                                           $this->gettype($tmp_percentage) . ') ' .
                                           strval($tmp_percentage) . '. ' . 
                                           strval($data) . 
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'electrum_percentage':

                            $tmp_err_str = 'CRNRSTN :: could not ' . 
                                           'apply the CRNRSTN :: ELECTRUM, ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_percentage) . ') ' . 
                                           strval($tmp_percentage) . '. ' .
                                           $data . 
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        default:
                            //case 'percentage':

                            $tmp_err_str = 'CRNRSTN :: could not apply the ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_percentage) . ') ' . 
                                           strval($tmp_percentage) . '. ' .
                                           $data . 
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    $this->err_message_queue_push(
                           NULL, 
                           $tmp_err_str);

                    return NULL;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CRNRSTN :: UGC data 
                 * input [PERCENTAGE]
                 *
                 */
                switch($data_profile){
                    case 'config_init_file_system_integrations_percentage':

                        switch($data_key){
                            case 'disk_percent_full_warning_override':

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * The CRNRSTN :: Lightsaber 
                                 * RoCEv2 SOAP Services Layer 
                                 * (CLR-SSL) Multi-Channel 
                                 * Decoupled Data Object 
                                 * (MC-DDO) Data Storage 
                                 * Services Layer. 
                                 *
                                 * The CLR-SSL MC-DDO 
                                 * Services Layer. 
                                 *
                                 *
                                 * 5
                                 *
                                 * CLR-SSL UGC data 
                                 * input [PERCENTAGE]
                                 *
                                 */
                                $this->input_data_value(
                                       $tmp_percentage, 
                                       'max_disk_storage_utilization_warning', 
                                       $data_type_family, 
                                       $index, 
                                       $data_authorization_profile, 
                                       $ttl, 
                                       $spool_resource, 
                                       $env_key);

                            break;
                            default:
                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * case 'disk_percent_full_max_override':
                                 *
                                 * The CRNRSTN :: Lightsaber 
                                 * RoCEv2 SOAP Services Layer 
                                 * (CLR-SSL) Multi-Channel 
                                 * Decoupled Data Object 
                                 * (MC-DDO) Data Storage 
                                 * Services Layer. 
                                 *
                                 * The CLR-SSL MC-DDO 
                                 * Services Layer. 
                                 *
                                 *
                                 * 5
                                 *
                                 * CLR-SSL UGC data 
                                 * input [PERCENTAGE]
                                 *
                                 */
                                $this->input_data_value(
                                       $tmp_percentage, 
                                       'max_disk_storage_utilization', 
                                       $data_type_family, 
                                       $index, 
                                       $data_authorization_profile, 
                                       $ttl, 
                                       $spool_resource, 
                                       $env_key);

                            break;

                        }

                    break;
                    default:

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * The CRNRSTN :: Lightsaber 
                         * RoCEv2 SOAP Services Layer 
                         * (CLR-SSL) Multi-Channel 
                         * Decoupled Data Object 
                         * (MC-DDO) Data Storage 
                         * Services Layer. 
                         *
                         * The CLR-SSL MC-DDO 
                         * Services Layer. 
                         *
                         *
                         * 5
                         *
                         * CLR-SSL UGC data 
                         * input [PERCENTAGE]
                         *
                         */
                        $this->input_data_value(
                               $tmp_percentage, 
                               $data_key, 
                               $data_type_family, 
                               $index, 
                               $data_authorization_profile, 
                               $ttl, 
                               $spool_resource, 
                               $env_key);

                    break;

                }

            break;

            case 'wethrbug_zipcode':

                $tmp_str = '';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * This should be 
                 * string data. 
                 *
                 */
                if($this->is_valid_zipcode($data) == true){

                    $tmp_str = (string) $data;

                }

                if(strlen($tmp_str) < 5){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data validation 
                     * error message [ZIPCODE]
                     *
                     */
                    switch($data_profile){
                        case 'wethrbug_zipcode':

                            $tmp_err_str = 'CRNRSTN :: could not ' . 
                                           'apply the CRNRSTN :: WETHRBUG ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_str) . ') ' . 
                                           $tmp_str . '. ' . 
                                           strval($data) .
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        default:
                            //case 'zipcode':

                            $tmp_err_str = 'CRNRSTN :: could not apply the ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_str) . ') ' . 
                                           $tmp_str . '. ' . 
                                           strval($data) .
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    $this->err_message_queue_push(
                           NULL, 
                           $tmp_err_str);

                    return NULL;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * The CRNRSTN :: Lightsaber 
                 * RoCEv2 SOAP Services Layer 
                 * (CLR-SSL) Multi-Channel 
                 * Decoupled Data Object 
                 * (MC-DDO) Data Storage 
                 * Services Layer. 
                 *
                 * The CLR-SSL MC-DDO 
                 * Services Layer. 
                 *
                 *
                 * 5
                 *
                 * CLR-SSL UGC data 
                 * input [ZIPCODE]
                 *
                 */
                $this->input_data_value(
                       $tmp_str, 
                       $data_key, 
                       $data_type_family, 
                       $index, 
                       $data_authorization_profile, 
                       $ttl, 
                       $spool_resource, 
                       $env_key);

            break;

            case 'email':
            case 'account_email':
            case 'admin_email':

                /**
                DISPLAY_TOKEN       // j*****@j*****.com, c*****@g*****.com, j*****@e*****.com
                EMAIL
                NAME
                IS_ADMIN

                */

                $tmp_has_email = false;

                $tmp_str = trim((string) $data);
                $tmp_email_ARRAY = $this->return_ugc_email_data_profile_ARRAY($tmp_str);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CLR-SSL UGC data 
                 * input [EMAIL] 
                 *
                 */
                $tmp_email_count = sizeof($tmp_email_ARRAY);
                for($i = 0; $i < $tmp_email_count; $i++){

                    $tmp_email_account_ARRAY = array();

                    if(isset($tmp_email_ARRAY['EMAIL'][$i])){

                        $tmp_has_email = true;

                        switch($data_profile){
                            case 'admin_email':

                                $tmp_email_account_ARRAY['DISPLAY_TOKEN'] = $this->str_sanitize(
                                                                                   $tmp_email_ARRAY['EMAIL'][$i], 
                                                                                   'email_private');
                                $tmp_email_account_ARRAY['EMAIL'] = $tmp_email_ARRAY['EMAIL'][$i];
                                $tmp_email_account_ARRAY['IS_ADMIN'] = 1;

                            break;
                            default:
                                /**
                                 *case 'account_email':
                                 *case 'email':
                                 *
                                 */

                                $tmp_email_account_ARRAY['DISPLAY_TOKEN'] = $this->str_sanitize(
                                                                                   $tmp_email_ARRAY['EMAIL'][$i], 
                                                                                   'email_private');
                                $tmp_email_account_ARRAY['EMAIL'] = $tmp_email_ARRAY['EMAIL'][$i];
                                $tmp_email_account_ARRAY['IS_ADMIN'] = 0;

                            break;

                        }

                    }

                    if(isset($tmp_email_ARRAY['RECIPIENT_NAME'][$i])){

                        $tmp_email_account_ARRAY['NAME'] = $tmp_email_ARRAY['RECIPIENT_NAME'][$i];

                    }

                    if(isset($tmp_email_account_ARRAY['EMAIL'])){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * The CRNRSTN :: Lightsaber 
                         * RoCEv2 SOAP Services Layer 
                         * (CLR-SSL) Multi-Channel 
                         * Decoupled Data Object 
                         * (MC-DDO) Data Storage 
                         * Services Layer. 
                         *
                         * The CLR-SSL MC-DDO 
                         * Services Layer. 
                         *
                         *
                         * 5
                         *
                         * CLR-SSL UGC data 
                         * input [EMAIL]
                         *
                         */
                        $this->input_data_value(
                               $tmp_email_account_ARRAY, 
                               $data_key, 
                               $data_type_family, 
                               $index, 
                               $data_authorization_profile, 
                               $ttl, 
                               $spool_resource, 
                               $env_key);

                    }

                }

                if(!($tmp_has_email !== false)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data 
                     * validation error 
                     * message [EMAIL]
                     *
                     */
                    switch($data_profile){
                        case 'admin_email':

                            $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                           'the CRNRSTN :: WEB ADMINISTRATION ' . 
                                           $data_key . '. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'account_email':

                            $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                           'the CRNRSTN :: WEB ACCOUNT ' . 
                                           $data_key . '. ' . 
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        default:
                            //case 'email':

                            $tmp_err_str = 'CRNRSTN :: could not apply the ' . 
                                           $data_key . '. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    $this->err_message_queue_push(
                           NULL, 
                           $tmp_err_str);

                    return NULL;

                }

            break;

            case '__construct_mixed':
            case 'config_add_resource_mixed':

                $tmp_ddo_write = false;

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Initialize the CLR-SSL System 
                 * Resources Validation 
                 * Profiles array. 
                 *
                 */
                if(!($this->isset_crnrstn('system_resource_profile_ARRAY') == true)){

                    $this->set_crnrstn(
                           'system_resource_profile_ARRAY', 
                           array(
                    'CRNRSTN_log_silo_profile'                     => array('validation_profile' => '_log_silo_profile', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::CONFIGURATION'),
                    'max_disk_storage_utilization'                 => array('validation_profile' => '_percentage', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::DISK_STORAGE'),
                    'max_disk_storage_utilization_warning'         => array('validation_profile' => '_percentage', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::DISK_STORAGE'),
                    'system_file_active_attributes_profile'        => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::LOCAL_FILE_SYSTEM'),
                    'default_interact_ui_theme'                    => array('validation_profile' => '_theme', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::DEFAULT_THEME'),
                    'default_css_unit_length'                      => array('validation_profile' => '_css_unit_length', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::DEFAULT_UNIT_CSS'),
                    'data_channel_init_sequence'                   => array('validation_profile' => '_channel_init_sequence', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::MULTI_CHANNEL'),
                    'byte_reporting_units'                         => array('validation_profile' => '_byte_unit_system', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::FILE_SYSTEM_REPORTING'),
                    'byte_reporting_precision'                     => array('validation_profile' => '_integer', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::FILE_SYSTEM_REPORTING'),
                    'hmac_hash_algorithm'                          => array('validation_profile' => '_hmac_lib', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::GENERAL_SETTINGS'),
                    'openssl_cipher'                               => array('validation_profile' => '_openssl_cipher_lib', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::GENERAL_SETTINGS'),
                    'openssl_digest'                               => array('validation_profile' => '_openssl_digest_lib', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::GENERAL_SETTINGS'),
                    'permissions_chmod'                            => array('validation_profile' => '_chmod', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::GENERAL_SETTINGS'),
                    'R_salt_default_length'                        => array('validation_profile' => '_integer', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::GENERAL_SETTINGS'),
                    'ddo_serializable_data_types'                  => array('validation_profile' => '_ddo_serializable_data_types', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::MULTI_CHANNEL'),
                    'object_serializable_data_channels'            => array('validation_profile' => '_object_serializable_channels', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::MULTI_CHANNEL'),
                    'get_parameters_system_data'                   => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::GET_CHANNEL_PARAMS'),
                    'crnrstn_system_files_color_class_ARRAY'       => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::LOCAL_FILE_SYSTEM'),
                    'crnrstn_system_files_line_weight_class_ARRAY' => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::LOCAL_FILE_SYSTEM'),
                    'mem_rpt_general_system_footer'                => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::REPORTING'),
                    'mem_rpt_plaid_performance'                    => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::REPORTING'),
                    'mem_rpt_system_page_return_statistics_module' => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::REPORTING'),
                    'mem_rpt_mit_license_modal'                    => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::REPORTING'),
                    'mem_rpt_cache_usage_report'                   => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::REPORTING'),
                    'interact_ui_ttl'                              => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::GENERAL_SETTINGS'),
                    'interact_ui_month_abbrev'                     => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::GENERAL_SETTINGS'),
                    'interact_ui_month'                            => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::GENERAL_SETTINGS'),
                    'interact_ui_day_abbrev'                       => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::GENERAL_SETTINGS'),
                    'interact_ui_day'                              => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::GENERAL_SETTINGS'),
                    'resource_footer_append_spool_override'        => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::ASSET_INTEGRATIONS'),
                    'resource_head_append_spool_override'          => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::ASSET_INTEGRATIONS'),
                    'system_file_max_ui_pageview_cnt'              => array('validation_profile' => '_array', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::FILE_SYSTEM'),
                    'default_anchor_target'                        => array('validation_profile' => '_dom_tag_anchor', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::HTML_DOM'),
                    'debug_logging_output_channel'                 => array('validation_profile' => '_dom_logging_channel', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::GENERAL_SETTINGS'),
                    'header_response_option_cache_control'         => array('validation_profile' => '_string', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::GENERAL_SETTINGS'),
                    'header_response_option_x_frame_options'       => array('validation_profile' => '_string', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::GENERAL_SETTINGS'),
                    'crnrstn_system_404_image_url_replace'         => array('validation_profile' => '_string', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::HTTP_IMAGES'),
                    'override_interact_theme_sprite_icon_height'                                        => array('validation_profile' => '_string', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::SPRITE_ICON'),
                    'override_interact_theme_sprite_icon_background_color'                              => array('validation_profile' => '_string', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::SPRITE_ICON'),
                    'override_interact_theme_sprite_icon_mouseout_effect_dimmed_color'                  => array('validation_profile' => '_string', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::SPRITE_ICON'),
                    'override_interact_theme_sprite_icon_mouseout_effect_dimmed_color_opacity'          => array('validation_profile' => '_string', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::SPRITE_ICON'),
                    'override_interact_theme_sprite_icon_mouseover_effect_brighten_color_opacity'       => array('validation_profile' => '_string', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::SPRITE_ICON'),
                    'override_interact_theme_sprite_icon_mouseover_effect_magnification_zoom_percent'   => array('validation_profile' => '_string', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::SPRITE_ICON'),

                    'share_module_facebook_media_is_active'        => array('validation_profile' => '_boolean', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::SOCIAL'),
                    'share_module_linkedin_media_is_active'        => array('validation_profile' => '_boolean', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::SOCIAL'),
                    'share_module_reddit_media_is_active'          => array('validation_profile' => '_boolean', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::SOCIAL'),
                    'share_module_twitter_media_is_active'         => array('validation_profile' => '_boolean', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::SOCIAL'),
                    'share_component_is_active'                    => array('validation_profile' => '_boolean', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::DOCUMENTATION_DEFAULTS'),
                    'mouse_hover_color_affect_is_active'           => array('validation_profile' => '_boolean', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::SPRITE_ICON'),
                    'mouse_hover_zoom_affect_is_active'            => array('validation_profile' => '_boolean', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::SPRITE_ICON'),
                    'override_interact_theme_sprite_icon_thirdparty_tm_is_active'   => array('validation_profile' => '_boolean', 
                                                                              'data_type_family' => 'CRNRSTN::RESOURCE::SPRITE_ICON')

                    ));

                }

                if($tmp_validation_profile = $this->is_resource(
                                                    $data_key, 
                                                    $data_type_family))
                {

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data 
                     * validation [MIXED]
                     *
                     */
                    switch($tmp_validation_profile){
                        case '_log_silo_profile':
                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * CRNRSTN_log_silo_profile
                             *
                             * CRNRSTN_log_silo_profile is a 
                             * UGC custom string or integer 
                             * that is used to group error 
                             * logs for output return as a 
                             * batch or silo. 
                             *
                             */
                            $this->set_crnrstn(
                                   'CRNRSTN_log_silo_profile', 
                                   $data);

                        break;
                        case '_object_serializable_channels':
                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * if(isset(self::$object_serializable_channels_ARRAY[$channel])){
                             *
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL MC-DDO settings and 
                             * configuration override. 
                             *
                             * self::$object_serializable_channels_ARRAY = $data;
                             *
                             */
                            $this->set_crnrstn(
                                   'object_serializable_channels_ARRAY', 
                                   $data);

                        break;
                        case '_ddo_serializable_data_types':
                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * if(isset(self::$ddo_serializable_data_types_ARRAY[$data_type])){
                             *
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL MC-DDO settings and 
                             * configuration override. 
                             *
                             * self::$ddo_serializable_data_types_ARRAY = $data;
                             *
                             */
                            $this->set_crnrstn(
                                   'ddo_serializable_data_types_ARRAY', 
                                   $data);

                        break;
                        case '_dom_logging_channel':
                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * 'debug_logging_output_channel', 
                             * 'DOM', 
                             * 'CRNRSTN::RESOURCE::GENERAL_SETTINGS');              
                             *
                             * Where CHANNEL = ['CONSOLE', 'DOM', 'ALERT'];
                             *
                             *
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [MIXED]
                             *
                             */
                            $tmp_output = $this->input_data_value(
                                                 $tmp_data, 
                                                 $data_key, 
                                                 $data_type_family, 
                                                 $index, 
                                                 $data_authorization_profile, 
                                                 $ttl, 
                                                 $spool_resource, 
                                                 $env_key);

                            return $tmp_output;

                        break;
                        case '_dom_tag_anchor':
                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * 'default_anchor_target', 
                             * '_blank', 
                             * 'CRNRSTN::RESOURCE::HTML_DOM');
                             *
                             *
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [MIXED]
                             *
                             */
                            $tmp_output = $this->input_data_value(
                                                 $tmp_data, 
                                                 $data_key, 
                                                 $data_type_family, 
                                                 $index, 
                                                 $data_authorization_profile, 
                                                 $ttl, 
                                                 $spool_resource, 
                                                 $env_key);

                            return $tmp_output;

                        break;
                        case '_boolean':

                            switch($data_key){
                                case 'share_module_facebook_media_is_active':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'share_module_facebook_media_is_active', 
                                     * true, 
                                     * 'CRNRSTN::RESOURCE::SOCIAL');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                       $tmp_data, 
                                                       $data_key, 
                                                       $data_type_family, 
                                                       $index, 
                                                       $data_authorization_profile, 
                                                       $ttl, 
                                                       $spool_resource, 
                                                       $env_key);

                                    return $tmp_output;

                                break;
                                case 'share_module_linkedin_media_is_active':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'share_module_linkedin_media_is_active', 
                                     * true, 
                                     * 'CRNRSTN::RESOURCE::SOCIAL');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'share_module_reddit_media_is_active':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'share_module_reddit_media_is_active', 
                                     * true, 
                                     * 'CRNRSTN::RESOURCE::SOCIAL');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'share_module_twitter_media_is_active':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'share_module_twitter_media_is_active', 
                                     * true, 
                                     * 'CRNRSTN::RESOURCE::SOCIAL');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'share_component_is_active':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'share_component_is_active', 
                                     * true, 
                                     * 'CRNRSTN::RESOURCE::DOCUMENTATION_DEFAULTS');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'mouse_hover_color_affect_is_active':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'mouse_hover_color_affect_is_active', 
                                     * true, 
                                     * 'CRNRSTN::RESOURCE::SPRITE_ICON');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'mouse_hover_zoom_affect_is_active':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'mouse_hover_zoom_affect_is_active', 
                                     * true, 
                                     * 'CRNRSTN::RESOURCE::SPRITE_ICON');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'override_interact_theme_sprite_icon_thirdparty_tm_is_active':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $this->config_add_resource(
                                     *        CRNRSTN_RESOURCE_ALL, 
                                     *        'override_interact_theme_sprite_icon_thirdparty_tm_is_active', 
                                     *        1, 
                                     *        'CRNRSTN::RESOURCE::SPRITE_ICON');
                                     *  
                                     * Where [1=ON, 0=OFF]
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                default:

                                    error_log(
                                        __LINE__ . 
                                        ' crnrstn MISSING SWITCH CASE[' . 
                                        $data_key . ']. $data_profile[' . 
                                        $data_profile . 
                                        '].');

                                break;

                            }

                        break;
                        case '_string':

                            switch($data_key){
                                case 'header_response_option_cache_control':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'header_response_option_cache_control', 
                                     * 'Cache-Control: public, max-age=31536000', 
                                     * 'CRNRSTN::RESOURCE::GENERAL_SETTINGS');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'header_response_option_x_frame_options':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'header_response_option_x_frame_options', 
                                     * 'X-Frame-Options: SAMEORIGIN', 
                                     * 'CRNRSTN::RESOURCE::GENERAL_SETTINGS');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'crnrstn_system_404_image_url_replace':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_404_image_url_replace = $this->return_creative('CRNRSTN_LOGO', );
                                     *
                                     * 'crnrstn_system_404_image_url_replace', 
                                     * $tmp_404_image_url_replace, 
                                     * 'CRNRSTN::RESOURCE::HTTP_IMAGES');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'override_interact_theme_sprite_icon_height':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'override_interact_theme_sprite_icon_height', 
                                     * '', 
                                     * 'CRNRSTN::RESOURCE::SPRITE_ICON');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'override_interact_theme_sprite_icon_background_color':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'override_interact_theme_sprite_icon_background_color', 
                                     * NULL, 
                                     * 'CRNRSTN::RESOURCE::SPRITE_ICON');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'override_interact_theme_sprite_icon_mouseout_effect_dimmed_color':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'override_interact_theme_sprite_icon_mouseout_effect_dimmed_color', 
                                     * NULL, 
                                     * 'CRNRSTN::RESOURCE::SPRITE_ICON');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'override_interact_theme_sprite_icon_mouseout_effect_dimmed_color_opacity':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'override_interact_theme_sprite_icon_mouseout_effect_dimmed_color_opacity', 
                                     * NULL, 
                                     * 'CRNRSTN::RESOURCE::SPRITE_ICON');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'override_interact_theme_sprite_icon_mouseover_effect_brighten_color_opacity':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'override_interact_theme_sprite_icon_mouseover_effect_brighten_color_opacity', 
                                     * NULL, 
                                     * 'CRNRSTN::RESOURCE::SPRITE_ICON');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'override_interact_theme_sprite_icon_mouseover_effect_magnification_zoom_percent':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'override_interact_theme_sprite_icon_mouseover_effect_magnification_zoom_percent', 
                                     * NULL, 
                                     * 'CRNRSTN::RESOURCE::SPRITE_ICON');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                default:

                                    error_log(__LINE__ . 
                                        ' crnrstn MISSING SWITCH CASE[' . 
                                        $data_key . ']. $data_profile[' . 
                                        $data_profile . 
                                        '].');

                                break;

                            }

                        break;
                        case '_chmod':

                            $tmp_data = octdec(str_pad($data, 4, '0', STR_PAD_LEFT));
                            $tmp_data = (int) $tmp_data;

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * SOURCE   :: https://stackoverflow.com/questions/50994126/php-how-to-check-if-a-valid-chmod-mode
                             * COMMENT  :: https://stackoverflow.com/a/50994207
                             * AUTHOR   :: https://stackoverflow.com/users/1043150/philipp
                             *
                             *
                             * Philipp
                             *
                             * CRNRSTN :: UGC data 
                             * validation [_chmod]
                             *
                             */
                            if(!(($tmp_data >= 0) && ($tmp_data <= 0777))){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * We do not 
                                 * have a valid 
                                 * chmod value. 
                                 *
                                 */
                                $tmp_force_data_err = true;

                                $tmp_data = $this->get_crnrstn('permissions_chmod');
                                $tmp_err_str = 'CRNRSTN :: could not locate ' . 
                                'the provided chmod permissions as ' . 
                                'within the range of 0 and 777. ' . 
                                'The system permissions have been ' . 
                                'manually set to, (' . 
                                $this->gettype($tmp_data) . ') ' . 
                                strval($tmp_data) . '. ' . 
                                $this->data_report(
                                       $data, 
                                       'CRNRSTN :: MC-DDO UGC Input Data Report');

                            }

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * CLR-SSL UGC data 
                             * validation error 
                             * message [_chmod] 
                             *
                             */
                            if($tmp_force_data_err == true){

                                $this->error_log(
                                       $tmp_err_str, 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);

                            }

                        break;
                        case '_openssl_cipher_lib':

                            $tmp_cipher = strtolower(trim($data));

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Persist the results of 
                             * this costly decision 
                             * in session. 
                             *
                             */
                            if(!$this->isset_resource(
                                       'data_value', 
                                       $data_key, 
                                       $data_type_family, 
                                       CRNRSTN_CHANNEL_SESSION) == true)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Do we need to [runtime] 
                                 * load the server  
                                 * OpenSSL ciphers? 
                                 *
                                 */
                                if(!($this->isset_crnrstn(
                                            'openssl_ARRAY', 
                                            'cipher') == true))
                                {

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Load available (on the 
                                     * server) OpenSSL ciphers. 
                                     *
                                     */
                                    $this->set_crnrstn(
                                           'openssl_ARRAY', 
                                           $this->openssl_get_cipher_methods(false, false), 
                                           'cipher');
                                    $this->set_crnrstn(
                                           'openssl_ARRAY', 
                                           $tmp_cipher, 
                                           'ISACTIVE', 
                                           'cipher', 
                                           $data_key, 
                                           $data_type_family);

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Is session fit with 
                                     * the cache data? 
                                     *
                                     */
                                    if(!$this->isset_resource(
                                               'data_value', 
                                               $data_key, 
                                               $data_type_family, 
                                               CRNRSTN_CHANNEL_SESSION) == true)
                                    {

                                        $tmp_force_data_err = true;
                                        $tmp_graceful_err   = false;

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * Load a custom culled 
                                         * set of boutique OpenSSL 
                                         * ciphers to get the best 
                                         * results for the selection 
                                         * of a system default from 
                                         * what actually is loaded 
                                         * on this server. 
                                         *
                                         */
                                        //$tmp_openssl_cipher_preferred_ARRAY = $this->get_crnrstn('openssl_cipher_preferred_ARRAY');
                                        foreach(self::$R_data[self::$R_data['R_cluster_id']][self::$R_data['R_node_id']]['R_OpenSSL_config']['cipher']['preferred'] as 
                                            $openssl_cipher_index => $openssl_cipher_name)
                                        {

                                            if($tmp_result = $this->isset_crnrstn(
                                                                    'openssl_ARRAY', 
                                                                    'cipher', 
                                                                    'options', 
                                                                    'ISACTIVE', 
                                                                    strtolower($openssl_cipher_name)))
                                            {

                                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                                 * Use this system verified 
                                                 * and compatible algorithm.
                                                 *
                                                 */
                                                $tmp_cipher = $openssl_cipher_name;

                                                $tmp_graceful_err = true;

                                                break 1;

                                            }

                                        }

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * CLR-SSL UGC data 
                                         * validation error 
                                         * message [_openssl_cipher_lib]
                                         *
                                         */
                                        if($tmp_graceful_err == true){

                                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                             * Set environment OpenSSL 
                                             * profile from list 
                                             * of preferred. 
                                             *
                                             */
                                            $this->set_openssl_cipher_profile(
                                                   $tmp_cipher, 
                                                   $data_key, 
                                                   $data_type_family);

                                            $tmp_err_str = 'CRNRSTN :: could not ' . 
                                                           'recognize the provided ' . 
                                                           'OpenSSL cipher, ' .
                                                           strval($data) . 
                                                           ', that is to be used ' . 
                                                           'when encrypting and ' . 
                                                           'decrypting data. The ' . 
                                                           'system OpenSSL cipher ' . 
                                                           'has been manually set to, "' .
                                                           $tmp_cipher . '". ' . 
                                                           $this->data_report(
                                                                  $data, 
                                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                                        }else{

                                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                             * Set the environment 
                                             * OpenSSL profile from 
                                             * the CLR-SSL default. 
                                             *
                                             */
                                            $this->set_openssl_cipher_profile(
                                                   NULL, 
                                                   $data_key, 
                                                   $data_type_family);

                                            $tmp_err_str = 'CRNRSTN :: could not ' . 
                                                           'recognize the ' . 
                                                           'provided OpenSSL cipher, ' .
                                                           strval($data) . 
                                                           ', that is to be used ' . 
                                                           'when encrypting and ' . 
                                                           'decrypting data. No ' . 
                                                           'OpenSSL cipher could ' . 
                                                           'be selected. ' .
                                                           $this->data_report(
                                                                  $data, 
                                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                                        }

                                        /*error_log(__LINE__ . 
                                         *    ' crnrstn $tmp_cipher[' . 
                                         *    $tmp_cipher . 
                                         *    ']. $data_key[' . 
                                         *    $data_key . 
                                         *    ']. self::$openssl_ARRAY[' . 
                                         *    print_r(self::$R_data[self::$R_data['R_cluster_id']][self::$R_data['R_node_id']]['R_OpenSSL_config']['cipher']['options']['ISACTIVE'], true) . 
                                         *    '].');
                                         *
                                         *
                                         * The CRNRSTN :: Lightsaber 
                                         * RoCEv2 SOAP Services Layer 
                                         * (CLR-SSL) Multi-Channel 
                                         * Decoupled Data Object 
                                         * (MC-DDO) Data Storage 
                                         * Services Layer. 
                                         *
                                         * The CLR-SSL MC-DDO 
                                         * Services Layer. 
                                         *
                                         *
                                         * 5
                                         *
                                         * CLR-SSL UGC data 
                                         * input [_openssl_cipher_lib]
                                         *
                                         */
                                        $tmp_output = $this->input_data_value(
                                                             $tmp_cipher, 
                                                             $data_key, 
                                                             $data_type_family, 
                                                             $index, 
                                                             CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                                             $ttl, 
                                                             $spool_resource, 
                                                             $env_key);
                                        $this->input_data_value(
                                               $this->get_crnrstn(
                                                      'openssl_ARRAY', 
                                                      'cipher', 
                                                      'options', 
                                                      'ISACTIVE', 
                                                      strtolower(trim($tmp_cipher))), 
                                               $data_key . '_index', 
                                               $data_type_family, 
                                               $index, 
                                               CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                               $ttl, 
                                               $spool_resource, 
                                               $env_key);

                                        $tmp_ddo_write = true;

                                    }

                                }else{

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * SET SESSION 
                                     * FROM RUNTIME. 
                                     *
                                     * $tmp_cipher = self::$R_data[self::$R_data['R_cluster_id']][self::$R_data['R_node_id']]['R_OpenSSL_config']['cipher']['default']['name'];
                                     *
                                     */
                                    $tmp_cipher = $this->get_crnrstn(
                                                         'openssl_ARRAY', 
                                                         'cipher', 
                                                         'default', 
                                                         'name');

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [_openssl_cipher_lib]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_cipher, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);
                                    /*$this->input_data_value(
                                     *       self::$R_data[self::$R_data['R_cluster_id']][self::$R_data['R_node_id']]['R_OpenSSL_config']['cipher']['options']['ISACTIVE'][\strtolower(trim($tmp_cipher))], 
                                     *       $data_key . '_index', 
                                     *       $data_type_family, 
                                     *       $index, 
                                     *       CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                     *       $ttl, 
                                     *       $spool_resource, 
                                     *       $env_key);
                                     *
                                     */
                                    $this->input_data_value(
                                           $this->get_crnrstn(
                                                  'openssl_ARRAY', 
                                                  'cipher', 
                                                  'options', 
                                                  'ISACTIVE', 
                                                  \strtolower(trim($tmp_cipher))), 
                                           $data_key . '_index', 
                                           $data_type_family, 
                                           $index, 
                                           CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                           $ttl, 
                                           $spool_resource, 
                                           $env_key);

                                    $tmp_ddo_write = true;

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     * Power Methods. 
                                     * -----
                                     * $tmp_ = $this->is_resource_serialization_active(
                                     *                $data_type, $channel);
                                     *
                                     * $tmp_ = $this->get_resource(
                                     *                'err_reporting_profile', 
                                     *                0, 
                                     *                'CRNRSTN::RESOURCE::CONFIGURATION');
                                     *
                                     * $tmp_ = $this->get_resource_count(
                                     *                'err_reporting_profile', 
                                     *                'CRNRSTN::RESOURCE::CONFIGURATION');
                                     *
                                     * if($this->isset_resource(
                                     *           'data_value', 
                                     *           'err_reporting_profile', 
                                     *           'CRNRSTN::RESOURCE::CONFIGURATION') == true)
                                     *
                                     */

                                }

                            }else{

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * This CLR-SSL DDO session 
                                 * powered initialization 
                                 * by-passes server setting 
                                 * lookup and processing. 
                                 *
                                 *self::$R_data[self::$R_data['R_cluster_id']][self::$R_data['R_node_id']]['R_OpenSSL_config']['cipher']['default'][CRNRSTN_INTEGER] = $this->get_resource(
                                 *                                                                                                                                     $data_key . '_index', 
                                 *                                                                                                                                     0, 
                                 *                                                                                                                                     $data_type_family, 
                                 *                                                                                                                                     CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);
                                 *
                                 *$tmp_cipher = self::$R_data[self::$R_data['R_cluster_id']][self::$R_data['R_node_id']]['R_OpenSSL_config']['cipher']['default']['name'] = $this->get_resource(
                                 *                                                                                                                                          $data_key, 
                                 *                                                                                                                                          0, 
                                 *                                                                                                                                          $data_type_family, 
                                 *                                                                                                                                          CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);
                                 *
                                 */
                                $this->set_crnrstn(
                                       'openssl_ARRAY', 
                                       $this->get_resource(
                                              $data_key . '_index', 
                                              0, 
                                              $data_type_family, 
                                              CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION), 
                                       'cipher', 
                                       'default', 
                                       CRNRSTN_INTEGER);
                                $this->set_crnrstn(
                                       'openssl_ARRAY', 
                                       $this->get_resource(
                                              $data_key, 
                                              0, 
                                              $data_type_family, 
                                              CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION), 
                                       'cipher', 
                                       'default', 
                                       'name');

                                /*$tmp_cipher = $this->get_resource(
                                 *                     $data_key, 
                                 *                     0, 
                                 *                     $data_type_family, 
                                 *                     CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);
                                 *
                                 */

                            }

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * CLR-SSL UGC data 
                             * validation error 
                             * message [_openssl_cipher_lib] 
                             *
                             */
                            if($tmp_force_data_err == true){

                                $this->error_log(
                                       $tmp_err_str,
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);

                            }

                        break;
                        case '_openssl_digest_lib':

                            $tmp_digest = \strtolower(\trim($data));

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Persist the results of 
                             * this costly decision 
                             * in session. 
                             *
                             */
                            if(!$this->isset_resource(
                                       'data_value', 
                                       $data_key, 
                                       $data_type_family, 
                                       CRNRSTN_CHANNEL_SESSION) == true)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Do we need to [runtime] 
                                 * load the server 
                                 * OpenSSL ciphers? 
                                 *
                                 */
                                if(!($this->isset_crnrstn(
                                            'openssl_ARRAY', 
                                            'digest_method') == true))
                                {

/*
 *                                    if(!isset($this->oCRNRSTN_ENV)){
 *
 *                                        //
 *                                        // Initialization of 
 *                                        // the CLR-SSL environment. 
 *                                        $this->oCRNRSTN_ENV = new crnrstn_environment($this);
 *
 *                                        //
 *                                        // Initialization of 
 *                                        // the CLR-SSL User. 
 *                                        $this->oCRNRSTN_USR = $this->oCRNRSTN_ENV->return_ENV_oCRNRSTN_USR();
 *
 *                                    }
 *
 */

                                    /*
                                    [Tue Oct 31 12:10:41.717870 2023] [:error] [pid 83474] 
                                    [client 172.16.225.1:58155] 11570 crnrstn
                                    $tmp_data[aes-128-ocb].
                                    $data_key[openssl_cipher].
                                    self::$openssl_ARRAY[
                                        Array\n(\n
                                            [DEFAULT] => Array\n        (\n
                                                [INTEGER] => -1\n
                                                [NAME] => aes-128-ocb\n        )\n\n
                                            [OPTIONS] => Array\n        (\n
                                                [SERVER] => Array\n                (\n
                                                        [0] => blake2b512\n
                                                        [1] => blake2s256\n
                                                        [2] => md4\n
                                                        [3] => ripemd160\n
                                                        [4] => sha1\n 
                                                        [5] => sha224\n
                                                        [6] => sha256\n 
                                                        [7] => sha3-224\n
                                                        [8] => sha3-256\n 
                                                        [9] => sha3-384\n
                                                        [10] => sha3-512\n 
                                                        [11] => sha384\n
                                                        [12] => sha512\n 
                                                        [13] => sha512-224\n
                                                        [14] => sha512-256\n 
                                                        [15] => shake128\n
                                                        [16] => shake256\n 
                                                        [17] => sm3\n
                                                        [18] => whirlpool\n 
                                                        [19] => RSA-MD4\n 
                                                        [20] => RSA-MD5\n 
                                                        [21] => RSA-RIPEMD160\n 
                                                        [22] => RSA-SHA1\n 
                                                        [23] => RSA-SHA1-2\n 
                                                        [24] => RSA-SHA224\n 
                                                        [25] => RSA-SHA256\n 
                                                        [26] => RSA-SHA3-224\n 
                                                        [27] => RSA-SHA3-256\n 
                                                        [28] => RSA-SHA3-384\n 
                                                        [29] => RSA-SHA3-512\n 
                                                        [30] => RSA-SHA384\n 
                                                        [31] => RSA-SHA512\n 
                                                        [32] => RSA-SHA512/224\n 
                                                        [33] => RSA-SHA512/256\n 
                                                        [34] => RSA-SM3\n 
                                                        [35] => id-rsassa-pkcs1-v1_5-with-sha3-224\n 
                                                        [36] => id-rsassa-pkcs1-v1_5-with-sha3-256\n 
                                                        [37] => id-rsassa-pkcs1-v1_5-with-sha3-384\n 
                                                        [38] => id-rsassa-pkcs1-v1_5-with-sha3-512\n 
                                                        [39] => md4WithRSAEncryption\n 
                                                        [40] => md5WithRSAEncryption\n 
                                                        [41] => ripemd\n 
                                                        [42] => ripemd160WithRSA\n 
                                                        [43] => rmd160\n 
                                                        [44] => sha1WithRSAEncryption\n 
                                                        [45] => sha224WithRSAEncryption\n 
                                                        [46] => sha256WithRSAEncryption\n 
                                                        [47] => sha384WithRSAEncryption\n 
                                                        [48] => sha512-224WithRSAEncryption\n 
                                                        [49] => sha512-256WithRSAEncryption\n 
                                                        [50] => sha512WithRSAEncryption\n 
                                                        [51] => sm3WithRSAEncryption\n 
                                                        [52] => ssl3-md5\n 
                                                        [53] => ssl3-sha1\n                )\n\n
                                                [ISACTIVE] => Array\n                (\n
                                                        [blake2b512] => 0\n
                                                        [blake2s256] => 1\n
                                                        [md4] => 2\n
                                                        [ripemd160] => 3\n
                                                        [sha1] => 4\n
                                                        [sha224] => 5\n
                                                        [sha256] => 6\n
                                                        [sha3-224] => 7\n
                                                        [sha3-256] => 8\n
                                                        [sha3-384] => 9\n
                                                        [sha3-512] => 10\n
                                                        [sha384] => 11\n
                                                        [sha512] => 12\n
                                                        [sha512-224] => 13\n
                                                        [sha512-256] => 14\n
                                                        [shake128] => 15\n
                                                        [shake256] => 16\n
                                                        [sm3] => 17\n
                                                        [whirlpool] => 18\n
                                                        [rsa-md4] => 19\n
                                                        [rsa-md5] => 20\n
                                                        [rsa-ripemd160] => 21\n
                                                        [rsa-sha1] => 22\n
                                                        [rsa-sha1-2] => 23\n
                                                        [rsa-sha224] => 24\n
                                                        [rsa-sha256] => 25\n
                                                        [rsa-sha3-224] => 26\n
                                                        [rsa-sha3-256] => 27\n
                                                        [rsa-sha3-384] => 28\n
                                                        [rsa-sha3-512] => 29\n
                                                        [rsa-sha384] => 30\n
                                                        [rsa-sha512] => 31\n
                                                        [rsa-sha512/224] => 32\n
                                                        [rsa-sha512/256] => 33\n
                                                        [rsa-sm3] => 34\n
                                                        [id-rsassa-pkcs1-v1_5-with-sha3-224] => 35\n
                                                        [id-rsassa-pkcs1-v1_5-with-sha3-256] => 36\n
                                                        [id-rsassa-pkcs1-v1_5-with-sha3-384] => 37\n
                                                        [id-rsassa-pkcs1-v1_5-with-sha3-512] => 38\n
                                                        [md4withrsaencryption] => 39\n
                                                        [md5withrsaencryption] => 40\n
                                                        [ripemd] => 41\n
                                                        [ripemd160withrsa] => 42\n
                                                        [rmd160] => 43\n
                                                        [sha1withrsaencryption] => 44\n
                                                        [sha224withrsaencryption] => 45\n
                                                        [sha256withrsaencryption] => 46\n
                                                        [sha384withrsaencryption] => 47\n
                                                        [sha512-224withrsaencryption] => 48\n
                                                        [sha512-256withrsaencryption] => 49\n
                                                        [sha512withrsaencryption] => 50\n
                                                        [sm3withrsaencryption] => 51\n
                                                        [ssl3-md5] => 52\n
                                                        [ssl3-sha1] => 53\n
                                                        )\n\n        )\n\n)\n].

                                     */

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Load available (on the 
                                     * server) OpenSSL digest 
                                     * methods. 
                                     *
                                     */
                                    $tmp_openssl_get_md_methods_ARRAY = $this->set_crnrstn(
                                                                               'openssl_ARRAY', 
                                                                               $this->openssl_get_md_methods(), 
                                                                               'DIGEST_METHOD');

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Update the internal reference 
                                     * data structure per the server's 
                                     * available OpenSSL ciphers and 
                                     * the input data. 
                                     *
                                     *
                                     * CLR-SSL UGC data 
                                     * validation [_openssl_digest_lib]
                                     *
                                     */
                                    foreach((array) $tmp_openssl_get_md_methods_ARRAY as 
                                        $digest_index => $digest_name)
                                    {
                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * TODO :: Is it a guarantee 
                                         *         that the server hash 
                                         *         name will always 
                                         *         be lowercase? 
                                         *
                                         */

                                        /* error_log(__LINE__ . 
                                         *     ' crnrstn [\'OPTIONS\'][\'SERVER\'] openssl_digest $digest_name[' . 
                                         *     $digest_name . 
                                         *     '].');
                                         *
                                         */

                                        $tmp_lower_hash = \strtolower($digest_name);
                                        //self::$R_data[self::$R_data['R_cluster_id']][self::$R_data['R_node_id']]['R_OpenSSL_config']['digest_method']['options']['ISACTIVE'][$tmp_lower_hash] = $digest_index;

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * Store this OpenSSL 
                                         * cipher as being 
                                         * active in the system. 
                                         *
                                         */
                                        $this->set_crnrstn(
                                               'openssl_ARRAY', 
                                               $digest_index, 
                                               'digest_method', 
                                               'options', 
                                               'ISACTIVE', 
                                               $tmp_lower_hash);

                                        if($tmp_lower_hash == $tmp_digest){

                                            $tmp_digest = $digest_name;

                                            /*self::$openssl_cipher_int = $digest_index;
                                             *self::$R_data[self::$R_data['R_cluster_id']][self::$R_data['R_node_id']]['R_OpenSSL_config']['digest_method']['default'][CRNRSTN_INTEGER] = $digest_index;
                                             *self::$R_data[self::$R_data['R_cluster_id']][self::$R_data['R_node_id']]['R_OpenSSL_config']['digest_method']['default']['name']          = $tmp_digest = $digest_name;
                                             *
                                             */

                                            $this->set_crnrstn(
                                                   'openssl_cipher_int', 
                                                   $digest_index);

                                            $this->set_crnrstn(
                                                   'openssl_ARRAY', 
                                                   $digest_index, 
                                                   'digest_method', 
                                                   'default', 
                                                   CRNRSTN_INTEGER);

                                            $this->set_crnrstn(
                                                   'openssl_ARRAY', 
                                                   $digest_name, 
                                                   'digest_method', 
                                                   'default', 
                                                   'name');

                                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                             * Set CLR-SSL environment 
                                             * OpenSSL profile. 
                                             *
                                             */
                                            $this->set_openssl_digest_profile(
                                                   $tmp_digest, 
                                                   $data_key, 
                                                   $data_type_family);

                                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                             * The CRNRSTN :: Lightsaber 
                                             * RoCEv2 SOAP Services Layer 
                                             * (CLR-SSL) Multi-Channel 
                                             * Decoupled Data Object 
                                             * (MC-DDO) Data Storage 
                                             * Services Layer. 
                                             *
                                             * The CLR-SSL MC-DDO 
                                             * Services Layer. 
                                             *
                                             *
                                             * 5
                                             *
                                             * CLR-SSL UGC data 
                                             * input [_openssl_digest_lib]
                                             *
                                             */
                                            $tmp_output = $this->add_resource(
                                                                 $data_key, 
                                                                 $tmp_digest, 
                                                                 $data_type_family, 
                                                                 CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                                                 0);
                                            $this->add_resource(
                                                   $data_key . '_index', 
                                                   $digest_index, 
                                                   $data_type_family, 
                                                   CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                                   0);

                                            $tmp_ddo_write = true;

                                        }

                                    }

                                    if(!$this->isset_resource(
                                               'data_value', 
                                               $data_key, 
                                               $data_type_family, 
                                               CRNRSTN_CHANNEL_SESSION) == true)
                                    {

                                        $tmp_force_data_err = true;
                                        $tmp_graceful_err   = false;

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * Load a custom culled 
                                         * set of boutique OpenSSL 
                                         * digest methods to get 
                                         * the best results for 
                                         * the manual selection of 
                                         * a system default from 
                                         * what actually is loaded 
                                         * on this server. 
                                         * 
                                         */
                                        $tmp_openssl_digest_preferred_ARRAY = $this->get_crnrstn(
                                                                                     'openssl_digest_preferred_ARRAY', 
                                                                                     'digest_method', 
                                                                                     'options', 
                                                                                     'server');
                                        foreach($tmp_openssl_digest_preferred_ARRAY as 
                                            $openssl_digest_index => $openssl_digest_name)
                                        {

                                            if($this->isset_crnrstn(
                                                      'openssl_ARRAY', 
                                                      'digest_method', 
                                                      'options', 
                                                      'ISACTIVE', 
                                                      \strtolower($openssl_digest_index)) == true)
                                            {

                                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                                 * Use this system 
                                                 * verified and 
                                                 * compatible algorithm. 
                                                 *
                                                 */
                                                $tmp_digest = $openssl_digest_name;

                                                $tmp_graceful_err = true;

                                                break 1;

                                            }

                                        }

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * CLR-SSL UGC data 
                                         * validation error 
                                         * message [_openssl_digest_lib]
                                         *
                                         */
                                        if($tmp_graceful_err == true){

                                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                             * Set environment OpenSSL 
                                             * digest profile from list 
                                             * of preferred. 
                                             *
                                             */
                                            $this->set_openssl_digest_profile(
                                                   $tmp_digest, 
                                                   $data_key, 
                                                   $data_type_family);
                                            $tmp_err_str = 'CRNRSTN :: could not recognize ' . 
                                                           'the provided OpenSSL digest, ' .
                                                           strval($data) . 
                                                           ', that is to be used when ' . 
                                                           'encrypting and decrypting ' . 
                                                           'data. The system OpenSSL v' .
                                                           $this->version_openssl() . 
                                                           ' digest has been manually set to, "' .
                                                           $tmp_digest . '". ' . 
                                                           $this->data_report(
                                                                  $data, 
                                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                                        }else{

                                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                             * Set environment OpenSSL digest 
                                             * profile from default. 
                                             *
                                             */
                                            $this->set_openssl_digest_profile(
                                                   NULL, 
                                                   $data_key, 
                                                   $data_type_family);

                                            $tmp_err_str = 'CRNRSTN :: could not ' . 
                                                           'recognize the provided ' . 
                                                           'OpenSSL digest, ' . 
                                                           \strval($data) .
                                                           ', that is to be used ' . 
                                                           'when encrypting and ' . 
                                                           'decrypting data. No ' . 
                                                           'OpenSSL digest could ' . 
                                                           'be selected. ' .
                                                           $this->data_report(
                                                                  $data, 
                                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                                        }

                                        /*error_log(__LINE__ . 
                                         *    ' crnrstn $tmp_digest[' . 
                                         *    $tmp_digest . ']. $data_key[' . 
                                         *    $data_key . 
                                         *    ']. self::$openssl_ARRAY[' . 
                                         *    print_r(self::$R_data[self::$R_data['R_cluster_id']][self::$R_data['R_node_id']]['R_OpenSSL_config']['digest_method']['options']['ISACTIVE'], true) . 
                                         *    '].');
                                         *
                                         */

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * The CRNRSTN :: Lightsaber 
                                         * RoCEv2 SOAP Services Layer 
                                         * (CLR-SSL) Multi-Channel 
                                         * Decoupled Data Object 
                                         * (MC-DDO) Data Storage 
                                         * Services Layer. 
                                         *
                                         * The CLR-SSL MC-DDO 
                                         * Services Layer. 
                                         *
                                         *
                                         * 5
                                         *
                                         * CLR-SSL UGC data 
                                         * input [_openssl_digest_lib]
                                         *
                                         */
                                        $tmp_output = $this->input_data_value(
                                                             $tmp_digest, 
                                                             $data_key, 
                                                             $data_type_family, 
                                                             $index, 
                                                             CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                                             $ttl, 
                                                             $spool_resource, 
                                                             $env_key);
                                        /*$this->input_data_value(
                                         *                 self::$R_data[self::$R_data['R_cluster_id']][self::$R_data['R_node_id']]['R_OpenSSL_config']['digest_method']['options']['ISACTIVE'][\strtolower(trim($tmp_digest))], 
                                         *                 $data_key . '_index', 
                                         *                 $data_type_family, 
                                         *                 $index, CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                         *                 $ttl, 
                                         *                 $spool_resource, 
                                         *                 $env_key);
                                         *
                                         */
                                        $this->input_data_value(
                                               $this->get_crnrstn(
                                                      'openssl_ARRAY', 
                                                      'digest_method', 
                                                      'options', 
                                                      'ISACTIVE', 
                                                      \strtolower(\trim($tmp_digest))), 
                                               $data_key . '_index', 
                                               $data_type_family, 
                                               $index, 
                                               CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                               $ttl, 
                                               $spool_resource, 
                                               $env_key);

                                        $tmp_ddo_write = true;

                                    }

                                }else{

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Get digest 
                                     * from runtime. 
                                     *
                                     */
                                    $tmp_digest = $this->get_crnrstn(
                                                         'openssl_ARRAY', 
                                                         'digest_method', 
                                                         'default', 
                                                         'name');

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [_openssl_digest_lib]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_digest, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);
                                    /*$this->input_data_value(
                                     *                 self::$R_data[self::$R_data['R_cluster_id']][self::$R_data['R_node_id']]['R_OpenSSL_config']['digest_method']['options']['ISACTIVE'][\strtolower(trim($tmp_digest))], 
                                     *                 $data_key . '_index', 
                                     *                 $data_type_family, 
                                     *                 $index, 
                                     *                 CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                     *                 $ttl, 
                                     *                 $spool_resource, 
                                     *                 $env_key);
                                     *
                                     */
                                    $this->input_data_value(
                                           $this->get_crnrstn(
                                                  'openssl_ARRAY', 
                                                  'digest_method', 
                                                  'options', 
                                                  'ISACTIVE', 
                                                  \strtolower(trim($tmp_digest))), 
                                           $data_key . '_index', 
                                           $data_type_family, 
                                           $index, 
                                           CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                           $ttl, 
                                           $spool_resource, 
                                           $env_key);

                                    $tmp_ddo_write = true;

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CLR-SSL Multi-Channel Decoupled 
                                     * Data Object (MC-DDO) 
                                     * power methods. 
                                     *
                                     * $this->is_resource_serialization_active(
                                     *        $data_type, 
                                     *        $channel);
                                     *
                                     * $tmp_ = $this->get_resource(
                                     *                'err_reporting_profile', 
                                     *                0, 
                                     *                'CRNRSTN::RESOURCE::CONFIGURATION');
                                     *
                                     * $tmp_ = $this->get_resource_count(
                                     *                'err_reporting_profile', 
                                     *                'CRNRSTN::RESOURCE::CONFIGURATION');
                                     *
                                     * if($this->isset_resource(
                                     *           'data_value', 
                                     *           'err_reporting_profile', 
                                     *           'CRNRSTN::RESOURCE::CONFIGURATION') == true)
                                     *
                                     */

                                }

                            }else{

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * This CLR-SSL MC-DDO session 
                                 * powered initialization by-passes 
                                 * server setting lookup and processing. 
                                 *
                                 *
                                 * self::$R_data[self::$R_data['R_cluster_id']][self::$R_data['R_node_id']]['R_OpenSSL_config']['digest_method']['default'][CRNRSTN_INTEGER] = $this->get_resource(
                                 *                                                                                                                                             $data_key . '_index', 
                                 *                                                                                                                                             0, 
                                 *                                                                                                                                             $data_type_family, 
                                 *                                                                                                                                             CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);
                                 *
                                 */
                                $this->set_crnrstn(
                                       'openssl_ARRAY', 
                                       $this->get_resource(
                                              $data_key . '_index', 
                                              0, 
                                              $data_type_family, 
                                              CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION), 
                                       'digest_method', 
                                       'default', 
                                       CRNRSTN_INTEGER);

                                /*$tmp_digest = self::$R_data[self::$R_data['R_cluster_id']][self::$R_data['R_node_id']]['R_OpenSSL_config']['digest_method']['default']['name'] = $this->get_resource(
                                 *                                                                                                                                                 $data_key, 
                                 *                                                                                                                                                 0, 
                                 *                                                                                                                                                 $data_type_family, 
                                 *                                                                                                                                                 CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);
                                 *
                                 */
                                $tmp_digest = $this->set_crnrstn(
                                                     'openssl_ARRAY', 
                                                     $this->get_resource(
                                                            $data_key, 
                                                            0, 
                                                            $data_type_family, 
                                                            CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION), 
                                                     'digest_method', 
                                                     'default', 
                                                     'name');

                            }

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * CLR-SSL UGC data 
                             * validation error 
                             * message [_openssl_digest_lib]
                             *
                             */
                            if($tmp_force_data_err == true){

                                $this->error_log(
                                       $tmp_err_str, 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);

                            }

                        break;
                        case '_hmac_lib':

                            $tmp_hmac = strtolower(trim($data));

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Persist the results of 
                             * this costly decision 
                             * in session. 
                             *
                             */
                            if(!$this->isset_resource(
                                       'data_value', 
                                       $data_key, 
                                       $data_type_family, 
                                       CRNRSTN_CHANNEL_SESSION) == true)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Do we need to [runtime] 
                                 * load the server 
                                 * HMAC library? 
                                 *
                                 *
                                 * if(self::$hmac_hash_algorithm_ARRAY['DEFAULT'][CRNRSTN_INTEGER] == -1){
                                 *
                                 */
                                if(!($this->isset_crnrstn('R_hmac_hash_config') == true)){

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Load available (on the 
                                     * server) HMAC hash algorithms.
                                     *
                                     *
                                     * self::$hmac_hash_algorithm_ARRAY['options']['server'] = hash_algos();
                                     *
                                     */
                                    $tmp_hmac_hash_algorithm_ARRAY = $this->set_crnrstn(
                                                                            'R_hmac_hash_config', 
                                                                            hash_algos());

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Update the internal reference 
                                     * data structure per the server's 
                                     * available HMAC algorithms and 
                                     * the input data. 
                                     *
                                     *
                                     * CLR-SSL UGC data 
                                     * validation [_hmac_lib]
                                     *
                                     */
                                    foreach((array) $tmp_hmac_hash_algorithm_ARRAY['options']['server'] as 
                                        $hash_index => $hash_name)
                                    {
                                         /**
                                         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * TODO :: Is it a guarantee that 
                                         *         the server provided hash 
                                         *         name will always be lowercase?
                                         *
                                         */

                                        $tmp_lower_hash = \strtolower($hash_name);

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * Store this hash 
                                         * algorithm as being 
                                         * active in the system. 
                                         *
                                         *
                                         * self::$hmac_hash_algorithm_ARRAY['options']['ISACTIVE'][$tmp_lower_hash] = $hash_index;
                                         *
                                         */
                                        $this->set_crnrstn(
                                               'R_hmac_hash_config', 
                                               $hash_index, 
                                               'options', 
                                               'ISACTIVE', 
                                               $tmp_lower_hash);

                                        if($tmp_lower_hash == $tmp_hmac){

                                            $tmp_hmac = $hash_name;

                                            $this->set_crnrstn(
                                                   'hmac_hash_algorithm_int', 
                                                   $hash_index);

                                            //self::$hmac_hash_algorithm_ARRAY['DEFAULT'][CRNRSTN_INTEGER] = $hash_index;
                                            $this->set_crnrstn(
                                                   'R_hmac_hash_config', 
                                                   $hash_index, 
                                                   'default', 
                                                   CRNRSTN_INTEGER);

                                            //self::$hmac_hash_algorithm_ARRAY['DEFAULT']['NAME'] = $tmp_hmac = $hash_name;
                                            $this->set_crnrstn(
                                                   'R_hmac_hash_config', 
                                                   $tmp_hmac, 
                                                   'default', 
                                                   'name');

                                            /*
                                            //
                                            // Return pre-initialization default:
                                            $tmp_hash_name = self::$hmac_hash_algorithm_ARRAY['default']['name'];

                                            //
                                            // Return post-initialization default:
                                            $tmp_hash_name = self::$hmac_hash_algorithm_ARRAY['options']['server'][self::$hmac_hash_algorithm_ARRAY['default'][CRNRSTN_INTEGER]];

                                            //
                                            // Return system available:
                                            // $tmp_hash_name = self::$hmac_hash_algorithm_ARRAY['options']['server'][self::$hmac_hash_algorithm_int];

                                            //$tmp_openssl_cipher_best_quality_ARRAY = $this->openssl_get_cipher_methods();
                                            //$tmp_openssl_cipher_all_ARRAY = $this->openssl_get_cipher_methods(false, false);

                                            //error_log(
                                            //    __LINE__ . 
                                            //    ' crnrstn best openssl_cipher [' . 
                                            //    print_r($tmp_openssl_cipher_best_quality_ARRAY, true) . 
                                            //    '].');
                                            //
                                            //error_log(
                                            //    __LINE__ . 
                                            //    ' crnrstn all openssl_cipher [' . 
                                            //    print_r($tmp_openssl_cipher_all_ARRAY, true) . 
                                            //    '].');

                                             */

                                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                             * The CRNRSTN :: Lightsaber 
                                             * RoCEv2 SOAP Services Layer 
                                             * (CLR-SSL) Multi-Channel 
                                             * Decoupled Data Object 
                                             * (MC-DDO) Data Storage 
                                             * Services Layer. 
                                             *
                                             * The CLR-SSL MC-DDO 
                                             * Services Layer. 
                                             *
                                             *
                                             * 5
                                             *
                                             * CLR-SSL UGC data 
                                             * input [_hmac_lib]
                                             *
                                             */
                                            $tmp_output = $this->add_resource(
                                                                 $data_key, 
                                                                 $tmp_hmac, 
                                                                 $data_type_family, 
                                                                 CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                                                 0);
                                            $this->add_resource(
                                                   $data_key .'_index', 
                                                   $hash_index, 
                                                   $data_type_family, 
                                                   CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                                   0);

                                            $tmp_ddo_write = true;

                                        }

                                    }

                                    if(!($this->isset_resource(
                                                'data_value', 
                                                $data_key, 
                                                $data_type_family, 
                                                CRNRSTN_CHANNEL_SESSION) == true))
                                    {

                                        $tmp_force_data_err = true;
                                        $tmp_graceful_err = false;

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * Load a custom culled set 
                                         * of boutique HMAC algorithms 
                                         * to get the best results for 
                                         * the manual selection of a 
                                         * system default from what 
                                         * actually is loaded on 
                                         * this server. 
                                         *
                                         */
                                        $tmp_hmac_algorithm_preferred_ARRAY = $this->get_crnrstn('hmac_algorithm_preferred_ARRAY');
                                        foreach($tmp_hmac_algorithm_preferred_ARRAY as 
                                            $hmac_alg_index => $hmac_alg_name)
                                        {

                                            //if(isset(self::$hmac_hash_algorithm_ARRAY['options']['ISACTIVE'][strtolower($hmac_alg_index)])){
                                            if($this->isset_crnrstn(
                                                      'R_hmac_hash_config', 
                                                      'options', 
                                                      'ISACTIVE', 
                                                      \strtolower($hmac_alg_index)) == true)
                                            {

                                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                                 * Use this system 
                                                 * verified and 
                                                 * compatible algorithm. 
                                                 *
                                                 */
                                                $tmp_hmac = $hmac_alg_name;
                                                $tmp_graceful_err = true;

                                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                                 * CLR-SSL UGC data 
                                                 * validation error 
                                                 * message [_hmac_lib] 
                                                 *
                                                 */
                                                if($tmp_graceful_err == true){

                                                    $tmp_err_str = 'CRNRSTN :: could not ' . 
                                                                   'recognize the provided ' . 
                                                                   'HMAC library algorithm, ' .
                                                                   \strval($data) . 
                                                                   ', that is to be used ' . 
                                                                   'when generating keyed ' . 
                                                                   'hash values. The system ' . 
                                                                   'HMAC library algorithm ' . 
                                                                   'has been manually set to, "' . 
                                                                   $tmp_hmac . '". ' .
                                                                   $this->data_report(
                                                                          $data, 
                                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                                }else{

                                                    $tmp_err_str = 'CRNRSTN :: could not ' . 
                                                                   'recognize the provided ' . 
                                                                   'HMAC library algorithm, ' .
                                                                   \strval($data) . 
                                                                   ', that is to be used when ' . 
                                                                   'generating keyed hash ' . 
                                                                   'values. No OpenSSL cipher ' . 
                                                                   'could be selected. ' .
                                                                   $this->data_report(
                                                                          $data, 
                                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                                }

                                            }

                                        }

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * The CRNRSTN :: Lightsaber 
                                         * RoCEv2 SOAP Services Layer 
                                         * (CLR-SSL) Multi-Channel 
                                         * Decoupled Data Object 
                                         * (MC-DDO) Data Storage 
                                         * Services Layer. 
                                         *
                                         * The CLR-SSL MC-DDO 
                                         * Services Layer. 
                                         *
                                         *
                                         * 5
                                         *
                                         * CLR-SSL UGC data 
                                         * input [_hmac_lib]
                                         *
                                         */
                                        $tmp_output = $this->input_data_value(
                                                             $tmp_hmac, 
                                                             $data_key, 
                                                             $data_type_family, 
                                                             $index, 
                                                             CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                                             $ttl, 
                                                             $spool_resource, 
                                                             $env_key);
                                        /**
                                         *$this->input_data_value(
                                         *                 self::$hmac_hash_algorithm_ARRAY['options']['ISACTIVE'][strtolower(trim($tmp_hmac))], 
                                         *                 $data_key . '_index', 
                                         *                 $data_type_family, 
                                         *                 $index, 
                                         *                 CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                         *                 $ttl, 
                                         *                 $spool_resource, 
                                         *                 $env_key);
                                         *
                                         */
                                        $this->input_data_value(
                                               $this->get_crnrstn(
                                                      'R_hmac_hash_config', 
                                                      'options', 
                                                      'ISACTIVE', 
                                                      strtolower(trim($tmp_hmac))), 
                                               $data_key . '_index', 
                                               $data_type_family, 
                                               $index, 
                                               CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                               $ttl, 
                                               $spool_resource, 
                                               $env_key);

                                        $tmp_ddo_write = true;

                                    }

                                }else{

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Set session 
                                     * from runtime. 
                                     *
                                     * 
                                     * $tmp_hmac = self::$hmac_hash_algorithm_ARRAY['DEFAULT']['NAME'];
                                     *
                                     */
                                    $tmp_hmac = $this->get_crnrrstn(
                                                       'R_hmac_hash_config', 
                                                       'default', 
                                                       'name');

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [_hmac_lib]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_hmac, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);
                                    /**
                                     *$this->input_data_value(
                                     *                 self::$hmac_hash_algorithm_ARRAY['options']['ISACTIVE'][strtolower(trim($tmp_hmac))], 
                                     *                 $data_key . '_index', 
                                     *                 $data_type_family, 
                                     *                 $index, 
                                     *                 CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                     *                 $ttl, 
                                     *                 $spool_resource, 
                                     *                 $env_key);
                                     *
                                     */
                                    $this->input_data_value(
                                           $this->get_crnrstn(
                                                  'R_hmac_hash_config', 
                                                  'options',  
                                                  'ISACTIVE', 
                                                  \strtolower(\trim($tmp_hmac))), 
                                           $data_key . '_index', 
                                           $data_type_family, 
                                           $index, 
                                           CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION, 
                                           $ttl, 
                                           $spool_resource, 
                                           $env_key);

                                    $tmp_ddo_write = true;

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     * Power Methods.
                                     * -----
                                     * $this->oCRNRSTN->is_resource_serialization_active(
                                     *                  $data_type, 
                                     *                  $channel);
                                     *
                                     * $tmp_ = $this->oCRNRSTN->get_resource(
                                     *                          'err_reporting_profile', 
                                     *                          0, 
                                     *                          'CRNRSTN::RESOURCE::CONFIGURATION');
                                     *
                                     * $tmp_ = $this->oCRNRSTN->get_resource_count(
                                     *                          'err_reporting_profile', 
                                     *                          'CRNRSTN::RESOURCE::CONFIGURATION');
                                     *
                                     * if($this->oCRNRSTN->isset_resource(
                                     *           'data_value', 
                                     *           'err_reporting_profile', 
                                     *           'CRNRSTN::RESOURCE::CONFIGURATION') == true)
                                     *
                                     */

                                }

                            }else{

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * This CLR-SSL DDO session 
                                 * powered initialization 
                                 * by-passes server setting 
                                 * lookup and processing. 
                                 *
                                 *
                                 *self::$hmac_hash_algorithm_ARRAY['DEFAULT'][CRNRSTN_INTEGER] = $this->get_resource(
                                 *                                                                      $data_key . '_index', 
                                 *                                                                      0, 
                                 *                                                                      $data_type_family, 
                                 *                                                                      CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);
                                 *
                                 *$tmp_hmac = self::$hmac_hash_algorithm_ARRAY['DEFAULT']['NAME'] = $this->get_resource(
                                 *                                                                         $data_key, 
                                 *                                                                         0, 
                                 *                                                                         $data_type_family, 
                                 *                                                                         CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);
                                 *
                                 */
                                $this->set_crnrstn(
                                       'R_hmac_hash_config', 
                                       $this->get_resource(
                                              $data_key . '_index', 
                                              0, 
                                              $data_type_family, 
                                              CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION), 
                                       'default', 
                                       CRNRSTN_INTEGER);
                                $this->set_crnrstn(
                                       'R_hmac_hash_config', 
                                       $this->get_resource(
                                              $data_key, 
                                              0, 
                                              $data_type_family, 
                                              CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION), 
                                       'default', 
                                       'name');

                            }

                            if($tmp_force_data_err == true){

                                $this->error_log(
                                       $tmp_err_str, 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);

                            }

                            /**
                            [Thu Oct 12 01:55:06.735017 2023] [:error] [pid 80241] 
                            [client 172.16.225.1:56141] 10387 crnrstn hmac [
                            Array(
                                [DEFAULT] => Array(
                                    [INTEGER] => 5
                                    [NAME] => sha256)
                                [OPTIONS] => Array(
                                    [SERVER] => Array(
                                        [0] => md2              
                                        [1] => md4              
                                        [2] => md5
                                        [3] => sha1             
                                        [4] => sha224           
                                        [5] => sha256
                                        [6] => sha384           
                                        [7] => sha512           
                                        [8] => ripemd128
                                        [9] => ripemd160        
                                        [10] => ripemd256       
                                        [11] => ripemd320
                                        [12] => whirlpool       
                                        [13] => tiger128,3      
                                        [14] => tiger160,3
                                        [15] => tiger192,3      
                                        [16] => tiger128,4      
                                        [17] => tiger160,4
                                        [18] => tiger192,4      
                                        [19] => snefru          
                                        [20] => snefru256
                                        [21] => gost            
                                        [22] => gost-crypto     
                                        [23] => adler32
                                        [24] => crc32           
                                        [25] => crc32b          
                                        [26] => fnv132
                                        [27] => fnv1a32         
                                        [28] => fnv164          
                                        [29] => fnv1a64
                                        [30] => joaat           
                                        [31] => haval128,3      
                                        [32] => haval160,3
                                        [33] => haval192,3      
                                        [34] => haval224,3      
                                        [35] => haval256,3
                                        [36] => haval128,4      
                                        [37] => haval160,4      
                                        [38] => haval192,4
                                        [39] => haval224,4      
                                        [40] => haval256,4      
                                        [41] => haval128,5
                                        [42] => haval160,5      
                                        [43] => haval192,5      
                                        [44] => haval224,5
                                        [45] => haval256,5
                                        )
                                [ISACTIVE] => Array(
                                        [sha256] => 5
                                        )
                                )
                            )].

                             */

                        break;
                        case '_integer':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * This should 
                             * be a number. 
                             *
                             */
                            if(is_numeric($data)){

                                $tmp_int = (int) $data;

                            }else{

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * It would certainly appear 
                                 * that this is not a valid 
                                 * number for the 
                                 * requested operation. 
                                 *
                                 * We shall run a genuinely 
                                 * invalid calculation and 
                                 * use the system error that 
                                 * is generated to clearly 
                                 * communicate that the input 
                                 * datum is an "invalid number". 
                                 *
                                 * This may be the only way 
                                 * that an application which 
                                 * absolutely loves numbers as 
                                 * much as the CRNRSTN :: 
                                 * Lightsaber RoCEv2 SOAP 
                                 * Services Layer (CLR-SSL) 
                                 * loves numbers would be able 
                                 * to produce a respectable 
                                 * error message on this, the 
                                 * subject matter. 
                                 * 
                                 * And the CLR-SSL has really 
                                 * been loving the numbers 
                                 * lately, man. We happily pay 
                                 * the price ($$$) of compute 
                                 * to acquire an authentic NAN 
                                 * (not a number), real bad data. 
                                 *
                                 * We buy a properly shit value 
                                 * that can be consistently 
                                 * and reliably returned with 
                                 * confidence by the CLR-SSL. 
                                 *
                                 * And all this...even in the 
                                 * midst of "these economic 
                                 * times", at that! 
                                 *
                                 * CRNRSTN :: <3's... 
                                 * ...(int) CRNRSTN_INTEGER 4 LIFE! 
                                 *
                                 *
                                 * 5 :: Monday, December 4, 2023 @ 1117 hrs.
                                 * Last Modified: Friday, February 27, 2026 @ 0151 hrs.
                                 *
                                 * See, https://www.php.net/manual/en/function.is-nan.php
                                 *
                                 */
                                $tmp_int = sqrt(-1);

                            }

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * CLR-SSL UGC data 
                             * validation error 
                             * message [_integer]
                             *
                             */
                            switch($data_key){
                                case 'max_email_send_30_day':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'max_email_send_30_day', 
                                     * 500, 
                                     * 'CRNRSTN::RESOURCE::COMMUNICATIONS');
                                     *
                                     */

                                    $tmp_force_data_err = true;
                                    $tmp_err_str = $data_profile . '[' . 
                                                   $data_key . 
                                                   '] could not be configured with the input, ' .
                                                   strval($tmp_int) . '. ' . 
                                                   strval($data) . 
                                                   ', was the value that was ' . 
                                                   'provided as method input to ' . 
                                                   'this environment. ' . 
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;
                                case 'max_length_plaid_performance_report':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'max_length_plaid_performance_report', 
                                     * 5, 
                                     * 'CRNRSTN::RESOURCE::APPLICATION_ACCELERATION');
                                     *
                                     */

                                    $tmp_force_data_err = true;
                                    $tmp_err_str = $data_profile . '[' . 
                                                   $data_key . 
                                                   '] could not be ' . 
                                                   'configured with the input, ' .
                                                    strval($tmp_int) . '. ' . 
                                                    strval($data) . 
                                                    ', was the value that was ' . 
                                                    'provided as method input ' . 
                                                    'to this environment. ' . 
                                                    $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;
                                case 'ssdtla_session_data_ttl':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'ssdtla_session_data_ttl', 
                                     * 6000, 
                                     * 'CRNRSTN::RESOURCE::GENERAL_SETTINGS');
                                     *
                                     */

                                    $tmp_force_data_err = true;
                                    $tmp_err_str = $data_profile . '[' . 
                                                   $data_key . 
                                                   '] could not be ' . 
                                                   'configured with the input, ' .
                                                   strval($tmp_int) . '. ' . 
                                                   strval($data) . 
                                                   ', was the value that was ' . 
                                                   'provided as method input ' . 
                                                   'to this environment. ' .
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;
                                case 'page_load_ttl':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'page_load_ttl', 
                                     * 3, 
                                     * 'CRNRSTN::RESOURCE::GENERAL_SETTINGS');
                                     *
                                     */

                                    $tmp_force_data_err = true;
                                    $tmp_err_str = $data_profile . '[' . 
                                                   $data_key . 
                                                   '] could not be ' . 
                                                   'configured with the input, ' .
                                                   strval($tmp_int) . '. ' . 
                                                   strval($data) . 
                                                   ', was the value that was ' . 
                                                   'provided as method ' . 
                                                   'input to this environment. ' .
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;
                                case 'ssdtla_module_sync_ttl':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'ssdtla_module_sync_ttl', 
                                     * 33, 
                                     * 'CRNRSTN::RESOURCE::GENERAL_SETTINGS');
                                     *
                                     */

                                    $tmp_force_data_err = true;
                                    $tmp_err_str = $data_profile . '[' . 
                                                   $data_key . 
                                                   '] could not be ' . 
                                                   'configured with the input, ' .
                                                   strval($tmp_int) . '. ' . 
                                                   strval($data) . 
                                                   ', was the value that was ' . 
                                                   'provided as method ' . 
                                                   'input to this environment. ' .
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;
                                case 'share_module_inactivity_close_ttl':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'share_module_inactivity_close_ttl', 
                                     * 2, 
                                     * 'CRNRSTN::RESOURCE::GENERAL_SETTINGS');
                                     *
                                     */

                                    $tmp_force_data_err = true;
                                    $tmp_err_str = $data_profile . '[' . 
                                                   $data_key . 
                                                   '] could not be ' . 
                                                   'configured with the input, ' .
                                                   strval($tmp_int) . '. ' . 
                                                   strval($data) . 
                                                   ', was the value that was ' . 
                                                   'provided as method ' . 
                                                   'input to this environment. ' .
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;
                                case 'inactivity_refresh_ttl':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'inactivity_refresh_ttl', 
                                     * 300, 
                                     * 'CRNRSTN::RESOURCE::GENERAL_SETTINGS');
                                     *
                                     */

                                    $tmp_force_data_err = true;
                                    $tmp_err_str = $data_profile . '[' . 
                                                   $data_key . 
                                                   '] could not be ' . 
                                                   'configured with the input, ' .
                                                   strval($tmp_int) . '. ' . 
                                                   strval($data) . 
                                                   ', was the value that was ' . 
                                                   'provided as method ' . 
                                                   'input to this environment. ' .
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;
                                case 'client_debug_mode':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 'client_debug_mode', 
                                     * CRNRSTN_DEBUG_OFF, 
                                     * 'CRNRSTN::RESOURCE::GENERAL_SETTINGS'); 
                                     *
                                     * Where, CRNRSTN JS :: 
                                     * DEBUG MODES = [CRNRSTN_DEBUG_OFF, 
                                     *                100, 
                                     *                200, 
                                     *                300, 
                                     *                420, 
                                     *                500];
                                     *
                                     */

                                    $tmp_force_data_err = true;
                                    $tmp_err_str = $data_profile . '[' . 
                                                   $data_key . 
                                                   '] could not be ' . 
                                                   'configured with the input, ' .
                                                   strval($tmp_int) . '. ' . 
                                                   strval($data) . 
                                                   ', was the value that was ' . 
                                                   'provided as method ' . 
                                                   'input to this environment. ' .
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;
                                /**
                                case 'browser_cookie_privacy_accept_module':
                                // Edit: This feature has been DEPRECATED.
                                //       5 :: Wednesday, February 18, 2026 @ 0503 hrs.

                                    //'browser_cookie_privacy_accept_module', CRNRSTN_UI_COOKIE_YESNO, 'CRNRSTN::RESOURCE::COOKIE_PRIVACY');
                                
                                    $tmp_force_data_err = true;
                                    $tmp_err_str = $data_profile . '[' . $data_key . '] could not be configured with the input, ' .
                                        strval($tmp_int) . '. ' . strval($data) . ', was the value that was provided as method input to this environment. ' .
                                        $this->data_report($data, 'CRNRSTN :: MC-DDO UGC Input Data Report');

                                 */
                                break;
                                case 'R_salt_default_length':

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CLR-SSL UGC data 
                                     * validation [_integer] 
                                     *
                                     */
                                    if(!($tmp_int > 0) || 
                                        is_nan($tmp_int))
                                    {

                                        $tmp_salt_string_length = $this->get_resource(
                                                                         'R_salt_default_length', 
                                                                         0, 
                                                                         'CRNRSTN::RESOURCE::GENERAL_SETTINGS');

                                        if((int) $tmp_salt_string_length < 1){

                                            $tmp_salt_string_length = $this->get_crnrstn('R_salt_default_length');

                                        }

                                        $tmp_force_data_err = true;

                                        $tmp_err_str = 'The system salt string ' . 
                                                       'length could not be ' . 
                                                       'configured with the input, ' .
                                                       strval($tmp_int) . '. ' . 
                                                       strval($data) . 
                                                       ', was the value that was ' . 
                                                       'provided as method input ' . 
                                                       'to this environment. The ' . 
                                                       'default salt string length ' . 
                                                       'has been manually set to, (' .
                                                       $this->gettype($tmp_salt_string_length) . ') ' . 
                                                       $tmp_salt_string_length . '. ' .
                                                       $this->data_report(
                                                              $data, 
                                                              'CRNRSTN :: MC-DDO UGC Input Data Report');

                                        $tmp_int = $tmp_salt_string_length;

                                    }else{

                                        $this->set_crnrstn('R_salt_default_length', $tmp_int);

                                    }

                                break;
                                case 'byte_reporting_precision':

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * -1 = Operating system 
                                     *      restricted. 
                                     *
                                     * CLR-SSL UGC data 
                                     * validation [_integer]
                                     *
                                     */
                                    if((!($tmp_int == -1) && 
                                        !($tmp_int >= 0)) || 
                                        is_nan($tmp_int))
                                    {

                                        $tmp_force_data_err = true;

                                        $tmp_byte_reporting_precision = $this->get_resource(
                                                                               'byte_reporting_precision', 
                                                                               0, 
                                                                               'CRNRSTN::RESOURCE::FILE_SYSTEM_REPORTING');

                                        if((int) $tmp_byte_reporting_precision < 1){

                                            $tmp_byte_reporting_precision = $this->get_crnrstn('byte_reporting_precision');

                                        }

                                        $tmp_int = $tmp_byte_reporting_precision;
                                        $tmp_err_str = 'CRNRSTN :: could not ' . 
                                                       'configure byte reporting ' . 
                                                       'precision for the ' . 
                                                       'environment with the input, (' .
                                                       $this->gettype($tmp_int) . ') ' . 
                                                       strval($tmp_int) . '. ' . 
                                                       strval($data) .
                                                       ', was the value that was ' . 
                                                       'provided as method input to ' . 
                                                       'this environment. System byte ' . 
                                                       'precision has been manually set to, (' .
                                                       $this->gettype($tmp_byte_reporting_precision) . ') ' . 
                                                       $tmp_byte_reporting_precision . '. ' .
                                                       $this->data_report(
                                                              $data, 
                                                              'CRNRSTN :: MC-DDO UGC Input Data Report');

                                    }

                                break;
                                default:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CLR-SSL UGC data 
                                     * validation [_integer]
                                     * 
                                     * 
                                     * 5 :: Friday, October 13, 2023 @ "01" 0234.56 hrs.
                                     *
                                     * "01010101...split the atom...Oh, 
                                     * Oh, Oh, Oh. You know what I mean."
                                     *
                                     * Yeah, you know what I mean: 
                                     * "Oh, Oh, Oh"... 
                                     * Yeah, you know what 
                                     * I mean..."Oh"...yeah. ;) 
                                     *
                                     */
                                    if(is_nan($tmp_int)){

                                        $tmp_force_data_err = true;
                                        $tmp_err_str = 'CRNRSTN :: could not apply the ' . 
                                                       $data_key . ', ' . 
                                                       strval($tmp_int) . '. ' .
                                                       strval($data) . 
                                                       ', was the value that was provided ' . 
                                                       'as method input to this environment. ' .
                                                       $this->data_report(
                                                              $data, 
                                                              'CRNRSTN :: MC-DDO UGC Input Data Report');

                                        $this->error_log(
                                               $tmp_err_str, 
                                               __LINE__, 
                                               __METHOD__, 
                                               __FILE__, 
                                               CRNRSTN_SETTINGS_CRNRSTN);

                                        return NULL;

                                    }

                                break;

                            }

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [_integer]
                             *
                             */
                            $tmp_output = $this->input_data_value(
                                                 $tmp_int, 
                                                 $data_key, 
                                                 $data_type_family, 
                                                 $index, 
                                                 $data_authorization_profile, 
                                                 $ttl, 
                                                 $spool_resource, 
                                                 $env_key);
                            $tmp_ddo_write = true;

                            if($tmp_force_data_err == true){

                                $this->error_log(
                                       $tmp_err_str, 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);

                            }

                        break;
                        case '_byte_unit_system':

                            $tmp_str = strtoupper(trim($data));

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * CLR-SSL UGC data 
                             * validation [_byte_unit_system]
                             *
                             */
                            switch($tmp_str){
                                case 'ISO_80000':
                                case 'SI_Metric':
                                    // SILENCE IS GOLDEN.
                                break;
                                default:
                                    //ISO_80000 WITH ERROR.

                                    $tmp_str = 'ISO_80000';
                                    $tmp_force_data_err = true;
                                    $tmp_force_data_err_msg = 'Unable to load system ' . 
                                                              'of units for byte reporting ' . 
                                                              'from the provided (' . 
                                                              $this->gettype($data) . ') data, ' . 
                                                              strval($data) . 
                                                              '. The system of reporting for ' . 
                                                              'units of bytes has manually ' . 
                                                              'been set to "' . 
                                                              $tmp_str . '". ' . 
                                                              $this->data_report(
                                                                     $data, 
                                                                     'CRNRSTN :: MC-DDO UGC Input Data Report');

                                break;

                            }

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * INPUT [_byte_unit_system]
                             *
                             */
                            $tmp_output = $this->input_data_value(
                                                 $tmp_str, 
                                                 $data_key, 
                                                 $data_type_family, 
                                                 $index, 
                                                 $data_authorization_profile, 
                                                 $ttl, 
                                                 $spool_resource, 
                                                 $env_key);
                            $tmp_ddo_write = true;

                            if($tmp_force_data_err == true){

                                $this->error_log(
                                       $tmp_force_data_err_msg, 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);

                            }

                        break;
                        case '_channel_init_sequence':

                            $tmp_str = '';
                            $tmp_flag_ARRAY = array();

                            /**
                             *error_log(
                             *    __LINE__ . 
                             *    ' crnrstn $data_profile[' . 
                             *    $data_profile . ']. $data_key[' . 
                             *    $data_key . ']. $data[' . 
                             *    print_r($data, true) . 
                             *    '].');
                             *
                             */

                            $tmp_data = strtoupper(trim((string) $data));
                            if(strlen($tmp_data) > 0){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Break input into 
                                 * distinct letters. 
                                 *
                                 */
                                $tmp_char_ARRAY = str_split($data);

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * If the char value (e.g. a letter) 
                                 * is official, string concatenate 
                                 * the value. 
                                 * 
                                 * CLR-SSL UGC data 
                                 * validation [_channel_init_sequence]
                                 *
                                 */
                                foreach($tmp_char_ARRAY as 
                                    $char_index => $char)
                                {

                                    /**
                                    get_channel_config($channel, $index_0 = NULL, $index_1 = NULL)

                                    RETURN DATA STRUCTURE:
                                    $tmp_channel_ARRAY['SOURCEID'][CRNRSTN_INTEGER] = CRNRSTN_CHANNEL_SOAP;
                                    $tmp_channel_ARRAY['SOURCEID'][CRNRSTN_STRING] = 'CRNRSTN_CHANNEL_SOAP';
                                    $tmp_channel_ARRAY['ENCRYPTION']['PROFILE'][CRNRSTN_INTEGER] = CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP;
                                    $tmp_channel_ARRAY['ENCRYPTION']['PROFILE'][CRNRSTN_STRING] = 'CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP';
                                    $tmp_channel_ARRAY['CHAR'] = 'O';
                                    $tmp_channel_ARRAY['NAME'] = 'soap';
                                    $tmp_channel_ARRAY['DESCRIPTION'] = 'O :: SIMPLE OBJECT ACCESS PROTOCOL (NuSOAP 0.9.5, SOAP 1.1)';
                                    $tmp_channel_ARRAY['AUTHORIZATION']['PROFILE']['PRIMARY'][CRNRSTN_INTEGER] = array(CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_GET => CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_GET);
                                    $tmp_channel_ARRAY['AUTHORIZATION']['PROFILE']['PRIMARY'][CRNRSTN_STRING] = array('CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_GET' => CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_GET);
                                    $tmp_channel_ARRAY['AUTHORIZATION']['PROFILE']['AUTHORIZED'][CRNRSTN_INTEGER] = array();
                                    $tmp_channel_ARRAY['AUTHORIZATION']['PROFILE']['AUTHORIZED'][CRNRSTN_STRING] = array();

                                     */

                                    if($tmp_channel_char = $this->get_channel_config(
                                                                  $char, 
                                                                  'CHAR'))
                                    {

                                        $tmp_flag_ARRAY[$tmp_channel_char] = 1;
                                        $tmp_str .= $tmp_channel_char;

                                    }

                                }

                                $tmp_channel_master_ARRAY = $this->get_crnrstn('channel_master_ARRAY');
                                $tmp_count = count($tmp_channel_master_ARRAY);
                                $tmp_added_count = 0;
                                $tmp_added_str = '';

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * After all is done, 
                                 * look to append any 
                                 * missing letters. 
                                 *
                                 */
                                if(!(strlen($tmp_str) == $tmp_count)){

                                    $tmp_data_channel_init_sequence = $this->get_crnrstn('data_channel_init_sequence');

                                    $tmp_char_ARRAY = str_split($tmp_data_channel_init_sequence);
                                    foreach($tmp_char_ARRAY as 
                                        $index_append => $char_append)
                                    {

                                        if(!isset($tmp_flag_ARRAY[$char_append])){

                                            $tmp_added_count++;
                                            $tmp_str .= $char_append;
                                            $tmp_added_str .= $char_append;

                                        }

                                    }

                                    $tmp_force_data_err = true;
                                    $tmp_force_data_err_msg = 'Unable to load all ' . 
                                                              $tmp_count . 
                                                              ' CRNRSTN :: data channels ' . 
                                                              'from the provided (' . 
                                                              $this->gettype($data) . ') data, ' . 
                                                              strval($data) . 
                                                              '. CRNRSTN :: has manually appended ' . 
                                                              $tmp_added_count . 
                                                              ' missing data channel, "' . 
                                                              $tmp_added_str . '". ' . 
                                                              $this->data_report(
                                                                     $data, 
                                                                     'CRNRSTN :: MC-DDO UGC Input Data Report');

                                    if($tmp_added_count > 1){

                                        $tmp_force_data_err_msg = 'Unable to load all ' . 
                                                                  $tmp_count . 
                                                                  ' CRNRSTN :: data channels ' . 
                                                                  'from the provided (' . 
                                                                  $this->gettype($data) . ') data, ' . 
                                                                  strval($data) . 
                                                                  '. CRNRSTN :: has manually appended ' . 
                                                                  $tmp_added_count . 
                                                                  ' missing data channels, "' . 
                                                                  $tmp_added_str . '". ' . 
                                                                  $this->data_report(
                                                                         $data, 
                                                                         'CRNRSTN :: MC-DDO UGC Input Data Report');

                                    }

                                }

                            }else{

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Missing channel 
                                 * sequence data. 
                                 *
                                 */
                                $tmp_force_data_err = true;
                                $tmp_force_data_err_msg = 'Unable to load the CRNRSTN :: ' . 
                                                          'data channel sequence from system ' . 
                                                          'settings with the provided (' . 
                                                          $this->gettype($data) . ') data, ' . 
                                                          strval($data) . 
                                                          '. The multi-channel initialization ' . 
                                                          'sequence for the CRNRSTN :: RESPONSE ' . 
                                                          'RETURN SERIALIZATION (RRS) MAPPING ' . 
                                                          'SERVICES LAYER has manually set to, "' . 
                                                          self::$data_channel_init_sequence . '". ' . 
                                                          $this->data_report(
                                                                 $data, 
                                                                 'CRNRSTN :: MC-DDO UGC Input Data Report');

                                $tmp_str = $this->get_crnrstn('data_channel_init_sequence');

                            }

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [_channel_init_sequence]
                             *
                             */
                            $tmp_output = $this->input_data_value(
                                                 $tmp_str, 
                                                 $data_key, 
                                                 $data_type_family, 
                                                 $index, 
                                                 $data_authorization_profile, 
                                                 $ttl, 
                                                 $spool_resource, 
                                                 $env_key);
                            $tmp_ddo_write = true;

                            if($tmp_force_data_err == true){

                                $this->error_log(
                                       $tmp_force_data_err_msg, 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);

                            }

                        break;
                        case '_css_unit_length':

                            $tmp_force_data_err = true;
                            $tmp_data = strtolower(trim((string) $data));
                            if(strlen($tmp_data) > 0){

                                $tmp_force_data_err = false;

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * CLR-SSL UGC data 
                                 * validation [_css_unit_length]
                                 *
                                 */
                                if(!isset($this->oINTERACT_UI_HTML_MGR->css_length_units_ARRAY[$tmp_data])){

                                    $tmp_data = $this->get_crnrstn('static_css_length_unit');
                                    $tmp_css_length_units_ARRAY = $this->get_crnrstn('css_length_units_ARRAY');

                                    $tmp_force_data_err = true;
                                    $tmp_force_data_err_msg = 'Unable to find a valid ' . 
                                                              'CSS unit of length ' . 
                                                              'matching the provided, (' .
                                                              $this->gettype($data) . ') ' . 
                                                              strval($data) . 
                                                              '. The default CRNRSTN :: INTERACT UI ' . 
                                                              'system of CSS length units has manually ' . 
                                                              'set to, "' .
                                                              $tmp_data . '" / ' . 
                                                              $tmp_css_length_units_ARRAY[$tmp_data] . '. ' .
                                                              $this->data_report(
                                                                    $data, 
                                                                    'CRNRSTN :: MC-DDO UGC Input Data Report');

                                }

                            }

                            if($tmp_force_data_err == true){

                                $this->error_log(
                                       $tmp_force_data_err_msg, 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);

                            }

                        break;
                        case '_theme':

                            $tmp_theme_style_ARRAY = $this->return_constant_profile_ARRAY($data);

                            $tmp_data = $tmp_theme_style_int = $tmp_theme_style_ARRAY[CRNRSTN_INTEGER];

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * CLR-SSL UGC data 
                             * validation [_theme]
                             *
                             */
                            if($this->system_isset_output_profile_constants($tmp_theme_style_int) == true){

                                $tmp_theme_style_ARRAY = $this->return_constant_profile_ARRAY($tmp_theme_style_int);
                                $tmp_data = $tmp_theme_style_ARRAY[CRNRSTN_INTEGER];

                                $tmp_force_data_err = true;
                                $tmp_force_data_err_msg = 'Unable to find a CRNRSTN :: ' . 
                                                          'INTERACT UI Theme with the provided, (' .
                                                          $this->gettype($data) . ') ' . 
                                                          strval($data) . '. ' . 
                                                          $tmp_theme_style_ARRAY[CRNRSTN_STRING] .
                                                          '[' . $tmp_theme_style_ARRAY[CRNRSTN_INTEGER] . 
                                                          '] has been manually set to be the ' . 
                                                          'system default CRNRSTN :: INTERACT UI Theme. ' .
                                                          $this->data_report(
                                                                 $data, 
                                                                 'CRNRSTN :: MC-DDO UGC Input Data Report');

                            }

                            if($tmp_force_data_err == true){

                                $this->error_log(
                                       $tmp_force_data_err_msg, 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);

                            }

                        break;
                        case '_array':

                            switch($data_key){
                                case 'ddo_serializable_data_types':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_ddo_serializable_resources_ARRAY = array('object' => 1, 
                                     *                                               'array' => 1);
                                     *
                                     * 'ddo_serializable_data_types', 
                                     * $tmp_ddo_serializable_resources_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::MULTI_CHANNEL');
                                     *
                                     * self::$datatype_master_ARRAY = array('int' => 'int', 
                                     *                                  'integer' => 'integer', 
                                     *                                     'bool' => 'bool',
                                     *                                  'boolean' => 'boolean', 
                                     *                                    'float' => 'float', 
                                     *                                   'double' => 'double', 
                                     *                                     'real' => 'real', 
                                     *                                   'string' => 'string',
                                     *                                    'array' => 'array', 
                                     *                                   'object' => 'object', 
                                     *                                     'NULL' => 'NULL');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'object_serializable_data_channels':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_object_serializable_channels_ARRAY = array('get' => 'G', 
                                     *                                                'post' => 'P', 
                                     *                                             'session' => 'H', 
                                     *                                              'ssdtla' => 'S',
                                     *                                             'pssdtla' => 'J', 
                                     *                                                'form' => 'T',
                                     *                                              'cookie' => 'C', 
                                     *                                            'database' => 'D', 
                                     *                                                'soap' => 'O',
                                     *                                                'rdma' => 'M'
                                     *                                                'file' => 'F');
                                     *
                                     *'object_serializable_data_channels', 
                                     * $tmp_object_serializable_channels_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::MULTI_CHANNEL');
                                     *
                                     * self::$channel_master_ARRAY = array();
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'get_parameters_system_data':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_get_parameters_system_data_ARRAY = array($this->session_salt(), 
                                     *                                               'crnrstn_bst', 
                                     *                                               'crnrstn_smk', 
                                     *                                               'crnrstn_sid',
                                     *                                               'crnrstn_sk', 
                                     *                                               'crnrstn_r', 
                                     *                                               'crnrstn_l', 
                                     *                                               'crnrstn_css_valptrn', 
                                     *                                               'crnrstn_encrypt_tunnel', 
                                     *                                               'utm_source', 
                                     *                                               'utm_medium',
                                     *                                               'utm_campaign', 
                                     *                                               'fbclid');
                                     *
                                     *'get_parameters_system_data', 
                                     * $tmp_get_parameters_system_data_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::GET_CHANNEL_PARAMS');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'crnrstn_system_files_color_class_ARRAY':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_color_class_ARRAY = array('COMPRESSION' => '#FFF', 
                                     *                                'TEXT-BASED::HTML' => '#FFF', 
                                     *                                'TEXT-BASED::CSS' => '#FFF',
                                     *                                'TEXT-BASED::JS' => '#FFF', 
                                     *                                'TEXT-BASED::JSON' => '#FFF', 
                                     *                                'TEXT-BASED::XML' => '#FFF', 
                                     *                                'TEXT-BASED::IMG' => '#FFF',
                                     *                                'TEXT-BASED::CSV' => '#FFF', 
                                     *                                'TEXT-BASED::RTF' => '#FFF', 
                                     *                                'TEXT-BASED::TXT' => '#FFF', 
                                     *                                'SYSTEM::BAT' => '#FFF',
                                     *                                'MYSQLI:SQL' => '#FFF', 
                                     *                                'PHP::INI' => '#FFF', 
                                     *                                'CRNRSTN::PHP::BASE64' => '#FFF', 
                                     *                                'SERVER::HTACCESS' => '#FFF',
                                     *                                'IMAGE::FAVICON' => '#FFF', 
                                     *                                'IMAGE::PNG' => '#FFF', 
                                     *                                'IMAGE::GIF' => '#FFF', 
                                     *                                'IMAGE::JPEG' => '#FFF',
                                     *                                'IMAGE::BMP' => '#FFF', 
                                     *                                'IMAGE::TIF' => '#FFF', 
                                     *                                'IMAGE::SVG' => '#FFF', 
                                     *                                'IMAGE' => '#FFF', 
                                     *                                'AUDIO' => '#FFF',
                                     *                                'VIDEO::MPEG' => '#FFF', 
                                     *                                'VIDEO::QT' => '#FFF', 
                                     *                                'VIDEO::AVI' => '#FFF', 
                                     *                                'VIDEO::MP4' => '#FFF',
                                     *                                'SERVER::SCRIPT' => '#FFF', 
                                     *                                'EXECUTABLE' => '#FFF');
                                     *
                                     *'crnrstn_system_files_color_class_ARRAY', 
                                     * $tmp_color_class_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::LOCAL_FILE_SYSTEM');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'crnrstn_system_files_line_weight_class_ARRAY':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_color_class_ARRAY = array('COMPRESSION' => 'HEAVY', 
                                     *                                'TEXT-BASED::HTML' => 'HEAVY', 
                                     *                                'TEXT-BASED::CSS' => 'HEAVY',
                                     *                                'TEXT-BASED::JS' => 'HEAVY', 
                                     *                                'TEXT-BASED::JSON' => 'HEAVY', 
                                     *                                'TEXT-BASED::XML' => 'HEAVY', 
                                     *                                'TEXT-BASED::IMG' => 'HEAVY',
                                     *                                'TEXT-BASED::CSV' => 'HEAVY', 
                                     *                                'TEXT-BASED::RTF' => 'HEAVY', 
                                     *                                'TEXT-BASED::TXT' => 'HEAVY', 
                                     *                                'SYSTEM::BAT' => 'HEAVY',
                                     *                                'MYSQLI:SQL' => 'HEAVY', 
                                     *                                'PHP::INI' => 'HEAVY', 
                                     *                                'CRNRSTN::PHP::BASE64' => 'HEAVY', 
                                     *                                'SERVER::HTACCESS' => 'HEAVY',
                                     *                                'IMAGE::FAVICON' => 'HEAVY', 
                                     *                                'IMAGE::PNG' => 'HEAVY', 
                                     *                                'IMAGE::GIF' => 'HEAVY', 
                                     *                                'IMAGE::JPEG' => 'HEAVY',
                                     *                                'IMAGE::BMP' => 'HEAVY', 
                                     *                                'IMAGE::TIF' => 'HEAVY', 
                                     *                                'IMAGE::SVG' => 'HEAVY', 
                                     *                                'IMAGE' => 'HEAVY', 
                                     *                                'AUDIO' => 'HEAVY',
                                     *                                'VIDEO::MPEG' => 'HEAVY', 
                                     *                                'VIDEO::QT' => 'HEAVY', 
                                     *                                'VIDEO::AVI' => 'HEAVY', 
                                     *                                'VIDEO::MP4' => 'HEAVY',
                                     *                                'SERVER::SCRIPT' => 'HEAVY', 
                                     *                                'EXECUTABLE' => 'HEAVY');
                                     *
                                     *'crnrstn_system_files_line_weight_class_ARRAY', 
                                     * $tmp_color_class_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::LOCAL_FILE_SYSTEM');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'mem_rpt_general_system_footer':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_general_system_footer_ARRAY = array(0);
                                     *
                                     *'mem_rpt_general_system_footer', 
                                     * $tmp_plaid_performance_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::REPORTING');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CRNRSTN :: UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'mem_rpt_plaid_performance':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_plaid_performance_ARRAY = array(0, 1, 5);
                                     *
                                     *'mem_rpt_plaid_performance', 
                                     * $tmp_plaid_performance_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::REPORTING');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'mem_rpt_system_page_return_statistics_module':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_page_return_statistics_ARRAY = array(0, 
                                     *                                           1, 
                                     *                                           5, 
                                     *                                           6, 
                                     *                                           2, 
                                     *                                           4, 
                                     *                                           9, 
                                     *                                           10);
                                     * 
                                     *'mem_rpt_system_page_return_statistics_module', 
                                     * $tmp_page_return_statistics_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::REPORTING');
                                     * 
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     * 
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'mem_rpt_mit_license_modal':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_mit_license_ARRAY = array(0, 1);
                                     *
                                     * 'mem_rpt_mit_license_modal', 
                                     * $tmp_mit_license_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::REPORTING');
                                     * 
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'mem_rpt_cache_usage_report':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_cache_usage_ARRAY = array(0, 1, 2, 9, 10);
                                     *
                                     *'mem_rpt_cache_usage_report', 
                                     * $tmp_cache_usage_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::REPORTING');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'interact_ui_ttl':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_interact_ui_ttl_ARRAY = array('crnrstn_inactivity_refresh_ttl', 
                                     *                                    'crnrstn_ssdtla_module_sync_ttl',
                                     *                                    'crnrstn_share_module_inactivity_close_ttl', 
                                     *                                    'crnrstn_page_load_ttl', 
                                     *                                    'bassdrive_is_live_ttl',
                                     *                                    'the_situation_with_bassdrive_ttl',
                                     *                                    'bassdrive_title_ttl',
                                     *                                    'bassdrive_locale_city_province_ttl',
                                     *                                    'bassdrive_locale_nation_ttl',
                                     *                                    'stream_relays_ttl',
                                     *                                    'social_media_connects_ttl',
                                     *                                    'relay_performance_ttl',
                                     *                                    'lifestyle_banner_ttl');
                                     *
                                     *'interact_ui_ttl', 
                                     * $tmp_interact_ui_ttl_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::GENERAL_SETTINGS');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'interact_ui_month_abbrev':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_interact_ui_month_abbrev_ARRAY = array('Jan', 
                                     *                                             'Feb', 
                                     *                                             'Mar', 
                                     *                                             'Apr', 
                                     *                                             'May', 
                                     *                                             'Jun', 
                                     *                                             'Jul', 
                                     *                                             'Aug', 
                                     *                                             'Sept', 
                                     *                                             'Oct',
                                     *                                             'Nov', 
                                     *                                             'Dec');
                                     *
                                     *'interact_ui_month_abbrev', 
                                     * $tmp_interact_ui_month_abbrev_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::GENERAL_SETTINGS');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'interact_ui_month':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_interact_ui_month_ARRAY = array('January', 
                                     *                                      'February', 
                                     *                                      'March', 
                                     *                                      'April', 
                                     *                                      'May', 
                                     *                                      'June', 
                                     *                                      'July', 
                                     *                                      'August',
                                     *                                      'September', 
                                     *                                      'October', 
                                     *                                      'November', 
                                     *                                      'December');
                                     *
                                     *'interact_ui_month', 
                                     * $tmp_interact_ui_month_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::GENERAL_SETTINGS');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'interact_ui_day_abbrev':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_interact_ui_day_abbrev_ARRAY = array('Sun', 
                                     *                                           'Mon', 
                                     *                                           'Tues', 
                                     *                                           'Wed', 
                                     *                                           'Thurs', 
                                     *                                           'Fri', 
                                     *                                           'Sat');
                                     *
                                     * 'interact_ui_day_abbrev', 
                                     * $tmp_interact_ui_day_abbrev_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::GENERAL_SETTINGS');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'interact_ui_day':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_interact_ui_day_ARRAY = array('Sunday', 
                                     *                                    'Monday', 
                                     *                                    'Tuesday', 
                                     *                                    'Wednesday', 
                                     *                                    'Thursday', 
                                     *                                    'Friday', 
                                     *                                    'Saturday');
                                     *
                                     * 'interact_ui_day', 
                                     * $tmp_interact_ui_day_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::GENERAL_SETTINGS');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'resource_footer_append_spool_override':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_footer_append_spool_override_ARRAY = array(CRNRSTN_CLIENT_SSDTLA => '1');
                                     *
                                     *'resource_footer_append_spool_override', 
                                     * $tmp_footer_append_spool_override_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::ASSET_INTEGRATIONS');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'resource_head_append_spool_override':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_head_append_spool_override_ARRAY = array(CRNRSTN_RESOURCE_DOCUMENTATION => '1');
                                     *
                                     *'resource_head_append_spool_override', 
                                     * $tmp_head_append_spool_override_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::ASSET_INTEGRATIONS');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'system_file_max_ui_pageview_cnt':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_system_file_max_ui_pageview_cnt_ARRAY = array(CRNRSTN_DESKTOP => 75, 
                                     *                                                    CRNRSTN_TABLET => 20, 
                                     *                                                    CRNRSTN_MOBILE => 20);
                                     *
                                     *'system_file_max_ui_pageview_cnt', 
                                     * $tmp_system_file_max_ui_pageview_cnt_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::INTERACT_UI::FILE_SYSTEM');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'crnrstn_hidden_file_extensions':
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * $tmp_hidden_file_extensions_ARRAY = array('.htaccess', 
                                     *                                           '.php', 
                                     *                                           '.sql');
                                     *
                                     *'crnrstn_hidden_file_extensions', 
                                     * $tmp_hidden_file_extensions_ARRAY, 
                                     * 'CRNRSTN::RESOURCE::LOCAL_FILE_SYSTEM');
                                     *
                                     *
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [MIXED]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_data, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);

                                    return $tmp_output;

                                break;
                                case 'system_file_active_attributes_profile':

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CLR-SSL UGC 
                                     * data validation [_array]
                                     *
                                     */
                                    if(!is_array($data)){

                                        $tmp_force_data_err = true;

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * Initialization with 
                                         * empty array. 
                                         *
                                         */
                                        $tmp_data_ARRAY = $tmp_ARRAY;

                                    }

                                    if(is_array($data)){

                                        $tmp_data_ARRAY = $data;

                                    }

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Build out with proper 
                                     * data structure against 
                                     * the system master array. 
                                     *
                                     */
                                    if($tmp_force_data_err == true){

                                        $tmp_force_data_err_msg = 'Incorrect data type (' . 
                                                                  $this->gettype($data) . 
                                                                  ') provided. Array data is ' . 
                                                                  'expected for the file ' . 
                                                                  'system settings array, ' . 
                                                                  $data_key . '. ' . 
                                                                  strval($data) . 
                                                                  ', was the value provided.';

                                    }else{

                                        $tmp_force_data_err_msg = 'Incomplete or incorrect (' . 
                                                                  $this->gettype($data) . 
                                                                  ') data was provided for the ' . 
                                                                  'file system settings array, ' . 
                                                                  $data_key . '. The following ' . 
                                                                  'changes had to be made: ';

                                    }

                                    $tmp_system_file_attributes_master_ARRAY = $this->get_crnrstn('system_file_attributes_master_ARRAY');

                                    foreach($tmp_system_file_attributes_master_ARRAY as 
                                        $master_attribute => $master_state_int)
                                    {

                                        if(isset($tmp_data_ARRAY[$master_attribute])){

                                            if(is_numeric($data[$master_attribute])){

                                                $tmp_int = (int) $data[$master_attribute];

                                                switch($tmp_int){
                                                    case 1:

                                                        $tmp_ARRAY[$master_attribute] = 1;

                                                    break;
                                                    default:

                                                        /**
                                                         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                                         * Clean up unknown values 
                                                         * that are within the input 
                                                         * data structure. 
                                                         *
                                                         * Also...zero will be set 
                                                         * to zero. 
                                                         *
                                                         * 5 :: Friday, October 13, 2023 @ 2343 hrs.
                                                         *
                                                         */
                                                        $tmp_ARRAY[$master_attribute] = 0;

                                                    break;

                                                }

                                            }

                                        }else{

                                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                             * Repair incomplete input 
                                             * data structure with 
                                             * master data.
                                             *
                                             * Set to zero (zed). 
                                             *
                                             */
                                            $tmp_ARRAY[$master_attribute] = 0;

                                            if($tmp_force_data_err == true){

                                                $tmp_force_data_err_msg .= 'Added file attribute, "' . 
                                                                           $master_attribute . '"=' . 
                                                                           $tmp_ARRAY[$master_attribute] . 
                                                                           '. ';

                                            }else{

                                                $tmp_force_data_err_msg .= 'Added missing file attribute, "' . 
                                                                           $master_attribute . '"=' . 
                                                                           $tmp_ARRAY[$master_attribute] . 
                                                                           '. ';

                                            }

                                        }

                                    }

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [STRING]
                                     *
                                     */
                                    $tmp_output = $this->input_data_value(
                                                         $tmp_ARRAY, 
                                                         $data_key, 
                                                         $data_type_family, 
                                                         $index, 
                                                         $data_authorization_profile, 
                                                         $ttl, 
                                                         $spool_resource, 
                                                         $env_key);
                                    $tmp_ddo_write = true;

                                    if($tmp_force_data_err == true){

                                        $tmp_force_data_err_msg .= $this->data_report(
                                                                          $data, 
                                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                                        $this->error_log(
                                               $tmp_force_data_err_msg, 
                                               __LINE__, 
                                               __METHOD__, 
                                               __FILE__, 
                                               CRNRSTN_SETTINGS_CRNRSTN);

                                    }

                                break;
                                default:

                                    $tmp_system_resource_profile_ARRAY = $this->get_crnrstn('system_resource_profile_ARRAY');

                                    error_log(
                                        __LINE__ . 
                                        ' crnrstn unknown system ' . 
                                        'resource validation data_key[' . 
                                        $data_key . 
                                        ']. validation_profile[' . 
                                        $tmp_system_resource_profile_ARRAY[$data_key] . 
                                        '].');

                                break;

                            }

                        break;
                        case '_percentage':

                            $tmp_data = $tmp_percentage = $this->str_sanitize(
                                                                 $data, 
                                                                 'clean_percentage_numbers');

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * This should 
                             * be a number. 
                             *
                             * CLR-SSL UGC data 
                             * validation [_percentage]
                             *
                             */
                            if(!is_numeric($tmp_percentage)){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * It would certainly appear 
                                 * that this is not a valid 
                                 * number for the 
                                 * requested operation. 
                                 *
                                 * We shall run a genuinely 
                                 * invalid calculation and 
                                 * use the system error that 
                                 * is generated to clearly 
                                 * communicate that the input 
                                 * datum is an "invalid number". 
                                 *
                                 * This may be the only way 
                                 * that an application which 
                                 * absolutely loves numbers as 
                                 * much as the CRNRSTN :: 
                                 * Lightsaber RoCEv2 SOAP 
                                 * Services Layer (CLR-SSL) 
                                 * loves numbers would be able 
                                 * to produce a respectable 
                                 * error message on this, the 
                                 * subject matter. 
                                 * 
                                 * And the CLR-SSL has really 
                                 * been loving the numbers 
                                 * lately, man. We happily pay 
                                 * the price ($$$) of compute 
                                 * to acquire an authentic NAN 
                                 * (not a number), real bad data. 
                                 *
                                 * We buy a properly shit value 
                                 * that can be consistently 
                                 * and reliably returned with 
                                 * confidence by the CLR-SSL. 
                                 *
                                 * And all this...even in the 
                                 * midst of "these economic 
                                 * times", at that! 
                                 *
                                 * CRNRSTN :: <3's... 
                                 * ...(int) CRNRSTN_INTEGER 4 LIFE! 
                                 *
                                 *
                                 * 5 :: Monday, December 4, 2023 @ 1117 hrs.
                                 * Last Modified: Friday, February 27, 2026 @ 0151 hrs.
                                 *
                                 * See, https://www.php.net/manual/en/function.is-nan.php
                                 *
                                 */
                                $tmp_percentage = sqrt(-1);

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * CLR-SSL UGC data 
                                 * validation error 
                                 * message [PERCENTAGE]
                                 *
                                 */
                                switch($data_key){
                                    case 'max_disk_storage_utilization_warning':

                                        $tmp_data = $this->get_crnrstn('max_disk_storage_utilization_warning');
                                        $tmp_force_data_err = true;
                                        $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                                       'the CRNRSTN  UGC Input Data Report ' . 
                                                       $data_key . ' percentage, ' .
                                                       strval($tmp_percentage) . '. ' . 
                                                       strval($data) . 
                                                       ', was the value that was ' . 
                                                       'provided as method input to ' . 
                                                       'this environment. CRNRSTN :: ' . 
                                                       'has manually set the DISK ' . 
                                                       'WRITE WARNING percentage to ' .
                                                       $tmp_data . '. ' . 
                                                       $this->data_report(
                                                              $data, 
                                                              'CRNRSTN :: MC-DDO UGC Input Data Report');

                                    break;
                                    case 'max_disk_storage_utilization':

                                        $tmp_data = $this->get_crnrstn('max_disk_storage_utilization');
                                        $tmp_force_data_err = true;
                                        $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                                       'the CRNRSTN  UGC Input Data Report ' . 
                                                       $data_key . 
                                                       ' percentage, ' .
                                                       strval($tmp_percentage) . '. ' . 
                                                       strval($data) . 
                                                       ', was the value that was ' . 
                                                       'provided as method input to ' . 
                                                       'this environment. CRNRSTN :: ' . 
                                                       'has manually set the DISK WRITE ' . 
                                                       'BLOCK percentage to ' . 
                                                       $tmp_data . '. ' . 
                                                       $this->data_report(
                                                              $data, 
                                                              'CRNRSTN :: MC-DDO UGC Input Data Report');

                                    break;
                                    default:

                                        error_log(
                                            __LINE__ . 
                                            ' crnrstn MISSING SWITCH CASE[' . 
                                            $data_key . 
                                            ']. $data_profile[' . 
                                            $data_profile . 
                                            '].');

                                    break;

                                }

                                if($tmp_force_data_err == true){

                                    $this->error_log(
                                           $tmp_err_str, 
                                           __LINE__, 
                                           __METHOD__, 
                                           __FILE__, 
                                           CRNRSTN_SETTINGS_CRNRSTN);

                                }

                            }

                        break;
                        default:
                            //SILENCE IS GOLDEN.

                            error_log(
                                __LINE__ . ' crnrstn MISSING SWITCH CASE[' . 
                                $data_key . ']. $data_profile[' . 
                                $data_profile . 
                                '].');

                        break;

                    }

                    if(!($tmp_ddo_write !== false)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * The CRNRSTN :: Lightsaber 
                         * RoCEv2 SOAP Services Layer 
                         * (CLR-SSL) Multi-Channel 
                         * Decoupled Data Object 
                         * (MC-DDO) Data Storage 
                         * Services Layer. 
                         *
                         * The CLR-SSL MC-DDO 
                         * Services Layer. 
                         *
                         *
                         * 5
                         *
                         * CLR-SSL UGC data 
                         * input [MIXED]
                         *
                         */
                        $tmp_output = $this->input_data_value(
                                             $tmp_data, 
                                             $data_key, 
                                             $data_type_family, 
                                             $index, 
                                             $data_authorization_profile, 
                                             $ttl, 
                                             $spool_resource, 
                                             $env_key);

                    }

                    return $tmp_output;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * The CRNRSTN :: Lightsaber 
                 * RoCEv2 SOAP Services Layer 
                 * (CLR-SSL) Multi-Channel 
                 * Decoupled Data Object 
                 * (MC-DDO) Data Storage 
                 * Services Layer. 
                 *
                 * The CLR-SSL MC-DDO 
                 * Services Layer. 
                 *
                 *
                 * 5
                 *
                 * CLR-SSL UGC data 
                 * input [MIXED]
                 *
                 */
                $tmp_output = $this->input_data_value(
                                     $data, 
                                     $data_key, 
                                     $data_type_family, 
                                     $index, 
                                     $data_authorization_profile, 
                                     $ttl, 
                                     $spool_resource, 
                                     $env_key);
                $tmp_ddo_write = true;

                return $tmp_output;

            break;

            case 'ini_set_ini_set':
            case 'config_ini_set_ini_set':
            case 'ini_get_ini_get':

                error_log(
                    __LINE__  . ' ' . 
                    __METHOD__ . 
                    ' INPUT UGC $tmp_ugc_option_name[' . 
                    $data  . ']. $data_key[' . 
                    $data_key . 
                    '].');

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Standardize UGC 
                 * input. 
                 *
                 */
                switch($data_profile){
                    case 'ini_get_ini_get':

                        $tmp_ugc_option_name = $data;

                        error_log(__LINE__  . ' ' . 
                            __METHOD__ . 
                            ' Input UGC for ini_get(). ' . 
                            '$data/$tmp_ugc_option_name[' . 
                            $tmp_ugc_option_name  . 
                            ']. $data_key[' . 
                            $data_key . 
                            '].');

                    break;
                    case 'config_ini_set_ini_set':
                    case 'ini_set_ini_set':

                        $tmp_ugc_option_name = $data_key;
                        $tmp_ugc_option_value = $data;

                        error_log(__LINE__  . ' ' . 
                            __METHOD__ . 
                            ' Input UGC for ini_set(). ' . 
                            '$data_key/option_name[' . 
                            $tmp_ugc_option_name  . 
                            ']. $tmp_ugc_option_value[' . 
                            $tmp_ugc_option_value . 
                            '].');

                    break;
                    default:

                        $tmp_ini = '';
                        error_log(__LINE__ . ' ' . 
                            __METHOD__ .
                            ' Unknown switch() case received. [' . 
                            strval($data_profile) .
                            '].');

                    break;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * This should be a 
                 * valid PHP configuration 
                 * option with valid data, 
                 * if any data is provided 
                 * or required. 
                 *
                 * For a list of php.ini 
                 * directives, please see:
                 * https://www.php.net/manual/en/ini.list.php
                 *
                 * CLR-SSL UGC data 
                 * validation [php.ini]
                 *
                 * [Sat Nov 18 02:46:22.920498 2023] [:error] [pid 49131] 
                 * [client 172.16.225.1:61576] 11063 crnrstn 
                 * PHP INI validation [post_max_size]. [30M]. die();
                 *
                 */
                if(!($tmp_result = $this->is_valid_php_ini(
                                          $data_key, 
                                          $tmp_ugc_option_name)))
                {

                    $tmp_force_data_err = true;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data validation 
                     * error message [PHP_INI]
                     *
                     */
                    switch($data_profile){
                        case 'ini_get_ini_get':

                            $tmp_err_str = 'CRNRSTN :: could not update ' . 
                                           'internal system references to ' . 
                                           'the PHP ini directive, ' .
                                           $data_key . ', (' . 
                                           $this->gettype($tmp_ugc_option_name) . ') ' . 
                                           $tmp_ugc_option_name . '. ' . 
                                           strval($data) .
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_ini_set_ini_set':

                            $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                           'the PHP ini directive, ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_ugc_option_name) . ') ' . 
                                           $tmp_ugc_option_name . '. ' . 
                                           strval($data) .
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'ini_set_ini_set':

                            $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                           'the PHP ini directive, ' . 
                                           $data_key . ', (' .
                                           $this->gettype($tmp_ugc_option_name) . ') ' . 
                                           $tmp_ugc_option_name . '. ' . 
                                           strval($data) .
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        default:

                            $tmp_err_str = __LINE__ . ' ' . 
                                           __METHOD__ .
                                           ' Unknown switch() case received. $data_key[' . 
                                           print_r($data_key, true) .
                                           ']. $data_profile[' . 
                                           print_r($data_profile, true) . 
                                           '].';

                        break;

                    }

                    $this->error_log(
                           $tmp_err_str, 
                           __LINE__, 
                           __METHOD__, 
                           __FILE__, 
                           CRNRSTN_SETTINGS_CRNRSTN);

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CLR-SSL UGC Data 
                 * Execution Layer [PHP_INI]
                 *
                 */
                switch($data_profile){
                    case 'ini_get_ini_get':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * If the UGC 
                         * input is good. 
                         *
                         *
                         * 5
                         *
                         * Monday, August 12, 2024 @ 0429 hrs.
                         *
                         */
                        if(!($tmp_force_data_err !== false)){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Return the current 
                             * value of the provided 
                             * PHP configuration 
                             * server option. 
                             *
                             *
                             * 5
                             *
                             * Monday, August 12, 2024 @ 0401 hrs.
                             *
                             * $tmp_ini = ini_get($tmp_ugc_option_name);
                             *
                             */
                            return $tmp_result;

                        }

                    break;
                    case 'config_ini_set_ini_set':
                    case 'ini_set_ini_set':
                    default:

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * php.ini directives
                         *
                         * https://www.php.net/manual/en/ini.list.php#ini.list
                         *
                         * $this->ini_set_ARRAY[$option] = ini_get($option);
                         *
                         *
                         * If the UGC 
                         * input is good. 
                         *
                         *
                         * 5
                         *
                         * Monday, August 12, 2024 @ 0429 hrs.
                         *
                         */
                        if(!($tmp_force_data_err !== false)){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Extract the updated PHP option 
                             * for a write to the CRNRSTN :: 
                             * Lightsaber RoCEv2 SOAP 
                             * Services Layer (CLR-SSL) 
                             * Multi-Channel Decoupled Data 
                             * Object (MC-DDO) Data 
                             * Storage Services Layer. 
                             *
                             *
                             * 5
                             *
                             * Monday, August 12, 2024 @ 0400 hrs.
                             *
                             * $tmp_prev_ini_val = ini_set(
                             *                     $tmp_ugc_option_name, 
                             *                     $tmp_ugc_option_value);
                             *
                             */
                            $tmp_ini = ini_get($tmp_ugc_option_name);

                        }

                    break;

                }

                $tmp_prev_val = false;

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Let us now 
                 * write the data. 
                 *
                 *
                 * 5
                 *
                 * Monday, August 12, 2024 @ 0412 hrs.
                 *
                 * The CRNRSTN :: Lightsaber RoCEv2 
                 * SOAP Services Layer (CLR-SSL) 
                 * Multi-Channel Decoupled Data 
                 * Object (MC-DDO) Data Storage 
                 * Services Layer. 
                 *
                 *
                 * 5
                 *
                 * CLR-SSL UGC data 
                 * input [PHP_INI]
                 *
                 */
                switch($data_profile){
                    case 'ini_get_ini_get':

                        $this->input_data_value(
                               $tmp_ini, 
                               $data_key, 
                               $data_type_family, 
                               $index, 
                               $data_authorization_profile, 
                               $ttl, 
                               $spool_resource, 
                               $env_key);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Call ini_get() to 
                         * set $tmp_prev_val 
                         * to the current value. 
                         *
                         *
                         * 5
                         *
                         * Monday, August 12, 2024 @ 0414 hrs.
                         *
                         */
                        $tmp_prev_val = ini_get($data_key);

                    break;
                    default:
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * config_ini_set_ini_set 
                         * ini_set_ini_set 
                         *
                         *
                         * Do not use data 
                         * for PHP configuration 
                         * updates unless the 
                         * data is valid. 
                         *
                         *
                         * 5
                         *
                         * Monday, August 12, 2024 @ 0415 hrs.
                         *
                         */
                        if(!($tmp_force_data_err !== false)){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * PHP INI. 
                             *
                             * Returns the old 
                             * value on success, 
                             * false on failure. 
                             *
                             */
                            $tmp_prev_val = ini_set($data_key, $tmp_ini);

                        }

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Do not write data to the 
                         * CLR-SSL MC-DDO unless PHP 
                         * says it is valid according 
                         * to its own native data type; 
                         * also, CRNRSTN :: should 
                         * have no objections. 
                         *
                         */
                        if(($tmp_prev_val !== false) && 
                            (!($tmp_force_data_err !== false)))
                        {

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [PHP_INI]
                             *
                             */
                            $this->input_data_value(
                                   $tmp_ini, 
                                   $data_key, 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);
                            $this->input_data_value(
                                   $tmp_prev_val, 
                                   $data_key . '_prev', 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);

                            return $tmp_prev_val;

                        }else{

                            $tmp_force_data_err = true;

                        }

                    break;

                }

                return $tmp_prev_val;

            break;

            case 'config_add_environment_integer_mode':

                    switch($data_key){
                        case 'R_debug_mode_override':
                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * public function config_add_environment(
                             *                 $env_key, 
                             *                 $err_reporting_profile = E_ALL & ~E_NOTICE & ~E_STRICT, 
                             *                 $R_debug_mode_override = CRNRSTN_DEBUG_OFF, 
                             *                 $system_html_comments_mode = CRNRSTN_HTML_COMMENTS_FULL)
                             * {
                             * 
                             * Where,
                             * $R_debug_mode_override = [CRNRSTN_DEBUG_OFF, 
                             *                           CRNRSTN_DEBUG_SYSLOG, 
                             *                           CRNRSTN_DEBUG_ON]
                             *
                             */

                            $tmp_int = $this->return_valid_constant(
                                              $data, 
                                              'R_debug_mode_ARRAY', 
                                              CRNRSTN_DEBUG_OFF);

                            $this->set_crnrstn('R_debug_mode', $tmp_int);

                        break;
                        case 'err_reporting_profile':
                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the DEFAULT is E_ALL & 
                             * ~E_NOTICE & ~E_STRICT & 
                             * ~E_DEPRECATED
                             *
                             */
                            $tmp_int = $this->return_valid_constant(
                                              $data, 
                                              'env_err_reporting_profile_ARRAY', 
                                              E_ALL & 
                                              ~E_NOTICE & 
                                              ~E_STRICT & 
                                              ~E_DEPRECATED);

                            $this->set_crnrstn(
                                   'env_err_reporting_profile_ARRAY', 
                                   $tmp_int);

                        break;
                        case 'system_html_comments_mode':
                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where $system_html_comments_mode = [CRNRSTN_HTML_COMMENTS_FULL, 
                             *                                     CRNRSTN_HTML_COMMENTS_NONE, 
                             *                                     CRNRSTN_HTML_COMMENTS_CDN_STABILITY_CONTROL_ENABLED]
                             *
                             */

                            $tmp_int = $this->return_valid_constant(
                                              $data, 
                                              'env_html_comments_mode_ARRAY', 
                                              CRNRSTN_HTML_COMMENTS_FULL);

                            $this->set_crnrstn(
                                   'env_html_comments_mode_ARRAY', 
                                   $tmp_int);

                        break;
                        default:

                            error_log(
                                __LINE__ . ' ' . 
                                __METHOD__ . 
                                ' Unknown SWITCH CASE received. ['. 
                                strval($data_key) . 
                                '].');

                        break;

                    }

            break;

            case 'config_load_system_settings_file_path':
            case 'config_load_system_overrides_file_path':
            case 'config_set_ui_theme_style_file_path':
            case 'config_include_social_media_file_path':
            case 'config_include_wild_card_resources_file_path':
            case 'config_include_encryption_file_path':
            case 'config_include_system_resources_file_path':
            case 'config_include_seo_analytics_file_path':
            case 'config_include_seo_engagement_file_path':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Experimental (until windows tested) 
                 * sanitization of directory file 
                 * path slashes for system 
                 * compatibility. 
                 *
                 */
                $tmp_file_path = $this->str_sanitize(
                                        $data, 
                                        DIRECTORY_SEPARATOR);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * This should 
                 * be a file. 
                 *
                 */
                if(!is_file($tmp_file_path)){

                    $tmp_force_data_err = true;

                }

                if($tmp_force_data_err == true){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data validation 
                     * error message [FILE PATH]
                     *
                     */
                    switch($data_profile){
                        case 'config_load_system_settings_file_path':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * We could not find the 
                             * configuration file. 
                             *
                             */
                            $this->error_log('File not found. File ' . 
                                   'path data is not ' . 
                                   'recognized as a file. [' . 
                                   $tmp_file_path . '].', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);
                            $tmp_err_str = 'CRNRSTN :: could not load ' . 
                                           'the system settings configuration file, ' . 
                                           $data_key .
                                           ', (' . 
                                           $this->gettype($tmp_file_path) . ') ' . 
                                           strval($tmp_file_path) . '. ' .
                                           strval($data) . 
                                           ', was the value that was provided as ' . 
                                           'method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_load_system_overrides_file_path':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * We could not find the 
                             * configuration file. 
                             *
                             */
                            $this->error_log('File not found. File path ' . 
                                   'data is not recognized as a file. [' .
                                   $tmp_file_path . '].', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);
                            $tmp_err_str = 'CRNRSTN :: could not load the ' . 
                                           'system overrides configuration file, ' . 
                                           $data_key . ', (' . 
                                           $this->gettype($tmp_file_path) . ') ' . 
                                           strval($tmp_file_path) . '. ' . 
                                           strval($data) . 
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' . 
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_set_ui_theme_style_file_path':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * We could not find the 
                             * configuration file. 
                             *
                             */
                            $this->error_log('File not found. File path ' . 
                                   'data is not recognized as a file. [' . 
                                   $tmp_file_path . '].', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);
                            $tmp_err_str = 'CRNRSTN :: could not load the ' . 
                                           'CRNRSTN :: INTERACT UI theme ' . 
                                           'settings configuration file, ' .
                                           $data_key . ', (' . 
                                           $this->gettype($tmp_file_path) . ') ' . 
                                           strval($tmp_file_path) . '. ' .
                                           strval($data) . 
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_include_social_media_file_path':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * We could not find the 
                             * configuration file. 
                             *
                             */
                            $this->error_log('File path data not ' . 
                                   'recognized as a file. [' . 
                                   $tmp_file_path . '].', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);
                            $tmp_err_str = 'CRNRSTN :: could not load ' . 
                                           'the social media settings ' . 
                                           'configuration file, ' .
                                           $data_key . ', (' . 
                                           $this->gettype($tmp_file_path) . ') ' . 
                                           strval($tmp_file_path) . '. ' .
                                           strval($data) . 
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_include_wild_card_resources_file_path':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * We could not find the 
                             * configuration file. 
                             *
                             */
                            $this->error_log('File path data not ' . 
                                   'recognized as a file. [' . 
                                   $tmp_file_path . '].', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);
                            $tmp_err_str = 'CRNRSTN :: could not load ' . 
                                           'the CRNRSTN :: WILD CARD ' . 
                                           'RESOURCES (WCR) settings ' . 
                                           'configuration file, ' . 
                                           $data_key . ', (' . 
                                           $this->gettype($tmp_file_path) . ') ' . 
                                           strval($tmp_file_path) . '. ' .
                                           strval($data) . 
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_include_sql_silo_file_path':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * We could not find the 
                             * configuration file. 
                             *
                             */
                            $this->error_log('File path data not ' . 
                                   'recognized as a file. [' . 
                                   $tmp_file_path . '].', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);
                            $tmp_err_str = 'CRNRSTN :: could not load ' . 
                                           'the CRNRSTN :: SQL silo ' . 
                                           'settings configuration file, ' .
                                           $data_key . ', (' . 
                                           $this->gettype($tmp_file_path) . ') ' . 
                                           strval($tmp_file_path) . '. ' .
                                           strval($data) . 
                                           ', was the value that was ' . 
                                           'provided as method input to ' . 
                                           'this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_add_database_file_path':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * We could not find the 
                             * configuration file. 
                             *
                             */
                            $this->error_log('File path data not ' . 
                                   'recognized as a file. [' . 
                                   $tmp_file_path . '].', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);
                            $tmp_err_str = 'CRNRSTN :: could not load the ' . 
                                           'database authentication ' . 
                                           'settings configuration file, ' .
                                           $data_key . ', (' . 
                                           $this->gettype($tmp_file_path) . ') ' . 
                                           strval($tmp_file_path) . '. ' .
                                           strval($data) . 
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_include_encryption_file_path':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * We could not find the 
                             * configuration file. 
                             *
                             */
                            $this->error_log('File path data not ' . 
                                   'recognized as a file. [' . 
                                   $tmp_file_path . '].', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);
                            $tmp_err_str = 'CRNRSTN :: could not load the ' . 
                                           'OpenSSL v' . 
                                           $this->version_openssl() .
                                           ' encryption profile configuration file, ' . 
                                           $data_key . ', (' . 
                                           $this->gettype($tmp_file_path) . ') ' .
                                           strval($tmp_file_path) . '. ' . 
                                           strval($data) . 
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_include_system_resources_file_path':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * We could not find the 
                             * configuration file. 
                             *
                             */
                            $this->error_log('File path data not ' . 
                                   'recognized as a file. [' . 
                                   $tmp_file_path . '].', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);
                            $tmp_err_str = 'CRNRSTN :: could not load the ' . 
                                           'system resources settings ' . 
                                           'configuration file, ' .
                                           $data_key . ', (' . 
                                           $this->gettype($tmp_file_path) . ') ' . 
                                           strval($tmp_file_path) . '. ' .
                                           strval($data) . 
                                           ', was the value that was ' . 
                                           'provided as method input ' . 
                                           'to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_include_seo_analytics_file_path':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * We could not find the 
                             * configuration file. 
                             *
                             */
                            $this->error_log('File path data not ' . 
                                   'recognized as a file. [' . 
                                   $tmp_file_path . '].', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);
                            $tmp_err_str = 'CRNRSTN :: could not load the ' . 
                                           'SEO ANALYTICS settings ' . 
                                           'configuration file, ' .
                                           $data_key . ', (' . 
                                           $this->gettype($tmp_file_path) . ') ' . 
                                           strval($tmp_file_path) . '. ' .
                                           strval($data) . 
                                           ', was the value that was provided ' . 
                                           'as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_include_seo_engagement_file_path':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * We could not find the 
                             * configuration file. 
                             *
                             */
                            $this->error_log('File path data not ' . 
                                   'recognized as a file. [' . 
                                   $tmp_file_path . '].', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);
                            $tmp_err_str = 'CRNRSTN :: could not load the ' . 
                                           'SEO ENGAGEMENT settings configuration file, ' .
                                           $data_key . ', (' . 
                                           $this->gettype($tmp_file_path) . ') ' . 
                                           strval($tmp_file_path) . '. ' .
                                           strval($data) . ', was the value that was ' . 
                                           'provided as method input to this environment. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        default:
                            //case 'file_path':

                            $tmp_err_str = 'CRNRSTN :: could not load ' . 
                                            'the file in configuration for ' . 
                                            $data_key . ', (' .
                                            $this->gettype($tmp_file_path) . ') ' . 
                                            strval($tmp_file_path) . '. ' . 
                                            strval($data) .
                                            ', was the value that was provided ' . 
                                            'as method input to this environment. ' .
                                            $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;

                    }

                    $this->err_message_queue_push(NULL, $tmp_err_str);

                    return NULL;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * The CRNRSTN :: Lightsaber 
                 * RoCEv2 SOAP Services Layer 
                 * (CLR-SSL) Multi-Channel 
                 * Decoupled Data Object 
                 * (MC-DDO) Data Storage 
                 * Services Layer. 
                 *
                 * The CLR-SSL MC-DDO 
                 * Services Layer. 
                 *
                 *
                 * 5
                 *
                 * CLR-SSL UGC data 
                 * input [FILE PATH]
                 *
                 */
                switch($data_profile){
                    case 'config_load_system_settings_file_path':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Extract CLR-SSL 
                         * configuration 
                         * from file. 
                         *
                         */
                        $this->error_log('Including and evaluating ' . 
                               'the CRNRSTN :: system settings ' . 
                               'configuration file, ' . 
                               $tmp_file_path . '.', 
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               CRNRSTN_SETTINGS_CRNRSTN);

                        /*public function crnrstn_include_file(
                         *                $calling_method, $file_path, 
                         *                $include_method_name = 'include_once', 
                         *                $hmac_algorithm = NULL, 
                         *                $hash_output_binary = false, 
                         *                $enable_file_validation = true)
                         *{
                         *
                         */
                        $this->crnrstn_include_file(
                               __METHOD__, 
                               $tmp_file_path, 
                               'include_once', 
                               NULL, 
                               false, 
                               false);

                    break;
                    case 'config_load_system_overrides_file_path':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Extract CLR-SSL 
                         * configuration 
                         * from file. 
                         *
                         */
                        $this->error_log('Including and evaluating ' . 
                               'the CRNRSTN :: system setting ' . 
                               'overrides configuration file, ' . 
                               $tmp_file_path . '.', 
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               CRNRSTN_SETTINGS_CRNRSTN);

                        $this->crnrstn_include_file(
                               __METHOD__, 
                               $tmp_file_path, 
                               'include_once', 
                               NULL, 
                               false, 
                               false);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize CLR-SSL channel reporting, 
                         * and queue the data mapping sequence 
                         * (e.g. "GPHSJCDROF") for the 
                         * active channels.
                         *
                         */
                        $this->config_init_channel_map();

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Apply system 
                         * settings overrides. 
                         *
                         */
                        $this->destruct_output .= '<pre><code>[' . 
                                                  $this->return_micro_time()  . 
                                                  '] [lnum ' .  __LINE__ . '] [mthd ' . 
                                                  __METHOD__ . '] [rtime ' . 
                                                  $this->wall_time() . 
                                                  '] crnrstn BEGIN C<span style="color:' . 
                                                  '#F90000;">R</span>NRSTN :: SYSTEM ' . 
                                                  'OVERRIDES. CALLING init_system_' . 
                                                  'overrides().</code></pre>';
                        $this->init_system_overrides();
                        $this->destruct_output .= '<pre><code>[' . 
                                                  $this->return_micro_time()  . 
                                                  '] [lnum ' .  __LINE__ . '] [mthd ' . 
                                                  __METHOD__ . '] [rtime ' . 
                                                  $this->wall_time() . 
                                                  '] crnrstn COMPLETED C<span style="color:' . 
                                                  '#F90000;">R</span>NRSTN :: SYSTEM ' . 
                                                  'OVERRIDES.</code></pre>';

                    break;
                    case 'config_set_ui_theme_style_file_path':

                        $R_theme_data = array();

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Extract CLR-SSL 
                         * configuration 
                         * from file. 
                         *
                         */
                        $this->error_log('Including and evaluating ' . 
                               'the CRNRSTN :: INTERACT UI theme ' . 
                               'settings configuration file, ' . 
                               $tmp_file_path . '.', 
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               CRNRSTN_SETTINGS_CRNRSTN);

                        $this->crnrstn_include_file(
                               __METHOD__, 
                               $tmp_file_path, 
                               'include_once', 
                               NULL, 
                               false, 
                               false);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize CRNRSTN :: INTERACT 
                         * UI theme profile. 
                         *
                         */
                        $this->theme_attributes_ARRAY = $R_theme_data;

                    break;
                    case 'config_include_social_media_file_path':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Extract CLR-SSL 
                         * configuration 
                         * from file. 
                         *
                         */
                        $this->error_log('Including and evaluating ' . 
                               'the CRNRSTN :: social media settings ' . 
                               'configuration file, ' . 
                               $tmp_file_path . '.', 
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               CRNRSTN_SETTINGS_CRNRSTN);

                        $this->crnrstn_include_file(
                               __METHOD__, 
                               $tmp_file_path, 
                               'include_once', 
                               NULL, 
                               false, 
                               false);

                    break;
                    case 'config_include_wild_card_resources_file_path':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Extract CLR-SSL 
                         * configuration 
                         * from file. 
                         *
                         */
                        $this->error_log('Including and evaluating ' . 
                               'the CRNRSTN :: WILD CARD RESOURCES ' . 
                               '(WCR) settings configuration file, ' . 
                               $tmp_file_path . '.', 
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               CRNRSTN_SETTINGS_CRNRSTN);

                        $this->crnrstn_include_file(
                               __METHOD__, 
                               $tmp_file_path, 
                               'include_once', 
                               NULL, 
                               false, 
                               false);

                    break;
                    case 'config_include_sql_silo_file_path':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Extract CLR-SSL 
                         * configuration 
                         * from file. 
                         *
                         */
                        $this->error_log('Including and evaluating the ' . 
                               'CRNRSTN :: SQL silo settings ' . 
                               'configuration file, ' . 
                               $tmp_file_path . '.', 
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               CRNRSTN_SETTINGS_CRNRSTN);

                        $this->crnrstn_include_file(
                               __METHOD__, 
                               $tmp_file_path, 
                               'include_once', 
                               NULL, 
                               false, 
                               false);

                    break;
                    case 'config_add_database_file_path':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Extract CLR-SSL 
                         * configuration 
                         * from file. 
                         *
                         */
                        $this->error_log('Including and evaluating the ' . 
                               'database authentication ' . 
                               'settings configuration file, ' . 
                               $tmp_file_path . '.', 
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               CRNRSTN_SETTINGS_CRNRSTN);

                        $this->crnrstn_include_file(
                               __METHOD__, 
                               $tmp_file_path, 
                               'include_once', 
                               NULL, 
                               false, 
                               false);

                    break;
                    case 'config_include_encryption_file_path':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Extract CLR-SSL 
                         * configuration 
                         * from file. 
                         *
                         */
                        $this->error_log('Including and evaluating ' . 
                               'the OpenSSL v' . 
                               $this->version_openssl() . 
                               ' encryption profile settings ' . 
                               'configuration file, ' . 
                               $tmp_file_path . '.', 
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               CRNRSTN_SETTINGS_CRNRSTN);

                        $this->crnrstn_include_file(
                               __METHOD__, 
                               $tmp_file_path, 
                               'include_once', 
                               NULL, 
                               false, 
                               false);

                    break;
                    case 'config_include_system_resources_file_path':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Extract CLR-SSL 
                         * configuration 
                         * from file. 
                         *
                         */
                        $this->error_log('Including and evaluating ' . 
                               'the system resources settings ' . 
                               'configuration file, ' . 
                               $tmp_file_path . '.', 
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               CRNRSTN_SETTINGS_CRNRSTN);

                        $this->crnrstn_include_file(
                               __METHOD__, 
                               $tmp_file_path, 
                               'include_once', 
                               NULL, 
                               false, 
                               false);

                    break;
                    case 'config_include_seo_analytics_file_path':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Extract CLR-SSL 
                         * configuration 
                         * from file. 
                         *
                         */
                        $this->error_log('Including and evaluating the ' . 
                               'CRNRSTN :: SEO ANALYTICS settings ' . 
                               'configuration file, ' . 
                               $tmp_file_path . '.', 
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               CRNRSTN_SETTINGS_CRNRSTN);

                        $this->crnrstn_include_file(
                               __METHOD__, 
                               $tmp_file_path, 
                               'include_once', 
                               NULL, 
                               false, 
                               false);

                    break;
                    case 'config_include_seo_engagement_file_path':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Extract CLR-SSL 
                         * configuration 
                         * from file. 
                         *
                         */
                        $this->error_log('Including and evaluating the ' . 
                               'CRNRSTN :: SEO ENGAGEMENT settings ' . 
                               'configuration file, ' . 
                               $tmp_file_path . '.', 
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               CRNRSTN_SETTINGS_CRNRSTN);

                        $this->crnrstn_include_file(
                               __METHOD__, 
                               $tmp_file_path, 
                               'include_once', 
                               NULL, 
                               false, 
                               false);

                    break;
                    default:
                        //case 'file_path':

                        $this->error_log('CRNRSTN :: is including ' . 
                               'and evaluating, ' . 
                               $tmp_file_path . '.', 
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               CRNRSTN_SETTINGS_CRNRSTN);
                        $this->crnrstn_include_file(
                               __METHOD__, 
                               $tmp_file_path, 
                               'include_once', 
                               NULL, 
                               false, 
                               false);

                    break;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CRNRSTN :: Lightsaber RoCEv2 
                 * SOAP Services Layer (CLR-SSL)
                 * Multi-Channel Decoupled Data 
                 * Object (MC-DDO) Services Layer.
                 *
                 * CLR-SSL UGC Data 
                 * Input [DATABASE]
                 *
                 */
                $this->input_data_value(
                       $tmp_file_path, 
                       $data_key, 
                       $data_type_family, 
                       $index, 
                       $data_authorization_profile, 
                       $ttl, 
                       $spool_resource, 
                       $env_key);

            break;

            case 'config_set_timezone_default_timezone':
            case 'config_set_timezone_default_timezone_current':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * For a list of 
                 * supported timezones. 
                 * 
                 * See, https://www.php.net/manual/en/timezones.php
                 * See, https://raw.githubusercontent.com/leon-do/timezones/main/timezone.json
                 *
                 * or call $...
                 *
                 *
                 */
                $tmp_timezone = trim(strtolower($data));

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * For performance reasons, this 
                 * syntax array is called from a 
                 * static struct. 
                 * 
                 * For just-in-time system 
                 * generation, please see, 
                 * $this->return_timezone_syntax_array();
                 *
                 *if(!isset(self::$timezone_syntax_ARRAY[$tmp_timezone])){
                 *
                 */
                if(!($this->isset_crnrstn(
                            'timezone_syntax_ARRAY', 
                            $tmp_timezone) == true))
                {

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data 
                     * validation error 
                     * message [TIMEZONE]
                     *
                     */
                    switch($data_profile){
                        case 'config_set_timezone_default_timezone_current':

                            $tmp_err_str = 'CRNRSTN :: could not sync ' . 
                                           'with the current timezone, "' . 
                                           $tmp_timezone . 
                                           '", for this environment. "' . 
                                           strval($data) . 
                                           '", was the value provided. ' . 
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        case 'config_set_timezone_default_timezone':

                            $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                           'the timezone, "' . 
                                           $tmp_timezone . 
                                           '", that was provided ' . 
                                           'to this environment. "' . 
                                           strval($data) . 
                                           '", was the value provided. ' . 
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                        break;
                        default:

                            error_log(
                                __LINE__ . ' ' . 
                                __METHOD__ . 
                                ' Unknown SWITCH CASE received [' . 
                                $data . 
                                '].');
                            $this->error_log('Unknown SWITCH ' . 
                                   'CASE received [' . 
                                   $data . '].', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CRNRSTN :: UGC data input 
                     * exception [TIMEZONE]
                     *
                     *
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    $this->err_message_queue_push(
                           NULL, 
                           $tmp_err_str);

                    return NULL;

                }

                if($data_profile == 'config_set_timezone_default_timezone'){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Set timezone.
                     *
                     */
                    $tmp_result = date_default_timezone_set($tmp_timezone);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Returns false if the 
                     * timezone_id isn't valid, 
                     * or true otherwise. 
                     *
                     */
                    if($tmp_result == false){

                        $tmp_err_str = 'CRNRSTN :: could not ' . 
                                       'apply the timezone, "' . 
                                       $tmp_timezone . 
                                       '", that was provided ' . 
                                       'to this environment. ' . 
                                       strval($data) . 
                                       ', was the value provided. ' . 
                                       $this->data_report(
                                              $data, 
                                              'CRNRSTN :: MC-DDO UGC Input Data Report');

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * CLR-SSL UGC data input 
                         * exception [TIMEZONE]
                         *
                         *
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        $this->err_message_queue_push(
                               NULL, 
                               $tmp_err_str);

                        return NULL;

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * The CRNRSTN :: Lightsaber 
                 * RoCEv2 SOAP Services Layer 
                 * (CLR-SSL) Multi-Channel 
                 * Decoupled Data Object 
                 * (MC-DDO) Data Storage 
                 * Services Layer. 
                 *
                 * The CLR-SSL MC-DDO 
                 * Services Layer. 
                 *
                 *
                 * 5
                 *
                 * CLR-SSL UGC data 
                 * input [TIMEZONE]
                 *
                 */
                $this->input_data_value(
                       $tmp_timezone, 
                       $data_key, 
                       $data_type_family, 
                       $index, 
                       $data_authorization_profile, 
                       $ttl, 
                       $spool_resource, 
                       $env_key);

            break;

            case 'config_ip_grant_exclusive_access_ip_config':
            case 'config_ip_deny_access_ip_config':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * IP or file path?
                 *
                 */
                $tmp_pos_path_str = strpos($data, '_crnrstn.ip_authorization_manager.');

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Handle file path.
                 *
                 */
                if($tmp_pos_path_str !== false){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Experimental (until Windows tested) 
                     * sanitization of directory file 
                     * path slashes for system 
                     * compatibility. 
                     *
                     */
                    $tmp_file_path = $this->str_sanitize($data, DIRECTORY_SEPARATOR);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * This should 
                     * be a file. 
                     *
                     */
                    if(is_file($tmp_file_path)){

                        switch($data_profile){
                            case 'config_grant_exclusive_access_file_path':

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Extract CLR-SSL 
                                 * configuration 
                                 * from file. 
                                 *
                                 */
                                $this->error_log('Including and evaluating ' . 
                                       'the CRNRSTN :: IP ADDRESS exclusive ' . 
                                       'access settings configuration file, ' . 
                                       $tmp_file_path . '.', 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);

                                $this->crnrstn_include_file(
                                       __METHOD__, 
                                       $tmp_file_path, 
                                       'include_once', 
                                       NULL, 
                                       false, 
                                       false);

                            break;
                            case 'config_deny_access_file_path':

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Extract CLR-SSL 
                                 * configuration 
                                 * from file. 
                                 *
                                 */
                                $this->error_log('Including and evaluating ' . 
                                       'the CRNRSTN :: IP ADDRESS deny ' . 
                                       'access settings configuration file, ' .
                                       $tmp_file_path . '.', 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);

                                $this->crnrstn_include_file(
                                       __METHOD__, 
                                       $tmp_file_path, 
                                       'include_once', 
                                       NULL, 
                                       false, 
                                       false);

                            break;
                            default:

                                error_log(
                                    __LINE__ . ' ' . 
                                    __METHOD__ . 
                                    ' Unknown SWITCH CASE received [' . 
                                    $data . '].');
                                $this->error_log('Unknown SWITCH ' . 
                                       'CASE received [' . 
                                       $data . '].', 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);

                            break;

                        }

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * CLR-SSL UGC data 
                         * validation error 
                         * message [IP ADDRESS ACCESS]
                         *
                         */
                        switch($data_profile){
                            case 'config_grant_exclusive_access_file_path':

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * We could not 
                                 * find the 
                                 * configuration file. 
                                 *
                                 */
                                $this->error_log('File path data not ' . 
                                       'recognized as a file. [' . 
                                       $tmp_file_path . '].', 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);
                                $tmp_err_str = 'CRNRSTN :: could not load ' . 
                                               'the IP address "grant exclusive ' . 
                                               'access" settings configuration file, ' . 
                                               $data_key . ', (' . 
                                               $this->gettype($tmp_file_path) . ') ' . 
                                               strval($tmp_file_path) . '. ' . 
                                               strval($data) . 
                                               ', was the value that was provided ' . 
                                               'as method input to this environment. ' .
                                               $this->data_report(
                                                      $data, 
                                                      'CRNRSTN :: MC-DDO UGC Input Data Report');

                            break;
                            case 'config_deny_access_file_path':

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * We could not 
                                 * find the 
                                 * configuration file. 
                                 *
                                 */
                                $this->error_log('File path data not ' . 
                                       'recognized as a file. [' . 
                                       $tmp_file_path . '].', 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);
                                $tmp_err_str = 'CRNRSTN :: could not load ' . 
                                               'the IP address "deny access" ' . 
                                               'settings configuration file, ' . 
                                               $data_key . ', (' . 
                                               $this->gettype($tmp_file_path) . ') ' . 
                                               strval($tmp_file_path) . '. ' . 
                                               strval($data) . 
                                               ', was the value that was provided ' . 
                                               'as method input to this environment. ' . 
                                               $this->data_report(
                                                      $data, 
                                                      'CRNRSTN :: MC-DDO UGC Input Data Report');

                            break;
                            default:

                                error_log(__LINE__ . ' ' . 
                                    __METHOD__ . 
                                    ' Unknown SWITCH CASE received [' . 
                                    $data . '].');
                                $this->error_log('Unknown SWITCH CASE received [' . 
                                       $data . '].', 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);

                            break;

                        }

                        $this->err_message_queue_push(NULL, $tmp_err_str);

                        return NULL;

                    }

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * IP address 
                     * UGC input. 
                     *
                     *
                     * The CRNRSTN :: Lightsaber 
                     * RoCEv2 SOAP Services Layer 
                     * (CLR-SSL) Multi-Channel 
                     * Decoupled Data Object 
                     * (MC-DDO) Data Storage 
                     * Services Layer. 
                     *
                     * The CLR-SSL MC-DDO 
                     * Services Layer. 
                     *
                     *
                     * 5
                     *
                     * CLR-SSL UGC data 
                     * input [IP ADDRESS ACCESS]
                     *
                     */
                    switch($data_key){
                        case 'config_grant_exclusive_access_file_path':
                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Receives UGC input that is 
                             * either a file path or 
                             * IP address data.
                             *
                             * Here...IP address data.
                             *
                             * Comma-delimited IP address / 
                             * IP range. 
                             *
                             */
                            return $this->set_crnrstn('ip_grant_exclusive_access', $data);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Note :: The CLR-SSL IP Address 
                             *         security policy articulates 
                             *         an o.g. method from 
                             *         CRNRSTN :: v1.0.0:
                             *
                             *         self::$oCRNRSTN_IP_MGR->exclusiveAccess($ip).
                             *
                             *         5 :: Friday, December 1, 2023 @ 1133 hrs.
                             *
                             */

                        break;
                        case 'config_deny_access_file_path':
                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Receives UGC input that 
                             * is either a file path 
                             * or IP address data.
                             *
                             * Here...IP address data.
                             *
                             * Comma-delimited IP address / 
                             * IP range. 
                             *
                             */
                            return $this->set_crnrstn('ip_deny_access', $data);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Note :: The CLR-SSL IP Address 
                             *         security policy articulates 
                             *         an o.g. method from 
                             *         CRNRSTN :: v1.0.0:
                             * 
                             *         self::$oCRNRSTN_IP_MGR->denyAccess($ip);
                             *
                             *         5 :: Friday, December 1, 2023 @ 1134 hrs.
                             *
                             */

                        break;
                        default:

                            error_log(
                                __LINE__ . ' ' . 
                                __METHOD__ . 
                                ' Unknown SWITCH CASE received [' . 
                                $data . 
                                '].');
                            $this->error_log('Unknown SWITCH ' . 
                                   'CASE received [' . 
                                   $data . '].', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);

                        break;

                    }

/**
 *                    //
 *                    // The CRNRSTN :: Lightsaber RoCEv2 SOAP 
 *                    // Services Layer (CLR-SSL) Multi-Channel 
 *                    // Decoupled Data Object (MC-DDO) 
 *                    // Data Storage Services Layer. 
 *                    //
 *                    //
 *                    // 5
 *                    //
 *                    // # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *                    // CLR-SSL UGC data 
 *                    // input [IP ADDRESS ACCESS]
 *                    switch($data_profile){
 *                        case 'config_grant_exclusive_access_file_path':
 *
 *                            if($tmp_force_data_err == true){
 *
 *                                //
 *                                // IP ADDRESS / IP RANGE.
 *
 *                            }else{
 *
 *                                //
 *                                // EXTRACT RESOURCE CONFIGURATION FROM FILE.
 *                                $this->error_log('Including and evaluating ' . 
 *                                       'the IP address "grant exclusive ' . 
 *                                       'access" settings configuration file, ' . 
 *                                       $tmp_file_path . '.', 
 *                                       __LINE__, 
 *                                       __METHOD__, 
 *                                       __FILE__, 
 *                                       CRNRSTN_SETTINGS_CRNRSTN);
 *
 *                                $this->crnrstn_include_file(__METHOD__, $tmp_file_path);
 *
 *                                $this->grant_accessIP_ARRAY[$this->config_serial_hash][$this->hash(self::$hmac_hash_algorithm_ARRAY['options']['server'][self::$hmac_hash_algorithm_ARRAY['DEFAULT'][CRNRSTN_INTEGER]], $env_key)] = $ip_or_file;
 *
 *                            }
 *
 *                            $this->error_log('TODO :: Finish integrations ' . 
 *                                   'into CRNRSTN :: Lightsaber for all ' . 
 *                                   'IP address mgmt stuff.', 
 *                                   __LINE__, 
 *                                   __METHOD__, 
 *                                   __FILE__, 
 *                                   CRNRSTN_SETTINGS_CRNRSTN);
 *
 *                        break;
 *                        case 'config_deny_access_file_path':
 *
 *                            if($tmp_force_data_err == true){
 *
 *                                //
 *                                // IP ADDRESS / IP RANGE.
 *
 *                            }else{
 *
 *                                //
 *                                // Extract resource 
 *                                // configuration 
 *                                // from file. 
 *                                $this->error_log('Including and evaluating ' . 
 *                                       'the IP address "deny access" settings ' . 
 *                                       'configuration file, ' . 
 *                                       $tmp_file_path . '.', 
 *                                       __LINE__, 
 *                                       __METHOD__, 
 *                                       __FILE__, 
 *                                       CRNRSTN_SETTINGS_CRNRSTN);
 *
 *                                $this->crnrstn_include_file(
 *                                       __METHOD__, 
 *                                       $tmp_file_path);
 *
 *                            }
 *
 *                        break;
 *                        default:
 *                            //SILENCE IS GOLDEN.
 *                        break;
 *
 *                    }
 *
 *                    $this->input_data_value(
 *                           $tmp_file_path, 
 *                           $data_key, 
 *                           $data_type_family, 
 *                           $index, 
 *                           $data_authorization_profile, 
 *                           $ttl, 
 *                           $spool_resource, 
 *                           $env_key);
 *
 */

                }

            break;

            case 'config_add_database_database':
            case 'config_add_database_connection_database':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CLR-SSL UGC data 
                 * validation input 
                 * and error 
                 * message [DATABASE]
                 *
                 */
                switch($data_key){
                    case 'host':
                    case 'db_host_or_file_path':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * IP or file path?
                         *
                         */
                        $tmp_pos_path_str = strpos($data, '_crnrstn.db.config.inc.php');

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Handle file path.
                         *
                         */
                        if($tmp_pos_path_str !== false){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Experimental (until Windows tested) 
                             * sanitization of directory file 
                             * path slashes for system compatibility.
                             *
                             */
                            $tmp_file_path = $this->str_sanitize($data, DIRECTORY_SEPARATOR);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * This should 
                             * be a file. 
                             *
                             */
                            if(is_file($tmp_file_path)){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Extract CLR-SSL 
                                 * configuration 
                                 * from file. 
                                 *
                                 */
                                $this->error_log('Including and evaluating ' . 
                                       'the CRNRSTN :: DATABASE settings ' . 
                                       'configuration file, ' . 
                                       $tmp_file_path . '.',
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);
                                    $this->crnrstn_include_file(
                                       __METHOD__, 
                                       $tmp_file_path, 
                                       'include_once', 
                                       NULL, 
                                       false, 
                                       false);

                            }else{

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Process UGC input 
                                 * of database host. 
                                 *
                                 *
                                 * The CRNRSTN :: Lightsaber 
                                 * RoCEv2 SOAP Services Layer 
                                 * (CLR-SSL) Multi-Channel 
                                 * Decoupled Data Object 
                                 * (MC-DDO) Data Storage 
                                 * Services Layer. 
                                 *
                                 * The CLR-SSL MC-DDO 
                                 * Services Layer. 
                                 *
                                 *
                                 * 5
                                 *
                                 * CLR-SSL UGC data 
                                 * input [DATABASE]
                                 *
                                 */
                                $this->input_data_value(
                                       $data, 
                                       'host', 
                                       $data_type_family, 
                                       $index, 
                                       $data_authorization_profile, 
                                       $ttl, 
                                       $spool_resource, 
                                       $env_key);

                            }

                        }

                    break;
                    case 'un':

                        if(isset($data)){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [DATABASE]
                             *
                             */
                            $this->input_data_value(
                                   $data, 
                                   'un', 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);

                        }

                    break;
                    case 'pwd':

                        if(isset($data)){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * inpout [DATABASE]
                             *
                             */
                            $this->input_data_value(
                                   $data, 
                                   'pwd', 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);

                        }

                    break;
                    case 'db':

                        if(isset($data)){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [DATABASE]
                             *
                             */
                            $this->input_data_value(
                                   $data, 
                                   'db', 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);

                        }

                    break;
                    case 'port':

                        if(isset($data)){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * This should 
                             * be a number. 
                             *
                             */
                            if(is_numeric($data)){

                                $tmp_int = (int) $data;

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * The CRNRSTN :: Lightsaber 
                                 * RoCEv2 SOAP Services Layer 
                                 * (CLR-SSL) Multi-Channel 
                                 * Decoupled Data Object 
                                 * (MC-DDO) Data Storage 
                                 * Services Layer. 
                                 *
                                 * The CLR-SSL MC-DDO 
                                 * Services Layer. 
                                 *
                                 *
                                 * 5
                                 *
                                 * CLR-SSL UGC data 
                                 * input [DATABASE]
                                 *
                                 */
                                $this->input_data_value(
                                   $tmp_int, 
                                   'port', 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);

                            }else{

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * It would certainly appear 
                                 * that this is not a valid 
                                 * number for the 
                                 * requested operation. 
                                 *
                                 * We shall run a genuinely 
                                 * invalid calculation and 
                                 * use the system error that 
                                 * is generated to clearly 
                                 * communicate that the input 
                                 * datum is an "invalid number". 
                                 *
                                 * This may be the only way 
                                 * that an application which 
                                 * absolutely loves numbers as 
                                 * much as the CRNRSTN :: 
                                 * Lightsaber RoCEv2 SOAP 
                                 * Services Layer (CLR-SSL) 
                                 * loves numbers would be able 
                                 * to produce a respectable 
                                 * error message on this, the 
                                 * subject matter. 
                                 * 
                                 * And the CLR-SSL has really 
                                 * been loving the numbers 
                                 * lately, man. We happily pay 
                                 * the price ($$$) of compute 
                                 * to acquire an authentic NAN 
                                 * (not a number), real bad data. 
                                 *
                                 * We buy a properly shit value 
                                 * that can be consistently 
                                 * and reliably returned with 
                                 * confidence by the CLR-SSL. 
                                 *
                                 * And all this...even in the 
                                 * midst of "these economic 
                                 * times", at that! 
                                 *
                                 * CRNRSTN :: <3's... 
                                 * ...(int) CRNRSTN_INTEGER 4 LIFE! 
                                 *
                                 *
                                 * 5 :: Monday, December 4, 2023 @ 1117 hrs.
                                 * Last Modified: Friday, February 27, 2026 @ 0151 hrs.
                                 *
                                 * See, https://www.php.net/manual/en/function.is-nan.php
                                 *
                                 */
                                $tmp_int = sqrt(-1);

                                $tmp_err_str = 'CRNRSTN :: could not apply ' . 
                                               'the database port, ' . 
                                               $tmp_int . '. ' .
                                               strval($data) . 
                                               ', was the value that was ' . 
                                               'provided as method input ' . 
                                               'to this environment. ' .
                                               $this->data_report(
                                                      $data, 
                                                      'CRNRSTN :: MC-DDO UGC Input Data Report');

                                $this->err_message_queue_push(NULL, $tmp_err_str);

                                return NULL;

                            }

                        }

                    break;
                    default:
                        //SILENCE IS GOLDEN.
                        error_log(__LINE__ . ' ' . 
                            __METHOD__ . ' Unknown SWITCH ' . 
                            'CASE received [' . 
                            $data . '].');
                        $this->error_log('Unknown SWITCH ' . 
                               'CASE received [' . 
                               $data . '].', 
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               CRNRSTN_SETTINGS_CRNRSTN);

                    break;

                }

/**
 *                //
 *                // Handle file path.
 *                if($tmp_pos_path_str !== false){
 *
 *                    //
 *                    // Experimental (until Windows 
 *                    // tested) sanitization of 
 *                    // directory file path slashes 
 *                    // for system compatibility. 
 *                    $tmp_file_path = $this->str_sanitize(
 *                                            $data, 
 *                                            DIRECTORY_SEPARATOR);
 *
 *                    //
 *                    // This should 
 *                    // be a file. 
 *                    if(is_file($tmp_file_path)){
 *
 *                        //
 *                        // Track accessed 
 *                        // configuration files. 
 *                        //
 *                        // Acquire file 
 *                        // versioning hash. 
 *                        self::$server_files_version_hash_ARRAY[$tmp_file_path] = $this->hash_file(
 *                                                                                        $tmp_file_path, 
 *                                                                                        NULL, 
 *                                                                                        false, 
 *                                                                                        true, 
 *                                                                                        $tmp_file_path);
 *
 *
 *                    }else{
 *
 *                        //
 *                        // # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *                        // CRNRSTN :: UGC data 
 *                        // validation error 
 *                        // message [DATABASE]
 *                        switch($data_key){
 *                            case 'host_or_creds_path':
 *
 *                                //
 *                                // WE COULD NOT 
 *                                // FIND THE 
 *                                // CONFIGURATION FILE. 
 *                                $this->error_log('File path data not ' . 
 *                                       'recognized as a file. [' . 
 *                                       $tmp_file_path . '].', 
 *                                       __LINE__, 
 *                                       __METHOD__, 
 *                                       __FILE__, 
 *                                       CRNRSTN_SETTINGS_CRNRSTN);
 *                                $tmp_err_str = 'CRNRSTN :: could not load ' . 
 *                                               'the IP address "grant exclusive ' . 
 *                                               'access" settings configuration file, ' . 
 *                                               $data_key . ', (' . 
 *                                               $this->gettype($tmp_file_path) . ') ' . 
 *                                               strval($tmp_file_path) . '. ' . 
 *                                               strval($data) . 
 *                                               ', was the value that was provided ' . 
 *                                               'as method input to this environment. ' . 
 *                                               $this->data_report(
 *                                                      $data, 
 *                                                      'CRNRSTN :: MC-DDO UGC Input Data Report');
 *
 *                            break;
 *                            default:
 *                                //case 'config_deny_access_file_path':
 *
 *                                //
 *                                // WE COULD NOT 
 *                                // FIND THE 
 *                                // CONFIGURATION FILE. 
 *                                $this->error_log('File path data not ' . 
 *                                       'recognized as a file. [' . 
 *                                       $tmp_file_path . '].', 
 *                                       __LINE__, 
 *                                       __METHOD__, 
 *                                       __FILE__, 
 *                                       CRNRSTN_SETTINGS_CRNRSTN);
 *                                $tmp_err_str = 'CRNRSTN :: could not load ' . 
 *                                               'the IP address "deny access" ' . 
 *                                               'settings configuration file, ' . 
 *                                               $data_key . ', (' . 
 *                                               $this->gettype($tmp_file_path) . ') ' . 
 *                                               strval($tmp_file_path) . '. ' . 
 *                                               strval($data) . 
 *                                               ', was the value that was provided ' . 
 *                                               'as method input to this environment. ' . 
 *                                               $this->data_report(
 *                                                      $data, 
 *                                                      'CRNRSTN :: MC-DDO UGC Input Data Report');
 *
 *                            break;
 *
 *                        }
 *
 *                        $this->err_message_queue_push(NULL, $tmp_err_str);
 *
 *                        return NULL;
 *
 *                    }
 *
 *                }else{
 *
 *                    //
 *                    // IP address 
 *                    // UGC input. 
 *
 *                    //
 *                    // The CRNRSTN :: Lightsaber RoCEv2 SOAP 
 *                    // Services Layer (CLR-SSL) Multi-Channel 
 *                    // Decoupled Data Object (MC-DDO) 
 *                    // Data Storage Services Layer. 
 *                    //
 *                    //
 *                    // 5
 *                    //
 *                    // CLR-SSL UGC data 
 *                    // input [DATABASE]
 *                    switch($data_key){
 *                        case 'crnrstn_database_config_file_path':
 *
 *                            //
 *                            // IP address / IP range.
 *                            return $this->ip_exclusive_access($data);
 *
 *                        break;
 *                        default:
 *                            //case 'config_deny_access_file_path':
 *
 *                            //
 *                            // IP address / IP range.
 *                            return $this->ip_deny_access($data);
 *
 *                        break;
 *
 *                    }
 *
 *                }
 *
 */

            break;

            case 'config_include_sql_silo_query_silo':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Experimental (until Windows 
                 * tested) sanitization of 
                 * directory file path slashes 
                 * for system compatibility. 
                 *
                 */
                $tmp_file_path = $this->str_sanitize(
                                        $data, 
                                        DIRECTORY_SEPARATOR);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CLR-SSL UGC data 
                 * validation, input, 
                 * and error message [QUERY SILO]
                 *
                 */
                if(is_file($tmp_file_path)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Extract CLR-SSL 
                     * configuration 
                     * from file. 
                     *
                     */
                    $this->error_log('Including and evaluating ' . 
                           'the CRNRSTN :: QUERY SILO ' . 
                           'settings configuration file, ' . 
                           $tmp_file_path . '.', 
                           __LINE__, 
                           __METHOD__, 
                           __FILE__, 
                           CRNRSTN_SETTINGS_CRNRSTN);

                    $this->crnrstn_include_file(
                           __METHOD__, 
                           $tmp_file_path, 
                           'include_once', 
                           NULL, 
                           false, 
                           false);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * The CRNRSTN :: Lightsaber 
                     * RoCEv2 SOAP Services Layer 
                     * (CLR-SSL) Multi-Channel 
                     * Decoupled Data Object 
                     * (MC-DDO) Data Storage 
                     * Services Layer. 
                     *
                     * The CLR-SSL MC-DDO 
                     * Services Layer. 
                     *
                     *
                     * 5
                     *
                     * CLR-SSL UGC data 
                     * input [QUERY SILO]
                     *
                     */
                    $this->input_data_value(
                           $tmp_file_path, 
                           $data_key, 
                           $data_type_family, 
                           $index, 
                           $data_authorization_profile, 
                           $ttl, 
                           $spool_resource, 
                           $env_key);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Instantiate the CLR-SSL 
                     * Database Query Silo 
                     * class object. 
                     *
                     *
                     * 5 :: Friday, December 1, 2023 @ 1254 hrs.
                     *
                     */
                    $this->set_crnrstn('init_query_silo');

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL UGC data 
                     * validation error 
                     * message [QUERY SILO]
                     *
                     */
                    $this->error_log('File not found. File ' . 
                           'path data is not recognized ' . 
                           'as a file. [' . 
                           $tmp_file_path . '].', 
                           __LINE__, 
                           __METHOD__, 
                           __FILE__, 
                           CRNRSTN_SETTINGS_CRNRSTN);
                    $tmp_err_str = 'CRNRSTN :: could not load ' . 
                                   'the CRNRSTN :: DATABASE QUERY ' . 
                                   'SILO class definition and ' . 
                                   'configuration file, ' . 
                                   $data_key . ', (' . 
                                   $this->gettype($tmp_file_path) . ') ' . 
                                   strval($tmp_file_path) . '. ' . 
                                   strval($data) . 
                                   ', was the value that was ' . 
                                   'provided as method input to ' . 
                                   'this environment. ' . 
                                   $this->data_report(
                                          $data, 
                                          'CRNRSTN :: MC-DDO UGC Input Data Report');

                    $this->err_message_queue_push(NULL, $tmp_err_str);

                    return NULL;

                }

            break;

            case 'config_admin_email_admin_email':

                switch($data_key){
                    case 'email_data':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Format email 
                         * data into array. 
                         *
                         */
                        $tmp_email_ARRAY = $this->return_ugc_email_data_profile_ARRAY($data);
                        $tmp_count_email = count($tmp_email_ARRAY['EMAIL']);

                        for($i = 0; $i < $tmp_count_email; $i++){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * error_log(__LINE__ . 
                             *     ' crnrstn name[' . 
                             *     trim($tmp_email_ARRAY['RECIPIENT_NAME'][$i]) . 
                             *     '] email[' . 
                             *     $this->str_sanitize(
                             *                      $tmp_email_ARRAY['EMAIL'][$i], 
                             *                      'email_private') . 
                             *     '].');
                             *
                             *
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [ADMIN EMAIL]
                             *
                             */
                            $this->input_data_value(
                                   $tmp_email_ARRAY['EMAIL'][$i], 
                                   'system_admin_email', 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);
                            $this->input_data_value(
                                   $this->str_sanitize(
                                          $tmp_email_ARRAY['EMAIL'][$i], 
                                          'email_private'), 
                                   'system_admin_email_display', 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);
                            $this->input_data_value(
                                   $tmp_email_ARRAY['RECIPIENT_NAME'][$i], 
                                   'system_admin_email_recipient_name', 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);

                            if(strlen($tmp_email_ARRAY['RECIPIENT_NAME'][$i]) > 0){

                                $this->error_log('Storing administrative ' . 
                                       'contact profile information [' . 
                                       $tmp_email_ARRAY['RECIPIENT_NAME'][$i] . ', ' . 
                                       $this->str_sanitize(
                                              $tmp_email_ARRAY['EMAIL'][$i], 
                                              'email_private') . 
                                       '] in memory for environment key [' . 
                                       $env_key . '].', 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);

                            }else{

                                $this->error_log('Storing administrative ' . 
                                       'contact profile information [' . 
                                       $this->str_sanitize(
                                              $tmp_email_ARRAY['EMAIL'][$i], 
                                              'email_private') . 
                                       '] in memory for environment key [' . 
                                       $env_key . '].', 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_SETTINGS_CRNRSTN);

                            }

                        }

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * The CRNRSTN :: Lightsaber 
                         * RoCEv2 SOAP Services Layer 
                         * (CLR-SSL) Multi-Channel 
                         * Decoupled Data Object 
                         * (MC-DDO) Data Storage 
                         * Services Layer. 
                         *
                         * The CLR-SSL MC-DDO 
                         * Services Layer. 
                         *
                         *
                         * 5
                         *
                         * CLR-SSL UGC data 
                         * input [ADMIN EMAIL]
                         *
                         */
                        $this->input_data_value(
                               $data, 
                               $data_key, 
                               $data_type_family, 
                               $index, 
                               $data_authorization_profile, 
                               $ttl, 
                               $spool_resource, 
                               $env_key);

                    break;
                    case 'max_login_attempts':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * This should 
                         * be a number. 
                         *
                         */
                        if(is_numeric($data)){

                            $tmp_int = (int) $data;

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [ADMIN EMAIL]
                             *
                             */
                            $this->input_data_value(
                                   $tmp_int, 
                                   $data_key, 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * It would certainly appear 
                             * that this is not a valid 
                             * number for the 
                             * requested operation. 
                             *
                             * We shall run a genuinely 
                             * invalid calculation and 
                             * use the system error that 
                             * is generated to clearly 
                             * communicate that the input 
                             * datum is an "invalid number". 
                             *
                             * This may be the only way 
                             * that an application which 
                             * absolutely loves numbers as 
                             * much as the CRNRSTN :: 
                             * Lightsaber RoCEv2 SOAP 
                             * Services Layer (CLR-SSL) 
                             * loves numbers would be able 
                             * to produce a respectable 
                             * error message on this, the 
                             * subject matter. 
                             * 
                             * And the CLR-SSL has really 
                             * been loving the numbers 
                             * lately, man. We happily pay 
                             * the price ($$$) of compute 
                             * to acquire an authentic NAN 
                             * (not a number), real bad data. 
                             *
                             * We buy a properly shit value 
                             * that can be consistently 
                             * and reliably returned with 
                             * confidence by the CLR-SSL. 
                             *
                             * And all this...even in the 
                             * midst of "these economic 
                             * times", at that! 
                             *
                             * CRNRSTN :: <3's... 
                             * ...(int) CRNRSTN_INTEGER 4 LIFE! 
                             *
                             *
                             * 5 :: Monday, December 4, 2023 @ 1117 hrs.
                             * Last Modified: Friday, February 27, 2026 @ 0151 hrs.
                             *
                             * See, https://www.php.net/manual/en/function.is-nan.php
                             *
                             */
                            $tmp_int = sqrt(-1);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Load system settings 
                             * default due to bad 
                             * UGC input data. 
                             *
                             */
                            $tmp_int_default = $this->get_resource(
                                                      'max_login_attempts', 
                                                      0, 
                                                      'CRNRSTN::RESOURCE::GENERAL_SETTINGS');

                            $tmp_err_str = 'CRNRSTN :: could not determine ' . 
                                           'max login attempts with the input, (' . 
                                           $this->gettype($tmp_int) . ') ' . 
                                           strval($tmp_int) . '. ' . 
                                           strval($data) . 
                                           ', was the value provided. The ' . 
                                           'system will manually set max login ' . 
                                           'attempts to the settings default of ' . 
                                           $tmp_int_default . '. ' . 
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');
                            $this->error_log(
                                   $tmp_err_str, 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [ADMIN EMAIL]
                             *
                             */
                            $this->input_data_value(
                                   $tmp_int_default, 
                                   $data_key, 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);

                        }

                    break;
                    case 'timeout_user_inactive':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * This should 
                         * be a number. 
                         *
                         */
                        if(is_numeric($data)){

                            $tmp_int = (int) $data;

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [ADMIN EMAIL]
                             *
                             */
                            $this->input_data_value(
                                   $tmp_int, 
                                   $data_key, 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * It would certainly appear 
                             * that this is not a valid 
                             * number for the 
                             * requested operation. 
                             *
                             * We shall run a genuinely 
                             * invalid calculation and 
                             * use the system error that 
                             * is generated to clearly 
                             * communicate that the input 
                             * datum is an "invalid number". 
                             *
                             * This may be the only way 
                             * that an application which 
                             * absolutely loves numbers as 
                             * much as the CRNRSTN :: 
                             * Lightsaber RoCEv2 SOAP 
                             * Services Layer (CLR-SSL) 
                             * loves numbers would be able 
                             * to produce a respectable 
                             * error message on this, the 
                             * subject matter. 
                             * 
                             * And the CLR-SSL has really 
                             * been loving the numbers 
                             * lately, man. We happily pay 
                             * the price ($$$) of compute 
                             * to acquire an authentic NAN 
                             * (not a number), real bad data. 
                             *
                             * We buy a properly shit value 
                             * that can be consistently 
                             * and reliably returned with 
                             * confidence by the CLR-SSL. 
                             *
                             * And all this...even in the 
                             * midst of "these economic 
                             * times", at that! 
                             *
                             * CRNRSTN :: <3's... 
                             * ...(int) CRNRSTN_INTEGER 4 LIFE! 
                             *
                             *
                             * 5 :: Monday, December 4, 2023 @ 1117 hrs.
                             * Last Modified: Friday, February 27, 2026 @ 0151 hrs.
                             *
                             * See, https://www.php.net/manual/en/function.is-nan.php
                             *
                             */
                            $tmp_int = sqrt(-1);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Load system settings 
                             * default due to bad 
                             * UGC input data. 
                             *
                             */
                            $tmp_int_default = $this->get_resource(
                                                      'timeout_user_inactive', 
                                                      0, 
                                                      'CRNRSTN::RESOURCE::GENERAL_SETTINGS');

                            $tmp_err_str = 'CRNRSTN :: could not determine ' . 
                                           'the seconds of inactivity before ' . 
                                           'session timeout with the input, (' . 
                                           $this->gettype($tmp_int) . ') ' . 
                                           strval($tmp_int) . '. ' . 
                                           strval($data) . 
                                           ', was the value provided. The ' . 
                                           'system will manually set the ' . 
                                           'inactivity timeout to the ' . 
                                           'settings default of ' . 
                                           $tmp_int_default . '. ' . 
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');
                            $this->error_log(
                                   $tmp_err_str, 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_SETTINGS_CRNRSTN);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [ADMIN EMAIL]
                             *
                             */
                            $this->input_data_value(
                                   $tmp_int_default, 
                                   $data_key, 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);

                        }

                    break;

                }

            break;

            case 'apply_encryption_profile_encryption':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Note: The datatype family is
                 *       located in an array
                 *       which will come with
                 *       this data set and
                 *       be stored.
                 *
                 *       We will pass the integer
                 *       constant in as
                 *       data_type_family
                 *       for the encryption
                 *       services configuration
                 *       for input simplicity at
                 *       the point of capture.
                 *
                 *
                 *       5
                 *
                 *       Friday, October 3, 2023 @ 0540 hrs.
                 *
                 */
                $tmp_int_const = $data_type_family;
                $data_type_family = $this->return_encryption_data_type_family($tmp_int_const);

                switch($tmp_int_const){
                    case CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_GET:
                    case CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_POST:
                    case CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_COOKIE:
                    case CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SESSION:
                    case CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_DATABASE:
                    case CRNRSTN_ENCRYPT_TUNNEL:
                    case CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP:
                    case CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_FILE:
                    case CRNRSTN_ENCRYPT_OERSL:

                        switch($data_key){
                            case 'encrypt_cipher':
                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * The cipher method. 
                                 *
                                 * For a list of available 
                                 * cipher methods, use: 
                                 *
                                 * openssl_get_cipher_methods().
                                 *
                                 */

                                if($this->is_valid_openssl_cipher(
                                          $data, 
                                          $data_key, 
                                          $data_type_family) == true)
                                {

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [ENCRYPTION]
                                     *
                                     */
                                    $this->input_data_value(
                                          $data, 
                                          $data_key, 
                                          $data_type_family, 
                                          $index, 
                                          $data_authorization_profile, 
                                          $ttl, 
                                          $spool_resource, 
                                          $env_key);

                                }else{

                                    $tmp_cipher = $this->get_openssl_cipher_profile(
                                                         $data_key, 
                                                         $data_type_family, 
                                                         true);

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CLR-SSL UGC data 
                                     * validation error 
                                     * message [ENCRYPTION]
                                     *
                                     */
                                    $tmp_err_str = 'CRNRSTN :: could not ' . 
                                                   'verify the OpenSSL v' . 
                                                   $this->version_openssl() . ' cipher, "' . 
                                                   $data . 
                                                   '", for this environment. "' . 
                                                   strval($data) . 
                                                   '", was the value provided. The ' . 
                                                   'OpenSSL cipher will manually be set to, "' . 
                                                   $tmp_cipher . '".' . 
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');
                                    $this->error_log(
                                           $tmp_err_str, 
                                           __LINE__, 
                                           __METHOD__, 
                                           __FILE__, 
                                           CRNRSTN_SETTINGS_CRNRSTN);

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [ENCRYPTION]
                                     *
                                     */
                                    $this->input_data_value(
                                           $tmp_cipher, 
                                           $data_key, 
                                           $data_type_family, 
                                           $index, 
                                           $data_authorization_profile, 
                                           $ttl, 
                                           $spool_resource, 
                                           $env_key);

                                }

                            break;
                            case 'encrypt_secret_key':
                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Edit: Removed passphrase 10 char 
                                 *       min (and the max) error 
                                 *       messaging.
                                 *       5 :: Sunday, March 1, 2026 @ 2238 hrs.
                                 * 
                                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * TODO :: Implementation of a simple OpenSSL 
                                 *         encryption passphrase (# of bits) 
                                 *         management architecture based on 
                                 *         the cipher; e.g., aes-128 gets 
                                 *         128 bit passphrase (16 chars),  
                                 *         aes-256 receives a 256 bit 
                                 *         passphrase (32 chars),...etc. 
                                 *         5 :: Sunday, March 1, 2026 @ 2245 hrs.
                                 *
                                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * The passphrase.
                                 *
                                 * If the passphrase is 
                                 * shorter than expected, 
                                 * it is silently padded 
                                 * with NULL characters; 
                                 * 
                                 * E.g., aes-128 password 
                                 * must be 128 bits 
                                 * therefore 16 bytes.
                                 *
                                 * For aes-256, provide a 
                                 * $key that is 256 bits 
                                 * long, as 256 bits == 
                                 * 32 bytes.
                                 *
                                 * If the passphrase is
                                 * longer than expected, 
                                 * it is silently truncated. 
                                 * 
                                 * https://www.php.net/manual/en/function.openssl-encrypt.php#104438
                                 * https://www.php.net/manual/en/function.openssl-encrypt.php#121818
                                 *
                                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * The CRNRSTN :: Lightsaber 
                                 * RoCEv2 SOAP Services Layer 
                                 * (CLR-SSL) Multi-Channel 
                                 * Decoupled Data Object 
                                 * (MC-DDO) Data Storage 
                                 * Services Layer. 
                                 *
                                 * The CLR-SSL MC-DDO 
                                 * Services Layer. 
                                 *
                                 *
                                 * 5
                                 *
                                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * CLR-SSL UGC data 
                                 * input [ENCRYPTION]
                                 *
                                 */
                                $this->input_data_value(
                                       $data, 
                                       $data_key, 
                                       $data_type_family, 
                                       $index, 
                                       $data_authorization_profile, 
                                       $ttl, 
                                       $spool_resource, 
                                       $env_key);

                            break;
                            case 'encrypt_options':
                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * options is a bitwise 
                                 * disjunction of the flags: 
                                 * - OPENSSL_RAW_DATA, and 
                                 * - OPENSSL_ZERO_PADDING or
                                 * - OPENSSL_DONT_ZERO_PAD_KEY.
                                 *
                                 *
                                 * This should 
                                 * be a number. 
                                 *
                                 */
                                if(is_numeric($data)){

                                    error_log('[lnum ' . 
                                            __LINE__ . '] [class ' . 
                                            __CLASS__ . '] Does this flag logic below' . 
                                            'work with string data passed in? ' . 
                                            'Maybe move the $tmp_ARRAY ' . 
                                            'to a private static?');
                                    error_log('[lnum ' . 
                                            __LINE__ . '] [class ' . 
                                            __CLASS__ . 
                                            '] 5 :: Tuesday, March 3, 2026 ' . 
                                            '@ 0021 hrs. die();');
                                    die();

                                    $tmp_int = (int) $data;

                                }else{

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Is the data a string 
                                     * representation of a bitwise 
                                     * disjunction of the PHP integer 
                                     * flags OPENSSL_RAW_DATA, and 
                                     * OPENSSL_ZERO_PADDING or 
                                     * OPENSSL_DONT_ZERO_PAD_KEY?
                                     *
                                     * Did we receive string data 
                                     * that can be made integer? 
                                     *
                                     *
                                     * 5 :: Sunday, March 1, 2026 @ 2259 hrs.
                                     *
                                     * String patterns that we could 
                                     * convert to a bitwise result 
                                     * or integer representation:
                                     *
                                     * "OPENSSL_RAW_DATA | OPENSSL_NO_PADDING"
                                     * "OPENSSL_RAW_DATA | OPENSSL_DONT_ZERO_PAD_KEY"
                                     * "OPENSSL_NO_PADDING | OPENSSL_RAW_DATA"
                                     * "OPENSSL_DONT_ZERO_PAD_KEY | OPENSSL_RAW_DATA"
                                     * "OPENSSL_RAW_DATA"
                                     * "OPENSSL_NO_PADDING"
                                     * "OPENSSL_DONT_ZERO_PAD_KEY"
                                     * 
                                     * -----
                                     * OPENSSL_RAW_DATA (int)
                                     *    If OPENSSL_RAW_DATA is set in the 
                                     *    openssl_encrypt() or openssl_decrypt(), 
                                     *    the returned data is returned as-is. 
                                     *    When it is not specified, Base64 
                                     *    encoded data is returned to the caller.
                                     *
                                     * OPENSSL_DONT_ZERO_PAD_KEY (int)
                                     *    Prevents openssl_encrypt() from padding 
                                     *    keys that are shorter than the default 
                                     *    key length.
                                     *
                                     * OPENSSL_ZERO_PADDING (int)
                                     *    By default encryption operations are 
                                     *    padded using standard block padding and 
                                     *    the padding is checked and removed when 
                                     *    decrypting. If OPENSSL_ZERO_PADDING is 
                                     *    set in the openssl_encrypt() or 
                                     *    openssl_decrypt() options then no 
                                     *    padding is performed, the total amount 
                                     *    of data encrypted or decrypted must 
                                     *    then be a multiple of the block size 
                                     *    or an error will occur.
                                     *
                                     * https://www.php.net/manual/en/openssl.constants.other.php#constant.openssl-raw-data
                                     *
                                     */
                                    if(is_string($data)){

                                        /**
                                         * 1) Strip all spaces.
                                         * 2) Uppercase the data.
                                         * 3) Compare to a prepared 
                                         *    index array.
                                         */
                                        $tmp_options_data = strtoupper($this->str_sanitize(
                                                                              $data, 
                                                                              'remove_all_spaces'));

                                        $tmp_ARRAY = array('OPENSSL_RAW_DATA'        => OPENSSL_RAW_DATA,
                                                           'OPENSSL_NO_PADDING'      => OPENSSL_NO_PADDING,
                                                           'OPENSSL_DONT_ZERO_PAD_KEY' => OPENSSL_DONT_ZERO_PAD_KEY,
                                        'OPENSSL_RAW_DATA|OPENSSL_NO_PADDING'        => OPENSSL_RAW_DATA | 
                                                                                        OPENSSL_NO_PADDING,
                                        'OPENSSL_NO_PADDING|OPENSSL_RAW_DATA'        => OPENSSL_NO_PADDING | 
                                                                                        OPENSSL_RAW_DATA,
                                        'OPENSSL_RAW_DATA|OPENSSL_DONT_ZERO_PAD_KEY' => OPENSSL_RAW_DATA | 
                                                                                        OPENSSL_DONT_ZERO_PAD_KEY,
                                        'OPENSSL_DONT_ZERO_PAD_KEY|OPENSSL_RAW_DATA' => OPENSSL_DONT_ZERO_PAD_KEY | 
                                                                                        OPENSSL_RAW_DATA);

                                        error_log('[lnum ' . 
                                            __LINE__ . '] [class ' . 
                                            __CLASS__ . '] Does this flag logic ' . 
                                            'work? Maybe move the $tmp_ARRAY ' . 
                                            'to a private static?');
                                        error_log('[lnum ' . 
                                            __LINE__ . '] [class ' . 
                                            __CLASS__ . 
                                            '] 5 :: Tuesday, March 3, 2026 ' . 
                                            '@ 0018 hrs. die();');
                                        die();

                                        if(isset($tmp_ARRAY[$tmp_options_data])){

                                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                             * Insert the PHP flag integer 
                                             * representation of the provided 
                                             * (string) options data. 
                                             *
                                             *
                                             * 5 :: Monday, March 2, 2026 @ 0028 hrs.
                                             */
                                            $tmp_int = $tmp_ARRAY[$tmp_options_data];

                                        }

                                    }

                                    if(!isset($tmp_int)){

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * It would certainly appear 
                                         * that this is not a valid 
                                         * number for the 
                                         * requested operation. 
                                         *
                                         * We shall run a genuinely 
                                         * invalid calculation and 
                                         * use the system error that 
                                         * is generated to clearly 
                                         * communicate that the input 
                                         * datum is an "invalid number". 
                                         *
                                         * This may be the only way 
                                         * that an application which 
                                         * absolutely loves numbers as 
                                         * much as the CRNRSTN :: 
                                         * Lightsaber RoCEv2 SOAP 
                                         * Services Layer (CLR-SSL) 
                                         * loves numbers would be able 
                                         * to produce a respectable 
                                         * error message on this, the 
                                         * subject matter. 
                                         * 
                                         * And the CLR-SSL has really 
                                         * been loving the numbers 
                                         * lately, man. We happily pay 
                                         * the price ($$$) of compute 
                                         * to acquire an authentic NAN 
                                         * (not a number), real bad data. 
                                         *
                                         * We buy a properly shit value 
                                         * that can be consistently 
                                         * and reliably returned with 
                                         * confidence by the CLR-SSL. 
                                         *
                                         * And all this...even in the 
                                         * midst of "these economic 
                                         * times", at that! 
                                         *
                                         * CRNRSTN :: <3's... 
                                         * ...(int) CRNRSTN_INTEGER 4 LIFE! 
                                         *
                                         *
                                         * 5 :: Monday, December 4, 2023 @ 1117 hrs.
                                         * Last Modified: Friday, February 27, 2026 @ 0151 hrs.
                                         *
                                         * See, https://www.php.net/manual/en/function.is-nan.php
                                         *
                                         */
                                        $tmp_int = sqrt(-1);

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * CLR-SSL UGC data 
                                         * validation error 
                                         * message [ENCRYPTION]
                                         *
                                         */
                                        $tmp_err_str = 'CRNRSTN :: cannot use the ' . 
                                                       'provided options integer value, ' . 
                                                       $tmp_int .
                                                       ', for OpenSSL v' . 
                                                       $this->version_openssl() . '. ' . 
                                                       strval($data) .
                                                       ', was the value provided. This will ' . 
                                                       'be manually set to OPENSSL_RAW_DATA[' . 
                                                       OPENSSL_RAW_DATA .
                                                       ']. Options is a bitwise disjunction ' . 
                                                       'of the flags OPENSSL_RAW_DATA[' . 
                                                       OPENSSL_RAW_DATA . 
                                                       '], and OPENSSL_ZERO_PADDING[' .
                                                       OPENSSL_ZERO_PADDING . '] or ' . 
                                                       'OPENSSL_DONT_ZERO_PAD_KEY[' .
                                                       OPENSSL_DONT_ZERO_PAD_KEY . ']. ' . 
                                                       $this->data_report(
                                                              $data, 
                                                              'CRNRSTN :: MC-DDO UGC Input Data Report');
                                        $this->error_log(
                                               $tmp_err_str, 
                                               __LINE__, 
                                               __METHOD__, 
                                               __FILE__, 
                                               CRNRSTN_SETTINGS_CRNRSTN);

                                        $tmp_int = OPENSSL_RAW_DATA;

                                    }

                                }

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * The CRNRSTN :: Lightsaber 
                                 * RoCEv2 SOAP Services Layer 
                                 * (CLR-SSL) Multi-Channel 
                                 * Decoupled Data Object 
                                 * (MC-DDO) Data Storage 
                                 * Services Layer. 
                                 *
                                 * The CLR-SSL MC-DDO 
                                 * Services Layer. 
                                 *
                                 *
                                 * 5
                                 *
                                 * CLR-SSL UGC data 
                                 * input [ENCRYPTION]
                                 *
                                 */
                                $this->input_data_value(
                                       $tmp_int, 
                                       $data_key, 
                                       $data_type_family, 
                                       $index, 
                                       $data_authorization_profile, 
                                       $ttl, 
                                       $spool_resource, 
                                       $env_key);

                            break;
                            case 'hmac_alg':

                                if($this->is_valid_hmac_algorithm(
                                                    $data, 
                                                    $data_key, 
                                                    $data_type_family) == true)
                                {

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [ENCRYPTION]
                                     *
                                     */
                                    $this->input_data_value(
                                           $data, 
                                           $data_key, 
                                           $data_type_family, 
                                           $index, 
                                           $data_authorization_profile, 
                                           $ttl, 
                                           $spool_resource, 
                                           $env_key);

                                }else{

                                    $tmp_hmac_algorithm = $this->get_hmac_algorithm_profile(
                                                                 $data_key, 
                                                                 $data_type_family, 
                                                                 true);

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * CLR-SSL UGC data 
                                     * validation error 
                                     * message [ENCRYPTION]
                                     *
                                     */
                                    $tmp_err_str = 'CRNRSTN :: could not verify ' . 
                                                   'the HMAC Algorithm, "' . 
                                                   $data . 
                                                   '", for this environment. "' . 
                                                   strval($data) . 
                                                   '", was the value provided. ' . 
                                                   'The hmac algorithm will ' . 
                                                   'manually be set to, "' . 
                                                   $tmp_hmac_algorithm . '".' . 
                                                   $this->data_report(
                                                          $data, 
                                                          'CRNRSTN :: MC-DDO UGC Input Data Report');
                                    $this->error_log(
                                           $tmp_err_str, 
                                           __LINE__, 
                                           __METHOD__, 
                                           __FILE__, 
                                           CRNRSTN_SETTINGS_CRNRSTN);

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * The CRNRSTN :: Lightsaber 
                                     * RoCEv2 SOAP Services Layer 
                                     * (CLR-SSL) Multi-Channel 
                                     * Decoupled Data Object 
                                     * (MC-DDO) Data Storage 
                                     * Services Layer. 
                                     *
                                     * The CLR-SSL MC-DDO 
                                     * Services Layer. 
                                     *
                                     *
                                     * 5
                                     *
                                     * CLR-SSL UGC data 
                                     * input [ENCRYPTION]
                                     *
                                     */
                                    $this->input_data_value(
                                           $tmp_hmac_algorithm, 
                                           $data_key, 
                                           $data_type_family, 
                                           $index, 
                                           $data_authorization_profile, 
                                           $ttl, 
                                           $spool_resource, 
                                           $env_key);

                                }

                            break;
                            case 'data_profile_ARRAY':
                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * $tmp_data_profile_ARRAY['data_type_family'] = 'CRNRSTN::RESOURCE::TUNNEL_ENCRYPTION';
                                 * $tmp_data_profile_ARRAY['data_type_title'] = 'CRNRSTN :: TUNNEL';
                                 * $tmp_data_profile_ARRAY['data_type_encryption_channel'] = CRNRSTN_ENCRYPT_TUNNEL;
                                 *
                                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * The CRNRSTN :: Lightsaber 
                                 * RoCEv2 SOAP Services Layer 
                                 * (CLR-SSL) Multi-Channel 
                                 * Decoupled Data Object 
                                 * (MC-DDO) Data Storage 
                                 * Services Layer. 
                                 *
                                 * The CLR-SSL MC-DDO 
                                 * Services Layer. 
                                 *
                                 *
                                 * 5
                                 *
                                 * CLR-SSL UGC data 
                                 * input [ENCRYPTION]
                                 *
                                 */
                                $this->input_data_value(
                                       $data, 
                                       $data_key, 
                                       $data_type_family, 
                                       $index, 
                                       $data_authorization_profile, 
                                       $ttl, 
                                       $spool_resource, 
                                       $env_key);

                            break;

                        }

                    break;

                }


/**
 *                    $tmp_digest = $this->get_resource(
 *                                         'openssl_digest', 
 *                                         0, 
 *                                         'CRNRSTN::RESOURCE::GENERAL_SETTINGS');
 *
 *                    $tmp_cipher = $this->get_resource(
 *                                         'openssl_cipher', 
 *                                         0, 
 *                                         'CRNRSTN::RESOURCE::GENERAL_SETTINGS');
 *
 *                    self::$oCRNRSTN_CONFIG_MGR->input_data_value(
 *                                                $encrypt_cipher, 
 *                                                'encrypt_cipher', 
 *                                                $data_type_family, 
 *                                                NULL, 
 *                                                CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME, 
 *                                                $env_key);
 *
 *                    self::$oCRNRSTN_CONFIG_MGR->input_data_value(
 *                                                openssl_digest(
 *                                                     $encrypt_secret_key, 
 *                                                     $tmp_digest, 
 *                                                     true), 
 *                                                'encrypt_secret_key', 
 *                                                $data_type_family, 
 *                                                NULL, 
 *                                                CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME, 
 *                                                $env_key);
 *
 *                    self::$oCRNRSTN_CONFIG_MGR->input_data_value(
 *                                                $encrypt_options, 
 *                                                'encrypt_options', 
 *                                                $data_type_family, 
 *                                                NULL, 
 *                                                CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME, 
 *                                                $env_key);
 *
 *                    self::$oCRNRSTN_CONFIG_MGR->input_data_value(
 *                                                $hmac_alg, 
 *                                                'hmac_alg', 
 *                                                $data_type_family, 
 *                                                NULL, 
 *                                                CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME, 
 *                                                $env_key);
 *
 */

            break;

            case 'config_init_logging_soap_logging_soap_service':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * For stability, if the 
                 * CLR-SSL Logging Services 
                 * Layer output profile 
                 * (integer constant or bit 
                 * field integer representation) 
                 * is unknown, the recommended 
                 * behavior for thrown 
                 * exceptions should be to fall 
                 * back to crnrstn_log_default. 
                 *
                 * This will output via the PHP 
                 * native error_log() a 
                 * slightly more enhanced 
                 * version of the PHP native 
                 * system stack error message. 
                 *
                 * No other $oCRNRSTN->error_log() 
                 * output would be sent. 
                 *
                 */
                switch($data_key){
                    case 'system_logging_output_profile':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * This should 
                         * be a number. 
                         *
                         */
                        if(is_numeric($data)){

                            $tmp_int = (int) $data;

                            if(!($this->isset_crnrstn(
                                        'system_log_output_profile_constants_ARRAY', 
                                        $tmp_int) == true))
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * If $data is not a valid CLR-SSL 
                                 * Logging Services Layer output 
                                 * profile constant, pass the 
                                 * logging profile input through 
                                 * a standardization filter. 
                                 *
                                 */
                                $tmp_int = $this->get_system_logging_config(
                                                  $data, 
                                                  CRNRSTN_INTEGER);

                            }

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * It would certainly appear that 
                             * this is not a valid number for 
                             * the requested operation. 
                             *
                             * If not a number, pass the logging 
                             * profile input through a 
                             * standardization filter. 
                             *
                             */
                            $tmp_int = $this->get_system_logging_config(
                                              $data, 
                                              CRNRSTN_INTEGER);

                        }

                    break;
                    case 'system_logging_profile_meta':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Any input validation here would 
                         * need to be done through the 
                         * CLR-SSL Logging Services Layer 
                         * output profile object's own 
                         * unique logging initialization 
                         * protocols. 
                         *
                         *
                         * 5 :: Sunday, December 3, 2023 @ 0218 hrs.
                         *
                         */

                    break;
                    default:

                        $this->error_log(
                               __LINE__ . 
                               ' crnrstn MISSING SWITCH CASE[' . 
                               $data_key . ']. $data_profile[' . 
                               $data_profile . 
                               '].', 
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               CRNRSTN_SETTINGS_CRNRSTN);
                        error_log(
                            __LINE__ . 
                            ' crnrstn MISSING SWITCH CASE[' . 
                            $data_key . ']. $data_profile[' . 
                            $data_profile . 
                            '].');

                    break;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Let's strengthen and enrich 
                 * the CLR-SSL Logging 
                 * Services Layer. 
                 *
                 *
                 * 5 :: Sunday, December 3, 2023 @ 0045 hrs.
                 *
                 */
                switch($data_key){
                    case 'system_logging_output_profile':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * The CRNRSTN :: Lightsaber 
                         * RoCEv2 SOAP Services Layer 
                         * (CLR-SSL) Multi-Channel 
                         * Decoupled Data Object 
                         * (MC-DDO) Data Storage 
                         * Services Layer. 
                         *
                         * The CLR-SSL MC-DDO 
                         * Services Layer. 
                         *
                         *
                         * 5
                         *
                         * CLR-SSL UGC data 
                         * input [CRNRSTN_LOGGING]
                         *
                         */
                        $this->input_data_value(
                               $tmp_int, 
                               $data_key, 
                               $data_type_family, 
                               $index, 
                               $data_authorization_profile, 
                               $ttl, 
                               $spool_resource, 
                               $env_key);

                    break;
                    case 'profile_meta':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * The CRNRSTN :: Lightsaber 
                         * RoCEv2 SOAP Services Layer 
                         * (CLR-SSL) Multi-Channel 
                         * Decoupled Data Object 
                         * (MC-DDO) Data Storage 
                         * Services Layer. 
                         *
                         * The CLR-SSL MC-DDO 
                         * Services Layer. 
                         *
                         *
                         * 5
                         *
                         * CLR-SSL UGC data 
                         * input [CRNRSTN_LOGGING]
                         *
                         */
                        $this->input_data_value(
                               $data, 
                               $data_key, 
                               $data_type_family, 
                               $index, 
                               $data_authorization_profile, 
                               $ttl, 
                               $spool_resource, 
                               $env_key);

                    break;
                    default:

                        $this->error_log(
                               __LINE__ . 
                               ' crnrstn MISSING SWITCH CASE[' . 
                               $data_key . ']. $data_profile[' . 
                               $data_profile . '].',
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               CRNRSTN_SETTINGS_CRNRSTN);
                        error_log(
                            __LINE__ . 
                            ' crnrstn MISSING SWITCH CASE[' . 
                            $data_key . ']. $data_profile[' . 
                            $data_profile . 
                            '].');

                    break;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Process Bitwise data. 
                 * 
                 * Do this after 
                 * environmental detection. 
                 *
                 *self::$oCRNRSTN_BITFLIP_MGR->oCRNRSTN_BITWISE->set(
                 *                                               $logging_output_profile, 
                 *                                               true);
                 *
                 *error_log(__LINE__ . ' ' . 
                 *    __METHOD__ . 
                 *    ' crnrstn_environment to receive logging array[' . 
                 *    $this->crc_int32($this->config_serial) . '][' . 
                 *    $this->crc_int32($env_key) . ']=[' . 
                 *    $logging_output_profile . '].');
                 *
                 */
                self::$system_logging_output_profile_ARRAY[$this->config_serial_hash][$tmp_env_hash][] = $logging_output_profile;

                if(isset($profile_meta)){

                    self::$sys_logging_meta_ARRAY[$this->config_serial_hash][$tmp_env_hash][] = $profile_meta;

                }else{

                    self::$sys_logging_meta_ARRAY[$this->config_serial_hash][$tmp_env_hash][] = '0';

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Process meta data. 
                 *
                 */
                $this->error_log('Logging profile data ' . 
                       'has been received for [' . 
                       $env_key . '].', 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       CRNRSTN_SETTINGS_CRNRSTN);

            break;
            case  'config_custom_error_handler_boolean':
            case  'config_custom_error_handler_integer':

                switch($data_key){
                    case 'crnrstn_error_handling':
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * BOOLEAN
                         *
                         *
                         * Format boolean.
                         *
                         */
                        $tmp_boolean = $this->tidy_boolean($data);

                        if(!(is_bool($tmp_boolean))){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * It would certainly appear 
                             * that this is not a valid 
                             * number for the 
                             * requested operation. 
                             *
                             * We shall run a genuinely 
                             * invalid calculation and 
                             * use the system error that 
                             * is generated to clearly 
                             * communicate that the input 
                             * datum is an "invalid number". 
                             *
                             * This may be the only way 
                             * that an application which 
                             * absolutely loves numbers as 
                             * much as the CRNRSTN :: 
                             * Lightsaber RoCEv2 SOAP 
                             * Services Layer (CLR-SSL) 
                             * loves numbers would be able 
                             * to produce a respectable 
                             * error message on this, the 
                             * subject matter. 
                             * 
                             * And the CLR-SSL has really 
                             * been loving the numbers 
                             * lately, man. We happily pay 
                             * the price ($$$) of compute 
                             * to acquire an authentic NAN 
                             * (not a number), real bad data. 
                             *
                             * We buy a properly shit value 
                             * that can be consistently 
                             * and reliably returned with 
                             * confidence by the CLR-SSL. 
                             *
                             * And all this...even in the 
                             * midst of "these economic 
                             * times", at that! 
                             *
                             * CRNRSTN :: <3's... 
                             * ...(int) CRNRSTN_INTEGER 4 LIFE! 
                             *
                             *
                             * 5 :: Monday, December 4, 2023 @ 1117 hrs.
                             * Last Modified: Friday, February 27, 2026 @ 0151 hrs.
                             *
                             * See, https://www.php.net/manual/en/function.is-nan.php
                             *
                             */
                            $tmp_boolean = sqrt(-1);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * CRNRSTN :: UGC data 
                             * validation error 
                             * message [CRNRSTN_ERROR_HANDLING]
                             *
                             */
                            $tmp_err_str = 'CRNRSTN :: could not determine ' . 
                                           'if custom error handling has ' . 
                                           'been requested with the input, (' .
                                           $this->gettype($tmp_boolean) . ') ' . 
                                           strval($tmp_boolean) . '. ' .
                                           strval($data) . 
                                           ', was the value provided. The ' . 
                                           'system will manually set this to FALSE. ' .
                                           $this->data_report(
                                                  $data, 
                                                  'CRNRSTN :: MC-DDO UGC Input Data Report');

                            $this->err_message_queue_push(NULL, $tmp_err_str);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [CRNRSTN_ERROR_HANDLING]
                             *
                             */
                            $this->input_data_value(
                                   false, 
                                   $data_key, 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);

                            return NULL;

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [CRNRSTN_ERROR_HANDLING]
                             *
                             */
                            $this->input_data_value(
                                   $tmp_boolean, 
                                   $data_key, 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);

                        }

                    break;
                    case 'err_reporting_profile':
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * INTEGER
                         *
                         *
                         * This should 
                         * be a number. 
                         *
                         */
                        if(is_numeric($data)){

                            $tmp_int = (int) $data;

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * It would certainly appear 
                             * that this is not a valid 
                             * number for the 
                             * requested operation. 
                             *
                             * We shall run a genuinely 
                             * invalid calculation and 
                             * use the system error that 
                             * is generated to clearly 
                             * communicate that the input 
                             * datum is an "invalid number". 
                             *
                             * This may be the only way 
                             * that an application which 
                             * absolutely loves numbers as 
                             * much as the CRNRSTN :: 
                             * Lightsaber RoCEv2 SOAP 
                             * Services Layer (CLR-SSL) 
                             * loves numbers would be able 
                             * to produce a respectable 
                             * error message on this, the 
                             * subject matter. 
                             * 
                             * And the CLR-SSL has really 
                             * been loving the numbers 
                             * lately, man. We happily pay 
                             * the price ($$$) of compute 
                             * to acquire an authentic NAN 
                             * (not a number), real bad data. 
                             *
                             * We buy a properly shit value 
                             * that can be consistently 
                             * and reliably returned with 
                             * confidence by the CLR-SSL. 
                             *
                             * And all this...even in the 
                             * midst of "these economic 
                             * times", at that! 
                             *
                             * CRNRSTN :: <3's... 
                             * ...(int) CRNRSTN_INTEGER 4 LIFE! 
                             *
                             *
                             * 5 :: Monday, December 4, 2023 @ 1117 hrs.
                             * Last Modified: Friday, February 27, 2026 @ 0151 hrs.
                             *
                             * See, https://www.php.net/manual/en/function.is-nan.php
                             *
                             */
                            $tmp_int = sqrt(-1);

                        }

                        if(is_nan($tmp_int)){

                            /**
                             * $this->oCRNRSTN->config_add_resource(
                             *                  CRNRSTN_RESOURCE_ALL, 
                             *                  'custom_error_reporting_profile', 
                             *                  NULL, 
                             *                  'CRNRSTN::RESOURCE::CUSTOM_ERROR_HANDLING');
                             *
                             * $tmp_ = $this->oCRNRSTN->get_resource(
                             *                          'err_reporting_profile', 
                             *                          0, 
                             *                          'CRNRSTN::RESOURCE::CONFIGURATION');
                             *
                             * $tmp_ = $this->oCRNRSTN->get_resource_count(
                             *                          'err_reporting_profile', 
                             *                          'CRNRSTN::RESOURCE::CONFIGURATION');
                             *
                             */

                            if($this->isset_resource(
                                      'data_value', 
                                      'custom_error_reporting_profile', 
                                      'CRNRSTN::RESOURCE::CUSTOM_ERROR_HANDLING') == true)
                            {

                                $tmp_settings_err_int = $this->get_resource(
                                                               'custom_error_reporting_profile', 
                                                               0, 
                                                               'CRNRSTN::RESOURCE::CUSTOM_ERROR_HANDLING');

                                if($tmp_settings_err_int != NULL){

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This should 
                                     * be a number. 
                                     *
                                     */
                                    if(is_numeric($tmp_settings_err_int)){

                                        $tmp_int = (int) $tmp_settings_err_int;

                                    }else{

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * It would certainly appear 
                                         * that this is not a valid 
                                         * number for the 
                                         * requested operation. 
                                         *
                                         * We shall run a genuinely 
                                         * invalid calculation and 
                                         * use the system error that 
                                         * is generated to clearly 
                                         * communicate that the input 
                                         * datum is an "invalid number". 
                                         *
                                         * This may be the only way 
                                         * that an application which 
                                         * absolutely loves numbers as 
                                         * much as the CRNRSTN :: 
                                         * Lightsaber RoCEv2 SOAP 
                                         * Services Layer (CLR-SSL) 
                                         * loves numbers would be able 
                                         * to produce a respectable 
                                         * error message on this, the 
                                         * subject matter. 
                                         * 
                                         * And the CLR-SSL has really 
                                         * been loving the numbers 
                                         * lately, man. We happily pay 
                                         * the price ($$$) of compute 
                                         * to acquire an authentic NAN 
                                         * (not a number), real bad data. 
                                         *
                                         * We buy a properly shit value 
                                         * that can be consistently 
                                         * and reliably returned with 
                                         * confidence by the CLR-SSL. 
                                         *
                                         * And all this...even in the 
                                         * midst of "these economic 
                                         * times", at that! 
                                         *
                                         * CRNRSTN :: <3's... 
                                         * ...(int) CRNRSTN_INTEGER 4 LIFE! 
                                         *
                                         *
                                         * 5 :: Monday, December 4, 2023 @ 1117 hrs.
                                         * Last Modified: Friday, February 27, 2026 @ 0151 hrs.
                                         *
                                         * See, https://www.php.net/manual/en/function.is-nan.php
                                         *
                                         */
                                        $tmp_int = sqrt(-1);

                                    }

                                    $tmp_settings_err_int_override = NULL;
                                    if(!is_nan($tmp_int)){

                                        $tmp_settings_err_int_override = $tmp_int;

                                    }

                                }

                            }

                            if(!isset($tmp_settings_err_int_override)){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * CLR-SSL UGC data 
                                 * validation error 
                                 * message [INTEGER]
                                 *
                                 */
                                $tmp_err_str = 'CRNRSTN :: could not understand ' . 
                                               'the provided error reporting profile ' . 
                                               'according to the input, (' . 
                                               $this->gettype($tmp_int) . ') ' . 
                                               strval($tmp_int) . '. ' . 
                                               strval($data) . 
                                               ', was the value provided. ' . 
                                               $this->data_report(
                                                      $data, 
                                                      'CRNRSTN :: MC-DDO UGC Input Data Report');

                                $this->err_message_queue_push(NULL, $tmp_err_str);

                                return NULL;

                            }else{

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * The CRNRSTN :: Lightsaber 
                                 * RoCEv2 SOAP Services Layer 
                                 * (CLR-SSL) Multi-Channel 
                                 * Decoupled Data Object 
                                 * (MC-DDO) Data Storage 
                                 * Services Layer. 
                                 *
                                 * The CLR-SSL MC-DDO 
                                 * Services Layer. 
                                 *
                                 *
                                 * 5
                                 *
                                 * CRNRSTN :: UGC data 
                                 * input [CRNRSTN_LOGGING]
                                 *
                                 */
                                $this->input_data_value(
                                       $tmp_settings_err_int_override, 
                                       $data_key, 
                                       $data_type_family, 
                                       $index, 
                                       $data_authorization_profile, 
                                       $ttl, 
                                       $spool_resource, 
                                       $env_key);

                            }

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The CRNRSTN :: Lightsaber 
                             * RoCEv2 SOAP Services Layer 
                             * (CLR-SSL) Multi-Channel 
                             * Decoupled Data Object 
                             * (MC-DDO) Data Storage 
                             * Services Layer. 
                             *
                             * The CLR-SSL MC-DDO 
                             * Services Layer. 
                             *
                             *
                             * 5
                             *
                             * CLR-SSL UGC data 
                             * input [CRNRSTN_LOGGING]
                             *
                             */
                            $this->input_data_value(
                                   $tmp_int, 
                                   $data_key, 
                                   $data_type_family, 
                                   $index, 
                                   $data_authorization_profile, 
                                   $ttl, 
                                   $spool_resource, 
                                   $env_key);

                        }

                    break;

                }

            break;
            default:

                error_log(
                    __LINE__ . 
                    ' crnrstn MISSING SWITCH CASE[' . 
                    $data_key . ']. $data_profile[' . 
                    $data_profile . 
                    '].');
                return NULL;

            break;

        }

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function crnrstn_custom_error_handler()
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Apply server error handling 
         * per settings received through 
         * $oCRNRSTN->config_custom_error_handler();
         *
         */
        $tmp_is_active_bool = $this->get_resource(
                                     'crnrstn_error_handling', 
                                     0, 
                                     'CRNRSTN::RESOURCE::CUSTOM_ERROR_HANDLING');

        if($tmp_is_active_bool == true){

            $this->error_log('Resetting error handling at ' . 
                   'this server to the PHP defaults.', 
                   __LINE__, 
                   __METHOD__, 
                   __FILE__, 
                   CRNRSTN_BARNEY);
            restore_error_handler();

            $tmp_err_reporting_profile = (int) $this->get_resource(
                                                      'err_reporting_profile', 
                                                      0, 
                                                      'CRNRSTN::RESOURCE::CUSTOM_ERROR_HANDLING');

            if(is_numeric($tmp_err_reporting_profile)){

                $this->error_log('Initializing CRNRSTN :: ' . 
                       'to handle errors at this server per ' . 
                       'a custom error level constants ' . 
                       'reporting profile represented as an ' . 
                       'aggregate by the integer value, ' . 
                       $tmp_err_reporting_profile . '.', 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       CRNRSTN_BARNEY);
                $this->apply_CRNRSTN_asErrorHandler($tmp_err_reporting_profile);

                return $tmp_err_reporting_profile;

            }else{

                $this->error_log('Due to an invalid ' . 
                       'error reporting profile, (' . 
                       $this->gettype($tmp_err_reporting_profile) . ') ' . 
                       strval($tmp_err_reporting_profile) . 
                       ', the default PHP error level ' . 
                       'constants reporting profile will ' . 
                       'remain in place. For PHP 5.3 or ' . 
                       'later, the default is E_ALL & ' . 
                       '~E_NOTICE & ~E_STRICT & ~E_DEPRECATED.', 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       CRNRSTN_BARNEY);

                return NULL;
            }

        }else{

            $this->error_log('Resetting error handling ' . 
                   'at this server to the PHP defaults. ' . 
                   'For PHP 5.3 or later, the default is ' . 
                   'E_ALL & ~E_NOTICE & ' . 
                   '~E_STRICT & ~E_DEPRECATED.', 
                   __LINE__, 
                   __METHOD__, 
                   __FILE__, 
                   CRNRSTN_BARNEY);
            restore_error_handler();

            return NULL;

        }

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