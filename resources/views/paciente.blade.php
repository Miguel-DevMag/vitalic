@extends('layouts.app')

@section('content')
<section class="page-section cadastro-page">
    <div class="page-controls">
        <a href="{{ route('home') }}" class="back-link">← Voltar para a Home</a>
    </div>

    <div class="page-title">
        <span class="section-label">Cadastro de Paciente</span>
        <h1>Bem-vindo à Vitalis</h1>
        <p>Inicie sua jornada para uma saúde plena. Preencha os dados abaixo para criar seu prontuário clínico digital.</p>
    </div>

    <div class="form-card">
        <div class="form-grid">
            <div class="field full-width">
                <label>Nome Completo</label>
                <input type="text" placeholder="Ex: Maria Oliveira Silva" />
            </div>

            <div class="field half-width">
                <label>CPF</label>
                <input type="text" placeholder="000.000.000-00" />
            </div>
            <div class="field half-width">
                <label>Data de Nascimento</label>
                <input type="text" placeholder="mm/dd/yyyy" />
            </div>

            <div class="field full-width">
                <label>E-mail</label>
                <input type="email" placeholder="nome@exemplo.com" />
            </div>

            <div class="field full-width">
                <label>Telefone / WhatsApp</label>
                <div class="field-with-icon">
                    <span class="field-icon">📞</span>
                    <input type="text" placeholder="(11) 99899-9999" />
                </div>
            </div>

            <div class="field full-width">
                <label>Endereço Residencial</label>
                <textarea placeholder="Rua, Número, Bairro, Cidade e CEP"></textarea>
            </div>
        </div>

        <button class="button button-primary full-button">Finalizar Cadastro</button>

        <p class="form-note">© Conformidade total com a LGPD.</p>
    </div>
</section>
@endsection
