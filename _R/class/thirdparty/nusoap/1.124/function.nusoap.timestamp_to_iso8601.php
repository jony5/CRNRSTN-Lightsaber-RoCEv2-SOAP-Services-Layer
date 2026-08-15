<?php

/*
$Id: nusoap.php,v 1.124 2010/04/26 20:15:08 snichol Exp $

NuSOAP - Web Services Toolkit for PHP

Copyright (c) 2002 NuSphere Corporation

This library is free software; you can redistribute it and/or
modify it under the terms of the GNU Lesser General Public
License as published by the Free Software Foundation; either
version 2.1 of the License, or (at your option) any later version.

This library is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public
License along with this library; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

The NuSOAP project home is:
http://sourceforge.net/projects/nusoap/

The primary support for NuSOAP is the Help forum on the project home page.

If you have any questions or comments, please email:

Dietrich Ayala
dietrich@ganx4.com
http://dietrich.ganx4.com/nusoap

NuSphere Corporation
http://www.nusphere.com

*/

/*
 *  Some of the standards implemented in whole or part by NuSOAP:
 *
 *  SOAP 1.1 (http://www.w3.org/TR/2000/NOTE-SOAP-20000508/)
 *  WSDL 1.1 (http://www.w3.org/TR/2001/NOTE-wsdl-20010315)
 *  SOAP Messages With Attachments (http://www.w3.org/TR/SOAP-attachments)
 *  XML 1.0 (http://www.w3.org/TR/2006/REC-xml-20060816/)
 *  Namespaces in XML 1.0 (http://www.w3.org/TR/2006/REC-xml-names-20060816/)
 *  XML Schema 1.0 (http://www.w3.org/TR/xmlschema-0/)
 *  RFC 2045 Multipurpose Internet Mail Extensions (MIME) Part One: Format of Internet Message Bodies
 *  RFC 2068 Hypertext Transfer Protocol -- HTTP/1.1
 *  RFC 2617 HTTP Authentication: Basic and Digest Access Authentication
 */

// XML Schema Datatype Helper Functions

//xsd:dateTime helpers

/**
 * convert unix timestamp to ISO 8601 compliant date string
 *
 * @param    int $timestamp Unix time stamp
 * @param    boolean $utc Whether the time stamp is UTC or local
 * @return   false|string ISO 8601 date string or false
 * @access   public
 */
function timestamp_to_iso8601($timestamp, $utc = true)
{
    $datestr = date('Y-m-d\TH:i:sO', $timestamp);
    $pos = strrpos($datestr, "+");
    if ($pos === false) {
        $pos = strrpos($datestr, "-");
    }
    if ($pos !== false) {
        if (strlen($datestr) == $pos + 5) {
            $datestr = substr($datestr, 0, $pos + 3) . ':' . substr($datestr, -2);
        }
    }
    if ($utc) {
        $pattern = '/' .
            '([0-9]{4})-' .    // centuries & years CCYY-
            '([0-9]{2})-' .    // months MM-
            '([0-9]{2})' .    // days DD
            'T' .            // separator T
            '([0-9]{2}):' .    // hours hh:
            '([0-9]{2}):' .    // minutes mm:
            '([0-9]{2})(\.[0-9]*)?' . // seconds ss.ss...
            '(Z|[+\-][0-9]{2}:?[0-9]{2})?' . // Z to indicate UTC, -/+HH:MM:SS.SS... for local tz's
            '/';

        if (preg_match($pattern, $datestr, $regs)) {
            return sprintf('%04d-%02d-%02dT%02d:%02d:%02dZ', $regs[1], $regs[2], $regs[3], $regs[4], $regs[5], $regs[6]);
        }
        return false;
    } else {
        return $datestr;
    }
}