<?php include  $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/profileHR/companiesHRController.php'; ?>

<div class="container-xxl" style="min-height:70vh;">
    <div class="col-md-8 offset-md-2 my-5">

        <div class="col-12 text-center">
            <h3 class="col-12 title-form">Фирма</h3>
            <h4><?php echo $row['companyname']; ?></h4>
            <img src="images/logos/<?php echo $row['logo'] ?>" class="logo">
        </div>

        <ul class="jobsList">

            <div class="col-12 description text-center">
                <h6>Лични данни</h6>
                <p><span>Имена: </span><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?> </p>
                <p><span>Имейл: </span><?php echo $row['email']; ?> </p>
                <p><span>Потребителско име: </span><?php echo $row['username']; ?> </p>
                <p><span>БУЛСТАТ: </span><?php echo $row['companyid']; ?> </p>
                <p><span>Телефон за връзка: </span><?php echo $row['phone']; ?> </p>
            </div>

            <div class="col-12 description text-center">
                <h6>Обяви</h6>
                <?php while ($row = mysqli_fetch_array($resultsjobs)) : ?>
                    <p><span><?php echo $row['title']; ?></span></p>
                <?php endwhile; ?>
            </div>
    </div>

    </ul>
</div>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>