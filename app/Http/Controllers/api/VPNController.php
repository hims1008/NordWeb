<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\VPNServer;

class VPNController extends Controller
{
    function allVPNServer()
    {
        return $this->printJson("Managed to get a vpn server", true,  VPNServer::orderBy("status")->get());
    }
    function allVPNFreeServer()
    {
        return $this->printJson("Managed to get a free vpn server", true,  VPNServer::where("status", 0)->get());
    }
    function allVPNProServer()
    {
        return $this->printJson("Managed to get a pro vpn server", true,  VPNServer::where("status", 1)->get());
    }

    function detailVpn($id)
    {
        $vpnServer = VPNServer::where("slug", $id)->get()->first();
        if ($vpnServer == null) return $this->printJson("VPN tidak valid");
        $result = $vpnServer->toArray();
        $result["username"] = $vpnServer->username;
        $result["password"] = $vpnServer->password;
        $result["config"] = $vpnServer->config;


        return $this->printJson("Managed to get VPN details", true,  $result);
    }

    function randomVpn()
    {
        $vpnServer = VPNServer::all()->random();
        if ($vpnServer == null) return $this->printJson("There is no vpn to display");
        $result = $vpnServer->toArray();
        $result["username"] = $vpnServer->username;
        $result["password"] = $vpnServer->password;
        $result["config"] = $vpnServer->config;
        return $this->printJson("Managed to get random VPN", true,  $result);
    }
}
