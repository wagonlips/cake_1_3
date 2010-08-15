<?php
/* /app/views/helpers/hello.php */
class HelloHelper extends AppHelper {
  function sayHello($name) {
    return $this->output(
      "<p class=\"helloP\">
      Hello there, $name!
      </p>"
    );
  }
}
?>
