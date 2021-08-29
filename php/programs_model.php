<?php
class Programs {
    var $name;
    var $image_url;
    var $destination_link;

    function __construct( $name, $image_url, $destination_link)
    {
        $this->$name = $name;
        $this->$image_url = $image_url;
        $this->$destination_link = $destination_link;
    }
}

$mma_program = array("Mixed Martial Arts (MMA)", "assets/img/programs/MMA_trainings.jpeg", "our_programs.php");
$karate_program = array("Karate", "assets/img/programs/karate_trainings.jpeg", "our_programs.php");
$certification_program = array("Certifications", "assets/img/programs/certificate_program.jpeg", "our_programs.php");
$self_defense_program = array("Self Defense", "assets/img/programs/defense_program.jpeg", "our_programs.php");

$myProgramsArray = array($mma_program, $karate_program, $certification_program, $self_defense_program);

?>