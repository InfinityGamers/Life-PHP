<?php
namespace InfinityGamers\Life\Weapons;
use pocketmine\item\Item;
use pocketmine\Player;
abstract class Weapon extends Item {

    const TYPE_UNDEFINED = -1;
    const TYPE_HEAVY_WEAPON = 0;
    const TYPE_MACHINE_GUN = 1;
    const TYPE_PISTOL = 2;
    const TYPE_RIFLE = 3;
    const TYPE_ROCKET_LAUNCHER = 4;
    const TYPE_SHOTGUN = 5;
    const TYPE_SUBMACHINE_GUN = 6;

    public $ammo = 0;

    public function __construct($id, $meta = 0, $count = 1, $name = "Unknown"){
        parent::__construct($id, $meta, $count, $name);
    }

    /**
     * @param Player $player
     * @return void
     */
    abstract public function trigger(Player $player);

    public function getType(){
        return self::TYPE_UNDEFINED;
    }

    /**
     * HOW MUCH BULLETS IT CAN HOLD AT ONCE UNTIL IT RUNS OUT
     */
    public function bulletCapacity(){
        return 0;
    }

    /**
     * BULLETS SHOT PER SECOND
     */
    public function getFireRate(){
        return 0;
    }

    /**
     * DAMAGE IN MINECRAFT HEARTS
     * MAX DAMAGE IS 20
     */
    public function getBulletDamage(){
        return 0;
    }

    /**
     * HOW MUCH A BULLET PENETRATES A PLAYER.
     * THE MORE PENETRATION THE FASTER THE PLAYER DIES.
     * MAX PENETRATION IS 10
     */
    public function getBulletPenetration(){
        return 0;
    }

    public function getMaxStackSize() : \int{
        return 1;
    }

    public function getMaxDurability(){
    }

    public function isHeavyWeapon(){
        return false;
    }

    public function isMachineGun(){
        return false;
    }

    public function isPistol(){
        return false;
    }

    public function isRifle(){
        return false;
    }

    public function isRocketLauncher(){
        return false;
    }

    public function isShotGun(){
        return false;
    }

    public function isSubmachineGun(){
        return false;
    }
}