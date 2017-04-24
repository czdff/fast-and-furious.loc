<?php

class ControllerAdmin extends Controller
{
    private $filmModel;

    private $actorModel;

    private $mainModel;

    function __construct()
    {
        parent::__construct();
        $this->model = new ModelAdmin();
        $this->filmModel = new ModelFilms();
        $this->actorModel = new ModelActors();
        $this->mainModel = new ModelMain();
    }

    public function actionIndex()
    {
        $data = $this->mainModel->get_data();
        $this->view->generate('main.php', 'admin/layout.php', $data, 'Admin Main');
    }

    public function actionLoadImage()
    {
        $data = null;

        if ($_FILES) {
            $image = $_FILES['image'];
            if($this->model->save_photo($image)) {
                $data['msg'] = 'File upload';
            }
        }

        $this->view->generate('loadimage.php', 'admin/layout.php', $data, 'Edit Main Page');
    }

    public function actionEditMainPage()
    {
        if (isset($_POST['save'])) {
            $id = filter_input(INPUT_POST, 'id');
            $title = filter_input(INPUT_POST, 'title');
            $html = filter_input(INPUT_POST, 'html');
            if ($id && $title && $html) {
                if ($this->model->updateMainPage($id, $title, $html)) {
                    $data['msg'] = 'Update';
                }
            }
        }

        $data['data'] = $this->mainModel->get_data();
        $this->view->generate('edit.php', 'admin/layout.php', $data, 'Edit Main Page');
    }

    public function actionFilms()
    {
        if ($_POST) {
            $id = filter_input(INPUT_POST, 'id');
            $title = filter_input(INPUT_POST, 'title');
            $year = filter_input(INPUT_POST, 'year');
            $description = filter_input(INPUT_POST, 'description');
            $photoUrl = filter_input(INPUT_POST, 'photo-url');
        }

        $data= $this->filmModel->get_data();
        $this->view->generate('films/index.php', 'admin/layout.php', $data, 'Films');
    }

    public function actionEditFilms()
    {
        $id = $_GET['id'];
        // Load model
        $data['model'] = $this->filmModel->get_film_by_id($id);
        // Load Images
        $data['select'] = $this->model->loadImage();

        $this->view->generate('films/edit.php', 'admin/layout.php', $data, 'Edit Films');
    }

    public function actionDeleteFilms()
    {
        echo "Edit films";
    }

    public function actionActors()
    {
        echo "actors";
    }

    public function actionEditActors()
    {
        echo "Edit actors";
    }

    public function actionDeleteActors()
    {
        echo "Edit actors";
    }

    public function actionAddFilm()
    {
        $data = null;
//        var_dump($_SERVER);
        if ($_POST) {

            $data['title'] = filter_input(INPUT_POST, 'title');
            $data['year'] = filter_input(INPUT_POST, 'year');
            $data['description'] = filter_input(INPUT_POST, 'description');
            $data['photo'] = filter_input(INPUT_POST, 'photo');

            // Проверка введенных данных
            $data['message'] = $this->model->validate_film($data['title'], $data['year'], $data['description'], $data['photo']);

            if (count($data['message']) == 0) {
                // Сохранение фото в папку
                if ($this->model->save_photo($data['photo'])) {
                    $data['photo'] = DIRECTORY_SEPARATOR . IMAGE_PATH . DIRECTORY_SEPARATOR . $data['photo']['name'];
                    // Сохранение записи в БД
                    $id = $this->model->save_films($data['title'], $data['year'], $data['description'], $data['photo']);
                }
            }
        }

        $data['select'] = $this->model->loadImage();

        $this->view->generate('films/edit.php', 'admin/layout.php', $data, 'Add Film');
    }

    public function actionAddActor()
    {

    }

}