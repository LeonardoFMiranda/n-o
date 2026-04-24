<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif
    }

    .preview-wrap {
        background: #f5f6fa;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 1.5rem
    }

    .preview-label {
        font-size: 11px;
        font-weight: 700;
        color: #aaa;
        letter-spacing: .08em;
        text-transform: uppercase;
        margin-bottom: .5rem
    }

    .section-card {
        background: #fff;
        border: 0.5px solid #dee2e6;
        border-radius: 8px;
        overflow: hidden
    }

    .section-header {
        background: #1351b4;
        color: #fff;
        padding: 9px 1rem;
        font-size: 13px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px
    }

    .section-header svg {
        width: 15px;
        height: 15px;
        stroke: #fff;
        fill: none;
        stroke-width: 2;
        flex-shrink: 0
    }

    .pad {
        padding: 1.25rem
    }

    .form-field {
        display: flex;
        flex-direction: column;
        gap: 4px
    }

    .form-label {
        font-size: 11px;
        font-weight: 600;
        color: #888
    }

    .form-select {
        padding: 7px 10px;
        border: 1px solid #c9cfd6;
        border-radius: 4px;
        font-size: 13px;
        color: #1c2c4a;
        background: #fff;
        min-width: 110px
    }

    .row {
        display: flex;
        align-items: flex-end;
        gap: 1rem;
        flex-wrap: wrap
    }

    .btn-p {
        display: flex;
        align-items: center;
        gap: 6px;
        background: #1351b4;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 8px 18px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer
    }

    .btn-p svg {
        width: 14px;
        height: 14px;
        stroke: #fff;
        fill: none;
        stroke-width: 2
    }

    .btn-o {
        display: flex;
        align-items: center;
        gap: 6px;
        background: #fff;
        color: #1351b4;
        border: 1px solid #1351b4;
        border-radius: 4px;
        padding: 8px 18px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        opacity: .5
    }

    .btn-o svg {
        width: 14px;
        height: 14px;
        stroke: #1351b4;
        fill: none;
        stroke-width: 2
    }

    .ff-fieldset {
        border: 1px solid #dee2e6;
        border-radius: 6px;
        padding: .75rem 1rem;
        background: #f8f9fa
    }

    .ff-legend {
        font-size: 11px;
        font-weight: 700;
        color: #1351b4;
        padding: 0 6px
    }

    .data-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr))
    }

    .data-cell {
        padding: 10px 1rem;
        border-bottom: 0.5px solid #f0f0f0;
        border-right: 0.5px solid #f0f0f0
    }

    .data-cell:nth-child(3n) {
        border-right: none
    }

    .data-cell.span3 {
        grid-column: span 3
    }

    .data-label {
        font-size: 11px;
        color: #888;
        font-weight: 500;
        margin-bottom: 3px
    }

    .data-value {
        font-size: 13px;
        color: #1c2c4a;
        font-weight: 500
    }

    .data-value.empty {
        color: #ccc;
        font-style: italic;
        font-weight: 400
    }

    .sub-header {
        background: #185fa5;
        color: #fff;
        font-size: 12px;
        font-weight: 600;
        padding: 7px 1rem
    }

    .dc-badge {
        display: inline-block;
        font-size: 11px;
        font-weight: 600;
        padding: 2px 8px;
        border-radius: 12px;
        background: #e8eef8;
        color: #0c447c
    }

    .aviso {
        background: #e8eef8;
        border: 1px solid #b5d4f4;
        border-radius: 6px;
        padding: 10px 1rem;
        font-size: 12px;
        color: #0c447c;
        display: flex;
        align-items: flex-start;
        gap: 8px;
        margin-top: .5rem
    }

    .aviso svg {
        width: 14px;
        height: 14px;
        stroke: #1351b4;
        fill: none;
        stroke-width: 2;
        flex-shrink: 0;
        margin-top: 1px
    }
</style>
<div>
    <div class="section-card">
        <div class="section-header">
            <svg viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                <circle cx="12" cy="7" r="4" />
            </svg>
            Dados Cadastrais
        </div>
        <div class="sub-header">Dados Pessoais</div>
        <div class="data-grid">
            <div class="data-cell">
                <div class="data-label">Matrícula</div>
                <div class="data-value">111111</div>
            </div>
            <div class="data-cell">
                <div class="data-label">CPF</div>
                <div class="data-value">123.456.789.11</div>
            </div>
            <div class="data-cell">
                <div class="data-label">RG</div>
                <div class="data-value">1234567</div>
            </div>
            <div class="data-cell span3">
                <div class="data-label">Nome</div>
                <div class="data-value">Nome Mockado Jr.</div>
            </div>
            <div class="data-cell">
                <div class="data-label">Data de Nascimento</div>
                <div class="data-value">01/01/1980</div>
            </div>
            <div class="data-cell">
                <div class="data-label">Sexo</div>
                <div class="data-value">Masculino</div>
            </div>
            <div class="data-cell">
                <div class="data-label">Estado Civil</div>
                <div class="data-value"><span class="dc-badge">Solteiro</span></div>
            </div>
        </div>
        <div class="sub-header" style="background:#0d3f8f">Mensagem sobre o Piso de Enfermagem</div>
        <div class="data-grid">
            <div class="data-cell">
                <div class="data-label">Competência</div>
                <div class="data-value empty">não informado</div>
            </div>
            <div class="data-cell">
                <div class="data-label">Complemento Mensal da União</div>
                <div class="data-value empty">não informado</div>
            </div>
            <div class="data-cell"></div>
            <div class="data-cell span3">
                <div class="data-label">Mensagem</div>
                <div class="data-value empty">sem mensagens no momento</div>
            </div>
        </div>
    </div>
    <div class="aviso" style="margin-top:.5rem">
        <svg viewBox="0 0 24 24">
            <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" />
        </svg>
        As informações sobre o Piso de Enfermagem são atualizadas conforme repasse da União ao Município.
    </div>
</div>