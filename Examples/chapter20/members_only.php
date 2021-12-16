<?php
  session_start();

  echo '<h1>Members only</h1>';

  // check session variable

  if (isset($HTTP_SESSION_VARS['valid_user']))
  {
    echo '<p>You are logged in as '.$HTTP_SESSION_VARS['valid_user'].'</p>';
    echo '<p>Members only content goes here</p>';
  }
  else
  {
    echo '<p>You are not logged in.</p>';
    echo '<p>Only logged in members may see this page.</p>';
  }

  echo '<a href="authmain.php">Back to main page</a>';
?>