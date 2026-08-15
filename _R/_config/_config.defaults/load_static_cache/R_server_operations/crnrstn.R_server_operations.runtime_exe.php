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
 * R :: R_server_operations contains support data structures for the support and validation of UGC input and CLR-SSL managed adjustments to defaults.
 * 
 * $R_data = array('ini_restore'                => array(), 
 *                 'ini_set'                    => array(), 
 *                 'ini_get'                    => array(), 
 *                 'ini_get_all'                => array(), 
 *                 'get_declared_classes'       => array(), 
 *                 'get_extension_funcs'        => array(), 
 *                 'get_defined_functions'      => array(), 
 *                 'get_defined_constants'      => array(), 
 *                 'get_defined_vars'           => array(), 
 *                 'extension_loaded'           => array(), 
 *                 'openssl_get_md_methods'     => array(), 
 *                 'openssl_get_cipher_methods' => array(), 
 *                 'hash_hmac_algos'            => array(), 
 *                 'hash_algos'                 => array());
 *
 * @package CRNRSTN
 * @version 2.00.0001 CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer.
 * @author Jonathan '5' Harris <jharris@eVifweb.com>
 * @copyright Copyright © 2012-2026 eVifweb® development All Rights Reserved.
 * @license https://crnrstn.jony5.com/licensing/ MIT
 * @link https://lightsaber.crnrstn.jony5.com/ CRNRSTN :: Lightsaber.
 * @link https://twitter.com/CRNRSTN_v2_0_0 CRNRSTN :: on Twitter.
 * @link http://evifweb.jony5.com/ eVifweb :: Corporate Sponsor.
 * @param array $R_data contains PHP data structure for the support and validation of UGC input and CLR-SSL managed adjustments to defaults.
 * @access public
 *
 *
 * 5 :: Sunday, June 28, 2026 @ 0334 hrs.
 *
 */
