<?php // $Id: desktop.cnr.php 
/**
 * %TITLE FORM MODULE% for DaVinci
 *
 * @version     MODULE_CODE 2.4.2 - DaVinci 1.9
 * @copyright   2020 CENCADE
 * @license     http://www.gnu.org/copyleft/gpl.html (GPL) GENERAL PUBLIC LICENSE
 * @package     MODULE_CODE
 * @author      DEVELOPER NAME <developer email>
 */

class MODULE_CODE_Portlet extends UserDesktopPortlet
{
    public function __construct()
    {
        //FromKernel::uses('path.lib');
        $this->name         = 'Module Title';
        $this->description  = 'Module Description';
        $this->label        = 'MODULE_CODE_Portlet';
        $this->idElement    = 'MODULE_CODE';
    }
    
    public function renderContent()
    {
    
    }
    
    public function renderTitle()
    {
        return get_lang( $this->name );
    }
}