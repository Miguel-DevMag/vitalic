@extends('layouts.app')

@section('content')
<section class="hero-section">
    <div class="hero-copy">
        <span class="eyebrow">Clínica Vitalis</span>
        <h1>Bem-vindo ao seu centro de saúde</h1>
        <p>Atendimento médico dedicado, agendamento simples e cuidado humanizado para toda a família.</p>
        <div class="hero-actions">
            <a href="{{ route('agendamento') }}" class="button button-primary">Agendar Consulta</a>
            <a href="{{ route('about') }}" class="button button-secondary">Saiba Mais</a>
        </div>
    </div>

    <div class="hero-visual">
        <div class="hero-card">
            <div class="hero-tag">Atendimento Personalizado</div>
            <div class="hero-image"></div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="section-header">
        <span class="section-label">Serviços em destaque</span>
        <p>Oferecemos especialidades que priorizam conforto, segurança e agilidade no atendimento.</p>
    </div>

    <div class="cards-grid">
        <article class="service-card">
            <div class="icon">+</div>
            <h3>Consultas Clínicas</h3>
            <p>Consultas integradas para diagnóstico rápido e acompanhamento contínuo.</p>
        </article>
        <article class="service-card">
            <div class="icon">+</div>
            <h3>Agendamento Online</h3>
            <p>Agende sua consulta em poucos passos com confirmação imediata.</p>
        </article>
        <article class="service-card">
            <div class="icon">+</div>
            <h3>Equipe Especializada</h3>
            <p>Profissionais experientes em diversas áreas médicas para cuidar de você.</p>
        </article>
    </div>
</section>
@endsection
