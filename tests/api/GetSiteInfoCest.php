<?php
use \ApiTester;

class GetSiteInfoCest
{
    public function _before(ApiTester $I)
    {
    }

    public function _after(ApiTester $I)
    {
    }

    // tests
    public function getSiteInfo(ApiTester $I)
    {
        $I->sendGet('siteinfo.php', []);
        $I->seeResponseIsJson();
        $I->seeResponseContains('Missing Parameter');
    }

    public function FailByInvalidId(ApiTester $I)
    {
        $I->sendGET('siteinfo.php', ['userId' => 'testUser2', 'accessToken' => 'testAccessToken']);
        $I->seeResponseContains('Invalid User Id');
    }
}