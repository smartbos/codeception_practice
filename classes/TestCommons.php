<?php 
class TestCommons {
    public static function logMeIn($I)
    {
        $I->wantTo(' 로그인');
        $I->amOnPage('/login.php');
        $I->fillField('email','test1@gameshuttle.kr');
        $I->fillField('password','byoponiti');
        $I->click('로그인');
    }

    public static function SignMeIn($I)
    {

    }
}