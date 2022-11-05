<?php
namespace app\forms;

use std, gui, framework, app;


class paint extends AbstractForm
{









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

    /**
     * @event canvas.mouseDown 
     */
    function doCanvasMouseDown(UXMouseEvent $e = null)
    {
        $this->canvas->gc()->beginPath();
        
        $this->canvas->gc()->moveTo($e->x, $e->y);
    }

    /**
     * @event canvas.mouseUp 
     */
    function doCanvasMouseUp(UXMouseEvent $e = null)
    {
        $this->canvas->gc()->lineTo($e->x, $e->y);
        
        $this->canvas->gc()->stroke();
    }

    /**
     * @event canvas.mouseDrag 
     */
    function doCanvasMouseDrag(UXMouseEvent $e = null)
    {
        $this->canvas->gc()->lineTo($e->x, $e->y);
        
        $this->canvas->gc()->stroke();        
    }





    /**
     * @event colorPicker.action 
     */
    function doColorPickerAction(UXEvent $e = null)
    {    
                $this->canvas->gc()->strokeColor = $e->sender->value->getWebValue(); 
    }



    /**
     * @event comboboxAlt.action 
     */
    function doComboboxAltAction(UXEvent $e = null)
    {    
                $this->canvas->gc()->lineWidth = $e->sender->value;
    }



    /**
     * @event button5.click-Left 
     */
    function doButton5ClickLeft(UXMouseEvent $e = null)
    {    
                $this->canvas->gc()->clearRect(0, 0, $this->canvas->width, $this->canvas->height); 
    }

    /**
     * @event button4.click-Left 
     */
    function doButton4ClickLeft(UXMouseEvent $e = null)
    {
                $rand = str::random(5, 'ABCDFE123'); 
        
        $this->canvas->save('image_'. $rand . '.png');
    }

    /**
     * @event button3.click-Left 
     */
    function doButton3ClickLeft(UXMouseEvent $e = null)
    {

    }

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {
                $rand = str::random(5, 'ABCDFE123'); 
        
        $this->canvas->save('image_'. $rand . '.png');
    }





}
