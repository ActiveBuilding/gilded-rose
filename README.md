# GildedRose Kata - PHP

A subtree split of the PHP version of
[emilybache/GildedRose-Refactoring-Kata](https://github.com/emilybache/GildedRose-Refactoring-Kata/).

## Problem

Hi and welcome to team Gilded Rose. As you know, we are a small inn with a
prime location in a prominent city ran by a friendly innkeeper named Allison.
We also buy and sell only the finest goods. Unfortunately, our goods are
constantly degrading in quality as they approach their sell by date. We have a
system in place that updates our inventory for us. It was developed by a
no-nonsense type named Leeroy, who has moved on to new adventures. Your task is
to add the new feature to our system so that we can begin selling a new
category of items. First an introduction to our system:

* All items have a `SellIn` value which denotes the number of days we have to
  sell the item
* All items have a `Quality` value which denotes how valuable the item is
* At the end of each day our system lowers both values for every item

Pretty simple, right? Well this is where it gets interesting:

* Once the sell by date has passed, Quality degrades twice as fast
* The Quality of an item is never negative
* "Aged Brie" actually increases in Quality the older it gets
* The Quality of an item is never more than 50
* "Sulfuras", being a legendary item, never has to be sold or decreases in
  Quality
* "Backstage passes", like aged brie, increases in Quality as its `SellIn` value
  approaches:
    * Quality increases by 2 when there are 10 days or less and by 3 when there are
      5 days or less but
    * Quality drops to 0 after the concert

We have recently signed a supplier of conjured items. This requires an update
to our system:

* "Conjured" items degrade in Quality twice as fast as normal items

Just for clarification, an item can never have its Quality increase above 50,
however "Sulfuras" is a legendary item and as such its Quality is 80 and it
never alters.

Refactor the code however you like, Leeroy left us some time ago and the system
is showing its age as we add new features.

## Installation

The kata uses:

* [PHP 7.3 or 7.4 or 8.0+](https://www.php.net/downloads.php)
* [Composer](https://getcomposer.org)
* [Git](https://git-scm.com/downloads)

```sh
git clone git@github.com:michaeljoelphillips/gilded-rose.git
cd gilded-rose
composer install
```

## Dependencies

The project uses composer to install:

- [PHPUnit](https://phpunit.de/)
- [ApprovalTests.PHP](https://github.com/approvals/ApprovalTests.php)
- [PHPStan](https://github.com/phpstan/phpstan)
- [Easy Coding Standard (ECS)](https://github.com/symplify/easy-coding-standard)
- [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer/wiki)

## Testing

PHPUnit is configured for testing, a composer script has been provided for easy
use.

## Code Standard

Easy Coding Standard (ECS) is configured for style and code standards,
**PSR-12** is used. The current code is not up to standard!

## Static Analysis

PHPStan is included with this project to run static analysis checks.

**Happy coding**!
