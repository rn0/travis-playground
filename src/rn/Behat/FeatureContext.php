<?php

namespace rn\Behat;

use SensioLabs\Behat\PageObjectExtension\Context\PageObjectContext;

class FeatureContext extends PageObjectContext
{
    /**
     * @Given /^i am on the (?P<pageName>.*?)$/
     */
    public function iAmOnThePage($pageName)
    {
        $this->getPage($pageName)->open();
    }

    /**
     * @Then /^i should see "([^"]*)"$/
     */
    public function iShouldSee($text)
    {
        $this->getPage('Default Page')->hasContent($text);
    }
}
