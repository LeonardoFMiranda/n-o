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
<div class="preview-wrap">

    <div class="section-card">
        <div class="section-header">
            <svg viewBox="0 0 24 24">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                <polyline points="14 2 14 8 20 8" />
            </svg>
            Emitir Comprovante
        </div>
        <div class="pad">
            <div class="row">
                <div class="form-field">
                    <span class="form-label">Ano Base</span>
                    <select class="form-select">
                        <option>2025</option>
                        <option>2024</option>
                    </select>
                </div>
                <button class="btn-p">
                    <svg viewBox="0 0 24 24">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                        <polyline points="7 10 12 15 17 10" />
                        <line x1="12" y1="15" x2="12" y2="3" />
                    </svg>
                    Emitir
                </button>
            </div>
        </div>
    </div>

</div>