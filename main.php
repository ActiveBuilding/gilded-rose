<?php

use GildedRose\GildedRose;
use GildedRose\Item;

require_once 'vendor/autoload.php';

$shop = new GildedRose(
    [
        new Item('+5 Dexterity Vest', 10, 20),
        new Item('Aged Brie', 2, 0),
        new Item('Elixir of the Mongoose', 5, 7),
        new Item('Sulfuras, Hand of Ragnaros', 0, 80),
        new Item('Sulfuras, Hand of Ragnaros', -1, 80),
        new Item('Backstage passes to a TAFKAL80ETC concert', 15, 20),
        new Item('Backstage passes to a TAFKAL80ETC concert', 10, 49),
        new Item('Backstage passes to a TAFKAL80ETC concert', 5, 49),
        new Item('Conjured Mana Cake', 3, 6),
    ]
);

for ($day = 0; $day <= 30; $day++) {
    printf("-------- day %d --------\n", $day);
    printf("name, sellIn, quality\n");

    foreach ($shop->getItems() as $item) {
        print($item . PHP_EOL);
    }

    print(PHP_EOL);

    $shop->updateQuality();
}
