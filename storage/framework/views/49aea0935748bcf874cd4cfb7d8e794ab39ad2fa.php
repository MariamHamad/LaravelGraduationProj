<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
               
        <form method="POST" action="/done">
            <?php echo csrf_field(); ?>
            <fieldset style="margin-left: 30px;">
                <legend style="letter-spacing: 1px; font-family: Helvetica; font-size: 20px; color: #C40000; font-weight: bold; ">Sign Up</legend>
                <div style="margin-left: 30px;">
                <label for="name">Name:</label> <br/>
                    <input type="text" name="name" value="" placeholder="First Name / UserName" title="Enter your First name" />&nbsp
                    <input type="text" name="lname" value="" placeholder="Last Name" title="Enter your Last name"><br>
                <span id="fnameerr"></span>&nbsp 
                <span id="lnameerr"></span><br/>
    
                <label for="EmailAdress">Email Adress:</label> <br/>
                    <input type="email" name="email" value="" placeholder="Enter your E-mail" title="Enter Valid E-Mail" /><br><span id="emailerr"></span><br/>
                
                <label for="date-of-birth">Date of birth:</label> <br/><br/>
                    <input type="date" name="dob" value=""/><br><span id="doberr"></span><br/>
    
                <label for="age">Age:</label> <br/>
                    <input type="number" name="age" value="" min="12" required="required"/><br/><br/>
    
                <label for="sex">sex:</label><br/>
                    <input type="text" name="sex" placeholder="Your Gender" title="Enter your Gender" /><br><span id="sexerr"></span><br/>

                <label for="blood-group">Blood Group:</label> <br/>
                    <input type="text" name="bldgroup" placeholder="Your Blood Group" title="Enter your Blood Group" /><br><span id="bldgerr"></span><br/>
                
                <label for="password">Password:</label> <br/>
                    <input type="password" name="password" placeholder="Password" title="Password should be of length greater than 8" /><br><span id="passerr"></span><br/>
                
                <label for="confirm-password">Confirm Password:</label> <br/>
                    <input type="password" name="re_password" placeholder="Re-enter Password" title="Type the same Password as above" required="required" /><br><span id="confpasserr"></span><br/>
    
                <input type="submit" name="submit" value="Register"  />&nbsp
                <input type="reset" name="Reset" />
                </div>
    
            </fieldset>
        </form>
            
            
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>            
</html>
<?php /**PATH D:\Downloads\Laravel trial\laravel.trial\my-blog\resources\views/registration/create.blade.php ENDPATH**/ ?>