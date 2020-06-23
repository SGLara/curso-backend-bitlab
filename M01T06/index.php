<?php

class Blog
{
    public $comments = 0;
    public function postNews(string $message/* string $author*/)
    {
        $news = $message;
        $author = $this->name;
        // $author = $author;
        echo "<b>Nuevo Post:</b><br> $news.<br><br><i>Escrito por: $author</i>";
    }

    public function postReview(string $message/*, string $author*/)
    {
        $post = $message;
        $author = $this->name;
        // $author = $author;
        echo "<b>Nueva Reseña:</b><br>$post(<b> Reseña de:  </b><i> {$this->title})</i><br><br><i>Escrito por: $author</i>";
    }

    public function postComment(string $message/* string $author*/)
    {
        global $comments;
        $post = $message;
        $author = $this->name;
        // $author = $author;
        echo "<b>Nuevo Comentario:</b><br>$post<br><br><i>Escrito por: $author</i>";
        $comments++;
    }
    //NO ME FUNCIONA PARA CONTAR LOS COMENTARIOS: NI AQUI ↑, NI ACÁ ↓
    public function totalComments()
    {
        echo "El total de comentarios de reseñas y noticias es: {$this->comments}";
    }
}

class Movies extends Blog
{
    public $title = 'Sin titulo! Asigne un titulo porfavor';
    public $review = '';
    public $author = '';
    public $characters = [];
}

class Series extends Movies
{
    public $season = '';
    public $chapter = '';
}

class Person extends Blog
{
    public $name = '';
    public $job = '';
    public $birthday = '';
}

$steven = new Person();
$steven->name = "Steven Lara";
$steven->title = "Batman el caballero de la noche";
$steven->postReview("Esta pelicula es sobre Bruno Dias, un hombre que quiere salvar la ciudad y que pronto se convertirá en Batman");
echo "<hr>";

$lucifer = new Person();
$lucifer->name = "Franciso Torres";
$lucifer->title = "Lucifer";
$lucifer->season = "temporada 5";
$lucifer->characters = ['Tom Ellis', 'Angelina Jolie', 'Steven Lara', 'Augusto Palacios'];
$lucifer->postNews("Se dice que habrá una nueva temporada de la famosa serie <b>{$lucifer->title}</b> interpretado por los actores " . (implode(", ", $lucifer->characters)) . ". La cuál será la <b>{$lucifer->season}</b>");
echo "<hr>";

echo "Los cumpleaños de los personajes son: <br><br>";
for ($i = 0; $i < count($lucifer->characters); $i++) {
    $date = mt_rand(1, 30);
    $month = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    $monthRandom = mt_rand(0, (count($month) - 1));
    $person = new Person();
    $person->name = $lucifer->characters[$i];
    $person->birthday = $date;
    echo "-{$person->name} cumple el {$person->birthday} de {$month[$monthRandom]} <br>";
}

echo "<hr>";
$carlos = new Person();
$carlos->name = "Carlos Lemus";
$carlos->postComment("Me gusta mucho tu trabajo Steven, espero que a tu teacher también, ¡SUERTE!");

echo "<hr>";

$blog = new Blog();
$steven = new Person;
$steven->name = "SGLaravel";
$steven->postComment("En serio que me encantan tus publicaciones amigo! ♥.");
echo "<hr>";
$blog->totalComments();
