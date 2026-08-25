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
 * R :: R_timezone_syntax for R_data runtime initialization.
 * 
 * $hmac_algorithm = 'sha256';
 * 
 * @package CRNRSTN
 * @version 2.00.0001 CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer.
 * @author Jonathan '5' Harris <jharris@eVifweb.com>
 * @copyright Copyright © 2012-2026 eVifweb® development All Rights Reserved.
 * @license https://crnrstn.jony5.com/licensing/ MIT
 * @link https://lightsaber.crnrstn.jony5.com/ CRNRSTN :: Lightsaber.
 * @link https://twitter.com/CRNRSTN_v2_0_0 CRNRSTN :: on Twitter.
 * @link http://evifweb.jony5.com/ eVifweb® :: Corporate Sponsor.
 * @param array $R_data will contain timezone syntax data for the CLR-SSL. 
 * @access public
 *
 *
 * 5 :: Saturday, June 27, 2026 @ 0950 hrs.
 *
 */
/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * SOURCE  :: https://www.php.net/manual/en/timezones.php
 * COMMENT :: https://www.php.net/manual/en/timezones.php#128799
 * AUTHOR  :: info at scheduleplus dot xyz
 *
 * This data was last modified 
 * on Wednesday, November 1, 2023 @ 2331 hrs.
 *
 *
 * 5 :: Monday, November 20, 2023 @ 0446 hrs.
 *
 * Initialize timezones. 
 *
 */
