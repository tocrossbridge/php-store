<!DOCTYPE html>
<html>
    <head>
        <title>Lojinha PHP</title>
    </head>
    <link rel="stylesheet" href="./src/assets/style.css">
    <body>
        <?php include "src/config.php"; ?>
        <?php include './src/layout/header.php';?>
        <?php include './src/layout/main.php';?>
        <?php include './src/layout/footer.php';?>
        <?php include './src/components/modal.php';?>

        <script>
            // Script do modal:
            document.addEventListener('DOMContentLoaded', function() {
                var modal = document.getElementById('successModal');
                var span = document.getElementsByClassName('close')[0];

                // Para quando o user clicar no "x":
                span.onclick = function() {
                    modal.style.display = 'none';
                    window.location.reload();
                }

                // Para quando o user clicar fora do modal:
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = 'none';
                        window.location.reload();
                    }
                }
            });
        </script>
    </body>
</html>