<?php
use \AcceptanceTester;

class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function login(AcceptanceTester $I)
    {
        TestCommons::logMeIn($I);

        $I->seeInCurrentUrl('main.php');
        $I->seeInTitle('메인 페이지');
    }

    public function loginFailByInvalidEmail(AcceptanceTester $I)
    {
        $I->wantTo(' 로그인 실패 - 아이디 없음');
        $I->amOnPage('/login.php');
        $I->fillField('email','test2@gameshuttle.kr');
        $I->fillField('password','byoponiti');
        $I->click('로그인');

        $I->seeInCurrentUrl('login.php');
        $I->seeInTitle('로그인 페이지');
        $I->see('없는 아이디입니다.');
    }

    public function loginFailByInvalidPassword(AcceptanceTester $I)
    {
        $I->wantTo(' 로그인 실패 - 아이디 없음');
        $I->amOnPage('/login.php');
        $I->fillField('email','test1@gameshuttle.kr');
        $I->fillField('password','boponiti');
        $I->click('로그인');

        $I->seeInCurrentUrl('login.php');
        $I->seeInTitle('로그인 페이지');
        $I->see('아이디와 패스워드가 일치하지 않습니다.');

    }

    public function moveToMainWhenLoggedIn(AcceptanceTester $I)
    {
        TestCommons::logMeIn($I);

        $I->seeInCurrentUrl('main.php');
        $I->seeInTitle('메인 페이지');

        $I->amOnPage('/');

        $I->seeInCurrentUrl('main.php');
        $I->seeInTitle('메인 페이지');
    }
}