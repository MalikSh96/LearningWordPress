<?php
//We are going to refer to the loop
/*
The loop is central and we are going to loop through all the different post and
output them to our webpage
*/

//adding header to the layout
get_header();

if(have_posts()) :
  while(have_posts()) : /*do something with the posts*/ the_post();
    /*
    Info: get_template_part('content', get_post_format());
    The 1st param which ^ tries to get is our content.php file.
    The 2nd param which ^^ it tries to get is our content-aside.php file from our theme folder.
    */
    get_template_part('content', get_post_format()); //<--responsible for how the webpage is displayed
  endwhile;
else :
  echo '<p>No content found</p>';
endif;
//adding footer to the layout
get_footer();
?>
