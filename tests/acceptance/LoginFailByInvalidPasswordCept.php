<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo(' 로그인 실패 - 아이디 없음');
$I->amOnPage('/login.php');
$I->fillField('email','test1@gameshuttle.kr');
$I->fillField('password','boponiti');
$I->click('로그인');

$I->seeInCurrentUrl('login.php');
$I->seeInTitle('로그인 페이지');
$I->see('아이디와 패스워드가 일치하지 않습니다.');
