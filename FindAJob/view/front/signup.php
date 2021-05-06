<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/signupController.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php' ?>

<div class="container-xxl signup">
    <div class="row">
        <div class="col-md-6 offset-md-3 form-div my-5">

            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-reg-client-tab" data-bs-toggle="tab" data-bs-target="#nav-reg-client" type="button" role="tab" aria-controls="nav-reg-client" aria-selected="true">Регистрация за Потребители</button>
                    <button class="nav-link" id="nav-reg-company-tab" data-bs-toggle="tab" data-bs-target="#nav-reg-company" type="button" role="tab" aria-controls="nav-reg-company" aria-selected="false">Регистрация за Фирми</button>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-reg-client" role="tabpanel" aria-labelledby="nav-reg-client-tab">
                    <form action="" method="post">
                        <h3 class="text-center">Регистрация</h3>

                        <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/error.php'; ?>
                        <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/success.php'; ?>

                        <div class="form-group">
                            <label for="firstnameClient" class="form-label">Име</label>
                            <input type="text" class="form-control" name="firstnameClient">
                        </div>
                        <div class="form-group">
                            <label for="lastnameClient" class="form-label">Фамилия</label>
                            <input type="text" class="form-control" name="lastnameClient">
                        </div>
                        <div class="form-group">
                            <label for="usernameRegisterClient" class="form-label">Потребителско име</label>
                            <input type="text" class="form-control" name="usernameRegisterClient">
                        </div>
                        <div class="form-group">
                            <label for="emailClient" class="form-label">Имейл</label>
                            <input type="text" class="form-control" name="emailClient">
                        </div>
                        <div class="form-group">
                            <label for="repeatemailClient" class="form-label">Повтори имейл</label>
                            <input type="text" class="form-control" name="repeatemailClient">
                        </div>
                        <div class="form-group">
                            <label for="passwordRegisterClient" class="form-label">Парола</label>
                            <input type="password" class="form-control" name="passwordRegisterClient">
                        </div>
                        <div class="form-group">
                            <label for="repeatpasswordClient" class="form-label">Повтори парола</label>
                            <input type="password" class="form-control" name="repeatpasswordClient">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="invalidCheckClient">
                                <label class="form-check-label" for="invalidCheckClient">
                                    Съгласен съм с Условията за ползване, Политиката за защита на лични данни
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block btn-lg" name="signup-btn-client" value="Регистрация">
                            <div id="noAccount" class="form-text text-center">Имате акаунт? <a href="sign-in">Вход</a></div>
                        </div>
                    </form>
                </div>


                <div class="tab-pane fade" id="nav-reg-company" role="tabpanel" aria-labelledby="nav-reg-company-tab">
                    <form action="" method="post" enctype="multipart/form-data">
                        <h3 class="text-center">Регистрация</h3>

                        <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/error.php'; ?>
                        <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/success.php'; ?>

                        <div class="form-group">
                            <label for="firstnameCompany" class="form-label">Име</label>
                            <input type="text" class="form-control" name="firstnameCompany">
                        </div>
                        <div class="form-group">
                            <label for="lastnameCompany" class="form-label">Фамилия</label>
                            <input type="text" class="form-control" name="lastnameCompany">
                        </div>
                        <div class="form-group">
                            <label for="phoneCompany" class="form-label">Телефон</label>
                            <input type="text" class="form-control" name="phoneCompany">
                        </div>
                        <div class="form-group">
                            <label for="usernameRegisterCompany" class="form-label">Потребителско име</label>
                            <input type="text" class="form-control" name="usernameRegisterCompany">
                        </div>
                        <div class="form-group">
                            <label for="emailCompany" class="form-label">Имейл</label>
                            <input type="text" class="form-control" name="emailCompany">
                        </div>
                        <div class="form-group">
                            <label for="repeatemailCompany" class="form-label">Повтори имейла</label>
                            <input type="text" class="form-control" name="repeatemailCompany">
                        </div>
                        <div class="form-group">
                            <label for="passwordRegisterCompany" class="form-label">Парола</label>
                            <input type="password" class="form-control" name="passwordRegisterCompany">
                        </div>
                        <div class="form-group">
                            <label for="repeatpasswordCompany" class="form-label">Повтори парола</label>
                            <input type="password" class="form-control" name="repeatpasswordCompany">
                        </div>
                        <div class="form-group">
                            <label for="companyname" class="form-label">Юридическо име на фирмата/организацията</label>
                            <input type="text" class="form-control" name="companyname">
                        </div>
                        <div class="form-group">
                            <label for="companyid" class="form-label">БУЛСТАТ</label>
                            <input type="text" class="form-control" name="companyid">
                        </div>
                        <div class="form-group">
                            <label for="companylogo" class="form-label">Лого</label>
                            <input class="form-control" type="file" name="companylogo" multiple accept=".jpg, .png, .gif, .jpeg"  style="padding: 3px;">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="invalidCheckCompany">
                                <label class="form-check-label" for="invalidCheckCompany">
                                    Съгласен съм с Условията за ползване, Политиката за защита на лични данни
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block btn-lg" name="signup-btn-company" value="Регистрация">
                            <div id="noAccount" class="form-text text-center">Имате акаунт? <a href="sign-in">Вход</a></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php' ?>