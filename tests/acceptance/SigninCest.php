<?php
use \AcceptanceTester;

class SigninCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function signin(AcceptanceTester $I)
    {
        $I->seeInDatabase('users', ['email' => 'test1@gameshuttle.kr']);

        $I->haveInDatabase('users',['email' => 'test3@example.com']);

        $I->seeInDatabase('users', ['email' => 'test3@example.com']);

    }
}