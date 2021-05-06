<?php include  $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/profileHR/companiesHRController.php'; ?>

<div class="container-xxl" style="min-height:70vh;">
    <div class="col-md-8 offset-md-2 my-5" style="min-height:80vh;">

        <div class="col-12" style="text-align:center;">
            <h3 class="text-center col-12 title-form">Фирми</h3>
        </div>

        <form>
            <div class="row jobsList">
                <div class="col-3"></div>
                <div class="col-6">
                    <input class="form-control form-control-lg me-2" type="search" name="searchbox" placeholder="Потърси фирма" aria-label="Search" onchange="this.form.submit()">
                </div>
                <div class="col-3"></div>
            </div>
        </form>

        <form>
            <table id="hr" class="table">
                <tr>
                    <th>Име на фирма</th>
                    <th>БУЛСТАТ</th>
                    <th></th>
                </tr>
                <?php while ($row = mysqli_fetch_array($results)) : ?>

                    <tr id="<?php echo $row['username']; ?>">
                        <td><?php echo $row['companyname']; ?></td>
                        <td><?php echo $row['companyid']; ?></td>
                        <td style="text-align: center;">
                            <a href="/FindAJob/detailsCompaniesHR?id=<?php echo $row['companyid']; ?>"class="btn btn-secondary">
                                Преглед
                            </a>
                        </td>
                    </tr>

                <?php endwhile; ?>
            </table>
        </form>
    </div>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>