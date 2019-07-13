<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
    #loading-img{
    display:none;
    }

    .response_msg{
    margin-top:10px;
    font-size:13px;
    background:#E5D669;
    color:#ffffff;
    width:250px;
    padding:3px;
    display:none;
    }
    form{
        margin-top:50px;
    }
</style>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-8">
<h1>Add Cluster Event</h1>
<form name="contact-form" action="addedEvent.php" method="post" id="contact-form">
<div class="form-group">
<label for="Name">Agenda</label>
<input type="text" class="form-control" name="agenda" placeholder="Name" required>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Cluster</label>
<input type="text" name="cluster" class="form-control" placeholder="Cluster Name" required>
</div>
<div class="form-group">
<label for="Phone">Place</label>
<input type="text" name="place" class="form-control" placeholder="Place" required>
</div>

<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
</form>

<div class="response_msg"></div>
</div>
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#contact-form").on("submit",function(e){
e.preventDefault();
if($("#contact-form [name='your_name']").val() === '')
{
$("#contact-form [name='your_name']").css("border","1px solid red");
}
});
});
$("#contact-form input").blur(function(){
var checkValue = $(this).val();
if(checkValue != '')
{
$(this).css("border","1px solid #eeeeee");
}
});
});
</script>
</body>
</html>