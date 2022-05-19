<?php

class Header{
    private $title;
    private $customCSS;

    public function __construct($title,$customCSS) {
        $this->title = $title;
        $this->customCSS = $customCSS;
    }

    public function output(){
        $customCSSLink = "";

        if($this->customCSS !== ""){
            $customCSSLink = "<link rel='stylesheet' href='assets/css/".$this->customCSS."' />";
        }
        
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta http-equiv='X-UA-Compatible' content='ie=edge'>
            <title>".$this->title."</title>
        
            <!-- Website icon -->
            <link rel='icon' href='assets/images/icon.png' />
        
            <!-- Semantic ui -->
            <link rel='stylesheet' href='assets/css/semantic.min.css' />
        
            <!-- Navbar -->
            <link rel='stylesheet' href='assets/css/nav.css'>

            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>

            <!-- Footer -->
            <link rel='stylesheet' href='assets/css/footer.css'>"

            .$customCSSLink."
        
        </head>";
    }
}


  