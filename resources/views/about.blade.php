@extends('layouts.app')

@section('content')
<section class="hero-section about-hero">
    <div class="hero-copy">
        <span class="eyebrow">Nossa História</span>
        <h1>Vitalis une clínica moderna com cuidado humano.</h1>
        <p>Desde a fundação, construímos uma clínica que valoriza a experiência do paciente, atendimento de excelência e equipe médica dedicada.</p>
        <div class="hero-actions">
            <a href="{{ route('agendamento') }}" class="button button-primary">Agendar Consulta</a>
            <a href="{{ route('home') }}" class="button button-secondary">Voltar ao Início</a>
        </div>
    </div>
    <div class="hero-visual about-visual">
        <div class="hero-card about-card">
            <div class="hero-tag">Uma clínica feita para você</div>
            <div class="hero-image about-image"></div>
        </div>
    </div>
</section>

<section class="section section-light about-story">
    <div class="section-header">
        <span class="section-label">Nossa trajetória</span>
        <h2>Transformando cuidado médico em confiança e bem-estar.</h2>
        <p>Com atendimento humanizado e infraestrutura completa, a Vitalis atua para tornar cada consulta mais confortável e segura.</p>
    </div>
    <div class="story-grid">
        <article>
            <div class="icon icon-heart">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                </svg>
            </div>
            <h3>Atendimento humano</h3>
            <p>Cada paciente recebe tratamento personalizado com atenção aos detalhes e respeito ao seu tempo.</p>
        </article>
        <article>
            <div class="icon icon-building">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="9" y1="9" x2="9" y2="9"></line>
                    <line x1="9" y1="15" x2="9" y2="15"></line>
                    <line x1="15" y1="9" x2="15" y2="9"></line>
                    <line x1="15" y1="15" x2="15" y2="15"></line>
                </svg>
            </div>
            <h3>Estrutura moderna</h3>
            <p>Consultórios confortáveis, tecnologia clínica atualizada e protocolos que priorizam a sua saúde.</p>
        </article>
        <article>
            <div class="icon icon-users">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
            </div>
            <h3>Equipe especializada</h3>
            <p>Médicos e colaboradores capacitados para orientar e acompanhar todas as etapas do seu cuidado.</p>
        </article>
    </div>
</section>

<section class="section section-grid">
    <div class="section-header">
        <span class="section-label">O que nos move</span>
        <h2>Missão, visão e valores que guiam nossa prática.</h2>
        <p>Valores que orientam o trabalho diário da Vitalis e garantem mais confiança no atendimento.</p>
    </div>
    <div class="mission-grid">
        <article class="mission-card">
            <div class="icon icon-target">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <circle cx="12" cy="12" r="6"></circle>
                    <circle cx="12" cy="12" r="2"></circle>
                </svg>
            </div>
            <strong>Missão</strong>
            <p>Oferecer serviços de saúde com qualidade, empatia e acessibilidade para toda a família.</p>
        </article>
        <article class="mission-card">
            <div class="icon icon-eye">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>
            </div>
            <strong>Visão</strong>
            <p>Ser referência em atenção integral, combinando tecnologia e cuidado acolhedor.</p>
        </article>
        <article class="mission-card">
            <div class="icon icon-shield">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
            </div>
            <strong>Valores</strong>
            <p>Ética, transparência, respeito e acolhimento são a base da nossa prática clínica.</p>
        </article>
    </div>
</section>

<section class="section about-team">
    <div class="section-header">
        <span class="section-label">Conheça nossos médicos</span>
        <h2>Profissionais prontos para cuidar de você.</h2>
    </div>
    <div class="team-grid">
        <article class="team-card">
            <div class="profile-avatar">
                <div class="avatar-placeholder"></div>
            </div>
            <h3>Dr. João Silva</h3>
            <span>Cardiologista</span>
            <p>Especialista em cardiologia com mais de 15 anos de experiência.</p>
        </article>
        <article class="team-card">
            <div class="profile-avatar">
                <div class="avatar-placeholder"></div>
            </div>
            <h3>Dra. Ana Lima</h3>
            <span>Pediatra</span>
            <p>Dedicada ao cuidado infantil, com foco em saúde preventiva.</p>
        </article>
        <article class="team-card">
            <div class="profile-avatar">
                <div class="avatar-placeholder"></div>
            </div>
            <h3>Dr. Ricardo Costa</h3>
            <span>Ortopedista</span>
            <p>Especialista em ortopedia e traumatologia, com abordagem minimamente invasiva.</p>
        </article>
        <article class="team-card">
            <div class="profile-avatar">
                <div class="avatar-placeholder"></div>
            </div>
            <h3>Dra. Luísa Fernandes</h3>
            <span>Clínica Geral</span>
            <p>Médica generalista com ênfase em atendimento familiar e preventivo.</p>
        </article>
    </div>
</section>

<section class="section callout-section">
    <div class="callout-panel">
        <div>
            <span class="section-label">Pronto para sua próxima consulta?</span>
            <h2>Agende seu atendimento e venha viver uma experiência de cuidado mais humana.</h2>
        </div>
        <div class="callout-actions">
            <a href="{{ route('agendamento') }}" class="button button-primary">Agendar Consulta</a>
            <a href="{{ route('consultas') }}" class="button button-secondary">Ver lista de consultas</a>
        </div>
    </div>
</section>
@endsection
