<?php session_start(); 
if(isset($_SESSION['SBUser'])){?>
<!DOCTYPE html>
<html  lang="en">
<head><?php 
    include('../Core/init.php'); 
    include('../Includes/boot.php'); 
    include('admin_nav.php'); 
    include('modal.php');

    $userQuery = $db->query('SELECT * FROM eweek_signup ORDER BY id');
    $adminQuery = $db->query('SELECT * FROM eweek_admin ORDER BY id');
?></head>

<body> 
<!--Making space between top and background image so the navbar doesn't cover the image-->
<section class="container-fluid">  
    <center><header class="col-md-12"><p><br><br><br><br></p></header></center>
</section>

<br><!--Main Information-->

<center>
<h1>Users</h1>

<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#admin-modal"> Create New Admin </button><br><br> 

<h3>Key for event numbers</h3><br>
<h5>0 = Not Visited | 1 = Visited</h5><br>
<h5></h5><br>
</center>

<!--Key for USER data-->
<div id="whiteback">
<table class="table table-bordered table-striped table-condensed">
    <thead>
        <th><h3 id="black">Event ID</h3></th>
        <th><h3 id="black">Event Name</h3></th>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>E-Talk</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Sigma Phi Delta</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Build a Bowl</td>
        </tr>
        <tr>
            <td>4</td>
            <td>SHPE</td>
        </tr>
        <tr>
            <td>5</td>
            <td>ECE Expo</td>
        </tr>
        <tr>
            <td>6</td>
            <td>IISE</td>
        </tr>
        <tr>
            <td>7</td>
            <td>E-Wiik</td>
        </tr>
        <tr>
            <td>8</td>
            <td>ELF</td>
        </tr>
        <tr>
            <td>9</td>
            <td>NSBE</td>
        </tr>
        <tr>
            <td>10</td>
            <td>ASME</td>
        </tr>
        <tr>
            <td>11</td>
            <td>ASEE</td>
        </tr>
        <tr>
            <td>12</td>
            <td>ESL</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Dodgeball Tournament</td>
        </tr>
        <tr>
            <td>14</td>
            <td>E-Fest</td>
        </tr>
        <tr>
            <td>15</td>
            <td>SASE</td>
        </tr>
        <tr>
            <td>16</td>
            <td>Engineering Fair</td>
        </tr>
        <tr>
            <td>17</td>
            <td>Yoga</td>
        </tr>
        <tr>
            <td>18</td>
            <td>SWE</td>
        </tr>
        <tr>
            <td>19</td>
            <td>Theta Tau</td>
        </tr>
        <tr>
            <td>20</td>
            <td>Bowling with Faculty</td>
        </tr>
        <tr>
            <td>21</td>
            <td>Closing Ceremonies</td>
        </tr>
    </tbody>
</table>
</div><br><br>

<center><h2>All Users</h2><br><br></center>

<!--Retreives and displays all USER data in a table-->
<div id="whiteback">
<table class="table table-bordered table-striped table-condensed">
    <thead><!--Predetermined head-->
        <th><h3 id="black">ID</h3></th>
        <th><h3 id="black">Email</h3></th>
        <th><h3 id="black">Major</h3></th>
        <th><h3 id="black">Year</h3></th>
        <th><h3 id="black">1</h3></th>
        <th><h3 id="black">2</h3></th>
        <th><h3 id="black">3</h3></th>
        <th><h3 id="black">4</h3></th>
        <th><h3 id="black">5</h3></th>
        <th><h3 id="black">6</h3></th>
        <th><h3 id="black">7</h3></th>
        <th><h3 id="black">8</h3></th>
        <th><h3 id="black">9</h3></th>
        <th><h3 id="black">10</h3></th>
        <th><h3 id="black">11</h3></th>
        <th><h3 id="black">12</h3></th>
        <th><h3 id="black">13</h3></th>
        <th><h3 id="black">14</h3></th>
        <th><h3 id="black">15</h3></th>
        <th><h3 id="black">16</h3></th>
        <th><h3 id="black">17</h3></th>
        <th><h3 id="black">18</h3></th>
        <th><h3 id="black">19</h3></th>
        <th><h3 id="black">20</h3></th>
        <th><h3 id="black">21</h3></th>
    </thead>
    <tbody><!--Dynamic body information from database-->
        <?php while($user = mysqli_fetch_assoc($userQuery)): ?>
        <tr>
            <td><?=$user['id']?></td>
            <td><?=$user['email']?></td>
            <td><?=$user['major']?></td>
            <td><?=$user['year']?></td>
            <td><?=$user['one']?></td>
            <td><?=$user['two']?></td>
            <td><?=$user['three']?></td>
            <td><?=$user['four']?></td>
            <td><?=$user['five']?></td>
            <td><?=$user['six']?></td>
            <td><?=$user['seven']?></td>
            <td><?=$user['eight']?></td>
            <td><?=$user['nine']?></td>
            <td><?=$user['ten']?></td>
            <td><?=$user['eleven']?></td>
            <td><?=$user['twelve']?></td>
            <td><?=$user['thirteen']?></td>
            <td><?=$user['fourteen']?></td>
            <td><?=$user['fifteen']?></td>
            <td><?=$user['sixteen']?></td>
            <td><?=$user['seventeen']?></td>
            <td><?=$user['eighteen']?></td>
            <td><?=$user['ninteen']?></td>
            <td><?=$user['twenty']?></td>
            <td><?=$user['twentyone']?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
</div><br><br>

<center><h2>Event Attendance</h2><br><br></center>

<?php //getting amount of attendance for each of the nine events
    $one = $db->query('SELECT * FROM eweek_signup WHERE one = 1'); 
    $two = $db->query('SELECT * FROM eweek_signup WHERE two = 1'); 
    $three = $db->query('SELECT * FROM eweek_signup WHERE three = 1'); 
    $four = $db->query('SELECT * FROM eweek_signup WHERE four = 1'); 
    $five = $db->query('SELECT * FROM eweek_signup WHERE five = 1'); 
    $six = $db->query('SELECT * FROM eweek_signup WHERE six = 1'); 
    $seven = $db->query('SELECT * FROM eweek_signup WHERE seven = 1'); 
    $eight = $db->query('SELECT * FROM eweek_signup WHERE eight = 1'); 
    $nine = $db->query('SELECT * FROM eweek_signup WHERE nine = 1');
    $ten = $db->query('SELECT * FROM eweek_signup WHERE ten = 1');
    $eleven = $db->query('SELECT * FROM eweek_signup WHERE eleven = 1');
    $twelve = $db->query('SELECT * FROM eweek_signup WHERE twelve = 1');
    $thirteen = $db->query('SELECT * FROM eweek_signup WHERE thirteen = 1');
    $fourteen = $db->query('SELECT * FROM eweek_signup WHERE fourteen = 1');
    $fifteen = $db->query('SELECT * FROM eweek_signup WHERE fifteen = 1');
    $sixteen = $db->query('SELECT * FROM eweek_signup WHERE sixteen = 1');
    $seventeen = $db->query('SELECT * FROM eweek_signup WHERE seventeen = 1');
    $eighteen = $db->query('SELECT * FROM eweek_signup WHERE eighteen = 1');
    $ninteen = $db->query('SELECT * FROM eweek_signup WHERE ninteen = 1');
    $twenty= $db->query('SELECT * FROM eweek_signup WHERE twenty = 1');
    $twentyone = $db->query('SELECT * FROM eweek_signup WHERE twentyone = 1'); 
?>

<!--Displays stats on attendance for each event-->
<div id="whiteback">
<table class="table table-bordered table-striped table-condensed">
    <thead><!--Predetermined head-->
        <th><h3 id="black">1</h3></th>
        <th><h3 id="black">2</h3></th>
        <th><h3 id="black">3</h3></th>
        <th><h3 id="black">4</h3></th>
        <th><h3 id="black">5</h3></th>
        <th><h3 id="black">6</h3></th>
        <th><h3 id="black">7</h3></th>
        <th><h3 id="black">8</h3></th>
        <th><h3 id="black">9</h3></th>
        <th><h3 id="black">10</h3></th>
        <th><h3 id="black">11</h3></th>
        <th><h3 id="black">12</h3></th>
        <th><h3 id="black">13</h3></th>
        <th><h3 id="black">14</h3></th>
        <th><h3 id="black">15</h3></th>
        <th><h3 id="black">16</h3></th>
        <th><h3 id="black">17</h3></th>
        <th><h3 id="black">18</h3></th>
        <th><h3 id="black">19</h3></th>
        <th><h3 id="black">20</h3></th>
        <th><h3 id="black">21</h3></th>
    </thead>
    <tbody><!--Dynamic body information from database-->
        <tr>
            <td><?= mysqli_num_rows($one) ?></td>
            <td><?= mysqli_num_rows($two) ?></td>
            <td><?= mysqli_num_rows($three) ?></td>
            <td><?= mysqli_num_rows($four) ?></td>
            <td><?= mysqli_num_rows($five) ?></td>
            <td><?= mysqli_num_rows($six) ?></td>
            <td><?= mysqli_num_rows($seven) ?></td>
            <td><?= mysqli_num_rows($eight) ?></td>
            <td><?= mysqli_num_rows($nine) ?></td>
            <td><?= mysqli_num_rows($ten) ?></td>
            <td><?= mysqli_num_rows($eleven) ?></td>
            <td><?= mysqli_num_rows($twelve) ?></td>
            <td><?= mysqli_num_rows($thirteen) ?></td>
            <td><?= mysqli_num_rows($fourteen) ?></td>
            <td><?= mysqli_num_rows($fifteen) ?></td>
            <td><?= mysqli_num_rows($sixteen) ?></td>
            <td><?= mysqli_num_rows($seventeen) ?></td>
            <td><?= mysqli_num_rows($eighteen) ?></td>
            <td><?= mysqli_num_rows($ninteen) ?></td>
            <td><?= mysqli_num_rows($twenty) ?></td>
            <td><?= mysqli_num_rows($twentyone) ?></td>
        </tr>
    </tbody>
</table>
</div><br><br>

<center><h1>Administrators</h1></center>

<!--Retreives and displays all ADMIN data in a table-->
<div id="whiteback">
<table class="table table-bordered table-striped table-condensed">
    <thead><!--Predetermined head-->
        <th><h3 id="black">ID</h3></th>
        <th><h3 id="black">Username</h3></th>
    </thead>
    <tbody><!--Dynamic body information from database-->
        <?php while($user = mysqli_fetch_assoc($adminQuery)): ?>
        <tr>
            <td><?=$user['id']?></td>
            <td><?=$user['username']?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
</div>

<?php include('../bottom.php'); ?>  
</body>
</html>
<?php } ?> <!--Ending if to make sure the user is logged in -->