<?php include  $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/profileUser/jobsController.php'; ?>

<div class="container-xxl" style="min-height:70vh;">
    <div>

        <div class="col-12 mt-3" style="text-align:center;">
            <img src="images/logos/<?php echo $row['logo'] ?>" class="logo">
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
                <a href="/FindAJob/candidateForm?id=<?php echo $row['id']; ?>">
                    <button class="btn btn-lg btn-success" type="submit" style="width: 100%;" name="candidate-form">Кандидатствай</button>
                </a>
            </div>
        </ul>
    </div>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>