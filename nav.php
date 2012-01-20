<?php $active[$current] = "class=active"; ?>
<nav>
 <ul id="nav">
   <li <?php echo $active[1] ?>>
     <a class="work" href="index.php">work</a>
   </li>
   <li <?php echo $active[2] ?>>
     <a class="resume" href="resume.php">about</a>
   </li>
   <li <?php echo $active[3] ?>>
     <a class="contact" href="contact.php">contact</a>
   </li>
 </ul> 
 </nav>