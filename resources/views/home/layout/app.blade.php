<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Mercy Friends')</title>
        <meta name="description" content="@yield('meta_description', 'Mercy Friends est une association humanitaire à but non lucratif engagée contre la faim, la précarité et l\'exclusion dans 24 pays.')">

        <!-- Google Fonts: Inter -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Icônes Font Awesome 6 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!-- Tailwind CSS & JS via Vite (Local, sans CDN) -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @stack('styles')
    </head>

    <body class="font-sans antialiased selection:bg-mercy-green selection:text-white bg-[#F8FAF9] text-[#0B0F0C] overflow-x-hidden">
        <!-- Liens d'accessibilité rapide (Skip Links) -->
        <div class="sr-only focus-within:not-sr-only focus-within:fixed focus-within:top-2 focus-within:left-2 focus-within:z-[100] bg-mercy-black text-white p-3 rounded-xl shadow-lg flex gap-3">
            <a href="#main-nav" class="px-3 py-1 bg-mercy-green rounded-lg text-sm font-semibold">Aller au menu</a>
            <a href="#main-content" class="px-3 py-1 bg-mercy-green rounded-lg text-sm font-semibold">Aller au contenu</a>
            <a href="#faire-un-don" class="px-3 py-1 bg-mercy-green rounded-lg text-sm font-semibold">Faire un don</a>
            <a href="#main-footer" class="px-3 py-1 bg-mercy-green rounded-lg text-sm font-semibold">Aller au pied de page</a>
        </div>

        <!-- Notification Toast Globale -->
        @include('home.partials.toast')

        <!-- Barre Supérieure Secondaire (Noire) -->
        @include('home.partials.topbar')

        <!-- Barre de Navigation Principale Sticky -->
        @include('home.partials.header')

        <!-- Contenu Principal -->
        <main id="main-content">
            @yield('content')
        </main>

        <!-- Pied de Page Complet -->
        @include('home.partials.footer')

        <!-- Bandeau de Gestion des Cookies -->
        @include('home.partials.cookie-banner')

        <!-- Modale Universelle Dynamique -->
        @include('home.partials.universal-modal')

        @stack('scripts')
    </body>
</html>
