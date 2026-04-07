<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ config('app.name', 'Vitalis') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>
    <body class="app-body">
        <div class="page-shell">
            <header class="site-header">
                <div class="brand">
                    <span class="brand-mark">V</span>
                    <div class="brand-copy">
                        <strong>Vitalis</strong>
                        <span>Clínica Médica</span>
                    </div>
                </div>
                <nav class="site-nav">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Sobre</a>
                    <a href="{{ route('paciente') }}" class="{{ request()->routeIs('paciente') ? 'active' : '' }}">Cadastro Paciente</a>
                    <a href="{{ route('agendamento') }}" class="{{ request()->routeIs('agendamento') ? 'active' : '' }}">Agendamentos</a>
                    <a href="{{ route('medicos') }}" class="{{ request()->routeIs('medicos') ? 'active' : '' }}">Cadastro Médicos</a>
                    <a href="{{ route('consultas') }}" class="{{ request()->routeIs('consultas') ? 'active' : '' }}">Lista de Consultas</a>
                </nav>
                <a href="{{ route('agendamento') }}" class="button button-primary">Entrar</a>
            </header>

            <main class="page-content">
                @yield('content')
            </main>

            <footer class="site-footer">
                © 2026 Vitalis Clínica. Atendimento humano com segurança e confiança.
            </footer>
        </div>
    </body>
</html>
