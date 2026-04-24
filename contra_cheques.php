<style>
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
        cursor: pointer;
        margin: 0;
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
        opacity: .5;
        margin: 0;
    }

    .btn-o svg {
        width: 14px;
        height: 14px;
        stroke: #1351b4;
        fill: none;
        stroke-width: 2
    }
</style>
<div>
    <div class="section-card">
        <div class="section-header">
            <svg viewBox="0 0 24 24">
                <rect x="1" y="4" width="22" height="16" rx="2" />
                <line x1="1" y1="10" x2="23" y2="10" />
            </svg>
            Filtrar Contra-cheque
        </div>
        <div class="pad">
            <div class="row">
                <div class="form-field"><span class="form-label">Ano Base</span><select class="form-select">
                        <option>2026</option>
                    </select></div>
                <div class="form-field"><span class="form-label">Mês</span><select class="form-select">
                        <option>Março</option>
                    </select></div>
                <div class="form-field"><span class="form-label">Tipo de Folha</span><select class="form-select">
                        <option>Salário</option>
                    </select></div>
                <button class="btn-p"><svg viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" />
                    </svg>Pesquisar</button>
                <button class="btn-o"><svg viewBox="0 0 24 24">
                        <polyline points="6 9 6 2 18 2 18 9" />
                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                        <rect x="6" y="14" width="12" height="8" />
                    </svg>Imprimir Contra-cheque</button>
            </div>
        </div>
    </div>
</div>