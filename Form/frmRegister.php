<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JJmercury</title>
</head>

<body>
    <?php
    include("header.php");
    ?>

<main>
    <div class="container">
    <div class="card">
  <div class="card-header">
    Subscribe
  </div>
  <div class="card-body">
   <form name="form1" action="insert.php" method="post">
        <div class="row">
            <div class="col-md-2"><label for="exampleFormControlInput1" class="form-label">Name Title</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="txt_Title" id="txt_Title">
            <option selected>Selected</option>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="ms.">Ms.</option>
            </select>
        </div>

        <div class="col-md-5"><label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="input" class="form-control" name="txt_Name" id="txt_Name" placeholder="*Name">
        </div>

        <div class="col-md-5"><label for="exampleFormControlInput1" class="form-label">Last name</label>
        <input type="input" class="form-control" name="txt_Lname" id="txt_Lname" placeholder="*Last name">
        </div>
    </div>

    <div class="row">
    <div class="col-md-2"><label for="exampleFormControlInput1" class="form-label">Sex</label>
            <div class="form-check">
            <input type="radio" class="form-check-input" name="txt_sex" id="txt_sex" value="Male">Male
            </div>

            <div class="form-check">
             <input type="radio" class="form-check-input" name="txt_sex" id="txt_sex" value="Female">Female
            </div>

        </div>

        <div class="col-md-3"><label for="exampleFormControlInput1" class="form-label">Birthday</label>
        <input type="date" class="form-control" id="txt_birthdate" name="txt_birthdate"
                                placeholder="00/00/0000" data-provide="datepicker" data-date-language="th-th">
        </div>

        <div class="col-md-7"><label for="exampleFormControlInput1" class="form-label">Adress</label>
        
        <textarea class="form-control"  name="txt_address" id="txt_address"> </textarea>

        </div>

</div>
<div class="row">

<div class="col-md-6"><label for="exampleFormControlInput1" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="txt_Email" id="txt_Email" placeholder="*E-mail">
        </div>

<div class="col-md-6"><label for="exampleFormControlInput1" class="form-label">Phone Number</label>
            <input type="input" class="form-control" name="txt_Number" id="txt_Number" placeholder="*Phone Number">
        </div>

</div>
<br>
<center>
<button type="reset" class="btn btn-outline-warning"><i class="bi bi-x-circle"></i>Cancel</button>
<button type="submit" class="btn btn-outline-warning"><i class="bi bi-arrow-90deg-right"></i>Save</button>
</center>
    </form>
  </div>
</div>
    </div>

</main>

<?php
    include("footer.php");
    ?>
</body>
</html>