<?php

class GeneradorUsuariosAleatorios
{
    const API_URL = 'https://randomuser.me/api/';
    /**
     * Obtiene los datos aleatorios de usuarios mediante una petición curl
     * No recibe ningún parámetro
     * @return $dataToArray con toda la información de los usuarios
     */
    public function getUsuarioAleatorio()
    {
        $curlData = $this->ejecutarCurl();
        $dataToArray = json_decode($curlData, true);

        return $dataToArray['results'][0];
    }

    /**
     * Realiza una petición curl a una url de una api externa pública
     * No recibe parámetros
     * @return $data JSON con los resultados de la petición a la api
     */

    public function ejecutarCurl()
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, self::API_URL);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $data = curl_exec($curl);
        curl_close($curl);

        return $data;
    }
}