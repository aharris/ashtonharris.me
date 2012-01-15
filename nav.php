<?php $active[$current] = "class=active"; ?>
<nav>
 <ul id="nav">
   <li <?php echo $active[1] ?>>
     <a class="work" href="index.php">Work</a>
   </li>
   <li <?php echo $active[2] ?>>
     <a class="resume" href="resume.php">Resume</a>
   </li>
   <li <?php echo $active[3] ?>>
     <a class="contact" href="contact.php">Contact</a>
   </li>
 </ul> 
 </nav>