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
$muay_thai_program = array("Muay Thai", "assets/img/programs/certificate_program.jpeg", "our_programs.php");
$jiu_jitsu_program = array("Brazilian Jiu Jitsu", "assets/img/programs/defense_program.jpeg", "our_programs.php");
$kyokushin_program = array("Kyokushin Karate", "assets/img/programs/MMA_trainings.jpeg", "our_programs.php");
$kettlebell_program = array("Kettlebell", "assets/img/programs/karate_trainings.jpeg", "our_programs.php");
$kickboxing_program = array("Kickboxing", "assets/img/programs/certificate_program.jpeg", "our_programs.php");
$self_defense_program = array("Self Defense", "assets/img/programs/defense_program.jpeg", "our_programs.php");
$certification_program = array("Certifications", "assets/img/programs/certificate_program.jpeg", "our_programs.php");

$myProgramsArray = array($mma_program, $karate_program, $muay_thai_program,
$jiu_jitsu_program, $kyokushin_program, $kettlebell_program,
$kickboxing_program, $self_defense_program, $certification_program);

?>