<?php
include "../classes/School.php";
$school = new School($user->schoolCode);
?>

<div id="sidebar">
    <div class="animate__animated animate__fadeInLeft logo">
        <h1>Studit.</h1>
    </div>
    <div id="sidebarElementContainer">
        <a href="../dashboard"><div class="sidebarElement <?php if ($pageName == 'Dashboard'){echo 'selected';} ?>">
            <i class="fas fa-th-large"></i>
            <p>Dashboard</p>
        </div></a>
        <?php
            if (in_array($user->type, [2, 3])){
                ?>
                    <a href="../rooster"><div class="sidebarElement <?php if ($pageName == 'Rooster'){echo 'selected';} ?>">
                            <i class="far fa-calendar-alt"></i>
                            <p>Rooster</p>
                        </div></a>
                <?php
            }
            if (in_array($user->type, [1])){
                ?>
                <a href="../gebruikers"><div class="sidebarElement <?php if ($pageName == 'Gebruikers'){echo 'selected';} ?>">
                        <i class="fas fa-user"></i>
                        <p>Gebruikers</p>
                    </div></a>
                <?php
            }
        ?>
        <a href="../process/logout.php"><div class="sidebarElement">
                <i class="fas fa-sign-out-alt"></i>
                <p>Uitloggen</p>
            </div></a>
    </div>
    <div id="sidebarUserContainer">
        <div id="sidebarUserContainerInner">
            <div id="sidebarProfilePicture">
                <img src="../profilePictures/<?php echo $user->profilePicture ?>">
            </div>
            <div>
                <p id="sidebarUserName">
                <?php
                    echo $user->fullName;
                ?></p>
                <p id="sidebarUserSchool"><?php echo $school->name ?></p>
            </div>
        </div>
    </div>
</div>