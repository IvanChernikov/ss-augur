<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 2018-11-13
 * Time: 8:00 PM
 */

namespace App\Pathfinder\General;

use App\Common\Enum;

class Alignment extends Enum
{
    const LAWFUL_GOOD = 'LG';
    const NEUTRAL_GOOD = 'NG';
    const CHAOTIC_GOOD = 'CG';
    const LAWFUL_NEUTRAL = 'LN';
    const TRUE_NEUTRAL = 'N';
    const CHAOTIC_NEUTRAL = 'CN';
    const LAWFUL_EVIL = 'LE';
    const NEUTRAL_EVIL = 'NE';
    const CHAOTIC_EVIL = 'CE';
}