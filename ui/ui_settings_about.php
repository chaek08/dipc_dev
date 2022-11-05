<?php
namespace app\forms;

use std, gui, framework, app;


class ui_settings_about extends AbstractForm
{

    /**
     * @event version_st.click 
     */
    function doVersion_stClick(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        //$this->toast('apr 4 2022');
    }

    /**
     * @event developer_st.click 
     */
    function doDeveloper_stClick(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        //$this->toast('apr 4 2022');
    }

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        
    }


}
