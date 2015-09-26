<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         3.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Cake\View\Helper;

use Cake\View\Helper;

/**
 * FlashHelper class to render flash messages.
 *
 * After setting messages in your controllers with FlashComponent, you can use
 * this class to output your flash messages in your views.
 */
class FunctionsHelper extends Helper
{

    /**
     * convert en date in french letter date (abrégé)
     * 
     * @return string;
     */
    public function date_fr_in_letter($date_en) {

        $date = DateTime::createFromFormat('Y-m-d', $date_en);
        if ($date === false)
        {
            $date = DateTime::createFromFormat('d/m/Y', $date_en);
            if ($date === false)
            {
                $date_fr_in_letter = strftime('%a %d %b %Y', $date_en);
            }
            else
                $date_fr_in_letter = strftime('%a %d %b %Y', strtotime($date_en));
        }
        else
            $date_fr_in_letter = strftime('%a %d %b %Y', strtotime($date_en));

        return utf8_encode($date_fr_in_letter);
    }

    /**
     * convert en date in french letter date (en entier)
     * 
     * @return string;
     */
    public function date_fr_in_letter_all($date_en) {

        $date = DateTime::createFromFormat('Y-m-d', $date_en);
        if ($date === false)
        {
            $date = DateTime::createFromFormat('d/m/Y', $date_en);
            if ($date === false)
            {
                $date_fr_in_letter = strftime('%A %d %B %Y', $date_en);
            }
            else
                $date_fr_in_letter = strftime('%A %d %B %Y', strtotime($date_en));
        }
        else
            $date_fr_in_letter = strftime('%A %d %B %Y', strtotime($date_en));

        return utf8_encode($date_fr_in_letter);
    }

    /**
     * convert date french to Mysql
     * 
     * @return string;
     */
    public function date_fr_en($date_fr) {
            
        // -- tester la forme de la chaine
        if (substr_count($date_fr, '-') == '2') {
                    
            // -- extraire les 3 chanps
            $date_all = explode("-", $date_fr);
                    
            // -- formater la chaine de caractère
            $date_en = sprintf ("%04d-%02d-%02d", $date_all[2], $date_all[1], $date_all[0]);
            
        }

        // -- tester la forme de la chaine
        if (substr_count($date_fr, '/') == '2') {
                    
            // -- extraire les 3 chanps
            $date_all = explode("/", $date_fr);
                    
            // -- formater la chaine de caractère
            $date_en = sprintf ("%04d-%02d-%02d", $date_all[2], $date_all[1], $date_all[0]);
            
        }

        return $date_en;

    }

    /**
     * convert date Mysql to French
     * 
     * @return string;
     */
    public function date_en_fr($date_en) {

        // -- tester la forme de la chaine
        if (substr_count($date_en, '-') == '2') {

            // -- extraire les 3 chanps
            $date_all = explode("-", $date_en);

            // -- formater la chaine de caract�re
            $date_fr = sprintf ("%02d/%02d/%04d", $date_all[2], $date_all[1], $date_all[0]);

        }
        return $date_fr;

    }

}
