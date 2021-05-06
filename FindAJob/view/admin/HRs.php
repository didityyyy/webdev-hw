<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/admin/HRsController.php'  ?>

<div class="container-xxl" style="min-height:70vh;">
    <form>
        <div class="row jobsList">
            <div class="col-3"></div>
            <div class="col-6">
                <input class="form-control form-control-lg me-2" type="search" name="searchbox" placeholder="Потърси служител" aria-label="Search" onchange="this.form.submit()">
            </div>
            <div class="col-3"></div>
        </div>
    </form>
    <div>
        <form>
            <h3 class="text-center title-admin mt-5">Cлужители</h3>
            <table id="hr" class="table">
                <tr>
                    <th>Име</th>
                    <th>Фамилия</th>
                    <th colspan="2">Потребителско име</th>

                </tr>
                <?php while ($row = mysqli_fetch_array($results)) : ?>
                    <tr id="<?php echo $row['username']; ?>">
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td style="text-align: center;">
                            <button class="btn btn-danger removeHR" type="submit">Премахни</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </form>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>