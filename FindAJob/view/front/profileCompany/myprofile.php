<?php include  $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/profileCompany/myProfileController.php'; ?>

<div class="container-xxl bg-theme" style="min-height:70vh;">
    <div class="row">
        <div class="col-4">
            <div class="bg-lightblue p-3 m-5 rounded" style="height:90%;">
                <ul class="list-unstyled ps-0" style="color:#fff;">
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded">
                            Профил
                        </button>
                        <div>
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#view-profile" class="link-dark rounded" data-toggle="collapse">Преглед на профил</a></li>
                                <li><a href="#change-password" class="link-dark rounded" data-toggle="collapse">Смяна на парола</a></li>
                                <li><a href="#delete-profile" class="link-dark rounded" data-toggle="collapse">Изтриване на профил</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded">
                            Oбяви
                        </button>
                        <div>
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#view-jobs" class="link-dark rounded" data-toggle="collapse">Качени обяви</a></li>
                                <li><a href="#status-jobs" class="link-dark rounded" data-toggle="collapse">Статус на обяви</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="border-top my-3"></li>
                </ul>
            </div>
        </div>
        <div class="col-8 mt-5">
            <div class="text-center" id="profile">
                <div id="view-profile" class="collapse show">
                    <div class="border-bottom">
                        <h3> Преглед на профил </h3>
                    </div>

                    <ul class="mt-5">

                        <li class="row">
                            <div class="col-12" style="text-align:center;">
                                <img src="images/logos/<?php echo $row['logo'] ?>" class="logo">
                            </div>
                            <div class="col-12">
                                <p>Потребителско име: <?php echo $row['username']; ?></p>
                            </div>
                            <div class="col-12">
                                <p>Име: <?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></p>
                            </div>
                            <div class="col-12">
                                <p>Телефон: <?php echo $row['phone']; ?></p>
                            </div>
                            <div class="col-12">
                                <p>Имейл: <?php echo $row['email']; ?></p>
                            </div>
                            <div class="col-12">
                                <p>Име на компания: <?php echo $row['companyname']; ?></p>
                            </div>
                            <div class="col-12">
                                <p>БУЛСТАТ: <?php echo $row['companyid']; ?></p>
                            </div>
                        </li>


                    </ul>
                </div>

                <div id="change-password" class="collapse">
                    <div class="border-bottom">
                        <h3> Смяна на парола </h3>
                    </div>

                    <div class="mt-5">

                        <form class="row d-flex flex-column justify-content-center align-items-center" method="POST">

                            <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/error.php'; ?>
                            <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/success.php'; ?>

                            <div class="form-group col-5">
                                <label for="oldPasswordCompany" class="form-label">Стара парола</label>
                                <input type="password" class="form-control form-control-sm" name="oldPasswordCompany">
                            </div>
                            <div class="form-group col-5">
                                <label for="newPasswordCompany" class="form-label">Нова парола</label>
                                <input type="password" class="form-control form-control-sm" name="newPasswordCompany">
                            </div>
                            <div class="form-group col-5">
                                <label for="repeatNewPasswordCompany" class="form-label">Повтори нова парола</label>
                                <input type="password" class="form-control form-control-sm" name="repeatNewPasswordCompany">
                            </div>
                            <div class="form-group col-5">
                                <input type="submit" class="btn btn-primary btn-block btn-md" name="changepassword-btn-company" value="Смяна на парола">
                            </div>
                        </form>

                    </div>
                </div>

                <div id="delete-profile" class="collapse">
                    <div class="border-bottom">
                        <h3> Изтриване на профил </h3>
                    </div>

                    <div class="col-12 my-5">
                        <p>След натискане на бутона , вашият профил ще се изтрие перманентно!</p>
                        <form class="form-group col-5 m-auto" method="POST">
                            <input type="submit" onclick="myFunction()" class="btn btn-danger btn-block btn-md" name="deleteaccount-btn-company" value="Изтрийте профила">
                        </form>
                    </div>

                </div>
            </div>
            <div class="text-center" id="jobs">
                <div id="view-jobs" class="collapse">
                    <div class="border-bottom">
                        <h3> Качени обяви </h3>
                    </div>

                    <div class="col-12 my-5">
                        <ul class="jobsList text-left">
                            <?php while ($rowjobs = mysqli_fetch_array($resultsjobs)) : ?>
                                <li class="row">

                                    <div class="col-8">
                                        <a href="/FindAJob/detailsJobs?id=<?php echo $rowjobs['id']; ?>">
                                            <h6>По обява: <?php echo $rowjobs['Job']; ?></h6>
                                            <p>Номер на обява: <?php echo $rowjobs['id']; ?></p>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <p>Фирма: <?php echo $rowjobs['companyname']; ?></p>
                                    </div>

                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>

                </div>

                <div id="status-jobs" class="collapse">
                    <div class="border-bottom">
                        <h3> Статус на обяви </h3>
                    </div>

                    <div class="col-12 my-5">
                        <ul class="jobsList text-left">
                            <?php while ($rowjobs = mysqli_fetch_array($resultsjobsStatus)) : ?>
                                <li class="row">
                                    <div class="col-8">
                                        <h6>По обява: <?php echo $rowjobs['Job']; ?></h6>
                                        <p style="color: #5cff5c;">
                                            <?php
                                            if ($rowjobs['approved'] == 1) {
                                                echo "Статус: Актуална";
                                            }
                                            ?></p>
                                        <p style="color: #af0000;">
                                            <?php
                                            if ($rowjobs['approved'] == 0) {
                                                echo "Статус: Неодобрена";
                                            }
                                            ?></p>
                                    </div>
                                    <div class="col-4">
                                        <p>Фирма: <?php echo $rowjobs['companyname']; ?></p>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>