<?php

/**
 * The dunno link.
 * 
 * controllers/Guess.php
 *
 * ------------------------------------------------------------------------
 */
class Guess extends Application {

    function __construct() {
        parent::__construct();
    }

    //  Function to generate page passing data from Quotes.php -> first() function.
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(4);
        //$authors = array();
        $authors[] = ['who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where'], 'what' => $source['what']];
        
        $this->data['authors'] = $authors;

        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */