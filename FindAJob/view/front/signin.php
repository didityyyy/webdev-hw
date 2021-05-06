<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/signinController.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php' ?>

<div class="container-xxl login">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div" style="margin-top: 150px;">
                <form action="" method="post">
                    <h3 class="text-center">Login</h3>

                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/error.php'; ?>

                    <div class="form-group">
                        <label for="username" class="form-label">Потребителско име</label>
                        <input type="text" name="username" class="form-control form-control-lg" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Парола</label>
                        <input type="password" name="password" class="form-control form-control-lg" id="password">                  
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block btn-lg" name="login-btn" value="Вход">
                        <div id="noAccount" class="form-text text-center">Нямате акаунт? <a href="sign-up">Регистрация</a></div>     
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php' ?>