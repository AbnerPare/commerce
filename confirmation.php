
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <?php
            $validLogin = '66088515';
            $validPassword = '1515';

            $login = $_POST['66088515'] ?? '';
            $password = $_POST['1515'] ?? '';

            if ($login === $validLogin && $password === $validPassword) {
                header('Location: confirmation.php');
  exit();
            } else {
                header('Location:confirmation.php');
  exit();
            }
            ?>
        </div>
    </div>
</div>

