<?php
/**
 * @package CRNRSTN

// 5 ::
// Code is Poetry */
# C # U # S # T # O # M # # R # E # S # O # U # R # C # E
#
#  CLASS :: database_response_manager
#  VERSION :: 1.00.0000
#  DATE :: October 2, 2021 @ 1234 hrs.
#  AUTHOR :: Jonathan 'J5' Harris <jharris@evifweb.com>
#  URI ::
#  DESCRIPTION ::
#
# C # U # S # T # O # M # # R # E # S # O # U # R # C # E
#
#  LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
#
class jony5_database_response_manager 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Added the "jony5_" prefix to the 
     *       registered class name, database_response_manager, 
     *       as taken from the Jony5.com production 
     *       web site on Tuesday, November 11, 2025 @ 0401 hrs. 
     *       Happy birthday to you, J5, my boy! 
     *       11/11/2005 - 08/16/2021 @ 0345 hrs. 
     *       5 :: Tuesday, November 11, 2025 @ 0601 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Upgraded 
     *       jony5_database_response_manager 
     *       class exception handling and  
     *       error logging to align with 
     *       CRNRSTN :: and the CLR-SSL 
     *       Registry User. 
     *       5 :: Monday, June 29, 2026 @ 1620 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Upgraded 
     *       jony5_database_response_manager 
     *       class exception handling and  
     *       error logging to align with 
     *       CRNRSTN :: and the CLR-SSL 
     *       Registry User. 
     *       5 :: Monday, June 29, 2026 @ 1420 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed 
     *       jony5_database_response_manager 
     *       class private static $oLogger 
     *       to $R_logging to align with 
     *       CRNRSTN :: and the CLR-SSL 
     *       Registry User. 
     *       5 :: Monday, June 29, 2026 @ 2243 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed 
     *       jony5_database_response_manager 
     *       crcINT() implementations to crc_int32(). 
     *       5 :: Wednesday, July 1, 2026 @ 0458 hrs.
     *
     */

    private static $R_logging;
    private static $oSQLMapper;
    private static $oData;
    private static $oEnv;

    private static $resp_profiles_SQL_align;
    private static $resp_serial;
    private static $resp_serial_key_ARRAY = array();
    private static $resp_serial_raw = array();
    private static $resp_serial_ARRAY = array();
    private static $resp_profiles_ARRAY = array();
    private static $resp_profile_size_ARRAY = array();
    private static $resp_fieldcnt_ARRAY = array();
    private static $resp_profile_viaCnt_ARRAY = array();
    private static $master_raw_response_ARRAY = array();
    private static $result_record_profile_viaRowCnt_ARRAY = array();
    private static $result_aggregate_map_ARRAY = array();
    private static $result_profile_serial_handle_ARRAY = array();
    private static $total_aggregate_count = array();
    private static $total_aggregate_profile_count = array();
    private static $result_aggregate_map_serial_ARRAY = array();
    private static $result_aggregate_map_profile_ARRAY = array();

    private static $serial_by_sql_profile = array();

    private static $result_profile_count_ARRAY = array();

    private static $rekey_profile_response_ARRAY = array();

    private static $flag_results = array();

    private static $serial_pipe = array();
    private static $profilekey_pipe = array();

    public $errStatus;
    private static $queryType;

    private static $result;

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function __construct(
             $oEnv, 
             $oDB)
    {

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Instantiate the CLR-SSL 
             * Logging Services Layer. 
             *
             */
            self::$R_logging = new crnrstn_logging();

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Instantiate the SQL Result Mapper®. 
             *
             * This class is only used internally, 
             * ...and here in the 
             * jony5_database_response_manager. 
             *
             * I don't think there are any 
             * public calls to the SQL Result 
             * Mapper® coming in from 
             * the outside. Would that 
             * even make sense? 
             *
             * Yep. There are no calls coming 
             * from the outside to the SQL Result 
             * Mapper® class object. We don't need 
             * to document this, then.  
             * 
             * 
             * 5
             *
             */
            self::$oSQLMapper = new jony5_database_result_mapper();

            if(isset($oEnv) && 
                isset($oDB))
            {

                self::$oEnv  = $oEnv;
                self::$oData = $oDB;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('ERR :: CRNRSTN_ENV and ' . 
                    'database_integration:: are required ' . 
                    'parameters for database_response_manager::__construct().');

            }

        }catch(\Exception $e){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Send this through the 
             * CLR-SSL Logging 
             * Services Layer. 
             *
             *
             * 5
             *
             */
            self::$R_logging->catch_exception(
                              $e, 
                              \LOG_ERR, 
                              __METHOD__, 
                              __NAMESPACE__);

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
    function recursive_pipe_build(
             $queryType, 
             $PIPE_type, 
             $value)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of PHP crc32() 
         *       with $this->crcINT() in 
         *       SQL query string generation. 
         *       5 :: Monday, June 29, 2026 @ 1258 hrs.
         *
         */

        $queryType_crc = $this->crc_int32($queryType);

        switch($PIPE_type){
            case 'PROFILE':

                if(array_key_exists($queryType_crc, self::$profilekey_pipe)){

                    self::$profilekey_pipe[$queryType_crc] .= '|' . $value;

                }else{

                    self::$profilekey_pipe[$queryType_crc] = $value;

                }

            break;
            case 'SERIAL':

                if(array_key_exists($queryType_crc, self::$serial_pipe)){

                    self::$serial_pipe[$queryType_crc] .= '|' . $value;

                }else{

                    self::$serial_pipe[$queryType_crc] = $value;

                }

            break;

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
    function return_serialkey_pipe_ARRAY($queryType)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of PHP crc32() 
         *       with $this->crcINT() in 
         *       SQL query string generation. 
         *       5 :: Monday, June 29, 2026 @ 1258 hrs.
         *
         */

        $queryType_crc       = $this->crc_int32($queryType);
        $tmp_output_ARRAY    = array();

        // ARRAY() = {0=$serial_handle_pipe, 1=$target_key_pipe}
        $tmp_output_ARRAY[0] = self::$serial_pipe[$queryType_crc];
        $tmp_output_ARRAY[1] = self::$profilekey_pipe[$queryType_crc];

        return $tmp_output_ARRAY;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_serial_from_SQL($sql_handle)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * We can use either the 
         * $serial_by_sql_profile 
         * data (which is preferred) 
         * or the key data to get to 
         * the serial data (this is ok, 
         * too...but will require 
         * another call to get to 
         * $serial_by_sql_profile). 
         *
         *
         * 5
         *
         */

        return self::$serial_by_sql_profile[$sql_handle];

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
    function response_key_merge(
             $serial_handle_pipe, 
             $target_key_pipe, 
             $sequence_field_pipe, 
             $compare_type, 
             $new_cumm_key)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1134 hrs.
         *
         */

        $new_cumm_key_crc = $this->crc_int32($new_cumm_key);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * This will be an expensive 
         * method. We will do our best. 
         *
         */
        $tmp_serial_handle_ARRAY  = explode('|', $serial_handle_pipe);
        $tmp_serial_key_ARRAY     = explode('|', $target_key_pipe);
        $tmp_sequence_field_ARRAY = explode('|', $sequence_field_pipe);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Align the field pipe data to 
         * the key pipe data. 
         *
         * If all the sequence fields are 
         * of same name, we only need 
         * to provide the merged data 
         * one time, ...sans pipe. 
         *
         *
         * 5
         *
         */
        if(\sizeof($tmp_sequence_field_ARRAY) != \sizeof($tmp_serial_key_ARRAY)){

            $tmp_loop_size = \sizeof($tmp_serial_key_ARRAY);
            for($i = 0; $i < $tmp_loop_size; $i++){

                $tmp_sequence_field_ARRAY[$i] = $tmp_sequence_field_ARRAY[0];

            }

        }

        $tmp_count_key             = \sizeof($tmp_serial_key_ARRAY);
        $tmp_count_handle          = \sizeof($tmp_serial_handle_ARRAY);
        $tmp_key_matched_ARRAY     =
        $tmp_key_count_ARRAY       =
        $result_key_position_ARRAY = array();
        $tmp_total_key_count       = 0;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * We need to detect the association 
         * of pipe key data to the database 
         * response/result object handle and 
         * can make no assumptions. 
         *
         */
        for($ii = 0; $ii < $tmp_count_key; $ii++){

            /*error_log(
             *   'database (338) response_key_merge() ' . 
             *   'checking key ' . 
             *   $tmp_serial_key_ARRAY[$ii]);
             */

            for($i = 0; $i < $tmp_count_handle; $i++){

                /*error_log(
                 *   'database (340) ' . 
                 *   'response_key_merge() ' . 
                 *   'checking handle ' . 
                 *   $tmp_serial_handle_ARRAY[$i]);
                 */

                if($this->ping_profile_existence($this->return_serial(
                                                        $tmp_serial_handle_ARRAY[$i]), 
                                                        $tmp_serial_key_ARRAY[$ii]))
                {

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Connect "this" database response 
                     * handle to "this" serialized 
                     * result profile key for result 
                     * set processing. 
                     *
                     */
                    #$tmp_key_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]]                        = $tmp_serial_handle_ARRAY[$i];
                    self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]]            = $tmp_serial_handle_ARRAY[$i];
                    $tmp_key_matched_ARRAY[$tmp_serial_handle_ARRAY[$i]][$tmp_serial_key_ARRAY[$ii]] = true;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Connect this handle and serial. 
                     *
                     */
                    //$this->return_serial($tmp_key_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]]);
                    //self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]] = $this->return_serial(self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]]);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Connect sequence field to key.
                     *
                     */
                    #$tmp_sequence_field_ARRAY[$tmp_serial_key_ARRAY[$ii]] = $tmp_sequence_field_ARRAY[$i];

                    /*error_log(
                     *   'database (356) ' . 
                     *   'Found a serial handle ' . 
                     *   'for response key [' . 
                     *   $tmp_serial_key_ARRAY[$ii] . 
                     *   '].');
                     */

                    $result_key_position_ARRAY[$tmp_serial_handle_ARRAY[$i]][$tmp_serial_key_ARRAY[$ii]] = 0;

                }

            }

            try{

                if(!isset($tmp_key_matched_ARRAY[self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]]][$tmp_serial_key_ARRAY[$ii]])){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('response_key_merge() is unable ' . 
                        'to find a serial handle for response key [' . 
                        \print_r($tmp_serial_key_ARRAY[$ii], true) . '].');

                }

            }catch(\Exception $e){

                self::$R_logging->catch_exception(
                                  $e, 
                                  \LOG_ERR, 
                                  __METHOD__, 
                                  __NAMESPACE__);

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Now that we have serial/key 
         * relations, what are my 
         * counts for each key? 
         *
         */
        for($ii = 0; $ii < $tmp_count_key; $ii++){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * This also needs to be serialized 
             * per each select profile. 
             *
             */
            $tmp_key_count_ARRAY[self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]]][$tmp_serial_key_ARRAY[$ii]] = $this->return_sizeof($this->return_serial(
                                                                                                                                                                  self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]]), 
                                                                                                                                                                  $tmp_serial_key_ARRAY[$ii]);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Total aggregate profile 
             * count for the master loop 
             * control's exclusion of 
             * out-of-bounds profiles. 
             *
             */
            self::$total_aggregate_profile_count[$new_cumm_key_crc][$tmp_serial_key_ARRAY[$ii]] = $tmp_key_count_ARRAY[self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]]][$tmp_serial_key_ARRAY[$ii]];

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Keep a total count for 
             * the master loop control. 
             *
             */
            $tmp_total_key_count += $tmp_key_count_ARRAY[self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]]][$tmp_serial_key_ARRAY[$ii]];

            /*error_log(
             *   'database (471) key[' . 
             *   $tmp_serial_key_ARRAY[$ii] . 
             *   '] count=' . 
             *   $tmp_key_count_ARRAY[self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]]][$tmp_serial_key_ARRAY[$ii]]);
             */

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Now, we need to loop through 
         * all the data and sequence it 
         * by $sequence_field, ...somehow. 
         *
         * Perhaps this could be 
         * done recursively? 
         *
         * Let's think about the end goal 
         * to make sure we are on track. 
         * Like..."How do I want to 
         * access this new data structure"? 
         *
         * Maybe we access it like this:
         * $oDB_RESP->return_cummulative_data_element(
         *            $new_cumm_key, 
         *            'SAME_FIELD_NAME', 
         *            INTEGER_OF_ROW_POSITION_IN_CUMM_ARRAY). 
         *
         * Ok. So the results can have different 
         * field names depending on SQL statement 
         * specifics; there is no forced 
         * consistency in MySQL for table field 
         * names in SELECT SQL statement 
         * response objects. 
         *
         * If we access the MySQL response data 
         * via loop, we need a way to determine 
         * which response type we are outputting 
         * so that we can use the appropriate 
         * field name to pull up and present 
         * the data. 
         *
         * Not to mention also needing to figure 
         * out the field name mapping between 
         * the cummulative data and disparate 
         * MySQLi response result sets. 
         *
         *
         * 5
         *
         */
        self::$total_aggregate_count[$new_cumm_key_crc] = $tmp_total_key_count;

        for($i = 0; $i < $tmp_total_key_count; $i++){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * $oDB_RESP->return_data_element(
             *            $oDB_RESP->return_serial('USER_DATA'), 
             *            'KIVOTOS', 
             *            'NAME', 
             *            5)
             *
             * 'USER_DATA'
             * 'ASSETS|STREAMS|KIVOTOS'
             * 'DATECREATED'
             * 'CUMM_ACTIVITY_DATA'
             *
             * What we have here, so far ::
             * -----
             * 1 - $tmp_key_serial_handle_ARRAY
             *     ARRAY['KIVOTOS'] = 'USER_DATA'.
             *
             *     Use this to get the serial 
             *     for the result. 
             *
             * -----
             * 2 - $result_key_position_ARRAY
             *     ARRAY['KIVOTOS'] = 0. 
             *
             *     Use this if you need 
             *     to track the queue position 
             *     of individual profiles. 
             *
             * -----
             * 3 - $tmp_sequence_field_ARRAY
             *     ARRAY['KIVOTOS'] = 'DATECREATED'.
             *
             *     This is our sequence controller. 
             * 
             * -----
             * 4 - $tmp_key_count_ARRAY
             *     ARRAY['KIVOTOS'] = 37.
             *
             *     Total results per profile 
             *     (we may not need this data). 
             * 
             * -----
             * 5 - $tmp_serial_key_ARRAY
             *     ARRAY['KIVOTOS', 'STREAMS', ...]
             *
             * # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * For each data element position in 
             * the cummulative data structure, 
             * find the element among all the 
             * MySQLi result sets that is to be 
             * queued next by comparing the 
             * target field of all results and 
             * then finding the one that is 
             * the highest. 
             *
             *
             * 5
             *
             */

            $tmp_current_leader_val = NULL;
            $new_val                = NULL;
            $tmp_sequence_data      = array();

            for($ii = 0; $ii < $tmp_count_key; $ii++){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * We need to perform an 
                 * out-of-bounds check 
                 * before testing 
                 * each serial. 
                 *
                 */
                if(self::$total_aggregate_profile_count[$new_cumm_key_crc][$tmp_serial_key_ARRAY[$ii]] > 0){

                    /*error_log(
                     *   'database (445) ' . 
                     *   'Process this one...' . 
                     *   $tmp_serial_key_ARRAY[$ii]);
                     */

                    $tmp_serial = $this->return_serial(self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]]);
                    $serial_crc = $this->crc_int32($tmp_serial);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * I am concerned about this 
                     * method failing due to out 
                     * of bounds on the position 
                     * incrementer. 
                     *
                     * We need a way, architecturally, 
                     * to exclude out-of-bounds 
                     * indices so that this shit will 
                     * never fail. 
                     *
                     *
                     * 5
                     *
                     */
                    if($result_key_position_ARRAY[self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]]][$tmp_serial_key_ARRAY[$ii]] < $tmp_key_count_ARRAY[self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]]][$tmp_serial_key_ARRAY[$ii]])
                    {

                        $tmp_data_map = self::$oSQLMapper->retrieve_coordinates(
                                                           $tmp_serial, 
                                                           $tmp_serial_key_ARRAY[$ii], 
                                                           $tmp_sequence_field_ARRAY[$ii], 
                                                           $result_key_position_ARRAY[self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]]][$tmp_serial_key_ARRAY[$ii]]);

                        $tmp_sequence_data[$ii] = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

                        switch($compare_type){
                            case 'DATETIME':

                                $new_val = \strtotime($tmp_sequence_data[$ii]);

                                if(!isset($tmp_current_leader_val) || 
                                    ($tmp_current_leader_val < $new_val))
                                {

                                    $tmp_serial_key             = self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]];
                                    $tmp_current_leader_profile = $tmp_serial_key_ARRAY[$ii];
                                    $tmp_current_leader_val     = $new_val;
                                    #$tmp_highest_data_map      = $tmp_data_map;

                                }

                            break;
                            case 'STRING':

                                $new_val = $tmp_sequence_data[$ii];

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Returns < 0, if str1 is less 
                                 * than str2. 
                                 *
                                 * Returns > 0, if str1 is greater 
                                 * than str2. 
                                 *
                                 * Returns 0 if they are equal. 
                                 *
                                 */
                                if(!isset($tmp_current_leader_val) || 
                                    (\strcmp($tmp_current_leader_val, $new_val) < 0))
                                {

                                    $tmp_serial_key             = self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]];
                                    $tmp_current_leader_profile = $tmp_serial_key_ARRAY[$ii];
                                    $tmp_current_leader_val     = $new_val;
                                    #$tmp_highest_data_map      = $tmp_data_map;

                                }

                            break;
                            case 'INT':

                                $new_val = $tmp_sequence_data[$ii];

                                if(!isset($tmp_current_leader_val) || 
                                    ($tmp_current_leader_val < $new_val))
                                {

                                    $tmp_serial_key             = self::$result_profile_serial_handle_ARRAY[$tmp_serial_key_ARRAY[$ii]];
                                    $tmp_current_leader_profile = $tmp_serial_key_ARRAY[$ii];
                                    $tmp_current_leader_val     = $new_val;

                                }

                            break;

                        }

                    }

                }else{

                    /*error_log(
                     *    'database (486) ' . 
                     *    'hey, we skipped this guy...' . 
                     *    $tmp_serial_key_ARRAY[$ii]);
                     */

                }

            }

            /*error_log(
             *    'database (506) put me next -->' . 
             *    $tmp_current_leader_profile);
             */

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Queue the map-points to the 
             * raw data of the highest, and 
             * then increment it's 
             * position tracker. 
             * 
             * This only sees the $sequence_field, 
             * and not the data row position. 
             * 
             * We need to lock down the row; can 
             * we store reference to whole row or 
             * even convert profile row to array 
             * for return?
             *
             *
             * 5
             *
             */
            self::$result_aggregate_map_ARRAY[$new_cumm_key_crc][$i]         = self::$oSQLMapper->retrieve_row_coordinates(
                                                                                                  $this->return_serial(self::$result_profile_serial_handle_ARRAY[$tmp_current_leader_profile]), 
                                                                                                  $tmp_current_leader_profile, 
                                                                                                  $result_key_position_ARRAY[$tmp_serial_key][$tmp_current_leader_profile]);
            self::$result_aggregate_map_serial_ARRAY[$new_cumm_key_crc][$i]  = $this->return_serial(self::$result_profile_serial_handle_ARRAY[$tmp_current_leader_profile]);
            self::$result_aggregate_map_profile_ARRAY[$new_cumm_key_crc][$i] = $tmp_current_leader_profile;

            self::$total_aggregate_profile_count[$new_cumm_key_crc][$tmp_current_leader_profile]--;

            $result_key_position_ARRAY[$tmp_serial_key][$tmp_current_leader_profile]++;

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * We now have all data map pointers 
             * to all data where the return will 
             * be sequential per sequence field. 
             *
             * We now need the method that will 
             * return this data. 
             *
             *
             * 5
             *
             */

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
    function return_aggregate_serial(
             $profile, 
             $pos)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1136 hrs.
         *
         */

        if(!isset(self::$result_aggregate_map_serial_ARRAY[$this->crc_int32($profile)][$pos])){

            return self::$result_aggregate_map_serial_ARRAY[$this->crc_int32($profile)][0];

        }else{

            return self::$result_aggregate_map_serial_ARRAY[$this->crc_int32($profile)][$pos];

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
    function return_aggregate_element(
             $aggregate_key, 
             $position)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1137 hrs.
         *
         */

        $aggregate_key_crc    = $this->crc_int32($aggregate_key);

        // Raw result row map. 
        $tmp_data_row_map     = self::$result_aggregate_map_ARRAY[$aggregate_key_crc][$position];

        // Profile. 
        #$tmp_output_ARRAY[0] = self::$result_aggregate_map_profile_ARRAY[$aggregate_key_crc][$position];
        #$tmp_output_ARRAY[1] = $tmp_data_row_map;

        $serial_crc           = $this->crc_int32(self::$result_aggregate_map_serial_ARRAY[$aggregate_key_crc][$position]);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Process the raw MySQLi row data 
         * return into a usable array 
         * data structure. 
         *
         * Plz note that we don't have 
         * serial ($serial_crc) here. 
         *
         */
        //$tmp_loop_size = sizeof(self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_row_map]);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * So we have an element (MySQLi response 
         * return data) with 18 fields. 
         *
         * I do not want to loop 18x per 
         * element displayed on screen to 
         * build a programmatically accessible 
         * (access by method call) handle 
         * to the same data. 
         *
         * Let's try to use the raw 
         * MySQL data response + an SQL 
         * mapper, alone. 
         *
         *
         * 5
         *
         */

        // Profile. 
        $tmp_output_ARRAY[0] = self::$result_aggregate_map_profile_ARRAY[$aggregate_key_crc][$position];

        // Data. 
        $tmp_output_ARRAY[1] = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_row_map];
        $tmp_output_ARRAY[2] = self::$oSQLMapper->return_field_array(
                                                  self::$result_aggregate_map_serial_ARRAY[$aggregate_key_crc][$position], 
                                                  self::$result_aggregate_map_profile_ARRAY[$aggregate_key_crc][$position]);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Get full row of 
         * data and return. 
         *
         * Where return $tmp_aggregate_elem_ARRAY[0] = PROFILE...e.g. KIVOTOS
         * Where return $tmp_aggregate_elem_ARRAY[1] = RAW DATA ARRAY
         * Where return $tmp_aggregate_elem_ARRAY[2] = SQL FIELD ARRAY
         *
         */
        return $tmp_output_ARRAY;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function process(
             $mysqli, 
             $queryType, 
             $select_array, 
             $query = NULL)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * This method, mapSelects(), will 
         * break down the SQL input and 
         * prepare the way for database 
         * result set mapping for 
         * output response processing. 
         *
         */
        $this->mapSelects($select_array);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * For backwards compatibility. 
         *
         */
        if(!isset($query)){

            $query = '';

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Build query from the 
             * select array. 
             *
             */
            foreach($select_array as 
                $key => $query_part)
            {

                $query .= $query_part;

            }

        }

        if(\sizeof($select_array) == 1){

            /*error_log(
             *    'database (566) ' . 
             *    'process() SINGLE query->' . 
             *    $query);
             */

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Execute query (a one-off). 
             *
             * We have yet to OOP the handling of 
             * single query database responses. 
             *
             * Let's do that. 
             *
             */
            self::$result = self::$oEnv->oMYSQLI_CONN_MGR->processQuery(
                                                           $mysqli, 
                                                           $query);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Consume the MySQLi result from a 
             * single query. 
             *
             * Theoretically, this should work!
             *
             *
             * 5 ::
             *
             */
            $this->consume_mysqli_single_result(
                   self::$result, 
                   $mysqli, 
                   $queryType);

        }else{

            /*error_log(
             *    'database (579) ' . 
             *    'process() MULTI QUERY->' . 
             *    $query);
             */

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Execute Multi-query (batch processing).
             *
             */
            $mysqli = self::$oEnv->oMYSQLI_CONN_MGR->processMultiQuery(
                                                     $mysqli, 
                                                     $query);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Consume the MySQLi response 
             * result from a batch of queries. 
             *
             *
             * 5 ::
             *
             */
            $this->consume_mysqli_result(
                   $mysqli, 
                   $queryType);

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
    function return_serial($key = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Having to plug a number in here 
         * is troublesome when there may 
         * be dynamic runtime utilization 
         * of the oDB_RESP object which 
         * could, then, dynamically 
         * change the number that needs 
         * to be given here. 
         *
         * We need a more robust way to 
         * pull up the serial for an 
         * oDB_RESP object. 
         *
         * It should be more like 
         * this..., yeah this 
         * may be ok.
         *
         *
         * 5
         *
         */

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Where $key is specified at the 
             * initialization of an oDB_RESP 
             * object for a new database 
             * response return that will 
             * be incoming. 
             *
             */
            if(isset($key)){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * This should be decently fast vs the 
                 * foreach() we previously had employed ::
                 *
                 * https://gist.github.com/ksimka/21a6ff74b41451c430e8
                 *
                 */
                $keypos = \array_search($key, self::$resp_serial_key_ARRAY);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Not sure about this, but we 
                 * will try it out. 
                 *
                 * Nice. 
                 *
                 */
                if(!($keypos === false)){

                    return self::$resp_serial_ARRAY[$keypos];

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('You are attempting to ' . 
                        'return_serial() with key [' . 
                        \print_r($key, true) . 
                        '] which has not been found within ' . 
                        \sizeof(self::$resp_serial_ARRAY) . 
                        ' results.');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Simply return the 
                 * last response serial 
                 * that was initialized. 
                 *
                 */
                return self::$resp_serial_raw[self::$resp_serial];

            }

        }catch(\Exception $e){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Send this through the 
             * CLR-SSL Logging 
             * Services Layer. 
             *
             *
             * 5
             *
             */
            self::$R_logging->catch_exception(
                              $e, 
                              \LOG_ERR, 
                              __METHOD__, 
                              __NAMESPACE__);

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_oENV()
    {

        return self::$oEnv;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_oDB()
    {

        return self::$oData;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_profiles($serial)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1137 hrs.
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Ok. Let's see if we retain user 
         * profile data in this var.
         *
         */
        return self::$resp_profiles_ARRAY[$this->crc_int32($serial)];

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function retrieveDataByID(
             $serial, 
             $profile, 
             $current_id, 
             $fieldname)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1138 hrs.
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Support for multi-key-dimension'ing. 
         *
         */
        $pos = \strpos($current_id, '|');
        if($pos !== false){

            $tmp_KEY_DATA_FIELDS_ARRAY = explode('|', $current_id);
            $tmp_count_key_fields      = \sizeof($tmp_KEY_DATA_FIELDS_ARRAY);

            $serial_crc    = $this->crc_int32($serial);
            $profile_crc   = $this->crc_int32($profile);
            $fieldname_crc = $this->crc_int32($fieldname);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * We have up to 5 keys. 
             *
             */
            switch($tmp_count_key_fields){
                case 2:

                    if(isset(self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_KEY_DATA_FIELDS_ARRAY[0]][$tmp_KEY_DATA_FIELDS_ARRAY[1]][$fieldname_crc])){

                        return self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_KEY_DATA_FIELDS_ARRAY[0]][$tmp_KEY_DATA_FIELDS_ARRAY[1]][$fieldname_crc];

                    }else{

                        return NULL;

                    }

                break;
                case 3:

                    if(isset(self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_KEY_DATA_FIELDS_ARRAY[0]][$tmp_KEY_DATA_FIELDS_ARRAY[1]][$tmp_KEY_DATA_FIELDS_ARRAY[2]][$fieldname_crc])){

                        return self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_KEY_DATA_FIELDS_ARRAY[0]][$tmp_KEY_DATA_FIELDS_ARRAY[1]][$tmp_KEY_DATA_FIELDS_ARRAY[2]][$fieldname_crc];

                    }else{

                        return NULL;

                    }

                break;
                case 4:

                    if(isset(self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_KEY_DATA_FIELDS_ARRAY[0]][$tmp_KEY_DATA_FIELDS_ARRAY[1]][$tmp_KEY_DATA_FIELDS_ARRAY[2]][$tmp_KEY_DATA_FIELDS_ARRAY[3]][$fieldname_crc])){

                        return self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_KEY_DATA_FIELDS_ARRAY[0]][$tmp_KEY_DATA_FIELDS_ARRAY[1]][$tmp_KEY_DATA_FIELDS_ARRAY[2]][$tmp_KEY_DATA_FIELDS_ARRAY[3]][$fieldname_crc];

                    }else{

                        return NULL;

                    }

                break;
                case 5:

                    if(isset(self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_KEY_DATA_FIELDS_ARRAY[0]][$tmp_KEY_DATA_FIELDS_ARRAY[1]][$tmp_KEY_DATA_FIELDS_ARRAY[2]][$tmp_KEY_DATA_FIELDS_ARRAY[3]][$tmp_KEY_DATA_FIELDS_ARRAY[4]][$fieldname_crc])){

                        return self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_KEY_DATA_FIELDS_ARRAY[0]][$tmp_KEY_DATA_FIELDS_ARRAY[1]][$tmp_KEY_DATA_FIELDS_ARRAY[2]][$tmp_KEY_DATA_FIELDS_ARRAY[3]][$tmp_KEY_DATA_FIELDS_ARRAY[4]][$fieldname_crc];

                    }else{

                        return NULL;

                    }

                break;
                default:

                    try{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('You are attempting to get ' . 
                            $profile . ' data by KEY ID, but the number ' . 
                            'of KEYs passed in [' . 
                            $tmp_count_key_fields . 
                            '] is not supported. 5 is ' . 
                            'the highest. Response serial=' . $serial);

                    }catch(\Exception $e){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Send this through the 
                         * CLR-SSL Logging 
                         * Services Layer. 
                         *
                         *
                         * 5
                         *
                         */
                        self::$R_logging->catch_exception(
                                          $e, 
                                          \LOG_ERR, 
                                          __METHOD__, 
                                          __NAMESPACE__);

                    }

                break;

            }

        }else{

            return self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$current_id][$fieldname_crc];

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
    function return_field_names_ARRAY(
             $serial, 
             $profile = NULL)
    {

        return self::$oSQLMapper->return_field_array(
                                  $serial, 
                                  $profile);

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
    function keyDataByID(
             $serial, 
             $profile, 
             $id_field)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1142 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * This method needs to be able 
         * to receive and process a pipe 
         * delim $profile string. 
         *
         */

        $serial_crc  = $this->crc_int32($serial);
        $profile_crc = $this->crc_int32($profile);

        try{

            $pos = \strpos($profile, '|');
            if($pos !== false){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Process pipe delimited data. 
                 *
                 */
                $tmp_PROFILE_ARRAY = explode('|', $profile);
                $tmp_count_PROFILE = \sizeof($tmp_PROFILE_ARRAY);

                for($iii = 0; $iii < $tmp_count_PROFILE; $iii++){

                    $profile_crc = $this->crc_int32($tmp_PROFILE_ARRAY[$iii]);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * We need to put this data 
                     * into an array key'd by ID. 
                     *
                     */
                    if(!isset(self::$result_profile_count_ARRAY[$serial_crc][$profile_crc])){

                        $tmp_loop_size = 0;

                    }else{

                        $tmp_loop_size = self::$result_profile_count_ARRAY[$serial_crc][$profile_crc];

                    }

                    $tmp_profile_field_cnt      = (int) self::$resp_profile_size_ARRAY[$serial_crc][$profile_crc];
                    $tmp_current_row_KEYS_ARRAY = array();

                    $pos_profile_pipe = \strpos($id_field, '|');
                    if($pos_profile_pipe !== false){

                        $tmp_KEY_DATA_FIELDS_ARRAY = explode('|', $id_field);
                        $tmp_count_key_fields      = \sizeof($tmp_KEY_DATA_FIELDS_ARRAY);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * We have multi-dimensional 
                         * key-ing to perform for 
                         * each row of select 
                         * profile data. 
                         *
                         */
                        for($i = 0; $i < $tmp_loop_size; $i++){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Retrieve coordinates / values 
                             * for key data. 
                             *
                             */
                            for($ii = 0; $ii < $tmp_count_key_fields; $ii++){

                                $tmp_data_map = self::$oSQLMapper->retrieve_coordinates(
                                                                   $serial, 
                                                                   $tmp_PROFILE_ARRAY[$iii], 
                                                                   $tmp_KEY_DATA_FIELDS_ARRAY[$ii], 
                                                                   $i);

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Primary key to be used as 
                                 * index for all data fields.
                                 *
                                 */
                                $tmp_current_row_KEYS_ARRAY[$ii] = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

                            }

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * For each field in the row...
                             *
                             */
                            for($ii = 0; $ii < $tmp_profile_field_cnt; $ii++){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Current field name. 
                                 *
                                 */
                                $tmp_current_field_name = self::$oSQLMapper->return_field_name(
                                                                             $serial, 
                                                                             $tmp_PROFILE_ARRAY[$iii], 
                                                                             $ii);
                                $current_field_name_crc = $this->crc_int32($tmp_current_field_name);

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Retrieve the multi-dimensional 
                                 * coordinates to the location of 
                                 * the raw data for the current field. 
                                 *
                                 *
                                 * 5
                                 *
                                 */
                                $tmp_data_map = self::$oSQLMapper->retrieve_coordinates(
                                                                   $serial, 
                                                                   $tmp_PROFILE_ARRAY[$iii], 
                                                                   $tmp_current_field_name, 
                                                                   $i);

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Store this data in an 
                                 * appropriately key'd array. 
                                 *
                                 */
                                switch($tmp_count_key_fields){
                                    case 2:

                                        self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_current_row_KEYS_ARRAY[0]][$tmp_current_row_KEYS_ARRAY[1]][$current_field_name_crc] = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

                                    break;
                                    case 3:

                                        self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_current_row_KEYS_ARRAY[0]][$tmp_current_row_KEYS_ARRAY[1]][$tmp_current_row_KEYS_ARRAY[2]][$current_field_name_crc] = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

                                    break;
                                    case 4:

                                        self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_current_row_KEYS_ARRAY[0]][$tmp_current_row_KEYS_ARRAY[1]][$tmp_current_row_KEYS_ARRAY[2]][$tmp_current_row_KEYS_ARRAY[3]][$current_field_name_crc] = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

                                    break;
                                    case 5:

                                        self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_current_row_KEYS_ARRAY[0]][$tmp_current_row_KEYS_ARRAY[1]][$tmp_current_row_KEYS_ARRAY[2]][$tmp_current_row_KEYS_ARRAY[3]][$tmp_current_row_KEYS_ARRAY[4]][$current_field_name_crc] = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

                                    break;
                                    default:

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * HOOOSTON, VE HAFF PROBLEM!
                                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                                         *
                                         */
                                        throw new Exception('You are attempting to key ' . 
                                            $tmp_PROFILE_ARRAY[$iii] . 
                                            ' data by ID, but the number ' . 
                                            'of KEYs passed in [' . 
                                            $tmp_count_key_fields . 
                                            '] is not supported. 5 is ' . 
                                            'the highest. Response serial=' . 
                                            $serial);

                                    break;

                                }

                            }

                        }

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * For each row of the 
                         * select statement's 
                         * profile data...
                         *
                         */
                        for($i = 0; $i < $tmp_loop_size; $i++){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Get the primary ID's 
                             * location for row data. 
                             *
                             */
                            $tmp_data_map = self::$oSQLMapper->retrieve_coordinates(
                                                               $serial, 
                                                               $tmp_PROFILE_ARRAY[$iii], 
                                                               $id_field, 
                                                               $i);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Primary key to be used 
                             * as index for all 
                             * data fields. 
                             *
                             */
                            $tmp_current_row_KEY = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Let's re-key the data by 
                             * ID_FIELD. This will take 
                             * some consideration, but
                             * basically, this should 
                             * ultimately happen...
                             *
                             *
                             * ...for each field in 
                             * the row.
                             *
                             */
                            for($ii = 0; $ii < $tmp_profile_field_cnt; $ii++){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Current field name. 
                                 *
                                 */
                                $tmp_current_field_name = self::$oSQLMapper->return_field_name(
                                                                             $serial, 
                                                                             $tmp_PROFILE_ARRAY[$iii], 
                                                                             $ii);
                                $current_field_name_crc = $this->crc_int32($tmp_current_field_name);

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * We need the ability to pull up 
                                 * field name (from the select 
                                 * statement) by it's position. 
                                 *
                                 */
                                #self::$resp_fieldPosition_viaFieldName[$this->crc_int32($serial)][self::$select_statement_pos_ARRAY[$this->crc_int32($serial)][$this->crc_int32($profile)]][$current_field_name_crc];

                                $tmp_data_map = self::$oSQLMapper->retrieve_coordinates(
                                                                   $serial, 
                                                                   $tmp_PROFILE_ARRAY[$iii], 
                                                                   $tmp_current_field_name, 
                                                                   $i);
                                self::$rekey_profile_response_ARRAY[$serial_crc][$this->crc_int32($profile)][$tmp_current_row_KEY][$current_field_name_crc] = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

                            }

                        }

                    }

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * We need to put this 
                 * data into an array 
                 * key'd by ID. 
                 *
                 */
                if(!isset(self::$result_profile_count_ARRAY[$serial_crc][$profile_crc])){

                    $tmp_loop_size = 0;

                }else{

                    $tmp_loop_size = self::$result_profile_count_ARRAY[$serial_crc][$profile_crc];

                }

                $tmp_profile_field_cnt = (int) self::$resp_profile_size_ARRAY[$serial_crc][$profile_crc];
                $tmp_current_row_KEYS_ARRAY = array();

                $pos = \strpos($id_field, '|');
                if($pos !== false){

                    $tmp_KEY_DATA_FIELDS_ARRAY = \explode('|', $id_field);
                    $tmp_count_key_fields      = \sizeof($tmp_KEY_DATA_FIELDS_ARRAY);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * We have multi-dimensional 
                     * key-ing to perform for 
                     * each row of select 
                     * profile data. 
                     *
                     */
                    for($i = 0; $i < $tmp_loop_size; $i++){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Retrieve the multi-dimensional 
                         * coordinates / values 
                         * for key data. 
                         *
                         */
                        for($ii = 0; $ii < $tmp_count_key_fields; $ii++){

                            $tmp_data_map = self::$oSQLMapper->retrieve_coordinates(
                                                               $serial, 
                                                               $profile, 
                                                               $tmp_KEY_DATA_FIELDS_ARRAY[$ii], 
                                                               $i);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The primary key to be used as 
                             * index for all of the row's 
                             * data fields. 
                             *
                             */
                            $tmp_current_row_KEYS_ARRAY[$ii] = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

                        }

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * For each field in the row...
                         *
                         */
                        for($ii = 0; $ii < $tmp_profile_field_cnt; $ii++){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The current field name. 
                             *
                             */
                            $tmp_current_field_name = self::$oSQLMapper->return_field_name(
                                                                         $serial, 
                                                                         $profile, 
                                                                         $ii);
                            $current_field_name_crc = $this->crc_int32($tmp_current_field_name);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Retrieve multi-dimensional 
                             * coordinates to the location 
                             * of the raw data for the 
                             * current field. 
                             *
                             */
                            $tmp_data_map = self::$oSQLMapper->retrieve_coordinates(
                                                               $serial, 
                                                               $profile, 
                                                               $tmp_current_field_name, 
                                                               $i);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Store the data into 
                             * an appropriately 
                             * key'd array. 
                             *
                             */
                            switch($tmp_count_key_fields){
                                case 2:

                                    self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_current_row_KEYS_ARRAY[0]][$tmp_current_row_KEYS_ARRAY[1]][$current_field_name_crc] = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

                                break;
                                case 3:

                                    self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_current_row_KEYS_ARRAY[0]][$tmp_current_row_KEYS_ARRAY[1]][$tmp_current_row_KEYS_ARRAY[2]][$current_field_name_crc] = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

                                break;
                                case 4:

                                    self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_current_row_KEYS_ARRAY[0]][$tmp_current_row_KEYS_ARRAY[1]][$tmp_current_row_KEYS_ARRAY[2]][$tmp_current_row_KEYS_ARRAY[3]][$current_field_name_crc] = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

                                break;
                                case 5:

                                    self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_current_row_KEYS_ARRAY[0]][$tmp_current_row_KEYS_ARRAY[1]][$tmp_current_row_KEYS_ARRAY[2]][$tmp_current_row_KEYS_ARRAY[3]][$tmp_current_row_KEYS_ARRAY[4]][$current_field_name_crc] = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

                                break;
                                default:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    throw new Exception('You are attempting to key ' . 
                                        $profile . 
                                        ' data by ID, but the number of KEYs passed in [' . 
                                        $tmp_count_key_fields . 
                                        '] is not supported. 5 is the highest. Response serial=' . 
                                        $serial);

                                break;

                            }

                        }

                    }

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * For each row of select 
                     * profile data. 
                     *
                     */
                    for($i = 0; $i < $tmp_loop_size; $i++){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Get primary ID location 
                         * for row data. 
                         *
                         */
                        $tmp_data_map = self::$oSQLMapper->retrieve_coordinates(
                                                           $serial, 
                                                           $profile, 
                                                           $id_field, 
                                                           $i);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Primary key to be 
                         * used as index for 
                         * all data fields. 
                         *
                         */
                        $tmp_current_row_KEY = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Let's re-key the data by 
                         * ID_FIELD. This will take 
                         * some consideration, but
                         * basically, this should 
                         * ultimately happen...
                         *
                         *
                         * ...for each field in 
                         * the row. 
                         *
                         *
                         * 5
                         *
                         */
                        for($ii = 0; $ii < $tmp_profile_field_cnt; $ii++){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * The current field name. 
                             *
                             */
                            $tmp_current_field_name = self::$oSQLMapper->return_field_name(
                                                                         $serial, 
                                                                         $profile, 
                                                                         $ii);
                            $current_field_name_crc = $this->crc_int32($tmp_current_field_name);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * We need the ability to pull up 
                             * field name (from the select 
                             * statement) by it's position. 
                             *
                             */
                            #self::$resp_fieldPosition_viaFieldName[$serial_crc][self::$select_statement_pos_ARRAY[$serial_crc][$profile_crc]][$current_field_name_crc];

                            $tmp_data_map = self::$oSQLMapper->retrieve_coordinates(
                                                               $serial, 
                                                               $profile, 
                                                               $tmp_current_field_name, 
                                                               $i);
                            self::$rekey_profile_response_ARRAY[$serial_crc][$profile_crc][$tmp_current_row_KEY][$current_field_name_crc] = self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

                        }

                    }

                }

            }

        }catch(\Exception $e){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Send this through the 
             * CLR-SSL Logging 
             * Services Layer. 
             *
             *
             * 5
             *
             */
            self::$R_logging->catch_exception(
                              $e, 
                              \LOG_ERR, 
                              __METHOD__, 
                              __NAMESPACE__);

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
    function ping_profile_existence(
             $serial, 
             $profile)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1148 hrs.
         *
         */

        $serial_crc  = $this->crc_int32($serial);
        $profile_crc = $this->crc_int32($profile);

        if(!isset(self::$result_profile_count_ARRAY[$serial_crc][$profile_crc])){

            return false;

        }else{

            return true;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function ping_value_existence(
             $serial, 
             $profile, 
             $fieldname, 
             $value)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1149 hrs.
         *
         */

        $serial_crc  = $this->crc_int32($serial);
        $profile_crc = $this->crc_int32($profile);

        if(!isset(self::$result_profile_count_ARRAY[$serial_crc][$profile_crc])){

            return false;

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * We will need to loop 
         * here...unfortunately...
         *
         */
        $tmp_loop_size = self::$result_profile_count_ARRAY[$serial_crc][$profile_crc];
        for($i = 0; $i < $tmp_loop_size; $i++){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Rowcnt we can get from the 
             * SQL Result Mapper®. Can we 
             * get field position from 
             * field name?
             *
             * Currently, the data is only 
             * stored here:
             * self::$master_raw_response_ARRAY[self::$resp_serial][$ROWCNT][$fieldPos] = $value;
             *
             * SQL Result Mapper® has this: 
             * self::$result_profile_results_ARRAY[$resp_serial][crc32($tmp_profile)][$count] = rowcnt to access data value in raw array.
             *
             */
            $tmp_pointer_array = self::$oSQLMapper->return_value_pointer_array(
                                                    $serial, 
                                                    $profile, 
                                                    $fieldname, 
                                                    $i);
            if(self::$master_raw_response_ARRAY[$serial_crc][$tmp_pointer_array[0]][$tmp_pointer_array[1]] == $value){

                return true;

            }

        }

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
    function initialize_serial_map_for_deep_stream(
             $profile, 
             $serial)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1149 hrs.
         *
         */

        self::$result_aggregate_map_serial_ARRAY[$this->crc_int32($profile)][0] = $serial;

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
    function initialize_count_for_deep_stream(
             $profile, 
             $size)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1150 hrs.
         *
         */

        self::$total_aggregate_count[$this->crc_int32($profile)] = $size;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_sizeof_aggregate($profile)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1150 hrs.
         *
         */

        if(!isset(self::$total_aggregate_count[$this->crc_int32($profile)])){

            return false;

        }else{

            return self::$total_aggregate_count[$this->crc_int32($profile)];

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
    function return_sizeof(
             $serial, 
             $profile)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1150 hrs.
         *
         */

        $serial_crc = $this->crc_int32($serial);

        try{

            if(is_array($profile)){

                $tmp_size_array = array();
                $tmp_loop_size  = sizeof($profile);

                for($i = 0; $i < $tmp_loop_size; $i++){

                    $tmp_size_array[$i] = self::$result_profile_count_ARRAY[$serial_crc][$this->crc_int32($profile[$i])];

                }

                return $tmp_size_array;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * I didn't see assets come 
                 * up...lets try again. 
                 *
                 */

                /*error_log(
                 *    'database (441) serial[' . 
                 *    $serial_crc . 
                 *    '] profile[' . 
                 *    $profile_crc . 
                 *    '] result_profile_count_ARRAY[' . 
                 *    self::$result_profile_count_ARRAY[$serial_crc][$profile_crc] . 
                 *    '].');
                 */

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * It is the serial that is being 
                 * checksummed 2x. 
                 *
                 * We are expecting raw. 
                 *
                 */
                //$serial_crc  = $this->crc_int32($serial);
                $profile_crc = $this->crc_int32($profile);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * I think my serial is coming in 
                 * already checksummed, so I could 
                 * be double checksumming it. 
                 *
                 * Let's remove the serial checksum.
                 *
                 * Let me check. Other sections 
                 * of the app use this method too? 
                 * ...and they are working now. 
                 *
                 * We have some work to do 
                 * here...yep...prob may be just 
                 * up stream. I am not even using 
                 * this value.  :(   LOL.
                 *
                 */
                if(isset(self::$result_profile_count_ARRAY[$serial_crc][$profile_crc])){

                    return self::$result_profile_count_ARRAY[$serial_crc][$profile_crc];

                }else{

                    /*$this->errStatus = self::$queryType . 
                     *                   '=error=EVIFWEB database_response_manager::return_sizeof() ' . 
                     *                   'failed to locate data.';
                     */
                    $this->errStatus = self::$queryType . '=error';
                    throw new Exception('result_profile_count_ARRAY not set for serial[' . 
                        $serial . '] profile[' . 
                        \print_r($profile, true) . '].');

                }

            }

        }catch(\Exception $e){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Send this through the 
             * CLR-SSL Logging 
             * Services Layer. 
             *
             *
             * 5
             *
             */
            self::$R_logging->catch_exception(
                              $e, 
                              \LOG_ERR, 
                              __METHOD__, 
                              __NAMESPACE__);

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
    function mapSelects($sql_select_array)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Mapping will be performed 
         * by the SQL Result Mapper® 
         *
         */
        self::$oSQLMapper->mapQueryData(
                           self::$resp_serial, 
                           $sql_select_array);

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
    function initialize(
             $serial, 
             $serial_key, 
             $profiles, 
             $fieldcnt, 
             $SQLalign = false)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1154 hrs.
         *
         */

        self::$resp_serial_ARRAY[]                     = $serial;
        self::$resp_serial_key_ARRAY[]                 = $serial_key;
        self::$resp_serial                             = $this->crc_int32($serial);
        self::$resp_serial_raw[self::$resp_serial]     = $serial;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * I see. Simple override. 
         * Let's make this 
         * serializable. I think 
         * we can just do that. 
         * Let's check. 
         *
         * Yeah, no prob. 
         *
         */
        self::$resp_profiles_ARRAY[self::$resp_serial] = explode('|', $profiles);
        self::$resp_fieldcnt_ARRAY                     = explode('|', $fieldcnt);

        /*error_log(
         *    'database (539) size of select array [' . 
         *    sizeof(self::$resp_profiles_ARRAY[self::$resp_serial]) . 
         *    '].');
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * I need an option to determine 
         * select profile via order of 
         * SQL statements/profile_pipe_string 
         * to get around selects with 
         * the same number of 
         * returned fields. 
         *
         */
        self::$resp_profiles_SQL_align = $SQLalign;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Also store meta in non-
         * loop-inducing format. 
         *
         */
        $tmp_loop_size = \sizeof(self::$resp_profiles_ARRAY[self::$resp_serial]);
        for($i = 0; $i < $tmp_loop_size; $i++){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Build an sql profile 
             * oriented handle for 
             * direct access 
             * to serial. 
             *
             */
            self::$serial_by_sql_profile[self::$resp_profiles_ARRAY[self::$resp_serial][$i]] = $serial;

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Initialize result count 
             * to zero. 
             *
             * Hopefully, better?
             *
             * ...geez..everything is 
             * now serialized!  :)
             *
             */
            self::$result_profile_count_ARRAY[self::$resp_serial][$this->crc_int32(self::$resp_profiles_ARRAY[self::$resp_serial][$i])] = 0;

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Store for direct access.
             *
             */
            self::$resp_profile_viaCnt_ARRAY[self::$resp_serial][self::$resp_fieldcnt_ARRAY[$i]] = self::$resp_profiles_ARRAY[self::$resp_serial][$i];

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Store record of field count 
             * per select profile to power 
             * key-by-id functionality. 
             *
             */
            self::$resp_profile_size_ARRAY[self::$resp_serial][$this->crc_int32(self::$resp_profiles_ARRAY[self::$resp_serial][$i])] = self::$resp_fieldcnt_ARRAY[$i];
            self::$oSQLMapper->updateSelectPos(
                               $serial, 
                               self::$resp_profiles_ARRAY[self::$resp_serial][$i], 
                               $i);

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
    function consume_mysqli_result(
             $heavy_mysqli, 
             $queryType)
    {

        self::$queryType = $queryType;

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * That is wierd....if I debug 
             * this in PHPStorm® via XDebug, 
             * it breaks.
             *
             * But, it works fine when just 
             * run naked. 
             *
             * Lets try again...
             *
             * So, if I break here...we throw 
             * an exception. Let's break it. 
             *
             * I need to see how this 
             * handles SQL err conditions.
             * 
             * So, there are exceptions that 
             * will be thrown closer to the 
             * source of the SQL error here. 
             * 
             * Ok to check, but I don't 
             * need to fret over checking 
             * this particular section.
             *
             */
            if($heavy_mysqli->error){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                //$this->errStatus = $queryType . '=error=' . $heavy_mysqli->error;
                $this->errStatus = $queryType . '=error';
                throw new Exception($queryType . 
                    ' error :: [' . 
                    $heavy_mysqli->error . '].');

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * This is where the magic 
                 * happens. We need to store 
                 * the data exactly where we 
                 * want  needs to be for 
                 * later access. 
                 *
                 * If there is any missing 
                 * config data, go back and 
                 * modify the inputs. 
                 *
                 * We'll hit those walls 
                 * when we get to them. 
                 *
                 * Basically, I would like 
                 * to store data like this. 
                 *
                 */
                $ROWCNT           =
                $select_query_cnt = 0;

                do{

                    if($result = $heavy_mysqli->store_result()){

                        while($row = $result->fetch_row()){

                            foreach($row as 
                                $fieldPos => $value)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * The goal is to have this 
                                 * method store the data in 
                                 * a non-loop-inducing manner 
                                 * where each element can 
                                 * be accessed directly. 
                                 *
                                 */
                                $this->queueRawResponse(
                                       $ROWCNT, 
                                       $fieldPos, 
                                       $value);

                            }

                            /*error_log(
                             *    'database (1040) ' . 
                             *    'consume_mysqli_result() ' . 
                             *    'flagRespFieldCount row[' . 
                             *    $ROWCNT . 
                             *    '] fieldPos[' . 
                             *    $fieldPos . 
                             *    '] select query[' . 
                             *    $select_query_cnt . 
                             *    '] serial[' . 
                             *    self::$resp_serial . 
                             *    '].');
                             */

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Flag field count to identify 
                             * profile type of current row 
                             * before moving on. 
                             *
                             */
                            $this->flagRespFieldCount(
                                   $ROWCNT, 
                                   $select_query_cnt);

                            $ROWCNT++;

                        }

                        $result->free();

                    }

                    if($heavy_mysqli->more_results()){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * End of record. 
                         *
                         * More to follow. 
                         * 
                         * Let's smoke test this. 
                         * I hope it increments per 
                         * each select query results 
                         * completion (apparently, 
                         * it does).
                         *
                         *
                         * 5
                         *
                         */
                        $select_query_cnt++;
                        
                        /*error_log('database (1053) process ' . 
                         *   'next result set ' . 
                         *   $select_query_cnt);
                         */

                        // 5 :: Monday, June 29, 2026 @ 1417 hrs.
                        $clr_ssl_msg = 'Process next result set ' . 
                                       $select_query_cnt;
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
                               \LOG_DEBUG, 
                               \E_NOTICE, 
                               __LINE__, 
                               __METHOD__, 
                               __FILE__, 
                               $token);

                    }

                } while($heavy_mysqli->more_results() && $heavy_mysqli->next_result());

            }

            /*error_log('database (1060) done ' . 
             *   'processing multi-query. ' . 
             *   'rows=' . 
             *   $ROWCNT);
             */

            // 5 :: Monday, June 29, 2026 @ 1421 hrs.
            $clr_ssl_msg = 'Done processing multi-query. ' . 
                           'rows=' . 
                           $ROWCNT;
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
                   \LOG_DEBUG, 
                   \E_NOTICE, 
                   __LINE__, 
                   __METHOD__, 
                   __FILE__, 
                   $token);

        }catch(\Exception $e){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Send this through the 
             * CLR-SSL Logging 
             * Services Layer. 
             *
             *
             * 5
             *
             */
            self::$R_logging->catch_exception(
                              $e, 
                              \LOG_ERR, 
                              __METHOD__, 
                              __NAMESPACE__);

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
    function consume_mysqli_single_result(
             $result, 
             $heavy_mysqli, 
             $queryType)
    {

        self::$queryType = $queryType;

        try{

            if($heavy_mysqli->error){

                self::$query_exception_result = $queryType . '=error';
                throw new Exception($queryType . 
                    ' error :: [' . 
                    $heavy_mysqli->error . '].');

            }else{

                $ROWCNT            =
                $select_query_cnt  = 0;
                $tmp_flag_this_row = false;

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Remain still while 
                 * your life is extracted. 
                 *
                 * $ROWCNT = 0;
                 *
                 * Continue $ROWCNT from 
                 * previous result processing. 
                 *
                 */
                while($row = $result->fetch_row()){

                    foreach($row as 
                        $fieldPos => $value)
                    {

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Store result. 
                         *
                         */
                        $this->queueRawResponse(
                               $ROWCNT, 
                               $fieldPos, 
                               $value);

                        /*error_log(
                         *    'database (561) row[' . 
                         *    $ROWCNT . '] field[' . 
                         *    $fieldPos . '] value[' . 
                         *    $value . '].');
                         */
                        
                        $tmp_flag_this_row = true;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Flag field count to identify 
                     * profile type of current row 
                     * before moving on. 
                     *
                     */
                    if($tmp_flag_this_row){

                        /*error_log(
                         *    'database (653) ' . 
                         *    'consume_mysqli_single_result() ' . 
                         *    'flagRespFieldCount row[' . 
                         *    $ROWCNT . 
                         *    '] fieldPos[' . 
                         *    $fieldPos . '] select query[' . 
                         *    $select_query_cnt . '] serial[' . 
                         *    self::$resp_serial . '].');
                         */

                        $this->flagRespFieldCount(
                               $ROWCNT, 
                               $select_query_cnt);

                        $tmp_flag_this_row = false;

                    }

                    $ROWCNT++;
                    //$select_query_cnt++;

                }

                $result->free();

            }

        }catch(\Exception $e){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Send this through the 
             * CLR-SSL Logging 
             * Services Layer. 
             *
             *
             * 5
             *
             */
            self::$R_logging->catch_exception(
                              $e, 
                              \LOG_ERR, 
                              __METHOD__, 
                              __NAMESPACE__);

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function return_data_element(
             $serial, 
             $profile, 
             $field, 
             $pos = 0)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1156 hrs.
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * serial USER FIRSTNAME 0
         *
         * Oops. 
         * 
         * I think the expectation 
         * is that this (int) $pos be a 
         * representation of record count 
         * for the specific profile data. 
         *
         * Not count of global 
         * element array. 
         *
         * We need to reconcile this, and 
         * hopefully without needing to 
         * do any looping through results. 
         *
         *
         * 5
         *
         */

        /*$oDB_RESP->return_data_element(
         *           $db_resp_process_serial, 
         *           'KIVOTOS_00', 
         *           'CLIENT_ID', 
         *           0);
         */

        $serial_crc = $this->crc_int32($serial);

        /*error_log(
         *    'database (680) serial[' . 
         *    $serial . '], profile[' . 
         *    $profile . '], field[' . 
         *    $field . '], pos[' . 
         *    $pos . '].');
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Data is stored in 
         * MASTER_RAW 
         * array[self::$resp_serial][$ROWCNT][$fieldPos].
         *
         */
        $tmp_data_map = self::$oSQLMapper->retrieve_coordinates(
                                           $serial, 
                                           $profile, 
                                           $field, 
                                           $pos);

        # $tmp_data_map[serial][0] = $ROWCNT
        # $tmp_data_map[serial][1] = $fieldPos

        /*error_log(
         *    'database (686) data map field[' . 
         *    $field . '] pos[' . 
         *    $pos . '] 0=[' . 
         *    $tmp_data_map[$serial_crc][0] . '] 1=[' . 
         *    $tmp_data_map[$serial_crc][1] . '].');
         */

        /*error_log(
         *    'database (290) [' . 
         *    crc32($serial) . '][' . 
         *    $profile . '][' . 
         *    $field . '][' . 
         *    $pos . '].');
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * So, here we are loading results 
         * from global raw results array. 
         *
         * Let's use this row count to 
         * access result data. 
         *
         *
         * 5
         *
         */
        //self::$master_raw_response_ARRAY[self::$resp_serial][$ROWCNT][$fieldPos]
        return self::$master_raw_response_ARRAY[$serial_crc][$tmp_data_map[$serial_crc][0]][$tmp_data_map[$serial_crc][1]];

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
    private function queueRawResponse(
                     $ROWCNT, 
                     $fieldPos, 
                     $value)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Geez. If I store this in an 
         * array here, do I get around 
         * needing to loop through the 
         * set again? 
         *
         * When I get the first element, 
         * I do not know what it 
         * is...results-wise. 
         *
         * Only after a row is completed 
         * (new row started), can I even see 
         * what data a row really represents 
         * (like, from what "SELECT" query 
         * did this data even come, out of 
         * n+1 SELECT's)...and even 
         * this...based upon field count. 
         *
         * We will have to process row 
         * by row. 
         *
         *
         * 5
         *
         */
        self::$master_raw_response_ARRAY[self::$resp_serial][$ROWCNT][$fieldPos] = $value;

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
    private function flagRespFieldCount(
                     $ROWCNT, 
                     $select_query_pos)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1156 hrs.
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * This is global record count...not 
         * profile specific. This method is 
         * not fired when no results come 
         * from the database, but I still 
         * need to ask the question, and 
         * this still needs to tell me 
         * zero...not undefined or err. 
         *
         *
         * 5
         *
         */

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Take a field count to determine 
             * the data profile. Do we want to 
             * run a quick test to see if 
             * the database result aligns to the 
             * order of the n+1 batched queries 
             * sent to multi-query? Or do we 
             * not want to worry about that 
             * and make this thing to be 
             * "case-insensitive"? 
             *
             *
             * 5
             *
             */
            $tmp_row_size = \sizeof(self::$master_raw_response_ARRAY[self::$resp_serial][$ROWCNT]);

            if(self::$resp_profiles_SQL_align){

                /*error_log(
                 *    'database (715) flagRespFieldCount tmp_row_size[' . 
                 *    $tmp_row_size . '] resp_serial[' . 
                 *    self::$resp_serial . '] select_query_pos[' . 
                 *    $select_query_pos . '] size[' . 
                 *    sizeof(self::$resp_profiles_ARRAY[self::$resp_serial]) . 
                 *    '].');
                 */

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * From what I have been able 
                 * to tell, this is working. 
                 *
                 * I have some selects returning 
                 * no data so not showing up. 
                 *
                 * We will run kivotos in true 
                 * mode for more testing. 
                 *
                 *
                 * 5
                 *
                 */
                $tmp_profile = self::$resp_profiles_ARRAY[self::$resp_serial][$select_query_pos];

            }else{

                $tmp_profile = self::$resp_profile_viaCnt_ARRAY[self::$resp_serial][$tmp_row_size];

            }

            /*error_log(
             *    'database (721) ' . 
             *    'Do I change? tmp_profile->' . 
             *    $tmp_profile);
             */

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * It looks like my single MySQLi 
             * processor is running an 
             * unnecessary process at the end. 
             *
             * Let's check. 
             *
             * Store for mapping of 
             * resource access: 
             * ROWCOUNT
             * PROFILE
             *
             *
             * 5
             *
             */

            if($tmp_profile != ''){

                $profile_crc = $this->crc_int32($tmp_profile);

                self::$result_record_profile_viaRowCnt_ARRAY[self::$resp_serial][$ROWCNT] = $tmp_profile;
                
                /*error_log(
                 *    'database (730) store profile[' . 
                 *    $tmp_profile . '] in serial[' . 
                 *    self::$resp_serial . '] row[' . 
                 *    $ROWCNT . '].');
                 */

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * We need a record of all 
                 * rows (and their raw record 
                 * queue position) by 
                 * profile type. 
                 *
                 * We have confirmed 
                 * that count is being 
                 * initialized to zero for 
                 * comm_stream, right?
                 *
                 *
                 * 5
                 *
                 */
                if(!isset(self::$result_profile_count_ARRAY[self::$resp_serial][$profile_crc])){

                    /*error_log(
                     *    'database (666) set ' . 
                     *    'result_profile_count_ARRAY to serial[' . 
                     *    self::$resp_serial . '] profile[' . 
                     *    $this->crc_int32($tmp_profile) . '/' . 
                     *    $tmp_profile . '] value 0');
                     */

                    self::$result_profile_count_ARRAY[self::$resp_serial][$profile_crc] = 0;

                }

                /*error_log(
                 *    'database (673) result_profile_count_ARRAY serial[' . 
                 *    self::$resp_serial . '] profile[' . 
                 *    $tmp_profile . '/' . 
                 *    $this->crc_int32($tmp_profile) . '] row[' . 
                 *    $ROWCNT . '] value[' . 
                 *    self::$result_profile_count_ARRAY[self::$resp_serial][$profile_crc] . 
                 *    '].');
                 */

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Testing scope. 
                 *
                 * I should be able to 
                 * access this guy from 
                 * the output 
                 * formatting method. 
                 *
                 */
                # [serial] [USER] [0] = $ROWCNT <- global raw array position
                #self::$result_profile_results_ARRAY[self::$resp_serial][$tmp_profile][self::$result_profile_count_ARRAY[self::$resp_serial][$tmp_profile]] = $ROWCNT;

                self::$oSQLMapper->updateProfileResults(
                                   self::$resp_serial, 
                                   $tmp_profile, 
                                   self::$result_profile_count_ARRAY[self::$resp_serial][$profile_crc], 
                                   $ROWCNT);

                self::$result_profile_count_ARRAY[self::$resp_serial][$profile_crc]++;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Record returned at row [' . 
                    $ROWCNT . 
                    '] has a field count which '.  
                    'is not represented by any ' . 
                    'provided profiles.');

            }

        }catch(\Exception $e){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Send this through the 
             * CLR-SSL Logging 
             * Services Layer. 
             *
             *
             * 5
             *
             */
            self::$R_logging->catch_exception(
                              $e, 
                              \LOG_ERR, 
                              __METHOD__, 
                              __NAMESPACE__);

        }

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * If this is going to 
     * CRNRSTN ::, methods such 
     * as this need to be 
     * made more generic. 
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
    function flag_isset_for_userClient(
             $serial, 
             $tmp_USERS_USERID, 
             $tmp_CLIENT_CLIENTID = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1159 hrs.
         *
         */

        $serial_crc = $this->crc_int32($serial);

        if(isset($tmp_CLIENT_CLIENTID)){

            if(isset(self::$flag_results[$serial_crc][$tmp_USERS_USERID][$tmp_CLIENT_CLIENTID])){

                return true;

            }else{

                return false;

            }

        }else{

            if(isset(self::$flag_results[$serial_crc][$tmp_USERS_USERID])){

                if(sizeof(self::$flag_results[$serial_crc][$tmp_USERS_USERID]) > 0){

                    return true;

                }else{

                    return false;

                }

            }else{

                return false;

            }

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
    function data_prep_flagUserAssociations(
             $serial, 
             $profile)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT().
         *       5 :: Monday, June 29, 2026 @ 1115 hrs.
         *
         */

        $serial_crc  = $this->crc_int32($serial);
        $profile_crc = $this->crc_int32($profile);

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * This method will perform 
             * data processing to flag 
             * user-client associations. 
             *
             */
            #$tmp_userClient[$adminContent_ARRAY[$i][$queryIndex_ARRAY['users_client_assoc_USER_ID']]][$adminContent_ARRAY[$i][$queryIndex_ARRAY['users_client_assoc_CLIENT_ID']]] = 1;
            if(!isset(self::$result_profile_count_ARRAY[$serial_crc][$profile_crc])){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('SELECT profile[' . 
                    $profile . 
                    '] has NULL count for response serial[' . 
                    $serial . 
                    '] which may be indication ' . 
                    'of an SQL error.');

            }else{

                $tmp_loop_size = self::$result_profile_count_ARRAY[$serial_crc][$profile_crc];
                for($i = 0; $i < $tmp_loop_size; $i++){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * For each user-client association. 
                     *
                     */
                    /*
                    $tmp_USER_ID_pointer_array   = self::$oSQLMapper->return_value_pointer_array(
                                                                      $serial, 
                                                                      $profile, 
                                                                      'USER_ID', 
                                                                      $i);
                    $tmp_CLIENT_ID_pointer_array = self::$oSQLMapper->return_value_pointer_array(
                                                                      $serial, 
                                                                      $profile, 
                                                                      'CLIENT_ID', 
                                                                      $i);
                     */
                    $tmp_USER_ID_pointer_array     = self::$oSQLMapper->return_value_pointer_array(
                                                                        $serial, 
                                                                        $profile, 
                                                                        'PROFILE_ID', 
                                                                        $i);
                    $tmp_CLIENT_ID_pointer_array   = self::$oSQLMapper->return_value_pointer_array(
                                                                        $serial, 
                                                                        $profile, 
                                                                        'LANG_ID', 
                                                                        $i);

                    $tmp_USER_ID   = self::$master_raw_response_ARRAY[self::$resp_serial][$tmp_USER_ID_pointer_array[0]][$tmp_USER_ID_pointer_array[1]];
                    $tmp_CLIENT_ID = self::$master_raw_response_ARRAY[self::$resp_serial][$tmp_CLIENT_ID_pointer_array[0]][$tmp_CLIENT_ID_pointer_array[1]];

                    self::$flag_results[$serial_crc][$tmp_USER_ID][$tmp_CLIENT_ID] = 1;

                }

            }

        }catch(\Exception $e){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Send this through the 
             * CLR-SSL Logging 
             * Services Layer. 
             *
             *
             * 5
             *
             */
            self::$R_logging->catch_exception(
                              $e, 
                              \LOG_ERR, 
                              __METHOD__, 
                              __NAMESPACE__);

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
    function return_UserClientAssocCnt(
             $serial, 
             $tmp_USERS_USERID)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT().
         *       5 :: Monday, June 29, 2026 @ 1200 hrs.
         *
         */

        return \sizeof(self::$flag_results[$this->crc_int32($serial)][$tmp_USERS_USERID]);

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
    function ping_user_client_assoc(
             $serial, 
             $userid, 
             $clientid)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT().
         *       5 :: Monday, June 29, 2026 @ 1200 hrs.
         *
         */

        if(isset(self::$flag_results[$this->crc_int32($serial)][$userid][$clientid])){

            return true;

        }else{

            return false;

        }

    }

    /**
     * R :: Calculate the crc32 polynomial of a string and return the same output for both 64 bit and 32 bit operating systems. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function crc_int32($str)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Copied the crc_int32() method 
         * definition from CRNRSTN :: to 
         * the jony5_database_response_manager 
         * class definition. 
         *
         * 
         * 5 :: Wednesday, July 1, 2026 @ 0452 hrs.
         *
         */

        /*
        SOURCE  :: https://www.php.net/manual/en/function.crc32.php
        COMMENT :: https://www.php.net/manual/en/function.crc32.php#79567
        AUTHOR  :: dave at jufer dot info
        
        This function returns the same 
        int value on a 64 bit mc. 
        like the crc32() function on 
        a 32 bit mc.

        dave at jufer dot info

        */

        $crc = \crc32($str);

        if($crc & 0x80000000){

            $crc ^= 0xffffffff;
            $crc += 1;
            $crc = -$crc;

        }

        return $crc;

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