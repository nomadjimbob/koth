<?php
/*
*    /$$   /$$  /$$$$$$  /$$$$$$$$ /$$   /$$
*   | $$  /$$/ /$$__  $$|__  $$__/| $$  | $$
*   | $$ /$$/ | $$  \ $$   | $$   | $$  | $$
*   | $$$$$/  | $$  | $$   | $$   | $$$$$$$$
*   | $$  $$  | $$  | $$   | $$   | $$__  $$
*   | $$\  $$ | $$  | $$   | $$   | $$  | $$
*   | $$ \  $$|  $$$$$$/   | $$   | $$  | $$
*   |__/  \__/ \______/    |__/   |__/  |__/
*
*   Copyright (C) 2019 Jackthehack21 (Jack Honour/Jackthehaxk21/JaxkDev)
*
*   This program is free software: you can redistribute it and/or modify
*   it under the terms of the GNU General Public License as published by
*   the Free Software Foundation, either version 3 of the License, or
*   any later version.
*
*   This program is distributed in the hope that it will be useful,
*   but WITHOUT ANY WARRANTY; without even the implied warranty of
*   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*   GNU General Public License for more details.
*
*   You should have received a copy of the GNU General Public License
*   along with this program.  If not, see <https://www.gnu.org/licenses/>.
*
*   Twitter :: @JaxkDev
*   Discord :: Jackthehaxk21#8860
*   Email   :: gangnam253@gmail.com
*/

declare(strict_types=1);
namespace Jackthehack21\KOTH;

use pocketmine\level\Level;
use pocketmine\math\Vector3;
use pocketmine\level\particle\FloatingTextParticle;

class FloatingText extends FloatingTextParticle {

    private $plugin;
    private $level;
    private $position;

    public function __construct(Main $plugin, Level $level, Vector3 $position, string $text, string $title = "")
    {
        parent::__construct($position, $text, $title);
        //text and title done in parent.
        $this->plugin = $plugin;
        $this->level = $level;
        $this->position = $position;
    }

    /**
     * @param string $text
     */
    public function setText(string $text) : void{
        $this->text = $text;
        $this->update();
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title) : void{
        $this->title = $title;
        $this->update();
    }

    /**
     * @param bool $value
     */
    public function setInvisible(bool $value = true) : void{
        $this->invisible = $value;
        $this->update();
    }

    public function update() : void{
        $this->level->addParticle($this);
    }

}