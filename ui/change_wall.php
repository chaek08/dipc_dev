<?php
namespace app\forms;

use std, gui, framework, app;


class change_wall extends AbstractForm
{










    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        $this->form('MainForm')->img_01->hide();
        $this->button->enabled = false;
        $this->buttonAlt->enabled = true;
        $this->button3->enabled = false;
        $this->button6->enabled = false;
    }

    /**
     * @event button3.click-Left 
     */
    function doButton3ClickLeft(UXMouseEvent $e = null)
    {
        $this->form('MainForm')->img_01->hide();
        $this->form('MainForm')->img_02->hide();
        $this->button->enabled = false;
        $this->button4->enabled = true;
        $e->sender->enabled = false;
        $this->button6->enabled = false;
    }

    /**
     * @event button6.click-Left 
     */
    function doButton6ClickLeft(UXMouseEvent $e = null)
    {
        $this->form('MainForm')->img_01->hide();
        $this->form('MainForm')->img_02->hide();
        $e->sender->enabled = false;
        $this->form('MainForm')->img_03->hide();
        $this->button->enabled = false;
        $this->button3->enabled = false;
        $this->button5->enabled = true;
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {
        $this->form('MainForm')->img_01->show();
        $this->button->enabled = true;
        $this->button3->enabled = true;
        $e->sender->enabled = false;
        $this->button6->enabled = true;
    }

    /**
     * @event button4.click-Left 
     */
    function doButton4ClickLeft(UXMouseEvent $e = null)
    {
        $this->form('MainForm')->img_01->show();
        $this->form('MainForm')->img_02->show();
        $this->button->enabled = true;
        $this->button3->enabled = true;
        $e->sender->enabled = false;
        $this->button6->enabled = true;
    }

    /**
     * @event button5.click-Left 
     */
    function doButton5ClickLeft(UXMouseEvent $e = null)
    {
        $this->form('MainForm')->img_01->show();
        $this->form('MainForm')->img_02->show();
        $this->button->enabled = true;
        $this->button3->enabled = true;
        $e->sender->enabled = false;
        $this->form('MainForm')->img_03->show();
        $this->button6->enabled = true;
    }



}
