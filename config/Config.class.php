<?php
    /**
     * Configurações
     * @author Fernando brito @fernandobritofl
     */
    class Config extends Exception
    {
        protected $conf = array(
            'EMAIL'                  => 'email@email.com',
            'TOKEN'                  => 'token de acesso',
            'MOEDA'                  => 'BRL', //BRL (Real)
            'ENDERECO_POS_PAGEMENTO' => 'http://www.url.com.br/finalizar.php'
        );
    }
