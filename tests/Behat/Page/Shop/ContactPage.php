<?php

declare(strict_types=1);

namespace Tests\Dedi\SyliusSEOPlugin\Behat\Page\Shop;

class ContactPage extends AbstractRichSnippetAwarePage
{
    public function getRouteName(): string
    {
        return 'sylius_shop_contact_request';
    }
}
