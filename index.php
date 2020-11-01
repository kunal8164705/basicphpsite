<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'link.php'; ?>
    <title>hackalya</title>
</head>

<body>

    <!-----------------navbar------------>
    <?php include 'nav.php'; ?>

    <!--slider---->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="slider1.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Ethical Hacking</h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="slider2.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Red Teaming</h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="slider3.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>CTF challenge</h3>
                    <p></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!--About us Section-->
    <section class=my-5>
        <div>
            <h1 class="text-center display-4">About me</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="laptop.png" alt="img" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h3>My name is deepanshu</h3>
                    <p class=" py-3">I have a 2 years of experience in training industry ☑ Security Analyst
                        ☑ Freelancing Cyber Security Trainer
                        ☑ CTF Player
                        ☑ CTF Trainer
                        ☑ Successfully completed CEH (𝗘𝗖𝗖𝟰𝟬𝟰𝟯𝟳𝟮𝟰𝟰𝟱𝟯𝟲)
                        ☑ Wrote Articles on the leading website: 𝐡𝐚𝐜𝐤𝐢𝐧𝐠𝐚𝐫𝐭𝐢𝐜𝐥𝐞𝐬.𝐢𝐧
                        ☑ C, C++, C# Developer
                        ☑ Currently working on Android App Testing and Android Malware Analysis. </p>
                    <a href="aboutus.php" class="btn btn-success">click to know more</a>
                </div>
            </div>
        </div>
    </section>

    <!--courses-->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center display-4">Courses</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 pb-4">
                    <div class="card">
                        <img class="card-img-top cardimg" src="hacker.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Ethical Hacking</h4>
                            <p class="card-text">We Believe on Quality Training that’s why We just don’t teach like other Info-sec Companies but make sure they do make their name in Info-sec Industry !! An Ethical</p>
                            <a href="ethicalhacking.php" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top cardimg" src="hacker.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Bug Bounty</h4>
                            <p class="card-text">Bug bounties, also known as responsible disclosure programs, are setup by companies to encourage people to report potential issues discovered on their sites. </p>
                            <a href="bugbounty.php" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top cardimg" src="hacker.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">CTF challenge</h4>
                            <p class="card-text">CTFs represent a unique opportunity for employers to directly connect with the best and the brightest career when it comes to CyberSecurity skills. </p>
                            <a href="ctfchallenge.php" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top cardimg" src="hacker.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Red Teaming</h4>
                            <p class="card-text">Red team is methodology used by offensive attacker in order to find vulnerabilities in a enterprise using rules of engagement. It is very important to learn how red </p>
                            <a href="redteaming.php" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top cardimg" src="hacker.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Network Pentest</h4>
                            <p class="card-text"> This course will learn you how to secure network architecture with regards to pentesting each port. All the major ports such as SSH, FTP, MSSQL, router testing etc</p>
                            <a href="networkpentest.php" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--contact us form--->
    <section class="my-5">
        <div class="py-5">
            <h4 class="text-center display-4">Contact us</h4>
        </div>
        <div class="w-50 m-auto">

            <form action="userinfo.php" method="POST">
                <div class="form-group">

                    <input type="text" name="name" placeholder="fullname" autocomplete="off" class="form-control">

                </div>
                <div class="form-group">

                    <input type="email" name="email" placeholder="email" autocomplete="off" class="form-control">

                </div>
                <div class="form-group">

                    <input type="phone" name="phone" placeholder="contact no" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">

                    <textarea class="form-control" name="other" placeholder="Type your message here"></textarea>

                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>
    
    
    

    <!--footer--->
    <?php include 'footer.php';?>

    <?php include 'js.php' ;?>
    </body>

</html>