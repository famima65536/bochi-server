<?php
/**
 * Created by PhpStorm.
 * User: tokai
 * Date: 2018/03/17
 * Time: 10:07
 */

namespace bochi;


use pocketmine\plugin\PluginBase;

class BochiCore extends PluginBase
{

    public function onEnable()
    {
        $this->getLogger()->info("Hello, Bochi core Alpha.");
    }

}