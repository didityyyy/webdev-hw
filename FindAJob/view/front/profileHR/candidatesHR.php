<?php include  $_SERVER['DOCUMENT_ROOT'].'/FindAJob/view/layout/header.php' ; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/profileHR/candidatesHRController.php'; ?>

<div class="container-xxl">
    <div class="row" style="min-height:80vh;">
        <div class="col-md-8 offset-md-2 form-div my-5">

        <h3 class="text-center col-12 title-form">Кандидатури</h3>

            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-onhold-tab" data-bs-toggle="tab" data-bs-target="#nav-onhold" type="button" role="tab" aria-controls="nav-onhold" aria-selected="true">В изчакване</button>
                    <button class="nav-link" id="nav-approved-interview-tab" data-bs-toggle="tab" data-bs-target="#nav-approved-interview" type="button" role="tab" aria-controls="nav-approved-interview" aria-selected="false">Одобрени за интервю</button>
                    <button class="nav-link" id="nav-interviewed-tab" data-bs-toggle="tab" data-bs-target="#nav-interviewed" type="button" role="tab" aria-controls="nav-interviewed" aria-selected="false">Интервюирани</button>
                    <button class="nav-link" id="nav-rejected-tab" data-bs-toggle="tab" data-bs-target="#nav-rejected" type="button" role="tab" aria-controls="nav-rejected" aria-selected="false">Отхвърлени</button>
                    <button class="nav-link" id="nav-approved-tab" data-bs-toggle="tab" data-bs-target="#nav-approved" type="button" role="tab" aria-controls="nav-approved" aria-selected="false">Одобрени</button>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-onhold" role="tabpanel" aria-labelledby="nav-onhold-tab">
                    <div>
                        <ul class="jobsList">
                            <?php while ($row = mysqli_fetch_array($results1)) : ?>
                                <li class="row">
                                     <div class="col-8">
                                        <a href="/FindAJob/detailsCandidatesHR?id=<?php echo $row['id_c']; ?>">
                                            <h6><?php echo $row['firstname'] . " " . $row['lastname']; ?></h6>
                                            <p>Кандидаствал по обява : <?php echo $row['title']; ?></p>
                                        </a>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-approved-interview" role="tabpanel" aria-labelledby="nav-approved-interview-tab">
                    <div>
                    <ul class="jobsList">
                            <?php while ($row = mysqli_fetch_array($results2)) : ?>
                                <li class="row">
                                     <div class="col-8">
                                        <a href="/FindAJob/detailsCandidatesHR?id=<?php echo $row['id_c']; ?>">
                                            <h6><?php echo $row['firstname'] . " " . $row['lastname']; ?></h6>
                                            <p>Кандидаствал по обява : <?php echo $row['title']; ?></p>
                                        </a>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-interviewed" role="tabpanel" aria-labelledby="nav-interviewed-tab">
                    <div>
                    <ul class="jobsList">
                            <?php while ($row = mysqli_fetch_array($results3)) : ?>
                                <li class="row">
                                     <div class="col-8">
                                        <a href="/FindAJob/detailsCandidatesHR?id=<?php echo $row['id_c']; ?>">
                                            <h6><?php echo $row['firstname'] . " " . $row['lastname']; ?></h6>
                                            <p>Кандидаствал по обява : <?php echo $row['title']; ?></p>
                                        </a>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-rejected" role="tabpanel" aria-labelledby="nav-rejected-tab">
                    <div>
                    <ul class="jobsList">
                            <?php while ($row = mysqli_fetch_array($results4)) : ?>
                                <li class="row">
                                     <div class="col-8">
                                            <h6><?php echo $row['firstname'] . " " . $row['lastname']; ?></h6>
                                            <p>Кандидаствал по обява : <?php echo $row['title']; ?></p>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-approved" role="tabpanel" aria-labelledby="nav-approved-tab">
                    <div>
                    <ul class="jobsList">
                            <?php while ($row = mysqli_fetch_array($results5)) : ?>
                                <li class="row">
                                     <div class="col-8">
                                        <a href="/FindAJob/detailsCandidatesHR?id=<?php echo $row['id_c']; ?>">
                                            <h6><?php echo $row['firstname'] . " " . $row['lastname']; ?></h6>
                                            <p>Кандидаствал по обява : <?php echo $row['title']; ?></p>
                                        </a>
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



<?php include  $_SERVER['DOCUMENT_ROOT'].'/FindAJob/view/layout/footer.php' ; ?>