<?php include 'header.php'; ?>


<h1 class="text-center"><span class="text-primary">User</span> Donations</h1>
<div class="container-fluid d-flex justify-content-center my-5 py-5">

    <div class="container text-center">
        <form action="donerphp.php" method="post">
            <div class="input-group mb-3">
                <label for="username">
                    <h3>Enter <span class="text-primary">Full Name:</span></h3>
                </label>
                <input name="username" type="text" class="form-control mx-5" placeholder="Enter Full Name"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-3">
                <label for="email">
                    <h3>Enter <span class="text-primary">Email:</span></h3>
                </label>
                <input name="email" type="text" class="form-control mx-5" placeholder="Enter Email"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-3">
                <label for="amount">
                    <h3>Enter <span class="text-primary">Amount:</span></h3>
                </label>
                <input name="amount" type="text" class="form-control mx-3 " placeholder="Enter Amount"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            <button class="btn btn-primary text-center" type="submit">Generate QR </button>
        </form>
    </div>
</div>

<style>
.pass {
    height: 100px;
}
</style>




<?php include 'footer.php'; ?>