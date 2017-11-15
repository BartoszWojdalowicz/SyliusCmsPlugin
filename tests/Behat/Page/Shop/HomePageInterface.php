<?php

/**
 * This file was created by the developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on kontakt@bitbag.pl.
 */

declare(strict_types=1);


namespace Tests\BitBag\CmsPlugin\Behat\Page\Shop;

use Sylius\Behat\Page\Shop\HomePageInterface as BaseHomePageInterface;

/**
 * @author Mikołaj Król <mikolaj.krol@bitbag.pl>
 */
interface HomePageInterface extends BaseHomePageInterface
{
    /**
     * @return bool
     */
    public function containsImageBlock(): bool;

    /**
     * @param string $content
     *
     * @return bool
     */
    public function containsBlockWithContent(string $content): bool;
}