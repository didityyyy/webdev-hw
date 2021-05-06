<?php include  $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/profileCompany/viewCandidatesCompanyController.php'; ?>

<div class="container-xxl">
    <div class="row" style="min-height:80vh;">
        <div class="col-md-8 offset-md-2 form-div my-5">

            <h3 class="text-center col-12 title-form">Кандидатури</h3>
            <form>
                <div class="col-4 offset-4">
                    <select name="job" class="form-control form-control-lg" onchange="this.form.submit()">
                        <option selected disabled>Изберете обява</option>
                        <?php while ($row = mysqli_fetch_array($resultsjobs)) : ?>
                            <option class="" value="<?php echo $row['id']; ?>"><?php echo $row['Job']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </form>

            <div>
                <ul class="jobsList">
                    <?php while ($row = mysqli_fetch_array($results)) : ?>
                        <li class="row">

                            <div class="col-8">
                                    <h6><?php echo $row['Job']; ?></h6>
                                    <p><?php echo $row['city']; ?>; <?php echo $row['payment']; ?> лв</p>
                            </div>
                            <div class="col-4">
                                Брой кандидатури: <?php echo $row['count']; ?>
                                <br>
                                <button class="btn btn-secondary"><a  style="color:#fff;" href="/FindAJob/details-view-candidates?id=<?php echo $row['id']; ?>">Преглед</a> </button>
                            </div>

                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>

        </div>
    </div>
</div>



<?php include  $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>