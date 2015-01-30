<?php

class block_userreport extends block_base {
    public function init() {
        if(is_siteadmin()){
            $this->title = get_string('userreport', 'block_userreport');
        } else {
            return;
        }
    }
    
    public function get_content() {
        global $DB, $USER, $CFG ,$COURSE;
        $course = $this->page->course;
        $context = get_context_instance(CONTEXT_COURSE, $course->id);
        if (!has_capability('block/userreport:addinstance', $context)) {
            return;
        }
		
			$phpversion = phpversion();
			$version = $CFG->release;
			$username = $USER->username;
			$firstname = $USER->firstname;
			$lastname = $USER->lastname;
			$city = $USER->city;
			$country = $USER->country;
			$picnum = $USER->picture;
			$displaypicimgpath = "{$CFG->wwwroot}".'/pluginfile.php/5/user/icon/ilearn/f1?rev="'.$picnum.'"';
			$displaypic = '<img src="'.$displaypicimgpath.'" heigh="50" width="50"/>';
			$userauth = $USER->auth;
		
   
            if ($this->content !== null) {
                return $this->content;
            }
            $this->content         =  new stdClass;
			$this->content->text .= $displaypic. '<br />';
            $this->content->text .= 'PHP Version: ' .$phpversion. '<br />';  
			$this->content->text .= 'Moodle Version: ' .$version. '<br />'; 
			$this->content->text .= 'Logged in User Username: ' .$username. '<br />'; 
			$this->content->text .= 'Logged in User Firstname: ' .$firstname. '<br />'; 
			$this->content->text .= 'Logged in User Lastname: ' .$lastname. '<br />';
			$this->content->text .= 'Logged in User City: ' .$city. '<br />';
			$this->content->text .= 'Logged in User Country: ' .$country. '<br />';
			$this->content->text .= 'Logged in User Authentication: ' .$userauth. '<br />';

            return $this->content;
         }
  
    /**
     * Where to add the block
     *
     * @return boolean
     **/
    public function applicable_formats() {
        return array('site' => true);
    }
    
    /**
     * More than one instance per page?
     *
     * @return boolean
     **/
    function instance_allow_multiple() {
      return false;
    } 
}
