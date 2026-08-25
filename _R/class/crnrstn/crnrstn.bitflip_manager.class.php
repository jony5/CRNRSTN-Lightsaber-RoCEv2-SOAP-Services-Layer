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
 * CLASS DEFINITION :: crnrstn_bitflip_manager
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: March 4, 2021 @ 0529 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer Icy
 *                     Digital ITCC Bitmask
 *                     Integer State (Bit Flip)
 *                     Management Services Layer
 *                     class object
 * DESCRIPTION      :: CRNRSTN :: Lightsaber SOAP
 *                     Services Layer bitwise
 *                     operations (bit flip)
 *                     management powered
 *                     by icy at digitalitcc dot com.
 *
 *                     Infinite* bits and bit
 *                     handling in general.
 *
 *                     Perceivably, the only
 *                     limit to the bitmask class
 *                     in storing bits would be the
 *                     maximum limit of the index
 *                     number, on 32 bit integer
 *                     systems 2^31 - 1, so
 *                     2^31 * 31 - 1 = 66571993087
 *                     bits, assuming floats are
 *                     64 bit or something.
 *
 *                     I'm sure that's enough
 *                     enough bits for
 *                     anything...I hope :D.
 *
 *                     *Not infinite, sorry.
 *
 *                     Say... you really want to
 *                     have say... more than
 *                     31 bits available
 *                     to you in your
 *                     happy bitmask.
 *
 *                     And you don't want to
 *                     use floats.
 *
 *                     So, one solution would to
 *                     have an array of bitmasks,
 *                     that are accessed through
 *                     some kind of interface.
 *
 *                     Here is my solution
 *                     for this:
 *
 *                     A class to store an array of
 *                     integers being the bitmasks.
 *
 *                     It can hold up to 66571993087
 *                     bits, and frees up unused
 *                     bitmasks when there are no
 *                     bits being stored in them.
 *
 *
 *                     icy at digitalitcc dot com
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
class crnrstn_bitflip_manager extends crnrstn
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: In my +22 year IT career, this 
     *       is now the first class object 
     *       that I have made to be extending 
     *       another class. 
     *
     *       The crnrstn_bitflip_manager 
     *       extends crnrstn. In the CLR-SSL, 
     *       many more classes shall follow. 
     *
     *       We now make moves to complete 
     *       the initialization of the 
     *       CLR-SSL Resource Registry. 
     *
     *
     *       5 :: Tuesday, March 10, 2026 @ 1335 hrs.
     *       Last Modified: Wednesday, March 11, 2026 @ 0420 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Removed crnrstn_bitflip_manager 
     *       class method, 
     *       initialize_bitwise_constants(), 
     *       and the call in __construct() 
     *       because the CLR-SSL integer 
     *       constant definitions will be 
     *       runtime_exe loaded by the 
     *       CLR-SSL Resource Registry
     *       prior to handling any 
     *       class definitions. 
     *       5 :: Wednesday, April 8, 2026 @ 1902 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Deleted the following methods
     *       in order to get behind the
     *       crnrstn_bitflip_manager's extension
     *       of crnrstn and to remove
     *       architecturally redundant clutter:
     *
     *       - initialize_cpu_profile()
     *
     *       5 :: Saturday, August 22, 2026 @ 0401 hrs.
     *
     */

    public $R       = array();
    private $R_data = array();

    //protected $oCRNRSTN_BITWISE;

    //protected $oCRNRSTN_BITS_ARRAY = array();
    //private static $os_bit_size;
    private static $lscpu_output;
    private static $uname_output;
    private static $getconf_output;
    protected $bit_value_array = array();
    
    //protected $global_constants_string_ARRAY = array();
    private static $system_int_constants_string_ARRAY = array();
    private static $bitflag_constant_serial_ARRAY = array();
    private static $crnrstn_bits_position_by_serial_ARRAY = array();

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function __construct()
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return an instantiation of
         * The CRNRSTN :: Lightsaber RoCEv2 SOAP
         * Services Layer Icy Digital ITCC -
         * Bitmask Integer State (Bit Flip)
         * Management Technology class object.
         *
         * SOURCE :: https://www.php.net/manual/en/language.operators.bitwise.php
         * AUTHOR :: https://www.php.net/manual/en/language.operators.bitwise.php#50299
         *
         *
         * Icy at Digital ITCC dot com
         *
         * 5 :: Thursday, July 11, 2024 @ 0413 hrs.
         * $this->oCRNRSTN_BITWISE = new crnrstn_bitmask();
         *
         * CLR-SSL Resource Registry
         * Prototyping (2024-2026):
         * $this->oCRNRSTN_BITWISE = $this->return_registered_resource(
         *                                  'new',
         *                                  'crnrstn_bitmask');
         *
         */

        $spice_salt_mem_ptr = NULL;
        // 5 :: Saturday, August 22, 2026 @ 0519 hrs.
        $this->compound_ointment(
               $spice_salt_mem_ptr,
               'crnrstn_bitmask');
        $this->anoint(
               'crnrstn_bitmask',
               $this->R['icy_digital_itcc']);

    }

    /*
    private function initialize_const_string_array($R_int_const)
    {

        self::$system_int_constants_string_ARRAY = $R_int_const;

    }

    */

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function integer_constants_unit_test()
    {

        $str_out = '';
        $tmp_flag_ARRAY = array();

        foreach(self::$system_int_constants_string_ARRAY as 
            $index => $const_nom_str)
        {

            $tmp_INT = $this->return_int_const_profile(
                              $const_nom_str, 
                              'INTEGER');

            if(!is_int($tmp_INT) || ($tmp_INT == 0 && 
                ($const_nom_str !== 'CRNRSTN_DEBUG_OFF')))
            {

                $str_out .= '<span style="color: #F90000; ' . 
                            'font-weight: bold;">ERROR.</span> ' . 
                            'Configuration incomplete for [' . 
                            $tmp_INT . '] ' . $const_nom_str . 
                            '.<br>';

            }else{

                if(!isset($tmp_flag_ARRAY[$tmp_INT])){

                    $tmp_flag_ARRAY[$tmp_INT] = 1;
                    $str_out .= '<span style="color: #5fbb35;">SUCCESS.</span> ' . 
                                'Configuration match detected for ' . 
                                $const_nom_str . '.<br>';

                }else{

                    $str_out .= '<span style="color: #F90000; font-weight: ' . 
                                'bold;">ERROR.</span> Configuration redundancy ' . 
                                'detected with ' . 
                                $tmp_INT . '::' . 
                                $const_nom_str . '.<br>';

                }

            }

        }

        return $str_out;

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
    function return_serialized_bit_value(
             $bitwise_object_array_index_serial, 
             $integer_constant)
    {

        if(!isset($this->R['bits'][$this->hash(
                                          $bitwise_object_array_index_serial,
                                          'md5')]))
        {

            return false;

        }else{

            $R_bitmask = $this->R['bits'][$this->hash(
                                                 $bitwise_object_array_index_serial,
                                                 'md5')];

            $tmp_val = $R_bitmask->return_bit_value($integer_constant);

            return $tmp_val;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_bit_constant($name)
    {

        //return $this->return_bit_value($name);
        return constant($name);

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
    function toggle_serialized_bit(
             $name, 
             $integer_constant, 
             $is_bit_set = NULL)
    {

        if(!isset($this->R['bits'][$this->hash(
                                          $name,
                                          'md5')]))
            return false;

        $R_bitmask = $this->R['bits'][$this->hash(
                                             $name,
                                             'md5')];

        if(\is_bool($is_bit_set))
            if($is_bit_set == true)
                if(!($R_bitmask->read($integer_constant) == true))
                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Flip to 1. 
                     *
                     */
                    $R_bitmask->toggle($integer_constant);
            else
                if($R_bitmask->read($integer_constant) == true)
                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Flip to 0. 
                     *
                     */
                    $R_bitmask->toggle($integer_constant);
        else
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * FLIP IT ::
             * https://www.youtube.com/watch?v=eBShN8qT4lk
             * TITLE :: Beastie Boys - (You Gotta) Fight 
             *          For Your Right (To Party) 
             *          (Official Music Video) 
             *
             */
            $R_bitmask->toggle($integer_constant);

        $this->R['bits'][$this->hash($name, 'md5')] = $R_bitmask;

        return $R_bitmask->read($integer_constant);

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
    function toggle_bit(
             $integer_constant, 
             $is_bit_set = NULL)
    {

        if(!isset($this->R['bitwise'])){

            return false;

        }else{

            if(is_bool($is_bit_set)){

                $this->R['icy_digital_itcc']->toggle($integer_constant);

                if($is_bit_set == true)
                    if(!($this->R['icy_digital_itcc']->read($integer_constant) == true))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Flip to 1. 
                         *
                         */
                        $this->R['icy_digital_itcc']->toggle($integer_constant);
                else
                    if($this->R['icy_digital_itcc']->read($integer_constant) == true)
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Flip to 0. 
                         *
                         */
                        $this->R['icy_digital_itcc']->toggle($integer_constant);

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * FLIP IT :: 
                 * https://www.youtube.com/watch?v=eBShN8qT4lk
                 * TITLE :: Beastie Boys - (You Gotta) 
                 *          Fight For Your Right (To Party) 
                 *          (Official Music Video) 
                 *
                 */
                $this->R['icy_digital_itcc']->toggle($integer_constant);

            }

            return $this->R['icy_digital_itcc']->read($integer_constant);

        }

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
    function initialize_serialized_bit(
             $name, 
             $integer_const, 
             $default_state = true)
    {

        if(!isset($this->R['bits']['CRNRSTN_' .
            $this->hash($name, 'md5')]))
        {

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return an instantiation of
             * The CRNRSTN :: Lightsaber RoCEv2 SOAP
             * Services Layer Icy Digital ITCC -
             * Bitmask Integer State (Bit Flip)
             * Management Technology class object.
             *
             * SOURCE :: https://www.php.net/manual/en/language.operators.bitwise.php
             * AUTHOR :: https://www.php.net/manual/en/language.operators.bitwise.php#50299
             *
             *
             * icy at digitalitcc dot com
             *
             * 5 :: Thursday, July 11, 2024 @ 0349 hrs.
             *
             * $oCRNRSTN_BITMASK = new crnrstn_bitmask();
             *
             * CLR-SSL Resource Registry
             * Prototyping (2024-2026):
             * $oCRNRSTN_BITMASK = $this->return_registered_resource(
             *                            'new',
             *                            'crnrstn_bitmask');
             *
             */

            $spice_salt_mem_ptr = NULL;
            // 5 :: Saturday, August 22, 2026 @ 1336 hrs.
            $this->compound_ointment(
                   $spice_salt_mem_ptr,
                   'crnrstn_bitmask');
            $this->anoint(
                   'crnrstn_bitmask',
                   $R_bitmask);

        }

        if(!isset($R_bitmask))
            $R_bitmask = $this->R['bits'][$this->hash($name, 'md5')];

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * This will basically return an int++
         * for each unique constant provided.
         *
         * CRNRSTN :: is using a bitmask object
         * from icy at digitalitcc dot com to
         * manage the actual storage, flip, and
         * retrieval (flip checking).
         *
         * Therefore, CRNRSTN :: doesn't really
         * care about the integer being stored
         * (i.e. the value of the constant).
         *
         * Using "auto-increment" for bland
         * integer ranges where performance
         * demands do not require that bitwise
         * "join operation output" or maths
         * be equally unique would be fine.
         *
         * CRNRSTN :: just needs to ensure
         * that the number going into this
         * cold shit is unique...whether
         * this integer is bitwise operation
         * output or not.
         *
         * To help, get around these collisions
         * when unavoidable, this method adds a
         * layer of serialization to the
         * bitmask object data storage equation.
         *
         *
         * 5 :: Thursday, July 11, 2024 @ 0408 hrs.
         *
         */
        $tmp_val = $R_bitmask->return_bit_value($integer_const);

        if($default_state == true){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * FLAG - State is ON.
             *
             */
            $R_bitmask->set($integer_const);

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * FLAG - State is OFF.
             *
             */
            $R_bitmask->set($integer_const);
            $R_bitmask->toggle($integer_const);

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return the updated
         * object to the bits
         * object array.
         *
         */
        $this->R['bits'][$this->hash($name, 'md5')] = $R_bitmask;

        return $tmp_val;

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
    function initialize_bit(
             $constant_nom, 
             $default_state = false, 
             $constant_value = NULL)
    {

        if(is_int($constant_nom)){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Use provided const nom as (int) 
             * value if integer passed in as 
             * constant name. 
             *
             */
            $constant_value = $constant_nom;

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Use the bitmask object technology 
         * from Icy at Digital ITCC dot com 
         * to manage actual storage, flip, 
         * and retrieval. 
         * 
         * This here will honor the 
         * constant values. 
         *
         */
        $tmp_val = $this->return_bit_value($constant_nom, $constant_value);

        if($default_state == true){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * FLAG - State is ON.
             *
             * $this->R['icy_digital_itcc']->set($tmp_val);
             *
             */
            $this->R['icy_digital_itcc']->set($tmp_val);

            /**
             *error_log(__LINE__ . 
             *    ' crnrstn $os_bit_size[' . 
             *    $this->os_bit_size . ']. BIT[' . 
             *    print_r(gettype($this->R['icy_digital_itcc']->read($tmp_val)), true) .
             *    ']. $tmp_val[' . 
             *    $tmp_val . ']. $default_state[' . 
             *    $default_state . ']. $constant_nom[' . 
             *    $constant_nom . 
             *    ']. ');
             *
             */

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * FLAG - State is OFF.
             *
             */
            $this->R['icy_digital_itcc']->set($tmp_val);
            $this->R['icy_digital_itcc']->toggle($tmp_val);

            /**
             *error_log(__LINE__ . 
             *    ' crnrstn $default_state[' . 
             *    $default_state . ']. $constant_nom[' . 
             *    $constant_nom . 
             *    ']. ');
             *
             */

        }

        return $tmp_val;

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
    function is_serialized_bit_set(
             $name, 
             $integer_constant, 
             $return_raw_byte_read = false)
    {

        if(!isset($this->R['bits']['CRNRSTN_' .
            $this->hash($name, 'md5')]))
        {

            return false;

        }else{

            /* error_log(__LINE__ . ' ' .
             *     __METHOD__ .
             *     ' we think the array[' .
             *     $name .
             *     '] index holds a ' .
             *     'oCRNRSTN_BITMASK object.');
             *
             */
            $oCRNRSTN_BITMASK = $this->R['bits']['CRNRSTN_' .
                                $this->hash($name, 'md5')];

            $tmp_int_read = $oCRNRSTN_BITMASK->read($integer_constant);

            if($return_raw_byte_read !== false)
                return $tmp_int_read;

            if($tmp_int_read > 0)
                return true;

            //return $oCRNRSTN_BITMASK->read($integer_constant);
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
    function is_bit_set(
             $integer_constant, 
             $return_raw_byte_read = false)
    {

        $tmp_int_read = $oCRNRSTN_BITMASK->read($integer_constant);

        if($return_raw_byte_read !== false){

            return $tmp_int_read;

        }

        if($tmp_int_read > 0){

            return true;

        }

        //return $this->R['icy_digital_itcc']->read($integer_constant);
        return false;

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
    function serialized_bit_stringin(
             $name, 
             $bits_stringin)
    {

        if(!isset($this->R['bits']['CRNRSTN_' .
            $this->hash($name, 'md5')]))
        {

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return an instantiation of
             * The CRNRSTN :: Lightsaber RoCEv2 SOAP
             * Services Layer Icy Digital ITCC -
             * Bitmask Integer State (Bit Flip)
             * Management Technology class object.
             *
             * SOURCE :: https://www.php.net/manual/en/language.operators.bitwise.php
             * AUTHOR :: https://www.php.net/manual/en/language.operators.bitwise.php#50299
             *
             *
             * Icy at Digital ITCC dot com
             *
             * 5 :: Thursday, July 11, 2024 @ 0420 hrs.
             * $oCRNRSTN_BITMASK = new crnrstn_bitmask();
             *
             * CLR-SSL Resource Registry
             * Prototyping (2024-2026):
             * $this->oCRNRSTN_BITMASK = $this->return_registered_resource(
             *                                  'new',
             *                                  'crnrstn_bitmask');
             *
             */

            $spice_salt_mem_ptr = NULL;
            // 5 :: Saturday, August 22, 2026 @ 0435 hrs.
            $this->compound_ointment(
                   $spice_salt_mem_ptr,
                   'crnrstn_bitmask');
            $this->anoint(
                   'crnrstn_bitmask',
                   $R_bitmask);

            $this->R['bits'][$this->hash($name, 'md5')] = $R_bitmask;

        }

        $R_bitmask = $this->R['bits']['CRNRSTN_' .
                     $this->hash($name, 'md5')];

        $R_bitmask->stringin($bits_stringin);

        $this->R['bits'][$this->hash($name, 'md5')] = $R_bitmask;

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function bit_stringin($int_string)
    {

        return $this->oCRNRSTN_BITWISE->stringin($int_string);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function serialized_bit_stringout($name)
    {

        $tmp_str = '';

        if(!isset($this->R['bits']['CRNRSTN_' .
            $this->hash($name, 'md5')]))
        {

            return false;

        }else{

            /**
             *error_log(__LINE__ . ' ' . 
             *    __METHOD__ . ' we think the array[' . 
             *    $name . 
             *    '] index holds a ' . 
             *    'oCRNRSTN_BITMASK object.');
             *
             */
            $oCRNRSTN_BITMASK = $this->R['bits']['CRNRSTN_' .
                                $this->hash($name, 'md5')];

            $tmp_str = $oCRNRSTN_BITMASK->stringout();

            return $tmp_str;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function bit_stringout()
    {

        return $this->oCRNRSTN_BITWISE->stringout();

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
    private function return_bit_value(
                     $bit_nom, 
                     $constant_value_override = null)
    {

        if(isset($constant_value_override)){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * BIT_NOM is the string 
             * used to track the 
             * existence of unique 
             * global constants and 
             * the integer value 
             * assigned to the same. 
             *
             */
            if(!isset($this->bit_value_array[$bit_nom])){

                $this->bit_value_array[$bit_nom] = $constant_value_override;

            }

            return $this->bit_value_array[$bit_nom];

        }else{

            if(!isset($this->bit_value_array[$bit_nom])){

                $this->bit_value_array[$bit_nom] = 1;

                $tmp_cnt = count($this->bit_value_array[$bit_nom]);

                $this->bit_value_array[$bit_nom] = $tmp_cnt;

            }

            return $this->bit_value_array[$bit_nom];

        }

    }

    //public function return_global_constants_string_ARRAY()
    //{
    //
    //   return $this->global_constants_string_ARRAY;
    //
    //}

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_system_info($property)
    {

        switch($property){
            case 'os_bit_size':
                //$this->os_bit_size = 64;

                return $this->os_bit_size;

            break;
            case 'lscpu':
                //self::$lscpu_output = shell_exec('lscpu');

                return self::$lscpu_output;

            break;
            case 'uname':
                //self::$uname_output = shell_exec('uname -m');

                return self::$uname_output;

            break;
            case 'getconf':
                //self::$getconf_output = (int) shell_exec('getconf LONG_BIT');

                return self::$getconf_output;

            break;
            default:

                $this->error_log('Unknown system property requested. ' . 
                                 $this->data_report($property), 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_SETTINGS_CRNRSTN);

            break;

        }

        return NULL;

    }

    /**
     * R :: Create a random number between $min and $max. 
     * 
     * crypto_rand_secure($min, $max) 
     * works as a drop in replacement for 
     * rand() or mt_rand. 
     * 
     * It uses openssl_random_pseudo_bytes 
     * to help create a random number 
     * between $min and $max.
     * 
     * getToken($length) creates an 
     * alphabet to use within the token 
     * and then creates a string of 
     * length $length.
     *
     * @param
     * @param 
     * @return
     * @access private
     *
     * SOURCE   :: https://stackoverflow.com/questions/1846202/php-how-to-generate-a-random-unique-alphanumeric-string
     * COMMENT  :: https://stackoverflow.com/a/13733588
     * AUTHOR   :: https://stackoverflow.com/users/1698153/scott
     * AUTHOR   :: https://www.php.net/manual/en/function.openssl-random-pseudo-bytes.php#104322
     *
     *
     * Scott
     * christophe dot weis at statec dot etat dot lu
     *
     */
    private function crypto_rand_secure(
                     $min, 
                     $max)
    {

        $range = $max - $min;

        if($range < 1) return $min; // not so random...

        $log    = ceil(log($range, 2));
        $bytes  = (int) ($log / 8) + 1; // length in bytes
        $bits   = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1

        do{

            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits

        }while($rnd > $range);

        return $min + $rnd;

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