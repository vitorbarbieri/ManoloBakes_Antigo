<?php

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $data['page_id'] = 1;
        $data['page_tag'] = "Home - Manolo Bakes";
        $data['page_title'] = "Home";
        $data['page_name'] = "Home";
        $data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quis. Perspiciatis repellat perferendis accusamus, ea natus id omnis, ratione alias quo dolore tempore dicta cum aliquid corrupti enim deserunt voluptas.";
        $this->views->getView($this, "home", $data);
    }
}
