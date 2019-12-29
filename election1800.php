<?php
if ($_POST['submit']) {
  $adams = 0;
  $jefferson = 0;

  switch ($_POST['britfrance']) {
    case 'brit': $adams += 10; break;
    case 'britwar': $adams += 20; break;
    case 'france': $jefferson += 10; break;
    case 'francewar': $jefferson += 20; break;
    default: $error = true;
  }

  switch ($_POST['alien']) {
    case 'yes': $adams += 10; break;
    case 'no': $jefferson += 10; break;
    default: $error = true;
  }

  switch (($_POST['bank'])) {
    case 'yes': $adams += 10; break;
    case 'no': $jefferson += 10; break;
    default: $error = true;
  }

  switch (($_POST['whiskey'])) {
    case 'yes': $adams += 10; break;
    case 'no': $jefferson += 10; break;
    default: $error = true;
  }

  switch (($_POST['military'])) {
    case 'yes': $adams += 10; break;
    case 'no': $jefferson += 10; break;
    default: $error = true;
  }

  if (!$error) {
    if ($adams > $jefferson) {
      $result = 'John Adams';
    }
    elseif ($jefferson > $adams) {
      $result = 'Thomas Jefferson';
    }
    else {
      $result = 'The two candidates are equal to you!';
    }
  }
}
?><!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width,initial-scale=1'>
  <meta name='format-detection' content='telephone=no'>
  <title>Election 1800</title>
  <style>
    dt {
      margin-top: 15px;
    }
    .radios {
      overflow: hidden;
    }
    .radios input {
      float: left;
      clear: both;
    }
    .radios label {
      float: left;
    }
  </style>
</head>

<body>
  <main>
    <?php if ($result && !$error) { ?>
      <p>I side with: <strong><?php echo $result ?></strong></p>
      <p>Score:</p>
      <p><em>Adams: <?php echo $adams ?></em></p>
      <p><em>Jefferson: <?php echo $jefferson ?></em></p>
      <p><a href='election1800.php'>Do over</a></p>
    <?php } else { ?>
    <form action='election1800.php' method='post'>
      <fieldset>
        <legend>I Side With (election of 1800)</legend>
        <p><em>Like <a href='https://www.isidewith.com'>ISideWith.com</a> except for the election of 1800.</em></p>
        <dl>
          <dt>
            <label>Should the U.S. support Britain or France in their mutual conflict?</label>
          </dt>
          <dd class='radios'>
            <input type='radio' value='brit' name='britfrance' id='britfranceBrit'>
            <label for='britfranceBrit'>Britain</label>
            <input type='radio' value='britwar' name='britfrance' id='britfranceBritWar'>
            <label for='britfranceBritWar'>Britain, and declare war on France</label>
            <input type='radio' value='france' name='britfrance' id='britfranceFrance'>
            <label for='britfranceBrit'>France</label>
            <input type='radio' value='francewar' name='britfrance' id='britfranceFranceWar'>
            <label for='britfranceFranceWar'>France, and declare war on Britain</label>
          </dd>
          <dt>
            <label>Do you support the Alien and Sedition Acts?</label>
          </dt>
          <dd class='radios'>
            <input type='radio' value='yes' name='alien' id='alienYes'>
            <label for='alienYes'>Yes</label>
            <input type='radio' value='no' name='alien' id='alienNo'>
            <label for='alienNo'>No</label>
          </dd>
          <dt>
            <label>Do you support the rechartering of the First Bank of the United States when its charter expires in 1811?</label>
          </dt>
          <dd class='radios'>
            <input type='radio' value='yes' name='bank' id='bankYes'>
            <label for='bankYes'>Yes</label>
            <input type='radio' value='no' name='bank' id='bankNo'>
            <label for='bankNo'>No</label>
          </dd>
          <dt>
            <label>Do you support the Federal tax on distilled spirits to pay down the national debt?</label>
          </dt>
          <dd class='radios'>
            <input type='radio' value='yes' name='whiskey' id='whiskeyYes'>
            <label for='whiskeyYes'>Yes</label>
            <input type='radio' value='no' name='whiskey' id='whiskeyNo'>
            <label for='whiskeyNo'>No</label>
          </dd>
          <dt>
            <label>Should the Federal government maintain a standing army?</label>
          </dt>
          <dd class='radios'>
            <input type='radio' value='yes' name='military' id='militaryYes'>
            <label for='militaryYes'>Yes</label>
            <input type='radio' value='no' name='military' id='militaryNo'>
            <label for='militaryNo'>No</label>
          </dd>
        </dl>
        <input type='submit' name='submit' value='Submit'>
      </fieldset>
    </form>
    <?php } ?>
  </main>
</body>

</html>
