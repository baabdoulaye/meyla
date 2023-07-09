<?php
include_once('model/filmsModel.php');
include_once('controller/filmsController.php');

use PHPUnit\Framework\TestCase;

class FilmsControllerTest extends TestCase
{
    public function testAjoutFilm()
    {
        $controller = new FilmsController();

        // Set up the necessary input values for the test
        $_POST['nom'] = 'Example Film';
        $_POST['film'] = 'http://example.com/film.mp4';
        $_POST['photos'] = 'http://example.com/film.jpg';
        $_POST['text'] = 'Description of the film';

        // Perform the test
        $result = $controller->ajoutFilm();

        // Assert that the film was added successfully
        $this->assertTrue($result);
    }
}
