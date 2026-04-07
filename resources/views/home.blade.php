@extends('layouts.app')

@section('content')
<section class="hero-section">
    <div class="hero-copy">
        <span class="eyebrow">Sanctuary of Care</span>
        <h1>Bem-vindo à Vitalis: <span>Cuidado com Excelência</span></h1>
        <p>Redefinindo a experiência clínica através de atendimento humano, tecnologia e um ambiente pensado para a sua tranquilidade.</p>
        <div class="hero-actions">
            <a href="{{ route('agendamento') }}" class="button button-primary">Agendar Consulta</a>
            <a href="{{ route('about') }}" class="button button-secondary">Conheça a Clínica</a>
        </div>
        <div class="hero-stats">
            <div>
                <strong>15k+</strong>
                <span>Pacientes Felizes</span>
            </div>
            <div>
                <strong>45+</strong>
                <span>Especialistas</span>
            </div>
            <div>
                <strong>98%</strong>
                <span>Satisfação</span>
            </div>
        </div>
    </div>
    <div class="hero-visual">
        <div class="hero-card">
            <div class="hero-tag">Consultório Premium</div>
            <div class="hero-image"></div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="section-header">
        <span class="section-label">Nossas Especialidades</span>
        <p>Oferecemos atendimento médico especializado para cuidar de todas as fases da sua saúde.</p>
    </div>

    <div class="cards-grid">
        <article class="service-card">
            <div class="icon icon-heartbeat">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2 12h4l2 5 3-13 3 11 2-4h4"></path>
                </svg>
            </div>
            <h3>Cardiologia</h3>
            <p>Diagnóstico e acompanhamento completo para a saúde do seu coração.</p>
        </article>
        <article class="service-card">
            <div class="icon icon-child">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 11c-2.5 0-4 1.5-4 4v2h8v-2c0-2.5-1.5-4-4-4z"></path>
                    <path d="M12 6a4 4 0 1 0 0 8"></path>
                </svg>
            </div>
            <h3>Pediatria</h3>
            <p>Cuidados dedicados para crianças com atenção e carinho.</p>
        </article>
        <article class="service-card">
            <div class="icon icon-clinic">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="8" width="18" height="13" rx="2"></rect>
                    <path d="M16 8V5a2 2 0 0 0-2-2H10a2 2 0 0 0-2 2v3"></path>
                    <path d="M12 12v6"></path>
                    <path d="M9 15h6"></path>
                </svg>
            </div>
            <h3>Clínica Geral</h3>
            <p>Atendimento rápido e integrado para consultas de rotina.</p>
        </article>
    </div>
</section>

<section class="section section-split">
    <div class="split-image">
        <div class="image-badge">Nossos Valores</div>
        <div class="image-art"></div>
    </div>
    <div class="split-copy">
        <span class="section-label">Nossos Valores</span>
        <h2>Excelência clínica com acolhimento humano.</h2>
        <p>Nosso compromisso é garantir atendimento eficiente, transparente e acolhedor em cada etapa do cuidado.</p>

        <div class="value-list">
            <article>
                <strong>Excelência Clínica</strong>
                <p>Protocolos modernos e equipe altamente preparada.</p>
            </article>
            <article>
                <strong>Humanização</strong>
                <p>Atendimento empático que valoriza cada paciente.</p>
            </article>
            <article>
                <strong>Transparência</strong>
                <p>Comunicação clara em todas as agendamentos e exames.</p>
            </article>
        </div>
    </div>
</section>
@endsection
