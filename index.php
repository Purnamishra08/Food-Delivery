<?php
$conn = mysqli_connect('localhost', 'root', '', 'project');
if (!$conn) {
    mysqli_error($conn);
    echo "connection failed";
} else {
    echo "connected successfully";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Online Food Delivery Service in India | MyOnlineMeal.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images.png">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="images.png" style="border-radius: 50%;" alt="MyOnlineMeal.com">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Services</a></li>
            <li class="item"><a href="#client-section">Our Clients</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to MyOnlineMeal</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis dolorum numquam minus. </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
        <button class="btn">Order Now</button>
    </section>

    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="img/1.png" alt="">
                <h2 class="h-secondary center">Food Catering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et qui, repudiandae similique nam, recusandae quidem ab asperiores ex, aut fugit labore veritatis facere?
                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
            </div>
            <div class="box">
                <img src="img/2.png" alt="">
                <h2 class="h-secondary center">Bulk Ordering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab dignissimos vero? Unde numquam odit repudiandae perferendis nisi.

                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
            </div>
            <div class="box">
                <img src="img/3.png" alt="">
                <h2 class="h-secondary center">Food Ordering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus provident fugiat aliquam minima at explicabo. Earum eveniet quaerat, sunt molestias nesciunt quas! Quis.
                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
            </div>
        </div>
    </section>
    <section id="client-section">
        <h1 class="h-primary center">Our Clients</h1>
        <div id="clients">
            <div class="client-item">
                <img src="img/logo1.png" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="img/logo2.png" alt="Our Client">
            </div>

            <div class="client-item">
                <img src="img/logo4.png" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="img/logo3.png" alt="Our Client">
            </div>
        </div>

    </section>

    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name1" id="name" placeholder="Enter your name">

                </div>
                <span id="a1"></span>
                <br>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="name2" id="email" placeholder="Enter your email">
                </div>
                <span id="a2"></span>
                <br>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="name3" id="phone" placeholder="Enter your phone">
                </div>
                <span id="a3"></span>
                <br>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message1" id="message" cols="30" rows="10"></textarea>
                </div>
                <span id="a4"></span>
                <br>
                <div>
                    <input type="submit" value="submit" class="btn btn-success" id="submit" onclick="myclick()" name="submit">
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.myOnlineMeal.com. All rights reserved!
        </div>
    </footer>
    <script>
        function myclick() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var message = document.getElementById("message").value;


            if (name == "") {
                document.getElementById('a1').style.color = "red";
                document.getElementById('a1').innerHTML = "name can't blank";

            } else {
                document.getElementById('a1').innerHTML = "";

            }

            if (email == "") {
                document.getElementById('a2').style.color = "red";
                document.getElementById('a2').innerHTML = "email can't blank";

            } else {
                document.getElementById('a2').innerHTML = "";

            }
            if (phone == "") {
                document.getElementById('a3').style.color = "red";
                document.getElementById('a3').innerHTML = "number can't blank";

            } else {
                document.getElementById('a3').innerHTML = "";

            }

        }
    </script>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name1'];
        $email = $_POST['name2'];
        $phone = $_POST['name3'];
        $message = $_POST['message1'];

        $sql = "INSERT INTO `form1`( `name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";
        mysqli_query($conn, $sql);
        if (mysqli_affected_rows($conn)) {
            echo "data inserted";
        } else {
            echo "data not inserted";
        }
    }




    ?>
</body>

</html>