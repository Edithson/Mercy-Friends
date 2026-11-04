<?php

test('home page loads successfully with 200 status', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('home page does not use tailwindcdn script', function () {
    $response = $this->get('/');

    $response->assertDontSee('cdn.tailwindcss.com');
});

test('home page renders all modular sections properly', function () {
    $response = $this->get('/');

    $response->assertSee('MERCY');
    $response->assertSee('FRIENDS');
    $response->assertSee('id="accueil"', false);
    $response->assertSee('id="impact-band"', false);
    $response->assertSee('id="a-propos"', false);
    $response->assertSee('id="themes"', false);
    $response->assertSee('id="pays"', false);
    $response->assertSee('id="projets"', false);
    $response->assertSee('id="actualites"', false);
    $response->assertSee('id="faire-un-don"', false);
    $response->assertSee('id="contact"', false);
    $response->assertSee('id="main-footer"', false);
});

test('home page renders interactive vector world map with 24 intervention countries', function () {
    $response = $this->get('/');

    $response->assertSee('id="interactive-world-map"', false);
    $response->assertSee('id="map-viewport-container"', false);
    $response->assertSee('id="map-countries-layer"', false);
    $response->assertSee('id="map-pins-layer"', false);
    $response->assertSee('id="country-detail-card"', false);
    $response->assertSee('id="map-country-tooltip"', false);

    // Verify key intervention countries are rendered as interactive vector elements
    $interventionCodes = ['cm', 'cd', 'cf', 'bf', 'ml', 'ne', 'sn', 'td', 'sd', 'ss', 'et', 'so', 'ke', 'mg', 'bd', 'np', 'lb', 'sy', 'ye', 'af', 'ht', 'co', 'pe', 'bo'];
    foreach ($interventionCodes as $code) {
        $response->assertSee('data-country="'.$code.'"', false);
        $response->assertSee('id="pin-'.$code.'"', false);
    }
});

test('home page uses local images and does not rely on external image CDNs', function () {
    $response = $this->get('/');

    $response->assertDontSee('images.unsplash.com');
    $response->assertDontSee('placehold.co');
    $response->assertSee('/images/hero-banner.jpg');
    $response->assertSee('/images/project-water.jpg');
    $response->assertSee('/images/project-nutrition.jpg');
    $response->assertSee('/images/project-agroforestry.jpg');

    expect(file_exists(public_path('images/hero-banner.jpg')))->toBeTrue()
        ->and(file_exists(public_path('images/project-water.jpg')))->toBeTrue()
        ->and(file_exists(public_path('images/project-nutrition.jpg')))->toBeTrue()
        ->and(file_exists(public_path('images/project-agroforestry.jpg')))->toBeTrue()
        ->and(file_exists(public_path('images/project-education.jpg')))->toBeTrue()
        ->and(file_exists(public_path('images/project-health.jpg')))->toBeTrue()
        ->and(file_exists(public_path('images/project-empowerment.jpg')))->toBeTrue()
        ->and(file_exists(public_path('images/placeholder-hero.svg')))->toBeTrue()
        ->and(file_exists(public_path('images/placeholder-project.svg')))->toBeTrue();
});

test('home page has streamlined navigation bar and mobile menu structure', function () {
    $response = $this->get('/');

    $response->assertSee('id="top-bar"', false);
    $response->assertSee('hidden md:block', false);
    $response->assertSee('id="main-nav"', false);
    $response->assertSee('id="mobile-menu-btn"', false);
    $response->assertSee('id="mobile-menu"', false);
});

test('home page defaults to English with full internationalization', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('lang="en"', false);
    $response->assertSee('window.APP_LOCALE = "en"', false);
    $response->assertSee('Humanitarian Action : Zero Hunger');
    $response->assertSee('Donate Now');
});

test('home page supports French at /fr and German at /de', function () {
    $responseFr = $this->get('/fr');
    $responseFr->assertStatus(200);
    $responseFr->assertSee('lang="fr"', false);
    $responseFr->assertSee('window.APP_LOCALE = "fr"', false);
    $responseFr->assertSee('ONG Humanitaire : Zéro Faim');
    $responseFr->assertSee('Faire un don');

    $responseDe = $this->get('/de');
    $responseDe->assertStatus(200);
    $responseDe->assertSee('lang="de"', false);
    $responseDe->assertSee('window.APP_LOCALE = "de"', false);
    $responseDe->assertSee('Humanitäre Hilfe : Zero Hunger');
    $responseDe->assertSee('Jetzt spenden');
});

test('locale switch endpoint updates session and redirects correctly', function () {
    $responseDe = $this->get('/locale/de');
    $responseDe->assertRedirect('/de');
    $this->assertEquals('de', session('locale'));

    $responseFr = $this->get('/locale/fr');
    $responseFr->assertRedirect('/fr');
    $this->assertEquals('fr', session('locale'));

    $responseEn = $this->get('/locale/en');
    $responseEn->assertRedirect('/');
    $this->assertEquals('en', session('locale'));

    // Unsupported locale should return 404
    $this->get('/locale/es')->assertStatus(404);
});

test('rendered HTML does not contain em dashes or en dashes across all languages', function () {
    $locales = ['/', '/en', '/fr', '/de'];

    foreach ($locales as $uri) {
        $html = $this->get($uri)->getContent();
        expect(str_contains($html, '—'))->toBeFalse("Locale {$uri} contains an em dash (—)")
            ->and(str_contains($html, '–'))->toBeFalse("Locale {$uri} contains an en dash (–)");
    }
});

test('desktop language dropdowns are present and contain stable interactive controls', function () {
    $response = $this->get('/');

    $response->assertSee('id="topbar-lang-btn"', false);
    $response->assertSee('id="topbar-lang-dropdown"', false);
    $response->assertSee('id="header-lang-btn"', false);
    $response->assertSee('id="header-lang-dropdown"', false);
    $response->assertSee('onclick="toggleLanguageDropdown(event, \'topbar-lang-dropdown\')"', false);
    $response->assertSee('onclick="toggleLanguageDropdown(event, \'header-lang-dropdown\')"', false);
});
