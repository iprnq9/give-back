<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<meta name="theme-color" content="#2196F3" />

<title>Institution Profile - Give Back</title>

<?php include 'includes.php'; ?>

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
            <div class="col s12">
                <div class="row">
                    <div class="col s6 offset-s3 l2 profile-picture valign-wrapper"><img src="images/institution_profile.png" class="responsive-img materialboxed valign" data-caption="West Lane Elementary's Profile Picture"/></div>
                    <div class="col s12 l6 profile-details">
                        <span class="profile-name">West Lane Elementary</span>
                        <span class="profile-sub-name chip"><i class="material-icons">school</i>Jackson R-2 School District</span>
                        <span class="profile-location chip"><i class="material-icons">place</i>Jackson, MO</span>
                        <span class="profile-grade-level chip">Elementary School</span>
                    <span class="profile-skills">
                        <div class="chip">Programming</div>
                        <div class="chip">Science</div>
                        <div class="chip">Electronics</div>
                    </span>
                    </div>
                    <div class="col s12 l4 profile-score-box hide">
                        <div class="card-panel light-blue">
                            Give Back Points
                            <span class="profile-score-points">52</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l8">
                        <div class="profile-ideas">
                            Workshops That Need Hosting
                            <div class="row object-card card">
                                <div class="topcorner deep-orange lighten-4 grey-text">July 7, 2016</div>
                                <div class="col s12">
                                    <span class="object-title">Raspbery Pi Workshop&nbsp;<span class="object-details">Jackson, MO</span></span>
                                    <span class="object-author">Grade Level: Elementary - Middle</span>
                                </div>
                                <div class="col s12 object-description">We know that the Raspberry Pi is getting very popular and is a great tool for learning. We'd love to have a workshop to truly show kids how cool technology is!</div>
                                <div class="col s8 valign-wrapper object-tags">
                                    <div class="chip"><i class="material-icons">code</i>Programming</div>
                                    <div class="chip"><i class="material-icons">public</i>Science</div>
                                    <div class="chip"><i class="material-icons">memory</i>Electronics</div>
                                </div>
                                <div class="col s4 object-button right-align">
                                    <a class="waves-effect btn-flat white-text deep-orange darken-2" href="workshop.php" target=""><i class="material-icons left">exit_to_app</i>Full Details</a>
                                    <a class="waves-effect btn-flat white-text deep-orange darken-2 hide" href="#" target="_blank"><i class="material-icons left">email</i>Contact Ian</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="profile-history">
                            Fulfilled
                            <div class="row object-card card">
                                <div class="col s12">
                                    <div class="col s12">
                                        <span class="object-title">Math Workshop&nbsp;<span class="object-details">Rolla, MO &middot; 4/2/2015</span></span>
                                        <span class="object-author">Volunteer: Ian Roberts</span>
                                    </div>
                                    <div class="col s12 object-button">
                                        <a class="waves-effect btn-flat white-text deep-orange darken-2" href="#" target="_blank"><i class="material-icons left">exit_to_app</i>Full Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<?php include 'bottom-script.php'; ?>

</body>
</html>