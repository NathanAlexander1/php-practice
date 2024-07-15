<?php
    session_start();
    if (!isset($_SESSION['display'])) {
        $_SESSION['display'] = '';
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $btn = $_POST['btn'];

        if ($btn == 'C') {
            $_SESSION['display'] = '';
        } elseif ($btn == '=') {
            try { 
                @$_SESSION['display'] = eval("return " . $_SESSION['display'] . ";");
            } catch (ParseError $e) {
                $_SESSION['display'] = 'Oh barnacles!';
            }
        } else {
            $_SESSION['display'] .= $btn;
        }
    }
?>