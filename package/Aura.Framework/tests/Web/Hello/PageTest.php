<?php
namespace Aura\Framework\Web\Hello;
use Aura\Signal\Manager as SignalManager;
use Aura\Signal\HandlerFactory;
use Aura\Signal\ResultFactory;
use Aura\Signal\ResultCollection;
use Aura\Web\Context;
use Aura\Web\ResponseTransfer;

/**
 * Test class for Page.
 * Generated by PHPUnit on 2011-05-27 at 11:01:03.
 */
class PageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Page
     */
    protected $page;

    protected function newPage($params = array())
    {
        return new Page(
            new Context($GLOBALS),
            new SignalManager(new HandlerFactory, new ResultFactory, new ResultCollection),
            new ResponseTransfer,
            $params
        );
    }
    
    /**
     * @todo Implement testActionIndex().
     */
    public function testActionWorld()
    {
        $page = $this->newPage(array(
            'action' => 'world',
        ));
        $xfer = $page->exec();
        
        $this->assertType('Aura\Web\ResponseTransfer', $xfer);
        $this->assertSame(200, $xfer->getStatusCode());
        $this->assertSame('world', $xfer->getView());
    }
    
    public function testActionAsset()
    {
        $page = $this->newPage(array(
            'action' => 'asset',
        ));
        $xfer = $page->exec();
        
        $this->assertType('Aura\Web\ResponseTransfer', $xfer);
        $this->assertSame(200, $xfer->getStatusCode());
        $this->assertSame('asset', $xfer->getView());
    }
}
