<?php include  $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/profileCompany/viewCandidatesCompanyController.php'; ?>

<div class="container-xxl">
    <div class="row" style="min-height:80vh;">
        <div class="col-md-8 offset-md-2 form-div my-5">

            <h3 class="text-center col-12 title-form">Кандидатури по обява : <?php echo $rowid['Job']; ?> </h3>
            <form>
                <div class="col-4 offset-4">
                    <input class="form-control form-control-lg me-2" type="search" name="searchbox" placeholder="Потърси потребител" aria-label="Search" onchange="this.form.submit()">
                </div>
            </form>

            <div>
                <ul class="jobsList">
                        <li class="row" style="background-color:#CED4DA;">
                            <div class="col-4">
                                <h4 >Име и Фамилия</h4>
                            </div>
                            <div class="col-4">
                                <h4>Имейл</h4>
                            </div>
                            <div class="col-4">
                                <h4>Статус</h4>
                            </div>
                        </li>
                    <?php while ($row = mysqli_fetch_array($resultsC)) : ?>
                        <li class="row">
                            <div class="col-4">
                                <a href="/FindAJob/details-candidates-person?id=<?php echo $row['id_c']; ?>">
                                    <h6><?php echo $row['firstname'] . " " . $row['lastname']; ?></h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <?php echo $row['email']; 
                                ?>
                            </div>
                            <div class="col-4">
                                <?php echo $row['Status']; 
                                ?>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>

        </div>
    </div>
</div>



<?php include  $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>