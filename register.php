<?php require_once('inc/header.php');  ?>

<?php require_once('inc/navbar.php');  ?>
<style>
/* Full height for the container */
.form-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f8f9fa;
    /* Light background color */
}

/* Form styling */
.form-card {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    /* Limiting max width */
}

/* Header styling */
h2 {
    text-align: center;
    margin-bottom: 20px;
}
</style>
<div class="form-container">
    <div class="form-card">
        <h2>Register</h2>
        <?php
        if (isset($_SESSION['errors'])) :
            foreach ($_SESSION['errors'] as $error) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
        <?php endforeach;
        endif;
        unset($_SESSION['errors']);
        ?>
        <form action="handelers/handelregister.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <button type="submit" value="register" class="btn btn-primary w-100">Register</button>
        </form>
    </div>
</div>
<?php require_once('inc/footer.php'); ?>