<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo(' 로그인 실패 - 아이디 없음');
$I->amOnPage('/login.php');
$I->fillField('email','test2@gameshuttle.kr');
$I->fillField('password','byoponiti');
$I->click('로그인');

$I->seeInCurrentUrl('login.php');
$I->seeInTitle('로그인 페이지');
$I->see('없는 아이디입니다.');
