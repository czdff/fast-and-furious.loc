<?php

class ControllerAdmin extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->model = new ModelAdmin();
    }

    public function actionIndex()
    {
        $this->view->generate('admin/main.php', 'layout_admin.php', null, 'Admin Main');
    }

    public function actionFilms()
    {
        echo "films";
    }

    public function actionEditFilms()
    {
        $this->view->generate('films/edit.php', 'layout.php', null, 'hhhhh');
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
        var_dump($_SERVER);
        if ($_POST) {

            $data['title'] = filter_input(INPUT_POST, 'title');
            $data['year'] = filter_input(INPUT_POST, 'year');
            $data['description'] = filter_input(INPUT_POST, 'description');
            $data['photo'] = $_FILES['photo'];

            // Проверка введенных данных
            $data['message'] = $this->model->validate_film($data['title'], $data['year'], $data['description'], $data['photo']);

            if (count($data['message']) == 0) {
                // Сохранение фото в папку
                if ($this->model->save_photo($data['photo'])) {
                    $data['photo'] = DIRECTORY_SEPARATOR . IMAGE_PATH . DIRECTORY_SEPARATOR . $data['photo']['name'];
                    // Сохранение записи в БД
                    $id = $this->model->save_films($data['title'], $data['year'], $data['description'], $data['photo']);
                    var_dump($id);
                } else {
                    $data['message'][] = ['type' => 'error', 'text' => 'Не удалось сохранить файл'];
                }
            }
        }

        $this->view->generate('films/edit.php', 'layout_admin.php', $data, 'Add Film');
    }

    public function actionAddActor()
    {

    }

}