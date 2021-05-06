<?php include  $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/profileHR/jobsHRController.php'; ?>

<div class="container-xxl" style="min-height:70vh;">
    <div class="col-md-8 offset-md-2 my-5">

        <div class="col-12" style="text-align:center;">
            <img src="" style="background-color: blue; width: 100px;height:100px;">
            <p> <?php echo $row['companyname']; ?></p>
        </div>

        <ul class="jobsList">

            <li class="row">
                <div class="col-12">
                    <h3><?php echo $row['title']; ?></h3>
                    <p>Град: <?php echo $row['City']; ?> ; Заплата: <?php echo $row['payment']; ?> лв ; Категория: <?php echo $row['Category']; ?></p>
                </div>


            </li>
            <div class="col-12 description">
                <h6>Описание и Изисквания</h6>
                <pre class="text-break">
                <?php echo $row['description']; ?></pre>
            </div>

            <div class="col-6 mx-auto justify-content-md-end">
                <form method="POST">
                    <button class="btn btn-lg btn-success" type="submit" style="width: 100%; margin-bottom: 30px;" name="approve">Одобри обявата</button>
                    <button class="btn btn-lg btn-danger" type="submit" style="width: 100%;" name="disapprove">Изтрий обявата</button>
                </form>
            </div>
        </ul>
    </div>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>