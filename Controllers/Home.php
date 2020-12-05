<?php
//PAGINA PRINCIPAL DEL PROYECTO... 
class Home extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home($params)
    {
        $data["page_id"] = 1;
        $data['tag_page'] = "Home";
        $data['page_tittle'] = "Pagina Principal";
        $data['page_name'] = "home";
        $data["page_content"] = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
         Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.";
        $this->view->getView($this,"home", $data);
    }

    public function insertar()
    {
        $data = $this->model->setUser("Sara", 19);
        print_r($data);
    }

    public function verUsuario($id)
    {
        $data = $this->model->getuser($id);
        print_r($data);
    }

    public function actualizar()
    {
        $data = $this->model->updateUser(1, "Jose", 24);
        print_r($data);
    }

    public function verUsuarios()
    {
        $data = $this->model->getUsers();
        print_r($data);
    }

    public function EliminarUsuario($id)
    {
        $data = $this->model->delUser($id);
        print_r($data);
    }
}
