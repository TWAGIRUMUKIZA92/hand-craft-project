<!DOCTYPE html>
<!-- Created By CampCodes -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Responsive Chat Box Design | CampCodes</title> -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url();?><https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <input type="checkbox" id="click">
    <label for="click">
      <i class="fab fa-facebook-messenger"></i>
      <i class="fas fa-times"></i>
    </label>
    <div class="wrapper">
      <div class="head-text">
Let's chat? - Online</div>
<div class="chat-box">
        <div class="desc-text">
Please fill out the form below to start chatting with the next available agent.</div>
<form action="#">
          <div class="field">
            <input type="text" placeholder="Your Name" required>
          </div>
<div class="field">
            <input type="email" placeholder="Email Address" required>
          </div>
<div class="field textarea">
            <!-- Due to more textarea fields I got an error so I've changed the textarea name into changeit..Change the tag name to use it -->
            <changeit cols="30" rows="10" placeholder="Explain your queries.." required></changeit>
          </div>
<div class="field">
            <button type="submit">Start Chat</button>
          </div>
</form>
</div>
</div>
</body>
</html>