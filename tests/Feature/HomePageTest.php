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
