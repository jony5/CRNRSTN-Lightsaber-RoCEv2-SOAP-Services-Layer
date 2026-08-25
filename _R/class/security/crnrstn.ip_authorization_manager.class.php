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
 * IPV4
 * '127.0.0.1',                # STATIC DEFINE
 * '172.0.0.*',                # WILDCARD ("*")
 * '173.0.*',                  # WILDCARD ("*") DEEPER
 * '126.1.0.0/255.255.0.0',    # RANGE SLASH
 * '192.168.0.0/24'            # RANGE CIDR USING NET MASKING (SLASH)
 * '192.168/24'	               # RANGE CIDR USING NET MASKING (SLASH) [SHORTENED VERSION]
 * '125.0.0.1-125.0.0.9',      # RANGE DASH
 *
 * IPV6
 * '::1'
 * '0:0:0:0:0:0:0:1'
 * '::168/24'                  # RANGE CIDR USING NET MASKING (SLASH) [SHORTENED VERSION]
 * '2000:1:1:1:1:1:1:1112/112'
 * '4000:1:1:1:1:1:1:1111/112'
 * '4000:1:1:1:1:1:1:1112'
 * '2000:1:1:1:1:1:1112'
 * '2000:1:1:1:1:1:1:1112'
 * 'FE80::202:B9FF:FECB:D281'
 * 'FE80::230:80FF:FEF3:4701'
 * '2001:DB8:1111:2222::1/64'
 * '2001:DB8:1111:2222::2/64'
 * '2002:c0a8:6301:1::1/64'
 * '2002:c0a8:6301:2::1/64'
 * 'FE80::/10'
 * 'FF00::/8'
 * '3000::1/112'
 *
 * For example, the IPv4 address 192.23.1.2 on R2 S0/0 is converted to ::192.23.1.2 in the IPv6 notation. This address
 * is used as BGP peer IPv6 address and BGP next-hop.
 * SOURCE :: http://www.cisco.com/en/US/docs/ios/ipv6/configuration/guide/ip6-tunnel.html
 * Automatic IPv4-compatible tunnels use IPv4-compatible IPv6 addresses. IPv4-compatible IPv6 addresses are IPv6
 * unicast addresses that have zeros in the high-order 96 bits of the address, and an IPv4 address in the
 * low-order 32 bits. They can be written as 0:0:0:0:0:0:A.B.C.D or ::A.B.C.D, where "A.B.C.D" represents the
 * embedded IPv4 address.
 *
 * The tunnel destination is automatically determined by the IPv4 address in the low-order 32 bits of IPv4-compatible
 * IPv6 addresses. The host or router at each end of an IPv4-compatible tunnel must support both the IPv4 and IPv6
 * protocol stacks. IPv4-compatible tunnels can be configured between border-routers or between a border-router and a
 * host. Using IPv4-compatible tunnels is an easy method to create tunnels for IPv6 over IPv4, but the technique does
 * not scale for large networks.
 *
 * As shown in Table 3, Part 1, an ISATAP address consists of an IPv6 prefix and the ISATAP interface identifier. This
 * interface identifier includes the IPv4 address of the underlying IPv4 link. The following example shows what an
 * actual ISATAP address would look like if the prefix is 2001:DB8:1234:5678::/64 and the embedded IPv4 address
 * is 10.173.129.8. In the ISATAP address, the IPv4 address is expressed in hexadecimal as 0AAD:8108 (for
 * example, 2001:DB8:1234:5678:0000:5EFE:0AAD:8108).
 *
 * SOURCE :: http://tools.ietf.org/html/draft-ietf-ipv6-addr-arch-v4-04
 * There are three conventional forms for representing IPv6 addresses as
 * text strings:
 *
 *  1. The preferred form is x:x:x:x:x:x:x:x, where the 'x's are one to
 *     four hexadecimal digits of the eight 16-bit pieces of the address.
 *     Examples:
 *
 *	   ABCD:EF01:2345:6789:ABCD:EF01:2345:6789
 *
 *	   2001:DB8:0:0:8:800:200C:417A
 *
 *     Note that it is not necessary to write the leading zeros in an
 *     individual field, but there must be at least one numeral in every
 *     field (except for the case described in 2.).
 *
 *  2. Due to some methods of allocating certain styles of IPv6
 *	   addresses, it will be common for addresses to contain long strings
 *	   of zero bits. In order to make writing addresses containing zero
 *	   bits easier a special syntax is available to compress the zeros.
 *	   The use of "::" indicates one or more groups of 16 bits of zeros.
 *	   The "::" can only appear once in an address. The "::" can also be
 *	   used to compress leading or trailing zeros in an address.
 *
 *	   For example the following addresses:
 *
 * 	   2001:DB8:0:0:8:800:200C:417A   a unicast address
 * 	   FF01:0:0:0:0:0:0:101           a multicast address
 * 	   0:0:0:0:0:0:0:1                the loopback address
 * 	   0:0:0:0:0:0:0:0                the unspecified address
 *
 *	   may be represented as:
 *
 * 	   2001:DB8::8:800:200C:417A      a unicast address
 * 	   FF01::101                      a multicast address
 * 	   ::1                            the loopback address
 * 	   ::                             the unspecified address
 *
 *  3. An alternative form that is sometimes more convenient when dealing
 *	   with a mixed environment of IPv4 and IPv6 nodes is
 *	   x:x:x:x:x:x:d.d.d.d, where the 'x's are the hexadecimal values of
 *	   the six high-order 16-bit pieces of the address, and the 'd's are
 *	   the decimal values of the four low-order 8-bit pieces of the
 *	   address (standard IPv4 representation). Examples:
 *
 * 	   0:0:0:0:0:0:13.1.68.3
 *
 * 	   0:0:0:0:0:FFFF:129.144.52.38
 *
 *	   or in compressed form:
 *
 * 	   ::13.1.68.3
 *
 * 	   ::FFFF:129.144.52.38
 *
 * 	   For example, the following are legal representations of the 60-bit
 *     prefix 20010DB80000CD3 (hexadecimal):
 *
 *	   2001:0DB8:0000:CD30:0000:0000:0000:0000/60
 *	   2001:0DB8::CD30:0:0:0:0/60
 *	   2001:0DB8:0:CD30::/60
 *
 *     The following are NOT legal representations of the above prefix:
 *
 *	   2001:0DB8:0:CD3/60   may drop leading zeros, but not trailing
 *						    zeros, within any 16-bit chunk of the address
 *
 *	   2001:0DB8::CD30/60   address to left of "/" expands to
 *						    2001:0DB8:0000:0000:0000:0000:0000:CD30
 *
 *	   2001:0DB8::CD3/60    address to left of "/" expands to
 *						   2001:0DB8:0000:0000:0000:0000:0000:0CD3
 *
 *     When writing both a node address and a prefix of that node address
 *     (e.g., the node's subnet prefix), the two can combined as follows:
 *
 *
 *	   the node address      2001:0DB8:0:CD30:123:4567:89AB:CDEF
 *	   and its subnet number 2001:0DB8:0:CD30::/60
 *
 *	   can be abbreviated as 2001:0DB8:0:CD30:123:4567:89AB:CDEF/60
 *
 *  A second type of IPv6 address that holds an embedded IPv4 address is
 *  defined. This address type is used to represent the addresses of
 *  IPv4 nodes as IPv6 addresses. The format of the "IPv4-mapped IPv6
 *  address" is:
 *  |                80 bits               | 16 |      32 bits        |
 *  +--------------------------------------+--------------------------+
 *  |0000..............................0000|FFFF|    IPv4 address     |
 *  +--------------------------------------+----+---------------------+
 *
 *  See [*RFC4038] for background on the usage of the "IPv4-mapped IPv6 address".
 *  http://tools.ietf.org/html/rfc4038
 *
 *  Link-Local addresses are for use on a single link. Link-Local
 *  addresses have the following format:
 *  |   10     |
 *  |  bits    |         54 bits         |          64 bits           |
 *  +----------+-------------------------+----------------------------+
 *  |1111111010|           0             |       interface ID         |
 *  +----------+-------------------------+----------------------------+
 *
 *  Site-local addresses were originally designed to be used for
 *  addressing inside of a site without the need for a global prefix.
 *  Site-Local addresses are now deprecated as defined in [SLDEP].
 *
 *  Site-Local addresses have the following format:
 *
 *  |   10     |
 *  |  bits    |         54 bits         |         64 bits            |
 *  +----------+-------------------------+----------------------------+
 *  |1111111011|        subnet ID        |       interface ID         |
 *  +----------+-------------------------+----------------------------+
 *
 *  The Subnet-Router anycast address is predefined. Its format is as
 *  follows:
 *
 *  |                         n bits                 |   128-n bits   |
 *  +------------------------------------------------+----------------+
 *  |                   subnet prefix                | 00000000000000 |
 *  +------------------------------------------------+----------------+
 *
 *  The "subnet prefix" in an anycast address is the prefix which
 *  identifies a specific link. This anycast address is syntactically
 *  the same as a unicast address for an interface on the link with the
 *  interface identifier set to zero.
 *
 *  An IPv6 multicast address is an identifier for a group of interfaces
 *  (typically on different nodes). An interface may belong to any
 *  number of multicast groups. Multicast addresses have the following
 *  format:
 *
 *  |   8    |  4 |  4 |                  112 bits                   |
 *  +------ -+----+----+---------------------------------------------+
 *  |11111111|flgs|scop|                  group ID                   |
 *  +--------+----+----+---------------------------------------------+
 *
 *     binary 11111111 at the start of the address identifies the address
 *     as being a multicast address.
 *
 *                                   +-+-+-+-+
 *     flgs is a set of 4 flags:     |0|R|P|T|
 *                                   +-+-+-+-+
 *
 *        The high-order flag is reserved, and must be initialized to 0.
 *
 *        T = 0 indicates a permanently-assigned ("well-known") multicast
 *        address, assigned by the Internet Assigned Number Authority
 *        (IANA).
 *
 *        T = 1 indicates a non-permanently-assigned ("transient" or
 *        "dynamically" assigned) multicast address.
 *        The P flag's definition and usage can be found in [RFC3306].
 *
 *        The R flag's definition and usage can be found in [RFC3956].
 *
 *     scop is a 4-bit multicast scope value used to limit the scope of
 *     the multicast group. The values are:
 *
 *        0  reserved
 *        1  interface-local scope
 *        2  link-local scope
 *        3  reserved
 *        4  admin-local scope
 *        5  site-local scope
 *        6  (unassigned)
 *        7  (unassigned)
 *        8  organization-local scope
 *        9  (unassigned)
 *        A  (unassigned)
 *        B  (unassigned)
 *        C  (unassigned)
 *        D  (unassigned)
 *        E  global scope
 *        F  reserved
 *
 *        interface-local scope spans only a single interface on a
 *        node, and is useful only for loopback transmission of
 *        multicast.
 *
 *        link-local multicast scope spans the same
 *        topological region as the corresponding unicast scope.
 *
 *        admin-local scope is the smallest scope that must be
 *        administratively configured, i.e., not automatically
 *        derived from physical connectivity or other, non-
 *        multicast-related configuration.
 *
 *        site-local scope is intended to span a single site.
 *
 *        organization-local scope is intended to span multiple
 *        sites belonging to a single organization.
 *
 *        scopes labeled "(unassigned)" are available for
 *        administrators to define additional multicast regions.
 *
 *     group ID identifies the multicast group, either permanent or
 *     transient, within the given scope. Additional definitions of the
 *     multicast group ID field structure is defined in [RFC3306].
 *
 *
 * SOURCE :: http://en.wikipedia.org/wiki/IPv6
 * The 128 bits of an IPv6 address are represented in 8 groups of 16 bits each. Each group is written
 * as 4 hexadecimal digits and the groups are separated by colons (:). The
 * address 2001:0db8:0000:0000:0000:ff00:0042:8329 is an example of this representation.
 *
 * For convenience, an IPv6 address may be abbreviated to shorter notations by application of the following rules,
 * where possible.
 *
 * One or more leading zeroes from any groups of hexadecimal digits are removed; this is usually done to either all or
 * none of the leading zeroes. For example, the group 0042 is converted to 42.
 * Consecutive sections of zeroes are replaced with a double colon (::). The double colon may only be used once in an
 * address, as multiple use would render the address indeterminate. RFC 5952 recommends that a double colon
 * must not be used to denote an omitted single section of zeroes.[38]
 * An example of application of these rules:
 *
 * Initial address: 2001:0db8:0000:0000:0000:ff00:0042:8329
 * After removing all leading zeroes: 2001:db8:0:0:0:ff00:42:8329
 * After omitting consecutive sections of zeroes: 2001:db8::ff00:42:8329
 * The loopback address, 0000:0000:0000:0000:0000:0000:0000:0001, may be abbreviated to ::1 by using both rules.
 *
 * Hybrid dual-stack IPv6/IPv4 implementations recognize a special class of addresses, the IPv4-mapped IPv6 addresses.
 * In these addresses, the first 80 bits are zero, the next 16 bits are one, and the remaining 32 bits are the IPv4
 * address. One may see these addresses with the first 96 bits written in the standard IPv6 format, and the
 * remaining 32 bits written in the customary dot-decimal notation of IPv4. For example, ::ffff:192.0.2.128 represents
 * the IPv4 address 192.0.2.128. A deprecated format for IPv4-compatible IPv6 addresses was ::192.0.2.128.[51]
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * CLASS DEFINITION :: crnrstn_ip_authorization_manager
 * CLASS VERSION    :: 1.00.0001
 * DATE 		    :: September 11, 2012 @ 1520 hrs.
 * AUTHOR 		    :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI 		 	    :: http://evifweb.jony5.com
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber
 *                     IP Authorization Manager class
 *                     object is a runtime and
 *                     configuration driven IP
 *                     address manager for the
 *                     internal regulation of
 *                     the allocations of
 *                     authorizations by IP
 *                     address to access
 *                     resources faithfully
 *                     stewarded by the CRNRSTN ::
 *                     Lightsaber SOAP Services Layer.
 *
 *
 *                     5
 *
 *                     Tuesday, July 2, 2024 @ 0740 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE 	        :: MIT | https://crnrstn.jony5.com/licensing/
 *
 */
class crnrstn_ip_authorization_manager extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_ip_authorization_manager 
     *       class object by applying an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Saturday, April 4, 2026 @ 1759 hrs.
     *
     */

    public $oSESSION_MGR;

	private static $clientIpAddress;
	private static $allowedIp_ARRAY = array();
	private static $allowedIpRangeMIN_ARRAY = array();
	private static $allowedIpRangeMAX_ARRAY = array();
	private static $deniedIp_ARRAY = array();
	private static $deniedIpRangeMIN_ARRAY = array();
	private static $deniedIpRangeMAX_ARRAY = array();
	
	private static $tmp_ipconcat;
	private static $tmp_ipexplode = array();
	private static $tmp_rangeexplode = array();
	private static $tmp_ipv4wildcard = array();
	
	private static $allowedIpCounter = 0;
	private static $deniedIpCounter = 0;
	
	private static $accessGranted = array();
	private static $accessDenied = false;

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function __construct()
    {

		// Get client IP address.
		self::$clientIpAddress = $this->return_ip();

	}

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function ip_access_is_granted()
    {

        if(self::$accessDenied == false){

            return true;

        }

        return false;

    }
	
    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function clientIpAddress()
    {

		return self::$clientIpAddress;

	}
	
    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function authorizeEnvAccess()
    {

        //
        // QUICK CHECK OF RUNTIME FOR PRE-EXISTING AUTHORIZATION.
        $tmp_env_hash = $this->return_env_key(true);

        if(isset(self::$accessGranted[$tmp_env_hash])){

            if(self::$accessGranted[$tmp_env_hash] == CRNRSTN_AUTHORIZED_IP){

                return true;

            }

        }

        /*
        CRNRSTN :: v1.0.0
        $this->oSESSION_MGR->set_session_param('CRNRSTN_ACCESS_AUTHORIZED', 1);
        $this->oSESSION_MGR->set_session_param('CRNRSTN_AUTHORIZED_IP', $ip);
        $this->oSESSION_MGR->setSessionIp('CRNRSTN_SESSION_IP', $this->hash($ip, 'md5'));

        CRNRSTN :: v2.00.0000
        $tmp_ = $this->add_resource('ip_access_authorized', $this->hash($ip), 'CRNRSTN::SECURITY::IP_AUTHORIZATION', CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);
        $tmp_ = $this->get_resource('ip_access_authorized', 0, 'CRNRSTN::SECURITY::IP_AUTHORIZATION', CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);
        $tmp_ = $this->get_resource_count('ip_access_authorized', 'CRNRSTN::SECURITY::IP_AUTHORIZATION', CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);
        if($this->isset_resource('data_value', 'ip_access_authorized', 'CRNRSTN::SECURITY::IP_AUTHORIZATION', CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION) == true)

        */

        $tmp_access_flag = NULL;

		//
		// IF ACCESS HAS ALREADY BEEN GRANTED TO THIS IP, USE CACHED SESSION AUTHORIZATION.
        if($this->isset_resource('data_value', 'ip_access_authorized', 'CRNRSTN::SECURITY::IP_AUTHORIZATION', CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION) == true){

            //
            // GET COUNT OF VALID IP HASH PROFILES.
            $tmp_ip_cnt = $this->get_resource_count('ip_access_authorized', 'CRNRSTN::SECURITY::IP_AUTHORIZATION', CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);
            for($i = 0; $i < $tmp_ip_cnt; $i++){

                $tmp_ip_hash = $this->get_resource('ip_access_authorized', $i, 'CRNRSTN::SECURITY::IP_AUTHORIZATION', CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);

                //
                // DETERMINE IF AUTHORIZED SESSION IP HASH IS A MATCH TO THE CURRENT IP.
                if($tmp_ip_hash == $this->hash(self::$clientIpAddress)){

                    //
                    // KEY OFF OF THE ENVIRONMENT HASH.
                    self::$accessGranted[$this->return_env_key()] = CRNRSTN_AUTHORIZED_IP;

                    return true;

                }

            }

        }

        if(!isset($tmp_access_flag)){

            if($this->validateIpAddress($env, self::$clientIpAddress)){


            }

        }

        //
        // CRNRSTN :: v1.0.0
        /*
		if(($this->isset_data_key('CRNRSTN_ACCESS_AUTHORIZED')) && ($this->oSESSION_MGR->getSessionIp('SESSION_IP') == $this->hash(self::$clientIpAddress, 'md5'))){

		    return true;

		}else{
			
			//
			// DETERMINE IF SESSION IPADDRESS IS AUTHORIZED TO ACCESS SERVER RESOURCES
			if(self::validateIpAddress($env, self::$clientIpAddress)){

				self::$accessGranted[$env]=true;
				return self::$accessGranted[$env];

			}else{

				self::$accessDenied=true;				
				self::$accessGranted[$env]=false;
				return self::$accessGranted[$env];

			}

		}

        */

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
    function grantAccessWKey(
    	     $env_key_hash, 
    	     $ip)
    {
		# $oCRNRSTN->grantExclusiveAccess('LOCALHOST_PC','127.0.0.1');          // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
		# $oCRNRSTN->grantExclusiveAccess('LOCALHOST_PC','127.*');              // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
		# $oCRNRSTN->grantExclusiveAccess('LOCALHOST_PC','127.0.0.1, 127.*, 128.0.4.50-128.0.4.60, 129.*-130.50.*, 130.51.10.*');       // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
		#
		# IPV4
		# '127.0.0.1', 										# STATIC DEFINE
        # '172.0.0.*', 										# WILDCARD ("*")
        # '173.0.*', 										# WILDCARD ("*") DEEPER
        # FORMAT NOT ALLOWED-->'126.1.0.0/255.255.0.0', 	# RANGE SLASH
		# FORMAT NOT ALLOWED-->'192.168.0.0/24'				# RANGE CIDR USING NET MASKING (SLASH)
		# FORMAT NOT ALLOWED-->'192.168/24'					# RANGE CIDR USING NET MASKING (SLASH) [SHORTENED VERSION]
        # '125.0.0.1-125.0.0.9', 							# RANGE DASH (BROKEN)
		#
		# IPV6
		# '::1'
		# FORMAT NOT ALLOWED-->'::168/24'					# RANGE CIDR USING NET MASKING (SLASH) [SHORTENED VERSION]
		#

		//
		// STORE IPADDRESS(ES) INTO ARRAY. CHECK FOR COMMA DELIMITED LIST.
		if(sizeof(explode(",", $ip)) > 1){
			
			//
			// WE HAVE A DELIMITED LIST TO PROCESS
			self::$tmp_ipexplode = explode(",", $ip);
			
			//
			// PROCESS DELIMITED LIST OF UNVERIFIED IP'S.
			foreach(self::$tmp_ipexplode as $pos => $val){
				
				//
				// ARE WE DEALING WITH AN INDICATION OF RANGE?
				if((strpos($val, '*') !== false) || (strpos($val, '-') !== false)){
					
					//
					// HANDLE DASH NOTATION.
					self::$tmp_rangeexplode = explode("-", $val);
					
					//
					// IS FIRST PARAMETER WITH WILDCARD ("*")?
					if(strpos(self::$tmp_rangeexplode[0], '*') !== false){
						
						//
						// EXPLODE DOT NOTATION TO ARRAY.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                        $this->dressup_ipv4_wildcard();

						self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

					}else{
						
						//
						// NO WILDCARD ("*") IN FIRST PARAMETER. STORE TO TMP VAR.
						self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[0]);
						self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

					}
					
					//
					// SAVE FIRST PARAMETER TO MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$allowedIpRangeMIN_ARRAY[$env_key_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					
					//
					// JUST SOMETHING TO CLEAR OUT NOTICES FOR PASSING AN UNDEFINED TO STRPOS().
					if(!isset(self::$tmp_rangeexplode[1])){

						self::$tmp_rangeexplode[1] = '';

					}
					
					//
					// IS SECOND PARAMETER WITH WILDCARD ("*")?
					if(strpos(self::$tmp_rangeexplode[1], '*') !== false){
						
						//
						// EXPLODE DOT NOTATION TO ARRAY.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[1]);
                        $this->dressup_ipv4_wildcard(true);

						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$allowedIpRangeMAX_ARRAY[$env_key_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$allowedIpCounter++;

					}else{
						
						//
						// NO WILDCARD ("*") IN SECOND PARAMETER. STORE TO TMP VAR.
						if(trim(self::$tmp_rangeexplode[1]) != ''){

							self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[1]);

							//
							// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
							// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
							self::$allowedIpRangeMAX_ARRAY[$env_key_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
							
							self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

							self::$allowedIpCounter++;

						}else{
							
							//
							// ESTABLISH UPPER BOUND FROM UPPER LIMIT OF PROVIDED IP[0] WILDCARD ("*")
							// EXPLODE DOT NOTATION TO ARRAY FOR CONSTRUCTION OF MAXIMUM VALUE.
							self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                            $this->dressup_ipv4_wildcard(true);

							//
							// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
							// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
							self::$allowedIpRangeMAX_ARRAY[$env_key_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
							
							self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

							self::$allowedIpCounter++;

						}

					}
					
				}else{

					//
					// NO INDICATION OF RANGE OR WILDCARD ("*") IN THIS [] COMMA DELIMITED PARAMETER.
					self::$tmp_ipconcat = trim($val);

					//
					// SAVE TO MAX/MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$allowedIpRangeMIN_ARRAY[$env_key_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					self::$allowedIpRangeMAX_ARRAY[$env_key_hash][self::$allowedIpCounter] = self::$allowedIpRangeMIN_ARRAY[$env_key_hash][self::$allowedIpCounter];
					
					//
					// RAW RECORD OF PRE(IPV6 + LONG INT) CONVERTED IP VALUE.
					self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

					self::$allowedIpCounter++;

				}

			}

		}else{
			
			//
			// ARE WE DEALING WITH AN INDICATION OF RANGE?
			if((strpos($ip, '*') !== false) || (strpos($ip, '-') !== false)){
				
				//
				// HANDLE DASH NOTATION.
				self::$tmp_rangeexplode = explode('-', $ip);
				
				//
				// IS FIRST PARAMETER WITH WILDCARD ("*")?
				if(strpos(self::$tmp_rangeexplode[0], '*') !== false){
					
					//
					// EXPLODE DOT NOTATION TO ARRAY.
					self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                    $this->dressup_ipv4_wildcard();

					self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

				}else{
					
					//
					// NO WILDCARD ("*") IN FIRST PARAMETER. STORE TO TMP VAR.
					self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[0]);
					self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

				}
				
				//
				// SAVE FIRST PARAMETER TO MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
				// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
				self::$allowedIpRangeMIN_ARRAY[$env_key_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
				
				//
				// JUST SOMETHING TO CLEAR OUT NOTICES FOR PASSING AN UNDEFINED TO STRPOS().
				if(!isset(self::$tmp_rangeexplode[1])){

					self::$tmp_rangeexplode[1] = '';

				}
				
				//
				// IS SECOND PARAMETER WITH WILDCARD ("*")?
				if(strpos(self::$tmp_rangeexplode[1], '*') !== false){
					
					//
					// EXPLODE DOT NOTATION TO ARRAY.
					self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[1]);
                    $this->dressup_ipv4_wildcard(true);

					//
					// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$allowedIpRangeMAX_ARRAY[$env_key_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					
					self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

					self::$allowedIpCounter++;

				}else{
					
					//
					// NO WILDCARD ("*") IN SECOND PARAMETER. STORE TO TMP VAR.
					if(trim(self::$tmp_rangeexplode[1]) != ''){

						self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[1]);

						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$allowedIpRangeMAX_ARRAY[$env_key_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$allowedIpCounter++;

					}else{
						
						//
						// ESTABLISH UPPER BOUND FROM UPPER LIMIT OF PROVIDED IP[0] WILDCARD ("*")
						// EXPLODE DOT NOTATION TO ARRAY FOR CONSTRUCTION OF MAXIMUM VALUE.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                        $this->dressup_ipv4_wildcard(true);

						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$allowedIpRangeMAX_ARRAY[$env_key_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$allowedIpCounter++;

					}

				}
				
			}else{

				//
				// NO INDICATION OF RANGE OR WILDCARD ("*") IN THIS [] PARAMETER.
				self::$tmp_ipconcat = trim($ip);

				//
				// SAVE TO MAX/MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
				// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY
				self::$allowedIpRangeMIN_ARRAY[$env_key_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
				self::$allowedIpRangeMAX_ARRAY[$env_key_hash][self::$allowedIpCounter] = self::$allowedIpRangeMIN_ARRAY[$env_key_hash][self::$allowedIpCounter];
				
				//
				// RAW RECORD OF PRE(IPV6 + LONG INT) CONVERTED IP VALUE
				self::$allowedIp_ARRAY[$env_key_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

				self::$allowedIpCounter++;

			}

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
    function grantAccess($ip)
    {
		# $oCRNRSTN->grantExclusiveAccess('LOCALHOST_PC','127.0.0.1');              // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
		# $oCRNRSTN->grantExclusiveAccess('LOCALHOST_PC','127.*');                  // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
		# $oCRNRSTN->grantExclusiveAccess('LOCALHOST_PC','127.');                   // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
		# $oCRNRSTN->grantExclusiveAccess('LOCALHOST_PC','127.0.0.1, 127.*, 128.0.4.50-128.0.4.60, 129.*-130.50.*, 130.51.10.*');       // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
		#
		# IPV4
		# '127.0.0.1', 										# STATIC DEFINE
        # '172.0.0.*', 										# WILDCARD ("*")
        # '173.0.*', 										# WILDCARD ("*") DEEPER
        # FORMAT NOT ALLOWED-->'126.1.0.0/255.255.0.0', 	# RANGE SLASH
		# FORMAT NOT ALLOWED-->'192.168.0.0/24'				# RANGE CIDR USING NET MASKING (SLASH)
		# FORMAT NOT ALLOWED-->'192.168/24'					# RANGE CIDR USING NET MASKING (SLASH) [SHORTENED VERSION]
        # '125.0.0.1-125.0.0.9', 							# RANGE DASH
		#
		# IPV6
		# '::1'
		# '::168/24'										# RANGE CIDR USING NET MASKING (SLASH) [SHORTENED VERSION]
		#
		
		//
		// GET HASH OF ENVIRONMENT KEY.
        $tmp_env_hash = $this->return_env_key();

		//
		// STORE IP ADDRESS(ES) INTO ARRAY. CHECK FOR COMMA DELIMITED LIST.
		if(sizeof(explode(',', $ip)) > 1){
			
			//
			// WE HAVE A DELIMITED LIST TO PROCESS.
			self::$tmp_ipexplode = explode(',', $ip);
			
			//
			// PROCESS DELIMITED LIST OF UNVERIFIED IP'S.
			foreach(self::$tmp_ipexplode as $pos => $val){
				
				//
				// ARE WE DEALING WITH AN INDICATION OF RANGE?
				if((strpos($val, '*') !== false) || (strpos($val, '-') !== false)){
					
					//
					// HANDLE DASH NOTATION.
					self::$tmp_rangeexplode = explode('-', $val);
					
					//
					// IS FIRST PARAMETER WITH WILDCARD ("*")?
					if(strpos(self::$tmp_rangeexplode[0], '*') !== false){
						
						//
						// EXPLODE DOT NOTATION TO ARRAY.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                        $this->dressup_ipv4_wildcard();

						self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

					}else{
						
						//
						// NO WILDCARD ("*") IN FIRST PARAMETER. STORE TO TMP VAR.
						self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[0]);
						self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

					}
					
					//
					// SAVE FIRST PARAMETER TO MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$allowedIpRangeMIN_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					
					//
					// JUST SOMETHING TO CLEAR OUT NOTICES FOR PASSING AN UNDEFINED TO STRPOS().
					if(!isset(self::$tmp_rangeexplode[1])){

						self::$tmp_rangeexplode[1] = '';

					}
					
					//
					// IS SECOND PARAMETER WITH WILDCARD ("*")?
					if(strpos(self::$tmp_rangeexplode[1], '*') !== false){
						
						//
						// EXPLODE DOT NOTATION TO ARRAY?
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[1]);
                        $this->dressup_ipv4_wildcard(true);

						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$allowedIpCounter++;

					}else{
						
						//
						// NO WILDCARD ("*") IN SECOND PARAMETER. STORE TO TMP VAR.
						if(trim(self::$tmp_rangeexplode[1]) != ''){

							self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[1]);

							//
							// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
							// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
							self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
							
							self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

							self::$allowedIpCounter++;

						}else{
							
							//
							// ESTABLISH UPPER BOUND FROM UPPER LIMIT OF PROVIDED IP[0] WILDCARD ("*")
							// EXPLODE DOT NOTATION TO ARRAY FOR CONSTRUCTION OF MAXIMUM VALUE.
							self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                            $this->dressup_ipv4_wildcard(true);

							//
							// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
							// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
							self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
							
							self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

							self::$allowedIpCounter++;

						}

					}
					
				}else{

					//
					// NO INDICATION OF RANGE OR WILDCARD ("*") IN THIS [] COMMA DELIMITED PARAMETER.
					self::$tmp_ipconcat = trim($val);

					//
					// SAVE TO MAX/MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$allowedIpRangeMIN_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIpRangeMIN_ARRAY[$tmp_env_hash][self::$allowedIpCounter];
					
					//
					// RAW RECORD OF PRE(IPV6 + LONG INT) CONVERTED IP VALUE.
					self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

					self::$allowedIpCounter++;

				}

			}

		}else{
		
			//
			// ARE WE DEALING WITH AN INDICATION OF RANGE?
			if((strpos($ip, '*') !== false) || (strpos($ip, '-') !== false)){
				
				//
				// HANDLE DASH NOTATION.
				self::$tmp_rangeexplode = explode('-', $ip);
				
				//
				// IS FIRST PARAMETER WITH WILDCARD ("*")?
				if(strpos(self::$tmp_rangeexplode[0], '*') !== false){
					
					//
					// EXPLODE DOT NOTATION TO ARRAY.
					self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
					
					self::$tmp_ipconcat = '';
                    $this->dressup_ipv4_wildcard();
					
					self::$tmp_ipconcat = rtrim(self::$tmp_ipconcat, '.');
					self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

				}else{
					
					//
					// NO WILDCARD ("*") IN FIRST PARAMETER. STORE TO TMP VAR.
					self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[0]);
					self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

				}
				
				//
				// SAVE FIRST PARAMETER TO MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
				// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
				self::$allowedIpRangeMIN_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
				
				//
				// JUST SOMETHING TO CLEAR OUT NOTICES FOR PASSING AN UNDEFINED TO STRPOS().
				if(!isset(self::$tmp_rangeexplode[1])){

					self::$tmp_rangeexplode[1] = '';

				}
				
				//
				// IS SECOND PARAMETER WITH WILDCARD ("*")?
				if(strpos(self::$tmp_rangeexplode[1], '*') !== false){
					
					//
					// EXPLODE DOT NOTATION TO ARRAY.
					self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[1]);
                    $this->dressup_ipv4_wildcard(true);
					
					//
					// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					
					self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

					self::$allowedIpCounter++;

				}else{
					
					//
					// NO WILDCARD ("*") IN SECOND PARAMETER. STORE TO TMP VAR.
					if(trim(self::$tmp_rangeexplode[1]) != ''){

						self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[1]);

						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$allowedIpCounter++;

					}else{
						
						//
						// ESTABLISH UPPER BOUND FROM UPPER LIMIT OF PROVIDED IP[0] WILDCARD ("*")
						// EXPLODE DOT NOTATION TO ARRAY FOR CONSTRUCTION OF MAXIMUM VALUE.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
						$this->dressup_ipv4_wildcard(true);

						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$allowedIpCounter++;

					}

				}
				
			}else{

				//
				// NO INDICATION OF RANGE OR WILDCARD ("*") IN THIS [] PARAMETER.
				self::$tmp_ipconcat = trim($ip);

				//
				// SAVE TO MAX/MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
				// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
				self::$allowedIpRangeMIN_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
				self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIpRangeMIN_ARRAY[$tmp_env_hash][self::$allowedIpCounter];
				
				//
				// RAW RECORD OF PRE(IPV6 + LONG INT) CONVERTED IP VALUE.
				self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

				self::$allowedIpCounter++;

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
    function denyAccessWKey(
    	     $env_key_hash, 
    	     $ip)
    {
		# $oCRNRSTN->denyAccess('LOCALHOST_PC','127.0.0.1');                // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
		# $oCRNRSTN->denyAccess('LOCALHOST_PC','127.*');                    // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
		# $oCRNRSTN->denyAccess('LOCALHOST_PC','127.');                     // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
		# $oCRNRSTN->denyAccess('LOCALHOST_PC','127.0.0.1, FE80::230:80FF:FEF3:4701, 128.0.4.50-128.0.4.60, 129.*-130.50.*, 130.51.*');     // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
		#
		# IPV4
        # FORMAT NOT ALLOWED-->'126.1.0.0/255.255.0.0', 	# RANGE SLASH
		# FORMAT NOT ALLOWED-->'192.168.0.0/24'				# RANGE CIDR USING NET MASKING (SLASH)
		# FORMAT NOT ALLOWED-->'192.168/24'					# RANGE CIDR USING NET MASKING (SLASH) [SHORTENED VERSION]
        # '125.0.0.1-125.0.0.9', 							# RANGE DASH
		#
		# IPV6
		# '::1'
		# FORMAT NOT ALLOWED-->'::168/24'					# RANGE CIDR USING NET MASKING (SLASH)
		#
		
		//
		// STORE IPADDRESS(ES) INTO ARRAY. CHECK FOR COMMA DELIMITED LIST.
		if(sizeof(explode(',', $ip)) > 1){
			
			//
			// WE HAVE A DELIMITED LIST TO PROCESS.
			self::$tmp_ipexplode = explode(',', $ip);
			
			//
			// PROCESS DELIMITED LIST OF UNVERIFIED IP'S.
			foreach(self::$tmp_ipexplode as $pos => $val){
				
				//
				// ARE WE DEALING WITH AN INDICATION OF RANGE.
				if((strpos($val, '*') !== false) || (strpos($val, '-') !== false)){
					
					//
					// HANDLE DASH NOTATION.
					self::$tmp_rangeexplode = explode('-', $val);
					
					//
					// IS FIRST PARAMETER WITH WILDCARD ("*")?
					if(strpos(self::$tmp_rangeexplode[0], '*') !== false){
						
						//
						// EXPLODE DOT NOTATION TO ARRAY.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                        $this->dressup_ipv4_wildcard();

						self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

					}else{
						
						//
						// NO WILDCARD ("*") IN FIRST PARAMETER. STORE TO TMP VAR.
						self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[0]);
						self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

					}
					
					//
					// SAVE FIRST PARAMETER TO MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$deniedIpRangeMIN_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					
					//
					// JUST SOMETHING TO CLEAR OUT NOTICES FOR PASSING AN UNDEFINED TO STRPOS().
					if(!isset(self::$tmp_rangeexplode[1])){

						self::$tmp_rangeexplode[1] = '';

					}
					
					//
					// IS SECOND PARAMETER WITH WILDCARD ("*")?
					if(strpos(self::$tmp_rangeexplode[1], '*') !== false){
						
						//
						// EXPLODE DOT NOTATION TO ARRAY.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[1]);
                        $this->dressup_ipv4_wildcard(true);

						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$deniedIpCounter++;

					}else{
						
						//
						// NO WILDCARD ("*") IN SECOND PARAMETER. STORE TO TMP VAR.
						if(trim(self::$tmp_rangeexplode[1]) != ''){

							self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[1]);

							//
							// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
							// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
							self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
							
							self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

							self::$deniedIpCounter++;

						}else{
							
							//
							// ESTABLISH UPPER BOUND FROM UPPER LIMIT OF PROVIDED IP[0] WILDCARD ("*")
							// EXPLODE DOT NOTATION TO ARRAY FOR CONSTRUCTION OF MAXIMUM VALUE.
							self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                            $this->dressup_ipv4_wildcard(true);

							//
							// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
							// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
							self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
							
							self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

							self::$deniedIpCounter++;

						}

					}
					
				}else{

					//
					// NO INDICATION OF RANGE OR WILDCARD ("*") IN THIS [] COMMA DELIMITED PARAMETER.
					self::$tmp_ipconcat = trim($val);

					//
					// SAVE TO MAX/MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$deniedIpRangeMIN_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIpRangeMIN_ARRAY[$env_key_hash][self::$deniedIpCounter];
					
					//
					// RAW RECORD OF PRE(IPV6 + LONG INT) CONVERTED IP VALUE.
					self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

					self::$deniedIpCounter++;

				}

			}

		}else{
			
			//
			// ARE WE DEALING WITH AN INDICATION OF RANGE?
			if((strpos($ip, '*') !== false) || (strpos($ip, '-') !== false)){
				
				//
				// HANDLE DASH NOTATION.
				self::$tmp_rangeexplode = explode('-', $ip);
				
				//
				// IS FIRST PARAMETER WITH WILDCARD ("*")?
				if(strpos(self::$tmp_rangeexplode[0], '*') !== false){
					
					//
					// EXPLODE DOT NOTATION TO ARRAY.
					self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                    $this->dressup_ipv4_wildcard();

					self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

				}else{
					
					//
					// NO WILDCARD ("*") IN FIRST PARAMETER. STORE TO TMP VAR.
					self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[0]);
					self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

				}
				
				//
				// SAVE FIRST PARAMETER TO MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
				// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
				self::$deniedIpRangeMIN_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
				
				//
				// JUST SOMETHING TO CLEAR OUT NOTICES FOR PASSING AN UNDEFINED TO STRPOS().
				if(!isset(self::$tmp_rangeexplode[1])){

					self::$tmp_rangeexplode[1] = '';

				}
				
				//
				// IS SECOND PARAMETER WITH WILDCARD ("*")?
				if(strpos(self::$tmp_rangeexplode[1], '*') !== false){
					
					//
					// EXPLODE DOT NOTATION TO ARRAY.
					self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[1]);
                    $this->dressup_ipv4_wildcard(true);

					//
					// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY
					self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					
					self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

					self::$deniedIpCounter++;

				}else{
					
					//
					// NO WILDCARD ("*") IN SECOND PARAMETER. STORE TO TMP VAR.
					if(trim(self::$tmp_rangeexplode[1])!=''){

						self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[1]);

						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY
						self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;
						self::$deniedIpCounter++;

					}else{
						
						//
						// ESTABLISH UPPER BOUND FROM UPPER LIMIT OF PROVIDED IP[0] WILDCARD ("*")
						// EXPLODE DOT NOTATION TO ARRAY FOR CONSTRUCTION OF MAXIMUM VALUE
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                        $this->dressup_ipv4_wildcard(true);

						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY
						self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;
						self::$deniedIpCounter++;

					}
				}
				
			}else{

				//
				// NO INDICATION OF RANGE OR WILDCARD ("*") IN THIS [] PARAMETER
				self::$tmp_ipconcat = trim($ip);

				//
				// SAVE TO MAX/MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
				// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY
				self::$deniedIpRangeMIN_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
				self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIpRangeMIN_ARRAY[$env_key_hash][self::$deniedIpCounter];
				
				//
				// RAW RECORD OF PRE(IPV6 + LONG INT) CONVERTED IP VALUE
				self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;
				self::$deniedIpCounter++;

			}
		}
	}

	// PREVIOUSLY denyAccess($env_key, $ip)
    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function denyIPAccess(
    	     $env_key_hash, 
    	     $ip)
    {
		# $oCRNRSTN->denyAccess('LOCALHOST_PC','127.0.0.1');                // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
		# $oCRNRSTN->denyAccess('LOCALHOST_PC','127.*');                    // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
		# $oCRNRSTN->denyAccess('LOCALHOST_PC','127.');                     // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
		# $oCRNRSTN->denyAccess('LOCALHOST_PC','127.0.0.1, FE80::230:80FF:FEF3:4701, 128.0.4.50-128.0.4.60, 129.*-130.50.*, 130.51.*');         // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
		#
		# IPV4
        # FORMAT NOT ALLOWED-->'126.1.0.0/255.255.0.0', 	# RANGE SLASH
		# FORMAT NOT ALLOWED-->'192.168.0.0/24'				# RANGE CIDR USING NET MASKING (SLASH)
		# FORMAT NOT ALLOWED-->'192.168/24'					# RANGE CIDR USING NET MASKING (SLASH) [SHORTENED VERSION]
        # '125.0.0.1-125.0.0.9', 							# RANGE DASH
		#
		# IPV6
		# '::1'
		# FORMAT NOT ALLOWED-->'::168/24'					# RANGE CIDR USING NET MASKING (SLASH)

		
		//
		// STORE IPADDRESS(ES) INTO ARRAY. CHECK FOR COMMA DELIMITED LIST.
		if(sizeof(explode(',', $ip)) > 1){
			
			//
			// WE HAVE A DELIMITED LIST TO PROCESS.
			self::$tmp_ipexplode = explode(',', $ip);
			
			//
			// PROCESS DELIMITED LIST OF UNVERIFIED IP'S.
			foreach(self::$tmp_ipexplode as $pos => $val){
				
				//
				// ARE WE DEALING WITH AN INDICATION OF RANGE?
				if((strpos($val, '*') !== false) || (strpos($val, '-') !== false)){
					
					//
					// HANDLE DASH NOTATION.
					self::$tmp_rangeexplode = explode('-', $val);
					
					//
					// IS FIRST PARAMETER WITH WILDCARD ("*")?
					if(strpos(self::$tmp_rangeexplode[0], '*') !== false){
						
						//
						// EXPLODE DOT NOTATION TO ARRAY.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                        $this->dressup_ipv4_wildcard();

						self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

					}else{
						
						//
						// NO WILDCARD ("*") IN FIRST PARAMETER. STORE TO TMP VAR.
						self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[0]);
						self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

					}
					
					//
					// SAVE FIRST PARAMETER TO MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$deniedIpRangeMIN_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					
					//
					// JUST SOMETHING TO CLEAR OUT NOTICES FOR PASSING AN UNDEFINED TO STRPOS().
					if(!isset(self::$tmp_rangeexplode[1])){

						self::$tmp_rangeexplode[1] = '';

					}
					
					//
					// IS SECOND PARAMETER WITH WILDCARD ("*")?
					if(strpos(self::$tmp_rangeexplode[1], '*') !== false){
						
						//
						// EXPLODE DOT NOTATION TO ARRAY.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[1]);
                        $this->dressup_ipv4_wildcard(true);
						
						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$deniedIpCounter++;

					}else{
						
						//
						// NO WILDCARD ("*") IN SECOND PARAMETER. STORE TO TMP VAR.
						if(trim(self::$tmp_rangeexplode[1]) != ''){

							self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[1]);

							//
							// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
							// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY
							self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
							
							self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

							self::$deniedIpCounter++;

						}else{
							
							//
							// ESTABLISH UPPER BOUND FROM UPPER LIMIT OF PROVIDED IP[0] WILDCARD ("*")
							// EXPLODE DOT NOTATION TO ARRAY FOR CONSTRUCTION OF MAXIMUM VALUE.
							self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                            $this->dressup_ipv4_wildcard(true);

							//
							// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
							// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
							self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
							
							self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

							self::$deniedIpCounter++;

						}

					}
					
				}else{

					//
					// NO INDICATION OF RANGE OR WILDCARD ("*") IN THIS [] COMMA DELIMITED PARAMETER.
					self::$tmp_ipconcat = trim($val);

					//
					// SAVE TO MAX/MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$deniedIpRangeMIN_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIpRangeMIN_ARRAY[$env_key_hash][self::$deniedIpCounter];
					
					//
					// RAW RECORD OF PRE(IPV6 + LONG INT) CONVERTED IP VALUE.
					self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

					self::$deniedIpCounter++;

				}

			}

		}else{
			
			//
			// ARE WE DEALING WITH AN INDICATION OF RANGE?
			if((strpos($ip, '*') !== false) || (strpos($ip, '-') !== false)){
				
				//
				// HANDLE DASH NOTATION.
				self::$tmp_rangeexplode = explode('-', $ip);
				
				//
				// IS FIRST PARAMETER WITH WILDCARD ("*")?
				if(strpos(self::$tmp_rangeexplode[0], '*') !== false){
					
					//
					// EXPLODE DOT NOTATION TO ARRAY.
					self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                    $this->dressup_ipv4_wildcard();

					self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

				}else{
					
					//
					// NO WILDCARD ("*") IN FIRST PARAMETER. STORE TO TMP VAR.
					self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[0]);
					self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

				}
				
				//
				// SAVE FIRST PARAMETER TO MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
				// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
				self::$deniedIpRangeMIN_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
				
				//
				// JUST SOMETHING TO CLEAR OUT NOTICES FOR PASSING AN UNDEFINED TO STRPOS().
				if(!isset(self::$tmp_rangeexplode[1])){

					self::$tmp_rangeexplode[1] = '';

				}
				
				//
				// IS SECOND PARAMETER WITH WILDCARD ("*")?
				if(strpos(self::$tmp_rangeexplode[1], '*') !== false){
					
					//
					// EXPLODE DOT NOTATION TO ARRAY.
					self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[1]);
                    $this->dressup_ipv4_wildcard(true);
					
					//
					// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					
					self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

					self::$deniedIpCounter++;

				}else{
					
					//
					// NO WILDCARD ("*") IN SECOND PARAMETER. STORE TO TMP VAR.
					if(trim(self::$tmp_rangeexplode[1]) != ''){

						self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[1]);

						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$deniedIpCounter++;

					}else{
						
						//
						// ESTABLISH UPPER BOUND FROM UPPER LIMIT OF PROVIDED IP[0] WILDCARD ("*")
						// EXPLODE DOT NOTATION TO ARRAY FOR CONSTRUCTION OF MAXIMUM VALUE.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                        $this->dressup_ipv4_wildcard(true);

						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$deniedIpCounter++;

					}

				}
				
			}else{

				//
				// NO INDICATION OF RANGE OR WILDCARD ("*") IN THIS [] PARAMETER.
				self::$tmp_ipconcat = trim($ip);

				//
				// SAVE TO MAX/MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
				// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
				self::$deniedIpRangeMIN_ARRAY[$env_key_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
				self::$deniedIpRangeMAX_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$deniedIpRangeMIN_ARRAY[$env_key_hash][self::$deniedIpCounter];
				
				//
				// RAW RECORD OF PRE(IPV6 + LONG INT) CONVERTED IP VALUE.
				self::$deniedIp_ARRAY[$env_key_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

				self::$deniedIpCounter++;

			}

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
    function validateIpAddress($ip)
    {

        $tmp_env_key_hash = $this->return_env_key(true);

		//
		// IF NO IP AUTHORIZATION VALUES HAVE BEEN INITIALIZED...NOTHING TO DO HERE.
		if(!isset(self::$deniedIp_ARRAY[$tmp_env_key_hash])){

			self::$deniedIp_ARRAY[$tmp_env_key_hash] = array();

		}
		
		if(!isset(self::$allowedIp_ARRAY[$tmp_env_key_hash])){

			self::$allowedIp_ARRAY[$tmp_env_key_hash] = array();

		}

		//
        // IF NO IP ADDRESS DENIALS AND NO EXCLUSIONS.
		if(sizeof(self::$deniedIp_ARRAY[$tmp_env_key_hash]) == 0 && sizeof(self::$allowedIp_ARRAY[$tmp_env_key_hash]) == 0){

		    //
            // CRNRSTN :: v1.0.0
			//$this->oSESSION_MGR->set_session_param('CRNRSTN_ACCESS_AUTHORIZED', 1);
			//$this->oSESSION_MGR->set_session_param('CRNRSTN_AUTHORIZED_IP', $ip);
			//$this->oSESSION_MGR->setSessionIp('CRNRSTN_SESSION_IP', $this->hash($ip, 'md5'));
            //return true;

            //
            // STORE SUCCESSFUL IP ADDRESS AUTHORIZATION TO SESSION.
            return $this->grant_access_to_ip($ip);

		}
			
		//
		// PROCESS EXCLUSIVE ACCESS.
		if(isset(self::$allowedIp_ARRAY[$tmp_env_key_hash])){

			if(is_array(self::$allowedIp_ARRAY[$tmp_env_key_hash])){

				foreach(self::$allowedIp_ARRAY[$tmp_env_key_hash] as $pos => $val){

					if(self::$allowedIpRangeMIN_ARRAY[$tmp_env_key_hash][$pos] != 0){

						$tmp_endState = 1;

					}
		
					if(($this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$clientIpAddress)), 1) >= self::$allowedIpRangeMIN_ARRAY[$tmp_env_key_hash][$pos]) && ($this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$clientIpAddress)), 1) <= self::$allowedIpRangeMAX_ARRAY[$tmp_env_key_hash][$pos])){

					    //
                        // CRNRSTN :: v1.0.0
						//$this->oSESSION_MGR->set_session_param('CRNRSTN_ACCESS_AUTHORIZED', 1);
						//$this->oSESSION_MGR->set_session_param('CRNRSTN_AUTHORIZED_IP', $ip);
						//$this->oSESSION_MGR->setSessionIp('CRNRSTN_SESSION_IP', $this->hash($ip, 'md5'));
                        //return true;

                        //
                        // STORE SUCCESSFUL IP ADDRESS AUTHORIZATION TO SESSION.
                        return $this->grant_access_to_ip($ip);

					}

				}

			}

		}
		
		//
		// PROCESS DENIALS.
		if(isset(self::$deniedIp_ARRAY[$tmp_env_key_hash])){

			foreach(self::$deniedIp_ARRAY[$tmp_env_key_hash] as $pos => $val){

				if(($this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$clientIpAddress)), 1) >= self::$deniedIpRangeMIN_ARRAY[$tmp_env_key_hash][$pos]) && ($this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$clientIpAddress)), 1) <= self::$deniedIpRangeMAX_ARRAY[$tmp_env_key_hash][$pos])){
					
					return false;

				}

			}

		}
		
		if(!isset($tmp_endState)){

		    $tmp_endState = 0;

		}
		
		//
		// IF EXCLUSIVES EXIST FOR PROCESSING, DEFAULT RESPONSE IS FALSE (tmp_endState INITIALIZED WITH 1).
		switch($tmp_endState){
			case 1:

				return false;

			break;
			default:

				return true;

			break;

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
    private function grant_access_to_ip($ip)
    {

        //
        // Thursday, November 2, 2023 @ 0712 hrs.
        // STORE SUCCESSFUL IP ADDRESS AUTHORIZATION TO SESSION.
        $tmp_result = $this->add_resource('ip_access_authorized', $this->hash($ip), 'CRNRSTN::SECURITY::IP_AUTHORIZATION', CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);

        //$tmp_ip_access_authorized = $this->get_resource('ip_access_authorized', 0, 'CRNRSTN::SECURITY::IP_AUTHORIZATION', CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);


        return true;

        /*
        CRNRSTN :: v1.0.0
        $this->oSESSION_MGR->set_session_param('CRNRSTN_ACCESS_AUTHORIZED', 1);
        $this->oSESSION_MGR->set_session_param('CRNRSTN_AUTHORIZED_IP', $ip);
        $this->oSESSION_MGR->setSessionIp('CRNRSTN_SESSION_IP', $this->hash($ip, 'md5'));

        CRNRSTN :: v2.00.0000
        $tmp_result = $this->add_resource('ip_access_authorized', $this->hash($ip), 'CRNRSTN::SECURITY::IP_AUTHORIZATION', CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);
        $tmp_ = $this->get_resource('ip_access_authorized', 0, 'CRNRSTN::SECURITY::IP_AUTHORIZATION', CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);
        $tmp_ = $this->get_resource_count('ip_access_authorized', 'CRNRSTN::SECURITY::IP_AUTHORIZATION', CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION);
        if($this->isset_resource('data_value', 'ip_access_authorized', 'CRNRSTN::SECURITY::IP_AUTHORIZATION', CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION) == true)

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
    function exclusiveAccess($ip)
    {

		$tmp_env_hash = $this->return_env_key();
		
		if($ip == "*.*"){
			
			return true;

		}
		
		//
		// STORE IPADDRESS(ES) INTO ARRAY. CHECK FOR COMMA DELIMITED LIST.
		if(sizeof(explode(',', $ip)) > 1){
			
			//
			// WE HAVE A DELIMITED LIST TO PROCESS.
			self::$tmp_ipexplode = explode(',', $ip);
			
			//
			// PROCESS DELIMITED LIST OF UNVERIFIED IP'S.
			foreach(self::$tmp_ipexplode as $pos => $val){
				
				//
				// ARE WE DEALING WITH AN INDICATION OF RANGE.
				if((strpos($val, '*') !== false) || (strpos($val, '-') !== false)){
					
					//
					// HANDLE DASH NOTATION.
					self::$tmp_rangeexplode = explode("-", $val);
					
					//
					// IS FIRST PARAMETER WITH WILDCARD ("*")?
					if(strpos(self::$tmp_rangeexplode[0], '*') !== false){
						
						//
						// EXPLODE DOT NOTATION TO ARRAY.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                        $this->dressup_ipv4_wildcard();

						self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

					}else{
						
						//
						// NO WILDCARD ("*") IN FIRST PARAMETER. STORE TO TMP VAR.
						self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[0]);
						self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

					}
					
					//
					// SAVE FIRST PARAMETER TO MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$allowedIpRangeMIN_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					
					//
					// JUST SOMETHING TO CLEAR OUT NOTICES FOR PASSING AN UNDEFINED TO STRPOS().
					if(!isset(self::$tmp_rangeexplode[1])){

						self::$tmp_rangeexplode[1] = '';

					}
					
					//
					// IS SECOND PARAMETER WITH A WILDCARD ("*")?
					if(strpos(self::$tmp_rangeexplode[1], '*') !== false){
						
						//
						// EXPLODE DOT NOTATION TO ARRAY.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[1]);
                        $this->dressup_ipv4_wildcard(true);
						
						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$allowedIpCounter++;

					}else{
						
						//
						// NO WILDCARD ("*") IN SECOND PARAMETER. STORE TO TMP VAR.
						if(trim(self::$tmp_rangeexplode[1]) != ''){

							self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[1]);

							//
							// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
							// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
							self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
							
							self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

							self::$allowedIpCounter++;

						}else{
							
							//
							// ESTABLISH UPPER BOUND FROM UPPER LIMIT OF PROVIDED IP[0] WILDCARD ("*")
							// EXPLODE DOT NOTATION TO ARRAY FOR CONSTRUCTION OF MAXIMUM VALUE.
							self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                            $this->dressup_ipv4_wildcard(true);

							//
							// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
							// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
							self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
							
							self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

							self::$allowedIpCounter++;

						}

					}
					
				}else{

					//
					// NO INDICATION OF RANGE OR WILDCARD ("*") IN THIS [] COMMA DELIMITED PARAMETER.
					self::$tmp_ipconcat = trim($val);

					//
					// SAVE TO MAX/MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$allowedIpRangeMIN_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIpRangeMIN_ARRAY[$tmp_env_hash][self::$allowedIpCounter];
					
					//
					// RAW RECORD OF PRE(IPV6 + LONG INT) CONVERTED IP VALUE.
					self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

					self::$allowedIpCounter++;

				}

			}

		}else{
			
			//
			// ARE WE DEALING WITH AN INDICATION OF RANGE.
			if(strpos($ip, '*') !== false || strpos($ip, '-') !== false){
				
				//
				// HANDLE DASH NOTATION.
				self::$tmp_rangeexplode = explode('-', $ip);
				
				//
				// IS FIRST PARAMETER WITH WILDCARD ("*")?
				if(strpos(self::$tmp_rangeexplode[0], '*') !== false){
					
					//
					// EXPLODE DOT NOTATION TO ARRAY.
					self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                    $this->dressup_ipv4_wildcard();

					self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

				}else{
					
					//
					// NO WILDCARD ("*") IN FIRST PARAMETER. STORE TO TMP VAR.
					self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[0]);
					self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

				}
				
				//
				// SAVE FIRST PARAMETER TO MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
				// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
				self::$allowedIpRangeMIN_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
				
				//
				// JUST SOMETHING TO CLEAR OUT NOTICES FOR PASSING AN UNDEFINED TO STRPOS().
				if(!isset(self::$tmp_rangeexplode[1])){

					self::$tmp_rangeexplode[1] = '';

				}
				
				//
				// IS SECOND PARAMETER WITH WILDCARD ("*")?
				if(strpos(self::$tmp_rangeexplode[1], '*') !== false){
					
					//
					// EXPLODE DOT NOTATION TO ARRAY.
					self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[1]);
					$this->dressup_ipv4_wildcard(true);
					
					//
					// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					
					self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

					self::$allowedIpCounter++;

				}else{
					
					//
					// NO WILDCARD ("*") IN SECOND PARAMETER. STORE TO TMP VAR.
					if(trim(self::$tmp_rangeexplode[1]) != ''){

						self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[1]);

						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$allowedIpCounter++;

					}else{
						
						//
						// ESTABLISH UPPER BOUND FROM UPPER LIMIT OF PROVIDED IP[0] WILDCARD ("*")
						// EXPLODE DOT NOTATION TO ARRAY FOR CONSTRUCTION OF MAXIMUM VALUE.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                        $this->dressup_ipv4_wildcard(true);

						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$allowedIpCounter++;

					}

				}
				
			}else{

				//
				// NO INDICATION OF RANGE OR WILDCARD ("*") IN THIS [] COMMA DELIMITED PARAMETER.
				self::$tmp_ipconcat = trim($ip);

				//
				// SAVE TO MAX/MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
				// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
				self::$allowedIpRangeMIN_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
				self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$allowedIpRangeMIN_ARRAY[$tmp_env_hash][self::$allowedIpCounter];
				
				//
				// RAW RECORD OF PRE(IPV6 + LONG INT) CONVERTED IP VALUE.
				self::$allowedIp_ARRAY[$tmp_env_hash][self::$allowedIpCounter] = self::$tmp_ipconcat;

				self::$allowedIpCounter++;

			}

		}
		
		//
		// PROCESS EXCLUSIVE ACCESS.
		if(isset(self::$allowedIp_ARRAY[$tmp_env_hash])){

			if(is_array(self::$allowedIp_ARRAY[$tmp_env_hash])){

				foreach(self::$allowedIp_ARRAY[$tmp_env_hash] as $pos => $val){

					if(self::$allowedIpRangeMIN_ARRAY[$tmp_env_hash][$pos] != 0){

						$tmp_endState = 1;

					}
		
					if(($this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$clientIpAddress)), 1) >= self::$allowedIpRangeMIN_ARRAY[$tmp_env_hash][$pos]) && ($this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$clientIpAddress)), 1) <= self::$allowedIpRangeMAX_ARRAY[$tmp_env_hash][$pos])){
						
						return true;

					}

				}

			}

		}
				
		//
		// IF WE GET THIS FAR AND NO MATCH.
		return false;
		
	}

	// PREVIOUSLY denyIPAccess($ip)
    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function denyAccess($ip)
    {

        $tmp_env_hash = $this->return_env_key();
		
		if($ip == '*.*'){
			
			return true;

		}
		
		//
		// STORE IPADDRESS(ES) INTO ARRAY. CHECK FOR COMMA DELIMITED LIST.
		if(sizeof(explode(',', $ip)) > 1){

			//
			// WE HAVE A DELIMITED LIST TO PROCESS.
			self::$tmp_ipexplode = explode(',', $ip);
			
			//
			// PROCESS DELIMITED LIST OF UNVERIFIED IP'S.
			foreach(self::$tmp_ipexplode as $pos => $val){
				
				//
				// ARE WE DEALING WITH AN INDICATION OF RANGE?
				if((strpos($val, '*') !== false) || (strpos($val, '-') !== false)){
					
					//
					// HANDLE DASH NOTATION.
					self::$tmp_rangeexplode = explode('-', $val);
					
					//
					// IS FIRST PARAMETER WITH WILDCARD ("*")?
					if(strpos(self::$tmp_rangeexplode[0], '*') !== false){
						
						//
						// EXPLODE DOT NOTATION TO ARRAY.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                        $this->dressup_ipv4_wildcard();

                        self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

					}else{
						
						//
						// NO WILDCARD ("*") IN FIRST PARAMETER. STORE TO TMP VAR.
						self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[0]);
						self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

					}
					
					//
					// SAVE FIRST PARAMETER TO MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$deniedIpRangeMIN_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					
					//
					// JUST SOMETHING TO CLEAR OUT NOTICES FOR PASSING AN UNDEFINED TO STRPOS().
					if(!isset(self::$tmp_rangeexplode[1])){

						self::$tmp_rangeexplode[1] = '';

					}
					
					//
					// IS SECOND PARAMETER WITH WILDCARD ("*").
					if(strpos(self::$tmp_rangeexplode[1], '*') !== false){
						
						//
						// EXPLODE DOT NOTATION TO ARRAY.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[1]);
                        $this->dressup_ipv4_wildcard(true);

						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$deniedIpRangeMAX_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$deniedIpCounter++;

					}else{
						
						//
						// NO WILDCARD ("*") IN SECOND PARAMETER. STORE TO TMP VAR.
						if(trim(self::$tmp_rangeexplode[1]) != ''){

							self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[1]);

							//
							// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
							// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
							self::$deniedIpRangeMAX_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
							
							self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

							self::$deniedIpCounter++;

						}else{
							
							//
							// ESTABLISH UPPER BOUND FROM UPPER LIMIT OF PROVIDED IP[0] WILDCARD ("*")
							// EXPLODE DOT NOTATION TO ARRAY FOR CONSTRUCTION OF MAXIMUM VALUE.
							self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                            $this->dressup_ipv4_wildcard(true);

							//
							// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
							// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
							self::$deniedIpRangeMAX_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
							
							self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

							self::$deniedIpCounter++;

						}

					}
					
				}else{

					//
					// NO INDICATION OF RANGE OR WILDCARD ("*") IN THIS [] COMMA DELIMITED PARAMETER.
					self::$tmp_ipconcat = trim($val);

					//
					// SAVE TO MAX/MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$deniedIpRangeMIN_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					self::$deniedIpRangeMAX_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = self::$deniedIpRangeMIN_ARRAY[$tmp_env_hash][self::$deniedIpCounter];
					
					//
					// RAW RECORD OF PRE(IPV6 + LONG INT) CONVERTED IP VALUE.
					self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

					self::$deniedIpCounter++;

				}

			}

		}else{
			
			//
			// ARE WE DEALING WITH AN INDICATION OF RANGE.
			if((strpos($ip, '*') !== false) || (strpos($ip, '-') !== false)){
				
				//
				// HANDLE DASH NOTATION.
				self::$tmp_rangeexplode = explode('-', $ip);
				
				//
				// IS FIRST PARAMETER WITH WILDCARD ("*")?
				if(strpos(self::$tmp_rangeexplode[0], '*') !== false){
					
					//
					// EXPLODE DOT NOTATION TO ARRAY.
					self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                    $this->dressup_ipv4_wildcard();

					self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

				}else{
					
					//
					// NO WILDCARD ("*") IN FIRST PARAMETER. STORE TO TMP VAR.
					self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[0]);
					self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

				}
				
				//
				// SAVE FIRST PARAMETER TO MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
				// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
				self::$deniedIpRangeMIN_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
				
				//
				// JUST SOMETHING TO CLEAR OUT NOTICES FOR PASSING AN UNDEFINED TO STRPOS().
				if(!isset(self::$tmp_rangeexplode[1])){

					self::$tmp_rangeexplode[1] = '';

				}
				
				//
				// IS SECOND PARAMETER WITH WILDCARD ("*")?
				if(strpos(self::$tmp_rangeexplode[1], '*') !== false){
					
					//
					// EXPLODE DOT NOTATION TO ARRAY
					self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[1]);
                    $this->dressup_ipv4_wildcard(true);
					
					//
					// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
					// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
					self::$deniedIpRangeMAX_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
					
					self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

					self::$deniedIpCounter++;

				}else{
					
					//
					// NO WILDCARD ("*") IN SECOND PARAMETER. STORE TO TMP VAR.
					if(trim(self::$tmp_rangeexplode[1]) != ''){

						self::$tmp_ipconcat = trim(self::$tmp_rangeexplode[1]);
			
						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$deniedIpRangeMAX_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$deniedIpCounter++;

					}else{
						
						//
						// ESTABLISH UPPER BOUND FROM UPPER LIMIT OF PROVIDED IP[0] WILDCARD ("*")
						// EXPLODE DOT NOTATION TO ARRAY FOR CONSTRUCTION OF MAXIMUM VALUE.
						self::$tmp_ipv4wildcard = explode('.', self::$tmp_rangeexplode[0]);
                        $this->dressup_ipv4_wildcard(true);

			
						//
						// SAVE SECOND PARAMETER TO MAX RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
						// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
						self::$deniedIpRangeMAX_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
						
						self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] . '-' . self::$tmp_ipconcat;

						self::$deniedIpCounter++;

					}

				}
				
			}else{
			
				//
				// NO INDICATION OF RANGE OR WILDCARD ("*") IN THIS [] COMMA DELIMITED PARAMETER.
				self::$tmp_ipconcat = trim($ip);
			
				//
				// SAVE TO MAX/MIN RANGE INDICATOR FOR THIS ACCESS AUTHORIZATION PROFILE
				// APPLY IPV6 + LONG INT CONVERSION FOR LOCALLY CACHED RANGE BOUNDARY.
				self::$deniedIpRangeMIN_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = $this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$tmp_ipconcat)), 1);
				self::$deniedIpRangeMAX_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = self::$deniedIpRangeMIN_ARRAY[$tmp_env_hash][self::$deniedIpCounter];
				
				//
				// RAW RECORD OF PRE(IPV6 + LONG INT) CONVERTED IP VALUE.
				self::$deniedIp_ARRAY[$tmp_env_hash][self::$deniedIpCounter] = self::$tmp_ipconcat;

				self::$deniedIpCounter++;

			}

		}
		
		//
		// PROCESS DENIALS.
		if(isset(self::$deniedIp_ARRAY[$tmp_env_hash])){

			foreach(self::$deniedIp_ARRAY[$tmp_env_hash] as $pos => $val){

				if(($this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$clientIpAddress)), 1) >= self::$deniedIpRangeMIN_ARRAY[$tmp_env_hash][$pos]) && ($this->IPv6ToLong($this->ExpandIPv6Notation($this->IPv4To6(self::$clientIpAddress)), 1) <= self::$deniedIpRangeMAX_ARRAY[$tmp_env_hash][$pos])){
					
					return true;

				}

			}

		}
		
		return false;

	}

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function dressup_ipv4_wildcard($upper_bound = false)
    {

        self::$tmp_ipconcat = '';

        for($i = 0; $i < 4; $i++){

            if(!isset(self::$tmp_ipv4wildcard[$i])){

                if(!$upper_bound){

                    self::$tmp_ipv4wildcard[$i] = 0;

                }else{

                    self::$tmp_ipv4wildcard[$i] = 255;

                }

            }else{

                if(trim(self::$tmp_ipv4wildcard[$i]) == '*'){

                    if(!$upper_bound){

                        self::$tmp_ipv4wildcard[$i] = 0;

                    }else{

                        self::$tmp_ipv4wildcard[$i] = 255;

                    }

                }

            }

            self::$tmp_ipconcat .= trim(self::$tmp_ipv4wildcard[$i]) . '.';

        }

        //
        // REMOVE TRAILING "."
        self::$tmp_ipconcat = rtrim(self::$tmp_ipconcat, '.');

        return NULL;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_ClientIPV4()
    {

        return $this->clientIpAddress();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_ClientIPV6()
    {

        $tmp_ipv4 = $this->clientIpAddress();

        //return $this->ExpandIPv6Notation($tmp_ipv4);
        return $this->IPv4To6($tmp_ipv4);

    }

    //
    // Sometimes you will find that your website will not get the correct user IP after
    // adding CDN, then this function will help you
    // SOURCE :: https://www.php.net/reserved.variables.server
    // AUTHOR :: https://www.php.net/manual/en/reserved.variables.server.php#122495
	//public function return_ip(){

        //
        // MOVED TO CRNRSTN :: TO SUPPORT LOWER LEVEL DDO CACHE DATA META REQUEST FOR IP.
        //return $this->return_ip();

    //}
	
	/**
	 * R :: Convert an IPv4 address to IPv6.
	 *
	 * @param string IP Address in dot notation (192.168.1.100)
	 * @return string IPv6 formatted address or false if invalid input
     * @access public
     * @see https://stackoverflow.com/q/444966
  	 * @see http://stackoverflow.com/questions/444966/working-with-ipv6-addresses-in-php
     * @author https://stackoverflow.com/users/51021/matpie
	 *
	 * MODIFIED FROM ORIGINAL
	 *
	 */
    function IPv4To6($Ip)
    {

		static $Mask = '::ffff:';                                  // This tells IPv6 it has an IPv4 address

		#$IPv6 = (strpos($Ip, '::') === 0);			               // THIS WAS BREAKING WITH IPV6 IPS, SO HARDCODED TO TRUE. SEEMS TO WORK FINE.
		$IPv6 = true;
		$IPv4 = (strpos($Ip, '.') > 0);
	
		if(!$IPv4 && !$IPv6) return false;
		if($IPv6 && $IPv4) $Ip = substr($Ip, strrpos($Ip, ':')+1); // Strip IPv4 Compatibility notation
		elseif(!$IPv4) return $Ip;                                 // Seems to be IPv6 already?
		$Ip = array_pad(explode('.', $Ip), 4, 0);
		if(count($Ip) > 4) return false;
		for ($i = 0; $i < 4; $i++) if($Ip[$i] > 255) return false;
		
		if($Ip[0] == ''){

		    $Ip[0] = 0;

		}
		
		$Part7 = base_convert(($Ip[0] * 256) + $Ip[1], 10, 16);
		$Part8 = base_convert(($Ip[2] * 256) + $Ip[3], 10, 16);

		return $Mask . $Part7 . ':' . $Part8;

	}

    /**
     * R :: Replace '::' with appropriate number of ':0'
     *
     * @param
     * @return
     * @access public
	 * @see http://stackoverflow.com/questions/444966/working-with-ipv6-addresses-in-php
     * @see https://stackoverflow.com/q/444966
	 * @author https://stackoverflow.com/users/51021/matpie
     *
     */
    function ExpandIPv6Notation($Ip)
    {

		if(strpos($Ip, '::') !== false){

            $Ip = str_replace('::', str_repeat(':0', 8 - substr_count($Ip, ':')) . ':', $Ip);

        }

		if(strpos($Ip, ':') === 0){

            $Ip = '0' . $Ip;

        }

		return $Ip;

	}
	
	/**
	 * R :: Convert IPv6 address to an integer.
	 *
	 * Optionally split in to two parts.
	 * 
     * @param
     * @param
     * @return
     * @access public
	 * @see https://stackoverflow.com/questions/444966/working-with-ipv6-addresses-in-php
     * @see https://stackoverflow.com/q/444966
	 * @author https://stackoverflow.com/users/51021/matpie
	 *
	 * MODIFIED FROM ORIGINAL
	 *
	 */
    function IPv6ToLong(
    	     $Ip, 
    	     $DatabaseParts = 2)
    {

	    //
        // INITIALIZATION.
		$Ip = $this->ExpandIPv6Notation($Ip);
		$Parts = explode(':', $Ip);
		$Ip = array('', '');
		
		for($i = 0; $i < 4; $i++){
			
			if(!isset($Parts[$i])){

				$Parts[$i] = 0;

			}
			
			$Ip[0] .= str_pad(base_convert($Parts[$i], 16, 2), 16, 0, STR_PAD_LEFT);

		}
		
		for($i = 4; $i < 8; $i++){

			if(!isset($Parts[$i])){

				$Parts[$i]=0;

			}
			
			$Ip[1] .= str_pad(base_convert($Parts[$i], 16, 2), 16, 0, STR_PAD_LEFT);
		
		}
	
		if($DatabaseParts == 2){

            return array(base_convert($Ip[0], 2, 10), base_convert($Ip[1], 2, 10));

        }else{

		    return base_convert($Ip[0], 2, 10) + base_convert($Ip[1], 2, 10);

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