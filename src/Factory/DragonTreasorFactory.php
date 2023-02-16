<?php

namespace App\Factory;

use App\Entity\DragonTreasor;
use App\Repository\DragonTreasorRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<DragonTreasor>
 *
 * @method        DragonTreasor|Proxy create(array|callable $attributes = [])
 * @method static DragonTreasor|Proxy createOne(array $attributes = [])
 * @method static DragonTreasor|Proxy find(object|array|mixed $criteria)
 * @method static DragonTreasor|Proxy findOrCreate(array $attributes)
 * @method static DragonTreasor|Proxy first(string $sortedField = 'id')
 * @method static DragonTreasor|Proxy last(string $sortedField = 'id')
 * @method static DragonTreasor|Proxy random(array $attributes = [])
 * @method static DragonTreasor|Proxy randomOrCreate(array $attributes = [])
 * @method static DragonTreasorRepository|RepositoryProxy repository()
 * @method static DragonTreasor[]|Proxy[] all()
 * @method static DragonTreasor[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static DragonTreasor[]|Proxy[] createSequence(array|callable $sequence)
 * @method static DragonTreasor[]|Proxy[] findBy(array $attributes)
 * @method static DragonTreasor[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static DragonTreasor[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class DragonTreasorFactory extends ModelFactory
{

     private const TREASURE_NAMES = ['pile of gold coins', 'diamond-encrusted throne', 'rare magic staff', 'enchanted sword', 'set of intricately crafted goblets', 'collection of ancient tomes', 'hoard of shiny gemstones', 'chest filled with priceless works of art', 'giant pearl', 'crown made of pure platinum', 'giant egg (possibly a dragon egg?)', 'set of ornate armor', 'set of golden utensils', 'statue carved from a single block of marble', 'collection of rare, antique weapons', 'box of rare, exotic chocolates', 'set of ornate jewelry', 'set of rare, antique books', 'giant ball of yarn', 'life-sized statue of the dragon itself', 'collection of old, used toothbrushes', 'box of mismatched socks', 'set of outdated electronics (such as CRT TVs or floppy disks)', 'giant jar of pickles', 'collection of novelty mugs with silly sayings', 'pile of old board games', 'giant slinky', 'collection of rare, exotic hats'];

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'createdAt' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'coolFactor' => self::faker()->numberBetween(1, 10),
            'description' => self::faker()->paragraph(),
            'isPublish' => self::faker()->boolean(),
            'name' => self::faker()->randomElement(self::TREASURE_NAMES),
            'value' => self::faker()->randomNumber(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(DragonTreasor $dragonTreasor): void {})
        ;
    }

    protected static function getClass(): string
    {
        return DragonTreasor::class;
    }
}
