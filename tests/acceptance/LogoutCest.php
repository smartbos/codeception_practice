<?php
use \AcceptanceTester;

class LogoutCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        TestCommons::logMeIn($I);

        $I->seeInCurrentUrl('main.php');

        $I->click('로그아웃');
        $I->seeInPopup('정말로 로그아웃 하시겠습니까?');
        $I->acceptPopup();

        $I->seeInTitle('첫 페이지');
    }
}