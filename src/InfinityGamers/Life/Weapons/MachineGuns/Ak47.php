<?php
namespace InfinityGamers\Life\Weapons\MachineGuns;
use InfinityGamers\Life\Projectile\Bullet;
use InfinityGamers\Life\Weapons\Weapon;
use InfinityGamers\Life\Weapons\WeaponIdList;
use pocketmine\entity\Entity;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\Player;
class Ak47 extends Weapon{

    public $ammo = 30;

    public function __construct($meta = 0, $count = 1){
        parent::__construct(WeaponIdList::AK_47, $meta, $count, "Ak-47");
    }

    /**
     * @param Player $player
     * @return void
     */
    public function trigger(Player $player){
        $nbt = new CompoundTag("", []);//todo
        $entity = Entity::createEntity("Bullet", $player->level->getChunk($player->getFloorX() >> 4, $player->getFloorZ() >> 4), $nbt);
        if($entity instanceof Bullet) {
            $entity->setDamage($this->getBulletDamage());
            $entity->spawnToAll();
        }
    }

    public function getFireRate(){
        return 10;
    }

    public function getBulletDamage(){
        return 9;
    }

    public function getBulletPenetration(){
        return 7;
    }
}