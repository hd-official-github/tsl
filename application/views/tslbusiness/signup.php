<div class="section" style="margin-top: 1px;background-color:#fff">
    <div class="container py-4">
        <h2 style="text-align: center;">Register your Business</h2>
        <p style="text-align: center;color:#ee7f79;">Grow your business through thespaline</p>
    </div>
    <div class="container d-flex justify-content-center" style="padding: 50px 0px;">
        <form action="<?php echo base_url() ?>add-business/signup_submit" style="width: 400px;padding:20px;box-shadow: 0 0 16px rgb(0 0 0 / 10%);">
            <div class="form-group">
                <label for="businessname" class="mandatory">Enter your Business Name</label>
                <input type="text" class="form-control" id="" aria-describedby="BusinessHelp" placeholder="Eg. KFC, Dominos" name="b_name">
            </div>
            <div class="form-group">
                <label for="businessname" class="mandatory">Enter your Name </label>
                <input type="text" class="form-control" id="" aria-describedby="nameHelp" placeholder="Your Full Name" name="o_name">
            </div>
            <div class="form-group">
                <label for="businessname" class="mandatory">Enter your Email Id</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="numberHelp" placeholder="Your Email Id" name="email">
            </div>
            <div class="form-group">
                <label for="businessname" class="mandatory">Enter your Mobile Number</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="numberHelp" placeholder="Your Mobile Number" name="mob">
            </div>
            <div class="form-group">
                <label for="businessname" class="mandatory">Create a Password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="numberHelp" placeholder="Create Password" name="pass">
            </div>
            <div class="form-group d-flex align-items-center justify-content-start">
                <input type="checkbox" class="form-control col-1 " style="width: 25px;height:25px">
                <label for="businessname" class="col-11 mb-0">Agree to accept <a class="text-primary">Terms and Condition</a></label>
            </div>
            <button type="submit" class="btn btn-primary btn-block agree" disabled style="padding: 10px 0px;background-color: #ee7f79;">Sign Up</button>

            <div class="container py-2">
                <a href="<?php echo base_url() ?>thespaline-business/login" class="" style="margin-right: 10px;">Login</a>
                <a href="">Forgot your password</a>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.agree').on('change', function() {
            if ($('.agree').is(":checked")) {
                alert('chk');
                $('.btn').prop('disabled', false);
            }
        });

    });
</script>