<?php
namespace app\forms;

use std, gui, framework, app;
use action\Element; 


class ui_change_resolution extends AbstractForm
{




    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {    
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2

        $this->form('MainForm')->width = 1600;
        $this->form('MainForm')->height = 904;
        $this->form('MainForm')->button->x = 8;
        $this->form('MainForm')->button->y = 848;
        $this->form('MainForm')->button->width = 1584;
        $this->form('MainForm')->image4->x = 760;
        $this->form('MainForm')->image4->y = 856;
        $this->form('MainForm')->image6->x = 1512;
        $this->form('MainForm')->image6->y = 848;
        // time wnd;
        $this->form('MainForm')->label->x = 1541;
        $this->form('MainForm')->label->y = 852;
        // start_menu and time_widget;
        $this->form('MainForm')->fragmentAlt->x = 584;
        $this->form('MainForm')->fragmentAlt->y = 512;
        $this->form('MainForm')->fragment3->x = 1256;
        $this->form('MainForm')->fragment3->y = 528;
        // user label;
        $this->form('MainForm')->label3->x = 616;
        $this->form('MainForm')->label3->y = 800;
        // time_new_wnd;
        $this->form('MainForm')->label16->x = 1512;
        $this->form('MainForm')->label16->y = 872;
        // watermark (x,y);
        $this->form('MainForm')->watermark_label->x = 1373; //13.10.2022 : кривой размер
        $this->form('MainForm')->watermark_label->y = 816;
        //wallpaper
        $this->form('MainForm')->image->width = 1600;
        $this->form('MainForm')->image12->width = 1600;
        $this->form('MainForm')->image13->width = 1600;
        $this->form('MainForm')->image34->width = 1600;
        $this->form('MainForm')->image->height = 904;
        $this->form('MainForm')->image12->height = 904;
        $this->form('MainForm')->image13->height = 904;
        $this->form('MainForm')->image34->height = 904;
    }

    /**
     * @event button4.click-Left 
     */
    function doButton4ClickLeft(UXMouseEvent $e = null)
    {
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        $this->form('MainForm')->width = 1920;
        $this->form('MainForm')->height = 1032;
        $this->form('MainForm')->button->x = 8;
        $this->form('MainForm')->button->y = 976;
        $this->form('MainForm')->button->width = 1904;
        // start button
        $this->form('MainForm')->image4->x = 944;
        $this->form('MainForm')->image4->y = 984;
        //frame
        $this->form('MainForm')->image6->x = 1832;
        $this->form('MainForm')->image6->y = 976;
        // time wnd;
        $this->form('MainForm')->label->x = 1861;
        $this->form('MainForm')->label->y = 980;
        // start_menu and time_widget;
        $this->form('MainForm')->fragmentAlt->x = 744;
        $this->form('MainForm')->fragmentAlt->y = 640;
        $this->form('MainForm')->fragment3->x = 1576;
        $this->form('MainForm')->fragment3->y = 656;
        // user label;
        $this->form('MainForm')->label3->x = 776;
        $this->form('MainForm')->label3->y = 928;
        // time_new_wnd;
        $this->form('MainForm')->label16->x = 1832;
        $this->form('MainForm')->label16->y = 1000;
        // watermark (x,y);
        $this->form('MainForm')->watermark_label->x = 1688;
        $this->form('MainForm')->watermark_label->y = 944;
        //wallpaper
        $this->form('MainForm')->image->width = 1920;
        $this->form('MainForm')->image12->width = 1920;
        $this->form('MainForm')->image13->width = 1920;
        $this->form('MainForm')->image34->width = 1920;
        $this->form('MainForm')->image->height = 1032;
        $this->form('MainForm')->image12->height = 1032;
        $this->form('MainForm')->image13->height = 1032;
        $this->form('MainForm')->image34->height = 1032;
    }

}
