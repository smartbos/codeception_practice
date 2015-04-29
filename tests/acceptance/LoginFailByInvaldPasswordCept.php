<?php
$I = new AcceptanceTester($scenario);
$I->wantTo(' 틀린 비밀번호로 로그인 시도하여 실패');
$I->amOnPage('/login.php');
$I->fillField('email','test1@gameshuttle.kr');
$I->fillField('password','byoponiti2');
$I->click('로그인');
$I->seeInCurrentUrl('login.php');
$I->see('아이디와 패스워드가 일치하지 않습니다.');
