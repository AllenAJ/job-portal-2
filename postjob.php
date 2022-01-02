<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
        <div class="container">
            <img class="ml-5 m" src="img/logo.png" height="30px" width="110px"></img>
            <ul class="navbar-nav mr-5">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Find a Job</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Recruit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Find a Job</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="text-center">
            <h1 class="h2">Post A Job</h1>
            <hr style="height: 3px;border:none;color:#333;" width="5%" color="black">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus pariatur dolores commodi nemo dolor
                hic
                tempore expedita molestias, sit amet aut voluptatem quae at incidunt. Repellendus nemo eaque dolor
                corporis?
            </p>
        </div>
    </div>

    <!-- Job Information -->
    <section class="job-information-area ptb-100">
        <div class="container">
        <div class="job-information">
        <h3>Job Information</h3>
        <form>
        <div class="row">
        <div class="col-lg-12">
        <div class="form-group">
        <label>Job title*</label>
        <input class="form-control" type="text" name="title">
        </div>
        </div>
        <div class="col-lg-6 col-md-6">
        <div class="form-group">
        <label>Category*</label>
        <select style="display: none;">
        <option value="1">UX/UI Designer</option>
        <option value="2">Web Developer</option>
        <option value="3">Web Designer</option>
        <option value="4">Software Developer</option>
        <option value="5">SEO</option>
        </select><div class="nice-select" tabindex="0"><span class="current">UX/UI Designer</span><ul class="list"><li data-value="1" class="option selected">UX/UI Designer</li><li data-value="2" class="option">Web Developer</li><li data-value="3" class="option">Web Designer</li><li data-value="4" class="option">Software Developer</li><li data-value="5" class="option">SEO</li></ul></div>
        </div>
         </div>
        <div class="col-lg-6 col-md-6">
        <div class="form-group">
        <label>Job Types*</label>
        <select style="display: none;">
        <option value="1">Full Time</option>
        <option value="2">Part Time</option>
        <option value="3">Contract</option>
        <option value="4">Internship</option>
        <option value="5">Office</option>
        </select><div class="nice-select" tabindex="0"><span class="current">Full Time</span><ul class="list"><li data-value="1" class="option selected">Full Time</li><li data-value="2" class="option">Part Time</li><li data-value="3" class="option">Contract</li><li data-value="4" class="option">Internship</li><li data-value="5" class="option">Office</li></ul></div>
        </div>
        </div>
        <div class="col-lg-6 col-md-6">
        <div class="form-group">
        <label>Application Deadline</label>
        <div class="input-group date" id="datetimepicker">
        <input type="text" class="form-control" placeholder="12/11/2020">
        <span class="input-group-addon"></span>
        <i class="bx bx-calendar"></i>
        </div>
        </div>
        </div>
        <div class="col-lg-6 col-md-6">
        <div class="form-group">
        <label>Salary Currency</label>
        <select style="display: none;">
        <option value="1">Default</option>
        <option value="2">20000 To 30000</option>
        <option value="3">40000 To 50000</option>
        <option value="4">60000 To 70000</option>
        <option value="5">80000 To 90000</option>
        </select><div class="nice-select" tabindex="0"><span class="current">Default</span><ul class="list"><li data-value="1" class="option selected">Default</li><li data-value="2" class="option">20000 To 30000</li><li data-value="3" class="option">40000 To 50000</li><li data-value="4" class="option">60000 To 70000</li><li data-value="5" class="option">80000 To 90000</li></ul></div>
        </div>
        </div>
        <div class="col-lg-12">
        <div class="form-group">
        <label>Job Description*</label>
        <textarea name="message" class="form-control" rows="5"></textarea>
        </div>
        </div>
        </div>
        <h3>Company Information</h3>
        <div class="row">
        <div class="col-lg-12">
        <div class="form-group">
        <label>Company Name</label>
        <input class="form-control" type="text" name="Company">
        </div>
        </div>
        <div class="col-lg-6 col-md-6">
        <div class="form-group">
        <label>Company Website</label>
        <input class="form-control" type="text" name="Website">
        </div>
        </div>
        <div class="col-lg-6 col-md-6">
        <div class="form-group">
        <label>Company Industry</label>
        <input class="form-control" type="text" name="Industry">
        </div>
        </div>
        <div class="col-lg-6 col-md-6">
        <div class="form-group">
        <label>Facebook Page (Link)</label>
        <input class="form-control" type="text" name="Link">
        </div>
        </div>
        <div class="col-lg-6 col-md-6">
        <div class="form-group">
        <label>Linkedin Page (Link)</label>
        <input class="form-control" type="text" name="Link">
        </div>
        </div>
        <div class="col-lg-6 col-md-6">
        <div class="form-group">
        <label>Twitter Page (Link)</label>
        <input class="form-control" type="text" name="Link">
        </div>
        </div>
        <div class="col-lg-6 col-md-6">
        <div class="form-group">
        <label>Instagram Page (Link)</label>
        <input class="form-control" type="text" name="Link">
        </div>
        </div>
        <div class="col-lg-12">
        <div class="form-group">
        <label>Company Description*</label>
        <textarea name="message" class="form-control" rows="5"></textarea>
        </div>
        </div>
        <div class="col-lg-12">
        <div class="choose-img">
        <p>Logo (Optional)</p>
        <label for="img">Select image:</label>
        <input type="file" id="img" name="img" accept="image/*">
        <p>Maximum file size: 2 MB</p>
        </div>
        </div>
        </div>
        <h3>Recruiter Information</h3>
        <div class="row">
        <div class="col-lg-6 col-md-6">
        <div class="form-group">
        <label>Full Name</label>
        <input class="form-control" type="text" name="Name">
        </div>
        </div>
        <div class="col-lg-6 col-md-6">
        <div class="form-group">
        <label>Email</label>
        <input class="form-control" type="email" name="email">
        </div>
        </div>
        <div class="col-12">
        <div class="form-group checkboxs">
        <input type="checkbox" id="chb2">
        <p>
        By clicking checkbox, you agree to our <a href="terms-conditions.html">Terms &amp; Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
        </p>
        </div>
        </div>
        <div class="col-lg-12">
        <button class="default-btn">
        Post a Job
        </button>
        </div>
        </div>
        </form>
        </div>
        </div>
        </section>

</body>
</html>