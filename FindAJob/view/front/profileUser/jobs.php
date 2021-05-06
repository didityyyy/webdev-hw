<?php include  $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/profileUser/jobsController.php'; ?>

<div class="container-xxl" style="min-height:70vh;">

    <form>
        <div class="row jobsList my-5">
            <div class="col-6">
                <input class="form-control form-control-lg me-2" type="search" name="searchbox" placeholder="Search" aria-label="Search" onchange="this.form.submit()">
            </div>
            <div class="col-3">
                <select name="categoryjob" class="form-control form-control-lg" id="categoryjob" onchange="this.form.submit()">
                    <option selected disabled>Изберете Категория</option>
                    <?php while ($row = mysqli_fetch_array($results2)) : ?>
                        <option class="" value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="col-3">
                <select name="cityjob" class="form-control form-control-lg" id="cityjob" onchange="this.form.submit()">
                    <option selected disabled>Изберете Град</option>
                    <?php while ($row = mysqli_fetch_array($results1)) : ?>
                        <option class="" value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
        </div>
    </form>
    <div>
        <ul class="jobsList">
            <?php while ($row = mysqli_fetch_array($results)) : ?>
                <li class="row">

                    <div class="col-8">
                        <a href="/FindAJob/details?id=<?php echo $row['id']; ?>">
                            <h6><?php echo $row['title']; ?></h6>
                            <p><?php echo $row['City']; ?>; <?php echo $row['payment']; ?> лв</p>
                        </a>
                    </div>
                    <div class="col-4">
                        <?php echo $row['companyname']; ?>
                        <img src="images/logos/<?php echo $row['logo'] ?>" class="logo" style="margin-left: 10px;">
                    </div>

                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>