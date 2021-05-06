<?php include  $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/profileHR/candidatesHRController.php'; ?>

<div class="container-xxl" style="min-height:70vh;">
    <div class="col-md-8 offset-md-2 my-5">

        <div class="col-12 text-center">
            <h3 class="col-12 title-form">Кандидатурa</h3>
            <h4>По обява: <?php echo $row['title']; ?></h4>
        </div>

        <ul class="jobsList">

            <div class="col-12 description text-center">
                <h6>Лични данни</h6>
                <p><span>Имена: </span><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?> </p>
                <p><span>Имейл: </span><?php echo $row['email']; ?> </p>
                <p><span>Адрес: </span><?php echo $row['address']; ?> </p>
                <p><span>Град: </span><?php echo $row['city']; ?> <span>ПK: </span><?php echo $row['zipcode']; ?></p>
                <p><span>Телефон за връзка: </span><?php echo $row['phone']; ?> </p>
                <p><span>Датана на раждане: </span><?php echo $row['birthdate']; ?> </p>
            </div>
            <div class="col-12 description text-center">
                <h6>Трудов стаж</h6>
                <pre class="text-break">
                <?php echo $row['workexperience']; ?></pre>
            </div>
            <div class="col-12 description text-center">
                <h6>Образование и обучение</h6>
                <pre class="text-break">
                <?php echo $row['educationexperience']; ?></pre>
            </div>
            <div class="col-12 description text-center">
                <h6>Лични умения</h6>
                <pre class="text-break">
                <?php echo $row['personalexperience']; ?></pre>
            </div>

        </ul>
    </div>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>