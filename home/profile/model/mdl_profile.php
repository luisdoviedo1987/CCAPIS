<?php

class mdl_home {

    public function __construct(&$db) {

        $this->db = $db;
    }

   public function generarToken() {

        try {

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://login.salesforce.com/services/oauth2/token",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "grant_type=password&client_id=3MVG9i1HRpGLXp.pxRr5hhk_1sfJp9MGxgZxbxKTDjg.nHwxWfkwQRK0Mq8atKfMuMR35Cz4h7UzE5bCeRVzC&client_secret=6075090005897616650&username=medismart@fastcloud.com&password=Success101",
                CURLOPT_HTTPHEADER => array(
                    "Cache-Control: no-cache",
                    "Content-Type: application/x-www-form-urlencoded"
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
               
            } else {
                return json_decode($response, true);
            }
        } catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();
        }
    }


    public function generarConsultaGlobal($token, $cadena) {

        try {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://medismart.my.salesforce.com/services/apexrest/sfconsultapi/getdata?search=$cadena",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "Authorization: Bearer $token",
                    "Cache-Control: no-cache",
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
            return json_decode($response, true);
            }
        } catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();
        }
    }
    
}
