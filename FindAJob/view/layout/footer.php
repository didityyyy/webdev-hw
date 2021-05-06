<div class="container-xxl">

    <footer class="page-footer bg-footer pt-4 ">
        <!-- Footer Elements -->

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-facebook social"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-twitter social"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-instagram social"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-pinterest social"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-youtube social"></i></a>
            </li>
        </ul>
        <!-- Social buttons -->

        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="text-center pb-3" style="color: #fff;">
            © <?php echo date("Y"); ?> Copyright: Find a Job
        </div>
        <!-- Copyright -->

    </footer>
</div>




<script type="text/javascript" src="/FindAJob/libs/jqueri/jqueri.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script type="text/javascript" src="/FindAJob/libs/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/FindAJob/libs/bootstrap-4.5.3-dist/js/bootstrap.js"></script>
<script type="text/javascript" src="/FindAJob/libs/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="/FindAJob/js/js.js"></script>
<script type="text/javascript">
    $(".removeHR").click(function() {
        var id = $(this).parents("tr").attr("id");
        if (confirm('Акаунтът ще бъде изтрит!')) {
            $.ajax({
                url: '/FindAJob/src/controllers/admin/HRsDeleteController.php',
                type: 'GET',
                data: {
                    id: id
                },
                error: function() {
                    alert('Грешка! Акаунтът не може да бъде изтрит!' + console.error());
                },
                success: function(data) {
                    $("#" + id).remove();
                    alert("Акаунтът е изтрит успешно!");
                }
            });
        }
    });

    $(".collapse").on('shown.bs.collapse', function() {
        //when a collapsed div is shown hide all other collapsible divs that are visible
        $(".collapse").not($(this)).collapse('hide');
    });
</script>

</body>

</html>