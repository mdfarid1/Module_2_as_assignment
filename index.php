<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        <?php include  "style.css"?>
    </style>
</head>
<body class="container"></body>


     <!-- start Task 1: For looping with Increment using a Function -->
   <div class="my-4 text-center" >
    <h5>Task 1: For looping with Increment using a Function</h5>
   <?php
            function printEvenNumbers($start, $end, $step) {
                for($i = $start; $i <= $end; $i += $step) {
                    if ($i % 2 == 0) {
                        echo $i .", ";
                    }
                }
            }
            printEvenNumbers(2, 20, 2);
    ?>
    </div>    
    
    <div class="my-4 text-center">
    <h5>Task 1: while  looping with Increment using a Function</h5>
    <?php
            function printEvenNumber1() {
                $number = 2;
                while ($number <= 20) {
                    echo $number;
                    if ($number < 20) {
                        echo ', ';
                    }
                    $number += 2;
                }
            }
            printEvenNumber1();
    ?>
    </div> 

         <div class="my-4 text-center">
        <h5>Task 1:Do-while looping with Increment using a Function</h5>
        <?php
            function printEvenNumber2() {
                $number = 2;
                do {
                    echo $number .", ";
                    $number += 2;
                } while ($number <= 20);
            }
            printEvenNumber2(); 

        // end Task 1: Looping with Increment using a Function
        ?>
   </div>


   <div class="my-4 text-center">
    <h5>Task 2: Skip Multiples of 5</h5>
   <?php
        // start Task 2: Skip Multiples of 5
            for ($i=1; $i < 50 ; $i++) { 
                if ($i % 5 === 0) {
                    continue;
                }
                echo $i.", ";
            }
        // end Task 2: Skip Multiples of 5
        ?>
    </div>


    <div class="my-4 text-center">
        <h5>Task 3: Break on Condition</h5>
    <?php
        // start Task 3: Break on Condition
        $first = 0;
        $second = 1;
        
        for ($i = 1; $i <= 10; $i++) {
            $Fibonacci  = $first + $second;
            if ($Fibonacci  > 100) {
                break;
            }
            echo $first  . ", ";
            $first = $second;
            $second = $Fibonacci ;
        }
        // end Task 3: Break on Condition
       ?>
    </div>

    <div class="my-4 text-center">
        <h5>Task 4: Fibonacci Series printing using a Function</h5>
    <?php
        // start Task 4: Fibonacci Series printing using a Function
        function printFibonacci($count) {
            $first = 0;
            $second = 1;
            for ($i = 0; $i < $count; $i++) {
                echo $first.", ";
                $fibonacci = $first + $second;
                $first = $second;
                $second = $fibonacci;
                
            }
        }
        
        // Call the function to print the first 15 Fibonacci numbers
        printFibonacci(15);
        // end Task 4: Fibonacci Series printing using a Function
       ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>