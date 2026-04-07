@extends('layouts.app')

@section('content')
<section class="page-section medicos-page">
    <div class="page-controls">
        <a href="{{ route('home') }}" class="back-link">← Voltar para a Home</a>
    </div>

    <div class="page-title">
        <span class="section-label">Cadastro de Médico</span>
        <h1>Novo Profissional</h1>
        <p>Adicione um novo médico ao Sanctuary Clínico Vitalis.</p>
    </div>

    <div class="doctor-grid">
        <div class="doctor-card">
            <div class="card-section">
                <div class="section-header">
                    <h2>Informações Pessoais</h2>
                </div>
                <div class="form-grid">
                    <div class="field full-width">
                        <label>Nome Completo</label>
                        <input type="text" placeholder="Dr. Nome do Médico" />
                    </div>
                    <div class="field half-width">
                        <label>Número do CRM</label>
                        <input type="text" placeholder="000000-UF" />
                    </div>
                    <div class="field half-width">
                        <label>Especialidade</label>
                        <select>
                            <option>Selecione...</option>
                            <option>Cardiologia</option>
                            <option>Pediatria</option>
                            <option>Ortopedia</option>
                            <option>Clínica Geral</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-section">
                <div class="section-header">
                    <h2>Contato e Acesso</h2>
                </div>
                <div class="form-grid">
                    <div class="field half-width">
                        <label>E-mail Profissional</label>
                        <div class="field-with-icon">
                            <span class="field-icon">✉️</span>
                            <input type="email" placeholder="medico@vitalis.com" />
                        </div>
                    </div>
                    <div class="field half-width">
                        <label>Telefone / WhatsApp</label>
                        <div class="field-with-icon">
                            <span class="field-icon">📞</span>
                            <input type="text" placeholder="(00) 00000-0000" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <aside class="aside-panel">
            <div class="profile-card">
                <div class="photo-label">Foto de Perfil</div>
                <div class="profile-photo">
                    <span class="photo-icon">👤</span>
                </div>
                <p>Upload de imagem em alta resolução (mínimo 400x400px). FormatOs: JPG, PNG.</p>
            </div>

            <div class="summary-card doctor-summary">
                <div class="summary-header card-title">Resumo do Registro</div>
                <div class="summary-row">
                    <span>Status</span>
                    <strong class="status-pill status-pending">Aguardando Dados</strong>
                </div>
                <div class="summary-row">
                    <span>Nível de Acesso</span>
                    <strong>Profissional Clínico</strong>
                </div>
                <div class="summary-row">
                    <span>Unidade</span>
                    <strong>Vitalis Matriz</strong>
                </div>
            </div>

            <button class="button button-primary full-button">Cadastrar Médico</button>
            <p class="form-note">Ao cadastrar, o profissional receberá um e-mail para ativação da conta e definição de senha.</p>
        </aside>
    </div>
</section>
@endsection
