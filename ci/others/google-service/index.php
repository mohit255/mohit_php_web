  <html>
        <head>
            <title>ControlPlus Notification Center</title>
        </head>
        <body>
            <center>
                <br>
                <font size="10" style="bold">ControlPlus Notification Center</font>
                <br> <br> <br> <br> <br>
                <Table class= "b">
                    <tr>
                        <td>
                            <form method = 'POST' action = '?notifyHealth=1'>
                                <div>
                                <input class ='main_button' type = 'submit' value = 'Send Notification'>
                                </div>
                            </form>
                        </td>
                    </tr>

                </Table>
            </center>
        </body>
    </html>



    <?php

        function sendPushNotification() {

            $url = "https://fcm.googleapis.com/fcm/send";

            $serverKey = 'AAAAFVeRB7Q:APA91bEU6fNtmoqi28_yaYkxM_RVCipIWra5PlpPn1xI-7TkciPy42qDBEloZm85myJzhHoRR6OwZGJkhfx9Zbu2sWBg-JHPxS9GXnKyFTpru5MX58hTb9rif-pDGwRJOCgjv2IDIDPW';
            $title = "ControlPlus App";
            $body = "hello my name is pawan";
            $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1');
            $arrayToSend = array('to' => 'fCp-2WhBR8I:APA91bH9wEoUbu_JYYrlgzUe5IzPA0PXRSsLdQnBCZW49p5BsUFl8srhslyQOj-xXjuwM18uGEshE1n3wX6SFEXJUFWnsKKI-mAle9CHIReptt40mDb1LUVeHgxTUHf0K4okBIOLmGfU', 'data' => $notification,'priority'=>'high');
            $json = json_encode($arrayToSend);
            $headers = array();
            $headers[] = 'Content-Type: application/json';
            $headers[] = 'Authorization: key='. $serverKey;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
            curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);

            $response = curl_exec($ch);

            curl_close($ch);

            return $response;

        }

        if(!empty($_GET['notifyHealth'])) { 

            sendPushNotification();

        }
    ?>