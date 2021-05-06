<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/header.php' ; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/admin/addOptionsController.php'  ?>

<div class="container-xxl my-5" style="min-height:70vh;">
    <h3 class="text-center title-admin">Добавяне на опции за обяви</h3>

    <div class="col-md-4 offset-md-4 form-div">
        <form method="POST">

            <h5 class="text-center">Добавяне на категория професия</h5>

            <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/success.php'; ?>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/message/error.php'; ?>
            
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" name="category_profession_title">
            </div>
            <div class="form-group">    
                <input type="submit" class="btn btn-primary btn-block btn-lg" name="category_profession_submit" value="Добави">
            </div>    
            <input type="hidden" name="category_profession_tokken" value="1"> 

        </form>
    </div>
    

    <div class="col-md-4 offset-md-4 form-div">
        <form method="POST">

            <h5 class="text-center">Добавяне на град</h5>

            <?php if(isset($message2)): ?>
            <div class="alert alert-success">
                <?php echo $message2; ?>
            </div>
            <?php endif; ?>
            <?php if(count($errors2) > 0) : ?>
            <div class="alert alert-danger">
            <?php foreach($errors2 as $error): ?>    
            <?php echo $error; ?>
            <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <div class="form-group">
                <input type="text" class="form-control form-control-lg" name="category_city_title" placeholder="Всички градове са добавени!" disabled>
            </div>
            <div class="form-group">    
                <input type="submit" class="btn btn-primary btn-block btn-lg" name="category_city_submit" value="Добави" disabled>
            </div>    
            <input type="hidden" name="category_city_tokken" value="1"> 
        </form>
    </div>
   
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/layout/footer.php'; ?>