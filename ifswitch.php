<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



<div class="container">
    <h1 class='text-center'>If Statement</h1>



    <?php


if (isset($_POST['submit'])) {
    
    
    $percentage = $_POST['percentage'];
    $percentage_message;

        if ($percentage > 40) {
            // echo "<h4>You are Pass</h4>";
            // echo "<h4>________________________</h4>";
            $percentage_message = 'You are Pass';
        } else {
            // echo "<h4>You are Fail</h4>";
            // echo "<h4>________________________</h4>";
            $percentage_message = 'You are Fail';
        }


        $grade = $_POST['grade'];
        $grade_message;

        switch ($grade) {
            case 'A':
                // echo "<h4>You have done a excellent Job</h4>";
                $grade_message =  "You have done a excellent Job";
                break;
            case 'B':
                // echo "<h4>You have done a great Job</h4>";
                $grade_message =  "You have done a great Job<";
                break;
            case 'C':
                // echo "<h4>You have done a good Job</h4>";
                $grade_message =  "You have done a good Job";
                break;
            case 'D':
                // echo "<h4>You need to focus on your studies</h4>";
                $grade_message =  "You need to focus on your studies";
                break;
            case 'F':
                // echo "<h4>Sorry! you failed in your Exam</h4>";
                $grade_message =  "Sorry! you failed in your Exam";
                break;
        }
    }




    ?>



    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

        <label for="">Enter your Percentage</label>
        <input type="text" name="percentage"><br><br>
        <label for="">Enter your Grade</label>0
        <input type="text" name="grade"><br>

        <input type="submit" value="Submit" name="submit">

    </form>

    <h5><?php echo $percentage_message ?? 'Your Percentage is here' ?></h5>
    <hr>
    <h5><?php echo $grade_message ?? 'Your Grade is here'  ?></h5>


    

</div>