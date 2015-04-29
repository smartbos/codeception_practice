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
    public function logout(AcceptanceTester $I)
    {
        TestCommons::logMeIn($I);

        $I->wantTo(' 로그아웃');
        $I->click(['id' => 'logoutBtn']);
        $I->seeInPopup('정말 로그아웃 하시겠습니까?');
        $I->acceptPopup();
        $I->seeInTitle('첫 페이지');
    }

    public function logoutCancel(AcceptanceTester $I)
    {
        TestCommons::logMeIn($I);

        $I->wantTo(' 로그아웃 취소');
        $I->click(['id' => 'logoutBtn']);
        $I->seeInPopup('정말 로그아웃 하시겠습니까?');
        $I->cancelPopup();
        $I->seeInTitle('메인 페이지');
    }
}