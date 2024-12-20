<?php
include('../../layouts/header.php');
?>
<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card py-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="../../assets/images/favicon.svg" height="48" class='mb-4'>
                        <h3>Forgot Password</h3>
                        <p>Please enter your email to receive password reset link.</p>
                    </div>
                    <form action="index.html">
                        <div class="form-group">
                            <label for="first-name-column">Email</label>
                            <input type="email" id="first-name-column" class="form-control" name="fname-column">
                        </div>

                        <div class="clearfix">
                            <button class="btn btn-primary float-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/js/main.js"></script>
</body>

</html>
