<?php include  $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/profileCompany/myProfileController.php'; ?>

<div class="container-xxl" style="min-height:70vh;">
    <div>

        <ul class="jobsList">

            <div class="col-12 text-center">
            <h2>Обява № <?php echo $row['id']; ?></h2>
            </div>

            <li class="row px-5">
                <div class="col-8">
                    <h3><?php echo $row['title']; ?></h3>
                    <p>Град: <?php echo $row['City']; ?> ; Заплата: <?php echo $row['payment']; ?> лв ; Категория: <?php echo $row['Category']; ?></p>
                </div>
                <div class="col-4 pt-3">
                    <p> <?php echo $row['companyname']; ?></p>
                </div>

            </li>
            <div class="col-12 description">
                <h6>Описание и Изисквания</h6>
                <pre class="text-break">
                <?php echo $row['description']; ?></pre>
            </div>

        </ul>
    </div>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>