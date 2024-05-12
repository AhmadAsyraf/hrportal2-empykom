<style>
						.login-form {
    max-width: 400px;
    margin: 0 auto;
}

.row {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
    color: #333;
}

.form-input {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s;
}

.form-input:focus {
    outline: none;
    border-color: #0056b3;;
}

.btn-submit {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #0056b3;;
    color: #fff;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-submit:hover {
    background-color: #0056b3;
}
.btn-orange {
    background-color: orange;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.btn-orange:hover {
    background-color: darkorange;
}


</style>
<section class="container">
    <div class="container">
        <div class="row text-left">
            <form method="post" action="./login/login.php" class="login-form">
                <div class="row">
                    <div class="col col-12">
                        <label for="staff_id" class="form-label">Staff ID</label>
                        <input id="staff_id" class="form-input" type="text" name="staff_pass_id" value="" placeholder="Enter Staff ID">
                    </div>
                    <div class="col col-12">
                        <label for="staff_name" class="form-label">Staff Name</label>
                        <input id="staff_name" class="form-input" type="text" name="staff_name" value="" placeholder="Enter Staff Name">
                    </div>
                    <div class="col col-12">
                        <input type="submit" value="Login" class="btn-submit btn-orange">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


					<!-- End About -->