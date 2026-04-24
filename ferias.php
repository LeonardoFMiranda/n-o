<?php
/*
 * pages/ferias.php
 * Conteúdo carregado via AJAX — sem <html>, <head> ou <body>
 * Substitua os dados mockados pelas queries reais do banco
 */

// ── Dados mockados — substitua pelas queries reais ──────────────────────────
// Exemplo de como ficaria com banco:
// $ferias_gozadas = $db->query("
//     SELECT periodo_aquisitivo_ini, periodo_aquisitivo_fim,
//            periodo_gozo_ini, periodo_gozo_fim,
//            dias_gozo, abono, mes_pagamento
//     FROM rh_ferias
//     WHERE matricula = ? AND situacao = 'GOZADA'
//     ORDER BY periodo_aquisitivo_ini DESC
// ", [$_SESSION['matricula']]);

$ferias_gozadas = [
    [
        'periodo_aquisitivo' => '07/06/2022 à 06/06/2023',
        'abono'              => 0,
        'periodos'           => [
            [
                'gozo_ini'       => '02/01/2024',
                'gozo_fim'       => '31/01/2024',
                'dias_gozo'      => 30,
                'mes_pagamento'  => '2024/01',
            ],
        ],
    ],
    [
        'periodo_aquisitivo' => '07/06/2023 à 06/06/2024',
        'abono'              => 0,
        'periodos'           => [
            [
                'gozo_ini'       => '02/06/2025',
                'gozo_fim'       => '01/07/2025',
                'dias_gozo'      => 30,
                'mes_pagamento'  => '2025/06',
            ],
        ],
    ],
];

$ferias_a_gozar = [
    [
        'periodo_aquisitivo' => '07/06/2024 à 06/06/2025',
    ],
];
// ────────────────────────────────────────────────────────────────────────────
?>

<style>
.ferias-section-title {
    font-size: 14px;
    font-weight: 600;
    color: #1c2c4a;
    padding: 10px 0 8px;
    border-bottom: 2px solid #1351b4;
    margin-bottom: 1rem;
}

.ferias-block {
    background: #fff;
    border: 0.5px solid #dee2e6;
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 1rem;
}

.ferias-block-header {
    background: #1351b4;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 9px 1rem;
}

.ferias-block-header .periodo {
    font-size: 13px;
    font-weight: 600;
    color: #fff;
}

.ferias-block-header .abono {
    font-size: 12px;
    color: #cde;
}

.ferias-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 13px;
}

.ferias-table thead tr {
    background: #e8eef8;
}

.ferias-table thead th {
    padding: 8px 1rem;
    text-align: left;
    font-size: 11px;
    font-weight: 600;
    color: #0c447c;
    border-bottom: 0.5px solid #dee2e6;
    white-space: nowrap;
}

.ferias-table tbody tr {
    border-bottom: 0.5px solid #f0f0f0;
}

.ferias-table tbody tr:last-child {
    border-bottom: none;
}

.ferias-table tbody tr:hover {
    background: #f8faff;
}

.ferias-table td {
    padding: 10px 1rem;
    color: #333;
}

.ferias-a-gozar-block {
    background: #fff;
    border: 0.5px solid #dee2e6;
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: .75rem;
}

.ferias-a-gozar-row {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 10px 1rem;
    border-bottom: 0.5px solid #f0f0f0;
    font-size: 13px;
}

.ferias-a-gozar-row:last-child {
    border-bottom: none;
}

.ferias-a-gozar-label {
    font-size: 11px;
    font-weight: 600;
    color: #888;
    min-width: 130px;
}

.ferias-a-gozar-value {
    color: #1c2c4a;
    font-weight: 500;
}

.ferias-aviso {
    background: #fef3c7;
    border: 1px solid #fcd34d;
    border-radius: 6px;
    padding: 10px 1rem;
    font-size: 12px;
    color: #92400e;
    display: flex;
    align-items: flex-start;
    gap: 8px;
    margin-top: .5rem;
}

.ferias-aviso svg {
    width: 15px;
    height: 15px;
    stroke: #b45309;
    fill: none;
    stroke-width: 2;
    flex-shrink: 0;
    margin-top: 1px;
}

.badge-dias {
    display: inline-block;
    background: #e8eef8;
    color: #0c447c;
    font-size: 11px;
    font-weight: 600;
    padding: 2px 10px;
    border-radius: 12px;
}
</style>

<!-- <div class="db-breadcrumb">
    Natal Online &rsaquo; Consulta Funcional &rsaquo; <span>Férias</span>
</div> -->
<div class="db-page-title">Férias</div>

<!-- ── Férias Gozadas ─────────────────────────────────────────────────── -->
<div class="ferias-section-title">Férias Gozadas</div>

<?php foreach ($ferias_gozadas as $fg): ?>
<div class="section-card">
    <div class="section-header">
        <span class="periodo">
            Período Aquisitivo: <?= htmlspecialchars($fg['periodo_aquisitivo']) ?>
        </span>
        <span class="abono">
            Abono: <?= (int)$fg['abono'] ?>
        </span>
    </div>
    <table class="ferias-table">
        <thead>
            <tr>
                <th>Períodos de Gozo</th>
                <th>Dias de Gozo</th>
                <th>Mês Pagamento</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fg['periodos'] as $p): ?>
            <tr>
                <td><?= htmlspecialchars($p['gozo_ini']) ?> à <?= htmlspecialchars($p['gozo_fim']) ?></td>
                <td><span class="badge-dias"><?= (int)$p['dias_gozo'] ?> dias</span></td>
                <td><?= htmlspecialchars($p['mes_pagamento']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php endforeach; ?>

<!-- ── Férias a Gozar ─────────────────────────────────────────────────── -->
<div class="ferias-section-title" style="margin-top:1.5rem">Férias a Gozar</div>

<?php foreach ($ferias_a_gozar as $fa): ?>
<div class="ferias-a-gozar-block">
    <div class="ferias-a-gozar-row">
        <span class="ferias-a-gozar-label">Período Aquisitivo:</span>
        <span class="ferias-a-gozar-value"><?= htmlspecialchars($fa['periodo_aquisitivo']) ?></span>
    </div>
</div>
<?php endforeach; ?>

<div class="ferias-aviso">
    <svg viewBox="0 0 24 24">
        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
        <line x1="12" y1="9" x2="12" y2="13"/>
        <line x1="12" y1="17" x2="12.01" y2="17"/>
    </svg>
    Períodos aquisitivos de férias ainda não gozadas estão sujeitos a avaliação pela Instituição.
</div>