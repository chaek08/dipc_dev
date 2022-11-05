<?php
namespace app\forms;

use php\jsoup\Element;
use std, gui, framework, app;
use action\Element; 


class ui_console extends AbstractForm
{

    /**
     * @event edit.keyUp-Enter 
     */
    function doEditKeyUpEnter(UXKeyEvent $e = null)
    {    
                $command = $this->edit->text;
                
                        switch($command) {
                        
                                         case "exit":
                                        $this->label->text = "exit";
                                        $this->edit->text = "";
                                        app()->shutdown();
                                        break;
                                        
                                        case "clear":
                                        $this->edit->text = "";
                                        $this->label->text = "";
                                        break;
                                        
                                        case "help":
                                        $this->edit->text = "";   
                                        $this->label->text = "> exit  clear  help  version  hide_watermark  show_watermark  ui_error_loading  debug_menu  y_app  z_app  blocking_close settings_old y_app close z_app close  blocking_close  ui_change_user_name";
                                        break;
                                        
                                        case "version":
                                        $this->edit->text = "";   
                                        $this->label->text = "> DiCore build 2982, Oct 18 2022";
                                        break;
                                        
                                        case "hide_watermark":
                                        $this->edit->text = "";   
                                        $this->label->text = "> Вотермарка скрыта..";
                                        $this->form('MainForm')->watermark_label->hide();
                                        break;
                                        
                                        case "show_watermark":
                                        $this->edit->text = "";   
                                        $this->label->text = "> Вотермарка отображена..";
                                        $this->form('MainForm')->watermark_label->show();

                                        break;
                                        
                                        case "ui_error_loading":
                                        $this->edit->text = "";   
                                        $this->label->text = "> Открытие <Ошибка загрузки>";
                                        app()->showForm('error_loading');
                                        break;
                                        
                                        case "y_app":
                                        $this->edit->text = "";   
                                        app()->showForm('y_app');
                                        break;
                                        
                                        case "z_app":
                                        $this->edit->text = "";   
                                        app()->showForm('z_app');
                                        break;
                                        
                                        case "y_app close":
                                        $this->edit->text = "";   
                                        app()->hideForm('y_app');
                                        break;
                                        
                                        case "z_app close":
                                        $this->edit->text = "";   
                                        app()->hideForm('z_app');
                                        break;
                                        
                                        case "blocking_close":
                                        $this->edit->text = "";   
                                        $this->form('MainForm')->fragment->hide();
                                        break;
                                        
                                        case "ui_change_user_name":
                                        $this->edit->text = "";   
                                        $this->label->text = "";
                                        app()->showForm('ui_change_user_name');
                                        break;
                                                 
                                        case "settings_old":
                                        $this->edit->text = "";   
                                        $this->label->text = "";
                                        app()->showForm('settings');
                                        break;
                                                            
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
