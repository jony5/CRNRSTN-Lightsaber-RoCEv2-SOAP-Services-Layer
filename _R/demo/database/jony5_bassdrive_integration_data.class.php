<?php
/**
 * @package CRNRSTN

// 5 ::
// Code is Poetry */
# C # U # S # T # O # M # # R # E # S # O # U # R # C # E
#
#  CLASS :: bassdrive_integration_data
#  VERSION :: 1.00.0000
#  DATE :: October 2, 2021 @ 1234 hrs.
#  AUTHOR :: Jonathan 'J5' Harris <jharris@evifweb.com>
#  URI ::
#  DESCRIPTION :: 10/10/2121 to 1/18/2023. 
#                 Bassdrive® Integrations Services 
#                 for radio station LIVE relay 
#                 stream status sync with 
#                 http://jony5.com was cut off on 
#                 Wednesday, January 18, 2023 @ 0640 hrs.
#                 due to 404 response in production 
#                 on the JSON object endpoint for 
#                 the live stream relay. 
#                 5 :: Wednesday, July 1, 2026 @ 0617 hrs.
#
# C # U # S # T # O # M # # R # E # S # O # U # R # C # E
#
#  LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
#
class jony5_bassdrive_integration_data 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Added the "jony5_" prefix to the
     *       registered class name, bassdrive_integration_data,
     *       as taken from the Jony5.com production
     *       web site on Tuesday, November 11, 2025 @ 0401 hrs.
     *       Happy birthday to you, J5, my boy!
     *       11/11/2005 - 08/16/2021 @ 0345 hrs.
     *       5 :: Tuesday, November 11, 2025 @ 0559 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Replaced use of the 
     *       PHP native crc32() with 
     *       jony5_bassdrive_integration_data 
     *       crc_int32(). 
     *       5 :: Wednesday, July 1, 2026 @ 0500 hrs.
     *
     */

    public $oUser;
    public $oUserEnvironment;
    public $dataBaseIntegration;

    public $bassdrive_stream_ojson;
    public $broadcast_nation;
    public $broadcast_locale;
    public $stream_info;
    public $bassdrive_stats;
    public $bassdrive_stats_conn;
    public $bassdrive_stats_throughput;
    public $bassdrive_stats_throughput_unit;
    public $bassdrive_stats_max_conn;

    public $stream_meta_ARRAY = array();
    public $stream_pattern_ARRAY = array();
    public $stream_key;
    public $stream_title;
    public $stream_has_social;
    public $stream_social;
    public $social_sprite_serial;

    private static $social_lnk_cnt = 0;

    public $log_activity = '';

    private static $social_linewrap_fire_ARRAY = array();
    private static $stream_title_CRC;

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
    function __construct(
             $oUser, 
             $oUserEnvironment, 
             $dataBaseIntegration)
    {

        $this->oUser                = $oUser;
        $this->oUserEnvironment     = $oUserEnvironment;
        $this->dataBaseIntegration  = $dataBaseIntegration;
        $this->social_sprite_serial = \filesize($this->oUserEnvironment->getEnvParam('DOCUMENT_ROOT') . 
                                                $this->oUserEnvironment->getEnvParam('DOCUMENT_ROOT_DIR') . 
                                                '/common/imgs/bassdrive_component_creative' . 
                                                '/social_integration_sprite_high_qual.png') . 
                                      '.' . 
                                      \filemtime($this->oUserEnvironment->getEnvParam('DOCUMENT_ROOT') . 
                                                 $this->oUserEnvironment->getEnvParam('DOCUMENT_ROOT_DIR') . 
                                                 '/common/imgs/bassdrive_component_creative' . 
                                                 '/social_integration_sprite_high_qual.png') . 
                                      '.0';

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function reset_cache_ttl()
    {

        return $this->dataBaseIntegration->expire_ttl_bassdriveData(
                                           $this, 
                                           $this->oUserEnvironment, 
                                           'expire_ttl_bassdriveData');

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
     * @access public
     *
     */
    function load_data(
             $broadcast_nation, 
             $stream_info, 
             $stream_social, 
             $bassdrive_stats, 
             $bassdrive_stats_conn, 
             $bassdrive_stats_throughput, 
             $bassdrive_stats_throughput_unit, 
             $bassdrive_stats_max_conn)
    {

        if($this->oUserEnvironment->getEnvParam('BASSDRIVE_INTEGRATE')){

            $this->broadcast_nation                = $broadcast_nation;
            $this->stream_info                     = $stream_info;
            $this->stream_social                   = $stream_social;
            $this->bassdrive_stats                 = $bassdrive_stats;
            $this->bassdrive_stats_conn            = $bassdrive_stats_conn;
            $this->bassdrive_stats_throughput      = $bassdrive_stats_throughput;
            $this->bassdrive_stats_throughput_unit = $bassdrive_stats_throughput_unit;
            $this->bassdrive_stats_max_conn        = $bassdrive_stats_max_conn;

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
    private function return_json_extracted_stream_data($json_obj)
    {

        $tmp_stream_ARRAY             = array();
        $this->bassdrive_stream_ojson = $json_obj;

        if($this->oUserEnvironment->getEnvParam('BASSDRIVE_INTEGRATE') || 
            (\strlen($this->bassdrive_stream_ojson) > 10))
        {

            $tmp_nowplaying_name =
            $tmp_title           =
            $tmp_host            = '';
            $json                = \json_decode($this->bassdrive_stream_ojson, true);
            $raw_nowplaying      = $json['nowplaying'];
            $raw_stats           = $json['stats'];
            $tmp_stat_loop_cnt   = \sizeof($raw_stats);
            $tmp_nowplaying_loop_cnt = \sizeof($raw_nowplaying);

            for($i = 0; $i < $tmp_stat_loop_cnt; $i++){

                $tmp_name = $json['stats'][$i]['name'];

                switch($tmp_name){
                    case 'Total':

                        /*
                        "bandwidth" : 0,
                        "bitrateFormat" : "kilobit",
                        "bitrate" : 128,
                        "connections" : null,
                        "name" : "Random",
                        "capacity" : null,
                        "bandwidthFormat" : "megabit"

                         */

                        $tmp_bandwidth       = $json['stats'][$i]['bandwidth'];
                        //$tmp_bitrateFormat = $json['stats'][$i]['bitrateFormat'];
                        //$tmp_bitrate       = $json['stats'][$i]['bitrate'];
                        $tmp_connections     = $json['stats'][$i]['connections'];
                        $tmp_capacity        = $json['stats'][$i]['capacity'];
                        $tmp_bandwidthFormat = $json['stats'][$i]['bandwidthFormat'];

                    break;

                }

            }

            for($i = 0; $i < $tmp_nowplaying_loop_cnt; $i++){

                $tmp_name = $raw_nowplaying[$i]['name'];

                /*
                "name" : "Ben XO - XPOSURE Records Show w\/ guest host Schematic",
                "label" : "Artist"

                */

                $tmp_raw_nowplaying_name = $raw_nowplaying[$i]['name'];
                $tmp_label               = $raw_nowplaying[$i]['label'];

                if(\strlen($tmp_raw_nowplaying_name) > 5){

                    $tmp_nowplaying_name = $tmp_raw_nowplaying_name;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * $tmp_nowplaying_name = 
                     * -----
                     * The River City Rinse-Out *LIVE* w\/ iLL Omen
                     * Promo ZO - LIVE - FBTweet @promozo - IG @zopromo
                     *
                     */

                    $bassdrive_nowplaying_title_ARRAY = \explode(' - ', $tmp_raw_nowplaying_name);
                    $tmp_dash_cnt = \sizeof($bassdrive_nowplaying_title_ARRAY);

                    if($tmp_dash_cnt < 2){

                        $bassdrive_nowplaying_title_ARRAY = \explode('hosted', $tmp_raw_nowplaying_name);

                        if($this->json_decoded_node_is_empty($bassdrive_nowplaying_title_ARRAY, 1)){

                            $tmp_title = $bassdrive_nowplaying_title_ARRAY[0];
                            $tmp_host  = '';

                            $tmp_title = \trim($tmp_title);

                        }else{

                            $tmp_title = $bassdrive_nowplaying_title_ARRAY[0];
                            $tmp_host  = 'hosted'.$bassdrive_nowplaying_title_ARRAY[1];

                            $tmp_title = \trim($tmp_title);
                            $tmp_host  = \trim($tmp_host);

                        }

                    }else{

                        if($tmp_dash_cnt > 2){

                            $tmp_title = \trim($bassdrive_nowplaying_title_ARRAY[0]);
                            $tmp_title .= ' ' . \trim($bassdrive_nowplaying_title_ARRAY[1]);

                            $tmp_host = $bassdrive_nowplaying_title_ARRAY[2];

                            if(isset($bassdrive_nowplaying_title_ARRAY[3])){

                                $tmp_host = $tmp_host . ' ' . 
                                            $bassdrive_nowplaying_title_ARRAY[3];

                            }

                            if(isset($bassdrive_nowplaying_title_ARRAY[4])){

                                $tmp_host = $tmp_host . ' ' . 
                                            $bassdrive_nowplaying_title_ARRAY[4];

                            }

                            $tmp_title = \trim($tmp_title);
                            $tmp_host  = \trim($tmp_host);

                        }else{

                            $tmp_title = $bassdrive_nowplaying_title_ARRAY[0];
                            $tmp_host  = $bassdrive_nowplaying_title_ARRAY[1];

                            $tmp_title = \trim($tmp_title);
                            $tmp_host  = \trim($tmp_host);

                        }

                    }

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * I guess do nothing...no data here. 
                     * Perhaps there is another node 
                     * in the JSON.
                     *
                     *
                     * 5
                     *
                     */

                }

            }

            if($tmp_host != ''){

                $tmp_stream_info_out = $tmp_title . 
                                       '<br><span class="player-host">' . 
                                       $tmp_host . 
                                       '</span>';

            }else{

                $tmp_stream_info_out = $tmp_title;

            }

            $tmp_stream_info_out         = $this->cleanBassdriveOut($tmp_stream_info_out);
            $tmp_stream_info_out_ARRAY   = $this->applyProgramTitleFormatting($tmp_stream_info_out);
            $tmp_stream_info_out         = $tmp_stream_info_out_ARRAY['stream_info'];
            $tmp_stream_ARRAY['is_live'] = $tmp_stream_info_out_ARRAY['is_live'];

            if($tmp_stream_info_out_ARRAY['is_live'] == 'FALSE'){

                $pos_title = \strpos($tmp_stream_info_out,'<br><span class="player-host">');
                if($pos_title !== false){

                    $tmp_stream_info_out = $this->ptrn_replace(
                                                  '<br><span class="player-host">', 
                                                  '<div class="cb_2"></div><span class="player-host">', 
                                                  $tmp_stream_info_out);

                }

            }

            $tmp_stream_ARRAY['title_formatted'] = \html_entity_decode($tmp_stream_info_out);

            return $tmp_stream_ARRAY;

        }else{

            return '';

        }

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
     * @access public
     *
     */
    function refresh_expired_data(
             $relay_endpoint, 
             $broadcast_nation, 
             $stream_info, 
             $stream_social, 
             $bassdrive_stats_conn, 
             $bassdrive_stats_throughput, 
             $bassdrive_stats_throughput_unit, 
             $bassdrive_stats_max_conn)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: We have deactivated the jony5.com 
         *       Bassdrive.com integrations due to 
         *       a 404 response in production 
         *       on the JSON object endpoint for 
         *       the live stream relay. 
         *       5 :: Wednesday, January 18, 2023 @ 0640 hrs.
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * We cannot support Bassdrive® 
         * Integrations anymore. 
         *
         *
         * 5 :: Wednesday, January 18, 2023 @ 0642 hrs.
         *
         */
        return false;
        
        //$this->bassdrive_stream_ojson = $this->getUrlContent($relay_endpoint);
        $this->bassdrive_stream_ojson  = \file_get_contents('http://evifweb.com/_proxy/bassdrive/');

        if(\strlen($this->bassdrive_stream_ojson) < 2){

            return false;

        }

        //$this->bassdrive_stream_ojson = file_get_contents('http://evifweb.com/_proxy/bassdrive/relay.js');

        /*error_log(
         *   '[mthd ' . 
         *   __METHOD__ . '] [lnum ' . 
         *   __LINE__ . '] relay_endpoint[' . 
         *   $relay_endpoint . '] $this->bassdrive_stream_ojson=' . 
         *   print_r($this->bassdrive_stream_ojson, true));
         *
         */

        if($this->oUserEnvironment->getEnvParam('BASSDRIVE_INTEGRATE') || 
            (\strlen($this->bassdrive_stream_ojson) > 10))
        {

            $tmp_nowplaying_name     = '';
            $tmp_title               = '';
            $tmp_host                = '';
            $json                    = \json_decode($this->bassdrive_stream_ojson, true);
            $raw_nowplaying          = $json['nowplaying'];
            $raw_relays              = $json['relays'];
            $raw_stats               = $json['stats'];
            $tmp_stat_loop_cnt       = \sizeof($raw_stats);
            $tmp_relays_loop_cnt     = \sizeof($raw_relays);
            $tmp_nowplaying_loop_cnt = \sizeof($raw_nowplaying);

            for($i = 0; $i < $tmp_stat_loop_cnt; $i++){

                $tmp_name = $raw_stats[$i]['name'];

                switch($tmp_name){
                    case 'Total':

                        /*
                          {
                             "bandwidth" : 0,
                             "bitrateFormat" : "kilobit",
                             "bitrate" : 56,
                             "connections" : 0,
                             "name" : "Midgrade",
                             "capacity" : 0,
                             "bandwidthFormat" : "megabit"
                          }

                         */

                        $tmp_bandwidth       = $raw_stats[$i]['bandwidth'];
                        //$tmp_bitrateFormat = $raw_stats[$i]['bitrateFormat'];
                        //$tmp_bitrate       = $raw_stats[$i]['bitrate'];
                        $tmp_connections     = $raw_stats[$i]['connections'];
                        $tmp_capacity        = $raw_stats[$i]['capacity'];
                        $tmp_bandwidthFormat = $raw_stats[$i]['bandwidthFormat'];

                        $i = $tmp_stat_loop_cnt + 1;

                    break;

                }

            }

            for($i = 0; $i < $tmp_relays_loop_cnt; $i++){

                /*
                {
                 "bitrate" : "128",
                 "status" : "1",
                 "name" : "chi.bassdrive.co:80",
                 "listenerCount" : "277",
                 "listenerCountPercentage" : "2.77",
                 "audioFormat" : "mp3",
                 "streamURL" : "http:\/\/chi.bassdrive.co:80",
                 "streamURLios" : "http:\/\/chi.bassdrive.co:80",
                 "title" : "Deep Soul Hosted By Donovan Smith  LIVE "
                }

                */

                $tmp_name = \trim($raw_relays[$i]['title']);

                if(\strlen($tmp_name) > 3){

                    $tmp_nowplaying_name = $tmp_name;
                    $i                   = $tmp_relays_loop_cnt + 1;

                }

            }

            for($i = 0; $i < $tmp_nowplaying_loop_cnt; $i++){

                //$tmp_name = $raw_nowplaying[$i]['name'];

                /*
                "name" : "Ben XO - XPOSURE Records Show w\/ guest host Schematic",
                "label" : "Artist"

                 */

                $tmp_raw_nowplaying_name = \trim($raw_nowplaying[$i]['name']);

                if(\strlen($tmp_raw_nowplaying_name) < 4){

                    $tmp_raw_nowplaying_name = $tmp_nowplaying_name;

                }

                if(\strlen($tmp_raw_nowplaying_name) > 3){

                    $tmp_nowplaying_name = $tmp_raw_nowplaying_name;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * E.g., from the production 
                     * JSON relay, 
                     * $tmp_raw_nowplaying_name = 
                     * -----
                     * - The River City Rinse-Out *LIVE* w\/ iLL Omen
                     * - Promo ZO - LIVE - FBTweet @promozo - IG @zopromo
                     *
                     */

                    //$bassdrive_nowplaying_title_ARRAY = explode('-', $tmp_raw_nowplaying_name);
                    $bassdrive_nowplaying_title_ARRAY = \explode(' - ', $tmp_raw_nowplaying_name);
                    $tmp_dash_cnt = \sizeof($bassdrive_nowplaying_title_ARRAY);

                    if($tmp_dash_cnt < 2){

                        $bassdrive_nowplaying_title_ARRAY = \explode('hosted', $tmp_raw_nowplaying_name);

                        if($this->json_decoded_node_is_empty($bassdrive_nowplaying_title_ARRAY, 1)){

                            $tmp_title = $bassdrive_nowplaying_title_ARRAY[0];
                            $tmp_host  = '';
                            $tmp_title = \trim($tmp_title);

                        }else{

                            $tmp_title = $bassdrive_nowplaying_title_ARRAY[0];
                            $tmp_host  = 'hosted' . $bassdrive_nowplaying_title_ARRAY[1];
                            $tmp_title = \trim($tmp_title);
                            $tmp_host  = \trim($tmp_host);

                        }

                    }else{

                        if($tmp_dash_cnt > 2){

                            $tmp_title = \trim($bassdrive_nowplaying_title_ARRAY[0]);
                            $tmp_title .= ' ' . \trim($bassdrive_nowplaying_title_ARRAY[1]);

                            $tmp_host = $bassdrive_nowplaying_title_ARRAY[2];

                            if(isset($bassdrive_nowplaying_title_ARRAY[3])){

                                $tmp_host = $tmp_host . ' ' . 
                                            $bassdrive_nowplaying_title_ARRAY[3];

                            }

                            if(isset($bassdrive_nowplaying_title_ARRAY[4])){

                                $tmp_host = $tmp_host . ' ' . 
                                            $bassdrive_nowplaying_title_ARRAY[4];

                            }

                            $tmp_title = \trim($tmp_title);
                            $tmp_host  = \trim($tmp_host);

                        }else{

                            $tmp_title = $bassdrive_nowplaying_title_ARRAY[0];
                            $tmp_host  = $bassdrive_nowplaying_title_ARRAY[1];
                            $tmp_title = \trim($tmp_title);
                            $tmp_host  = \trim($tmp_host);

                        }

                    }

                    $i = $tmp_nowplaying_loop_cnt + 1;

                }

            }

            if($tmp_host != ''){

                $tmp_stream_info_out = $tmp_title . '<br><span class="player-host">' . 
                                       $tmp_host . '</span>';

            }else{

                if($tmp_title != ''){

                    $tmp_stream_info_out = $tmp_title;

                }

            }

            $tmp_stream_info_out       = $this->cleanBassdriveOut($tmp_stream_info_out);
            $tmp_stream_info_out_ARRAY = $this->applyProgramTitleFormatting($tmp_stream_info_out);
            $tmp_stream_info_out       = $tmp_stream_info_out_ARRAY['stream_info'];

            $tmp_db_resp_array = $this->return_stream_social_association_ARRAY($tmp_stream_info_out);

            $tmp_stream_broadcast_nation = $tmp_stream_info_out_ARRAY['broadcast_nation'];
            $tmp_stream_broadcast_nation = \str_replace(
                                            '<div id="nation_colors_wrapper" ' . 
                                            'class="nation_colors_wrapper"></div>', 
                                            $tmp_db_resp_array['stream_colors_html'], 
                                            $tmp_stream_broadcast_nation);

            if(!isset($tmp_db_resp_array['stream_locale'])){

                $tmp_db_resp_array['stream_locale'] = '';

            }

            $tmp_stream_locale = $tmp_db_resp_array['stream_locale'];

            /*error_log('[mthd ' . 
             *    __METHOD__ . '] [lnum ' . 
             *    __LINE__ . 
             *    '] $tmp_stream_locale = ' . 
             *    $tmp_stream_locale);
             */

            if($tmp_stream_info_out_ARRAY['is_live'] == 'FALSE'){

                $pos_title = \strpos($tmp_stream_info_out, '<br><span class="player-host">');
                if($pos_title !== false){

                    $tmp_stream_info_out = $this->ptrn_replace(
                                                  '<br><span class="player-host">', 
                                                  '<div class="cb_2"></div><span class="player-host">', 
                                                  $tmp_stream_info_out);

                }

            }

            $tmp_stream_info_out = \html_entity_decode($tmp_stream_info_out);

            $this->bassdrive_stats_conn            = $tmp_connections;
            $this->bassdrive_stats_max_conn        = $tmp_capacity;
            $this->bassdrive_stats_throughput      = $tmp_bandwidth;
            $this->bassdrive_stats_throughput_unit = $tmp_bandwidthFormat;
            self::$stream_title_CRC                = $this->crc_int32($tmp_stream_info_out);
            self::$social_linewrap_fire_ARRAY[self::$stream_title_CRC] = 0;

            /*error_log(
             *   '[mthd ' . 
             *   __METHOD__ . '] [lnum ' . 
             *   __LINE__ . '] $tmp_stream_info_out=' . 
             *   $tmp_stream_info_out);
             */

            $tmp_bassdrive_stats_out = '<div style="height:15px; overflow:hidden;">
                <div class="bassdrive_stats_copy_elem" ' . 
                'style="padding-left: 0px;">*</div>
                <div class="bassdrive_stats_copy_elem" ' . 
                'id="curr_total_connections" style="padding-left:2px;">' . 
                \number_format($tmp_connections) . '</div>
                <div class="bassdrive_stats_copy_elem" >connections (</div>
                <div id="curr_total_capacity" ' . 
                'class="bassdrive_stats_copy_elem" style="padding-left:0px;">' . 
                \number_format($tmp_capacity) . '</div>
                <div id="curr_total_capacity" ' . 
                'class="bassdrive_stats_copy_elem">max conn.) are</div>
            </div>
            <div style="height:15px; overflow:hidden; clear:both;">
                <div class="bassdrive_stats_copy_elem" ' . 
                'style="padding-left: 7px;">pulling</div>
                <div class="bassdrive_stats_copy_elem" id="curr_total_bandwidth">' . 
                $tmp_bandwidth . '</div>
                <div class="bassdrive_stats_copy_elem" ' . 
                'id="curr_total_bandwidthFormat" style="padding-left:2px;">' . 
                $this->shortFormat($tmp_bandwidthFormat) . '</div>
                <div class="bassdrive_stats_copy_elem" ' . 
                'style="padding-left:0px;">/s of </div>
                <div id="bass_situation" class="bassdrive_stats_copy_elem">' . 
                $this->oUser->returnBassdriveSituation() . '</div> 
                <div class="bassdrive_stats_copy_elem">from Bassdrive.</div>
            </div>';

            $this->stream_info      = $tmp_stream_info_out;
            $this->bassdrive_stats  = $tmp_bassdrive_stats_out;
            $this->broadcast_nation = $tmp_stream_broadcast_nation;
            $this->broadcast_locale = $tmp_stream_locale;

            $this->stream_social = '
                <div class="cb"></div>
                <div id="bassdrive_social_wrapper" class="bassdrive_social_wrapper">
                    ' . $this->return_social_HTML('stream_soundcloud', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_soundcloud2', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_soundcloud3', $tmp_db_resp_array) .'
                    ' . $this->return_social_HTML('stream_facebook', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_facebook2', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_facebook3', $tmp_db_resp_array) . '
                    ' . $this->return_social_HTML('stream_instagram', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_instagram2', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_instagram3', $tmp_db_resp_array) . '
                    ' . $this->return_social_HTML('stream_twitter', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_twitter2', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_twitter3', $tmp_db_resp_array) . '
                    ' . $this->return_social_HTML('stream_mixcloud', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_mixcloud2', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_mixcloud3', $tmp_db_resp_array) . '
                    ' . $this->return_social_HTML('stream_discogs', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_discogs2', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_discogs3', $tmp_db_resp_array) . '
                    ' . $this->return_social_HTML('stream_beatport', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_beatport2', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_beatport3', $tmp_db_resp_array) . '
                    ' . $this->return_social_HTML('stream_bandcamp', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_bandcamp2', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_bandcamp3', $tmp_db_resp_array) . '
                    ' . $this->return_social_HTML('stream_spotify', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_spotify2', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_spotify3', $tmp_db_resp_array) . '
                    ' . $this->return_social_HTML('stream_rolldabeats', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_rolldabeats2', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_rolldabeats3', $tmp_db_resp_array) . '
                    ' . $this->return_social_HTML('stream_youtube', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_youtube2', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_youtube3', $tmp_db_resp_array) . '
                    ' . $this->return_social_HTML('stream_www', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_www2', $tmp_db_resp_array) . 
                    $this->return_social_HTML('stream_www3', $tmp_db_resp_array) . '
                    ' . $this->return_social_HTML('stream_profile', $tmp_db_resp_array) . '
                    ' . $this->return_social_HTML('stream_archives', $tmp_db_resp_array) . '
                    ' . $this->return_social_HTML('stream_paypal', $tmp_db_resp_array) . '
                    ' . $this->return_social_HTML('stream_json', $tmp_db_resp_array) . '
                    ' . $this->return_social_HTML('stream_history', $tmp_db_resp_array) . '
                    <div class="cb"></div>
                    <div id="bassdrive_history_popup_wrapper">' . 
                    '<div id="bassdrive_history_close_wrapper">' . 
                    '<div id="bassdrive_history_close" ' . 
                    'onclick="bassdrive_close_history();">X</div>' . 
                    '</div><div id="bassdrive_history_popup"></div></div>
                </div>
            ';

            $this->dataBaseIntegration->bassdrive_log_insert(
                                        $this, 
                                        $this->oUserEnvironment, 
                                        'bassdrive_log_insert', 
                                        $tmp_nowplaying_name);

            return NULL;

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
    private function json_decoded_node_is_empty(
                     $json_decoded_ARRAY, 
                     $index)
    {

        if(isset($json_decoded_ARRAY[$index])){

            if($json_decoded_ARRAY[$index] == ''){

                return true;

            }else{

                return false;

            }

        }else{

            return true;

        }

    }

    /**
     * R :: CURL Bassdrive® "Now Playing" info.
     *
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function getUrlContent(
            $url, 
            $host = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Added $host = NULL
         *       input parameter to 
         *       jony5_user->getUrlContent(),
         *       and removed the hard-coded 
         *       "Host: www.jony5.com" 
         *       from the header array. 
         *       5 :: Wednesday, July 1, 2026 @ 0747 hrs.
         *
         */

        //$host = 'www.jony5.com';
        if(!(isset($host))){

            $host = self::$oUserEnvironment->getEnvParam('DOMAIN');

        }

        //$debugMode = 0;
        //$oLogger = new crnrstn_logging($debugMode);

        $header = array(
                  'User-Agent: Mozilla/5.0 (Macintosh; ' . 
                  'Intel Mac OS X 10_14_6) AppleWebKit/537.36 ' . 
                  '(KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36',
                  'X-Requested-With: XMLHttpRequest',
                  'Host: ' . $host,
                  'Accept: text/html, */*; q=0.01',
                  'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
                  'Accept-Language: en-US,en;q=0.9,zh-CN;q=0.8,zh;q=0.7',
                  'Accept-Encoding: gzip,deflate',
                  'Upgrade-Insecure-Requests: 1',
                  'Referer: ' . 
                  $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                  $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR'),
                  'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 100);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        if(!$data = \curl_exec($ch)){

            error_log(
                '[lnum ' . __LINE__ . 
                '] [mthd ' . __METHOD__ . 
                '] [ERROR] getUrlContent(' . 
                $url . 
                ') Fired CURL :: [' . 
                \print_r(curl_error($ch), true ) . '].');

            /*$oLogger->captureNotice(
             *          '[ERROR] CRON Fired CURL :: ' . 
             *          '/_cron/bassdrive_sync/', 
             *          \LOG_CRIT, 
             *          \curl_error($ch));
             */

        }else{

            /*
            error_log(
                '[lnum ' . __LINE__ . 
                '] [mthd ' . __METHOD__ . 
                '] getUrlContent(' . 
                $url . ') Fired CURL $data :: [' . 
                print_r($data, true ) . ']');

            */

        }

        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return (($httpcode >= 200) && ($httpcode < 300)) ? $data : false;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function shortFormat($data_format)
    {
        $format = '';

        switch($data_format){
            case 'kilabit':

                $format = 'KB';

            break;
            case 'megabit':

                $format = 'MB';

            break;
            case 'gigabit':

                $format = 'GB';

            break;
            default:

                $format = '?B';

            break;

        }

        return $format;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function cleanBassdriveOut($str)
    {

        $patterns        = array();
        $patterns[0]     = "<br><span class=\"player-host\">0</span>";

        $replacements    = array();
        $replacements[0] = '';

        #$str = preg_replace($patterns, $replacements, $str);
        $str = \str_replace($patterns, $replacements, $str);

        return $str;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_stream_social_association_ARRAY($str)
    {

        $this->stream_title = $str;
        return $this->dataBaseIntegration->return_stream_social_association_ARRAY(
                                           $this, 
                                           $this->oUserEnvironment, 
                                           'return_stream_social_association_ARRAY');

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
    private function return_social_HTML(
                     $channel, 
                     $stream_meta_ARRAY, 
                     $url = NULL)
    {

        $channel         = \strtolower($channel);
        $social_channel  = '';
        $link_force_wrap = '';

        $pos = \stripos($_SERVER['SCRIPT_NAME'], '_cron');

/*        if($pos !== false){

            if(((self::$social_lnk_cnt == 8) || 
                 (self::$social_lnk_cnt == 16)) && 
                 !$this->social_linewrap_fire)
            {

                //
                // CRON fired. 
                $link_force_wrap = '<div class="cb"></div>';
                $this->social_linewrap_fire = true;

                //error_log('[mthd ' . 
                //    __METHOD__ . '] [lnum ' . 
                //    __LINE__ . '] Force wrap at [' . 
                //    self::$social_lnk_cnt . 
                //    '].');

            }

        }else{
*/
        if((self::$stream_title_CRC == '') || 
            (self::$stream_title_CRC == NULL))
        {

            /*error_log('[mthd ' . 
             *    __METHOD__ . '] [lnum ' . 
             *    __LINE__ . '] Force [' . 
             *    self::$stream_title_CRC . 
             *    '] to wrap at [' . 
             *    self::$social_lnk_cnt . '].');
             */

            self::$stream_title_CRC = $this->crc_int32($this->oUser->generateNewKey());
            self::$social_linewrap_fire_ARRAY[self::$stream_title_CRC] = 0;

        }

        /*if(((self::$social_lnk_cnt == 8) || 
         *    (self::$social_lnk_cnt == 16) || 
         *    (self::$social_lnk_cnt == 24)) && 
         *    !(self::$social_linewrap_fire_ARRAY[self::$stream_title_CRC] == 1))
         * {
         *
         */

        if(((self::$social_lnk_cnt == 7) || 
            (self::$social_lnk_cnt == 15) || 
            (self::$social_lnk_cnt == 23)) && 
            ($channel == 'stream_paypal'))
        {

            $link_force_wrap = '<div class="cb"></div>';
            self::$social_linewrap_fire_ARRAY[self::$stream_title_CRC] = 1;

            /*error_log('[mthd ' . 
             *    __METHOD__ . '] [lnum ' . 
             *    __LINE__ . '] Force [' . 
             *    self::$stream_title_CRC . 
             *    '] wrap at [' . 
             *    self::$social_lnk_cnt . '].');
             */

        }else{

            if(((self::$social_lnk_cnt == 8) || 
                (self::$social_lnk_cnt == 16) || 
                (self::$social_lnk_cnt == 24)) && 
                !($channel == 'stream_json'))
            {

                $link_force_wrap = '<div class="cb"></div>';
                self::$social_linewrap_fire_ARRAY[self::$stream_title_CRC] = 1;

                /*error_log('[mthd ' . 
                 *    __METHOD__ . '] [lnum ' . 
                 *    __LINE__ . '] Force [' . 
                 *    self::$stream_title_CRC . 
                 *    '] wrap at [' . 
                 *    self::$social_lnk_cnt . '].');
                 */

            }

        }

        //}

        switch($channel){
            case 'stream_soundcloud':
            case 'stream_soundcloud2':
            case 'stream_soundcloud3':

                $social_channel = ' for the ' . 
                                  $this->stream_title . 
                                  ' SoundCloud playlist';

            break;
            case 'stream_facebook':
            case 'stream_facebook2':
            case 'stream_facebook3':

                $social_channel = ' for the ' . 
                                  $this->stream_title . 
                                  ' Facebook page';

            break;
            case 'stream_instagram':
            case 'stream_instagram2':
            case 'stream_instagram3':

                $social_channel = ' for the ' . 
                                  $this->stream_title . 
                                  ' Instagram feed';

            break;
            case 'stream_twitter':
            case 'stream_twitter2':
            case 'stream_twitter3':

                $social_channel = ' for the ' . 
                                  $this->stream_title . 
                                  ' Twitter feed';

            break;
            case 'stream_mixcloud':
            case 'stream_mixcloud2':
            case 'stream_mixcloud3':

                $social_channel = ' for the ' . 
                                  $this->stream_title . 
                                  ' Mixcloud community';

            break;
            case 'stream_discogs':
            case 'stream_discogs2':
            case 'stream_discogs3':

                $social_channel = ' for the ' . 
                                  $this->stream_title . 
                                  ' Discogs music selection';

            break;
            case 'stream_beatport':
            case 'stream_beatport2':
            case 'stream_beatport3':

                $social_channel = ' for the ' . 
                                  $this->stream_title . 
                                  ' Beatport featured tracks';

            break;
            case 'stream_bandcamp':
            case 'stream_bandcamp2':
            case 'stream_bandcamp3':

                $social_channel = ' for the ' . 
                                  $this->stream_title . 
                                  ' Bandcamp music page';

            break;
            case 'stream_spotify':
            case 'stream_spotify2':
            case 'stream_spotify3':

                $social_channel = ' for the ' . 
                                  $this->stream_title . 
                                  ' Spotify community';

            break;
            case 'stream_rolldabeats':
            case 'stream_rolldabeats2':
            case 'stream_rolldabeats3':

                $social_channel = ' for the ' . 
                                  $this->stream_title . 
                                  ' RollDaBeats catalog';

            break;
            case 'stream_youtube':
            case 'stream_youtube2':
            case 'stream_youtube3':

                $social_channel = ' for the ' . 
                                  $this->stream_title . 
                                  ' YouTube channel';

            break;
            case 'stream_www':
            case 'stream_www2':
            case 'stream_www3':

                $social_channel = ' for the website of ' . 
                                  $this->stream_title;

            break;
            case 'stream_profile':

                $social_channel = ' for the ' . 
                                  $this->stream_title . 
                                  ' Bassdrive show profile';

            break;
            case 'stream_archives':

                $social_channel = ' for the archives of ' . 
                                  $this->stream_title;

            break;
            case 'stream_paypal':

                $social_channel = ' to make a donation ' . 
                                  'to Bassdrive';

            break;

        }

        switch($channel){
            case 'stream_soundcloud':
            case 'stream_facebook':
            case 'stream_instagram':
            case 'stream_twitter':
            case 'stream_mixcloud':
            case 'stream_discogs':
            case 'stream_beatport':
            case 'stream_bandcamp':
            case 'stream_spotify':
            case 'stream_rolldabeats':
            case 'stream_youtube':
            case 'stream_www':
            case 'stream_profile':
            case 'stream_archives':

                /*error_log('[mthd ' . 
                 *    __METHOD__ . '] [lnum ' . 
                 *    __LINE__ . '] [' . 
                 *    $channel . '][' . 
                 *    self::$social_lnk_cnt . 
                 *    '].');
                 */

                if(isset($stream_meta_ARRAY[$channel])){

                    if(strlen($stream_meta_ARRAY[$channel]) > 5){

                        self::$social_lnk_cnt++;
                        $this->stream_has_social = true;

                        return $link_force_wrap . 
                               '<div class="bassdrive_social_link_anchor ' . 
                               $channel . '" onclick="launch_newwindow(\'' . 
                               $stream_meta_ARRAY[$channel] . '\'); return false;">' . 
                               '<div class="bassdrive_social_link_float_rel">' . 
                               '<div class="bassdrive_social_link_float ' . 
                               $channel . '"><img src="' . 
                               $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                               $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                               'common/imgs/bassdrive_component_creative/' . 
                               'social_integration_sprite_high_qual.png?v=420' . 
                               $this->social_sprite_serial . 
                               '" width="233" height="146" />' . 
                               '</div></div></div><div class="hidden">Click <a href="' . 
                               $stream_meta_ARRAY[$channel] . 
                               '" target="_blank">here</a>' . 
                               $social_channel . '.</div>';

                        /*return '<div class="bassdrive_social_link ' . 
                         *       $channel . '" onclick="launch_newwindow(\'' . 
                         *       $stream_meta_ARRAY[$channel] . 
                         *       '\'); return false;" style="background-image:url(' . 
                         *       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                         *       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                         *       'common/imgs/bassdrive_component_creative' . 
                         *       '/social_integration_sprite_sm.png?v=420' . 
                         *       $this->social_sprite_serial . 
                         *       ')"></div><div class="hidden">Click <a href="' . 
                         *       $stream_meta_ARRAY[$channel] . 
                         *       '" target="_blank">here</a>' . 
                         *       $social_channel . '.</div>';
                         */

                    }else{

                        return '';

                    }

                }

            break;
            case 'stream_soundcloud2':
            case 'stream_facebook2':
            case 'stream_instagram2':
            case 'stream_twitter2':
            case 'stream_mixcloud2':
            case 'stream_discogs2':
            case 'stream_beatport2':
            case 'stream_bandcamp2':
            case 'stream_spotify2':
            case 'stream_rolldabeats2':
            case 'stream_youtube2':
            case 'stream_www2':

                if(isset($stream_meta_ARRAY[$channel])){

                    if(\strlen($stream_meta_ARRAY[$channel]) > 5){

                        self::$social_lnk_cnt++;
                        $this->stream_has_social = true;

                        return $link_force_wrap . 
                               '<div class="bassdrive_social_link_anchor ' . 
                               \rtrim($channel,'2') . '" onclick="launch_newwindow(\'' . 
                               $stream_meta_ARRAY[$channel] . '\'); return false;">' . 
                               '<div class="bassdrive_social_link_float_rel">' . 
                               '<div class="bassdrive_social_link_float ' . 
                               \rtrim($channel,'2') . '"><img src="' . 
                               $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                               $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                               'common/imgs/bassdrive_component_creative/' . 
                               'social_integration_sprite_high_qual.png?v=420' . 
                               $this->social_sprite_serial . 
                               '" width="233" height="146" /></div></div></div>' . 
                               '<div class="hidden">Click <a href="' . 
                               $stream_meta_ARRAY[$channel] . 
                               '" target="_blank">here</a>' . 
                               $social_channel . '.</div>';

                        /*return '<div class="bassdrive_social_link ' . 
                         *       \rtrim($channel,'2') . '" onclick="launch_newwindow(\'' . 
                         *       $stream_meta_ARRAY[$channel] . 
                         *       '\'); return false;" style="background-image:url(' . 
                         *       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                         *       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                         *       'common/imgs/bassdrive_component_creative' . 
                         *       '/social_integration_sprite_sm.png?v=420' . 
                         *       $this->social_sprite_serial . 
                         *       ')"></div><div class="hidden">Click <a href="' . 
                         *       $stream_meta_ARRAY[$channel] . 
                         *       '" target="_blank">here</a>' . 
                         *       $social_channel . 
                         *       '.</div>';
                         */

                    }else{

                        return '';

                    }

                }

            break;
            case 'stream_soundcloud3':
            case 'stream_facebook3':
            case 'stream_instagram3':
            case 'stream_twitter3':
            case 'stream_mixcloud3':
            case 'stream_discogs3':
            case 'stream_beatport3':
            case 'stream_bandcamp3':
            case 'stream_spotify3':
            case 'stream_rolldabeats3':
            case 'stream_youtube3':
            case 'stream_www3':

                if(isset($stream_meta_ARRAY[$channel])){

                    if(\strlen($stream_meta_ARRAY[$channel]) > 5){

                        self::$social_lnk_cnt++;
                        $this->stream_has_social = true;

                        return $link_force_wrap . 
                               '<div class="bassdrive_social_link_anchor ' . 
                               \rtrim($channel,'3') . 
                               '" onclick="launch_newwindow(\'' . 
                               $stream_meta_ARRAY[$channel] . 
                               '\'); return false;"><div class="bassdrive_social_link_float_rel">' . 
                               '<div class="bassdrive_social_link_float ' . 
                               \rtrim($channel, '3') . 
                               '"><img src="' . 
                               $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                               $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                               'common/imgs/bassdrive_component_creative' . 
                               '/social_integration_sprite_high_qual.png?v=420' . 
                               $this->social_sprite_serial . 
                               '" width="233" height="146" /></div></div></div>' . 
                               '<div class="hidden">Click <a href="' . 
                               $stream_meta_ARRAY[$channel] . 
                               '" target="_blank">here</a>' . 
                               $social_channel . '.</div>';

                        /*return '<div class="bassdrive_social_link ' . 
                         *       \rtrim($channel,'3') . '" onclick="launch_newwindow(\'' . 
                         *       $stream_meta_ARRAY[$channel] . 
                         *       '\'); return false;" style="background-image:url('. 
                         *       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                         *       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                         *       'common/imgs/bassdrive_component_creative' . 
                         *       '/social_integration_sprite_sm.png?v=420' . 
                         *       $this->social_sprite_serial . 
                         *       ')"></div><div class="hidden">Click <a href="' . 
                         *       $stream_meta_ARRAY[$channel] . 
                         *       '" target="_blank">here</a>' . 
                         *       $social_channel . 
                         *       '.</div>';
                         */

                    }else{

                        return '';

                    }

                }

            break;
            case 'stream_paypal':
            case 'stream_json':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * _cron fire has different 
                 * requirements for force wrap 
                 * because it will always be 
                 * sans history link. 
                 *
                 * This means we should run 
                 * $social_lnk_cnt logic on Paypal® 
                 * instead of STREAM_JSON. 
                 *
                 */
/*                $tmp_trailing_link = 'stream_json';
//                $tmp_calling_script = $_SERVER['SCRIPT_NAME'];
//
//                $pos = stripos($tmp_calling_script, '_cron');
//
//                if ($pos !== false) {
//
//                    //
//                    // CRON FIRED. NO HISTORY LINK.
//                    //$tmp_trailing_link = 'stream_paypal';
//
//                    if(((self::$social_lnk_cnt > 8) && 
//                        (self::$social_lnk_cnt < 12)) && 
//                        !$this->social_linewrap_fire)
//                    {
//
//                        $tmp_line_wrap = '<div class="cb"></div>';
//                        $this->social_linewrap_fire = true;
//
//                    }else{
//
//                        $tmp_line_wrap = '';
//
//                    }
//
//                }else{
//
//                    if((self::$social_lnk_cnt == 8) && 
//                         ($tmp_trailing_link == $channel) && 
//                         !$this->social_linewrap_fire)
//                    {
//
//                        $tmp_line_wrap = '<div class="cb"></div>';
//                        $this->social_linewrap_fire = true;
//
//                    }else{
//
//                        $tmp_line_wrap = '';
//
//                    }
//
//                    if(strlen($link_force_wrap) > 0){
//
//                        $tmp_line_wrap = $link_force_wrap;
//
//                    }
//
//                }
 */

                // JSON.
                //if($this->stream_has_social){

                if(isset($stream_meta_ARRAY[$channel])){

                    if(isset($url)){

                        if(\strlen($stream_meta_ARRAY[$channel]) > 5){

                            self::$social_lnk_cnt++;
                            $this->stream_has_social = true;

                            return $link_force_wrap . 
                                   '<div class="bassdrive_social_link_anchor ' . 
                                   $channel . '" onclick="launch_newwindow(\'' . 
                                   $url . '\'); return false;">' . 
                                   '<div class="bassdrive_social_link_float_rel">' . 
                                   '<div class="bassdrive_social_link_float ' . 
                                   \rtrim($channel,'3') . '"><img src="' . 
                                   $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                                   $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                                   'common/imgs/bassdrive_component_creative' . 
                                   '/social_integration_sprite_high_qual.png?v=420' . 
                                   $this->social_sprite_serial . 
                                   '" width="233" height="146" /></div></div></div>';

                            /*return $tmp_line_wrap . 
                             *       '<div class="bassdrive_social_link ' . 
                             *       $channel . '" onclick="launch_newwindow(\'' . 
                             *       $url . '\'); return false;" style="background-image:url('. 
                             *       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                             *       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                             *       'common/imgs/bassdrive_component_creative' . 
                             *       '/social_integration_sprite_sm.png?v=420' . 
                             *       $this->social_sprite_serial . 
                             *       ')"></div>';
                             */

                        }else{

                            return '';

                        }

                    }else{

                        if(\strlen($stream_meta_ARRAY[$channel]) > 5){

                            self::$social_lnk_cnt++;
                            $this->stream_has_social = true;

                            return $link_force_wrap . 
                                   '<div class="bassdrive_social_link_anchor ' . 
                                   $channel . '" onclick="launch_newwindow(\'' . 
                                   $stream_meta_ARRAY[$channel] . 
                                   '\'); return false;">' . 
                                   '<div class="bassdrive_social_link_float_rel">' . 
                                   '<div class="bassdrive_social_link_float ' . 
                                   $channel . 
                                   '"><img src="' . 
                                   $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                                   $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                                   'common/imgs/bassdrive_component_creative' . 
                                   '/social_integration_sprite_high_qual.png?v=420' . 
                                   $this->social_sprite_serial . 
                                   '" width="233" height="146" /></div></div></div>';

                            /*return $tmp_line_wrap . 
                             *       '<div class="bassdrive_social_link ' . 
                             *       $channel . '" onclick="launch_newwindow(\'' . 
                             *       $stream_meta_ARRAY[$channel] . 
                             *       '\'); return false;" style="background-image:url(' . 
                             *       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                             *       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                             *       'common/imgs/bassdrive_component_creative' . 
                             *       '/social_integration_sprite_sm.png?v=420' . 
                             *       $this->social_sprite_serial . 
                             *       ')"></div>';
                             */

                        }else{

                            return '';

                        }

                    }

                }

                //}

            break;
            case 'stream_history':

                //
                // JSON
                //if($this->stream_has_social){

                if(isset($stream_meta_ARRAY[$channel])){

                    if(\strlen($stream_meta_ARRAY[$channel]) > 5){

                        self::$social_lnk_cnt++;
                        $this->stream_has_social = true;

                        return '<div class="bassdrive_social_link_anchor ' . 
                               $channel . '" onclick="bassdrive_load_history(\'' . 
                               $stream_meta_ARRAY[$channel] . 
                               '\'); return false;">' . 
                               '<div class="bassdrive_social_link_float_rel">' . 
                               '<div class="bassdrive_social_link_float ' . 
                               $channel . '"><img src="' . 
                               $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                               $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                               'common/imgs/bassdrive_component_creative' . 
                               '/social_integration_sprite_high_qual.png?v=420' . 
                               $this->social_sprite_serial . 
                               '" width="233" height="146" /></div></div></div>';

                        /*return '<div class="bassdrive_social_link ' . 
                         *       $channel . '" onclick="bassdrive_load_history(\'' . 
                         *       $stream_meta_ARRAY[$channel] . 
                         *       '\'); return false;" style="background-image:url(' . 
                         *       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                         *       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                         *       'common/imgs/bassdrive_component_creative' . 
                         *       '/social_integration_sprite_sm.png?v=420' . 
                         *       $this->social_sprite_serial . 
                         *       ')"></div>';
                         */

                    }else{

                        return '';

                    }

                }

                //}

            break;
            default:

                return '';

            break;

        }

        return '';

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function bassdrive_history_output()
    {

        return $this->dataBaseIntegration->bassdrive_history_output(
                                           $this, 
                                           $this->oUserEnvironment, 
                                           'bassdrive_history_output');

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function bassdrive_rebuild_stream_history_output()
    {

        $tmp_html              =
        $tmp_serial_tracker    = '';
        $tmp_has_json_ARRAY    =
        $tmp_track_match_ARRAY =
        $tmp_query_ARRAY       = array();

        $tmp_total_cnt   =
        $tmp_match_cnt   =
        $tmp_ignore_cnt  =
        $tmp_node_cnt    = 0;

        $tmp_resp = $this->dataBaseIntegration->bassdrive_colors_algorithm_output(
                                                $this, 
                                                $this->oUserEnvironment, 
                                                'bassdrive_colors_algorithm_output');

        foreach ($tmp_resp as 
            $rowcnt => $chunkARRAY0)
        {

            $tmp_display_show        =
            $this->stream_has_social = false;

            $tmp_total_cnt++;

            if(isset($chunkARRAY0[3])){

                if(\strlen($chunkARRAY0[3]) > 10){

                    // We have JSON data. 
                    $tmp_stream_json_ARRAY = $this->return_json_extracted_stream_data($chunkARRAY0[3]);

                    if(\strlen($chunkARRAY0[1]) < 5){

                        // We need a serial in the database. 
                        $tmp_serial = $tmp_serial_tracker = $this->oUser->generateNewKey(64);

                        $tmp_query_ARRAY[] = 'UPDATE `log_bassdrive_program` ' . 
                                             'SET ' . 
                                                 '`SERIAL` = "' . $tmp_serial . '" ' . 
                                             'WHERE ' . 
                                                 '`ID` = ' . $chunkARRAY0[0] . ' ' . 
                                             'LIMIT 1;';

                        $tmp_has_json_ARRAY[$tmp_serial] = true;

                    }else{

                        $tmp_serial_tracker                  = $chunkARRAY0[1];
                        $tmp_has_json_ARRAY[$chunkARRAY0[1]] = true;

                    }

                }else{

                    // We don't have JSON data. 
                    if(\strlen($chunkARRAY0[1]) < 5){

                        // We need a serial in the database. 
                        $tmp_serial = $tmp_serial_tracker = $this->oUser->generateNewKey(64);

                        $tmp_query_ARRAY[] = 'UPDATE `log_bassdrive_program` ' . 
                                             'SET ' . 
                                                 '`SERIAL` = "' . $tmp_serial . '" ' . 
                                             'WHERE ' . 
                                                 '`ID` = ' . $chunkARRAY0[0] . ' ' . 
                                             'LIMIT 1;';

                        $tmp_has_json_ARRAY[$tmp_serial] = false;

                    }else{

                        $tmp_serial_tracker                  = $chunkARRAY0[1];
                        $tmp_has_json_ARRAY[$chunkARRAY0[1]] = false;

                    }

                }

                $tmp_stream_ARRAY = $this->return_stream_data_ARRAY($chunkARRAY0[2]);

                if(!isset($tmp_stream_ARRAY['stream_key'])){

                    if(!isset($tmp_track_match_ARRAY[md5($chunkARRAY0[2])])){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * An "unmonitored for broadcast" 
                         * origin stream. 
                         *
                         */
                        $tmp_track_match_ARRAY[md5($chunkARRAY0[2])] = 1;
                        $tmp_display_show = true;

                    }else{

                        $tmp_ignore_cnt++;

                    }

                }else{

                    if(!isset($tmp_track_match_ARRAY[$tmp_stream_json_ARRAY['is_live'] . 
                                                     $tmp_stream_ARRAY['stream_key']]))
                    {

                        $tmp_match_cnt++;

                        $tmp_track_match_ARRAY[$tmp_stream_json_ARRAY['is_live'] . 
                                               $tmp_stream_ARRAY['stream_key']] = 1;
                        $tmp_display_show = true;

                    }else{

                        $tmp_ignore_cnt++;

                    }

                }

                if($tmp_display_show){

                    $tmp_node_cnt++;

                    $tmp_db_resp_array = $tmp_stream_ARRAY['DATABASE_TRANSFER'];

                    if($tmp_stream_ARRAY['stream_flag_file_img'] == 'flag_unknown.gif'){

                        $tmp_colors_html = '<div class="colors_img_wrapper"></div>
                                <div class="cb"></div>
                                <div class="colors_city_state"></div>
                                <div class="cb"></div>
                                <div class="colors_show_date_generated">' . 
                                '<span style="font-weight: bold;">Generated on:&nbsp;&nbsp;</span>' . 
                                \date('l, M. j \a\t G:i:s T', \strtotime($chunkARRAY0[4])) . 
                                '</div>';

                    }else{

                        /*error_log(
                         *   '[mthd ' . 
                         *   __METHOD__ . '] [lnum ' . 
                         *   __LINE__ . '] ' . 
                         *   $tmp_stream_ARRAY['stream_flag_file_img']);
                         */

                        $tmp_colors_html = '<div class="colors_img_wrapper">' . 
                                           $tmp_stream_ARRAY['stream_flag_file_img'] . 
                                           '</div>
                                <div class="cb"></div>
                                <div class="colors_city_state">' . 
                                $tmp_stream_ARRAY['stream_city_state_prov_nation'] . '</div>
                                <div class="cb"></div>
                                <div class="colors_show_date_generated">' . 
                                '<span style="font-weight: bold;">' . 
                                'Generated on:&nbsp;&nbsp;</span>' . 
                                \date('l, M. j \a\t G:i:s T', \strtotime($chunkARRAY0[4])) . 
                                '</div>';

                    }

                    self::$social_lnk_cnt = 0;

                    if($tmp_has_json_ARRAY[$tmp_serial_tracker]){

                        if(\strlen($tmp_stream_json_ARRAY['title_formatted']) > 0){

                            $tmp_html .= '
                            <div>
                                <div class="colors_show_title_wrapper">' . 
                                $tmp_stream_json_ARRAY['title_formatted'] . '
                                    <div class="cb"></div>
                                    <div id="bassdrive_social_wrapper" class="bassdrive_social_wrapper">
                                        ' . $this->return_social_HTML('stream_soundcloud', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_soundcloud2', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_soundcloud3', $tmp_db_resp_array) .'
                                        ' . $this->return_social_HTML('stream_facebook', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_facebook2', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_facebook3', $tmp_db_resp_array) . '
                                        ' . $this->return_social_HTML('stream_instagram', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_instagram2', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_instagram3', $tmp_db_resp_array) . '
                                        ' . $this->return_social_HTML('stream_twitter', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_twitter2', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_twitter3', $tmp_db_resp_array) . '
                                        ' . $this->return_social_HTML('stream_mixcloud', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_mixcloud2', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_mixcloud3', $tmp_db_resp_array) . '
                                        ' . $this->return_social_HTML('stream_discogs', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_discogs2', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_discogs3', $tmp_db_resp_array) . '
                                        ' . $this->return_social_HTML('stream_beatport', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_beatport2', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_beatport3', $tmp_db_resp_array) . '
                                        ' . $this->return_social_HTML('stream_bandcamp', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_bandcamp2', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_bandcamp3', $tmp_db_resp_array) . '
                                        ' . $this->return_social_HTML('stream_spotify', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_spotify2', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_spotify3', $tmp_db_resp_array) . '
                                        ' . $this->return_social_HTML('stream_rolldabeats', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_rolldabeats2', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_rolldabeats3', $tmp_db_resp_array) . '
                                        ' . $this->return_social_HTML('stream_youtube', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_youtube2', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_youtube3', $tmp_db_resp_array) . '
                                        ' . $this->return_social_HTML('stream_www', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_www2', $tmp_db_resp_array) . 
                                        $this->return_social_HTML('stream_www3', $tmp_db_resp_array) . '
                                        ' . $this->return_social_HTML('stream_profile', $tmp_db_resp_array) . '
                                        ' . $this->return_social_HTML('stream_archives', $tmp_db_resp_array) . '
                                        ' . $this->return_social_HTML('stream_paypal', $tmp_db_resp_array) . '
                                        ' . $this->return_social_HTML(
                                                   'stream_json', 
                                                   $tmp_db_resp_array, 
                                                   $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                                                   $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                                                   '_proxy/bassdrive_colors/?stream=' . 
                                                   $tmp_serial_tracker) . '
                                        <div class="cb"></div>
                                    </div>
                                </div>
                                <div class="colors_wrapper">
                                    ' . $tmp_colors_html . '
                                </div>
                            </div>
                            <div class="colors_hr_wrapper">' . 
                            '<div class="colors_hr"></div></div>';

                        }

                    }else{

                        $tmp_html .= '
                        <div>
                            <div class="colors_show_title_wrapper">' . 
                            $chunkARRAY0[2] . '
                                <div class="cb"></div>
                                <div id="bassdrive_social_wrapper" class="bassdrive_social_wrapper">
                                ' . $this->return_social_HTML('stream_soundcloud', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_soundcloud2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_soundcloud3', $tmp_db_resp_array) .'
                                ' . $this->return_social_HTML('stream_facebook', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_facebook2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_facebook3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_instagram', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_instagram2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_instagram3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_twitter', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_twitter2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_twitter3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_mixcloud', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_mixcloud2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_mixcloud3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_discogs', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_discogs2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_discogs3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_beatport', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_beatport2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_beatport3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_bandcamp', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_bandcamp2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_bandcamp3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_spotify', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_spotify2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_spotify3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_rolldabeats', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_rolldabeats2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_rolldabeats3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_youtube', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_youtube2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_youtube3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_www', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_www2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_www3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_profile', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_archives', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_paypal', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_json', $tmp_db_resp_array) . '
                                    <div class="cb"></div>
                                </div>
                            </div>
                            <div class="colors_wrapper">
                                ' . $tmp_colors_html . '
                            </div>
                        </div>
                        <div class="colors_hr_wrapper">' . 
                        '<div class="colors_hr"></div></div>';

                    }

                }

            }

        }

        $this->log_activity .= 'Total records processed = ' . 
                               $tmp_total_cnt . '<br>' . 
                               'Total records matched = ' . 
                               $tmp_match_cnt . '<br>' . 
                               'Total records ignored = ' . 
                               $tmp_ignore_cnt . '<br>' . 
                               ':: :: :: :: :: <br>' . 
                               'Total HTML stream nodes generated = ' . 
                               $tmp_node_cnt . '<br>' . 
                               'Run Time = ' . 
                               $this->oUserEnvironment->wallTime() . 
                               ' seconds' ;

        if(\count($tmp_query_ARRAY) > 0){

            $this->dataBaseIntegration->bassdrive_serialize_streams(
                                        $this, 
                                        $this->oUserEnvironment, 
                                        $tmp_query_ARRAY);

        }

        return $tmp_html;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function bassdrive_colors_algorithm_output()
    {

        /*
        self::$query = 'SELECT `log_bassdrive_program`.`ID`, ' . 
                           '`log_bassdrive_program`.`SERIAL`, ' . 
                           '`log_bassdrive_program`.`PROGRAM_TITLE`, ' . 
                           '`log_bassdrive_program`.`STREAM_RELAY_JSON`, ' . 
                           '`log_bassdrive_program`.`DATEMODIFIED` ' . 
                       'FROM `log_bassdrive_program` ' . 
                       'ORDER BY `log_bassdrive_program`.`ID` ' . 
                       'DESC;';
        */

        $tmp_html              =
        $tmp_serial_tracker    = '';
        $tmp_has_json_ARRAY    =
        $tmp_track_match_ARRAY =
        $tmp_query_ARRAY       = array();

        $tmp_resp = $this->dataBaseIntegration->bassdrive_colors_algorithm_output(
                                                $this, 
                                                $this->oUserEnvironment, 
                                                'bassdrive_colors_algorithm_output');

        foreach($tmp_resp as 
            $rowcnt => $chunkARRAY0)
        {

            $tmp_display_show        = false;
            $this->stream_has_social = false;

            if(isset($chunkARRAY0[3])){

                if(\strlen($chunkARRAY0[3]) > 10){

                    // We have JSON data. 
                    $tmp_stream_json_ARRAY = $this->return_json_extracted_stream_data($chunkARRAY0[3]);

                    if(\strlen($chunkARRAY0[1]) < 5){

                        // We need a serial in the database. 
                        $tmp_serial = $tmp_serial_tracker = $this->oUser->generateNewKey(64);

                        $tmp_query_ARRAY[] = 'UPDATE `log_bassdrive_program` ' . 
                                             'SET ' . 
                                                 '`SERIAL` = "' . $tmp_serial . '" ' . 
                                             'WHERE ' . 
                                                 '`ID` = ' . $chunkARRAY0[0] . ' ' . 
                                             'LIMIT 1;';

                        $tmp_has_json_ARRAY[$tmp_serial] = true;

                    }else{

                        $tmp_serial_tracker                  = $chunkARRAY0[1];
                        $tmp_has_json_ARRAY[$chunkARRAY0[1]] = true;

                    }

                }else{

                    // We don't have JSON data. 
                    if(\strlen($chunkARRAY0[1]) < 5){

                        // We need a serial in the database. 
                        $tmp_serial = $tmp_serial_tracker = $this->oUser->generateNewKey(64);

                        $tmp_query_ARRAY[] = 'UPDATE `log_bassdrive_program` ' . 
                                             'SET ' . 
                                                 '`SERIAL` = "' . $tmp_serial . '" ' . 
                                             'WHERE ' . 
                                                 '`ID` = ' . $chunkARRAY0[0] . ' ' . 
                                             'LIMIT 1;';

                        $tmp_has_json_ARRAY[$tmp_serial] = false;

                    }else{

                        $tmp_serial_tracker                  = $chunkARRAY0[1];
                        $tmp_has_json_ARRAY[$chunkARRAY0[1]] = false;

                    }

                }

                $tmp_stream_ARRAY = $this->return_stream_data_ARRAY($chunkARRAY0[2]);

                if(!isset($tmp_stream_ARRAY['stream_key'])){

                    if(!isset($tmp_track_match_ARRAY[md5($chunkARRAY0[2])])){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * An "unmonitored for broadcast" 
                         * origin stream. 
                         *
                         */
                        $tmp_track_match_ARRAY[md5($chunkARRAY0[2])] = 1;
                        $tmp_display_show = true;

                    }

                }else{

                    if(!isset($tmp_track_match_ARRAY[$tmp_stream_json_ARRAY['is_live'] . 
                                                     $tmp_stream_ARRAY['stream_key']]))
                    {

                        $tmp_track_match_ARRAY[$tmp_stream_json_ARRAY['is_live'] . 
                                               $tmp_stream_ARRAY['stream_key']] = 1;
                        $tmp_display_show = true;

                    }

                }

                if($tmp_display_show){

                    $tmp_db_resp_array = $tmp_stream_ARRAY['DATABASE_TRANSFER'];

                    if($tmp_stream_ARRAY['stream_flag_file_img'] == 'flag_unknown.gif'){

                        $tmp_colors_html = '<div class="colors_img_wrapper"></div>
                                <div class="cb"></div>
                                <div class="colors_city_state"></div>';

                    }else{

                        /*error_log(
                         *    '[mthd ' . 
                         *    __METHOD__ . '] [lnum ' . 
                         *    __LINE__ . '] ' . 
                         *    $tmp_stream_ARRAY['stream_flag_file_img']);
                         */

                        $tmp_colors_html = '<div class="colors_img_wrapper">' . 
                                           $tmp_stream_ARRAY['stream_flag_file_img'] . 
                                           '</div>
                                <div class="cb"></div>
                                <div class="colors_city_state">' . 
                                $tmp_stream_ARRAY['stream_city_state_prov_nation'] . 
                                '</div>';

                    }

                    self::$social_lnk_cnt = 0;

                    if($tmp_has_json_ARRAY[$tmp_serial_tracker]){

                        $tmp_html .= '
                        <div>
                            <div class="colors_show_title_wrapper">' . 
                            $tmp_stream_json_ARRAY['title_formatted'] . '
                                <div class="cb"></div>
                                <div id="bassdrive_social_wrapper" class="bassdrive_social_wrapper">
                                    ' . $this->return_social_HTML('stream_soundcloud', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_soundcloud2', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_soundcloud3', $tmp_db_resp_array) .'
                                    ' . $this->return_social_HTML('stream_facebook', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_facebook2', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_facebook3', $tmp_db_resp_array) . '
                                    ' . $this->return_social_HTML('stream_instagram', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_instagram2', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_instagram3', $tmp_db_resp_array) . '
                                    ' . $this->return_social_HTML('stream_twitter', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_twitter2', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_twitter3', $tmp_db_resp_array) . '
                                    ' . $this->return_social_HTML('stream_mixcloud', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_mixcloud2', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_mixcloud3', $tmp_db_resp_array) . '
                                    ' . $this->return_social_HTML('stream_discogs', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_discogs2', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_discogs3', $tmp_db_resp_array) . '
                                    ' . $this->return_social_HTML('stream_beatport', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_beatport2', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_beatport3', $tmp_db_resp_array) . '
                                    ' . $this->return_social_HTML('stream_bandcamp', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_bandcamp2', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_bandcamp3', $tmp_db_resp_array) . '
                                    ' . $this->return_social_HTML('stream_spotify', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_spotify2', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_spotify3', $tmp_db_resp_array) . '
                                    ' . $this->return_social_HTML('stream_rolldabeats', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_rolldabeats2', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_rolldabeats3', $tmp_db_resp_array) . '
                                    ' . $this->return_social_HTML('stream_youtube', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_youtube2', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_youtube3', $tmp_db_resp_array) . '
                                    ' . $this->return_social_HTML('stream_www', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_www2', $tmp_db_resp_array) . 
                                    $this->return_social_HTML('stream_www3', $tmp_db_resp_array) . '
                                    ' . $this->return_social_HTML('stream_profile', $tmp_db_resp_array) . '
                                    ' . $this->return_social_HTML('stream_archives', $tmp_db_resp_array) . '
                                    ' . $this->return_social_HTML('stream_paypal', $tmp_db_resp_array) . '
                                    ' . $this->return_social_HTML('stream_json', $tmp_db_resp_array) . '
                                    <div class="cb"></div>
                                </div>
                            </div>
                            <div class="colors_wrapper">
                                ' . $tmp_colors_html . '
                            </div>
                            <div class="colors_stream_json"><a href="' . 
                            $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                            $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                            '_proxy/bassdrive_colors/?stream=' . 
                            $tmp_serial_tracker . '" target="_blank"><img src="' . 
                            $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                            $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                            'common/imgs/icon_json.gif" width="51" height="50" ' . 
                            'alt="JSON" border="0"></a></div>
                        </div>
                        <div class="colors_hr_wrapper">' . 
                        '<div class="colors_hr"></div></div>';

                    }else{

                        $tmp_html .= '
                        <div>
                            <div class="colors_show_title_wrapper">' . 
                            $chunkARRAY0[2] . '
                                <div class="cb"></div>
                                <div id="bassdrive_social_wrapper" class="bassdrive_social_wrapper">
                                ' . $this->return_social_HTML('stream_soundcloud', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_soundcloud2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_soundcloud3', $tmp_db_resp_array) .'
                                ' . $this->return_social_HTML('stream_facebook', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_facebook2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_facebook3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_instagram', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_instagram2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_instagram3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_twitter', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_twitter2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_twitter3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_mixcloud', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_mixcloud2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_mixcloud3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_discogs', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_discogs2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_discogs3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_beatport', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_beatport2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_beatport3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_bandcamp', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_bandcamp2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_bandcamp3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_spotify', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_spotify2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_spotify3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_rolldabeats', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_rolldabeats2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_rolldabeats3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_youtube', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_youtube2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_youtube3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_www', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_www2', $tmp_db_resp_array) . 
                                $this->return_social_HTML('stream_www3', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_profile', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_archives', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_paypal', $tmp_db_resp_array) . '
                                ' . $this->return_social_HTML('stream_json', $tmp_db_resp_array) . '
                                    <div class="cb"></div>
                                </div>
                            </div>
                            <div class="colors_wrapper">
                                ' . $tmp_colors_html . '
                            </div>
                        </div>
                        <div class="colors_hr_wrapper">' . 
                        '<div class="colors_hr"></div></div>';

                    }

                }

            }

        }

        if(count($tmp_query_ARRAY)>0){

            $this->dataBaseIntegration->bassdrive_serialize_streams(
                                        $this, 
                                        $this->oUserEnvironment, 
                                        $tmp_query_ARRAY);

        }

        return $tmp_html;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_stream_data_ARRAY($str)
    {
        /*
        $tmp_stream_ARRAY['stream_flag_file_img'] = <img src="' . 
                                                    $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                                                    $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                                                    'common/imgs/bassdrive_component_creative/' . 
                                                    $tmp_stream_ARRAY['stream_flag_file_img'] . 
                                                    '" width="' . $tmp_stream_ARRAY['flag_width'] . 
                                                    '" height="' . $tmp_stream_ARRAY['flag_height'] . 
                                                    '" alt="' . $tmp_stream_ARRAY['stream_city_state_prov_nation'] . 
                                                    '" title="National flag for ' . 
                                                    $tmp_stream_ARRAY['stream_city_state_prov_nation'] . '">
        $tmp_stream_ARRAY['stream_city_state_prov_nation'] = ATL, GA, USA
        $tmp_stream_ARRAY['live_or_replay'] = LIVE
        $tmp_stream_ARRAY['stream_key']
        */

        $tmp_stream_ARRAY                                  = array();
        $tmp_stream_ARRAY['live_or_replay']                = 'LIVE';
        $tmp_stream_ARRAY['stream_flag_file_img']          = '&nbsp;';
        $tmp_stream_ARRAY['stream_city_state_prov_nation'] = '';

        $tmp_wrk_str                 = $str;
        $bassdrive_for_BOLD_RED      = $this->return_LIVE_ARRAY();
        $bassdrive_find_HYPER_LNK    = $this->return_HYPER_ARRAY();
        $bassdrive_replace_HYPER_LNK = $this->return_LINK_ARRAY();

        $bassdrive_month             = $this->return_MONTH_ARRAY();
        $bassdrive_day               = $this->return_DAY_ARRAY();
        $bassdrive_specialty         = $this->return_specialty_ARRAY();
        $bassdrive_specialty_out     = $this->return_specialty_output_ARRAY();
        $bassdrive_broadcast_nation  = $this->return_broadcast_nation_association_ARRAY();

        $bassdrive_broadcast_social_ARRAY = $this->return_stream_social_association_ARRAY($str);

        $bassdrive_broadcast_flag    = $this->return_nation_flag_ARRAY();
        //$bassdrive_broadcast_scroller_content = $this->return_broadcast_scroller_content_ARRAY();

        $tmp_LIVE_cnt                = \sizeof($bassdrive_for_BOLD_RED);
        $tmp_HYPER_cnt               = \sizeof($bassdrive_find_HYPER_LNK);
        $tmp_MONTH_cnt               = \sizeof($bassdrive_month);
        $tmp_DAY_cnt                 = \sizeof($bassdrive_day);
        $tmp_SPECIAL_cnt             = \sizeof($bassdrive_specialty);
        $tmp_SPECIALOUT_cnt          = \sizeof($bassdrive_specialty_out);
        $tmp_bassdrive_broadcast_nation_cnt = \sizeof($bassdrive_broadcast_nation);
        $has_flag                    = false;
        $tmp_broadcast_nation_flag   = NULL;

        if(!isset($bassdrive_broadcast_social_ARRAY['stream_colors_filename'])){

            foreach($bassdrive_broadcast_nation as 
                $show_str => $flag_img_filename)
            {

                $pos = \stripos($tmp_wrk_str, $show_str);
                if(($pos !== false) && 
                    ($has_flag == false))
                {

                    if(!isset($bassdrive_broadcast_social_ARRAY['stream_locale'])){

                        $bassdrive_broadcast_social_ARRAY = array();

                        /*error_log(
                         *   '[mthd ' . 
                         *   __METHOD__ . '] [lnum ' . 
                         *   __LINE__ . '] [' . 
                         *   print_r($bassdrive_broadcast_social_ARRAY['stream_locale'], true) . 
                         *   '].');
                         */

                        $bassdrive_broadcast_social_ARRAY['stream_locale'] = '';

                    }

                    $has_flag                         = true;
                    $tmp_broadcast_nation_flag        = $flag_img_filename;
                    //$tmp_broadcast_scroller_content = $bassdrive_broadcast_scroller_content[$show_str];
                    $tmp_broadcast_scroller_content   = $bassdrive_broadcast_social_ARRAY['stream_locale'];
                    $tmp_stream_ARRAY['stream_city_state_prov_nation'] = $tmp_broadcast_scroller_content;
                    $tmp_stream_ARRAY['stream_key']   = $show_str;

                }

            }

        }else{

            if(!isset($bassdrive_broadcast_social_ARRAY['stream_locale'])){

                $bassdrive_broadcast_social_ARRAY['stream_locale'] = '';

            }

            $has_flag                       = true;
            $tmp_broadcast_nation_flag      = $bassdrive_broadcast_social_ARRAY['stream_colors_filename'];
            $tmp_broadcast_scroller_content = $bassdrive_broadcast_social_ARRAY['stream_locale'];
            $tmp_stream_ARRAY['stream_city_state_prov_nation'] = $tmp_broadcast_scroller_content;
            $tmp_stream_ARRAY['stream_key'] = $this->stream_key;

        }

        for($i = 0; $i < $tmp_LIVE_cnt; $i++){

            $tmp_LIVE_pattern = $bassdrive_for_BOLD_RED[$i];

            $pos = \stripos($tmp_wrk_str, $tmp_LIVE_pattern);
            if($pos !== false){

                $tmp_LIVE_replace = '<span style="color:#F00; font-weight: bold;">' . 
                                    $tmp_LIVE_pattern . 
                                    '</span>';

                $tmp_wrk_str = $this->ptrn_replace(
                                      $tmp_LIVE_pattern, 
                                      $tmp_LIVE_replace, 
                                      $tmp_wrk_str);

                $i = $tmp_LIVE_cnt + 1;

            }

        }

        for($i = 0; $i < $tmp_HYPER_cnt; $i++){

            $tmp_HYPER_pattern = $bassdrive_find_HYPER_LNK[$i];

            $pos = \strpos($tmp_wrk_str, $tmp_HYPER_pattern);
            if($pos !== false){

                $tmp_wrk_str = $this->ptrn_replace(
                                      $tmp_HYPER_pattern, 
                                      $bassdrive_replace_HYPER_LNK[$i], 
                                      $tmp_wrk_str);

                break 1;

            }

        }

        $isLIVE = true;

        for($i = 0; $i < $tmp_MONTH_cnt; $i++){

            for($ii = 0; $ii < $tmp_DAY_cnt; $ii++){

                $tmp_date_pos = \strpos($tmp_wrk_str, $bassdrive_month[$i] . ' ' . $bassdrive_day[$ii]);
                if($tmp_date_pos !== false){

                    $tmp_wrk_str = $this->ptrn_replace(
                                          $bassdrive_month[$i] . ' ' . 
                                          $bassdrive_day[$ii], 
                                          '<span style="background-color: #CF0202; ' . 
                                          'color:#FFF; font-size:11px; ' . 
                                          'font-weight:normal; padding:1px 3px 1px 3px; ' . 
                                          'border-radius: 15px;">' . 
                                          '<span style="color:#CF0202;">_</span> ' . 
                                          $bassdrive_month[$i] . ' ' . 
                                          $bassdrive_day[$ii] . 
                                          ' :: REPLAY <span style="color:#CF0202;">_</span></span>', 
                                          $tmp_wrk_str);
                    $i      = $tmp_MONTH_cnt + 1;
                    $ii     = $tmp_DAY_cnt + 1;
                    $isLIVE = false;
                    $tmp_stream_ARRAY['live_or_replay'] = 'REPLAY';

                }

            }

        }

        for($i = 0; $i < $tmp_SPECIAL_cnt; $i++){

            $tmp_special_pos = \strpos($tmp_wrk_str, $bassdrive_specialty[$i]);

            if($tmp_special_pos !== false){

                $tmp_wrk_str = $this->ptrn_replace(
                                      $bassdrive_specialty[$i], 
                                      $bassdrive_specialty_out[$i], 
                                      $tmp_wrk_str);

                break 1;

            }

        }

        /*error_log(
         *    '[mthd ' . 
         *    __METHOD__ . '] [lnum ' . 
         *    __LINE__ . '] ' . 
         *    $tmp_broadcast_nation_flag);
         */

        if(isset($tmp_broadcast_nation_flag) && 
            (\strlen($tmp_broadcast_nation_flag) > 7))
        {

            $tmp_file_name = $this->ptrn_replace(
                                    '.png', 
                                    '.gif', 
                                    $tmp_broadcast_nation_flag);

            list($width, $height) = \getimagesize(
                                    $this->oUserEnvironment->getEnvParam('DOCUMENT_ROOT') . 
                                    $this->oUserEnvironment->getEnvParam('DOCUMENT_ROOT_DIR') . 
                                    '/common/imgs/bassdrive_component_creative/' . 
                                    $tmp_file_name);

            $tmp_stream_ARRAY['stream_flag_file_img'] = '<img src="' . 
                                                        $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                                                        $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                                                        'common/imgs/bassdrive_component_creative/' . 
                                                        $tmp_broadcast_nation_flag . 
                                                        '" width="' . 
                                                        $width . '" height="' . 
                                                        $height . '" alt="' . 
                                                        $tmp_stream_ARRAY['stream_city_state_prov_nation'] . 
                                                        '" title="National flag for ' . 
                                                        $tmp_stream_ARRAY['stream_city_state_prov_nation'] . 
                                                        '">';

        }

        $tmp_stream_ARRAY['DATABASE_TRANSFER'] = $bassdrive_broadcast_social_ARRAY;

        return $tmp_stream_ARRAY;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function applyProgramTitleFormatting($str)
    {

        $tmp_wrk_str                 = $str;
        $bassdrive_for_BOLD_RED      = $this->return_LIVE_ARRAY();
        $bassdrive_find_HYPER_LNK    = $this->return_HYPER_ARRAY();
        $bassdrive_replace_HYPER_LNK = $this->return_LINK_ARRAY();

        $bassdrive_month             = $this->return_MONTH_ARRAY();
        $bassdrive_day               = $this->return_DAY_ARRAY();
        $bassdrive_specialty         = $this->return_specialty_ARRAY();
        $bassdrive_specialty_out     = $this->return_specialty_output_ARRAY();
        $bassdrive_broadcast_nation  = $this->return_broadcast_nation_association_ARRAY();
        $bassdrive_broadcast_flag    = $this->return_nation_flag_ARRAY();
        //$bassdrive_broadcast_scroller_content = $this->return_broadcast_scroller_content_ARRAY();

        $tmp_db_resp_array           = $this->return_stream_social_association_ARRAY($str);

        $tmp_LIVE_cnt                = \sizeof($bassdrive_for_BOLD_RED);
        $tmp_HYPER_cnt               = \sizeof($bassdrive_find_HYPER_LNK);
        $tmp_MONTH_cnt               = \sizeof($bassdrive_month);
        $tmp_DAY_cnt                 = \sizeof($bassdrive_day);
        $tmp_SPECIAL_cnt             = \sizeof($bassdrive_specialty);
        $tmp_SPECIALOUT_cnt          = \sizeof($bassdrive_specialty_out);
        $tmp_bassdrive_broadcast_nation_cnt = \sizeof($bassdrive_broadcast_nation);
        $has_flag                    = false;
        $tmp_broadcast_nation_flag   = NULL;

        foreach($bassdrive_broadcast_nation as 
            $show_str => $flag_img_filename)
        {

            $pos = stripos($tmp_wrk_str, $show_str);
            if(($pos !== false) && 
                ($has_flag == false))
            {

                if(!isset($tmp_db_resp_array['stream_locale'])){

                    $tmp_db_resp_array['stream_locale'] = '';

                }

                $has_flag                   = true;
                $tmp_broadcast_nation_flag  = $flag_img_filename;
                //$tmp_broadcast_scroller_content = $bassdrive_broadcast_scroller_content[$show_str];
                $tmp_broadcast_nation_title = $bassdrive_broadcast_flag[$flag_img_filename];

            }

        }

        for($i = 0; $i < $tmp_LIVE_cnt; $i++){

            $tmp_LIVE_pattern = $bassdrive_for_BOLD_RED[$i];

            $pos = \stripos($tmp_wrk_str, $tmp_LIVE_pattern);
            if($pos !== false){

                $tmp_LIVE_replace = '<span style="color:#F00; font-weight: bold;">' . 
                                    $tmp_LIVE_pattern . 
                                    '</span>';

                $tmp_wrk_str = $this->ptrn_replace(
                                      $tmp_LIVE_pattern, 
                                      $tmp_LIVE_replace, 
                                      $tmp_wrk_str);

                break 1;

            }

        }

        for($i = 0; $i < $tmp_HYPER_cnt; $i++){

            $tmp_HYPER_pattern = $bassdrive_find_HYPER_LNK[$i];

            $pos = \strpos($tmp_wrk_str, $tmp_HYPER_pattern);
            if($pos !== false){

                $tmp_wrk_str = $this->ptrn_replace(
                                      $tmp_HYPER_pattern, 
                                      $bassdrive_replace_HYPER_LNK[$i], 
                                      $tmp_wrk_str);

                //break 1;

            }

        }

        $isLIVE = true;

        for($i = 0; $i < $tmp_MONTH_cnt; $i++){

            for($ii = 0; $ii < $tmp_DAY_cnt; $ii++){

                /*error_log(
                 *   '[mthd ' . 
                 *   __METHOD__ . '] [lnum ' . 
                 *   __LINE__ . '] - [' . 
                 *   $bassdrive_month[$i] . ' ' . 
                 *   $bassdrive_day[$ii] . 
                 *   '].');
                 */

                $tmp_date_pos = \strpos(
                                $tmp_wrk_str, 
                                $bassdrive_month[$i] . ' ' . 
                                $bassdrive_day[$ii]);
                if($tmp_date_pos !== false){

                    $tmp_wrk_str = $this->ptrn_replace(
                                          $bassdrive_month[$i] . ' ' . 
                                          $bassdrive_day[$ii], 
                                          '<span style="background-color: ' . 
                                          '#CF0202; color:#FFF; font-size:11px; ' . 
                                          'font-weight:normal; padding:1px 3px 1px 3px; ' . 
                                          'border-radius: 15px;">' . 
                                          '<span style="color:#CF0202;">_</span> ' . 
                                          $bassdrive_month[$i] . ' ' . 
                                          $bassdrive_day[$ii] . 
                                          ' :: REPLAY <span ' . 
                                          'style="color:#CF0202;">_</span></span>', 
                                          $tmp_wrk_str);
                    $i           = $tmp_MONTH_cnt + 1;
                    $ii          = $tmp_DAY_cnt + 1;
                    $isLIVE      = false;

                }

            }

        }

        for($i = 0; $i < $tmp_SPECIAL_cnt; $i++){

            $tmp_special_pos = \strpos($tmp_wrk_str, $bassdrive_specialty[$i]);

            if($tmp_special_pos !== false){

                $tmp_wrk_str = $this->ptrn_replace(
                                      $bassdrive_specialty[$i], 
                                      $bassdrive_specialty_out[$i], 
                                      $tmp_wrk_str);

                break 1;

            }

        }

        $tmp_array = array();

        if(isset($tmp_broadcast_nation_flag) && 
            ($tmp_broadcast_nation_flag != 'flag_unknown.gif'))
        {

            if($isLIVE == true){

                $tmp_broadcast_scroller = ':: BROADCASTING WORLDWIDE ';
                $tmp_broadcast_is_live  = 'TRUE';

            }else{

                $tmp_broadcast_scroller = ':: BROADCASTED WORLDWIDE ';
                $tmp_broadcast_is_live  = 'FALSE';

            }

            $tmp_file_name = $this->ptrn_replace(
                                    '.png', 
                                    '.gif', 
                                    $tmp_broadcast_nation_flag);

            list($width, $height) = getimagesize(
                                    $this->oUserEnvironment->getEnvParam('DOCUMENT_ROOT') . 
                                    $this->oUserEnvironment->getEnvParam('DOCUMENT_ROOT_DIR') . 
                                    '/common/imgs/bassdrive_component_creative/' . 
                                    $tmp_file_name);

            /*error_log(
             *    '[mthd ' . 
             *    __METHOD__ . '] [lnum ' . 
             *    __LINE__ . '] [' . 
             *    $tmp_db_resp_array['stream_locale'] . 
             *    '].');
             */

            $tmp_array['broadcast_nation'] = '<div id="broadcast_nation_wrapper">
                                            <div id="nation_colors_wrapper" class="nation_colors_wrapper"></div>
                                            <div id="bassdrive_broadcast_scroller_wrapper">
                                                <div id="bassdrive_broadcast_scroller_dyn_wrapper"></div>
                                                <div class="cb"></div>
                                            </div>
                                            <div class="hidden">
                                                <div id="bassdrive_broadcast_nation_thumb_width">' . 
                                                $width . '</div>
                                                <div id="broadcast_show_original_title">' . 
                                                \html_entity_decode($str) . '</div>
                                                <div id="broadcast_locale">' . 
                                                $tmp_db_resp_array['stream_locale'] . '</div>
                                                <div id="broadcast_nation_img">' . 
                                                $tmp_broadcast_nation_flag . '</div>
                                                <div id="broadcast_nation_title">' . 
                                                $tmp_broadcast_nation_title . '</div>
                                                <div id="broadcast_is_LIVE">' . 
                                                $tmp_broadcast_is_live . '</div>
                                                <div id="component_tech_integration_driver">SERVER</div>
                                            </div>
                                            </div>';

        }else{

            $tmp_array['broadcast_nation'] = '';

        }

        $tmp_array['stream_info'] = $tmp_wrk_str;
        if(isset($tmp_broadcast_is_live)){

            $tmp_array['is_live'] = $tmp_broadcast_is_live;

        }else{

            $tmp_array['is_live'] = '';

        }

        return $tmp_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_nation_flag_ARRAY()
    {

        $tmp_array                                      = array();
        $tmp_array['flag_spain.png']                    = 'Spain';
        $tmp_array['flag_australia.png']                = 'Australia';
        $tmp_array['flag_austria.png']                  = 'Austria';
        $tmp_array['flag_canada.png']                   = 'Canada';
        $tmp_array['flag_czech_republic.png']           = 'Czech Republic';
        $tmp_array['flag_germany.png']                  = 'Germany';
        $tmp_array['flag_brazil.png']                   = 'Brazil';
        $tmp_array['flag_hungary.png']                  = 'Hungary';
        $tmp_array['flag_netherlands.png']              = 'Netherlands';
        $tmp_array['flag_poland.png']                   = 'Poland';
        $tmp_array['flag_romania.png']                  = 'Romania';
        $tmp_array['flag_russia.png']                   = 'Russia';
        $tmp_array['flag_thailand.png']                 = 'Thailand';
        $tmp_array['flag_united_kingdom.png']           = 'United Kingdom';
        $tmp_array['flag_united_states_of_america.png'] = 'United States of America';
        $tmp_array['flag_unknown.gif']                  = 'unknown';

        return $tmp_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_stream_string_pattern_key_ARRAY()
    {

        $tmp_array                            = array();
        $tmp_array['Fuzed Funk']              = 'Fuzed Funk';
        $tmp_array['Jason Magin']             = 'Fuzed Funk';
        $tmp_array['BRYAN GEE']               = 'BRYAN GEE';
        $tmp_array['BRYANGEE']                = 'BRYAN GEE';
        $tmp_array['Audiofields']             = 'Audiofields';
        $tmp_array['Simplification']          = 'Simplification';
        $tmp_array['Subliminal']              = 'Subliminal';
        $tmp_array['Melinki']                 = 'Melinki';
        $tmp_array['Disturbo']                = 'Disturbo';
        $tmp_array['Redex']                   = 'Redex';
        $tmp_array['Blind Judge']             = 'Blind Judge';
        $tmp_array['Rodney Rolls']            = 'Rodney Rolls';
        $tmp_array['Mod Con']                 = 'Mod Con';
        $tmp_array['DJ ANDY']                 = 'DJ ANDY';
        $tmp_array['BASS GO BOOM']            = 'DJ ANDY';
        $tmp_array['Bumblebee']               = 'Bumblebee';
        $tmp_array['Insideman']               = 'Insideman';
        $tmp_array['On:Ward']                 = 'On:Ward';
        $tmp_array['Onward Show']             = 'On:Ward';
        $tmp_array['Fokuz Recordings']        = 'Fokuz Recordings';
        $tmp_array['STAMINA Radio']           = 'STAMINA Radio';
        $tmp_array['Launch in Session']       = 'Launch in Session';
        $tmp_array['Balearic']                = 'Balearic';
        $tmp_array['Bankbeats']               = 'Bankbeats';
        $tmp_array['Sweetpea']                = 'Sweetpea';
        $tmp_array['AudioDevice']             = 'AudioDevice';
        $tmp_array['Prague Connection']       = 'Prague Connection';
        $tmp_array['Subfactory']              = 'Subfactory';
        $tmp_array['Vital Habits']            = 'Vital Habits';
        $tmp_array['TRANSLATION SOUND']       = 'TRANSLATION SOUND';
        $tmp_array['Wadjit']                  = 'Wadjit';
        $tmp_array['PROMO ZO']                = 'PROMO ZO';
        $tmp_array['DrumObsession']           = 'DrumObsession';
        $tmp_array['Skeptics']                = 'Skeptics';
        $tmp_array['BERLIN BASS']             = 'BERLIN BASS';
        $tmp_array['SCIENTIFIC RADIO']        = 'SCIENTIFIC RADIO';
        $tmp_array['NIGHT GROOVES']           = 'NIGHT GROOVES';
        $tmp_array['XPOSURE']                 = 'XPOSURE';
        $tmp_array['Ben XO']                  = 'XPOSURE';
        $tmp_array['Sohl']                    = 'Sohl';
        $tmp_array['River City']              = 'River City';
        $tmp_array['Ill Omen']                = 'Ill Omen';
        $tmp_array['Atmospheric Alignments']  = 'Atmospheric Alignments';
        $tmp_array['Skanka']                  = 'Skanka';
        $tmp_array['Northern Groove']         = 'Northern Groove';
        $tmp_array['Soulsmith']               = 'Northern Groove';
        $tmp_array['GREENROOM']               = 'GREENROOM';
        $tmp_array['Random Movement']         = 'Random Movement';
        $tmp_array['Mike Random']             = 'Random Movement';
        $tmp_array['Strictly Science']        = 'Strictly Science';
        $tmp_array['Circuitry']               = 'Circuitry';
        $tmp_array['Method One']              = 'Method One';
        $tmp_array['Power Rinse']             = 'Power Rinse';
        $tmp_array['EvanTheScientist']        = 'Power Rinse';
        $tmp_array['Trainspotting']           = 'Trainspotting';
        $tmp_array['Amnesty']                 = 'Trainspotting';
        $tmp_array['A Sides']                 = 'A Sides';
        $tmp_array['Eastside Sessions']       = 'A Sides';
        $tmp_array['Invaderz']                = 'Invaderz';
        $tmp_array['Saphir']                  = 'Saphir';
        $tmp_array['Jay Rome']                = 'Saphir';
        $tmp_array['Funked Up']               = 'Funked Up';
        $tmp_array['DFunk']                   = 'DFunk';
        $tmp_array['Ashatack']                = 'Ashatack';
        $tmp_array['Ebb & Flow']              = 'Ebb & Flow';
        $tmp_array['Optx']                    = 'Ebb & Flow';
        $tmp_array['Impressions']             = 'Impressions';
        $tmp_array['Indentation']             = 'Impressions';
        $tmp_array['Australian Atmospherics'] = 'Australian Atmospherics';
        $tmp_array['Operon']                  = 'Australian Atmospherics';
        $tmp_array['Vibration Sessions']      = 'Vibration Sessions';
        $tmp_array['Deep Soul']               = 'Deep Soul';
        $tmp_array['Donovan']                 = 'Deep Soul';
        $tmp_array['ECLIPS3']                 = 'ECLIPS3';
        $tmp_array['LQD']                     = 'ECLIPS3';
        $tmp_array['Represent Radio']         = 'Represent Radio';
        $tmp_array['Squake']                  = 'Squake';
        $tmp_array['SixOneOh']                = 'SixOneOh';
        $tmp_array['Resistance Radio']        = 'Resistance Radio';
        $tmp_array['John Ohms']               = 'Resistance Radio';
        $tmp_array['Phuture']                 = 'Phuture';
        $tmp_array['Overfiend']               = 'Overfiend';
        $tmp_array['Hangover']                = 'Hangover';
        $tmp_array['Lamebrane']               = 'Hangover';
        $tmp_array['Schematic']               = 'Schematic';
        $tmp_array['Crucial X']               = 'Crucial X';
        $tmp_array['Spacefunk']               = 'Crucial X';
        $tmp_array['Deceit FM']               = 'Deceit FM';
        $tmp_array['Buzzy']                   = 'Deceit FM';
        $tmp_array['LJHigh']                  = 'LJHigh';
        $tmp_array['High Definition']         = 'LJHigh';
        $tmp_array['Warm Ears']               = 'Warm Ears';
        $tmp_array['Lab Sessions']            = 'Lab Sessions';
        $tmp_array['Incisive Rhythm']         = 'Incisive Rhythm';
        $tmp_array['Awake247']                = 'Awake247';
        $tmp_array['Awake FM']                = 'Awake247';
        $tmp_array['AwakeFM']                 = 'Awake247';

        $tmp_array['Subtext']                 = 'Subtext';
        $tmp_array['Phlage']                  = 'Phlage';
        $tmp_array['Lost Content']            = 'Lost Content';
        $tmp_array['Tehace']                  = 'Tehace';
        $tmp_array['Pyxis']                   = 'Pyxis';
        $tmp_array['Aras']                    = 'Aras';
        $tmp_array['Slider']                  = 'Slider';

        return $tmp_array;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_stream_social_meta_ARRAY($str)
    {

        $tmp_stream_ARRAY = array();
        //$tmp_stream_ARRAY['stream_flag_file_img'] = '';
        //$tmp_stream_ARRAY['stream_city_state_prov_nation'] = '';

        // xxxxx[0] = 'flag_united_kingdom.gif'
        $bassdrive_broadcast_nation_img_file_ARRAY = $this->return_broadcast_nation_association_ARRAY();

        $bassdrive_broadcast_flag_nomination_ARRAY = $this->return_nation_flag_ARRAY();

        $tmp_db_resp_array = $this->return_stream_social_association_ARRAY($str);
        //$bassdrive_broadcast_city_state_prov_nation_ARRAY = $this->return_broadcast_scroller_content_ARRAY();

        //$tmp_bassdrive_broadcast_nation_cnt = sizeof($bassdrive_broadcast_nation_img_file_ARRAY);
        $has_flag = false;

        foreach($bassdrive_broadcast_nation_img_file_ARRAY as 
            $show_str => $flag_img_filename)
        {

            $pos = stripos($str, $show_str);
            if(($pos !== false) && 
                ($has_flag == false))
            {

                if(!isset($tmp_db_resp_array['stream_locale'])){

                    $tmp_db_resp_array['stream_locale'] = '';

                }

                $has_flag = true;
                $tmp_stream_ARRAY['stream_flag_file_img']          = $flag_img_filename;
                $tmp_stream_ARRAY['stream_flag_nomination']        = $bassdrive_broadcast_flag_nomination_ARRAY[$flag_img_filename];
                $tmp_stream_ARRAY['stream_city_state_prov_nation'] = $tmp_db_resp_array['stream_locale'];
                $tmp_stream_ARRAY['stream_pattern_string']         = $show_str;

            }

        }

        if(isset($tmp_stream_ARRAY['stream_flag_file_img'])){

            $tmp_file_name = $this->ptrn_replace(
                                    '.png', 
                                    '.gif', 
                                    $tmp_stream_ARRAY['stream_flag_file_img']);

            list($width, $height) = getimagesize(
                                    $this->oUserEnvironment->getEnvParam('DOCUMENT_ROOT') . 
                                    $this->oUserEnvironment->getEnvParam('DOCUMENT_ROOT_DIR') . 
                                    '/common/imgs/bassdrive_component_creative/' . 
                                    $tmp_file_name);

            $tmp_stream_ARRAY['stream_flag_img_width']  = $width;
            $tmp_stream_ARRAY['stream_flag_img_height'] = $height;

        }

        return $tmp_stream_ARRAY;

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
    function process_stream_title(
             $pattern, 
             $json_serial)
    {

        $tmp_resp             = array();
        $tmp_stream_key_array = $this->return_stream_string_pattern_key_ARRAY();
        $tmp_meta_array       = $this->return_stream_social_meta_ARRAY($pattern);

        //die();

        $tmp_stream_key = $tmp_stream_key_array[$tmp_meta_array['stream_pattern_string']];

        /*error_log('[mthd ' . 
         *    __METHOD__ . '] [lnum ' . 
         *    __LINE__ . '] [$pattern=' . 
         *    $pattern . 
         *    '][$tmp_stream_key=' . 
         *    $tmp_stream_key . '][' . 
         *    print_r($tmp_meta_array, true) . '].');
         */

        $this->stream_key = $tmp_stream_key;

        if(isset($tmp_meta_array['stream_flag_file_img'])){

            $tmp_resp['COLORS_NAME_KEY'][$tmp_stream_key]['COLORS_IMG_FILENAME']      = $tmp_meta_array['stream_flag_file_img'];
            $tmp_resp['COLORS_NAME_KEY'][$tmp_stream_key]['COLORS_NOMINATION']        = $tmp_meta_array['stream_flag_nomination'];
            $tmp_resp['COLORS_NAME_KEY'][$tmp_stream_key]['COLORS_IMG_WIDTH']         = $tmp_meta_array['stream_flag_img_width'];
            $tmp_resp['COLORS_NAME_KEY'][$tmp_stream_key]['COLORS_IMG_HEIGHT']        = $tmp_meta_array['stream_flag_img_height'];
            $tmp_resp['STREAM_KEY'][$tmp_stream_key]['LOCALE_CITY_STATE_PROV_NATION'] = $tmp_meta_array['stream_city_state_prov_nation'];

        }

        $tmp_resp['STREAM_KEY'][$tmp_stream_key]['LOG_JSON_SERIAL'] = $json_serial;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * bassdrive_stream
         * -----
         * STREAM_ID                       char(64)
         * ISACTIVE                        tinyint(2)
         * STREAM_KEY                      varchar(255)
         * COLORS_NAME_KEY                 varchar(100)
         */

        $this->stream_meta_ARRAY    = $tmp_resp;
        $this->stream_pattern_ARRAY = $tmp_stream_key_array;

        $tmp_resp_BOOL = $this->dataBaseIntegration->bassdrive_stream_initialization(
                                                     $this, 
                                                     $this->oUserEnvironment, 
                                                     'bassdrive_stream_initialization');

/*        if($tmp_resp_BOOL){

              error_log(__LINE__ . 
                 ' user SUCCESS bassdrive_stream ADD.');

          }else{

              error_log(__LINE__ . 
                 ' user NO bassdrive_stream ADD.');

          }
 */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * bassdrive_stream_lookup
         * -----
         * STREAM_LOOKUP_ID                char(64)
         * ISACTIVE                        tinyint(2)
         * STREAM_KEY                      varchar(255)
         * STREAM_KEY_CRC32
         * STREAM_STRING_PATTERN           varchar(300)
         */
        $tmp_resp_BOOL = $this->dataBaseIntegration->bassdrive_stream_lookup_sync(
                                                     $this, 
                                                     $this->oUserEnvironment, 
                                                     'bassdrive_stream_lookup_sync');

/*        if($tmp_resp_BOOL){

              error_log(__LINE__ . 
                 ' user SUCCESS bassdrive_stream_lookup ADD.');

          }else{

              error_log(__LINE__ . 
                 ' user NO bassdrive_stream_lookup ADD.');

          }
 */

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
         */

        $tmp_resp_BOOL = $this->dataBaseIntegration->bassdrive_stream_colors_sync(
                                                     $this, 
                                                     $this->oUserEnvironment, 
                                                     'bassdrive_stream_colors_sync');

/*        if($tmp_resp_BOOL){

              error_log(__LINE__  .' user SUCCESS bassdrive_stream_colors_sync ADD.');

          }else{

              error_log(__LINE__  .' user NO bassdrive_stream_colors_sync ADD.');

          }
 */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * bassdrive_stream_social_config
         * -----
         * SOCIAL_ID                       char(64)
         * LOG_JSON_SERIAL                 char(64)
         * STREAM_KEY                      varchar(255)
         * STREAM_KEY_CRC32                varchar(255)
         * ISACTIVE                        tinyint(2)
         * LOCALE_CITY_STATE_PROV_NATION   varchar(255)
         */

        $tmp_resp_BOOL = $this->dataBaseIntegration->bassdrive_stream_social_sync(
                                                     $this, 
                                                     $this->oUserEnvironment, 
                                                     'bassdrive_stream_social_sync');

/*        if($tmp_resp_BOOL){

              error_log(__LINE__ . 
                 ' user SUCCESS bassdrive_stream_social_sync ADD.');

          }else{

              error_log(__LINE__ . 
                 ' user NO bassdrive_stream_social_sync ADD.');

          }
 */

        return true;

    }

/*    private function return_broadcast_scroller_content_ARRAY()
 *    {
 *
 *        $broadcast_scroller_content_ARRAY = array();
 *
 *        $broadcast_scroller_content_ARRAY['Fuzed Funk']              = 'WILMINGTON, DE, USA';
 *        $broadcast_scroller_content_ARRAY['Jason Magin']             = 'WILMINGTON, DE, USA';
 *        $broadcast_scroller_content_ARRAY['Jay Dubz']                = 'SHREWSBURY, UK';
 *        $broadcast_scroller_content_ARRAY['BRYAN GEE']               = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['BRYANGEE']                = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['Audiofields']             = 'PROVIDENCE, RHODE ISLAND, USA';
 *        $broadcast_scroller_content_ARRAY['Simplification']          = 'S&Atilde;O PAULO, BRAZIL';
 *        $broadcast_scroller_content_ARRAY['Melinki']                 = 'HASTINGS, UK';
 *        $broadcast_scroller_content_ARRAY['Disturbo']                = 'VIENNA, AUSTRIA';
 *        $broadcast_scroller_content_ARRAY['Redex']                   = 'VIENNA, AUSTRIA';
 *        $broadcast_scroller_content_ARRAY['Blind Judge']             = 'VIENNA, AUSTRIA';
 *        $broadcast_scroller_content_ARRAY['Mod Con']                 = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['Rodney Rolls']            = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['DJ ANDY']                 = 'S&Atilde;O PAULO, BRAZIL';
 *        $broadcast_scroller_content_ARRAY['BASS GO BOOM']            = 'S&Atilde;O PAULO, BRAZIL';
 *        $broadcast_scroller_content_ARRAY['Bumblebee']               = 'BERLIN, GERMANY';
 *        $broadcast_scroller_content_ARRAY['Insideman']               = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['On:Ward']                 = 'SHREWSBURY, UK';
 *        $broadcast_scroller_content_ARRAY['Onward Show']             = 'SHREWSBURY, UK';
 *        $broadcast_scroller_content_ARRAY['Fokuz Recordings']        = 'ROTTERDAM, NETHERLANDS';
 *        $broadcast_scroller_content_ARRAY['STAMINA Radio']           = 'SAN FRANCISCO, CA, USA';
 *        $broadcast_scroller_content_ARRAY['Launch in Session']       = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['Balearic']                = 'IBIZA, SPAIN';
 *        $broadcast_scroller_content_ARRAY['Bankbeats']               = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['Sweetpea']                = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['AudioDevice']             = 'VIENNA, AUSTRIA';
 *        $broadcast_scroller_content_ARRAY['Prague Connection']       = 'RICANY, CZECH REPUBLIC';
 *        $broadcast_scroller_content_ARRAY['Subfactory']              = 'JERSEY, UK';
 *        $broadcast_scroller_content_ARRAY['Vital Habits']            = 'TIMISOARA, ROMANIA';
 *        $broadcast_scroller_content_ARRAY['TRANSLATION SOUND']       = 'WASHINGTON, DC, USA';
 *        $broadcast_scroller_content_ARRAY['Wadjit']                  = 'EDMONTON, AB, CANADA';
 *        $broadcast_scroller_content_ARRAY['PROMO ZO']                = 'KENT, UK';
 *        $broadcast_scroller_content_ARRAY['DrumObsession']           = 'POZNAN, POLAND';
 *        $broadcast_scroller_content_ARRAY['Skeptics']                = 'BIRMINGHAM, UK';
 *        $broadcast_scroller_content_ARRAY['BERLIN BASS']             = 'BERLIN, GERMANY';
 *        $broadcast_scroller_content_ARRAY['SCIENTIFIC RADIO']        = 'UTRECHT, NETHERLANDS';
 *        $broadcast_scroller_content_ARRAY['NIGHT GROOVES']           = 'ST. PETERSBURG, RUSSIA';
 *        $broadcast_scroller_content_ARRAY['XPOSURE']                 = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['Ben XO']                  = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['Sohl']                    = 'WHITE PLAINS, NY, USA';
 *        $broadcast_scroller_content_ARRAY['River City']              = 'RICHMOND, VA, USA';
 *        $broadcast_scroller_content_ARRAY['Ill Omen']                = 'RICHMOND, VA, USA';
 *        $broadcast_scroller_content_ARRAY['Atmospheric Alignments']  = 'TULSA, OK, USA';
 *        $broadcast_scroller_content_ARRAY['Skanka']                  = 'TULSA, OK, USA';
 *        $broadcast_scroller_content_ARRAY['Northern Groove']         = 'OLD TRAFFORD, MANCHESTER, UK';
 *        $broadcast_scroller_content_ARRAY['Soulsmith']               = 'OLD TRAFFORD, MANCHESTER, UK';
 *        $broadcast_scroller_content_ARRAY['GREENROOM']               = 'CHICAGO, IL, USA';
 *        $broadcast_scroller_content_ARRAY['Random Movement']         = 'ORLANDO, FL, USA';
 *        $broadcast_scroller_content_ARRAY['Mike Random']             = 'ORLANDO, FL, USA';
 *        $broadcast_scroller_content_ARRAY['Strictly Science']        = 'AUSTIN, TX, USA';
 *        $broadcast_scroller_content_ARRAY['Circuitry']               = 'SAN FRANCISCO, CA, USA';
 *        $broadcast_scroller_content_ARRAY['Method One']              = 'SAN FRANCISCO, CA, USA';
 *        $broadcast_scroller_content_ARRAY['Power Rinse']             = 'TORONTO, CANADA';
 *        $broadcast_scroller_content_ARRAY['EvanTheScientist']        = 'TORONTO, CANADA';
 *        $broadcast_scroller_content_ARRAY['Trainspotting']           = 'BANGKOK, THAILAND';
 *        $broadcast_scroller_content_ARRAY['Amnesty']                 = 'BANGKOK, THAILAND';
 *        $broadcast_scroller_content_ARRAY['A Sides']                 = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['Eastside Sessions']       = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['Invaderz']                = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['Saphir']                  = 'VIENNA, AUSTRIA';
 *        $broadcast_scroller_content_ARRAY['Jay Rome']                = 'VIENNA, AUSTRIA';
 *        $broadcast_scroller_content_ARRAY['Funked Up']               = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['DFunk']                   = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['Ashatack']                = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['Ebb & Flow']              = 'AUSTIN, TX, USA';
 *        $broadcast_scroller_content_ARRAY['Optx']                    = 'AUSTIN, TX, USA';
 *        $broadcast_scroller_content_ARRAY['Impressions']             = 'SAN DIEGO, CA, USA';
 *        $broadcast_scroller_content_ARRAY['Indentation']             = 'SAN DIEGO, CA, USA';
 *        $broadcast_scroller_content_ARRAY['Australian Atmospherics'] = 'BRISBANE, AUSTRALIA';
 *        $broadcast_scroller_content_ARRAY['Operon']                  = 'BRISBANE, AUSTRALIA';
 *        $broadcast_scroller_content_ARRAY['Vibration Sessions']      = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['Deep Soul']               = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['Donovan']                 = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['ECLIPS3']                 = 'BUDAPEST, HUNGARY';
 *        $broadcast_scroller_content_ARRAY['LQD']                     = 'BUDAPEST, HUNGARY';
 *        $broadcast_scroller_content_ARRAY['Represent Radio']         = 'NASHVILLE, TN, USA';
 *        $broadcast_scroller_content_ARRAY['Squake']                  = 'NASHVILLE, TN, USA';
 *        $broadcast_scroller_content_ARRAY['SixOneOh']                = 'LEHIGH VALLEY, PA, USA';
 *        $broadcast_scroller_content_ARRAY['Resistance Radio']        = 'EDMONTON, AB, CANADA';
 *        $broadcast_scroller_content_ARRAY['John Ohms']               = 'EDMONTON, AB, CANADA';
 *        $broadcast_scroller_content_ARRAY['Phuture']                 = 'MOSCOW, RUSSIA';
 *        $broadcast_scroller_content_ARRAY['Overfiend']               = 'NEW YORK, NY, USA';
 *        $broadcast_scroller_content_ARRAY['Hangover']                = 'CHICAGO, IL, USA';
 *        $broadcast_scroller_content_ARRAY['Lamebrane']               = 'CHICAGO, IL, USA';
 *        $broadcast_scroller_content_ARRAY['Schematic']               = 'ALMONTE, ONTARIO, CANADA';
 *        $broadcast_scroller_content_ARRAY['Crucial X']               = 'SACRAMENTO, CA, USA';
 *        $broadcast_scroller_content_ARRAY['Spacefunk']               = 'SACRAMENTO, CA, USA';
 *        $broadcast_scroller_content_ARRAY['Deceit FM']               = 'PERTH, AUSTRALIA';
 *        $broadcast_scroller_content_ARRAY['Buzzy']                   = 'PERTH, AUSTRALIA';
 *        $broadcast_scroller_content_ARRAY['LJHigh']                  = 'COVENTRY, UK';
 *        $broadcast_scroller_content_ARRAY['High Definition']         = 'COVENTRY, UK';
 *        $broadcast_scroller_content_ARRAY['Warm Ears']               = 'LONDON, UK';
 *        $broadcast_scroller_content_ARRAY['Lab Sessions']            = 'ORLANDO, FL, USA';
 *        $broadcast_scroller_content_ARRAY['Incisive Rhythm']         = 'DETROIT, MI, USA';
 *        $broadcast_scroller_content_ARRAY['Awake247']                = 'ALBANY, NY, USA';
 *        $broadcast_scroller_content_ARRAY['Awake FM']                = 'ALBANY, NY, USA';
 *        $broadcast_scroller_content_ARRAY['AwakeFM']                 = 'ALBANY, NY, USA';
 *
 *        $broadcast_scroller_content_ARRAY['Subtext']                 = '';
 *        $broadcast_scroller_content_ARRAY['Phlage']                  = '';
 *        $broadcast_scroller_content_ARRAY['Lost Content']            = '';
 *        $broadcast_scroller_content_ARRAY['Tehace']                  = '';
 *        $broadcast_scroller_content_ARRAY['Pyxis']                   = '';
 *        $broadcast_scroller_content_ARRAY['Aras']                    = '';
 *        $broadcast_scroller_content_ARRAY['Slider']                  = '';
 *
 *        return $broadcast_scroller_content_ARRAY;
 *
 *    }
 */

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_broadcast_nation_association_ARRAY()
    {

        $tmp_array                            = array();
        $tmp_array['Australian Atmospherics'] =
        $tmp_array['Operon']                  =
        $tmp_array['Deceit FM']               =
        $tmp_array['Buzzy']                   = 'flag_australia.png';
        $tmp_array['Disturbo']                =
        $tmp_array['Redex']                   =
        $tmp_array['Blind Judge']             =
        $tmp_array['AudioDevice']             =
        $tmp_array['Saphir']                  =
        $tmp_array['Jay Rome']                =
        $tmp_array['IAmDoomed']               = 'flag_austria.png';
        $tmp_array['Simplification']          =
        $tmp_array['DJ ANDY']                 =
        $tmp_array['BASS GO BOOM']            = 'flag_brazil.png';
        $tmp_array['Wadjit']                  =
        $tmp_array['Power Rinse']             =
        $tmp_array['EvanTheScientist']        =
        $tmp_array['Resistance Radio']        =
        $tmp_array['John Ohms']               =
        $tmp_array['Schematic']               = 'flag_canada.png';
        $tmp_array['Prague Connection']       = 'flag_czech_republic.png';
        $tmp_array['Bumblebee']               =
        $tmp_array['BERLIN BASS']             = 'flag_germany.png';
        $tmp_array['ECLIPS3']                 =
        $tmp_array['LQD']                     = 'flag_hungary.png';
        $tmp_array['Fokuz Recordings']        =
        $tmp_array['SCIENTIFIC RADIO']        = 'flag_netherlands.png';
        $tmp_array['DrumObsession']           = 'flag_poland.png';
        $tmp_array['Vital Habits']            = 'flag_romania.png';
        $tmp_array['NIGHT GROOVES']           =
        $tmp_array['Phuture']                 = 'flag_russia.png';
        $tmp_array['Balearic']                = 'flag_spain.png';
        $tmp_array['Trainspotting']           =
        $tmp_array['Amnesty']                 = 'flag_thailand.png';
        $tmp_array['Jay Dubz']                =
        $tmp_array['BRYAN GEE']               =
        $tmp_array['BRYANGEE']                =
        $tmp_array['Melinki']                 =
        $tmp_array['Rodney Rolls']            =
        $tmp_array['Mod Con']                 =
        $tmp_array['Insideman']               =
        $tmp_array['On:Ward']                 =
        $tmp_array['Onward Show']             =
        $tmp_array['Launch in Session']       =
        $tmp_array['Bankbeats']               =
        $tmp_array['Sweetpea']                =
        $tmp_array['Subfactory']              =
        $tmp_array['PROMO ZO']                =
        $tmp_array['Skeptics']                =
        $tmp_array['XPOSURE']                 =
        $tmp_array['Ben XO']                  =
        $tmp_array['Northern Groove']         =
        $tmp_array['Soulsmith']               =
        $tmp_array['A Sides']                 =
        $tmp_array['Eastside Sessions']       =
        $tmp_array['Invaderz']                =
        $tmp_array['Funked Up']               =
        $tmp_array['DFunk']                   =
        $tmp_array['Ashatack']                =
        $tmp_array['Vibration Sessions']      =
        $tmp_array['Deep Soul']               =
        $tmp_array['Donovan']                 =
        $tmp_array['LJHigh']                  =
        $tmp_array['High Definition']         =
        $tmp_array['Warm Ears']               = 'flag_united_kingdom.png';
        $tmp_array['Fuzed Funk']              =
        $tmp_array['Jason Magin']             =
        $tmp_array['Audiofields']             =
        $tmp_array['Subliminal']              =
        $tmp_array['STAMINA Radio']           =
        $tmp_array['TRANSLATION SOUND']       =
        $tmp_array['Sohl']                    =
        $tmp_array['River City']              =
        $tmp_array['Ill Omen']                =
        $tmp_array['Atmospheric Alignments']  =
        $tmp_array['Skanka']                  =
        $tmp_array['GREENROOM']               =
        $tmp_array['Random Movement']         =
        $tmp_array['Mike Random']             =
        $tmp_array['Strictly Science']        =
        $tmp_array['Circuitry']               =
        $tmp_array['Method One']              =
        $tmp_array['Ebb & Flow']              =
        $tmp_array['Optx']                    =
        $tmp_array['Impressions']             =
        $tmp_array['Indentation']             =
        $tmp_array['Represent Radio']         =
        $tmp_array['Squake']                  =
        $tmp_array['SixOneOh']                =
        $tmp_array['Overfiend']               =
        $tmp_array['Hangover']                =
        $tmp_array['Lamebrane']               =
        $tmp_array['Crucial X']               =
        $tmp_array['Spacefunk']               =
        $tmp_array['Lab Sessions']            =
        $tmp_array['Incisive Rhythm']         =
        $tmp_array['Awake247']                =
        $tmp_array['Awake FM']                =
        $tmp_array['AwakeFM']                 = 'flag_united_states_of_america.png';

        $tmp_array['Subtext']                 =
        $tmp_array['Phlage']                  =
        $tmp_array['Lost Content']            =
        $tmp_array['Tehace']                  =
        $tmp_array['Pyxis']                   =
        $tmp_array['Aras']                    =
        $tmp_array['Slider']                  = 'flag_unknown.gif';

        return $tmp_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_LIVE_ARRAY()
    {

        $tmp_array   = array();
        $tmp_array[] = ' LIVE';
        $tmp_array[] = ' Live ';
        $tmp_array[] = ' live ';
        $tmp_array[] = 'LIVE!!!';
        $tmp_array[] = ' LIVE!';
        $tmp_array[] = 'LIVE!';
        $tmp_array[] = 'Live!!';
        $tmp_array[] = 'Live!';
        $tmp_array[] = '*LIVE*';
        $tmp_array[] = 'Live';

        return $tmp_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_MONTH_ARRAY()
    {

        $tmp_array   = array();
        $tmp_array[] = 'Jan';
        $tmp_array[] = 'Feb';
        $tmp_array[] = 'Mar';
        $tmp_array[] = 'Apr';
        $tmp_array[] = 'May';
        $tmp_array[] = 'Jun';
        $tmp_array[] = 'Jul';
        $tmp_array[] = 'July';
        $tmp_array[] = 'Aug';
        $tmp_array[] = 'Sept';
        $tmp_array[] = 'Oct';
        $tmp_array[] = 'Nov';
        $tmp_array[] = 'Dec';

        return $tmp_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_DAY_ARRAY()
    {

        $tmp_array = array();

        for($i = 31; $i > 0; $i--){

            $tmp_array[] = $i;

        }

        return $tmp_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_specialty_ARRAY()
    {

        $tmp_array   = array();
        $tmp_array[] = 'Wadjit (Canada)';
        $tmp_array[] = 'Wadjit (CAN)';
        $tmp_array[] = 'Wadjit (CANADA)';
        $tmp_array[] = 'Wadjit (canada)';
        $tmp_array[] = 'Wadjit (can)';
        $tmp_array[] = 'THE GREENROOM';
        $tmp_array[] = 'Blu Saphir';

        return $tmp_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_specialty_output_ARRAY()
    {

        $tmp_array   = array();
        $tmp_array[] = 'Wadjit ' . 
                       '<img src="' . 
                       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                       'common/imgs/canada_thumb.gif" width="33" ' . 
                       'height="16" alt="Canada" ' . 
                       'title="Canada">';
        $tmp_array[] = 'Wadjit ' . 
                       '<img src="' . 
                       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                       'common/imgs/canada_thumb.gif" width="33" ' . 
                       'height="16" alt="Canada" ' . 
                       'title="Canada">';
        $tmp_array[] = 'Wadjit ' . 
                       '<img src="' . 
                       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                       'common/imgs/canada_thumb.gif" width="33" ' . 
                       'height="16" alt="Canada" ' . 
                       'title="Canada">';
        $tmp_array[] = 'Wadjit ' . 
                       '<img src="' . 
                       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                       'common/imgs/canada_thumb.gif" width="33" ' . 
                       'height="16" alt="Canada" ' . 
                       'title="Canada">';
        $tmp_array[] = 'Wadjit ' . 
                       '<img src="' . 
                       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                       $this->oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                       'common/imgs/canada_thumb.gif" width="33" ' . 
                       'height="16" alt="Canada" ' . 
                       'title="Canada">';
        $tmp_array[] = '<span style="color:#06730A; font-weight: ' . 
                       'bold; font-size: 110%;">THE GREENROOM</span>';
        $tmp_array[] = '<span style="color:#3133D5; font-weight: ' . 
                       'bold;">Blu Saphir</span>';

        return $tmp_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_HYPER_ARRAY()
    {

        $tmp_array   = array();
        $tmp_array[] = '[@bdxposure';
        $tmp_array[] = 'www.Facebook.com/NateReflect';
        $tmp_array[] = 'soundcloud.com/LQDAudio';
        $tmp_array[] = 'Facebook.com/JasonMagin';
        $tmp_array[] = 'facebook.com/impression23';
        $tmp_array[] = 'fb.com/schematicdnb';
        $tmp_array[] = 'www.djspim.com';
        $tmp_array[] = 'www.northerngroove.co.uk/';
        $tmp_array[] = 'https://xo.am/';
        $tmp_array[] = '@bdxposure';
        $tmp_array[] = 'fb.com/DrumObsession';
        $tmp_array[] = 'tweet@DrumObsessionPL';
        $tmp_array[] = 'insta/impression_ucr';
        $tmp_array[] = 'Insta@fuzedfunk';
        $tmp_array[] = '@warmearsmusic';
        $tmp_array[] = 'fb.com/thebryangee';
        $tmp_array[] = '@schematicdnb';
        $tmp_array[] = 'FB/impression2377';
        $tmp_array[] = 'facebook.com/louis.overfiend';
        $tmp_array[] = 'www.facebook.com/NateReflect';
        $tmp_array[] = 'www.soundcloud.com/amnesty';
        $tmp_array[] = 'Random_Movement';
        $tmp_array[] = 'RandomMovementMusic';
        $tmp_array[] = 'Facebook.com/DLO.DNB';
        $tmp_array[] = 'www.northerngroove.co.uk';
        $tmp_array[] = 'www.facebook.com/operondnb';
        $tmp_array[] = 'fb.com/louis.overfiend';
        $tmp_array[] = 'Launch Pad with Dj Handy';
        $tmp_array[] = 'Shrewsbury UK with Jay Dubz';
        $tmp_array[] = 'host INDENTATION';
        $tmp_array[] = 'tweet@DrumObsessionPL';
        $tmp_array[] = 'fb.com/drumobsession';

        return $tmp_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_LINK_ARRAY()
    {

        $tmp_array   = array();
        $tmp_array[] = '<br>[@bdxposure';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.facebook.com/NateReflect" ' . 
                       'target="_blank">www.Facebook.com/NateReflect</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://soundcloud.com/LQDAudio" ' . 
                       'target="_blank">soundcloud.com/LQDAudio</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.facebook.com/JasonMagin" ' . 
                       'target="_blank">Facebook.com/JasonMagin</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.Facebook.com/impression23" ' . 
                       'target="_blank">facebook.com/impression23</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.facebook.com/schematicdnb" ' . 
                       'target="_blank">fb.com/schematicdnb</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="http://www.djspim.com" ' . 
                       'target="_blank">www.djspim.com</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="http://www.northerngroove.co.uk/" ' . 
                       'target="_blank">www.northerngroove.co.uk/</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://xo.am/" ' . 
                       'target="_blank">https://xo.am/</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://twitter.com/bdxposure" ' . 
                       'target="_blank">@bdxposure</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.facebook.com/drumobsession" ' . 
                       'target="_blank">fb.com/DrumObsession</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://twitter.com/DrumObsessionPL" ' . 
                       'target="_blank">tweet@DrumObsessionPL</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.instagram.com/impression_ucr/" ' . 
                       'target="_blank">insta/impression_ucr</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.instagram.com/fuzedfunk/" ' . 
                       'target="_blank">Insta/fuzedfunk</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.instagram.com/warmearsmusic/" ' . 
                       'target="_blank">@warmearsmusic</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.facebook.com/thebryangee/" ' . 
                       'target="_blank">fb.com/thebryangee</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.facebook.com/schematicdnb/" ' . 
                       'target="_blank">@schematicdnb</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.facebook.com/Impression2377/" ' . 
                       'target="_blank">FB/impression2377</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.facebook.com/louis.overfiend/" ' . 
                       'target="_blank">facebook.com/louis.overfiend</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.facebook.com/NateReflect/" ' . 
                       'target="_blank">www.facebook.com/NateReflect</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://soundcloud.com/amnesty" ' . 
                       'target="_blank">www.soundcloud.com/amnesty</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://twitter.com/random_movement" ' . 
                       'target="_blank">Random_Movement</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.instagram.com/Randommovementmusic/" ' . 
                       'target="_blank">RandomMovementMusic</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.facebook.com/DLO.DNB" ' . 
                       'target="_blank">Facebook.com/DLO.DNB</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="http://www.northerngroove.co.uk/" ' . 
                       'target="_blank">www.northerngroove.co.uk</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.facebook.com/operondnb" ' . 
                       'target="_blank">www.facebook.com/operondnb</a>';
        $tmp_array[] = '<a style="color:#0066CC; ' . 
                       'font-weight: normal;" ' . 
                       'href="https://www.facebook.com/louis.overfiend" ' . 
                       'target="_blank">fb.com/louis.overfiend</a>';
        $tmp_array[] = 'Launch Pad<br>with Dj Handy';
        $tmp_array[] = 'Shrewsbury UK<br>with Jay Dubz';
        $tmp_array[] = 'host INDENTATION<br>';
        $tmp_array[] = '<a style="color:#0066CC; font-weight: normal;" ' . 
                       'href="https://twitter.com/DrumObsessionPL" ' . 
                       'target="_blank">tweet@DrumObsessionPL</a>';
        $tmp_array[] = '<a style="color:#0066CC; font-weight: normal;" ' . 
                       'href="https://www.facebook.com/drumobsession" ' . 
                       'target="_blank">fb.com/drumobsession</a>';

        return $tmp_array;

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
    function ptrn_replace(
             $pattern_str, 
             $replace_str, 
             $str)
    {

        $patterns     = array();
        $replacements = array();

        $patterns[0]     = $pattern_str;
        $replacements[0] = $replace_str;

        $str = \str_replace($patterns, $replacements, $str);

        return $str;
    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function generateNewKey($len)
    {

        return $this->oUser->generateNewKey($len);

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
         * the jony5_bassdrive_integration_data 
         * class definition. 
         *
         * 
         * 5 :: Wednesday, July 1, 2026 @ 0449 hrs.
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