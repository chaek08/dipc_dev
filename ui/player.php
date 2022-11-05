<?php
namespace app\forms;

use std, gui, framework, app;


class player extends AbstractForm
{

    /**
     * @event open.click-Left 
     */
    function doOpenClickLeft(UXMouseEvent $event = null)
    {    
        global $files; 

        $this->muzlist->items->clear();
        
        if ($files = $this->FileChooser->showOpenMultipleDialog()) {

            foreach ($files as $file) $this->muzlist->items->add($file->getName());

        } 
        
    }

    /**
     * @event play.click-Left 
     */
    function doPlayClickLeft(UXMouseEvent $event = null)
    {    
          global $files;
              
         $this->player->open($files[$this->muzlist->focusedIndex]);

           $this->player->play();
    }

    /**
     * @event pause.click-Left 
     */
    function doPauseClickLeft(UXMouseEvent $event = null)
    {    
         if ($this->player->status == 'PLAYING') {
            
              $this->player->pause();

        } else {

            $this->player->play();  
          }
        
    }

    /**
     * @event stop.click-Left 
     */
    function doStopClickLeft(UXMouseEvent $event = null)
    {    
        if ($this->player->status == 'PLAYING') {
            
              $this->player->stop();

        } 
        
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $event = null)
    {    
               $this->FileChooser = new UXFileChooser();
       
         $this->FileChooser->muzlist = 'UXFileChooser'; 

          $this->FileChooser->padding = [1, 1, 1, 1];
       
         $this->FileChooser->extensionFilters = [
                ['description' => 'MP3 files', 'extensions' => ['*.mp3']],
                ['description' => 'WAV files', 'extensions' => ['*.wav']],
                ['description' => 'AIF files', 'extensions' => ['*.aif']]
            ];

          $this->player = new MediaPlayerScript();  
    }


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
     * @event slider.mouseDrag 
     */
    function doSliderMouseDrag(UXMouseEvent $e = null)
    {    
                        $this->player->volume = $this->slider->value / 100;
    }





}
