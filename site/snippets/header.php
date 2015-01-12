<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <script src="//use.typekit.net/ajy4pec.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <?php echo css('css/styles.css') ?>

  <?php echo js('js/libs/jquery.js') ?>
  <?php echo js('js/libs/modernizr.js') ?>
  <?php echo js('js/main.js') ?>
  <script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() {

      var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields
    $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
      $(this).css('border-color','');
      if(!$.trim($(this).val())){ //if this field is empty
        $(this).css('border-color','red'); //change border color to red
        proceed = false; //set do not proceed flag
      }
      //check invalid email
      var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
        $(this).css('border-color','red'); //change border color to red
        proceed = false; //set do not proceed flag
      }
    });

        if(proceed) //everything looks good! proceed...
        {
      //get input field values data to be sent to server
            post_data = {
        'user_name'   : $('input[name=name]').val(),
        'user_email'  : $('input[name=email]').val(),
        'user_org'    : $('input[name=org]').val(),
        'msg'     : $('textarea[name=message]').val()
      };

            //Ajax post data to server
            $.post('contact_me.php', post_data, function(response){
        if(response.type == 'error'){ //load json data from server and output message
          output = '<div class="error">'+response.text+'</div>';
        }else{
            output = '<div class="success">'+response.text+'</div>';
          //reset values in all input fields
          $("#contact_form  input[required=true], #contact_form textarea[required=true]").val('');
          $("#submit_btn").val('Sent!').addClass('sent'); //hide form after
        }
            }, 'json');
        }
    });

    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() {
        $(this).css('border-color','');
        $("#result").slideUp();
    });
});
</script>

</head>
<body>
