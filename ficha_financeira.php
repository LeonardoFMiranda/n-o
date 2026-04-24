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

    .form {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
        flex-direction: column;
        justify-content: center;
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
        padding: 0 6px;
        border-bottom: 0;
        width: auto;
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
<!-- 3. Ficha Financeira -->
<div>
    <div class="section-card">
        <div class="section-header">
            <svg viewBox="0 0 24 24">
                <rect x="2" y="3" width="20" height="14" rx="2" />
                <line x1="8" y1="21" x2="16" y2="21" />
                <line x1="12" y1="17" x2="12" y2="21" />
            </svg>
            Pesquisar por Período
        </div>
        <div class="pad">
            <div class="form">
                <fieldset class="ff-fieldset">
                    <legend class="ff-legend">Período Inicial</legend>
                    <div style="display:flex;gap:.75rem">
                        <div class="form-field"><span class="form-label">Ano Base</span><select class="form-select">
                                <option>2026</option>
                            </select></div>
                        <div class="form-field"><span class="form-label">Mês</span><select class="form-select">
                                <option>Março</option>
                            </select></div>
                    </div>
                </fieldset>
                <fieldset class="ff-fieldset">
                    <legend class="ff-legend">Período Final</legend>
                    <div style="display:flex;gap:.75rem">
                        <div class="form-field"><span class="form-label">Ano Base</span><select class="form-select">
                                <option>2026</option>
                            </select></div>
                        <div class="form-field"><span class="form-label">Mês</span><select class="form-select">
                                <option>Março</option>
                            </select></div>
                    </div>
                </fieldset>
                <div style="display:flex;gap:.75rem;align-items:flex-end">
                    <button class="btn-p"><svg viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg>Pesquisar</button>
                    <button class="btn-o"><svg viewBox="0 0 24 24">
                            <polyline points="6 9 6 2 18 2 18 9" />
                            <rect x="6" y="14" width="12" height="8" />
                        </svg>Imprimir Ficha</button>
                </div>
            </div>
        </div>
    </div>
</div>