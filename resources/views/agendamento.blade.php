@extends('layouts.app')

@section('content')
<section class="page-section agendamento-page">
    <div class="page-controls">
        <a href="{{ route('home') }}" class="back-link">← Voltar para a Home</a>
    </div>

    <div class="page-title">
        <span class="section-label">Reserva de Consulta</span>
        <h1>Agende seu horário.</h1>
        <p>Personalize seu atendimento selecionando a especialidade e o profissional de sua preferência em poucos passos.</p>
    </div>

    <div class="appointment-layout">
        <div class="appointment-panel">
            <div class="form-section">
                <div class="section-group">
                    <span class="step-label">1. Especialidade</span>
                    <div class="select-field">
                        <label>Cardiologia</label>
                        <select>
                            <option>Cardiologia</option>
                            <option>Pediatria</option>
                            <option>Clínica Geral</option>
                        </select>
                    </div>
                </div>

                <div class="section-group">
                    <span class="step-label">2. Profissional</span>
                    <div class="select-field professional-field">
                        <div class="profile-chip">
                            <span class="avatar">H</span>
                            <div>
                                <strong>Dra. Helena Souza</strong>
                                <small>Cardiologista</small>
                            </div>
                        </div>
                        <select>
                            <option>Dra. Helena Souza</option>
                            <option>Dr. João Silva</option>
                            <option>Dra. Ana Lima</option>
                        </select>
                    </div>
                </div>

                <div class="section-group">
                    <span class="step-label">3. Escolha a data</span>
                    <div class="calendar-card">
                        <div class="calendar-header">
                            <button class="ghost-button">‹</button>
                            <strong>Maio 2026</strong>
                            <button class="ghost-button">›</button>
                        </div>
                        <div class="calendar-grid">
                            <span>DOM</span><span>SEG</span><span>TER</span><span>QUA</span><span>QUI</span><span>SEX</span><span>SÁB</span>
                            <button class="calendar-day disabled">28</button>
                            <button class="calendar-day disabled">29</button>
                            <button class="calendar-day disabled">30</button>
                            <button class="calendar-day">1</button>
                            <button class="calendar-day">2</button>
                            <button class="calendar-day">3</button>
                            <button class="calendar-day">4</button>
                            <button class="calendar-day">5</button>
                            <button class="calendar-day active">6</button>
                            <button class="calendar-day">7</button>
                            <button class="calendar-day">8</button>
                            <button class="calendar-day">9</button>
                            <button class="calendar-day">10</button>
                            <button class="calendar-day">11</button>
                        </div>
                    </div>
                </div>

                <div class="section-group">
                    <span class="step-label">4. Horários disponíveis</span>
                    <div class="time-grid">
                        <button class="time-slot">08:00</button>
                        <button class="time-slot">08:30</button>
                        <button class="time-slot active">09:00</button>
                        <button class="time-slot disabled">09:30</button>
                        <button class="time-slot">10:00</button>
                        <button class="time-slot">10:30</button>
                        <button class="time-slot">11:00</button>
                        <button class="time-slot">14:00</button>
                        <button class="time-slot">15:00</button>
                        <button class="time-slot">16:30</button>
                    </div>
                </div>
            </div>

            <div class="summary-card">
                <div class="summary-header">
                    <span>Resumo do Agendamento</span>
                </div>
                <div class="summary-item">
                    <span class="summary-icon">🩺</span>
                    <div>
                        <strong>Especialidade</strong>
                        <p>Cardiologia</p>
                    </div>
                </div>
                <div class="summary-item">
                    <span class="summary-icon">👩‍⚕️</span>
                    <div>
                        <strong>Profissional</strong>
                        <p>Dra. Helena Souza</p>
                    </div>
                </div>
                <div class="summary-item">
                    <span class="summary-icon">🗓️</span>
                    <div>
                        <strong>Data e Hora</strong>
                        <p>06 de Maio às 09:00</p>
                    </div>
                </div>
                <div class="summary-value">
                    <span>Valor da Consulta</span>
                    <strong>R$ 350,00</strong>
                </div>
                <button class="button button-primary full-button">Confirmar Agendamento →</button>
                <div class="summary-note">
                    Sua reserva está protegida por nossa política de cancelamento gratuito em até 24h antes do horário.
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
