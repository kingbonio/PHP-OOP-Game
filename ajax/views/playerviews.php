<?php

class playerView2{

  private $model;

  private function __construct($model){
    $this->model = $model;
  }

/*
Prints $html to page
*/
  private function output($html){
    echo $html;
  }


/*
Collects player data into an html div and paragraph set
Calls output function with html
*/
  public function showPlayer($playerData){

    $html = '<div class="player-div">'
            .'<p>' . $playerData["name"] . '</p>'
            .'<p>' . $playerData["race"] . '</p>'
            .'<p>' . $playerData["strength"] . '</p>'
            .'<p>' . $playerData["dexterity"] . '</p>'
            .'<p>' . $playerData["intelligence"] . '</p>'
            .'<p>' . $playerData["wisdom"] . '</p>'
            .'<p>' . $playerData["charisma"] . '</p>'
            .'</div>';

    $this->output($html);

  }
}

?>
