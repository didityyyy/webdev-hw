<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php' ; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/admin/addHRController.php'  ?>

<div class="container-xxl" style="min-height:70vh;">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div mt-5">
                <form action="" method="post">
                    <h3 class="text-center title-admin">Добавяне на нов служител</h3>

                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/error.php'; ?>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/success.php'; ?>

                    <div class="form-group">
                        <label for="username" class="form-label">Потребителско име</label>
                        <input type="text" name="username" class="form-control form-control-lg" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Парола</label>
                        <input type="password" name="password" class="form-control form-control-lg" id="password">                  
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="form-label">Име</label>
                        <input type="text" name="firstname" class="form-control form-control-lg" id="firstname">                  
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="form-label">Фамилия</label>
                        <input type="text" name="lastname" class="form-control form-control-lg" id="lastname">                  
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block btn-lg" name="add-hr-btn" value="Добави служител">   
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>