<main>
    <section id="cards">
        <div class="card-incomes card">
            <h2>
                Entradas
            </h2>
            <h3>
                <?php
                $total_incomes = 0;
                foreach ($items as $item) {

                    if ($item['type'] == "entrada") {
                        $total_incomes += $item['value'];
                    }
                }
                echo 'R$' . number_format($total_incomes, 2, ",", ".");
                ?>
            </h3>
            <div class="icon">
                <img src="<?= $base ?>/assets/images/income-icon.svg" alt="">
            </div>
        </div>

        <div class="card-expenses card">
            <h2>
                Saídas
            </h2>
            <h3>
                <?php
                $total_expenses = 0;
                foreach ($items as $item) {

                    if ($item['type'] == "saída") {
                        $total_expenses += $item['value'];
                    }
                }
                echo 'R$' . number_format($total_expenses, 2, ",", ".");
                ?>
            </h3>
            <div class="icon">
                <img src="<?= $base ?>/assets/images/expense-icon.svg" alt="">
            </div>
        </div>

        <div class="card-balance card">
            <h2>
                Balanço
            </h2>
            <h3>
                <?php
                $balance = $total_incomes - $total_expenses;
                echo 'R$' . number_format($balance, 2, ",", ".");
                ?>
            </h3>
            <div class="icon">
                <img src="<?= $base ?>/assets/images/balance-icon.svg" alt="">
            </div>
        </div>
    </section>