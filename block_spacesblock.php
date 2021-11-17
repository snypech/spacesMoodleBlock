<?php
class block_spacesblock extends block_base {
    public function init() {
        $this->title = get_string('spacesBlock', 'block_spacesblock');
    }
    // The PHP tag and the curly bracket for the class definition 
    public function get_content() {
        global $USER;
        if ($this->content !== null) {
          return $this->content;
        }
    
        $this->content         =  new stdClass;
        $this->content->text   = "block: {$USER->username}";
        $this->content->footer = 'footer';
     
        return $this->content;
    }
    // will only be closed after there is another function added in the next section.
}