$R_data = array(
          'africa/abidjan'       => 'africa/abidjan', 
          'africa/accra'         => 'africa/accra', 
          'africa/addis_ababa'   => 'africa/addis_ababa', 
          'africa/algiers'       => 'africa/algiers', 
          'africa/asmara'        => 'africa/asmara', 
          'africa/bamako'        => 'africa/bamako', 
          'africa/bangui'        => 'africa/bangui', 
          'africa/banjul'        => 'africa/banjul', 
          'africa/bissau'        => 'africa/bissau', 
          'africa/blantyre'      => 'africa/blantyre', 
          'africa/brazzaville'   => 'africa/brazzaville', 
          'africa/bujumbura'     => 'africa/bujumbura', 
          'africa/cairo'         => 'africa/cairo', 
          'africa/casablanca'    => 'africa/casablanca', 
          'africa/ceuta'         => 'africa/ceuta', 
          'africa/conakry'       => 'africa/conakry', 
          'africa/dakar'         => 'africa/dakar', 
          'africa/dar_es_salaam' => 'africa/dar_es_salaam', 
          'africa/djibouti'      => 'africa/djibouti', 
          'africa/douala'        => 'africa/douala', 
          'africa/el_aaiun'      => 'africa/el_aaiun', 
          'africa/freetown'      => 'africa/freetown', 
          'africa/gaborone'      => 'africa/gaborone', 
          'africa/harare'        => 'africa/harare', 
          'africa/johannesburg'  => 'africa/johannesburg', 
          'africa/juba'          => 'africa/juba', 
          'africa/kampala'       => 'africa/kampala', 
          'africa/khartoum'      => 'africa/khartoum', 
          'africa/kigali'        => 'africa/kigali', 
          'africa/kinshasa'      => 'africa/kinshasa', 
          'africa/lagos'         => 'africa/lagos', 
          'africa/libreville'    => 'africa/libreville', 
          'africa/lome'          => 'africa/lome', 
          'africa/luanda'        => 'africa/luanda', 
          'africa/lubumbashi'    => 'africa/lubumbashi', 
          'africa/lusaka'        => 'africa/lusaka', 
          'africa/malabo'        => 'africa/malabo', 
          'africa/maputo'        => 'africa/maputo', 
          'africa/maseru'        => 'africa/maseru', 
          'africa/mbabane'       => 'africa/mbabane', 
          'africa/mogadishu'     => 'africa/mogadishu', 
          'africa/monrovia'      => 'africa/monrovia', 
          'africa/nairobi'       => 'africa/nairobi', 
          'africa/ndjamena'      => 'africa/ndjamena', 
          'africa/niamey'        => 'africa/niamey', 
          'africa/nouakchott'    => 'africa/nouakchott', 
          'africa/ouagadougou'   => 'africa/ouagadougou', 
          'africa/porto-novo'    => 'africa/porto-novo', 
          'africa/sao_tome'      => 'africa/sao_tome', 
          'africa/tripoli'       => 'africa/tripoli', 
          'africa/tunis'         => 'africa/tunis', 
          'africa/windhoek'      => 'africa/windhoek', 
          'america/adak'         => 'america/adak', 
          'america/anchorage'    => 'america/anchorage', 
          'america/anguilla'     => 'america/anguilla', 
          'america/antigua'                => 'america/antigua', 
          'america/araguaina'              => 'america/araguaina', 
          'america/argentina/buenos_aires' => 'america/argentina/buenos_aires', 
          'america/argentina/catamarca'    => 'america/argentina/catamarca', 
          'america/argentina/cordoba'      => 'america/argentina/cordoba', 
          'america/argentina/jujuy'        => 'america/argentina/jujuy', 
          'america/argentina/la_rioja'     => 'america/argentina/la_rioja', 
          'america/argentina/mendoza'      => 'america/argentina/mendoza', 
          'america/argentina/rio_gallegos' => 'america/argentina/rio_gallegos', 
          'america/argentina/salta'        => 'america/argentina/salta', 
          'america/argentina/san_juan'     => 'america/argentina/san_juan', 
          'america/argentina/san_luis'     => 'america/argentina/san_luis', 
          'america/argentina/tucuman'      => 'america/argentina/tucuman', 
          'america/argentina/ushuaia'      => 'america/argentina/ushuaia', 
          'america/aruba'                  => 'america/aruba', 
          'america/asuncion'               => 'america/asuncion', 
          'america/atikokan'       => 'america/atikokan', 
          'america/bahia'          => 'america/bahia', 
          'america/bahia_banderas' => 'america/bahia_banderas', 
          'america/barbados'       => 'america/barbados', 
          'america/belem'          => 'america/belem', 
          'america/belize'         => 'america/belize', 
          'america/blanc-sablon'   => 'america/blanc-sablon', 
          'america/boa_vista'      => 'america/boa_vista', 
          'america/bogota'         => 'america/bogota', 
          'america/boise'          => 'america/boise', 
          'america/cambridge_bay'  => 'america/cambridge_bay', 
          'america/campo_grande'   => 'america/campo_grande', 
          'america/cancun'         => 'america/cancun', 
          'america/caracas'        => 'america/caracas', 
          'america/cayenne'        => 'america/cayenne', 
          'america/cayman'         => 'america/cayman', 
          'america/chicago'        => 'america/chicago', 
          'america/chihuahua'      => 'america/chihuahua', 
          'america/ciudad_juarez'  => 'america/ciudad_juarez', 
          'america/costa_rica'     => 'america/costa_rica', 
          'america/creston'        => 'america/creston', 
          'america/cuiaba'         => 'america/cuiaba', 
          'america/curacao'        => 'america/curacao', 
          'america/danmarkshavn'   => 'america/danmarkshavn', 
          'america/dawson'         => 'america/dawson', 
          'america/dawson_creek'   => 'america/dawson_creek', 
          'america/denver'         => 'america/denver', 
          'america/detroit'        => 'america/detroit', 
          'america/dominica'       => 'america/dominica', 
          'america/edmonton'       => 'america/edmonton', 
          'america/eirunepe'       => 'america/eirunepe', 
          'america/el_salvador'    => 'america/el_salvador', 
          'america/fort_nelson'    => 'america/fort_nelson', 
          'america/fortaleza'      => 'america/fortaleza', 
          'america/glace_bay'      => 'america/glace_bay', 
          'america/goose_bay'      => 'america/goose_bay', 
          'america/grand_turk'     => 'america/grand_turk', 
          'america/grenada'        => 'america/grenada', 
          'america/guadeloupe'     => 'america/guadeloupe', 
          'america/guatemala'      => 'america/guatemala', 
          'america/guayaquil'      => 'america/guayaquil', 
          'america/guyana'         => 'america/guyana', 
          'america/halifax'        => 'america/halifax', 
          'america/havana'               => 'america/havana', 
          'america/hermosillo'           => 'america/hermosillo', 
          'america/indiana/indianapolis' => 'america/indiana/indianapolis', 
          'america/indiana/knox'         => 'america/indiana/knox', 
          'america/indiana/marengo'      => 'america/indiana/marengo', 
          'america/indiana/petersburg'   => 'america/indiana/petersburg', 
          'america/indiana/tell_city'    => 'america/indiana/tell_city', 
          'america/indiana/vevay'        => 'america/indiana/vevay', 
          'america/indiana/vincennes'    => 'america/indiana/vincennes', 
          'america/indiana/winamac'      => 'america/indiana/winamac', 
          'america/inuvik'               => 'america/inuvik', 
          'america/iqaluit'              => 'america/iqaluit', 
          'america/jamaica'              => 'america/jamaica', 
          'america/juneau'               => 'america/juneau', 
          'america/kentucky/louisville'  => 'america/kentucky/louisville', 
          'america/kentucky/monticello'  => 'america/kentucky/monticello', 
          'america/kralendijk'           => 'america/kralendijk', 
          'america/la_paz'               => 'america/la_paz', 
          'america/lima'                 => 'america/lima', 
          'america/los_angeles'          => 'america/los_angeles', 
          'america/lower_princes'        => 'america/lower_princes', 
          'america/maceio'               => 'america/maceio', 
          'america/managua'              => 'america/managua', 
          'america/manaus'               => 'america/manaus', 
          'america/marigot'              => 'america/marigot', 
          'america/martinique'           => 'america/martinique', 
          'america/matamoros'            => 'america/matamoros', 
          'america/mazatlan'             => 'america/mazatlan', 
          'america/menominee'            => 'america/menominee', 
          'america/merida'               => 'america/merida', 
          'america/metlakatla'           => 'america/metlakatla', 
          'america/mexico_city'          => 'america/mexico_city', 
          'america/miquelon'             => 'america/miquelon', 
          'america/moncton'              => 'america/moncton', 
          'america/monterrey'            => 'america/monterrey', 
          'america/montevideo'           => 'america/montevideo', 
          'america/montserrat'           => 'america/montserrat', 
          'america/nassau'               => 'america/nassau', 
          'america/new_york'             => 'america/new_york', 
          'america/nome'                   => 'america/nome', 
          'america/noronha'                => 'america/noronha', 
          'america/north_dakota/beulah'    => 'america/north_dakota/beulah', 
          'america/north_dakota/center'    => 'america/north_dakota/center', 
          'america/north_dakota/new_salem' => 'america/north_dakota/new_salem', 
          'america/nuuk'                   => 'america/nuuk', 
          'america/ojinaga'                => 'america/ojinaga', 
          'america/panama'               => 'america/panama', 
          'america/paramaribo'           => 'america/paramaribo', 
          'america/phoenix'              => 'america/phoenix', 
          'america/port-au-prince'       => 'america/port-au-prince', 
          'america/port_of_spain'        => 'america/port_of_spain', 
          'america/porto_velho'          => 'america/porto_velho', 
          'america/puerto_rico'          => 'america/puerto_rico', 
          'america/punta_arenas'         => 'america/punta_arenas', 
          'america/rankin_inlet'         => 'america/rankin_inlet', 
          'america/recife'               => 'america/recife', 
          'america/regina'               => 'america/regina', 
          'america/resolute'             => 'america/resolute', 
          'america/rio_branco'           => 'america/rio_branco', 
          'america/santarem'             => 'america/santarem', 
          'america/santiago'             => 'america/santiago', 
          'america/santo_domingo'        => 'america/santo_domingo', 
          'america/sao_paulo'            => 'america/sao_paulo', 
          'america/scoresbysund'         => 'america/scoresbysund', 
          'america/sitka'                => 'america/sitka', 
          'america/st_barthelemy'        => 'america/st_barthelemy', 
          'america/st_johns'             => 'america/st_johns', 
          'america/st_kitts'             => 'america/st_kitts', 
          'america/st_lucia'             => 'america/st_lucia', 
          'america/st_thomas'            => 'america/st_thomas', 
          'america/st_vincent'           => 'america/st_vincent', 
          'america/swift_current'        => 'america/swift_current', 
          'america/tegucigalpa'          => 'america/tegucigalpa', 
          'america/thule'                => 'america/thule', 
          'america/tijuana'              => 'america/tijuana', 
          'america/toronto'              => 'america/toronto', 
          'america/tortola'              => 'america/tortola', 
          'america/vancouver'            => 'america/vancouver', 
          'america/whitehorse'           => 'america/whitehorse', 
          'america/winnipeg'             => 'america/winnipeg', 
          'america/yakutat'              => 'america/yakutat', 
          'antarctica/casey'             => 'antarctica/casey', 
          'antarctica/davis'             => 'antarctica/davis', 
          'antarctica/dumontdurville'    => 'antarctica/dumontdurville', 
          'antarctica/macquarie'         => 'antarctica/macquarie', 
          'antarctica/mawson'            => 'antarctica/mawson', 
          'antarctica/mcmurdo'           => 'antarctica/mcmurdo', 
          'antarctica/palmer'            => 'antarctica/palmer', 
          'antarctica/rothera'           => 'antarctica/rothera', 
          'antarctica/syowa'             => 'antarctica/syowa', 
          'antarctica/troll'             => 'antarctica/troll', 
          'antarctica/vostok'            => 'antarctica/vostok', 
          'arctic/longyearbyen'          => 'arctic/longyearbyen', 
          'asia/aden'                    => 'asia/aden', 
          'asia/almaty'                  => 'asia/almaty', 
          'asia/amman'                   => 'asia/amman', 
          'asia/anadyr'                  => 'asia/anadyr', 
          'asia/aqtau'                   => 'asia/aqtau', 
          'asia/aqtobe'                  => 'asia/aqtobe', 
          'asia/ashgabat'                => 'asia/ashgabat', 
          'asia/atyrau'                  => 'asia/atyrau', 
          'asia/baghdad'                 => 'asia/baghdad', 
          'asia/bahrain'                 => 'asia/bahrain', 
          'asia/baku'                    => 'asia/baku', 
          'asia/bangkok'                 => 'asia/bangkok', 
          'asia/barnaul'                 => 'asia/barnaul', 
          'asia/beirut'                  => 'asia/beirut', 
          'asia/bishkek'                 => 'asia/bishkek', 
          'asia/brunei'                  => 'asia/brunei', 
          'asia/chita'                   => 'asia/chita', 
          'asia/choibalsan'              => 'asia/choibalsan', 
          'asia/colombo'                 => 'asia/colombo', 
          'asia/damascus'                => 'asia/damascus', 
          'asia/dhaka'                   => 'asia/dhaka', 
          'asia/dili'                    => 'asia/dili', 
          'asia/dubai'                   => 'asia/dubai', 
          'asia/dushanbe'                => 'asia/dushanbe', 
          'asia/famagusta'               => 'asia/famagusta', 
          'asia/gaza'                    => 'asia/gaza', 
          'asia/hebron'                  => 'asia/hebron', 
          'asia/ho_chi_minh'             => 'asia/ho_chi_minh', 
          'asia/hong_kong'               => 'asia/hong_kong', 
          'asia/hovd'                    => 'asia/hovd', 
          'asia/irkutsk'                 => 'asia/irkutsk', 
          'asia/jakarta'                 => 'asia/jakarta', 
          'asia/jayapura'                => 'asia/jayapura', 
          'asia/jerusalem'               => 'asia/jerusalem', 
          'asia/kabul'                   => 'asia/kabul', 
          'asia/kamchatka'               => 'asia/kamchatka', 
          'asia/karachi'                 => 'asia/karachi', 
          'asia/kathmandu'               => 'asia/kathmandu', 
          'asia/khandyga'                => 'asia/khandyga', 
          'asia/kolkata'                 => 'asia/kolkata', 
          'asia/krasnoyarsk'             => 'asia/krasnoyarsk', 
          'asia/kuala_lumpur'            => 'asia/kuala_lumpur', 
          'asia/kuching'                 => 'asia/kuching', 
          'asia/kuwait'                  => 'asia/kuwait', 
          'asia/macau'                   => 'asia/macau', 
          'asia/magadan'                 => 'asia/magadan', 
          'asia/makassar'                => 'asia/makassar', 
          'asia/manila'                  => 'asia/manila', 
          'asia/muscat'                  => 'asia/muscat', 
          'asia/nicosia'                 => 'asia/nicosia', 
          'asia/novokuznetsk'            => 'asia/novokuznetsk', 
          'asia/novosibirsk'             => 'asia/novosibirsk', 
          'asia/omsk'                    => 'asia/omsk', 
          'asia/oral'                    => 'asia/oral', 
          'asia/phnom_penh'              => 'asia/phnom_penh', 
          'asia/pontianak'               => 'asia/pontianak', 
          'asia/pyongyang'               => 'asia/pyongyang', 
          'asia/qatar'                   => 'asia/qatar', 
          'asia/qostanay'                => 'asia/qostanay', 
          'asia/qyzylorda'               => 'asia/qyzylorda', 
          'asia/riyadh'                  => 'asia/riyadh', 
          'asia/sakhalin'                => 'asia/sakhalin', 
          'asia/samarkand'               => 'asia/samarkand', 
          'asia/seoul'                   => 'asia/seoul', 
          'asia/shanghai'                => 'asia/shanghai', 
          'asia/singapore'               => 'asia/singapore', 
          'asia/srednekolymsk'           => 'asia/srednekolymsk', 
          'asia/taipei'                  => 'asia/taipei', 
          'asia/tashkent'                => 'asia/tashkent', 
          'asia/tbilisi'                 => 'asia/tbilisi', 
          'asia/tehran'                  => 'asia/tehran', 
          'asia/thimphu'                 => 'asia/thimphu', 
          'asia/tokyo'                   => 'asia/tokyo', 
          'asia/tomsk'                   => 'asia/tomsk', 
          'asia/ulaanbaatar'             => 'asia/ulaanbaatar', 
          'asia/urumqi'                  => 'asia/urumqi', 
          'asia/ust-nera'                => 'asia/ust-nera', 
          'asia/vientiane'               => 'asia/vientiane', 
          'asia/vladivostok'             => 'asia/vladivostok', 
          'asia/yakutsk'                 => 'asia/yakutsk', 
          'asia/yangon'                  => 'asia/yangon', 
          'asia/yekaterinburg'           => 'asia/yekaterinburg', 
          'asia/yerevan'                 => 'asia/yerevan', 
          'atlantic/azores'              => 'atlantic/azores', 
          'atlantic/bermuda'             => 'atlantic/bermuda', 
          'atlantic/canary'              => 'atlantic/canary', 
          'atlantic/cape_verde'          => 'atlantic/cape_verde', 
          'atlantic/faroe'               => 'atlantic/faroe', 
          'atlantic/madeira'             => 'atlantic/madeira', 
          'atlantic/reykjavik'           => 'atlantic/reykjavik', 
          'atlantic/south_georgia'       => 'atlantic/south_georgia', 
          'atlantic/st_helena'           => 'atlantic/st_helena', 
          'atlantic/stanley'             => 'atlantic/stanley', 
          'australia/adelaide'           => 'australia/adelaide', 
          'australia/brisbane'           => 'australia/brisbane', 
          'australia/broken_hill'        => 'australia/broken_hill', 
          'australia/darwin'             => 'australia/darwin', 
          'australia/eucla'              => 'australia/eucla', 
          'australia/hobart'             => 'australia/hobart', 
          'australia/lindeman'           => 'australia/lindeman', 
          'australia/lord_howe'          => 'australia/lord_howe', 
          'australia/melbourne'          => 'australia/melbourne', 
          'australia/perth'              => 'australia/perth', 
          'australia/sydney'             => 'australia/sydney', 
          'europe/amsterdam'             => 'europe/amsterdam', 
          'europe/andorra'               => 'europe/andorra', 
          'europe/astrakhan'             => 'europe/astrakhan', 
          'europe/athens'                => 'europe/athens', 
          'europe/belgrade'              => 'europe/belgrade', 
          'europe/berlin'                => 'europe/berlin', 
          'europe/bratislava'            => 'europe/bratislava', 
          'europe/brussels'              => 'europe/brussels', 
          'europe/bucharest'             => 'europe/bucharest', 
          'europe/budapest'              => 'europe/budapest', 
          'europe/busingen'              => 'europe/busingen', 
          'europe/chisinau'              => 'europe/chisinau', 
          'europe/copenhagen'            => 'europe/copenhagen', 
          'europe/dublin'                => 'europe/dublin', 
          'europe/gibraltar'             => 'europe/gibraltar', 
          'europe/guernsey'              => 'europe/guernsey', 
          'europe/helsinki'              => 'europe/helsinki', 
          'europe/isle_of_man'           => 'europe/isle_of_man', 
          'europe/istanbul'              => 'europe/istanbul', 
          'europe/jersey'                => 'europe/jersey', 
          'europe/kaliningrad'           => 'europe/kaliningrad', 
          'europe/kirov'                 => 'europe/kirov', 
          'europe/kyiv'                  => 'europe/kyiv', 
          'europe/lisbon'                => 'europe/lisbon', 
          'europe/ljubljana'             => 'europe/ljubljana', 
          'europe/london'                => 'europe/london', 
          'europe/luxembourg'            => 'europe/luxembourg', 
          'europe/madrid'                => 'europe/madrid', 
          'europe/malta'                 => 'europe/malta', 
          'europe/mariehamn'             => 'europe/mariehamn', 
          'europe/minsk'                 => 'europe/minsk', 
          'europe/monaco'                => 'europe/monaco', 
          'europe/moscow'                => 'europe/moscow', 
          'europe/oslo'                  => 'europe/oslo', 
          'europe/paris'                 => 'europe/paris', 
          'europe/podgorica'             => 'europe/podgorica', 
          'europe/prague'                => 'europe/prague', 
          'europe/riga'                  => 'europe/riga', 
          'europe/rome'                  => 'europe/rome', 
          'europe/samara'                => 'europe/samara', 
          'europe/san_marino'            => 'europe/san_marino', 
          'europe/sarajevo'              => 'europe/sarajevo', 
          'europe/saratov'               => 'europe/saratov', 
          'europe/simferopol'            => 'europe/simferopol', 
          'europe/skopje'                => 'europe/skopje', 
          'europe/sofia'                 => 'europe/sofia', 
          'europe/stockholm'             => 'europe/stockholm', 
          'europe/tallinn'               => 'europe/tallinn', 
          'europe/tirane'                => 'europe/tirane', 
          'europe/ulyanovsk'             => 'europe/ulyanovsk', 
          'europe/vaduz'                 => 'europe/vaduz', 
          'europe/vatican'               => 'europe/vatican', 
          'europe/vienna'                => 'europe/vienna', 
          'europe/vilnius'               => 'europe/vilnius', 
          'europe/volgograd'             => 'europe/volgograd', 
          'europe/warsaw'                => 'europe/warsaw', 
          'europe/zagreb'                => 'europe/zagreb', 
          'europe/zurich'                => 'europe/zurich', 
          'indian/antananarivo'          => 'indian/antananarivo', 
          'indian/chagos'                => 'indian/chagos', 
          'indian/christmas'             => 'indian/christmas', 
          'indian/cocos'                 => 'indian/cocos', 
          'indian/comoro'                => 'indian/comoro', 
          'indian/kerguelen'             => 'indian/kerguelen', 
          'indian/mahe'                  => 'indian/mahe', 
          'indian/maldives'              => 'indian/maldives', 
          'indian/mauritius'             => 'indian/mauritius', 
          'indian/mayotte'               => 'indian/mayotte', 
          'indian/reunion'               => 'indian/reunion', 
          'pacific/apia'                 => 'pacific/apia', 
          'pacific/auckland'             => 'pacific/auckland', 
          'pacific/bougainville'         => 'pacific/bougainville', 
          'pacific/chatham'              => 'pacific/chatham', 
          'pacific/chuuk'                => 'pacific/chuuk', 
          'pacific/easter'               => 'pacific/easter', 
          'pacific/efate'                => 'pacific/efate', 
          'pacific/fakaofo'              => 'pacific/fakaofo', 
          'pacific/fiji'                 => 'pacific/fiji', 
          'pacific/funafuti'             => 'pacific/funafuti', 
          'pacific/galapagos'            => 'pacific/galapagos', 
          'pacific/gambier'              => 'pacific/gambier', 
          'pacific/guadalcanal'          => 'pacific/guadalcanal', 
          'pacific/guam'                 => 'pacific/guam', 
          'pacific/honolulu'             => 'pacific/honolulu', 
          'pacific/kanton'               => 'pacific/kanton', 
          'pacific/kiritimati'           => 'pacific/kiritimati', 
          'pacific/kosrae'               => 'pacific/kosrae', 
          'pacific/kwajalein'            => 'pacific/kwajalein', 
          'pacific/majuro'               => 'pacific/majuro', 
          'pacific/marquesas'            => 'pacific/marquesas', 
          'pacific/midway'               => 'pacific/midway', 
          'pacific/nauru'                => 'pacific/nauru', 
          'pacific/niue'                 => 'pacific/niue', 
          'pacific/norfolk'              => 'pacific/norfolk', 
          'pacific/noumea'               => 'pacific/noumea', 
          'pacific/pago_pago'            => 'pacific/pago_pago', 
          'pacific/palau'                => 'pacific/palau', 
          'pacific/pitcairn'             => 'pacific/pitcairn', 
          'pacific/pohnpei'              => 'pacific/pohnpei', 
          'pacific/port_moresby'         => 'pacific/port_moresby', 
          'pacific/rarotonga'            => 'pacific/rarotonga', 
          'pacific/saipan'               => 'pacific/saipan', 
          'pacific/tahiti'               => 'pacific/tahiti', 
          'pacific/tarawa'               => 'pacific/tarawa', 
          'pacific/tongatapu'            => 'pacific/tongatapu', 
          'pacific/wake'                 => 'pacific/wake', 
          'pacific/wallis'               => 'pacific/wallis');