<?php
include('seat_avail.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $total_seat="";
    if(isset($_POST['proceed_to_book_seat']))
    {
        $total_seat=$_POST['total_seat'];
        if($total_seat==1)
        {
            ?><br>
            <div class="container jumbotron form-group ">
                <form method="post">
                    <h5>Customer details</h5>
                    <div class="d-flex justify-content-center">
                        <div class="p-2">
                            <input type="text" name="customer_name" placeholder="Customer name">
                        </div>
                        <div class="p-2">
                            <input type="number" name="customer_mobile" placeholder="mobile no">
                        </div>
                        
                    </div>
                    <input type="hidden" name="total_seat" value="<?php $total_seat?>"><br>

                    <button name="add_passanger" class="form-control btn btn-danger">Add Passanger</button>
                </form>
            </div>
            <?php
            $seat_no=array();
            $seat_status=array();
            $fetch_seat_query="SELECT bus_seats.seat_no,bus_seats.status,bus_seats.bus_name FROM buses INNER JOIN bus_seats ON bus_seats.bus_name=buses.bus_name";
      
            $fetch_seat_query_result=mysqli_query($conn,$fetch_seat_query);
            if($fetch_seat_query_result)
            {
                $total_seats=mysqli_num_rows($fetch_seat_query_result);
                while($row=mysqli_fetch_assoc($fetch_seat_query_result))
                {
                    $seat_status[]=$row["status"];
                    $seat_no[]=$row["seat_no"];


                }

            }
        ?>
        <br>
        <div class="container booking-selection">
            <form  method="post">
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-1">L-1
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-2">L-2
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-3">L-3
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-4">L-4
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-5">L-5
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-6">L-6
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-7">L-7
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-8">L-8
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-9">L-9
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-10">L-10
                </span>
                <br><br>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-1">R-1
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-2">R-2
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-3">R-3
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-4">R-4
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-5">R-5
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-6">R-6
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-7">R-7
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-8">R-8
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-9">R-9
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-10">R-10
                </span>
                <br><br>
                <p>FIRST PAY THEN CONTINUE TO BOOK YOUR SEATS     <a href="payment.php">Pay</a> </p><br>
                <input type="number" name="ticket_no" placeholder="ticket no">
                <input type="hidden" name="total_seat"value="FARE<?php echo $total_seat?>">
                
                
                <button name="book_seat">book seat</button>
            </form>
        </div>
        
        <?php
        
        
        }
        elseif($total_seat==2)
        {
            ?><br>
            <div class="container jumbotron form-group ">
                <form method="post">
                    <h5>Customer details</h5>
                    <div class="d-flex justify-content-center">
                        <div class="p-2">
                            <input type="text" name="customer_name_1" placeholder="Customer name">
                        </div>
                        <div class="p-2">
                            <input type="text" name="customer_name_2" placeholder="Customer name">
                        </div>
                        <div class="p-2">
                            <input type="number" name="customer_mobile_no_1" placeholder="mobile no">
                        </div>
                        <div class="p-2">
                            <input type="number" name="customer_mobile_no_2" placeholder="mobile no">
                        </div>
                        
                    </div>
                    <input type="hidden" name="total_seat" value="<?php $total_seat?>"><br>

                    <button name="add_passanger" class="form-control btn btn-danger">Add Passanger</button>
                </form>
            </div>
            <?php
            $seat_no=array();
            $seat_status=array();
            $fetch_seat_query="SELECT bus_seats.seat_no,bus_seats.status,bus_seats.bus_name FROM buses INNER JOIN bus_seats ON bus_seats.bus_name=buses.bus_name";
      
            $fetch_seat_query_result=mysqli_query($conn,$fetch_seat_query);
            if($fetch_seat_query_result)
            {
                $total_seats=mysqli_num_rows($fetch_seat_query_result);
                while($row=mysqli_fetch_assoc($fetch_seat_query_result))
                {
                    $seat_status[]=$row["status"];
                    $seat_no[]=$row["seat_no"];


                }

            }
        ?>  
        <br>
        <div class="container booking-selection">
            <form  method="post">
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-1">L-1
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-2">L-2
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-3">L-3
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-4">L-4
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-5">L-5
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-6">L-6
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-7">L-7
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-8">L-8
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-9">L-9
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-10">L-10
                </span>
                <br><br>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-1">R-1
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-2">R-2
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-3">R-3
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-4">R-4
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-5">R-5
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-6">R-6
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-7">R-7
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-8">R-8
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-9">R-9
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-10">R-10
                </span>
                <br><br>
                <input type="number" name="ticket_no" placeholder="ticket no">
                <input type="hidden" name="total_seat"value="<?php echo $total_seat?>">
                <button name="book_seat">book seat</button>
            </form>
        </div>
        
        <?php
        
        
        }
        else if($total_seat==3)
        {
            ?><br>
            <div class="container jumbotron form-group ">
                <form method="post">
                    <h5>Customer details</h5>
                    <div class="d-flex justify-content-center">
                        <div class="p-2">
                            <input type="text" name="customer_name_1" placeholder="Customer name">
                        </div>
                        <div class="p-2">
                            <input type="text" name="customer_name_2" placeholder="Customer name">
                        </div>
                        <div class="p-2">
                            <input type="text" name="customer_name_3" placeholder="Customer name">
                        </div>
                        <div class="p-2">
                            <input type="number" name="customer_mobile_no_1" placeholder="mobile no">
                        </div>
                        <div class="p-2">
                            <input type="number" name="customer_mobile_no_2" placeholder="mobile no">
                        </div>
                        <div class="p-2">
                            <input type="number" name="customer_mobile_no_3" placeholder="mobile no">
                        </div>
                    </div>
                    <input type="hidden" name="total_seat" value="<?php $total_seat?>"><br>

                    <button name="add_passanger" class="form-control btn btn-danger">Add Passanger</button>
                </form>
            </div>
            
        <br>
        <div class="container booking-selection">
            <form  method="post">
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-1">L-1
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-2">L-2
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-3">L-3
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-4">L-4
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-5">L-5
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-6">L-6
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-7">L-7
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-8">L-8
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-9">L-9
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-10">L-10
                </span>
                <br><br>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-1">R-1
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-2">R-2
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-3">R-3
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-4">R-4
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-5">R-5
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-6">R-6
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-7">R-7
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-8">R-8
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-9">R-9
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-10">R-10
                </span>

                <br><br>
                <input type="number" name="ticket_no" placeholder="ticket no">
                <input type="hidden" name="total_seat"value="<?php echo $total_seat?>">
                
                <button name="book_seat">book seat</button>
            </form>
        </div>
        
        <?php
        
        
        }

        
    }
    // error_reporting(0);
    if(isset($_POST["add_passanger"]))
        {
            $ticket_no=rand();
            $total_seat=isset($_POST["total_seat"]);
            
            if($total_seat==1)
            {
                // echo $email;
                $customer_name=$_POST["customer_name"];
                $customer_mobile=$_POST["customer_mobile"];
                $insert_passanger_details_query="INSERT INTO passanger_details(passanger_name,passanger_mobile,ticket_no)VALUES('$customer_name','$customer_mobile','$ticket_no')" ;
                $insert_passanger_details_query_result=mysqli_query($conn,$insert_passanger_details_query);
                if($insert_passanger_details_query_result)
                {
                    echo "<div class='bg-success font-weight-bold text-light'><p>Passanger added successfully</p>
                        <p>Your ticket no is <span class='text-danger font-weight-bold'>".$ticket_no."</span></p>
                        <p>Kindly use this ticket no to confirm your booking while choosing your specific seat</p>
                        </div>";
                    
                }
            }
            elseif($total_seat==2){
                // echo $email;
                $customer_name_1=$_POST["customer_name_1"];
                $customer_mobile_no_1=$_POST["customer_mobile_no_1"];
                $customer_name_2=$_POST["customer_name_2"];
                $customer_mobile_no_2=$_POST["customer_mobile_no_2"];
                $insert_passanger_details_query="INSERT INTO passanger_details(passanger_name,passanger_mobile,ticket_no)VALUES('$customer_name_1','$customer_mobile_no_1','$ticket_no')" ;
                $insert_passanger_details_query_result=mysqli_query($conn,$insert_passanger_details_query);
                if($insert_passanger_details_query_result)
                {
                    $insert_passanger_details_query="INSERT INTO passanger_details(passanger_name,passanger_mobile,ticket_no)VALUES('$customer_name_2','$customer_mobile_no_2','$ticket_no')" ;
                    $insert_passanger_details_query_result=mysqli_query($conn,$insert_passanger_details_query);
                    if($insert_passanger_details_query_result){
                    echo "<div class='bg-success font-weight-bold text-light'><p>Passanger added successfully</p>
                        <p>Your ticket no is <span class='text-danger font-weight-bold'>".$ticket_no."</span></p>
                        <p>Kindly use this ticket no to confirm your booking while choosing your specific seat</p>
                        </div>";
                    }
                }
            }
            else if($total_seat==3){
                // echo $email;
                $customer_name_1=$_POST["customer_name_1"];
                $customer_mobile_no_1=$_POST["customer_mobile_no_1"];
                $customer_name_2=$_POST["customer_name_2"];
                $customer_mobile_no_2=$_POST["customer_mobile_no_2"];
                $customer_name_3=$_POST["customer_name_3"];
                $customer_mobile_no_3=$_POST["customer_mobile_no_3"];
                
                $insert_passanger_details_query="INSERT INTO passanger_details(passanger_name,passanger_mobile,ticket_no)VALUES('$customer_name_1','$customer_mobile_no_1','$ticket_no')" ;
                $insert_passanger_details_query_result=mysqli_query($conn,$insert_passanger_details_query);
                if($insert_passanger_details_query_result)
                {
                    $insert_passanger_details_query="INSERT INTO passanger_details(passanger_name,passanger_mobile,ticket_no)VALUES('$customer_name_2','$customer_mobile_no_2','$ticket_no')" ;
                    $insert_passanger_details_query_result=mysqli_query($conn,$insert_passanger_details_query);
                    if($insert_passanger_details_query_result){
                        
                        $insert_passanger_details_query="INSERT INTO passanger_details(passanger_name,passanger_mobile,ticket_no)VALUES('$customer_name_3','$customer_mobile_no_3','$ticket_no')" ;
                        $insert_passanger_details_query_result=mysqli_query($conn,$insert_passanger_details_query);
                        if($insert_passanger_details_query_result){
                        echo "<div class='bg-success font-weight-bold text-light'><p>Passanger added successfully</p>
                            <p>Your ticket no is <span class='text-danger font-weight-bold'>".$ticket_no."</span></p>
                            <p>Kindly use this ticket no to confirm your booking while choosing your specific seat</p>
                            </div>";
                    }
                }
            }
        }
    }
if(isset($_POST["book_seat"]))
{
    $k=0;
    $j=0;
   
    $ticket_no=$_POST['ticket_no'];
    $choosen_seat=$_POST["seat"];
    $total_choosen_seat=count($choosen_seat);
    if($total_choosen_seat<=$seats_available)
    {
        $fetch_total_passanger_query="SELECT passanger_id FROM passanger_details WHERE ticket_no='$ticket_no'";
        $fetch_total_passanger_query_result=mysqli_query($conn,$fetch_total_passanger_query);
        if($fetch_total_passanger_query_result)
        {
            $total_no_passanger=mysqli_num_rows($fetch_total_passanger_query_result);
            if($total_no_passanger==$total_choosen_seat)
            {
                if($total_no_passanger==1)
                {
                    $fetch_bus_name_query="SELECT bus_name FROM buses WHERE id='1'";
                    $fetch_bus_name_query_result=mysqli_query($conn,$fetch_bus_name_query);
                    if($fetch_bus_name_query_result)
                    {
                        while($row=mysqli_fetch_assoc($fetch_bus_name_query_result))
                        {
                            $bus_name=$row["bus_name"];

                        }
                        $fetch_admin_id_query="SELECT id FROM users WHERE id='1'";
                        $fetch_admin_id_query_result=mysqli_query($conn,$fetch_admin_id_query);
                        if($fetch_admin_id_query_result)
                        {
                            while($row=mysqli_fetch_assoc($fetch_admin_id_query_result))
                            {
                                $user_id=$row["id"];
                            }
                            $insert_ticket_detail_query="INSERT INTO ticket_details(ticket_no) VALUES ('$ticket_no')";
                            $insert_ticket_detail_query_result=mysqli_query($conn,$insert_ticket_detail_query);
                            if($insert_ticket_detail_query_result)
                            {
                                $update_ticket_admin_query="UPDATE ticket_details SET admin_id='$user_id' WHERE ticket_no='$ticket_no'";
                                $update_ticket_admin_query_result=mysqli_query($conn,$update_ticket_admin_query);
                                if($update_ticket_admin_query_result)
                                {

                                }
                            }
                        }

                
                    }
                    
                    foreach($choosen_seat as $value){
                        $fetch_seat_status_query="SELECT status FROM bus_seats WHERE seat_no='$value' AND bus_name='$bus_name'";
                        $fetch_seat_status_query_result=mysqli_query($conn,$fetch_seat_status_query);
                        if($fetch_seat_status_query_result)
                        {
                            while($row=mysqli_fetch_assoc($fetch_seat_status_query_result))
                            {
                                $seat_status=$row["status"];
                                if($seat_status=="booked")
                                {
                                    $k++;

                                }
                                else
                                {
                                    $update_seat_query="UPDATE bus_seats SET status='booked' , ticket_no='$ticket_no' WHERE seat_no='$value' AND bus_name='$bus_name'";
                                    $update_seat_query_result=mysqli_query($conn,$update_seat_query);
                                    if($update_seat_query_result)
                                    {
                                        $j++;
                                    }
                                }
                            } 
                        }
                    }
                    $remaining_seats_buses_table=$seats_available-$total_choosen_seat;
                    $update_seat_buses_table_query="UPDATE buses SET seats_available='$remaining_seats_buses_table' WHERE id='1'";
                    $update_seat_buses_table_query_result=mysqli_query($conn,$update_seat_buses_table_query);
                    if($update_seat_buses_table_query_result){
                        echo "seat in bus table updated";

                    }
                    if($total_choosen_seat==$k)
                    {
                        echo "<div class='bg-danger p-2 font-weight-bold text-light'>
                            <p>All choosen seats are booked already</p>
                            </div>";
                    }
                    else if($total_choosen_seat)
                    {
                        $remaining_seats=$total_choosen_seat-$k;
                        echo "<div class='bg-danger p-2 m-2 text-light font-weight-bold'>
                        <p>Your choosen seat are booked successfully</p></div>";
                    }
                    else if($total_choosen_seat==$j)
                    {
                        
                        echo "<div class='bg-danger p-2 m-2 text-light font-weight-bold'>
                        <p>Your seats are booked successfully</p></div>";
                    }
                }
                else if($total_no_passanger==2)
                {
                    $fetch_bus_name_query="SELECT bus_name FROM buses WHERE id='id'";
                    $fetch_bus_name_query_result=mysqli_query($conn,$fetch_bus_name_query);
                    if($fetch_bus_name_query_result)
                    {
                        while($row=mysqli_fetch_assoc($fetch_bus_name_query_result))
                        {
                            $bus_name=$row["bus_name"];

                        }
                        $fetch_admin_id_query="SELECT id FROM users WHERE id='1'";
                        $fetch_admin_id_query_result=mysqli_query($conn,$fetch_admin_id_query);
                        if($fetch_admin_id_query_result)
                        {
                            while($row=mysqli_fetch_assoc($fetch_admin_id_query_result))
                            {
                                $user_id=$row["id"];
                            }
                            $insert_ticket_detail_query="INSERT INTO ticket_details(ticket_no) VALUES ('$ticket_no')";
                            $insert_ticket_detail_query_result=mysqli_query($conn,$insert_ticket_detail_query);
                            if($insert_ticket_detail_query_result)
                            {
                                $update_ticket_admin_query="UPDATE ticket_details SET admin_id='$user_id' WHERE ticket_no='$ticket_no'";
                                $update_ticket_admin_query_result=mysqli_query($conn,$update_ticket_admin_query);
                                if($update_ticket_admin_query_result)
                                {

                                }
                            }
                        }

                
                    }
                    foreach($choosen_seat as $value){
                        $fetch_seat_status_query="SELECT status FROM bus_seats WHERE seat_no='$value' AND bus_name='$bus_name'";
                        $fetch_seat_status_query_result=mysqli_query($conn,$fetch_seat_status_query);
                        if($fetch_seat_status_query_result)
                        {
                            while($row=mysqli_fetch_assoc($fetch_seat_status_query_result))
                            {
                                $seat_status=$row["status"];
                                if($seat_status=="booked")
                                {
                                    $k++;

                                }
                                else
                                {
                                    $update_seat_query="UPDATE bus_seats SET status='booked' , ticket_no='$ticket_no' WHERE seat_no='$value' AND bus_name='$bus_name'";
                                    $update_seat_query_result=mysqli_query($conn,$update_seat_query);
                                    if($update_seat_query_result)
                                    {
                                        $j++;
                                    }
                                }
                            } 
                        }
                    }
                    $remaining_seats_buses_table=$seats_available-$total_choosen_seat;
                    $update_seat_buses_table_query="UPDATE buses SET seats_available='$remaining_seats_buses_table' WHERE id='1'";
                    $update_seat_buses_table_query_result=mysqli_query($conn,$update_seat_buses_table_query);
                    if($update_seat_buses_table_query_result){
                        echo "seat in bus table updated";

                    }
                    if($total_choosen_seat==$k)
                    {
                        echo "<div class='bg-danger p-2 font-weight-bold text-light'>
                            <p>All choosen seats are booked already</p>
                            </div>";
                    }
                    else if($total_choosen_seat)
                    {
                        $remaining_seats=$total_choosen_seat-$k;
                        echo "<div class='bg-danger p-2 m-2 text-light font-weight-bold'>
                        <p>Your choosen seat are booked successfully</p></div>";
                    }
                    else if($total_choosen_seat==$j)
                    {
                        
                        echo "<div class='bg-danger p-2 m-2 text-light font-weight-bold'>
                        <p>Your seats are booked successfully</p></div>";
                    }
                }
                else if($total_no_passanger==3)
                {
                    $fetch_bus_name_query="SELECT bus_name FROM buses WHERE id='1'";
                    $fetch_bus_name_query_result=mysqli_query($conn,$fetch_bus_name_query);
                    if($fetch_bus_name_query_result)
                    {
                        while($row=mysqli_fetch_assoc($fetch_bus_name_query_result))
                        {
                            $bus_name=$row["bus_name"];

                        }
                        $fetch_admin_id_query="SELECT id FROM users WHERE email='$email'";
                        $fetch_admin_id_query_result=mysqli_query($conn,$fetch_admin_id_query);
                        if($fetch_admin_id_query_result)
                        {
                            while($row=mysqli_fetch_assoc($fetch_admin_id_query_result))
                            {
                                $user_id=$row["user_id"];
                            }
                            $insert_ticket_detail_query="INSERT INTO ticket_details(ticket_no) VALUES ('$ticket_no')";
                            $insert_ticket_detail_query_result=mysqli_query($conn,$insert_ticket_detail_query);
                            if($insert_ticket_detail_query_result)
                            {
                                $update_ticket_admin_query="UPDATE ticket_details SET admin_id='$user_id' WHERE ticket_no='$ticket_no'";
                                $update_ticket_admin_query_result=mysqli_query($conn,$update_ticket_admin_query);
                                if($update_ticket_admin_query_result)
                                {

                                }
                            }
                        }

                
                    }
                    foreach($choosen_seat as $value){
                        $fetch_seat_status_query="SELECT status FROM bus_seats WHERE seat_no='$value' AND bus_name='$bus_name'";
                        $fetch_seat_status_query_result=mysqli_query($conn,$fetch_seat_status_query);
                        if($fetch_seat_status_query_result)
                        {
                            while($row=mysqli_fetch_assoc($fetch_seat_status_query_result))
                            {
                                $seat_status=$row["status"];
                                if($seat_status=="booked")
                                {
                                    $k++;

                                }
                                else
                                {
                                    $update_seat_query="UPDATE bus_seats SET status='booked' , ticket_no='$ticket_no' WHERE seat_no='$value' AND bus_name='$bus_name'";
                                    $update_seat_query_result=mysqli_query($conn,$update_seat_query);
                                    if($update_seat_query_result)
                                    {
                                        $j++;
                                    }
                                }
                            } 
                        }
                    }
                    $remaining_seats_buses_table=$seats_available-$total_choosen_seat;
                    $update_seat_buses_table_query="UPDATE buses SET seats_available='$remaining_seats_buses_table' WHERE id='1'";
                    $update_seat_buses_table_query_result=mysqli_query($conn,$update_seat_buses_table_query);
                    if($update_seat_buses_table_query_result){
                        echo "seat in bus table updated";

                    }
                    if($total_choosen_seat==$k)
                    {
                        echo "<div class='bg-danger p-2 font-weight-bold text-light'>
                            <p>All choosen seats are booked already</p>
                            </div>";
                    }
                    else if($total_choosen_seat)
                    {
                        $remaining_seats=$total_choosen_seat-$k;
                        echo "<div class='bg-danger p-2 m-2 text-light font-weight-bold'>
                        <p>Your choosen seat are booked successfully</p></div>";
                    }
                    else if($total_choosen_seat==$j)
                    {
                        
                        echo "<div class='bg-danger p-2 m-2 text-light font-weight-bold'>
                        <p>Your seats are booked successfully</p></div>";
                    }
                }
                
                
            }
        }
    }

}
    ?>
</body>
</html>