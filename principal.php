<style>
    .matricula-table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #dee2e6;
    }

    .matricula-table thead tr {
        background: var(--sati-card-primary);
    }

    .matricula-table thead th {
        padding: 10px 12px;
        text-align: center;
        font-size: 12px;
        font-weight: 600;
        color: #fff;
        border-right: 1px solid rgba(255, 255, 255, .15);
    }

    .matricula-table thead th:last-child {
        border-right: none;
    }

    .matricula-table tbody tr {
        border-bottom: 0.5px solid #f0f0f0;
        cursor: pointer;
    }

    .matricula-table tbody tr:hover {
        background: #f0f4ff;
    }

    .matricula-table tbody tr.selected {
        background: #e8eef8;
    }

    .matricula-table td {
        padding: 10px 12px;
        text-align: center;
        font-size: 13px;
        color: var(--sati-text-primary);
    }

    .matricula-table td.mat-num {
        font-weight: 600;
        color: var(--sati-text-primary);
    }

    .badge-inst {
        display: inline-block;
        background: #e8eef8;
        color: #0c447c;
        font-size: 11px;
        font-weight: 600;
        padding: 2px 8px;
        border-radius: 12px;
    }

    /* ── Mobile: cada linha vira card ── */
    @media(max-width:600px) {
        .matricula-table thead {
            display: none;
        }

        .matricula-table tbody tr {
            display: block;
            border: 0.5px solid #dee2e6;
            border-radius: 8px;
            margin-bottom: .75rem;
            padding: .75rem 1rem;
        }

        .matricula-table tbody tr.selected {
            border: 1.5px solid #1351b4;
        }

        .matricula-table td {
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: right;
            padding: 5px 0;
            border: none;
        }

        .matricula-table td::before {
            content: attr(data-label);
            font-size: 11px;
            font-weight: 600;
            color: #888;
            text-align: left;
            flex-shrink: 0;
            margin-right: 8px;
        }
    }
</style>

<div style="display: flex; justify-content: center; align-items: center; height: 100%;">
    <div class="content-box">
        <?php
        $matriculas = [
            [
                'numero' => '654321',
                'admissao' => '15/03/2020',
                'cargo' => 'ANALISTA DE SISTEMAS',
                'demissao' => '-',
                'instituicao' => '1',
            ],
            [
                'numero' => '654123',
                'admissao' => '10/11/2018',
                'cargo' => 'TECNICO ADMINISTRATIVO',
                'demissao' => '-',
                'instituicao' => '2',
            ],
        ];
        ?>
        <div style="margin-bottom:1rem;">
            <h2>Selecione a matr&iacute;cula desejada</h2>

            <table class="matricula-table" style="margin-top:.75rem">
                <thead>
                    <tr>
                        <th>N&uacute;mero da Matr&iacute;cula</th>
                        <th>Data Admiss&atilde;o</th>
                        <th>Cargo</th>
                        <th>Data Demiss&atilde;o</th>
                        <th>Institui&ccedil;&atilde;o</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($matriculas as $m): ?>
                    <tr onclick="selectRow(this)">
                        <td class="mat-num" data-label="Matrícula"><?= $m['numero'] ?></td>
                        <td data-label="Admissão"><?= $m['admissao'] ?></td>
                        <td data-label="Cargo"><?= $m['cargo'] ?></td>
                        <td data-label="Demissão"><?= $m['demissao'] ?></td>
                        <td data-label="Instituição"><span class="badge-inst">Inst. <?= $m['instituicao'] ?></span></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="divider"></div>
        <h2>Prefeitura Municipal do Natal/RN</h2>
        <p>
            Para informa&ccedil;&otilde;es ou esclarecimentos de d&uacute;vidas operacionais do site,
            favor contatar o Setor de Inform&aacute;tica pelos telefones:
        </p>
        <p class="contact">
            <strong>(99) 9999-9999</strong> ou pelo e-mail
            <a href="mailto:e-cidade@e-cidade.com.br">e-cidade@e-cidade.com.br</a>
        </p>
    </div>
</div>