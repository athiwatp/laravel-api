<?php
$I = new WebGuy($scenario);
$I->wantTo('Calculate Grade');
$I->amOnPage('home.html');
$I->see('Grade');
$I->fillField('point', 74);
$I->click('send');
$I->see('b');
