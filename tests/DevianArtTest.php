<?php
class DevianArtTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.deviantart.com/art/Misty-510056679');

        $this->assertEquals($info->title, 'Misty');
        $this->assertEquals($info->description, 'Face Book llOnline Store ll Tumblr ll Help support me on Patreon and get special perks<3llArtstation I used to watch pokemon when I was younger, and it was  the one...');
        $this->assertEquals($info->imageWidth, 695);
        $this->assertEquals($info->imageHeight, 900);
        $this->assertEquals($info->type, 'photo');

        $this->assertInstanceOf('Embed\\Providers\\OEmbed', $info->getProvider('oembed'));
        $this->assertEquals('DeviantArt', $info->getProvider('oembed')->getProviderName());
    }

    public function testTwo()
    {
        $info = Embed\Embed::create('http://pachunka.deviantart.com/art/Cope-145564099');

        $this->assertEquals($info->title, 'Cope');
        $this->assertEquals($info->description, '$randomduck for president, 2012. There may or may not be some irony surrounding this image.');
        $this->assertEquals($info->imageWidth, 448);
        $this->assertEquals($info->imageHeight, 672);
        $this->assertEquals($info->type, 'photo');
        $this->assertEquals($info->authorName, 'Pachunka');

        $this->assertInstanceOf('Embed\\Providers\\OEmbed', $info->getProvider('oembed'));
        $this->assertEquals('DeviantArt', $info->getProvider('oembed')->getProviderName());
    }
}
