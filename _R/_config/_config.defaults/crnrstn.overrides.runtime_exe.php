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
 * RUNTIME EXECUTABLE :: /_R/_config/_config.defaults/crnrstn.overrides.runtime_exe.php
 * EXECUTABLE VERSION :: 1.00.0000
 * DATE               :: October 4, 2023 @ 1230 hrs.
 * AUTHOR             :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                :: http://evifweb.jony5.com/
 * TITLE              :: The CRNRSTN :: Lightsaber
 *                       SOAP Services Layer System
 *                       Overrides Runtime Executable
 * DESCRIPTION        :: Execute all CRNRSTN ::
 *                       Lightsaber SOAP Services
 *                       Layer system overrides.
 *
 *                       Provide system overrides
 *                       for each server
 *                       environment that the
 *                       CRNRSTN :: Lightsaber SOAP
 *                       Services Layer will support
 *                       at runtime.
 *
 *
 *                       5
 *
 *                       Monday, July 29, 2024 @ 1527 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE            :: MIT | https://crnrstn.jony5.com/licensing/
 *
 */

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Monday, September 25, 2023 @ 0415 hrs.
 *
 * CRNRSTN :: DEFAULTS WINDOWS 
 * SYSTEMS TO os_bit_size = (int) 64.
 * THEREFORE, IF NEEDED AND UNTIL 
 * I CAN GET TESTED WINDOWS COMMANDS,
 * PLEASE SET os_bit_size = (int) 32 HERE, 
 * FOR WINDOWS. WHERE,
 *
 * Note: PASS $os_bit_size, AND CRNRSTN :: 
 *       WILL RUN: 
 *       @define('CRNRSTN_INTEGER_LENGTH', (int) ($os_bit_size - 1));
 *
 * Note: LINUX_EXT4 max file size 
 *       is 2^44 - 1 bytes (16 TiB - 1 bytes).
 *
 * Note: WINDOWS NTFS MAX VOLUME SIZE 
 *       IS 2^32 - 1 clusters (256 TiB - 64 KiB). 
 *       THIS IS WHERE MOST STOP, BUT IN 
 *       THEORY, NTFS MAX = 2^64 - 1 clusters (1 YiB - 64 KiB).
 *       SEE http://www.ntfs.com/ntfs_vs_fat.htm, and 
 *       https://stackoverflow.com/a/466596
 *
 * Note: ALL CRNRSTN :: SYSTEM MAX FILE 
 *       SIZE DEFAULTS WILL LEAVE 128 KiB 
 *       OF SPACE IN MAX SIZE SYSTEM FILES. 
 *       IF THE FILE IS MOVED TO ANOTHER 
 *       SERVER, THERE WILL BE ROOM IN 
 *       THE FILE TO ADD OR MAINTAIN A 
 *       COMMENT HEADER WITH A CRNRSTN :: 
 *       META DATA AND FILE ROUTING 
 *       SIGNATURE ADDED TO THE FILE. 
 *
 * Note: I DO NOT HAVE WINDOWS COMMANDS 
 *       YET. SO THIS CONFIG METHOD...I SEE 
 *       IT AS BEING NEEDED. 
 *
 * TODO :: Remove this TODO when 
 *         the below overrides 
 *         are all in place. 
 *         5 :: Wednesday, October 4, 2023 @ 1232 hrs.
 *
 *         config_disk_byte_settings_overrides(
 *           $env_key = CRNRSTN_RESOURCE_ALL,
 *           $os_bit_size = NULL,
 *           $max_write_file_size = NULL,
 *           $crnrstn_file_bytes_reserve = NULL,
 *           $max_write_volume_size = NULL,
 *           $crnrstn_volume_bytes_reserve = NULL);
 *
 */ 
$this->config_disk_byte_settings_overrides(
	   CRNRSTN_RESOURCE_ALL, 
	   64, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL);

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Wednesday, September 27, 2023 @ 2304 hrs.
 *
 * Note: On Linux: The maximum length 
 *       for a file name is 255 bytes. 
 *       The maximum combined length 
 *       of both the file name and 
 *       path name is 4096 bytes. 
 *       This length matches the 
 *       PATH_MAX that is supported 
 *       by the operating system.
 *
 * Note: On Windows: The maximum number 
 *       of bytes for a file name and 
 *       file path when combined 
 *       is 6255. However, the file 
 *       name itself cannot exceed 255 
 *       bytes. 
 *       Furthermore, directory names 
 *       (including the directory 
 *       delimiter) within a path are 
 *       limited to 255 bytes. 
 *       The Unicode representation of 
 *       a character can occupy several 
 *       bytes, so the maximum number 
 *       of characters that a file name 
 *       might contain can vary. 
 *
 *       When using the open file 
 *       support feature with VSS, the 
 *       backup-archive client adds the 
 *       snapshot volume name to the 
 *       path of the objects being 
 *       processed. The resulting path 
 *       (snapshot volume name plus 
 *       object path) must adhere to 
 *       the limits shown. The snapshot 
 *       volume name can be up to 
 *       1024 bytes. 
 *
 * https://www.ibm.com/docs/en/storage-protect/8.1.20?topic=parameters-file-specification-syntax
 * Last Updated: 2023-09-14
 *
 * TODO :: Remove this TODO when 
 *         the below overrides 
 *         are all in place. 
 *         5 :: Wednesday, October 4, 2023 @ 1233 hrs.
 *
 *         config_disk_max_item_count_overrides(
 *           $env_key = CRNRSTN_RESOURCE_ALL,
 *           $max_count_folder_items = NULL,
 *           $crnrstn_folder_items_reserve = NULL,
 *           $max_count_volume_items = NULL,
 *           $crnrstn_volume_items_reserve = NULL,
 *           $crnrstn_max_length_filename = NULL,
 *           $crnrstn_max_length_filepath = NULL);
 *
 */ 
