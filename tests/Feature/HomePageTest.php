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
