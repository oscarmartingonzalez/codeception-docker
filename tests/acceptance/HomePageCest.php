<?php

class HomePageCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
