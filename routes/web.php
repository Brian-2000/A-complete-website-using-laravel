<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/news', function () {
    return view('/news');
});
Route::get('/about/careers', function () {
    return view('/about/careers');
});
Route::get('/about/students', function () {
    return view('/about/students');
});
Route::get('/client-relations', function () {
    return view('/client-relations');
});
Route::get('/about/experienced-professionals', function () {
    return view('/about/experienced-professionals');
});
Route::get('/company/contact-us', function () {
    return view('/company/contact-us');
});
Route::get('/company/terms-conditions', function () {
    return view('/company/terms-conditions');
});
Route::get('/company/privacy-policy', function () {
    return view('/company/privacy-policy');
});
Route::get('/the-firm/term-of-use', function () {
    return view('/the-firm/term-of-use');
});
Route::get('/the-firm/cookies', function () {
    return view('/the-firm/cookies');
});
Route::get('/the-firm/regulatory-disclosures', function () {
    return view('/the-firm/regulatory-disclosures');
});
Route::get('/the-firm/security-fraud-awareness', function () {
    return view('/the-firm/security-fraud-awareness');
});
Route::get('/our-firm/overview', function () {
    return view('/our-firm/overview');
});
Route::get('/our-firm/about-us', function () {
    return view('/our-firm/about-us');
});
Route::get('/our-firm/people-culture', function () {
    return view('/our-firm/people-culture');
});
Route::get('/our-firm/location', function () {
    return view('/our-firm/location');
});
Route::get('/our-firm/leadership', function () {
    return view('/our-firm/leadership');
});
Route::get('/started_form/get_started', function () {
    return view('/started_form/get_started');
});

/* START OF WHAT WE DO */

// Investment Banking Links
Route::get('/investment-banking/mergers-acquisitions', function () {
    return view('/investment-banking/mergers-acquisitions');
});
Route::get('/investment-banking/investment-bank-industry', function () {
    return view('/investment-banking/investment-bank-industry');
});
Route::get('/investment-banking/origination-equity-debt-capital', function () {
    return view('/investment-banking/origination-equity-debt-capital');
});
Route::get('/investment-banking/corporate-finance-advisory', function () {
    return view('/investment-banking/corporate-finance-advisory');
});

// Institutional Investors Links
Route::get('/institutional-investors/markets', function () {
    return view('/institutional-investors/markets');
});
Route::get('/institutional-investors/prime-services', function () {
    return view('/institutional-investors/prime-services');
});
Route::get('/institutional-investors/securities-services', function () {
    return view('/institutional-investors/securities-services');
});
Route::get('/institutional-investors/institutional-asset-management', function () {
    return view('/institutional-investors/institutional-asset-management');
});

// Treasury and Payments Links
Route::get('/treasury-payments/liquidity-management', function () {
    return view('/treasury-payments/liquidity-management');
});
Route::get('/treasury-payments/escrow-services', function () {
    return view('/treasury-payments/escrow-services');
});
Route::get('/treasury-payments/receivables', function () {
    return view('/treasury-payments/receivables');
});

// Advisors and advisory firms Links
Route::get('/advisory-firms/global-markets', function () {
    return view('/advisory-firms/global-markets');
});
Route::get('/advisory-firms/asset-management', function () {
    return view('/advisory-firms/asset-management');
});

// Individual & Family Offices Links
Route::get('/individual-family-offices/securities', function () {
    return view('/individual-family-offices/securities');
});
Route::get('/individual-family-offices/wealth-management', function () {
    return view('/individual-family-offices/wealth-management');
});
Route::get('/individual-family-offices/portfolio-oversight', function () {
    return view('/individual-family-offices/portfolio-oversight');
});
Route::get('/individual-family-offices/lending', function () {
    return view('/individual-family-offices/lending');
});

// Research Links
Route::get('/research/services', function () {
    return view('/research/services');
});

/* END OF WHAT WE DO */

// Insights Links
Route::get('/insights/brief', function () {
    return view('/insights/brief');
});

// Careers Links
Route::get('/careers/our-people', function () {
    return view('/careers/our-people');
});
Route::get('/careers/students', function () {
    return view('/careers/students');
});
