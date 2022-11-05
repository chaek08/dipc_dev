<?php
namespace app\forms;

use std, gui, framework, app;


class browser extends AbstractForm
{

    /**
     * @event image3.click 
     */
    function doImage3Click(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event imageAlt.click 
     */
    function doImageAltClick(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event browser.fail 
     */
    function doBrowserFail(UXEvent $e = null)
    {    
        
    }

    /**
     * @event browser.load 
     */
    function doBrowserLoad(UXEvent $e = null)
    {    
        
    }

    /**
     * @event browser.running 
     */
    function doBrowserRunning(UXEvent $e = null)
    {    
        
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {    
        $this->browser->url = "https://google.com/";
    }









}
