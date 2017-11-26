<?php
/*
 * BanglaDate - English to Bangla date converter
 * @package BanglaDate
 * @author Tareq Hasan
 * @link http://tareq.weDevs.com
 * @copyright 2010 Tareq Hasan
 *
 *
 * Example of Use:
 *
 * Initialize/set the time:
 * $bn = new BanglaDate(strtotime('18-03-1988'), 0);
 * or
 * $bn = new BanglaDate(time(), 6);
 * or
 * $bn = new BanglaDate(time());
 *
 * Get Output
 * $output = $bn->get_date();
 * print_r($output);
 */
#**********************************************************************
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# ( at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# ERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Online: http://www.gnu.org/licenses/gpl.txt
# *****************************************************************

    $timestamp=""; //timestamp as input
    $morning=""; //when the date will change?
    $engHour=""; //Current hour of English Date
    $engDate=""; //Current date of English Date
    $engMonth=""; //Current month of English Date
    $engYear=""; //Current year of English Date
    $bangDate=""; //generated Bangla Date
    $bangMonth=""; //generated Bangla Month
    $bangYear=""; //generated Bangla   Year
    $bn_months = array("পৌষ", "মাঘ", "ফাল্গুন", "চৈত্র", "বৈশাখ", "জ্যৈষ্ঠ", "আষাঢ়", "শ্রাবণ", "ভাদ্র", "আশ্বিন", "কার্তিক", "অগ্রহায়ণ");
    $bn_month_dates = array(30,30,30,30,31,31,31,31,31,30,30,30);
	$bn_month_middate = array(13,12,14,13,14,14,15,15,15,15,14,14);	
	$lipyearindex = 3;
    /*
     * Set the initial date and time
     *
     * @param   int timestamp for any date
     * @param   int, set the time when you want to change the date. if 0, then date will change instantly.
     *          If it's 6, date will change at 6'0 clock at the morning. Default is 6'0 clock at the morning
     */
    /*function __construct( $timestamp, $hour = 6 ) {
        $this->BanglaDate( $timestamp, $hour );
    }
    /*
     * PHP4 Legacy constructor
     */
    /**
     * @param int $timestamp
     * @param type $hour
     */
    function BanglaDate( $timestamp, $hour = 6 ) {
        $engDate = date( 'd', $timestamp );
        $engMonth = date( 'm', $timestamp );
        $engYear = date( 'Y', $timestamp );
        $morning = $hour;
        $engHour = date( 'G', $timestamp );
        //calculate the bangla date
        calculate_date();
        //now call calculate_year for setting the bangla year
        calculate_year();
        //convert english numbers to Bangla
        convert();
    }

    $tt = time();
    BanglaDate( $tt );

    function set_time( $timestamp, $hour = 6 ) {
        BanglaDate( $timestamp, $hour );
    }
    set_time( $tt );
    /**
     * Calculate the Bangla date and month
     *
     * @access private
     */
    function calculate_date() {		
		$bangDate = $engDate - $bn_month_middate[$engMonth - 1];
		if ($engHour < $morning) 
			$bangDate -= 1;
        
		if (($engDate <= $bn_month_middate[$engMonth - 1]) || ($engDate == $bn_month_middate[$engMonth - 1] + 1 && $engHour < $morning) ) {
			$bangDate += $this->bn_month_dates[$engMonth - 1];
			if (is_leapyear() && $lipyearindex == $engMonth) 
				$bangDate += 1;
			$bangMonth = $bn_months[$engMonth - 1];
		}
		else{
			$bangMonth = $bn_months[($engMonth)%12];		
		}
    }
    calculate_date();
    /*
     * Checks, if the date is leapyear or not
     *
     * @return boolen. True if it's leap year or returns false
     */
    function is_leapyear() {
        if ( $engYear % 400 == 0 || ($engYear % 100 != 0 && $engYear % 4 == 0) )
            return true;
        else
            return false;
    }
    is_leapyear();
    /*
     * Calculate the Bangla Year
     */
    function calculate_year() {
        $bangYear = $engYear - 593;
        if (($engMonth < 4) || (($engMonth == 4) && (($engDate < 14) || ($engDate == 14 && $engHour < $morning))))
            $bangYear -= 1;
    }
    calculate_year();
    /*
     * Convert the English character to Bangla
     *
     * @param int any integer number
     * @return string as converted number to bangla
     */
    function bangla_number( $int ) {
        $engNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
        $bangNumber = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০');
        $converted = str_replace( $engNumber, $bangNumber, $int );
        return $converted;
    }
    /*
     * Calls the converter to convert numbers to equivalent Bangla number
     */
    function convert() {
        $bangDate = bangla_number( $bangDate );
        $bangYear = bangla_number( $bangYear );
    }
    /*
     * Returns the calculated Bangla Date
     *
     * @return array of converted Bangla Date
     */
    function get_date() {
        return array($bangDate, $bangMonth, $bangYear);
    }



//Applying
  //$bn = new BanglaDate(time());
 /** or
 * $bn = new BanglaDate(time(), 6);
 * or
 * $bn = new BanglaDate(time());
 **/
  //Get Output
  $output = get_date();
  print_r($output);