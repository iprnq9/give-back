<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<meta name="theme-color" content="#2196F3" />

<title>Give Back</title>

<?php include 'includes.php'; ?>

<?php

include 'user_obj.php';

include 'dbconnect.php';

if ($db->connect_errno) {
    $connection_error = "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

include('session.php');

$sql = "SELECT user_id FROM users WHERE username = $login_session";
$result = mysqli_query($db,$sql);

include 'pull_data.php';

?>

<body>
<header>
    <?php
    //error_reporting(E_ALL);
    //ini_set('display_errors', 'On');
    //ini_set('html_errors', 'On');
    include 'header.php'; ?>
</header>

<main>
    <div class="section container">
        <div class="row">
            <div class="col s12 m9 l8 offset-l2">
                <div id="welcome" class="section scrollspy">
                    <h3 class="header">Welcome</h3>
                    <p>Give Back is a non-profit organization dedicated to providing inspiration for children to learn. We connect people, ideas, and (most importantly) knowledge. Community members that have experience in an area
                        can find ways to teach the younger generation about this area. Whether that experience be formal education or work experience, we encourage you to give back what someone invested in you. With workshop topics
                        ranging from math and science to wood-working and painting, we hope you find a way to Give Back.
                    </p>
                </div>
                <div id="how-it-works" class="section scrollspy">
                    <h5><i class="material-icons circle left">settings</i>How It Works</h5>
                    <p>
                        There are two parties that Give Back aims to connect: volunteers and opportunities to volunteer. The idea started with Ian wanting to host a math workshop after school for elementary students, but didn't
                        know what schools had opportunities to do such. He noticed that in his college town, there are many smart people (students and professors) that could take time to volunteer at local schools to help inspire
                        children to learn math and science. After that Give Back was created to facilitate community members to give back to the younger generation by providing fun, educational, and inspiring workshops.
                    </p>
                    <p>
                        Let's say a John Smith Elementary School has an idea for a workshop called "Science is Fun" where their students stay after school once a week for an hour to do experiments and see how cool science is. In
                        order to find someone to host this workshop, John Smith Elementary School would create an account and post the workshop and its details on Give Back's website. From here, community members can find this
                        workshop and  if they think they could help out by voluntarily hosting it for the school, community members can contact with John Smith Elementary School, where the two parties can decide on the further
                        details.
                    </p>
                    <p>
                        Now let's say that Bob Jones, a community member, has an idea for a math workshop called "Math is Awesome", but doesn't know where to host it. He can post the workshop details on Give Back where he will be
                        credited as the author. If John Smith Elementary School is looking for a math workshop, they can get on Give Back and search for local workshops that focus on math for elementary students. If John Smith
                        Elementary School comes across "Math is Awesome" and likes the idea, they can contact its author, Bob Jones. From there the two parties can decide how to arrange the workshop!
                    </p>
                </div>
                <div id="get-started" class="section scrollspy">
                    <h5><i class="material-icons circle left">mood</i>Get Started</h5>
                    <p>To get started, simply create an account, start searching for workshops, and get involved in hosting them in your community! It's all about connecting people and ideas so please post your ideas and search
                        for others, and when you see an opportunity to host it, go for it!
                    </p>
                    <p class="center-align">
                        <button class="btn waves-effect waves-light deep-orange darken-2" type="submit" name="action">Create Account
                            <i class="material-icons right">person_add</i>
                        </button></p>
                </div>
                <div id="our-mission" class="section scrollspy">
                    <h5><i class="material-icons circle left">public</i>Our Mission</h5>
                    <p>
                        Give Back's mission has and will continue to be to connect community members with opportunities to volunteer, especially in ways that inspire children to learn math and science.
                    </p>
                    <p>
                        Not only do we want to connect people, but we want to connect ideas. Every user will be able to see what sorts of workshops others have hosted and have created. The details of each workshop outline the
                        length of the workshop, the intended age group, materials used, and other information so that any person that views this workshop could host it wherever they
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section container">
        <?php include 'sign_in_form.php' ?>
    </div>

    <div class="section container">
        <?php include 'create_account_form.php' ?>
    </div>
</main>

<?php include 'footer.php'; ?>

<?php include 'bottom-script.php'; ?>

</body>
</html>