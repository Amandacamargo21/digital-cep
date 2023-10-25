<?php 
namespace Amand\DigitalCep;

class Search 
{
    private $url = "https://viacep.com.br/ws/";

    public function getAdressfromZipcode(string $zipCode): array {
        //com o preg_replace tudo que nao for numero será substituido/removido
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode . "/json");

        return (array) json_decode($get);

    }
}
