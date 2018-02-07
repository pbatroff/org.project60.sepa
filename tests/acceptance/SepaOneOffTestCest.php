<?php

/**
 * Class SepaOneOffTestCept
 */
class SepaOneOffTestCest {

  /**
   * Executed before the Test suite
   * @param \AcceptanceTester $I
   */
  public function _before(AcceptanceTester $I) {
  }

  /**
   * Executed after this test suite
   * @param \AcceptanceTester $I
   */
  public function _after(AcceptanceTester $I) {
  }

  /**
   * @param \AcceptanceTester $I
   */
  public function sepaOneOffTest(AcceptanceTester $I) {
    global $_CV;
    $I->amGoingTo('Login to Civicrm and create a new SEPA One Off Contribution for user 207');
    $I->login($_CV['ADMIN_USER'], $_CV['ADMIN_PASS']);
    $I->wantTo('Go to a contact and create a One Off Contribution');
    $I->amOnRoute('civicrm/contact/view?reset=1&cid=207');
    $I->click('Record SEPA Contribution');
    $I->see("Create SEPA Mandate");
    $I->fillField("input[name=total_amount]", "7777");
    $I->fillField("input[name=iban]", "DE89370400440532013000");
    $I->fillField("input[name=bic]", "GENODEM1GLS");
    $I->click("input[value=create]");
  }

}
