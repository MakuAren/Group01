<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<body class="regbody">

    <form method="post" autocomplete="off" action="<?=base_url('index.php/Register_controller/adduser')?>">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 no-gutters">
                        <div class="justify-content-center align-items-center">
                            <h1 class ="welcome">WELCOME </h1>

                            <div class="logo">  
                                <img src="<?php echo base_url();?>public/images/logo.png" class ="mx-auto d-block" alt="" height="50">
                            </div>

                            <h5 class="create">Create a New Account</h5>
                            <p class="already">Already have an account? 
                            <span><a href="Loginpage" class="link-light">Log in</a></span></p>
                                <br class = "mb-3">
                         
                                <div class="form-group" id = "insertform" >
                                    <div class = "textCont">
                                        <label for="first-name" class="customlabel" > <span>First Name</span></label> <br>
                                        <input name="first-name" type="text" placeholder="Ex. Juan" class="fn"> 
                                    </div>  

                                    <div class = "textCont">
                                        <label for="last-name" class="customlabel" ><span>Last Name</span></label> <br>
                                        <input name="last-name" type="text" placeholder="Ex. DelaCruz" class="ln">
                                    </div>

                                    <div class = "textCont">
                                        <label for="middle-name" class="customlabel" ><span>Middle Name</span></label><br>
                                        <input name="middle-name" type="text" placeholder="Ex. Conje"class="mn">
                                    </div>

                                    <div class = "textCont">
                                        <label for="contact" class="customlabel" ><span>Contact Number</span></label><br>
                                        <input name="contact" type="number"  placeholder="09xxxxxxxxx" class="cn">
                                    </div>

                                    <div class = "textCont">
                                        <label for="email-address" class="customlabel" ><span>Email Address</span></label><br>
                                        <input name="email-address" type="email" placeholder="you@example.com" class="ea">
                                    </div>

                                    <div class = "textCont">
                                        <label for="password" class="customlabel" ><span>Password</span></label><br>
                                        <input name="password" type="password" class="ps">
                                    </div>

                                    <div class = "textCont">
                                        <label for="password" class="customlabel" ><span>Confirm Password</span></label><br>
                                        <input name="password" type="password" class="Cps" >
                                    </div>

                                </div>
                            
                        </div>
                    </div>

                    
                    <div class="col-md-6" id="left">

                        <div class = "rightside">
                            <label for="prof"><br><span >Birth Date</span></label> </br>
                            <form>
                                <span>
                                    <label for="day"><span >Day:</span></label>
                                    <select name="day" id="day" class="fs-19"></select>
                                </span>
                                <span>
                                    <label for="month"><span>Month:</span></label>
                                    <select name="month" id="month" class="fs-10"></select>
                                </span>
                                <span>
                                    <label for="year"><span>Year:</span></label>
                                    <select name="year" id="year" class="fs-10"></select>
                                </span>
                            </form>

                            <script src="<?php echo base_url();?>public/css/register.js"></script>
                            <br>
        
                            <label for="prof" class=""><br><span class="fs-10" >Profession</span></br></label>
                            <div>
                                <select id="Work" class="fs-10">
                                    <option value="null" >Select</option>
                                    <option value="Work1">Carpenter</option>
                                    <option value="Work2">Accountant</option>
                                    <option value="Work3">Architect</option>
                                    <option value="Work4">Cashier</option>
                                    <option value="Work5">Web Developer</option>
                                    <option value="Work6">Cleaner</option>
                                    <option value="Work7">Data Encoder</option>
                                    <option value="Work8">Electrician</option>
                                    <option value="Work9">Engineer</option>
                                    <option value="Work10">Teacher</option>
                                </select>

                                <button name="addWorkPost">+</button> 
                                <form action="register.php" method="get" name = "FormForOthers"> 
                                    <label for="Others" class="" style="color:#33333"><span class="fs-10 ">Other</span></label>
                                    <input type="text" class="fs-10" placeholder="Ex. Lawyer">
                                    <button name="addWorkPost">+</button> <!--nag add po ako ng form IAN PA CHECK-->
                                </form>

                            </div>
                   
                            <label for="id" class=""><br><span class="fs-10" style="color:#33333">Type of ID</span></br></label>
                            <div>
                                <select id="id" class="fs-10">
                                    <option value="null">Select</option>
                                    <option value="id1">Student ID</option>
                                    <option value="id2">Driver's License</option>
                                    <option value="id3">Philippine Passport</option>
                                    <option value="id4">PhilHealth ID</option>
                                    <option value="id5">UMID ID</option>
                                    <option value="id6">Postal ID</option>
                                    <option value="id7">Tin ID</option>
                                    <option value="id8">Voter's ID</option>
                                </select>
                                
                                <button name="addWorkPost">+</button>
                                <form action="register.php" method="get" name = "FormForOthers"> 
                                    <label for="Others" class=""><span>Other</span></label>
                                    <input type="text" class="" placeholder="Ex. National ID"> <!--nag add po ako ng form IAN PA CHECK-->
                                    <button name="addWorkPost">+</button>
                                </form>

                                <br>
                                <label for="id" class="fs-5 text-uppercase fst-italic fw-bold text-center" style="color: #333333">kindly provide a photo of your id</label>
                                <br>
                                <input type="file" class="btn btn-basic btn-sm btn-block" value="Browse" >
                                <br>

                            </div>
                            <br>
                            <br>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a class="btn btn-outline-primary btn-lg" href="Homepage" role="button">BACK</a>
                                <button type="button" class="btn btn-outline-dark btn-lg " style = "background-color:#1e4e70"><span class ="fw-bold" style="color: #ffff ">REGISTER</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>


    