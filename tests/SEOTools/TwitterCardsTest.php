<?php

namespace Artesaos\SEOTools\Tests;

use Artesaos\SEOTools\TwitterCards;

/**
 * Class TwitterCardsTest.
 */
class TwitterCardsTest extends BaseTest
{
    /**
     * @var TwitterCards
     */
    protected $twitterCards;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();

        $this->twitterCards = $this->app->make('seotools.twitter');
    }

    public function test_set_title()
    {
        $this->twitterCards->setTitle('Kamehamehaaaaaaaa');

        $expected = '<meta name="twitter:title" content="Kamehamehaaaaaaaa" />';

        $this->assertEquals($expected, $this->twitterCards->generate());
    }

    public function test_set_site()
    {
        $this->twitterCards->setSite('http://kakaroto.9000');

        $expected = '<meta name="twitter:site" content="http://kakaroto.9000" />';

        $this->assertEquals($expected, $this->twitterCards->generate());
    }

    public function test_set_url()
    {
        $this->twitterCards->setUrl('http://kakaroto.9000');

        $expected = '<meta name="twitter:url" content="http://kakaroto.9000" />';

        $this->assertEquals($expected, $this->twitterCards->generate());
    }

    public function test_set_description()
    {
        $this->twitterCards->setDescription('Kamehamehaaaaaaaa');

        $expected = '<meta name="twitter:description" content="Kamehamehaaaaaaaa" />';

        $this->assertEquals($expected, $this->twitterCards->generate());
    }

    public function test_set_type()
    {
        $this->twitterCards->setType('sayajin');

        $expected = '<meta name="twitter:type" content="sayajin" />';

        $this->assertEquals($expected, $this->twitterCards->generate());
    }

    public function test_set_image()
    {
        $this->twitterCards->setImages(['sayajin.png', 'namekusei.png']);

        $expected = "<meta name=\"twitter:images0\" content=\"sayajin.png\" />";
        $expected .= PHP_EOL;
        $expected .= "<meta name=\"twitter:images1\" content=\"namekusei.png\" />";

        $this->assertEquals($expected, $this->twitterCards->generate());
    }
}
