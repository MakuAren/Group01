<header>
<?php 
if($this->session->userdata('UserLoginSession')){
?>
    <nav>
        <img src="">
        <button onclick="window.location.href='NewsFeed';">
            NewsFeed
        </button>

        <a style="cursor:pointer;color:blue;" href="Profilepage">
            Profile
        </a>
        
        <button onclick="window.location.href='Logout';">
            Logout
        </button>
    </nav>    
<?php
}else{
?>
    
    <nav class="navbar custom-navbar navbar-expand-md navbar-dark">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#">
                <img class="img-fluid" src="<?php echo base_url();?>public/images/logo.png" alt="" width="120" class="d-inline-block align-text-top">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="nav justify-content-left collapse navbar-collapse" id="navbarCollapse">
                    <li class="nav-item">
                        <a href="Homepage" class="nav-item active nav-link">Home</a></li>
                    </li>
                    <li class="nav-item">
                        <a href="Aboutpage" class="nav-item nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="Contactpage" class="nav-item nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="FAQpage" class="nav-item nav-link">FAQ</a>
                    </li>
                </ul>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a href="Loginpage" class="nav-item nav-link">Login</a></li>
                    </li>
                    <li class="nav-item">
                        <a href="Registerpage" class="nav-item nav-link">SignUp</a></li>
                    </li>
                </ul>
            </div>
    </nav>
<?php };?>
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</header>
