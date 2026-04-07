@extends('layouts.app')

@section('content')
<section class="page-section consultas-page">
    <div class="consultas-header">
        <div>
            <span class="section-label">Agendamentos</span>
            <h1>Gestão centralizada de consultas e procedimentos.</h1>
        </div>
        <div class="top-actions">
            <div class="search-field">
                <span class="search-icon">🔍</span>
                <input type="text" placeholder="Procurar paciente..." />
            </div>
            <button class="button button-primary">+ Novo Agendamento</button>
        </div>
    </div>

    <div class="filter-panel">
        <button class="pill active">Todas as Datas</button>
        <button class="pill">Especialidade</button>
        <button class="pill">Status: Todos</button>
        <span class="result-text">8 agendamentos para hoje</span>
    </div>

    <div class="table-card">
        <table class="table-list">
            <thead>
                <tr>
                    <th>Paciente</th>
                    <th>Profissional</th>
                    <th>Data & Hora</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="patient-cell">
                            <span class="avatar-badge">MB</span>
                            <div>
                                <strong>Maria Beatriz Oliveira</strong>
                                <small>ID: #4928-B</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="professional-cell">
                            <span class="avatar-badge doctor">RI</span>
                            <div>
                                <strong>Dr. Ricardo Menezes</strong>
                            </div>
                        </div>
                    </td>
                    <td>
                        <strong>12 Mai, 2024</strong>
                        <p>09:30</p>
                    </td>
                    <td><span class="status-pill status-confirmed">Confirmado</span></td>
                    <td><a href="#" class="action-link">Ver</a></td>
                </tr>
                <tr>
                    <td>
                        <div class="patient-cell">
                            <span class="avatar-badge">JS</span>
                            <div>
                                <strong>João Silva Santos</strong>
                                <small>ID: #2102-A</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="professional-cell">
                            <span class="avatar-badge doctor">AP</span>
                            <div>
                                <strong>Dra. Ana Paula Costa</strong>
                            </div>
                        </div>
                    </td>
                    <td>
                        <strong>12 Mai, 2024</strong>
                        <p>10:45</p>
                    </td>
                    <td><span class="status-pill status-pending">Pendente</span></td>
                    <td><a href="#" class="action-link">Ver</a></td>
                </tr>
                <tr>
                    <td>
                        <div class="patient-cell">
                            <span class="avatar-badge">LF</span>
                            <div>
                                <strong>Lucas Ferreira</strong>
                                <small>ID: #3381-C</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="professional-cell">
                            <span class="avatar-badge doctor">MV</span>
                            <div>
                                <strong>Dr. Marcos Viana</strong>
                            </div>
                        </div>
                    </td>
                    <td>
                        <strong>12 Mai, 2024</strong>
                        <p>14:00</p>
                    </td>
                    <td><span class="status-pill status-confirmed">Confirmado</span></td>
                    <td><a href="#" class="action-link">Ver</a></td>
                </tr>
                <tr>
                    <td>
                        <div class="patient-cell">
                            <span class="avatar-badge">CR</span>
                            <div>
                                <strong>Camila Rocha</strong>
                                <small>ID: #0928-D</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="professional-cell">
                            <span class="avatar-badge doctor">SM</span>
                            <div>
                                <strong>Dra. Sofia Marinho</strong>
                            </div>
                        </div>
                    </td>
                    <td>
                        <strong>12 Mai, 2024</strong>
                        <p>15:15</p>
                    </td>
                    <td><span class="status-pill status-confirmed">Confirmado</span></td>
                    <td><a href="#" class="action-link">Ver</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="pagination-row">
        <span>Mostrando 1-4 de 24 agendamentos</span>
        <div class="pagination-controls">
            <button class="page-button">‹</button>
            <button class="page-button active">1</button>
            <button class="page-button">2</button>
            <button class="page-button">3</button>
            <button class="page-button">›</button>
        </div>
    </div>
</section>
@endsection
