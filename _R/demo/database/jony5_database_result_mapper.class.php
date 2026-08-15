<?php
/**
 * @package CRNRSTN

// 5 ::
// Code is Poetry */
# C # U # S # T # O # M # # R # E # S # O # U # R # C # E
#
#  CLASS :: database_result_mapper
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
class jony5_database_result_mapper 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Added the "jony5_" prefix to the
     *       registered class name, database_result_mapper,
     *       as taken from the Jony5.com production
     *       web site on Tuesday, November 11, 2025 @ 0401 hrs.
     *       Happy birthday to you, J5, my boy!
     *       11/11/2005 - 08/16/2021 @ 0345 hrs.
     *       5 :: Tuesday, November 11, 2025 @ 0602 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Replaced use of the 
     *       PHP native crc32() with
     *       jony5_database_result_mapper->crc_int32(). 
     *       5 :: Wednesday, July 1, 2026 @ 0503 hrs.
     *
     */

    private static $oLogger;

    private static $query_resp_field_viaPos = array();
    private static $resp_fieldPosition_viaFieldName = array();
    private static $select_statement_pos_ARRAY = array();
    private static $result_profile_results_ARRAY = array();
    private static $sql_select_ARRAY = array();

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
         * Instantiate the CLR-SSL 
         * Logging Services Layer. 
         *
         */
        self::$oLogger = new crnrstn_logging();

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
    function return_field_array(
             $serial, 
             $profile)
    {

        $serial_crc = $this->crc_int32($serial);

        if(isset($profile)){
            $profile_crc = $this->crc_int32($profile);

            return self::$query_resp_field_viaPos[$serial_crc][self::$select_statement_pos_ARRAY[$serial_crc][$profile_crc]];
        }else{

            //
            // FOR SITUATIONS WHERE WE ARE MERGING N+1 DATABASE RESPONSES AND THEY ALL HAVE SAME SQL...IT IS HANDY TO BE ABLE TO GET THAT DATA W/O NEEDING TO
            // KEEP TRACK OF WHERE WE ARE IN THE RESPONSE PROCESSING AND WHAT PROFILE THAT IS..EXACTLY...
            $tmp_array = self::$select_statement_pos_ARRAY[$serial_crc];
            foreach($tmp_array as $key=>$val){

                //
                // JUST RETURN THE FIRST SQL
                return self::$query_resp_field_viaPos[$serial_crc][$val];

            }
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
    function return_field_name(
             $serial, 
             $profile, 
             $position)
    {

        $serial_crc  = $this->crc_int32($serial);
        $profile_crc = $this->crc_int32($profile);

        return self::$query_resp_field_viaPos[$serial_crc][self::$select_statement_pos_ARRAY[$serial_crc][$profile_crc]][$position];

    }

//    public function return_field_position($serial, $profile, $fieldname){
//
//        $tmp_field_position = -1;
//
//        //
//        // RETURNS POSITION IN SELECT STATEMENT OF REQUESTED FIELD. -1 FOR NOT FOUND.
//        if(isset(self::$resp_fieldPosition_viaFieldName[$this->crc_int32($serial)][self::$select_statement_pos_ARRAY[$this->crc_int32($serial)][$this->crc_int32($profile)]][$this->crc_int32($fieldname)])){
//
//            $tmp_field_position = self::$resp_fieldPosition_viaFieldName[$this->crc_int32($serial)][self::$select_statement_pos_ARRAY[$this->crc_int32($serial)][$this->crc_int32($profile)]][$this->crc_int32($fieldname)];
//        }
//
//        return $tmp_field_position;
//    }

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
    function return_value_pointer_array(
             $serial, 
             $profile, 
             $fieldname, 
             $pos)
    {

        $serial    = $this->crc_int32($serial);
        $profile   = $this->crc_int32($profile);
        $fieldname = $this->crc_int32($fieldname);

        $tmp_return_array = array();  // WHY ARE THESE NOT BEING SERIALIZED? DATA STORAGE IS NOT PERSISTENT. NO NEED TO REMEMBER.
        $tmp_return_array[0] = self::$result_profile_results_ARRAY[$serial][$profile][$pos];  //ROWCNT
        $tmp_return_array[1] = self::$resp_fieldPosition_viaFieldName[$serial][self::$select_statement_pos_ARRAY[$serial][$profile]][$fieldname];  // FIELD

        return $tmp_return_array;

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
    function retrieve_row_coordinates(
             $serial, 
             $profile, 
             $pos)
    {

        $serial_crc  = $this->crc_int32($serial);
        $profile_crc = $this->crc_int32($profile);

        if(!isset(self::$result_profile_results_ARRAY[$serial_crc][$profile_crc][$pos])){

            error_log('database (77) ** result_profile_results_ARRAY UNDEFINED ** at position['.$pos.'] with serial['.$serial.'|'.$serial_crc.'] within the SELECT profile['.$profile.'|'.$profile_crc.'], and this has not been found. Response serial='.$serial);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * HOOOSTON, VE HAFF PROBLEM!
             * https://www.wired.com/2011/04/alt-text-spacecraft/
             *
             */
            throw new Exception('retrieve_row_coordinates() is asking for coordinates for ROWCNT at position['.$pos.'] with serial['.$serial_crc.'] within the SELECT profile['.$profile.'], and this has not been found within the SQL['.self::$sql_select_ARRAY[$serial_crc][self::$select_statement_pos_ARRAY[$serial_crc][$profile_crc]].']. Response serial='.$serial);
        }

        return self::$result_profile_results_ARRAY[$serial_crc][$profile_crc][$pos];

    }

    #('1234567qwerty','USER','FIRSTNAME',0)
    # THERE ARE 2 KINDS OF ROW COUNT. GLOBAL RAW ARRAY. AND TABLE SPECIFIC RECORD RETURN COUNT. LET'S KEEP THEM STRAIGHT.
    #$oDB_RESP->return_data_element($db_resp_process_serial, 'KIVOTOS_00', 'CLIENT_ID', 0);
    // THE DB IS RETURNING 11 ELEMENTS. THIS ERR IS ON THE LAST ITEM. TRYING TO RETRIEVE COORD FOR #11....WHICH IF START FROM 0 IS ACTUALLY THE 12TH ITEM...WHICH IS UNDEFINED.

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
    function retrieve_coordinates(
             $serial, 
             $profile, 
             $field, 
             $pos)
    {

        $tmp_coord_array = array();

        $serial_crc  = $this->crc_int32($serial);
        $profile_crc = $this->crc_int32($profile);
        $field_crc   = $this->crc_int32($field);

        if(!isset(self::$result_profile_results_ARRAY[$serial_crc][$profile_crc][$pos])){

            error_log('database (103) ** ' . 
                'result_profile_results_ARRAY Field[' . 
                $field . '/' . 
                $field_crc . '] UNDEFINED at position[' . 
                $pos . '] with serial[' . 
                $serial . '|' . 
                $serial_crc . 
                '] within the SELECT profile[' . 
                $profile . '|' . 
                $profile_crc . 
                '], and this has not been found. Response serial=');

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * HOOOSTON, VE HAFF PROBLEM!
             * https://www.wired.com/2011/04/alt-text-spacecraft/
             *
             */
            throw new Exception('You are asking for coordinates for ROWCNT at position[' . 
                $pos . '] with serial[' . 
                $serial_crc . '] within the SELECT profile[' . 
                $profile . '], and this has not been found within the SQL[' . 
                self::$sql_select_ARRAY[$serial_crc][self::$select_statement_pos_ARRAY[$serial_crc][$profile_crc]] . 
                ']. Response serial=' . $serial);

        }

        #error_log("database (84) serial[".$serial."|".$serial_crc."] profile[".$profile_crc."|".$profile."] pos[".$pos."] ");
        $tmp_coord_array[$serial_crc][0] = self::$result_profile_results_ARRAY[$serial_crc][$profile_crc][$pos];     // ROWCNT

        //
        // I WAS GETTING AN UNDEFINED ARRAY INDEX HERE. HAD TO UPDATE THE SQL HERE...(TO ADD `clients`.`LANGCODE`)..THAT CLEARED UP THE UNDEFINED.
        // THEN I ADDED THIS EXCEPTION TO ALERT ME TO THIS DIRECTLY SHOULD IT OCCUR AGAIN IN THE FUTURE.
        // WATCH....
        # [$resp_serial][SELECT_STATMENT][FIRSTNAME]
        if(!isset(self::$resp_fieldPosition_viaFieldName[$serial_crc][self::$select_statement_pos_ARRAY[$serial_crc][$profile_crc]][$field_crc])){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * HOOOSTON, VE HAFF PROBLEM!
             * https://www.wired.com/2011/04/alt-text-spacecraft/
             *
             */
            throw new Exception('You are asking for coordinates for field[' . 
                $field . '] within the SELECT profile[' . 
                $profile.'], and this has not been found within the SQL[' . 
                self::$sql_select_ARRAY[$serial_crc][self::$select_statement_pos_ARRAY[$serial_crc][$profile_crc]] . 
                ']. Response serial=' . $serial);

        }else{

            $tmp_coord_array[$serial_crc][1] = self::$resp_fieldPosition_viaFieldName[$serial_crc][self::$select_statement_pos_ARRAY[$serial_crc][$profile_crc]][$field_crc];     // FIELD

        }

        return $tmp_coord_array;

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
    function mapQueryData(
             $resp_serial, 
             $sql_select_array)
    {

        $tmp_select_tracker = array();

        //
        // MAP ALL QUERY DATA TO USABLE STRUCTURE FOR RESULT HANDLING
        self::$sql_select_ARRAY[$resp_serial] = $sql_select_array;
        $tmp_loop_size = sizeof(self::$sql_select_ARRAY[$resp_serial]);
        for($i=0;$i<$tmp_loop_size;$i++){

            //
            // BREAK OUT the "FROM" EXPRESSION SO THAT the SQL CAN BE CHECKSUMMED
            #$tmp_field_chop_array = explode('FROM', self::$sql_select_ARRAY[$resp_serial][$i]);
            $tmp_field_chop_array = preg_split("/ FROM /i", self::$sql_select_ARRAY[$resp_serial][$i]);  // CASE INSENSITIVE

            //
            // WE NEED TO OPTIMIZE FOR ACCELERATION OF RECURSIVE SITUATIONS
            // I CANNOT CHECKSUM THIS IN THE CURRENT CONDITION. WILL HAVE UNIQUE ID SO NEVER WILL THERE BE A CHECKSUM MATCH
            if(isset($tmp_select_tracker[$this->crc_int32($tmp_field_chop_array[0])])){

                //
                // WE HAVE SEEN THIS SQL BEFORE. USE SAME RESULTS.
                self::$query_resp_field_viaPos[$resp_serial][$i] = self::$query_resp_field_viaPos[$resp_serial][$tmp_select_tracker[$this->crc_int32($tmp_field_chop_array[0])]];
                self::$resp_fieldPosition_viaFieldName[$resp_serial][$i] = self::$resp_fieldPosition_viaFieldName[$resp_serial][$tmp_select_tracker[$this->crc_int32($tmp_field_chop_array[0])]];

                #error_log("database (174) mapQueryData() optimization run...");
            }else{
                $tmp_select_tracker[$this->crc_int32($tmp_field_chop_array[0])] = $i;

                self::$sql_select_ARRAY[$resp_serial][$i] = $this->sanitizeSelect($tmp_field_chop_array[0]);

                //
                // EXPLODE BY COMMA TO BREAK OUT FIELDS
                $tmp_field_chop_array = explode(',', self::$sql_select_ARRAY[$resp_serial][$i]);

                //
                // PROCESS EACH FIELD FOR:
                # - EXPLODE BY . AND KEEP [1] FOR FIELD NAME  # clients.CLIENT_ID
                $tmp_loop_size1 = sizeof($tmp_field_chop_array);
                for($ii=0;$ii<$tmp_loop_size1;$ii++){

                    //
                    // DO WE HAVE AN "AS" FIELD RENAME. IF SO, HANDLE IT.
                    $pos = stripos($tmp_field_chop_array[$ii], " AS ");
                    if ($pos !== false) {

                        //
                        // SPLIT FIELD BY AS AND TAKE SECOND INDEX FOR FIELD NAME
                        #$tmp_single_field_array = explode(' AS ', $tmp_field_chop_array[$ii]);
                        $tmp_single_field_array = preg_split("/ AS /i", $tmp_field_chop_array[$ii]);  // CASE INSENSITIVE

                        //
                        // TRIM SPACES
                        $tmp_single_field_array[1] = trim($tmp_single_field_array[1]);

                        //
                        // FOR EACH FIELD
                        # array[serial][select_CNT][field_position] = fieldname;
                        self::$query_resp_field_viaPos[$resp_serial][$i][$ii] = $tmp_single_field_array[1];                 // STORE FIELD NAME ACCESSED BY POSITION

                        # array[serial][select_CNT][field name] = field position;
                        # [$resp_serial][SELECT_STATMENT][FIRSTNAME] = 3
                        self::$resp_fieldPosition_viaFieldName[$resp_serial][$i][$this->crc_int32($tmp_single_field_array[1])] = $ii;        // STORE POSITION. NEED ACCESS BY FIELD NAME.

                    }else{

                        $tmp_single_field_array = explode('.', $tmp_field_chop_array[$ii]);

                        # $i = SELECT statement
                        # $ii = FIELD POSITION
                        # $tmp_single_field_array[1] = FIELD NAME FOR ACCESS

                        //
                        // FOR EACH FIELD
                        # array[serial][select_CNT][field_position] = fieldname;
                        self::$query_resp_field_viaPos[$resp_serial][$i][$ii] = $tmp_single_field_array[1];                 // STORE FIELD NAME ACCESSED BY POSITION

                        # array[serial][select_CNT][field name] = field position;
                        # [$resp_serial][SELECT_STATMENT][FIRSTNAME] = 3
                        self::$resp_fieldPosition_viaFieldName[$resp_serial][$i][$this->crc_int32($tmp_single_field_array[1])] = $ii;        // STORE POSITION. NEED ACCESS BY FIELD NAME.

                    }

                }

            }

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
    function updateProfileResults(
             $resp_serial, 
             $tmp_profile, 
             $count, 
             $ROWCNT)
    {
        # self::$resp_serial, $tmp_profile, self::$result_profile_count_ARRAY[self::$resp_serial][$tmp_profile], $ROWCNT

        self::$result_profile_results_ARRAY[$resp_serial][$this->crc_int32($tmp_profile)][$count] = $ROWCNT;

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
    function updateSelectPos(
             $serial, 
             $profile, 
             $pos)
    {

        self::$select_statement_pos_ARRAY[$this->crc_int32($serial)][$this->crc_int32($profile)] = $pos;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function sanitizeSelect($str)
    {

        $patterns = array();
        $patterns[0] = "`";
        #$patterns[1] = ' ';

        $replacements = array();
        $replacements[0] = '';
        #$replacements[1] = '';

        $str = str_replace($patterns, $replacements, $str);
        return $str;

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
         * the jony5_database_result_mapper 
         * class definition. 
         *
         * 
         * 5 :: Wednesday, July 1, 2026 @ 0453 hrs.
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