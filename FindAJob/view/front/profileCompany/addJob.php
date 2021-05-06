<?php include  $_SERVER['DOCUMENT_ROOT']. '/FindAJob/view/layout/header.php' ; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/profileCompany/addJobController.php'; ?>

<div class="container-xxl">
    <div class="col-md-4 offset-md-4 form-div my-5">
        <form method="POST">

        <h3 class="text-center title-admin">Добавяне на обява</h3>

            <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/error.php'; ?>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/success.php'; ?>

            <div class="form-group">
                <label for="titlejob" class="form-label">Заглавие на обява</label>
                <input type="text" name="titlejob" class="form-control form-control-lg" id="titlejob">
            </div>
            <div class="form-group">
                <label for="paymentjob" class="form-label">Заплата</label>
                <input type="text" name="paymentjob" class="form-control form-control-lg" id="paymentjob">                  
            </div>
            <div class="form-group">
                <label for="categoryjob" class="form-label">Категория</label>
                <select name="categoryjob" class="form-control form-control-lg" id="categoryjob">
                    <option selected disabled>Изберете Категория</option>
                    <?php while ($row = mysqli_fetch_array($results)): ?>
                    <option class="" value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                    <?php endwhile; ?>
                </select>                  
            </div>
            <div class="form-group">
                <label for="cityjob" class="form-label">Град</label>
                <select name="cityjob" class="form-control form-control-lg" id="cityjob">
                    <option selected disabled>Изберете Град</option>
                    <?php while ($row = mysqli_fetch_array($results1)): ?>
                    <option class="" value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                    <?php endwhile; ?>
                </select>                  
            </div>
            <div class="form-group">
                <label for="descriptionjob" class="form-label">Описание</label>
                <textarea class="form-control" id="descriptionjob" name="descriptionjob" rows="5"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block btn-lg" name="add-job-btn" value="Добави обява">
            </div>
            <input type='hidden' value='<?php echo $_SESSION['username']; ?>' name='usernameCompany' />
        </form>
    </div>
   
</div>


<?php include $_SERVER['DOCUMENT_ROOT'].'/FindAJob/view/layout/footer.php'; ?>