<?php
/**
 * PHPMailer Exception class.
 * PHP Version 5.5.
 *
 * @see       https://github.com/PHPMailer/PHPMailer/ The PHPMailer GitHub project
 *
 * @author    Marcus Bointon (Synchro/coolbru) <phpmailer@synchromedia.co.uk>
 * @author    Jim Jagielski (jimjag) <jimjag@gmail.com>
 * @author    Andy Prevost (codeworxtech) <codeworxtech@users.sourceforge.net>
 * @author    Brent R. Matzelle (original founder)
 * @copyright 2012 - 2017 Marcus Bointon
 * @copyright 2010 - 2012 Jim Jagielski
 * @copyright 2004 - 2009 Andy Prevost
 * @license   http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 * @note      This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Moved PHPMailer from 
 *       namespace PHPMailer\crnrstn_PHPMailer;
 *       into  
 *       namespace CRNRSTN;
 *       5 :: Saturday, April 18, 2026 @ 1443 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Modified the PHPMailer namespace 
 *       from \CRNRSTN to 
 *       \CRNRSTN\crnrstn_PHPMailer. 
 *       5 :: Tuesday, June 16, 2026 @ 0135 hrs.
 *
 */

namespace CRNRSTN\crnrstn_PHPMailer;

/**
 * PHPMailer exception handler.
 *
 * @author Marcus Bointon <phpmailer@synchromedia.co.uk>
 */
class crnrstn_Exception extends \Exception
{
    /**
     * Prettify error message output.
     *
     * @return string
     */
    public function errorMessage()
    {
        return '<strong>' . htmlspecialchars($this->getMessage()) . "</strong><br />\n";
    }
}
