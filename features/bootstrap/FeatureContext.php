<?php

use Behat\Behat\Context\ClosuredContextInterface;
use Behat\Behat\Context\TranslatedContextInterface;
use Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext
{
    /**
     * @Then /^I should be on the shopping cart page$/
     */
    public function iShouldBeOnTheShoppingCartPage()
    {
        $this->assertSession()->addressEquals($this->locatePath('/cart'));
    }
}
