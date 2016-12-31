<?php
namespace InfinityGamers\Life\Projectile;
use pocketmine\entity\Egg;
use pocketmine\entity\Entity;
use pocketmine\level\format\FullChunk;
use pocketmine\nbt\tag\CompoundTag;
class Bullet extends Egg{
    protected $damage = 0;

    public function __construct(FullChunk $chunk, CompoundTag $nbt, Entity $shootingEntity = null){
        parent::__construct($chunk, $nbt, $shootingEntity);
    }

    public function setDamage($int){
        $this->damage = $int;
    }
}