<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/contactsController.php'; ?>

<div class="container-xxl signup">
    <div class="row" style="min-height:80vh;">
        <div class="container my-5 contact-us  align-self-center">
            <h4>Get in touch</h4>
            <h5>Feel free to drop us a line below!</h5>
            <form class="mt-4" method="POST">

                <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/error.php'; ?>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/success.php'; ?>

                <div class="form-group mt-3">
                    <input type="text" name="contact-name" class="form-control form-control-md" id="contact-name" placeholder="Вашето име...">
                </div>
                <div class="form-group">
                    <input type="email" name="contact-email" class="form-control form-control-md" id="contact-email" placeholder="Вашият имейл...">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="contact-question" name="contact-question" placeholder="Вашият въпрос..."></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" name="contact-send" value="Изпрати">
                </div>
            </form>
        </div>
        <div class="container contacts  align-self-center">
            <h4>Contact us</h4>
            <div class="mt-4 d-flex flex-column">
                <div class="my-2"><i class="fas fa-map-marker-alt mr-3"></i> гр.Варна ул.Опълченска №5</div>
                <div class="my-2"><i class="fas fa-envelope mr-3"></i> findajob@mail.bg</div>
                <div class="my-2"><i class="fab fa-skype mr-3"></i> findajob21</div>
                <div class="my-2"><i class="fas fa-phone-alt mr-3"></i> +359 852 452 125</div>
            </div>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>