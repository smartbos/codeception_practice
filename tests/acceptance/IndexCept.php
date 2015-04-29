<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo(' 첫페이지에 로그인 링크와 회원가입 링크가 있다.');
$I->amOnPage('/');
$I->seeInTitle('첫 페이지');
$I->seeLink('로그인');
$I->seeLink('회원가입');

$I->click('로그인');
$I->seeInTitle('로그인 페이지');
$I->seeInCurrentUrl('login.php');

$I->click('홈');

$I->click('회원가입');
$I->seeInTitle('회원가입 페이지');
$I->seeInCurrentUrl('signin.php');