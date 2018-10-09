<?php
require 'vendor/autoload.php';

class SingleTest extends BrowserStackTest {

    public function testGoogle() {
        self::$driver->get("https://test-it.drupal.gwu.edu");
        $element = self::$driver->findElement(WebDriverBy::name("search_keys"));
        $element->sendKeys("Hello");
        $element->submit();
        self::$driver->wait(10, 500)->until(function($driver) {
          $elements = $driver->findElements(WebDriverBy::id("resultStats"));
          return count($elements) > 0;
        });
        $this->assertEquals('BrowserStack - Google Search', self::$driver->getTitle());
    }

}
?>
