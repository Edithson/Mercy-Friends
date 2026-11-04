@extends('home.layout.app')

@section('title', __('site.meta.title'))
@section('meta_description', __('site.meta.description'))

@section('content')
    <!-- 3. Hero Section + 3 Cartes d'urgences -->
    @include('home.sections.hero')

    <!-- 4. Chiffres clés / Notre Impact -->
    @include('home.sections.impact')

    <!-- 5. À propos & Transparence financière -->
    @include('home.sections.about')

    <!-- 6. Nos 6 Thèmes d'intervention -->
    @include('home.sections.themes')

    <!-- 7. Portefeuille Mondial / Pays & Carte interactive -->
    @include('home.sections.portfolio')

    <!-- 8. Projets sur le terrain -->
    @include('home.sections.projects')

    <!-- 9. Actualités, Événements & Publications -->
    @include('home.sections.news')

    <!-- 10. Module interactif Faire un don + Virement bancaire -->
    @include('home.sections.donation')

    <!-- 11. Contact & Antennes -->
    @include('home.sections.contact')
@endsection