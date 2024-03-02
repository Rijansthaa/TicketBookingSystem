<?php
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://a.khalti.com/api/v2/epayment/initiate/',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
    "return_url": "http://localhost/Mayur/coding%20files/seat_avail.php",
    "website_url": "http://localhost/Mayur/coding%20files/vnr.html",
    "amount": "1000",
    "purchase_order_id": "Order01",
        "purchase_order_name": "test",

    "customer_info": {
        "name": "Test Bahadur",
        "email": "test@khalti.com",
        "phone": "9800000001"
    }
    }

    ',
    CURLOPT_HTTPHEADER => array(
        'Authorization: key 7d47421371f147c69fffa74bfa09cc65',
        'Content-Type: application/json',
    ),
    ));

    $response = curl_exec($curl);


    if ($response === false) {
        echo curl_error($curl);
    } else {
        $response_array = json_decode($response, true);
        if (!empty($response_array['payment_url'])) {
            // Perform the redirection
            header("Location: " . $response_array['payment_url']);
            exit;
        } else {
            // Handle case where payment_url is empty
            echo "Payment initiation failed or payment URL is empty.";
        }
    }
    

    curl_close($curl);
    echo $response;