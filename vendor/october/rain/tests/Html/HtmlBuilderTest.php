<?php

use October\Rain\Html\HtmlBuilder;

class HtmlBuilderTest extends TestCase
{
    public function testStrip()
    {
        $result = with(new HtmlBuilder)->strip('<p>hello</p>');
        $this->assertEquals('hello', $result);
    }

    public function testLimit()
    {
        $result = with(new HtmlBuilder)->limit('<p>The quick brown fox jumped over the lazy dog</p>', 10);
        $this->assertEquals('<p>The quick ...</p>', $result);

        $result = with(new HtmlBuilder)->limit('<p>The quick brown fox jumped over the lazy dog</p>', 20, '!!!');
        $this->assertEquals('<p>The quick brown fox !!!</p>', $result);
    }

    public function testClean()
    {
        $result = with(new HtmlBuilder)->clean('<script>window.location = "http://google.com"</script>');
        $this->assertEquals('window.location = "http://google.com"', $result);

        $result = with(new HtmlBuilder)->clean('<span style="width: expression(alert(\'Ping!\'));"></span>');
        $this->assertEquals('<span ></span>', $result);

        $result = with(new HtmlBuilder)->clean('<a href="javascript: alert(\'Ping!\');">Test</a>');
        $this->assertEquals('<a href="nojavascript... alert(\'Ping!\');">Test</a>', $result);

        $result = with(new HtmlBuilder)->clean('<a href=" &#14;  javascript: alert(\'Ping!\');">Test</a>');
        $this->assertEquals('<a href="nojavascript... alert(\'Ping!\');">Test</a>', $result);

        $result = with(new HtmlBuilder)->clean('<a href=" &#14  javascript: alert(\'Ping!\');">Test</a>');
        $this->assertEquals('<a href="nojavascript... alert(\'Ping!\');">Test</a>', $result);

        $result = with(new HtmlBuilder)->clean('<a href=" &#14;;  javascript: alert(\'Ping!\');">Test</a>');
        $this->assertEquals('<a href="nojavascript... alert(\'Ping!\');">Test</a>', $result);
    }
}