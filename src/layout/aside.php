<?php
    $registerForm = 'none';
?>

<aside>
    <div class="aside__intro-div">
        <h2>Opções</h2>
        <p style="margin: 0 0 4% 0;">Clique no botão abaixo para cadastrar um produto:</p>
        <button id="registerButton">
            Cadastrar produto
        </button>
    </div>

    <div id="registerForm" style="display: <?= $registerForm?>">
        <?php include './src/components/register-form.php'; ?>   
    </div>
</aside>

<script>
    document.getElementById('registerButton').addEventListener('click', function() {
        var registerForm = document.getElementById('registerForm');
        if (registerForm.style.display === 'none') {
            registerForm.style.display = 'block';
        } else {
            registerForm.style.display = 'none';
        }
    });
</script>