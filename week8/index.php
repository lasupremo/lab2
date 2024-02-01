<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
    <style>
        .error { color: #FF0000; }
    </style>
</head>
<body>
    <nav id="desktop-nav">
        <div class="logo">Liam Supremo</div>
        <div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li> 
                <li><a href="#experience">Experience</a></li> 
                <li><a href="#hobbies">Hobbies</a></li> 
                <li><a href="#contact">Contact</a></li> 
            </ul>
        </div>
    </nav>
    <nav id="hamburger-nav">
        <div class="logo">Liam Supremo</div>
        <div class="hamburger-menu">
            <div class="hamburger-icon" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-links">
                <li><a href="#about" onclick="toggleMenu()">About</a></li> 
                <li><a href="#experience" onclick="toggleMenu()">Experience</a></li> 
                <li><a href="#hobbies" onclick="toggleMenu()">Projects</a></li> 
                <li><a href="#contact" onclick="toggleMenu()">Contact</a></li> 
            </div>
        </div>
    </nav>
    <section id="profile">
        <div class="section__pic-container">
            <img src="./assets/profile-pic.gif" alt="Liam Supremo profile picture">
        </div>
        <div class="section__text">
            <p class="section__text__p1"> Hello, I'm</p>
            <h1 class="title">Liam Supremo</h1>
            <p class="section__text__p2">2nd Year CS Student</p>
            <div ckass="btn-container">
                <button class="btn btn-color-1" onclick="location.href='#contact'">
                Contact Info
                </button>
            </div>
            <div id="socials-container">
                <img 
                src="./assets/linkedin.png" 
                alt="My LinkedIn profile" 
                class="icon" 
                onclick="location.href='https://www.linkedin.com/in/liam-miguel-supremo-448a2022a/'">
                
                <img 
                src="./assets/github.png" 
                alt="My Github profile" 
                class="icon" 
                onclick="location.href='https://github.com/lasupremo'">
            </div>
        </div>
    </section>
    <section id="about">
        <p class="section__text__p1">Get to Know More</p>
        <h1 class="title">About Me</h1>
        <div class="section-container">
            <div class="section__pic-container">
                <img src="./assets/akira.png" alt="Profile picture" 
                class="about-pic">
            </div>
            <div class="about-details-container">
                <div class="about-containers">
                    <div class="details-container">
                        <img src="./assets/experience.png" alt="Experience Icon"
                        class="icon">
                        <h3>Experience</h3>
                        <p>Lorem <br />Ipsum</p>
                    </div>
                    <div class="details-container">
                        <img 
                        src="./assets/education.png" 
                        alt="Education Icon"
                        class="icon">
                        <h3>Education</h3>
                        <p>Lorem <br />Ipsum</p>
                    </div>
                </div>
                <div class="text-container">
                    <?php
                    $school = "Asia Pacific College";
                    $course = "Computer Science";
                    $birthdate = "2004-07-02";
                    $games = array("Terraria", "Pokemon", "Dark Souls");
                    $ngames = count($games);
                    $game1 = $games[0];

                    $currentDate = new DateTime();
                    $birthDateObj = new DateTime($birthdate);

                    $age = $currentDate->diff($birthDateObj)->y;

                    echo "<p>I am $age years old. Currently, a sophomore in $school studying $course. I aspire to create a video game that a lot of people can enjoy. There are $ngames games that I currently enjoy. One of them being $game1.</p>"
                    ?>
                </div>
            </div>
        </div>
        <img 
        src="./assets/arrow.png" 
        alt="Arrow icon" 
        class="icon arrow"
        onclick="location.href='#experience'">
    </section>
    <section id="experience">
        <p class="section__text__p1">Explore My</p>
        <h1 class="title">Experience</h1>
        <div class="experience-details-container">
            <div class="about-containers">
                <div class="details-container">
                    <h2 class="experience-sub-title">Frontend Development</h2>
                    <div class="article-container">
                        <article>
                            <img 
                            src="./assets/checkmark.png" 
                            alt="Experience icon" 
                            class="icon">
                            <div>
                                <h3>HTML</h3>
                                <p>Basic</p>
                            </div>
                        </article>
                        <article>
                            <img 
                            src="./assets/checkmark.png" 
                            alt="Experience icon" 
                            class="icon">
                            <div>
                                <h3>CSS</h3>
                                <p>Basic</p>
                            </div>
                        </article>
                        <article>
                            <img 
                            src="./assets/checkmark.png" 
                            alt="Experience icon" 
                            class="icon">
                            <div>
                                <h3>JavaScript</h3>
                                <p>Basic</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="details-container">
                    <h2 class="experience-sub-title">Programming</h2>
                    <div class="article-container">
                        <article>
                            <img 
                            src="./assets/checkmark.png" 
                            alt="Experience icon" 
                            class="icon">
                            <div>
                                <h3>Python</h3>
                                <p>Intermediate</p>
                            </div>
                        </article>
                        <article>
                            <img 
                            src="./assets/checkmark.png" 
                            alt="Experience icon" 
                            class="icon">
                            <div>
                                <h3>Java</h3>
                                <p>Basic</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <img 
        src="./assets/arrow.png" 
        alt="Arrow icon" 
        class="icon arrow"
        onclick="location.href='#hobbies'">
    </section>
    <section id="hobbies">
        <p class="section__text__p1">These Are My</p>
        <h1 class="title">Hobbies</h1>
        <div class="experience-details-container">
            <div class="about-containers">
            <div class="details-container color-container">
                <div class="article-container">
                    <img 
                    src="./assets/hobby-1.jpg" 
                    alt="Hobby 1" 
                    class="hobby-img">
                </div>
                <h2 class="experience-sub-title hobby-title">Playing Video Games</h2>
            </div>
            <div class="details-container color-container">
                <div class="article-container">
                    <img 
                    src="./assets/hobby-2.gif" 
                    alt="Hobby 2" 
                    class="hobby-img">
                </div>
                <h2 class="experience-sub-title hobby-title">Watching TV shows & Movies</h2>
            </div>
            <div class="details-container color-container">
                <div class="article-container">
                    <img 
                    src="./assets/hobby-3.png" 
                    alt="Hobby 3" 
                    class="hobby-img">
                </div>
                <h2 class="experience-sub-title hobby-title">Collecting Cards</h2>
            </div>
        </div>
        </div>
        <img 
        src="./assets/arrow.png" 
        alt="Arrow icon" 
        class="icon arrow"
        onclick="location.href='#contact'">
    </section>
    <section id="contact">
        <p class="section__text__p1">My Contacts</p>
        <?php 
        $currentTime = date("H:i:s");

        $awake = ':3';
        $sleep = 'ᶻ 𝗓 𐰁 "( – ⌓ – )';
        if ($currentTime >= "07:30" && $currentTime < "23:00") {
            echo '<h1 class="title">' . $awake . '</h1>';
        } else {
            echo '<h1 class="title">' . $sleep . '</h1>';
        }
        ?>
        <div class="contact-info-upper-container">
            <div class="contact-info-container">
                <img 
                src="./assets/email.png" 
                alt="Email icon" 
                class="icon contact-icon email-icon">
                <p><a href="mailto:lasupremo@student.apc.edu.ph">lasupremo@student.apc.edu.ph</a></p>
            </div>
            <div class="contact-info-container">
                <img 
                src="./assets/linkedin.png" 
                alt="LinkedIn icon" 
                class="icon contact-icon">
                <p><a href="https://www.linkedin.com/in/liam-miguel-supremo-448a2022a/">LinkedIn</a></p>
            </div>
        </div>
    </section>
    <footer>
        <nav>
            <div class="nav-links-container">
                <ul class="nav-links">
                    <li><a href="#about">About</a></li> 
                    <li><a href="#experience">Experience</a></li> 
                    <li><a href="#hobbies">Hobbies</a></li> 
                    <li><a href="#contact">Contact</a></li> 
                </ul>
            </div>
        </nav>
        <p>Liam Supremo SS221 WEBPROG</p>
    </footer>
    <section id="valid_form">
    <?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    // define variables and set to empty values
    $firstnameErr = $emailErr = $lastnameErr = "";
    $firstname = $email = $comment = $lastname = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
        $firstnameErr = "First name is required";
    } else {
        $firstname = test_input($_POST["firstname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
            $firstnameErr = "Only letters and white space allowed";
        }
    }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

    if (empty($_POST["lastname"])) {
        $lastnameErr = "Last name is required";
    } else {
        $lastname = test_input($_POST["lastname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
            $lastnameErr = "Only letters and white space allowed";
        }
    }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

    }

    $status = "Status: Not Submitted";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($firstnameErr) && empty($emailErr) && empty($lastnameErr)) {
        $status = "Status: Submitted";
    }

    ?>

    <a id="valid_form"></a>

    <h2>Forms ૮ ˶ᵔ ᵕ ᵔ˶ ა</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="#valid_form"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return submitForm();"> 
        First name: <input type="text" name="firstname" value="<?php echo $firstname;?>">
        <span class="error">* <?php echo $firstnameErr;?></span>
        <br><br>
        Last name: <input type="text" name="lastname" value="<?php echo $lastname;?>">
        <span class="error">* <?php echo $lastnameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Comment: <br><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <h2 id="status"><?php echo $status; ?></h2>
</section>
<script src="script.js"></script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyWebVisitors (firstname, lastname, email, comment)
VALUES ('$firstname', '$lastname', '$email', '$comment')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>