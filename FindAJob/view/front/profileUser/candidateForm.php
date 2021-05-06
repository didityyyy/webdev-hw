<?php include  $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php'; ?>
<?php // include '../../../src/controllers/front/profileUser/jobsController.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/profileUser/candidateFormController.php'; ?>

<div class="container-xxl" style="min-height:70vh;">
    <div>
        <form class="row" method="post" style="width: 80%; margin: 50px auto;">
            <h3 class="text-center col-12 title-form">Форма за кандидатстване</h3>

            <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/error.php'; ?>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/success.php'; ?>

            <div class="row">
                <h4 class="col-12">Лична информация</h4>
                <div class="col-md-6">
                    <label for="firstnameCandidate" class="form-label">Име</label>
                    <input type="text" class="form-control" name="firstnameCandidate">
                </div>
                <div class="col-md-6">
                    <label for="lastnameCandidate" class="form-label">Фамилия</label>
                    <input type="text" class="form-control" name="lastnameCandidate">
                </div>
                <div class="col-12">
                    <label for="emailCandidate" class="form-label">Имейл</label>
                    <input type="text" class="form-control" name="emailCandidate">
                </div>
                <div class="col-12">
                    <label for="addressCandidate" class="form-label">Адрес</label>
                    <input type="text" class="form-control" name="addressCandidate">
                </div>
                <div class="col-md-8">
                    <label for="cityCandidate" class="form-label">Град</label>
                    <input type="text" class="form-control" name="cityCandidate">
                </div>
                <div class="col-md-4">
                    <label for="zipCandidate" class="form-label">Пощенски код</label>
                    <input type="text" class="form-control" name="zipCandidate">
                </div>
                <div class="col-md-8">
                    <label for="phoneCandidate" class="form-label">Телефон за връзка</label>
                    <input type="text" class="form-control" name="phoneCandidate">
                </div>
                <div class="col-md-4">
                    <label for="birthCandidate" class="form-label">Дата на раждане</label>
                    <input type="date" class="form-control " name="birthCandidate">
                </div>
            </div>
            <h4 class="col-12">Трудов стаж</h4>
            <div class="row">
                <div class="col-md-12">
                    <textarea class="form-control" name="workexperienceCandidate" rows="5" cols="200" placeholder="Дата от/до ; 
Име и адрес на работодателя ; 
Вид на дейността ; 
Заемана длъжност ; 
Основни дейности и отговорности"></textarea>
                </div>
            </div>
            <h4 class="col-12">Образование и обучение</h4>

            <div class="row">
                <div class="col-md-12">
                    <textarea class="form-control" name="educationexperienceCandidate" rows="5" cols="200" placeholder="Дата от/до ; 
Име и вид на обучаващата или образователна организация ; 
Наименование на придобитата квалификация "></textarea>
                </div>
            </div>
            <h4 class="col-12">Лични умения</h4>
            <div class="row">
                <div class="col-md-12">
                    <textarea class="form-control" name="personalexperienceCandidate" rows="5" cols="200" placeholder="Майчин език ; 
Други езици ; 
Социални умения , организационни умения , технически умения , други ;
Свидетелство за управление на МПС  "></textarea>
                </div>
            </div>
            <div class="col-6 mx-auto justify-content-md-end jobsList">
                <a href="">
                    <button class="btn btn-lg btn-success" type="submit" style="width: 100%;" name="candidate-form-btn">Кандидатствай</button>
                </a>
            </div>
            <input type='hidden' value='<?php echo $_SESSION['username']; ?>' name='usernameClient' />
        </form>
    </div>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>