<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 2018-11-13
 * Time: 8:05 PM
 */

namespace App\Pathfinder\General;

use App\Common\Enum;

class AbilityScore extends Enum
{
    const STRENGTH = 'STR';
    const DEXTERITY = 'DEX';
    const CONSTITUTION = 'CON';
    const INTELLIGENCE = 'INT';
    const WISDOM = 'WIS';
    const CHARISMA = 'CHA';
}