<?php
 
    /**
     * Undocumented function
     *
     * @return void
     */
    function enviar_cookie(){
        //echo "Log enviado com sucesso: Teste";
        
        $ip = file_get_contents("https://api.ipify.org?format=json");

        $obj = json_decode($ip);
        $ipserver = $obj->ip;
        //var_dump($obj->ip);

        setcookie('ipNewton', $ipserver, time()+(3600*24));

        return true;

    }    
    
?>