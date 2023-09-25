<?php

class FuncaoController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function funcao()
    {
        $data['page_id'] = 3;
        $data['page_tag'] = "Função - Manolo Bakes";
        $data['page_title'] = "Função";
        $data['page_name'] = "Função";
        $this->views->getView($this, "funcao", $data);
    }
}