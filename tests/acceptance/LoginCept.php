<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo(' 로그인');
$I->amOnPage('/login.php');
$I->fillField('email','test1@gameshuttle.kr');
$I->fillField('password','byoponiti');
$I->click('로그인');
$I->seeInCurrentUrl('main.php');