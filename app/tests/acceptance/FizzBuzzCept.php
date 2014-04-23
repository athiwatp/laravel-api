<?php
$I = new WebGuy($scenario);
$I->wantTo('Calculate FizzBuzz');
$I->amOnPage('fizzbuzz.html');
$I->see('FizzBuzz');
$I->fillField('number', 13);
$I->click('send');
$I->see('13');
