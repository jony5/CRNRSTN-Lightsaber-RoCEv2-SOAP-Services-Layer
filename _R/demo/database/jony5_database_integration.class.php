<?php
/**
 * @package CRNRSTN

// 5 ::
// Code is Poetry */
# C # U # S # T # O # M # # R # E # S # O # U # R # C # E
#
#  CLASS :: database_integration
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
class jony5_database_integration 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Added the "jony5_" prefix to the 
     *       registered class name, database_integration, 
     *       as taken from the Jony5.com production 
     *       web site on Tuesday, November 11, 2025 @ 0401 hrs. 
     *       Happy birthday to you, J5, my boy! 
     *       11/11/2005 - 08/16/2021 @ 0345 hrs. 
     *       5 :: Tuesday, November 11, 2025 @ 0600 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed 
     *       jony5_database_integration 
     *       class private static $oLogger 
     *       to $R_logging to align with 
     *       CRNRSTN :: and the CLR-SSL 
     *       Registry User. 
     *       5 :: Monday, June 29, 2026 @ 1455 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Upgraded 
     *       jony5_database_integration 
     *       class exception handling and  
     *       error logging to align with 
     *       CRNRSTN :: and the CLR-SSL 
     *       Registry User. 
     *       5 :: Monday, June 29, 2026 @ 1620 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed 
     *       jony5_database_integration 
     *       crcINT() implementations to crc_int32(). 
     *       5 :: Wednesday, July 1, 2026 @ 0501 hrs.
     *
     */

    private static $R_logging;
    private static $oDB_RESP;
    private static $mysqli;
    private static $result_MSGQUEUE_ARRAY = array();
    private static $result_UNSUB_ARRAY = array();
    private static $result_PWD_ARRAY = array();
    public $recursive_target_id_omit_flag = array();

    private static $query;
    private static $query_elements;
    private static $result;
    private static $result_ARRAY = array();
    private static $queryDescript_ARRAY = array();
    private static $query_exception_result = false;

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
        self::$R_logging = new crnrstn_logging();

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
    function processUserRequest(
             $queryType, 
             $oUser, 
             $oUserEnvironment)
    {

        return $this->executeQueryType(
                      $queryType, 
                      $oUser, 
                      $oUserEnvironment);

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
    function getDailyPodcast(
             $oUser, 
             $oUserEnvironment, 
             $contentType)
    {

        return $this->dbQuery(
                      $contentType, 
                      $oUserEnvironment, 
                      $oUser);

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
    function bassdrive_stream_social_sync(
             $oUser, 
             $oUserEnvironment, 
             $contentType)
    {

        return $this->dbQuery(
                      $contentType, 
                      $oUserEnvironment, 
                      $oUser);

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
    function bassdrive_stream_colors_sync(
             $oUser, 
             $oUserEnvironment, 
             $contentType)
    {

        return $this->dbQuery(
                      $contentType, 
                      $oUserEnvironment, 
                      $oUser);

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
    function bassdrive_stream_lookup_sync(
             $oUser, 
             $oUserEnvironment, 
             $contentType)
    {

        return $this->dbQuery(
                      $contentType, 
                      $oUserEnvironment, 
                      $oUser);

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
    function bassdrive_colors_presentation(
             $oUser, 
             $oUserEnvironment, 
             $contentType)
    {

        return $this->dbQuery(
                      $contentType, 
                      $oUserEnvironment, 
                      $oUser);

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
    function bassdrive_history_output(
             $oUser, 
             $oUserEnvironment, 
             $contentType)
    {

        return $this->dbQuery(
                      $contentType, 
                      $oUserEnvironment, 
                      $oUser);

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
    function bassdrive_colors_algorithm_output(
             $oUser, 
             $oUserEnvironment, 
             $contentType)
    {

        return $this->dbQuery(
                      $contentType, 
                      $oUserEnvironment, 
                      $oUser);

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
    function return_stream_social_association_ARRAY(
             $oUser, 
             $oUserEnvironment, 
             $contentType)
    {

        return $this->dbQuery(
                      $contentType, 
                      $oUserEnvironment, 
                      $oUser);

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
    function return_bassdrive_log_ojson(
             $oUser, 
             $oUserEnvironment, 
             $contentType)
    {

        return $this->dbQuery(
                      $contentType, 
                      $oUserEnvironment, 
                      $oUser);

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
    function return_bassdrive_ojson(
             $oUser, 
             $oUserEnvironment, 
             $contentType)
    {

        return $this->dbQuery(
                      $contentType, 
                      $oUserEnvironment, 
                      $oUser);

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
    function ttl_bassdriveData(
             $oUser, 
             $oUserEnvironment, 
             $contentType)
    {

        return $this->dbQuery(
                      $contentType, 
                      $oUserEnvironment, 
                      $oUser);

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
    function expire_ttl_bassdriveData(
             $oUser, 
             $oUserEnvironment, 
             $contentType)
    {

        return $this->dbQuery(
                      $contentType, 
                      $oUserEnvironment, 
                      $oUser);

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
    function bassdrive_stream_initialization(
             $oUser, 
             $oUserEnvironment, 
             $contentType)
    {

        return $this->dbQuery(
                      $contentType, 
                      $oUserEnvironment, 
                      $oUser);

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
    function bassdrive_serialize_streams(
             $oUser, 
             $oUserEnvironment, 
             $query_ARRAY)
    {

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Open a MySQL 
             * database connection. 
             *
             */
            self::$mysqli    = $oUserEnvironment->oMYSQLI_CONN_MGR->returnConnection();
            self::$query     = '';
            $tmp_query_count = 0;

            foreach($query_ARRAY as 
                $index => $query_string)
            {

                if($tmp_query_count < 500){

                    self::$query .= $query_string;

                }

                $tmp_query_count++;

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Process multi-query. 
             *
             */
            self::$mysqli = $oUserEnvironment->oMYSQLI_CONN_MGR->processMultiQuery(
                                                                 self::$mysqli, 
                                                                 self::$query);

            if(self::$mysqli->error){

                throw new Exception('Bassdrive serialization error :: [' . 
                    self::$mysqli->error . '].');

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

            return 'jony5 CRON fired error :: ' . 
                   $e->getMessage();

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
    function bassdrive_stream_history_update(
             $oUser, 
             $oCRNRSTN_ENV)
    {

        \date_default_timezone_set('America/New_York');
        $ts = \date("Y-m-d H:i:s", \time());

        $tmp_html         = $oUser->bassdrive_rebuild_stream_history_output();
        $tmp_log_activity = $oUser->bassdrive_history_activity_log();

        /*error_log('[mthd ' . 
         *    __METHOD__ . '] [lnum ' . 
         *    __LINE__ . 
         *    '] database html out len=' . 
         *    \strlen($tmp_html)); 
         *
         */

        if(\strlen($tmp_html) > 8000){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Open a MySQL 
             * database connection. 
             *
             */
            self::$mysqli = $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->returnConnection();

            // Update table. 
            self::$query = 'UPDATE `bassdrive_stream_history` ' . 
                           'SET ' . 
                               '`RAW_HTML` = "' . self::$mysqli->real_escape_string($tmp_html) . '", ' . 
                               '`DATEMODIFIED` = "' . $ts . '" ' . 
                           'WHERE `ID` = 1 ' . 
                           'LIMIT 1;';

            try{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Process query. 
                 *
                 */
                self::$result = $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->processQuery(
                                                                 self::$mysqli, 
                                                                 self::$query);

                if(self::$mysqli->error){

                    throw new Exception(self::$mysqli->error);

                }else{

                    return $tmp_log_activity;

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

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Close the database 
                 * connection. 
                 *
                 */
                $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->closeConnection(self::$mysqli);

                return 'jony5 CRON fired error :: ' . 
                       $e->getMessage();

            }

        }else{

            return NULL;

        }

        //http://jony5.com/_proxy/bassdrive_colors/?action=rebuild&cnt=4555

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
    function bassdrive_log_insert(
             $oUser, 
             $oCRNRSTN_ENV, 
             $contentType, 
             $programTitle)
    {

        try{

            \date_default_timezone_set('America/New_York');
            $ts = \date("Y-m-d H:i:s", \time());

            $serial = $oUser->generateNewKey(64);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Open a MySQL 
             * database connection. 
             *
             */
            self::$mysqli = $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->returnConnection();

            self::$query = 'INSERT INTO `log_bassdrive_program` ' . 
                               '(`SERIAL`, ' . 
                               '`PROGRAM_TITLE`, ' . 
                               '`STREAM_RELAY_JSON`, ' . 
                               '`DATEMODIFIED`) ' . 
                           'VALUES ' . 
                               '("' . $serial . '", ' . 
                               '"' . self::$mysqli->real_escape_string($programTitle) . '", ' . 
                               '"' . self::$mysqli->real_escape_string($oUser->bassdrive_stream_ojson) . '", ' . 
                               '"' . $ts . '");';

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Process query. 
             *
             */
            self::$result = $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->processQuery(
                                                             self::$mysqli, 
                                                             self::$query);

            if(self::$mysqli->error){

                throw new Exception($contentType . ' error :: [' . 
                    self::$mysqli->error . '].');

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Close the database 
                 * connection. 
                 *
                 */
                $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->closeConnection(self::$mysqli);

                return NULL;

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

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Close the database 
             * connection. 
             *
             */
            $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->closeConnection(self::$mysqli);

            return 'jony5 CRON fired error :: ' . 
                   $e->getMessage();

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
    function bassdrive_track(
             $oUser, 
             $oCRNRSTN_ENV, 
             $contentType, 
             $programTitle)
    {

        try{

            \date_default_timezone_set('America/New_York');
            $ts = \date("Y-m-d H:i:s", \time());

            $serial = $oUser->generateNewKey(64);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Open a MySQL 
             * database connection. 
             *
             */
            self::$mysqli = $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->returnConnection();

            self::$query = 'INSERT INTO `log_bassdrive_program` ' . 
                               '(`SERIAL`, ' . 
                               '`PROGRAM_TITLE`, ' . 
                               '`STREAM_RELAY_JSON`, ' . 
                               '`DATEMODIFIED`) ' . 
                            'VALUES ' . 
                               '("' . $serial . '", ' . 
                               '"' . self::$mysqli->real_escape_string($programTitle) . '", ' . 
                               '"' . self::$mysqli->real_escape_string($oUser->relay_ojson) . '", ' . 
                               '"' . $ts . '");';

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Process query. 
             *
             */
            self::$result = $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->processQuery(
                                                             self::$mysqli, 
                                                             self::$query);

            if(self::$mysqli->error){

                throw new Exception($contentType . 
                    ' error :: [' . 
                    self::$mysqli->error . '].');

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Rebuild and cache HTML output. 
                 *
                 */
                $db_result = $oUser->bassdrive_stream_history_update();

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Close the database 
                 * connection. 
                 *
                 */
                $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->closeConnection(self::$mysqli);

                // Return result set data. 
                return 'success - [' . 
                       $programTitle . '] @ ' . 
                       $ts . '<br>:: :: :: :: ::<br>' . 
                       $db_result;

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

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Close the database 
             * connection. 
             *
             */
            $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->closeConnection(self::$mysqli);

            return 'jony5 CRON fired error :: ' . 
                   $e->getMessage();

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
    function rotateDailyPodcast(
             $oUser, 
             $oUserEnvironment, 
             $contentType)
    {

        return $this->dbQuery(
                      $contentType, 
                      $oUserEnvironment, 
                      $oUser);

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
    function svc_postUserFeedback(
             $oUser, 
             $oUserEnvironment)
    {

        return $this->dbQuery(
                      'post_feedback', 
                      $oUserEnvironment, 
                      $oUser);

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
    private function executeQueryType(
                     $queryType, 
                     $oUser, 
                     $oUserEnvironment)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of PHP crc32() 
         *       with $this->crcINT() in 
         *       SQL query string generation. 
         *       5 :: Monday, June 29, 2026 @ 0734 hrs.
         *
         */

        try{

            // 5 :: Monday, June 29, 2026 @ 1406 hrs.
            $clr_ssl_msg = 'jony5 queryType sent to user ' . 
                           'database_integrations class object :: ' . 
                           $queryType . 
                           ' from [' . 
                           $_SERVER['REMOTE_ADDR'] . 
                           '].';
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
            
            #$ts = date("Y-m-d H:i:s", time() - 60 * 60 * 4);
            $ts = \date("Y-m-d H:i:s", \time());

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * If we ever need to connect to 
             * more than 1 database in a 
             * request...
             *
             * Well, we need to wire in MySQLi 
             * connection reset boolean 
             * for now, the performance boost 
             * from maintaining connection 
             * persist is worth it. 
             *
             * We can add multi-database 
             * support later. 
             *
             */
            //if(isset(self::$mysqli)){
            if(!self::$mysqli->ping()){

                /*error_log("database (1441) " . 
                 *   "mysqli->I will open a " . 
                 *   "new connection now! " . 
                 *   "ping()==FALSE");
                 */

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Open a MySQL 
                 * database connection. 
                 *
                 */
                self::$mysqli = $oUserEnvironment->oMYSQLI_CONN_MGR->returnConnection();

            } /* else{

                /*error_log("database (1447) " . 
                 *   "mysqli->I will open a new " . 
                 *   "connection now! ...mysqli not set");
                 */

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Open a MySQL 
                 * database connection. 
                 *
                 *
                self::$mysqli = $oUserEnvironment->oMYSQLI_CONN_MGR->returnConnection();

            }

             */

            if(!isset($oDB_RESP)){

                if(!isset(self::$oDB_RESP)){

                    /* error_log("database (1830) executeRequest() " . 
                     *     "Notice :: We are instantiating a " . 
                     *     "clean oDB_RESP object for querytype[" . 
                     *     $queryType . 
                     *     "] Why not recycle?");
                     *
                     */
                    self::$oDB_RESP = new jony5_database_response_manager(
                                          $oUserEnvironment, 
                                          $this);

                    $oDB_RESP       = self::$oDB_RESP;

                }else{

                    $oDB_RESP = self::$oDB_RESP;

                }

            }

            $tmp_query = '';

            switch($queryType){
                case 'showovrly_fullscrn':
                case 'hideovrly_fullscrn':
                case 'bluescrn':
                case 'whitescrn':
                case 'blackscrn':
                case 'hideovrly_rt':
                case 'hideovrly_kt':
                case 'hideovrly_pt':
                case 'hidetmr_r':
                case 'hidetmr_k':
                case 'hidetmr_p':
                case 'showtmr':
                case 'show_overlay':

                    $tmp_ISACTIVE   = NULL;
                    $tmp_modifierid = $oUser->generateNewKey(70);

                    /*
                    <div class="admin_section_title">Manage Mini Overlay</div>
                    <div class="mgmt_lnk_btn" onclick="applyUpdate(this);" avreqid="hideovrly_rt">HIDE OVERLAY - RESET TIMER</div>
                    <div class="mgmt_lnk_btn" onclick="applyUpdate(this);" avreqid="hideovrly_kt">HIDE OVERLAY - KEEP UP WITH TIMER</div>
                    <div class="mgmt_lnk_btn" onclick="applyUpdate(this);" avreqid="hideovrly_pt">HIDE OVERLAY - PAUSE TIMER</div>

                    <div class="admin_section_title">Timer Controls</div>
                    <div class="mgmt_lnk_btn" onclick="applyUpdate(this);" avreqid="hidetmr_r">HIDE TIMER AND RESET TO 00:00</div>
                    <div class="mgmt_lnk_btn" onclick="applyUpdate(this);" avreqid="hidetmr_k">HIDE TIMER AND KEEP UP WITH IT</div>
                    <div class="mgmt_lnk_btn" onclick="applyUpdate(this);" avreqid="hidetmr_p

                    MINI_STATE tinyint (1)
                    [1=FULLACTIVE,
                     5=ACTIVESANSTIMER,
                     8=ACTIVESANSTIMERRESETONDISPLAY,
                     7=ACTIVESANSTIMERBUTKEEPTIME
                     6=ACTIVESANSTIMERPAUSETIME

                    0=HIDDENTIMERNOTOUCHY,
                    3=HIDDENRESETTIMERONDISPLAY,
                    2=HIDDENPAUSETIMER]

                    FULLSCREEN_STATE tinyint (1)
                    [1=FULLACTIVE,
                     5=WHITEOUT,
                     8=HIDDEN,
                     9=BLUEOUT,
                     7=BLACKOUT]

                    */

                    switch($queryType){
                        case 'showovrly_fullscrn':
                        case 'hideovrly_fullscrn':
                        case 'bluescrn':
                        case 'whitescrn':
                        case 'blackscrn':

                            $tmp_type = 'full';

                        break;
                        default:

                            $tmp_type = 'mini';

                        break;

                    }

                    switch($queryType){
                        case 'showovrly_fullscrn':

                            $tmp_ISACTIVE = '1';

                        break;
                        case 'hideovrly_fullscrn':

                            $tmp_ISACTIVE = '3';

                        break;
                        case 'bluescrn':

                            $tmp_ISACTIVE = '4';

                        break;
                        case 'whitescrn':

                            $tmp_ISACTIVE = '5';

                        break;
                        case 'blackscrn':

                            $tmp_ISACTIVE = '6';

                        break;
                        case 'hideovrly_rt':

                            $tmp_ISACTIVE = '3';

                        break;
                        case 'hideovrly_kt':

                            $tmp_ISACTIVE = '0';

                        break;
                        case 'hideovrly_pt':

                            $tmp_ISACTIVE = '2';

                        break;
                        case 'hidetmr_r':

                            $tmp_ISACTIVE = '8';

                        break;
                        case 'hidetmr_k':

                            $tmp_ISACTIVE = '7';

                        break;
                        case 'hidetmr_p':

                            $tmp_ISACTIVE = '6';

                        break;
                        case 'showtmr':

                            $tmp_ISACTIVE = '4';

                        break;
                        case 'show_overlay':

                            $tmp_ISACTIVE = '5';

                        break;
                        default:

                            throw new Exception('Unknown ISACTIVE state [' . 
                                $queryType . '] sent to database.');

                        break;

                    }

                    if(isset($tmp_ISACTIVE) && 
                        ($tmp_type == 'mini'))
                    {

                        switch($queryType){
                            case 'hideovrly_rt':
                            case 'hideovrly_kt':
                            case 'hideovrly_pt':

                                self::$query = 'UPDATE `cia00_overlay_state` ' . 
                                               'SET `MINI_STATE` = "0", ' . 
                                                   '`MODIFIER_ID` = "' . $tmp_modifierid . '", ' . 
                                                   '`MODIFIER_IP` = INET_ATON("' . 
                                                   $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                                   '`MODIFIER_SESSION_ID` = "' . 
                                                   \session_id() . '", ' . 
                                                   '`DATEMODIFIED` = "' . $ts . '" ' . 
                                               'LIMIT 1;';

                            break;
                            case 'hidetmr_r':
                            case 'hidetmr_k':
                            case 'hidetmr_p':

                                self::$query = 'UPDATE `cia00_overlay_state` ' . 
                                               'SET `MINI_TIMER_STATE` = "0", ' . 
                                                   '`MODIFIER_ID` = "' . $tmp_modifierid . '", ' . 
                                                   '`MODIFIER_IP` = INET_ATON("' . 
                                                   $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                                   '`MODIFIER_SESSION_ID` = "' . 
                                                   \session_id() . '", ' . 
                                                   '`DATEMODIFIED` = "' . $ts . '" ' . 
                            					   'LIMIT 1;';

                            break;
                            case 'showtmr':

                                self::$query = 'UPDATE `cia00_overlay_state` ' . 
                                               'SET `MINI_TIMER_STATE` = "1", ' . 
                                                   '`MODIFIER_ID` = "' . $tmp_modifierid . '", ' . 
                                                   '`MODIFIER_IP` = INET_ATON("' . 
                                                   $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                                   '`MODIFIER_SESSION_ID` = "' . 
                                                   \session_id() . '", ' . 
                                                   '`DATEMODIFIED` = "' . $ts . '" ' . 
                            					'LIMIT 1;';

                            break;
                            case 'show_overlay':

                                self::$query = 'UPDATE `cia00_overlay_state` ' . 
                                               'SET `MINI_STATE` = "1", ' . 
                                                   '`MODIFIER_ID` = "' . 
                                                   $tmp_modifierid . '", ' . 
                                                   '`MODIFIER_IP` = INET_ATON("' . 
                                                   $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                                   '`MODIFIER_SESSION_ID` = "' . 
                                                   \session_id() . '", ' . 
                                                   '`DATEMODIFIED` = "' . $ts . '" ' . 
                            					'LIMIT 1;';

                            break;
                            default:

                                self::$query = '';

                            break;

                        }

                        $tmp_activityid = $oUser->generateNewKey(70);

                        $tmp_activity_descript = 'A ' . $tmp_type . 
                                                 ' overlay UPDATE (<span class=\'a_log_topic_name\'>' . 
                                                 $queryType . 
                                                 '</span>) has been received.';

                        self::$query .= 'INSERT INTO `cia00_log_sys_user` ' . 
                                            '(`ACTIVITY_ID`, ' . 
                                            '`MODIFIER_ID`, ' . 
                                            '`MODIFIER_ID_CRC32`, ' . 
                                            '`ACTIVITY_DESCRIPTION`, ' . 
                                            '`ACTIVITY_DESCRIPTION_BLOB`, ' . 
                                            '`PHPSESSION`, ' . 
                                            '`IPADDRESS`, ' . 
                                            '`HTTP_USER_AGENT`, ' . 
                                            '`CHANNEL`) ' . 
                                        'VALUES ( ' . 
                                            '"' . $tmp_activityid . '", ' . 
                                            '"' . $tmp_modifierid . '", ' . 
                                            '"' . $this->crc_int32($tmp_modifierid) . '", ' . 
                                            '"' . self::$mysqli->real_escape_string($tmp_activity_descript) . '", ' . 
                                            '"' . self::$mysqli->real_escape_string($tmp_activity_descript) . '", ' . 
                                            '"' . \session_id() . '", ' . 
                                            'INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                            '"' . $_SERVER['HTTP_USER_AGENT'] . '", ' . 
                                            '"D");';

                        self::$mysqli = $oUserEnvironment->oMYSQLI_CONN_MGR->processMultiQuery(
                                                                             self::$mysqli, 
                                                                             self::$query);

                        #error_log("database (1125) query->" . self::$query);

                        if(self::$mysqli->error){

                            self::$query_exception_result = "overlay_update=error";
                            throw new Exception('mini overlay :: ' . 
                                $queryType . ' error :: [' . 
                                self::$mysqli->error . '].');

                        }else{

                            //do {
                            //} while (self::$mysqli->more_results() && self::$mysqli->next_result());

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * XML sync. 
                             *
                             */
                            $this->syncXML(
                                   $tmp_type, 
                                   $queryType, 
                                   $oUser, 
                                   $oUserEnvironment);

                            return 'success';

                        }

                    }

                    if(isset($tmp_ISACTIVE) && 
                        ($tmp_type == 'full'))
                    {

                        self::$query = 'UPDATE `cia00_overlay_state` ' . 
                                       'SET ' . 
                                           '`FULLSCREEN_STATE` = "' . $tmp_ISACTIVE . '", ' . 
                                           '`MODIFIER_ID` = "' . $tmp_modifierid . '", ' . 
                                           '`MODIFIER_IP` = INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                           '`MODIFIER_SESSION_ID` = "' . \session_id() . '", ' . 
                                           '`DATEMODIFIED` = "' . $ts . '" ' . 
                                       'LIMIT 1;';

                        $tmp_activityid = $oUser->generateNewKey(70);

                        $tmp_activity_descript = 'A ' . 
                                                 $tmp_type . 
                                                 ' overlay UPDATE (<span class=\'a_log_topic_name\'>' . 
                                                 $queryType . 
                                                 '</span>) has been received.';

                        self::$query .= 'INSERT INTO `cia00_log_sys_user` ' . 
                                           '(`ACTIVITY_ID`, ' . 
                                           '`MODIFIER_ID`, ' . 
                                           '`MODIFIER_ID_CRC32`, ' . 
                                           '`ACTIVITY_DESCRIPTION`, ' . 
                                           '`ACTIVITY_DESCRIPTION_BLOB`, ' . 
                                           '`PHPSESSION`, ' . 
                                           '`IPADDRESS`, ' . 
                                           '`HTTP_USER_AGENT`, ' . 
                                           '`CHANNEL`)' . 
                                        'VALUES ' . 
                                           '("' . $tmp_activityid . '", ' . 
                                           '"' . $tmp_modifierid . '", ' . 
                                           '"' . $this->crc_int32($tmp_modifierid) . '", ' . 
                                           '"' . self::$mysqli->real_escape_string($tmp_activity_descript) . '", ' . 
                                           '"' . self::$mysqli->real_escape_string($tmp_activity_descript) . '", ' . 
                                           '"' . \session_id() . '", ' . 
                                           'INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                           '"' . $_SERVER['HTTP_USER_AGENT'] . '", ' . 
                                           '"D");';

                        self::$mysqli = $oUserEnvironment->oMYSQLI_CONN_MGR->processMultiQuery(
                                                                             self::$mysqli, 
                                                                             self::$query);

                        #error_log("database (1125) query->" . self::$query);

                        if(self::$mysqli->error){

                            self::$query_exception_result = 'overlay_update=error';
                            throw new Exception('full screen overlay :: ' . 
                                $queryType . 
                                ' error :: [' . 
                                self::$mysqli->error . '].');

                        }else{

                            //do{
                            //} while (self::$mysqli->more_results() && self::$mysqli->next_result());

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * XML sync. 
                             *
                             */
                            $this->syncXML(
                                   $tmp_type, 
                                   $queryType, 
                                   $oUser, 
                                   $oUserEnvironment);

                            return 'success';

                        }

                    }

                    return 'err';

                break;
                case 'activate_full_profile':

                    $tmp_activityid = $oUser->generateNewKey(70);
                    $tmp_modifierid = $oUser->generateNewKey(70);

                    $tmp_activity_descript = 'A full screen overlay profile ' . 
                                             '(<span class=\'a_log_topic_name\'>' . 
                                             $oUser->retrieve_Form_Data('NAME') . 
                                             '</span>) has been made active.';

                    self::$query = 'UPDATE `cia00_overlay_state` ' . 
                                   'SET ' . 
                                       '`FULLSCREEN_PROFILE_ID` = "' . 
                                       $oUser->retrieve_Form_Data('PROFILE_ID') . '", ' . 
                                       '`MODIFIER_ID` = "' . $tmp_modifierid . '", ' . 
                                       '`MODIFIER_IP` = INET_ATON("' . 
                                       $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                       '`MODIFIER_SESSION_ID` = "' . 
                                       \session_id() . '", ' . 
                                       '`DATEMODIFIED` = "' . $ts . '" ' . 
                                       'LIMIT 1;';

                    self::$query .= 'INSERT INTO `cia00_log_sys_user` ' . 
                                        '(`ACTIVITY_ID`, ' . 
                                        '`MODIFIER_ID`, ' . 
                                        '`MODIFIER_ID_CRC32`, ' . 
                                        '`FULL_SCRN_PROFILE_ID`, ' . 
                                        '`FULL_SCRN_PROFILE_ID_CRC32`, ' . 
                                        '`ACTIVITY_DESCRIPTION`, ' . 
                                        '`ACTIVITY_DESCRIPTION_BLOB`, ' . 
                                        '`PHPSESSION`, ' . 
                                        '`IPADDRESS`, ' . 
                                        '`HTTP_USER_AGENT`, ' . 
                                        '`CHANNEL`) ' . 
                                    'VALUES ' . 
                                        '("' . $tmp_activityid . '", ' . 
                                        '"' . $tmp_modifierid . '", ' . 
                                        '"' . $this->crc_int32($tmp_modifierid) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data('PROFILE_ID')) . '", ' . 
                                        '"' . $this->crc_int32($oUser->retrieve_Form_Data('PROFILE_ID')) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($tmp_activity_descript) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($tmp_activity_descript) . '", ' . 
                                        '"' . \session_id() . '", ' . 
                                        'INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                        '"' . $_SERVER['HTTP_USER_AGENT'] . '", ' . 
                                        '"D");';

                    //error_log(self::$query);

                    self::$mysqli = $oUserEnvironment->oMYSQLI_CONN_MGR->processMultiQuery(
                                                                         self::$mysqli, 
                                                                         self::$query);

                    if(self::$mysqli->error){

                        self::$query_exception_result = 'full_overlay_select=error';
                        throw new Exception('full_overlay_select :: ' . 
                            $queryType . ' error :: [' . 
                            self::$mysqli->error . '].');

                    }else{

                        return 'success';

                    }

                break;
                case 'activate_mini_profile':

                    $tmp_activityid = $oUser->generateNewKey(70);
                    $tmp_modifierid = $oUser->generateNewKey(70);

                    $tmp_activity_descript = 'A mini overlay profile ' . 
                                             '(<span class=\'a_log_topic_name\'>' . 
                                             $oUser->retrieve_Form_Data('NAME') . 
                                             '</span>) has been made active.';

                    self::$query = 'UPDATE `cia00_overlay_state` ' . 
                                   'SET ' . 
                                       '`MINI_PROFILE_ID` = "' . $oUser->retrieve_Form_Data('PROFILE_ID') . '", ' . 
                                       '`MODIFIER_ID` = "' . $tmp_modifierid . '", ' . 
                                       '`MODIFIER_IP` = INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                       '`MODIFIER_SESSION_ID` = "' . \session_id() . '", ' . 
                                       '`DATEMODIFIED` = "' . $ts . '" ' . 
            					   'LIMIT 1;';

                    self::$query .= 'INSERT INTO `cia00_log_sys_user` ' . 
                                        '(`ACTIVITY_ID`, ' . 
                                        '`MODIFIER_ID`, ' . 
                                        '`MODIFIER_ID_CRC32`, ' . 
                                        '`MINI_PROFILE_ID`, ' . 
                                        '`MINI_PROFILE_ID_CRC32`, ' . 
                                        '`ACTIVITY_DESCRIPTION`, ' . 
                                        '`ACTIVITY_DESCRIPTION_BLOB`, ' . 
                                        '`PHPSESSION`, ' . 
                                        '`IPADDRESS`, ' . 
                                        '`HTTP_USER_AGENT`, ' . 
                                        '`CHANNEL`) ' .  
                                    'VALUES ' . 
                                        '("' . $tmp_activityid . '", ' . 
                                        '"' . $tmp_modifierid . '", ' . 
                                        '"' . $this->crc_int32($tmp_modifierid) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data('PROFILE_ID')) . '", ' . 
                                        '"' . $this->crc_int32($oUser->retrieve_Form_Data('PROFILE_ID')) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($tmp_activity_descript) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($tmp_activity_descript) . '", ' . 
                                        '"' . \session_id() . '", ' . 
                                        'INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                        '"' . $_SERVER['HTTP_USER_AGENT'] . '", ' . 
                                        '"D");';

                    //error_log(self::$query);

                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processMultiQuery(
                                                                         self::$mysqli, 
                                                                         self::$query);
                    if(self::$mysqli->error){

                        self::$query_exception_result = 'mini_overlay_select=error';
                        throw new Exception('mini_overlay_select :: ' . 
                            $queryType . 
                            ' error :: [' . 
                            self::$mysqli->error . '].');

                    }else{

                        return 'success'; 

                    }

                break;
                case 'new_fullscreen_profile':

                    /* 
                    self::$http_param_handle["PROFILE_NAME"] = self::$oUserEnvironment->oHTTP_MGR->extractData($_POST, 'profilename');
                    self::$http_param_handle["PAGE_HEADER"]  = self::$oUserEnvironment->oHTTP_MGR->extractData($_POST, 'pagehdr');
                    self::$http_param_handle["PAGE_TITLE"]   = self::$oUserEnvironment->oHTTP_MGR->extractData($_POST, 'pagetitle');
                    self::$http_param_handle["PAGE_CODE"]    = self::$oUserEnvironment->oHTTP_MGR->extractData($_POST, 'pagecode');
                    self::$http_param_handle["FONT_SIZE"]    = self::$oUserEnvironment->oHTTP_MGR->extractData($_POST, 'fontsize');
                    self::$http_param_handle["LANG_ID"]      = self::$oUserEnvironment->paramTunnelDecrypt(self::$oUserEnvironment->oHTTP_MGR->extractData($_POST, 'lang_code'));

                    "' . self::$mysqli->real_escape_string($this->clearDblBR($oUser->retrieve_Form_Data('PAGE_HEADER'))) . '",
                    "' . self::$mysqli->real_escape_string($this->clearDblBR($oUser->retrieve_Form_Data('PAGE_HEADER'))) . '",
                    "' . self::$mysqli->real_escape_string($this->clearDblBR($oUser->retrieve_Form_Data('PAGE_TITLE'))) . '",
                    "' . self::$mysqli->real_escape_string($this->clearDblBR($oUser->retrieve_Form_Data('PAGE_TITLE'))) . '",
                    "' . self::$mysqli->real_escape_string($this->clearDblBR($oUser->retrieve_Form_Data('PAGE_CODE'))) . '",

                    "' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("PAGE_HEADER")) . '",
                    "' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("PAGE_TITLE")) . '",
                    "' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("PAGE_CODE")) . '",

                    */

                    $tmp_profileid  = $oUser->generateNewKey(70);
                    $tmp_copyid     = $oUser->generateNewKey(70);
                    $tmp_creatorid  = $oUser->generateNewKey(70);
                    $tmp_activityid = $oUser->generateNewKey(70);
                    $tmp_modifierid = $tmp_creatorid;

                    $tmp_activity_descript = 'A new full screen overlay ' . 
                                             'profile (<span class=\'a_log_topic_name\'>' . 
                                             $oUser->retrieve_Form_Data('PROFILE_NAME') . 
                                             '</span>) has been created.';

                    self::$query = 'INSERT INTO `cia00_overlay_fullscrn_profile` ' . 
                                        '(`PROFILE_ID`, ' . 
                                        '`PROFILE_ID_CRC32`, ' . 
                                        '`PROFILE_NAME`, ' . 
                                        '`CREATOR_ID`, ' . 
                                        '`CREATOR_IP`, ' . 
                                        '`CREATOR_SESSION_ID`, ' . 
                                        '`MODIFIER_ID`, ' . 
                                        '`MODIFIER_IP`, ' . 
                                        '`MODIFIER_SESSION_ID`, ' . 
                                        '`DATEMODIFIED`) 
                                    VALUES ' . 
                                        '("' . $tmp_profileid . '", ' . 
                                        '"' . $this->crc_int32($tmp_profileid) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("PROFILE_NAME")) . '", ' . 
                                        '"' . $tmp_creatorid . '", ' . 
                                        'INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                        '"' . \session_id() . '", ' . 
                                        '"' . $tmp_modifierid . '", ' . 
                                        'INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                        '"' . \session_id() . '", ' . 
                                        '"' . $ts . '");';

                    self::$query .= 'INSERT INTO `cia00_lang_copy` ' . 
                                        '(`COPY_ID`, ' . 
                                        '`PROFILE_ID`, ' . 
                                        '`PROFILE_TYPE`, ' . 
                                        '`LANG_ID`, ' . 
                                        '`FONT_SIZE`, ' . 
                                        '`PAGE_HEADER`, ' . 
                                        '`PAGE_HEADER_BLOB`, ' . 
                                        '`PAGE_TITLE`, ' . 
                                        '`PAGE_TITLE_BLOB`, ' . 
                                        '`PAGE_CODE_BLOB`, ' . 
                                        '`CREATOR_ID`, ' . 
                                        '`CREATOR_IP`, ' . 
                                        '`CREATOR_SESSION_ID`, ' . 
                                        '`MODIFIER_ID`, ' . 
                                        '`MODIFIER_IP`, ' . 
                                        '`MODIFIER_SESSION_ID`, ' . 
                                        '`DATEMODIFIED`) ' . 
                                    'VALUES ' . 
                                        '("' . $tmp_copyid . '", ' . 
                                        '"' . $tmp_profileid . '", ' . 
                                        '"full", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("LANG_ID")) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("FONT_SIZE")) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("PAGE_HEADER")) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("PAGE_HEADER")) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("PAGE_TITLE")) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("PAGE_TITLE")) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("PAGE_CODE")) . '", ' . 
                                        '"' . $tmp_creatorid . '", ' . 
                                        'INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                        '"' . \session_id() . '", ' . 
                                        '"' . $tmp_modifierid . '", ' . 
                                        'INET_ATON("'.$_SERVER['REMOTE_ADDR'] . '"), ' . 
                                        '"' . \session_id() . '", ' . 
                                        '"' . $ts . '");';

                    self::$query .= 'INSERT INTO `cia00_log_sys_user` ' . 
                                        '(`ACTIVITY_ID`, ' . 
                                        '`MODIFIER_ID`, ' . 
                                        '`MODIFIER_ID_CRC32`, ' . 
                                        '`FULL_SCRN_PROFILE_ID`, ' . 
                                        '`FULL_SCRN_PROFILE_ID_CRC32`, ' . 
                                        '`ACTIVITY_DESCRIPTION`, ' . 
                                        '`ACTIVITY_DESCRIPTION_BLOB`, ' . 
                                        '`PHPSESSION`, ' . 
                                        '`IPADDRESS`, ' . 
                                        '`HTTP_USER_AGENT`, ' . 
                                        '`CHANNEL`) ' . 
                                    'VALUES' . 
                                        '("' . $tmp_activityid . '", ' . 
                                        '"' . $tmp_modifierid . '", ' . 
                                        '"' . $this->crc_int32($tmp_modifierid) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($tmp_profileid) . '", ' . 
                                        '"' . $this->crc_int32($tmp_profileid) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($tmp_activity_descript) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($tmp_activity_descript) . '", ' . 
                                        '"' . \session_id() . '", ' . 
                                        'INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                        '"' . $_SERVER['HTTP_USER_AGENT'] . '", ' . 
                                        '"D");';

                    self::$mysqli = $oUserEnvironment->oMYSQLI_CONN_MGR->processMultiQuery(
                                                                         self::$mysqli, 
                                                                         self::$query);

                    if(self::$mysqli->error){

                        self::$query_exception_result = 'new_fullscrn_profile=error';
                        throw new Exception('new_fullscrn_profile :: ' . 
                            $queryType . 
                            ' error :: [' . 
                            self::$mysqli->error . '].');

                    }else{

                        /*
                        do{
                        } while (self::$mysqli->more_results() && self::$mysqli->next_result());

                        */

                        return "success";

                    }

                break;
                case 'new_mini_profile':

                    $tmp_profileid  = $oUser->generateNewKey(70);
                    $tmp_creatorid  = $oUser->generateNewKey(70);
                    $tmp_copyid     = $oUser->generateNewKey(70);
                    $tmp_activityid = $oUser->generateNewKey(70);
                    $tmp_modifierid = $tmp_creatorid;

                    $tmp_activity_descript = "A new mini overlay profile " . 
                                             "(<span class='a_log_topic_name'>" . 
                                             $oUser->retrieve_Form_Data('PROFILE_NAME') . 
                                             "</span>) has been created.";

                    self::$query = 'INSERT INTO `cia00_overlay_mini_profile` ' . 
                                       '(`PROFILE_ID`, ' . 
                                       '`PROFILE_ID_CRC32`, ' . 
                                       '`PROFILE_NAME`, ' . 
                                       '`MESSAGE_TITLE`, ' . 
                                       '`MESSAGE_TITLE_BLOB`, ' . 
                                       '`MESSAGE_NUMBER`, ' . 
                                       '`MESSAGE_NUMBER_BLOB`, ' . 
                                       '`MESSAGE_SPEAKER`, ' . 
                                       '`MESSAGE_SPEAKER_BLOB`, ' . 
                                       '`CONFERENCE_TITLE`, ' . 
                                       '`CONFERENCE_TITLE_BLOB`, ' . 
                                       '`OVERLAY_HEIGHT`, ' . 
                                       '`OVERLAY_WIDTH`, ' . 
                                       '`INNER_CONTENT_WIDTH`, ' . 
                                       '`MARGIN_LEFT`, ' . 
                                       '`MARGIN_RIGHT`, ' . 
                                       '`ABS_PX_FROM_TOP`, ' . 
                                       '`ABS_PX_FROM_LEFT`, ' . 
                                       '`CREATOR_ID`, ' . 
                                       '`CREATOR_IP`, ' . 
                                       '`CREATOR_SESSION_ID`, ' . 
                                       '`MODIFIER_ID`, ' . 
                                       '`MODIFIER_IP`, ' . 
                                       '`MODIFIER_SESSION_ID`, ' . 
                                       '`DATEMODIFIED`) ' . 
                                    'VALUES ' . 
                                       '("' . $tmp_profileid . '", ' . 
                                       '"' . $this->crc_int32($tmp_profileid) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("PROFILE_NAME")) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("MESSAGE_TITLE")) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("MESSAGE_TITLE")) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("MESSAGE_NUMBER")) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("MESSAGE_NUMBER")) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("MESSAGE_SPEAKER")) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("MESSAGE_SPEAKER")) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("CONFERENCE_TITLE")) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("CONFERENCE_TITLE")) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("OVERLAY_HEIGHT")) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("OVERLAY_WIDTH")) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("INNER_CONTENT_WIDTH")) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("MARGIN_LEFT")) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("MARGIN_RIGHT")) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("ABS_PX_FROM_TOP")) . '", ' . 
                                       '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("ABS_PX_FROM_LEFT")) . '", ' . 
                                       '"' . $tmp_creatorid . '", ' . 
                                       'INET_ATON("'.$_SERVER['REMOTE_ADDR'] . '"), ' . 
                                       '"' . \session_id() .'", ' . 
                                       '"' . $tmp_modifierid . '", ' . 
                                       'INET_ATON("'  $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                       '"' . \session_id() . '", ' . 
                                       '"' . $ts . '");';

                    self::$query .= 'INSERT INTO `cia00_lang_copy` ' . 
                                        '(`COPY_ID`, ' . 
                                        '`PROFILE_ID`, ' . 
                                        '`PROFILE_TYPE`, ' . 
                                        '`LANG_ID`, ' . 
                                        '`MESSAGE_TITLE`, ' . 
                                        '`MESSAGE_TITLE_BLOB`, ' . 
                                        '`MESSAGE_NUMBER`, ' . 
                                        '`MESSAGE_NUMBER_BLOB`, ' . 
                                        '`CONFERENCE_TITLE`, ' . 
                                        '`CONFERENCE_TITLE_BLOB`, ' . 
                                        '`DATE_COPY`, ' . 
                                        '`DATE_COPY_BLOB`, ' . 
                                        '`CREATOR_ID`, ' . 
                                        '`CREATOR_IP`, ' . 
                                        '`CREATOR_SESSION_ID`, ' . 
                                        '`MODIFIER_ID`, ' . 
                                        '`MODIFIER_IP`, ' . 
                                        '`MODIFIER_SESSION_ID`, ' . 
                                        '`DATEMODIFIED`) ' . 
                                    'VALUES ' . 
                                        '("' . $tmp_copyid . '", ' . 
                                        '"' . $tmp_profileid . '", ' . 
                                        '"mini", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("LANG_ID")) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("MESSAGE_TITLE")) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("MESSAGE_TITLE")) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("MESSAGE_NUMBER")) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("MESSAGE_NUMBER")) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("CONFERENCE_TITLE")) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("CONFERENCE_TITLE")) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("MESSAGE_DATE")) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data("MESSAGE_DATE")) . '", ' . 
                                        '"' . $tmp_creatorid . '", ' . 
                                        'INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                        '"' . \session_id() . '", ' . 
                                        '"' . $tmp_modifierid . '", ' . 
                                        'INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                        '"' . \session_id() . '", ' . 
                                        '"' . $ts . '");';

                    self::$query .= 'INSERT INTO `cia00_log_sys_user` ' . 
                                        '(`ACTIVITY_ID`, ' . 
                                        '`MODIFIER_ID`, ' . 
                                        '`MODIFIER_ID_CRC32`, ' . 
                                        '`MINI_PROFILE_ID`, ' . 
                                        '`MINI_PROFILE_ID_CRC32`, ' . 
                                        '`ACTIVITY_DESCRIPTION`, ' . 
                                        '`ACTIVITY_DESCRIPTION_BLOB`, ' . 
                                        '`PHPSESSION`, ' . 
                                        '`IPADDRESS`, ' . 
                                        '`HTTP_USER_AGENT`, ' . 
                                        '`CHANNEL`) ' . 
                                    'VALUES ' . 
                                        '("' . $tmp_activityid . '", ' . 
                                        '"' . $tmp_modifierid . '", ' . 
                                        '"' . $this->crc_int32($tmp_modifierid) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($oUser->retrieve_Form_Data('PROFILE_ID')) . '", ' . 
                                        '"' . $this->crc_int32($oUser->retrieve_Form_Data('PROFILE_ID')) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($tmp_activity_descript) . '", ' . 
                                        '"' . self::$mysqli->real_escape_string($tmp_activity_descript) . '", ' . 
                                        '"' . \session_id() . '", ' . 
                                        'INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                        '"' . $_SERVER['HTTP_USER_AGENT'] . '", ' . 
                                        '"D");';

                    //error_log('2137 query->' . self::$query);

                    // 5 :: Monday, June 29, 2026 @ 1407 hrs.
                    $clr_ssl_msg = self::$query;
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

                    self::$mysqli = $oUserEnvironment->oMYSQLI_CONN_MGR->processMultiQuery(
                                                                         self::$mysqli, 
                                                                         self::$query);

                    if(self::$mysqli->error){

                        self::$query_exception_result = 'new_mini_profile=error';
                        throw new Exception('new_mini_profile :: ' . 
                            $queryType . ' error :: [' . 
                            self::$mysqli->error . '].');

                    }else{

                        /*
                        do{
                        }while(self::$mysqli->more_results() && self::$mysqli->next_result());

                        */

                        return "success";

                    }

                break;
                case 'get_overlay_mgmt_state':

                    $force_profile_select_align = true;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Support for multiple requests 
                     * within single page...using 
                     * same $oDB_RESP object. 
                     *
                     *
                     * 5 ::
                     *
                     */
                    $db_resp_process_serial     = '!jesus_is_my_dear_lord!';
                    $db_resp_serial_key         = $oUser->return_serial_handle();

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Align to selects within 
                     * multi-query. 
                     *
                     * Order does not matter, 
                     * but should be parallel 
                     * to field cnts. 
                     *
                     *
                     * 5 ::
                     *
                     */
                    $db_resp_target_profiles    = 'OVERLAY_MGMT|MINI_PROFILE|' . 
                                                  'MINI_CONFIG|FULLSCRN_CONFIG|' . 
                                                  'FULLSCRN_PROFILE|LANG_IDS|' . 
                                                  'LANG_PACKS';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Would this be the best 
                     * place to specify profile 
                     * filed count as indication 
                     * of query result profile 
                     * type? an update to 
                     * sql=update here. 
                     *
                     *
                     * 5 ::
                     *
                     */
                    $db_resp_profile_field_cnt  = '19|27|17|14|17|11|26';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * We had to pull initialization 
                     * out of constructor so same 
                     * object could be reused n+1 
                     * times within one page. 
                     *
                     */
                    $oDB_RESP->initialize(
                               $db_resp_process_serial, 
                               $db_resp_serial_key, 
                               $db_resp_target_profiles, 
                               $db_resp_profile_field_cnt, 
                               $force_profile_select_align);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Query construction :: 
                     *
                     * Get all users, all user-client 
                     * relations, and client data. 
                     *
                     */
                    $tmp_SELECT_ARRAY   = array();
                    $tmp_SELECT_ARRAY[] = 'SELECT ' . 
                                              '`cia00_overlay_state`.`STATE_ID`, ' . 
                                              '`cia00_overlay_state`.`MINI_STATE`, ' . 
                                              '`cia00_overlay_state`.`MINI_COPY_STATE`, ' . 
                                              '`cia00_overlay_state`.`MINI_TIMER_STATE`, ' . 
                                              '`cia00_overlay_state`.`MINI_PROFILE_ID`, ' . 
                                              '`cia00_overlay_state`.`MINI_PROFILE_HASH`, ' . 
                                              '`cia00_overlay_state`.`MINI_PROFILE_ENDPOINT`, ' . 
                                              '`cia00_overlay_state`.`MINI_LASTMODIFIED`, ' . 
                                              '`cia00_overlay_state`.`FULLSCREEN_STATE`, ' . 
                                              '`cia00_overlay_state`.`FULLSCREEN_COPY_STATE`, ' . 
                                              '`cia00_overlay_state`.`FULLSCREEN_PROFILE_ID`, ' . 
                                              '`cia00_overlay_state`.`FULLSCREEN_PROFILE_HASH`, ' . 
                                              '`cia00_overlay_state`.`FULLSCREEN_PROFILE_ENDPOINT`, ' . 
                                              '`cia00_overlay_state`.`FULLSCREEN_LASTMODIFIED`, ' . 
                                              '`cia00_overlay_state`.`MODIFIER_ID`, ' . 
                                              '`cia00_overlay_state`.`MODIFIER_IP`, ' . 
                                              '`cia00_overlay_state`.`MODIFIER_SESSION_ID`, ' . 
                                              '`cia00_overlay_state`.`DATEMODIFIED`, ' . 
                                              '`cia00_overlay_state`.`DATECREATED` ' . 
                                          'FROM `cia00_overlay_state` ' . 
                                          'WHERE `cia00_overlay_state`.`STATE_ID` = "1" ' . 
                                          'LIMIT 1;';

                    $tmp_SELECT_ARRAY[] = 'SELECT ' . 
                                              '`cia00_overlay_mini_profile`.`PROFILE_ID`, ' . 
                                              '`cia00_overlay_mini_profile`.`PROFILE_ID_CRC32`, ' . 
                                              '`cia00_overlay_mini_profile`.`ISACTIVE`, ' . 
                                              '`cia00_overlay_mini_profile`.`PROFILE_NAME`, ' . 
                                              '`cia00_overlay_mini_profile`.`MESSAGE_TITLE`, ' . 
                                              '`cia00_overlay_mini_profile`.`MESSAGE_TITLE_BLOB`, ' . 
                                              '`cia00_overlay_mini_profile`.`MESSAGE_NUMBER`, ' . 
                                              '`cia00_overlay_mini_profile`.`MESSAGE_NUMBER_BLOB`, ' . 
                                              '`cia00_overlay_mini_profile`.`MESSAGE_SPEAKER`, ' . 
                                              '`cia00_overlay_mini_profile`.`MESSAGE_SPEAKER_BLOB`, ' . 
                                              '`cia00_overlay_mini_profile`.`CONFERENCE_TITLE`, ' . 
                                              '`cia00_overlay_mini_profile`.`CONFERENCE_TITLE_BLOB`, ' . 
                                              '`cia00_overlay_mini_profile`.`OVERLAY_HEIGHT`, ' . 
                                              '`cia00_overlay_mini_profile`.`OVERLAY_WIDTH`, ' . 
                                              '`cia00_overlay_mini_profile`.`INNER_CONTENT_WIDTH`, ' . 
                                              '`cia00_overlay_mini_profile`.`MARGIN_LEFT`, ' . 
                                              '`cia00_overlay_mini_profile`.`MARGIN_RIGHT`, ' . 
                                              '`cia00_overlay_mini_profile`.`ABS_PX_FROM_TOP`, ' . 
                                              '`cia00_overlay_mini_profile`.`ABS_PX_FROM_LEFT`, ' . 
                                              '`cia00_overlay_mini_profile`.`CREATOR_ID`, ' . 
                                              '`cia00_overlay_mini_profile`.`CREATOR_IP`, ' . 
                                              '`cia00_overlay_mini_profile`.`CREATOR_SESSION_ID`, ' . 
                                              '`cia00_overlay_mini_profile`.`MODIFIER_ID`, ' . 
                                              '`cia00_overlay_mini_profile`.`MODIFIER_IP`, ' . 
                                              '`cia00_overlay_mini_profile`.`MODIFIER_SESSION_ID`, ' . 
                                              '`cia00_overlay_mini_profile`.`DATEMODIFIED`, ' . 
                                              '`cia00_overlay_mini_profile`.`DATECREATED` ' . 
                                          'FROM `cia00_overlay_mini_profile` ' . 
                                          'WHERE `cia00_overlay_mini_profile`.`ISACTIVE` = "1";';

                    $tmp_SELECT_ARRAY[] = 'SELECT ' . 
                                              '`cia00_overlay_mini_config`.`ID`, ' . 
                                              '`cia00_overlay_mini_config`.`OPACITY`, ' . 
                                              '`cia00_overlay_mini_config`.`HEXCOLOR`, ' . 
                                              '`cia00_overlay_mini_config`.`COPY_HEXCOLOR`, ' . 
                                              '`cia00_overlay_mini_config`.`TIMER_HEXCOLOR`, ' . 
                                              '`cia00_overlay_mini_config`.`LANG_PACK_ROTATION_SECS`, ' . 
                                              '`cia00_overlay_mini_config`.`DEFAULT_ABS_PX_FROM_TOP`, ' . 
                                              '`cia00_overlay_mini_config`.`DEFAULT_MARGIN_LEFT`, ' . 
                                              '`cia00_overlay_mini_config`.`DEFAULT_ABS_PX_FROM_LEFT`, ' . 
                                              '`cia00_overlay_mini_config`.`DEFAULT_MARGIN_RIGHT`, ' . 
                                              '`cia00_overlay_mini_config`.`DEFAULT_ABS_PX_FROM_RIGHT`, ' . 
                                              '`cia00_overlay_mini_config`.`DEFAULT_WIDTH`, ' . 
                                              '`cia00_overlay_mini_config`.`DEFAULT_HEIGHT`, ' . 
                                              '`cia00_overlay_mini_config`.`DEFAULT_CONTENT_WIDTH`, ' . 
                                              '`cia00_overlay_mini_config`.`COPY_DISPLAY_AREA_WIDTH_PX`, ' . 
                                              '`cia00_overlay_mini_config`.`COPY_DISPLAY_AREA_HEIGHT_PX`, ' . 
                                              '`cia00_overlay_mini_config`.`DATECREATED` ' . 
                                          'FROM `cia00_overlay_mini_config` ' . 
                                          'LIMIT 1;';

                    $tmp_SELECT_ARRAY[] = 'SELECT ' . 
                                              '`cia00_overlay_fullscrn_config`.`OPACITY`, ' . 
                                              '`cia00_overlay_fullscrn_config`.`HEXCOLOR`, ' . 
                                              '`cia00_overlay_fullscrn_config`.`COPY_HEXCOLOR`, ' . 
                                              '`cia00_overlay_fullscrn_config`.`LANG_PACK_ROTATION_SECS`, ' . 
                                              '`cia00_overlay_fullscrn_config`.`DEFAULT_ABS_PX_FROM_TOP`, ' . 
                                              '`cia00_overlay_fullscrn_config`.`DEFAULT_MARGIN_LEFT`, ' . 
                                              '`cia00_overlay_fullscrn_config`.`DEFAULT_ABS_PX_FROM_LEFT`, ' . 
                                              '`cia00_overlay_fullscrn_config`.`DEFAULT_MARGIN_RIGHT`, ' . 
                                              '`cia00_overlay_fullscrn_config`.`DEFAULT_ABS_PX_FROM_RIGHT`, ' . 
                                              '`cia00_overlay_fullscrn_config`.`DEFAULT_WIDTH`, ' . 
                                              '`cia00_overlay_fullscrn_config`.`DEFAULT_HEIGHT`, ' . 
                                              '`cia00_overlay_fullscrn_config`.`DEFAULT_CONTENT_WIDTH`, ' . 
                                              '`cia00_overlay_fullscrn_config`.`DEFAULT_CONTENT_HEIGHT`, ' . 
                                              '`cia00_overlay_fullscrn_config`.`DATECREATED` ' . 
                                          'FROM `cia00_overlay_fullscrn_config` ' . 
                                          'LIMIT 1;';

                    $tmp_SELECT_ARRAY[] = 'SELECT ' . 
                                              '`cia00_overlay_fullscrn_profile`.`PROFILE_ID`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`PROFILE_ID_CRC32`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`ISACTIVE`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`PROFILE_NAME`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`PAGE_HEADER`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`PAGE_HEADER_BLOB`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`PAGE_TITLE`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`PAGE_TITLE_BLOB`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`PAGE_CODE_BLOB`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`CREATOR_ID`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`CREATOR_IP`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`CREATOR_SESSION_ID`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`MODIFIER_ID`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`MODIFIER_IP`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`MODIFIER_SESSION_ID`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`DATEMODIFIED`, ' . 
                                              '`cia00_overlay_fullscrn_profile`.`DATECREATED` ' . 
                                           'FROM `cia00_overlay_fullscrn_profile` ' . 
                                           'WHERE `cia00_overlay_fullscrn_profile`.`ISACTIVE` = "1";';

                    $tmp_SELECT_ARRAY[] = 'SELECT ' . 
                                              '`cia00_lang_packs`.`LANGPACK_ID`, ' . 
                                              '`cia00_lang_packs`.`LANG_ID`, ' . 
                                              '`cia00_lang_packs`.`NAME`, ' . 
                                              '`cia00_lang_packs`.`NATIVE_NAME`, ' . 
                                              '`cia00_lang_packs`.`ISACTIVE`, ' . 
                                              '`cia00_lang_packs`.`RTL_FLAG`, ' . 
                                              '`cia00_lang_packs`.`FONT_SIZE_PERCENTAGE`, ' . 
                                              '`cia00_lang_packs`.`TIMER_FONT_SIZE_PERCENTAGE`, ' . 
                                              '`cia00_lang_packs`.`COPY_PADDING_TOP_PX`, ' . 
                                              '`cia00_lang_packs`.`DATEMODIFIED`, ' . 
                                              '`cia00_lang_packs`.`DATECREATED` ' . 
                                           'FROM `cia00_lang_packs` ' . 
                                           'WHERE `cia00_lang_packs`.`ISACTIVE` = "1";';

                    $tmp_SELECT_ARRAY[] = 'SELECT ' . 
                                              '`cia00_lang_copy`.`COPY_ID`, ' . 
                                              '`cia00_lang_copy`.`PROFILE_ID`, ' . 
                                              '`cia00_lang_copy`.`PROFILE_TYPE`, ' . 
                                              '`cia00_lang_copy`.`ISACTIVE`, ' . 
                                              '`cia00_lang_copy`.`LANG_ID`, ' . 
                                              '`cia00_lang_copy`.`MESSAGE_TITLE`, ' . 
                                              '`cia00_lang_copy`.`MESSAGE_TITLE_BLOB`, ' . 
                                              '`cia00_lang_copy`.`MESSAGE_NUMBER`, ' . 
                                              '`cia00_lang_copy`.`MESSAGE_NUMBER_BLOB`, ' . 
                                              '`cia00_lang_copy`.`CONFERENCE_TITLE`, ' . 
                                              '`cia00_lang_copy`.`CONFERENCE_TITLE_BLOB`, ' . 
                                              '`cia00_lang_copy`.`PAGE_HEADER`, ' . 
                                              '`cia00_lang_copy`.`PAGE_HEADER_BLOB`, ' . 
                                              '`cia00_lang_copy`.`PAGE_TITLE`, ' . 
                                              '`cia00_lang_copy`.`PAGE_TITLE_BLOB`, ' . 
                                              '`cia00_lang_copy`.`PAGE_CODE_BLOB`, ' . 
                                              '`cia00_lang_copy`.`DATE_COPY`, ' . 
                                              '`cia00_lang_copy`.`DATE_COPY_BLOB`, ' . 
                                              '`cia00_lang_copy`.`CREATOR_ID`, ' . 
                                              '`cia00_lang_copy`.`CREATOR_IP`, ' . 
                                              '`cia00_lang_copy`.`CREATOR_SESSION_ID`, ' . 
                                              '`cia00_lang_copy`.`MODIFIER_ID`, ' . 
                                              '`cia00_lang_copy`.`MODIFIER_IP`, ' . 
                                              '`cia00_lang_copy`.`MODIFIER_SESSION_ID`, ' . 
                                              '`cia00_lang_copy`.`DATEMODIFIED`, ' . 
                                              '`cia00_lang_copy`.`DATECREATED` ' . 
                                          'FROM `cia00_lang_copy` ' . 
                                          'WHERE `cia00_lang_copy`.`ISACTIVE` = "1";';

                    $oDB_RESP->process(
                               self::$mysqli, 
                               $queryType, 
                               $tmp_SELECT_ARRAY);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * All done, processed and 
                     * ready for use. 
                     *
                     * Return the response 
                     * object. 
                     *
                     */
                    return $oDB_RESP;

                break;

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

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Close the database 
             * connection. 
             *
             */
            $oUserEnvironment->oMYSQLI_CONN_MGR->closeConnection(self::$mysqli);

            return self::$query_exception_result;

        }

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
    private function dbQuery(
                     $queryType, 
                     $oUserEnvironment, 
                     $oUser)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced use of 
         *       PHP crc32() with 
         *       $this->crcINT(). 
         *       5 :: Monday, June 29, 2026 @ 1302 hrs.
         *
         */

        try{

            \date_default_timezone_set('America/New_York');
            $ts = \date("Y-m-d H:i:s", \time());

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Open a MySQL 
             * database connection. 
             *
             */
            $mysqli = $oUserEnvironment->oMYSQLI_CONN_MGR->returnConnection();

            switch($queryType){
                case 'bassdrive_stream_social_sync':

                    /* bassdrive_stream_social_config
                     * -----
                     * SOCIAL_ID                       char(64)
                     * LOG_JSON_SERIAL                 char(64)
                     * STREAM_KEY                      varchar(255)
                     * STREAM_KEY_CRC32                varchar(255)
                     * ISACTIVE                        tinyint(2)
                     * LOCALE_CITY_STATE_PROV_NATION   varchar(255)
                     *
                     */

                    if(isset(self::$result_ARRAY['bassdrive_stream_social_config'])){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Clear the result array. 
                         *
                         */
                        \array_splice(self::$result_ARRAY['bassdrive_stream_social_config'], 0);

                    }

                    self::$query = 'SELECT ' . 
                                       '`bassdrive_stream_social_config`.`SOCIAL_ID`, ' . 
                                       '`bassdrive_stream_social_config`.`STREAM_KEY`, ' . 
                                       '`bassdrive_stream_social_config`.`LOG_JSON_SERIAL`, ' . 
                                       '`bassdrive_stream_social_config`.`LOCALE_CITY_STATE_PROV_NATION`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_SOUNDCLOUD`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_SOUNDCLOUD2`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_SOUNDCLOUD3`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_FACEBOOK`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_FACEBOOK2`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_FACEBOOK3`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_INSTAGRAM`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_INSTAGRAM2`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_INSTAGRAM3`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_TWITTER`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_TWITTER2`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_TWITTER3`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_MIXCLOUD`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_MIXCLOUD2`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_MIXCLOUD3`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_DISCOGS`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_DISCOGS2`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_DISCOGS3`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_BEATPORT`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_BEATPORT2`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_BEATPORT3`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_BANDCAMP`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_BANDCAMP2`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_BANDCAMP3`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_SPOTIFY`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_SPOTIFY2`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_SPOTIFY3`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_ROLLDABEATS`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_ROLLDABEATS2`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_ROLLDABEATS3`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_YOUTUBE`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_YOUTUBE2`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_YOUTUBE3`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_WWW`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_WWW2`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_WWW3`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_ARCHIVES`, ' . 
                                       '`bassdrive_stream_social_config`.`LINK_PROFILE`, ' . 
                                       '`bassdrive_stream_social_config`.`DATEMODIFIED`, ' . 
                                       '`bassdrive_stream_social_config`.`DATECREATED` ' . 
                                   'FROM `bassdrive_stream_social_config` ' . 
                                   'WHERE `bassdrive_stream_social_config`.`STREAM_KEY` = "' . $oUser->stream_key . '" ' . 
                                   'AND  `bassdrive_stream_social_config`.`STREAM_KEY_CRC32` = "' . $this->crc_int32($oUser->stream_key) . '" ' . 
                                   'AND `bassdrive_stream_social_config`.`ISACTIVE` = 1 ' . 
                                   'LIMIT 1;';

                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);
                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Remain still while 
                         * your life is extracted. 
                         *
                         */
                        $ROWCNT = 0;
                        while($row = self::$result->fetch_row()){

                            foreach($row as 
                                $fieldPos => $value)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Store result. 
                                 *
                                 */
                                self::$result_ARRAY['bassdrive_stream_social_config'][$ROWCNT][$fieldPos] = $value;

                            }

                            $ROWCNT++;

                        }

                        self::$result->free();

                    }

                    if($ROWCNT < 1){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Insert new social 
                         * configuration. 
                         *
                         */
                        $tmp_stream_social_id = $oUser->generateNewKey(64);

                        self::$query = 'INSERT INTO `bassdrive_stream_social_config` ' . 
                                           '(`SOCIAL_ID`, ' . 
                                           '`STREAM_KEY`, ' . 
                                           '`STREAM_KEY_CRC32`, ' . 
                                           '`LOG_JSON_SERIAL`, ' . 
                                           '`LOCALE_CITY_STATE_PROV_NATION`, ' . 
                                           '`DATEMODIFIED`) ' . 
                                       'VALUES ' . 
                                           '("' . $tmp_stream_social_id . '", ' . 
                                           '"' . $mysqli->real_escape_string($oUser->stream_key) . '", ' . 
                                           '"' . $this->crc_int32($oUser->stream_key) . '", ' . 
                                           '"' . $mysqli->real_escape_string($oUser->stream_meta_ARRAY['STREAM_KEY'][$oUser->stream_key]['LOG_JSON_SERIAL']) . '", ' . 
                                           '"' . $mysqli->real_escape_string($oUser->stream_meta_ARRAY['STREAM_KEY'][$oUser->stream_key]['LOCALE_CITY_STATE_PROV_NATION']) . '", ' . 
                                           '"' . $ts . '");';

                        self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                             $mysqli, 
                                                                             self::$query);
                        if($mysqli->error){

                            throw new Exception($queryType . 
                                ' error :: [' . 
                                $mysqli->error . '].');

                        }else{

                            return true;

                        }

                    }

                    return false;

                break;
                case 'bassdrive_stream_colors_sync':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * bassdrive_stream_colors
                     * -----
                     * COLORS_ID                       char(64)
                     * COLORS_NAME_KEY                 varchar(100)
                     * COLORS_NAME_KEY_CRC32           int(11)
                     * ISACTIVE                        tinyint(2)
                     * COLORS_IMG_FILENAME             varchar(100)
                     * COLORS_IMG_WIDTH                int(11)
                     * COLORS_IMG_HEIGHT               int(11)
                     *
                     */

                    if(isset(self::$result_ARRAY['bassdrive_stream_colors'])){

                        // Clear the result array. 
                        \array_splice(self::$result_ARRAY['bassdrive_stream_colors'], 0);

                    }

                    self::$query = 'SELECT ' . 
                                       '`bassdrive_stream_colors`.`COLORS_ID`, ' . 
                                       '`bassdrive_stream_colors`.`COLORS_NAME_KEY`, ' . 
                                       '`bassdrive_stream_colors`.`COLORS_NAME_KEY_CRC32`, ' . 
                                       '`bassdrive_stream_colors`.`COLORS_IMG_FILENAME`, ' . 
                                       '`bassdrive_stream_colors`.`COLORS_IMG_WIDTH`, ' . 
                                       '`bassdrive_stream_colors`.`COLORS_IMG_HEIGHT`, ' . 
                                       '`bassdrive_stream_colors`.`DATEMODIFIED` ' . 
                                   'FROM `bassdrive_stream_colors` ' . 
                                   'WHERE `bassdrive_stream_colors`.`COLORS_NAME_KEY` = "' . 
                                          $mysqli->real_escape_string($oUser->stream_meta_ARRAY['COLORS_NAME_KEY'][$oUser->stream_key]['COLORS_NOMINATION']) . '" ' . 
                                   'AND `bassdrive_stream_colors`.`COLORS_NAME_KEY_CRC32` = "' . 
                                          $this->crc_int32($oUser->stream_meta_ARRAY['COLORS_NAME_KEY'][$oUser->stream_key]['COLORS_NOMINATION']) . '" ' . 
                                   'AND `bassdrive_stream_colors`.`ISACTIVE` = 1 ' . 
                                   'LIMIT 1;';

                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);
                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Remain still while 
                         * your life is extracted. 
                         *
                         */
                        $ROWCNT = 0;
                        while($row = self::$result->fetch_row()){

                            foreach($row as 
                                $fieldPos => $value)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Store the database result.
                                 *
                                 */
                                self::$result_ARRAY['bassdrive_stream_colors'][$ROWCNT][$fieldPos] = $value;

                            }

                            $ROWCNT++;

                        }

                        self::$result->free();

                    }

                    if(($ROWCNT < 1) && 
                        (\strlen($oUser->stream_meta_ARRAY['COLORS_NAME_KEY'][$oUser->stream_key]['COLORS_IMG_FILENAME']) > 5))
                    {

                        $tmp_stream_colors_id = $oUser->generateNewKey(64);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Insert new color. 
                         *
                         */
                        self::$query = 'INSERT INTO `bassdrive_stream_colors` ' . 
                                           '(`COLORS_ID`, ' . 
                                           '`COLORS_NAME_KEY`, ' . 
                                           '`COLORS_NAME_KEY_CRC32`, ' . 
                                           '`COLORS_IMG_FILENAME`, ' . 
                                           '`COLORS_IMG_WIDTH`, ' . 
                                           '`COLORS_IMG_HEIGHT`, ' . 
                                           '`DATEMODIFIED`) ' . 
                                       'VALUES ' . 
                                           '("' . $tmp_stream_colors_id . '", ' . 
                                           '"' . $mysqli->real_escape_string($oUser->stream_meta_ARRAY['COLORS_NAME_KEY'][$oUser->stream_key]['COLORS_NOMINATION']) . '", ' . 
                                           '"' . $this->crc_int32($oUser->stream_meta_ARRAY['COLORS_NAME_KEY'][$oUser->stream_key]['COLORS_NOMINATION']) . '", ' . 
                                           '"' . $mysqli->real_escape_string($oUser->stream_meta_ARRAY['COLORS_NAME_KEY'][$oUser->stream_key]['COLORS_IMG_FILENAME']) . '", ' . 
                                           '"' . $mysqli->real_escape_string($oUser->stream_meta_ARRAY['COLORS_NAME_KEY'][$oUser->stream_key]['COLORS_IMG_WIDTH']) . '", ' . 
                                           '"' . $mysqli->real_escape_string($oUser->stream_meta_ARRAY['COLORS_NAME_KEY'][$oUser->stream_key]['COLORS_IMG_HEIGHT']) . '", ' . 
                                           '"' . $ts . '");';

                        self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                             $mysqli, 
                                                                             self::$query);
                        if($mysqli->error){

                            throw new Exception($queryType . 
                                ' error :: [' . 
                                $mysqli->error . '].');

                        }else{

                            return true;

                        }

                    }

                    return false;

                break;
                case 'bassdrive_stream_lookup_sync':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * bassdrive_stream_lookup
                     * -----
                     * STREAM_LOOKUP_ID               char(64)
                     * ISACTIVE                       tinyint(2)
                     * STREAM_KEY                     varchar(255)
                     * STREAM_KEY_CRC32               int(11)
                     * STREAM_STRING_PATTERN          varchar(300)
                     *
                     */

                    if(isset(self::$result_ARRAY)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Clear the result array. 
                         *
                         */
                        \array_splice(self::$result_ARRAY, 0);

                    }

                    $tmp_query_or = '';
                    $tmp_stream_pattern_ARRAY = array();
                    foreach($oUser->stream_pattern_ARRAY as 
                        $pattern => $key)
                    {

                        if($oUser->stream_key == $key){

                            $tmp_stream_pattern_ARRAY[$pattern] = 1;
                            $tmp_query_or .= '`bassdrive_stream_lookup`.`STREAM_STRING_PATTERN` = "' . 
                                             $mysqli->real_escape_string($pattern) . 
                                             '" OR ';

                        }

                    }

                    $tmp_query_or = \rtrim($tmp_query_or, ' OR ');

                    self::$query = 'SELECT `bassdrive_stream_lookup`.`STREAM_LOOKUP_ID`, ' . 
                                       '`bassdrive_stream_lookup`.`STREAM_STRING_PATTERN`, ' . 
                                       '`bassdrive_stream_lookup`.`STREAM_KEY` ' . 
                                   'FROM `bassdrive_stream_lookup` ' . 
                                   'WHERE `bassdrive_stream_lookup`.`ISACTIVE` = 1 ' . 
                                   'AND `bassdrive_stream_lookup`.`STREAM_KEY` = "' . $oUser->stream_key . '" ' . 
                                   'AND `bassdrive_stream_lookup`.`STREAM_KEY_CRC32` = "' . $this->crc_int32($oUser->stream_key) . '" ' . 
                                   'AND (' . $tmp_query_or . ');';

                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);
                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Remain still while 
                         * your life is extracted. 
                         *
                         */
                        $ROWCNT = 0;
                        while($row = self::$result->fetch_row()){

                            foreach($row as 
                                $fieldPos => $value)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Store the database result. 
                                 *
                                 */
                                self::$result_ARRAY['bassdrive_stream_lookup'][$ROWCNT][$fieldPos] = $value;

                            }

                            $ROWCNT++;

                        }

                        self::$result->free();

                    }

                    self::$query = '';

                    if(isset(self::$result_ARRAY['bassdrive_stream_lookup'])){

                        foreach(self::$result_ARRAY['bassdrive_stream_lookup'] as 
                            $row => $field_ARRAY)
                        {

                            $tmp_pattern_match = false;

                            foreach($tmp_stream_pattern_ARRAY as 
                                $pattern => $val)
                            {

                                if($field_ARRAY[1] == $pattern){

                                    $tmp_pattern_match = true;

                                    /*error_log(__LINE__ . 
                                     *   ' database match on $pattern[' . 
                                     *   $pattern . 
                                     *   '==' . 
                                     *   $field_ARRAY[1] . 
                                     *   '].');
                                     */

                                    // 5 :: Monday, June 29, 2026 @ 1411 hrs.
                                    $clr_ssl_msg = 'Database match on $pattern[' . 
                                                   $pattern . '==' . 
                                                   $field_ARRAY[1] . 
                                                   '].';
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

                                }else{

                                    /*error_log(__LINE__ . 
                                     *   ' No database match on $pattern[' . 
                                     *   $pattern . '!=' . 
                                     *   $field_ARRAY[1] . 
                                     *   '].');
                                     */

                                    // 5 :: Monday, June 29, 2026 @ 1409 hrs.
                                    $clr_ssl_msg = 'No database match on $pattern. [' . 
                                                   $pattern . '!=' . 
                                                   $field_ARRAY[1] . '].';
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

                            }

                            if(!$tmp_pattern_match){

                                $tmp_stream_lookup_id = $oUser->generateNewKey(64);

                                // Add string pattern to lookup table. 
                                self::$query .= 'INSERT INTO `bassdrive_stream_lookup` ' . 
                                                    '(`STREAM_LOOKUP_ID`, ' . 
                                                    '`STREAM_KEY`, ' . 
                                                    '`STREAM_KEY_CRC32`, ' . 
                                                    '`STREAM_STRING_PATTERN`, ' . 
                                                    '`DATEMODIFIED`) ' . 
                                                'VALUES ' . 
                                                    '("' . $mysqli->real_escape_string($tmp_stream_lookup_id) . '", ' . 
                                                    '"' . $mysqli->real_escape_string($oUser->stream_key) . '", ' . 
                                                    '"' . $this->crc_int32($oUser->stream_key) . '", ' . 
                                                    '"' . $mysqli->real_escape_string($pattern) . '", ' . 
                                                    '"' . $ts . '");';

                            }

                        }

                    }else{

                        foreach($oUser->stream_pattern_ARRAY as 
                            $pattern => $key)
                        {

                            if($oUser->stream_key == $key){

                                $tmp_stream_pattern_ARRAY[$pattern] = 1;
                                $tmp_query_or .= '`bassdrive_stream_lookup`.`STREAM_STRING_PATTERN` = "' . 
                                                 $mysqli->real_escape_string($pattern) . '" OR ';

                                $tmp_stream_lookup_id = $oUser->generateNewKey(64);

                                // Add the string pattern to lookup table. 
                                self::$query .= 'INSERT INTO `bassdrive_stream_lookup` ' . 
                                                    '(`STREAM_LOOKUP_ID`, ' . 
                                                    '`STREAM_KEY`, ' . 
                                                    '`STREAM_KEY_CRC32`, ' . 
                                                    '`STREAM_STRING_PATTERN`, ' . 
                                                    '`DATEMODIFIED`) ' . 
                                                'VALUES ' . 
                                                    '("' . $mysqli->real_escape_string($tmp_stream_lookup_id) . '", ' . 
                                                    '"' . $mysqli->real_escape_string($oUser->stream_key) . '", ' . 
                                                    '"' . $this->crc_int32($oUser->stream_key) . '", ' . 
                                                    '"' . $mysqli->real_escape_string($pattern) . '", ' . 
                                                    '"' . $ts . '");';

                            }

                        }

                    }

                    if(\strlen(self::$query) > 10){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Process new pattern(s) 
                         * via multi-query. 
                         *
                         */
                        $mysqli = $oUserEnvironment->oMYSQLI_CONN_MGR->processMultiQuery(
                                                                       $mysqli, 
                                                                       self::$query);
                        if($mysqli->error){

                            throw new Exception($queryType . 
                                ' error :: [' . 
                                $mysqli->error . 
                                '].');

                        }else{

                            return true;

                        }

                    }else{

                        return false;

                    }

                break;
                case 'bassdrive_stream_initialization':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * oUser = oBassDriveDatum
                     * -----
                     * bassdrive_stream
                     * STREAM_ID                       char(64)
                     * ISACTIVE                        tinyint(2)
                     * STREAM_KEY                      varchar(255)
                     * COLORS_NAME_KEY                 varchar(100)

                    if(isset($tmp_meta_array['stream_flag_file_img'])){

                        $tmp_resp['COLORS_NAME_KEY'][$tmp_stream_key]['COLORS_IMG_FILENAME']      = $tmp_meta_array['stream_flag_file_img'];
                        $tmp_resp['COLORS_NAME_KEY'][$tmp_stream_key]['COLORS_IMG_WIDTH']         = $tmp_meta_array['stream_flag_img_width'];
                        $tmp_resp['COLORS_NAME_KEY'][$tmp_stream_key]['COLORS_IMG_HEIGHT']        = $tmp_meta_array['stream_flag_img_height'];
                        $tmp_resp['STREAM_KEY'][$tmp_stream_key]['LOCALE_CITY_STATE_PROV_NATION'] = $tmp_meta_array['stream_city_state_prov_nation'];

                    }

                    $tmp_resp['STREAM_KEY'][$tmp_stream_key]['LOG_JSON_SERIAL'] = $json_serial;

                    */

                    if(isset(self::$result_ARRAY['bassdrive_stream'])){

                        // Clear the result array.
                        array_splice(self::$result_ARRAY['bassdrive_stream'], 0);

                    }

                    self::$query = 'SELECT `bassdrive_stream`.`STREAM_ID`, ' . 
                                       '`bassdrive_stream`.`STREAM_KEY`, ' . 
                                       '`bassdrive_stream`.`COLORS_NAME_KEY` ' . 
                                   'FROM `bassdrive_stream` ' . 
                                   'WHERE `bassdrive_stream`.`STREAM_KEY` = "' . 
                                          $mysqli->real_escape_string($oUser->stream_key) . '" ' . 
                                   'AND `bassdrive_stream`.`STREAM_KEY_CRC32` = "' . 
                                          $this->crc_int32($oUser->stream_key) . '"  ' . 
                                   'LIMIT 1;';

                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);
                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Remain still while 
                         * your life is extracted. 
                         *
                         */
                        $ROWCNT = 0;
                        while($row = self::$result->fetch_row()){

                            foreach($row as 
                                $fieldPos => $value)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Store the database result. 
                                 *
                                 */
                                self::$result_ARRAY['bassdrive_stream'][$ROWCNT][$fieldPos] = $value;

                            }

                            $ROWCNT++;

                        }

                        self::$result->free();

                    }

                    if(!isset(self::$result_ARRAY['bassdrive_stream'])){

                        $tmp_stream_id = $oUser->generateNewKey(64);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Insert a new stream key. 
                         *
                         */
                        self::$query = 'INSERT INTO `bassdrive_stream` ' . 
                                           '(`STREAM_ID`, ' . 
                                           '`STREAM_KEY`, ' . 
                                           '`STREAM_KEY_CRC32`, ' . 
                                           '`COLORS_NAME_KEY`, ' . 
                                           '`DATEMODIFIED`) ' . 
                                       'VALUES ' . 
                                           '("' . $mysqli->real_escape_string($tmp_stream_id) . '", ' . 
                                           '"' . $mysqli->real_escape_string($oUser->stream_key) . '", ' . 
                                           '"' . $this->crc_int32($oUser->stream_key) . '", ' . 
                                           '"' . $mysqli->real_escape_string($oUser->stream_meta_ARRAY['COLORS_NAME_KEY'][$oUser->stream_key]['COLORS_NOMINATION']) . '", ' . 
                                           '"' . $ts . '");';

                        self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                             $mysqli, 
                                                                             self::$query);
                        if($mysqli->error){

                            throw new Exception($queryType . 
                                ' error :: [' . 
                                $mysqli->error . '].');

                        }else{

                            return true;

                        }

                    }else{

                        /*error_log(__LINE__ . 
                         *    ' Bassdrive_stream result ' . 
                         *    'is found. No need ' . 
                         *    'to initialize');
                         */

                        return false;

                    }

                break;
                case 'return_stream_social_association_ARRAY':

                    $tmp_social_resp = array();

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * bassdrive_stream
                     * -----
                     * STREAM_ID                       char(64)
                     * ISACTIVE                        tinyint(2)
                     * STREAM_KEY                      varchar(255)
                     * COLORS_NAME_KEY                 varchar(100)
                     * DATEMODIFIED
                     * DATECREATED
                     *
                     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * bassdrive_stream_lookup
                     * -----
                     * STREAM_LOOKUP_ID                char(64)
                     * ISACTIVE                        tinyint(2)
                     * STREAM_STRING_PATTERN           varchar(300)
                     * STREAM_KEY                      varchar(255)
                     * DATEMODIFIED
                     * DATECREATED
                     *
                     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * bassdrive_stream_colors
                     * -----
                     * COLORS_ID                       char(64)
                     * COLORS_NAME_KEY                 varchar(100)
                     * COLORS_NAME_KEY_CRC32           int(11)
                     * ISACTIVE                        tinyint(2)
                     * COLORS_IMG_FILENAME             varchar(100)
                     * COLORS_IMG_WIDTH                int(11)
                     * COLORS_IMG_HEIGHT               int(11)
                     * DATEMODIFIED
                     * DATECREATED
                     *
                     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * bassdrive_stream_social_config
                     * -----
                     * SOCIAL_ID                       char(64)
                     * LOG_JSON_SERIAL                 char(64)
                     * STREAM_KEY                      varchar(255)
                     * STREAM_KEY_CRC32                varchar(255)
                     * ISACTIVE                        tinyint(2)
                     * LOCALE_CITY_STATE_PROV_NATION   varchar(255)
                     * LINK_SOUNDCLOUD                 varchar(300)
                     * LINK_FACEBOOK                   varchar(300)
                     * LINK_INSTAGRAM                  varchar(300)
                     * LINK_TWITTER                    varchar(300)
                     * LINK_WWW                        varchar(300)
                     * DATEMODIFIED
                     * DATECREATED
                     *
                     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Bassdrive Relay 
                     * Stream Resources: 
                     * -----
                     * bassdrive_social_link stream_soundcloud
                     * bassdrive_social_link stream_facebook
                     * bassdrive_social_link stream_instagram
                     * bassdrive_social_link stream_twitter
                     * bassdrive_social_link stream_www
                     * bassdrive_social_link stream_json
                     *
                     */

                    $tmp_social_resp['stream_log_json_serial'] = '';
                    $tmp_social_resp['stream_locale']          = '';

                    $tmp_social_resp['stream_soundcloud']      = '';
                    $tmp_social_resp['stream_soundcloud2']     = '';
                    $tmp_social_resp['stream_soundcloud3']     = '';
                    $tmp_social_resp['stream_facebook']        = '';
                    $tmp_social_resp['stream_facebook2']       = '';
                    $tmp_social_resp['stream_facebook3']       = '';
                    $tmp_social_resp['stream_instagram']       = '';
                    $tmp_social_resp['stream_instagram2']      = '';
                    $tmp_social_resp['stream_instagram3']      = '';
                    $tmp_social_resp['stream_twitter']         = '';
                    $tmp_social_resp['stream_twitter2']        = '';
                    $tmp_social_resp['stream_twitter3']        = '';
                    $tmp_social_resp['stream_mixcloud']        = '';
                    $tmp_social_resp['stream_mixcloud2']       = '';
                    $tmp_social_resp['stream_mixcloud3']       = '';
                    $tmp_social_resp['stream_discogs']         = '';
                    $tmp_social_resp['stream_discogs2']        = '';
                    $tmp_social_resp['stream_discogs3']        = '';
                    $tmp_social_resp['stream_beatport']        = '';
                    $tmp_social_resp['stream_beatport2']       = '';
                    $tmp_social_resp['stream_beatport3']       = '';
                    $tmp_social_resp['stream_bandcamp']        = '';
                    $tmp_social_resp['stream_bandcamp2']       = '';
                    $tmp_social_resp['stream_bandcamp3']       = '';
                    $tmp_social_resp['stream_spotify']         = '';
                    $tmp_social_resp['stream_spotify2']        = '';
                    $tmp_social_resp['stream_spotify3']        = '';
                    $tmp_social_resp['stream_rolldabeats']     = '';
                    $tmp_social_resp['stream_rolldabeats2']    = '';
                    $tmp_social_resp['stream_rolldabeats3']    = '';
                    $tmp_social_resp['stream_youtube']         = '';
                    $tmp_social_resp['stream_youtube2']        = '';
                    $tmp_social_resp['stream_youtube3']        = '';
                    $tmp_social_resp['stream_www']             = '';
                    $tmp_social_resp['stream_www2']            = '';
                    $tmp_social_resp['stream_www3']            = '';
                    $tmp_social_resp['stream_archives']        = '';
                    $tmp_social_resp['stream_profile']         = '';

                    $tmp_social_resp['stream_json']     = $oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                                                          $oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                                                          '_proxy/bassdrive/';
                    $tmp_social_resp['stream_history']  = $oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                                                          $oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                                                          '_proxy/bassdrive/?action=load_history';
                    $tmp_social_resp['stream_paypal']   = 'https://www.paypal.com/donate?hosted_button_id=GWNVTUTPEAA8C';
                    $tmp_social_resp['stream_log_json'] = '';

                    $tmp_social_resp['stream_colors_name']     = '';
                    $tmp_social_resp['stream_colors_filename'] = '';
                    $tmp_social_resp['stream_colors_width']    = '';
                    $tmp_social_resp['stream_colors_height']   = '';

                    if(isset(self::$result_ARRAY['bassdrive_stream_lookup'])){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Clear the result array. 
                         *
                         */
                        \array_splice(self::$result_ARRAY['bassdrive_stream_lookup'], 0);

                    }

                    self::$query = 'SELECT `bassdrive_stream_lookup`.`STREAM_LOOKUP_ID`, ' . 
                                       '`bassdrive_stream_lookup`.`STREAM_KEY`, ' . 
                                       '`bassdrive_stream_lookup`.`STREAM_STRING_PATTERN` ' . 
                                   'FROM `bassdrive_stream_lookup` ' . 
                                   'WHERE `bassdrive_stream_lookup`.`ISACTIVE` = 1 ' . 
                                   'ORDER BY ' . 
                                       '`bassdrive_stream_lookup`.`STREAM_KEY` ' . 
                                   'DESC;';

                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);
                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Remain still while 
                         * your life is extracted. 
                         *
                         */
                        $ROWCNT = 0;
                        while($row = self::$result->fetch_row()){

                            foreach($row as 
                                $fieldPos => $value)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Store result. 
                                 *
                                 */
                                self::$result_ARRAY['bassdrive_stream_lookup'][$ROWCNT][$fieldPos] = $value;

                            }

                            $ROWCNT++;

                        }

                        self::$result->free();

                    }

                    $has_flag = false;
                    foreach(self::$result_ARRAY['bassdrive_stream_lookup'] as 
                        $row => $fieldARRAY)
                    {

                        /*error_log(__LINE__ . 
                         *   ' database SOCIAL LOOKUP [' . 
                         *   $fieldARRAY[2] . 
                         *   '][' . 
                         *   $oUser->stream_title . 
                         *   '].');
                         */

                        $pos = \stripos($oUser->stream_title, $fieldARRAY[2]);
                        if(($pos !== false) && 
                            ($has_flag == false))
                        {

                            $has_flag = true;

                            $oUser->stream_key = $fieldARRAY[1];

                            self::$query = 'SELECT ' . 
                                               '`bassdrive_stream_social_config`.`SOCIAL_ID`, ' . 
                                               '`bassdrive_stream_social_config`.`STREAM_KEY`, ' . 
                                               '`bassdrive_stream_social_config`.`LOG_JSON_SERIAL`, ' . 
                                               '`bassdrive_stream_social_config`.`LOCALE_CITY_STATE_PROV_NATION`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_SOUNDCLOUD`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_SOUNDCLOUD2`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_SOUNDCLOUD3`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_FACEBOOK`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_FACEBOOK2`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_FACEBOOK3`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_INSTAGRAM`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_INSTAGRAM2`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_INSTAGRAM3`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_TWITTER`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_TWITTER2`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_TWITTER3`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_MIXCLOUD`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_MIXCLOUD2`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_MIXCLOUD3`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_DISCOGS`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_DISCOGS2`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_DISCOGS3`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_BEATPORT`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_BEATPORT2`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_BEATPORT3`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_BANDCAMP`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_BANDCAMP2`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_BANDCAMP3`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_SPOTIFY`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_SPOTIFY2`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_SPOTIFY3`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_ROLLDABEATS`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_ROLLDABEATS2`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_ROLLDABEATS3`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_YOUTUBE`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_YOUTUBE2`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_YOUTUBE3`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_WWW`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_WWW2`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_WWW3`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_ARCHIVES`, ' . 
                                               '`bassdrive_stream_social_config`.`LINK_PROFILE` ' . 
                                           'FROM `bassdrive_stream_social_config` ' . 
                                           'WHERE `bassdrive_stream_social_config`.`STREAM_KEY` = "' . 
                                                   $mysqli->real_escape_string($oUser->stream_key) . '" ' . 
                                           'AND `bassdrive_stream_social_config`.`STREAM_KEY_CRC32` = "' . 
                                                   $this->crc_int32($oUser->stream_key) . '" ' . 
                                           'AND `bassdrive_stream_social_config`.`ISACTIVE` = 1 ' . 
                                           'LIMIT 1;';

                            /*error_log(__LINE__ . 
                             *    ' database [stream_key=' . 
                             *    $oUser->stream_key . 
                             *    '][stream_title=' . 
                             *    $oUser->stream_title . 
                             *    '][' . 
                             *    self::$query . 
                             *    '].');
                             */

                            self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                                 $mysqli, 
                                                                                 self::$query);

                            if($mysqli->error){

                                throw new Exception($queryType . 
                                    ' error :: [' . 
                                    $mysqli->error . '].');

                            }else{

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Remain still while 
                                 * your life is extracted. 
                                 *
                                 */
                                $ROWCNT = 0;
                                while($row = self::$result->fetch_row()){

                                    foreach($row as 
                                        $fieldPos => $value)
                                    {

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * Store result. 
                                         *
                                         */
                                        self::$result_ARRAY['bassdrive_stream_social_config'][$ROWCNT][$fieldPos] = $value;

                                    }

                                    $ROWCNT++;

                                }

                                self::$result->free();

                            }

                            self::$query = 'SELECT `bassdrive_stream`.`STREAM_ID`, ' . 
                                               '`bassdrive_stream`.`STREAM_KEY`, ' . 
                                               '`bassdrive_stream`.`COLORS_NAME_KEY` ' . 
                                           'FROM `bassdrive_stream` ' . 
                                           'WHERE `bassdrive_stream`.`STREAM_KEY` = "' . 
                                                   $mysqli->real_escape_string($oUser->stream_key) . '" ' . 
                                           'AND `bassdrive_stream`.`STREAM_KEY_CRC32` = "' . 
                                                   $this->crc_int32($oUser->stream_key) . '" ' . 
                                           'AND `bassdrive_stream`.`ISACTIVE` = 1 ' . 
                                           'LIMIT 1;';

                            self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                                 $mysqli, 
                                                                                 self::$query);
                            if($mysqli->error){

                                throw new Exception($queryType . 
                                    ' error :: [' . 
                                    $mysqli->error . '].');

                            }else{

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Remain still while 
                                 * your life is extracted. 
                                 *
                                 */
                                $ROWCNT = 0;
                                while($row = self::$result->fetch_row()){

                                    foreach($row as 
                                        $fieldPos => $value)
                                    {

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * Store the database result. 
                                         *
                                         */
                                        self::$result_ARRAY['bassdrive_stream'][$ROWCNT][$fieldPos] = $value;

                                    }

                                    $ROWCNT++;

                                }

                                self::$result->free();

                            }

                            self::$query = 'SELECT `bassdrive_stream_colors`.`COLORS_ID`, ' . 
                                               '`bassdrive_stream_colors`.`COLORS_NAME_KEY`, ' . 
                                               '`bassdrive_stream_colors`.`COLORS_IMG_FILENAME`, ' . 
                                               '`bassdrive_stream_colors`.`COLORS_IMG_WIDTH`, ' . 
                                               '`bassdrive_stream_colors`.`COLORS_IMG_HEIGHT` ' . 
                                           'FROM `bassdrive_stream_colors`;';

                            self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                                 $mysqli, 
                                                                                 self::$query);
                            if($mysqli->error){

                                throw new Exception($queryType . 
                                    ' error :: [' . 
                                    $mysqli->error . '].');

                            }else{

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Remain still while 
                                 * your life is extracted. 
                                 *
                                 */
                                $ROWCNT = 0;
                                while($row = self::$result->fetch_row()){

                                    foreach($row as 
                                        $fieldPos => $value)
                                    {

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * Store the database result. 
                                         *
                                         */
                                        self::$result_ARRAY['bassdrive_stream_colors'][$ROWCNT][$fieldPos] = $value;

                                    }

                                    $ROWCNT++;

                                }

                                self::$result->free();

                            }

                            if(isset(self::$result_ARRAY['bassdrive_stream_social_config'])){

                                $tmp_social_resp['stream_log_json_serial'] = self::$result_ARRAY['bassdrive_stream_social_config'][0][2];
                                $tmp_social_resp['stream_locale']          = self::$result_ARRAY['bassdrive_stream_social_config'][0][3];

                                $tmp_social_resp['stream_soundcloud']      = self::$result_ARRAY['bassdrive_stream_social_config'][0][4];
                                $tmp_social_resp['stream_soundcloud2']     = self::$result_ARRAY['bassdrive_stream_social_config'][0][5];
                                $tmp_social_resp['stream_soundcloud3']     = self::$result_ARRAY['bassdrive_stream_social_config'][0][6];
                                $tmp_social_resp['stream_facebook']        = self::$result_ARRAY['bassdrive_stream_social_config'][0][7];
                                $tmp_social_resp['stream_facebook2']       = self::$result_ARRAY['bassdrive_stream_social_config'][0][8];
                                $tmp_social_resp['stream_facebook3']       = self::$result_ARRAY['bassdrive_stream_social_config'][0][9];
                                $tmp_social_resp['stream_instagram']       = self::$result_ARRAY['bassdrive_stream_social_config'][0][10];
                                $tmp_social_resp['stream_instagram2']      = self::$result_ARRAY['bassdrive_stream_social_config'][0][11];
                                $tmp_social_resp['stream_instagram3']      = self::$result_ARRAY['bassdrive_stream_social_config'][0][12];
                                $tmp_social_resp['stream_twitter']         = self::$result_ARRAY['bassdrive_stream_social_config'][0][13];
                                $tmp_social_resp['stream_twitter2']        = self::$result_ARRAY['bassdrive_stream_social_config'][0][14];
                                $tmp_social_resp['stream_twitter3']        = self::$result_ARRAY['bassdrive_stream_social_config'][0][15];
                                $tmp_social_resp['stream_mixcloud']        = self::$result_ARRAY['bassdrive_stream_social_config'][0][16];
                                $tmp_social_resp['stream_mixcloud2']       = self::$result_ARRAY['bassdrive_stream_social_config'][0][17];
                                $tmp_social_resp['stream_mixcloud3']       = self::$result_ARRAY['bassdrive_stream_social_config'][0][18];
                                $tmp_social_resp['stream_discogs']         = self::$result_ARRAY['bassdrive_stream_social_config'][0][19];
                                $tmp_social_resp['stream_discogs2']        = self::$result_ARRAY['bassdrive_stream_social_config'][0][20];
                                $tmp_social_resp['stream_discogs3']        = self::$result_ARRAY['bassdrive_stream_social_config'][0][21];
                                $tmp_social_resp['stream_beatport']        = self::$result_ARRAY['bassdrive_stream_social_config'][0][22];
                                $tmp_social_resp['stream_beatport2']       = self::$result_ARRAY['bassdrive_stream_social_config'][0][23];
                                $tmp_social_resp['stream_beatport3']       = self::$result_ARRAY['bassdrive_stream_social_config'][0][24];
                                $tmp_social_resp['stream_bandcamp']        = self::$result_ARRAY['bassdrive_stream_social_config'][0][25];
                                $tmp_social_resp['stream_bandcamp2']       = self::$result_ARRAY['bassdrive_stream_social_config'][0][26];
                                $tmp_social_resp['stream_bandcamp3']       = self::$result_ARRAY['bassdrive_stream_social_config'][0][27];
                                $tmp_social_resp['stream_spotify']         = self::$result_ARRAY['bassdrive_stream_social_config'][0][28];
                                $tmp_social_resp['stream_spotify2']        = self::$result_ARRAY['bassdrive_stream_social_config'][0][29];
                                $tmp_social_resp['stream_spotify3']        = self::$result_ARRAY['bassdrive_stream_social_config'][0][30];
                                $tmp_social_resp['stream_rolldabeats']     = self::$result_ARRAY['bassdrive_stream_social_config'][0][31];
                                $tmp_social_resp['stream_rolldabeats2']    = self::$result_ARRAY['bassdrive_stream_social_config'][0][32];
                                $tmp_social_resp['stream_rolldabeats3']    = self::$result_ARRAY['bassdrive_stream_social_config'][0][33];
                                $tmp_social_resp['stream_youtube']         = self::$result_ARRAY['bassdrive_stream_social_config'][0][34];
                                $tmp_social_resp['stream_youtube2']        = self::$result_ARRAY['bassdrive_stream_social_config'][0][35];
                                $tmp_social_resp['stream_youtube3']        = self::$result_ARRAY['bassdrive_stream_social_config'][0][36];
                                $tmp_social_resp['stream_www']             = self::$result_ARRAY['bassdrive_stream_social_config'][0][37];
                                $tmp_social_resp['stream_www2']            = self::$result_ARRAY['bassdrive_stream_social_config'][0][38];
                                $tmp_social_resp['stream_www3']            = self::$result_ARRAY['bassdrive_stream_social_config'][0][39];
                                $tmp_social_resp['stream_archives']        = self::$result_ARRAY['bassdrive_stream_social_config'][0][40];
                                $tmp_social_resp['stream_profile']         = self::$result_ARRAY['bassdrive_stream_social_config'][0][41];

                                $tmp_social_resp['stream_log_json']        = $oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                                                                             $oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                                                                             '_proxy/bassdrive_colors/?stream=' . 
                                                                             $tmp_social_resp['stream_log_json_serial'];
                                $tmp_social_resp['stream_history']         = $oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                                                                             $oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                                                                             '_proxy/bassdrive/?action=load_history';

                            }

                            if(isset(self::$result_ARRAY['bassdrive_stream'])){

                                $tmp_social_resp['stream_colors_name'] = self::$result_ARRAY['bassdrive_stream'][0][2];

                            }

                            if(isset(self::$result_ARRAY['bassdrive_stream_colors'])){

                                foreach(self::$result_ARRAY['bassdrive_stream_colors'] as $row => $field_array){

                                    if($field_array[1] == $tmp_social_resp['stream_colors_name']){

                                        $tmp_social_resp['stream_colors_filename'] = $field_array[2];
                                        $tmp_social_resp['stream_colors_width']    = $field_array[3];
                                        $tmp_social_resp['stream_colors_height']   = $field_array[4];

                                        $tmp_social_resp['stream_colors_html']     = '<div id="nation_colors_wrapper" ' . 
                                                                                     'class="nation_colors_wrapper">' . 
                                                                                     '<div style="padding-right:8px;">' . 
                                                                                     '<img src="' . 
                                                                                     $oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                                                                                     $oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                                                                                     'common/imgs/bassdrive_component_creative/' . 
                                                                                     $tmp_social_resp['stream_colors_filename'] . 
                                                                                     '" width="' . $tmp_social_resp['stream_colors_width'] . 
                                                                                     '" height="' . $tmp_social_resp['stream_colors_height'] . 
                                                                                     '" title="' . $tmp_social_resp['stream_colors_name'] . 
                                                                                     '" alt="' . $tmp_social_resp['stream_colors_name'] . 
                                                                                     '"></div></div>';

                                        /*error_log(__LINE__ . 
                                         *    ' database COLORS=' . 
                                         *    $field_array[2]);
                                         */

                                    }

                                }

                            }

                            return $tmp_social_resp;

                        }

                    }

                    return $tmp_social_resp;

                break;
                case 'return_bassdrive_log_ojson':

                    $auth_creds = $oUserEnvironment->oHTTP_MGR->extractData($_GET, 'stream');

                    self::$query = 'SELECT ' . 
                                       '`log_bassdrive_program`.`STREAM_RELAY_JSON` ' . 
                                   'FROM `log_bassdrive_program` ' . 
                                   'WHERE `log_bassdrive_program`.`SERIAL` = "' . 
                                           $mysqli->real_escape_string($auth_creds) . '" ' . 
                                   'LIMIT 1;';

                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);
                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Remain still while 
                         * your life is extracted. 
                         *
                         */
                        $ROWCNT = 0;
                        while($row = self::$result->fetch_row()){

                            foreach($row as 
                                $fieldPos => $value)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Store the database result. 
                                 *
                                 */
                                self::$result_ARRAY[$ROWCNT][$fieldPos] = $value;

                            }

                            $ROWCNT++;

                        }

                        self::$result->free();

                    }

                    return self::$result_ARRAY[0][0];

                break;
                case 'bassdrive_history_output':

                    $tmp_resp_array = array();

                    self::$query = 'SELECT ' . 
                                       '`bassdrive_stream_history`.`RAW_HTML`, ' . 
                                       '`bassdrive_stream_history`.`DATEMODIFIED` ' . 
                                   'FROM `bassdrive_stream_history` ' . 
                                   'WHERE `bassdrive_stream_history`.`ISACTIVE` = 1 ' . 
                                   'LIMIT 1;';

                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);
                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Remain still while 
                         * your life is extracted. 
                         *
                         */
                        $ROWCNT = 0;
                        while($row = self::$result->fetch_row()){

                            foreach($row as 
                                $fieldPos => $value)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Store the database result. 
                                 *
                                 */
                                self::$result_ARRAY['bassdrive_history_output'][$ROWCNT][$fieldPos] = $value;

                            }

                            $ROWCNT++;

                        }

                        self::$result->free();

                    }

                    return self::$result_ARRAY['bassdrive_history_output'][0][0];

                break;
                case 'bassdrive_colors_algorithm_output':

                    if($oUserEnvironment->oHTTP_MGR->issetParam($_GET, 'cnt')){

                        $cnt = $oUserEnvironment->oHTTP_MGR->extractData($_GET, 'cnt');

                        if(!is_numeric($cnt)){

                            $cnt = 4500;

                        }else{

                            if($cnt < 3500){

                                $cnt = 3500;

                            }

                        }

                    }else{

                        $cnt = 16000;

                    }

                    $tmp_resp_array = array();
                    self::$query = 'SELECT ' . 
                                       '`log_bassdrive_program`.`ID`, ' . 
                                       '`log_bassdrive_program`.`SERIAL`, ' . 
                                       '`log_bassdrive_program`.`PROGRAM_TITLE`, ' . 
                                       '`log_bassdrive_program`.`STREAM_RELAY_JSON`, ' . 
                                       '`log_bassdrive_program`.`DATEMODIFIED` ' . 
                                   'FROM `log_bassdrive_program` ' . 
                                   'WHERE `log_bassdrive_program`.`ISACTIVE` = 1 ' . 
                                   'ORDER BY `log_bassdrive_program`.`ID` ' . 
                                   'DESC ' . 
                                   'LIMIT ' . $mysqli->real_escape_string($cnt) . ';';

                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);
                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Remain still while 
                         * your life is extracted. 
                         *
                         */
                        $ROWCNT = 0;
                        while($row = self::$result->fetch_row()){

                            foreach($row as 
                                $fieldPos => $value)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Store the database result. 
                                 *
                                 */
                                self::$result_ARRAY['log_bassdrive_program'][$ROWCNT][$fieldPos] = $value;

                            }

                            $ROWCNT++;

                        }

                        self::$result->free();

                    }

                    $tmp_resp_array = self::$result_ARRAY['log_bassdrive_program'];

                    $tmp_env_key = $oUserEnvironment->returnResouceKey();

                    //if($tmp_env_key == $this->crc_int32('LOCALHOST_MAC')){
                    if(1 == 2){

                        $tmp_field_POS_ARRAY = array();

                        $tmp_field_POS_ARRAY['log_bassdrive_program']['ID']                = 0;
                        $tmp_field_POS_ARRAY['log_bassdrive_program']['SERIAL']            = 1;
                        $tmp_field_POS_ARRAY['log_bassdrive_program']['PROGRAM_TITLE']     = 2;
                        $tmp_field_POS_ARRAY['log_bassdrive_program']['STREAM_RELAY_JSON'] = 3;
                        $tmp_field_POS_ARRAY['log_bassdrive_program']['DATEMODIFIED']      = 4;

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Localhost processing only.
                         *
                         */
                        foreach(self::$result_ARRAY['log_bassdrive_program'] as 
                            $row => $stream_log_ARRAY)
                        {

                            /*error_log(__LINE__ . 
                             *   ' LOCALHOST PROCESSING ONLY :: ' .  
                             *   $stream_log_ARRAY[$tmp_field_POS_ARRAY['log_bassdrive_program']['PROGRAM_TITLE']]);
                             */

                            $tmp_stream_title    = $stream_log_ARRAY[$tmp_field_POS_ARRAY['log_bassdrive_program']['PROGRAM_TITLE']];
                            $tmp_log_json_serial = $stream_log_ARRAY[$tmp_field_POS_ARRAY['log_bassdrive_program']['SERIAL']];
                            //$tmp_stream_json = $stream_log_ARRAY[$tmp_field_POS_ARRAY['log_bassdrive_program']['STREAM_RELAY_JSON']];

                            $tmp_KEY = $oUser->process_stream_title(
                                               $tmp_stream_title, 
                                               $tmp_log_json_serial);

                            //return self::$result_ARRAY['log_bassdrive_program'];

                        }

                    }

                    //return self::$result_ARRAY['log_bassdrive_program'];
                    return $tmp_resp_array;

                break;
                case 'return_bassdrive_colors_presentation':

                    $oBassDriveDatum = new jony5_bassdrive_integration_data(
                                           $oUser, 
                                           $oUserEnvironment, 
                                           $this);

                    self::$query = 'SELECT `log_bassdrive_program`.`ID`, ' . 
                                       '`log_bassdrive_program`.`PROGRAM_TITLE`, ' . 
                                       '`log_bassdrive_program`.`STREAM_RELAY_JSON`, ' . 
                                       '`log_bassdrive_program`.`DATEMODIFIED`, ' . 
                                       '`log_bassdrive_program`.`DATECREATED` ' . 
                                   'FROM `log_bassdrive_program` ' . 
                                   'ORDER BY `log_bassdrive_program`.`ID` ' . 
                                   'DESC ' . 
                                   'LIMIT 4500;';

                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);
                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Remain still while 
                         * your life is extracted. 
                         *
                         */
                        $ROWCNT = 0;
                        while($row = self::$result->fetch_row()){

                            foreach($row as 
                                $fieldPos => $value)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Store the database result. 
                                 *
                                 */
                                self::$result_ARRAY[$ROWCNT][$fieldPos] = $value;

                            }

                            $ROWCNT++;

                        }

                        self::$result->free();

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Validate TTL and load 
                     * Bassdrive® datum object. 
                     *
                     */
                    if(count(self::$result_ARRAY) > 0){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Check the current time 
                         * against TTL for indication 
                         * of what data use case 
                         * to implement. 
                         *
                         */
                        // self::$result_ARRAY[$ROWCNT][$fieldPos] = $value;
                        $ttl_secs                        = self::$result_ARRAY[0][1];
                        $bassdrive_json                  = self::$result_ARRAY[0][2];

                        $relay_endpoint                  = self::$result_ARRAY[0][0];
                        $broadcast_nation                = self::$result_ARRAY[0][3];
                        $stream_info                     = self::$result_ARRAY[0][4];
                        $stream_social                   = '';
                        $bassdrive_stats_conn            = self::$result_ARRAY[0][5];
                        $bassdrive_stats_throughput      = self::$result_ARRAY[0][6];
                        $bassdrive_stats_throughput_unit = self::$result_ARRAY[0][7];
                        $bassdrive_stats_max_conn        = self::$result_ARRAY[0][8];

                        $ttl_last_modified               = self::$result_ARRAY[0][12];

                        $tmp_curr_date = \strtotime('-' . $ttl_secs . ' seconds');
                        $tmp_ttl_date  = \strtotime($ttl_last_modified);

                        if($tmp_curr_date > $tmp_ttl_date){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * TTL expire content. 
                             *
                             */
                            $oBassDriveDatum->refresh_expired_data(
                                              $relay_endpoint, 
                                              $broadcast_nation, 
                                              $stream_info, 
                                              $stream_social, 
                                              $bassdrive_stats_conn, 
                                              $bassdrive_stats_throughput, 
                                              $bassdrive_stats_throughput_unit, 
                                              $bassdrive_stats_max_conn);

                            $oBassDriveDatum->reset_cache_ttl();

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Return the latest JSON object. 
                             *
                             */
                            return $oBassDriveDatum->bassdrive_stream_ojson;

                        }else{

                            /*error_log(__LINE__ . 
                             *   ' database :: Return Bassdrive ' . 
                             *   'JSON from cache.');
                             */

                            // 5 :: Monday, June 29, 2026 @ 1412 hrs.
                            $clr_ssl_msg = 'Return Bassdrive JSON from cache.';
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

                            /*
                            $oBassDriveDatum->load_data(
                                              $broadcast_nation, 
                                              $stream_info, 
                                              $bassdrive_stats_conn, 
                                              $bassdrive_stats_throughput, 
                                              $bassdrive_stats_throughput_unit, 
                                              $bassdrive_stats_max_conn);

                             */

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Return cached JSON object. 
                             *
                             */
                            return $bassdrive_json;

                        }

                    }

                break;
                case 'return_bassdrive_ojson':

                    $oBassDriveDatum = new jony5_bassdrive_integration_data(
                                           $oUser, 
                                           $oUserEnvironment, 
                                           $this);

                    self::$query = 'SELECT ' . 
                                       '`bassdrive_ttl_config`.`BASSDRIVE_ENDPOINT`, ' . 
                                       '`bassdrive_ttl_config`.`ENDPOINT_CACHE_TTL_SECS`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_RELAY_JSON`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_BROADCAST_NATION`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_STREAM_INFO`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_STREAM_SOCIAL`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_STATS_CONNECTIONS`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_STATS_THROUGHPUT`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_STATS_THROUGHPUT_UNIT`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_STATS_MAX_CONNECTIONS`, ' . 
                                       '`bassdrive_ttl_config`.`MODIFIED_SERVERADDR`, ' . 
                                       '`bassdrive_ttl_config`.`MODIFIED_BY_IP`, ' . 
                                       '`bassdrive_ttl_config`.`MODIFIED_BY_USERAGENT`, ' . 
                                       '`bassdrive_ttl_config`.`DATEMODIFIED`, ' . 
                                       '`bassdrive_ttl_config`.`DATECREATED` ' . 
                                   'FROM `bassdrive_ttl_config` ' . 
                                   'LIMIT 1;';

                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);
                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Remain still while 
                         * your life is extracted. 
                         *
                         */
                        $ROWCNT = 0;
                        while($row = self::$result->fetch_row()){

                            foreach($row as 
                                $fieldPos => $value)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Store the database result. 
                                 *
                                 */
                                self::$result_ARRAY[$ROWCNT][$fieldPos] = $value;

                            }

                            $ROWCNT++;

                        }

                        self::$result->free();

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Validate TTL and load 
                     * Bassdrive® datum object. 
                     *
                     */
                    if(count(self::$result_ARRAY) > 0){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Check the current time 
                         * against TTL for indication 
                         * of what data use case 
                         * to implement. 
                         *
                         */
                        // self::$result_ARRAY[$ROWCNT][$fieldPos] = $value;
                        $ttl_secs                   = self::$result_ARRAY[0][1];
                        $bassdrive_json             = self::$result_ARRAY[0][2];

                        $relay_endpoint             = self::$result_ARRAY[0][0];
                        $broadcast_nation           = self::$result_ARRAY[0][3];
                        $stream_info                = self::$result_ARRAY[0][4];
                        $stream_social              = self::$result_ARRAY[0][5];
                        $bassdrive_stats_conn       = self::$result_ARRAY[0][6];
                        $bassdrive_stats_throughput = self::$result_ARRAY[0][7];
                        $bassdrive_stats_throughput_unit = self::$result_ARRAY[0][8];
                        $bassdrive_stats_max_conn   = self::$result_ARRAY[0][9];

                        $ttl_last_modified          = self::$result_ARRAY[0][13];

                        $tmp_curr_date = \strtotime('-' . $ttl_secs .' seconds');
                        $tmp_ttl_date  = \strtotime($ttl_last_modified);

                        if($tmp_curr_date > $tmp_ttl_date){

                            /*error_log(__LINE__ . 
                             *   ' database :: TTL expire ' . 
                             *   'Bassdrive® [JSON requested] ' . 
                             *   'data from cache.');
                             */

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * TTL expire the content. 
                             *
                             */
                            $oBassDriveDatum->refresh_expired_data(
                                              $relay_endpoint, 
                                              $broadcast_nation, 
                                              $stream_info, 
                                              $stream_social, 
                                              $bassdrive_stats_conn, 
                                              $bassdrive_stats_throughput, 
                                              $bassdrive_stats_throughput_unit, 
                                              $bassdrive_stats_max_conn);
                            $oBassDriveDatum->reset_cache_ttl();

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Return the latest 
                             * JSON object. 
                             *
                             */
                            return $oBassDriveDatum->bassdrive_stream_ojson;

                        }else{

                            /*error_log(__LINE__ . 
                             *   ' database :: Return 
                             *   Bassdrive® JSON from cache.');
                             */

                            /*$oBassDriveDatum->load_data(
                             *                  $broadcast_nation, 
                             *                  $stream_info, 
                             *                  $bassdrive_stats_conn, 
                             *                  $bassdrive_stats_throughput, 
                             *                  $bassdrive_stats_throughput_unit, 
                             *                  $bassdrive_stats_max_conn);
                             */

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Return the cached 
                             * JSON object. 
                             *
                             */
                            return $bassdrive_json;

                        }

                    }

                    return $oBassDriveDatum;

                break;
                case 'expire_ttl_bassdriveData':
                    
                    /*
                    $oUser is the 
                    bassdrive_integration_data 
                    object.
                    -----
                    $oUser->bassdrive_stream_ojson;
                    $oUser->broadcast_nation;
                    $oUser->stream_info;
                    $oUser->bassdrive_stats;
                    $oUser->bassdrive_stats_conn;
                    $oUser->bassdrive_stats_throughput;
                    $oUser->bassdrive_stats_throughput_unit;
                    $oUser->bassdrive_stats_max_conn;

                    */

                    /*$tmp_json = $this->properReplace(
                     *                   array("\r\n", "\r", "\n"), 
                     *                   '<br>', 
                     *                   $oUser->bassdrive_stream_ojson);
                     */

                    /*error_log(__LINE__ . 
                     *    ' database JSON['. 
                     *    $this->properReplace(
                     *           array("\r\n", "\r", "\n"), 
                     *           '<br>', 
                     *           $oUser->bassdrive_stream_ojson) . 
                     *    '].');
                     */

                    self::$query = 'UPDATE `bassdrive_ttl_config` ' . 
                                   'SET ' . 
                                       '`CURRENT_RELAY_JSON` = "' . $mysqli->real_escape_string($oUser->bassdrive_stream_ojson) . '", ' . 
                                       '`CURRENT_BROADCAST_NATION` = "' . $mysqli->real_escape_string($oUser->broadcast_nation) . '", ' . 
                                       '`CURRENT_STREAM_INFO` = "' . $mysqli->real_escape_string($oUser->stream_info) . '", ' . 
                                       '`CURRENT_STREAM_SOCIAL` = "' . $mysqli->real_escape_string($oUser->stream_social) . '", ' . 
                                       '`CURRENT_STATS` = "' . $mysqli->real_escape_string($oUser->bassdrive_stats) . '", ' . 
                                       '`CURRENT_STATS_CONNECTIONS` = "' . $mysqli->real_escape_string($oUser->bassdrive_stats_conn) . '", ' . 
                                       '`CURRENT_STATS_THROUGHPUT` = "' . $mysqli->real_escape_string($oUser->bassdrive_stats_throughput) . '", ' . 
                                       '`CURRENT_STATS_THROUGHPUT_UNIT` = "' . $mysqli->real_escape_string($oUser->bassdrive_stats_throughput_unit) . '", ' . 
                                       '`CURRENT_STATS_MAX_CONNECTIONS` = "' . $mysqli->real_escape_string($oUser->bassdrive_stats_max_conn) . '", ' . 
                                       '`MODIFIED_SERVERADDR` = INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                       '`MODIFIED_BY_IP` = INET_ATON("' . $oUserEnvironment->oCRNRSTN_IPSECURITY_MGR->clientIpAddress() . '"), ' . 
                                       '`MODIFIED_BY_USERAGENT` = "' . $_SERVER['HTTP_USER_AGENT'] . '", ' . 
                                       '`DATEMODIFIED` = "' . $ts . '" ' . 
                                   'WHERE `ID` = 1 ' . 
                                   'LIMIT 1;';

                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);
                    if($mysqli->error){

                        throw new Exception($queryType .
                            ' error :: [' . 
                            $mysqli->error . '].');

                    }else{

                        return true;

                    }

                break;
                case 'ttl_bassdriveData':

                    $oBassDriveDatum = new jony5_bassdrive_integration_data(
                                           $oUser, 
                                           $oUserEnvironment, 
                                           $this);

                    self::$query = 'SELECT ' . 
                                       '`bassdrive_ttl_config`.`BASSDRIVE_ENDPOINT`, ' . 
                                       '`bassdrive_ttl_config`.`ENDPOINT_CACHE_TTL_SECS`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_RELAY_JSON`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_BROADCAST_NATION`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_STREAM_INFO`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_STREAM_SOCIAL`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_STATS`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_STATS_CONNECTIONS`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_STATS_THROUGHPUT`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_STATS_THROUGHPUT_UNIT`, ' . 
                                       '`bassdrive_ttl_config`.`CURRENT_STATS_MAX_CONNECTIONS`, ' . 
                                       '`bassdrive_ttl_config`.`MODIFIED_SERVERADDR`, ' . 
                                       '`bassdrive_ttl_config`.`MODIFIED_BY_IP`, ' . 
                                       '`bassdrive_ttl_config`.`MODIFIED_BY_USERAGENT`, ' . 
                                       '`bassdrive_ttl_config`.`DATEMODIFIED`, ' . 
                                       '`bassdrive_ttl_config`.`DATECREATED` ' . 
                                   'FROM `bassdrive_ttl_config` ' . 
                                   'LIMIT 1;';

                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);
                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Remain still while 
                         * your life is extracted. 
                         *
                         */
                        $ROWCNT = 0;
                        while($row = self::$result->fetch_row()){

                            foreach($row as 
                                $fieldPos => $value)
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Store the database result. 
                                 *
                                 */
                                self::$result_ARRAY[$ROWCNT][$fieldPos] = $value;

                            }

                            $ROWCNT++;

                        }

                        self::$result->free();

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Validate TTL and load 
                     * the Bassdrive® datum object. 
                     */
                    if(count(self::$result_ARRAY) > 0){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Check the current time 
                         * against TTL for indication 
                         * of what data use case 
                         * to implement. 
                         *
                         */
                        // self::$result_ARRAY[$ROWCNT][$fieldPos] = $value;
                        $ttl_secs                   = self::$result_ARRAY[0][1];

                        $relay_endpoint             = self::$result_ARRAY[0][0];
                        $broadcast_nation           = self::$result_ARRAY[0][3];
                        $stream_info                = self::$result_ARRAY[0][4];
                        $stream_social              = self::$result_ARRAY[0][5];
                        $bassdrive_stats            = self::$result_ARRAY[0][6];
                        $bassdrive_stats_conn       = self::$result_ARRAY[0][7];
                        $bassdrive_stats_throughput = self::$result_ARRAY[0][8];
                        $bassdrive_stats_throughput_unit = self::$result_ARRAY[0][9];
                        $bassdrive_stats_max_conn   = self::$result_ARRAY[0][10];

                        $ttl_last_modified          = self::$result_ARRAY[0][14];

                        $tmp_curr_date = strtotime('-' . $ttl_secs .' seconds');
                        $tmp_ttl_date  = strtotime($ttl_last_modified);

                        if($tmp_curr_date > $tmp_ttl_date){

                            /*error_log(__LINE__ . 
                             *    ' database :: TTL expire ' . 
                             *    'Bassdrive® stream data ' . 
                             *    'from cache.');
                             */

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * TTL expire the content. 
                             *
                             */
                            $oBassDriveDatum->refresh_expired_data(
                                              $relay_endpoint, 
                                              $broadcast_nation, 
                                              $stream_info, 
                                              $stream_social, 
                                              $bassdrive_stats_conn, 
                                              $bassdrive_stats_throughput, 
                                              $bassdrive_stats_throughput_unit, 
                                              $bassdrive_stats_max_conn);
                            $oBassDriveDatum->reset_cache_ttl();

                        }else{

                            /*error_log(__LINE__ . 
                             *   ' database :: load ' . 
                             *   'Bassdrive® stream ' . 
                             *   'data from cache.');
                             */

                            $oBassDriveDatum->load_data(
                                              $broadcast_nation, 
                                              $stream_info, 
                                              $stream_social, 
                                              $bassdrive_stats, 
                                              $bassdrive_stats_conn, 
                                              $bassdrive_stats_throughput, 
                                              $bassdrive_stats_throughput_unit, 
                                              $bassdrive_stats_max_conn);

                        }

                    }

                    return $oBassDriveDatum;

                break;
                case 'getDailyPodcast':

                    self::$query = 'SELECT ' . 
                                       '`lsm_podcast_daily`.`TITLE`, ' . 
                                       '`lsm_podcast_daily`.`URI` ' . 
                                   'FROM `lsm_podcast_daily`';

                    /*error_log('(154) Database result ' . 
                     *   'query: [' . 
                     *   self::$query . 
                     *   '].');
                     */

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Process query. 
                     *
                     */
                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);
                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Remain still while 
                         * your life is extracted. 
                         *
                         * error_log('[lnum ' . 
                         *     __LINE__ . '] ' . 
                         *     '[mthd ' . 
                         *     __METHOD__ . 
                         *     '] Database Result Exists.');
                         *
                         */
                        $ROWCNT = 0;
                        while($row = self::$result->fetch_row()){

                            foreach($row as 
                                $fieldPos => $value)
                            {

                                /*error_log('services /database.inc.php ' . 
                                 *   '(296) rowcnt[' . 
                                 *   $ROWCNT . '] fieldPos[' . 
                                 *   $fieldPos . '] value [' . 
                                 *   $value . '].');
                                 */

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Store database result. 
                                 *
                                 */
                                self::$result_ARRAY[$ROWCNT][$fieldPos] = $value;

                            }

                            $ROWCNT++;

                        }

                        self::$result->free();

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Close the database 
                         * connection. 
                         *
                         */
                        $oUserEnvironment->oMYSQLI_CONN_MGR->closeConnection($mysqli);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Return result set data. 
                         *
                         */
                        return self::$result_ARRAY;

                    }

                break;
                case 'rotateDailyPodcast':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Get all podcasts. 
                     *
                     */
                    self::$query = 'SELECT ' . 
                                       '`lsm_podcasts`.`ID`, ' . 
                                       '`lsm_podcasts`.`TITLE`, ' . 
                                       '`lsm_podcasts`.`URI`, ' . 
                                       '`lsm_podcasts`.`VIEW_COUNT` ' . 
                                   'FROM `lsm_podcasts`';

                    /*error_log('rotate daily podcast query 1 -> ' . 
                     *    self::$query);
                     */

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Process query. 
                     *
                     */
                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);
                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Remain still while 
                         * your life is extracted. 
                         *
                         */
                        $ROWCNT = 0;
                        while($row = self::$result->fetch_row()){

                            foreach($row as 
                                $fieldPos => $value)
                            {

                                /*error_log(
                                 *   'jony5 /database.inc.php ' . 
                                 *   '(207) rowcnt[' . 
                                 *   $ROWCNT . '] fieldPos[' . 
                                 *   $fieldPos . '] value [' . 
                                 *   $value . 
                                 *   '].');
                                 */

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Store the database result. 
                                 *
                                 */
                                self::$result_ARRAY[$ROWCNT][$fieldPos] = $value;

                            }

                            $ROWCNT++;

                        }

                        self::$result->free();

                    }

                    //error_log("(227) Sizeof: " . sizeof(self::$result_ARRAY));
                    //error_log("(227) 931[1]: " . self::$result_ARRAY[931][1]);
                    $tmp_podcast_index = rand(0, (\sizeof(self::$result_ARRAY) - 1));
                    $tmp_viewcount = self::$result_ARRAY[$tmp_podcast_index][3];
                    $tmp_viewcount++;

                    self::$query = 'TRUNCATE `lsm_podcast_daily`;';

                    self::$query .= 'INSERT INTO `lsm_podcast_daily` ' . 
                                        '(`TITLE`, ' . 
                                        '`URI`, ' . 
                                        '`DATEMODIFIED`) ' . 
                                    'VALUES ' . 
                                        '("' . 
                                        \trim(self::$result_ARRAY[$tmp_podcast_index][1]) . '" , ' . 
                                        '"' . \trim(self::$result_ARRAY[$tmp_podcast_index][2]) . '", ' . 
                                        '"' . $ts . '");';

                    self::$query .= 'UPDATE `lsm_podcasts` ' . 
                                    'SET ' . 
                                        '`VIEW_COUNT` = "' . $tmp_viewcount . '", ' . 
                                        '`DATEMODIFIED` = "' . $ts . '" ' . 
                                    'WHERE ' . 
                                        '`ID` = "' . self::$result_ARRAY[$tmp_podcast_index][0] . '" ' . 
                                    'LIMIT 1;';

                    /*error_log('jony5 database rotate ' . 
                     *    'daily podcast: query->' . 
                     *    self::$query);
                     */

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Process query. 
                     *
                     */
                    $mysqli = $oUserEnvironment->oMYSQLI_CONN_MGR->processMultiQuery(
                                                                   $mysqli, 
                                                                   self::$query);

                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Close the database 
                     * connection. 
                     *
                     */
                    $oUserEnvironment->oMYSQLI_CONN_MGR->closeConnection($mysqli);

                    /*error_log('jony5 database.inc (139) ' . 
                     *   'result_ARRAY[tmp_podcast_index (1<-->2): ' . 
                     *   self::$result_ARRAY[$tmp_podcast_index][1] . 
                     *   '<-->' . 
                     *   self::$result_ARRAY[$tmp_podcast_index][2]);
                     */

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Load the result set data.
                     *
                     */
                    $tmp_outputArray    = array();
                    $tmp_outputArray[0] = self::$result_ARRAY[$tmp_podcast_index][1];
                    $tmp_outputArray[1] = self::$result_ARRAY[$tmp_podcast_index][2];

                    // Return result set data. 
                    return $tmp_outputArray;

                break;
                case 'crnrstn_signup':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Prepare query.
                     *
                     */
                    self::$query = 'INSERT INTO `crnrstn_signup` ' . 
                                       '(`FIRSTNAME`, ' . 
                                       '`LASTNAME`, ' . 
                                       '`EMAIL`) ' . 
                                   'VALUES ' . 
                                       '("' . $mysqli->real_escape_string($oUserEnvironment->oHTTP_MGR->extractData($_POST,'fname')) . '", ' . 
                                        '"' . $mysqli->real_escape_string($oUserEnvironment->oHTTP_MGR->extractData($_POST,'lname')) . '", ' . 
                                        '"' . $mysqli->real_escape_string(\strtolower($oUserEnvironment->oHTTP_MGR->extractData($_POST, 'email'))) . 
                                        '");';

                    /*	
                    $to      = 'c00000101@gmail.com';
                    $subject = 'jony5.com Website crnrstn_signup db request';
                    $messagetoSend = 'This is a triggered error notification from http://jony5.com

                    Information about the event:
                    - - - - - - - - - - - - - - - - - - - -
                    Query: '.self::$query.'

                    - - - - - - - - - - - - - - - - - - - -

                    Sending IP Address: ' . $_SERVER['REMOTE_ADDR'] . '

                    Please note that this information may not have been saved anywhere. 
                    For this reason, it may be good to maintain a copy of this email. 

                    Thanks!';
                    $headers = 'From: pixtwofl@box526.bluehost.com' . "\r\n" . 
                        'Reply-To: j5@jony5.com' . "\r\n" . 
                        'X-Mailer: PHP/' . phpversion();

                    mail($to, $subject, $messagetoSend, $headers);

                    */

                    /*error_log('database.inc.php 
                     *   (954) query: ' . 
                     *   self::$query);
                     */

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Process query. 
                     *
                     */
                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);

                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                        return 'signup=fail';

                    }

                    return 'signup=success';

                break;
                case 'post_feedback':

                    // Prepare a hash. 
                    $seednum = microtime() . rand();
                    $seednum_full = md5($seednum);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Prepare a query.
                     *
                     */
                    self::$query = 'INSERT INTO `user_feedback` ' . 
                                       '(`FID_SOURCE`, ' . 
                                       '`FID_CRC32`, ' . 
                                       '`FEEDBACK_SEARCH`, ' . 
                                       '`FB_BUGREPORT`, ' . 
                                       '`FB_FEATREQUEST`, ' . 
                                       '`FB_GENQUESTION`, ' . 
                                       '`FB_GENCOMMENT`, ' . 
                                       '`FB_REPORTSPAM`, ' . 
                                       '`OPTIN`, ' . 
                                       '`NAME`, ' . 
                                       '`EMAIL`, ' . 
                                       '`FEEDBACK`, ' . 
                                       '`URI`, ' . 
                                       '`HTTP_USER_AGENT`, ' . 
                                       '`HTTP_REFERER`, ' . 
                                       '`REMOTE_ADDR`, ' . 
                                       '`SERVER_ADDR`, ' . 
                                       '`DATEMODIFIED`) ' . 
                                   'VALUES ' . 
                                       '("' . $seednum_full . '", ' . 
                                       '"' . $this->crc_int32($seednum_full) . '", ' . 
                                       '"' . $mysqli->real_escape_string($oUserEnvironment->oHTTP_MGR->extractData($_POST, 'FEEDBACK_SEARCH')) . '", ' . 
                                       '"' . $mysqli->real_escape_string($oUserEnvironment->oHTTP_MGR->extractData($_POST, 'FB_BUGREPORT')) . '", ' . 
                                       '"' . $mysqli->real_escape_string($oUserEnvironment->oHTTP_MGR->extractData($_POST, 'FB_FEATREQUEST')) . '", ' . 
                                       '"' . $mysqli->real_escape_string($oUserEnvironment->oHTTP_MGR->extractData($_POST, 'FB_GENQUESTION')) . '", ' . 
                                       '"' . $mysqli->real_escape_string($oUserEnvironment->oHTTP_MGR->extractData($_POST, 'FB_GENCOMMENT')) . '", ' . 
                                       '"' . $mysqli->real_escape_string($oUserEnvironment->oHTTP_MGR->extractData($_POST, 'FB_REPORTSPAM')) . '", ' . 
                                       '"' . $mysqli->real_escape_string($oUserEnvironment->oHTTP_MGR->extractData($_POST, 'OPTIN')) . '", ' . 
                                       '"' . $mysqli->real_escape_string($oUserEnvironment->oHTTP_MGR->extractData($_POST, 'name')) . '", ' . 
                                       '"' . $mysqli->real_escape_string($oUserEnvironment->oHTTP_MGR->extractData($_POST, 'email')) . '", ' . 
                                       '"' . $mysqli->real_escape_string($oUserEnvironment->oHTTP_MGR->extractData($_POST, 'feedback')) . '", ' . 
                                       '"' . $mysqli->real_escape_string($oUserEnvironment->oHTTP_MGR->extractData($_POST, 'uri')) . '", ' . 
                                       '"' . $mysqli->real_escape_string($_SERVER['HTTP_USER_AGENT']) . '", ' . 
                                       '"' . $mysqli->real_escape_string($_SERVER['HTTP_REFERER']) . '", ' . 
                                       'INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                       'INET_ATON("' . $_SERVER['SERVER_ADDR'] . '"), ' . 
                                       '"' . $ts . '");';

                    /*error_log('/jony5/ database.inc.php ' . 
                     *   '(993) query: ' . 
                     *   self::$query);
                     */

                    self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                         $mysqli, 
                                                                         self::$query);

                    if($mysqli->error){

                        throw new Exception($queryType . 
                            ' error :: [' . 
                            $mysqli->error . '].');

                        return 'feedback=fail';

                    }

                    return 'feedback=success';

                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Key, ' . 
                        \print_r($queryType, true) . 
                        ', was provided for dbQuery() ' . 
                        'but, it does not exist in the system.');

                break;

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

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Close the database 
             * connection. 
             *
             */
            $oUserEnvironment->oMYSQLI_CONN_MGR->closeConnection($mysqli);
            return self::$query_exception_result;

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Close the database 
         * connection. 
         *
         * If we get this far...
         *
         */
        $oUserEnvironment->oMYSQLI_CONN_MGR->closeConnection($mysqli);

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
    function clearDblBR($str)
    {

        return \str_replace(
               '<br /><br />', 
               '<br />', 
               $str);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function search_FillerSanitize($str)
    {

        #$string = 'The quick brown fox jumped over the lazy dog.';
        $patterns     = array();
        $patterns[0]  = "
";
        $patterns[1]  = '"';
        $patterns[2]  = '=';
        $patterns[3]  = '{';
        $patterns[4]  = '}';
        $patterns[5]  = '(';
        $patterns[6]  = ')';
        $patterns[7]  = ' ';
        $patterns[8]  = '	';
        $patterns[9]  = ',';
        $patterns[10] = '\n';
        $patterns[11] = '\r';
        $patterns[12] = '\'';
        $patterns[13] = '/';
        $patterns[14] = '#';
        $patterns[15] = ';';
        $patterns[16] = ':';
        $patterns[17] = '>';

        $replacements     = array();
        $replacements[0]  = '';
        $replacements[1]  = '';
        $replacements[2]  = '';
        $replacements[3]  = '';
        $replacements[4]  = '';
        $replacements[5]  = '';
        $replacements[6]  = '';
        $replacements[7]  = '';
        $replacements[8]  = '';
        $replacements[9]  = '';
        $replacements[10] = '';
        $replacements[11] = '';
        $replacements[12] = '';
        $replacements[13] = '';
        $replacements[14] = '';
        $replacements[15] = '';
        $replacements[16] = '';
        $replacements[17] = '';

        #$str = preg_replace($patterns, $replacements, $str);
        $str = \str_replace($patterns, $replacements, $str);

        return $str;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function int_to_string_BOOL_conversion($str)
    {

        if(($str == 0) || 
            ($str == '0') || 
            ($str == 3) || 
            ($str == '3'))
        {

            return 'false';

        }else{

            return 'true';

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
     * @access private
     *
     */
    private function syncXML(
                     $type, 
                     $postid, 
                     $oUser, 
                     $oUserEnvironment)
    {

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Retrieve the data. 
             *
             */
            $tmp_serial_handle = 'OVERLAY_DATUM';
            $oDB_RESP          = $oUser->getOverlayStateDatum($tmp_serial_handle);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * This method performs 
             * a custom meta update. 
             *
             */
            $oDB_RESP->data_prep_flagUserAssociations(
                       $oDB_RESP->return_serial($tmp_serial_handle), 
                       'LANG_PACKS');

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Key the result set 
             * by ID for profile 
             * extraction. 
             *
             */
            $oDB_RESP->keyDataByID($oDB_RESP->return_serial($tmp_serial_handle), 'FULLSCRN_PROFILE', 'PROFILE_ID');
            $oDB_RESP->keyDataByID($oDB_RESP->return_serial($tmp_serial_handle), 'MINI_PROFILE', 'PROFILE_ID');
            $oDB_RESP->keyDataByID($oDB_RESP->return_serial($tmp_serial_handle), 'LANG_PACKS', 'PROFILE_ID|LANG_ID');

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Initialize data structs for 
             * the initialization & closure 
             * of client-side XML data. 
             *
             */
            $ts = date("Y-m-d H:i:s", time());
            $xmlFileNEW           = ('<?xml version="1.0" encoding="UTF-8"?><obs_overlay_profile><profile>');
            $xmlFileCLOSE         = ('</profile></obs_overlay_profile>');
            $xmlIndexFileNEW      = ('<?xml version="1.0" encoding="iso-8859-1"?><obs_overlay_profile_index><profile_index>');
            $xmlIndexFileCLOSE    = ('</profile_index></obs_overlay_profile_index>');
            $tmp_XML_LANG_PACKS_A = ('<lang_pack_translations>');
            $tmp_XML_LANG_PACKS_Z = ('</lang_pack_translations>');
            $xmlprofileNodes      = ('');
            $tmp_path_profile_index_xml = 'social/fellowship/avsvc_overlay/_lib/xml/';
            $tmp_path_profile_xml = 'social/fellowship/avsvc_overlay/_lib/xml/_profiles/';

            $xmlprofileNodes = $xmlprofileNodes . $xmlFileNEW;

            switch($type){
                case 'full':

                    $tmp_pid                                      = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'OVERLAY_MGMT', 
                                                                               'FULLSCREEN_PROFILE_ID');
                    $tmp_lastmodified_FULL                        = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'OVERLAY_MGMT', 
                                                                               'FULLSCREEN_LASTMODIFIED');
                    $tmp_lastmodified_MINI                        = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'OVERLAY_MGMT', 
                                                                               'MINI_LASTMODIFIED');

                    $tmp_type                                     = $type;
                    $tmp_master_overlay_visible_BOOL              = $this->int_to_string_BOOL_conversion(
                                                                           $oDB_RESP->return_data_element(
                                                                                      $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                                      'OVERLAY_MGMT', 
                                                                                      'FULLSCREEN_STATE'));
                    $tmp_copy_overlay_visible_BOOL                = $this->int_to_string_BOOL_conversion(
                                                                           $oDB_RESP->return_data_element(
                                                                                      $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                                      'OVERLAY_MGMT', 
                                                                                      'FULLSCREEN_COPY_STATE'));
                    $tmp_master_overlay_display_area_width_in_px  = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'FULLSCRN_CONFIG', 
                                                                               'DEFAULT_WIDTH');
                    $tmp_master_overlay_display_area_height_in_px = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'FULLSCRN_CONFIG', 
                                                                               'DEFAULT_HEIGHT');
                    $tmp_copy_display_area_width_in_px            = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'FULLSCRN_CONFIG', 
                                                                               'DEFAULT_CONTENT_WIDTH');
                    $tmp_copy_display_area_height_in_px           = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'FULLSCRN_CONFIG', 
                                                                               'DEFAULT_CONTENT_HEIGHT');
                    $tmp_master_overlay_bgcolor                   = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'FULLSCRN_CONFIG', 
                                                                               'HEXCOLOR');
                    $tmp_master_overlay_bgopacity                 = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'FULLSCRN_CONFIG', 
                                                                               'OPACITY');
                    $tmp_overlay_copy_color                       = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'FULLSCRN_CONFIG', 
                                                                               'COPY_HEXCOLOR');
                    $tmp_lang_pack_rotation_interval_secs         = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'FULLSCRN_CONFIG', 
                                                                               'LANG_PACK_ROTATION_SECS');
                    $tmp_name                                     = $oDB_RESP->retrieveDataByID(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'FULLSCRN_PROFILE', 
                                                                               $tmp_pid, 
                                                                               'PROFILE_NAME');

                    $tmp_XML_out_section_A = ('<pid>' . $tmp_pid . '</pid>
    <lastmodified>' . $tmp_lastmodified_FULL . '</lastmodified>
    <type>' . $tmp_type . '</type>
    <master_overlay_visible_BOOL>' . $tmp_master_overlay_visible_BOOL . '</master_overlay_visible_BOOL>
    <copy_overlay_visible_BOOL>' . $tmp_copy_overlay_visible_BOOL . '</copy_overlay_visible_BOOL>
    <master_overlay_display_area_width_in_px>' . $tmp_master_overlay_display_area_width_in_px . '</master_overlay_display_area_width_in_px>
    <master_overlay_display_area_height_in_px>' . $tmp_master_overlay_display_area_height_in_px . '</master_overlay_display_area_height_in_px>
    <copy_display_area_width_in_px>' . $tmp_copy_display_area_width_in_px . '</copy_display_area_width_in_px>
    <copy_display_area_height_in_px>' . $tmp_copy_display_area_height_in_px . '</copy_display_area_height_in_px>
    <master_overlay_bgcolor>' . $tmp_master_overlay_bgcolor . '</master_overlay_bgcolor>
    <master_overlay_bgopacity>' . $tmp_master_overlay_bgopacity . '</master_overlay_bgopacity>
    <overlay_copy_color>' . $tmp_overlay_copy_color . '</overlay_copy_color>
    <lang_pack_rotation_interval_secs>' . $tmp_lang_pack_rotation_interval_secs . '</lang_pack_rotation_interval_secs>
    <name>' . $tmp_name . '</name>');

                    $xmlprofileNodes = $xmlprofileNodes . 
                                       $tmp_XML_out_section_A . 
                                       $tmp_XML_LANG_PACKS_A;

                    $tmp_loop_size = $oDB_RESP->return_sizeof(
                                                $oDB_RESP->return_serial($tmp_serial_handle), 
                                                'LANG_IDS');

                    //error_log('2610 tmp_loop_size->' . $tmp_loop_size);

                    for($i = 0; $i < $tmp_loop_size; $i++){

                        $tmp_LANG_ID = $oDB_RESP->return_data_element(
                                                  $oDB_RESP->return_serial($tmp_serial_handle), 
                                                  'LANG_IDS', 
                                                  'LANG_ID', 
                                                  $i);

                        //error_log('2614 tmp_LANG_ID->' . $tmp_LANG_ID);

                        if($oDB_RESP->ping_value_existence(
                                      $oDB_RESP->return_serial($tmp_serial_handle), 
                                      'LANG_PACKS', 
                                      'LANG_ID', 
                                      $tmp_LANG_ID))
                        {

                            //error_log('2616 value exists!->' . $tmp_LANG_ID);

                            $tmp_loop2_size = $oDB_RESP->return_sizeof(
                                                         $oDB_RESP->return_serial($tmp_serial_handle), 
                                                         'LANG_PACKS');

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Let's work on getting the 
                             * data we need to support 
                             * this...then come back...
                             *
                             *
                             * 5
                             *
                             */
                            for($ii = 0; $ii < $tmp_loop2_size; $ii++){

                                if($tmp_pid == $oDB_RESP->return_data_element(
                                                          $oDB_RESP->return_serial($tmp_serial_handle), 
                                                          'LANG_PACKS', 
                                                          'PROFILE_ID', 
                                                          $ii))
                                {

                                    $tmp_copy_fullscrn_header               = $oDB_RESP->return_data_element(
                                                                                         $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                                         'LANG_PACKS', 
                                                                                         'PAGE_HEADER_BLOB', 
                                                                                         $ii);
                                    $tmp_copy_fullscrn_title                = $oDB_RESP->return_data_element(
                                                                                         $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                                         'LANG_PACKS', 
                                                                                         'PAGE_TITLE_BLOB', 
                                                                                         $ii);
                                    $tmp_copy_fullscrn_body                 = $oDB_RESP->return_data_element(
                                                                                         $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                                         'LANG_PACKS', 
                                                                                         'PAGE_CODE_BLOB', 
                                                                                         $ii);
                                    $tmp_copy_fullscrn_font_size_percentage = $oDB_RESP->return_data_element(
                                                                                         $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                                         'LANG_IDS', 
                                                                                         'FONT_SIZE_PERCENTAGE', 
                                                                                         $i);

                                    $tmp_lang_hash = hash(
                                                     'sha1', 
                                                     $tmp_copy_fullscrn_header . 
                                                     $tmp_copy_fullscrn_title . 
                                                     $tmp_copy_fullscrn_body . 
                                                     $tmp_copy_fullscrn_font_size_percentage);

                                    $tmp_XML_out_LANG_PACK = ('
                        <lang_pack>
                            <lang_id>' . $tmp_LANG_ID . '</lang_id>
                            <copy_fullscrn_header><![CDATA[' . $tmp_copy_fullscrn_header . ']]></copy_fullscrn_header>
                            <copy_fullscrn_title><![CDATA[' . $tmp_copy_fullscrn_title . ']]></copy_fullscrn_title>
                            <copy_fullscrn_body><![CDATA[<div class="cb_20"></div>' . $tmp_copy_fullscrn_body . ']]></copy_fullscrn_body>
                            <copy_fullscrn_font_size_percentage>' . $tmp_copy_fullscrn_font_size_percentage . '</copy_fullscrn_font_size_percentage>
                            <cleartext_endpoint>NULL</cleartext_endpoint>
                            <copy_hash>' . $tmp_lang_hash . '</copy_hash>
                        </lang_pack>');

                                    $xmlprofileNodes = $xmlprofileNodes . 
                                                       $tmp_XML_out_LANG_PACK;

                                }

                            }

                        }

                    }

                    $tmp_doc_hash = hash('sha1', $xmlprofileNodes);

                    $tmp_XML_hash = ('<config_hash>' . $tmp_doc_hash . '</config_hash>');

                    $xmlprofileNodes = $xmlprofileNodes . 
                                       $tmp_XML_LANG_PACKS_Z . 
                                       $tmp_XML_hash . 
                                       $xmlFileCLOSE;

                    $tmp_profile_hash = hash('sha1', $xmlprofileNodes);


                    //error_log('2651 XML FULL-> ' . $xmlprofileNodes);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Write the profile XML. 
                     *
                     * File output format:
                     * YYYYMMDDHHMMSS_[PROFILE-NAME-SEARCH-CLEANED]_[FULL-MINI]_HASH(5).xml
                     *
                     */
                    $tmp_filename_date         = date('Ymdhis');
                    $tmp_filename_name         = $this->search_FillerSanitize(strtolower($tmp_name));
                    $tmp_filename_hash         = $oUser->generateNewKey(5);
                    $tmp_filename_profile      = $tmp_filename_date . '_' . 
                                                 $tmp_filename_name . '_' . 
                                                 $tmp_type . '_' . 
                                                 $tmp_filename_hash . 
                                                 '.xml';
                    $tmp_filename_index        = 'profile_index.xml';
                    $tmp_root_path             = $oUser->getEnvParam('DOCUMENT_ROOT') . 
                                                 $oUser->getEnvParam('DOCUMENT_ROOT_DIR');
                    $tmp_filename_index        = $tmp_root_path . '/' . 
                                                 $tmp_path_profile_index_xml . 
                                                 $tmp_filename_index;
                    $tmp_filename_profile_PATH = $tmp_root_path . '/' . 
                                                 $tmp_path_profile_xml . 
                                                 $tmp_filename_profile;
                    $tmp_filename_profile_HTTP = $oUser->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                                                 $oUser->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                                                 $tmp_path_profile_xml . 
                                                 $tmp_filename_profile;

                    if(\file_exists($tmp_filename_profile_PATH)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Delete the pre-existing 
                         * XML file.  
                         *
                         */
                        unlink($tmp_filename_profile_PATH);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Write the freshest 
                         * data to a new 
                         * XML file. 
                         *
                         */
                        $file_handle = \fopen($tmp_filename_profile_PATH, 'a');
                        $tmp_prof_xml_status = \fwrite($file_handle, $xmlprofileNodes);
                        \fclose($file_handle);

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Write the freshest 
                         * data to a new 
                         * XML file. 
                         *
                         */
                        $file_handle = \fopen($tmp_filename_profile_PATH, 'a');
                        $tmp_prof_xml_status = \fwrite($file_handle, $xmlprofileNodes);
                        \fclose($file_handle);

                    }

                    if($tmp_prof_xml_status !== false){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Process success. 
                         * Build index. 
                         *
                         */
                        $tmp_XML_DELTA_PROFILE_INDEX = ('<profile>
                        <requestor_id>jville</requestor_id>
                        <pid>' . $tmp_pid . '</pid>
                        <config_hash>' . $tmp_profile_hash . '</config_hash>
                        <profile_endpoint>' . $tmp_filename_profile_HTTP . '</profile_endpoint>
                        <profile_endpoint_prod>' . $tmp_filename_profile_HTTP . '</profile_endpoint_prod>
                        <cache_bust>Oh Lord Jesus!</cache_bust>
                        <lastmodified>' . $tmp_lastmodified_FULL . '</lastmodified>
                    </profile>');

                        $xmlprofileNodes = $xmlIndexFileNEW . 
                                           $tmp_XML_DELTA_PROFILE_INDEX;

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Compile the other 
                         * overlay index 
                         * node - Mini. 
                         *
                         */
                        $tmp_index_other_pid             = $oDB_RESP->return_data_element(
                                                                      $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                      'OVERLAY_MGMT', 
                                                                      'MINI_PROFILE_ID');
                        $tmp_index_other_endpoint        = $oDB_RESP->return_data_element(
                                                                      $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                      'OVERLAY_MGMT', 
                                                                      'MINI_PROFILE_ENDPOINT');
                        $tmp_index_other_config_hash     = $oDB_RESP->return_data_element(
                                                                      $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                      'OVERLAY_MGMT', 
                                                                      'MINI_PROFILE_HASH');
                        /* 
                        $tmp_index_other_lastmodified = $oDB_RESP->return_data_element(
                                                                   $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                   'OVERLAY_MGMT', 
                                                                   'MINI_LASTMODIFIED');

                         */

                        $tmp_XML_DELTA_PROFILE_INDEX = ('<profile>
                        <requestor_id>jville</requestor_id>
                        <pid>' . $tmp_index_other_pid . '</pid>
                        <config_hash>' . $tmp_index_other_config_hash . '</config_hash>
                        <profile_endpoint>' . $tmp_index_other_endpoint . '</profile_endpoint>
                        <profile_endpoint_prod>' . $tmp_index_other_endpoint . '</profile_endpoint_prod>
                        <cache_bust>Oh Lord Jesus!</cache_bust>
                        <lastmodified>' . $tmp_lastmodified_MINI . '</lastmodified>
                    </profile>');

                        $xmlprofileNodes = $xmlprofileNodes . 
                                           $tmp_XML_DELTA_PROFILE_INDEX . 
                                           $xmlIndexFileCLOSE;

                        if(\file_exists($tmp_filename_index)){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Delete the pre-existing XML file. 
                             *
                             */
                            unlink($tmp_filename_index);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Write the freshest 
                             * data to a new 
                             * XML file. 
                             *
                             */
                            $file_handle         = \fopen($tmp_filename_index, 'a');
                            $tmp_prof_xml_status = \fwrite($file_handle, $xmlprofileNodes);
                            \fclose($file_handle);

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Write the freshest 
                             * data to a new 
                             * XML file. 
                             *
                             */
                            $file_handle         = \fopen($tmp_filename_index, 'a');
                            $tmp_prof_xml_status = \fwrite($file_handle, $xmlprofileNodes);
                            \fclose($file_handle);

                        }

                    }else{

                        return false;

                    }

                    if($tmp_prof_xml_status !== false){

                        /*
                        CREATE TABLE `cia00_overlay_state` (
                          `STATE_ID` int(11) NOT NULL,
                          `MINI_STATE` tinyint(1) NOT NULL DEFAULT '0',
                          `MINI_COPY_STATE` tinyint(1) NOT NULL DEFAULT '1',
                          `MINI_TIMER_STATE` tinyint(11) NOT NULL DEFAULT '1',
                          `MINI_PROFILE_ID` char(70) NOT NULL,
                          `MINI_PROFILE_HASH` varchar(50) DEFAULT NULL,
                          `MINI_PROFILE_ENDPOINT` varchar(255) DEFAULT NULL,
                          `MINI_LASTMODIFIED` datetime DEFAULT NULL,
                          `FULLSCREEN_STATE` tinyint(1) NOT NULL DEFAULT '0',
                          `FULLSCREEN_COPY_STATE` tinyint(1) DEFAULT '1',
                          `FULLSCREEN_PROFILE_ID` char(70) NOT NULL,
                          `FULLSCREEN_PROFILE_HASH` varchar(50) DEFAULT NULL,
                          `FULLSCREEN_PROFILE_ENDPOINT` varchar(255) DEFAULT NULL,
                          `FULLSCREEN_LASTMODIFIED` datetime DEFAULT NULL,
                          `MODIFIER_ID` char(70) NOT NULL,
                          `MODIFIER_IP` int(11) UNSIGNED NOT NULL,
                          `MODIFIER_SESSION_ID` char(26) NOT NULL,
                          `DATEMODIFIED` datetime NOT NULL,
                          `DATECREATED` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
                        ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='View state of overlay component'

                        */

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Sync database state. 
                         *
                         */
                        self::$query = 'UPDATE `cia00_overlay_state` ' . 
                                       'SET ' . 
                                           '`FULLSCREEN_PROFILE_ID` = "' . $tmp_pid . '", ' . 
                                           '`FULLSCREEN_PROFILE_HASH` = "' . $tmp_profile_hash . '", ' . 
                                           '`FULLSCREEN_PROFILE_ENDPOINT` = "' . $tmp_filename_profile_HTTP . '", ' . 
                                           '`MODIFIER_IP` = INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                           '`MODIFIER_SESSION_ID` = "' . \session_id() . '", ' . 
                                           '`FULLSCREEN_LASTMODIFIED` = "' . $ts . '" , ' . 
                                           '`DATEMODIFIED` = "' . $ts . '" ' . 
                                       'LIMIT 1;';

                        self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                             self::$mysqli, 
                                                                             self::$query);

                        if(self::$mysqli->error){

                            throw new Exception('Fullscreen overlay ' . 
                                'XML sync error :: [' . 
                                self::$mysqli->error . '].');

                        }

                        return true;

                    }else{

                        return false;

                    }

                break;
                case 'mini':

                    $tmp_pid               = $oDB_RESP->return_data_element(
                                                        $oDB_RESP->return_serial($tmp_serial_handle), 
                                                        'OVERLAY_MGMT', 
                                                        'MINI_PROFILE_ID');
                    $tmp_lastmodified_MINI = $oDB_RESP->return_data_element(
                                                        $oDB_RESP->return_serial($tmp_serial_handle), 
                                                        'OVERLAY_MGMT', 
                                                        'MINI_LASTMODIFIED');
                    $tmp_lastmodified_FULL = $oDB_RESP->return_data_element(
                                                        $oDB_RESP->return_serial($tmp_serial_handle), 
                                                        'OVERLAY_MGMT', 
                                                        'FULLSCREEN_LASTMODIFIED');
                    
                    $tmp_type = $type;
                    $tmp_master_overlay_visible_BOOL = $this->int_to_string_BOOL_conversion(
                                                              $oDB_RESP->return_data_element(
                                                                         $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                         'OVERLAY_MGMT', 
                                                                         'MINI_STATE'));
                    $timer_overlay_visible_BOOL      = $this->int_to_string_BOOL_conversion(
                                                              $oDB_RESP->return_data_element(
                                                                         $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                         'OVERLAY_MGMT', 
                                                                         'MINI_TIMER_STATE'));
                    $tmp_copy_overlay_visible_BOOL   = $this->int_to_string_BOOL_conversion(
                                                              $oDB_RESP->return_data_element(
                                                                         $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                         'OVERLAY_MGMT', 
                                                                         'MINI_COPY_STATE'));

                    $tmp_master_overlay_display_area_width_in_px  = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'MINI_CONFIG', 
                                                                               'DEFAULT_WIDTH');
                    $tmp_master_overlay_display_area_height_in_px = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'MINI_CONFIG', 
                                                                               'DEFAULT_HEIGHT');
                    $tmp_copy_display_area_width_in_px            = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'MINI_CONFIG', 
                                                                               'COPY_DISPLAY_AREA_WIDTH_PX');
                    $tmp_copy_display_area_height_in_px           = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'MINI_CONFIG', 
                                                                               'COPY_DISPLAY_AREA_HEIGHT_PX');

                    $tmp_master_overlay_bgcolor                   = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'MINI_CONFIG', 
                                                                               'HEXCOLOR');
                    $tmp_master_overlay_bgopacity                 = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'MINI_CONFIG', 
                                                                               'OPACITY');
                    $tmp_overlay_copy_color                       = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'MINI_CONFIG', 
                                                                               'COPY_HEXCOLOR');
                    $tmp_timer_copy_color                         = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'MINI_CONFIG', 
                                                                               'TIMER_HEXCOLOR');

                    $tmp_lang_pack_rotation_interval_secs         = $oDB_RESP->return_data_element(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'MINI_CONFIG', 
                                                                               'LANG_PACK_ROTATION_SECS');
                    $tmp_name                                     = $oDB_RESP->retrieveDataByID(
                                                                               $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                               'MINI_PROFILE', 
                                                                               $tmp_pid, 
                                                                               'PROFILE_NAME');

                    // error_log('2895 timer mode = ' . $postid);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Timer state management. 
                     *
                     */
                    switch($postid){
                        case 'hidetmr_p':
                        case 'hideovrly_pt':
                            // Hide the timer in pause state. 
                        break;
                        case 'hidetmr_k':
                        case 'hideovrly_kt':
                            // Hide the timer and keep it going. 
                        break;
                        case 'hidetmr_r':
                        case 'hideovrly_rt':
                            // Hide the timer and reset it. 
                        break;
                        case 'show_overlay':
                            // Show the timer. 
                        break;
                        case 'reset_timer':

                            /*
                            <timer_mode>NULL</timer_mode>
                            <timer_override_parameter>NULL</timer_override_parameter>
                            <timer_override_transaction_hash>NULL</timer_override_transaction_hash>

                            */

                        break;

                    }

                    $tmp_XML_out_section_A = ('<pid>' . $tmp_pid . '</pid>
    <lastmodified>' . $tmp_lastmodified_MINI . '</lastmodified>
    <type>' . $tmp_type . '</type>
    <master_overlay_visible_BOOL>' . $tmp_master_overlay_visible_BOOL . '</master_overlay_visible_BOOL>
    <timer_overlay_visible_BOOL>' . $timer_overlay_visible_BOOL . '</timer_overlay_visible_BOOL>
    <copy_overlay_visible_BOOL>' . $tmp_copy_overlay_visible_BOOL . '</copy_overlay_visible_BOOL>
    <timer_mode>'.$postid.'</timer_mode>
    <timer_override_parameter>NULL</timer_override_parameter>
    <timer_override_transaction_hash>NULL</timer_override_transaction_hash>
    <master_overlay_display_area_width_in_px>' . $tmp_master_overlay_display_area_width_in_px . '</master_overlay_display_area_width_in_px>
    <master_overlay_display_area_height_in_px>' . $tmp_master_overlay_display_area_height_in_px . '</master_overlay_display_area_height_in_px>
    <content_area_width_in_px>' . $tmp_copy_display_area_width_in_px . '</content_area_width_in_px>
    <timer_display_area_width_in_px>0</timer_display_area_width_in_px>
    <timer_display_area_height_in_px>0</timer_display_area_height_in_px>
    <copy_display_area_width_in_px>' . $tmp_copy_display_area_width_in_px . '</copy_display_area_width_in_px>
    <copy_display_area_height_in_px>' . $tmp_copy_display_area_height_in_px . '</copy_display_area_height_in_px>
    <master_overlay_bgcolor>' . $tmp_master_overlay_bgcolor . '</master_overlay_bgcolor>
    <master_overlay_bgopacity>' . $tmp_master_overlay_bgopacity . '</master_overlay_bgopacity>
    <overlay_copy_color>' . $tmp_overlay_copy_color . '</overlay_copy_color>
    <timer_copy_color>' . $tmp_timer_copy_color . '</timer_copy_color>
    <lang_pack_rotation_interval_secs>' . $tmp_lang_pack_rotation_interval_secs . '</lang_pack_rotation_interval_secs>
    <name>' . $tmp_name . '</name>');

                    $xmlprofileNodes = $xmlprofileNodes . 
                                       $tmp_XML_out_section_A . 
                                       $tmp_XML_LANG_PACKS_A;

                    $tmp_loop_size = $oDB_RESP->return_sizeof(
                                                $oDB_RESP->return_serial($tmp_serial_handle), 
                                                'LANG_IDS');

                    //error_log('2610 tmp_loop_size->' . $tmp_loop_size);

                    for($i = 0; $i < $tmp_loop_size; $i++){

                        $tmp_LANG_ID = $oDB_RESP->return_data_element(
                                                  $oDB_RESP->return_serial($tmp_serial_handle), 
                                                  'LANG_IDS', 
                                                  'LANG_ID', 
                                                  $i);

                        //error_log('2614 tmp_LANG_ID->' . $tmp_LANG_ID);

                        if($oDB_RESP->ping_value_existence(
                                      $oDB_RESP->return_serial($tmp_serial_handle), 
                                      'LANG_PACKS', 
                                      'LANG_ID', 
                                      $tmp_LANG_ID))
                        {

                            $tmp_loop2_size = $oDB_RESP->return_sizeof(
                                                         $oDB_RESP->return_serial($tmp_serial_handle), 
                                                         'LANG_PACKS');

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Let's work on getting the 
                             * data we need to support 
                             * this...then come back...
                             *
                             *
                             * 5
                             *
                             */
                            for($ii = 0; $ii < $tmp_loop2_size; $ii++){

                                /*
                                `cia00_lang_copy`.`MESSAGE_TITLE`
                                `cia00_lang_copy`.`MESSAGE_TITLE_BLOB`
                                `cia00_lang_copy`.`MESSAGE_NUMBER`
                                `cia00_lang_copy`.`MESSAGE_NUMBER_BLOB`
                                `cia00_lang_copy`.`CONFERENCE_TITLE`
                                `cia00_lang_copy`.`CONFERENCE_TITLE_BLOB`
                                `cia00_lang_copy`.`PAGE_HEADER`
                                `cia00_lang_copy`.`PAGE_HEADER_BLOB`
                                `cia00_lang_copy`.`PAGE_TITLE`
                                `cia00_lang_copy`.`PAGE_TITLE_BLOB`
                                `cia00_lang_copy`.`PAGE_CODE_BLOB`
                                `cia00_lang_copy`.`DATE_COPY`
                                `cia00_lang_copy`.`DATE_COPY_BLOB`

                                 */

                                if($tmp_pid == $oDB_RESP->return_data_element(
                                                          $oDB_RESP->return_serial($tmp_serial_handle), 
                                                          'LANG_PACKS', 
                                                          'PROFILE_ID', 
                                                          $ii))
                                {

                                    $tmp_copy_m_title                 = $oDB_RESP->return_data_element(
                                                                                   $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                                   'LANG_PACKS', 
                                                                                   'MESSAGE_TITLE_BLOB', 
                                                                                   $ii);
                                    $tmp_copy_m_message               = $oDB_RESP->return_data_element(
                                                                                   $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                                   'LANG_PACKS', 
                                                                                   'MESSAGE_NUMBER_BLOB', 
                                                                                   $ii);
                                    $tmp_copy_m_conference            = $oDB_RESP->return_data_element(
                                                                                   $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                                   'LANG_PACKS', 
                                                                                   'CONFERENCE_TITLE_BLOB', 
                                                                                   $ii);
                                    $tmp_copy_m_date                  = $oDB_RESP->return_data_element(
                                                                                   $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                                   'LANG_PACKS', 
                                                                                   'DATE_COPY_BLOB', 
                                                                                   $ii);
                                    $tmp_copy_m_font_size_percentage  = $oDB_RESP->return_data_element(
                                                                                   $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                                   'LANG_IDS', 
                                                                                   'FONT_SIZE_PERCENTAGE', 
                                                                                   $i);
                                    $tmp_copy_m_padding_top_px        = $oDB_RESP->return_data_element(
                                                                                   $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                                   'LANG_IDS', 
                                                                                   'COPY_PADDING_TOP_PX', 
                                                                                   $i);
                                    $tmp_timer_m_font_size_percentage = $oDB_RESP->return_data_element(
                                                                                   $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                                   'LANG_IDS', 
                                                                                   'TIMER_FONT_SIZE_PERCENTAGE', 
                                                                                   $i);

                                    $tmp_lang_hash = hash(
                                                     'sha1', 
                                                     $tmp_copy_m_title . 
                                                     $tmp_copy_m_message . 
                                                     $tmp_copy_m_conference . 
                                                     $tmp_copy_m_date . 
                                                     $tmp_copy_m_font_size_percentage . 
                                                     $tmp_copy_m_padding_top_px . 
                                                     $tmp_timer_m_font_size_percentage);

                                    $tmp_XML_out_LANG_PACK = ('
                            <lang_pack>
                                <lang_id>' . $tmp_LANG_ID . '</lang_id>
                                <copy_m_title><![CDATA[' . $tmp_copy_m_title . ']]></copy_m_title>
                                <copy_m_message><![CDATA[' . $tmp_copy_m_message . ']]></copy_m_message>
                                <copy_m_conference><![CDATA[' . $tmp_copy_m_conference . ']]></copy_m_conference>
                                <copy_m_date><![CDATA[' . $tmp_copy_m_date . ']]></copy_m_date>
                                <copy_m_scroll_speed>50</copy_m_scroll_speed>
                                <copy_m_scroll_direction>right_to_left</copy_m_scroll_direction>
                                <copy_m_font_size_percentage>' . $tmp_copy_m_font_size_percentage . '</copy_m_font_size_percentage>
                                <copy_m_padding_top_px>' . $tmp_copy_m_padding_top_px . '</copy_m_padding_top_px>
                                <timer_m_font_size_percentage>' . $tmp_timer_m_font_size_percentage . '</timer_m_font_size_percentage>
                                <cleartext_endpoint>NULL</cleartext_endpoint>
                                <copy_hash>' . $tmp_lang_hash . '</copy_hash>
                            </lang_pack>');

                                    $xmlprofileNodes = $xmlprofileNodes . 
                                    $tmp_XML_out_LANG_PACK;

                                }

                            }

                        }

                    }

                    $tmp_doc_hash = hash('sha1', $xmlprofileNodes);

                    $tmp_XML_hash = ('<config_hash>' . $tmp_doc_hash . '</config_hash>');

                    $xmlprofileNodes = $xmlprofileNodes . 
                                       $tmp_XML_LANG_PACKS_Z . 
                                       $tmp_XML_hash . 
                                       $xmlFileCLOSE;

                    $tmp_profile_hash = hash('sha1', $xmlprofileNodes);

                    //error_log('2781 XML MINI-> ' . $xmlprofileNodes);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Write the profile XML. 
                     *
                     * File output format:
                     * YYYYMMDDHHMMSS_[PROFILE-NAME-SEARCH-CLEANED]_[FULL-MINI]_HASH(5).xml
                     *
                     */
                    $tmp_filename_date         = date('Ymdhis');
                    $tmp_filename_name         = $this->search_FillerSanitize(strtolower($tmp_name));
                    $tmp_filename_hash         = $oUser->generateNewKey(5);
                    $tmp_filename_profile      = $tmp_filename_date . '_' . 
                                                 $tmp_filename_name . '_' . 
                                                 $tmp_type . '_' . 
                                                 $tmp_filename_hash . 
                                                 '.xml';
                    $tmp_filename_index        = 'profile_index.xml';
                    $tmp_root_path             = $oUser->getEnvParam('DOCUMENT_ROOT') . 
                                                 $oUser->getEnvParam('DOCUMENT_ROOT_DIR');
                    $tmp_filename_index        = $tmp_root_path . '/' . 
                                                 $tmp_path_profile_index_xml . 
                                                 $tmp_filename_index;
                    $tmp_filename_profile_PATH = $tmp_root_path . '/' . 
                                                 $tmp_path_profile_xml . 
                                                 $tmp_filename_profile;
                    $tmp_filename_profile_HTTP = $oUser->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                                                 $oUser->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                                                 $tmp_path_profile_xml . 
                                                 $tmp_filename_profile;

                    if(\file_exists($tmp_filename_profile_PATH)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Delete the pre-existing 
                         * XML file.  
                         *
                         */
                        unlink($tmp_filename_profile_PATH);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Write the freshest 
                         * data to a new 
                         * XML file. 
                         *
                         */
                        $file_handle = \fopen($tmp_filename_profile_PATH, 'a');
                        $tmp_prof_xml_status = \fwrite($file_handle, $xmlprofileNodes);
                        \fclose($file_handle);

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Write the freshest 
                         * data to a new 
                         * XML file. 
                         *
                         */
                        $file_handle = \fopen($tmp_filename_profile_PATH, 'a');
                        $tmp_prof_xml_status = \fwrite($file_handle, $xmlprofileNodes);
                        \fclose($file_handle);

                    }

                    if($tmp_prof_xml_status !== false){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Process success. 
                         * Build index. 
                         *
                         */
                        $tmp_XML_DELTA_PROFILE_INDEX = ('<profile>
                        <requestor_id>jville</requestor_id>
                        <pid>' . $tmp_pid . '</pid>
                        <config_hash>' . $tmp_profile_hash . '</config_hash>
                        <profile_endpoint>' . $tmp_filename_profile_HTTP . '</profile_endpoint>
                        <profile_endpoint_prod>' . $tmp_filename_profile_HTTP . '</profile_endpoint_prod>
                        <cache_bust>Oh Lord Jesus!</cache_bust>
                        <lastmodified>' . $tmp_lastmodified_MINI . '</lastmodified>
                    </profile>');

                        $xmlprofileNodes = $xmlIndexFileNEW . $tmp_XML_DELTA_PROFILE_INDEX;

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Compile the other 
                         * overlay index node - 
                         * Fullscreen. 
                         *
                         */
                        $tmp_index_other_pid            = $oDB_RESP->return_data_element(
                                                                     $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                     'OVERLAY_MGMT', 
                                                                     'FULLSCREEN_PROFILE_ID');
                        $tmp_index_other_endpoint       = $oDB_RESP->return_data_element(
                                                                    $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                    'OVERLAY_MGMT', 
                                                                    'FULLSCREEN_PROFILE_ENDPOINT');
                        $tmp_index_other_config_hash    = $oDB_RESP->return_data_element(
                                                                     $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                     'OVERLAY_MGMT', 
                                                                     'FULLSCREEN_PROFILE_HASH');

                        /*
                        $tmp_index_other_lastmodified = $oDB_RESP->return_data_element(
                                                                   $oDB_RESP->return_serial($tmp_serial_handle), 
                                                                   'OVERLAY_MGMT', 
                                                                   'FULLSCREEN_LASTMODIFIED');

                         */

                        $tmp_XML_DELTA_PROFILE_INDEX = ('<profile>
                        <requestor_id>jville</requestor_id>
                        <pid>' . $tmp_index_other_pid . '</pid>
                        <config_hash>' . $tmp_index_other_config_hash . '</config_hash>
                        <profile_endpoint>' . $tmp_index_other_endpoint . '</profile_endpoint>
                        <profile_endpoint_prod>' . $tmp_index_other_endpoint . '</profile_endpoint_prod>
                        <cache_bust>Oh Lord Jesus!</cache_bust>
                        <lastmodified>' . $tmp_lastmodified_FULL . '</lastmodified>
                    </profile>');

                        $xmlprofileNodes = $xmlprofileNodes . 
                                           $tmp_XML_DELTA_PROFILE_INDEX . 
                                           $xmlIndexFileCLOSE;

                        if(\file_exists($tmp_filename_index)){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Delete the pre-existing 
                             * XML file. 
                             *
                             */
                            unlink($tmp_filename_index);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Write the freshest 
                             * data to a new 
                             * XML file. 
                             *
                             */
                            $file_handle = \fopen($tmp_filename_index, 'a');
                            $tmp_prof_xml_status = \fwrite($file_handle, $xmlprofileNodes);
                            \fclose($file_handle);

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Write the freshest 
                             * data to a new 
                             * XML file. 
                             *
                             */
                            $file_handle = \fopen($tmp_filename_index, 'a');
                            $tmp_prof_xml_status = \fwrite($file_handle, $xmlprofileNodes);
                            \fclose($file_handle);

                        }

                    }else{

                        return false;

                    }

                    if($tmp_prof_xml_status !== false){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Sync database state. 
                         *
                         */
                        self::$query = 'UPDATE `cia00_overlay_state` ' . 
                                       'SET ' . 
                                           '`MINI_PROFILE_ID` = "' . $tmp_pid . '", ' . 
                                           '`MINI_PROFILE_HASH` = "' . $tmp_profile_hash . '", ' . 
                                           '`MINI_PROFILE_ENDPOINT` = "' . $tmp_filename_profile_HTTP . '", ' . 
                                           '`MODIFIER_IP` = INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"), ' . 
                                           '`MODIFIER_SESSION_ID` = "' . session_id() . '", ' . 
                                           '`MINI_LASTMODIFIED` = "' . $ts . '" , ' . 
                                           '`DATEMODIFIED` = "' . $ts . '" ' . 
                                       'LIMIT 1;';

                        self::$result = $oUserEnvironment->oMYSQLI_CONN_MGR->processQuery(
                                                                             self::$mysqli, 
                                                                             self::$query);

                        if(self::$mysqli->error){

                            throw new Exception('Mini overlay XML ' . 
                                'database sync error :: [' . 
                                self::$mysqli->error . '].');

                        }

                        return true;

                    }else{

                        return false;

                    }

                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('The overlay type, ' . 
                        \print_r($type, true) . 
                        ', that was provided for ' . 
                        'syncXML() does not exist in the system.');

                break;

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
    function cleanupcharacters($mystring)
    {

        $mystring = \str_replace(
                    '&', 
                    'and', 
                    $mystring);

        return $mystring;

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
    function properReplace(
             $pattern, 
             $replacement, 
             $original_str)
    {

        if(\is_array($pattern)){

            $replacement_array[0] = $replacement;

            $original_str = \str_replace(
                            $pattern, 
                            $replacement_array, 
                            $original_str);

        }else{

            $pattern_array[0]     = $pattern;
            $replacement_array[0] = $replacement;

            $original_str = \str_replace(
                            $pattern_array, 
                            $replacement_array, 
                            $original_str);

        }

        return $original_str;

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
         * the jony5_database_integration 
         * class definition. 
         *
         * 
         * 5 :: Wednesday, July 1, 2026 @ 0451 hrs.
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