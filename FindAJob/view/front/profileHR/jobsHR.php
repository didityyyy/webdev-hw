<?php include  $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/profileHR/jobsHRController.php'; ?>

<div class="container-xxl">
    <div class="row" style="min-height:80vh;">
        <div class="col-md-8 offset-md-2 form-div my-5">

            <h3 class="text-center col-12 title-form">Обяви</h3>

            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-disapproved-ads-tab" data-bs-toggle="tab" data-bs-target="#nav-disapproved-ads" type="button" role="tab" aria-controls="nav-disapproved-ads" aria-selected="true">Неодобрени обяви</button>
                    <button class="nav-link" id="nav-approved-ads-tab" data-bs-toggle="tab" data-bs-target="#nav-approved-ads" type="button" role="tab" aria-controls="nav-approved-ads" aria-selected="false">Актуални обяви</button>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-disapproved-ads" role="tabpanel" aria-labelledby="nav-disapproved-ads-tab">
                    <div>
                        <ul class="jobsList">
                            <?php while ($row = mysqli_fetch_array($results1)) : ?>
                                <li class="row">
                                    <div class="col-8">
                                        <a href="/FindAJob/detailsHR?id=<?php echo $row['id']; ?>">

                                            <h6><?php echo $row['title']; ?></h6>
                                            <p><?php echo $row['City']; ?>; <?php echo $row['payment']; ?> лв</p>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <?php echo $row['companyname']; ?>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-approved-ads" role="tabpanel" aria-labelledby="nav-approved-ads-tab">
                    <div>
                        <ul class="jobsList">
                            <?php while ($row = mysqli_fetch_array($results2)) : ?>
                                <li class="row">
                                    <div class="col-8">
                                        <h6><?php echo $row['title']; ?></h6>
                                        <p><?php echo $row['City']; ?>; <?php echo $row['payment']; ?> лв</p>
                                    </div>
                                    <div class="col-4">
                                        <?php echo $row['companyname']; ?>
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


<?php include  $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>