<?php

namespace Tests\Unit;

use Tests\TestCase;
use TruckersMP\Collections\ServerCollection;
use TruckersMP\Models\Server;

class ServerTest extends TestCase
{
    /**
     * @throws \Http\Client\Exception
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testWeCanGetAllServers()
    {
        $servers = $this->servers();

        $this->assertInstanceOf(ServerCollection::class, $servers);
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testWeCanGetASpecificServer()
    {
        $servers = $this->servers();

        if (count($servers->getServers()) > 0) {
            $server = $servers->getServers()[0];

            $this->assertInstanceOf(Server::class, $server);
        } else {
            $this->assertCount(0, $servers->getServers());
        }
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasAnId()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsInt($server->getId());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasAGame()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsString($server->getGame());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasAnIp()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsString($server->getIp());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasAPort()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsInt($server->getPort());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasAName()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsString($server->getName());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasAShortName()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsString($server->getShortName());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasAnIdPrefix()
    {
        $server = $this->servers()->getServers()[0];

        if ($server->getIdPrefix() != null) {
            $this->assertIsString($server->getIdPrefix());
        } else {
            $this->assertNull($server->getIdPrefix());
        }
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasAnOnlineState()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsBool($server->isOnline());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasPlayers()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsInt($server->getPlayers());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasAQueue()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsInt($server->getQueue());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasMaxPlayers()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsInt($server->getMaxPlayers());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasADisplayOrder()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsInt($server->getDisplayOrder());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasASpeedLimit()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsBool($server->hasSpeedLimit());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasCollisions()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsBool($server->hasCollisions());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasCarsForPlayers()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsBool($server->canPlayersHaveCars());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasPoliceCarsForPlayers()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsBool($server->canPlayersHavePoliceCars());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasAfkEnable()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsBool($server->isAfkEnabled());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasAnEvent()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsBool($server->isEvent());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasASpecialEvent()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsBool($server->isSpecialEvent());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasPromods()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsBool($server->hasPromods());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \TruckersMP\Exceptions\IndexNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasSyncDelay()
    {
        $server = $this->servers()->getServers()[0];

        $this->assertIsBool($server->hasSyncDelay());
    }
}
