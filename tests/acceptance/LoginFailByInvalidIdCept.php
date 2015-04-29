<?php
$I = new AcceptanceTester($scenario);
$I->wantTo(' 없는 아이디로 로그인 시도하여 실패');
$I->amOnPage('/login.php');
$I->fillField('email','test2@gameshuttle.kr');
$I->fillField('password','byoponiti');
$I->click('로그인');
$I->seeInCurrentUrl('login.php');
$I->see('없는 아이디입니다.');
