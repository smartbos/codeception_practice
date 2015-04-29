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
        $I->wantTo(' 로그인');
        $I->amOnPage('/login.php');
        $I->fillField('email','test1@gameshuttle.kr');
        $I->fillField('password','byoponiti');
        $I->click('로그인');
        $I->seeInCurrentUrl('main.php');
    }

    public function loginFailByInvalidId(AcceptanceTester $I)
    {
        $I->wantTo(' 없는 아이디로 로그인 시도하여 실패');
        $I->amOnPage('/login.php');
        $I->fillField('email','test2@gameshuttle.kr');
        $I->fillField('password','byoponiti');
        $I->click('로그인');
        $I->seeInCurrentUrl('login.php');
        $I->see('없는 아이디입니다.');
    }

    public function loginFailByInvalidPassword(AcceptanceTester $I)
    {
        $I->wantTo(' 틀린 비밀번호로 로그인 시도하여 실패');
        $I->amOnPage('/login.php');
        $I->fillField('email','test1@gameshuttle.kr');
        $I->fillField('password','byoponiti2');
        $I->click('로그인');
        $I->seeInCurrentUrl('login.php');
        $I->see('아이디와 패스워드가 일치하지 않습니다.');
    }

    public function redirectToMainWhenLoggedIn(AcceptanceTester $I)
    {
        $I->wantTo(' 로그인');
        $I->amOnPage('/login.php');
        $I->fillField('email','test1@gameshuttle.kr');
        $I->fillField('password','byoponiti');
        $I->click('로그인');
        $I->seeInCurrentUrl('main.php');

        $I->amOnPage('/');
        $I->seeInCurrentUrl('main.php');
    }

    public function redirectToMainWhenLoggedInRefactored(AcceptanceTester $I)
    {
        TestCommons::logMeIn($I);
        $I->seeInCurrentUrl('main.php');

        $I->amOnPage('/');
        $I->seeInCurrentUrl('main.php');
    }
}