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
 * R :: Content Pending. 
 *
 * GLOBAL FUNCTION
 * RESOURCE DEFINITION :: _lightbox_helper_load_custom_thumbnail_data
 * FUNCTION VERSION    :: 1.00.0000
 * DATE                :: Wednesday, July 3, 2024 @ 2143 hrs.
 * AUTHOR              :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                 :: http://evifweb.jony5.com/
 * TITLE               :: The Custom Lightbox Thumbnail
 *                        Image Meta Data Object
 *                        Initialization Global
 *                        Function Definition
 *                        for The Lightbox Helper
 *                        by eVifweb
 * DESCRIPTION         :: Return the requested custom
 *                        Lightbox gallery thumbnail
 *                        image meta data information
 *                        into memory.
 *
 *                        Each Lightbox thumbnail
 *                        display image has its own
 *                        social share and social
 *                        media preview enabled
 *                        deep link.
 *
 *                        This client-side UI support
 *                        architecture for the
 *                        Lightbox Helper by eVifweb
 *                        is still in development and
 *                        will probably be changing.
 *
 *
 *                        5
 *
 *                        Monday, July 22, 2024 @ 1301 hrs.
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
 * @return mixed 
 * @access public
 *
 */
function _lightbox_helper_load_custom_thumbnail_data(
         $oLightbox_Helper, 
         $name = 'object_definition', 
         $fullscreen_image_filepath = NULL, 
         $thumbnail_image_filepath = NULL)
{

    switch($name){
        case 'object_definition':

            //
            // IMAGE CONTENT.
            $tmp_dir_path_fullscreen = $tmp_http_url_fullscreen = '';
            $tmp_dir_path_thumbnail = $tmp_http_url_thumbnail = '';
            $tmp_thumbnail_filesize_bytes = $tmp_fullscreen_filesize_bytes = '';
            $tmp_thumbnail_lastmodified = $tmp_fullscreen_lastmodified = '';
            $tmp_thumbnail_mime_type = $tmp_fullscreen_mime_type = '';

            //
            // IMAGE STRUCTURE.
            $tmp_css_injection = $oLightbox_Helper->return_lightbox_image_thumb_preciousness();

            $tmp_5_gallery_global_alt_text = $tmp_5_gallery_global_description = 'I\'m Jonathan \'5\' Harris a ravenous wolf 
            of the tribe of Benjamin and one of the King\'s two swords, an eternal son of thunder officially seated in heaven 
            at a place prepared by God my heavenly Father at table next to Jesus Christ, the Son of God, the Son of David, 
            the King of kings and Lord of all lords, and a web professional living and working in Atlanta, GA.

            <br><br>
            In the midst of my daily priestly service and according to my fellowship with God, this unprofitable 
            servant of the Lord testifies that I will be taking the church (100% of the living christian 
            sisters and the living certain brothers) to heaven in my house. I will take the church to heaven 
            through my 935M apartment #305 in Atlanta; 935M is the location of many of the best of my days during times in 
            which I could easily be with people that I love in my city...and before my 2011-2012 martyrdom.';

            $tmp_M_WITH_5_gallery_global_description = 'M with 5 from ATLANTA. I will love you always, my dear.';
            $tmp_M_WITH_5_gallery_global_alt_text = 'M with 5 from ATLANTA.';

            //
            // Load the meta data
            // array for this image
            // with much preciousness.
            /*
            Get the last modified time
            stamp of the fullscreen file.
            Get the timestamp of the
            thumbnail, if the thumbnail
            is visible...

            Get the filesize in bytes
            of the fullscreen file.

            Get the filesize in bytes
            of the thumbnail, if the
            thumbnail is visible...

            Do we check for the
            existence of the fullscreen
            file? it was directory
            scan listed.

            Check for the existence of
            the thumbnail file, if the
            thumbnail is visible...

            */

            $tmp_bypass_thumbnail_file_read = false;
            if(isset($fullscreen_image_filepath)){

                if(is_file($fullscreen_image_filepath)){

                    $tmp_fullscreen_filesize_bytes = $oLightbox_Helper->return_file_bytes($fullscreen_image_filepath);
                    $tmp_fullscreen_lastmodified = $oLightbox_Helper->return_file_lastmodified($fullscreen_image_filepath);
                    $tmp_http_url_fullscreen = $oLightbox_Helper->return_file_http_url($fullscreen_image_filepath);
                    $tmp_fullscreen_mime_type = $oLightbox_Helper->return_file_mime_type($fullscreen_image_filepath);

                    if(isset($thumbnail_image_filepath)){

                        if($thumbnail_image_filepath === $fullscreen_image_filepath){

                            $tmp_thumbnail_filesize_bytes = $tmp_fullscreen_filesize_bytes;
                            $tmp_thumbnail_lastmodified = $tmp_fullscreen_lastmodified;
                            $tmp_http_url_thumbnail = $tmp_http_url_fullscreen;
                            $tmp_thumbnail_mime_type = $tmp_fullscreen_mime_type;

                            $tmp_bypass_thumbnail_file_read = true;

                        }

                    }

                }

            }

            if(isset($thumbnail_image_filepath)){

                if(is_file($thumbnail_image_filepath) && !($tmp_bypass_thumbnail_file_read !== false)){

                    $tmp_thumbnail_filesize_bytes = $oLightbox_Helper->return_file_bytes($thumbnail_image_filepath);
                    $tmp_thumbnail_lastmodified = $oLightbox_Helper->return_file_lastmodified($thumbnail_image_filepath);
                    $tmp_http_url_thumbnail = $oLightbox_Helper->return_file_http_url($thumbnail_image_filepath);
                    $tmp_thumbnail_mime_type = $oLightbox_Helper->return_file_mime_type($thumbnail_image_filepath);

                }

            }

            $tmp_dir_path_fullscreen = $tmp_http_url_fullscreen = '';
            $tmp_dir_path_thumbnail = $tmp_http_url_thumbnail = '';

            switch($fullscreen_image_filepath){
                case '/common/imgs/_5/5/20190528_134924_HDR.jpg':
                case '/common/imgs/_5/5/20190627_105948.jpg':
                    // FULLSCREEN   -> 'VEW_STATE' => 'VISIBLE'
                    // THUMBNAIL    -> 'VEW_STATE' => 'VISIBLE'
                    //
                    // 5.
                    //
                    // NOTE THAT THE "FULLSCREEN_DESCRIPTION_TEXT"
                    // IS A TITLE TAG FOR AN <A> THAT IS WRAPPED
                    // AROUND THE THUMBNAIL.
                    $tmp_image_meta_ARRAY = array(
                        'GALLERY_KEY' => '',
                        'MIME_TYPE_BINDING' => 'TRUE',
                        'FULLSCREEN_IMAGE_DESCRIPTION_COPY' => $tmp_5_gallery_global_description,
                        'IMAGE_HTML_ALT_TEXT' => $tmp_5_gallery_global_alt_text,
                        'IMAGE_FULLSCREEN' => array(
                                'VEW_STATE' => 'VISIBLE',
                                'IS_VALID' => 'FALSE',
                                'HTTP_URL' => $tmp_http_url_fullscreen,
                                'FILE_MIME_TYPE' => $tmp_fullscreen_mime_type,
                                'FILE_SIZE_BYTES' => $tmp_fullscreen_filesize_bytes,
                                'FILE_LAST_MODIFIED' => $tmp_fullscreen_lastmodified
                        ),
                        'IMAGE_THUMBNAIL' => array(
                                'VEW_STATE' => 'VISIBLE',
                                'IS_VALID' => 'FALSE',
                                'FORCE_USE_THIS_DATA' => 'FALSE',
                                'DOM_META' => array(
                                        'OUTER_WRAPPING_DIV_INJECTION' => '',
                                        'INNER_WRAPPING_DIV_INJECTION' => '',
                                        'ANCHOR_INJECTION' => '',
                                        'ANCHOR_TITLE_TEXT' => '',
                                        'ANCHOR_CSS' => '',
                                        'IMG_WIDTH' => '',
                                        'IMAGE_ALT_TEXT' => '',
                                        'IMG_CSS' => 'max-height: 100%; max-width: 100%; line-height: 5em;'
                                ),
                                'HTTP_URL' => $tmp_http_url_thumbnail,
                                'FILE_MIME_TYPE' => $tmp_thumbnail_mime_type,
                                'FILE_SIZE_BYTES' => $tmp_thumbnail_filesize_bytes,
                                'FILE_LAST_MODIFIED' => $tmp_thumbnail_lastmodified
                        ),
                        'EVIFWEB_CRNRSTN_DDO_LIGHT' => array(),
                        'LASTMODIFIED' => $oLightbox_Helper->return_micro_time(),
                        'DATECREATED' => 'Thu Jun 06 08:45:00.361847 2024'
                    );

                break;
                case '/common/imgs/_5/5/20171009_113845.jpg':
                case '/common/imgs/_5/5/20180408_210719.jpg':
                case '/common/imgs/_5/5/20181123_092958.jpg':
                case '/common/imgs/_5/5/20190509_075659.jpg':
                case '/common/imgs/_5/5/20190521_064603.jpg':
                case '/common/imgs/_5/5/20190524_122416.jpg':
                case '/common/imgs/_5/5/20190525_065139.jpg':
                case '/common/imgs/_5/5/20190527_085112.jpg':
                case '/common/imgs/_5/5/20190527_173217.jpg':
                case '/common/imgs/_5/5/20190528_143517_HDR.jpg':
                case '/common/imgs/_5/5/20190530_083720_HDR.jpg':
                case '/common/imgs/_5/5/20190610_075942.jpg':
                case '/common/imgs/_5/5/20190610_075950.jpg':
                case '/common/imgs/_5/5/20190618_114513.jpg':
                case '/common/imgs/_5/5/20190627_120639_HDR.jpg':
                case '/common/imgs/_5/5/20190727_185554.jpg':
                case '/common/imgs/_5/5/20190926_233738.jpg':
                case '/common/imgs/_5/5/20191126_131257.jpg':
                case '/common/imgs/_5/5/20191204_091119.jpg':
                case '/common/imgs/_5/5/20191213_075152.jpg':
                case '/common/imgs/_5/5/20200406_220159.jpg':
                case '/common/imgs/_5/5/20200429_171914.jpg':
                case '/common/imgs/_5/5/20200807_153146.jpg':
                case '/common/imgs/_5/5/20200819_002059.jpg':
                case '/common/imgs/_5/5/20210417_125616.jpg':
                case '/common/imgs/_5/5/20210417_125636_HDR.jpg':
                case '/common/imgs/_5/5/20220116_141952_HDR.jpg':
                case '/common/imgs/_5/5/20240121_212332.jpg':
                case '/common/imgs/_5/5/20240121_212551_HDR.jpg':
                case '/common/imgs/_5/5/20240319_051553.jpg':
                    // FULLSCREEN   -> 'VEW_STATE' => 'VISIBLE'
                    // THUMBNAIL    -> 'VEW_STATE' => 'HIDDEN'
                    //
                    // 5.
                    //
                    // NOTE THAT THE "FULLSCREEN_DESCRIPTION_TEXT"
                    // IS A TITLE TAG FOR AN <A> THAT IS WRAPPED
                    // AROUND THE THUMBNAIL.
                    $tmp_image_meta_ARRAY = array(
                        'GALLERY_KEY' => '',
                        'FULLSCREEN_IMAGE_DESCRIPTION_COPY' => $tmp_5_gallery_global_description,
                        'IMAGE_HTML_ALT_TEXT' => $tmp_5_gallery_global_alt_text,
                        'IMAGE_FULLSCREEN' => array(
                                'VEW_STATE' => 'VISIBLE',
                                'IS_VALID' => 'FALSE',
                                'HTTP_URL' => $tmp_http_url_fullscreen,
                                'MIME_TYPE_BINDING' => '',
                                'FILE_MIME_TYPE' => '',
                                'FILE_SIZE_BYTES' => $tmp_fullscreen_filesize_bytes,
                                'FILE_LAST_MODIFIED' => $tmp_fullscreen_lastmodified
                        ),
                        'IMAGE_THUMBNAIL' => array(
                                'VEW_STATE' => 'HIDDEN',
                                'IS_VALID' => 'FALSE',
                                'FORCE_USE_THIS_DATA' => 'FALSE',
                                'DOM_META' => array(
                                        'IMG_WIDTH' => '',
                                        'ANCHOR_TITLE_TEXT' => '',
                                        'IMAGE_ALT_TEXT' => '',
                                        'OUTER_WRAPPING_DIV_INJECTION' => '',
                                        'INNER_WRAPPING_DIV_INJECTION' => '',
                                        'ANCHOR_INJECTION' => '',
                                        'ANCHOR_CSS' => '',
                                        'IMG_CSS' => '',
                                        'FILE_LAST_MODIFIED' => ''
                                ),
                                'HTTP_URL' => '',
                                'MIME_TYPE_BINDING' => '',
                                'FILE_MIME_TYPE' => '',
                                'FILE_SIZE_BYTES' => '',
                                'FILE_LAST_MODIFIED' => ''
                        ),
                        'EVIFWEB_CRNRSTN_DDO_LIGHT' => array(),
                        'LASTMODIFIED' => $oLightbox_Helper->return_micro_time(),
                        'DATECREATED' => 'Thu Jun 06 09:16:09.305213 2024'
                    );

                break;
                case '/common/imgs/_5/J5/2010_10_30_11.11.56_j5_octane_00.png':
                    // FULLSCREEN   -> 'VEW_STATE' => 'VISIBLE'
                    // THUMBNAIL    -> 'VEW_STATE' => 'VISIBLE'
                    //
                    // J5.
                    //
                    // NOTE THAT THE "FULLSCREEN_DESCRIPTION_TEXT"
                    // IS A TITLE TAG FOR AN <A> THAT IS WRAPPED
                    // AROUND THE THUMBNAIL.
                    $tmp_image_meta_ARRAY = array(
                        'GALLERY_KEY' => '',
                        'FULLSCREEN_IMAGE_DESCRIPTION_COPY' => '',
                        'IMAGE_HTML_ALT_TEXT' => '',
                        'IMAGE_FULLSCREEN' => array(
                                'VEW_STATE' => 'VISIBLE',
                                'IS_VALID' => 'FALSE',
                                'HTTP_URL' => $tmp_http_url_fullscreen,
                                'MIME_TYPE_BINDING' => '',
                                'FILE_MIME_TYPE' => '',
                                'FILE_SIZE_BYTES' => $tmp_fullscreen_filesize_bytes,
                                'FILE_LAST_MODIFIED' => $tmp_fullscreen_lastmodified
                        ),
                        'IMAGE_THUMBNAIL' => array(
                                'VEW_STATE' => 'VISIBLE',
                                'IS_VALID' => 'FALSE',
                                'FORCE_USE_THIS_DATA' => 'FALSE',
                                'DOM_META' => array(
                                        'IMG_WIDTH' => '',
                                        'ANCHOR_TITLE_TEXT' => '',
                                        'IMAGE_ALT_TEXT' => '',
                                        'OUTER_WRAPPING_DIV_INJECTION' => '',
                                        'INNER_WRAPPING_DIV_INJECTION' => '',
                                        'ANCHOR_INJECTION' => '',
                                        'ANCHOR_CSS' => '',
                                        'IMG_CSS' => '',
                                        'FILE_LAST_MODIFIED' => ''
                                ),
                                'HTTP_URL' => '',
                                'MIME_TYPE_BINDING' => '',
                                'FILE_MIME_TYPE' => '',
                                'FILE_SIZE_BYTES' => '',
                                'FILE_LAST_MODIFIED' => ''
                        ),
                        'EVIFWEB_CRNRSTN_DDO_LIGHT' => array(),
                        'LASTMODIFIED' => $oLightbox_Helper->return_micro_time(),
                        'DATECREATED' => 'Thu Jun 06 08:48:46.612933 2024'
                    );

                break;
                case '/common/imgs/_5/J5/2006-01-01 09.35.34 Image(229).jpg':
                case '/common/imgs/_5/J5/2006-01-01 10.15.32 Image(230).jpg':
                case '/common/imgs/_5/J5/2006-01-05 13.25.21 j5bnr_01.jpg':
                case '/common/imgs/_5/J5/2006-01-15 14.25.21 1140502319-1.jpg':
                case '/common/imgs/_5/J5/2010_10_30_11.11.56_j5_octane_01.png':
                case '/common/imgs/_5/J5/2010_10_30_11.11.56_j5_octane_02.png':
                case '/common/imgs/_5/J5/2011-01-10 08.05.49.jpg':
                case '/common/imgs/_5/J5/2011-04-02 13.07.25.jpg':
                case '/common/imgs/_5/J5/20180101_131631.jpg':
                case '/common/imgs/_5/J5/20180104_152653.jpg':
                case '/common/imgs/_5/J5/20190402_121919_HDR.jpg':
                case '/common/imgs/_5/J5/20190509_075707.jpg':
                case '/common/imgs/_5/J5/20190513_092013.jpg':
                case '/common/imgs/_5/J5/20190610_075921.jpg':
                case '/common/imgs/_5/J5/20190627_105958_HDR.jpg':
                case '/common/imgs/_5/J5/20191116_144614.jpg':
                case '/common/imgs/_5/J5/20191126_124755.jpg':
                case '/common/imgs/_5/J5/20191126_124806.jpg':
                case '/common/imgs/_5/J5/20191231_090413.jpg':
                case '/common/imgs/_5/J5/20200221_143727.jpg':
                case '/common/imgs/_5/J5/20200221_143736.jpg':
                case '/common/imgs/_5/J5/20200221_145030.jpg':
                case '/common/imgs/_5/J5/20200221_150413.jpg':
                case '/common/imgs/_5/J5/20200406_221737.jpg':
                case '/common/imgs/_5/J5/20200406_221831.jpg':
                case '/common/imgs/_5/J5/20200406_221850.jpg':
                case '/common/imgs/_5/J5/20200429_190935.jpg':
                case '/common/imgs/_5/J5/20200429_190941.jpg':
                case '/common/imgs/_5/J5/20210516_130730_HDR.jpg':
                case '/common/imgs/_5/J5/20210516_130822_HDR.jpg':
                case '/common/imgs/_5/J5/20210819_111533_HDR.jpg':
                case '/common/imgs/_5/J5/20210819_111544_HDR.jpg':
                case '/common/imgs/_5/J5/20210819_111626_HDR.jpg':
                case '/common/imgs/_5/J5/20220116_141449_HDR.jpg':
                    // FULLSCREEN   -> 'VEW_STATE' => 'VISIBLE'
                    // THUMBNAIL    -> 'VEW_STATE' => 'HIDDEN'
                    //
                    // J5.
                    //
                    // NOTE THAT THE "FULLSCREEN_DESCRIPTION_TEXT"
                    // IS A TITLE TAG FOR AN <A> THAT IS WRAPPED
                    // AROUND THE THUMBNAIL.
                    $tmp_image_meta_ARRAY = array(
                        'GALLERY_KEY' => '',
                        'FULLSCREEN_IMAGE_DESCRIPTION_COPY' => '',
                        'IMAGE_HTML_ALT_TEXT' => '',
                        'IMAGE_FULLSCREEN' => array(
                                'VEW_STATE' => 'VISIBLE',
                                'IS_VALID' => 'FALSE',
                                'HTTP_URL' => $tmp_http_url_fullscreen,
                                'MIME_TYPE_BINDING' => '',
                                'FILE_MIME_TYPE' => '',
                                'FILE_SIZE_BYTES' => $tmp_fullscreen_filesize_bytes,
                                'FILE_LAST_MODIFIED' => $tmp_fullscreen_lastmodified
                        ),
                        'IMAGE_THUMBNAIL' => array(
                                'VEW_STATE' => 'HIDDEN',
                                'IS_VALID' => 'FALSE',
                                'FORCE_USE_THIS_DATA' => 'FALSE',
                                'DOM_META' => array(
                                        'IMG_WIDTH' => '',
                                        'ANCHOR_TITLE_TEXT' => '',
                                        'IMAGE_ALT_TEXT' => '',
                                        'OUTER_WRAPPING_DIV_INJECTION' => '',
                                        'INNER_WRAPPING_DIV_INJECTION' => '',
                                        'ANCHOR_INJECTION' => '',
                                        'ANCHOR_CSS' => '',
                                        'IMG_CSS' => '',
                                        'FILE_LAST_MODIFIED' => ''
                                ),
                                'HTTP_URL' => '',
                                'MIME_TYPE_BINDING' => '',
                                'FILE_MIME_TYPE' => '',
                                'FILE_SIZE_BYTES' => '',
                                'FILE_LAST_MODIFIED' => ''
                        ),
                        'EVIFWEB_CRNRSTN_DDO_LIGHT' => array(),
                        'LASTMODIFIED' => $oLightbox_Helper->return_micro_time(),
                        'DATECREATED' => 'Fri Jun 07 02:13:07.259988 2024'
                    );

                break;
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG344.jpg':
                case '/common/imgs/_M/Screen Shot 2024-05-24 at 7.27.14 AM (27in).png':
                case '/common/imgs/_M/0_M_WITH_5_IN_ATLANTA_HAVING_TACOS_OFF_PEACHTREE_STREET_DEC_31_2011_141714.jpg':
                    // FULLSCREEN   -> 'VEW_STATE' => 'VISIBLE'
                    // THUMBNAIL    -> 'VEW_STATE' => 'VISIBLE'
                    //
                    // M WITH 5.
                    //
                    // NOTE THAT THE "FULLSCREEN_DESCRIPTION_TEXT"
                    // IS A TITLE TAG FOR AN <A> THAT IS WRAPPED
                    // AROUND THE THUMBNAIL.
                    $tmp_image_meta_ARRAY = array(
                        'GALLERY_KEY' => '',
                        'FULLSCREEN_IMAGE_DESCRIPTION_COPY' => $tmp_M_WITH_5_gallery_global_description,
                        'IMAGE_HTML_ALT_TEXT' => $tmp_M_WITH_5_gallery_global_alt_text,
                        'IMAGE_FULLSCREEN' => array(
                                'VEW_STATE' => 'VISIBLE',
                                'IS_VALID' => 'FALSE',
                                'HTTP_URL' => $tmp_http_url_fullscreen,
                                'MIME_TYPE_BINDING' => '',
                                'FILE_MIME_TYPE' => '',
                                'FILE_SIZE_BYTES' => $tmp_fullscreen_filesize_bytes,
                                'FILE_LAST_MODIFIED' => $tmp_fullscreen_lastmodified
                        ),
                        'IMAGE_THUMBNAIL' => array(
                                'VEW_STATE' => 'VISIBLE',
                                'IS_VALID' => 'FALSE',
                                'FORCE_USE_THIS_DATA' => 'FALSE',
                                'DOM_META' => array(
                                        'IMG_WIDTH' => '',
                                        'ANCHOR_TITLE_TEXT' => '',
                                        'IMAGE_ALT_TEXT' => '',
                                        'OUTER_WRAPPING_DIV_INJECTION' => '',
                                        'INNER_WRAPPING_DIV_INJECTION' => '',
                                        'ANCHOR_INJECTION' => '',
                                        'ANCHOR_CSS' => '',
                                        'IMG_CSS' => '',
                                        'FILE_LAST_MODIFIED' => ''
                                ),
                                'HTTP_URL' => '',
                                'MIME_TYPE_BINDING' => '',
                                'FILE_MIME_TYPE' => '',
                                'FILE_SIZE_BYTES' => '',
                                'FILE_LAST_MODIFIED' => ''
                        ),
                        'EVIFWEB_CRNRSTN_DDO_LIGHT' => array(),
                        'LASTMODIFIED' => $oLightbox_Helper->return_micro_time(),
                        'DATECREATED' => 'Thu Jun 06 08:47:54.155411 2024'
                    );

                break;
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_G2x_BACKUP_APR_23_2011_IMG021.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_G2x_BACKUP_APR_23_2011_IMG022.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_G2x_BACKUP_APR_23_2011_IMG023.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_A_MEGATRON_PINEAPPLE_MAY_28_2011_IMG330.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG343.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG353.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG354.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG355.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG356.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG358.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG360.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG363.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG366.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG368.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG369.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG370.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG372.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG373.jpg':
                case '/common/imgs/_M/M_WITH_5_AT_935M_ATLANTA_MEMORIAL_DAY_WEEKEND_COOKOUT_AND_SOMEONES_BDAY_MAY_28_2011_IMG376.jpg':
                case '/common/imgs/_M/M_WITH_5_IN_ATLANTA_AT_FELLINIS_PIZZA_HOWELL_MILL_RD_MAY_11_2011_123034.jpg':
                case '/common/imgs/_M/M_WITH_5_IN_ATLANTA_HAVING_TACOS_OFF_PEACHTREE_STREET_DEC_31_2011_141714.jpg':
                case '/common/imgs/_M/M_WITH_5_IN_ATLANTA_HAVING_TACOS_OFF_PEACHTREE_STREET_Screen Shot 2024-05-22 at 12.18.26 PM (15in_mbp).png':
                case '/common/imgs/_M/M_WITH_5_IN_ATLANTA_HAVING_TACOS_OFF_PEACHTREE_STREET_Screen Shot 2024-05-22 at 12.18.26 PM (27in).png':
                case '/common/imgs/_M/Screen Shot 2024-05-22 at 5.36.32 PM (15in_mbp).png':
                case '/common/imgs/_M/Screen Shot 2024-05-22 at 5.36.32 PM (27in).png':
                case '/common/imgs/_M/Screen Shot 2024-05-24 at 7.48.51 AM (27in).png':
                case '/common/imgs/_M/Screen Shot 2024-05-25 at 7.45.53 AM (15in_mbp).png':
                case '/common/imgs/_M/Screen Shot 2024-05-26 at 2.18.54 PM (15in_mbp).png':
                case '/common/imgs/_M/Screen Shot 2024-06-01 at 10.06.11 AM (15in_mbp).png':
                    // FULLSCREEN   -> 'VEW_STATE' => 'VISIBLE'
                    // THUMBNAIL    -> 'VEW_STATE' => 'HIDDEN'
                    //
                    // M WITH 5.
                    //
                    // NOTE THAT THE "FULLSCREEN_DESCRIPTION_TEXT"
                    // IS A TITLE TAG FOR AN <A> THAT IS WRAPPED
                    // AROUND THE THUMBNAIL.
                    $tmp_image_meta_ARRAY = array(
                        'GALLERY_KEY' => '',
                        'IS_VALID' => 'FALSE',
                        'FULLSCREEN_IMAGE_DESCRIPTION_COPY' => $tmp_M_WITH_5_gallery_global_description,
                        'IMAGE_HTML_ALT_TEXT' => $tmp_M_WITH_5_gallery_global_alt_text,
                        'IMAGE_FULLSCREEN' => array(
                                'VEW_STATE' => 'VISIBLE',
                                'IS_VALID' => 'FALSE',
                                'HTTP_URL' => $tmp_http_url_fullscreen,
                                'MIME_TYPE_BINDING' => '',
                                'FILE_MIME_TYPE' => '',
                                'FILE_SIZE_BYTES' => $tmp_fullscreen_filesize_bytes,
                                'FILE_LAST_MODIFIED' => $tmp_fullscreen_lastmodified
                        ),
                        'IMAGE_THUMBNAIL' => array(
                                'VEW_STATE' => 'HIDDEN',
                                'IS_VALID' => 'FALSE',
                                'FORCE_USE_THIS_DATA' => 'FALSE',
                                'DOM_META' => array(
                                        'IMG_WIDTH' => '',
                                        'ANCHOR_TITLE_TEXT' => '',
                                        'IMAGE_ALT_TEXT' => '',
                                        'OUTER_WRAPPING_DIV_INJECTION' => '',
                                        'INNER_WRAPPING_DIV_INJECTION' => '',
                                        'ANCHOR_INJECTION' => '',
                                        'ANCHOR_CSS' => '',
                                        'IMG_CSS' => '',
                                        'FILE_LAST_MODIFIED' => ''
                                ),
                                'HTTP_URL' => '',
                                'MIME_TYPE_BINDING' => '',
                                'FILE_MIME_TYPE' => '',
                                'FILE_SIZE_BYTES' => '',
                                'FILE_LAST_MODIFIED' => ''
                        ),
                        'EVIFWEB_CRNRSTN_DDO_LIGHT' => array(),
                        'LASTMODIFIED' => $oLightbox_Helper->return_micro_time(),
                        'DATECREATED' => 'Thu Jun 06 09:23:50.188381 2024'
                    );

                break;
                default:

                    error_log(__LINE__ . ' precious WE HIT THE DEFAULT. RESOURCE CASE DATA[' .
                    print_r($name, true) . ']. FIX TO DRIVE CUSTOM CONTENT AND BEHAVIOR.');

                    $tmp_image_meta_ARRAY = array(
                        'GALLERY_KEY' => '',
                        'IS_VALID' => 'FALSE',
                        'FULLSCREEN_IMAGE_DESCRIPTION_COPY' => '',
                        'IMAGE_HTML_ALT_TEXT' => '',
                        'IMAGE_FULLSCREEN' => array(
                                'VEW_STATE' => 'VISIBLE',
                                'IS_VALID' => 'FALSE',
                                'HTTP_URL' => $tmp_http_url_fullscreen,
                                'MIME_TYPE_BINDING' => '',
                                'FILE_MIME_TYPE' => '',
                                'FILE_SIZE_BYTES' => $tmp_fullscreen_filesize_bytes,
                                'FILE_LAST_MODIFIED' => $tmp_fullscreen_lastmodified
                        ),
                        'IMAGE_THUMBNAIL' => array(
                                'VEW_STATE' => 'HIDDEN',
                                'IS_VALID' => 'FALSE',
                                'FORCE_USE_THIS_DATA' => 'FALSE',
                                'DOM_META' => array(
                                        'IMG_WIDTH' => '',
                                        'ANCHOR_TITLE_TEXT' => '',
                                        'IMAGE_ALT_TEXT' => '',
                                        'OUTER_WRAPPING_DIV_INJECTION' => '',
                                        'INNER_WRAPPING_DIV_INJECTION' => '',
                                        'ANCHOR_INJECTION' => '',
                                        'ANCHOR_CSS' => '',
                                        'IMG_CSS' => 'max-height: 100%; max-width: 100%; line-height: 5em;'
                                ),
                                'HTTP_URL' => '',
                                'MIME_TYPE_BINDING' => '',
                                'FILE_MIME_TYPE' => '',
                                'FILE_SIZE_BYTES' => '',
                                'FILE_LAST_MODIFIED' => ''
                        ),
                        'EVIFWEB_CRNRSTN_DDO_LIGHT' => array(),
                        'LASTMODIFIED' => $oLightbox_Helper->return_micro_time(),
                        'DATECREATED' => $oLightbox_Helper->return_micro_time()
                    );

                break;

            }

            return $tmp_image_meta_ARRAY;

        break;
        default:

            return $oLightbox_Helper->session_salt();

        break;

    }

}