$this->config_disk_max_item_count_overrides(
	   CRNRSTN_RESOURCE_ALL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL);

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Saturday, September 30, 2023 @ 0210 hrs.
 *
 * TODO :: Remove this TODO when 
 *         the below overrides 
 *         are all in place. 
 *         5 :: Wednesday, October 4, 2023 @ 1233 hrs.
 * 
 *         config_database_network_overrides(
 *           $env_key = CRNRSTN_RESOURCE_ALL,
 *           $crnrstn_soap_services_enabled = NULL,
 *           $crnrstn_slow_queries_acceleration_enabled = NULL,
 *           $max_connections = NULL,
 *           $connection_keepalive = NULL,
 *           $connection_ttl = NULL);
 *
 */ 
$this->config_database_network_overrides(
	   CRNRSTN_RESOURCE_ALL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL);

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * TODO :: Remove this TODO when 
 *         the below overrides 
 *         are all in place. 
 *         5 :: Wednesday, October 4, 2023 @ 1233 hrs.
 *
 *         config_database_throughput_overrides(
 *           $env_key = CRNRSTN_RESOURCE_ALL,
 *           $crnrstn_query_cache_enabled = NULL,
 *           $crnrstn_results_cache_enabled = NULL,
 *           $max_allowed_packet_bytes = NULL,
 *           $max_cache_packet_bytes = NULL,
 *           $cache_ttl_packet = NULL,
 *           $max_cache_results_bytes = NULL,
 *           $cache_ttl_results = NULL);
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Renamed input parameter, 
 *       $max_allowed_packet, to 
 *       $max_allowed_packet_bytes. 
 *       5 :: Wednesday, May 13, 2026 @ 1022 hrs.
 *
 */ 
$this->config_database_throughput_overrides(
	   CRNRSTN_RESOURCE_ALL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL);

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * TODO :: Remove this TODO when 
 *         the below overrides 
 *         are all in place. 
 *         5 :: Wednesday, October 4, 2023 @ 1233 hrs.
 *
 *         config_database_shard_overrides(
 *           $env_key = CRNRSTN_RESOURCE_ALL,
 *           $table_prefix = NULL,
 *           $max_table_record_count = NULL,
 *           $shard_ttl = NULL);
 *
 */ 
$this->config_database_shard_overrides(
	   CRNRSTN_RESOURCE_ALL, 
	   NULL, 
	   NULL, 
	   NULL);

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * TODO :: Remove this TODO when 
 *         the below overrides 
 *         are all in place. 
 *         5 :: Wednesday, October 4, 2023 @ 1233 hrs.
 *
 *         config_electrum_overrides(
 *           $env_key = CRNRSTN_RESOURCE_ALL,
 *           $max_bytes_throughput = NULL,
 *           $max_pid_threads = NULL,
 *           $max_conn_ftp = NULL,
 *           $ftp_conn_timeout = NULL,
 *           $max_cpu_load_percentage = NULL,
 *           $max_memory_usage_bytes = NULL,
 *           $max_incoming_data_connections,
 *           $max_outgoing_data_connections,
 *           $ftp_graceful_degrade = NULL);
 *
 * Note: $ftp_graceful_degrade = true
 *       should PERMIT CRNRSTN :: TO 
 *       USE HTTP GET, CURL HTTP POST, 
 *       OR PACKET CHUNKING OVER 
 *       CRNRSTN :: SOAP Services 
 *       LAYER UPON FTP 
 *       CONNECTION FAILURE. 
 *
 */ 
$this->config_electrum_overrides(
	   CRNRSTN_RESOURCE_ALL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL);

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * TODO :: Remove this TODO when 
 *         the below overrides 
 *         are all in place. 
 *         5 :: Wednesday, October 4, 2023 @ 1234 hrs.
 *
 *         config_wethrbug_overrides(
 *           $env_key = CRNRSTN_RESOURCE_ALL,
 *           $default_zipcode = NULL,
 *           $forecast_length = NULL,
 *           $default_units_celsius = NULL,
 *           $database_enabled = NULL
 * );
 *
 */ 
$this->config_wethrbug_overrides(
	   CRNRSTN_RESOURCE_ALL, 
	   NULL, 
	   NULL, 
	   NULL, 
	   NULL);