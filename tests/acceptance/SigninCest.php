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
        $I->wantTo(' 회원 가입');
        $I->amOnPage('/signin.php');
        $I->fillField('email','test2@xpressengine.com');
        $I->fillField('password','1234');
        $I->click('회원가입');
        $I->seeInDatabase('users',['email'=>'test2@xpressengine.com']);
        $I->seeInCurrentUrl('main.php');
    }

    public function signinFailByDuplicatedEmail(AcceptanceTester $I)
    {
        $I->wantTo(' 이메일 중복시 가입 실패');
        $I->amOnPage('/signin.php');
        $I->fillField('email','test1@gameshuttle.kr');
        $I->fillField('password','1234');
        $I->click('회원가입');

        $I->seeInCurrentUrl('signin.php');
        $I->see('이미 사용중인 이메일입니다.');
    }

    public function signinFailByDuplicatedEmail2(AcceptanceTester $I)
    {
        $I->wantTo(' 이메일 중복시 가입 실패 2');
        $I->haveInDatabase('users',['email' => 'test2@xpressengine.com']);

        $I->amOnPage('/signin.php');
        $I->fillField('email','test2@xpressengine.com');
        $I->fillField('password','1234');
        $I->click('회원가입');

        $I->seeInCurrentUrl('signin.php');
        $I->see('이미 사용중인 이메일입니다.');

        $I->seeInDatabase('users', ['email' => 'test1@gameshuttle.kr']);
    }
}