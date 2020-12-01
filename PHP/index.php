<?php  include ("db.php")?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    
    <div class="row">

        <div class="col-md-10">

            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form control"
                        placeholder="Username" autofocus>
                    </div>  
                    <div class="form-group">    
                        <textarea name="description" rows="2" class="form-control"
                        placeholder="Commentary"></textarea>
                    </div>
                    <input type="submit" class="btn btn-danger btn-block"
                    name="saved_task" value="Comment">     
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>