$R_data = array(
          'ini_restore' => array(
              'key'                   => 'CRNRSTN_PHP_INI',
              'url'                   => 'https://www.php.net/manual/en/function.ini-restore.php',
              'link_text'             => 'ini_restore',
              'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
              'data_type'             => self::$R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION'],
              'initialization'        => array(
                                         'default' => array(
                                                      self::$R_data['int_flag']['R_integer'] => -1,
                                                      'name'          => '')),
              'php_version'           => array(
                                         'removed'    => '', 
                                         'deprecated' => '', 
                                         'supported'  => 'PHP 4, PHP 5, PHP 7, PHP 8'),
              'php_net_description'   => array(
                                         'HTML' => 'Restores the value of a ' . 
                                                   'configuration option. Restores ' . 
                                                   'a given configuration option ' . 
                                                   'to its original value.',
                                         'TEXT' => 'Restores the value of a ' . 
                                                   'configuration option. Restores ' . 
                                                   'a given configuration option ' . 
                                                   'to its original value.')),

          'ini_set' => array(
              'key'                   => 'CRNRSTN_PHP_INI',
              'url'                   => 'https://www.php.net/manual/en/function.ini-set.php',
              'link_text'             => 'ini_set',
              'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
              'data_type'             => self::$R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION'],
              'initialization'        => array(
                                         'default' => array(
                                                      self::$R_data['int_flag']['R_integer'] => -1,
                                                      'name'          => '')),
              'php_version'           => array(
                                         'removed'    => '', 
                                         'deprecated' => '', 
                                         'supported'  => 'PHP 4, PHP 5, PHP 7, PHP 8'),
              'php_net_description'   => array(
                                         'HTML' => 'Sets the value of a ' . 
                                                   'configuration option. ' . 
                                                   'Sets the value of the ' . 
                                                   'given configuration option. ' . 
                                                   'The configuration option ' . 
                                                   'will keep this new value ' . 
                                                   'during the script\'s execution, ' . 
                                                   'and will be restored at ' . 
                                                   'the script\'s ending.',
                                         'TEXT' => 'Sets the value of a ' . 
                                                   'configuration option. ' . 
                                                   'Sets the value of the ' . 
                                                   'given configuration option. ' . 
                                                   'The configuration option ' . 
                                                   'will keep this new value ' . 
                                                   'during the script\'s execution, ' . 
                                                   'and will be restored at ' . 
                                                   'the script\'s ending.')),

          'ini_get' => array(
              'key'                   => 'CRNRSTN_PHP_INI',
              'url'                   => 'https://www.php.net/manual/en/function.ini-get.php',
              'link_text'             => 'ini_get',
              'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
              'data_type'             => self::$R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION'],
              'initialization'        => array(
                                         'default' => array(
                                                      self::$R_data['int_flag']['R_integer'] => -1,
                                                      'name'          => '')),
              'php_version'           => array(
                                         'removed'    => '', 
                                         'deprecated' => '', 
                                         'supported'  => 'PHP 4, PHP 5, PHP 7, PHP 8'),
              'php_net_description'   => array(
                                         'HTML' => 'Gets the value of a ' . 
                                                   'configuration option. ' . 
                                                   'Returns the value of ' . 
                                                   'the configuration ' . 
                                                   'option on success.',
                                         'TEXT' => 'Gets the value of a ' . 
                                                   'configuration option. ' . 
                                                   'Returns the value of ' . 
                                                   'the configuration ' . 
                                                   'option on success.')),

          'ini_get_all' => array(
              'key'                   => 'CRNRSTN_PHP_INI',
              'url'                   => 'https://www.php.net/manual/en/function.ini-get-all.php',
              'link_text'             => 'ini_get_all',
              'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
              'data_type'             => self::$R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION'],
              'initialization'        => array(
                                         'default' => array(
                                                      self::$R_data['int_flag']['R_integer'] => -1,
                                                      'name'          => '')),
              'php_version'           => array(
                                         'removed'    => '', 
                                         'deprecated' => '', 
                                         'supported'  => 'PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8'),
              'php_net_description'   => array(
                                         'HTML' => 'Gets all configuration ' . 
                                                   'options. Returns all ' . 
                                                   'the registered ' . 
                                                   'configuration options.',
                                         'TEXT' => 'Gets all configuration ' . 
                                                   'options. Returns all ' . 
                                                   'the registered ' . 
                                                   'configuration options.')),

          'get_declared_classes' => array(
              'key'                   => 'CRNRSTN_DECLARED_CLASSES',
              'url'                   => 'https://www.php.net/manual/en/function.get-declared-classes',
              'link_text'             => 'get_declared_classes',
              'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
              'data_type'             => self::$R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION'],
              'initialization'        => array(
                                         'default' => array(
                                                      self::$R_data['int_flag']['R_integer'] => -1,
                                                      'name'          => '')),
              'php_version'           => array(
                                         'removed'    => '', 
                                         'deprecated' => '', 
                                         'supported'  => 'PHP 4, PHP 5, PHP 7, PHP 8'),
              'php_net_description'   => array(
                                         'HTML' => 'Returns an array ' . 
                                                   'with the name of ' . 
                                                   'the defined classes.',
                                         'TEXT' => 'Returns an array ' . 
                                                   'with the name of ' . 
                                                   'the defined classes.')),

          'get_extension_funcs' => array(
              'key'                   => 'CRNRSTN_MODULE_EXTENSION_FUNCTIONS',
              'url'                   => 'https://www.php.net/manual/en/function.get-extension-funcs.php',
              'link_text'             => 'get_extension_funcs',
              'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
              'data_type'             => self::$R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION'],
              'initialization'        => array(
                                         'default' => array(
                                                      self::$R_data['int_flag']['R_integer'] => -1,
                                                      'name'          => '')),
              'php_version'           => array(
                                         'removed'    => '', 
                                         'deprecated' => '', 
                                         'supported'  => 'PHP 4, PHP 5, PHP 7, PHP 8'),
              'php_net_description'   => array(
                                         'HTML' => 'Returns an array with ' . 
                                                   'the names of the ' . 
                                                   'functions of a module. ' . 
                                                   'This function returns ' . 
                                                   'the names of all the ' . 
                                                   'functions defined in ' . 
                                                   'the module indicated ' . 
                                                   'by extension.',
                                         'TEXT' => 'Returns an array with ' . 
                                                   'the names of the ' . 
                                                   'functions of a module. ' . 
                                                   'This function returns ' . 
                                                   'the names of all the ' . 
                                                   'functions defined in ' . 
                                                   'the module indicated ' . 
                                                   'by extension.')),

          'get_defined_functions' => array(
              'key'                   => 'CRNRSTN_NATIVE_PHP_DEFINED_FUNCTIONS',
              'url'                   => 'https://www.php.net/manual/en/function.get-defined-functions.php',
              'link_text'             => 'get_defined_functions',
              'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
              'data_type'             => self::$R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION'],
              'initialization'        => array(
                                         'default' => array(
                                                      self::$R_data['int_flag']['R_integer'] => -1,
                                                      'name'          => '')),
              'php_version'           => array(
                                         'removed'    => '', 
                                         'deprecated' => '8.5.0', 
                                         'supported'  => 'PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8'),
              'php_net_description'   => array(
                                         'HTML' => 'Returns an array of ' . 
                                                   'all defined functions.',
                                         'TEXT' => 'Returns an array of ' . 
                                                   'all defined functions.')),

          'get_defined_constants' => array(
              'key'                   => 'CRNRSTN_PHP_DEFINED_CONSTANTS',
              'url'                   => 'https://www.php.net/manual/en/function.get-defined-constants.php',
              'link_text'             => 'get_defined_constants',
              'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
              'data_type'             => self::$R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION'],
              'initialization'        => array(
                                         'default' => array(
                                                      self::$R_data['int_flag']['R_integer'] => -1,
                                                      'name'          => '')),
              'php_version'           => array(
                                         'removed'    => '', 
                                         'deprecated' => '', 
                                         'supported'  => 'PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8'),
              'php_net_description'   => array(
                                         'HTML' => 'Returns an associative array ' . 
                                                   'with the names of all the ' . 
                                                   'constants and their values. ' . 
                                                   'Returns the names and values ' . 
                                                   'of all the constants ' . 
                                                   'currently defined. ' . 
                                                   'This includes those created ' . 
                                                   'by extensions as well as ' . 
                                                   'those created with the ' . 
                                                   $this->return_crnrstn_text_link(
                                                          'define', 
                                                          'PHP_ELLIPSE', 
                                                          'https://www.php.net/manual/en/function.define.php') . 
                                                   ' function.',
                                         'TEXT' => 'Returns an associative array ' . 
                                                   'with the names of all the ' . 
                                                   'constants and their values. ' . 
                                                   'Returns the names and values ' . 
                                                   'of all the constants ' . 
                                                   'currently defined. ' . 
                                                   'This includes those created ' . 
                                                   'by extensions as well as ' . 
                                                   'those created with the ' . 
                                                   'define() function.')),

          'get_defined_vars' => array(
              'key'                   => 'CRNRSTN_PHP_DEFINED_VARIABLES',
              'url'                   => 'https://www.php.net/manual/en/function.get-defined-vars.php',
              'link_text'             => 'get_defined_vars',
              'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
              'data_type'             => self::$R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION'],
              'initialization'        => array(
                                         'default' => array(
                                                      self::$R_data['int_flag']['R_integer'] => -1,
                                                      'name'          => '')),
              'php_version'           => array(
                                         'removed'    => '', 
                                         'deprecated' => '', 
                                         'supported'  => 'PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8'),
              'php_net_description'   => array(
                                         'HTML' => 'Returns an array of all ' . 
                                                   'defined variables. ' . 
                                                   'This function returns a ' . 
                                                   'multidimensional array ' . 
                                                   'containing a list of all ' . 
                                                   'defined variables, be them ' . 
                                                   'environment, server or ' . 
                                                   'user-defined variables, ' . 
                                                   'within the scope that ' . 
                                                   $this->return_crnrstn_text_link(
                                                          'get_defined_vars', 
                                                          'PHP_ELLIPSE', 
                                                          'https://www.php.net/manual/en/function.get-defined-vars.php') . 
                                                   ' is called.', 
                                         'TEXT' => 'Returns an array of all ' . 
                                                   'defined variables. ' . 
                                                   'This function returns a ' . 
                                                   'multidimensional array ' . 
                                                   'containing a list of all ' . 
                                                   'defined variables, be them ' . 
                                                   'environment, server or ' . 
                                                   'user-defined variables, ' . 
                                                   'within the scope that ' . 
                                                   'get_defined_vars() is ' . 
                                                   'called. See get_defined_vars, ' . 
                                                   'https://www.php.net/manual/en/function.get-defined-vars.php')),

          'extension_loaded' => array(
              'key'                   => 'CRNRSTN_PHP_LOADED_EXTENSIONS',
              'url'                   => 'https://www.php.net/manual/en/function.extension-loaded.php',
              'link_text'             => 'extension_loaded',
              'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
              'data_type'             => self::$R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION'],
              'initialization'        => array(
                                         'default' => array(
                                                      self::$R_data['int_flag']['R_integer'] => -1,
                                                      'name'          => '')),
              'php_version'           => array(
                                         'removed'    => '', 
                                         'deprecated' => '', 
                                         'supported'  => 'PHP 4, PHP 5, PHP 7, PHP 8'),
              'php_net_description'   => array(
                                         'HTML' => 'Find out whether an ' . 
                                                   'extension is loaded.',
                                         'TEXT' => 'Find out whether an ' . 
                                                   'extension is loaded.')),

          'get_loaded_extensions' => array(
              'key'                   => 'CRNRSTN_PHP_LOADED_EXTENSION_MODULES',
              'url'                   => 'https://www.php.net/manual/en/function.get-loaded-extensions.php',
              'link_text'             => 'get_loaded_extensions',
              'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
              'data_type'             => self::$R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION'],
              'initialization'        => array(
                                         'default' => array(
                                                      self::$R_data['int_flag']['R_integer'] => -1,
                                                      'name'          => '')),
              'php_version'           => array(
                                         'removed'    => '', 
                                         'deprecated' => '', 
                                         'supported'  => 'PHP 4, PHP 5, PHP 7, PHP 8'),
              'php_net_description'   => array(
                                         'HTML' => 'Returns an array with ' . 
                                                   'the names of all modules ' . 
                                                   'compiled and loaded. ' . 
                                                   'This function returns ' . 
                                                   'the names of all the ' . 
                                                   'modules compiled and ' . 
                                                   'loaded in the ' . 
                                                   'PHP interpreter.',
                                         'TEXT' => 'Returns an array with ' . 
                                                   'the names of all modules ' . 
                                                   'compiled and loaded. ' . 
                                                   'This function returns ' . 
                                                   'the names of all the ' . 
                                                   'modules compiled and ' . 
                                                   'loaded in the ' . 
                                                   'PHP interpreter.')),

           'openssl_get_md_methods' => array(
              'key'                   => 'CRNRSTN_OPENSSL_DIGEST_METHODS',
              'url'                   => 'https://www.php.net/manual/en/function.openssl-get-md-methods.php',
              'link_text'             => 'openssl_get_md_methods',
              'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
              'data_type'             => self::$R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION'],
              'initialization'        => array(
                                         'default' => array(
                                                      self::$R_data['int_flag']['R_integer'] => -1,
                                                      'name'          => '')),
              'php_version'           => array(
                                         'removed'    => '', 
                                         'deprecated' => '', 
                                         'supported'  => 'PHP 5 >= 5.3.0, PHP 7, PHP 8'),
              'php_net_description'   => array(
                                         'HTML' => 'Gets a list of available ' . 
                                                   'digest methods.',
                                         'TEXT' => 'Gets a list of available ' . 
                                                   'digest methods.')),

          'openssl_get_cipher_methods' => array(
              'key'                   => 'CRNRSTN_OPENSSL_CIPHERS',
              'url'                   => 'https://www.php.net/manual/en/function.openssl-get-cipher-methods.php',
              'link_text'             => 'openssl_get_cipher_methods',
              'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
              'data_type'             => self::$R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION'],
              'initialization'        => array(
                                         'default' => array(
                                                      self::$R_data['int_flag']['R_integer'] => -1,
                                                      'name'          => '')),
              'php_version'           => array(
                                         'removed'    => '', 
                                         'deprecated' => '', 
                                         'supported'  => 'PHP 5 >= 5.3.0, PHP 7, PHP 8'),
              'php_net_description'   => array(
                                         'HTML' => 'Gets a list of available ' . 
                                                   'cipher methods.',
                                         'TEXT' => 'Gets a list of available ' . 
                                                   'cipher methods.')),

          'hash_hmac_algos' => array(
              'key'                   => 'CRNRSTN_HMAC_HASH_ALGORITHMS',
              'url'                   => 'https://www.php.net/manual/en/function.hash-hmac-algos.php',
              'link_text'             => 'hash_hmac_algos',
              'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
              'data_type'             => self::$R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION'],
              'initialization'        => array(
                                         'default' => array(
                                                      self::$R_data['int_flag']['R_integer'] => -1,
                                                      'name'          => '')),
              'php_version'           => array(
                                         'removed'    => '', 
                                         'deprecated' => '', 
                                         'supported'  => 'PHP 7 >= 7.2.0, PHP 8'),
              'php_net_description'   => array(
                                         'HTML' => 'Return a list of ' . 
                                                   'registered hashing ' . 
                                                   'algorithms suitable ' . 
                                                   'for hash_hmac.',
                                         'TEXT' => 'Return a list of ' . 
                                                   'registered hashing ' . 
                                                   'algorithms suitable ' . 
                                                   'for hash_hmac.')),

          'hash_algos' => array(
              'key'                   => 'CRNRSTN_HASH_ALGORITHMS',
              'url'                   => 'https://www.php.net/manual/en/function.hash-algos',
              'link_text'             => 'hash_algos',
              'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
              'data_type'             => self::$R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION'],
              'initialization'        => array(
                                         'default' => array(
                                                      self::$R_data['int_flag']['R_integer'] => -1,
                                                      'name'          => '')),
              'php_version'           => array(
                                         'removed'    => '', 
                                         'deprecated' => '', 
                                         'supported'  => 'PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1'),
              'php_net_description'   => array(
                                         'HTML' => 'Return a list of ' . 
                                                   'registered hashing algorithms.',
                                         'TEXT' => 'Return a list of ' . 
                                                   'registered hashing algorithms.')));