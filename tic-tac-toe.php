<?php
// Initialisation du plateau de jeu
if (!isset($_SESSION['board'])) {
    $_SESSION['board'] = array_fill(0, 3, array_fill(0, 3, ''));
}

// Initialisation du joueur actuel
if (!isset($_SESSION['current_player'])) {
    $_SESSION['current_player'] = 'X';
}

// Initialisation du statut de la partie
if (!isset($_SESSION['game_over'])) {
    $_SESSION['game_over'] = false;
}

// Fonction pour vérifier si un joueur a gagné
function checkWin($board, $player) {
    // Vérifier les lignes
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] === $player && $board[$i][1] === $player && $board[$i][2] === $player) {
            return true;
        }
    }
    // Vérifier les colonnes
    for ($j = 0; $j < 3; $j++) {
        if ($board[0][$j] === $player && $board[1][$j] === $player && $board[2][$j] === $player) {
            return true;
        }
    }
    // Vérifier les diagonales
    if ($board[0][0] === $player && $board[1][1] === $player && $board[2][2] === $player) {
        return true;
    }
    if ($board[0][2] === $player && $board[1][1] === $player && $board[2][0] === $player) {
        return true;
    }
    return false;
}

// Fonction pour vérifier si le plateau est plein (match nul)
function isBoardFull($board) {
    foreach ($board as $row) {
        if (in_array('', $row)) {
            return false;
        }
    }
    return true;
}

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$_SESSION['game_over']) {
    $row = $_POST['row'];
    $col = $_POST['col'];
    $current_player = $_SESSION['current_player'];

    // Vérifier si la case est vide
    if ($_SESSION['board'][$row][$col] === '') {
        $_SESSION['board'][$row][$col] = $current_player;

        // Vérifier si le joueur actuel a gagné
        if (checkWin($_SESSION['board'], $current_player)) {
            $_SESSION['game_over'] = true;
            $message = "Le joueur $current_player a gagné !";
        } elseif (isBoardFull($_SESSION['board'])) {
            $_SESSION['game_over'] = true;
            $message = "Match nul !";
        } else {
            // Changer de joueur
            $_SESSION['current_player'] = ($current_player === 'X') ? 'O' : 'X';
        }
    }
}

// Réinitialiser la partie
if (isset($_POST['reset'])) {
    session_destroy();
    session_start();
    $_SESSION['board'] = array_fill(0, 3, array_fill(0, 3, ''));
    $_SESSION['current_player'] = 'X';
    $_SESSION['game_over'] = false;
    $message = '';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
            border: 1px solid black;
        }
        input[type="submit"] {
            width: 100%;
            height: 100%;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }
        .message {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
        .reset-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Tic Tac Toe</h1>
    <form method="post">
        <table>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <td>
                            <?php if ($_SESSION['board'][$i][$j] === '' && !$_SESSION['game_over']): ?>
                                <input type="submit" name="cell" value="">
                                <input type="hidden" name="row" value="<?php echo $i; ?>">
                                <input type="hidden" name="col" value="<?php echo $j; ?>">
                            <?php else: ?>
                                <?php echo $_SESSION['board'][$i][$j]; ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <?php if ($_SESSION['game_over']): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        <input type="submit" name="reset" value="Recommencer" class="reset-button">
    </form>
</body>
</html>


