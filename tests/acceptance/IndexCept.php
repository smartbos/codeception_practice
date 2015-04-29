<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo(' 첫페이지(/)로 이동하여 로그인 링크와 회원 가입 링크가 있는지 본다');
$I->amOnPage('/');
$I->seeLink('로그인');
$I->seeLink('회원가입');

$I->amGoingTo(' 로그인 링크를 클릭');
$I->expect('하여 로그인 페이지로 이동하는지 본다');
$I->click('로그인');
$I->seeInCurrentUrl('login.php');

$I->amGoingTo(' 홈 링크를 클릭');
$I->expect('첫 페이지로 이동한다');
$I->click('홈');
$I->seeInTitle('첫 페이지');

$I->wantTo(' 회원가입 링크를 클릭');
$I->expectTo('회원가입 페이지로 이동한다');
$I->click('회원가입');
$I->seeInCurrentUrl('signin.php');
$I->seeInTitle('회원가입 페이지');