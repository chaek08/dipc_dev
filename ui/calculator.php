<?php
namespace app\forms;

use std, gui, framework, app;


class calculator extends AbstractForm
{

    /**
     * @event button9.click-Left 
     */
    function doButton9ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event buttonClear.click-Left 
     */
    function doButtonClearClickLeft(UXMouseEvent $event = null)
    {    
        global $operation;
        $operation = false;
        $this->edit->text = "";
    }

    /**
     * @event buttonSplit.click-Left 
     */
    function doButtonSplitClickLeft(UXMouseEvent $event = null)
    {    
        global $operation;
        if (!$operation){
            $this->edit->text .= $event->sender->text;
            $operation = $event->sender->text;
        }
    }

    /**
     * @event button7.click-Left 
     */
    function doButton7ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event button8.click-Left 
     */
    function doButton8ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event buttonMult.click-Left 
     */
    function doButtonMultClickLeft(UXMouseEvent $event = null)
    {    
        global $operation;
        if (!$operation){
            $this->edit->text .= $event->sender->text;
            $operation = $event->sender->text;
        }
    }

    /**
     * @event button4.click-Left 
     */
    function doButton4ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event button5.click-Left 
     */
    function doButton5ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event button6.click-Left 
     */
    function doButton6ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event buttonMin.click-Left 
     */
    function doButtonMinClickLeft(UXMouseEvent $event = null)
    {    
        global $operation;
        if (!$operation){
            $this->edit->text .= $event->sender->text;
            $operation = $event->sender->text;
        }
    }

    /**
     * @event buttonPlus.click-Left 
     */
    function doButtonPlusClickLeft(UXMouseEvent $event = null)
    {    
        global $operation;
        if (!$operation){
            $this->edit->text .= $event->sender->text;
            $operation = $event->sender->text;
        }
    }

    /**
     * @event button3.click-Left 
     */
    function doButton3ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event button2.click-Left 
     */
    function doButton2ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event button1.click-Left 
     */
    function doButton1ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event button0.click-Left 
     */
    function doButton0ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }


    /**
     * @event buttonResult.click-Left 
     */
    function doButtonResultClickLeft(UXMouseEvent $event = null)
    {    

        global $operation;
        if ($operation){ 
            $numbers = explode($operation, $this->edit->text);
            switch ($operation){ 
                case "+":
                    $result = $numbers[0] + $numbers[1];
                break;
                case "-":
                    $result = $numbers[0] - $numbers[1];
                break;
                case "×":
                    $result = $numbers[0] * $numbers[1];
                break;
                case "÷":
                    $result = $numbers[0] / $numbers[1];
                break;
            }
            $this->edit->text = $result;
            $operation = false;
        }
 
    }


    /**
     * @event imageAlt.click 
     */
    function doImageAltClick(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event image3.click 
     */
    function doImage3Click(UXMouseEvent $e = null)
    {    
        
    }














































}
